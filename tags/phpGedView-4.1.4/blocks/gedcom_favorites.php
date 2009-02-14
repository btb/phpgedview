<?php
/**
 * Gedcom Favorites Block
 *
 * This block prints the active gedcom favorites
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  John Finlay and Others
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * $Id$
 * @package PhpGedView
 * @subpackage Blocks
 */

$PGV_BLOCKS["print_gedcom_favorites"]["name"]     = $pgv_lang["gedcom_favorites_block"];
$PGV_BLOCKS["print_gedcom_favorites"]["descr"]    = "gedcom_favorites_descr";
$PGV_BLOCKS["print_gedcom_favorites"]["canconfig"]= false;
$PGV_BLOCKS["print_gedcom_favorites"]["config"]   = array("cache"=>7);

//-- print gedcom favorites
function print_gedcom_favorites($block = true, $config="", $side, $index) {
	global $pgv_lang, $factarray, $PGV_IMAGE_DIR, $PGV_IMAGES, $GEDCOM, $ctype, $sourcelist, $TEXT_DIRECTION;

	$userfavs = getUserFavorites($GEDCOM);
	if (!is_array($userfavs)) $userfavs = array();

	$id = "gedcom_favorites";
	$title = print_help_link("index_favorites_help", "qm", "", false, true);
	$title .= $pgv_lang["gedcom_favorites"]."&nbsp;&nbsp;";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();
	$title .= "(".count($userfavs).")";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();
	
	$content = "";
	if (count($userfavs)==0) {
		if (userGedcomAdmin()) $content .= print_text("no_favorites",0,1);
		else $content .= print_text("no_gedcom_favorites",0,1);
	} else {
		$content .= "<table width=\"100%\" class=\"$TEXT_DIRECTION\">";
		if ($block) $style = 1;
		else $style = 2;
		foreach($userfavs as $key=>$favorite) {
			if (isset($favorite["id"])) $key=$favorite["id"];
			$removeFavourite = "<a class=\"font9\" href=\"index.php?ctype=$ctype&amp;action=deletefav&amp;fv_id=".$key."\" onclick=\"return confirm('".$pgv_lang["confirm_fav_remove"]."');\">".$pgv_lang["remove"]."</a><br />\n";
			$content .= "<tr><td>";
			if ($favorite["type"]=="URL") {
				$content .= "<div id=\"boxurl".$key.".0\" class=\"person_box\">\n";
				if ($ctype=="user" || userGedcomAdmin()) $content .= $removeFavourite;
				$content .= "<a href=\"".$favorite["url"]."\"><b>".PrintReady($favorite["title"])."</b></a>";
				$content .= "<br />".PrintReady($favorite["note"]);
				$content .= "</div>\n";
			} else {
				if (displayDetailsbyId($favorite["gid"], $favorite["type"])) {
					if ($favorite["type"]=="INDI") {
						$indirec = find_person_record($favorite["gid"]);
						$content .= "<div id=\"box".$favorite["gid"].".0\" class=\"person_box";
						if (preg_match("/1 SEX F/", $indirec)>0) $content .= "F";
						else if (preg_match("/1 SEX M/", $indirec)>0) $content .= "";
						else $content .= "NN";
						$content .= "\">\n";
						if ($ctype=="user" || userGedcomAdmin()) $content .= $removeFavourite;
						ob_start();
						print_pedigree_person($favorite["gid"], $style, 1, $key);
						$content .= ob_get_clean();
						$content .= PrintReady($favorite["note"]);
						$content .= "</div>\n";
					}
					if ($favorite["type"]=="FAM") {
						$content .= "<div id=\"box".$favorite["gid"].".0\" class=\"person_box\">\n";
						if ($ctype=="user" || userGedcomAdmin()) $content .= $removeFavourite;
						ob_start();
						print_list_family($favorite["gid"], array(get_family_descriptor($favorite["gid"]), $favorite["file"]), false, "", false);
						$content .= ob_get_clean();
						$content .= PrintReady($favorite["note"]);
						$content .= "</div>\n";
					}
					if ($favorite["type"]=="SOUR") {
						$content .= "<div id=\"box".$favorite["gid"].".0\" class=\"person_box\">\n";
						if ($ctype=="user" || userGedcomAdmin()) $content .= $removeFavourite;
						ob_start();
						print_list_source($favorite["gid"], $sourcelist[$favorite["gid"]], false);
						$content .= ob_get_clean();
						$content .= PrintReady($favorite["note"]);
						$content .= "</div>\n";
					}
					if ($favorite["type"]=="OBJE") {
						$content .= "<div id=\"box".$favorite["gid"].".0\">\n";
						if ($ctype=="user" || userIsAdmin()) $content .= $removeFavourite;
						ob_start();
						print_media_links("1 OBJE @".$favorite["gid"]."@", 1, $favorite["gid"]);
						$content .= ob_get_clean();
						$content .= PrintReady($favorite["note"]);
					}
				}
			}
			$content .= "</td></tr>\n";
		}
		$content .= "</table>\n";
	}
	if (userGedcomAdmin()) { 
	$content .= '
		<script language="JavaScript" type="text/javascript">
		<!--
		var pastefield;
		function paste_id(value) {
			pastefield.value=value;
		}
		//-->
		</script>
		<br />
		';
		$content .= print_help_link("index_add_favorites_help", "qm", "", false, true);
		$content .= "<b><a href=\"javascript:// ".$pgv_lang["add_favorite"]." \" onclick=\"expand_layer('add_ged_fav'); return false;\"><img id=\"add_ged_fav_img\" src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["plus"]["other"]."\" border=\"0\" alt=\"\" />&nbsp;".$pgv_lang["add_favorite"]."</a></b>";
		$content .= "<br /><div id=\"add_ged_fav\" style=\"display: none;\">\n";
		$content .= "<form name=\"addgfavform\" method=\"post\" action=\"index.php\">\n";
		$content .= "<input type=\"hidden\" name=\"action\" value=\"addfav\" />\n";
		$content .= "<input type=\"hidden\" name=\"ctype\" value=\"$ctype\" />\n";
		$content .= "<input type=\"hidden\" name=\"favtype\" value=\"gedcom\" />\n";
		$content .= "<input type=\"hidden\" name=\"ged\" value=\"$GEDCOM\" />\n";
		$content .= "<table border=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>".$pgv_lang["add_fav_enter_id"]." <br />";
		$content .= "<input class=\"pedigree_form\" type=\"text\" name=\"gid\" id=\"gid\" size=\"3\" value=\"\" />";
		$content .= print_findindi_link("gid","",true);
		$content .= print_findfamily_link("gid","",true);
		$content .= print_findsource_link("gid","",true);
		$content .= "\n<br />".$pgv_lang["add_fav_or_enter_url"];
		$content .= "\n<br />".$pgv_lang["url"]."<input type=\"text\" name=\"url\" size=\"40\" value=\"\" />";
		$content .= "\n<br />".$pgv_lang["title"]." <input type=\"text\" name=\"favtitle\" size=\"40\" value=\"\" />";
		$content .= "\n</td><td>";
		$content .= "\n".$pgv_lang["add_fav_enter_note"];
		$content .= "\n<br /><textarea name=\"favnote\" rows=\"6\" cols=\"40\"></textarea>";
		$content .= "</td></tr></table>\n";
		$content .= "\n<br /><input type=\"submit\" value=\"".$pgv_lang["add"]."\" style=\"font-size: 8pt; \" />";
		$content .= "\n</form></div>\n";
	}
	
	print '<div id="'.$id.'" class="block"><table class="blockheader" cellspacing="0" cellpadding="0"><tr>';
	print '<td class="blockh1">&nbsp;</td>';
	print '<td class="blockh2 blockhc"><b>'.$title.'</b></td>';
	print '<td class="blockh3">&nbsp;</td>';
	print '</tr></table><div class="blockcontent">';
	if ($block) {
		print '<div class="small_inner_block">'.$content.'</div>';
	} else {
		print $content;
	}
	print '</div></div>';
}
?>