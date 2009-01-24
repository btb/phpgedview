<?php
/**
 * Catalan language file for PhpGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team. All rights reserved.
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
 * @translator: Antoni Planas i Vilà
 * @package PhpGedView
 * @subpackage Gallery2
 * @version $Id: mod_ca.php 3480 2008-07-05 21:36:36Z wooc $
 */

if (stristr($_SERVER["SCRIPT_NAME"], basename(__FILE__))!==false) {
	print "No podeu accedir directament a aquest arxiu d'idioma.";
	exit;
}

$pgv_lang['mod_gallery2'] = 'Galeria';
$pgv_lang['mod_gallery2_siteadmin'] = 'Administració del lloc';
$pgv_lang['mod_gallery2_useralbum'] = 'El vostre àlbum';
$pgv_lang['mod_gallery2_advsearch'] = 'Recerca avançada';
$pgv_lang['mod_gallery2_error_user_create'] = "S'ha produit un error durant la creació al vol de l'usuari.";
$pgv_lang['mod_gallery2_error_user_check'] = "S'ha produit un error tot comprovant si l'usuari ja existeix.";
$pgv_lang['mod_gallery2_error_init'] = "S'ha produit un error a l'intentar iniciar la Galeria.";
?>