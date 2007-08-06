<?php
/**
 * Finnish Date Functions that can be used by any page in PGV
 * Other functions that are specific to Finnish can be added here too
 *
 * The functions in this file are common to all PGV pages and include date conversion
 * routines and sorting functions.
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
 * @version $Id$
 */

if (stristr($_SERVER["SCRIPT_NAME"], basename(__FILE__))!==false) {
	print "You cannot access an include file directly.";
	exit;
}

//-- functions to take a date and display it in Finnish.
//-- provided by: KurtNorgaz
//-- updated by Meliza
function getFinnishDate($datestr, $day) {
	global $pgv_lang;

	//-- the Finnish text of the value for one date is shown at the end of the date
	//-- the Finnish values of two dates are replaced by a -
	$array_short = array("aft", "bet", "from", "to");
	foreach($array_short as $indexval => $value) {

	  $oldDateStr = $datestr;
	  $newdatestr = preg_replace("/$value([^a-zA-Z])/i", "" . "\$1", $datestr);
	  if ($newdatestr != $datestr) {

		$datestr = $newdatestr;

		switch ($value) {
		  case "from" : $datestr = trim($datestr);
						$temp_date = strtolower($datestr);
						$pos_of_to = strpos(" ".$temp_date, "to");
						$newdatestr = preg_replace("/to/", "", $temp_date);
						if ($newdatestr != $temp_date) {
							$datestr_01 = trim(substr($datestr, 0, $pos_of_to - 2));
							$datestr_02 = substr($datestr, $pos_of_to + 1);
							$datestr = $datestr_01." - ".$datestr_02." ";
						}
						else $datestr = $datestr." ".$pgv_lang[$value];
						break;
		  case "bet"  : $datestr = trim($datestr);
						$temp_date = strtolower($datestr);
						$pos_of_and = strpos(" ".$temp_date, "and");
						$datestr_01 = trim(substr($datestr, 0, $pos_of_and - 2));
						$datestr_02 = substr($datestr, $pos_of_and + 2);
						if (strlen($datestr_01) > 0 && strlen($datestr_02) > 0)
							$datestr = $datestr_01." - ".$datestr_02." ";
						break;
		  case "to"   : $datestr = $newdatestr." ".$pgv_lang[$value]; break;
		  case "aft"  : $datestr = $newdatestr." ".$pgv_lang[$value]; break;
		  default	  : $datestr = $oldDateStr; break;
		}
	  }
	}
	//-- the Finnish text of the value is shown bau before the date
	$array_short = array("abt", "apx", "bef", "cal", "est", "int", "cir");
	foreach($array_short as $indexval => $value) {
		$datestr = preg_replace("/^$value([^a-zA-Z])/i", $pgv_lang[$value]."\$1", $datestr);
		$datestr = preg_replace("/(\W)$value([^a-zA-Z])/i", "\$1".$pgv_lang[$value]."\$2", $datestr);
	}
	//-- Constant 'ta' is appended to the Finnish month values, if a day value exists (for the last date)
	$array_short = array("jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec");
	foreach($array_short as $indexval => $value) {

	if ($day > 0) {
		 $datestr = preg_replace("/(\W)$value([^a-zA-Z])/i", "\$1".$pgv_lang[$value]."ta"."\$2", $datestr);
		 $datestr = preg_replace("/^$value([^a-zA-Z])/i", $pgv_lang[$value]."ta"."\$1", $datestr);
	  }
	else {
		 $datestr = preg_replace("/(\W)$value([^a-zA-Z])/i", "\$1".$pgv_lang[$value]."\$2", $datestr);
		 $datestr = preg_replace("/^$value([^a-zA-Z])/i", $pgv_lang[$value]."\$1", $datestr);
	  }
	}
	return $datestr;
}

//-- functions to calculate finnish specific genitive names
// NOTE this function is incomplete and probably very inefficient.
// I've decided that for now the task is beyond me, I have looked
// for a freely availiable algorithm and failed to find one.
// it is best left to a finnish speaker
function getFirstRelationsName_fi($pid)
{
    // In Finnish we want the genitive form of the name
    $name = get_person_name($pid);

	// for now I have been asked to remove the body of this function - if any Finnish
	// speaker can sort this out I would be grateful.
    return $name;

    // First we look for Consonant gradation
    if(preg_match("/kki$/", $name))
	{
	    preg_replace("/kki$/", "kin", $name);
	}
    else if(preg_match("/kka$/", $name))
	{
	    preg_replace("/kka$/", "kan", $name);
	}
    else if(preg_match("/ppi$/", $name))
	{
	    preg_replace("/ppi$/", "pin", $name);
	}
    else if(preg_match("/ppa$/", $name))
	{
	    preg_replace("/ppa$/", "pan", $name);
	}
    else if(preg_match("/tti$/", $name))
	{
	    preg_replace("/tti$/", "tin", $name);
	}
    else if(preg_match("/tta$/", $name))
	{
	    preg_replace("/tta$/", "tan", $name);
	}
    else if(preg_match("/nti$/", $name))
	{
	    preg_replace("/nti$/", "nnin", $name);
	}
    else if(preg_match("/nta$/", $name))
	{
	    preg_replace("/nta$/", "nnan", $name);
	}


    //Now we sort out endings
	// Names ending in 'e' now end 'een'
    else if(preg_match("/e$/", $name))
	{
	    $name = $name . "en";
	}
	// Names ending 'nen' now end 'sen'
	else if(preg_match("/nen$/", $name))
	{
	    preg_replace("/nen$/", "sen", $name);
	}
	// Names ending 'n' now end 'men'
	else if(preg_match("/n$/", $name))
	{
	    preg_replace("/n$/", "men", $name);
	}
	// Names ending 'si' now end 'den'
	else if(preg_match("/si$/", $name))
	{
	    preg_replace("/si$/", "den", $name);
	}
	// Names ending 'is' now end 'iin'
	else if(preg_match("/is$/", $name))
	{
	    preg_replace("/is$/", "iin", $name);
	}
	// Names ending 'as' now end 'aan'
	else if(preg_match("/as$/", $name))
	{
	    preg_replace("/as$/", "aan", $name);
	}
	// Names ending 'a' now end 'aan'
	else if(preg_match("/a$/", $name))
	{
	    preg_replace("/a$/", "aan", $name);
	}
	// Names ending 'us' now end 'ksen'
	else if(preg_match("/us$/", $name))
	{
	    preg_replace("/us$/", "ksen", $name);
	}
	// Names ending 'ys' now end 'ksen'
	else if(preg_match("/ys$/", $name))
	{
	    preg_replace("/ys$/", "ksen", $name);
	}
	// Names ending 'os' now end 'ksen'
	else if(preg_match("/os$/", $name))
	{
	    preg_replace("/os$/", "ksen", $name);
	}
	// Names ending 'ös' now end 'ksen'
	else if(preg_match("/ös$/", $name))
	{
	    preg_replace("/ös$/", "ksen", $name);
	}
	// All other names have 'n' appended
	else
	{
	    $name = $name . "n";
	}

    return $name;
}
?>
