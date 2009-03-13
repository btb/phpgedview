<?php
/**
 * PEAR:DB specific functions file
 *
 * This file implements the datastore functions necessary for PhpGedView to use an SQL database as its
 * datastore. This file also implements array caches for the database tables.  Whenever data is
 * retrieved from the database it is stored in a cache.  When a database access is requested the
 * cache arrays are checked first before querying the database.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @version $Id$
 * @package PhpGedView
 * @subpackage DB
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_FUNCTIONS_DB_PHP', '');

//-- load the PEAR:DB files
require_once 'DB.php';

//-- set the REGEXP status of databases
$REGEXP_DB = (stristr($DBTYPE,'mysql') !== false || $DBTYPE=='pgsql');

/**
 * Field and function definition variances between sql databases
 */
switch ($DBTYPE) {
case 'mssql':
	define('PGV_DB_AUTO_ID_TYPE',  'INTEGER IDENTITY');
	define('PGV_DB_INT1_TYPE',     'INTEGER');
	define('PGV_DB_INT2_TYPE',     'INTEGER');
	define('PGV_DB_INT3_TYPE',     'INTEGER');
	define('PGV_DB_INT4_TYPE',     'INTEGER');
	define('PGV_DB_INT8_TYPE',     'INTEGER');
	define('PGV_DB_CHAR_TYPE',     'VARCHAR');
	define('PGV_DB_VARCHAR_TYPE',  'VARCHAR');
	define('PGV_DB_UNSIGNED',      '');
	define('PGV_DB_LIKE',          'LIKE');
	define('PGV_DB_RANDOM',        'NEWID');
	define('PGV_DB_TEXT_TYPE',     'TEXT');
	define('PGV_DB_LONGTEXT_TYPE', 'TEXT');
	define('PGV_DB_BEGIN_TRANS',   'BEGIN TRANSACTION');
	define('PGV_DB_COMMIT_TRANS',  'COMMIT TRANSACTION');
	break;
case 'sqlite':
	define('PGV_DB_AUTO_ID_TYPE',  'INTEGER AUTOINCREMENT');
	define('PGV_DB_INT1_TYPE',     'INTEGER');
	define('PGV_DB_INT2_TYPE',     'INTEGER');
	define('PGV_DB_INT3_TYPE',     'INTEGER');
	define('PGV_DB_INT4_TYPE',     'INTEGER');
	define('PGV_DB_INT8_TYPE',     'INTEGER');
	define('PGV_DB_CHAR_TYPE',     'VARCHAR');
	define('PGV_DB_VARCHAR_TYPE',  'VARCHAR');
	define('PGV_DB_UNSIGNED',      '');
	define('PGV_DB_LIKE',          'LIKE');
	define('PGV_DB_RANDOM',        'RANDOM()');
	define('PGV_DB_TEXT_TYPE',     'TEXT');
	define('PGV_DB_LONGTEXT_TYPE', 'TEXT');
	define('PGV_DB_BEGIN_TRANS',   'BEGIN');
	define('PGV_DB_COMMIT_TRANS',  'COMMIT');
	break;
case 'pgsql':
	define('PGV_DB_AUTO_ID_TYPE',  'SERIAL');
	define('PGV_DB_INT1_TYPE',     'SMALLINT');
	define('PGV_DB_INT2_TYPE',     'SMALLINT');
	define('PGV_DB_INT3_TYPE',     'INTEGER');
	define('PGV_DB_INT4_TYPE',     'INTEGER');
	define('PGV_DB_INT8_TYPE',     'BIGINT');
	define('PGV_DB_CHAR_TYPE',     'CHAR');
	define('PGV_DB_VARCHAR_TYPE',  'VARCHAR');
	define('PGV_DB_UNSIGNED',      '');
	define('PGV_DB_LIKE',          'ILIKE');
	define('PGV_DB_RANDOM',        'RANDOM()');
	define('PGV_DB_TEXT_TYPE',     'TEXT');
	define('PGV_DB_LONGTEXT_TYPE', 'TEXT');
	define('PGV_DB_BEGIN_TRANS',   'BEGIN');
	define('PGV_DB_COMMIT_TRANS',  'COMMIT');
	break;
case 'mysql':
default:
	define('PGV_DB_AUTO_ID_TYPE',  'INTEGER UNSIGNED AUTO_INCREMENT');
	define('PGV_DB_INT1_TYPE',     'TINYINT');
	define('PGV_DB_INT2_TYPE',     'SMALLINT');
	define('PGV_DB_INT3_TYPE',     'MEDIUMINT');
	define('PGV_DB_INT4_TYPE',     'INT');
	define('PGV_DB_INT8_TYPE',     'BIGINT');
	define('PGV_DB_CHAR_TYPE',     'CHAR');
	define('PGV_DB_VARCHAR_TYPE',  'VARCHAR');
	define('PGV_DB_UNSIGNED',      'UNSIGNED');
	define('PGV_DB_LIKE',          'LIKE');
	define('PGV_DB_RANDOM',        'RAND()');
	define('PGV_DB_TEXT_TYPE',     'TEXT');
	define('PGV_DB_LONGTEXT_TYPE', 'LONGTEXT');
	define('PGV_DB_BEGIN_TRANS',   'BEGIN');
	define('PGV_DB_COMMIT_TRANS',  'COMMIT');
	break;
}

// Define some "standard" columns, so we create our tables consistently
define('PGV_DB_COL_FILE', PGV_DB_INT2_TYPE.' '.PGV_DB_UNSIGNED);
define('PGV_DB_COL_XREF', PGV_DB_VARCHAR_TYPE.'(63)');

//-- uncomment the following line to turn on sql query logging
//$SQL_LOG = true;

/**
 * query the database
 *
 * this function will perform the given SQL query on the database
 * @param string $sql		the sql query to execture
 * @param boolean $show_error	whether or not to show any error messages
 * @param int $count	the number of records to return, 0 returns all
 * @return DB_result the connection result
 */
function &dbquery($sql, $show_error=true, $count=0) {
	global $DBCONN, $TOTAL_QUERIES, $INDEX_DIRECTORY, $SQL_LOG, $LAST_QUERY, $CONFIGURED;

	if (!$CONFIGURED)
		return false;
	if (!isset($DBCONN)) {
		return false;
	}
	//-- make sure a database connection has been established
	if (DB::isError($DBCONN)) {
		if ($DBCONN->getCode()!=-24)
			print $DBCONN->getCode()." ".$DBCONN->getMessage();
		return $DBCONN;
	}

	/**
	 * Debugging code for multi-database support
	 */
/* -- commenting out for final release
	if (preg_match('/[^\\\]"/', $sql)>0) {
		pgv_error_handler(2, "<span class=\"error\">Incompatible SQL syntax. Double quote query: $sql</span><br />","","");
	}
	if (preg_match('/LIMIT \d/', $sql)>0) {
		pgv_error_handler(2,"<span class=\"error\">Incompatible SQL syntax. Limit query error, use dbquery \$count parameter instead: $sql</span><br />","","");
	}
	if (preg_match('/(&&)|(\|\|)/', $sql)>0) {
		pgv_error_handler(2,"<span class=\"error\">Incompatible SQL syntax.  Use 'AND' instead of '&&'.  Use 'OR' instead of '||'.: $sql</span><br />","","");
	}
	*/

	if (!empty($SQL_LOG))
		$start_time2 = microtime(true);
	if ($count == 0)
		$res =& $DBCONN->query($sql);
	else
		$res =& $DBCONN->limitQuery($sql, 0, $count);

	$LAST_QUERY = $sql;
	$TOTAL_QUERIES++;
	if (!empty($SQL_LOG)) {
		global $start_time;
		$end_time = microtime(true);
		$exectime = $end_time - $start_time;
		$exectime2 = $end_time - $start_time2;

		if ($count>0)
			$sql = $DBCONN->modifyLimitQuery($sql, 0, $count);

		$fp = fopen($INDEX_DIRECTORY."/sql_log.txt", "a");
		$backtrace = debug_backtrace();
		$temp = "";
		if (!DB::isError($res) && is_object($res))
			$temp .= "\t".$res->numRows()."\t";
		if (isset($backtrace[3]))
			$temp .= basename($backtrace[3]["file"])." (".$backtrace[3]["line"].")";
		if (isset($backtrace[2]))
			$temp .= basename($backtrace[2]["file"])." (".$backtrace[2]["line"].")";
		if (isset($backtrace[1]))
			$temp .= basename($backtrace[1]["file"])." (".$backtrace[1]["line"].")";
		$temp .= basename($backtrace[0]["file"])." (".$backtrace[0]["line"].")";
		fwrite($fp, date("Y-m-d H:i:s")."\t".sprintf(" %.4f %.4f sec", $exectime, $exectime2).$_SERVER["SCRIPT_NAME"]."\t".$temp."\t".$TOTAL_QUERIES."-".$sql."\r\n");
		fclose($fp);
	}
	if (DB::isError($res) && $show_error) {
		print "<span class=\"error\"><b>ERROR:".$res->getCode()." ".$res->getMessage()." <br />SQL:</b>".$res->getUserInfo()."</span><br /><br />\n";
	}
	return $res;
}

/**
 * Clean up an item retrieved from the database
 *
 * clean the slashes and convert special
 * html characters to their entities for
 * display and entry into form elements
 * @param mixed $item	the item to cleanup
 * @return mixed the cleaned up item
 */
function db_cleanup($item) {
	if (is_array($item)) {
		foreach ($item as $key=>$value) {
			if ($key!="gedcom")
				$item[$key]=stripslashes($value);
			else
				$key=$value;
		}
		return $item;
	} else {
		return stripslashes($item);
	}
}

/**
 * check if a gedcom has been imported into the database
 *
 * this function checks the database to see if the given gedcom has been imported yet.
 * @param string $ged the filename of the gedcom to check for import
 * @return bool return true if the gedcom has been imported otherwise returns false
 */
function check_for_import($ged) {
	global $TBLPREFIX, $DBCONN, $GEDCOMS;

	if (DB::isError($DBCONN))
		return false;
	if (count($GEDCOMS)==0)
		return false;
	if (!isset($GEDCOMS[$ged]))
		return false;

	if (!isset($GEDCOMS[$ged]["imported"])) {
		$GEDCOMS[$ged]["imported"] = false;
			$sql = "SELECT count(i_id) FROM ".$TBLPREFIX."individuals WHERE i_file=".$DBCONN->escapeSimple($GEDCOMS[$ged]["id"]);
			$res = dbquery($sql, false);

			if (!empty($res) && !DB::isError($res) && is_object($res)) {
				$row =& $res->fetchRow();
				$res->free();
				if ($row[0]>0) {
					$GEDCOMS[$ged]["imported"] = true;
				}
			}
		store_gedcoms();
	}

	return $GEDCOMS[$ged]["imported"];
}

// Generate a modulus function for various flavours of sql
function sql_mod_function($x,$y) {
	global $DBTYPE;

	switch ($DBTYPE) {
	case 'sqlite':
		return "(($x)%($y))";
	default:
		return "MOD($x,$y)";
	}
}

//-- gets the first record in the gedcom
function get_first_xref($type, $ged_id=PGV_GED_ID) {
	global $TBLPREFIX, $DBCONN;

	switch ($type) {
	case "INDI":
		$sql="SELECT MIN(i_id) FROM {$TBLPREFIX}individuals WHERE i_file=".$ged_id;
		break;
	case "FAM":
		$sql="SELECT MIN(f_id) FROM ".$TBLPREFIX."families WHERE f_file=".$ged_id;
		break;
	case "SOUR":
		$sql="SELECT MIN(s_id) FROM ".$TBLPREFIX."sources WHERE s_file=".$ged_id;
		break;
	case "OBJE":
		$sql="SELECT MIN(m_media) FROM ".$TBLPREFIX."media WHERE m_gedfile=".$ged_id;
		break;
	default:
		$sql="SELECT MIN(o_id) FROM ".$TBLPREFIX."other WHERE o_file=".$ged_id." AND o_type='{$type}'";
		break;
	}
	$res=dbquery($sql);
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}

//-- gets the last record in the gedcom
function get_last_xref($type, $ged_id=PGV_GED_ID) {
	global $TBLPREFIX, $DBCONN;

	switch ($type) {
	case "INDI":
		$sql="SELECT MAX(i_id) FROM {$TBLPREFIX}individuals WHERE i_file=".$ged_id;
		break;
	case "FAM":
		$sql="SELECT MAX(f_id) FROM ".$TBLPREFIX."families WHERE f_file=".$ged_id;
		break;
	case "SOUR":
		$sql="SELECT MAX(s_id) FROM ".$TBLPREFIX."sources WHERE s_file=".$ged_id;
		break;
	case "OBJE":
		$sql="SELECT MAX(m_media) FROM ".$TBLPREFIX."media WHERE m_gedfile=".$ged_id;
		break;
	default:
		$sql="SELECT MAX(o_id) FROM ".$TBLPREFIX."other WHERE o_file=".$ged_id." AND o_type='{$type}'";
		break;
	}
	$res=dbquery($sql);
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}

//-- gets the next person in the gedcom
function get_next_xref($pid, $ged_id=PGV_GED_ID) {
	global $TBLPREFIX, $DBCONN;

	$type=gedcom_record_type($pid, $ged_id);
	$pid=$DBCONN->escapeSimple($pid);
	switch ($type) {
	case "INDI":
		$sql="SELECT MIN(i_id) FROM {$TBLPREFIX}individuals WHERE i_file={$ged_id} AND i_id>'{$pid}'";
		break;
	case "FAM":
		$sql="SELECT MIN(f_id) FROM ".$TBLPREFIX."families WHERE f_file=".$ged_id." AND f_id>'{$pid}'";
		break;
	case "SOUR":
		$sql="SELECT MIN(s_id) FROM ".$TBLPREFIX."sources WHERE s_file=".$ged_id." AND s_id>'{$pid}'";
		break;
	case "OBJE":
		$sql="SELECT MIN(m_media) FROM ".$TBLPREFIX."media WHERE m_gedfile=".$ged_id." AND m_media>'{$pid}'";
		break;
	default:
		$sql="SELECT MIN(o_id) FROM ".$TBLPREFIX."other WHERE o_file=".$ged_id." AND o_id>'{$pid}' AND o_type='{$type}'";
		break;
	}
	$res=dbquery($sql);
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}

//-- gets the previous person in the gedcom
function get_prev_xref($pid, $ged_id=PGV_GED_ID) {
	global $TBLPREFIX, $DBCONN;

	$type=gedcom_record_type($pid, $ged_id);
	$pid=$DBCONN->escapeSimple($pid);
	switch ($type) {
	case "INDI":
		$sql="SELECT MAX(i_id) FROM {$TBLPREFIX}individuals WHERE i_file={$ged_id} AND i_id<'{$pid}'";
		break;
	case "FAM":
		$sql="SELECT MAX(f_id) FROM ".$TBLPREFIX."families WHERE f_file=".$ged_id." AND f_id<'{$pid}'";
		break;
	case "SOUR":
		$sql="SELECT MAX(s_id) FROM ".$TBLPREFIX."sources WHERE s_file=".$ged_id." AND s_id<'{$pid}'";
		break;
	case "OBJE":
		$sql="SELECT MAX(m_media) FROM ".$TBLPREFIX."media WHERE m_gedfile=".$ged_id." AND m_media<'{$pid}'";
		break;
	default:
		$sql="SELECT MAX(o_id) FROM ".$TBLPREFIX."other WHERE o_file=".$ged_id." AND o_id<'{$pid}' AND o_type='{$type}'";
		break;
	}
	$res=dbquery($sql);
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}

////////////////////////////////////////////////////////////////////////////////
// Count the number of records linked to a given record
////////////////////////////////////////////////////////////////////////////////
function count_linked_indi($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT COUNT(*) FROM {$TBLPREFIX}individuals WHERE i_file={$ged_id} AND i_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}
function count_linked_fam($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT COUNT(*) FROM {$TBLPREFIX}families WHERE f_file={$ged_id} AND f_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}
function count_linked_sour($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT COUNT(*) FROM {$TBLPREFIX}sources WHERE s_file={$ged_id} AND s_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}
function count_linked_obje($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT COUNT(*) FROM {$TBLPREFIX}media WHERE m_gedfile={$ged_id} AND m_gedrec LIKE '%{$like}%' ESCAPE '@'");
	$row=$res->fetchRow();
	$res->free();
	return $row[0];
}

////////////////////////////////////////////////////////////////////////////////
// Fetch records linked to a given record
////////////////////////////////////////////////////////////////////////////////
function fetch_linked_indi($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT 'INDI' AS type, i_id AS xref, {$ged_id} AS ged_id, i_gedcom AS gedrec, i_isdead FROM {$TBLPREFIX}individuals WHERE i_file={$ged_id} AND i_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Person::getInstance($row);
	}
	$res->free();
	return $list;
}
function fetch_linked_fam($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;	
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT 'FAM' AS type, f_id AS xref, {$ged_id} AS ged_id, f_gedcom AS gedrec, f_husb, f_wife, f_chil, f_numchil FROM {$TBLPREFIX}families WHERE f_file={$ged_id} AND f_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Family::getInstance($row);
	}
	$res->free();
	return $list;
}
function fetch_linked_sour($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN; 
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT 'SOUR' AS type, s_id AS xref, {$ged_id} AS ged_id, s_gedcom AS gedrec FROM {$TBLPREFIX}sources WHERE s_file={$ged_id} AND s_gedcom LIKE '%{$like}%' ESCAPE '@'");
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Source::getInstance($row);
	}
	$res->free();
	return $list;
}
function fetch_linked_obje($xref, $link, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$link=$DBCONN->escapeSimple($link);
	$ged_id=(int)$ged_id;
	$like="\n_ {$link} ".str_replace(array('@', '%', '_'), array('@@', '@%', '@_'), '@'.$xref.'@');
	$res=dbquery("SELECT 'OBJE' AS type, m_media AS xref, {$ged_id} AS ged_id, m_gedrec AS gedrec, m_titl, m_file FROM {$TBLPREFIX}media WHERE m_gedfile={$ged_id} AND m_gedrec LIKE '%{$like}%' ESCAPE '@'");
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Media::getInstance($row);
	}
	$res->free();
	return $list;
}

////////////////////////////////////////////////////////////////////////////////
// Fetch a row from the database, corresponding to a gedcom record.
// These functions are used to create gedcom objects.
// To simplify common processing, the xref, gedcom id and gedcom record are
// renamed consistently.  The other columns are fetched as they are.
////////////////////////////////////////////////////////////////////////////////
function fetch_person_record($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$ged_id=(int)$ged_id;
	$res=dbquery(
		"SELECT 'INDI' AS type, i_id AS xref, {$ged_id} AS ged_id, i_gedcom AS gedrec, i_isdead ".
		"FROM {$TBLPREFIX}individuals WHERE i_id='{$xref}' AND i_file={$ged_id}"
	);
	$row=$res->fetchRow(DB_FETCHMODE_ASSOC);
	$res->free();
	return $row;
}
function fetch_family_record($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$ged_id=(int)$ged_id;
	$res=dbquery(
		"SELECT 'FAM' AS type, f_id AS xref, {$ged_id} AS ged_id, f_gedcom AS gedrec, f_husb, f_wife, f_chil, f_numchil ".
		"FROM {$TBLPREFIX}families WHERE f_id='{$xref}' AND f_file={$ged_id}"
	);
	$row=$res->fetchRow(DB_FETCHMODE_ASSOC);
	$res->free();
	return $row;
}
function fetch_source_record($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$ged_id=(int)$ged_id;
	$res=dbquery(
		"SELECT 'SOUR' AS type, s_id AS xref, {$ged_id} AS ged_id, s_gedcom AS gedrec ".
		"FROM {$TBLPREFIX}sources WHERE s_id='{$xref}' AND s_file={$ged_id}"
	);
	$row=$res->fetchRow(DB_FETCHMODE_ASSOC);
	$res->free();
	return $row;
}
function fetch_media_record($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$ged_id=(int)$ged_id;
	$res=dbquery(
		"SELECT 'OBJE' AS type, m_media AS xref, {$ged_id} AS ged_id, m_gedrec AS gedrec, m_titl, m_file ".
		"FROM {$TBLPREFIX}media WHERE m_media='{$xref}' AND m_gedfile={$ged_id}"
	);
	$row=$res->fetchRow(DB_FETCHMODE_ASSOC);
	$res->free();
	return $row;
}
function fetch_other_record($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN;
	$xref=$DBCONN->escapeSimple($xref);
	$ged_id=(int)$ged_id;
	$res=dbquery(
		"SELECT o_type AS type, o_id AS xref, {$ged_id} AS ged_id, o_gedcom AS gedrec ".
		"FROM {$TBLPREFIX}other WHERE o_id='{$xref}' AND o_file={$ged_id}"
	);
	$row=$res->fetchRow(DB_FETCHMODE_ASSOC);
	$res->free();
	return $row;
}
function fetch_gedcom_record($xref, $ged_id) {
	if ($row=fetch_person_record($xref, $ged_id)) {
		return $row;
	} elseif ($row=fetch_family_record($xref, $ged_id)) {
		return $row;
	} elseif ($row=fetch_source_record($xref, $ged_id)) {
		return $row;
	} elseif ($row=fetch_media_record($xref, $ged_id)) {
		return $row;
	} else {
		return fetch_other_record($xref, $ged_id);
	}
}

/**
 * find the gedcom record for a family
 *
 * This function first checks the <var>$famlist</var> cache to see if the family has already
 * been retrieved from the database.  If it hasn't been retrieved, then query the database and
 * add it to the cache.
 * also lookup the husb and wife so that they are in the cache
 * @link http://phpgedview.sourceforge.net/devdocs/arrays.php#family
 * @param string $famid the unique gedcom xref id of the family record to retrieve
 * @return string the raw gedcom record is returned
 */
function find_family_record($pid, $gedfile='') {
	global $TBLPREFIX, $GEDCOM, $DBCONN, $famlist;

	if (!$pid) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	// Try the cache files first.
	if (isset($famlist[$pid]['gedcom']) && $famlist[$pid]['gedfile']==$ged_id) {
		return $famlist[$pid]['gedcom'];
	}

	// Look in the table.
	$escpid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT f_gedcom, f_husb, f_wife, f_numchil FROM {$TBLPREFIX}families ".
		"WHERE f_id='{$escpid}' AND f_file={$ged_id}"
	);
	if (DB::isError($res)) {
		return "";
	}
	$row=$res->fetchRow();
	$res->free();

	if ($row) {
		// Don't cache records from other gedcoms
		if ($ged_id==PGV_GED_ID) {
			$famlist[$pid]=array('gedcom'=>$row[0], 'husb'=>$row[1], 'wife'=>$row[2], 'numchil'=>$row[3], 'gedfile'=>$ged_id);
		}
		find_person_record($row[1]);
		find_person_record($row[2]);
		return $row[0];
	} else {
		return null;
	}
}

/**
 * Load up a group of families into the cache by their ids from an array
 * This function is useful for optimizing pages that need to reference large
 * sets of families without loading them up individually
 * @param array $ids	an array of ids to load up
 */
function load_families($ids) {
	global $TBLPREFIX, $DBCONN, $famlist;

	// don't load up records that are already loaded
	foreach ($ids as $k=>$id) {
		if (!$id || isset($famlist[$id]['gedcom']) && $famlist[$id]['gedfile']==PGV_GED_ID) {
			unset ($ids[$k]);
		} else {
			$ids[$k]="'".$DBCONN->escapeSimple($id)."'";
		}
	}

	if ($ids) {
		$res=dbquery(
			"SELECT f_gedcom, f_id, f_husb, f_wife, f_numchil FROM {$TBLPREFIX}families ".
			"WHERE f_id IN (".join(',', $ids).") AND f_file=".PGV_GED_ID
		);
		$parents = array();
		while ($row=$res->fetchRow()) {
			$famlist[$row[1]]=array('gedcom'=>$row[0], 'gedfile'=>PGV_GED_ID, 'husb'=>$row[2], 'wife'=>$row[3], 'numchil'=>$row[4]);
			$parents[]=$row[2];
			$parents[]=$row[3];
		}
		$res->free();
		load_people(array($row[2], $row[3]));
	}
}

/**
 * find the gedcom record for an individual
 *
 * This function first checks the <var>$indilist</var> cache to see if the individual has already
 * been retrieved from the database.  If it hasn't been retrieved, then query the database and
 * add it to the cache.
 * @link http://phpgedview.sourceforge.net/devdocs/arrays.php#indi
 * @param string $pid the unique gedcom xref id of the individual record to retrieve
 * @return string the raw gedcom record is returned
 */
function find_person_record($pid, $gedfile='') {
	global $TBLPREFIX, $GEDCOM, $DBCONN, $indilist;

	if (!$pid) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	// Try the cache files first.
	if ((isset($indilist[$pid]['gedcom']))&&($indilist[$pid]['gedfile']==$ged_id)) {
		return $indilist[$pid]['gedcom'];
	}

	// Look in the table.
	$escpid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT i_gedcom, i_isdead  FROM {$TBLPREFIX}individuals ".
		"WHERE i_id='{$escpid}' AND i_file={$ged_id}"
	);
	if (DB::isError($res)) return "";
	$row=$res->fetchRow();
	$res->free();

	if ($row) {
		// Don't cache records from other gedcoms
		if ($ged_id==PGV_GED_ID) {
			$indilist[$pid]=array('gedcom'=>$row[0], 'isdead'=>$row[1], 'gedfile'=>$ged_id);
		}
		return $row[0];
	} else {
		return null;
	}
}

/**
 * Load up a group of people into the cache by their ids from an array
 * This function is useful for optimizing pages that need to reference large
 * sets of people without loading them up individually
 * @param array $ids	an array of ids to load up
 */
function load_people($ids) {
	global $TBLPREFIX, $DBCONN, $indilist;

	$myindilist = array();

	// don't load up records that are already loaded
	foreach ($ids as $k=>$id) {
		if (!$id || isset($indilist[$id]['gedcom']) && $indilist[$id]['gedfile']==PGV_GED_ID) {
			if ($id) {
				$myindilist[$id]=$indilist[$id];
			}
			unset ($ids[$k]);
		} else {
			$ids[$k]="'".$DBCONN->escapeSimple($id)."'";
		}
	}

	if ($ids) {
		$res=dbquery(
			"SELECT i_gedcom, i_id, i_isdead  FROM {$TBLPREFIX}individuals ".
			"WHERE i_id IN (".join(',', $ids).") AND i_file=".PGV_GED_ID
		);
		while ($row=$res->fetchRow()) {
			$indilist[$row[1]]=$myindilist[$row[1]]=array('gedcom'=>$row[0], 'isdead'=>$row[2], 'gedfile'=>PGV_GED_ID);
		}
		$res->free();
	}
	return $myindilist;
}

/**
 * find the gedcom record
 *
 * This function first checks the caches to see if the record has already
 * been retrieved from the database.  If it hasn't been retrieved, then query the database and
 * add it to the cache.
 * @link http://phpgedview.sourceforge.net/devdocs/arrays.php#other
 * @param string $pid the unique gedcom xref id of the record to retrieve
 * @param string $gedfile	[optional] the gedcomfile to search in
 * @return string the raw gedcom record is returned
 */
function find_gedcom_record($pid, $gedfile='') {
	global $TBLPREFIX, $GEDCOM, $DBTYPE, $DBCONN, $indilist, $famlist, $sourcelist, $objectlist, $otherlist;

	if (!$pid) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	// Try the cache files first.
	if ((isset($indilist[$pid]["gedcom"]))&&($indilist[$pid]["gedfile"]==$ged_id))
		return $indilist[$pid]["gedcom"];
	if ((isset($famlist[$pid]["gedcom"]))&&($famlist[$pid]["gedfile"]==$ged_id))
		return $famlist[$pid]["gedcom"];
	if ((isset($objectlist[$pid]["gedcom"]))&&($objectlist[$pid]["gedfile"]==$ged_id))
		return $objectlist[$pid]["gedcom"];
	if ((isset($sourcelist[$pid]["gedcom"]))&&($sourcelist[$pid]["gedfile"]==$ged_id))
		return $sourcelist[$pid]["gedcom"];
	if ((isset($otherlist[$pid]["gedcom"]))&&($otherlist[$pid]["gedfile"]==$ged_id))
		return $otherlist[$pid]["gedcom"];

	// Look in the tables.
	$pid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT i_gedcom FROM {$TBLPREFIX}individuals WHERE i_id='{$pid}' AND i_file={$ged_id} UNION ALL ".
		"SELECT f_gedcom FROM {$TBLPREFIX}families    WHERE f_id='{$pid}' AND f_file={$ged_id} UNION ALL ".
		"SELECT s_gedcom FROM {$TBLPREFIX}sources     WHERE s_id='{$pid}' AND s_file={$ged_id} UNION ALL ".
		"SELECT m_gedrec FROM {$TBLPREFIX}media       WHERE m_media='{$pid}' AND m_gedfile={$ged_id} UNION ALL ".
		"SELECT o_gedcom FROM {$TBLPREFIX}other       WHERE o_id='{$pid}' AND o_file={$ged_id}"
	);
	if (DB::isError($res)) {
		debug_print_backtrace();
		return "";
	}
	$row=$res->fetchRow();
	$res->free();
	if ($row) {
		return $row[0];
	}

	// Should only get here if the user is searching using the wrong upper/lower case.
	// Use LIKE to match case-insensitively, as this can still use the database indexes.
	$pid=str_replace(array('_', '%','@'), array('@_','@%', '@@'), $pid);
	$res=dbquery(
		"SELECT i_gedcom FROM {$TBLPREFIX}individuals WHERE i_id ".PGV_DB_LIKE." '{$pid}' ESCAPE '@' AND i_file={$ged_id} UNION ALL ".
		"SELECT f_gedcom FROM {$TBLPREFIX}families    WHERE f_id ".PGV_DB_LIKE." '{$pid}' ESCAPE '@' AND f_file={$ged_id} UNION ALL ".
		"SELECT s_gedcom FROM {$TBLPREFIX}sources     WHERE s_id ".PGV_DB_LIKE." '{$pid}' ESCAPE '@' AND s_file={$ged_id} UNION ALL ".
		"SELECT m_gedrec FROM {$TBLPREFIX}media       WHERE m_media ".PGV_DB_LIKE." '{$pid}' ESCAPE '@' AND m_gedfile={$ged_id} UNION ALL ".
		"SELECT o_gedcom FROM {$TBLPREFIX}other       WHERE o_id ".PGV_DB_LIKE." '{$pid}' ESCAPE '@' AND o_file={$ged_id}"
	);
	$row=$res->fetchRow();
	$res->free();
	if ($row) {
		return $row[0];
	}

	// Record doesn't exist
	return null;
}

// Find the type of a gedcom record. Check the cache before querying the database.
// Returns 'INDI', 'FAM', etc., or null if the record does not exist.
function gedcom_record_type($xref, $ged_id) {
	global $TBLPREFIX, $DBCONN, $TOTAL_QUERIES, $gedcom_record_cache;

	if (isset($gedcom_record_cache[$xref][$ged_id])) {
		return $gedcom_record_cache[$xref][$ged_id]->getType();
	} else {
		++$TOTAL_QUERIES;
		$xref=$DBCONN->escapeSimple($xref);
		return $DBCONN->getOne(
			"SELECT 'INDI' FROM {$TBLPREFIX}individuals WHERE i_id   ='{$xref}' AND i_file   ={$ged_id} UNION ALL ".
			"SELECT 'FAM'  FROM {$TBLPREFIX}families    WHERE f_id   ='{$xref}' AND f_file   ={$ged_id} UNION ALL ".
			"SELECT 'SOUR' FROM {$TBLPREFIX}sources     WHERE s_id   ='{$xref}' AND s_file   ={$ged_id} UNION ALL ".
			"SELECT 'OBJE' FROM {$TBLPREFIX}media       WHERE m_media='{$xref}' AND m_gedfile={$ged_id} UNION ALL ".
			"SELECT o_type FROM {$TBLPREFIX}other       WHERE o_id   ='{$xref}' AND o_file   ={$ged_id}"
		);
	}
}

/**
 * find the gedcom record for a source
 *
 * This function first checks the <var>$sourcelist</var> cache to see if the source has already
 * been retrieved from the database.  If it hasn't been retrieved, then query the database and
 * add it to the cache.
 * @link http://phpgedview.sourceforge.net/devdocs/arrays.php#source
 * @param string $sid the unique gedcom xref id of the source record to retrieve
 * @return string the raw gedcom record is returned
 */
function find_source_record($pid, $gedfile="") {
	global $TBLPREFIX, $GEDCOM, $DBCONN, $sourcelist;

	if (!$pid) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	// Try the cache files first.
	if ((isset($sourcelist[$pid]['gedcom']))&&($sourcelist[$pid]['gedfile']==$ged_id)) {
		return $sourcelist[$pid]['gedcom'];
	}

	// Look in the table.
	$pid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT s_gedcom, s_name FROM {$TBLPREFIX}sources WHERE s_id='{$pid}' AND s_file={$ged_id}"
	);
	if (DB::isError($res)) return "";
	$row=$res->fetchRow();
	$res->free();

	if ($row) {
		// Don't cache records from other gedcoms
		if ($ged_id==PGV_GED_ID) {
			$sourcelist[$pid]=array('gedcom'=>$row[0], 'name'=>stripslashes($row[1]), 'gedfile'=>$ged_id);
		}
		return $row[0];
	} else {
		return null;
	}
}


/**
 * Find a repository record by its ID
 * @param string $rid	the record id
 * @param string $gedfile	the gedcom file id
 */
function find_other_record($pid, $gedfile="") {
	global $TBLPREFIX, $GEDCOM, $DBCONN;

	if (!$pid) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	$pid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT o_gedcom FROM {$TBLPREFIX}other WHERE o_id='{$pid}' AND o_file={$ged_id}"
	);
	$row=$res->fetchRow();
	$res->free();

	if ($row) {
		return $row[0];
	} else {
		return null;
	}
}

/**
 * Find a media record by its ID
 * @param string $rid	the record id
 */
function find_media_record($pid, $gedfile='') {
	global $TBLPREFIX, $GEDCOM, $DBCONN, $objectlist, $MULTI_MEDIA;

	if (!$pid || !$MULTI_MEDIA) {
		return null;
	}

	if ($gedfile) {
		$ged_id=get_id_from_gedcom($gedfile);
	} else {
		$ged_id=get_id_from_gedcom($GEDCOM);
	}

	// Try the cache files first.
	if ((isset($objectlist[$pid]['gedcom']))&&($objectlist[$pid]['gedfile']==$ged_id)) {
		return $objectlist[$pid]['gedcom'];
	}

	// Look in the table.
	$escpid=$DBCONN->escapeSimple($pid);
	$res=dbquery(
		"SELECT m_gedrec, m_file, m_titl, m_ext FROM {$TBLPREFIX}media ".
		"WHERE m_media='{$escpid}' AND m_gedfile={$ged_id}"
	);
	$row=$res->fetchRow();
	$res->free();

	if ($row) {
		// Don't cache records from other gedcoms
		if ($ged_id==PGV_GED_ID) {
			if (!$row[2]) {
				$row[2]=$row[1];
			}
			$objectlist[$pid]=array('gedcom'=>$row[0], 'file'=>$row[1], 'title'=>$row[2], 'ext'=>$row[3], 'gedfile'=>$ged_id);
		}
		return $row[0];
	} else {
		return null;
	}
}

/**
 * find and return the id of the first person in the gedcom
 * @return string the gedcom xref id of the first person in the gedcom
 */
function find_first_person() {
	global $TBLPREFIX;

	$sql = "SELECT i_id FROM ".$TBLPREFIX."individuals WHERE i_file=".PGV_GED_ID." ORDER BY i_id";
	$res = dbquery($sql,false,1);
	$row = $res->fetchRow();
	$res->free();
	if (!DB::isError($row))
		return $row[0];
	else
		return "I1";
}

/**
 * update the is_dead status in the database
 *
 * this function will update the is_dead field in the individuals table with the correct value
 * calculated by the is_dead() function.  To improve import performance, the is_dead status is first
 * set to -1 during import.  The first time the is_dead status is retrieved this function is called to update
 * the database.  This makes the first request for a person slower, but will speed up all future requests.
 * @param string $pid	id of individual to update
 * @param string $ged_id	gedcom to update
 * @param bool $isdead	true=dead
 */
function update_isdead($gid, $ged_id, $isdead) {
	global $TBLPREFIX, $DBCONN;
	$gid   =$DBCONN->escapeSimple($gid);
	$ged_id=(int)$ged_id;
	$isdead=$isdead ? 1 : 0; // DB uses int, not bool
	dbquery("UPDATE {$TBLPREFIX}individuals SET i_isdead={$isdead} WHERE i_id='{$gid}' AND i_file={$ged_id}");
	return $isdead;
}

// Reset the i_isdead status for individuals
// This is necessary when we change the MAX_ALIVE_YEARS value
function reset_isdead($ged_id=PGV_GED_ID) {
	global $TBLPREFIX;
	$ged_id=(int)$ged_id;

	dbquery("UPDATE {$TBLPREFIX}individuals SET i_isdead=-1 WHERE i_file=".$ged_id);
}

/**
 * get a list of all the sources
 *
 * returns an array of all of the sources in the database.
 * @link http://phpgedview.sourceforge.net/devdocs/arrays.php#sources
 * @return array the array of sources
 */
function get_source_list($ged_id) {
	global $TBLPREFIX, $DBCONN;

	$ged_id=(int)$ged_id;

	$res=dbquery("SELECT 'SOUR' AS type, s_id AS xref, {$ged_id} AS ged_id, s_gedcom AS gedrec FROM {$TBLPREFIX}sources s WHERE s_file={$ged_id}");
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Source::getInstance($row);
	}
	$res->free();
	uasort($list, array('GedcomRecord', 'Compare'));
	return $list;
}

// Get a list of repositories from the database
// $ged_id - the gedcom to search
// $filter - an array of search criteria
// $conjunction - match filter terms with "AND" or "OR"
function get_repo_list($ged_id=PGV_GED_ID, $filters=null, $conjunction="AND") {
	global $TBLPREFIX, $DBCONN;

	$ged_id=(int)$ged_id;

	if ($filters) {
		if (!is_array($filters)) {
			$filters=array($filters);
		}
		foreach ($filters as $key=>$value) {
			$filter[$key]=
				"o_gedcom ".PGV_DB_LIKE." '".
				str_replace(array('@', '_', '%'), array('@@', '@_', '@%'), $DBCONN->escapeSimple($value)).
				"' ESCAPE '@'";
	}
		$where.=" AND (".implode(" {$conjunction} ", $filter).")";
	} else {
		$where='';
}

	$res=dbquery(
		"SELECT 'REPO' AS type, o_id AS xref, {$ged_id} AS ged_id, o_gedcom AS gedrec ".
		"FROM {$TBLPREFIX}other WHERE o_type='REPO' AND o_file={$ged_id} ${where}"
	);
	$list=array();
	while ($row=$res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$list[]=Repository::getInstance($row);
	}
	$res->free();

	usort($list, array('GedcomRecord', 'Compare'));

	return $list;
}

//-- get the indilist from the datastore
function get_indi_list() {
	global $indilist, $TBLPREFIX, $INDILIST_RETRIEVED;

	if ($INDILIST_RETRIEVED)
		return $indilist;
	$indilist = array();
	$sql = "SELECT i_id, i_gedcom, i_name, i_isdead, i_letter, i_surname  FROM {$TBLPREFIX}individuals WHERE i_file=".PGV_GED_ID." ORDER BY i_surname";
	$res = dbquery($sql);

	$ct = $res->numRows();
	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$indi = array();
		$indi["gedcom"] = $row["i_gedcom"];
		$row = db_cleanup($row);
		$indi["isdead"] = $row["i_isdead"];
		$indi["gedfile"] = PGV_GED_ID;
		$indilist[$row["i_id"]] = $indi;
	}
	$res->free();

	$INDILIST_RETRIEVED = true;
	return $indilist;
}


//-- get the assolist from the datastore
function get_asso_list($type = "all", $ipid='') {
	global $assolist, $GEDCOM, $TBLPREFIX, $ASSOLIST_RETRIEVED;

	if ($ASSOLIST_RETRIEVED)
		return $assolist;
	$assolist = array();

	$oldged = $GEDCOM;
	if (($type == "all") || ($type == "fam")) {
		$sql = "SELECT f_id, f_file, f_gedcom, f_husb, f_wife FROM ".$TBLPREFIX."families WHERE f_gedcom ";
		if (!empty($pid))
			$sql .= "LIKE '% ASSO @$ipid@%'";
		else
			$sql .= "LIKE '% ASSO %'";
		$res = dbquery($sql);

		$ct = $res->numRows();
		while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
			$asso = array();
			$asso["type"] = "fam";
			$pid2 = $row["f_id"]."[".$row["f_file"]."]";
			$asso["gedcom"] = $row["f_gedcom"];
			$asso["gedfile"] = $row["f_file"];
			$asso["id"] = $row["f_id"];
			// Get the family names
			$GEDCOM = get_gedcom_from_id($row["f_file"]);
			$name = array();
			$family=Family::getInstance($row['f_id']);
			foreach ($family->getAllNames() as $fname) {
				$name[]=$fname['sort'];
				}
			$asso["name"] = $name;
			$ca = preg_match_all("/\d ASSO @(.*)@/", $row["f_gedcom"], $match, PREG_SET_ORDER);
			for ($i=0; $i<$ca; $i++) {
				$pid = $match[$i][1]."[".$row["f_file"]."]";
				$assolist[$pid][$pid2] = $asso;
			}
			$row = db_cleanup($row);
		}
		$res->free();
	}

	if (($type == "all") || ($type == "indi")) {
		$sql = "SELECT i_id, i_file, i_gedcom FROM ".$TBLPREFIX."individuals WHERE i_gedcom ";
		if (!empty($pid))
			$sql .= "LIKE '% ASSO @$ipid@%'";
		else
			$sql .= "LIKE '% ASSO %'";
		$res = dbquery($sql);

		$ct = $res->numRows();
		while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
			$asso = array();
			$asso["type"] = "indi";
			$pid2 = $row["i_id"]."[".$row["i_file"]."]";
			$asso["gedcom"] = $row["i_gedcom"];
			$asso["gedfile"] = $row["i_file"];
			$asso["id"] = $row["i_id"];
			$GEDCOM = get_gedcom_from_id($row["i_file"]);
			$name=array();
			$person=Person::getInstance($row['i_id']);
			foreach ($person->getAllNames() as $pname) {
				$name[]=$pname['sort'];
			}
			$asso["name"] = $name;
			$ca = preg_match_all("/\d ASSO @(.*)@/", $row["i_gedcom"], $match, PREG_SET_ORDER);
			for ($i=0; $i<$ca; $i++) {
				$pid = $match[$i][1]."[".$row["i_file"]."]";
				$assolist[$pid][$pid2] = $asso;
			}
			$row = db_cleanup($row);
		}
		$res->free();
	}

	$GEDCOM = $oldged;

	$ASSOLIST_RETRIEVED = true;
	return $assolist;
}

//-- get the famlist from the datastore
function get_fam_list() {
	global $famlist, $TBLPREFIX, $FAMLIST_RETRIEVED;

	if ($FAMLIST_RETRIEVED)
		return $famlist;
	$famlist = array();
	$sql = "SELECT f_id, f_husb,f_wife, f_chil, f_gedcom, f_numchil FROM {$TBLPREFIX}families WHERE f_file=".PGV_GED_ID;
	$res = dbquery($sql);

	$ct = $res->numRows();
	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$fam = array();
		$fam["gedcom"] = $row["f_gedcom"];
		$row = db_cleanup($row);
		$family=Family::getInstance($row['f_id']);
		$name=$family->getSortName();

		$fam["name"] = $name;
		$fam["HUSB"] = $row["f_husb"];
		$fam["WIFE"] = $row["f_wife"];
		$fam["CHIL"] = $row["f_chil"];
		$fam["gedfile"] = PGV_GED_ID;
		$fam["numchil"] = $row["f_numchil"];
		$famlist[$row["f_id"]] = $fam;
	}
	$res->free();
	$FAMLIST_RETRIEVED = true;
	return $famlist;
}

//-- get the otherlist from the datastore
function get_other_list() {
	global $otherlist, $TBLPREFIX;

	$otherlist = array();

	$sql = "SELECT o_id, o_type, o_gedcom FROM {$TBLPREFIX}other WHERE o_file=".PGV_GED_ID;
	$res = dbquery($sql);

	$ct = $res->numRows();
	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$source = array();
		$source["gedcom"] = $row["o_gedcom"];
		$row = db_cleanup($row);
		$source["type"] = $row["o_type"];
		$source["gedfile"] = PGV_GED_ID;
		$otherlist[$row["o_id"]]= $source;
	}
	$res->free();
	return $otherlist;
}

//-- search through the gedcom records for individuals
/**
 * Search the database for individuals that match the query
 *
 * uses a regular expression to search the gedcom records of all individuals and returns an
 * array list of the matching individuals
 *
 * @author	yalnifj
 * @param	string $query a regular expression query to search for
 * @param	boolean $allgeds setting if all gedcoms should be searched, default is false
 * @return	array $myindilist array with all individuals that matched the query
 */
function search_indis($query, $allgeds=false, $ANDOR="AND") {
	global $TBLPREFIX, $GEDCOM, $indilist, $DBCONN, $DBTYPE, $GEDCOMS;

	$myindilist = array();
	if (stristr($DBTYPE, "mysql")!==false)
		$term = "REGEXP";
	else
		if (stristr($DBTYPE, "pgsql")!==false)
			$term = "~*";
		else
			$term = "LIKE";
	//-- if the query is a string
	if (!is_array($query)) {
		$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals WHERE (";
		//-- make sure that MySQL matches the upper and lower case utf8 characters
		if (has_utf8($query))
			$sql .= "i_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtoupper($query))."' OR i_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtolower($query))."')";
		else
			$sql .= "i_gedcom $term '".$DBCONN->escapeSimple($query)."')";
	} else {
		//-- create a more complicated query if it is an array
		$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals WHERE (";
		$i=0;
		foreach ($query as $indexval => $q) {
			if ($i>0)
				$sql .= " $ANDOR ";
			if (has_utf8($q))
				$sql .= "(i_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtoupper($q))."' OR i_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtolower($q))."')";
			else
				$sql .= "(i_gedcom $term '".$DBCONN->escapeSimple($q)."')";
			$i++;
		}
		$sql .= ")";
	}
	if (!$allgeds)
		$sql .= " AND i_file=".PGV_GED_ID;

	if ((is_array($allgeds)) && (count($allgeds) != 0)) {
		$sql .= " AND (";
		for ($i=0; $i<count($allgeds); $i++) {
			$sql .= "i_file=".$DBCONN->escapeSimple($GEDCOMS[$allgeds[$i]]["id"]);
			if ($i < count($allgeds)-1)
				$sql .= " OR ";
		}
		$sql .= ")";
	}
	//-- do some sorting in the DB, it won't be as good as the PHP sorting
	$sql .= " ORDER BY i_surname, i_name";
	$res = dbquery($sql, false);

	$gedold = $GEDCOM;
	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			if (count($allgeds) > 1) {
				$myindilist[$row[0]."[".$row[1]."]"]["gedfile"] = $row[1];
				$myindilist[$row[0]."[".$row[1]."]"]["gedcom"] = $row[2];
				$myindilist[$row[0]."[".$row[1]."]"]["isdead"] = $row[3];
				$myindilist[$row[0]."[".$row[1]."]"]["id"] = $row[0];
				if (!isset($indilist[$row[0]]) && $row[1]==$GEDCOMS[$gedold]['id'])
					$indilist[$row[0]] = $myindilist[$row[0]."[".$row[1]."]"];
			} else {
				$myindilist[$row[0]]["gedfile"] = $row[1];
				$myindilist[$row[0]]["gedcom"] = $row[2];
				$myindilist[$row[0]]["isdead"] = $row[3];
				$myindilist[$row[0]]["id"] = $row[0];
				if (!isset($indilist[$row[0]]) && $row[1]==$GEDCOMS[$gedold]['id'])
				if (!isset($indilist[$row[0]]) && $row[1]==$GEDCOMS[$gedold]['id'])
					$indilist[$row[0]] = $myindilist[$row[0]];
			}
		}
		$res->free();
	}
	return $myindilist;
}

//-- search through the gedcom records for individuals
function search_indis_names($query, $allgeds=false) {
	global $TBLPREFIX, $indilist, $DBCONN, $REGEXP_DB, $DBTYPE;

	if (stristr($DBTYPE, "mysql")!==false)
		$term = "REGEXP";
	else
		if (stristr($DBTYPE, "pgsql")!==false)
			$term = "~*";
		else
			$term='LIKE';

	//-- split up words and find them anywhere in the record... important for searching names
	//-- like "givenname surname"
	if (!is_array($query)) {
		$query = preg_split("/[\s,]+/", $query);
		if (!$REGEXP_DB) {
			for ($i=0; $i<count($query); $i++){
				$query[$i] = "%".$query[$i]."%";
			}
		}
	}

	$myindilist = array();
	if (empty($query))
		$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals";
	else
		if (!is_array($query))
			$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals WHERE i_name $term '".$DBCONN->escapeSimple($query)."'";
		else {
			$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals WHERE (";
			$i=0;
			foreach ($query as $indexval => $q) {
				if (!empty($q)) {
					if ($i>0)
						$sql .= " AND ";
					$sql .= "i_name $term '".$DBCONN->escapeSimple($q)."'";
					$i++;
				}
			}
			$sql .= ")";
		}
	if (!$allgeds)
		$sql .= " AND i_file=".PGV_GED_ID;
	$res = dbquery($sql, false);
	if (!DB::isError($res)) {
		while ($row = $res->fetchRow()){
			$row = db_cleanup($row);
			if ($allgeds)
				$key = $row[0]."[".$row[2]."]";
			else
				$key = $row[0];
			if (isset($indilist[$key]))
				$myindilist[$key] = $indilist[$key];
			else {
				$myindilist[$key]["gedfile"] = $row[1];
				$myindilist[$key]["gedcom"] = $row[2];
				$myindilist[$key]["isdead"] = $row[3];
				$myindilist[$key]["id"] = $row[0];
				$indilist[$key] = $myindilist[$key];
			}
		}
		$res->free();
	}

	//-- search the names table too
	if (!is_array($query))
		$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals, ".$TBLPREFIX."names WHERE i_id=n_gid AND i_file=n_file AND n_name $term '".$DBCONN->escapeSimple($query)."'";
	else {
		$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."individuals, ".$TBLPREFIX."names WHERE i_id=n_gid AND i_file=n_file AND (";
		$i=0;
		foreach ($query as $indexval => $q) {
			if (!empty($q)) {
				if ($i>0)
					$sql .= " AND ";
				$sql .= "n_name $term '".$DBCONN->escapeSimple($q)."'";
				$i++;
			}
		}
		$sql .= ")";
	}
	if (!$allgeds)
		$sql .= " AND i_file=".PGV_GED_ID;
	$res = dbquery($sql, false);

	if (!DB::isError($res)) {
		while ($row = $res->fetchRow()){
			$row = db_cleanup($row);
			if ($allgeds)
				$key = $row[0]."[".$row[1]."]";
			else
				$key = $row[0];
			if (!isset($myindilist[$key])) {
				if (isset($indilist[$key]))
					$myindilist[$key] = $indilist[$key];
				else {
					$myindilist[$key]["gedfile"] = $row[1];
					$myindilist[$key]["gedcom"] = $row[2];
					$myindilist[$key]["isdead"] = $row[3];
					$myindilist[$key]["id"] = $row[0];
					$indilist[$key] = $myindilist[$key];
				}
			}
		}
		$res->free();
	}
	return $myindilist;
}

/**
 * Search for individuals using soundex
 * @param string $soundex	Russell or DaitchM
 * @param string $lastname
 * @param string $firstname
 * @param string $place		Soundex search on a place location
 * @param array	$sgeds		The array of gedcoms to search in
 * @return Database ResultSet
 */
function search_indis_soundex($soundex, $lastname, $firstname='', $place='', $sgeds='') {
	global $GEDCOMS, $GEDCOM, $TBLPREFIX, $REGEXP_DB, $DBCONN;

	$res = false;

	if (empty($sgeds))
		$sgeds = array($GEDCOM);
	// Adjust the search criteria
	if (isset ($firstname)) {
		if (strlen($firstname) == 1)
		$firstname = preg_replace(array ("/\?/", "/\|/", "/\*/"), array ("\\\?", "\\\|", "\\\\\*"), $firstname);
		if ($REGEXP_DB)
			$firstname = preg_replace(array ("/\s+/", "/\(/", "/\)/", "/\[/", "/\]/"), array (".*", '\(', '\)', '\[', '\]'), $firstname);
		else {
			$firstname = "%".preg_replace("/\s+/", "%", $firstname)."%";
		}
	}
	if (isset ($lastname)) {
		// see if there are brackets around letter(groups)
		$bcount = substr_count($lastname, "[");
		if (($bcount == substr_count($lastname, "]")) && $bcount > 0) {
			$barr = array ();
			$ln = $lastname;
			$pos = 0;
			$npos = 0;
			for ($i = 0; $i < $bcount; $i ++) {
				$pos1 = strpos($ln, "[") + 1;
				$pos2 = strpos($ln, "]");
				$barr[$i] = array (substr($ln, $pos1, $pos2 - $pos1), $pos1 + $npos -1, $pos2 - $pos1);
				$npos = $npos + $pos2 -1;
				$ln = substr($ln, $pos2 +1);
			}
		}
		if (strlen($lastname) == 1)
		$lastname = preg_replace(array ("/\?/", "/\|/", "/\*/"), array ("\\\?", "\\\|", "\\\\\*"), $lastname);
		if ($REGEXP_DB)
		$lastname = preg_replace(array ("/\s+/", "/\(/", "/\)/", "/\[/", "/\]/"), array (".*", '\(', '\)', '\[', '\]'), $lastname);
		else {
			$lastname = "%".preg_replace("/\s+/", "%", $lastname)."%";
		}
	}
	if (isset ($place)) {
		if (strlen($place) == 1)
		$place = preg_replace(array ("/\?/", "/\|/", "/\*/"), array ("\\\?", "\\\|", "\\\\\*"), $place);
		if ($REGEXP_DB)
		$place = preg_replace(array ("/\s+/", "/\(/", "/\)/", "/\[/", "/\]/"), array (".*", '\(', '\)', '\[', '\]'), $place);
		else {
			$place = "%".preg_replace("/\s+/", "%", $place)."%";
		}
	}
	if (isset ($year)) {
		if (strlen($year) == 1)
		$year = preg_replace(array ("/\?/", "/\|/", "/\*/"), array ("\\\?", "\\\|", "\\\\\*"), $year);
		if ($REGEXP_DB)
		$year = preg_replace(array ("/\s+/", "/\(/", "/\)/", "/\[/", "/\]/"), array (".*", '\(', '\)', '\[', '\]'), $year);
		else {
			$year = "%".preg_replace("/\s+/", "%", $year)."%";
		}
	}
	if (count($sgeds) > 0) {
		if ($soundex == "DaitchM")
		DMsoundex("", "opencache");

		// Do some preliminary stuff: determine the soundex codes for the search criteria
		if ((!empty ($lastname)) && ($soundex == "DaitchM")) {
			$arr2 = DMsoundex($lastname);
		}
		if ((!empty ($lastname)) && ($soundex == "Russell")) {
			$arr2 = array(soundex($lastname));
		}

		$farr = array ();
		if (!empty ($firstname)) {
			$firstnames = explode(' ', trim($firstname));
			for ($j = 0; $j < count($firstnames); $j ++) {
				if ($soundex == "Russell")
					$farr[$j] = array(soundex($firstnames[$j]));
				if ($soundex == "DaitchM")
					$farr[$j] = DMsoundex($firstnames[$j]);
			}
		}
		if ((!empty ($place)) && ($soundex == "DaitchM"))
		$parr = DMsoundex($place);
		if ((!empty ($place)) && ($soundex == "Russell"))
		$parr = array(soundex(trim($place)));

		if (empty($place) || !empty($firstname) || !empty($lastname)) {
			$sql = "SELECT i_id, i_gedcom, i_name, i_isdead, sx_n_id, i_file FROM ".$TBLPREFIX."soundex, ".$TBLPREFIX."individuals";
			if (!empty($place)) {
				$sql .= ", ".$TBLPREFIX."placelinks, ".$TBLPREFIX."places";
			}
			$sql .= " WHERE sx_i_id = i_id AND sx_file = i_file AND ";
			if (!empty($place)) {
				$sql .= "pl_file = i_file AND i_file = p_file AND pl_gid = i_id AND pl_p_id = p_id AND ";
			}

			if ((is_array($sgeds)) && (count($sgeds) != 0)) {
				$sql .= " (";
				for ($i=0; $i<count($sgeds); $i++) {
					$sql .= "i_file='".$DBCONN->escapeSimple($GEDCOMS[$sgeds[$i]]["id"])."'";
					if ($i < count($sgeds)-1)
						$sql .= " OR ";
				}
				$sql .= ") ";
			}

			$x = 0;

			if (count($farr)>0) {
				$sql .= "AND (";
				$fnc = 0;
				if ($soundex == "DaitchM")
					$field = "sx_fn_dm_code";
				else
					$field = "sx_fn_std_code";
				foreach ($farr as $name) {
					foreach ($name as $name1) {
						if ($fnc>0)
							$sql .= " OR ";
						$fnc++;
						$sql .= $field." LIKE '%".$DBCONN->escapeSimple($name1)."%'";
					}
				}
				$sql .= ") ";
			}
			if (!empty($arr2) && count($arr2)>0) {
				$sql .= "AND (";
				$lnc = 0;
				if ($soundex == "DaitchM")
					$field = "sx_ln_dm_code";
				else
					$field = "sx_ln_std_code";
				foreach ($arr2 as $name) {
					if ($lnc>0)
						$sql .= " OR ";
					$lnc++;
					$sql .= $field." LIKE '%".$DBCONN->escapeSimple($name)."%'";
				}
				$sql .= ") ";
			}

			if (!empty($place)) {
				if ($soundex == "DaitchM")
					$field = "p_dm_soundex";
				if ($soundex == "Russell")
					$field = "p_std_soundex";
				$sql .= "AND (";
				$pc = 0;
				foreach ($parr as $place) {
					if ($pc>0)
						$sql .= " OR ";
					$pc++;
					$sql .= $field." LIKE '%".$DBCONN->escapeSimple($place)."%'";
				}
				$sql .= ") ";
			}
			//--group by
			$sql .= "GROUP BY i_id";
			$res = dbquery($sql);
		}
	}
	return $res;
}

/**
 * get recent changes since the given julian day inclusive
 * @author	yalnifj
 * @param	int $jd, leave empty to include all
 */
function get_recent_changes($jd=0, $allgeds=false) {
	global $TBLPREFIX;

	$sql="SELECT DISTINCT(rec_xref) FROM {$TBLPREFIX}record, {$TBLPREFIX}fact WHERE rec_id=fact_rec_id AND fact_type='CHAN' AND fact_jd1>={$jd}";
	if (!$allgeds)
		$sql .= " AND rec_ged_id=".PGV_GED_ID;
	$sql .= " ORDER BY d_julianday1 DESC";

	$changes = array();
	$res = dbquery($sql);
	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
			if (preg_match("/\w+:\w+/", $row['d_gid'])==0) {
				$changes[] = $row;
			}
		}
	}
	return $changes;
}

/**
 * Search the dates table for individuals that had events on the given day
 *
 * @author	yalnifj
 * @param	int $day the day of the month to search for, leave empty to include all
 * @param	string $month the 3 letter abbr. of the month to search for, leave empty to include all
 * @param	int $year the year to search for, leave empty to include all
 * @param	string $fact the facts to include (use a comma seperated list to include multiple facts)
 * 				prepend the fact with a ! to not include that fact
 * @param	boolean $allgeds setting if all gedcoms should be searched, default is false
 * @return	array $myindilist array with all individuals that matched the query
 */
function search_indis_dates($day="", $month="", $year="", $fact="", $allgeds=false, $ANDOR="AND") {
	global $TBLPREFIX, $indilist, $DBCONN;

	$myindilist = array();

	$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM ".$TBLPREFIX."dates, ".$TBLPREFIX."individuals WHERE i_id=d_gid AND i_file=d_file ";
	if (!empty($day))
		$sql .= "AND d_day='".$DBCONN->escapeSimple($day)."' ";
	if (!empty($month))
		$sql .= "AND d_month='".$DBCONN->escapeSimple(UTF8_strtoupper($month))."' ";
	if (!empty($year))
		$sql .= "AND d_year='".$DBCONN->escapeSimple($year)."' ";
	if (!empty($fact)) {
		$sql .= "AND (";
		$facts = preg_split("/[,:; ]/", $fact);
		$i=0;
		foreach ($facts as $fact) {
			if ($i!=0)
				$sql .= " OR ";
			$ct = preg_match("/!(\w+)/", $fact, $match);
			if ($ct > 0) {
				$fact = $match[1];
				$sql .= "d_fact!='".$DBCONN->escapeSimple(UTF8_strtoupper($fact))."'";
			} else {
				$sql .= "d_fact='".$DBCONN->escapeSimple(UTF8_strtoupper($fact))."'";
			}
			$i++;
		}
		$sql .= ") ";
	}
	if (!$allgeds)
		$sql .= "AND d_file=".PGV_GED_ID." ";
	$sql .= "ORDER BY d_year DESC, d_mon DESC, d_day DESC";
	$res = dbquery($sql);

	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			if ($allgeds) {
				$myindilist[$row[0]."[".$row[1]."]"]["gedfile"] = $row[1];
				$myindilist[$row[0]."[".$row[1]."]"]["gedcom"] = $row[2];
				$myindilist[$row[0]."[".$row[1]."]"]["isdead"] = $row[3];
				$myindilist[$row[0]."[".$row[1]."]"]["id"] = $row[0];
				if ($myindilist[$row[0]."[".$row[1]."]"]["gedfile"] == PGV_GED_ID)
					$indilist[$row[0]] = $myindilist[$row[0]."[".$row[1]."]"];
			} else {
				$myindilist[$row[0]]["gedfile"] = $row[1];
				$myindilist[$row[0]]["gedcom"] = $row[2];
				$myindilist[$row[0]]["isdead"] = $row[3];
				$myindilist[$row[0]]["id"] = $row[0];
				if ($myindilist[$row[0]]["gedfile"] == PGV_GED_ID)
					$indilist[$row[0]] = $myindilist[$row[0]];
			}
		}
		$res->free();
	}
	return $myindilist;
}

/**
 * Search the dates table for individuals that had events in the given range
 *
 * @author	yalnifj
 * @param	int $start, $end - range of julian days to search
 * @param	string $fact the facts to include (use a comma seperated list to include multiple facts)
 * 				prepend the fact with a ! to not include that fact
 * @param	boolean $allgeds setting if all gedcoms should be searched, default is false
 * @return	array $myindilist array with all individuals that matched the query
 */
function search_indis_daterange($start, $end, $fact='', $allgeds=false, $ANDOR="AND") {
	global $TBLPREFIX, $indilist, $DBCONN, $USE_RTL_FUNCTIONS, $year;

	$myindilist = array();

	$sql = "SELECT i_id, i_file, i_gedcom, i_isdead FROM {$TBLPREFIX}dates, {$TBLPREFIX}individuals WHERE i_id=d_gid AND i_file=d_file AND d_julianday2>={$start} AND d_julianday1<={$end} ";
	if (!empty($fact)) {
		$sql .= "AND (";
		$facts = preg_split("/[,:; ]/", $fact);
		$i=0;
		foreach ($facts as $fact) {
			if ($i!=0)
				$sql .= " OR ";
			$ct = preg_match("/!(\w+)/", $fact, $match);
			if ($ct > 0) {
				$fact = $match[1];
				$sql .= "d_fact!='".$DBCONN->escapeSimple(UTF8_strtoupper($fact))."'";
			} else {
				$sql .= "d_fact='".$DBCONN->escapeSimple(UTF8_strtoupper($fact))."'";
			}
			$i++;
		}
		$sql .= ") ";
	}
	if (!$allgeds)
		$sql .= "AND d_file=".PGV_GED_ID." ";
	$sql .= "ORDER BY d_julianday1";
	$res = dbquery($sql);

	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			if ($allgeds) {
				if (!isset($myindilist[$row[0]."[".$row[1]."]"])) {
					$myindilist[$row[0]."[".$row[1]."]"]["gedfile"] = $row[1];
					$myindilist[$row[0]."[".$row[1]."]"]["gedcom"] = $row[2];
					$myindilist[$row[0]."[".$row[1]."]"]["isdead"] = $row[3];
					$myindilist[$row[0]."[".$row[1]."]"]["id"] = $row[0];
					if ($myindilist[$row[0]."[".$row[1]."]"]["gedfile"] == PGV_GED_ID)
						$indilist[$row[0]] = $myindilist[$row[0]."[".$row[1]."]"];
				}
			} else {
				if (!isset($myindilist[$row[0]])) {
					$myindilist[$row[0]]["gedfile"] = $row[1];
					$myindilist[$row[0]]["gedcom"] = $row[2];
					$myindilist[$row[0]]["isdead"] = $row[3];
					$myindilist[$row[0]]["isdead"] = $row[0];
					if ($myindilist[$row[0]]["gedfile"] == PGV_GED_ID)
						$indilist[$row[0]] = $myindilist[$row[0]];
				}
			}
		}
		$res->free();
	}
	return $myindilist;
}

/**
 * Search for individuals who had dates within the given year ranges
 * @param int $startyear	the starting year
 * @param int $endyear		The ending year
 * @return array
 */
function search_indis_year_range($startyear, $endyear) {
	// TODO: This function should use Julian-days, rather than gregorian years, to allow
	// the lifespan chart, etc., to use other calendars.
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$startjd=GregorianDate::YMDtoJD($startyear, 1, 1);
	$endjd  =GregorianDate::YMDtoJD($endyear+1, 1, 1)-1;

	++$TOTAL_QUERIES;
	$res=$DBH->query(
		"SELECT rec_xref ".
		"FROM {$TBLPREFIX}record, {$TBLPREFIX}fact AS birth, {$TBLPREFIX}fact AS death ".
		"WHERE rec_id=birth.fact_rec_id AND rec_id=death.fact_rec_id ".
		"  AND rec_ged_id=".PGV_GED_ID." ".
		"  AND rec_type='INDI' ".
		"  AND birth.fact_jd1<={$endjd}   AND birth.fact_type NOT IN ('CHAN','_TODO')".
		"  AND death.fact_jd2>={$startjd} AND death.fact_type NOT IN ('CHAN','_TODO')".
		"GROUP BY rec_xref"
	);
	return $res->fetchAll(PDO::FETCH_COLUMN);
}
	
//-- search through the gedcom records for families
function search_fams($query, $allgeds=false, $ANDOR="AND", $allnames=false) {
	global $TBLPREFIX, $GEDCOM, $famlist, $DBCONN, $DBTYPE, $GEDCOMS;

	if (stristr($DBTYPE, "mysql")!==false)
		$term = "REGEXP";
	else
		if (stristr($DBTYPE, "pgsql")!==false)
			$term = "~*";
		else
			$term='LIKE';
	$myfamlist = array();
	if (!is_array($query))
		$sql = "SELECT f_id, f_husb, f_wife, f_file, f_gedcom, f_numchil FROM ".$TBLPREFIX."families WHERE (f_gedcom $term '".$DBCONN->escapeSimple($query)."')";
	else {
		$sql = "SELECT f_id, f_husb, f_wife, f_file, f_gedcom, f_numchil FROM ".$TBLPREFIX."families WHERE (";
		$i=0;
		foreach ($query as $indexval => $q) {
			if ($i>0)
				$sql .= " $ANDOR ";
			$sql .= "(f_gedcom $term '".$DBCONN->escapeSimple($q)."')";
			$i++;
		}
		$sql .= ")";
	}

	if (!$allgeds)
		$sql .= " AND f_file=".PGV_GED_ID;

	if ((is_array($allgeds)) && (count($allgeds) != 0)) {
		$sql .= " AND (";
		for ($i=0, $max=count($allgeds); $i<$max; $i++) {
			$sql .= "f_file=".$DBCONN->escapeSimple($GEDCOMS[$allgeds[$i]]["id"]);
			if ($i < $max-1)
				$sql .= " OR ";
		}
		$sql .= ")";
	}

	$res = dbquery($sql, false);

	$gedold = $GEDCOM;
	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			$GEDCOM = get_gedcom_from_id($row[3]);
			$family=Family::getInstance($row[0]);
			if ($allnames == true) {
				$name = array();
				foreach ($family->getAllNames() as $fname) {
					$name[]=$fname['sort'];
					}
			} else {
				$name=$family->getSortName();
			}
			if (count($allgeds) > 1) {
				$myfamlist[$row[0]."[".$row[3]."]"]["name"] = $name;
				$myfamlist[$row[0]."[".$row[3]."]"]["gedfile"] = $row[3];
				$myfamlist[$row[0]."[".$row[3]."]"]["gedcom"] = $row[4];
				$myfamlist[$row[0]."[".$row[3]."]"]["numchil"] = $row[5];
				if (!isset($famlist[$row[0]]) && $row[3]==$GEDCOMS[$gedold]['id'])
					$famlist[$row[0]] = $myfamlist[$row[0]."[".$row[3]."]"];
			} else {
				$myfamlist[$row[0]]["name"] = $name;
				$myfamlist[$row[0]]["gedfile"] = $row[3];
				$myfamlist[$row[0]]["gedcom"] = $row[4];
				$myfamlist[$row[0]]["numchil"] = $row[5];
				if (!isset($famlist[$row[0]]) && $row[3]==$GEDCOMS[$gedold]['id'])
					$famlist[$row[0]] = $myfamlist[$row[0]];
			}
		}
		$GEDCOM = $gedold;
		$res->free();
	}
	return $myfamlist;
}

//-- search through the gedcom records for families
function search_fams_names($query, $ANDOR="AND", $allnames=false, $gedcnt=1) {
	global $TBLPREFIX, $GEDCOM, $famlist, $DBCONN;

	$myfamlist = array();
	$sql = "SELECT f_id, f_husb, f_wife, f_file, f_gedcom, f_numchil FROM ".$TBLPREFIX."families WHERE (";
	$i=0;
	foreach ($query as $indexval => $q) {
		if ($i>0)
			$sql .= " $ANDOR ";
		$sql .= "((f_husb='".$DBCONN->escapeSimple($q[0])."' OR f_wife='".$DBCONN->escapeSimple($q[0])."') AND f_file=".$DBCONN->escapeSimple($q[1]).")";
		$i++;
	}
	$sql .= ")";

	$res = dbquery($sql);

	if (!DB::isError($res)) {
		$gedold = $GEDCOM;
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			$GEDCOM = get_gedcom_from_id($row[3]);
			$family=Family::getInstance($row[0]);
			if ($allnames == true) {
				$name = array();
				foreach ($family->getAllNames() as $fname) {
					$name[]=$fname['sort'];
					}
			} else {
				$name=$family->getSortName();
			}
			if ($gedcnt > 1) {
				$myfamlist[$row[0]."[".$row[3]."]"]["name"] = $name;
				$myfamlist[$row[0]."[".$row[3]."]"]["gedfile"] = $row[3];
				$myfamlist[$row[0]."[".$row[3]."]"]["gedcom"] = $row[4];
				$myfamlist[$row[0]."[".$row[3]."]"]["numchil"] = $row[5];
				$famlist[$row[0]] = $myfamlist[$row[0]."[".$row[3]."]"];
			} else {
				$myfamlist[$row[0]]["name"] = $name;
				$myfamlist[$row[0]]["gedfile"] = $row[3];
				$myfamlist[$row[0]]["gedcom"] = $row[4];
				$myfamlist[$row[0]]["numchil"] = $row[5];
				$famlist[$row[0]] = $myfamlist[$row[0]];
			}
		}
		$GEDCOM = $gedold;
		$res->free();
	}
	return $myfamlist;
}

/**
 * Search the families table for individuals are part of that family
 * either as a husband, wife or child.
 *
 * @author	roland-d
 * @param	string $query the query to search for as a single string
 * @param	array $query the query to search for as an array
 * @param	boolean $allgeds setting if all gedcoms should be searched, default is false
 * @param	string $ANDOR setting if the sql query should be constructed with AND or OR
 * @param	boolean $allnames true returns all names in an array
 * @return	array $myfamlist array with all families that matched the query
 */
function search_fams_members($query, $allgeds=false, $ANDOR="AND", $allnames=false) {
	global $TBLPREFIX, $GEDCOM, $famlist, $DBCONN, $GEDCOMS;

	$myfamlist = array();
	if (!is_array($query))
		$sql = "SELECT f_id, f_husb, f_wife, f_file FROM ".$TBLPREFIX."families WHERE (f_husb='$query' OR f_wife='$query' OR f_chil LIKE '%$query;%')";
	else {
		$sql = "SELECT f_id, f_husb, f_wife, f_file FROM ".$TBLPREFIX."families WHERE (";
		$i=0;
		foreach ($query as $indexval => $q) {
			if ($i>0)
				$sql .= " $ANDOR ";
			$sql .= "(f_husb='$query' OR f_wife='$query' OR f_chil LIKE '%$query;%')";
			$i++;
		}
		$sql .= ")";
	}

	if (!$allgeds)
		$sql .= " AND f_file=".PGV_GED_ID;

	if ((is_array($allgeds)) && (count($allgeds) != 0)) {
		$sql .= " AND (";
		for ($i=0, $max=count($allgeds); $i<$max; $i++) {
			$sql .= "f_file=".$DBCONN->escapeSimple($GEDCOMS[$allgeds[$i]]["id"]);
			if ($i < $max-1)
				$sql .= " OR ";
		}
		$sql .= ")";
	}
	$res = dbquery($sql);

	$i=0;
	while ($row =& $res->fetchRow()){
		$row = db_cleanup($row);
		$family=Family::getInstance($row[0]);
		if ($allnames == true) {
			$name = array();
			foreach ($family->getAllNames() as $fname) {
				$name[]=$fname['sort'];
				}
		} else {
			$name=$family->getSortName();
		}
		if (count($allgeds) > 1) {
			$myfamlist[$i]["name"] = $name;
			$myfamlist[$i]["gedfile"] = $row[0];
			$myfamlist[$i]["gedcom"] = $row[1];
			$famlist[] = $myfamlist;
		} else {
			$myfamlist[$i][] = $name;
			$myfamlist[$i][] = $row[0];
			$myfamlist[$i][] = $row[3];
			$i++;
			$famlist[] = $myfamlist;
		}
	}
	$res->free();
	return $myfamlist;
}

//-- search through the gedcom records for sources
function search_sources($query, $allgeds=false, $ANDOR="AND") {
	global $TBLPREFIX, $GEDCOM, $DBCONN, $DBTYPE, $GEDCOMS;

	$mysourcelist = array();
	if (stristr($DBTYPE, "mysql")!==false)
		$term = "REGEXP";
	else
		if (stristr($DBTYPE, "pgsql")!==false)
			$term = "~*";
		else
			$term='LIKE';
	if (!is_array($query)) {
		$sql = "SELECT s_id, s_name, s_file, s_gedcom FROM ".$TBLPREFIX."sources WHERE ";
		//-- make sure that MySQL matches the upper and lower case utf8 characters
		if (has_utf8($query))
			$sql .= "(s_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtoupper($query))."' OR s_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtolower($query))."')";
		else
			$sql .= "s_gedcom $term '".$DBCONN->escapeSimple($query)."'";
	} else {
		$sql = "SELECT s_id, s_name, s_file, s_gedcom FROM ".$TBLPREFIX."sources WHERE (";
		$i=0;
		foreach ($query as $indexval => $q) {
			if ($i>0)
				$sql .= " $ANDOR ";
			if (has_utf8($q))
				$sql .= "(s_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtoupper($q))."' OR s_gedcom $term '".$DBCONN->escapeSimple(UTF8_strtolower($q))."')";
			else
				$sql .= "(s_gedcom $term '".$DBCONN->escapeSimple($q)."')";
			$i++;
		}
		$sql .= ")";
	}
	if (!$allgeds)
		$sql .= " AND s_file=".PGV_GED_ID;

	if ((is_array($allgeds)) && (count($allgeds) != 0)) {
		$sql .= " AND (";
		for ($i=0; $i<count($allgeds); $i++) {
			$sql .= "s_file=".$DBCONN->escapeSimple($GEDCOMS[$allgeds[$i]]["id"]);
			if ($i < count($allgeds)-1)
				$sql .= " OR ";
		}
		$sql .= ")";
	}

	$res = dbquery($sql, false);

	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow()){
			$row = db_cleanup($row);
			if (count($allgeds) > 1) {
				$mysourcelist[$row[0]."[".$row[2]."]"]["name"] = $row[1];
				$mysourcelist[$row[0]."[".$row[2]."]"]["gedfile"] = $row[2];
				$mysourcelist[$row[0]."[".$row[2]."]"]["gedcom"] = $row[3];
			} else {
				$mysourcelist[$row[0]]["name"] = $row[1];
				$mysourcelist[$row[0]]["gedfile"] = $row[2];
				$mysourcelist[$row[0]]["gedcom"] = $row[3];
			}
		}
		$res->free();
	}
	return $mysourcelist;
}

/**
 * get place parent ID
 * @param array $parent
 * @param int $level
 * @return int
 */
function get_place_parent_id($parent, $level) {
	global $DBCONN, $TBLPREFIX;

	$parent_id=0;
	for ($i=0; $i<$level; $i++) {
		$escparent=preg_replace("/\?/","\\\\\\?", $DBCONN->escapeSimple($parent[$i]));
		$psql = "SELECT p_id FROM ".$TBLPREFIX."places WHERE p_level=".$i." AND p_parent_id=$parent_id AND p_place LIKE '".$escparent."' AND p_file=".PGV_GED_ID." ORDER BY p_place";
		$res = dbquery($psql);
		$row =& $res->fetchRow();
		$res->free();
		if (empty($row[0]))
			break;
		$parent_id = $row[0];
	}
	return $parent_id;
}

/**
 * find all of the places in the hierarchy
 * The $parent array holds the parent hierarchy of the places
 * we want to get.  The level holds the level in the hierarchy that
 * we are at.
 */
function get_place_list($parent, $level) {
	global $TBLPREFIX;

	$placelist=array();

	// --- find all of the place in the file
	if ($level==0)
		$sql = "SELECT p_place FROM ".$TBLPREFIX."places WHERE p_level=0 AND p_file=".PGV_GED_ID." ORDER BY p_place";
	else {
		$parent_id = get_place_parent_id($parent, $level);
		$sql = "SELECT p_place FROM ".$TBLPREFIX."places WHERE p_level=$level AND p_parent_id=$parent_id AND p_file=".PGV_GED_ID." ORDER BY p_place";
	}
	$res = dbquery($sql);

	while ($row =& $res->fetchRow()) {
		$placelist[] = $row[0];
	}
	$res->free();

	return $placelist;
}

/**
 * get all of the place connections
 * @param array $parent
 * @param int $level
 * @return array
 */
function get_place_positions($parent, $level='') {
	global $TBLPREFIX, $DBCONN;

	$positions=array();

	if ($level!='')
		$p_id = get_place_parent_id($parent, $level);
	else {
		//-- we don't know the level so get the any matching place
		$sql = "SELECT DISTINCT pl_gid FROM ".$TBLPREFIX."placelinks, ".$TBLPREFIX."places WHERE p_place LIKE '".$DBCONN->escapeSimple($parent)."' AND p_file=pl_file AND p_id=pl_p_id AND p_file=".PGV_GED_ID;
		$res = dbquery($sql);
		while ($row =& $res->fetchRow()) {
			$positions[] = $row[0];
		}
		$res->free();
		return $positions;
	}
	$sql = "SELECT DISTINCT pl_gid FROM ".$TBLPREFIX."placelinks WHERE pl_p_id=$p_id AND pl_file=".PGV_GED_ID;
	$res = dbquery($sql);

	while ($row =& $res->fetchRow()) {
		$positions[] = $row[0];
	}
	$res->free();
	return $positions;
}

//-- find all of the places
function find_place_list($place) {
	global $TBLPREFIX, $placelist;

	$sql = "SELECT p_id, p_place, p_parent_id  FROM ".$TBLPREFIX."places WHERE p_file=".PGV_GED_ID." ORDER BY p_parent_id, p_id";
	$res = dbquery($sql);

	while ($row =& $res->fetchRow()) {
		if ($row[2]==0)
			$placelist[$row[0]] = $row[1];
		else {
			$placelist[$row[0]] = $placelist[$row[2]].", ".$row[1];
		}
	}
	if (!empty($place)) {
		$found = array();
		foreach ($placelist as $indexval => $pplace) {
			if (preg_match("/$place/i", $pplace)>0) {
				$upperplace = UTF8_strtoupper($pplace);
				if (!isset($found[$upperplace])) {
					$found[$upperplace] = $pplace;
				}
			}
		}
		$placelist = array_values($found);
	}
}

//-- find all of the media
function get_media_list() {
	global $TBLPREFIX, $medialist, $ct, $MEDIA_DIRECTORY;

	$ct = 0;
	if (!isset($medialinks))
		$medialinks = array();
	$sqlmm = "SELECT mm_gid, mm_media FROM ".$TBLPREFIX."media_mapping WHERE mm_gedfile = ".PGV_GED_ID." ORDER BY mm_id ASC";
	$resmm =@ dbquery($sqlmm);
	while ($rowmm =& $resmm->fetchRow(DB_FETCHMODE_ASSOC)){
		$sqlm = "SELECT m_id, m_titl, m_gedrec, m_file FROM {$TBLPREFIX}media WHERE m_media='{$rowmm['mm_media']}' AND m_gedfile=".PGV_GED_ID;
		$resm =@ dbquery($sqlm);
		while ($rowm =& $resm->fetchRow(DB_FETCHMODE_ASSOC)){
			$filename = check_media_depth($rowm["m_file"], "NOTRUNC");
			$thumbnail = str_replace($MEDIA_DIRECTORY, $MEDIA_DIRECTORY."thumbs/", $filename);
			$title = $rowm["m_titl"];
			$mediarec = $rowm["m_gedrec"];
			$level = $mediarec{0};
			$isprim="N";
			$isthumb="N";
			$pt = preg_match("/\d _PRIM (.*)/", $mediarec, $match);
			if ($pt>0)
				$isprim = trim($match[1]);
			$pt = preg_match("/\d _THUM (.*)/", $mediarec, $match);
			if ($pt>0)
				$isthumb = trim($match[1]);
			$medialinks[$ct][$rowmm["mm_gid"]] = gedcom_record_type($rowmm["mm_gid"], PGV_GED_ID);
			$links = $medialinks[$ct];
			if (!isset($foundlist[$filename])) {
				$media = array();
				$media["file"] = $filename;
				$media["thumb"] = $thumbnail;
				$media["title"] = $title;
				$media["gedcom"] = $mediarec;
				$media["level"] = $level;
				$media["THUM"] = $isthumb;
				$media["PRIM"] = $isprim;
				$medialist[$ct]=$media;
				$foundlist[$filename] = $ct;
				$ct++;
			}
			$medialist[$foundlist[$filename]]["link"]=$links;
		}
	}
}

/**
 * get all first letters of individual's last names
 * @see indilist.php
 * @return array	an array of all letters
 */
function get_indi_alpha() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	++$TOTAL_QUERIES;
	return $DBH->query(
		"SELECT UPPER(SUBSTR(name_surn, 1, 1)) AS letter ".
		"FROM {$TBLPREFIX}name, {$TBLPREFIX}fact, {$TBLPREFIX}record ".
		"WHERE name_fact_id=fact_id AND fact_rec_id=rec_id AND rec_type='INDI' AND rec_ged_id=".PGV_GED_ID." ".
		"GROUP BY 1 ".
		"ORDER BY letter='@', letter"
	)->fetchAll(PDO::FETCH_COLUMN);
}

// Get all the surnames that start with a given letter
function get_indi_surnames($alpha) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	++$TOTAL_QUERIES;
	return $DBH->query(
		"SELECT UPPER(name_surn) AS surn ".
		"FROM {$TBLPREFIX}name, {$TBLPREFIX}fact, {$TBLPREFIX}record ".
		"WHERE name_fact_id=fact_id AND fact_rec_id=rec_id AND rec_type='INDI' AND rec_ged_id=".PGV_GED_ID." AND name_surn LIKE '{$alpha}%'".
		"GROUP BY 1 ".
		"ORDER BY 1"
	)->fetchAll(PDO::FETCH_COLUMN);
}

//-- get the first character in the list
function get_fam_alpha() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	++$TOTAL_QUERIES;
	return $DBH->query(
		"SELECT UPPER(SUBSTR(name_surn, 1, 1)) AS letter ".
		"FROM {$TBLPREFIX}name, {$TBLPREFIX}fact, {$TBLPREFIX}record, {$TBLPREFIX}link ".
		"WHERE name_fact_id=fact_id AND fact_rec_id=rec_id AND rec_type='INDI' AND rec_ged_id=".PGV_GED_ID." AND rec_id=link_linkee AND link_type IN ('HUSB','WIFE') ".
		"GROUP BY 1 ".
		"ORDER BY letter='@', letter"
	)->fetchAll(PDO::FETCH_COLUMN);
}

/**
 * Get Individuals Starting with a letter
 *
 * This function finds all of the individuals who start with the given letter
 * @param string $letter	The letter to search on
 * @return array	$indilist array
 * @see http://www.phpgedview.net/devdocs/arrays.php#indilist
 */
function get_alpha_indis($letter) {
	global $TBLPREFIX, $LANGUAGE, $indilist, $surname, $SHOW_MARRIED_NAMES, $DBCONN, $MULTI_LETTER_ALPHABET;
	global $DICTIONARY_SORT, $UCDiacritWhole, $UCDiacritStrip, $LCDiacritWhole, $LCDiacritStrip;

	$tindilist = array();

	if ($letter=='_')
		$letter='\_';
	if ($letter=='%')
		$letter='\%';
	if ($letter=='')
		$letter='@';

	$danishex = array("OE", "AE", "AA");
	$danishFrom = array("AA", "AE", "OE");
	$danishTo = array("Å", "Æ", "Ø");

	$checkDictSort = true;

	$sql = "SELECT i_id FROM {$TBLPREFIX}individuals WHERE ";
	if ($LANGUAGE == "danish" || $LANGUAGE == "norwegian") {
		if ($letter == "Ø")
			$text = "OE";
		else
			if ($letter == "Æ")
				$text = "AE";
			else
				if ($letter == "Å")
					$text = "AA";
		if (isset($text))
			$sql .= "(i_letter = '".$DBCONN->escapeSimple($letter)."' OR i_name LIKE '%/".$DBCONN->escapeSimple($text)."%') ";
		else
			if ($letter=="A")
				$sql .= "i_letter LIKE '".$DBCONN->escapeSimple($letter)."' ";
			else
				$sql .= "i_letter LIKE '".$DBCONN->escapeSimple($letter)."%' ";
		$checkDictSort = false;
	} else
		if ($MULTI_LETTER_ALPHABET[$LANGUAGE]!="") {
			$isMultiLetter = strpos($MULTI_LETTER_ALPHABET[$LANGUAGE], " ".$letter." ");
			if ($isMultiLetter!==false) {
				$sql .= "i_letter = '".$DBCONN->escapeSimple($letter)."' ";
				$checkDictSort = false;
			}
		}
	if ($checkDictSort) {
		$text = "";
		if ($DICTIONARY_SORT[$LANGUAGE]) {
			$inArray = strpos($UCDiacritStrip, $letter);
			if ($inArray!==false) {
				while (true) {
					$text .= " OR i_letter = '".$DBCONN->escapeSimple(substr($UCDiacritWhole, ($inArray+$inArray), 2))."'";
					$inArray ++;
					if ($inArray > strlen($UCDiacritStrip))
						break;
					if (substr($UCDiacritStrip, $inArray, 1)!=$letter)
						break;
				}
				if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
					$sql .= "(i_letter LIKE '".$DBCONN->escapeSimple($letter)."%'".$text.") ";
				else
					$sql .= "(i_letter = '".$DBCONN->escapeSimple($letter)."'".$text.") ";
			} else {
				$inArray = strpos($LCDiacritStrip, $letter);
				if ($inArray!==false) {
					while (true) {
						$text .= " OR i_letter = '".$DBCONN->escapeSimple(substr($LCDiacritWhole, ($inArray+$inArray), 2))."'";
						$inArray ++;
						if ($inArray > strlen($LCDiacritStrip))
							break;
						if (substr($LCDiacritStrip, $inArray, 1)!=$letter)
							break;
					}
					if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
						$sql .= "(i_letter LIKE '".$DBCONN->escapeSimple($letter)."%'".$text.") ";
					else
						$sql .= "(i_letter = '".$DBCONN->escapeSimple($letter)."'".$text.") ";
				}
			}
		}
		if ($text=="") {
			if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
				$sql .= "i_letter LIKE '".$DBCONN->escapeSimple($letter)."%'";
			else
				$sql .= "i_letter = '".$DBCONN->escapeSimple($letter)."'";
		}
	}

	//-- add some optimization if the surname is set to speed up the lists
	if (!empty($surname))
		$sql .= "AND i_surname LIKE '%".$DBCONN->escapeSimple($surname)."%' ";
	$sql .= "AND i_file=".PGV_GED_ID." ORDER BY i_name";
	$res = dbquery($sql);
	if (!DB::isError($res)) {
		while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
			$tindilist[$row["i_id"]] = $row["i_id"];
		}
		$res->free();
	}

	$checkDictSort = true;

	$sql = "SELECT i_id FROM ".$TBLPREFIX."individuals, ".$TBLPREFIX."names WHERE i_id=n_gid AND i_file=n_file AND ";
	if ($LANGUAGE == "danish" || $LANGUAGE == "norwegian") {
		if ($letter == "Ø")
			$text = "OE";
		else
			if ($letter == "Æ")
				$text = "AE";
			else
				if ($letter == "Å")
					$text = "AA";
		if (isset($text))
			$sql .= "(n_letter = '".$DBCONN->escapeSimple($letter)."' OR n_letter = '".$DBCONN->escapeSimple($text)."') ";
		else
			if ($letter=="A")
				$sql .= "n_letter LIKE '".$DBCONN->escapeSimple($letter)."' ";
			else
				$sql .= "n_letter LIKE '".$DBCONN->escapeSimple($letter)."%' ";
		$checkDictSort = false;
	} else
		if ($MULTI_LETTER_ALPHABET[$LANGUAGE]!="") {
			$isMultiLetter = strpos($MULTI_LETTER_ALPHABET[$LANGUAGE], " ".$letter." ");
			if ($isMultiLetter!==false) {
				$sql .= "n_letter = '".$DBCONN->escapeSimple($letter)."' ";
				$checkDictSort = false;
			}
		}
	if ($checkDictSort) {
		$text = "";
		if ($DICTIONARY_SORT[$LANGUAGE]) {
			$inArray = strpos($UCDiacritStrip, $letter);
			if ($inArray!==false) {
				while (true) {
					$text .= " OR n_letter = '".$DBCONN->escapeSimple(substr($UCDiacritWhole, ($inArray+$inArray), 2))."'";
					$inArray ++;
					if ($inArray > strlen($UCDiacritStrip))
						break;
					if (substr($UCDiacritStrip, $inArray, 1)!=$letter)
						break;
				}
				if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
					$sql .= "(n_letter LIKE '".$DBCONN->escapeSimple($letter)."%'".$text.")";
				else
					$sql .= "(n_letter = '".$DBCONN->escapeSimple($letter)."'".$text.")";
			} else {
				$inArray = strpos($LCDiacritStrip, $letter);
				if ($inArray!==false) {
					while (true) {
						$text .= " OR n_letter = '".$DBCONN->escapeSimple(substr($LCDiacritWhole, ($inArray+$inArray), 2))."'";
						$inArray ++;
						if ($inArray > strlen($LCDiacritStrip))
							break;
						if (substr($LCDiacritStrip, $inArray, 1)!=$letter)
							break;
					}
					if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
						$sql .= "(n_letter LIKE '".$DBCONN->escapeSimple($letter)."%'".$text.")";
					else
						$sql .= "(n_letter = '".$DBCONN->escapeSimple($letter)."'".$text.")";
				}
			}
		}
		if ($text=="") {
			if ($MULTI_LETTER_ALPHABET[$LANGUAGE]=="")
				$sql .= "n_letter LIKE '".$DBCONN->escapeSimple($letter)."%'";
			else
				$sql .= "n_letter = '".$DBCONN->escapeSimple($letter)."'";
		}
	}
	//-- add some optimization if the surname is set to speed up the lists
	if (!empty($surname))
		$sql .= "AND n_surname LIKE '%".$DBCONN->escapeSimple($surname)."%' ";
	if (!$SHOW_MARRIED_NAMES)
		$sql .= "AND n_type!='C' ";
	$sql .= "AND i_file=".PGV_GED_ID." ORDER BY i_name";
	$res = dbquery($sql);
	if (!DB::isError($res)) {
	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$tindilist[$row["i_id"]] = $row["i_id"];
		}
	$res->free();
	}

	return $tindilist;
}

/**
 * Get Individuals with a given surname
 *
 * This function finds all of the individuals who have the given surname
 * @param string $surname	The surname to search on
 * @return array	$indilist array
 * @see http://www.phpgedview.net/devdocs/arrays.php#indilist
 */
function get_surname_indis($surname) {
	global $TBLPREFIX, $SHOW_MARRIED_NAMES, $DBCONN;

	$tindilist = array();
	$sql = "SELECT i_id FROM ".$TBLPREFIX."individuals WHERE i_surname LIKE '".$DBCONN->escapeSimple($surname)."' ";
	$sql .= "AND i_file=".PGV_GED_ID;
	$res = dbquery($sql);

	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)) {
		$tindilist[$row["i_id"]] = $row["i_id"];
	}
	$res->free();

	$sql = "SELECT i_id FROM ".$TBLPREFIX."individuals, ".$TBLPREFIX."names WHERE i_id=n_gid AND i_file=n_file AND n_surname LIKE '".$DBCONN->escapeSimple($surname)."' ";
	if (!$SHOW_MARRIED_NAMES)
		$sql .= "AND n_type!='C' ";
	$sql .= "AND i_file=".PGV_GED_ID;
	$res = dbquery($sql);

	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$tindilist[$row["i_id"]] = $row["i_id"];
		    }
	$res->free();
	return $tindilist;
}

/**
 * Get Families Starting with a letter
 *
 * This function finds all of the families who start with the given letter
 * @param string $letter	The letter to search on
 * @return array	$indilist array
 * @see get_alpha_indis()
 * @see http://www.phpgedview.net/devdocs/arrays.php#famlist
 */
function get_alpha_fams($letter) {
	global $TBLPREFIX, $SHOW_MARRIED_NAMES;

	$danishex = array("OE", "AE", "AA");
	$danishFrom = array("AA", "AE", "OE");
	$danishTo = array("Å", "Æ", "Ø");

	$tfamlist = array();
	$temp = $SHOW_MARRIED_NAMES;
	$SHOW_MARRIED_NAMES = false;
	$myindilist = get_alpha_indis($letter);
	$SHOW_MARRIED_NAMES = $temp;
	foreach (array_keys($myindilist) as $pid) {
		$person=Person::getInstance($pid);
		foreach ($person->getSpouseFamilyIds() as $famid) {
			$tfamlist[$famid] = $famid;
			}
					}

	if ($letter=="@") {
		$sql = "SELECT f_id FROM {$TBLPREFIX}families WHERE (f_husb='' OR f_wife='') AND f_file=".PGV_GED_ID;
		$res = dbquery($sql);

		if ($res->numRows()>0) {
			while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
				$tfamlist[$row["f_id"]] = $row["f_id"];
			}
		}
		$res->free();
	}
	return $tfamlist;
}

/**
 * Get Families with a given surname
 *
 * This function finds all of the individuals who have the given surname
 * @param string $surname	The surname to search on
 * @return array	$indilist array
 * @see http://www.phpgedview.net/devdocs/arrays.php#indilist
 */
function get_surname_fams($surname) {
	global $TBLPREFIX, $famlist, $indilist, $SHOW_MARRIED_NAMES;

	$tfamlist = array();

	$temp = $SHOW_MARRIED_NAMES;
	$SHOW_MARRIED_NAMES = false;
	$myindilist = get_surname_indis($surname);
	$SHOW_MARRIED_NAMES = $temp;
	foreach ($myindilist as $pid) {
		$person=Person::getInstance($pid);
		foreach ($person->getSpouseFamilyIds() as $famid) {
			$tfamlist[$famid] = $famid;
		}
	}

	if ($surname=="@N.N.") {
		$sql = "SELECT f_id FROM {$TBLPREFIX}families WHERE (f_husb='' OR f_wife='') AND f_file=".PGV_GED_ID;
		$res = dbquery($sql);
		if ($res->numRows()>0) {
			while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
				$tfamlist[$row["f_id"]] = $row["f_id"];
			}
		}
		$res->free();
	}
	return $tfamlist;
}

//-- function to find the gedcom id for the given rin
function find_rin_id($rin) {
	global $TBLPREFIX;

	$sql = "SELECT i_id FROM ".$TBLPREFIX."individuals WHERE i_rin='$rin' AND i_file=".PGV_GED_ID;
	$res = dbquery($sql);

	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		return $row["i_id"];
	}
	return $rin;
}

/**
 * Delete a gedcom from the database and the system
 * Does not delete the file from the file system
 * @param string $ged 	the filename of the gedcom to delete
 */
function delete_gedcom($ged) {
	global $TBLPREFIX, $pgv_changes, $DBCONN, $GEDCOMS;

	if (!isset($GEDCOMS[$ged]))
		return;
	$dbged = $GEDCOMS[$ged]["id"];

	dbquery("DELETE FROM {$TBLPREFIX}gedcom WHERE ged_id=".$DBCONN->escapeSimple($dbged));
	// If the DB doesn't support foreign key constraints, we must do it ourself :-(
	dbquery("DELETE FROM {$TBLPREFIX}record WHERE rec_ged_id   NOT IN (SELECT ged_id  FROM {$TBLPREFIX}gedcom)");
	dbquery("DELETE FROM {$TBLPREFIX}fact   WHERE fact_rec_id  NOT IN (SELECT rec_id  FROM {$TBLPREFIX}record)");
	dbquery("DELETE FROM {$TBLPREFIX}link   WHERE link_fact_id NOT IN (SELECT fact_id FROM {$TBLPREFIX}fact)");
	dbquery("DELETE FROM {$TBLPREFIX}name   WHERE name_fact_id NOT IN (SELECT fact_id FROM {$TBLPREFIX}fact)");


	$sql = "DELETE FROM ".$TBLPREFIX."blocks WHERE b_username='".$DBCONN->escapeSimple($ged)."'";
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."dates WHERE d_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."families WHERE f_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."favorites WHERE fv_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."individuals WHERE i_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."media WHERE m_gedfile=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."media_mapping WHERE mm_gedfile=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."names WHERE n_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."news WHERE n_username='".$DBCONN->escapeSimple($ged)."'";
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."nextid WHERE ni_gedfile=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."other WHERE o_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."placelinks WHERE pl_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."places WHERE p_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	$sql = "DELETE FROM ".$TBLPREFIX."sources WHERE s_file=".$DBCONN->escapeSimple($dbged);
	$res = dbquery($sql);

	if (isset($pgv_changes)) {
		//-- erase any of the changes
		foreach ($pgv_changes as $cid=>$changes) {
			if ($changes[0]["gedcom"]==$ged)
				unset($pgv_changes[$cid]);
		}
		write_changes();
	}
}

/**
 * return the current size of the given list
 * list options are indilist famlist sourcelist and otherlist
 *
 * @param string $list	list options are indilist famlist sourcelist and otherlist
 * @param string $filter
 * @return int
 */
function get_list_size($list, $filter="") {
	global $TBLPREFIX, $DBTYPE;

	if ($filter) {
		if (stristr($DBTYPE, "mysql")!==false)
			$term = "REGEXP";
		else
			if (stristr($DBTYPE, "pgsql")!==false)
				$term = "~*";
			else
				$term = "LIKE";
	}

	switch($list) {
		case "indilist":
			$sql = "SELECT count(i_file) FROM ".$TBLPREFIX."individuals WHERE i_file=".PGV_GED_ID;
			if ($filter)
				$sql .= " AND i_gedcom $term '%$filter%'";
			$res = dbquery($sql);
			$row =& $res->fetchRow();
			$res->free();
			return $row[0];
		break;
		case "famlist":
			$sql = "SELECT count(f_file) FROM ".$TBLPREFIX."families WHERE f_file=".PGV_GED_ID;
			if ($filter)
				$sql .= " AND f_gedcom $term '%$filter%'";
			$res = dbquery($sql);

			$row =& $res->fetchRow();
			$res->free();
			return $row[0];
		break;
		case "sourcelist":
			$sql = "SELECT count(s_file) FROM ".$TBLPREFIX."sources WHERE s_file=".PGV_GED_ID;
			if ($filter)
				$sql .= " AND s_gedcom $term '%$filter%'";
			$res = dbquery($sql);

			$row =& $res->fetchRow();
			$res->free();
			return $row[0];
		break;
		case "objectlist": // media object
			$sql = "SELECT count(m_id) FROM ".$TBLPREFIX."media WHERE m_gedfile=".PGV_GED_ID;
			if ($filter)
				$sql .= " AND m_gedrec $term '%$filter%'";
			$res = dbquery($sql, false);
			//-- prevent failure if DB tables are lost
			if (DB::isError($res)) return 0;
			$row =& $res->fetchRow();
			$res->free();
			return $row[0];
		break;
		case "otherlist": // REPO
			$sql = "SELECT count(o_file) FROM ".$TBLPREFIX."other WHERE o_file=".PGV_GED_ID;
			if ($filter)
				$sql .= " AND o_gedcom $term '%$filter%'";
			$res = dbquery($sql);

			$row =& $res->fetchRow();
			$res->free();
			return $row[0];
		break;
	}
	return 0;
}

/**
 * get the top surnames
 * @param int $num	how many surnames to return
 * @return array
 */
function get_top_surnames($num) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT UPPER(name_surn) AS surn, COUNT(rec_id) AS count_surn FROM {$TBLPREFIX}name, {$TBLPREFIX}fact, {$TBLPREFIX}record WHERE name_fact_id=fact_id AND fact_rec_id=rec_id AND name_surn!='@N.N.' AND name_type!='_MARNM' AND rec_type='INDI' AND rec_ged_id=".PGV_GED_ID." GROUP BY surn HAVING count_surn>1 ORDER BY count_surn DESC");

	$surnames = array();
	$statement->execute();
	++$TOTAL_QUERIES;
	while ($num-- && $row=$statement->fetchObject()) {
		$surnames[]=array("name"=>$row->surn, "match"=>(int)$row->count_surn);
	}
	$statement->closeCursor();

	return $surnames;
}

/**
 * get next unique id for the given table
 * @param string $table 	the name of the table
 * @param string $field		the field to get the next number for
 * @return int the new id
 */
function get_next_id($table, $field) {
	global $TBLPREFIX, $TABLE_IDS;

	if (!isset($TABLE_IDS))
		$TABLE_IDS = array();
	if (isset($TABLE_IDS[$table][$field])) {
		$TABLE_IDS[$table][$field]++;
		return $TABLE_IDS[$table][$field];
	}
	$newid = 0;
	$sql = "SELECT MAX($field) FROM ".$TBLPREFIX.$table;
	$res = dbquery($sql);

	if ($res!==false && !DB::isError($res)) {
		$row = $res->fetchRow();
		$res->free();
		$newid = $row[0];
	}
	$newid++;
	$TABLE_IDS[$table][$field] = $newid;
	return $newid;
}

/**
 * get a list of remote servers
 */
function get_server_list(){
 	global $GEDCOM, $GEDCOMS, $TBLPREFIX, $sitelist, $sourcelist;

	$sitelist = array();

	if (isset($GEDCOMS[$GEDCOM]) && check_for_import($GEDCOM)) {
		$sql = "SELECT s_id ,s_name, s_gedcom FROM {$TBLPREFIX}sources WHERE s_file=".PGV_GED_ID." AND s_gedcom LIKE '%1 _DBID%' ORDER BY s_name";
		$res = dbquery($sql, false);
		if (DB::isError($res))
			return $sitelist;

		$ct = $res->numRows();
		while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
			$source = array();
			$source["name"] = $row["s_name"];
			$source["gedcom"] = $row["s_gedcom"];
			$row = db_cleanup($row);
			$source["gedfile"] = PGV_GED_ID;
			$source["url"] = get_gedcom_value("URL", 1, $row["s_gedcom"]);
			$sitelist[$row["s_id"]] = $source;
			$sourcelist[$row["s_id"]] = $source;
		}
		$res->free();
	}

	return $sitelist;
}

/**
 * Retrieve the array of faqs from the DB table blocks
 * @param int $id		The FAQ ID to retrieven
 * @return array $faqs	The array containing the FAQ items
 */
function get_faq_data($id='') {
	global $TBLPREFIX, $GEDCOM;

	$faqs = array();
	// Read the faq data from the DB
	$sql = "SELECT b_id, b_location, b_order, b_config, b_username FROM ".$TBLPREFIX."blocks WHERE (b_username='$GEDCOM' OR b_username='*all*') AND b_name='faq'";
	if ($id != '')
		$sql .= " AND b_order='".$id."'";
	$res = dbquery($sql);

	while ($row =& $res->fetchRow(DB_FETCHMODE_ASSOC)){
		$faqs[$row["b_order"]][$row["b_location"]]["text"] = unserialize($row["b_config"]);
		$faqs[$row["b_order"]][$row["b_location"]]["pid"] = $row["b_id"];
		$faqs[$row["b_order"]][$row["b_location"]]["gedcom"] = $row["b_username"];
	}
	ksort($faqs);
	return $faqs;
}

function delete_fact($linenum, $pid, $gedrec) {
	global $linefix, $pgv_lang;

	if (!empty($linenum)) {
		if ($linenum==0) {
			if (delete_gedrec($pid))
				print $pgv_lang["gedrec_deleted"];
		} else {
			$gedlines = preg_split("/[\r\n]+/", $gedrec);
			// NOTE: The array_pop is used to kick off the last empty element on the array
			// NOTE: To prevent empty lines in the GEDCOM
			// DEBUG: Records without line breaks are imported as 1 big string
			if ($linefix > 0)
				array_pop($gedlines);
			$newged = "";
			// NOTE: Add all lines that are before the fact to be deleted
			for ($i=0; $i<$linenum; $i++) {
				$newged .= trim($gedlines[$i])."\r\n";
			}
			if (isset($gedlines[$linenum])) {
				$fields = explode(' ', $gedlines[$linenum]);
				$glevel = $fields[0];
				$ctlines = count($gedlines);
				$i++;
				if ($i<$ctlines) {
					// Remove the fact
					while ((isset($gedlines[$i]))&&($gedlines[$i]{0}>$glevel)) $i++;
					// Add the remaining lines
					while ($i<$ctlines) {
						$newged .= trim($gedlines[$i])."\r\n";
						$i++;
					}
				}
			}
			if ($newged != "")
				return $newged;
		}
	}
}

/**
 * get_remote_id Recieves a RFN key and returns a Stub ID if the RFN exists
 *
 * @param mixed $rfn RFN number to see if it exists
 * @access public
 * @return gid Stub ID that contains the RFN number. Returns false if it didn't find anything
 */
function get_remote_id($rfn) {
	global $TBLPREFIX, $DBCONN;

	$sql = "SELECT r_gid FROM ".$TBLPREFIX."remotelinks WHERE r_linkid='".$DBCONN->escapeSimple($rfn)."' AND r_file=".PGV_GED_ID;
	$res = dbquery($sql);

	if ($res->numRows()>0) {
		$row = $res->fetchRow();
		$res->free();
		return $row[0];
	} else {
		return false;
	}
}

////////////////////////////////////////////////////////////////////////////////
// Get a list of events whose anniversary occured on a given julian day.
// Used on the on-this-day/upcoming blocks and the day/month calendar views.
// $jd    - the julian day
// $facts - restrict the search to just these facts or leave blank for all
// $ged_id - the id of the gedcom to search
////////////////////////////////////////////////////////////////////////////////
function get_anniversary_events($jd, $facts='', $ged_id=PGV_GED_ID) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	// If no facts specified, get all except these
	$skipfacts = "CHAN,BAPL,SLGC,SLGS,ENDL,CENS,RESI,NOTE,ADDR,OBJE,SOUR,PAGE,DATA,TEXT";
	if ($facts!='_TODO') {
		$skipfacts.=',_TODO';
	}

	$found_facts=array();
	foreach (array(new GregorianDate($jd), new JulianDate($jd), new FrenchRDate($jd), new JewishDate($jd), new HijriDate($jd)) as $anniv) {
		// Build a SQL where clause to match anniversaries in the appropriate calendar.
		$where1="fact_cal1='{$anniv->CALENDAR_ESCAPE}'";
		// SIMPLE CASES:
		// a) Non-hebrew anniversaries
		// b) Hebrew months TVT, SHV, IYR, SVN, TMZ, AAV, ELL
		if ($anniv->CALENDAR_ESCAPE()!='@#DHEBREW@' || in_array($anniv->m, array(1, 5, 9, 10, 11, 12, 13))) {
			// Dates without days go on the first day of the month
			// Dates with invalid days go on the last day of the month
			if ($anniv->d==1) {
				$where1.=" AND fact_day1<=1";
			} else {
				if ($anniv->d==$anniv->DaysInMonth()) {
					$where1.=" AND fact_day1>={$anniv->d}";
				} else {
					$where1.=" AND fact_day1={$anniv->d}";
				}
			}
			$where1.=" AND fact_mon1={$anniv->m}";
		} else {
			// SPECIAL CASES:
			switch ($anniv->m) {
			case 2:
				// 29 CSH does not include 30 CSH (but would include an invalid 31 CSH if there were no 30 CSH)
				if ($anniv->d==1) {
					$where1.=" AND fact_day1<=1 AND fact_mon1=2";
				} else {
					if ($anniv->d==30) {
						$where1.=" AND fact_day1>=30 AND fact_mon1=2";
					} else {
						if ($anniv->d==29 && $anniv->DaysInMonth()==29) {
							$where1.=" AND (fact_day1=29 OR fact_day1>30) AND fact_mon1=2";
						} else {
							$where1.=" AND fact_day1={$anniv->d} AND fact_mon1=2";
						}
					}
				}
				break;
			case 3:
				// 1 KSL includes 30 CSH (if this year didn't have 30 CSH)
				// 29 KSL does not include 30 KSL (but would include an invalid 31 KSL if there were no 30 KSL)
				if ($anniv->d==1) {
					$tmp=new JewishDate(array($anniv->y, 'csh', 1));
					if ($tmp->DaysInMonth()==29) {
						$where1.=" AND (fact_day1<=1 AND fact_mon1=3 OR fact_day1=30 AND fact_mon1=2)";
					} else {
						$where1.=" AND fact_day1<=1 AND fact_mon1=3";
					}
				} else {
					if ($anniv->d==30) {
						$where1.=" AND fact_day1>=30 AND fact_mon1=3";
					} else {
						if ($anniv->d==29 && $anniv->DaysInMonth()==29) {
							$where1.=" AND (fact_day1=29 OR fact_day1>30) AND fact_mon1=3";
						} else {
							$where1.=" AND fact_day1={$anniv->d} AND fact_mon1=3";
						}
					}
				}
				break;
			case 4:
				// 1 TVT includes 30 KSL (if this year didn't have 30 KSL)
				if ($anniv->d==1) {
					$tmp=new JewishDate($anniv->y, 'ksl', 1);
					if ($tmp->DaysInMonth()==29) {
						$where1.=" AND (fact_day1<=1 AND fact_mon1=4 OR fact_day1=30 AND fact_mon1=3)";
					} else {
						$where1.=" AND fact_day1<=1 AND fact_mon1=4";
					}
				} else {
					if ($anniv->d==$anniv->DaysInMonth()) {
						$where1.=" AND fact_day1>={$anniv->d} AND fact_mon1=4";
					} else {
						$where1.=" AND fact_day1={$anniv->d} AND fact_mon1=4";
					}
				}
				break;
			case 6: // ADR (non-leap) includes ADS (leap)
				if ($anniv->d==1) {
					$where1.=" AND fact_day1<=1";
				} else {
					if ($anniv->d==$anniv->DaysInMonth()) {
						$where1.=" AND fact_day1>={$anniv->d}";
					} else {
						$where1.=" AND fact_day1={$anniv->d}";
					}
				}
				if ($anniv->IsLeapYear()) {
					$where1.=" AND (fact_day1=6 AND ".sql_mod_function("7*fact_year1+1","19")."<7)";
				} else {
					$where1.=" AND (fact_day1=6 OR fact_mon1=7)";
				}
				break;
			case 7: // ADS includes ADR (non-leap)
				if ($anniv->d==1) {
					$where1.=" AND fact_day1<=1";
				} else {
					if ($anniv->d==$anniv->DaysInMonth()) {
						$where1.=" AND fact_day1>={$anniv->d}";
					} else {
						$where1.=" AND fact_day1={$anniv->d}";
					}
				}
				$where1.=" AND (fact_mon1=6 AND ".sql_mod_function("7*fact_year1+1","19").">=7 OR fact_mon1=7)";
				break;
			case 8: // 1 NSN includes 30 ADR, if this year is non-leap
				if ($anniv->d==1) {
					if ($anniv->IsLeapYear()) {
						$where1.=" AND fact_day1<=1 AND fact_mon1=8";
					} else {
						$where1.=" AND (fact_day1<=1 AND fact_mon1=8 OR fact_day1=30 AND fact_mon1=6)";
					}
				} else {
					if ($anniv->d==$anniv->DaysInMonth()) {
						$where1.=" AND fact_day1>={$anniv->d} AND fact_mon1=8";
					} else {
						$where1.=" AND fact_day1={$anniv->d} AND fact_mon1=8";
					}
				}
				break;
			}
		}
		// Only events in the past (includes dates without a year)
		$where1.=" AND fact_year1<={$anniv->y}";

		// Need to query start and end dates
		$where2=str_replace(array('fact_day1', 'fact_mon1', 'fact_year1'), array('fact_day2', 'fact_mon2', 'fact_year2'), $where1);
		// Restrict to certain types of fact
		if (empty($facts)) {
			$excl_facts="'".preg_replace('/\W+/', "','", $skipfacts)."'";
			$where="fact_type NOT IN ({$excl_facts})";
		} else {
			$incl_facts="'".preg_replace('/\W+/', "','", $facts)."'";
			$where="fact_type IN ({$incl_facts})";
		}

		// Now fetch these anniversaries
		$sql=
			"SELECT rec_xref, rec_type, fact_type, fact_jd1, fact_day1, fact_year1, fact_date, fact_plac, fact_gedcom ".
			"FROM {$TBLPREFIX}record, {$TBLPREFIX}fact ".
			"WHERE rec_id=fact_rec_id AND rec_ged_id={$ged_id} AND {$where} AND {$where1} ".
			"UNION ALL ".
			"SELECT rec_xref, rec_type, fact_type, fact_jd2, fact_day2, fact_year2, fact_date, fact_plac, fact_gedcom ".
			"FROM {$TBLPREFIX}record, {$TBLPREFIX}fact ".
			"WHERE rec_id=fact_rec_id AND rec_ged_id={$ged_id} AND {$where} AND {$where2} ".
			"ORDER BY fact_day1 ASC, fact_year1 DESC";

		++$TOTAL_QUERIES;
		foreach ($DBH->query($sql)->fetchAll(PDO::FETCH_OBJ) as $row) {
			$found_facts[]=array(
				'id'=>$row->rec_xref,
				'objtype'=>$row->rec_type,
				'fact'=>$row->fact_type,
				'factrec'=>$row->fact_gedcom,
				'jd'=>$row->fact_jd1,
				'anniv'=>($row->fact_year1==0 ? 0 : $anniv->y-$row->fact_year1),
				'date'=>new GedcomDate($row->fact_date),
				'plac'=>$row->fact_plac
			);
		}
	}
	return $found_facts;
}


////////////////////////////////////////////////////////////////////////////////
// Get a list of events which occured during a given date range.
// TODO: Used by the recent-changes block and the calendar year view.
// $jd1, $jd2 - the range of julian day
// $facts - restrict the search to just these facts or leave blank for all
// $ged_id    - the id of the gedcom to search
////////////////////////////////////////////////////////////////////////////////
function get_calendar_events($jd1, $jd2, $facts='', $ged_id=PGV_GED_ID) {
	global $TBLPREFIX;

	// If no facts specified, get all except these
	$skipfacts = "CHAN,BAPL,SLGC,SLGS,ENDL,CENS,RESI,NOTE,ADDR,OBJE,SOUR,PAGE,DATA,TEXT";
	if ($facts!='_TODO') {
		$skipfacts.=',_TODO';
	}

	$found_facts=array();

	// This where clause gives events that start/end/overlap the period
	// e.g. 1914-1918 would show up on 1916
	//$where="WHERE fact_jd1 <={$jd2} AND fact_jd2>={$jd1}";
	// This where clause gives only events that start/end during the period
	$where1="WHERE (fact_jd1>={$jd1} AND fact_jd1<={$jd2} OR fact_jd2>={$jd1} AND fact_jd2<={$jd2})";

	// Need to query start and end dates
	$where2=str_replace(array('fact_day1', 'fact_mon1', 'fact_year1'), array('fact_day2', 'fact_mon2', 'fact_year2'), $where1);

	// Restrict to certain types of fact
	if (empty($facts)) {
		$excl_facts="'".preg_replace('/\W+/', "','", $skipfacts)."'";
		$where="fact_type NOT IN ({$excl_facts})";
	} else {
		$incl_facts="'".preg_replace('/\W+/', "','", $facts)."'";
		$where="fact_type IN ({$incl_facts})";
	}

	// Now fetch these events
	$sql=
		"SELECT rec_xref, rec_type, fact_type, fact_jd1, fact_day1, fact_year1, fact_date, fact_plac, fact_gedcom ".
		"FROM {$TBLPREFIX}record, {$TBLPREFIX}fact ".
		"WHERE rec_id=fact_rec_id AND rec_ged_id={$ged_id} AND {$where} AND ({$where1} OR {$where2}) ".
		"ORDER BY fact_jd1";

	++$TOTAL_QUERIES;
	foreach ($DBH->query($sql)->fetchAll(PDO::FETCH_OBJ) as $row) {
		$found_facts[]=array(
			'id'=>$row->rec_xref,
			'objtype'=>$row->rec_type,
			'fact'=>$row->fact_type,
			'factrec'=>$row->fact_gedcom,
			'jd'=>$row->fact_jd1,
			'anniv'=>($row->fact_year1==0 ? 0 : $anniv->y-$row->fact_year1),
			'date'=>new GedcomDate($row->fact_date),
			'plac'=>$row->fact_plac
		);
	}
	return $found_facts;
}


/**
 * Get the list of current and upcoming events, sorted by anniversary date
 *
 * This function is used by the Todays and Upcoming blocks on the Index and Portal
 * pages.  It is also used by the RSS feed.
 *
 * Special note on unknown day-of-month:
 * When the anniversary date is imprecise, the sort will pretend that the day-of-month
 * is either tomorrow or the first day of next month.  These imprecise anniversaries
 * will sort to the head of the chosen day.
 *
 * Special note on Privacy:
 * This routine does not check the Privacy of the events in the list.  That check has
 * to be done by the routine that makes use of the event list.
 */
function get_events_list($jd1, $jd2, $events='') {
	$found_facts=array();
	for ($jd=$jd1; $jd<=$jd2; ++$jd) {
		$found_facts=array_merge($found_facts, get_anniversary_events($jd, $events));
	}
	return $found_facts;
}

////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_GEDCOM table
////////////////////////////////////////////////////////////////////////////////

function create_gedcom($gedcom) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("INSERT INTO {$TBLPREFIX}gedcom (ged_name) VALUES (?)");
	$statement->bindValue(1, $gedcom, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

function get_all_gedcoms() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT ged_id, ged_name FROM {$TBLPREFIX}gedcom ORDER BY ged_name");
	$statement->execute();
	++$TOTAL_QUERIES;
	$gedcoms=array();
	while ($row=$statement->fetchObject()) {
		$gedcoms[$row->ged_id]=$row->ged_name;
	}
	$statement->closeCursor();
	return $gedcoms;
}

function get_gedcom_from_id($ged_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT ged_name FROM {$TBLPREFIX}gedcom WHERE ged_id=?");
	$statement->bindValue(1, $ged_id, PDO::PARAM_INT);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	return $row->ged_name;
}

function get_id_from_gedcom($ged_name) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;


	try {
		static $statement=null;
		if (is_null($statement)) {
			if (!is_object($DBH)) throw(new PDOException);
			$statement=$DBH->prepare("SELECT ged_id FROM {$TBLPREFIX}gedcom WHERE ged_name=?");
		}
		$statement->bindValue(1, $ged_name, PDO::PARAM_STR);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		if ($row) {
			return $row->ged_id;
		} else {
			return null;
		}
	} catch (PDOException $e) {
		return null;
	}
}


////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_GEDCOM_SETTING table
////////////////////////////////////////////////////////////////////////////////

function get_gedcom_setting($ged_id, $parameter) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	static $statement=null;
	if (is_null($statement)) {
		$statement=$DBH->prepare(
			"SELECT gset_value FROM {$TBLPREFIX}gedcom_setting WHERE gset_ged_id=? AND gset_parameter=?"
		);
	}

	$statement->bindValue(1, $ged_id,    PDO::PARAM_INT);
	$statement->bindValue(2, $parameter, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	if ($row) {
		return $row->gset_value;
	} else {
		return null;
	}
}


////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_USER table
////////////////////////////////////////////////////////////////////////////////

function create_user($username, $password) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("INSERT INTO {$TBLPREFIX}user (user_name, user_pass) VALUES (?, ?)");
	$statement->bindValue(1, $username, PDO::PARAM_STR);
	$statement->bindValue(2, $password, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

function rename_user($user_id, $new_username) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("UPDATE {$TBLPREFIX}user SET user_name=? WHERE user_id=?");
	$statement->bindValue(1, $new_username, PDO::PARAM_STR);
	$statement->bindValue(2, $user_id,      PDO::PARAM_INT);
	$statement->execute();
	++$TOTAL_QUERIES;

	// For databases without foreign key constraints, manually update dependent tables
	$DBH->exec("UPDATE {$TBLPREFIX}blocks    SET b_username ='{$new_username}' WHERE b_username ='{$user_id}'");
	$DBH->exec("UPDATE {$TBLPREFIX}favorites SET fv_username='{$new_username}' WHERE fv_username='{$user_id}'");
	$DBH->exec("UPDATE {$TBLPREFIX}messages  SET m_from     ='{$new_username}' WHERE m_from     ='{$user_id}'");
	$DBH->exec("UPDATE {$TBLPREFIX}messages  SET m_to       ='{$new_username}' WHERE m_to       ='{$user_id}'");
	$DBH->exec("UPDATE {$TBLPREFIX}news      SET n_username ='{$new_username}' WHERE n_username ='{$user_id}'");
	$TOTAL_QUERIES+=5;
	}

function delete_user($user_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("DELETE FROM {$TBLPREFIX}user WHERE user_id=?");
	$statement->bindValue(1, $user_id, PDO::PARAM_INT);
	$statement->execute();
	++$TOTAL_QUERIES;

	// For databases without foreign key constraints, manually update dependent tables
	$DBH->exec("DELETE FROM {$TBLPREFIX}user_setting WHERE uset_user_id NOT IN (SELECT user_id FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}user_gedcom_setting WHERE ugset_user_id NOT IN (SELECT user_id FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}blocks    WHERE b_username  NOT IN (SELECT user_name FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}favorites WHERE fv_username NOT IN (SELECT user_name FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}messages  WHERE m_from      NOT IN (SELECT user_name FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}messages  WHERE m_to        NOT IN (SELECT user_name FROM {$TBLPREFIX}user)");
	$DBH->exec("DELETE FROM {$TBLPREFIX}news      WHERE n_username  NOT IN (SELECT user_name FROM {$TBLPREFIX}user)");
	$TOTAL_QUERIES+=7;
}

function get_all_users($order='ASC', $key1='lastname', $key2='firstname') {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare(
		"SELECT user_id, user_name FROM {$TBLPREFIX}user".
		"	LEFT OUTER JOIN {$TBLPREFIX}user_setting sort1 ON user_id=sort1.uset_user_id AND sort1.uset_parameter=?".
		"	LEFT OUTER JOIN {$TBLPREFIX}user_setting sort2 ON user_id=sort2.uset_user_id AND sort2.uset_parameter=?".
		"  ORDER BY sort1.uset_parameter {$order}, sort2.uset_parameter {$order}");
	$statement->bindValue(1, $key1, PDO::PARAM_STR);
	$statement->bindValue(2, $key2, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$users=array();
	while ($row=$statement->fetchObject()) {
		$users[$row->user_id]=$row->user_name;
	}
	$statement->closeCursor();
	return $users;
}

function get_user_count() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT count(user_id) AS user_count FROM {$TBLPREFIX}user");
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	return $row->user_count;
}

// Get a list of logged-in users
function get_logged_in_users() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT user_id, user_name FROM {$TBLPREFIX}user, {$TBLPREFIX}user_setting WHERE user_id=uset_user_id AND uset_parameter='loggedin' AND uset_value='Y'");
	$statement->execute();
	++$TOTAL_QUERIES;
	$users=array();
	while ($row=$statement->fetchObject()) {
		$users[$row->user_id]=$row->user_name;
	}
	$statement->closeCursor();
	return $users;
}

// Get a list of logged-in users who haven't been active recently
function get_idle_users($time) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$time=(int)($time);
	$statement=$DBH->prepare("SELECT user_id, user_name FROM {$TBLPREFIX}user, {$TBLPREFIX}user_setting us1 , {$TBLPREFIX}user_setting us2 WHERE user_id=us1.uset_user_id AND user_id=us2.uset_user_id AND us1.uset_parameter='loggedin' AND us1.uset_value='Y' AND us2.uset_parameter='sessiontime' AND us2.uset_value BETWEEN 1 AND {$time}");
	$statement->execute();
	++$TOTAL_QUERIES;
	$users=array();
	while ($row=$statement->fetchObject()) {
		$users[$row->user_id]=$row->user_name;
	}
	$statement->closeCursor();
	return $users;
}

function get_user_id($username) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	try {
		static $statement=null;
		if (is_null($statement)) {
			if (!is_object($DBH)) throw(new PDOException);
			$statement=$DBH->prepare("SELECT user_id FROM {$TBLPREFIX}user WHERE user_name=?");
		}

		$statement->bindValue(1, $username, PDO::PARAM_STR);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		if ($row) {
			return $row->user_id;
		} else {
			return null;
		}
	} catch (PDOException $e) {
		return null;
	}
}

// Get the username for a user ID
function get_user_name($user_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	try {
		if (!is_object($DBH)) throw(new PDOException);
		$statement=$DBH->prepare("SELECT user_name FROM {$TBLPREFIX}user WHERE user_id=?");
		$statement->bindValue(1, $user_id, PDO::PARAM_STR);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		if ($row) {
			return $row->user_name;
		} else {
			return null;
		}
	} catch (PDOException $e) {
		return null;
	}
}

function set_user_password($user_id, $password) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT user_pass FROM {$TBLPREFIX}user WHERE user_id=?");
	$statement->bindValue(1, $user_id, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	return $row->user_pass;
}

function get_user_password($user_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare("SELECT user_pass FROM {$TBLPREFIX}user WHERE user_id=?");

	$statement->bindValue(1, $user_id, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	return $row->user_pass;
}

////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_USER_SETTING table
////////////////////////////////////////////////////////////////////////////////

function get_user_setting($user_id, $parameter) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	try {
		static $statement=null;
		if (is_null($statement)) {
			if (!is_object($DBH)) throw(new PDOException);
			$statement=$DBH->prepare(
				"SELECT uset_value FROM {$TBLPREFIX}user_setting WHERE uset_user_id=? AND uset_parameter=?"
			);
		}

		$statement->bindValue(1, $user_id,   PDO::PARAM_INT);
		$statement->bindValue(2, $parameter, PDO::PARAM_STR);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		if ($row) {
			return $row->uset_value;
		} else {
				return null;
		}
	} catch (PDOException $e) {
		return null;
	}
}

function set_user_setting($user_id, $parameter, $value) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	static $statement1=null;
	static $statement2=null;
	static $statement3=null;
	if (is_null($statement1)) {
		$statement1=$DBH->prepare(
			"DELETE FROM {$TBLPREFIX}user_setting WHERE uset_user_id=? AND uset_parameter=?"
		);
		$statement2=$DBH->prepare(
			"INSERT INTO {$TBLPREFIX}user_setting (uset_user_id, uset_parameter, uset_value) VALUES (?, ?,?)"
		);
		$statement3=$DBH->prepare(
			"UPDATE {$TBLPREFIX}user_setting SET uset_value=? WHERE uset_user_id=? AND uset_parameter=?"
		);
	}

	if (empty($value)) {
		// delete
		$statement1->bindValue(1, $user_id,   PDO::PARAM_INT);
		$statement1->bindValue(2, $parameter, PDO::PARAM_STR);
		$statement1->execute();
		++$TOTAL_QUERIES;
	} else {
		$tmp=get_user_setting($user_id, $parameter);
		if (is_null($tmp)) {
			// insert
			$statement2->bindValue(1, $user_id,   PDO::PARAM_INT);
			$statement2->bindValue(2, $parameter, PDO::PARAM_STR);
			$statement2->bindValue(3, $value,     PDO::PARAM_STR);
			$statement2->execute();
			++$TOTAL_QUERIES;
		} else {
			if ($tmp!=$value)  {
				// update
				$statement3->bindValue(1, $value,     PDO::PARAM_STR);
				$statement3->bindValue(2, $user_id,   PDO::PARAM_INT);
				$statement3->bindValue(3, $parameter, PDO::PARAM_STR);
				$statement3->execute();
				++$TOTAL_QUERIES;
}
		}
	}
}

function admin_user_exists() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	try {
		$statement=$DBH->prepare(
			"SELECT COUNT(1) AS num FROM {$TBLPREFIX}user_setting WHERE uset_parameter='canadmin' AND uset_value='Y'"
		);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		return $row->num > 0;
	} catch (PDOException $e) {
		return false;
	}
}

////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_USER_GEDCOM_SETTING table
////////////////////////////////////////////////////////////////////////////////

function get_user_gedcom_setting($user_id, $ged_id, $parameter) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	try {
		static $statement=null;
		if (is_null($statement)) {
			if (!is_object($DBH)) throw(new PDOException);
			$statement=$DBH->prepare(
				"SELECT ugset_value FROM {$TBLPREFIX}user_gedcom_setting".
				" WHERE ugset_user_id=? AND ugset_ged_id=? AND ugset_parameter=?"
			);
		}
	
		$statement->bindValue(1, $user_id,   PDO::PARAM_INT);
		$statement->bindValue(2, $ged_id,    PDO::PARAM_INT);
		$statement->bindValue(3, $parameter, PDO::PARAM_STR);
		$statement->execute();
		++$TOTAL_QUERIES;
		$row=$statement->fetchObject();
		$statement->closeCursor();
		if ($row) {
			return $row->ugset_value;
		} else {
			return null;
		}
	} catch (PDOException $e) {
		return null;
	}
}

function set_user_gedcom_setting($user_id, $ged_id, $parameter, $value) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	static $statement1=null;
	static $statement2=null;
	static $statement3=null;
	if (is_null($statement1)) {
		$statement1=$DBH->prepare(
			"DELETE FROM {$TBLPREFIX}user_gedcom_setting WHERE ugset_user_id=? AND ugset_ged_id=? AND ugset_parameter=?"
		);
		$statement2=$DBH->prepare(
			"INSERT INTO {$TBLPREFIX}user_gedcom_setting (ugset_user_id, ugset_ged_id, ugset_parameter, ugset_value) VALUES (?, ?, ?, ?)"
		);
		$statement3=$DBH->prepare(
			"UPDATE {$TBLPREFIX}user_gedcom_setting SET ugset_value=? WHERE ugset_user_id=? AND ugset_ged_id=? AND ugset_parameter=?"
		);
	}

	if (empty($value)) {
		// delete
		$statement1->bindValue(1, $user_id,   PDO::PARAM_INT);
		$statement1->bindValue(2, $ged_id,    PDO::PARAM_INT);
		$statement1->bindValue(3, $parameter, PDO::PARAM_STR);
		$statement1->execute();
		++$TOTAL_QUERIES;
	} else {
		$tmp=get_user_gedcom_setting($user_id, $ged_id, $parameter);
		if (is_null($tmp)) {
			// insert
			$statement2->bindValue(1, $user_id,   PDO::PARAM_INT);
			$statement2->bindValue(2, $ged_id,    PDO::PARAM_INT);
			$statement2->bindValue(3, $parameter, PDO::PARAM_STR);
			$statement2->bindValue(4, $value,     PDO::PARAM_STR);
			$statement2->execute();
			++$TOTAL_QUERIES;
		} else {
			if ($tmp!=$value)  {
				// update
				$statement3->bindValue(1, $value,     PDO::PARAM_STR);
				$statement3->bindValue(2, $user_id,   PDO::PARAM_INT);
				$statement3->bindValue(3, $ged_id,    PDO::PARAM_INT);
				$statement3->bindValue(4, $parameter, PDO::PARAM_STR);
				$statement3->execute();
				++$TOTAL_QUERIES;
	}
}
	}
}

function get_user_from_gedcom_xref($gedcom, $xref) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare(
		"SELECT ugset_user_id FROM {$TBLPREFIX}user_gedcom_setting".
		" WHERE ugset_value=? AND ugset_parameter='gedcomid' AND ugset_parameter=?"
	);

	$statement->bindValue(1, $xref, PDO::PARAM_STR);
	$statement->bindValue(2, $xref, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	if ($row) {
		return $row->ugset_user_id;
	} else {
		return null;
		}
	}

function get_gedcom_xref_from_user($user_id, $prefered_ged_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement=$DBH->prepare(
		"SELECT ugset_ged_id, ugset_value FROM {$TBLPREFIX}user_gedcom_setting".
		" WHERE ugset_user_id=? AND ugset_parameter='gedcomid'".
		"  ORDER BY ugset_ged_id!=?"
	);

	$statement->bindValue(1, $user_id,         PDO::PARAM_INT);
	$statement->bindValue(2, $prefered_ged_id, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;
	$row=$statement->fetchObject();
	$statement->closeCursor();
	if ($row) {
		return $row;
	} else {
		return null;
	}
}

////////////////////////////////////////////////////////////////////////////////
// Functions to access the PGV_EDIT table
////////////////////////////////////////////////////////////////////////////////

function create_edit() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$DBH->exec("INSERT INTO {$TBLPREFIX}edit (edit_user_id) VALUES (".PGV_USER_ID.")");
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

function get_all_edits() {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	++$TOTAL_QUERIES;
	return $DBH->query(
		"SELECT rec_ged_id AS ged_id, rec_id, fact_id, created_by, deleted_by ".
		"FROM {$TBLPREFIX}record, {$TBLPREFIX}fact ".
		"WHERE rec_id=fact_rec_id AND (created_by IS NOT NULL OR deleted_by IS NOT NULL) ".
		"ORDER BY ged_id, rec_id, fact_id, created_by"
	)->fetchAll();
}

function accept_edit($edit_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	// Can't accept deletions of unaccepted facts or  insertions of deleted facts
	$statement=$DBH->prepare("SELECT COUNT(1) AS blocks FROM {$TBLPREFIX}fact WHERE created_by=? AND deleted_by IS NOT NULL");
	$statement->bindValue(1, $edit_id, PDO::PARAM_INT);
	$statement->execute();
	++$TOTAL_QUERIES;


	$DBH->exec("INSERT INTO {$TBLPREFIX}edit (edit_user_id) VALUES (".PGV_USER_ID.")");
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

function undo_edit($edit_id) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$DBH->exec("INSERT INTO {$TBLPREFIX}edit (edit_user_id) VALUES (".PGV_USER_ID.")");
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

function create_user2($username, $password) {
	global $DBH, $TBLPREFIX, $TOTAL_QUERIES;

	$statement->bindValue(2, $password, PDO::PARAM_STR);
	$statement->execute();
	++$TOTAL_QUERIES;

	return $DBH->lastInsertId();
}

////////////////////////////////////////////////////////////////////////////////
// These functions generate WHERE clauses based on the privacy settings
////////////////////////////////////////////////////////////////////////////////

function where_record_privacy() {
	global $TBLPREFIX, $PRIVACY_BY_RESN, $HIDE_LIVE_PEOPLE;

	// Site admins can see everything
	if (PGV_USER_CAN_ADMIN) {
		return 'TRUE';
	}

	// Gedcom admins can see everything except:
	// records blocked by xref
	// records blocked by user_id
	if (PGV_USER_GEDCOM_ADMIN) {
		return "rec_xref NOT IN (SELECT priv_xref FROM {$TBLPREFIX}privacy WHERE priv_ged_id=ged_id AND (priv_user_id=".PGV_USER_ID." OR priv_xref=rec_xref) AND priv_value<".PGV_USER_ACCESS_LEVEL.")";
	}

	// Logged in users can see everything except:
	// records blocked by xref
	// records blocked by user_id
	// records with RESN confidential
	// records blocked by relationship privacy limits
	// ...
	if (PGV_USER_CAN_ACCESS) {
		if ($PRIVACY_BY_RESN) {
			$resn=" AND rec_id NOT IN (SELECT fact_rec_id FROM {$TBLPREFIX}facts WHERE fact_type='RESN' AND fact_value='confidential')";
		} else {
			$resn='';
		}
		if ($USE_RELATIONSHIP_PRIVACY && PGV_USER_GEDCOM_ID) {
			$path_len=get_user_gedcom_setting(PGV_USER_ID, 'max_relation_path');
			if ($path_len<1) {
				$path_len=$MAX_RELATIONSHIP_PATH;
			}
			$rela=
				" AND rec_id IN (SELECT link_rec_id1 FROM {$TBLPREFIX}links WHERE link_rec_id2=".PGV_USER_GEDCOM_ID.")";
		} else {
			$rela='';
		}
		return "rec_xref NOT IN (SELECT priv_xref FROM {$TBLPREFIX}privacy WHERE priv_ged_id=ged_id AND (priv_user_id=".PGV_USER_ID." OR priv_xref=rec_xref) AND priv_value<".PGV_USER_ACCESS_LEVEL.")".$resn.$rela;
	}

	// Visitors can see everything except:
	// records blocked by xref
	// individuals without a death
	// records with RESN confidential or RESN privacy
	// ...
	if ($PRIVACY_BY_RESN) {
		$resn=" AND rec_id NOT IN (SELECT fact_rec_id FROM {$TBLPREFIX}facts WHERE fact_type='RESN' AND fact_value IN ('privacy, 'confidential'))";
	} else {
		$resn='';
	}
	if ($HIDE_LIVE_PEOPLE) {
		$dead=" AND (rec_type!='INDI' OR rec_id IN (SELECT fact_rec_id FROM {$TBLPREFIX}facts WHERE fact_type='DEAT'))";
	} else {
		$dead='';
	}
	return "rec_xref NOT IN (SELECT priv_xref FROM {$TBLPREFIX}privacy WHERE priv_ged_id=ged_id AND priv_xref=rec_xref AND priv_value<".PGV_USER_ACCESS_LEVEL.")".$resn.$dead;

}

?>