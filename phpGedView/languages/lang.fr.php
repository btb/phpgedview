<?php
/**
 * French Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2006  Christophe Bx, Julien Damon
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
 * @subpackage Languages
 * @author Christophe Bx
 * @author Julien Damon
 * @version $Id$
 */
if (preg_match("/lang\...\.php$/", $_SERVER["SCRIPT_NAME"])>0) {
	print "You cannot access a language file directly.";
	exit;
}

$pgv_lang["page_x_of_y"]                = "Page #GLOBALS[currentPage]# de #GLOBALS[lastPage]#";
$pgv_lang["options"]                    = "Options";
$pgv_lang["inc_languages"]              = " Langues";
$pgv_lang["config_update_ok"]           = "Votre fichier de configuration a été mis à jour.";
#pgv_lang["date_of_entry"]              = "Date of entry in original source";
#pgv_lang["main_media_ok1"]             = "Main media file <b>#GLOBALS[oldMediaName]#</b> successfully renamed to <b>#GLOBALS[newMediaName]#</b>.";
#pgv_lang["main_media_ok2"]             = "Main media file <b>#GLOBALS[oldMediaName]#</b> successfully moved from <b>#GLOBALS[oldMediaFolder]#</b> to <b>#GLOBALS[newMediaFolder]#</b>.";
#pgv_lang["main_media_ok3"]             = "Main media file successfully moved and renamed from <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> to <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
#pgv_lang["main_media_fail0"]           = "Main media file <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> does not exist.";
#pgv_lang["main_media_fail1"]           = "Main media file <b>#GLOBALS[oldMediaName]#</b> could not be renamed to <b>#GLOBALS[newMediaName]#</b>.";
#pgv_lang["main_media_fail2"]           = "Main media file <b>#GLOBALS[oldMediaName]#</b> could not be moved from <b>#GLOBALS[oldMediaFolder]#</b> to <b>#GLOBALS[newMediaFolder]#</b>.";
#pgv_lang["main_media_fail3"]           = "Main media file could not be moved and renamed from <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> to <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
#pgv_lang["thumb_media_ok1"]            = "Thumbnail file <b>#GLOBALS[oldMediaName]#</b> successfully renamed to <b>#GLOBALS[newMediaName]#</b>.";
#pgv_lang["thumb_media_ok2"]            = "Thumbnail file <b>#GLOBALS[oldMediaName]#</b> successfully moved from <b>#GLOBALS[oldThumbFolder]#</b> to <b>#GLOBALS[newThumbFolder]#</b>.";
#pgv_lang["thumb_media_ok3"]            = "Thumbnail file successfully moved and renamed from <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> to <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
#pgv_lang["thumb_media_fail0"]          = "Thumbnail file <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> does not exist.";
#pgv_lang["thumb_media_fail1"]          = "Thumbnail file <b>#GLOBALS[oldMediaName]#</b> could not be renamed to <b>#GLOBALS[newMediaName]#</b>.";
#pgv_lang["thumb_media_fail2"]          = "Thumbnail file <b>#GLOBALS[oldMediaName]#</b> could not be moved from <b>#GLOBALS[oldThumbFolder]#</b> to <b>#GLOBALS[newThumbFolder]#</b>.";
#pgv_lang["thumb_media_fail3"]          = "Thumbnail file could not be moved and renamed from <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> to <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["server_file"]                = "Nom du fichier sur le serveur";
#pgv_lang["server_file_advice"]         = "Do not change to keep original file name.";
#pgv_lang["server_file_advice2"]        = "You may enter a URL, beginning with &laquo;http://&raquo;.";
$pgv_lang["server_folder"]              = "Nom du dossier sur le serveur";
#pgv_lang["server_folder_advice"]       = "You can enter up to #GLOBALS[MEDIA_DIRECTORY_LEVELS]# folder names to follow the default &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Do not enter the &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; part of the destination folder name.";
#pgv_lang["server_folder_advice2"]      = "This entry is ignored if you have entered a URL into the file name field.";
#pgv_lang["add_linkid_advice"]          = "Enter or search for the ID of the person, family, or source to which this media item should be linked.";
#pgv_lang["use_browse_advice"]          = "Use the &laquo;Browse&raquo; button to search your local computer for the desired file.";
#pgv_lang["add_media_other_folder"]     = "Other folder... please type in";
#pgv_lang["add_media_file"]             = "Existing Media file on server";
$pgv_lang["descend_report"]             = "Descendance";
$pgv_lang["link_to_existing_media"]     = "Relier à un objet MultiMedia existant";
$pgv_lang["page_size"]                  = "Format de la page";
$pgv_lang["record_not_found"]           = "Enregistrement GEDCOM non trouvé.";
$pgv_lang["record_marked_deleted"]      = "Une demande de suppression de cet enregistrement a été faite, en attente de validation par l'administrateur.";
$pgv_lang["result_page"]                = "Resultats";
$pgv_lang["edit_media"]                 = "Editer l'objet MultiMedia";
$pgv_lang["wiki_main_page"]             = "Wiki : page d'accueil";
$pgv_lang["wiki_users_guide"]           = "Wiki : guide d'utilisation";
$pgv_lang["wiki_admin_guide"]           = "Wiki : guide d'administration";
#pgv_lang["no_search_for"]              = "Be sure to select an option to search for.";
#pgv_lang["no_search_site"]             = "Be sure to select at least one remote site.";
$pgv_lang["other_searches"]             = "Autres recherches";
$pgv_lang["multi_site_search"]          = "Recherche multi-sites";
#pgv_lang["search_sites"]               = "Sites to search";
#pgv_lang["search_sites_discription"]   = "Search known sites";
#pgv_lang["search_asso_text_unavailable"]= " Association<br /> not yet availabe with <br /> site search";
#pgv_lang["no_known_servers"]           = "No known Servers<br />No results will be found";
$pgv_lang["basic_search_discription"]   = "Recherche basique";
$pgv_lang["advanced_search_discription"]= "Recherche avancée";
$pgv_lang["basic_search"]               = "recherche";
$pgv_lang["advanced_search"]            = "Recherche avancée";
$pgv_lang["name_search"]                = "Nom: ";
$pgv_lang["birthdate_search"]           = "Date de naissance: ";
$pgv_lang["birthplace_search"]          = "Lieu de naissance: ";
$pgv_lang["deathdate_search"]           = "Date de décès: ";
$pgv_lang["deathplace_search"]          = "Lieu de décès: ";
$pgv_lang["gender_search"]              = "Sexe: ";
$pgv_lang["site_list"]                  = "Site: ";
#pgv_lang["site_had"]                   = " contained the following";
#pgv_lang["invalid_search_multisite_input"]= "Please enter one of the following:  Name, Birth Date, Birth Place, Death Date, Death Place, and Sex ";
#pgv_lang["invalid_search_multisite_input_gender"]= "Please search again with more information than just sex";
//$pgv_lang["label_ban_server"]         = "Submit";
$pgv_lang["link_manage_servers"]        = "Gestion des sites";
$pgv_lang["indi_is_remote"]             = "Les informations de cette personne proviennent d'un autre site.";
$pgv_lang["link_remote"]                = "Lier à une personne d'un autre site";
$pgv_lang["current_person"]             = "Identique";
$pgv_lang["title_remote_link"]          = "Ajouter un lien distant";
$pgv_lang["label_same_server"]          = "Le même site";
$pgv_lang["label_diff_server"]          = "Un autre site";
$pgv_lang["label_accept_changes"]       = "Accepter toutes les modifications";
$pgv_lang["label_ask_first"]            = "Me demander";
$pgv_lang["label_rel_to_current"]       = "Lien de parenté";
$pgv_lang["label_location"]             = "Adresse";
$pgv_lang["label_site"]                 = "Site";
$pgv_lang["label_site_url"]             = "URL:";
$pgv_lang["label_remote_id"]            = "ID individu [distant]";
$pgv_lang["label_local_id"]             = "ID individu [local]";
$pgv_lang["label_merge_options"]        = "Options de fusion";
$pgv_lang["label_gedcom_id"]            = "ID base de données";
$pgv_lang["label_gedcom_id2"]           = "ID base de données";
$pgv_lang["label_add_remote_link"]      = "Ajouter un lien";
$pgv_lang["error_remote"]               = "Vous avez sélectionné un site distant.";
$pgv_lang["error_same"]                 = "Vous avez sélectionné le même site.";
$pgv_lang["lbl_server_list"]            = "Site existant";
$pgv_lang["lbl_type_server"]            = "Nouveau site";
#pgv_lang["error_url_blank"]            = "Please do not leave remote site title or URL blank";
#pgv_lang["error_siteauth_failed"]      = "Failed to authenticate to remote site";
$pgv_lang["label_ban_server"]           = "Soumettre";
#pgv_lang["label_add_search_server"]    = "Add IP";
#pgv_lang["remove_ip"]                  = "Remove IP";
$pgv_lang["label_remove_ip"]            = "Adresse IP indésirable (Ex: 198.128.*.*): ";
#pgv_lang["label_remove_search"]        = "Mark IP addresses as Search Engine Spiders: ";
$pgv_lang["label_username_id"]          = "Utilisateur";
$pgv_lang["label_username_id2"]         = "Utilisateur: ";
$pgv_lang["label_password_id"]          = "Mot de passe";
$pgv_lang["label_password_id2"]         = "Mot de passe: ";
$pgv_lang["error_ban_server"]           = "Adresse IP invalide.";
#pgv_lang["error_view_connections"]     = "You must select the site to be Viewed.";
#pgv_lang["error_delete_server"]        = "You must select the site to be Deleted.";
$pgv_lang["title_manage_servers"]       = "Gestion des sites";
#pgv_lang["label_banned_servers"]       = "Ban Sites by IP";
#pgv_lang["label_manual_search_engines"]= "Manually mark Search Engines by IP";
#pgv_lang["label_search_engine_detected"]= "Search Engine Spider Detected";
#pgv_lang["label_search_engine_spider"] = "Search Engine Spider";
#pgv_lang["label_ban_view_links"]       = "View links to this banned site";
#pgv_lang["label_delete"]               = "Delete";
$pgv_lang["label_new_server"]           = "Ajouter un site";
#pgv_lang["label_server_url"]           = "Site URL/IP";
$pgv_lang["label_add_server"]           = "Ajouter";
$pgv_lang["label_added_servers"]        = "Serveurs distants ajoutés";
#pgv_lang["error_url"]                  = "A site must have a URL/IP.";
$pgv_lang["error_exists_server"]        = "Site déjà existant.";
#pgv_lang["error_view_info"]            = "You must select the person whose information you wish to view.";
#pgv_lang["error_delete_person"]        = "You must select the person whose remote link you wish to delete.";
#pgv_lang["title_view_conns"]           = "View Connections";
#pgv_lang["label_server_info"]          = "All people remotely linked through the site:";
$pgv_lang["label_view_local"]           = "Voir info locale sur cette personne";
$pgv_lang["label_view_remote"]          = "Voir info distante sur cette personne";
$pgv_lang["label_individuals"]          = "Individus";
$pgv_lang["label_families"]             = "Familles";

$pgv_lang["ex-spouse"]                  = "Ex-conjoint";
$pgv_lang["ex-wife"]                    = "Ex-épouse";
$pgv_lang["ex-husband"]                 = "Ex-mari";
$pgv_lang["noemail"]                    = "Adresses sans email";
$pgv_lang["onlyemail"]                  = "Seulement les adresses sans email";
$pgv_lang["maxviews_exceeded"]          = "Cette page a dépassé son quota de visites, merci de réessayer plus tard.";
$pgv_lang["broadcast_not_logged_6mo"]   = "Envoyer une alerte aux utilisateurs dont la dernière connexion date de plus de 6 mois";
$pgv_lang["broadcast_never_logged_in"]  = "Envoyer une alerte aux utilisateurs jamais connectés depuis leur enregistrement";
$pgv_lang["stats_to_show"]              = "Selectionner les statistiques à afficher dans ce bloc";
$pgv_lang["stat_avg_age_at_death"]      = "Moyenne de l'âge de décès";
$pgv_lang["stat_longest_life"]          = "Personne ayant vécu le plus longtemps";
$pgv_lang["stat_most_children"]         = "Record du nombre d'enfants";
$pgv_lang["stat_average_children"]      = "Moyenne enfants par famille";
$pgv_lang["stat_events"]                = "Evènements";
$pgv_lang["stat_surnames"]              = "Noms de familles";
$pgv_lang["stat_users"]                 = "Utilisateurs";
$pgv_lang["no_family_facts"]            = "Aucun évènement pour cette famille.";

$pgv_lang["sunday_1st"]                 = "D";
$pgv_lang["monday_1st"]                 = "L";
$pgv_lang["tuesday_1st"]                = "Ma";
$pgv_lang["wednesday_1st"]              = "Me";
$pgv_lang["thursday_1st"]               = "J";
$pgv_lang["friday_1st"]                 = "V";
$pgv_lang["saturday_1st"]               = "S";

$pgv_lang["january_1st"]				= "Jan";
$pgv_lang["february_1st"]				= "Fév";
$pgv_lang["march_1st"]					= "Mars";
$pgv_lang["april_1st"]					= "Avril";
$pgv_lang["may_1st"]					= "Mai";
$pgv_lang["june_1st"]					= "Juin";
$pgv_lang["july_1st"]					= "Juill";
$pgv_lang["august_1st"]					= "Août";
$pgv_lang["september_1st"]				= "Sept";
$pgv_lang["october_1st"]				= "Oct";
$pgv_lang["november_1st"]				= "Nov";
$pgv_lang["december_1st"]				= "Déc";

$pgv_lang["edit_source"]                = "Modifier source";
$pgv_lang["source_menu"]                = "Options pour la source";
$pgv_lang["familybook_chart"]           = "Livret familial";
$pgv_lang["family_of"]                  = "Famille de :&nbsp;";
$pgv_lang["descent_steps"]              = "Niveaux de descendance";

$pgv_lang["user_auto_accept"]           = "Accepter automatiquement les modifications faites par cet utilisateur";
$pgv_lang["cancel"]                     = "Annuler";
$pgv_lang["cookie_help"]                = "Ce site utilise des cookies.<br />Merci de vérifier que votre navigateur les accepte.<br />Pour plus d'informations, consulter les pages d'aide de votre navigateur.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]             = "Les informations de cette personne proviennent d'un autre site.";
$pgv_lang["link_remote"]                = "Lier à une personne d'un autre site";
//Add Remote Link
$pgv_lang["current_person"]             = "Identique";
$pgv_lang["title_remote_link"]          = "Ajouter un lien distant";
$pgv_lang["title_search_link"]          = "Ajouter un lien distant local";
$pgv_lang["label_same_server"]          = "Le même site";
$pgv_lang["label_diff_server"]          = "Un autre site";
$pgv_lang["label_accept_changes"]       = "Accepter toutes les modifications";
$pgv_lang["label_ask_first"]            = "Me demander";
$pgv_lang["label_rel_to_current"]       = "Lien de parenté";
$pgv_lang["label_location"]             = "Adresse";
$pgv_lang["label_site"]                 = "Site";
$pgv_lang["label_site_url"]             = "URL:";
$pgv_lang["label_site_url2"]            = "URL du site";
$pgv_lang["label_remote_id"]            = "ID individu [distant]";
$pgv_lang["label_local_id"]             = "ID individu [local]";
$pgv_lang["label_merge_options"]        = "Options de fusion";
$pgv_lang["label_gedcom_id"]            = "ID base de données";
$pgv_lang["label_gedcom_id2"]           = "ID base de données";
$pgv_lang["label_add_remote_link"]      = "Ajouter un lien";
$pgv_lang["error_remote"]               = "Vous avez sélectionné un site distant.";
$pgv_lang["error_same"]                 = "Vous avez sélectionné le même site.";
$pgv_lang["error_server_exists"]        = "Ce site existe déjà; merci de faire votre sélection\n<b>Utiliser un site existant</b>.";
$pgv_lang["lbl_server_list"]            = "Site existant";
$pgv_lang["lbl_type_server"]            = "Nouveau site";
$pgv_lang["link_success"]               = "Lien ajouté avec succès";
//new stuff

$pgv_lang["change"]                     = "Changer";
#pgv_lang["change_family_instr"]        = "Use this page to change or remove family members.<br /><br />For each member in the family, you can use the Change link to choose a different person to fill that role in the family.  You can also use the Remove link to remove that person from the family.<br /><br />When you have finished changing the family members, click the Save button to save the changes.<br />";
$pgv_lang["cancel"]                     = "Annuler";
$pgv_lang["change_family_members"]      = "Modifier les membres de la famille";
$pgv_lang["delete_family_confirm"]      = "Confirmez-vous la suppression de cette famille ? NB: les individus ne seront pas effacés";
$pgv_lang["delete_family"]              = "Supprimer cette famille";
$pgv_lang["add_favorite"]               = "Ajouter un favori";
$pgv_lang["url"]                        = "URL";
$pgv_lang["add_fav_enter_note"]         = "Entrer un commentaire pour ce favori";
$pgv_lang["add_fav_or_enter_url"]       = "OU<br />Entrer une URL et un titre";
$pgv_lang["add_fav_enter_id"]           = "Entrer un code Individu, Famille ou Source";
$pgv_lang["import_time_exceeded"]       = "Dépassement de la limite de temps d'exécution.";
$pgv_lang["next_email_sent"]            = "Prochaine alerte courriel après le ";
$pgv_lang["last_email_sent"]            = "Dernière alerte courriel envoyée le ";
$pgv_lang["confirm_remove"]             = "Confirmez-vous la suppression de cette personne de la famille ?";
$pgv_lang["remove_child"]               = "Retirer cet enfant de la famille";
$pgv_lang["link_new_husb"]              = "Relier à une personne existante comme mari";
$pgv_lang["link_new_wife"]              = "Relier à une personne existante comme épouse";
$pgv_lang["address_labels"]             = "Etiquettes adresses";
$pgv_lang["filter_address"]             = "Afficher les adresses contenant:";
$pgv_lang["address_list"]               = "Liste adresse";
$pgv_lang["autocomplete"]               = "Autocompletion";
$pgv_lang["undo_all_confirm"]           = "Confirmez-vous l'annulation de toutes les modifications sur ce fichier GEDCOM ?";
$pgv_lang["undo_all"]                   = "<span class='warning'>Annuler toutes les modifications</span>";
$pgv_lang["index_edit_advice"]          = "Sélectionner un bloc puis cliquer sur une des flèches pour le déplacer";
$pgv_lang["importing_dates"]            = "Importation des dates";
$pgv_lang["changelog"]                  = "Nouveautés de la version #VERSION#";
$pgv_lang["view_changelog"]             = "Voir le journal des modifications changelog.txt";
$pgv_lang["html_block_descr"]           = "Bloc HTML simple pour afficher un message de votre choix.";
$pgv_lang["html_block_sample_part1"]    = "<p class='blockhc'><b>Saisir le titre ici</b></p><br /><p>Cliquer sur le bouton Configuration";
$pgv_lang["html_block_sample_part2"]    = "pour modifier ce texte</p>";
$pgv_lang["html_block_name"]            = "Bloc HTML";
$pgv_lang["htmlplus_block_name"]        = "Bloc HTML avancé";
#pgv_lang["htmlplus_block_descr"]       = "This is an HTML block that you can place on your page to add any sort of message you may want.  You can insert referenes to information from your GEDCOM into the HTML text.";
$pgv_lang["htmlplus_block_templates"]   = "Modèles";
$pgv_lang["htmlplus_block_content"]     = "Contenu";
#pgv_lang["htmlplus_block_narrative"]   = "Narrative style (English only)";
$pgv_lang["num_to_show"]                = "Nombre de lignes à afficher";
$pgv_lang["days_to_show"]               = "Nombre de jours à afficher";
$pgv_lang["before_or_after"]            = "Compteur des lieux avant ou après le nom ?";
$pgv_lang["before"]                     = "avant";
$pgv_lang["after"]                      = "après";
$pgv_lang["config_block"]               = "Configurer le bloc";
$pgv_lang["pls_note12"]                 = "Merci d'indiquer ici la raison pour laquelle vous demandez un compte et votre lien de parenté.";
$pgv_lang["enter_comments"]             = "Entrez votre lien de parenté en commentaire.";
$pgv_lang["comments"]                   = "Commentaires";
$pgv_lang["none"]                       = "Libre";
$pgv_lang["child-family"]               = "Parents, frère(s) et sœur(s)";
$pgv_lang["spouse-family"]              = "Conjoint(s) et enfants";
$pgv_lang["direct-ancestors"]           = "Ancêtres en ligne directe";
$pgv_lang["ancestors"]                  = "Ancêtres en ligne directe et leurs familles";
$pgv_lang["descendants"]                = "Descendants";
$pgv_lang["choose_relatives"]           = "Choisir";
$pgv_lang["relatives_report"]           = "Parenté";
$pgv_lang["total_living"]               = "Vivants";
$pgv_lang["total_dead"]                 = "Décédés";
$pgv_lang["total_not_born"]             = "A naître";
$pgv_lang["remove_custom_tags"]         = "Supprimer les marqueurs PGV ? (ex. _PGVU, _THUM)";
$pgv_lang["download_zipped"]            = "Télécharger le fichier GEDCOM au format compressé ZIP ?";
$pgv_lang["cookie_login_help"]          = "Vous pouvez demander à rester mémorisé sur ce poste.<br />Vous aurez ainsi l'accès immédiat aux données protégées lors d'une prochaine connexion.<br />Par sécurité, vous devrez vous identifier de nouveau pour utiliser les fonctions d'administration.";
$pgv_lang["remember_me"]                = "Rester mémorisé sur cet ordinateur";
$pgv_lang["add_unlinked_person"]        = "Ajouter une personne isolée";
$pgv_lang["add_unlinked_source"]        = "Ajouter une source isolée";
$pgv_lang["fams_with_surname"]          = "Familles avec le nom #surname#";
$pgv_lang["support_contact"]            = "Contact technique";
$pgv_lang["genealogy_contact"]          = "Contact généalogie";
$pgv_lang["continue_import"]            = "Poursuivre le chargement des lieux";
$pgv_lang["importing_places"]           = "Chargement des lieux";
$pgv_lang["common_upload_errors"]       = "La cause probable de cette erreur est la taille autorisée par votre hébergeur (valeur PHP par défaut: 2MB). Renseignez-vous auprès de votre hébergeur pour modifier le fichier php.ini, ou utilisez un logiciel FTP pour télécharger votre fichier sur le serveur. Voir la page <a href=\"uploadgedcom.php?action=add_form\">Ajouter un fichier GEDCOM</a>.";
$pgv_lang["total_memory_usage"]         = "Mémoire utilisée :";
$pgv_lang["mothers_family_with"]        = "Famille maternelle avec ";
$pgv_lang["fathers_family_with"]        = "Famille paternelle avec ";
$pgv_lang["halfsibling"]                = "Demi frère/sœur";
$pgv_lang["halfbrother"]                = "Demi-frère";
$pgv_lang["halfsister"]                 = "Demi-sœur";
$pgv_lang["family_timeline"]            = "Voir la famille sur l'échelle de temps";
$pgv_lang["children_timeline"]          = "Voir les enfants sur l'échelle de temps";
$pgv_lang["other"]                      = "Autre";
$pgv_lang["sort_by_marriage"]           = "Tri par date de mariage";
$pgv_lang["reorder_families"]           = "Modifier l'ordre des familles";
$pgv_lang["indis_with_surname"]         = "Individus portant le nom #surname#";
$pgv_lang["first_letter_fname"]         = "Sélectionner la première lettre du prénom.";
$pgv_lang["import_marr_names"]          = "Ajouter les noms des maris";
$pgv_lang["marr_name_import_instr"]     = "Option pour associer le nom du mari aux femmes mariées. Cela permet une recherche par le nom de jeune fille ou le nom d'épouse.";
$pgv_lang["calc_marr_names"]            = "Ajout du nom des maris";
$pgv_lang["total_names"]                = "Nombre total de noms";
$pgv_lang["top10_pageviews_nohits"]     = "Liste vide.";
$pgv_lang["top10_pageviews_msg"]        = "Le compteur de visites doit être activé pour que ce bloc fonctionne.";
$pgv_lang["review_changes_descr"]       = "Le bloc «Modifications en attente de validation» affiche la liste des changements que l'administrateur doit confirmer avant leur enregistrement définitif dans la base. Un rappel lui est envoyé chaque jour par courriel.";
$pgv_lang["review_changes_block"]       = "Modifications en attente de validation";
$pgv_lang["review_changes_email"]       = "Envoi d'alertes par courriel ?";
$pgv_lang["review_changes_email_freq"]  = "Fréquence des alertes courriel (jours)";
$pgv_lang["review_changes_subject"]     = "PhpGedView - Liste des modifications en attente";
$pgv_lang["review_changes_body"]        = "Il reste des modifications en attente de validation sur le site PhpGedView. Merci d'utiliser le lien suivant pour vous connecter et confirmer ces changements.";
$pgv_lang["show_spouses"]               = "Afficher les conjoints";
$pgv_lang["quick_update_title"]         = "Modification expresse";
$pgv_lang["quick_update_instructions"]  = "Cette page permet la saisie des principales informations d'une personne : naissance, mariage, décès. Il n'est pas nécessaire de tout saisir : vos modifications seront vérifiées par l'administrateur du site avant leur publication.";
$pgv_lang["update_name"]                = "Modif nom";
$pgv_lang["update_fact"]                = "Modif évènement";
$pgv_lang["update_fact_restricted"]     = "La modification de cet enregistrement est restreinte ";
$pgv_lang["update_photo"]               = "Modif photo";
$pgv_lang["photo_replace"]              = "Remplacer l'ancienne photo ?";
$pgv_lang["select_fact"]                = "Choisir l'évènement...";
$pgv_lang["update_address"]             = "Modif adresse";
$pgv_lang["add_new_chil"]               = "Ajouter un nouvel enfant";
$pgv_lang["top10_pageviews_descr"]      = "Ce bloc affiche les 10 pages les plus visitées pour ce fichier GEDCOM. Le compteur de visites doit être activé (voir les options de configuration).";
$pgv_lang["top10_pageviews"]            = "Liste des pages les plus visitées";
$pgv_lang["top10_pageviews_block"]      = "Bloc «Pages les plus visitées»";
$pgv_lang["user_default_tab"]           = "Onglet par défaut sur les fiches individuelles";
$pgv_lang["stepfamily"]                 = "Belle-famille";
$pgv_lang["stepdad"]                    = "Beau-père";
$pgv_lang["stepmom"]                    = "Belle-mère";
$pgv_lang["stepsister"]                 = "Sœur par remariage";
$pgv_lang["stepbrother"]                = "Frère par remariage";
$pgv_lang["max_upload_size"]            = "Taille maxi pour le téléchargement ";
$pgv_lang["edit_fam"]                   = "Modifier la famille";
$pgv_lang["fams_charts"]                = "Options pour cette famille";
$pgv_lang["sort_by_birth"]              = "Trier par date de naissance";
$pgv_lang["reorder_children"]           = "Modifier l'ordre des enfants";
$pgv_lang["add_from_clipboard"]         = "Ajouter depuis le presse-papiers: ";
$pgv_lang["record_copied"]              = "Enregistrement copié dans le presse-papiers";
$pgv_lang["copy"]                       = "Copier";
$pgv_lang["cut"]                        = "Couper";
$pgv_lang["indis_charts"]               = "Options pour cet individu";
$pgv_lang["edit_indi"]                  = "Modifications";
$pgv_lang["locked"]                     = "Restreint";
$pgv_lang["privacy"]                    = "Protégé";
#pgv_lang["number_sign"]                = "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]                         = "?";
$pgv_lang["qm_ah"]                      = "?";
$pgv_lang["page_help"]                  = "Aide";
$pgv_lang["help_for_this_page"]         = "Aide pour cette page";
$pgv_lang["help_contents"]              = "Sommaire de l'aide";
$pgv_lang["show_context_help"]          = "Afficher l'aide contextuelle";
$pgv_lang["hide_context_help"]          = "Masquer l'aide contextuelle";
$pgv_lang["sorry"]                      = "<b>Désolé, texte d'aide non disponible</b>";
$pgv_lang["help_not_exist"]             = "<b>Texte d'aide non disponible</b>";
$pgv_lang["var_not_exist"]              = "<span style=font-weight: bold>Variable langue non trouvée. Merci de signaler cette erreur.</span>";
$pgv_lang["resolution"]                 = "Résolution d'écran";
$pgv_lang["menu"]                       = "Menu";
$pgv_lang["header"]                     = "Bandeau";
$pgv_lang["imageview"]                  = "Afficheur d'images";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]                 = "Identification PhpGedView";
$pgv_lang["error_title"]                = "ERREUR : Impossible d'ouvrir le fichier GEDCOM.";
$pgv_lang["error_header"]               = "Le fichier GEDCOM #GEDCOM# n'existe pas à l'emplacement indiqué.";
$pgv_lang["error_header_write"]         = "Le fichier GEDCOM #GEDCOM# est en lecture-seule. Vérifier les attributs et droits d'accès.";
$pgv_lang["for_support"]                = "Pour tout problème technique contacter";
$pgv_lang["for_contact"]                = "Pour toute question sur la généalogie contacter";
$pgv_lang["for_all_contact"]            = "Pour toute question, contacter l'administrateur";
$pgv_lang["build_title"]                = "Construction des fichiers d'index";
$pgv_lang["build_error"]                = "Fichier GEDCOM mis à jour.";
$pgv_lang["please_wait"]                = "Veuillez patienter pendant la reconstruction des index";
$pgv_lang["choose_gedcom"]              = "Choisir un fichier GEDCOM";
$pgv_lang["username"]                   = "Identificateur";
$pgv_lang["invalid_username"]           = "L'identificateur contient des caractères interdits";
$pgv_lang["firstname"]                  = "Prénom";
$pgv_lang["lastname"]                   = "Nom de famille";
$pgv_lang["password"]                   = "Mot de passe";
$pgv_lang["confirm"]                    = "Confirmer le mot de passe";
$pgv_lang["user_contact_method"]        = "Préférence pour les contacts";
$pgv_lang["login"]                      = "Connexion";
$pgv_lang["login_aut"]                  = "Modifier le profil utilisateur";
$pgv_lang["logout"]                     = "Déconnexion";
$pgv_lang["admin"]                      = "Administration";
$pgv_lang["logged_in_as"]               = "Connecté ";
$pgv_lang["my_pedigree"]                = "Mon arbre";
$pgv_lang["my_indi"]                    = "Ma fiche";
$pgv_lang["yes"]                        = "Oui";
$pgv_lang["no"]                         = "Non";
$pgv_lang["add_gedcom"]                 = "Paramètrer un GEDCOM déjà envoyé sur le serveur";
$pgv_lang["change_theme"]               = "Changer de thème";
$pgv_lang["gedcom_downloadable"]        = "Ce fichier GEDCOM est téléchargeable par n'importe qui sur Internet !<br />Consultez la section SECURITY du fichier <a href=\"readme.txt\">readme.txt</a> pour corriger ce problème";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]               = "Arbre d'ascendance";
$pgv_lang["gen_ped_chart"]              = "Arbre de #PEDIGREE_GENERATIONS# générations";
$pgv_lang["generations"]                = "Nombre de générations";
$pgv_lang["view"]                       = "Afficher";
$pgv_lang["fam_spouse"]                 = "Famille avec le conjoint";
$pgv_lang["root_person"]                = "Code individu";
$pgv_lang["hide_details"]               = "Masquer les détails";
$pgv_lang["show_details"]               = "Afficher les détails";
$pgv_lang["person_links"]               = "Liens vers les arbres, familles, et proches parents de la personne.";
$pgv_lang["zoom_box"]                   = "Zoom avant/arrière sur cette case.";
$pgv_lang["orientation"]                = "Orientation";
$pgv_lang["portrait"]                   = "Portrait";
$pgv_lang["landscape"]                  = "Paysage";
$pgv_lang["start_at_parents"]           = "Retour aux parents";
$pgv_lang["charts"]                     = "Diagrammes";
$pgv_lang["lists"]                      = "Listes";
$pgv_lang["welcome_page"]               = "Page d'accueil";
$pgv_lang["max_generation"]             = "Le nombre maximum de générations est #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"]             = "Le nombre minimum de générations est 3.";
$pgv_lang["box_width"]                  = "Largeur de boîte";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]      = "Aucun lien famille";
$pgv_lang["unable_to_find_indi"]        = "Aucun lien individu";
$pgv_lang["unable_to_find_record"]      = "Aucun enregistrement trouvé";
$pgv_lang["unable_to_find_source"]      = "Aucun lien source";
$pgv_lang["unable_to_find_repo"]        = "Aucun lien archive";
$pgv_lang["repo_name"]                  = "Dépôt d'archives";
$pgv_lang["address"]                    = "Adresse";
$pgv_lang["phone"]                      = "Téléphone";
$pgv_lang["source_name"]                = "Nom de la source";
$pgv_lang["title"]                      = "Titre";
$pgv_lang["author"]                     = "Auteur";
$pgv_lang["publication"]                = "Publication";
$pgv_lang["call_number"]                = "Numéro de référence";
$pgv_lang["living"]                     = "Personne vivante";
$pgv_lang["private"]                    = "Détails privés";
$pgv_lang["birth"]                      = "Naissance";
$pgv_lang["death"]                      = "Décès";
$pgv_lang["descend_chart"]              = "Tableau de descendance";
$pgv_lang["individual_list"]            = "Liste des individus";
$pgv_lang["family_list"]                = "Liste des familles";
$pgv_lang["source_list"]                = "Liste des sources";
$pgv_lang["place_list"]                 = "Liste des lieux";
$pgv_lang["place_list_aft"]             = "Lieux après";
$pgv_lang["media_list"]                 = "Liste des objets MultiMedia";
$pgv_lang["search"]                     = "Recherche";
$pgv_lang["clippings_cart"]             = "Extraction de données";
$pgv_lang["print_preview"]              = "Page imprimable";
$pgv_lang["cancel_preview"]             = "Retour page complète";
$pgv_lang["change_lang"]                = "Changer de langue";
$pgv_lang["print"]                      = "Imprimer";
$pgv_lang["total_queries"]              = "Nombre de requêtes sur la base de données";
$pgv_lang["total_privacy_checks"]       = "Nombre de contrôles de restriction d'accès";
$pgv_lang["back"]                       = "Retour";
$pgv_lang["privacy_list_indi_error"]    = "Respect de la vie privée : certains individus ne sont pas affichés.";
$pgv_lang["privacy_list_fam_error"]     = "Respect de la vie privée : certaines familles ne sont pas affichées.";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]                        = "Nom d'usage";
$pgv_lang["male"]                       = "Masculin";
$pgv_lang["female"]                     = "Féminin";
$pgv_lang["temple"]                     = "Temple (LDS)";
$pgv_lang["temple_code"]                = "Code du temple (LDS)";
$pgv_lang["status"]                     = "Statut";
$pgv_lang["source"]                     = "Source";
$pgv_lang["citation"]                   = "Citation";
$pgv_lang["text"]                       = "Texte";
$pgv_lang["note"]                       = "Note";
$pgv_lang["NN"]                         = "??";
$pgv_lang["PN"]                         = "??";
$pgv_lang["unrecognized_code"]          = "Code GEDCOM inconnu";
$pgv_lang["unrecognized_code_msg"]      = "Erreur non répertoriée. Merci de signaler cette erreur à ";
$pgv_lang["indi_info"]                  = "Informations de l'individu";
$pgv_lang["pedigree_chart"]             = "Arbre d'ascendance";
$pgv_lang["individual"]                 = "Individu";
$pgv_lang["family"]                     = "Famille";
$pgv_lang["family_with"]                = "Famille avec ";
$pgv_lang["as_spouse"]                  = "Conjoint(s) et enfants";
$pgv_lang["as_child"]                   = "Parents, frère(s) et sœur(s)";
$pgv_lang["view_gedcom"]                = "Voir les balises GEDCOM";
$pgv_lang["add_to_cart"]                = "Ajouter au panier";
$pgv_lang["still_living_error"]         = "Cette personne vit toujours ou n'a pas de date de naissance ou de décès connue. Toutes les informations sur les personnes vivantes sont masquées.<br />Pour plus d'informations contacter";
$pgv_lang["privacy_error"]              = "Respect de la vie privée : les détails sur cette personne ne sont pas affichés.<br />";
$pgv_lang["more_information"]           = "Pour plus d'informations contacter";
$pgv_lang["name"]                       = "Nom";
$pgv_lang["given_name"]                 = "Prénom";
$pgv_lang["surname"]                    = "Nom de famille";
$pgv_lang["suffix"]                     = "Suffixe";
$pgv_lang["object_note"]                = "Note sur l'objet";
$pgv_lang["sex"]                        = "Sexe";
$pgv_lang["personal_facts"]             = "Faits et détails personnels";
$pgv_lang["type"]                       = "Type";
$pgv_lang["date"]                       = "Date";
$pgv_lang["place_description"]          = "Lieu / Description";
$pgv_lang["parents"]                    = "Parents";
$pgv_lang["siblings"]                   = "Frères et sœurs";
$pgv_lang["father"]                     = "Père";
$pgv_lang["mother"]                     = "Mère";
#pgv_lang["parent"]                     = "Parent";
$pgv_lang["relatives"]                  = "Proches parents";
$pgv_lang["relatives_events"]           = "Autres évènements importants";
$pgv_lang["child"]                      = "Enfant";
$pgv_lang["spouse"]                     = "Conjoint";
$pgv_lang["surnames"]                   = "Noms de famille";
$pgv_lang["adopted"]                    = "Adopté";
$pgv_lang["foster"]                     = "Adoptif";
$pgv_lang["sealing"]                    = "Scellement";
$pgv_lang["challenged"]                 = "Validé";
$pgv_lang["disproved"]                  = "Réfuté";
$pgv_lang["infant"]                     = "Nourrisson";
$pgv_lang["stillborn"]                  = "Mort-né";
$pgv_lang["deceased"]                   = "Décédé";
$pgv_lang["link_as_child"]              = "Relier cette personne à une famille existante comme enfant";
$pgv_lang["link_as_wife"]               = "Relier cette personne à une famille existante comme épouse";
$pgv_lang["link_as_husband"]            = "Relier cette personne à une famille existante comme époux";
$pgv_lang["no_tab1"]                    = "Aucun fait lié à cet individu.";
$pgv_lang["no_tab2"]                    = "Aucune note liée à cet individu.";
$pgv_lang["no_tab3"]                    = "Aucune source liée à cet individu.";
$pgv_lang["no_tab4"]                    = "Aucun objet MultiMedia lié à cet individu.";
$pgv_lang["no_tab5"]                    = "Aucun proche lié à cet individu.";
$pgv_lang["no_tab6"]                    = "Aucune recherche liée à cet individu.";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]                = "Informations de la famille";
$pgv_lang["family_group_info"]          = "Informations sur la famille";
$pgv_lang["husband"]                    = "Epoux";
$pgv_lang["wife"]                       = "Epouse";
$pgv_lang["marriage"]                   = "Mariage";
$pgv_lang["lds_sealing"]                = "Cérémonie (LDS)";
$pgv_lang["marriage_license"]           = "Autorisation légale de mariage";
$pgv_lang["media_object"]               = "Objet MultiMedia";
$pgv_lang["children"]                   = "Enfants";
$pgv_lang["no_children"]                = "Aucun enfant connu";
$pgv_lang["childless_family"]           = "Famille sans enfant";
$pgv_lang["number_children"]            = "Nombre d'enfants:";
$pgv_lang["parents_timeline"]           = "Voir l'échelle de temps";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]                  = "Extraction de données";
$pgv_lang["clip_explaination"]          = "Vous pouvez extraire des informations de l'arbre généalogique en sélectionnant des parties de cet arbre et en créant un fichier GEDCOM que vous téléchargerez.<br /><br />";
$pgv_lang["item_with_id"]               = "Elément avec son identificateur";
$pgv_lang["error_already"]              = "a déjà été sélectionné.";
$pgv_lang["which_links"]                = "Quels autres parents de cette famille souhaitez-vous ajouter ?";
$pgv_lang["just_family"]                = "Ajouter seulement cette famille.";
$pgv_lang["parents_and_family"]         = "Ajouter les parents avec cette famille.";
$pgv_lang["parents_and_child"]          = "Ajouter les parents et les enfants avec la famille.";
$pgv_lang["parents_desc"]               = "Ajouter les parents et tous les descendants avec la famille.";
$pgv_lang["continue"]                   = "Poursuivre la sélection";
$pgv_lang["which_p_links"]              = "Quels autres parents de cette personne souhaitez-vous ajouter ?";
$pgv_lang["just_person"]                = "Ajouter seulement cette personne.";
$pgv_lang["person_parents_sibs"]        = "Ajouter cette personne, ses parents, ses frères et sœurs.";
$pgv_lang["person_ancestors"]           = "Ajouter cette personne et ses ascendants.";
$pgv_lang["person_ancestor_fams"]       = "Ajouter cette personne, ses ascendants et leurs familles.";
$pgv_lang["person_spouse"]              = "Ajouter cette personne, son conjoint et les enfants.";
$pgv_lang["person_desc"]                = "Ajouter cette personne, son conjoint et toute leur descendance.";
$pgv_lang["unable_to_open"]             = "Impossible d'ouvrir le fichier pour l'extraction";
$pgv_lang["person_living"]              = "Cette personne est vivante. Les détails personnels ne seront pas inclus.";
$pgv_lang["person_private"]             = "Respect de la vie privée : les détails personnels sur cet individu ne seront pas inclus.";
$pgv_lang["family_private"]             = "Respect de la vie privée : les détails personnels sur cette famille ne seront pas inclus.";
$pgv_lang["download"]                   = "Faire un clic-droit (ctrl-clic sur Macintoch) sur le lien ci-dessous et sélectionnez «Enregistrer la cible sous...» pour télécharger le fichier.";
$pgv_lang["media_files"]                = "Objets MultiMedia référencés dans ce fichier GEDCOM";
$pgv_lang["cart_is_empty"]              = "Votre panier est vide.";
$pgv_lang["id"]                         = "Identificateur";
$pgv_lang["name_description"]           = "Nom / Description";
$pgv_lang["remove"]                     = "Retirer";
$pgv_lang["empty_cart"]                 = "Vider la sélection";
$pgv_lang["download_now"]               = "Télécharger maintenant";
$pgv_lang["indi_downloaded_from"]       = "Provenance de cet individu";
$pgv_lang["family_downloaded_from"]     = "Provenance de cette famille";
$pgv_lang["source_downloaded_from"]     = "Provenance de cette source";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]                = "Lien(s) trouvé(s) avec ces lieux";
$pgv_lang["top_level"]                  = " [sommaire] ";
$pgv_lang["form"]                       = "Les lieux sont classés dans cet ordre :<br />";
$pgv_lang["default_form"]               = "Ville, Département ou District, Région ou Etat, Pays";
$pgv_lang["default_form_info"]          = "(par défaut)";
$pgv_lang["gedcom_form_info"]           = "(GEDCOM)";
$pgv_lang["unknown"]                    = "(vide)";
$pgv_lang["individuals"]                = "Individus";
$pgv_lang["view_records_in_place"]      = "Afficher tous les évènements pour ce lieu";
$pgv_lang["place_list2"]                = "Liste des lieux";
$pgv_lang["show_place_hierarchy"]       = "Voir les lieux classés par niveaux";
$pgv_lang["show_place_list"]            = "Voir tous les lieux dans une liste";
$pgv_lang["total_unic_places"]          = "Total lieux uniques";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["multi_title"]                = "Liste des objets MultiMedia";
$pgv_lang["media_found"]                = "Objets MultiMedia trouvés";
$pgv_lang["view_person"]                = "Afficher la personne";
$pgv_lang["view_family"]                = "Afficher la famille";
$pgv_lang["view_source"]                = "Afficher la source";
$pgv_lang["view_object"]                = "Afficher l'objet";
$pgv_lang["prev"]                       = "&lt; Précédent";
$pgv_lang["next"]                       = "Suivant &gt;";
$pgv_lang["file_not_found"]             = "Fichier non trouvé";
$pgv_lang["medialist_show"]             = "Afficher";
$pgv_lang["per_page"]                   = "Objets MultiMedia par page";
$pgv_lang["delete_directory"]           = "Supprimer le répertoire";
$pgv_lang["remove_object"]              = "Supprimer l'objet";
$pgv_lang["confirm_remove_object"]      = "Confirmez-vous la suppression de cet objet ?";
$pgv_lang["remove_links"]               = "Supprimer les liens";
$pgv_lang["confirm_remove_links"]       = "Confirmez-vous la suppression des liens vers cet objet ?";
$pgv_lang["delete_file"]                = "Supprimer le fichier";
$pgv_lang["confirm_delete_file"]        = "Confirmez-vous la suppression de ce fichier ?";
$pgv_lang["multiple_gedcoms"]           = "Impossible de supprimer, renommer ou déplacer ce fichier : il reste des liens avec un autre GEDCOM sur ce serveur.";
$pgv_lang["external_file"]              = "Objet Multimedia non trouvé sur le serveur. Impossible de le supprimer, déplacer ou renommer.";
$pgv_lang["directory_not_empty"]        = "Répertoire non vide.";
$pgv_lang["directory_not_exist"]        = "Répertoire absent.";
$pgv_lang["media_not_deleted"]          = "Répertoire Media non supprimé.";
$pgv_lang["media_deleted"]              = "Répertoire Media supprimé.";
$pgv_lang["thumbs_not_deleted"]         = "Répertoire des vignettes non supprimé.";
$pgv_lang["thumbs_deleted"]             = "Répertoire des vignettes supprimé.";
$pgv_lang["delete_dir_success"]         = "Répertoires Media et Vignettes supprimés.";
$pgv_lang["current_dir"]                = "Répertoire actif: ";
$pgv_lang["add_directory"]              = "Nouveau dossier";
$pgv_lang["show_thumbnail"]             = "Montrer les vignettes";
$pgv_lang["image_format"]               = "Format Image";
$pgv_lang["media_format"]               = "Format Media";
$pgv_lang["image_size"]                 = "Taille Image";
$pgv_lang["media_file_size"]            = "Taille Media";
$pgv_lang["no_thumb_dir"]               = " impossible de créer le dossier vignettes";
$pgv_lang["manage_media"]               = "Gestion des objets MultiMedia";
$pgv_lang["gen_thumb"]                  = "Créer les vignettes";
$pgv_lang["move_to"]                    = "Déplacer vers --&gt;";
$pgv_lang["folder_created"]             = "Dossier créé";
$pgv_lang["folder_no_create"]           = "Impossible de créer le dossier";
$pgv_lang["security_no_create"]         = "Avertissement concernant la sécurité : fichier index.php absent du dossier ";
$pgv_lang["security_not_exist"]         = "Avertissement concernant la sécurité : impossible de créer le fichier index.php dans le dossier ";
$pgv_lang["illegal_chars"]              = "Présence de caractères interdits";
$pgv_lang["link_media"]                 = "Relier un objet MultiMedia";
$pgv_lang["to_person"]                  = "à une personne";
$pgv_lang["to_family"]                  = "à une famille";
$pgv_lang["to_source"]                  = "à une source";
$pgv_lang["media_id"]                   = "Identifiant MultiMedia";
$pgv_lang["invalid_id"]                 = "Objet non trouvé dans ce fichier GEDCOM.";
$pgv_lang["media_exists"]               = "Le fichier MultiMedia existe déjà.";
$pgv_lang["media_thumb_exists"]         = "La vignette existe déjà.";
$pgv_lang["move_file_success"]          = "Le fichier MultiMedia et la vignette ont été déplacés.";
$pgv_lang["media_folder_corrupt"]       = "Le dossier MultiMedia est corrompu.";
$pgv_lang["max_media_depth"]            = "Limite de profondeur dans le dossier : #MEDIA_DIRECTORY_LEVELS# ";
$pgv_lang["upload_file"]                = "Fichier local";
$pgv_lang["thumb_genned"]               = "Une image vignette a été créée automatiquement.";
$pgv_lang["thumbgen_error"]             = "Impossible de créer une vignette pour ";
$pgv_lang["generate_thumbnail"]         = "Création automatique d'une vignette depuis ";
$pgv_lang["auto_thumbnail"]             = "Vignette Automatique";
$pgv_lang["no_upload"]                  = "Opération non autorisée ou répertoire non accessible en écriture.";
$pgv_lang["upload"]                     = "Téléchargement";
$pgv_lang["upload_media"]               = "Charger des objets MultiMedia";
$pgv_lang["folder"]                     = "Répertoire";
$pgv_lang["media_file"]                 = "Objet MultiMedia";
$pgv_lang["thumbnail"]                  = "Vignette";
$pgv_lang["upload_successful"]          = "Téléchargement réussi";
$pgv_lang["media_file_deleted"]         = "Le fichier MultiMedia a été supprimé.";
$pgv_lang["media_file_not_deleted"]     = "Impossible de supprimer le fichier MultiMedia.";
$pgv_lang["media_file_not_moved"]       = "Impossible de déplacer le fichier MultiMedia.";
$pgv_lang["media_file_not_renamed"]     = "Impossible de déplacer ou renommer le fichier MultiMedia.";
$pgv_lang["thumbnail_deleted"]          = "Vignette supprimée.";
$pgv_lang["thumbnail_not_deleted"]      = "Impossible de supprimer la vignette.";
$pgv_lang["media_record_deleted"]       = "Enregistrement MultiMedia #xref# supprimé de la base.";
$pgv_lang["media_record_not_deleted"]   = "Impossible de supprimer l'enregistrement MultiMedia #xref#.";
$pgv_lang["record_updated"]             = "Enregistrement #pid# mis à jour.";
$pgv_lang["record_not_updated"]         = "Impossible de mettre à jour l'enregistrement #pid#.";
$pgv_lang["record_removed"]             = "Enregistrement #xref# supprimé du fichier GEDCOM.";
$pgv_lang["record_not_removed"]         = "Impossible de supprimer l'enregistrement #xref# du fichier GEDCOM.";
$pgv_lang["record_added"]               = "Enregistrement #xref# ajouté au fichier GEDCOM.";
$pgv_lang["record_not_added"]           = "Impossible d'ajouter l'enregistrementRecord #xref# au fichier GEDCOM.";

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]              = "Recherche dans le fichier GEDCOM";
$pgv_lang["enter_terms"]                = "Entrez vos critères de recherche";
$pgv_lang["soundex_search"]             = "Recherche phonétique du nom (méthode SOUNDEX)";
$pgv_lang["sources"]                    = "Sources";
$pgv_lang["firstname_search"]           = "Prénom";
$pgv_lang["lastname_search"]            = "Nom";
$pgv_lang["search_place"]               = "Lieu";
$pgv_lang["search_year"]                = "Année";
$pgv_lang["no_results"]                 = "Recherche infructueuse.";
$pgv_lang["invalid_search_input"]       = "Entrez un nom de personne ou de lieu en complément de l'année";
$pgv_lang["search_options"]             = "Options de recherche";
$pgv_lang["search_geds"]                = "Rechercher dans les fichiers GEDCOM suivants";
$pgv_lang["search_type"]                = "Type de recherche";
$pgv_lang["search_general"]             = "Recherche générale";
$pgv_lang["search_soundex"]             = "Recherche phonétique";
$pgv_lang["search_inrecs"]              = "Rechercher dans";
$pgv_lang["search_fams"]                = "Familles";
$pgv_lang["search_indis"]               = "Individus";
$pgv_lang["search_sources"]             = "Sources";
$pgv_lang["search_more_chars"]          = "Entrer au moins un caractère";
$pgv_lang["search_soundextype"]         = "Type de recherche phonétique:";
$pgv_lang["search_russell"]             = "Russell";
$pgv_lang["search_DM"]                  = "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]            = "Noms des individu à imprimer:";
$pgv_lang["search_prthit"]              = "Noms correspondant";
$pgv_lang["search_prtall"]              = "Tous les noms";
$pgv_lang["search_tagfilter"]           = "Exclure les données non généalogiques";
$pgv_lang["search_tagfon"]              = "Oui";
$pgv_lang["search_tagfoff"]             = "Non";
$pgv_lang["associate"]                  = "associé";
$pgv_lang["search_asso_label"]          = "Associés";
$pgv_lang["search_asso_text"]           = "Afficher les personnes/familles associées";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]              = "Sources trouvées";
$pgv_lang["titles_found"]               = "Titres";
$pgv_lang["find_source"]                = "Choisir une source";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]                  = "Liste des dépôts d'archives";
$pgv_lang["repos_found"]                = "Dépôts d'archives trouvés";
$pgv_lang["find_repository"]            = "Choisir un dépôt d'archives";
$pgv_lang["total_repositories"]         = "Nombre de dépôts d'archives";
$pgv_lang["repo_info"]                  = "Information sur le dépôt d'archives";
$pgv_lang["delete_repo"]                = "Supprimer ce dépôt d'archives";
$pgv_lang["other_repo_records"]         = "Enregistrements liés à ce dépôt d'archives";
$pgv_lang["create_repository"]          = "Créer un dépôt d'archives";
$pgv_lang["new_repo_created"]           = "Nouveau dépôt d'archives créé";
$pgv_lang["paste_rid_into_field"]       = "Cliquez ici pour sélectionner ce dépôt d'archives ";
$pgv_lang["confirm_delete_repo"]        = "Confirmez-vous la suppression de cet élément ?";


//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]                = "Information sur la source";
$pgv_lang["other_records"]              = "Autres enregistrements liés à cette source";
$pgv_lang["people"]                     = "Individus";
$pgv_lang["families"]                   = "Familles";
$pgv_lang["total_sources"]              = "Sources";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]              = "Création des index pour les individus et les familles";
$pgv_lang["building_index"]             = "Construction de la liste des index";
$pgv_lang["invalid_gedformat"]          = "Format GEDCOM 5.5 non respecté";
$pgv_lang["importing_records"]          = "Import d'enregistrements dans la base de données";
$pgv_lang["detected_change"]            = "PhpGedView a détecté une modification du fichier GEDCOM #GEDCOM#.  Les fichiers index doivent être reconstruits avant de continuer.";
$pgv_lang["please_be_patient"]          = "Merci de patienter...";
$pgv_lang["reading_file"]               = "Lecture du fichier GEDCOM";
$pgv_lang["flushing"]                   = "Purge du fichier";
$pgv_lang["found_record"]               = "enregistrement(s) trouvé(s)";
$pgv_lang["exec_time"]                  = "Fichier chargé en";
$pgv_lang["time_limit"]                 = "Durée max.";
$pgv_lang["unable_to_create_index"]     = "Impossible de créer l'index.<br />Vérifier les droits d'écriture dans le répertoire PhpGedView.";
$pgv_lang["indi_complete"]              = "Indexation table individus terminée.";
$pgv_lang["family_complete"]            = "Indexation table familles terminée.";
$pgv_lang["source_complete"]            = "Indexation table sources terminée.";
$pgv_lang["tables_exist"]               = "Les tables PhpGedView existent déjà dans la base de données";
$pgv_lang["you_may"]                    = "Vous pouvez";
$pgv_lang["drop_tables"]                = "Supprimer les tables existantes";
$pgv_lang["import_multiple"]            = "Importer vos données et fonctionner avec plusieurs fichiers GEDCOM";
$pgv_lang["explain_options"]            = "Si vous choisissez de supprimer les tables tout leur contenu actuel sera remplacé par les données de ce GEDCOM.<br />Si vous choisissez d'ajouter ce GEDCOM et de fonctionner avec plusieurs GEDCOMs, PhpGedView effacera toutes les données qui ont été introduites à partir d'un nom de fichier GEDCOM identique. Cette option vous permet d'enregistrer plusieurs fichiers GEDCOM dans les mêmes tables et de passer facilement d'un fichier à l'autre.";
$pgv_lang["path_to_gedcom"]             = "Chemin d'accès à votre fichier GEDCOM";
$pgv_lang["dataset_exists"]             = "Un fichier GEDCOM de même nom a déjà été introduit dans la base de données.";
$pgv_lang["changes_present"]            = "Il reste des modifications en attente de validation pour ce fichier GEDCOM.<br />Elles seront automatiquement validées si vous rechargez le fichier maintenant.";
$pgv_lang["empty_dataset"]              = "Voulez-vous vider le fichier ?";
$pgv_lang["index_complete"]             = "Index créé.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]= "Afficher l'arbre";
$pgv_lang["updating_is_dead"]           = "Contrôle de cohérence des âges de décès...";
$pgv_lang["import_complete"]            = "Import terminé";
$pgv_lang["updating_family_names"]      = "Chargement des noms de familles...";
$pgv_lang["processed_for"]              = "Fichier traité pour";
$pgv_lang["run_tools"]                  = "Appliquer un des outils suivants sur votre fichier GEDCOM avant de le charger";
$pgv_lang["addmedia"]                   = "Ajout MultiMedia";
$pgv_lang["dateconvert"]                = "Outil de conversion des dates";
$pgv_lang["xreftorin"]                  = "Conversion des XREF en RIN";
$pgv_lang["tools_readme"]               = "Voir la section 'tools' du fichier #README.TXT# pour d'autres informations.";
$pgv_lang["sec"]                        = "sec.";
$pgv_lang["bytes_read"]                 = "Octets lus";
$pgv_lang["created_remotelinks"]        = "Table <i>Remotelinks</i> créée.";
$pgv_lang["created_remotelinks_fail"]   = "Impossible de créer la table <i>Remotelinks</i>";
$pgv_lang["created_indis"]              = "Table <i>Individus</i> créée.";
$pgv_lang["created_indis_fail"]         = "Impossible de créer la table <i>Individus</i>";
$pgv_lang["created_fams"]               = "Table <i>Familles</i> créée.";
$pgv_lang["created_fams_fail"]          = "Impossible de créer la table <i>Familles</i>";
$pgv_lang["created_sources"]            = "Table <i>Sources</i> créée.";
$pgv_lang["created_sources_fail"]       = "Impossible de créer la table <i>Sources</i>";
$pgv_lang["created_other"]              = "Table <i>Autres</i> créée.";
$pgv_lang["created_other_fail"]         = "Impossible de créer la table <i>Autres</i>";
$pgv_lang["created_places"]             = "Table <i>Lieux</i> créée.";
$pgv_lang["created_places_fail"]        = "Impossible de créer la table <i>Lieux</i>";
$pgv_lang["created_placelinks"]         = "Table <i>Place links</i> créée.";
$pgv_lang["created_placelinks_fail"]    = "Impossible de créer la table <i>Place links</i>";
$pgv_lang["created_media_fail"]         = "Impossible de créer la table <i>Media</i>";
$pgv_lang["created_media_mapping_fail"] = "<i>Media mappings</i>";
$pgv_lang["import_progress"]            = "Chargement en cours...";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]                 = " Familles";
$pgv_lang["total_indis"]                = " Individus";
$pgv_lang["starts_with"]                = "Commence par";
$pgv_lang["person_list"]                = "Liste des individus";
$pgv_lang["paste_person"]               = "Ajouter la personne";
$pgv_lang["notes_sources_media"]        = "Notes, sources et objets MultiMedia";
$pgv_lang["notes"]                      = "Notes";
$pgv_lang["ssourcess"]                  = "Sources";
$pgv_lang["media"]                      = "Objets MultiMedia";
$pgv_lang["name_contains"]              = "Le nom contient";
$pgv_lang["filter"]                     = "Filtre";
$pgv_lang["find_individual"]            = "Choisir un individu";
$pgv_lang["find_familyid"]              = "Choisir une famille";
$pgv_lang["find_sourceid"]              = "Choisir une source";
$pgv_lang["find_specialchar"]           = "Saisie des caractères spéciaux";
$pgv_lang["magnify"]                    = "Agrandir";
$pgv_lang["skip_surnames"]              = "Afficher tous les noms";
$pgv_lang["show_surnames"]              = "Afficher la liste des noms";
$pgv_lang["all"]                        = " [Tous] ";
$pgv_lang["hidden"]                     = "Masqués";
$pgv_lang["confidential"]               = "Confidentiel";
$pgv_lang["alpha_index"]                = "Index alphabétique";
$pgv_lang["name_list"]                  = "Liste des noms";
$pgv_lang["firstname_alpha_index"]      = "Index alphabétique par patronyme";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]                        = "Age";
$pgv_lang["days"]                       = "jours";
$pgv_lang["months"]                     = "mois";
$pgv_lang["years"]                      = "ans";
$pgv_lang["day1"]                       = "jour";
$pgv_lang["month1"]                     = "mois";
$pgv_lang["year1"]                      = "an";
$pgv_lang["timeline_title"]             = "Echelle de temps";
$pgv_lang["timeline_chart"]             = "Echelle de temps";
$pgv_lang["remove_person"]              = "Retirer cette personne";
$pgv_lang["show_age"]                   = "Afficher le marqueur d'âge";
$pgv_lang["add_another"]                = "Ajouter une personne au diagramme ";
$pgv_lang["find_id"]                    = "Choisir";
$pgv_lang["show"]                       = "Afficher";
$pgv_lang["year"]                       = "Année";
$pgv_lang["timeline_instructions"]      = "Avec un navigateur récent, vous pouvez cliquer sur les cadres et les faire glisser.";
$pgv_lang["zoom_in"]                    = "Zoom avant";
$pgv_lang["zoom_out"]                   = "Zoom arrière";

//-- MONTH NAMES
$pgv_lang["jan"]                        = "Janvier";
$pgv_lang["feb"]                        = "Février";
$pgv_lang["mar"]                        = "Mars";
$pgv_lang["apr"]                        = "Avril";
$pgv_lang["may"]                        = "Mai";
$pgv_lang["jun"]                        = "Juin";
$pgv_lang["jul"]                        = "Juillet";
$pgv_lang["aug"]                        = "Août";
$pgv_lang["sep"]                        = "Septembre";
$pgv_lang["oct"]                        = "Octobre";
$pgv_lang["nov"]                        = "Novembre";
$pgv_lang["dec"]                        = "Décembre";
$pgv_lang["abt"]                        = "vers";
$pgv_lang["aft"]                        = "après";
$pgv_lang["and"]                        = "et";
$pgv_lang["bef"]                        = "avant";
$pgv_lang["bet"]                        = "entre";
$pgv_lang["cal"]                        = "date calculée";
$pgv_lang["est"]                        = "date estimée";
$pgv_lang["from"]                       = "de";
$pgv_lang["int"]                        = "interprétée";
$pgv_lang["to"]                         = "à";
$pgv_lang["cir"]                        = "environ";
$pgv_lang["apx"]                        = "approx.";

//-- Admin File Messages
$pgv_lang["select_an_option"]           = "Choisir l'une des options ci-dessous";
$pgv_lang["readme_documentation"]       = "Lire la documentation README";
$pgv_lang["view_readme"]                = "Voir le fichier readme.txt";
$pgv_lang["configuration"]              = "Configurer PhpGedView";
$pgv_lang["rebuild_indexes"]            = "Reconstruire les index";
$pgv_lang["user_admin"]                 = "Administrer les utilisateurs";
$pgv_lang["user_created"]               = "Nouvel utilisateur ajouté avec succès.";
$pgv_lang["user_create_error"]          = "Impossible d'ajouter cet utilisateur. Revenir en arrière et ré-essayer.";
$pgv_lang["password_mismatch"]          = "Mot de passe sans correspondance.";
$pgv_lang["enter_username"]             = "Vous devez entrer un nom d'utilisateur.";
$pgv_lang["enter_fullname"]             = "Vous devez entrer un prénom et un nom.";
$pgv_lang["enter_password"]             = "Vous devez entrer un mot de passe.";
$pgv_lang["confirm_password"]           = "Vous devez confirmer le mot de passe.";
$pgv_lang["update_user"]                = "Mise à jour de l'utilisateur";
$pgv_lang["update_myaccount"]           = "Mise à jour de mon compte utilisateur";
$pgv_lang["save"]                       = "Sauvegarder";
$pgv_lang["delete"]                     = "Supprimer";
$pgv_lang["edit"]                       = "Modifier";
$pgv_lang["full_name"]                  = "Prénom et nom";
$pgv_lang["visibleonline"]              = "Visible par les autres utilisateurs";
$pgv_lang["comment"]                    = "Avis de l'administrateur";
$pgv_lang["comment_exp"]                = "Avertissement de l'administrateur le";
$pgv_lang["editaccount"]                = "Utilisateur autorisé à modifier le compte";
$pgv_lang["admin_gedcom"]               = "Administrateur GEDCOM";
$pgv_lang["confirm_user_delete"]        = "Confirmez-vous la suppression de cet utilisateur ?";
$pgv_lang["create_user"]                = "Ajouter un utilisateur";
$pgv_lang["no_login"]                   = "Authentification de l'utilisateur impossible.";
$pgv_lang["basic_realm"]                = "Authentification PhpGedView";
$pgv_lang["basic_auth_failure"]         = "Entrer un login et un mot de passe pour accéder à cette ressource";
$pgv_lang["basic_auth"]                 = "Authentification simple";
#pgv_lang["digest_auth"]                = "Digest Authentication"; //not used in code yet
$pgv_lang["no_auth_needed"]             = "Pas d'authentification";
$pgv_lang["import_gedcom"]              = "Importer";
$pgv_lang["duplicate_username"]         = "Utilisateur déjà existant.  Un utilisateur existe déjà sous ce nom.  Veuillez retourner à la page précédente et choisir un autre nom.";
$pgv_lang["gedcomid"]                   = "Clé GEDCOM pour l'identificateur";
$pgv_lang["enter_gedcomid"]             = "Vous devez entrer un identificateur GEDCOM.";
$pgv_lang["user_info"]                  = "Mes informations personnelles";
$pgv_lang["rootid"]                     = "Individu racine";
$pgv_lang["download_gedcom"]            = "Recevoir le fichier GEDCOM sur votre système (download)";
$pgv_lang["upload_gedcom"]              = "Envoyer un fichier GEDCOM sur le serveur (upload)";
$pgv_lang["add_new_gedcom"]             = "Créer un nouveau GEDCOM vide";
$pgv_lang["gedcom_file"]                = "Fichier GEDCOM";
$pgv_lang["enter_filename"]             = "Indiquer un nom de fichier GEDCOM.";
$pgv_lang["file_not_exists"]            = "Le fichier n'existe pas.";
$pgv_lang["file_not_present"]           = "Fichier non trouvé.";
$pgv_lang["file_exists"]                = "Un fichier avec ce nom existe déjà. Entrer un autre nom ou supprimer l'ancien fichier.";
$pgv_lang["new_gedcom_title"]           = "Généalogie de [#GEDCOMFILE#]";
$pgv_lang["upload_error"]               = "Erreur lors du chargement de votre fichier GEDCOM sur le serveur.";
#pgv_lang["upload_media_help"]          = "~#pgv_lang[upload_media]#~<br /><br />Select files from your local computer to upload to your server.  All files will be uploaded to the directory <b>#MEDIA_DIRECTORY#</b> or to one of its sub-directories.<br /><br />Folder names you specify will be appended to #MEDIA_DIRECTORY#. For example, #MEDIA_DIRECTORY#myfamily. If the thumbnail directory does not exist, it is created automatically.";
#pgv_lang["upload_gedcom_help"]         = "Select the GEDCOM or ZIP file from your local computer to upload to your server.  The file will be uploaded to the directory <b>#INDEX_DIRECTORY#</b>.<br /><br />If you upload a ZIP file, it should contain only one GEDCOM, and that GEDCOM will be used automatically in the next steps.<br /><br />";
$pgv_lang["add_gedcom_instructions"]    = "Entrer un nom pour ce nouveau fichier GEDCOM.<br />Il sera créé dans le répertoire";
$pgv_lang["file_success"]               = "Fichier chargé avec succès";
$pgv_lang["file_too_big"]               = "Le fichier chargé dépasse la taille autorisée";
$pgv_lang["file_partial"]               = "Fichier reçu partiellement. Veuillez recommencer.";
$pgv_lang["file_missing"]               = "Fichier non reçu. Veuillez recommencer.";
$pgv_lang["manage_gedcoms"]             = "Gérer les fichiers GEDCOM";
$pgv_lang["research_assistant"]         = "Assistant de recherches";
$pgv_lang["administration"]             = "Administration";
$pgv_lang["ansi_to_utf8"]               = "Convertir ce fichier GEDCOM format ANSI en format UTF-8 ?";
$pgv_lang["utf8_to_ansi"]               = "Convertir ce fichier GEDCOM format UTF-8 en format ANSI (ISO-8859-1) ?";
$pgv_lang["visitor"]                    = "Visiteur";
$pgv_lang["user"]                       = "Utilisateur authentifié";
$pgv_lang["gedadmin"]                   = "Administrateur GEDCOM";
$pgv_lang["siteadmin"]                  = "Administrateur du site";
$pgv_lang["apply_privacy"]              = "Appliquer les règles de restrictions d'accès ?";
$pgv_lang["choose_priv"]                = "Niveau de restriction:";
$pgv_lang["user_manual"]                = "Manuel utilisateur de PhpGedView";
$pgv_lang["upgrade"]                    = "Installer une nouvelle version de PhpGedView";
$pgv_lang["view_logs"]                  = "Voir le fichier journal";
$pgv_lang["logfile_content"]            = "Contenu du fichier journal";
$pgv_lang["step1"]                      = "Etape 1/4 :";
$pgv_lang["step2"]                      = "Etape 2/4 :";
$pgv_lang["step3"]                      = "Etape 3/4 :";
$pgv_lang["step4"]                      = "Etape 4/4 :";
$pgv_lang["validate_gedcom"]            = "Validation GEDCOM";
$pgv_lang["img_admin_settings"]         = "Configuration de l'éditeur d'images";
$pgv_lang["download_note"]              = "Note: un gros fichier GEDCOM risque d'être long à charger. Si PHP stoppe avant la fin du chargement, votre fichier sera incomplet. Vérifier la présence de la ligne '0 TRLR' à la fin du fichier. Généralement, les temps d'envoi (upload)  ou de réception (download) du fichier GEDCOM sont équivalents.";
$pgv_lang["pgv_registry"]               = "Voir les autres sites web utilisant PhpGedView";
$pgv_lang["verify_upload_instructions"] = "En choisissant <i>Continuer</i> l'ancien GEDCOM sera remplacé par le nouveau fichier chargé. En choisissant <i>Annuler</i> l'ancien fichier GEDCOM restera inchangé.";
$pgv_lang["cancel_upload"]              = "Annuler le chargement";
$pgv_lang["add_media_records"]          = "Ajouter des objets MultiMedia";
$pgv_lang["manage_media_files"]         = "Gérer les objets MultiMedia";
$pgv_lang["link_media_records"]         = "Relier les objets MultiMedia aux individus";
$pgv_lang["add_media_button"]           = "Ajouter Media";
$pgv_lang["media_linked"]               = "Cet objet MultiMedia est relié à :";
$pgv_lang["media_not_linked"]           = "Cet objet MultiMedia n'est relié à aucun enregistrement GEDCOM.";
$pgv_lang["phpinfo"]                    = "PHPInfo";
$pgv_lang["admin_info"]                 = "Informations";
$pgv_lang["admin_geds"]                 = "Fichiers et données GEDCOM";
$pgv_lang["admin_site"]                 = "Administration du site";

//-- Relationship chart messages
$pgv_lang["relationship_chart"]         = "Parenté";
$pgv_lang["person1"]                    = "Personne 1";
$pgv_lang["person2"]                    = "Personne 2";
$pgv_lang["no_link_found"]              = "Aucun (autre) lien trouvé entre les deux individus.";
$pgv_lang["sibling"]                    = "Frère/Sœur";
$pgv_lang["follow_spouse"]              = "Suivre les liens par mariage.";
$pgv_lang["timeout_error"]              = "La recherche s'est achevée avant qu'un lien de parenté ne soit trouvé.";
$pgv_lang["son"]                        = "Fils";
$pgv_lang["daughter"]                   = "Fille";
$pgv_lang["son-in-law"]                 = "Gendre";
$pgv_lang["daughter-in-law"]            = "Belle-fille";
$pgv_lang["grandchild"]                 = "Petit-enfant";
$pgv_lang["grandson"]                   = "Petit-fils";
$pgv_lang["granddaughter"]              = "Petite-fille";
$pgv_lang["brother"]                    = "Frère";
$pgv_lang["sister"]                     = "Sœur";
$pgv_lang["brother-in-law"]             = "Beau-frère";
$pgv_lang["sister-in-law"]              = "Belle-sœur";
$pgv_lang["aunt"]                       = "Tante";
$pgv_lang["uncle"]                      = "Oncle";
$pgv_lang["firstcousin"]                = "Cousin(e) germain(e)";
$pgv_lang["femalecousin"]               = "Cousine";
$pgv_lang["malecousin"]                 = "Cousin";
$pgv_lang["cousin-in-law"]              = "Cous. par alliance";
$pgv_lang["relationship_to_me"]         = "Parenté avec moi";
$pgv_lang["rela_husb"]                  = "Parenté avec l'époux";
$pgv_lang["rela_wife"]                  = "Parenté avec l'épouse";
$pgv_lang["next_path"]                  = "Chemin suivant";
$pgv_lang["show_path"]                  = "Voir le chemin";
$pgv_lang["line_up_generations"]        = "Aligner par génération";
$pgv_lang["oldest_top"]                 = "Afficher les parents en haut";

// %1 replaced by first person, %2 by the relationship and %3 by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = '%1$s est le %2$s de %3$s.';
$pgv_lang["relationship_female_1_is_the_2_of_3"] = '%1$s est la %2$s de %3$s.';

$pgv_lang["mother_in_law"]		    = "belle-mère";
$pgv_lang["father_in_law"]		    = "beau-père";
$pgv_lang["brother_in_law"]		    = "beau-frère";
$pgv_lang["sister_in_law"]		    = "belle-soeur";
$pgv_lang["son_in_law"]		        = "beau-fils";
$pgv_lang["daughter_in_law"]		= "belle-fille";

$pgv_lang["step_son"]		        = "beau-fils";
$pgv_lang["step_daughter"]	    	= "belle-fille";

$pgv_lang["n_x_great_grandfather"]	= "%d x arrière-grand-père";
$pgv_lang["n_x_great_grandmother"]	= "%d x arrière-grand-mère";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] = "neveu";             // brother's son
$pgv_lang["bosa_brothers_offspring_3"] = "nièce";            // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] = "petit-neveu";       // brother's son's son 
$pgv_lang["bosa_brothers_offspring_5"] = "petite-nièce";     // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"] = "petit-neveu";       // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"] = "petite-nièce";     // brother's daughter's daughter
// 3nd generation
$pgv_lang["bosa_brothers_offspring_8"] = "arrière petit-neveu";       // brother's son's son's son 
$pgv_lang["bosa_brothers_offspring_9"] = "arrière petite-nièce";     // brother's son's son's daughter
$pgv_lang["bosa_brothers_offspring_10"] = "arrière petit-neveu";       // brother's son's daughter's son
$pgv_lang["bosa_brothers_offspring_11"] = "arrière petite-nièce";     // brother's son's daughter's daughter
$pgv_lang["bosa_brothers_offspring_12"] = "arrière petit-neveu";       // brother's daughter's son's son 
$pgv_lang["bosa_brothers_offspring_13"] = "arrière petite-nièce";     // brother's daughter's son's daughter
$pgv_lang["bosa_brothers_offspring_14"] = "arrière petit-neveu";       // brother's daughter's daughter's son
$pgv_lang["bosa_brothers_offspring_15"] = "arrière petite-nièce";     // brother's daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = '%2$d x arrière petit-neveu';
$pgv_lang["n_x_brothers_daughter"] = '%2$d x arrière petite-nièce';
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "neveu";             // sister's son
$pgv_lang["bosa_sisters_offspring_3"] 				= "nièce";              // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "petit-neveu";       // sister's son's son 
$pgv_lang["bosa_sisters_offspring_5"] 				= "petite-nièce";        // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"] 				= "petit-neveu";       // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"] 				= "petite-nièce";        // sister's daughter's daughter
// 3nd generation
$pgv_lang["bosa_sisters_offspring_8"] = "arrière petit-neveu";       // sister's son's son's son 
$pgv_lang["bosa_sisters_offspring_9"] = "arrière petite-nièce";     // sister's son's son's daughter
$pgv_lang["bosa_sisters_offspring_10"] = "arrière petit-neveu";       // sister's son's daughter's son
$pgv_lang["bosa_sisters_offspring_11"] = "arrière petite-nièce";     // sister's son's daughter's daughter
$pgv_lang["bosa_sisters_offspring_12"] = "arrière petit-neveu";       // sister's daughter's son's son 
$pgv_lang["bosa_sisters_offspring_13"] = "arrière petite-nièce";     // sister's daughter's son's daughter
$pgv_lang["bosa_sisters_offspring_14"] = "arrière petit-neveu";       // sister's daughter's daughter's son
$pgv_lang["bosa_sisters_offspring_15"] = "arrière petite-nièce";     // sister's daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = '%2$d x arrière petit-neveu';
$pgv_lang["n_x_sisters_daughter"] = '%2$d x arrière petite-nièce';

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "son";                   // son
$pgv_lang["bosa_3"] 				= "daughter";              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "petit-fils";            // son's son 
$pgv_lang["bosa_5"] 				= "petit-fille";           // son's daughter
$pgv_lang["bosa_6"] 				= "petit-fils";            // daughter's son
$pgv_lang["bosa_7"] 				= "petit-fille";           // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "arrière petit-fils";    // son's son's son   
$pgv_lang["bosa_9"] 				= "arrière petit-fille";   // son's son's daughter
$pgv_lang["bosa_10"] 				= "arrière petit-fils";	// son's daughters son
$pgv_lang["bosa_11"] 				= "arrière petit-fille";   // son's daughters daughter
$pgv_lang["bosa_12"] 				= "arrière petit-fils";    // daughter's son's son 
$pgv_lang["bosa_13"] 				= "arrière petit-fille";   // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "arrière petit-fils";	// daughter's daughters son
$pgv_lang["bosa_15"] 				= "arrière petit-fille";   // daughter's daughters daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = '%3$d x arrière petit-fils';
$pgv_lang["n_x_granddaughter_from_son"] = '%3$d x arrière petit-fille';
$pgv_lang["n_x_grandson_from_daughter"]	  = '%3$d x arrière petit-fils';
$pgv_lang["n_x_granddaughter_from_daughter"] = '%3$d x arrière petit-fille';

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= $pgv_lang["uncle"]; // fathers brother
$pgv_lang["sosa_uncle_3"] 				= $pgv_lang["uncle"]; // mothers brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "grand-oncle";      // fathers's fathers brother 
$pgv_lang["sosa_uncle_5"] 				= "grand-oncle";      // fathers mothers brother
$pgv_lang["sosa_uncle_6"] 				= "grand-oncle";      // mothers fathers brother
$pgv_lang["sosa_uncle_7"] 				= "grand-oncle";      // mothers mothers brother
// 2nd generation
$pgv_lang["sosa_uncle_8"] 				= "arrière grand-oncle";      // father's fathers's fathers brother 
$pgv_lang["sosa_uncle_9"] 				= "arrière grand-oncle";      // father's fathers mothers brother
$pgv_lang["sosa_uncle_10"] 				= "arrière grand-oncle";      // father's mothers fathers brother
$pgv_lang["sosa_uncle_11"] 				= "arrière grand-oncle";      // father's mothers mothers brother
$pgv_lang["sosa_uncle_12"] 				= "arrière grand-oncle";      // mother's fathers's fathers brother 
$pgv_lang["sosa_uncle_13"] 				= "arrière grand-oncle";      // mother's fathers mothers brother
$pgv_lang["sosa_uncle_14"] 				= "arrière grand-oncle";      // mother's mothers fathers brother
$pgv_lang["sosa_uncle_15"] 				= "arrière grand-oncle";      // mother's mothers mothers brother
// for the general case of uncles of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= '%2$d x arrière grand-oncle';
$pgv_lang["n_x_maternal_uncle"]	    = '%2$d x arrière grand-oncle';

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= $pgv_lang["aunt"];  // fathers sister
$pgv_lang["sosa_aunt_3"] 				= $pgv_lang["aunt"];  // mothers sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "grand-tante";      // fathers's fathers sister 
$pgv_lang["sosa_aunt_5"] 				= "grand-tante";      // fathers mothers sister
$pgv_lang["sosa_aunt_6"] 				= "grand-tante";      // mothers fathers sister
$pgv_lang["sosa_aunt_7"] 				= "grand-tante";      // mothers mothers sister
// 2nd generation
$pgv_lang["sosa_aunt_8"] 				= "arrière grand-tante";      // father's fathers's fathers sister 
$pgv_lang["sosa_aunt_9"] 				= "arrière grand-tante";      // father's fathers mothers sister
$pgv_lang["sosa_aunt_10"] 				= "arrière grand-tante";      // father's mothers fathers sister
$pgv_lang["sosa_aunt_11"] 				= "arrière grand-tante";      // father's mothers mothers sister
$pgv_lang["sosa_aunt_12"] 				= "arrière grand-tante";      // mother's fathers's fathers sister 
$pgv_lang["sosa_aunt_13"] 				= "arrière grand-tante";      // mother's fathers mothers sister
$pgv_lang["sosa_aunt_14"] 				= "arrière grand-tante";      // mother's mothers fathers sister
$pgv_lang["sosa_aunt_15"] 				= "arrière grand-tante";      // mother's mothers mothers sister
// for the general case of aunts of the nth degree use the text below
// in this text %1$d is replaced with the number of generations
//              %2$d is replaced with the number of generations - 1
//              %3$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= '%2$d x ';
$pgv_lang["n_x_maternal_aunt"]	    = '%2$d x ';

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]          = "cousin germain";
$pgv_lang["male_cousin_2"]          = "cousin issus de germain";
$pgv_lang["male_cousin_3"]          = "cousin issus d'issus germain";
$pgv_lang["male_cousin_4"]          = "";
$pgv_lang["male_cousin_5"]          = "";
$pgv_lang["male_cousin_6"]          = "";
$pgv_lang["male_cousin_7"]          = "";
$pgv_lang["male_cousin_8"]          = "";
$pgv_lang["male_cousin_9"]          = "";
$pgv_lang["male_cousin_10"]         = "";
$pgv_lang["male_cousin_11"]         = "";
$pgv_lang["male_cousin_12"]         = "";
$pgv_lang["male_cousin_13"]         = "";
$pgv_lang["male_cousin_14"]         = "";
$pgv_lang["male_cousin_15"]         = "";
$pgv_lang["male_cousin_16"]         = "";
$pgv_lang["male_cousin_17"]         = "";
$pgv_lang["male_cousin_18"]         = "";
$pgv_lang["male_cousin_19"]         = "";
$pgv_lang["male_cousin_20"]         = "";
$pgv_lang["male_cousin_n"]          = "";
$pgv_lang["female_cousin_1"]        = "cousine germaine";
$pgv_lang["female_cousin_2"]        = "cousine issus de germaine";
$pgv_lang["female_cousin_3"]        = "cousine issus d'issus germaine";
$pgv_lang["female_cousin_4"]        = "";
$pgv_lang["female_cousin_5"]        = "";
$pgv_lang["female_cousin_6"]        = "";
$pgv_lang["female_cousin_7"]        = "";
$pgv_lang["female_cousin_8"]        = "";
$pgv_lang["female_cousin_9"]        = "";
$pgv_lang["female_cousin_10"]       = "";
$pgv_lang["female_cousin_11"]       = "";
$pgv_lang["female_cousin_12"]       = "";
$pgv_lang["female_cousin_13"]       = "";
$pgv_lang["female_cousin_14"]       = "";
$pgv_lang["female_cousin_15"]       = "";
$pgv_lang["female_cousin_16"]       = "";
$pgv_lang["female_cousin_17"]       = "";
$pgv_lang["female_cousin_18"]       = "";
$pgv_lang["female_cousin_19"]       = "";
$pgv_lang["female_cousin_20"]       = "";
$pgv_lang["female_cousin_n"]        = "";


//-- GEDCOM edit utility
$pgv_lang["check_delete"]               = "Confirmez-vous la suppression de cet élément ?";
$pgv_lang["access_denied"]              = "<b>Accès interdit</b><br />Vous n'avez pas accès cette ressource";
$pgv_lang["gedrec_deleted"]             = "Enregistrement GEDCOM supprimé avec succès.";
$pgv_lang["gedcom_deleted"]             = "GEDCOM [#GED#] supprimé avec succès.";
$pgv_lang["changes_exist"]              = "<span class='warning'>Ce fichier GEDCOM a été modifié</span>&nbsp;&nbsp;";
$pgv_lang["accept_changes"]             = "Accepter/Rejeter les modifications";
$pgv_lang["show_changes"]               = "<span class='warning'>Fiche modifiée</span>&nbsp;&nbsp;Afficher les modifications.";
$pgv_lang["hide_changes"]               = "Masquer les modifications.";
$pgv_lang["review_changes"]             = "Revoir les modifications GEDCOM";
$pgv_lang["undo_successful"]            = "Annulation réussie";
$pgv_lang["undo"]                       = "Annuler";
$pgv_lang["view_change_diff"]           = "Voir les différences";
$pgv_lang["changes_occurred"]           = "Les modifications suivantes ont été faites pour cet individu";
$pgv_lang["find_place"]                 = "Choisir un lieu";
$pgv_lang["refresh"]                    = "Rafraichir";
$pgv_lang["close_window"]               = "Fermer la fenêtre";
$pgv_lang["close_window_without_refresh"]= "Fermer la fenêtre sans rafraîchir";
$pgv_lang["place_contains"]             = "Le lieu contient";
$pgv_lang["accept_gedcom"]              = "Vous pouvez accepter ou refuser chaque modification<br />Pour accepter tous les changements, importer à nouveau le fichier.<br />Pour refuser une modification, cliquer sur le lien 'Annuler' affiché à côté.<br />Pour connaître la nature d'une modification cliquer sur le lien 'Voir les différences'.";
$pgv_lang["ged_import"]                 = "Importer";
$pgv_lang["now_import"]                 = "Maintenant vous devez importer les enregistrements GEDCOM dans PhpGedView en cliquant sur le lien ci-dessous.";
$pgv_lang["add_fact"]                   = "Ajouter un nouvel enregistrement";
$pgv_lang["add"]                        = "Ajouter";
$pgv_lang["custom_event"]               = "Evénement personnalisé";
$pgv_lang["update_successful"]          = "Mise à jour réussie";
$pgv_lang["add_child"]                  = "Ajouter un enfant";
$pgv_lang["add_child_to_family"]        = "Ajouter un enfant à cette famille";
$pgv_lang["add_sibling"]                = "Ajouter un frère ou une sœur";
$pgv_lang["add_son_daughter"]           = "Ajouter un fils ou une fille";
$pgv_lang["must_provide"]               = "Vous devez fournir un";
$pgv_lang["delete_person"]              = "Supprimer la fiche de cet individu";
$pgv_lang["confirm_delete_person"]      = "Confirmez-vous la suppression de cette fiche ?";
$pgv_lang["find_media"]                 = "Choisir un objet MultiMedia";
$pgv_lang["set_link"]                   = "Mettre un lien";
$pgv_lang["add_source_lbl"]             = "Ajouter une source";
$pgv_lang["add_source"]                 = "Ajouter une nouvelle source";
$pgv_lang["add_note_lbl"]               = "Ajouter une note";
$pgv_lang["add_note"]                   = "Ajouter une nouvelle note";
$pgv_lang["add_media_lbl"]              = "Ajouter un objet MultiMedia";
$pgv_lang["add_media"]                  = "Ajouter un nouvel objet MultiMedia";
$pgv_lang["delete_source"]              = "Supprimer cette source";
$pgv_lang["confirm_delete_source"]      = "Confirmez-vous la suppression de cette source ?";
$pgv_lang["add_husb"]                   = "Ajouter un époux";
$pgv_lang["add_husb_to_family"]         = "Ajouter un époux à cette famille";
$pgv_lang["add_wife"]                   = "Ajouter une épouse";
$pgv_lang["add_wife_to_family"]         = "Ajouter une épouse à cette famille";
$pgv_lang["find_family"]                = "Choisir une famille";
$pgv_lang["find_fam_list"]              = "Liste famille ?";
$pgv_lang["add_new_wife"]               = "Ajouter une nouvelle épouse";
$pgv_lang["add_new_husb"]               = "Ajouter un nouvel époux";
$pgv_lang["edit_name"]                  = "Modifier le nom";
$pgv_lang["delete_name"]                = "Supprimer le nom";
$pgv_lang["no_temple"]                  = "Temple absent (LDS)";
$pgv_lang["replace"]                    = "Modifier un enregistrement";
$pgv_lang["append"]                     = "Ajouter un enregistrement";
$pgv_lang["add_father"]                 = "Ajouter un nouveau père";
$pgv_lang["add_mother"]                 = "Ajouter une nouvelle mère";
$pgv_lang["add_obje"]                   = "Ajouter un nouvel objet Multimedia";
$pgv_lang["no_changes"]                 = "Aucune modification en attente de validation.";
$pgv_lang["accept"]                     = "Accepter";
$pgv_lang["accept_all"]                 = "Accepter toutes les modifications";
$pgv_lang["accept_successful"]          = "Les modifications ont été acceptées";
$pgv_lang["edit_raw"]                   = "Modifier les balises GEDCOM";
$pgv_lang["select_date"]                = "Choisir une date";
$pgv_lang["create_source"]              = "Créer une nouvelle source";
$pgv_lang["new_source_created"]         = "Nouvelle source créée avec succès.";
$pgv_lang["paste_id_into_field"]        = "Cliquez ici pour sélectionner cette source ";
$pgv_lang["add_name"]                   = "Ajouter un nom";
$pgv_lang["privacy_not_granted"]        = "Impossible de modifier les droits pour";
$pgv_lang["user_cannot_edit"]           = "Cet utilisateur ne peut modifier le fichier GEDCOM.";
$pgv_lang["gedcom_editing_disabled"]    = "La modification de ce fichier GEDCOM a été interdite par l'administrateur.";
$pgv_lang["privacy_prevented_editing"]  = "Droits insuffisants pour modifier cet enregistrement.";
$pgv_lang["add_asso"]                   = "Associer une nouvelle personne";
$pgv_lang["edit_sex"]                   = "Editer le genre";
$pgv_lang["ged_noshow"]                 = "Cette page a été désactivée par l'administrateur.";

//-- calendar.php messages
$pgv_lang["bdm"]                        = "Naissances|Mariages|Décès";
$pgv_lang["on_this_day"]                = "Ce jour-là...";
$pgv_lang["in_this_month"]              = "Ce mois-là...";
$pgv_lang["in_this_year"]               = "Cette année-là...";
$pgv_lang["year_anniversary"]           = "#year_var# anniversaire";
$pgv_lang["today"]                      = "Aujourd'hui";
$pgv_lang["day"]                        = "Jour";
$pgv_lang["month"]                      = "Mois";
$pgv_lang["showcal"]                    = "Montrer les évènements de";
$pgv_lang["anniversary_calendar"]       = "Calendrier";
$pgv_lang["sunday"]                     = "Dimanche";
$pgv_lang["monday"]                     = "Lundi";
$pgv_lang["tuesday"]                    = "Mardi";
$pgv_lang["wednesday"]                  = "Mercredi";
$pgv_lang["thursday"]                   = "Jeudi";
$pgv_lang["friday"]                     = "Vendredi";
$pgv_lang["saturday"]                   = "Samedi";
$pgv_lang["viewday"]                    = "Anniversaires du jour";
$pgv_lang["viewmonth"]                  = "Anniversaires du mois";
$pgv_lang["viewyear"]                   = "Anniversaires de l'année";
$pgv_lang["all_people"]                 = "Toutes les personnes";
$pgv_lang["living_only"]                = "Les personnes vivantes seulement";
$pgv_lang["recent_events"]              = "Evénements récents (- 100 ans)";
$pgv_lang["day_not_set"]                = "Jour absent";
$pgv_lang["year_error"]                 = "Les dates antérieures à 1970 ne sont pas supportées. Désolé !";

//-- user self registration module
//$pgv_lang["no_pw_or_account"]         = "If you do not have an account or if you have lost your password, please click the <b>Login</b> button";
$pgv_lang["lost_password"]              = "Mot de passe perdu ?";
$pgv_lang["requestpassword"]            = "Demander un nouveau mot de passe";
$pgv_lang["no_account_yet"]             = "Vous n'êtes pas encore inscrit ?";
$pgv_lang["requestaccount"]             = "Demander un compte utilisateur";
$pgv_lang["emailadress"]                = "Adresse courriel";
$pgv_lang["mandatory"]                  = "Les champs marqués * sont obligatoires.";
$pgv_lang["mail01_line01"]              = "Bonjour #user_fullname# ...";
$pgv_lang["mail01_line02"]              = "Une demande a été adressée à ( #SERVER_NAME# ) pour une connexion avec votre adresse courriel ( #user_email# ).";
$pgv_lang["mail01_line03"]              = "Les informations suivantes ont été utilisées.";
$pgv_lang["mail01_line04"]              = "Merci de cliquer sur le lien ci-dessous et de renseigner les champs demandés pour vérifier votre compte et l'adresse courriel.";
$pgv_lang["mail01_line05"]              = "Si vous n'avez pas demandé une inscription vous pouvez supprimer ce message.";
$pgv_lang["mail01_line06"]              = "Vous ne recevrez plus de messages de ce système parce que, manquant une réponse de votre part dans 7 jours, ce compte sera supprimé.";
$pgv_lang["mail01_subject"]             = "Votre inscription sur #SERVER_NAME#";

$pgv_lang["mail02_line01"]              = "Bonjour à l'administrateur ...";
$pgv_lang["mail02_line02"]              = "Un nouvel utilisateur s'est inscrit sur ( #SERVER_NAME# ).";
$pgv_lang["mail02_line03"]              = "L'utilisateur a reçu un message avec les informations nécessaires à la vérification de son compte.";
$pgv_lang["mail02_line04"]              = "Dès que l'utilisateur aura fait la vérification vous serez informé par message afin que vous puissiez l'autoriser à se connecter à votre site.";
$pgv_lang["mail02_line04a"]             = "Vous serez averti par courriel lorsque l'utilisateur aura fait la vérification de son compte. Il pourra se connecter sans action de votre part.";
$pgv_lang["mail02_subject"]             = "Nouvelle inscription sur #SERVER_NAME#";

$pgv_lang["hashcode"]                   = "Code de vérification";
$pgv_lang["thankyou"]                   = "Bonjour #user_fullname# ...<br />Merci pour votre inscription";
$pgv_lang["pls_note06"]                 = "Vous allez recevoir un message de confirmation à l'adresse ( #user_email# ).<br /><br />En suivant les instructions de ce message vous pourrez activer votre compte.<br /><br />Si vous n'activez pas votre compte avant sept jours, il sera supprimé<br />(vous pourrez vous enregistrer à nouveau dans ce cas).<br /><br />Pour vous connecter au site, votre nom de connexion et votre mot de passe sont nécessaires.";
$pgv_lang["pls_note06a"]                = "Vous allez recevoir un message de confirmation à l'adresse ( #user_email# ). En suivant les instructions de ce message vous pourrez activer votre compte. Si vous n'activez pas votre compte avant sept jours, il sera supprimé (vous pourrez vous enregistrer à nouveau dans ce cas). Apres activation de votre compte, vous pourrez vous connecter au site.";

$pgv_lang["registernew"]                = "Confirmation du nouveau compte";
$pgv_lang["user_verify"]                = "Verification de l'utilisateur";
$pgv_lang["send"]                       = "Envoyer";

$pgv_lang["pls_note07"]                 = "Merci d'entrer votre identificateur, votre mot de passe et le code de vérification que vous avez reçu par courriel afin de vérifier votre demande de compte.";
$pgv_lang["pls_note08"]                 = "Les informations de l'utilisateur #user_name# ont été controlées.";

$pgv_lang["mail03_line01"]              = "Bonjour à l'administrateur ...";
$pgv_lang["mail03_line02"]              = "#newuser[username]# ( #newuser[fullname]# ) a vérifié les informations de son inscription.";
$pgv_lang["mail03_line03"]              = "Merci de cliquer sur le lien ci-dessous pour vous connecter au site et donner à l'utilisateur l'autorisation de se connecter.";
$pgv_lang["mail03_line03a"]             = "L'utilisateur peut maintenant se connecter sans action de votre part.";
$pgv_lang["mail03_subject"]             = "Nouvelle vérification sur #SERVER_NAME#";

$pgv_lang["pls_note09"]                 = "Vous avez été identifié comme un utilisateur inscrit.";
$pgv_lang["pls_note10"]                 = "L'administrateur a été informé.<br />Vous pourrez vous connecter avec votre identificateur de connexion et votre mot de passe<br />dès qu'il vous en aura donné l'autorisation.";
$pgv_lang["pls_note10a"]                = "Vous pouvez maintenant vous connecter avec votre nom de compte et votre mot de passe.";
$pgv_lang["data_incorrect"]             = "Informations incorrectes!<br />Merci de réessayer!";
$pgv_lang["user_not_found"]             = "Identification impossible. Merci de réessayer";

$pgv_lang["lost_pw_reset"]              = "Demande de mot de passe perdu";
$pgv_lang["pls_note11"]                 = "Pour restaurer votre mot de passe, fournissez votre nom d'utilisateur PhpGedView sur ce site et l'adresse courriel associée à ce compte.<br /><br />Vous recevrez par courriel une URL spéciale qui contiendra un code de confirmation de votre compte. Vous pourrez alors vous connecter et ensuite changer votre mot de passe.<br /><br />Par mesure de sécurité, vous ne devez fournir votre code de confirmation à personne, même pas aux administrateurs de ce site (ils ne vous le demanderont pas).<br /><br />Si vous avez besoin d'aide de la part de l'administrateur du site, faites une demande d'assistance.";
$pgv_lang["enter_email"]                = "Vous devez entrer une adresse courriel.";

$pgv_lang["mail04_line01"]              = "Bonjour #user_fullname# ...";
$pgv_lang["mail04_line02"]              = "Un nouveau mot de passe a été demandé pour votre compte!";
$pgv_lang["mail04_line03"]              = "Recommandation:";
$pgv_lang["mail04_line04"]              = "Cliquez maintenant sur le lien ci-dessous, connectez-vous avec le nouveau mot de passe et, par précaution, changez-le immediatement.";
$pgv_lang["mail04_line05"]              = "Pour changer votre mot de passe, une fois connecté, cliquez le lien '#pgv_lang[myuserdata]#' dans le menu '#pgv_lang[mygedview]#' et remplissez les champs concernant le mot de passe.";
$pgv_lang["mail04_subject"]             = "Demande d'informations pour #SERVER_NAME#";

$pgv_lang["pwreqinfo"]                  = "Bonjour...<br /><br />Un message a été envoyé à l'adresse (#user[email]#) avec le nouveau mot de passe.<br /><br />Merci de vérifier votre messagerie car vous devriez recevoir ce message dans les prochaines minutes.<br /><br />Recommandation:<br /><br />Après avoir récupéré ce message, connectez-vous à ce site et changez votre mot de passe pour conserver l'integrité de vos données.";

$pgv_lang["editowndata"]                = "Mon compte";
$pgv_lang["savedata"]                   = "Sauvegarde des données modifiées";
$pgv_lang["datachanged"]                = "Les données ont été modifiées!";
$pgv_lang["datachanged_name"]           = "Il vous sera peut-être nécessaire de vous reconnecter avec votre nouvel identificateur.";
$pgv_lang["myuserdata"]                 = "Mon compte";
$pgv_lang["verified"]                   = "Vérifié par l'utilisateur";
$pgv_lang["verified_by_admin"]          = "Approuvé par l'administrateur";
$pgv_lang["user_theme"]                 = "Mon thème";
$pgv_lang["mgv"]                        = "Mon portail";
$pgv_lang["mygedview"]                  = "Mon portail";
$pgv_lang["passwordlength"]             = "Le mot de passe doit contenir au moins 6 caractères.";
$pgv_lang["admin_approved"]             = "Votre compte sur #SERVER_NAME#";
$pgv_lang["you_may_login"]              = " a été approuvé par l'administrateur du site. Vous pouvez maintenant vous connecter au site PhpGedView par ce lien";
$pgv_lang["welcome_text_auth_mode_1"]   =	"<b>BIENVENUE</b><br /><br />L'accès à ce site est autorisé à tous les visiteurs ayant un compte.<br />Si vous avez déjà un compte, vous pouvez vous connecter.<br /><br />Sinon, remplissez le formulaire.<br />Après vérification, l'administrateur activera votre compte.<br />Vous recevrez un message d'information.";
$pgv_lang["welcome_text_auth_mode_2"]   =	"<b>BIENVENUE</b><br /><br />L'accès à ce site est réservé aux utilisateurs <b>autorisés</b>.<br />Si vous avez déjà un compte, vous pouvez vous connecter.<br /><br />Sinon, remplissez le formulaire.<br />Après vérification, l'administrateur acceptera ou refusera votre demande.<br />Vous recevrez un message d'information.";
$pgv_lang["welcome_text_auth_mode_3"]   =	"<b>BIENVENUE</b><br /><br />L'accès à ce site est réservé aux utilisateurs <b>membres de la famille</b>.<br />Si vous avez déjà un compte, vous pouvez vous connecter.<br /><br />Sinon, remplissez le formulaire.<br />Après vérification, l'administrateur acceptera ou refusera votre demande.<br />Vous recevrez un message d'information.";
$pgv_lang["welcome_text_cust_head"]     =	"<b>BIENVENUE</b><br /><br />L'accès à ce site est autorisé aux utilisateurs ayant un compte et un mot de passe.<br />";


//-- mygedview page
$pgv_lang["welcome"]                    = "Bienvenue";
$pgv_lang["upcoming_events"]            = "Prochains anniversaires";
$pgv_lang["living_or_all"]              = "Voir seulement les personnes vivantes ?";
$pgv_lang["basic_or_all"]               = "Voir seulement Naissances, Mariages et Décès ?";
$pgv_lang["no_events_living"]           = "Aucun évènement pour une personne vivante dans les #pgv_lang[global_num1]# prochains jours.";
$pgv_lang["no_events_living1"]          = "Aucun évènement pour une personne vivante pour demain.";
$pgv_lang["no_events_all"]              = "Aucun évènement dans les #pgv_lang[global_num1]# prochains jours.";
$pgv_lang["no_events_all1"]             = "Aucun évènement pour demain.";
$pgv_lang["no_events_privacy"]          = "Des évènements existent dans les #pgv_lang[global_num1]# prochains jours, mais leur accès est restreint.";
$pgv_lang["no_events_privacy1"]         = "Des évènements existent pour demain, mais leur accès est restreint.";
$pgv_lang["more_events_privacy"]        = "<br />d'autres évènements existent dans les #pgv_lang[global_num1]# prochains jours, mais leur accès est restreint.";
$pgv_lang["more_events_privacy1"]       = "<br />d'autres évènements existent pour demain, mais leur accès est restreint.";
$pgv_lang["none_today_living"]          = "Aucun évènement pour une personne vivante pour aujourd'hui.";
$pgv_lang["none_today_all"]             = "Aucun évènement pour aujourd'hui.";
$pgv_lang["none_today_privacy"]         = "Des évènements existent pour aujourd'hui, mais leur accès est restreint.";
$pgv_lang["more_today_privacy"]         = "<br />d'autres évènements existent pour aujourd'hui, mais leur accès est restreint.";
$pgv_lang["chat"]                       = "Discussion";
$pgv_lang["users_logged_in"]            = "Utilisateurs connectés";
$pgv_lang["anon_user"]                  = "1 utilisateur anonyme connecté";
$pgv_lang["anon_users"]                 = "#pgv_lang[global_num1]# utilisateurs anonymes connectés";
$pgv_lang["login_user"]                 = "1 utilisateur connecté";
$pgv_lang["login_users"]                = "#pgv_lang[global_num1]# utilisateurs connectés";
$pgv_lang["no_login_users"]             = "Aucun utilisateur connecté";
$pgv_lang["message"]                    = "Envoi de message";
$pgv_lang["my_messages"]                = "Mes messages";
$pgv_lang["date_created"]               = "Date d'envoi";
$pgv_lang["message_from"]               = "Adresse courriel";
$pgv_lang["message_from_name"]          = "Votre nom";
$pgv_lang["message_to"]                 = "Destinataire";
$pgv_lang["message_subject"]            = "Objet";
$pgv_lang["message_body"]               = "Texte";
$pgv_lang["no_to_user"]                 = "Pas de destinataire. Impossible de continuer.";
$pgv_lang["provide_email"]              = "Merci d'indiquer votre adresse courriel.<br />Sans cette adresse, nous ne pourrons pas vous répondre.<br />Votre adresse ne sera utilisée que pour faire cette réponse.";
$pgv_lang["reply"]                      = "Réponse";
$pgv_lang["message_deleted"]            = "Message supprimé";
$pgv_lang["message_sent"]               = "Message envoyé";
$pgv_lang["reset"]                      = "Restaurer";
$pgv_lang["site_default"]               = "Par défaut pour le site";
$pgv_lang["mygedview_desc"]             = "Pour organiser vos favoris, suivre les anniversaires, échanger avec les autres utilisateurs...";
$pgv_lang["no_messages"]                = "Vous n'avez pas de messages en attente.";
$pgv_lang["clicking_ok"]                = "En cliquant sur OK, vous ouvrirez une autre fenêtre où vous pourrez contacter #user[fullname]#";
$pgv_lang["my_favorites"]               = "Mes favoris";
$pgv_lang["no_favorites"]               = "Vous n'avez pas sélectionné de favoris. Pour ajouter un individu à vos favoris, lancez une recherche et cliquez sur <b>Ajouter</b> ou utilisez la case ci-dessous pour coder une clé individu.";
$pgv_lang["add_to_my_favorites"]        = "Ajouter à mes favoris";
$pgv_lang["gedcom_favorites"]           = "Favoris";
$pgv_lang["no_gedcom_favorites"]        = "L'administrateur n'a sélectionné aucun favori.";
$pgv_lang["confirm_fav_remove"]         = "Confirmez-vous la suppression de ce favori ?";
$pgv_lang["invalid_email"]              = "Merci de fournir une adresse courriel valide.";
$pgv_lang["enter_subject"]              = "Merci d'entrer l'objet du message.";
$pgv_lang["enter_body"]                 = "Merci d'entrer un texte de message avant de faire l'envoi.";
$pgv_lang["confirm_message_delete"]     = "Confirmez-vous la suppression de ce message ? Toute suppression est définitive.";
$pgv_lang["message_email1"]             = "Le message suivant vous a ete envoye par ";
$pgv_lang["message_email2"]             = "Vous avez envoye le message suivant a l'utilisateur PhpGedView ";
$pgv_lang["message_email3"]             = "Vous avez envoye le message suivant a l'administrateur PhpGedView ";
$pgv_lang["viewing_url"]                = "Ce message a ete envoye depuis l'URL ";
$pgv_lang["messaging2_help"]            = "Lorsque vous envoyez un message, une copie vous est automatiquement adressee.";
$pgv_lang["random_picture"]             = "Une image au hasard";
$pgv_lang["message_instructions"]       = "<b>Respect de la vie privée :</b> Les informations sur une personne vivante ne seront envoyées qu'aux proches pouvant justifier d'un lien de parenté. <br /><br />Si vous proposez un ajout ou une correction, merci d'indiquer les sources de vos informations.<br /><br />";
$pgv_lang["sending_to"]                 = "Ce message va être envoyé à #TO_USER#";
$pgv_lang["preferred_lang"]             = "Cet utilisateur préfère recevoir les messages en #USERLANG#";
$pgv_lang["gedcom_created_using"]       = "Fichier GEDCOM créé avec <b>#SOFTWARE# #VERSION#</b>.";
$pgv_lang["gedcom_created_on"]          = "Fichier GEDCOM créé le <b>#DATE#</b>.";
$pgv_lang["gedcom_created_on2"]         = " le <b>#DATE#</b>";
$pgv_lang["gedcom_stats"]               = "Statistiques GEDCOM";
$pgv_lang["stat_individuals"]           = "Individus";
$pgv_lang["stat_families"]              = "Familles";
$pgv_lang["stat_sources"]               = "Sources";
$pgv_lang["stat_other"]                 = "Autres enregistrements";
$pgv_lang["stat_earliest_birth"]        = "Naissance la +ancienne";
$pgv_lang["stat_latest_birth"]          = "Naissance la +récente";
$pgv_lang["stat_earliest_death"]        = "Décès le +ancien";
$pgv_lang["stat_latest_death"]          = "Décès le +récent";
$pgv_lang["customize_page"]             = "Personnalisez votre page d'accueil";
$pgv_lang["customize_gedcom_page"]      = "Personnalisez cette page d'accueil GEDCOM";
$pgv_lang["upcoming_events_block"]      = "Bloc «Evènements à venir»";
$pgv_lang["upcoming_events_descr"]      = "Le bloc «Evènements à venir» affiche les anniversaires des 30 prochains jours.";
$pgv_lang["todays_events_block"]        = "Bloc «Ce jour-là»";
$pgv_lang["todays_events_descr"]        = "Le bloc «Ce jour-là» affiche les anniversaires du jour. Les utilisateurs identifiés voient les anniversaires des personnes vivantes.";
$pgv_lang["logged_in_users_block"]      = "Bloc «Utilisateurs connectés»";
$pgv_lang["logged_in_users_descr"]      = "Le bloc «Utilisateurs connectés» affiche les comptes des utilisateurs actuellement connectés à cette base.";
$pgv_lang["user_messages_block"]        = "Bloc «Mes messages»";
$pgv_lang["user_messages_descr"]        = "Le bloc «Mes messages» affiche les messages reçus par l'utilisateur connecté.";
$pgv_lang["user_favorites_block"]       = "Bloc «Mes favoris»";
$pgv_lang["user_favorites_descr"]       = "Le bloc «Mes favoris» affiche les liens mémorisés par l'utilisateur.";
$pgv_lang["welcome_block"]              = "Bloc «Bienvenue»";
$pgv_lang["welcome_descr"]              = "Le bloc «Bienvenue» affiche la date, l'heure, et un accès rapide aux principales informations.";
$pgv_lang["random_media_block"]         = "Bloc «Une image au hasard»";
$pgv_lang["random_media_descr"]         = "Le bloc «Une image au hasard» affiche un lien au hasard vers un objet MultiMedia de la base.";
$pgv_lang["random_media_persons_or_all"]= "Montrer seulement les personnes, les évènements, ou tout ?";
$pgv_lang["random_media_persons"]       = "Personnes";
$pgv_lang["random_media_events"]        = "Evènements";
$pgv_lang["gedcom_block"]               = "Bloc «Accueil GEDCOM»";
$pgv_lang["gedcom_descr"]               = "Le bloc «Accueil GEDCOM» est similaire au bloc «Bienvenue».";
$pgv_lang["gedcom_favorites_block"]     = "Bloc «Favoris GEDCOM»";
$pgv_lang["gedcom_favorites_descr"]     = "Le bloc «Favoris GEDCOM» affiche les liens mémorisés par l'administrateur.";
$pgv_lang["gedcom_stats_block"]         = "Bloc «Statistiques GEDCOM»";
$pgv_lang["gedcom_stats_descr"]         = "Le bloc «Statistiques GEDCOM» affiche quelques informations générales sur la base : date de création, nombre d'individus...";
$pgv_lang["gedcom_stats_show_surnames"] = "Montrer les noms les plus fréquents ?";
$pgv_lang["portal_config_intructions"]  = "Depuis cette page vous pouvez personnaliser votre portail «Mon GedView» en arrangeant les blocs à votre convenance. Le portail est découpé en deux sections, la section Principale et la section de Droite. La section Principale est plus large et s'affiche sous le titre. La section de Droite s'affiche sur le côté droit de la page. Chaque section possède sa propre liste de blocs. Vous pouvez ajouter, supprimer et réordonner les blocs selon votre goût.";
$pgv_lang["login_block"]                = "Bloc «Login»";
$pgv_lang["login_descr"]                = "Le bloc «Login» permet de se connecter en saisissant son identificateur et son mot de passe.";
$pgv_lang["theme_select_block"]         = "Bloc «Changer de thème»";
$pgv_lang["theme_select_descr"]         = "Le bloc «Changer de thème» affiche le sélecteur de thème même si le changement de thème est désactivé.";
$pgv_lang["block_top10_title"]          = "Noms les plus fréquents";
$pgv_lang["block_top10"]                = "Bloc «Top 10»";
$pgv_lang["block_top10_descr"]          = "Le bloc «Top 10» affiche les 10 noms les plus fréquents.";

$pgv_lang["gedcom_news_block"]          = "Bloc «Nouvelles GEDCOM»";
$pgv_lang["gedcom_news_descr"]          = "Le bloc «Nouvelles GEDCOM» affiche les nouvelles envoyées par l'administrateur.";
$pgv_lang["gedcom_news_limit"]          = "Limite d'affichage:";
$pgv_lang["gedcom_news_limit_nolimit"]  = "Pas de limite";
$pgv_lang["gedcom_news_limit_date"]     = "Age de l'article";
$pgv_lang["gedcom_news_limit_count"]    = "Nombre d'articles";
$pgv_lang["gedcom_news_flag"]           = "Limite:";
$pgv_lang["gedcom_news_archive"]        = "Voir archives";
$pgv_lang["user_news_block"]            = "Bloc «Mon journal»";
$pgv_lang["user_news_descr"]            = "Le bloc «Mon journal» permet à l'utilisateur de conserver des notes personnelles en ligne.";
$pgv_lang["my_journal"]                 = "Mon Journal";
$pgv_lang["no_journal"]                 = "Journal vide.";
$pgv_lang["confirm_journal_delete"]     = "Confirmez-vous la suppression de cet élément du journal ?";
$pgv_lang["add_journal"]                = "Ajouter un élément au journal";
$pgv_lang["gedcom_news"]                = "Nouvelles";
$pgv_lang["confirm_news_delete"]        = "Confirmez-vous la suppression de cette nouvelle ?";
$pgv_lang["add_news"]                   = "Ajouter une nouvelle";
$pgv_lang["no_news"]                    = "Aucune nouvelle.";
$pgv_lang["edit_news"]                  = "Editer un élément";
$pgv_lang["enter_title"]                = "Entrer un titre.";
$pgv_lang["enter_text"]                 = "Entrer un texte.";
$pgv_lang["news_saved"]                 = "Elément sauvegardé.";
$pgv_lang["article_text"]               = "Texte";
$pgv_lang["main_section"]               = "Blocs de la section principale";
$pgv_lang["right_section"]              = "Blocs de la section de droite";
$pgv_lang["available_blocks"]           = "Blocs disponibles";
$pgv_lang["move_up"]                    = "Monter";
$pgv_lang["move_down"]                  = "Descendre";
$pgv_lang["move_right"]                 = "Déplacer à droite";
$pgv_lang["move_left"]                  = "Déplacer à gauche";
$pgv_lang["broadcast_all"]              = "Envoyer un message à tous les utilisateurs";
$pgv_lang["hit_count"]                  = "Compteur";
$pgv_lang["phpgedview_message"]         = "Message PhpGedView";
$pgv_lang["common_surnames"]            = "Principaux noms de familles";
$pgv_lang["default_news_title"]         = "Bienvenue";
$pgv_lang["default_news_text"]          = "Ce site utilise l'outil de généalogie <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView #VERSION#</a>.<br /><br />Pour démarrer, faîtes un choix dans le menu <b>Diagrammes</b> ou dans le menu <b>Listes</b>.<br /><br />En cas de difficultés, reportez-vous au menu <b>Aide</b>.<br /><br />Merci de votre visite.";
$pgv_lang["reset_default_blocks"]       = "Retour aux blocs par défaut";
$pgv_lang["recent_changes"]             = "Modifications récentes";
$pgv_lang["recent_changes_block"]       = "Bloc «Modifications récentes»";
$pgv_lang["recent_changes_descr"]       = "Le bloc «Modifications récentes» affiche toutes les modifications de la base GEDCOM sur les 30 derniers jours. Il vous aidera à suivre les changements réalisés (marqueur 'CHAN').";
$pgv_lang["recent_changes_none"]        = "<b>Aucune modification enregistrée ces #pgv_lang[global_num1]# derniers jours.</b><br />";
$pgv_lang["recent_changes_some"]        = "<b>Modifications enregistrées ces #pgv_lang[global_num1]# derniers jours</b><br />";
$pgv_lang["show_empty_block"]           = "Toujours afficher ce bloc même s'il est vide ?";
$pgv_lang["hide_block_warn"]            = "Si vous cachez un bloc vide, vous ne le pouvez configurer jusq'à ce qu'il est encore rendu visible à cause de ne pas être vide.";
$pgv_lang["delete_selected_messages"]   = "Supprimer les messages sélectionnés";
$pgv_lang["use_blocks_for_default"]     = "Utiliser ce bloc par défaut pour tous les utilisateurs ?";
$pgv_lang["block_not_configure"]        =	"Ce bloc ne peut pas être configuré.";

//-- validate GEDCOM
$pgv_lang["performing_validation"]      = "Validation du fichier GEDCOM";
$pgv_lang["changed_mac"]                = "Format fin de ligne Macintosh détecté. [CR] sera changé en [CR+LF].";
$pgv_lang["changed_places"]             = "Mauvais codage des noms de lieux. Ils doivent suivre la norme GEDCOM 5.5. Un exemple issu de votre fichier";
$pgv_lang["invalid_dates"]              = "Les dates de mauvais format seront transformés en JJ MMM AAAA (ie. 1 JAN 2004).";
$pgv_lang["valid_gedcom"]               = "Fichier GEDCOM correct.  Le nettoyage de la base n'est pas nécessaire.";
$pgv_lang["optional_tools"]             = "Vous pouvez lancer les utilitaires suivants avant d'importer le fichier.";
$pgv_lang["optional"]                   = "Utilitaires";
$pgv_lang["day_before_month"]           = "Jour Mois Année (JJ MM AAAA)";
$pgv_lang["month_before_day"]           = "Mois Jour Année (MM JJ AAAA)";
$pgv_lang["do_not_change"]              = "Ne pas modifier";
$pgv_lang["change_id"]                  = "Changer le code individu en";
$pgv_lang["example_place"]              = "Exemple de lieu incorrect dans votre GEDCOM";
$pgv_lang["example_date"]               = "Exemple de date incorrecte dans votre GEDCOM";
$pgv_lang["add_media_tool"]             = "Utilitaire «Ajout media»";
$pgv_lang["launch_media_tool"]          = "Lancement de l'utilitaire «Ajout media»";
$pgv_lang["add_media_descr"]            = "Cet utilitaire va ajouter le media OBJE au fichier GEDCOM.  Fermer cette fenêtre après l'opération.";
$pgv_lang["highlighted"]                = "Surbrillance";
$pgv_lang["extension"]                  = "Extension";
$pgv_lang["order"]                      = "Ordre";
$pgv_lang["inject_media_tool"]          = "Ajouter un objet MultiMedia au fichier GEDCOM";
$pgv_lang["media_table_created"]        = "Table <i>media</i> mise à jour.";
$pgv_lang["click_to_add_media"]         = "Ajouter les objets MultiMedia suivants au fichier GEDCOM #GEDCOM#";
$pgv_lang["adds_completed"]             = "Objet MultiMedia ajouté au fichier GEDCOM.";
$pgv_lang["ansi_encoding_detected"]     = "Ce fichier est au format ANSI. PhpGedView recommande le format UTF-8.";
$pgv_lang["invalid_header"]             = "Lignes trouvées avant le premier marqueur GEDCOM (0 HEAD). Au chargement, elles seront supprimées.";
$pgv_lang["macfile_detected"]           = "Fichier au format Macintosh. Au chargement, il sera converti au format DOS.";
$pgv_lang["place_cleanup_detected"]     = "Anomalie sur le format des lieux. Ces erreurs doivent être corrigées avant de continuer. En voici quelques exemples : ";
$pgv_lang["cleanup_places"]             = "Chargement des lieux";
$pgv_lang["empty_lines_detected"]       = "Lignes vides trouvées dans le fichier GEDCOM. Au chargement, elles seront supprimées.";
$pgv_lang["import_options"]             = "Options d'importation";
$pgv_lang["import_options_help"]        = "Vous pouvez sélectionner des options additionelles pour l'importation de ce fichier GEDCOM.";
$pgv_lang["verify_gedcom"]              = "Validation du fichier GEDCOM";
$pgv_lang["verify_gedcom_help"]         = "Vous pouvez continuer le téléchargement et importation de ce fichier GEDCOM ou les annuler.";
$pgv_lang["import_statistics"]          = "Statistiques d'importation";
//-- hourglass chart
$pgv_lang["hourglass_chart"]            = "Sablier";

//-- report engine
$pgv_lang["choose_report"]              = "Choisir un rapport";
$pgv_lang["enter_report_values"]        = "Entrer les paramètres du rapport";
$pgv_lang["selected_report"]            = "Rapport sélectionné";
$pgv_lang["run_report"]                 = "Afficher le rapport";
$pgv_lang["select_report"]              = "Selectionner";
$pgv_lang["download_report"]            = "Enregistrer le rapport";
$pgv_lang["reports"]                    = "Rapports";
$pgv_lang["pdf_reports"]                = "Rapports format PDF";
$pgv_lang["html_reports"]               = "Rapports format HTML";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]          = "Liste par générations";
$pgv_lang["ahnentafel_header"]          = "'Ahnentafel' : liste par générations pour ";
$pgv_lang["ahnentafel_generation"]      = "Génération n° ";
$pgv_lang["ahnentafel_pronoun_m"]       = "Il ";
$pgv_lang["ahnentafel_pronoun_f"]       = "Elle ";
$pgv_lang["ahnentafel_born_m"]          = "est né";			// male
$pgv_lang["ahnentafel_born_f"]          = "est née";			// female
$pgv_lang["ahnentafel_christened_m"]    = "a été baptisé";	// male
$pgv_lang["ahnentafel_christened_f"]    = "a été baptisée";	// female
$pgv_lang["ahnentafel_married_m"]       = "a épousé";			// male
$pgv_lang["ahnentafel_married_f"]       = "a épousé";			// female
$pgv_lang["ahnentafel_died_m"]          = "est décédé";				// male
$pgv_lang["ahnentafel_died_f"]          = "est décédée";				// female
$pgv_lang["ahnentafel_buried_m"]        = "a été enterré";			// male
$pgv_lang["ahnentafel_buried_f"]        = "a été enterrée";			// female
$pgv_lang["ahnentafel_place"]           = ", ";				// place name follows this
$pgv_lang["ahnentafel_no_details"]      = " les détails sont inconnus";

$pgv_lang["family_group_report"]        = "Famille";
$pgv_lang["page"]                       = "Page";
$pgv_lang["of"]                         = "de";
$pgv_lang["enter_famid"]                = "Code famille";
$pgv_lang["show_sources"]               = "Montrer les sources ?";
$pgv_lang["show_notes"]                 = "Montrer les notes ?";
$pgv_lang["show_basic"]                 = "Montrer les principaux<br />évènements même vides ?";
$pgv_lang["show_photos"]                = "Montrer les photos ?";
$pgv_lang["relatives_report_ext"]       = "Parenté élargie";
$pgv_lang["with"]                       = "avec";
$pgv_lang["on"]                         = "le";			// for precise dates
$pgv_lang["in"]                         = "en";			// for imprecise dates
$pgv_lang["individual_report"]          = "Individu";
$pgv_lang["enter_pid"]                  = "Code individu";
$pgv_lang["individual_list_report"]     = "Liste individus";
$pgv_lang["generated_by"]               = "Généré par";
$pgv_lang["list_children"]              = "Liste des enfants par ordre de naissance.";
$pgv_lang["birth_report"]               = "Naissances par lieu";
$pgv_lang["birthplace"]                 = "Le lieu commence par";
$pgv_lang["birthdate1"]                 = "Date de naissance mini";
$pgv_lang["birthdate2"]                 = "Date de naissance maxi";
$pgv_lang["death_report"]               = "Décès par lieu";
$pgv_lang["deathplace"]                 = "Le lieu commence par";
$pgv_lang["deathdate1"]                 = "Date de décès mini";
$pgv_lang["deathdate2"]                 = "Date de décès maxi";
$pgv_lang["marr_report"]                = "Mariages par lieu";
$pgv_lang["marrplace"]                  = "Le lieu commence par";
$pgv_lang["marrdate1"]                  = "Date de mariage mini";
$pgv_lang["marrdate2"]                  = "Date de mariage maxi";
$pgv_lang["sort_by"]                    = "Tri par";

$pgv_lang["cleanup"]                    = "Continuer";
$pgv_lang["skip_cleanup"]               = "Ignorer";

//-- CONFIGURE (extra) messages for programs patriarch, slklist and statistics
$pgv_lang["dynasty_list"]               = "Panorama des familles";
$pgv_lang["make_slklist"]               = "Extraire au format EXCEL (.slk)";
$pgv_lang["excel_list"]                 = "Sortie au format EXCEL (.slk) dans les fichiers suivants :";
$pgv_lang["excel_tab"]                  = "onglet :";
$pgv_lang["excel_create"]               = " sera généré dans le fichier :";
$pgv_lang["patriarch_list"]             = "Liste des patriarches";
$pgv_lang["slk_list"]                   = "Liste des fichiers EXCEL (.slk)";
$pgv_lang["statistics"]                 = "Statistiques";

//-- Merge Records
$pgv_lang["merge_records"]              = "Fusionner les enregistrements";
$pgv_lang["merge_same"]                 = "Impossible de fusionner les enregistrements : ils ne sont pas du même type.";
$pgv_lang["merge_step1"]                = "Fusion : étape 1/3";
$pgv_lang["merge_step2"]                = "Fusion : étape 2/3";
$pgv_lang["merge_step3"]                = "Fusion : étape 3/3";
$pgv_lang["select_gedcom_records"]      = "Selectionner les 2 enregistrements GEDCOM à fusionner. Ils doivent être du même type.";
$pgv_lang["merge_to"]                   = "Fusion vers :";
$pgv_lang["merge_from"]                 = "Fusion de :";
$pgv_lang["merge_facts_same"]           = "Les champs suivants sont identiques dans les 2 enregistrements et seront fusionnés automatiquement";
$pgv_lang["no_matches_found"]           = "Aucun champ correspondant";
$pgv_lang["unmatching_facts"]           = "Les champs suivants sont différents. Sélectionner la valeur à conserver.";
$pgv_lang["record"]                     = "Enregistrement";
$pgv_lang["adding"]                     = "Ajout";
$pgv_lang["updating_linked"]            = "Mise à jour de l'enregistrement lié";
$pgv_lang["merge_more"]                 = "Fusionner d'autres enregistrements.";
$pgv_lang["same_ids"]                   = "Entrer des clés différentes.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]             = "Tableau d'ascendance";
$pgv_lang["gen_ancestry_chart"]         = "Ascendance sur #PEDIGREE_GENERATIONS# générations";
$pgv_lang["chart_style"]                = "Style de présentation";
$pgv_lang["chart_list"]                 = "Liste";
$pgv_lang["chart_booklet"]              = "Livret";
$pgv_lang["show_cousins"]               = "Afficher les cousins";
// 1st generation
$pgv_lang["sosa_2"]                     = "Père";
$pgv_lang["sosa_3"]                     = "Mère";
// 2nd generation
$pgv_lang["sosa_4"]                     = "Grand-père paternel";
$pgv_lang["sosa_5"]                     = "Grand-mère paternelle";
$pgv_lang["sosa_6"]                     = "Grand-père maternel";
$pgv_lang["sosa_7"]                     = "Grand-mère maternelle";
// 3rd generation
$pgv_lang["sosa_8"]                     = "Arrière-grand-père";
$pgv_lang["sosa_9"]                     = "Arrière-grand-mère";
$pgv_lang["sosa_10"]                    = "Arrière-grand-père";
$pgv_lang["sosa_11"]                    = "Arrière-grand-mère";
$pgv_lang["sosa_12"]                    = "Arrière-grand-père";
$pgv_lang["sosa_13"]                    = "Arrière-grand-mère";
$pgv_lang["sosa_14"]                    = "Arrière-grand-père";
$pgv_lang["sosa_15"]                    = "Arrière-grand-mère";
// 4th generation
$pgv_lang["sosa_16"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_17"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_18"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_19"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_20"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_21"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_22"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_23"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_24"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_25"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_26"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_27"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_28"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_29"]                    = "Arrière-arrière-grand-mère";
$pgv_lang["sosa_30"]                    = "Arrière-arrière-grand-père";
$pgv_lang["sosa_31"]                    = "Arrière-arrière-grand-mère";
// 5th generation
$pgv_lang["sosa_32"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_33"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_34"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_35"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_36"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_37"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_38"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_39"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_40"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_41"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_42"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_43"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_44"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_45"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_46"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_47"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_48"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_49"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_50"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_51"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_52"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_53"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_54"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_55"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_56"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_57"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_58"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_59"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_60"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_61"]                    = "Arrière-arrière-arrière-grand-mère";
$pgv_lang["sosa_62"]                    = "Arrière-arrière-arrière-grand-père";
$pgv_lang["sosa_63"]                    = "Arrière-arrière-arrière-grand-mère";

//-- FAN CHART
$pgv_lang["compact_chart"]              = "Arbre compact";
$pgv_lang["fan_chart"]                  = "Roue";
$pgv_lang["gen_fan_chart"]              = "Roue sur #PEDIGREE_GENERATIONS# générations";
$pgv_lang["fan_width"]                  = "Taille de la roue";
$pgv_lang["gd_library"]                 = "Problème de configuration du serveur PHP : la librairie graphique GD 2.x est nécessaire pour utiliser les fonctions Image.";
$pgv_lang["gd_freetype"]                = "Problème de configuration du serveur PHP : la librairie FreeType est nécessaire pour utiliser les fontes 'TrueType'.";
$pgv_lang["gd_helplink"]                = "http://fr.php.net/gd";
$pgv_lang["fontfile_error"]             = "Fichier de fonte absent du serveur PHP";
$pgv_lang["fanchart_IE"]                = "Cette image ne peut pas être imprimée directement par votre navigateur. Enregistrez-la sur votre disque local : clic-droit «Enregistrer l'image sous...» pour l'imprimer.";

//-- RSS Feed
$pgv_lang["rss_descr"]                  = "Nouvelles et liens du site #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]             = "Créé par PhpGedView";
$pgv_lang["rss_feeds"]                  = "Flux RSS";
$pgv_lang["no_feed_title"]              = "Flux non disponible";
$pgv_lang["no_feed"]                    = "Aucun flux RSS trouvé pour ce site PhpGedView";
#pgv_lang["feed_login"]                 = "If you have an account at this PhpGedView site, you can <a href=\"#AUTH_URL#\">log in</a> to the server using Basic HTTP Authentication to view private information.";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"]                  = "Préposé";
$pgv_lang["attending"]                  = "Présent";
$pgv_lang["best_man"]                   = "Garçon d'honneur";
$pgv_lang["bridesmaid"]                 = "Demoiselle d'honneur";
$pgv_lang["buyer"]                      = "Acheteur";
$pgv_lang["circumciser"]                = "Circonciseur";
$pgv_lang["civil_registrar"]            = "Officier de l'Etat-Civil";
$pgv_lang["friend"]                     = "Ami(e)";
$pgv_lang["godfather"]                  = "Parrain";
$pgv_lang["godmother"]                  = "Marraine";
$pgv_lang["godparent"]                  = "Parrain/marraine";
$pgv_lang["informant"]                  = "Déclarant";
$pgv_lang["lodger"]                     = "Locataire";
$pgv_lang["nurse"]                      = "Nourrice";
$pgv_lang["priest"]                     = "Prêtre";
$pgv_lang["rabbi"]                      = "Rabbin";
$pgv_lang["registry_officer"]           = "Greffier";
$pgv_lang["seller"]                     = "Vendeur";
$pgv_lang["servant"]                    = "Serviteur";
$pgv_lang["twin"]                       = "Jumeau/jumelle";
$pgv_lang["twin_brother"]               = "Frère jumeau";
$pgv_lang["twin_sister"]                = "Sœur jumelle";
$pgv_lang["witness"]                    = "Témoin";

//-- statistics utility
#pgv_lang["statutci"]                   = "unable to create index";
#pgv_lang["statnnames"]                 = "number of names    =";
#pgv_lang["statnfam"]                   = "number of families =";
#pgv_lang["statnmale"]                  = "number of males    =";
#pgv_lang["statnfemale"]                = "number of females  =";
#pgv_lang["statvars"]                   = "Fill in the following variables for the plot";
#pgv_lang["statlxa"]                    = "along x-axis:";
#pgv_lang["statlya"]                    = "along y-axis:";
#pgv_lang["statlza"]                    = "along z-axis";
#pgv_lang["stat_10_none"]               = "none";
#pgv_lang["stat_11_mb"]                 = "Month of birth";
#pgv_lang["stat_12_md"]                 = "Month of death";
#pgv_lang["stat_13_mm"]                 = "Month of marriage";
#pgv_lang["stat_14_mb1"]                = "Month of birth of first child in a relation";
#pgv_lang["stat_15_mm1"]                = "Month of first marriage";
#pgv_lang["stat_16_mmb"]                = "Month between marriage and first child.";
#pgv_lang["stat_17_arb"]                = "age related to birth year.";
#pgv_lang["stat_18_ard"]                = "age related to death year.";
#pgv_lang["stat_19_arm"]                = "age in year of marriage.";
#pgv_lang["stat_20_arm1"]               = "age in year of first marriage.";
#pgv_lang["stat_21_nok"]                = "number of children.";
#pgv_lang["stat_gmx"]                   = " check tickvalues for month";
#pgv_lang["stat_gax"]                   = " check tickvalues for ages";
#pgv_lang["stat_gnx"]                   = " check tickvalues for numbers";
#pgv_lang["stat_200_none"]              = "all (or blank)";
#pgv_lang["stat_201_num"]               = "numbers";
#pgv_lang["stat_202_perc"]              = "percentage";
#pgv_lang["stat_300_none"]              = "none";
#pgv_lang["stat_301_mf"]                = "male/female";
#pgv_lang["stat_302_cgp"]               = "periods. Check tickvalues for periods z-axis";
#pgv_lang["statmess1"]                  = "<b>Just fill in next rows related to earlier settings on x-axis or z-axis</b>";
#pgv_lang["statar_xgp"]                 = "tickvalues for periods (x-axis):";
#pgv_lang["statar_xgl"]                 = "tickvalues for ages    (x-axis):";
#pgv_lang["statar_xgm"]                 = "tickvalues for month   (x-axis):";
#pgv_lang["statar_xga"]                 = "tickvalues for numbers (x-axis):";
#pgv_lang["statar_zgp"]                 = "tickvalues for periods (z-axis):";
#pgv_lang["statreset"]                  = "reset";
#pgv_lang["statsubmit"]                 = "show the plot";

//-- statisticsplot utility
#pgv_lang["stpl"]                       = "...";
#pgv_lang["stplGDno"]                   = "Graphics Display Library is not available in PHP 4. Please contact your system administrator";
#pgv_lang["stpljpgraphno"]              = "JPgraph modules are not available in directory <i>phpgedview/jpgraph/</i> . Please get them from http://www.aditus.nu/jpgraph/jpdownload.php<br> <h3>First install JPgraph in directory <i>phpgedview/jpgraph/</i></h3><br>";
#pgv_lang["stplinfo"]                   = "plotting information:";
#pgv_lang["stpltype"]                   = "type:";
#pgv_lang["stplnoim"]                   = " not implemented:";
#pgv_lang["stplmf"]                     = " / man-woman";
#pgv_lang["stplipot"]                   = " / per timeperiod";
#pgv_lang["stplgzas"]                   = "borders z-axis:";
#pgv_lang["stplmonth"]                  = "month";
#pgv_lang["stplnumbers"]                = "numbers for a family";
#pgv_lang["stplage"]                    = "age";
#pgv_lang["stplperc"]                   = "percentage";

//-- alive in year
$pgv_lang["alive_in_year"]              = "Liste des individus/année";
$pgv_lang["is_alive_in"]                = "Ont vécu en l'an ";
$pgv_lang["alive"]                      = "Vivant ";
$pgv_lang["dead"]                       = "Décédé ";
$pgv_lang["maybe"]                      = "A vérifier ";

//-- Help system
$pgv_lang["definitions"]                = "Définitions";

//-- Index_edit
$pgv_lang["description"]                = "Description";
$pgv_lang["block_desc"]                 = "Description du bloc";
$pgv_lang["click_here"]                 = "Continuer";
$pgv_lang["click_here_help"]            = "~#pgv_lang[click_here]#~<br /><br />Cliquez sur ce bouton pour conserver vos changements.<br /><br />On vous mène à la page #pgv_lang[welcome]# ou #pgv_lang[mygedview]#, mais il se peut que vos changements ne vous sont pas montrés.  Dans ce cas, utilisez la fonction «Rafraichir page» de votre viseur.";
$pgv_lang["block_summaries"]            = "~#pgv_lang[block_desc]#~<br /><br />Voici une brève description de chacun des blocs qui vous pouvez placer sur les pages #pgv_lang[welcome]# ou #pgv_lang[mygedview]#.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]        = "&nbsp;";

//-- Find page
$pgv_lang["total_places"]               = "Lieux trouvés";
$pgv_lang["media_contains"]             = "Objet MultiMedia:";
$pgv_lang["repo_contains"]              = "Dépôt d'archives:";
$pgv_lang["source_contains"]            = "Source:";
$pgv_lang["display_all"]                = "Afficher tout";

//-- accesskey navigation
$pgv_lang["accesskeys"]                 = "Raccourcis clavier";
#pgv_lang["accesskey_skip_to_content"]  = "C";
#pgv_lang["accesskey_search"]           = "S";
$pgv_lang["accesskey_skip_to_content_desc"]= "Contenu";
#pgv_lang["accesskey_viewing_advice"]   = "0";
$pgv_lang["accesskey_viewing_advice_desc"]= "Astuces";
#pgv_lang["accesskey_home_page"]        = "1";
#pgv_lang["accesskey_help_content"]     = "2";
#pgv_lang["accesskey_help_current_page"]= "3";
#pgv_lang["accesskey_contact"]          = "4";

#pgv_lang["accesskey_individual_details"]= "I";
#pgv_lang["accesskey_individual_relatives"]= "R";
#pgv_lang["accesskey_individual_notes"] = "N";
#pgv_lang["accesskey_individual_sources"]= "O";
//clash with IE addBookmark but not a likely problem
#pgv_lang["accesskey_individual_media"] = "A";
#pgv_lang["accesskey_individual_research_log"]= "L";
#pgv_lang["accesskey_individual_pedigree"]= "P";
#pgv_lang["accesskey_individual_descendancy"]= "D";
#pgv_lang["accesskey_individual_timeline"]= "T";
#pgv_lang["accesskey_individual_relation_to_me"]= "M";
//clash with rarely used English Netscape/Mozilla Go menu
#pgv_lang["accesskey_individual_gedcom"]= "G";

#pgv_lang["accesskey_family_parents_timeline"]= "P";
#pgv_lang["accesskey_family_children_timeline"]= "D";
#pgv_lang["accesskey_family_timeline"]  = "T";
//clash with rarely used English Netscape/Mozilla English Go menu
#pgv_lang["accesskey_family_gedcom"]    = "G";

// FAQ Page
$pgv_lang["add_faq_header"]             = "En-tête FAQ";
$pgv_lang["add_faq_body"]               = "Corps FAQ";
$pgv_lang["add_faq_order"]              = "Position FAQ";
$pgv_lang["no_faq_items"]               = "FAQ vide.";
$pgv_lang["position_item"]              = "Item no";
$pgv_lang["faq_list"]                   = "Liste FAQ";
$pgv_lang["confirm_faq_delete"]         = "Confirmez-vous la suppression de cette information";
$pgv_lang["preview"]                    = "Prévisualier";
$pgv_lang["no_id"]                      = "Indiquez un no de FAQ!";

// Help search
$pgv_lang["hs_title"]                   = "Aide à la recherche";
$pgv_lang["hs_search"]                  = "Recherche";
$pgv_lang["hs_close"]                   = "Fermer la fenêtre";
$pgv_lang["hs_results"]                 = "Résultats :";
$pgv_lang["hs_keyword"]                 = "Rechercher";
$pgv_lang["hs_searchin"]                = "Rechercher dans";
$pgv_lang["hs_searchuser"]              = "Aide utilisateur";
$pgv_lang["hs_searchconfig"]            = "Aide administrateur";
$pgv_lang["hs_searchhow"]               = "Type de recherche";
$pgv_lang["hs_searchall"]               = "Tous les mots";
$pgv_lang["hs_searchany"]               = "Au moins un mot";
$pgv_lang["hs_searchsentence"]          = "Phrase exacte";
$pgv_lang["hs_intruehelp"]              = "Texte d'aide seulement";
$pgv_lang["hs_inallhelp"]               = "Tout le texte";

// Media import
$pgv_lang["media_import"]               = "Import d'objets MultiMedia";
$pgv_lang["confirm_folder_delete"]      = "Confirmez-vous la suppression de ce dossier ?";
$pgv_lang["choose"]                     = "Choisir : ";
$pgv_lang["account_information"]        = "Informations du compte";

//-- Media item "TYPE" sub-field
#pgv_lang["TYPE__audio"]                = "Audio";
$pgv_lang["TYPE__book"]                 = "Livre";
#pgv_lang["TYPE__card"]                 = "Card";
$pgv_lang["TYPE__certificate"]          = "Certificat";
#pgv_lang["TYPE__document"]             = "Document";
#pgv_lang["TYPE__electronic"]           = "Electronic";
#pgv_lang["TYPE__fiche"]                = "Microfiche";
#pgv_lang["TYPE__film"]                 = "Microfilm";
#pgv_lang["TYPE__magazine"]             = "Magazine";
$pgv_lang["TYPE__manuscript"]           = "Manuscrit";
#pgv_lang["TYPE__map"]                  = "Map";
$pgv_lang["TYPE__newspaper"]            = "Journal";
#pgv_lang["TYPE__photo"]                = "Photo";
$pgv_lang["TYPE__tombstone"]            = "Pierre tombale";
#pgv_lang["TYPE__video"]                = "Video";

?>