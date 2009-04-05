<?php
/**
 * SimplyRed theme
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage Themes
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$theme_name = "SimplyRed";        //-- the name of this theme

$stylesheet = $THEME_DIR."style.css";    //-- CSS level 2 stylesheet to use
$rtl_stylesheet = $THEME_DIR."style_rtl.css";           //-- CSS level 2 stylesheet to use
$print_stylesheet = $THEME_DIR."print.css";	//-- CSS level 2 print stylesheet to use
$toplinks = $THEME_DIR."toplinks.php";    //-- File to display the icons and links to different sections
$headerfile = $THEME_DIR."header.php";    //-- Header information for the site
$footerfile = $THEME_DIR."footer.php";    //-- Footer information for the site
$print_footerfile = $THEME_DIR."print_footer.php";    //-- Print Preview Footer information for the site
$print_headerfile = $THEME_DIR."print_header.php";    //-- Print Preview Header information for the site

$PGV_IMAGE_DIR = $THEME_DIR."images";        //-- directory to look for images

$PGV_USE_HELPIMG = true;		// set to true to use image for help questionmark, set to false to use $pgv_lang["qm"]

//-- variables for image names
//- PGV main icons
$PGV_IMAGES["gedcom"]["large"] = "gedcom.gif";
$PGV_IMAGES["help"]["large"] = "help.gif";
$PGV_IMAGES["indis"]["large"] = "indis.gif";
$PGV_IMAGES["media"]["large"] = "media.gif";
$PGV_IMAGES["notes"]["large"] = "notes.gif";
$PGV_IMAGES["pedigree"]["large"] = "pedigree.gif";
$PGV_IMAGES["reports"]["large"] = "reports.gif";
$PGV_IMAGES["sfamily"]["large"] = "sfamily.gif";
$PGV_IMAGES["source"]["large"] = "source.gif";
$PGV_IMAGES["sex"]["large"] = "male.gif";
$PGV_IMAGES["sexf"]["large"] = "female.gif";
$PGV_IMAGES["sexn"]["large"] = "fe_male.gif";

//- PGV small icons
$PGV_IMAGES["admin"]["small"] = "small/admin.gif";
$PGV_IMAGES["ancestry"]["small"] = "small/ancestry.gif";
$PGV_IMAGES["calendar"]["small"] = "small/calendar.gif";
$PGV_IMAGES["cfamily"]["small"] = "small/cfamily.gif";
$PGV_IMAGES["clippings"]["small"] = "small/clippings.gif";
$PGV_IMAGES["descendant"]["small"] = "small/descendancy.gif";
$PGV_IMAGES["fambook"]["small"] = "small/fambook.gif";
$PGV_IMAGES["fanchart"]["small"] = "small/fanchart.gif";
$PGV_IMAGES["gedcom"]["small"] = "small/gedcom.gif";
$PGV_IMAGES["help"]["small"] = "small/help.gif";
$PGV_IMAGES["hourglass"]["small"] = "small/hourglass.gif";
$PGV_IMAGES["indis"]["small"] = "small/indis.gif";
$PGV_IMAGES["media"]["small"] = "small/media.gif";
$PGV_IMAGES["menu_help"]["small"] = "small/help.gif";
$PGV_IMAGES["menu_media"]["small"] = "small/media.gif";
$PGV_IMAGES["menu_repository"]["small"] = "small/repository.gif";
$PGV_IMAGES["menu_source"]["small"] = "small/source.gif";
$PGV_IMAGES["mygedview"]["small"] = "small/my_gedview.gif";
$PGV_IMAGES["notes"]["small"] = "small/notes.gif";
$PGV_IMAGES["patriarch"]["small"] = "small/patriarch.gif";
$PGV_IMAGES["pedigree"]["small"] = "small/pedigree.gif";
$PGV_IMAGES["place"]["small"] = "small/place.gif";
$PGV_IMAGES["relationship"]["small"] = "small/relationship.gif";
$PGV_IMAGES["repository"]["small"] = "small/repository.gif";
$PGV_IMAGES["search"]["small"] = "small/search.gif";
$PGV_IMAGES["sex"]["small"] = "small/male.gif";
$PGV_IMAGES["sexf"]["small"] = "small/female.gif";
$PGV_IMAGES["sexn"]["small"] = "small/fe_male.gif";
$PGV_IMAGES["sfamily"]["small"] = "small/sfamily.gif";
$PGV_IMAGES["source"]["small"] = "small/source.gif";
$PGV_IMAGES["statistic"]["small"] = "small/statistic.gif";
$PGV_IMAGES["timeline"]["small"] = "small/timeline.gif";

//- PGV buttons for data entry pages
$PGV_IMAGES["addrepository"]["button"] = "buttons/addrepository.gif";
$PGV_IMAGES["addsource"]["button"] = "buttons/addsource.gif";
$PGV_IMAGES["addnote"]["button"] = "buttons/addnote.gif";
$PGV_IMAGES["calendar"]["button"] = "buttons/calendar.gif";
$PGV_IMAGES["family"]["button"] = "buttons/family.gif";
$PGV_IMAGES["indi"]["button"] = "buttons/indi.gif";
$PGV_IMAGES["keyboard"]["button"] = "buttons/keyboard.gif";
$PGV_IMAGES["media"]["button"] = "buttons/media.gif";
$PGV_IMAGES["place"]["button"] = "buttons/place.gif";
$PGV_IMAGES["repository"]["button"] = "buttons/repository.gif";
$PGV_IMAGES["source"]["button"] = "buttons/source.gif";
$PGV_IMAGES["note"]["button"] = "buttons/note.gif";

// Media images
$PGV_IMAGES["media"]["doc"] = "../../../images/media/doc.gif";
$PGV_IMAGES["media"]["ged"] = "../../../images/media/ged.gif";
$PGV_IMAGES["media"]["pdf"] = "../../../images/media/pdf.gif";

//- other images
$PGV_IMAGES["dline2"]["other"] = "dline2.gif";
$PGV_IMAGES["dline"]["other"] = "dline.gif";
$PGV_IMAGES["hline"]["other"] = "hline.gif";
$PGV_IMAGES["spacer"]["other"] = "spacer.gif";
$PGV_IMAGES["gedview"]["other"] = "gedview.gif";
$PGV_IMAGES["larrow2"]["other"] = "larrow2.gif";
$PGV_IMAGES["larrow"]["other"] = "larrow.gif";
$PGV_IMAGES["minus"]["other"] = "minus.gif";
$PGV_IMAGES["note"]["other"] = "notes.gif";
$PGV_IMAGES["plus"]["other"] = "plus.gif";
$PGV_IMAGES["rarrow2"]["other"] = "rarrow2.gif";
$PGV_IMAGES["rarrow"]["other"] = "rarrow.gif";
$PGV_IMAGES["uarrow"]["other"] = "uarrow.gif";
$PGV_IMAGES["uarrow2"]["other"] = "uarrow2.gif";
$PGV_IMAGES["darrow"]["other"] = "darrow.gif";
$PGV_IMAGES["darrow2"]["other"] = "darrow2.gif";
$PGV_IMAGES["vline"]["other"] = "vline.gif";
$PGV_IMAGES["uarrow3"]["other"] = "uarrow3.gif";
$PGV_IMAGES["zoomin"]["other"] = "zoomin.gif";
$PGV_IMAGES["zoomout"]["other"] = "zoomout.gif";
$PGV_IMAGES["rdarrow"]["other"] = "rdarrow.gif";
$PGV_IMAGES["udarrow"]["other"] = "udarrow.gif";
$PGV_IMAGES["ldarrow"]["other"] = "ldarrow.gif";
$PGV_IMAGES["ddarrow"]["other"] = "ddarrow.gif";
$PGV_IMAGES["remove"]["other"]	= "remove.gif";
$PGV_IMAGES["stop"]["other"] = "stop.gif";
// - lifespan chart arrows
$PGV_IMAGES["lsltarrow"]["other"] = "lsltarrow.gif";
$PGV_IMAGES["lsrtarrow"]["other"] = "lsrtarrow.gif";
$PGV_IMAGES["lsdnarrow"]["other"] = "lsdnarrow.gif";
$PGV_IMAGES["lsuparrow"]["other"] = "lsuparrow.gif";

//-- This section defines variables for the pedigree chart
$bwidth = 225;		// -- width of boxes on pedigree chart
$bheight = 80;		// -- height of boxes on pedigree chart
$baseyoffset = 10;	// -- position the entire pedigree tree relative to the top of the page
$basexoffset = 10;	// -- position the entire pedigree tree relative to the left of the page
$bxspacing = 0;		// -- horizontal spacing between boxes on the pedigree chart
$byspacing = 5;		// -- vertical spacing between boxes on the pedigree chart
$brborder = 1;		// -- box right border thickness

// -- global variables for the descendancy chart
$Dbaseyoffset = 0;	// -- position the entire descendancy tree relative to the top of the page
$Dbasexoffset = 0;	// -- position the entire descendancy tree relative to the left of the page
$Dbxspacing = 0;	// -- horizontal spacing between boxes
$Dbyspacing = 1;	// -- vertical spacing between boxes
$Dbwidth = 270;		// -- width of DIV layer boxes
$Dbheight = 80;		// -- height of DIV layer boxes
$Dindent = 15;		// -- width to indent descendancy boxes
$Darrowwidth = 15;	// -- additional width to include for the up arrows

$CHARTS_CLOSE_HTML = true;		//-- should the charts, pedigree, descendacy, etc close the HTML on the page
$PGV_DXHTMLTAB_COLORS = "#400025,#622538";

// Arrow symbol or icon for up-page links on Help pages
// This icon is referred to in Help text by: #GLOBALS[UpArrow]#
if (file_exists($PGV_IMAGE_DIR."/uarrow3.gif")) $UpArrow = "<img src=\"{$PGV_IMAGE_DIR}/uarrow3.gif\" class=\"icon\" border=\"0\" alt=\"^\" />";
else $UpArrow = "<b>^^&nbsp;&nbsp;</b>";

?>