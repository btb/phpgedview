<?php
/**
 * Displays a list of the multimedia objects
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2018  PGV Development Team.  All rights reserved.
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
 * @package PhpGedView
 * @subpackage Lists
 * @version $Id$
 */

define('PGV_SCRIPT_NAME', 'medialist.php');
require './config.php';
require_once PGV_ROOT.'includes/functions/functions_print_facts.php';

if (PGV_USE_LIGHTBOX) loadLangFile("lightbox:lang");

// $LB_SS_SPEED = "5";
$level = safe_GET("level", "", "0");
$action = safe_GET('action');
$filter = safe_GET('filter');
$filter = stripLRMRLM($filter);
$subdirs = safe_GET('subdirs', 'on', 'off');
$unlinked = safe_GET('unlinked', 'on', 'off');
$search = safe_GET('search', 'no', 'yes');
$sortby = safe_GET('sortby', 'file', 'title');
$max = safe_GET('max', array('10', '20', '30', '40', '50', '75', '100', '125', '150', '200'), '20');
$folder = safe_GET('folder');
if (empty($folder)) {
	$folder = 'ALL';
	$search = 'yes';
}

if (empty($_SESSION['medialist_ged']) || $_SESSION['medialist_ged'] != PGV_GEDCOM) {
	$_SESSION['medialist_ged'] = PGV_GEDCOM;
	unset ($_SESSION['medialist'], $_SESSION['mediafolder']);
	$search = 'yes';
}

if (empty($_SESSION['medialist'])) $search = 'yes';


print_header($pgv_lang["multi_title"]);

if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';

echo "\n\t<div class=\"center\"><h2>", $pgv_lang["multi_title"], "</h2></div>\n\t";

// Get Javascript variables from lb_config.php ---------------------------
if (PGV_USE_LIGHTBOX) {
	require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
	require PGV_ROOT.'modules/lightbox/functions/lb_call_js.php';

	if ($theme_name=="Minimal") {
		// Force icon options to "text" when we're dealing with the Minimal theme
		if ($LB_AL_HEAD_LINKS!="none") $LB_AL_HEAD_LINKS = "text";
		if ($LB_AL_THUMB_LINKS!="none") $LB_AL_THUMB_LINKS = "text";
		if ($LB_ML_THUMB_LINKS!="none") $LB_ML_THUMB_LINKS = "text";
	}
}

if ($search == 'yes') {
	$currentdirOnly = $subdirs != 'on';
	$unlinkedOnly = $unlinked == 'on';
	$_SESSION['subdirs'] = $currentdirOnly;
	$_SESSION['unlinked'] = $unlinkedOnly;
	$hiddenItems = 0;

	if ($folder == 'ALL') {
		$currentdirOnly = false;
		unset($_SESSION['medialist'], $_SESSION['mediafolder']);	// Force re-build of media list
	}

	if (empty($_SESSION['mediasubdirs']) || $_SESSION['mediasubdirs'] != $currentdirOnly) {
		$_SESSION['mediasubdirs'] = $currentdirOnly;
		unset($_SESSION['medialist'], $_SESSION['mediafolder']);	// Force re-build of media list
	}

	if (empty($_SESSION['mediaunlinked']) || $_SESSION['mediaunlinked'] != $unlinkedOnly) {
		$_SESSION['mediaunlinked'] = $unlinkedOnly;
	}

	$showExternal = $folder == 'ALL';	// Show external links only if looking at all directories

	if (empty($_SESSION['medialist']) || empty($_SESSION['mediafolder']) || $_SESSION['mediafolder'] != $folder) {
		$medialist=get_medialist($currentdirOnly, $folder, false, false, $showExternal);
		$_SESSION['medialist'] = $medialist;	// Save this for future use
		$_SESSION['mediafolder'] = $folder;		//   and remember which directory we looked at
	} else {
		$medialist = $_SESSION['medialist'];	// Same directory: re-use original list (in case filtering was done)
	}

	//-- remove all linked objects if we're looking for unlinked only
	//-- remove all private media objects
	foreach($medialist as $key => $media) {
		echo " ";		// Not sure why this is necessary

		// Display when object does not belong to any GEDCOM or when it belongs to current GEDCOM
		$disp = empty($media["GEDFILE"]) || $media["GEDFILE"]==PGV_GED_ID;
		// Display when Media objects aren't restricted by global privacy
		$disp &= displayDetailsById($media["XREF"], "OBJE");
		// Display when this Media object isn't restricted
		$disp &= !FactViewRestricted($media["XREF"], $media["GEDCOM"]);

		if ($unlinkedOnly && $media["LINKED"]) $disp = false;

		if (!$disp) {
			unset($medialist[$key]);
			$hiddenItems ++;
		}
	}
	usort($medialist, "mediasort"); // Reset numbering of medialist array
	$_SESSION['mediasortedlist'] = $medialist;	// Save this list -- we'll need it later
	$_SESSION['mediahidden'] = $hiddenItems;
} else {
	$medialist = $_SESSION['mediasortedlist'];
	$hiddenItems = $_SESSION['mediahidden'];
	$currentdirOnly = $_SESSION['subdirs'];
	$unlinkedOnly = $_SESSION['unlinked'];
}

// A form for filtering the media items
?>
<form action="medialist.php" method="get">
	<input type="hidden" name="action" value="filter" />
	<input type="hidden" name="search" value="yes" />
	<table class="list_table center width75 <?php echo $TEXT_DIRECTION; ?>">
	<?php
	if ($TEXT_DIRECTION=='ltr') $legendAlign = 'align="right"';
	else $legendAlign = 'align="left"';
	?>

	<!-- // NOTE: Row 1, left: Sort sequence -->
	<tr><td class="descriptionbox wrap width25" <?php echo $legendAlign;?>><?php print_help_link("sortby_help", "qm", "sortby"); ?><?php echo $pgv_lang["sortby"]; ?></td>
	<td class="optionbox wrap"><select name="sortby">
		<option value="title" <?php if ($sortby=='title') echo "selected=\"selected\"";?>><?php echo $factarray["TITL"];?></option>
		<option value="file" <?php if ($sortby=='file') echo "selected=\"selected\"";?>><?php echo $factarray["FILE"];?></option>
	</select></td>

	<!-- // NOTE: Row 1, right: Objects per page -->
	<td class="descriptionbox wrap width25" <?php echo $legendAlign;?>><?php echo $pgv_lang["per_page"]; ?></td>
	<td class="optionbox wrap width25">
		<select name="max">
		<?php
			foreach (array('10', '20', '30', '40', '50', '75', '100', '125', '150', '200') as $selectEntry) {
				echo "<option value=\"$selectEntry\"";
				if ($selectEntry==$max) echo " selected=\"selected\"";
				echo ">", $selectEntry, "</option>";
			}
		?>
		</select>
	</td></tr>

	<!-- // NOTE: Row 2 left: Filter options -->
	<tr><td class="descriptionbox wrap width25" <?php echo $legendAlign;?>>
		<?php
			if ($MEDIA_DIRECTORY_LEVELS > 0) {
				$text = $pgv_lang["medialist_current_dir"];
				print_help_link("medialist_current_dir_help", "qm", "{$text}");
				echo $text, '<br />';
			}
			print_help_link("simple_filter_help", "qm", "filter");
			echo $pgv_lang["filter"];
		?>
	</td>
	<td class="optionbox wrap width25">
		<?php
		// Directory pick list
		if ($MEDIA_DIRECTORY_LEVELS > 0) {
			if (empty($folder)) {
				if (!empty($_SESSION['upload_folder'])) $folder = $_SESSION['upload_folder'];
				else $folder = "ALL";
			}
			$folderList = get_media_folders();
			echo "<span dir=\"ltr\"><select name=\"folder\">\n";
			echo '<option value="ALL">', $pgv_lang["all"], '</option>', "\n";
			foreach($folderList as $f) {
				echo '<option value="', $f, '"';
				if ($folder==$f) echo ' selected="selected"';
				echo '>', $f, '</option>', "\n";
			}
			echo "</select></span><br />";
		} else echo "<input name=\"folder\" type=\"hidden\" value=\"ALL\" />";
		// Text field for filter and "submit" button
		?>
		<input id="filter" name="filter" value="<?php echo PrintReady($filter); ?>"/><br />
		<input type="submit" value="<?php echo $pgv_lang["apply_filter"];?>" />
	</td>

	<!-- // NOTE: Row 2 right: Unlinked only option and Recursive directory list -->
	<td class="descriptionbox wrap width25" <?php echo $legendAlign;?>>
		<?php
			if (PGV_USER_CAN_EDIT) {
				print_help_link("medialist_unlinked_help", "qm", "medialist_unlinked");
				echo $pgv_lang["medialist_unlinked"];
			}
			if ($MEDIA_DIRECTORY_LEVELS > 0) {
				if (PGV_USER_CAN_EDIT) echo '<br />';
				print_help_link("medialist_recursive_help", "qm", "medialist_recursive");
				echo $pgv_lang["medialist_recursive"];
			}
		?>
	</td>
	<td class="optionbox wrap width25">
		<?php
			if (PGV_USER_CAN_EDIT) {
				echo '<input type="checkbox" id="unlinked" name="unlinked"';
				if ($unlinkedOnly) echo 'checked="checked"';
				echo '>';
			}
			if ($MEDIA_DIRECTORY_LEVELS > 0) {
				if (PGV_USER_CAN_EDIT) echo '<br />';
				echo '<input type="checkbox" id="subdirs" name="subdirs"';
				if (!$currentdirOnly) echo 'checked="checked"';
				echo '>';
			}
		?>
	</td></tr>

	</table>
</form>
<?php

if ($action=="filter") {
	if (strlen($filter) > 1) {
		foreach($medialist as $key => $media) {
			if (!filterMedia($media, $filter, "http")) {
				unset($medialist[$key]);
				$hiddenItems ++;
			}
		}
		$_SESSION['mediahidden'] = $hiddenItems;
	}
	usort($medialist, "mediasort"); // Reset numbering of medialist array
}

// Sort the media list according to the user's wishes
$sortedMediaList = $medialist;	// Default sort (by title) has already been done
if ($sortby=='file') usort($sortedMediaList, 'filesort');

// Count the number of items in the medialist
$ct=count($sortedMediaList);
$start = 0;
$max = 20;
if (isset($_GET["start"])) $start = $_GET["start"];
if (isset($_GET["max"])) $max = $_GET["max"];
$count = $max;
if ($start+$count > $ct) $count = $ct-$start;

echo "\n\t", '<div align="center">', $pgv_lang["media_found"], ' : ', $ct, '&nbsp;&nbsp;&nbsp;&nbsp;', $pgv_lang["hidden"], ' : ', $hiddenItems, '<br /><br />';
if ($ct>0) {

	$currentPage = ((int) ($start / $max)) + 1;
	$lastPage = (int) (($ct + $max - 1) / $max);
	$IconRarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["rarrow"]["other"]."\" width=\"20\" height=\"20\" border=\"0\" alt=\"\" />";
	$IconLarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["larrow"]["other"]."\" width=\"20\" height=\"20\" border=\"0\" alt=\"\" />";
	$IconRDarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["rdarrow"]["other"]."\" width=\"20\" height=\"20\" border=\"0\" alt=\"\" />";
	$IconLDarrow = "<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["ldarrow"]["other"]."\" width=\"20\" height=\"20\" border=\"0\" alt=\"\" />";

	// Print page back, page number, page forward controls

	echo "\n\t<table class=\"list_table center width75\">\n";
	echo "\n<tr>\n";
	echo "<td class='width30' align='", $TEXT_DIRECTION == "ltr"?"left":"right", "'>";
	if ($TEXT_DIRECTION=="ltr") {
		if ($ct>$max) {
			if ($currentPage > 1) {
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start=0&max={$max}"), "' title='", $pgv_lang["first_page"], "'>", $IconLDarrow, "</a>\n";
			}
			if ($start>0) {
				$newstart = $start-$max;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["previous_page"], "'>", $IconLarrow, "</a>\n";
			}
		}
	} else {
		if ($ct>$max) {
			if ($currentPage < $lastPage) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$lastStart}&max={$max}"), "' title='", $pgv_lang["last_page"], "'>", $IconRDarrow, "</a>\n";
			}
			if ($start+$max < $ct) {
				$newstart = $start+$count;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["next_page"], "'>", $IconRarrow, "</a>\n";
			}
		}
	}
	echo "</td>";
	echo "<td align=\"center\">", print_text("page_x_of_y", 0, 1), '</td>';
	echo "<td class=\"width30\" align=\"", $TEXT_DIRECTION == "ltr"?"right":"left", "\">";
	if ($TEXT_DIRECTION=="ltr") {
		if ($ct>$max) {
			if ($start+$max < $ct) {
				$newstart = $start+$count;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["next_page"], "'>", $IconRarrow, "</a>\n";
			}
			if ($currentPage < $lastPage) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$lastStart}&max={$max}"), "' title='", $pgv_lang["last_page"], "'>", $IconRDarrow, "</a>\n";
			}
		}
	} else {
		if ($ct>$max) {
			if ($start>0) {
				$newstart = $start-$max;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["previous_page"], "'>", $IconLarrow, "</a>\n";
			}
			if ($currentPage > 1) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start=0&max={$max}"), "' title='", $pgv_lang["first_page"], "'>", $IconLDarrow, "</a>\n";
			}
		}
	}
	echo "</td>";
	echo "</tr>\n</table><br />";

	// -- Print the array of media items

	echo "\n\t<table class=\"list_table center width100\">\n";

	echo "\n<tr>\n";

	for ($i=0; $i<$count; $i++) {
		$media = $sortedMediaList[$start+$i];
		$isExternal = isFileExternal($media["FILE"]);
		$imgsize = findImageSize($media["FILE"]);
		$imgwidth = $imgsize[0]+40;
		$imgheight = $imgsize[1]+150;
		$name = trim($media["TITL"]);
		$showFileName = PGV_USER_CAN_EDIT;
		if ($name=="") {
			if ($isExternal) $name = "URL";
			else $name = basename($media["FILE"]);
		}
		echo "\n\t\t\t<td class=\"list_value_wrap\" width=\"50%\">";
		echo "<table class=\"$TEXT_DIRECTION\">\n\t<tr>\n\t\t<td valign=\"top\" style=\"white-space: normal;\">";

		//Get media item Notes
		$haystack = $media["GEDCOM"];
		$needle   = "1 NOTE";
		$before   = substr($haystack, 0, strpos($haystack, $needle));
		$after    = substr(strstr($haystack, $needle), strlen($needle));
		$worked   = str_replace("1 NOTE", "1 NOTE<br />", $after);
		$final    = $before.$needle.$worked;
		$notes    = PrintReady(htmlspecialchars(addslashes(print_fact_notes($final, 1, true, true)), ENT_COMPAT, 'UTF-8'));

		// Get info on how to handle this media file
		$mediaInfo = mediaFileInfo($media["FILE"], $media["THUMB"], $media["XREF"], $name, $notes);

		//-- Thumbnail field
		echo '<a href="', $mediaInfo['url'], '">';
		echo '<img src="', $mediaInfo['thumb'], '" align="center" class="thumbnail" border="none"', $mediaInfo['width'];
		echo ' alt="', PrintReady(htmlspecialchars($name, ENT_COMPAT, 'UTF-8')), '" title="', PrintReady(htmlspecialchars($name, ENT_COMPAT, 'UTF-8')), '" /></a>';
		echo "</td>\n\t\t", '<td class="list_value_wrap" style="border: none;" width="100%">';

		if (PGV_USE_LIGHTBOX) {
			if (PGV_USER_CAN_EDIT && !empty($media["XREF"])) {

				if ($LB_ML_THUMB_LINKS != "none") {
					echo "<table border=0><tr>";

					// ---------- Edit Media --------------------
					echo "<td class=\"width33 wrap center font9\" valign=\"top\">";
					echo "<a href=\"javascript:;\" title=\"" . $pgv_lang["lb_edit_media"] . "\" onclick=\" return window.open('addmedia.php?action=editmedia&pid={$media['XREF']}&linktoid=', '_blank', 'top=50, left=50, width=600, height=600, resizable=1, scrollbars=1');\">";
					if ($LB_ML_THUMB_LINKS == "icon" || $LB_ML_THUMB_LINKS == "both") {
						echo "<img src=\"modules/lightbox/images/image_edit.gif\" alt=\"\" class=\"icon\" title=\"" . $pgv_lang["lb_edit_media"] . "\" />&nbsp;&nbsp;&nbsp;" ;
					}
					if ($LB_ML_THUMB_LINKS == "both") {
						echo "<br />";
					}
					if ($LB_ML_THUMB_LINKS == "both" || $LB_ML_THUMB_LINKS == "text") {
						echo $pgv_lang["lb_edit_details"] ;
					}
					echo "</a>" . "\n";
					echo "</td>";

					// ---------- Link Media to person, family or source  ---------------
					echo "<td class=\"width33 wrap center font9\" valign=\"top\">";
					require  PGV_ROOT.'modules/lightbox/functions/lb_link.php';
					echo "</td>";

					// ---------- View Media Details (mediaviewer) --------------------
					echo "<td class=\"width33 wrap center font9\" valign=\"top\">";
					echo "<a href=\"mediaviewer.php?mid=" . $media["XREF"] . "\" title=\"" . $pgv_lang["lb_view_media"] . "\">";
					if ($LB_ML_THUMB_LINKS == "icon" || $LB_ML_THUMB_LINKS == "both") {
						echo "&nbsp;&nbsp;&nbsp;<img src=\"modules/lightbox/images/image_view.gif\" alt=\"\" class=\"icon\" title=\"" . $pgv_lang["lb_view_media"] . "\" />";
					}
					if ($LB_ML_THUMB_LINKS == "both") {
						echo "<br />";
					}
					if ($LB_ML_THUMB_LINKS == "both" || $LB_ML_THUMB_LINKS == "text") {
						echo $pgv_lang["lb_view_details"] ;
					}
					echo "</a>" . "\n" ;
					echo "</td>";

					echo "</tr></table>";
				}
				// ------------ Linespace ---------------------
				echo "<br />";
			}
		}

		if (!empty($media["XREF"])) echo "<a href=\"mediaviewer.php?mid=", $media["XREF"], "\">";

		if (begRTLText($name) && $TEXT_DIRECTION=="ltr") {
			if ($SHOW_ID_NUMBERS && !empty($media["XREF"])) {
				echo "(", $media["XREF"], ")&nbsp;&nbsp;&nbsp;";
			}
			echo "<b>", PrintReady($name), "</b>";
		} else {
			echo "<b>", PrintReady($name), "</b>";
			if ($SHOW_ID_NUMBERS && !empty($media["XREF"])) {
				echo "&nbsp;&nbsp;&nbsp;";
				if ($TEXT_DIRECTION=="rtl") echo getRLM();
				echo "(", $media["XREF"], ")";
				if ($TEXT_DIRECTION=="rtl") echo getRLM();
			}
		}
		if ($showFileName) {
			if ($isExternal) echo "<br /><sub>URL</sub>";
			else echo "<br /><sub><span dir=\"ltr\">", PrintReady($media["FILE"]), "</span></sub>";
		}
		if (!empty($media["XREF"])) echo '</a>';
		echo '<br />';

		if (!$isExternal && !$media["EXISTS"]) {
			echo "<br /><span class=\"error\">", $pgv_lang["file_not_found"], " <span dir=\"ltr\">", PrintReady($media["FILE"]), "</span></span>";
		}
		if (!$isExternal && $media["EXISTS"]) {
			$imageTypes = array("", "GIF", "JPG", "PNG", "SWF", "PSD", "BMP", "TIFF", "TIFF", "JPC", "JP2", "JPX", "JB2", "SWC", "IFF", "WBMP", "XBM");
			if (!empty($imgsize[2])) {
				echo "\n\t\t\t<span class=\"label\"><br />", $pgv_lang["media_format"], ": </span> <span class=\"field\" style=\"direction: ltr;\">", $imageTypes[$imgsize[2]], "</span>";
			} else if (empty($imgsize[2])) {
				$path_end=substr($media["FILE"], strlen($media["FILE"])-5);
				$imageType = strtoupper(substr($path_end, strpos($path_end, ".")+1));
				echo "\n\t\t\t<span class=\"label\"><br />", $pgv_lang["media_format"], ": </span> <span class=\"field\" style=\"direction: ltr;\">", $imageType, "</span>";
			}

			$fileSize = media_filesize($media["FILE"]);
			$sizeString = getfilesize($fileSize);
			echo "&nbsp;&nbsp;&nbsp;<span class=\"field\" style=\"direction: ltr;\">", $sizeString, "</span>";

			if ($imgsize[2]!==false) {
				echo "\n\t\t\t<span class=\"label\"><br />", $pgv_lang["image_size"], ": </span> <span class=\"field\" style=\"direction: ltr;\">", $imgsize[0], $TEXT_DIRECTION =="rtl"?(" " . getRLM() . "x" . getRLM() . " ") : " x ", $imgsize[1], "</span>";
			}
		}

		echo "<div style=\"white-space: normal; width: 95%;\">";
		print_fact_sources($media["GEDCOM"], $media["LEVEL"]+1);
		print_fact_notes($media["GEDCOM"], $media["LEVEL"]+1);
		echo "</div>";

		PrintMediaLinks($media["LINKS"], "small");

		echo "</td></tr></table>\n";
		echo "</td>";
		if ($i%2 == 1 && $i < ($count-1)) echo "\n\t\t</tr>\n\t\t<tr>";
	}
	echo "\n\t\t</tr></table>";

	// Print page back, page number, page forward controls

	echo "\n\t<br /><table class=\"list_table center width75\">\n";
	echo "\n<tr>\n";
	echo "<td class=\"width30\" align=\"", $TEXT_DIRECTION == "ltr"?"left":"right", "\">";
	if ($TEXT_DIRECTION=="ltr") {
		if ($ct>$max) {
			if ($currentPage > 1) {
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start=0&max={$max}"), "' title='", $pgv_lang["first_page"], "'>", $IconLDarrow, "</a>\n";
			}
			if ($start>0) {
				$newstart = $start-$max;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["previous_page"], "'>", $IconLarrow, "</a>\n";
			}
		}
	} else {
		if ($ct>$max) {
			if ($currentPage < $lastPage) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$lastStart}&max={$max}"), "' title='", $pgv_lang["last_page"], "'>", $IconRDarrow, "</a>\n";
			}
			if ($start+$max < $ct) {
				$newstart = $start+$count;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["next_page"], "'>", $IconRarrow, "</a>\n";
			}
		}
	}
	echo "</td>";
	echo "<td align=\"center\">", print_text("page_x_of_y", 0, 1), '</td>';
	echo "<td class=\"width30\" align=\"", $TEXT_DIRECTION == "ltr"?"right":"left", "\">";
	if ($TEXT_DIRECTION=="ltr") {
		if ($ct>$max) {
			if ($start+$max < $ct) {
				$newstart = $start+$count;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["next_page"], "'>", $IconRarrow, "</a>\n";
			}
			if ($currentPage < $lastPage) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$lastStart}&max={$max}"), "' title='", $pgv_lang["last_page"], "'>", $IconRDarrow, "</a>\n";
			}
		}
	} else {
		if ($ct>$max) {
			if ($start>0) {
				$newstart = $start-$max;
				if ($start<0) $start = 0;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start={$newstart}&max={$max}"), "' title='", $pgv_lang["previous_page"], "'>", $IconLarrow, "</a>\n";
			}
			if ($currentPage > 1) {
				$lastStart = ((int) ($ct / $max)) * $max;
				echo "<a href='", encode_url("medialist.php?folder={$folder}&filter={$filter}&sortby={$sortby}&search=no&start=0&max={$max}"), "' title='", $pgv_lang["first_page"], "'>", $IconLDarrow, "</a>\n";
			}
		}
	}
	echo "</td></tr>";
	echo "</table><br />";
}
echo "\n</div>\n";
// -- load up the slideshow code
if (!PGV_USE_LIGHTBOX) {
	if (file_exists(PGV_ROOT.'modules/slideshow/slideshow.php')) {
		require_once PGV_ROOT.'modules/slideshow/slideshow.php';
	}
}
print_footer();

?>
