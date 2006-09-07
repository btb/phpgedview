<?php
/**
 * Media View Page
 *
 * This page displays all information about media that is selected in
 * PHPGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2003  John Finlay and Others
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
 * @subpackage Admin
 * @see mediaviewer.php
 * @version 3
 * @TODO use more theme specific CSS, allow a more fluid layout to take advantage of the page width
 */
//These files are required for this page to work
require_once("includes/controllers/media_ctrl.php");

//This prints the header page
print_header($controller->getPageTitle());
//Checks to see if the File Name ($filename) exists
if (isset($filename)){
	//If the File Name ($filename) is set, then it will call the method to get the Media ID ($mid) from the File Name ($filename)
	$mid = get_media_id_from_file($filename);
	if (!$mid){
		//This will set the Media ID to be false if the File given doesn't match to anything in the database
		$mid = false;
	}
}
//checks to see if the Media ID ($mid) is set. If the Media ID isn't set then there isn't any information avaliable for that picture the picture doesn't exist.
if (isset($mid) && $mid!=false){
	//This creates a Media Object from the getInstance method of the Media Class. It takes the Media ID ($mid) and creates the object.
	$mediaobject = Media::getInstance($mid);
	//Gets the Image Description ($imagedescription) from the Media Object ($mediaobject)
	$imagedescription = $mediaobject->getNote();
	//This sets the controller ID to be the Media ID
	$controller->pid = $mid;
	//The following lines of code are used to print the menu box on the top right hand corner
?>
<table class="sublinks_table" cellspacing="4" cellpadding="0" align = "right">
			<tr>
				<td class="list_label <?php echo $TEXT_DIRECTION; ?>" colspan="5">Media Options</td>
			</tr>
			<tr>
				<td class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php
				//-- get charts menu from menubar
				$menubar = new MenuBar();
				?>
				</td>
				<td class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php
				if (file_exists("reports/individual.xml")) {?>
					</td><td class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
					<?php
				}
				if ($controller->userCanEdit()) {
				?>
				</td>
				<td class="sublinks_cell <?php echo $TEXT_DIRECTION;?>">
				<?php $menu = $controller->getEditMenu(); $menu->printMenu();
				}
				if ($controller->canShowOtherMenu()) {
				?>
				</td>
				<td class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php $menu = $controller->getOtherMenu(); $menu->printMenu();
				}
				?>
				</td>
			</tr>
		</table>
		<?php
		//The next set of code draws the table that displays information about the person
		?>
		<table width = "40%">
			<tr>
				<td>
					<?php
					//Checks to see if the File exist in the system.
					if (file_exists($mediaobject->getFilename())){
						//If the file exists, it will attempt to get the image size
						//If the image size returns a null, then the file isn't a image.
						$imagesize = getimagesize($mediaobject->getFilename());

							//This part creates the link to download the picture
							?>
							<a href="<?php print $mediaobject->getFilename(); ?>"><?php print $pgv_lang["download_image"]; ?></a><br/>
							<?php
							//Checks if the image size is null.
							if ($imagesize[0]){
							//Makes it so the picture when clicked opens the Image View Page
							?>
							<a href="javascript:;openImageView();">
							<?php
								//if title is empty use file path as alt text? see implementation in old random media block and medialist
							?>
							<img src="<?php print $mediaobject->getFilename(); ?>" border = "0" width = "200" alt="<?php print $mediaobject->getTitle(); ?>" title="<?php print $mediaobject->getTitle(); ?>" />
							</a>
							<?php
							//The following JavaScript function is needed to open the image view page
							?>
							<script language="JavaScript" type="text/javascript">
							function openImageView(){
								window.open('imageview.php?filename=<?php print $mediaobject->getFilename(); ?>', '_Blank', 'width=500, height=500, toolbar=1, resizable=1');
							}
							</script>
							<?php
						}
						else{
							print " This file has no preview ";
						}
					}
					else{
						print " File Not Found, Please contact Administrator ";
					}
					?>
				</td>
				<?php
				//The following section of code generates the table that show the details of the image
				?>
				<td valign="top">
					<table width="100%">
						<tr>
							<td height="50%">
								<br/>
								 <?php print $pgv_lang["title"]; ?> <br/>
								 <?php print $mediaobject->getTitle(); ?> <br/>
							</td>
						</tr>
						<tr>
							<td height = "50%">
								<br/>
								<hr width="75%" />
								<br/>
								<br/>
								<?php
								$persons = get_media_relations($mid);
								if (isset($persons)){
								?>
								 <?php print $pgv_lang["relations_heading"]; ?><br/>
								<ul>
								<?php
										foreach($persons as $i=>$row){
											$person = Person::getInstance($row[0]);
											if ($person->canDisplayName()){
												echo "<li><a href=\"".$person->getLinkUrl()."\">".$person->getName()."</a></li>";
											}
										}
										//This closes the Unorderd List
										echo "</ul> ";
									}
									?>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr>
				<td bgcolor = "#9999FF"> <?php print $pgv_lang["desc"]; ?> </td>
				<td bgcolor = "#CCCCFF"> <?php
								if ($mediaobject->getNote()!= ""){
									print $mediaobject->getNote();
								}
								else{
									print $pgv_lang["no_desc"];
								}
				?>
				 </td>
			</tr>
			<tr>
				<td bgcolor = "#9999FF"> <?php print $pgv_lang["file_name"]; ?> </td>
				<td bgcolor = "#CCCCFF"> <?php print $mediaobject->getFilename(); ?> </td>
			</tr>
			<tr >
				<td bgcolor = "#9999FF"> <?php print $pgv_lang["file_type"]?> </td>
				<td bgcolor = "#CCCCFF"> <?php print $mediaobject->getFiletype(); ?> </td>
			</tr>
			<?php
				//This does another check to see if the file exists.
				//If so it will then check to see if the file's image size is null.
				//If the file is null, it will not show the width and the height of the image
				if (file_exists($mediaobject->getFilename())){
					if ($imagesize[0]){
				?>
				<tr>
					<td bgcolor = "#9999FF"> <?php print $pgv_lang["img_size"] ?> </td>
					<td bgcolor = "#CCCCFF"> <?php
					print $pgv_lang["width"].$imagesize[0];
					print "<br/>";
					print $pgv_lang["height"].$imagesize[1];
					?> </td>
				</tr>
					<?php
					}
					?>

				<tr >
					<td bgcolor = "#9999FF"> <?php print $pgv_lang["file_size"]?> </td>
					<td bgcolor = "#CCCCFF"> <?php
					//Prints the file size
					$size = filesize($mediaobject->getFilename());
					//Rounds the size of the imgae to 2 decimal places
					$size = round($size/1024, 2);
					print $size." kb";
					?> </td>
				</tr>
				<?php
				}
			?>
		</table>

	<?php
	//Prints the footer
	print_footer();
}
else{
	//If there isn't any media loaded then this will print the no media tag.
	echo "<div align=\"center\">".$pgv_lang["no_media"]."</div>";
	print_footer();
}
?>
<?php
// These JavaScript functions are needed for the code to work properly with the menu.
?>
<script language="JavaScript" type="text/javascript">
<!--
function open_link_remote(pid){
	window.open("addremotelink.php?pid="+pid, "_blank", "top=50,left=50,width=600,height=500,scrollbars=1,scrollable=1,resizable=1");
	return false;
}
// javascript function to open the original imageviewer.php page
function openImageViewer(){
	window.open("imageview.php?filename="+<?php print $filename ?>, "Image View");
	return false;
}
// javascript function to open a window with the raw gedcom in it
function show_gedcom_record(shownew) {
	fromfile="";
	if (shownew=="yes") fromfile='&fromfile=1';
	var recwin = window.open("gedrecord.php?pid=<?php print $controller->pid; ?>"+fromfile, "_blank", "top=50,left=50,width=600,height=400,scrollbars=1,scrollable=1,resizable=1");
}

function showchanges() {
	window.location = 'mediaview.php?mid=<?php print $controller->pid; ?>';
}
// The function below does not go well with validation.
// The option to use getElementsByName is used in connection with code from
// the functions_print.php file.
function togglerow(label) {
	ebn = document.getElementsByName(label);
	if (ebn.length) disp = ebn[0].style.display;
	else disp="";
	if (disp=="none") {
		disp="table-row";
		if (document.all) disp="inline"; // IE
		document.getElementById('rela_plus').style.display="none";
		document.getElementById('rela_minus').style.display="inline";
	}
	else {
		disp="none";
		document.getElementById('rela_plus').style.display="inline";
		document.getElementById('rela_minus').style.display="none";
	}
	for (i=0; i<ebn.length; i++) ebn[i].style.display=disp;
}
function tabswitch(n) {
	var tabid = new Array('0', 'facts','notes','sources','media','relatives','researchlog');
	<?php if (file_exists("modules/googlemap/defaultconfig.php")) {?>
	var tabid = new Array('0', 'facts','notes','sources','media','relatives','researchlog','googlemap');
	<?php }?>
	if (!tabid[n]) n = 1;
	// show all tabs ?
	var disp='none';
	if (n==0) disp='block';
	// reset all tabs areas
	for (i=1; i<tabid.length; i++) document.getElementById(tabid[i]).style.display=disp;
	// current tab area
	if (n>0) {
		document.getElementById(tabid[n]).style.display='block';
	}
	// empty tabs
	for (i=0; i<tabid.length; i++) {
		var elt = document.getElementById('door'+i);
		if (document.getElementById('no_tab'+i)) { // empty ?
			if (<?php if (userCanEdit(getUserName())) echo 'true'; else echo 'false';?>) {
				elt.style.display='block';
				elt.style.opacity='0.4';
				elt.style.filter='alpha(opacity=40)';
			}
			else elt.style.display='none'; // empty and not editable ==> hide
			//if (i==3 && <?php if ($SHOW_SOURCES>=getUserAccessLevel(getUserName())) echo 'true'; else echo 'false';?>) elt.style.display='none'; // no sources
			if (i==4 && <?php if (!$MULTI_MEDIA) echo 'true'; else echo 'false';?>) elt.style.display='none'; // no multimedia
			if (i==6) elt.style.display='none'; // hide researchlog
			// ALL : hide empty contents
			if (n==0) document.getElementById(tabid[i]).style.display='none';
		}
		else elt.style.display='block';
	}
	// current door
	for (i=0; i<tabid.length; i++) {
		document.getElementById('door'+i).className='door optionbox rela';
		//document.getElementById('door'+i).className='tab_cell_inactive';
	}
	document.getElementById('door'+n).className='door optionbox';
	//document.getElementById('door'+n).className='tab_cell_active';
	//set a cookie which stores the last tab they clicked on
	document.cookie = "lasttabs=<?php print $controller->getCookieTabString().$controller->pid; ?>="+n;
	return false;
}

// function is required by cloudy theme
function resize_content_div(i) {
	 // check for container ..
	var cont = document.getElementById("content");
	if (!cont) cont = document.getElementById("container");
	if (cont) {
		if (document.getElementById("marker"+i)) {
			var y = getAbsoluteTop("marker"+i);
			if (y<300) y=600;
			cont.style.height =y.toString()+'px';
		}
	}
}
//-->
</script>

