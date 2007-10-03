<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * @subpackage Module
 * @version $Id$
 * @author Brian Holland
 */


echo "<font size=2 face=\"Verdana\"> ";
echo "<h3>Lightbox-Album HELP: </h3>";
echo "<ol> ";

echo "<li>";
echo "<b><font color=\"blue\">To view an image</font></b><br />";
echo "Click on any thumbnail. ";
echo "The title of the image will appear at the bottom of the overlaid image. ";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">To use zoom mode with a displayed image</font></b><br />" ;
echo "<b> Enable Zoom: </b><br />";
echo "NOTE: The slideshow must be paused to see the Zoom icons.<br />";
echo "When the green Plus icon at the bottom right of the image is visible, Zoom is already enabled.<br /> ";
echo "Use the mouse wheel up and down to resize.<br />";
echo "(Or use keys \"i\" and \"o\")<br />";
echo "The icon will change to a red Minus.<br /> ";
echo "When the image is re-sized larger than the viewed page, use the arrow keys to move the image around.<br />";
echo "<b> Disable Zoom: </b><br />";
echo "Click on the red Minus icon at the bottom right to get out of Zoom mode.<br />";
echo "(Or use the \"z\" key)";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">To close an image </font></b><br />";
echo "Click on the red X icon at bottom right.";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">To view the next or previous image in the Album</font></b><br />";
echo "As you mouse over the image when NOT in Zoom mode, ";
echo "the \"NEXT\" and \"PREV\" labels will appear.<br /> ";
echo " Click anywhere in the right half of the image to see the next image. Click anywhere in the left half of the image to see the previous image.";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">To jump to any other image in the Album</font></b><br />";
echo "As you mouse over the top 1 cm of the image when NOT in Zoom mode, ";
echo "the Gallery will appear.<br /> ";
echo "If necessary, move the mouse cursor left and right, and click any Gallery thumbnail<br />";
echo " \"Next\", \"Previous\" and \"Jump\" may be done whether the slideshow is running or paused. ";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">To run the slide show</font></b><br />";
echo "Click on the Start icon at bottom left.<br />";
echo "If there is a music file, the Speaker icon will appear.  ";
echo "Click on the Speaker icon to toggle the music on and off.<br />";
echo "Click on the Pause icon to stop the slide show.<br />";
echo "NOTE: When the slideshow is running, the Zoom icon will not be visible";
echo "</li><br /><br />";

echo "<li>";
echo "<b><font color=\"blue\">Navigation ...</b></font><br />";
echo "Use the \" View 'Album' \" table at the right of the image icon table to directly choose another person's Album view.<br />";

echo "</ol>";

echo "<br /><b>Notes:</b><br />";
echo "Thumbnails which are NOT images, such as PDF files and audio, book, and video Media types, may be viewed individually, but will not be in the slide show. ";

echo "<b>Note for Administrator:</b><br />";
echo "If any files of the usual image formats (jpg, bmp, gif, etc.) representing image types such as photo, certificate, document, etc. appear in the \"Other\" row, the Media type has not been set for these Media objects.  ";
echo "You may wish to edit the Media type for these items.";

echo " </font> ";
 ?>