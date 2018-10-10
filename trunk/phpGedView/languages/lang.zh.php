<?php
/**
 * Chinese (Traditional) texts
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
 * @version $Id$
 * @translation mr_bobwang
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] = "？";
$pgv_lang["help_for_this_page"] = "幫助使用這頁";
$pgv_lang["hide_context_help"] = "隱藏幫助";
$pgv_lang["help_not_exist"] = "幫助文本, 爲這個頁或項目, 不是可利用的";
$pgv_lang["header"] = "標頭";
$pgv_lang["imageview"] = "圖像浏覽器";
$pgv_lang["login_head"] = "家譜用戶登錄";
$pgv_lang["menu"] = "菜單";
$pgv_lang["resolution"] = "屏幕分辨率";
$pgv_lang["sorry"] = "對不起, 我們未完成幫助文本爲這個頁面";
$pgv_lang["show_context_help"] = "顯示幫助";
$pgv_lang["help_contents"] = "幫助目錄";
$pgv_lang["page_help"] = "幫助";
//-- CONFIG FILE MESSAGES
$pgv_lang["error_title"] = "錯誤: 不能打開GEDCOM 文件";
$pgv_lang["for_support"] = "爲技術支持和資訊聯絡";
$pgv_lang["for_contact"] = "有關家譜問題的幫助，請聯系";
$pgv_lang["for_all_contact"] = "如果需要技術支持或其它問題，請聯系";
$pgv_lang["build_title"] = "索引文件已創建";
$pgv_lang["choose_username"] = "選擇用戶名";
$pgv_lang["choose_username"] = "用戶名";
$pgv_lang["build_error"] = "GEDCOM 文件已更新。";
$pgv_lang["choose_password"] = "選擇密碼";
$pgv_lang["lastname"] = "姓";
$pgv_lang["firstname"] = "名字";
$pgv_lang["please_wait"] = "請等待當索引文件必須被重建。";
$pgv_lang["choose_gedcom"] = "選擇GEDCOM 資料集";
$pgv_lang["username"] = "賬號名";
$pgv_lang["invalid_username"] = "用戶名有不允許的字";
$pgv_lang["fullname"] = "全名";
$pgv_lang["password"] = "密碼";
$pgv_lang["confirm"] = "確認密碼";
$pgv_lang["login"] = "登錄";
$pgv_lang["logout"] = "注銷";
$pgv_lang["admin"]			= "管理";
$pgv_lang["logged_in_as"]		= "登錄";
$pgv_lang["my_pedigree"]		= "我的家譜";
$pgv_lang["my_indi"]			= "我自己的信息";
$pgv_lang["yes"]			= "是";
$pgv_lang["no"]				= "不";
$pgv_lang["change_theme"]			= "改變背景主題";
//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]	= "家譜結構樹";
$pgv_lang["gen_ped_chart"]	= "#PEDIGREE_GENERATIONS# 生成家譜圖表";
$pgv_lang["generations"]	= "幾代人";
$pgv_lang["view"]		= "查看";
$pgv_lang["fam_spouse"]		= "家庭與配偶:";
$pgv_lang["root_person"]	= "根人員身份證:";
$pgv_lang["hide_details"]	= "隱藏詳細資料";
$pgv_lang["show_details"]	= "顯示詳細資料";
$pgv_lang["person_links"]	= "圖表的鏈接, 家庭, 並且這個人員的近親。";
$pgv_lang["zoom_box"]		= "迅速移動/在這個配件箱。";
$pgv_lang["orientation"]			= "方向";
$pgv_lang["portrait"]			= "豎向圖";
$pgv_lang["start_at_parents"]		= "從父母開始";
$pgv_lang["welcome_page"]		= "網站首頁";
$pgv_lang["lists"]			= "列表";
$pgv_lang["box_width"] 				= "框架寬度";
$pgv_lang["charts"]			= "譜系圖";
$pgv_lang["landscape"]			= "橫向圖";
//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "無法找到家庭";
$pgv_lang["unable_to_find_indi"]	= "無法找到單個";
$pgv_lang["unable_to_find_record"]	= "無法查找記錄";
$pgv_lang["unable_to_find_source"]	= "無法查找來源";
$pgv_lang["unable_to_find_repo"]	= "無法查找程式庫";
$pgv_lang["repo_name"]			= "程式庫名字:";
$pgv_lang["address"]			= "地址:";
$pgv_lang["phone"]			= "電話:";
$pgv_lang["source_name"]		= "來源名字:";
$pgv_lang["title"]			= "題目:";
$pgv_lang["author"]			= "作者:";
$pgv_lang["publication"]		= "發行:";
$pgv_lang["call_number"]		= "索書號:";
$pgv_lang["living"]			= "居住";
$pgv_lang["private"]			= "個人隱私";
$pgv_lang["birth"]			= "生日：";
$pgv_lang["death"]			= "去世:";
$pgv_lang["descend_chart"]		= "兒女圖表";
$pgv_lang["individual_list"]		= "個人列表";
$pgv_lang["family_list"]		= "家庭列表";
$pgv_lang["source_list"]		= "來源列表";
$pgv_lang["place_list"]			= "地方列表";
$pgv_lang["media_list"]			= "多媒體列表";
$pgv_lang["search"]			= "搜索";
$pgv_lang["clippings_cart"]		= "收集箱功能";
$pgv_lang["not_an_array"]		= "不是列陣";
$pgv_lang["print_preview"]		= "打印預覽";
$pgv_lang["cancel_preview"] 		= "回到正常模式";
$pgv_lang["change_lang"]		= "更改語言";
$pgv_lang["print"]			= "打印";
$pgv_lang["total_queries"]		= "總資料庫查詢: ";
$pgv_lang["total_privacy_checks"]	= "總共隱私檢查：";
$pgv_lang["back"]			= "返回";
$pgv_lang["aka"]					= "其它名";
//-- INDIVUDUAL FILE MESSAGES
$pgv_lang["male"]			= "男性";
$pgv_lang["female"]			= "女性";
$pgv_lang["temple"]			= "LDS 寺廟";
$pgv_lang["temple_code"]		= "LDS 寺廟編碼:";
$pgv_lang["status"]			= "狀態";
$pgv_lang["source"]			= "來源";
$pgv_lang["citation"]			= "引證:";
$pgv_lang["text"]			= "源文本:";
$pgv_lang["note"]			= "注";
$pgv_lang["NN"] 					= "(未知)";
$pgv_lang["PN"] 					= "(未知)";

$pgv_lang["unrecognized_code"]		= "未被認出的GEDCOM 編碼";
$pgv_lang["indi_info"]			= "個人資料";
$pgv_lang["pedigree_chart"]		= "家譜圖表";
$pgv_lang["individual"]				= "個人";
$pgv_lang["desc_chart2"]		= "後代圖表";
$pgv_lang["as_spouse"]			= "家庭與配偶";
$pgv_lang["as_child"]			= "這個人的家庭";
$pgv_lang["source_menu"]			= "來源的設置";
$pgv_lang["view_gedcom"]		= "看家譜的紀錄";
$pgv_lang["add_to_cart"]		= "加入到圖片收集";
$pgv_lang["still_living_error"]		= "這個人員居住或仍然不安排誕生或去世日期被記錄。  生存人員所有詳細資料被隱藏從公共視圖。<br />爲更多資訊聯絡";
$pgv_lang["privacy_error"]		= "詳細資料在這個人員專用。<br />";
$pgv_lang["more_information"]		= "如果需要更多的信息請聯系";
$pgv_lang["name"]			= "名字:";
$pgv_lang["given_name"]			= "指定的名字:";
$pgv_lang["surname"]			= "姓氏:";
$pgv_lang["suffix"]			= "後綴:";
$pgv_lang["object_note"]		= "對象附注:";
$pgv_lang["sex"]			= "性別";
$pgv_lang["personal_facts"]		= "個人記錄和詳細資料";
$pgv_lang["type"]			= "類型";
$pgv_lang["place_description"]		= "地方/說明";
$pgv_lang["parents"] 			= "父母:";
$pgv_lang["siblings"] 			= "兄弟";
$pgv_lang["father"] 			= "父親";
$pgv_lang["mother"] 			= "母親";
$pgv_lang["parent"] 				= "家長";
$pgv_lang["self"] 					= "自己";
$pgv_lang["partner"] 				= "配偶";
$pgv_lang["relatives"]			= "近親";
$pgv_lang["relatives_events"]		= "近親的事件";
$pgv_lang["historical_facts"]		= "曆史紀錄";
$pgv_lang["child"]			= "兒女";
$pgv_lang["family"] 				= "家庭";
$pgv_lang["spouse"]			= "配偶";
$pgv_lang["spouses"] 				= "夫妻";
$pgv_lang["surnames"]			= "姓氏";
$pgv_lang["adopted"]			= "adopted 領養";
$pgv_lang["foster"]			= "foster 領養";
$pgv_lang["infant"]					= "幼兒";
$pgv_lang["stillborn"]				= "未出生";
$pgv_lang["deceased"]				= "去世";
$pgv_lang["sealing"]			= "Sealing";
$pgv_lang["link_as"]			= "把這個人連接到一個現有的家庭裏去";
$pgv_lang["link_as_child"]		=	"把這個人當作個孩子連接到一個現有的家庭裏去";
$pgv_lang["link_as_husband"]	=	"把這個人當作個丈夫連接到一個現有的家庭裏去";
$pgv_lang["link_as_wife"]		=	"把這個人當作個妻子連接到一個現有的家庭裏去";
//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "家庭咨詢";
$pgv_lang["family_group_info"]		= "家庭組信息";
$pgv_lang["husband"]			= "丈夫";
$pgv_lang["wife"]			= "妻子";
$pgv_lang["marriage"]			= "婚姻:";
$pgv_lang["lds_sealing"]		= "LDS Sealing:";
$pgv_lang["marriage_license"]		= "結婚證書:";
$pgv_lang["childless_family"]		= "該家庭沒有孩子";
$pgv_lang["media_object"]		= "多媒體對象:";
$pgv_lang["children"]			= "孩子";
$pgv_lang["no_children"]		= "沒有孩子";
$pgv_lang["parents_timeline"]		= "在時間表上顯示父母";
//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "收集箱";
$pgv_lang["clip_explaination"]		= "你可以收集一些文件和圖片以便下載。<br /><br />";
$pgv_lang["item_with_id"]		= "項目與";
$pgv_lang["error_already"]		= "已經在你的收集箱裏。";
$pgv_lang["which_links"]		= "從這個家庭您並且會希望哪個鏈接添加?";
$pgv_lang["just_family"]		= "添加這個家庭記錄。";
$pgv_lang["parents_and_family"]		= "添加父項以這個家庭記錄。";
$pgv_lang["parents_and_child"]		= "添加父項和兒童記錄以這個家庭記錄。";
$pgv_lang["parents_desc"]		= "添加父項和所有後裔記錄以這個家庭記錄。";
$pgv_lang["continue"]			= "繼續添加";
$pgv_lang["which_p_links"]		= "從這個人員您並且會希望哪個鏈接添加?";
$pgv_lang["just_person"]		= "添加這個人。";
$pgv_lang["person_parents_sibs"]	= "添加這個人, 他的父母, 並且兄弟姐妹。";
$pgv_lang["person_ancestors"]		= "添加這個人和他的直接祖先。";
$pgv_lang["person_ancestor_fams"]	="添加這個人, 他的直接祖先, 並且他們的家庭。";
$pgv_lang["person_spouse"]		= "添加這個人, 他的配偶, 並且孩子。";
$pgv_lang["person_desc"]		= "添加這個人, 他的配偶, 並且所有後裔記錄。";
$pgv_lang["unable_to_open"]		= "無法打開剪報文件夾爲文字";
$pgv_lang["person_living"]		= "這個人員是生存。  私有詳細資料不會是包括的。";
$pgv_lang["person_private"]		= "關于這個人員的詳細資料專用。  私有詳細資料不會是包括的。";
$pgv_lang["download"]			= "右鍵單擊（在Macintosh上按住Control鍵並單擊），然後選擇\“將目標另存爲\”;下載文件";
$pgv_lang["media_files"]		= "媒體文件參考在這GEDCOM";
$pgv_lang["cart_is_empty"]		= "您的收集箱是空的。";
$pgv_lang["id"]				= "ID";
$pgv_lang["ID"]				= "ID";
$pgv_lang["name_description"]		= "名字/說明";
$pgv_lang["remove"]			= "去除";
$pgv_lang["empty_cart"]			= "清空收集箱";
$pgv_lang["download_now"]		= "下載";
//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "找到連接點";
$pgv_lang["top_level"]			= "最高級";
$pgv_lang["form"]			= "地點以表格形式編碼: ";
$pgv_lang["default_form"]		= "城市，省市，國家";
$pgv_lang["default_form_info"]		= "（默認）";
$pgv_lang["unknown"]			= "未知";
$pgv_lang["individuals"]			= "個人";
$pgv_lang["place_list2"] 			= "地方列表";
//-- MEDIALIST FILE MESSAGES
$pgv_lang["multi_title"]		= "多媒體列表";
$pgv_lang["media_found"]		= "找到媒體對象";
$pgv_lang["view_person"]		= "查看個人";
$pgv_lang["view_family"]		= "查看家庭";
$pgv_lang["view_source"]		= "查看來源";
$pgv_lang["view_object"]			= "查看對象";
$pgv_lang["first_page"]				= "第一頁";
$pgv_lang["previous_page"]			= "上一頁";
$pgv_lang["next_page"]				= "下一頁";
$pgv_lang["last_page"]				= "最後一頁";
$pgv_lang["next_image"]				= "下個圖片";
$pgv_lang["file_not_found"]		= "沒找到文件。";
$pgv_lang["medialist_show"] 		= "顯示";
$pgv_lang["per_page"]				= "每頁幾個多媒體文件";
$pgv_lang["media_format"]			= "多媒體格式";
$pgv_lang["image_size"]				= "圖像大小";
$pgv_lang["media_id"]				= "多媒體ID";
$pgv_lang["invalid_id"]				= "家譜文件中沒有此ID";
$pgv_lang["record_updated"]			= "紀錄#pid# 成功被更新";
$pgv_lang["record_added"]			= "紀錄#xref# 成功加入家譜文件";
//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "搜索家譜文件";
$pgv_lang["search_geds"]			= "選擇數據庫搜索";
$pgv_lang["search_indis"]			= "個人名字";
$pgv_lang["search_inrecs"]			= "搜索";
$pgv_lang["search_prtall"]			= "全名";
$pgv_lang["search_prthit"]			= "被點擊的名字";
$pgv_lang["results_per_page"]		= "每頁的搜索結果";
$pgv_lang["enter_terms"]		= "請輸入搜尋詞語";
$pgv_lang["search_asso_label"]		= "協會";
$pgv_lang["search_asso_text"]		= "顯示個人/家庭";
$pgv_lang["search_fams"]			= "姓名";
$pgv_lang["soundex_search"]		= "Soundex 名字搜索:";
$pgv_lang["search_results"]		= "搜索結果";
$pgv_lang["sources"]			= "來源";
$pgv_lang["firstname_search"]		= "名字爲";
$pgv_lang["search_prtnames"]		= "個人的<br />名字:";
$pgv_lang["other_searches"]			= "其他的搜索";
$pgv_lang["lastname_search"]		= "姓氏: ";
$pgv_lang["search_place"]		= "地方: ";
$pgv_lang["search_year"]		= "年: ";
$pgv_lang["lastname_empty"]		= "請輸入姓氏。";
$pgv_lang["no_results"]			= "結果沒有查找。";
$pgv_lang["search_sources"]			= "來源";
$pgv_lang["repo_list"]				= "文件夾列表";
$pgv_lang["total_repositories"]		= "總共文件夾";
$pgv_lang["soundex_results"]		= "或許以下soundex 符合將是有用的。";
//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]		= "來源被查找";
//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "來源資料";
$pgv_lang["other_records"]		= "其他的紀錄:";
$pgv_lang["other_repo_records"]		= "把那個連接地址放入記錄中";
$pgv_lang["repo_info"]				= "知識庫信息";
$pgv_lang["people"]			= "人們";
$pgv_lang["families"]			= "家庭";
$pgv_lang["total_sources"]			= "總共來源";
//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]		= "創建個人和家庭連接標記";
$pgv_lang["building_index"]		= "創建連接標記";
$pgv_lang["importing_records"]		= "讀取紀錄";
$pgv_lang["detected_change"]		= "發現家譜文件有變化##GEDCOM#.";
$pgv_lang["flushing"]			= "衝洗的目錄";
$pgv_lang["exec_time"]			= "執行命令時間:";
$pgv_lang["unable_to_create_index"]	="無法創建連接標記。 請確認可以寫入權限被打開。 標記文件寫後權限可以恢複。";
$pgv_lang["sec"]					= "秒。";
$pgv_lang["indi_complete"]		= "個人索引文件更新完全。";
$pgv_lang["family_complete"]		= "家庭索引文件更新完全。";
$pgv_lang["source_complete"]		= "來源索引文件更新完全。";
$pgv_lang["tables_exist"]		= "家譜表已在數據庫裏";
$pgv_lang["you_may"]			= "您可以:";
$pgv_lang["drop_tables"]		= "投下當前表";
$pgv_lang["import_multiple"]		= "導入和工作以多GEDCOMs";
$pgv_lang["explain_options"]		= "如果您選擇投下表所有資料用這GEDCOM 將替換。<br />如果您選擇導入和工作以多GEDCOMs, PhpGedView 將清除被導入使用一GEDCOM 以同樣文件名的任一個資料。  這個選項允許您對存儲多個GEDCOM 資料在同樣表中和容易地切換在他們之間。";
$pgv_lang["path_to_gedcom"]		= "家譜文件的連接地址:";
$pgv_lang["gedcom_title"]		= "家譜文件的名稱：";
$pgv_lang["index_complete"]		= "索引已完成";
$pgv_lang["updating_is_dead"]		= "更新是死的狀態爲INDI ";
$pgv_lang["updating_family_names"]	= "更新姓對于FAM ";
$pgv_lang["processed_for"]		= "被處理的文件爲 ";
//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "家庭總數";
$pgv_lang["total_indis"]		= "個人總數";
$pgv_lang["notes"]					= "記錄";
$pgv_lang["ssourcess"]				= "來源";
$pgv_lang["media"]					= "多媒體";
$pgv_lang["starts_with"]		= "開始爲:";
$pgv_lang["person_list"]		= "個人名單:";
$pgv_lang["paste_person"]		= "粘貼這個人";
$pgv_lang["notes_sources_media"]	= "筆記, 來源, 並且媒介";
$pgv_lang["name_contains"]		= "名字包含:";
$pgv_lang["filter"]			= "過濾器";
$pgv_lang["find_individual"]		= "尋找個人ID號";
$pgv_lang["find_familyid"]			= "尋找家庭ID號";
$pgv_lang["find_sourceid"]			= "尋找來源ID號";
$pgv_lang["magnify"]				= "放大";
$pgv_lang["skip_surnames"]		= "跳過姓氏名單";
$pgv_lang["show_surnames"]		= "顯示姓氏名單";
$pgv_lang["all"]			= "所有";
$pgv_lang["hidden"]					= "隱藏";
$pgv_lang["roots"]		 				= "根目錄";
//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "年齡";
$pgv_lang["days"]					= "日";
$pgv_lang["months"]					= "月";
$pgv_lang["years"]					= "年";
$pgv_lang["day1"]					= "日";
$pgv_lang["month1"]					= "月";
$pgv_lang["year1"]					= "年";
$pgv_lang["after_death"]        ="去世後";
$pgv_lang["timeline_title"]		= "家譜時間表";
$pgv_lang["timeline_chart"]		= "時間安排圖";
$pgv_lang["remove_person"]		= "刪除個人";
$pgv_lang["show_age"]			= "先是年齡標記";
$pgv_lang["add_another"]		= "增加其它人:<br />個人ID號::";
$pgv_lang["find_id"]			= "尋找ID號";
$pgv_lang["show"]			= "顯示";
$pgv_lang["year"]			= "年:";
$pgv_lang["timeline_instructions"]	= "新的浏覽器可以讓你隨意擺放方格";
$pgv_lang["zoom_in"]			= "放大";
$pgv_lang["zoom_out"]			= "縮小";
$pgv_lang["timeline_beginYear"] = "開始年";
$pgv_lang["timeline_endYear"] = "結束年";
$pgv_lang["timeline_scrollSpeed"] = "速度";
$pgv_lang["timeline_controls"] = "時間表的控制";
$pgv_lang["include_family"] = "加入近親的家庭";
$pgv_lang["lifespan_chart"] = "壽命表";
$pgv_lang["cal_none"]                 = "沒有日曆換算";
$pgv_lang["cal_gregorian"]            = "正常日曆";
//-- MONTH NAMES
$pgv_lang["jan"]			= "一月";
$pgv_lang["feb"]			= "二月";
$pgv_lang["mar"]			= "三月";
$pgv_lang["apr"]			= "四月";
$pgv_lang["may"]			= "五月";
$pgv_lang["jun"]			= "六月";
$pgv_lang["jul"]			= "七月";
$pgv_lang["aug"]			= "八月";
$pgv_lang["sep"]			= "九月";
$pgv_lang["oct"]			= "十月";
$pgv_lang["nov"]			= "十一月";
$pgv_lang["dec"]			= "十二月";
$pgv_lang["abt"]			= "關于";
$pgv_lang["aft"]			= "以後";
$pgv_lang["and"]			= "並且";
$pgv_lang["bef"]			= "以前";
$pgv_lang["bet"]			= "之間";
$pgv_lang["cal"]			= "計算";
$pgv_lang["est"]			= "估計";
$pgv_lang["from"]			= "從";
$pgv_lang["int"]			= "解釋";
$pgv_lang["to"] 			= "到達";
$pgv_lang["cir"]			= "大約";
$pgv_lang["apx"]			= "大約";

//-- chinese numbers
$pgv_lang["0"]			= "零";
$pgv_lang["1"]			= "一";
$pgv_lang["2"]			= "二";
$pgv_lang["3"]			= "三";
$pgv_lang["4"]			= "四";
$pgv_lang["5"]			= "五";
$pgv_lang["6"]			= "六";
$pgv_lang["7"]			= "七";
$pgv_lang["8"]			= "八";
$pgv_lang["9"]			= "九";
$pgv_lang["10"]			= "十";
$pgv_lang["100"]		= "百";
$pgv_lang["1000"]		= "千";
//-- Admin File Messages
$pgv_lang["rebuild_indexes"]		= "重建索引";
$pgv_lang["user_admin"]			= "用戶管理";
$pgv_lang["manage_media"]			= "管理媒體";
$pgv_lang["stat_users"]				= "總用戶";
$pgv_lang["no_family_facts"]		= "沒有關于這個家庭的信息。";
$pgv_lang["stat_females"]			= "女性總數";
$pgv_lang["htmlplus_block_birth"]	= "出生";
$pgv_lang["comments"]				= "注解";
$pgv_lang["support_contact"]		= "技術幫助請聯系";
$pgv_lang["show_spouses"]		= "顯示夫妻";
$pgv_lang["review_changes_subject"]	= "家譜 - 修改變化";
$pgv_lang["show_pending"]		= "顯示等待的變化";
$pgv_lang["review_changes_block"]	= "等待變化";
$pgv_lang["total_names"]			= "名字總數";
$pgv_lang["reorder_families"]		= "重新排序家庭";
$pgv_lang["indis_with_surname"]		= "有#surname# 姓名的個人";
$pgv_lang["total_memory_usage"]		= "總內存使用量";
$pgv_lang["halfsibling"]			= "異父同胞";
$pgv_lang["halfbrother"]			= "同父異母或同母異父的兄弟";
$pgv_lang["halfsister"]				= "同父異母或同母異父的姐妹";
$pgv_lang["family_timeline"]		= "在時間表上顯示家庭";
$pgv_lang["children_timeline"]		= "在時間表上顯示孩子";
$pgv_lang["other"]					= "其它";
$pgv_lang["sort_by_marriage"]		= "按結婚日期排序";
$pgv_lang["genealogy_contact"]		= "家譜聯系";
$pgv_lang["remember_me"]			= "在此電腦上記住我";
$pgv_lang["fams_with_surname"]		= "有#surname# 的家庭";
$pgv_lang["child-family"]			= "父母和兄弟姐妹";
$pgv_lang["spouse-family"]			= "配偶和兒女";
$pgv_lang["direct-ancestors"]		= "直系祖先";
$pgv_lang["ancestors"]				= "直系祖先及其家屬";
$pgv_lang["total_not_born"]			= "流産總數";
$pgv_lang["total_dead"]				= "去世總數";
$pgv_lang["total_living"]			= "健在總數";
$pgv_lang["choose_relatives"]		= "選擇親戚";
$pgv_lang["relatives_report"]		= "親戚報表";
$pgv_lang["descendants"]			= "子孫後代";
$pgv_lang["config_block"]			= "配置";
$pgv_lang["enter_comments"]			= "請在“注釋”字段中輸入您與這個數據的關系";
$pgv_lang["after"]					= "之後";
$pgv_lang["before"]					= "之前";
$pgv_lang["htmlplus_block_burial"]	= "葬禮";
$pgv_lang["htmlplus_block_census"]	= "人口普查加入";
$pgv_lang["num_to_show"]			= "文件顯示數量";
$pgv_lang["days_to_show"]			= "顯示幾天";
$pgv_lang["before_or_after"]		= "在名字之前和之後加上數量";
$pgv_lang["htmlplus_block_marrage"]	= "結婚";
$pgv_lang["htmlplus_block_adoption"]= "收養";
$pgv_lang["htmlplus_block_death"]	= "去世";
$pgv_lang["stat_males"]				= "男性";


$pgv_lang["edit_source"]			= "編輯該文件";
$pgv_lang["familybook_chart"]		= "家庭冊";
$pgv_lang["family_of"]				= ":&nbsp; 的家庭";
$pgv_lang["cancel"]					= "取消";
$pgv_lang["link_remote"]            = "連接遠方個人";
$pgv_lang["delete_family"]			= "刪除家庭";
$pgv_lang["add_favorite"]			= "添加一個收藏";
$pgv_lang["url"]					= "網絡地址";
$pgv_lang["add_fav_enter_id"]		= "輸入個人，家庭，或來源ID";
$pgv_lang["remove_child"]			= "從家中刪除這個孩子";
$pgv_lang["link_new_husb"]			= "用已有的個人當這人的丈夫";
$pgv_lang["link_new_wife"]			= "用已有的個人當這人的妻子";
$pgv_lang["address_labels"]			= "地址標簽";
$pgv_lang["filter_address"]			= "顯示擁有這些的地址：";
$pgv_lang["address_list"]			= "地址列表";
$pgv_lang["changelog"]				= "版本#VERSION# 變化";
$pgv_lang["html_block_name"]		= "網絡編程語言HTML";
$pgv_lang["htmlplus_block_name"]	= "網絡高級編程語言HTML";
$pgv_lang["htmlplus_block_templates"] = "模板";
$pgv_lang["htmlplus_block_content"] = "內容";
$pgv_lang["htmlplus_block_keyword"]	= "關鍵詞示例（僅英文）";
$pgv_lang["htmlplus_block_current"]	= "當前的";
$pgv_lang["htmlplus_block_default"]	= "默認的";
$pgv_lang["htmlplus_block_gedcom"]	= "家譜";

$pgv_lang["dec_1st"]					= "十二月";
$pgv_lang["nov_1st"]					= "十一月";
$pgv_lang["oct_1st"]					= "十月";
$pgv_lang["sep_1st"]					= "九月";
$pgv_lang["aug_1st"]					= "八月";
$pgv_lang["jul_1st"]					= "七月";
$pgv_lang["jun_1st"]					= "六月";
$pgv_lang["may_1st"]					= "五月";
$pgv_lang["apr_1st"]					= "四月";
$pgv_lang["mar_1st"]					= "三月";
$pgv_lang["feb_1st"]					= "二月";
$pgv_lang["jan_1st"]					= "一月";

$pgv_lang["sunday_1st"]				= "周日";
$pgv_lang["saturday_1st"]			= "周六";
$pgv_lang["friday_1st"]				= "周五";
$pgv_lang["thursday_1st"]			= "周四";
$pgv_lang["wednesday_1st"]			= "周三";
$pgv_lang["tuesday_1st"]			= "周二";
$pgv_lang["monday_1st"]				= "周一";

$pgv_lang["stat_avg_age_at_death"]	= "平均去世年齡";
$pgv_lang["stat_longest_life"]		= "最長壽命";
$pgv_lang["stat_most_children"]		= "孩子最多的家庭";
$pgv_lang["stat_average_children"]	= "平均家庭裏的孩子數量";
$pgv_lang["stat_events"]			= "總共事件";
$pgv_lang["stat_media"]				= "媒體對象";
$pgv_lang["stat_surnames"]			= "姓氏總數";
$pgv_lang["loading"]				= "讀取中...";
$pgv_lang["clear_chart"]			= "清表格";
$pgv_lang["file_information"]		= "文件信息";
$pgv_lang["choose_file_type"]		= "文件類型";
$pgv_lang["add_individual_by_id"]	= "通過ID加入個人";
$pgv_lang["advanced_options"]		= "高級設置";
$pgv_lang["zip_files"]				= "壓縮文件";
$pgv_lang["include_media"]			= "加入多媒體（自動創建壓縮文件）";
$pgv_lang["roman_surn"]				= "羅馬化的姓";
$pgv_lang["roman_givn"]				= "羅馬化的名";
$pgv_lang["include"]				= "包括：";
$pgv_lang["page_x_of_y"]				= "現在頁數爲#GLOBALS[currentPage]# 總共頁數爲#GLOBALS[lastPage]#";
$pgv_lang["options"]				= "選項：";
$pgv_lang["config_update_ok"]			= "設置文件成功修改";
$pgv_lang["page_size"]					= "頁面大小";
$pgv_lang["edit_media"]					= "編輯媒體文件";
$pgv_lang["wiki_main_page"]				= "Wiki 主頁";
$pgv_lang["wiki_users_guide"]			= "Wiki 用戶指導";
$pgv_lang["wiki_admin_guide"]			= "Wiki 管理員的指導";
$pgv_lang["ex-spouse"] = "前夫妻";
$pgv_lang["ex-wife"] = "前妻";
$pgv_lang["ex-husband"] = "前夫";
$pgv_lang["onlyemail"] 				= "只允許電子郵件地址";
$pgv_lang["chart_new"]				= "家譜圖表";
$pgv_lang["search_general"]			= "一般搜索";
$pgv_lang["clipping_privacy"]		= "因爲隱私，有些信息不能被加入";
$pgv_lang["password_mismatch"]		= "密碼不對";
$pgv_lang["enter_username"]		= "你必須輸入一個用戶名";
$pgv_lang["enter_fullname"]		= "你必須輸入全名";
$pgv_lang["enter_password"]		= "你必須輸入一個密碼。";
$pgv_lang["confirm_password"]		= "您必須證實密碼。";
$pgv_lang["save"]			= "保存";
$pgv_lang["saveandgo"]		= "保存並到添加下一個新紀錄";
$pgv_lang["delete"]			= "刪除";
$pgv_lang["edit"]			= "編輯";
$pgv_lang["no_login"]			= "無法確認用戶。";
$pgv_lang["basic_realm"]			= "進入家譜系統";
$pgv_lang["basic_auth_failure"]		= "你必須輸入有效的用戶名和密碼才可以查看";
$pgv_lang["file_not_exists"]		= "你輸入的用戶名不存在";
$pgv_lang["research_assistant"]		= "研究助理";
$pgv_lang["import_gedcom"]		= "導入家譜文件";
$pgv_lang["enter_gedcomid"]		= "您必須輸入家譜ID。";
$pgv_lang["user_info"]			= "我的用戶信息";
$pgv_lang["upload_help"]		= "您想要將文件發送到服務器。這些文件將被上傳到該目錄:";
$pgv_lang["research_log"]		= "研究日記";
$pgv_lang["utf8_to_ansi"]		= "您想要 從UTF-8 到ANSI (ISO-8859-1)轉換這GEDCOM?";
$pgv_lang["media_linked"]			= "此媒體對象鏈接到以下內容：";

$pgv_lang["view_slideshow"] 		= "查看幻燈";
$pgv_lang["download_image"]			= "下載文件";
$pgv_lang["file_size"]				= "文件大小";
$pgv_lang["img_size"]				= "圖片大小";
$pgv_lang["button_SEX_F"] = "只顯示女士";
$pgv_lang["button_SEX_M"] = "只顯示男士";

$pgv_lang["hs_search"] 			= "搜索";
$pgv_lang["hs_close"] 			= "關閉窗口";
$pgv_lang["stplmonth"]			 = "月";
$pgv_lang["stplperc"]			 = "百分比";
$pgv_lang["preview"] 			= 	"預覽";
$pgv_lang["stplage"]			 = "年齡";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "音頻";
$pgv_lang["TYPE__book"] = "書籍";
$pgv_lang["TYPE__card"] = "卡片";
$pgv_lang["TYPE__certificate"] = "證書";
$pgv_lang["TYPE__document"] = "文檔";
$pgv_lang["TYPE__electronic"] = "電子文件";
$pgv_lang["TYPE__fiche"] = "微膠片";
$pgv_lang["TYPE__film"] = "微電影";
$pgv_lang["TYPE__magazine"] = "雜志";
$pgv_lang["TYPE__manuscript"] = "手稿";
$pgv_lang["TYPE__map"] = "地圖";
$pgv_lang["TYPE__newspaper"] = "報紙";
$pgv_lang["TYPE__photo"] = "照片";
$pgv_lang["TYPE__tombstone"] = "墓碑";
$pgv_lang["TYPE__video"] = "視頻";
$pgv_lang["TYPE__painting"] = "圖畫";
$pgv_lang["TYPE__other"] = "其他";

//-- Relationship chart messages
//-- Chinese Translations from--http://www.kwanfamily.info/familytitles/familytitle.html
//-- Chinese RelationShip chart-- http://www.kwanfamily.info/familytitles/familytitlejpg.html
$pgv_lang["relationship_chart"]		= "關系圖";
$pgv_lang["person1"]			= "第一個人";
$pgv_lang["person2"]			= "第二個人";
$pgv_lang["no_link_found"]		= "沒有發現兩者的連接";
//--Sosa came from the lang.sv.php file it is a key value relationship pattern for parents and grandparents
//1st generation
$pgv_lang["sosa_2"]	= "爸爸";
$pgv_lang["sosa_3"] = "媽媽";
//2nd generation
$pgv_lang["sosa_4"] = "爺爺";
$pgv_lang["sosa_5"] = "奶奶";
$pgv_lang["sosa_6"] = "姥爺";
$pgv_lang["sosa_7"] = "姥姥";
//3rd generation
$pgv_lang["sosa_8"] = "曾祖父";
$pgv_lang["sosa_9"] = "曾祖母";
$pgv_lang["sosa_10"] = "曾祖父";
$pgv_lang["sosa_11"] = "曾祖母";
$pgv_lang["sosa_12"] = "曾外公";
$pgv_lang["sosa_13"] = "曾外婆";
$pgv_lang["sosa_14"] = "曾外公";
$pgv_lang["sosa_15"] = "曾外婆";
//4th generation
$pgv_lang["sosa_16"] = "高祖父";
$pgv_lang["sosa_17"] = "高祖母";
$pgv_lang["sosa_18"] = "高祖父";
$pgv_lang["sosa_19"] = "高祖母";
$pgv_lang["sosa_20"] = "高祖父";
$pgv_lang["sosa_21"] = "高祖母";
$pgv_lang["sosa_22"] = "高祖父";
$pgv_lang["sosa_23"] = "高祖母";
$pgv_lang["sosa_24"] = "高外公";
$pgv_lang["sosa_25"] = "高外婆";
$pgv_lang["sosa_26"] = "高外公";
$pgv_lang["sosa_27"] = "高外婆";
$pgv_lang["sosa_28"] = "高外公";
$pgv_lang["sosa_29"] = "高外婆";
$pgv_lang["sosa_30"] = "高外公";
$pgv_lang["sosa_31"] = "高外婆";

//5th generation
$pgv_lang["sosa_32"] = "N/A";
$pgv_lang["sosa_33"] = "N/A";
$pgv_lang["sosa_34"] = "N/A";
$pgv_lang["sosa_35"] = "N/A";
$pgv_lang["sosa_36"] = "N/A";
$pgv_lang["sosa_37"] = "N/A";
$pgv_lang["sosa_38"] = "N/A";
$pgv_lang["sosa_39"] = "N/A";
$pgv_lang["sosa_40"] = "N/A";
$pgv_lang["sosa_41"] = "N/A";
$pgv_lang["sosa_42"] = "N/A";
$pgv_lang["sosa_43"] = "N/A";
$pgv_lang["sosa_44"] = "N/A";
$pgv_lang["sosa_45"] = "N/A";
$pgv_lang["sosa_46"] = "N/A";
$pgv_lang["sosa_47"] = "N/A";
$pgv_lang["sosa_48"] = "N/A";
$pgv_lang["sosa_49"] = "N/A";
$pgv_lang["sosa_50"] = "N/A";
$pgv_lang["sosa_51"] = "N/A";
$pgv_lang["sosa_52"] = "N/A";
$pgv_lang["sosa_53"] = "N/A";
$pgv_lang["sosa_54"] = "N/A";
$pgv_lang["sosa_55"] = "N/A";
$pgv_lang["sosa_56"] = "N/A";
$pgv_lang["sosa_57"] = "N/A";
$pgv_lang["sosa_58"] = "N/A";
$pgv_lang["sosa_59"] = "N/A";
$pgv_lang["sosa_60"] = "N/A";
$pgv_lang["sosa_61"] = "N/A";
$pgv_lang["sosa_62"] = "N/A";
$pgv_lang["sosa_63"] = "N/A";
//--Great-great-grandparnets Generation
$pgv_lang["paternal great great grandfather"]	= "高祖父";
$pgv_lang["paternal great great grandmother"]	= "高祖母";
$pgv_lang["maternal great great grandfather"]	= "高外公";
$pgv_lang["maternal great great grandmother"]	= "高外婆";
//--Great-grandparents Generation
$pgv_lang["paternal great grandfather"]	= "曾祖父";
$pgv_lang["paternal great grandmother"]	= "曾祖母";
$pgv_lang["maternal great grandfather"]	= "曾外公";
$pgv_lang["maternal great grandmother"]	= "曾外婆";
//--Grandparents Generation
$pgv_lang["paternal grandfather"]	= "爺爺";
$pgv_lang["paternal grandmother"]	= "奶奶";
$pgv_lang["maternal grandfather"]	= "老爺";
$pgv_lang["maternal grandmother"]	= "姥姥";
$pgv_lang["paternal elder great uncle"]	= "伯祖父";
$pgv_lang["paternal elder great uncle's wife"]	= "伯祖母";
$pgv_lang["paternal younger great uncle"]	= "叔祖父";
$pgv_lang["paternal younger great uncle's wife"] = "叔祖母";
$pgv_lang["paternal great aunt"]	= "祖姑母";
$pgv_lang["paternal great aunt's husband"] = "祖姑丈";
//--Parents generation
$pgv_lang["father"] = "爸爸";
//could not find paternal uncle translation. this is our best guess.
$pgv_lang["paternal uncle"] = "達達";
$pgv_lang["paternal older uncle"]	= "伯父";
$pgv_lang["paternal older uncle's wife"]	= "伯母";
$pgv_lang["paternal younger uncle"]	= "叔父";
$pgv_lang["paternal younger uncle's wife"] = "嬸母";
$pgv_lang["paternal aunt"] = "姑姑";
$pgv_lang["paternal aunt's husband"] = "姑夫";
$pgv_lang["paternal older aunt"]	= "姑媽";
$pgv_lang["paternal older aunt's husband"] = "姑夫";
$pgv_lang["paternal younger aunt"]	= "姑姑";
$pgv_lang["paternal younger aunt's husband"] = "姑夫";
$pgv_lang["mother"] = "媽媽";
$pgv_lang["maternal uncle"]	= "舅舅";
$pgv_lang["maternal uncle's wife"]	= "舅母";
$pgv_lang["maternal elder aunt"]	= "姨母";
$pgv_lang["maternal elder aunt's husband"] = "姨夫";
$pgv_lang["maternal younger aunt"]	= "姨";
$pgv_lang["maternal younger aunt's husband"] = "姨夫";
//--Your Generations
$pgv_lang["older brother"] = "哥哥";
$pgv_lang["elder brother's wife"] = "嫂子";
$pgv_lang["younger brother"]	= "弟弟";
$pgv_lang["younger brother's wife"]	= "弟婦";
$pgv_lang["elder sister"] = "姐姐";
$pgv_lang["elder sister's husband"]	= "姐夫";
$pgv_lang["younger sister"]	= "妹妹";
$pgv_lang["younger sister's husband"] = "妹夫";

$pgv_lang["paternal male cousin"]	= "堂兄弟";
$pgv_lang["paternal elder male cousin"]	= "堂哥";
$pgv_lang["paternal elder male cousin's wife"]	= "堂嫂";
$pgv_lang["paternal younger male cousin"]	= "堂弟";
$pgv_lang["paternal younger male cousin's wife"] = "堂弟婦";
$pgv_lang["paternal female cousin"]	= "堂姐妹";
$pgv_lang["paternal elder female cousin"]	= "堂姐";
$pgv_lang["paternal elder female cousin's husband"]	= "堂姐夫";
$pgv_lang["paternal younger female cousin"] = "堂妹";
$pgv_lang["paternal younger female cousin's husband"]	= "堂妹夫";

$pgv_lang["maternal male cousin"]	= "表兄弟";
$pgv_lang["maternal elder male cousin"]	= "表哥";
$pgv_lang["maternal elder male cousin's wife"]	= "表嫂";
$pgv_lang["maternal younger male cousin"]	= "表弟";
$pgv_lang["maternal younger male cousin's wife "] = "表夫";
$pgv_lang["maternal female cousin"]	= "表姐妹";
$pgv_lang["maternal elder female cousin"]	= "表姐";
$pgv_lang["maternal elder female cousin's husband"]	= "表姐夫";
$pgv_lang["maternal younger female cousin"]	= "表妹";
$pgv_lang["maternal younger female cousin's husband"]	= "表妹夫";

//--bosa came from the lang.sv.php file it is a key value relationship pattern for parents and children
//--it is made up to follow the sosa pattern, "bosa" has no meaning that we know of.
//add this key to other language files to work with the relationship algorithm
//1st generation
$pgv_lang["bosa_2"]	= "兒子";
$pgv_lang["bosa_3"] = "女兒";
//2nd generation
$pgv_lang["bosa_4"] = "孫子";
$pgv_lang["bosa_5"] = "孫女";
$pgv_lang["bosa_6"] = "外孫子";
$pgv_lang["bosa_7"] = "外孫女";
//3rd generation
$pgv_lang["bosa_8"] = "曾內孫仔";
$pgv_lang["bosa_9"] = "曾內孫女";
$pgv_lang["bosa_10"] = "曾內孫仔";
$pgv_lang["bosa_11"] = "曾內孫女";
$pgv_lang["bosa_12"] = "曾內孫仔";
$pgv_lang["bosa_13"] = "曾內孫女";
$pgv_lang["bosa_14"] = "曾內孫仔";
$pgv_lang["bosa_15"] = "曾內孫女";
//4th generation
$pgv_lang["bosa_16"] = "玄孫";
$pgv_lang["bosa_17"] = "玄孫";
$pgv_lang["bosa_18"] = "玄孫";
$pgv_lang["bosa_19"] = "玄孫";
$pgv_lang["bosa_20"] = "玄孫";
$pgv_lang["bosa_21"] = "玄孫";
$pgv_lang["bosa_22"] = "玄孫";
$pgv_lang["bosa_23"] = "玄孫";
$pgv_lang["bosa_24"] = "玄孫";
$pgv_lang["bosa_25"] = "玄孫";
$pgv_lang["bosa_26"] = "玄孫";
$pgv_lang["bosa_27"] = "玄孫";
$pgv_lang["bosa_28"] = "玄孫";
$pgv_lang["bosa_29"] = "玄孫";
$pgv_lang["bosa_30"] = "玄孫";
$pgv_lang["bosa_31"] = "玄孫";
//--Children's Generation
$pgv_lang["son"]	= "兒子";
$pgv_lang["son's wife"]	= "兒媳婦";
$pgv_lang["daughter"]	= "女兒";
$pgv_lang["daughter's husband"] = "女婿";
$pgv_lang["nephew"] = "外甥";
$pgv_lang["nephew's wife"] = "外甥媳婦";
$pgv_lang["niece"] = "姪女";
$pgv_lang["show_path"]				= "顯示連接路線";
$pgv_lang["niece's husband"]	= "姪女婿";
//--Grandchildren's Generation from detail
$pgv_lang["son's son"]	= "孫子";
$pgv_lang["son's son's wife"]	= "孫媳婦";
$pgv_lang["son's daughter"]	= "孫女";
$pgv_lang["son's daughter's husband"] = "孫女婿";
$pgv_lang["daugghter's son"]	= "外孫";
$pgv_lang["daughter's daughter"]	= "外孫女";
$pgv_lang["Brother's son's son "]	= "姪孫";
$pgv_lang["brother's son's daughter"] = "姪孫女";
//--Greatgrandchildrens Generation from detail of http://www.kwanfamily.info/familytitles/familytitle.html#memc
$pgv_lang["children's children's children"] = "曾孫";
$pgv_lang["children's children's son"] = "曾內孫仔";
$pgv_lang["children's children's daughter"] = "曾內孫女";
//--great-great grandchildren generation
$pgv_lang["children's children's children's children's"] = "玄孫";
$pgv_lang["sibling"]			= "兄弟姐妹";
$pgv_lang["follow_spouse"]		= "經過婚姻關系測驗";
$pgv_lang["timeout_error"]		= "找不到關系。";
$pgv_lang["grandchild"]				= "孫子女";
$pgv_lang["grandson"]				= "孫子";
$pgv_lang["granddaughter"]			= "孫女";
$pgv_lang["son"]			= "兒子";
$pgv_lang["daughter"]			= "女兒";
$pgv_lang["brother"]			= "兄弟";
$pgv_lang["sister"]			= "姐妹";
//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "是否確實要刪除這個GEDCOM 情況嗎?";
$pgv_lang["access_denied"]		= "<b>不允許</b><br />你的訪問被拒絕。";
$pgv_lang["changes_exist"]		= "已對此GEDCOM進行了更改";
$pgv_lang["find_place"]			= "尋找地方";
$pgv_lang["close_window"]		= "關閉窗口";
$pgv_lang["close_window_without_refresh"]	= "關閉窗口但不要刷新";
$pgv_lang["place_contains"]		= "地方包含:";
$pgv_lang["now_import"]			= "現在您應該導入GEDCOM 記錄入PhpGedView 由點擊在導入鏈接如下。";
$pgv_lang["add"]			= "添加";
$pgv_lang["custom_event"]		= "自定義活動";
$pgv_lang["delete_person"]		= "刪除這個人";
$pgv_lang["confirm_delete_person"]	= "確認從家鋪文件中刪除這個人？";
$pgv_lang["find_media"]			= "查找媒體";
$pgv_lang["set_link"]			= "設置連接";
$pgv_lang["delete_source"]		= "刪除這個來源";
$pgv_lang["confirm_delete_source"]	= "確認從家鋪文件中刪除這個來源？";
$pgv_lang["find_family"]		= "找到家庭";
$pgv_lang["find_fam_list"]			= "找到家庭列表";
$pgv_lang["edit_name"]			= "編輯名字";
$pgv_lang["delete_name"]		= "刪除名字";
$pgv_lang["select_date"]			= "選擇日期";
$pgv_lang["bdm"]					= "出生，去世，婚姻";
//-- calendar.php messages
$pgv_lang["on_this_day"]		= "在這一天...";
$pgv_lang["in_this_month"]			= "在這個月 ...";
$pgv_lang["in_this_year"]			= "在這年 ...";
$pgv_lang["year_anniversary"]		= "#year_var# 年週年紀念";
$pgv_lang["today"]					= "今天";
$pgv_lang["day"]			= "日:";
$pgv_lang["showcal"]				= "顯示事情：";
$pgv_lang["anniversary"]			= "紀念日";
$pgv_lang["month"]			= "月份:";
$pgv_lang["anniversary_calendar"] 	= "周年紀念日";
$pgv_lang["sunday"]			= "星期天";
$pgv_lang["monday"]			= "星期一";
$pgv_lang["tuesday"]			= "星期二";
$pgv_lang["wednesday"]			= "星期三";
$pgv_lang["thursday"]			= "星期四";
$pgv_lang["friday"]			= "星期五";
$pgv_lang["viewyear"]				= "顯示年份";
$pgv_lang["saturday"]			= "星期六";
$pgv_lang["viewday"]			= "查看天";
$pgv_lang["lost_password"]			= "丟失密碼？";
$pgv_lang["day_not_set"]			= "沒有日子";
$pgv_lang["viewmonth"]			= "查看月份";
$pgv_lang["all_people"]			= "所有人";
$pgv_lang["no_account_yet"] 		= "沒有賬號？";
$pgv_lang["living_only"]		= "健在人員";
$pgv_lang["recent_events"]		= "近期事件(< 100 年)";
//-- upload media messages
//-- user self registration module
$pgv_lang["mandatory"] 			= "有 * 的必須要添。";
$pgv_lang["requestpassword"]		= "忘記密碼";
$pgv_lang["requestaccount"]		= "注冊新賬戶";
$pgv_lang["pls_note01"]			= "請注意：系統區分大小寫！";
$pgv_lang["min6chars"]			= "密碼必須至少包含6個字符";
$pgv_lang["pls_note02"]			= "請注意：密碼應僅包含字母和數字。 在密碼中包含其他字符可能會導致無法從某些系統訪問。";
$pgv_lang["pls_note03"]			= "在激活帳戶之前，將驗證此電子郵件地址。 它不會顯示在網站上。 您將在此電子郵件地址收到一條消息，其中包含您的注冊數據，該數據將轉發到此地址。";
$pgv_lang["emailadress"]		= "電子郵件地址：";
$pgv_lang["pls_note04"]			= "標記*的空格爲必填。";
$pgv_lang["pls_note05"]			= "待完成此頁面上的表格並驗證您的答案後，您將收到一封確認電子郵件，其中包含您在此頁面上指定的電子郵件地址。 使用確認電子郵件，您將激活您的帳戶; 如果您未能在七天內激活您的帳戶，它將被清除（您可以在此時再次注冊該帳戶）。 要使用此站點，您需要知道您的登錄名和密碼。 您必須在此頁面上指定現有的有效電子郵件地址才能收到帳戶確認電子郵件。<br /> <br />如果您在本網站注冊帳戶時遇到問題，請向網站管理員提交支持請求。";
$pgv_lang["mail01_line01"]		= "你好#user_fullname# ...";
$pgv_lang["mail01_line02"]		= "在（#SERVER_NAME#）上發出了使用您的電子郵件地址（#user_email#）登錄的請求。";
$pgv_lang["mail01_line03"]		= "The following data was used.";
$pgv_lang["mail01_line04"]		= "請單擊下面的鏈接並填寫所需數據以驗證您的帳戶和電子郵件地址。";
$pgv_lang["mail01_line05"]		= "如果您沒有請求此數據，則可以刪除此消息。";
$pgv_lang["mail01_line06"]		= "您不會再從此系統收到任何郵件，因爲該帳戶將在七天內未經驗證而被刪除。";
$pgv_lang["mail01_subject"]		= "你在#SERVER_NAME#注冊";
$pgv_lang["mail02_line01"]		= "你好 管理員...";
$pgv_lang["mail02_line02"]		= "新用戶在(#SERVER_NAME# )處進行了新的用戶注冊。";
$pgv_lang["mail02_line03"]		= "用戶收到了一封包含必要數據的電子郵件，以驗證其帳戶。";
$pgv_lang["mail02_line04"]		= "用戶完成此驗證後，您將立即通過郵件通知該用戶登錄您網站的權限。";
$pgv_lang["mail02_subject"]		= "新注冊#SERVER_NAME#";
$pgv_lang["hashcode"]			= "驗證碼:";
$pgv_lang["thankyou"]			= "#user_fullname# ...<br />感謝您的注冊";
$pgv_lang["pls_note06"]			= "現在，您將收到一封確認電子郵件地址（#user_email#）。 使用確認電子郵件，您將激活您的帳戶; 如果您未能在七天內激活您的帳戶，它將被清除（您可以在此時再次注冊該帳戶）。 要登錄此站點，您需要知道您的登錄名和密碼。";
$pgv_lang["registernew"]		= "新帳戶確認";
$pgv_lang["user_verify"]		= "用戶確認";
$pgv_lang["send"]			= "發送";
$pgv_lang["pls_note07"]			= "請輸入您在此系統中通過電子郵件收到的用戶名，密碼和驗證碼，以驗證您的帳戶申請。";
$pgv_lang["pls_note08"]			= "檢查用戶#user_name#的數據";
$pgv_lang["mail03_line01"]		= "你好 管理員 ...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# (#newuser[fullname]# ) 已經驗證了注冊數據。";
$pgv_lang["mail03_line03"]		= "請點擊以下鏈接登錄您的網站編輯用戶並授予他登錄您網站的權限。";
$pgv_lang["mail03_subject"]		= "#SERVER_NAME#的新驗證";
$pgv_lang["pls_note09"]			= "您被確定爲注冊用戶。";
$pgv_lang["pls_note10"]			= "管理員已收到通知。<br />一旦他授予您登錄權限，您就可以使用您的用戶名和密碼登錄。";
$pgv_lang["pls_note10a"]			= "你可以用你的用戶名和密碼進入網站。";
$pgv_lang["data_incorrect"]		= "數據不正確！<br />請再試一次！";
$pgv_lang["user_not_found"]		= "無法驗證您輸入的信息。 請返回重試。";
$pgv_lang["lost_pw_reset"]		= "忘記密碼請求";
$pgv_lang["pls_note11"]			= "要重置密碼，請提供用戶帳戶的用戶名和電子郵件地址。 <br /> <br />我們會通過電子郵件向您發送一個特殊的URL，其中包含您帳戶的確認哈希值。 訪問提供的URL，您將被允許更改密碼並登錄此站點。 出于安全考慮，您不應向任何人提供此確認哈希，包括本網站的管理員（我們不會要求）。<br /> <br />如果您需要本網站管理員的幫助， 請聯系網站管理員。";
$pgv_lang["enter_email"]		= "你必須輸入一個電子郵件";
$pgv_lang["mail04_line01"]		= "你好#user_fullname# ...";
$pgv_lang["mail04_line02"]		= "你已經要了一個新密碼";
$pgv_lang["mail04_line03"]		= "建議：";
$pgv_lang["mail04_line04"]		= "現在請點擊下面的鏈接，使用新密碼登錄並進行更改以確保數據的完整性。";
$pgv_lang["mgv"]					= "我的家譜";
$pgv_lang["mail04_subject"]		= "數據請求在#SERVER_NAME#";
$pgv_lang["welcome_text_cust_head"] 	= "<span class='center'><b>歡迎來到這個家譜網站</b></span><br />只有注冊過的可以觀看網站。<br />";
$pgv_lang["welcome_text_auth_mode_3"]	= "<span class='center'><b>歡迎到這個家譜網站</b></span><br />只有<u>家庭成員</u>才可以看。<br /><br />你可以登錄或申請一個賬號<br /><br />注冊後要通過網站管理的批淮才可以看。";
$pgv_lang["pwreqinfo"]			= "<br />郵件被發送到電子郵件地址(#user[email]#)，包括新密碼。<br /> <br />請檢查您的郵件帳戶，因爲郵件應在接下來的幾分鍾內收到。<br /> <br />建議：<br /> <br />請求郵件後，您應該使用新密碼登錄本網站並進行更改以保持數據的完整性.";
$pgv_lang["editowndata"]		= "我的賬號";
$pgv_lang["savedata"]			= "保存改變的數據";
$pgv_lang["datachanged"]		= "用戶數據被改變";
$pgv_lang["datachanged_name"]		= "您可能需要使用新用戶名重新登錄。";
$pgv_lang["myuserdata"]			= "我的賬戶";
$pgv_lang["user_theme"]			= "我的背景設置";
$pgv_lang["mygedview"]			= "用戶中心";
$pgv_lang["passwordlength"]		= "密碼必須至少包含6個字符。";
//-- mygedview page
$pgv_lang["welcome"]			= "歡迎";
$pgv_lang["upcoming_events"]		= "即將來臨的活動";
$pgv_lang["living_or_all"]			= "只顯示現在活著人的事情？";
$pgv_lang["basic_or_all"]			= "只顯示現在出生，去世和婚姻？";
$pgv_lang["style2"]					= "表格";
$pgv_lang["style1"]					= "列表";
$pgv_lang["chat"]			= "聊天";
$pgv_lang["users_logged_in"]		= "用戶被登錄";
$pgv_lang["message"]			= "送信";
$pgv_lang["my_messages"]		= "我的消息";
$pgv_lang["message_from_name"]		= "你的名字：";
$pgv_lang["date_created"]		= "日期被發送:";
$pgv_lang["message_from"]		= "消息從:";
$pgv_lang["message_to"]			= "發消息:";
$pgv_lang["message_subject"]		= "主題:";
$pgv_lang["message_body"]		= "消息:";
$pgv_lang["no_to_user"]			= "接收用戶未被提供。  不能繼續";
$pgv_lang["provide_email"]		= "請提供您的電子郵件以便我們能與您聯繫以回應這個消息。  如果您不提供您的電子郵件我們不會能回應您的查詢。  您電子郵件不會被使用在其他方式除回應這次查詢以外。";
$pgv_lang["reply"]			= "回複";
$pgv_lang["message_deleted"]		= "消息被刪除";
$pgv_lang["message_sent"]		= "信被送";
$pgv_lang["reset"]			= "重置";
$pgv_lang["site_default"]		= "站點默認值";
$pgv_lang["favorites"]				= "收藏";
$pgv_lang["mygedview_desc"]		= "您的MyGedView 頁允許您保留您喜愛的人員書簽, 跟蹤即將來臨的活動, 並且與其它PhpGedView 用戶合作。";
$pgv_lang["no_messages"]		= "您沒有待定消息。";
$pgv_lang["no_gedcom_favorites"]	= "現在沒有收藏。網絡管理可以在這裏顯示收藏文件。";
$pgv_lang["gedcom_favorites"]		= "此家譜的收藏";
$pgv_lang["clicking_ok"]		= "按下 OK 後你在新的窗口可以聯系#user[fullname]#";
$pgv_lang["my_favorites"]		= "我的收藏";
$pgv_lang["no_favorites"]		= "您未選擇任何收藏頁。  添加單個來您的收藏頁, 找到您想要添加和然後點擊\"添加來我的收藏頁\" 鏈接或使用身份證配件箱如下添加單個由他們的身份證編號單個的詳細資料。";
$pgv_lang["add_to_my_favorites"] 	= "添加來我的收藏";
$pgv_lang["confirm_fav_remove"]		= "是否確實要從您的收藏頁去除這個項目嗎?";
$pgv_lang["portal"]			= "門戶";
$pgv_lang["invalid_email"]		= "請輸入一封有效電子郵件。";
$pgv_lang["enter_subject"]		= "請進入消息主題。";
$pgv_lang["enter_body"]			= "請輸入一些文本在發送之前。";
$pgv_lang["confirm_message_delete"]	= "是否確實要刪除這個消息嗎?  它無法以後被檢索。";
$pgv_lang["gedcom_news_limit_count"]	= "文件數量";
$pgv_lang["add_journal"]			= "添加日記項目";
$pgv_lang["gedcom_news"]			= "新聞";
$pgv_lang["edit_news"]				= "添加日記或新聞";
$pgv_lang["phpgedview_message"] 	= "家譜短信";
$pgv_lang["common_surnames"]		= "最普及的姓";
$pgv_lang["default_news_title"] 	= "歡迎來到你的家譜";
$pgv_lang["recent_changes"] 		= "近期的改動";
$pgv_lang["recent_changes_block"]	= "近期的改動";
$pgv_lang["delete_selected_messages"]	= "刪除選定的短信";
$pgv_lang["add_media_tool"] 		= "添加媒體工具";
$pgv_lang["my_journal"] 			= "我的日記";
$pgv_lang["user_news_block"]		= "用戶日記";
$pgv_lang["gedcom_news_archive"] 	= "看紀錄";
$pgv_lang["gedcom_news_block"]		= "家譜新聞";
$pgv_lang["theme_select_block"] 	= "選擇背景主題";
$pgv_lang["login_block"]			= "登錄";
$pgv_lang["gedcom_stats_show_surnames"]	= "顯示普及的姓";
$pgv_lang["gedcom_favorites_block"] = "家譜收藏";
$pgv_lang["gedcom_stats_block"] 	= "家譜統計";
$pgv_lang["gedcom_block"]			= "家譜歡迎";
$pgv_lang["random_media_events"]	= "事件";
$pgv_lang["random_media_persons"]	= "個人";
$pgv_lang["random_media_block"] 	= "隨機抽樣媒體";
$pgv_lang["welcome_block"]			= "用戶歡迎";
$pgv_lang["user_favorites_block"]	= "用戶收藏";
$pgv_lang["user_messages_block"]	= "用戶短信";
$pgv_lang["upcoming_events_block"]	= "即將來臨的事件";
$pgv_lang["todays_events_block"]	= "在這一天";
$pgv_lang["customize_gedcom_page"]	= "用戶化這個歡迎界面";
$pgv_lang["customize_page"] 		= "用戶化家譜頁面";
$pgv_lang["stat_latest_death"] 	= "最近去世";
$pgv_lang["stat_earliest_death"] 	= "最早去世";
$pgv_lang["stat_latest_birth"] 	= "最近出生";
$pgv_lang["stat_earliest_birth"] 	= "最早出生";
$pgv_lang["stat_other"] 			= "其它紀錄";
$pgv_lang["stat_sources"]			= "來源";
$pgv_lang["stat_families"]			= "家庭";
$pgv_lang["stat_individuals"]		= "個人";
$pgv_lang["message_email1"]		= "以下消息寄發了到您的PhpGedView 用戶帳號:";
$pgv_lang["message_email2"]		= "您寄發了以下消息到PhpGedView 用戶帳號:";
$pgv_lang["message_email3"]		= "您寄發了以下消息到PhpGedView 管理員:";
$pgv_lang["viewing_url"]		= "這信被送了當觀看以下URL: ";
$pgv_lang["messaging2_help"]		= "當您送這信您將接受複製寄發通過電子郵件到您提供的電子郵件。";
$pgv_lang["random_picture"]		= "任意照片";
$pgv_lang["choose_report"]			= "選擇報表運行";
$pgv_lang["ahnentafel_born_f"]		= "出生";
$pgv_lang["ahnentafel_born_m"]		= "出生";
$pgv_lang["ahnentafel_generation"]	= "幾代人";
$pgv_lang["ahnentafel_pronoun_f"]	= "她";
$pgv_lang["ahnentafel_pronoun_m"]	= "他";
$pgv_lang["html_reports"]			= "網頁HTML報表";
$pgv_lang["pdf_reports"]			= "PDF 報表";
$pgv_lang["page"]					= "頁";
$pgv_lang["with"]					= "和";
$pgv_lang["chart_list"]			= "列表";
$pgv_lang["chart_style"]			= "表的格式";
$pgv_lang["ancestry_chart"] 		= "祖先表";
$pgv_lang["statistics"] 			= "統計";
$pgv_lang["show_photos"]			= "顯示照片？";
$pgv_lang["show_notes"] 			= "顯示記錄？";
$pgv_lang["show_notes"] 			="顯示來源？";
$pgv_lang["show_sources"]			= "顯示來源？";
$pgv_lang["enter_famid"]			= "輸入家庭ID";
$pgv_lang["of"] 					= "從";
$pgv_lang["individual_report"]		= "個人報表";
$pgv_lang["family_group_report"]	= "家庭組報表";
$pgv_lang["reports"]				= "報表";
$pgv_lang["download_report"]		= "下載報表";
$pgv_lang["select_report"]			= "選擇報表";
$pgv_lang["update_fact"] = "更新信息";
$pgv_lang["update_fact_restricted"] = "不可以改編此數據";
$pgv_lang["run_report"] 			= "看報表";
$pgv_lang["selected_report"]		= "所選的報表";
$pgv_lang["enter_report_values"]	= "進入報表值";
$pgv_lang["sosa_2"] 				= "爸爸";
$pgv_lang["sosa_3"] 				= "媽媽";
$pgv_lang["upload_file"]			= "上載的文件";
$pgv_lang["update_name"] = "更新名字";
$pgv_lang["quick_update_instructions"] = "你可以修改信息";
$pgv_lang["update_address"] = "更新地址";
$pgv_lang["top10_pageviews"]		= "看得最多的文件";
$pgv_lang["fams_charts"]			= "家庭的選項";
$pgv_lang["indis_charts"]			= "個人的選項";
$pgv_lang["none"]					= "沒有";
$pgv_lang["locked"]					= "不更改";
$pgv_lang["privacy"]				= "隱私";
$pgv_lang["select_fact"] = "選擇一個情況...";
$pgv_lang["update_photo"] = "更新相片";
$pgv_lang["quick_update_title"] = "快速更新";
$pgv_lang["stop"]					= "停止";
$pgv_lang["random_media_start_slide"]	= "本也讀取時放幻燈圖片？";
$pgv_lang["random_media_ajax_controls"]	= "顯示幻燈控制？";
$pgv_lang["description"]			= "介紹";
$pgv_lang["current_dir"]			= "現在的文件夾位置";
$pgv_lang["SHOW_ID_NUMBERS"]		= "在名字旁顯示ID";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "在個人框架裏顯示圖像";
$pgv_lang["view_img_details"]		= "看圖片的詳細資料";
$pgv_lang["server_folder"]			= "服務器上文件名";
$pgv_lang["medialist_recursive"]	= "子目錄的文件";
$pgv_lang["media_options"]			= "媒體選項";
$pgv_lang["age_differences"]		= "顯示不同的地方";
$pgv_lang["date_of_entry"]			= "原輸入日期";
$pgv_lang["multi_site_search"] 		= "多個網站搜索";
$pgv_lang["switch_lifespan"]		= "顯示壽命表";
$pgv_lang["switch_timeline"]		= "顯示時間表";
$pgv_lang["differences"]			= "不同之處";
$pgv_lang["charts_block"]			= "表格";
$pgv_lang["charts_block_descr"]		= "這個表格可以讓你制作一個歡迎界面。那裏可以顯示你的祖先，子孫。你也可以選一個家譜的起點。";
$pgv_lang["charts_click_box"]		= "點擊任何的方格會得到更多的個人信息";
$pgv_lang["chart_type"]				= "圖表類型";
$pgv_lang["changedate1"]			= "改變紀錄的最晚時間";
$pgv_lang["changedate2"]			= "改變紀錄的最早時間";
$pgv_lang["search_place_word"]		= "只能是整個字";
$pgv_lang["invalid_search_input"] 	= "請加入到這個年份新的名字，姓名或者是地方";
$pgv_lang["duplicate_username"] 	= "用戶名重複。已經有一個人用現在的用戶名字。請你選另一個用戶名。";
$pgv_lang["genealogy"]					= "家譜";
$pgv_lang["activate"]					= "啓動";
$pgv_lang["deactivate"]					= "關閉";
$pgv_lang["play"]					= "播放";
$pgv_lang["gedcom_editing_disabled"]	= "這個家譜文件被管理員禁止更改";
$pgv_lang["birth_M"] = "#name#的生日";
$pgv_lang["birth_F"] = "#name#的生日";
$pgv_lang["born_in_M"] = "出生在#state#中的#date#";
$pgv_lang["born_in_F"] = "出生在#state#中的#date#";
$pgv_lang["born_on_M"] = "生于#date#";
$pgv_lang["born_on_F"] = "生于#date#";
$pgv_lang["death_M"] = "#name#death的周年紀念日";
$pgv_lang["death_F"] = "#name#death的周年紀念日";
$pgv_lang["died_in_M"] = "死在#state#中#date#";
$pgv_lang["died_in_F"] = "死在#state#中#date#";
$pgv_lang["died_on_M"] = "死于#date#";
$pgv_lang["died_on_F"] = "死于#date#";
$pgv_lang["anniversary_of"] = "#丈夫#和#wife#的結婚紀念日";
$pgv_lang["married_in"] = "在#state###上結婚#";
$pgv_lang["married_on"] = "#date#\"結婚";
$pgv_lang["clustrmaps_locations"] = "此頁面訪問者的位置";
$pgv_lang["gedcomid"] = "GEDCOM INDI記錄ID";
$pgv_lang["sortby"] = "序列";
$pgv_lang["exact"] = "精確";
$pgv_lang["begins_with"] = "開始于";
$pgv_lang["contains"] = "包含";
$pgv_lang["sounds_like"] = "聽上去像";
$pgv_lang["advanced_search"] = "高級搜索";
$pgv_lang["more_fields"] = "添加更多字段";
$pgv_lang["install_step_8"] = "開始";
$pgv_lang["parent_family"] = "父母家庭";
$pgv_lang["step_parent_family"] = "繼父母家庭";
$pgv_lang["immediate_family"] = "直系親屬";

$pgv_lang["load_full_tree"] = "在整頁交互式樹中查看此樹";
$pgv_lang["hide_show_spouses"] = "顯示或隱藏多個配偶";
$pgv_lang["interactive_tree"] = "互動樹";
$pgv_lang["example"] = "例：";
$pgv_lang["tree"] = "樹";
$pgv_lang["ellipsis"] = "\ xE2\ x80\ xA6";
$pgv_lang["showUnknown"] = "顯示不明性別";
$pgv_lang["count"] = "計數";
$pgv_lang["cache_life"] = "緩存文件生命周期";
$pgv_lang["medialist_unlinked"] = "只顯示不相關的媒體";
$pgv_lang["medialist_current_dir"] = "當前子目錄";
$pgv_lang["names"] = "名字";
$pgv_lang["lchildren"] = "孩子";
$pgv_lang["grandchildren"] = "孫子";
$pgv_lang["shared_note_menu"] = "共享筆記選項";
$pgv_lang["repo_menu"] = "存儲庫選項";
$pgv_lang["search_DM"] = "Daitch-Mokotoff";
$pgv_lang["search_notes"] = "共享筆記";
$pgv_lang["font"] = "字體";
$pgv_lang["use_colors"] = "使用顔色";
$pgv_lang["record_not_found"] = "找不到請求的GEDCOM記錄。這可能是由于鏈接到無效的人或損壞的GEDCOM文件。";
$pgv_lang["result_page"] = "結果頁面";
$pgv_lang["no_search_for"] = "務必選擇一個搜索選項。";
$pgv_lang["no_search_site"] = "一定要選擇至少一個遠程站點。";
$pgv_lang["search_sites"] = "要搜索的網站";
$pgv_lang["site_list"] = "網站：";
$pgv_lang["site_had"] = "包含以下內容";
$pgv_lang["label_search_engine_detected"] = "檢測到搜索引擎蜘蛛";

$pgv_lang["noemail"] = "沒有電子郵件的地址";
$pgv_lang["maxviews_exceeded"] = "允許的#GLOBALS頁面查看率[MAX_VIEWS]#perper#GLOBALS[MAX_VIEW_TIME]超過#秒。";
$pgv_lang["broadcast_not_logged_6mo"] = "向未登錄6個月的用戶發送消息";
$pgv_lang["broadcast_never_logged_in"] = "向從未登錄的用戶發送消息";
$pgv_lang["stats_to_show"] = "選擇要在此區塊中顯示的統計數據";
$pgv_lang["stat_unknown"] = "未知";
$pgv_lang["stat_link"] = "以圖表形式查看統計數據";
$pgv_lang["print_stat_link"] = "顯示統計圖表的鏈接？";


$pgv_lang["edit_shared_note"] = "編輯共享筆記";
$pgv_lang["descent_steps"] = "下降步驟";
$pgv_lang["cookie_help"] = "此網站使用cookie來跟蹤您的登錄狀態。<br /> <br />您的浏覽器似乎未啓用Cookie。您必須先啓用此網站的Cookie才能登錄。您可以查閱浏覽器的幫助有關啓用cookie的信息的文檔。";
//Individual
$pgv_lang["indi_is_remote"] = "這個人的信息是從一個遠程站點鏈接的。";
//Add Remote Link
$pgv_lang["title_search_link"] = "添加本地鏈接";
$pgv_lang["label_site_url2"] = "網站網址";

$pgv_lang["delete_family_confirm"] = "刪除家庭將取消所有人之間的聯系，但會將個人留在原地。你確定要刪除這個家庭嗎？";
$pgv_lang["add_fav_enter_note"] = "輸入關于此收藏的可選說明";
$pgv_lang["add_fav_or_enter_url"] = "或<br />\ n輸入網址和標題";
$pgv_lang["next_email_sent"] = "下一封電子郵件提醒將在\"之後發送";
$pgv_lang["last_email_sent"] = "上次發送電子郵件提醒";
$pgv_lang["index_edit_advice"] = "突出顯示一個塊名稱，然後單擊其中一個箭頭圖標，以指示的方向移動該突出顯示的塊。";
$pgv_lang["html_block_descr"] = "這是一個簡單的HTML塊，您可以將其放在頁面上以添加您可能想要的任何類型的消息。";
$pgv_lang["html_block_sample_part1"] = "<p class =\"blockhc\"> <b>將標題放在此處</b> </p> <br /> <p>點擊配置按鈕";
$pgv_lang["html_block_sample_part2"] = "改變這裏印刷的內容。</p>";
$pgv_lang["htmlplus_block_descr"] = "這是一個HTML塊，您可以將其放在頁面上以添加您可能需要的任何類型的消息。您可以將對GEDCOM信息的引用插入到HTML文本中。";
$pgv_lang["htmlplus_block_narrative"] = "敘事風格（僅英文）";
$pgv_lang["htmlplus_block_custom"] = "自定義";
$pgv_lang["htmlplus_block_taglist"] = "標簽列表";
$pgv_lang["htmlplus_block_compat"] = "兼容模式";
$pgv_lang["htmlplus_block_ui"] = "擴展接口";
$pgv_lang["total_unknown"] = "未知";
$pgv_lang["remove_custom_tags"] = "刪除自定義PGV標簽？（例如_PGVU，_THUM）";
$pgv_lang["common_upload_errors"] = "此錯誤可能意味著您嘗試上傳的文件超出了主機設置的限制.PHP中的默認限制爲2MB。您可以聯系主機的支持組，讓他們增加php.ini文件中的限制，或者您可以使用FTP上傳文件。使用<a href=\"uploadgedcom.php?action=add_form\"> <b>添加GEDCOM </b> </a>頁面添加您使用FTP上傳的GEDCOM文件。 ";
$pgv_lang["mothers_family_with"] = "媽媽的家人";
$pgv_lang["fathers_family_with"] = "父親的家人";
$pgv_lang["family_with"] = "有家人";
$pgv_lang["others"] = "其他";
$pgv_lang["first_letter_name"] = "選擇一個字，來展示以該字開頭的名字的家庭。";
$pgv_lang["first_letter_sfname"] = "選擇一個以該名字開頭的字來向家人展示配偶的名字，。";
$pgv_lang["first_letter_iname"] = "選擇一個姓氏，以顯示以該字開頭姓氏的個人。";
$pgv_lang["first_letter_fname"] = "選擇一個字，以顯示具有以該字開頭的特定姓名的個人。";
$pgv_lang["total_changes"] = "總變化";
$pgv_lang["total_links"] = "總鏈接";
$pgv_lang["top10_pageviews_nohits"] = "目前沒有任何熱門歌曲可以展示。";
$pgv_lang["top10_pageviews_msg"] = "必須在GEDCOM配置，顯示和布局部分，隱藏和顯示組中啓用命中計數器。";
$pgv_lang["review_changes_descr"] = "Pending Changes\"塊將爲具有編輯權限的用戶提供在線更改的記錄列表，這些記錄仍需要審核和接受。這些更改正在等待接受或拒絕。<br /> <br />如果此塊已啓用，具有\"接受\"權限的用戶將每天收到一封電子郵件，通知他們需要審核更改。";
$pgv_lang["review_changes_email"] = "發送提醒電子郵件？";
$pgv_lang["review_changes_email_freq"] = "提醒電子郵件頻率（天）";
$pgv_lang["review_changes_body"] = "已經對系譜數據庫進行了在線更改。這些更改需要在向所有用戶顯示之前進行審核和接受。請使用下面的URL輸入該PhpGedView網站並登錄以查看更改。";
$pgv_lang["top10_pageviews_descr"] = "此塊將顯示已被查看最多的10條記錄。此塊需要在GEDCOM配置設置中啓用命中計數器。";
$pgv_lang["top10_pageviews_block"] = "觀看次數最多的項目";
$pgv_lang["stepparent"] = "繼父母";
$pgv_lang["stepdad"] = "繼父";
$pgv_lang["stepmom"] = "後媽";
$pgv_lang["stepsister"] = "繼姐";
$pgv_lang["stepbrother"] = "繼兄弟";
$pgv_lang["facts"] = "事實";
$pgv_lang["number_sign"] = "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm_ah"] = "？";
$pgv_lang["var_not_exist"] = "<span style =\"font-weight：bold\">語言變量不存在。請報告此錯誤。</span>";


$pgv_lang["rootid"] = "譜系圖起點";
$pgv_lang["landscape_top"] = "最頂層的";
$pgv_lang["landscape_down"] = "最低端";
$pgv_lang["random_surn"] = "隨機姓氏";
$pgv_lang["generation_number"] = "代";

$pgv_lang["branch_list"] = "分支列表";
$pgv_lang["shared_note_list"] = "共享筆記";
$pgv_lang["place_list_aft"] = "放置層次結構後";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["males"] = "男性";
$pgv_lang["females"] = "女性";
$pgv_lang["NNhebrew"] = "（未知）";
$pgv_lang["PNhebrew"] = "（未知）";
$pgv_lang["NNarabic"] = "（未知）";
$pgv_lang["PNarabic"] = "（未知）";
$pgv_lang["NNgreek"] = "（未知/小時）？";
$pgv_lang["PNgreek"] = "（未知/小時）？";
$pgv_lang["NNrussian"] = "（未指定）";
$pgv_lang["PNrussian"] = "（未指定）";
$pgv_lang["NNchinese"] = 	 "(未知)";
$pgv_lang["PNchinese"] = 	 "(未知)";
$pgv_lang["NNvietnamese"] = "（未命名）";
$pgv_lang["PNvietnamese"] = "（未知年齡）";
$pgv_lang["NNthai"] = "（未知）";
$pgv_lang["PNthai"] = "（未知）";
$pgv_lang["NNother"] = "（未知）";
$pgv_lang["PNother"] = "（未知）";
$pgv_lang["unrecognized_code_msg"] = "這是一個錯誤，我們想修複它。請將此錯誤報告給";
$pgv_lang["gparents"] = "祖父母";
$pgv_lang["parent_age"] = "父母的年齡";
$pgv_lang["father_age"] = "父親的年齡";
$pgv_lang["mother_age"] = "母親的年齡";
$pgv_lang["challenged"] = "挑戰";
$pgv_lang["disproved"] = "反駁";
$pgv_lang["no_tab1"] = "這個人沒有任何事實。";
$pgv_lang["no_tab2"] = "這個人沒有備注。";
$pgv_lang["no_tab3"] = "這個人沒有來源引用。";
$pgv_lang["no_tab4"] = "這個人沒有媒體對象。";
$pgv_lang["no_tab5"] = "這個人沒有近親。";
$pgv_lang["no_tab6"] = "這個人沒有研究日志。";
$pgv_lang["show_fact_sources"] = "顯示所有來源";
$pgv_lang["show_fact_notes"] = "顯示所有筆記";

$pgv_lang["known_child"] = "1個孩子";
$pgv_lang["known_children"] = "孩子";
$pgv_lang["which_s_links"] = "應該添加哪些與此來源相關的記錄？";
$pgv_lang["just_source"] = "只添加此來源。";
$pgv_lang["linked_source"] = "添加此源以及與之關聯的家庭/人員。";
$pgv_lang["family_private"] = "關于這個家庭的詳細信息是私人的。不包括家庭詳細信息。";
$pgv_lang["media_private"] = "有關此媒體的詳細信息是私密的。媒體詳情不會包括在內。";
$pgv_lang["download_file"] = "下載文件#GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"] = "這個人是從以下網站下載的：";
$pgv_lang["family_downloaded_from"] = "這個家庭是從以下網站下載的：";
$pgv_lang["source_downloaded_from"] = "此來源是從以下網址下載的：";
$pgv_lang["enter_person_generations"] = "世代數：";
$pgv_lang["convertPath"] = "將媒體路徑轉換爲";
$pgv_lang["convertSlashes"] = "將媒體文件夾分隔符轉換爲";
$pgv_lang["forwardSlashes"] = "正斜杠：/";
$pgv_lang["backSlashes"] = "反斜杠：\\";

$pgv_lang["view_records_in_place"] = "查看在這個地方找到的所有記錄";
$pgv_lang["show_place_hierarchy"] = "在層次結構中顯示位置";
$pgv_lang["show_place_list"] = "顯示列表中的所有位置";
$pgv_lang["total_unic_places"] = "獨特的地方";

$pgv_lang["external_objects"] = "外部對象";
$pgv_lang["record_not_updated"] = "記錄#pid#無法更新。";
$pgv_lang["record_removed"] = "記錄#xref#已成功從GEDCOM中刪除。";
$pgv_lang["record_not_removed"] = "記錄#xref#無法從GEDCOM中刪除。";
$pgv_lang["record_not_added"] = "記錄#xref#無法添加到GEDCOM。";

$pgv_lang["shared_notes"] = "共享筆記";
$pgv_lang["search_soundex"] = "Soundex搜索";
$pgv_lang["search_replace"] = "搜索和替換";
$pgv_lang["search_shared_notes"] = "共享筆記";
$pgv_lang["search_more_chars"] = "請輸入多個字符";
$pgv_lang["search_soundextype"] = "Soundex類型：";
$pgv_lang["search_russell"] = "基本";
$pgv_lang["search_tagfilter"] = "排除過濾器";
$pgv_lang["search_tagfon"] = "排除一些非家譜數據";
$pgv_lang["search_tagfoff"] = "關";
$pgv_lang["associate"] = "關聯";
$pgv_lang["search_record"] = "整個記錄";
$pgv_lang["search_to"] = "至";

$pgv_lang["titles_found"] = "標題";
$pgv_lang["find_source"] = "尋找來源";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"] = "資源庫";
$pgv_lang["repos_found"] = "存儲庫發現";
$pgv_lang["find_repository"] = "查找存儲庫";
$pgv_lang["confirm_delete_repo"] = "你確定要刪除這個存儲庫嗎？";


//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"] = "共享筆記";
$pgv_lang["shared_notes_found"] = "找到共享筆記";
$pgv_lang["find_shared_note"] = "查找共享筆記";
$pgv_lang["shared_note_info"] = "共享筆記信息";
$pgv_lang["total_shared_notes"] = "共享筆記總數";

$pgv_lang["invalid_gedformat"] = "無效的GEDCOM格式";
$pgv_lang["changes_present"] = "當前的GEDCOM有待審核的更改。如果繼續此導入，這些待處理的更改將被丟棄。您應該在繼續導入之前查看待處理的更改。";
$pgv_lang["apply_filter"] = "應用過濾器";
$pgv_lang["find_specialchar"] = "尋找特殊人物";
$pgv_lang["skip_marnms"] = "排除已婚姓名";
$pgv_lang["show_marnms"] = "包括已婚姓名";
$pgv_lang["confidential"] = "機密";
$pgv_lang["alpha_index"] = "字母索引";
$pgv_lang["name_list"] = "名單";
$pgv_lang["firstname_alpha_index"] = "名字字母索引";
$pgv_lang["leaves"] = "樹葉";
$pgv_lang["widow"] = "寡婦";
$pgv_lang["widower"] = "鳏夫";
$pgv_lang["show_parents"] = "顯示父母";
$pgv_lang["husb_age"] = "丈夫的年齡";
$pgv_lang["wife_age"] = "妻子的年齡";
$pgv_lang["years2"] = "年份";
$pgv_lang["week1"] = "周";
$pgv_lang["weeks"] = "周";
$pgv_lang["at_death_day"] = "在去世之日";

//calendar conversion options
$pgv_lang["cal_julian"] = "朱利安";
$pgv_lang["cal_french"] = "法國";
$pgv_lang["cal_jewish"] = "猶太";
$pgv_lang["cal_hebrew"] = "希伯來文";
$pgv_lang["cal_jewish_and_gregorian"] = "猶太人和格裏高利人";
$pgv_lang["cal_hebrew_and_gregorian"] = "希伯來語和格裏高利語";
$pgv_lang["cal_hijri"] = "回曆";
$pgv_lang["cal_arabic"] = "阿拉伯";

//some religious dates
$pgv_lang["easter"] = "複活節";
$pgv_lang["ascension"] = "升天";
$pgv_lang["pentecost"] = "五旬節";
$pgv_lang["assumption"] = "假設";
$pgv_lang["all_saints"] = "萬聖節";
$pgv_lang["christmas"] = "聖誕";

//am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."] = "上午";
$pgv_lang["p.m."] = "下午";
$pgv_lang["noon"] = "M";
$pgv_lang["midn"] = "錳";


$pgv_lang["vend"] = "葡月";
$pgv_lang["brum"] = "霧月";
$pgv_lang["frim"] = "霜月";
$pgv_lang["nivo"] = "雪月";
$pgv_lang["pluv"] = "Pluviôse";
$pgv_lang["vent"] = "Ventose";
$pgv_lang["germ"] = "生發";
$pgv_lang["flor"] = "Floreal酒店";
$pgv_lang["prai"] = "Prairial";
$pgv_lang["mess"] = "獲月";
$pgv_lang["ther"] = "熱月";
$pgv_lang["fruc"] = "果月";
$pgv_lang["comp"] = "額外的日子";

$pgv_lang["tsh"] = "提斯利月";
$pgv_lang["csh"] = "ःashwn";
$pgv_lang["ksl"] = "基斯流";
$pgv_lang["tvt"] = "提別";
$pgv_lang["shv"] = "細罷特月";
$pgv_lang["adr"] = "三八";
$pgv_lang["adr_leap_year"] = "阿達爾我";
$pgv_lang["ads"] = "阿達爾二世";
$pgv_lang["nsn"] = "日産";
$pgv_lang["iyr"] = "埃亞";
$pgv_lang["svn"] = "歡迎";
$pgv_lang["tmz"] = "Tamuz";
$pgv_lang["aav"] = "關";
$pgv_lang["ell"] = "生命";

$pgv_lang["muhar"] = "回曆";
$pgv_lang["safar"] = "薩法爾";
$pgv_lang["rabia"] = "Rabi'al-awwal";
$pgv_lang["rabit"] = "Rabi'al-thani";
$pgv_lang["jumaa"] = "Jumada al-awwal";
$pgv_lang["jumat"] = "Jumada al-thani";
$pgv_lang["rajab"] = "回曆";
$pgv_lang["shaab"] = "Sha'aban";
$pgv_lang["ramad"] = "齋月";
$pgv_lang["shaww"] = "的Shawwal";
$pgv_lang["dhuaq"] = "Dhu al-Qi'dah";
$pgv_lang["dhuah"] = "Dhu al-Hijjah";

$pgv_lang["b.c."] = "公元前。";

$pgv_lang["basic_auth"] = "基本認證";
$pgv_lang["digest_auth"] = "摘要認證"; //尚未在ID中使用
$pgv_lang["no_auth_needed"] = "沒有認證";
$pgv_lang["media_not_linked"] = "此媒體對象未與任何GEDCOM記錄相關聯。";
$pgv_lang["media_dir_1"] = "此媒體對象位于外部服務器上";
$pgv_lang["media_dir_2"] = "此媒體對象位于標淮媒體目錄中";
$pgv_lang["media_dir_3"] = "此媒體對象位于受保護的媒體目錄中";
$pgv_lang["thumb_dir_1"] = "此縮略圖位于外部服務器上";
$pgv_lang["thumb_dir_2"] = "此縮略圖位于標淮媒體目錄中";
$pgv_lang["thumb_dir_3"] = "此縮略圖位于受保護的媒體目錄中";
$pgv_lang["moveto_2"] = "移至受保護的目錄";
$pgv_lang["moveto_3"] = "移至標淮目錄";
$pgv_lang["move_standard"] = "轉向標淮";
$pgv_lang["move_protected"] = "轉移到受保護的";
$pgv_lang["move_mediadirs"] = "移動媒體目錄";
$pgv_lang["setperms"] = "設置媒體權限";
$pgv_lang["setperms_fix"] = "正確的讀/寫/執行權限";
$pgv_lang["setperms_success"] = "權限集";
$pgv_lang["setperms_failure"] = "未設置權限";
$pgv_lang["setperms_time_exceeded"] = "已達到執行時間限制。請在較小的目錄上再次嘗試該命令。";
$pgv_lang["move_time_exceeded"] = "達到了執行時間限制。再次嘗試命令移動其余文件。";
$pgv_lang["media_firewall_rootdir_no_exist"] = "您請求的媒體防火牆根目錄不存在。您必須先創建它。";
$pgv_lang["media_firewall_protected_dir_no_exist"] = "無法在Media Firewall根目錄中創建受保護的媒體目錄。請創建此目錄並使其成爲全局可寫的。";
$pgv_lang["media_firewall_protected_dir_not_writable"] = "媒體防火牆根目錄中受保護的媒體目錄不是全局可寫的。";
$pgv_lang["media_firewall_invalid_dir"] = "錯誤：媒體防火牆是從媒體目錄以外的目錄啓動的。";

$pgv_lang["view_fam_nav_details"] = "查看...的詳細信息";
$pgv_lang["view_fam_nav_notes"] = "查看......的注釋";
$pgv_lang["view_fam_nav_sources"] = "查看來源......";
$pgv_lang["view_fam_nav_media"] = "查看媒體......";
$pgv_lang["view_fam_nav_album"] = "查看相冊...";
$pgv_lang["view_fam_nav_relatives"] = "查看親戚......";
$pgv_lang["view_fam_nav_tree"] = "查看樹...";
$pgv_lang["view_fam_nav_research"] = "查看研究......";
$pgv_lang["view_fam_nav_map"] = "查看地圖...";
$pgv_lang["view_fam_nav_spare"] = "查看備用信息......";
$pgv_lang["navigator"] = "航海家";
$pgv_lang["fam_navigator"] = "家庭導航員";

$pgv_lang["relationship_great"] = "大";
$pgv_lang["no_other_link_found"] = "找不到兩個人之間的其他聯系。";
$pgv_lang["greatgrandchild"] = "曾孫子女";
$pgv_lang["greatgrandson"] = "曾孫";
$pgv_lang["greatgranddaughter"] = "曾孫女";
$pgv_lang["aunt"] = "姑媽";
$pgv_lang["uncle"] = "叔叔";
$pgv_lang["firstcousin"] = "第一代堂兄";
$pgv_lang["femalecousin"] = "表妹";
$pgv_lang["malecousin"] = "男性表弟";
$pgv_lang["relationship_to_me"] = "與我的關系";
$pgv_lang["rela_husb"] = "與丈夫的關系";
$pgv_lang["rela_wife"] = "與妻子的關系";
$pgv_lang["next_path"] = "找到下一條路";
$pgv_lang["line_up_generations"] = "排列同代";
$pgv_lang["oldest_top"] = "顯示最古老的頂部";

//%1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s 是 %3\$s 的 %2\$s 。";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s 是 %3\$s 的 %2\$s 。";

$pgv_lang["mother_in_law"] = "嶽母";
$pgv_lang["father_in_law"] = "嶽父";
$pgv_lang["brother_in_law"] = "長者的意思是鐵則";
$pgv_lang["sister_in_law"] = "嫂子";
$pgv_lang["brothers_wife"] = "嫂子"; //兄弟的妻子
$pgv_lang["son_in_law"] = "女婿";
$pgv_lang["daughter_in_law"] = "媳婦";
$pgv_lang["uncle_in_law"] = "叔叔女婿";
$pgv_lang["aunt_in_law"] = "大娘女婿";
$pgv_lang["cousin_in_law"] = "表哥女婿";
$pgv_lang["m_cousin_in_law"] = "表哥女婿";
$pgv_lang["f_cousin_in_law"] = "表哥女婿";
$pgv_lang["step_son"] = "繼子";
$pgv_lang["step_daughter"] = "繼女";

//the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
$pgv_lang["bosa_brothers_offspring_2"] = "外甥"; //兄弟的兒子
$pgv_lang["bosa_brothers_offspring_3"] = "侄女"; //兄弟的女兒
$pgv_lang["bosa_brothers_offspring_4"] = "堂孫子"; //兄弟的兒子的兒子
$pgv_lang["bosa_brothers_offspring_5"] = "堂孫女"; //兄弟的兒子的女兒
$pgv_lang["bosa_brothers_offspring_6"] = "堂外孫"; //兄弟的女兒的兒子
$pgv_lang["bosa_brothers_offspring_7"] = "堂外孫女"; //兄弟的女兒的女兒
$pgv_lang["n_x_brothers_son"] = "%2\$d x孫子";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x孫女";
//the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
$pgv_lang["bosa_sisters_offspring_2"] = "外甥"; //姐姐的兒子
$pgv_lang["bosa_sisters_offspring_3"] = "侄女"; //妹妹的女兒
$pgv_lang["bosa_sisters_offspring_4"] = "表孫子"; //姐姐的兒子的兒子
$pgv_lang["bosa_sisters_offspring_5"] = "表孫女"; //姐姐的兒子的女兒
$pgv_lang["bosa_sisters_offspring_6"] = "表孫子"; //姐姐的女兒的兒子
$pgv_lang["bosa_sisters_offspring_7"] = "表外孫"; //姐姐的女兒的女兒
$pgv_lang["n_x_sisters_son"] = "%2\$d x偉大的侄子";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x偉大的侄女";
$pgv_lang["n_x_grandson_from_son"] = "%3\$d x偉大的孫子";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x偉大的孫女";
$pgv_lang["n_x_grandson_from_daughter"] = "%3\$d x偉大的孫子";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x偉大的孫女";

//the sosa_uncle name is used for uncles - the names below can be extended to any number
$pgv_lang["sosa_uncle_2"] = "叔叔"; //父親的兄弟
$pgv_lang["sosa_uncle_3"] = "舅舅"; //舅
$pgv_lang["sosa_uncle_4"] = "堂爺爺"; //父親的父親的兄弟
$pgv_lang["sosa_uncle_5"] = "舅姥"; //父親的母親的兄弟
$pgv_lang["sosa_uncle_6"] = "外爺爺"; //母親的父親的兄弟
$pgv_lang["sosa_uncle_7"] = "外舅姥"; //母親的母親的兄弟
$pgv_lang["n_x_paternal_uncle"] = "%2\$d x偉大的叔叔";
$pgv_lang["n_x_maternal_uncle"] = "%2\$d x偉大的叔叔";
$pgv_lang["sosa_aunt_2"] = "姑媽"; //父親的妹妹
$pgv_lang["sosa_aunt_3"] = "姑媽"; //姨
$pgv_lang["sosa_aunt_4"] = "姑奶"; //父親的父親的妹妹
$pgv_lang["sosa_aunt_5"] = "姑奶"; //父親的母親的妹妹
$pgv_lang["sosa_aunt_6"] = "姑奶"; //母親的父親的妹妹
$pgv_lang["sosa_aunt_7"] = "姑奶"; //母親的母親的妹妹
$pgv_lang["n_x_paternal_aunt"] = "%2\$d x姑奶";
$pgv_lang["n_x_maternal_aunt"] = "%2\$d x姑奶";

//the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
//aunts and uncles
$pgv_lang["sosa_uncle_bm_2"] = "叔叔"; //父親的兄弟
$pgv_lang["sosa_uncle_bm_3"] = "叔叔"; //舅
$pgv_lang["sosa_uncle_bm_4"] = "偉大的叔叔"; //父親的父親的兄弟
$pgv_lang["sosa_uncle_bm_5"] = "偉大的叔叔"; //父親的母親的兄弟
$pgv_lang["sosa_uncle_bm_6"] = "偉大的叔叔"; //母親的父親的兄弟
$pgv_lang["sosa_uncle_bm_7"] = "偉大的叔叔"; //母親的母親的兄弟
//for the general case of uncles of the nth degree use the text below
$pgv_lang["n_x_paternal_uncle_bm"] = "%2\$d x偉大的叔叔";
$pgv_lang["n_x_maternal_uncle_bm"] = "%2\$d x偉大的叔叔";

//the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
//of generations just by adding more translations.
//to allow fo language variations we specify different relationships for paternal and maternal
//aunts and aunts
//1st generation
$pgv_lang["sosa_aunt_bm_2"] = "姑媽"; //父親的妹妹
$pgv_lang["sosa_aunt_bm_3"] = "姑媽"; //姨
//2nd generation
$pgv_lang["sosa_aunt_bm_4"] = "阿姨"; //父親的父親的妹妹
$pgv_lang["sosa_aunt_bm_5"] = "阿姨"; //父親的母親的妹妹
$pgv_lang["sosa_aunt_bm_6"] = "阿姨"; //母親的父親的妹妹
$pgv_lang["sosa_aunt_bm_7"] = "阿姨"; //母親的母親的妹妹
//for the general case of aunts of the nth degree use the text below
//in this text %1\$d is replaced with the number of generations
//             %2\$d is replaced with the number of generations - 1
//             %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"] = "%2\$d x偉大的阿姨";
$pgv_lang["n_x_maternal_aunt_bm"] = "%2\$d x偉大的阿姨";

//if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"] = "第一代堂兄";
$pgv_lang["male_cousin_2"] = "第二個表弟";
$pgv_lang["male_cousin_3"] = "第三代堂兄";
$pgv_lang["male_cousin_4"] = "第四代堂兄";
$pgv_lang["male_cousin_5"] = "第五堂兄";
$pgv_lang["male_cousin_6"] = "第六代堂兄";
$pgv_lang["male_cousin_7"] = "第七堂兄";
$pgv_lang["male_cousin_8"] = "第八堂兄";
$pgv_lang["male_cousin_9"] = "第九表弟";
$pgv_lang["male_cousin_10"] = "第十個堂兄";
$pgv_lang["male_cousin_11"] = "第十一堂兄";
$pgv_lang["male_cousin_12"] = "第十二表弟";
$pgv_lang["male_cousin_13"] = "第十三表弟";
$pgv_lang["male_cousin_14"] = "第十四個堂兄";
$pgv_lang["male_cousin_15"] = "第十五表弟";
$pgv_lang["male_cousin_16"] = "第十六個堂兄";
$pgv_lang["male_cousin_17"] = "第十七表弟";
$pgv_lang["male_cousin_18"] = "第十八表弟";
$pgv_lang["male_cousin_19"] = "第十九表弟";
$pgv_lang["male_cousin_20"] = "第二十個堂兄";
$pgv_lang["male_cousin_n"] = "%d x cousin";
$pgv_lang["female_cousin_1"] = "第一代堂兄";
$pgv_lang["female_cousin_2"] = "第二個表弟";
$pgv_lang["female_cousin_3"] = "第三代堂兄";
$pgv_lang["female_cousin_4"] = "第四代堂兄";
$pgv_lang["female_cousin_5"] = "第五堂兄";
$pgv_lang["female_cousin_6"] = "第六代堂兄";
$pgv_lang["female_cousin_7"] = "第七堂兄";
$pgv_lang["female_cousin_8"] = "第八堂兄";
$pgv_lang["female_cousin_9"] = "第九表弟";
$pgv_lang["female_cousin_10"] = "第十個堂兄";
$pgv_lang["female_cousin_11"] = "第十一堂兄";
$pgv_lang["female_cousin_12"] = "第十二表弟";
$pgv_lang["female_cousin_13"] = "第十三表弟";
$pgv_lang["female_cousin_14"] = "第十四個堂兄";
$pgv_lang["female_cousin_15"] = "第十五表弟";
$pgv_lang["female_cousin_16"] = "第十六個堂兄";
$pgv_lang["female_cousin_17"] = "第十七表弟";
$pgv_lang["female_cousin_18"] = "第十八表弟";
$pgv_lang["female_cousin_19"] = "第十九表弟";
$pgv_lang["female_cousin_20"] = "第二十個堂兄";
$pgv_lang["female_cousin_n"] = "%d x cousin";

//Only referenced from english specific functions
$pgv_lang["removed_ascending_1"] = "一旦被提升";
$pgv_lang["removed_ascending_2"] = "兩次上升";
$pgv_lang["removed_ascending_3"] = "三次取消提升";
$pgv_lang["removed_ascending_4"] = "四次取消提升";
$pgv_lang["removed_ascending_5"] = "五次取消提升";
$pgv_lang["removed_ascending_6"] = "六次上升";
$pgv_lang["removed_ascending_7"] = "七次取消提升";
$pgv_lang["removed_ascending_8"] = "八次取消提升";
$pgv_lang["removed_ascending_9"] = "九次撤銷";
$pgv_lang["removed_ascending_10"] = "十次撤銷";
$pgv_lang["removed_ascending_11"] = "十一次取消提升";
$pgv_lang["removed_ascending_12"] = "十二次上升";
$pgv_lang["removed_ascending_13"] = "十三次取消上升";
$pgv_lang["removed_ascending_14"] = "十四次取消上升";
$pgv_lang["removed_ascending_15"] = "十五次上升";
$pgv_lang["removed_ascending_16"] = "十六次上升";
$pgv_lang["removed_ascending_17"] = "十七次上升";
$pgv_lang["removed_ascending_18"] = "十八次上升";
$pgv_lang["removed_ascending_19"] = "十九次被提升";
$pgv_lang["removed_ascending_20"] = "二十次被提升";
$pgv_lang["removed_descending_1"] = "一旦被刪除";
$pgv_lang["removed_descending_2"] = "兩次下降";
$pgv_lang["removed_descending_3"] = "三次下降";
$pgv_lang["removed_descending_4"] = "四次下降";
$pgv_lang["removed_descending_5"] = "五次下降";
$pgv_lang["removed_descending_6"] = "六次下降";
$pgv_lang["removed_descending_7"] = "七次下降";
$pgv_lang["removed_descending_8"] = "八次下降";
$pgv_lang["removed_descending_9"] = "九次刪除";
$pgv_lang["removed_descending_10"] = "十次去除下降";
$pgv_lang["removed_descending_11"] = "十一次去掉了";
$pgv_lang["removed_descending_12"] = "十二次下降";
$pgv_lang["removed_descending_13"] = "十三次刪除了下降";
$pgv_lang["removed_descending_14"] = "十四次去掉了";
$pgv_lang["removed_descending_15"] = "十五次下降";
$pgv_lang["removed_descending_16"] = "十六次下降";
$pgv_lang["removed_descending_17"] = "十七次去掉了";
$pgv_lang["removed_descending_18"] = "十八次下降";
$pgv_lang["removed_descending_19"] = "十九次去掉了";
$pgv_lang["removed_descending_20"] = "二十次被刪除";

$pgv_lang["delete_shared_note"] = "刪除此共享注釋";
$pgv_lang["confirm_delete_shared_note"] = "您確定要刪除此共享筆記嗎？";
$pgv_lang["user_cannot_edit"] = "此用戶名無法編輯此GEDCOM。";
$pgv_lang["privacy_not_granted"] = "你無法進入";
$pgv_lang["privacy_prevented_editing"] = "隱私設置會阻止您編輯此記錄。";
$pgv_lang["ged_noshow"] = "網站管理員已禁用此頁面。";

$pgv_lang["year_yahrzeit"] = "#yahzeit_date#，#yahrzeit#yahrzeit of#event_date#";
$pgv_lang["mail02_line04a"] = "當這位潛在用戶確認了他的請求時，您將收到電子郵件通知。此後，用戶將無需您的任何操作即可登錄。";
$pgv_lang["pls_note06a"] = "我們現在會向地址<b>#user_email#</b>發送一封確認電子郵件。您必須按照確認電子郵件中的說明驗證您的帳戶請求。如果您在七天內未確認您的帳戶申請，那麽您的申請將被自動拒絕。您將需要再次申請。<br /> <br />在您按照確認電子郵件中的說明操作後，您可以登錄。要登錄此站點，您需要知道您的用戶名和密碼。<br /> <br />";

$pgv_lang["mail03_line03a"] = "您不必采取任何行動;用戶現在可以登錄。";
$pgv_lang["mail04_line05"] = "登錄後，選擇«#pgv_lang[mygedview]#»菜單下的«#pgv_lang[editowndata]#»鏈接，並填寫密碼字段以更改密碼。";

$pgv_lang["welcome_text_auth_mode_1"] = "<span class ='center'> <b>歡迎來到這個家譜網站</b> </span> <br />每個擁有用戶帳戶的訪問者都可以訪問此網站。<br /> <br如果您有用戶帳戶，可以在此頁面登錄。如果您沒有用戶帳戶，可以點擊下面的相應鏈接申請。<br /> <br />驗證後應用程序，網站管理員將激活您的帳戶。當您的申請獲得批淮後，您將收到一封電子郵件。";
$pgv_lang["welcome_text_auth_mode_2"] = "<span class ='center'> <b>歡迎來到這個家譜網站</b> </span> <br />只允許<u>授權的</u>用戶訪問本網站。<br/> <br />如果你有一個用戶帳戶，你可以在這個頁面上登錄。如果你沒有用戶帳戶，你可以點擊下面的相應鏈接申請一個。<br /> <br />之後驗證您的信息後，管理員將批淮或拒絕您的帳戶申請。當您的申請獲得批淮後，您會收到一封電子郵件。";
$pgv_lang["acceptable_use"] = "<div class =\"largeError\">注意：</div> <div class =\"error\">填寫並提交此表單，即表示您同意：<ul> <li>保護生活隱私在我們的網站上列出; </li> <li>並在下面的文本框中，向您解釋與您有關的人，或向我們提供有關應該在我們網站上列出的人的信息。</li> </ul > </DIV>";


$pgv_lang["style"] = "演講風格";
$pgv_lang["style3"] = "標簽雲";
$pgv_lang["sort_style"] = "排序風格";
$pgv_lang["by_anniv"] = "周年紀念日";
$pgv_lang["by_alpha"] = "按字母順序";
$pgv_lang["cal_download"] = "允許日曆活動下載？";
$pgv_lang["no_events_living"] = "對于下一個#pgv_lang[global_num1]#days，沒有爲活著的人提供任何活動。";
$pgv_lang["no_events_living1"] = "明天不存在健在人員的事件。";
$pgv_lang["no_events_all"] = "下一個#pgv_lang[global_num1]#days不存在任何事件。";
$pgv_lang["no_events_all1"] = "明天不存在任何事件。";
$pgv_lang["no_events_privacy"] = "下一個#pgv_lang[global_num1]#days存在事件，但隱私限制會阻止您查看它們。";
$pgv_lang["no_events_privacy1"] = "明天會有活動，但隱私限制會阻止你看到它們。";
$pgv_lang["more_events_privacy"] = "<br />下一個#pgv_lang[global_num1]#days存在更多事件，但隱私限制會阻止您查看它們。";
$pgv_lang["more_events_privacy1"] = "<br />明天會有更多的活動，但隱私限制會阻止你看到它們。";
$pgv_lang["none_today_living"] = "今天沒有爲活著的人提供的活動。";
$pgv_lang["none_today_all"] = "今天沒有任何活動。";
$pgv_lang["none_today_privacy"] = "今天存在的事件，但隱私限制阻止你看到它們。";
$pgv_lang["more_today_privacy"] = "<br />今天有更多的活動，但隱私限制阻止你看到它們。";
$pgv_lang["anon_user"] = "1個匿名登錄用戶";
$pgv_lang["anon_users"] = "#pgv_lang[global_num1]#匿名登錄用戶";
$pgv_lang["login_user"] = "1個登錄用戶";
$pgv_lang["login_users"] = "#pgv_lang[global_num1]#login-in users";
$pgv_lang["no_login_users"] = "沒有登錄，也沒有匿名用戶";
$pgv_lang["message_failed"] = "無法發送消息";
$pgv_lang["message_error"] = "PHPMailer錯誤：";
$pgv_lang["message_invalid_from"] = "發件人地址無效：&lt;#mail#&gt;";
$pgv_lang["message_invalid_to"] = "收件人地址無效：&lt;#mail#&gt;";
$pgv_lang["message_instructions"] = "<b>請注意：</b>生活個人的私人信息只會發給親屬和親密朋友。在您收到任何私人數據之前，您將被要求驗證您的關系。有時死者的信息也可能如果是這種情況，那是因爲沒有足夠的信息來確定這個人是否還活著，我們可能沒有關于這個人的更多信息。<br /> <br />之前提出問題，請通過查看日期，地點和近親來驗證您是否詢問了正確的人。如果您要提交對系譜數據的更改，請包括您獲取數據的來源。<br /> <br />";
$pgv_lang["sending_to"] = "此消息將發送至#TO_USER#";
$pgv_lang["preferred_lang"] = "此用戶更喜歡在#USERLANG#\"中接收消息";
$pgv_lang["gedcom_created_using"] = "這個GEDCOM是使用<b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>創建的";
$pgv_lang["gedcom_created_on"] = "這個GEDCOM是在<b>#CREATED_DATE#</b>\"創建的";
$pgv_lang["gedcom_created_on2"] = "在<b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"] = "GEDCOM統計";
$pgv_lang["upcoming_events_descr"] = "即將發生的事件\"塊顯示將在不久的將來發生的事件周年紀念日。您可以配置顯示的詳細信息量，管理員可以配置此塊看起來未來的距離。";
$pgv_lang["todays_events_descr"] = "在這一天，在您的曆史中...塊顯示今天的事件紀念日。您可以配置顯示的詳細信息量。";
$pgv_lang["todo_block"] = "待辦\"任務";
$pgv_lang["todo_descr"] = "待辦事項塊列出了數據庫中所有未完成的_TODO事實。";
$pgv_lang["todo_show_other"] = "顯示其他用戶的任務";
$pgv_lang["todo_show_unassigned"] = "顯示未分配的任務";
$pgv_lang["todo_show_future"] = "展示未來的任務";
$pgv_lang["todo_nothing"] = "沒有\"待辦事項\"任務。";
$pgv_lang["yahrzeit_block"] = "即將到來的Yahrzeiten";
$pgv_lang["yahrzeit_descr"] = "即將到來的Yahrzeiten區塊顯示將在不久的將來發生的去世日期。您可以配置顯示的時間段，並且管理員可以配置此區塊看起來未來的距離。";
$pgv_lang["logged_in_users_block"] = "登錄用戶";
$pgv_lang["logged_in_users_descr"] = "登錄用戶\"塊顯示當前登錄的用戶列表。";
$pgv_lang["user_messages_descr"] = "用戶消息塊顯示已發送給活動用戶的消息列表。";
$pgv_lang["user_favorites_descr"] = "用戶收藏夾塊向用戶顯示數據庫中他最喜歡的人的列表，以便他可以輕松鏈接到他們。";
$pgv_lang["welcome_descr"] = "用戶歡迎程序塊向用戶顯示當前日期和時間，快速鏈接以修改其帳戶或轉到他自己的譜系圖表，以及用于自定義其MyGedView門戶頁面的鏈接。";
$pgv_lang["random_media_descr"] = "隨機媒體塊從當前活動的數據庫中隨機選擇一張照片或其他媒體項目，並將其顯示給用戶。<br /> <br />管理員確定此塊是否可以顯示與人員或事件相關的媒體項目。" ;
$pgv_lang["random_media_persons_or_all"] = "只展示人，事件或所有人？";
$pgv_lang["gedcom_descr"] = "GEDCOM歡迎塊與用戶歡迎塊的工作方式相同。它歡迎訪問該站點並顯示當前活動數據庫的標題以及當前日期和時間。";
$pgv_lang["gedcom_favorites_descr"] = "GEDCOM收藏夾塊使管理員能夠從數據庫中指定個人，以便所有人都可以輕松訪問他們的信息。這是一種突出顯示您家族曆史中重要人物的方式。";
$pgv_lang["gedcom_stats_descr"] = "GEDCOM Statistics塊向訪問者顯示了一些關于數據庫的基本信息，例如它何時被創建以及其中有多少人。<br /> <br />它還有一個最常用的姓氏列表。你可以將此塊配置爲不顯示頻繁姓氏列表，您還可以配置GEDCOM以刪除或添加此列表中的名稱。您可以在GEDCOM配置中設置此列表的發生阈值。";
$pgv_lang["portal_config_instructions"] = "~#pgv_lang[customize_page]#~<br />~#pgv_lang[customize_gedcom_page]#~<br /> <br />您可以通過按照您希望的方式在頁面上放置塊來自定義頁面。 /> <br />該頁面分爲<b> Main </b>和<b> Right </b>部分。";
$pgv_lang["login_descr"] = "Login塊接受用戶登錄的用戶名和密碼。";
$pgv_lang["theme_select_descr"] = "即使禁用了更改主題功能，主題選擇塊也會顯示主題選擇器。";
$pgv_lang["block_top10_title"] = "十大姓氏";
$pgv_lang["block_top10"] = "十大姓氏";
$pgv_lang["block_top10_descr"] = "此塊顯示數據庫中10個最常出現的姓氏的表格。此塊中顯示的實際姓氏數量是可配置的。您可以配置GEDCOM從該列表中刪除名稱。";
$pgv_lang["block_cookiepolicy"] = "Cookie政策";
$pgv_lang["block_cookiepolicy_title"] = "Cookie政策";
$pgv_lang["block_cookiepolicy_descr"] = "此塊顯示了歐盟Cookie法律要求的本網站的cookie政策。";
$pgv_lang["block_cookiepolicy_body"] = "<span class =\"warning\">歐盟Cookie法要求此通知。</span> <br />本網站盡量不使用cookies，僅在技術上需要時才這樣做。沒有個人信息，不是甚至您的用戶名或密碼也存儲在由本網站創建的cookie中。<br /> <br />由于技術原因超出本網站的控制範圍，當您結束本網站的會話時，這些cookie不會被刪除。但是，它們是浏覽器終止時立即刪除。";
$pgv_lang["block_cookiepolicy_body_extlink"] = "<span class =\"warning\">歐盟Cookie法要求此通知。</span> <br />本網站盡量不使用cookies，僅在技術上需要時才這樣做。沒有個人信息，不是甚至您的用戶名或密碼也存儲在本網站創建的cookie中。有關本網站cookie政策的更多詳情，請關注<a href=\"<link>\" target =\"_ blank\" title =\"特定于網站的cookie政策\">此鏈接</a>。<br /> <br />由于技術原因超出了本網站的控制範圍，當您終止與本網站的會話時，這些cookie不會被刪除。但是，當您的浏覽器終止時，它們會立即被刪除。 ";
$pgv_lang["block_cookiepolicy_link"] = "Cookie政策頁面鏈接";
$pgv_lang["block_givn_top10_title"] = "十大名字";
$pgv_lang["block_givn_top10"] = "十大名字";
$pgv_lang["block_givn_top10_descr"] = "此塊顯示數據庫中10個最常出現的給定名稱的表。此塊中顯示的給定名稱的實際數量是可配置的。";

$pgv_lang["gedcom_news_descr"] = "GEDCOM新聞塊顯示訪客新聞稿或管理員用戶發布的文章。<br /> <br />新聞塊是宣布重要數據庫更新，家庭團聚或孩子出生的好地方。";
$pgv_lang["gedcom_news_limit"] = "限制顯示：";
$pgv_lang["gedcom_news_limit_nolimit"] = "沒有限制";
$pgv_lang["gedcom_news_limit_date"] = "項目年齡";
$pgv_lang["gedcom_news_flag"] = "限制：";
$pgv_lang["user_news_descr"] = "用戶日志塊可以讓用戶在線保存筆記或日記。";
$pgv_lang["no_journal"] = "你還沒有創建任何期刊項目。";
$pgv_lang["confirm_journal_delete"] = "你確定要刪除這個日記條目嗎？";
$pgv_lang["confirm_news_delete"] = "你確定要刪除這個新聞條目嗎？";
$pgv_lang["add_news"] = "添加新聞文章";
$pgv_lang["no_news"] = "沒有提交新聞文章。";
$pgv_lang["enter_title"] = "請輸入標題。";
$pgv_lang["enter_text"] = "請輸入此新聞或日記條目的一些文字。";
$pgv_lang["news_saved"] = "新聞/期刊錄入成功保存。";
$pgv_lang["article_text"] = "輸入文字：";
$pgv_lang["main_section"] = "主要部分塊";
$pgv_lang["right_section"] = "右側區塊";
$pgv_lang["available_blocks"] = "可用塊";
$pgv_lang["move_up"] = "提升";
$pgv_lang["move_down"] = "向下移動";
$pgv_lang["move_right"] = "向右移";
$pgv_lang["move_left"] = "向左移動";
$pgv_lang["broadcast_all"] = "向所有用戶廣播";
$pgv_lang["hit_count"] = "命中數：";
$pgv_lang["default_news_text"] = "本網站上的家譜信息由<a href=\"http://www.phpgedview.net/\" target=\"_blank\"> PhpGedView </a>提供支持。此頁面提供了介紹和概述這個家譜。<br /> <br />要開始處理數據，請從圖表菜單中選擇一個圖表，轉到個人列表，或搜索名稱或地點。<br /> <br />如果您在使用本網站時遇到問題，可以單擊\"幫助\"圖標，爲您提供有關如何使用當前正在查看的頁面的信息。<br /> <br />感謝您訪問本網站。";
$pgv_lang["reset_default_blocks"] = "重置爲默認塊";
$pgv_lang["recent_changes_descr"] = "最近更改\"塊將列出上個月對數據庫所做的所有更改。此塊可以幫助您及時了解所做的更改。使用在中定義的CHAN標記自動檢測更改。 GEDCOM標淮。";
$pgv_lang["recent_changes_none"] = "<b>最後一個#pgv_lang[global_num1]#days沒有變化。</b> <br />";
$pgv_lang["recent_changes_some"] = "<b>在最後一次#pgv_lang[global_num1]#days </b> <br />\"中所做的更改";
$pgv_lang["show_empty_block"] = "這個塊在空的時候應該被隱藏嗎？";
$pgv_lang["hide_block_warn"] = "如果你隱藏一個空塊，你將無法改變它的配置，直到它變得可見，不再是空的。";
$pgv_lang["use_blocks_for_default"] = "將這些塊用作所有用戶的默認塊配置？";
$pgv_lang["block_not_configure"] = 	"這個快是不能配置的";


//-- hourglass chart
$pgv_lang["hourglass_chart"] = "沙漏圖";


//-- Ahnentafel report
$pgv_lang["ahnentafel_report"] = "譜系報告";
$pgv_lang["ahnentafel_header"] = "Ahnentafel報告";
$pgv_lang["ahnentafel_christened_m"] = "被命名爲";
$pgv_lang["ahnentafel_christened_f"] = "被命名爲";
$pgv_lang["ahnentafel_married_m"] = "已婚";
$pgv_lang["ahnentafel_married_f"] = "已婚";
$pgv_lang["ahnentafel_married_post"] = "&nbsp;";
$pgv_lang["ahnentafel_died_m"] = "去世";
$pgv_lang["ahnentafel_died_f"] = "去世";
$pgv_lang["ahnentafel_cremated_m"] = "被火化了";
$pgv_lang["ahnentafel_cremated_f"] = "被火化了";
$pgv_lang["ahnentafel_buried_m"] = "下葬了";
$pgv_lang["ahnentafel_buried_f"] = "下葬了";
$pgv_lang["ahnentafel_place"] = "在";
$pgv_lang["ahnentafel_no_details"] = "但細節不明";
$pgv_lang["ahnentafel_on"] = "";

//-- Changes report
$pgv_lang["changes_report"] = "變更報告";
$pgv_lang["changes_pending_tot"] = "未決變更總數：";
$pgv_lang["changes_accepted_tot"] = "接受的總變化：";

//-- Descendancy report
$pgv_lang["descend_report"] = "後裔報告";
$pgv_lang["descendancy_header"] = "後代報告";
$pgv_lang["son_of"] = "的兒子";
$pgv_lang["daughter_of"] = "的女兒";
$pgv_lang["child_of"] = "孩子的";
$pgv_lang["children_of"] = "孩子們";
$pgv_lang["descendancy_pronoun_m"] = "他";
$pgv_lang["descendancy_pronoun_f"] = "她";

$pgv_lang["relatives_report_ext"] = "擴大親屬報告";
$pgv_lang["on"] = "上";
$pgv_lang["in"] = "在";
$pgv_lang["individual_with_rela_report"] = "近親報告";
$pgv_lang["enter_pid"] = "輸入個人ID";
$pgv_lang["generated_by"] = "生成";
$pgv_lang["list_children"] = "按出生順序列出每個孩子。";
$pgv_lang["birth_report"] = "出生日期和地點報告";
$pgv_lang["birthplace"] = "出生地包含";
$pgv_lang["birthdate1"] = "出生日期範圍開始";
$pgv_lang["birthdate2"] = "出生日期範圍結束";
$pgv_lang["death_report"] = "去世日期和地點報告";
$pgv_lang["deathplace"] = "去世之地包含";
$pgv_lang["deathdate1"] = "去世日期範圍開始";
$pgv_lang["deathdate2"] = "去世日期範圍結束";
$pgv_lang["marr_report"] = "結婚日期和地點報告";
$pgv_lang["marrplace"] = "婚姻場所包含";
$pgv_lang["marrdate1"] = "結婚日期範圍開始";
$pgv_lang["marrdate2"] = "結婚日期範圍結束";
$pgv_lang["sort_by"] = "排序方式";
$pgv_lang["cemetery_report"] = 	 "公墓報告";
$pgv_lang["burialplace"] = "埋葬地方包含";
$pgv_lang["fact_sources_report"] = "事實來源";
$pgv_lang["missing_facts_report"] = "失蹤親屬的事實";
$pgv_lang["sources_to_events"] = "事件的來源";

$pgv_lang["cleanup"] = "清理";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["show_stats_charts"] = "顯示統計圖表";
$pgv_lang["decade_birth"] = "十年出生";
$pgv_lang["decade_death"] = "十年去世";
$pgv_lang["decade_marriage"] = "十年結婚";
$pgv_lang["avg_age"] = "平均年齡";

//-- Merge Records
$pgv_lang["merge_same"] = "記錄的類型不同。無法合並不同類型的記錄。";
$pgv_lang["merge_step1"] = "合並第1步，共3步";
$pgv_lang["merge_step2"] = "合並第2步，共3步";
$pgv_lang["merge_step3"] = "合並第3步，共3步";
$pgv_lang["select_gedcom_records"] = "選擇兩個GEDCOM記錄進行合並。記錄的類型必須相同。";
$pgv_lang["merge_to"] = "合並到ID：";
$pgv_lang["merge_from"] = "從ID合並：";
$pgv_lang["merge_facts_same"] = "以下事實在兩個記錄中完全相同，並將自動合並。";
$pgv_lang["no_matches_found"] = "找不到匹配的事實";
$pgv_lang["unmatching_facts"] = "以下事實不匹配。選擇您想要保留的信息。";
$pgv_lang["record"] = "記錄";
$pgv_lang["adding"] = "添加";
$pgv_lang["updating_linked"] = "更新鏈接記錄";
$pgv_lang["merge_more"] = 	 "合並更多記錄.";
$pgv_lang["same_ids"] = "您輸入了相同的ID。您無法合並相同的記錄。";
$pgv_lang["updated_favorites"] = "收藏夾已更新。";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["gen_ancestry_chart"] = "#PEDIGREE_GENERATIONS#一代祖先圖表";
$pgv_lang["chart_booklet"] = "小冊子";
$pgv_lang["show_cousins"] = "表兄弟";
//3rd generation
//4th generation

//for the general case of ancestors of the nth generation use the text below
$pgv_lang["sosa_paternal_male_n_generations"] = "%3\$d x父親的曾祖父";
$pgv_lang["sosa_paternal_female_n_generations"] = "%3\$d x父親的曾祖母";
$pgv_lang["sosa_maternal_male_n_generations"] = "%3\$d x産婦曾祖父";
$pgv_lang["sosa_maternal_female_n_generations"] = "%3\$d x産婦曾祖母";

//-- FAN CHART
$pgv_lang["compact_chart"] = "緊湊圖表";
$pgv_lang["fan_chart"] = "圓圖";
$pgv_lang["gen_fan_chart"] = "#PEDIGREE_GENERATIONS#生成圓圖";
$pgv_lang["fan_width"] = "寬度";
$pgv_lang["gd_library"] = "PHP服務器配置錯誤：使用圖像功能需要GD 2.x庫。";
$pgv_lang["gd_freetype"] = "PHP服務器配置錯誤：使用TrueType字體需要FreeType庫。";
$pgv_lang["gd_helplink"] = "http://www.php.net/gd";
$pgv_lang["fontfile_error"] = "在PHP服務器上找不到字體文件";
$pgv_lang["fanchart_IE"] = "此Fanchart圖像無法直接由您的浏覽器打印。使用右鍵單擊然後保存並打印。";

//-- RSS Feed
$pgv_lang["rss_descr"] = 	 "來自 #GEDCOM_TITLE# 網站的新聞和鏈接";
$pgv_lang["rss_logo_descr"] = "由PhpGedView創建的Feed";
$pgv_lang["rss_feeds"] = "RSS訂閱";
$pgv_lang["no_feed_title"] = "飼料不可用";
$pgv_lang["no_feed"] = "這個PhpGedView網站沒有可用的RSS源";
$pgv_lang["feed_login"] = "如果您在此PhpGedView站點上有一個帳戶，則可以使用基本HTTP身份驗證<a href=\"#AUTH_URL#\">登錄</a>以查看私人信息。";
$pgv_lang["authenticated_feed"] = "認證飼料";

//-- ASSOciates RELAtionship
//After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = 	 "Attendant";
$pgv_lang["attending"] = "參加";
$pgv_lang["best_man"] = "最好的男人";
$pgv_lang["bridesmaid"] = "伴娘";
$pgv_lang["buyer"] = "買方";
$pgv_lang["circumciser"] = "Circumciser";
$pgv_lang["civil_registrar"] = "民事登記員";
$pgv_lang["employee"] = "雇員";
$pgv_lang["employer"] = "雇主";
$pgv_lang["foster_child"] = 	 "寄養孩子";
$pgv_lang["foster_father"] = "養父";
$pgv_lang["foster_mother"] = "養母";
$pgv_lang["friend"] = "朋友";
$pgv_lang["godfather"] = "教父";
$pgv_lang["godmother"] = "教母";
$pgv_lang["godparent"] = "教父";
$pgv_lang["godson"] = "龍芯";
$pgv_lang["goddaughter"] = "幹女兒";
$pgv_lang["godchild"] = "教子";
$pgv_lang["guardian"] = "監護人";
$pgv_lang["informant"] = "線人";
$pgv_lang["lodger"] = "房客";
$pgv_lang["nanny"] = "保姆";
$pgv_lang["nurse"] = "護士";
$pgv_lang["owner"] = "所有者";
$pgv_lang["priest"] = "牧師";
$pgv_lang["rabbi"] = "拉比";
$pgv_lang["registry_officer"] = "登記主任";
$pgv_lang["seller"] = "賣家";
$pgv_lang["servant"] = "仆人";
$pgv_lang["slave"] = "奴隸";
$pgv_lang["twin"] = "雙胞胎";
$pgv_lang["twin_brother"] = "雙胞胎兄弟";
$pgv_lang["twin_sister"] = "孿生姐妹";
$pgv_lang["ward"] = "沃德";
$pgv_lang["witness"] = "見證";

//-- statistics utility
$pgv_lang["stat_create"] = "創建自己的圖表";
$pgv_lang["statutci"] = "無法創建索引";
$pgv_lang["statnnames"] = "總人數";
$pgv_lang["statnfam"] = "全家";
$pgv_lang["statnmale"] = "總罪惡";
$pgv_lang["statnfemale"] = "總女性";
$pgv_lang["with_sources"] = "有源";
$pgv_lang["without_sources"] = "沒有來源";
$pgv_lang["stat_sindi"] = "有資源的人";
$pgv_lang["stat_sfam"] = "有家庭的家庭";
$pgv_lang["statvars"] = "填寫情節的以下參數";
$pgv_lang["statlxa"] = "選擇圖表類型：";
$pgv_lang["statlya"] = "結果：";
$pgv_lang["statlza"] = "分類";
$pgv_lang["map_type"] = "地圖類型";
$pgv_lang["stat_1_map"] = 	 "個人分配";
$pgv_lang["stat_2_map"] = "按國家劃分";
$pgv_lang["stat_3_map"] = "按國家去世";
$pgv_lang["stat_4_map"] = "按國家結婚";
$pgv_lang["stat_5_birth"] = 	 "世紀誕生";
$pgv_lang["stat_6_death"] = 	 "世紀死亡";
$pgv_lang["stat_7_marr"] = "按世紀結婚";
$pgv_lang["stat_7_div"] = "按世紀離婚";
$pgv_lang["stat_8_fam"] = "有家庭的家庭";
$pgv_lang["stat_9_indi"] = "有資源的人";
$pgv_lang["stat_10_none"] = "沒有";
$pgv_lang["stat_11_mb"] = 	 "出生月份";
$pgv_lang["stat_12_md"] = "去世月";
$pgv_lang["stat_13_mm"] = "結婚月";
$pgv_lang["stat_14_mb1"] = "關系中第一個孩子的出生月份";
$pgv_lang["stat_15_mm1"] = 	 "初婚月份";
$pgv_lang["stat_16_mmb"] = "婚姻與第一個孩子之間的月份";
$pgv_lang["stat_17_arb"] = "與出生年齡有關的年齡";
$pgv_lang["stat_18_ard"] = "與去世年有關的年齡";
$pgv_lang["stat_18_aard"] = "與去世世紀有關的平均年齡";
$pgv_lang["stat_19_arm"] = "結婚年齡";
$pgv_lang["stat_19_aarm"] = "婚姻世紀的平均年齡";
$pgv_lang["stat_20_arm1"] = "初婚年齡";
$pgv_lang["stat_21_nok"] = "兒童人數";
$pgv_lang["stat_22_fwok"] = "沒有孩子的家庭數量";
$pgv_lang["stat_200_none"] = "全部（或空白）";
$pgv_lang["stat_201_num"] = "數字";
$pgv_lang["stat_202_perc"] = "百分比";
$pgv_lang["stat_300_none"] = "沒有";
$pgv_lang["stat_301_mf"] = "性別";
$pgv_lang["stat_302_cgp"] = "約會期";
$pgv_lang["century"] = "世紀";
$pgv_lang["stat_age"] = "年齡";
$pgv_lang["no_date_fam"] = "未知";
$pgv_lang["statar_xgp"] = "時期的界限：";
$pgv_lang["statar_xgl"] = "年齡界限：";
$pgv_lang["statar_xgm"] = "月份的界限：";
$pgv_lang["statar_xga"] = "數字的界限：";
$pgv_lang["statar_zgp"] = "日期的界限：";
$pgv_lang["less"] = "少于";
$pgv_lang["over"] = "過度";
$pgv_lang["interval"] = "間隔";
$pgv_lang["aft_marr"] = "婚後數月";
$pgv_lang["bef_marr"] = "結婚前後的幾個月";
$pgv_lang["quarters"] = "結婚後的季度";
$pgv_lang["half_year"] = "結婚半年後";
$pgv_lang["one_child"] = "間隔一個孩子";
$pgv_lang["two_children"] = "間隔兩個孩子";
$pgv_lang["statreset"] = "重啓";
$pgv_lang["statsubmit"] = "顯示情節";
$pgv_lang["stat_largest_families"] = 	 "最大的家庭";

$pgv_lang["stat_own_charts"] = "自己的圖表";
$pgv_lang["statnliving"] = "總生活";
$pgv_lang["statndead"] = "完全去世";
$pgv_lang["stat_births"] = "總分娩";
$pgv_lang["stat_marriages"] = "婚姻總數";
$pgv_lang["stat_divorces"] = "離婚總數";
$pgv_lang["stat_deaths"] = "總去世人數";
$pgv_lang["stat_first_birth"] = "最早出生";
$pgv_lang["stat_first_marriage"] = "最早的婚姻";
$pgv_lang["stat_first_divorce"] = "離婚最早";
$pgv_lang["stat_first_death"] = "最早的去世";
$pgv_lang["stat_last_birth"] = "最新生";
$pgv_lang["stat_last_marriage"] = "最新婚姻";
$pgv_lang["stat_last_divorce"] = "最近離婚";
$pgv_lang["stat_last_death"] = "最新的去世";
$pgv_lang["stat_lifespan"] = 	 "壽命";
$pgv_lang["stat_lived_longest"] = "去世的最佳年齡";
$pgv_lang["stat_live_longest"] = "最古老的人";
$pgv_lang["stat_marr_age"] = "結婚年限";
$pgv_lang["stat_long_marr_age"] = "最長的婚姻";
$pgv_lang["stat_short_marr_age"] = 	 "最短的婚姻";
$pgv_lang["stat_youngest_male"] = "最年輕的男性";
$pgv_lang["stat_youngest_female"] = "最年輕的女性";
$pgv_lang["stat_oldest_male"] = "最古老的男性";
$pgv_lang["stat_oldest_female"] = "最年長的女性";
$pgv_lang["stat_childbirth_age"] = "孩子出生時的年齡";
$pgv_lang["stat_youngest_father"] = 	 "最小的父親";
$pgv_lang["stat_youngest_mother"] = "最小的母親";
$pgv_lang["stat_oldest_father"] = "最老的父親";
$pgv_lang["stat_oldest_mother"] = "最老的母親";
$pgv_lang["stat_children_in_fam"] = "家庭中的孩子";
$pgv_lang["stat_largest_gfamilies"] = "最大的家庭";
$pgv_lang["stat_age_difference"] = "年齡差異";
$pgv_lang["stat_age_siblings"] = "兄弟姐妹之間的年齡";
$pgv_lang["stat_top_age_siblings"] = "兄弟姐妹之間的最佳年齡";
$pgv_lang["stat_age_mf_spouse"] = "夫妻之間的年齡";
$pgv_lang["stat_age_fm_spouse"] = "妻子和丈夫之間的年齡";
$pgv_lang["stat_names"] = "名字";
$pgv_lang["statnsurnames"] = "姓氏總數";
$pgv_lang["statngivennames"] = "總名稱";
$pgv_lang["top_surnames"] = 	 "Top surnames";
$pgv_lang["top_givennames"] = "最受歡迎的名字";
$pgv_lang["events"] = "事件";
$pgv_lang["stat_records"] = 	 "記錄";
$pgv_lang["stat_notes"] = "筆記";
$pgv_lang["stat_first_event"] = "第一次活動";
$pgv_lang["stat_last_event"] = "最後一次活動";
$pgv_lang["stat_places"] = "鄰居";
$pgv_lang["stat_birth_places"] = "出生地";
$pgv_lang["stat_marriage_places"] = 	 "Marriage places";
$pgv_lang["stat_death_places"] = 	 "Death places";
$pgv_lang["stat_countries"] = "各國的活動";

//-- statisticsplot utility
$pgv_lang["statistiek_list"] = "統計圖";
$pgv_lang["stpl"] = "......";
$pgv_lang["stplinfo"] = "密謀信息：";
$pgv_lang["stpltype"] = 	 "type:";
$pgv_lang["stplnoim"] = " 未實現：";
$pgv_lang["stplmf"] = "按性別";
$pgv_lang["stplipot"] = "每個時期";
$pgv_lang["stplnumbers"] = "數字";
$pgv_lang["stplnuch"] = "孩子";
$pgv_lang["stplnumof"] = "計數";
$pgv_lang["stplmarrbirth"] = "結婚與生育第一個孩子的月份";
$pgv_lang["indi_distribution_chart"] = "個人分布圖";
$pgv_lang["surname_distribution_chart"] = "姓氏分布圖";
$pgv_lang["g_chart_high"] = "最高人口";
$pgv_lang["g_chart_low"] = "人口最少";
$pgv_lang["g_chart_nobody"] = "根本沒人";
$pgv_lang["area_chart"] = "地理區域";
$pgv_lang["europe_chart"] = "歐洲";
$pgv_lang["s_america_chart"] = "南美洲";
$pgv_lang["asia_chart"] = "亞洲";
$pgv_lang["middle_east_chart"] = "中東";
$pgv_lang["africa_chart"] = "非洲";
$pgv_lang["world_chart"] = "世界";

//-- alive in year
$pgv_lang["alive_in_year"] = "活著";
$pgv_lang["is_alive_in"] = "活著#YEAR#";
$pgv_lang["alive"] = "活著";
$pgv_lang["dead"] = "去世";
$pgv_lang["maybe"] = "也許 ";
$pgv_lang["both_alive"] = "兩個都活著";
$pgv_lang["both_dead"] = "都去世";

//-- Help system
$pgv_lang["definitions"] = 	 "定義";

//-- Index_edit
$pgv_lang["block_desc"] = "塊描述";
$pgv_lang["click_here"] = "點擊此處繼續";
$pgv_lang["click_here_help"] = "~#pgv_lang[click_here]#~<br /> <br />點擊此按鈕保存更改。<br /> <br />您將返回#pgv_lang[welcome]#或#pgv_lang[mygedview] ] #page，但您的更改可能不會顯示。您可能需要使用浏覽器的Page Reload功能正確查看更改。";
$pgv_lang["block_summaries"] = "~#pgv_lang[block_desc]#~<br /> <br />以下是您可以在#pgv_lang[welcome]#或#pgv_lang[mygedview] #page上放置的每個塊的簡短描述。<br/> <table border ='1'align ='center'> <tr> <td class ='list_value'> <b> #pgv_lang[name]#</b> </td> <td class ='list_value'> <b> #pgv_lang[description]#</b> </td> </tr> #pgv_lang[block_summary_table]#</table> <br /> <br />";
//Built in index_edit.php
$pgv_lang["block_summary_table"] = 	 "&nbsp;";

//-- Find page
$pgv_lang["total_places"] = "找到的地方";
$pgv_lang["media_contains"] = "媒體包含：";
$pgv_lang["repo_contains"] = "存儲庫包含：";
$pgv_lang["shared_note_contains"] = 	 "共享Note包含:";
$pgv_lang["source_contains"] = 	 "來源包含:";
$pgv_lang["display_all"] = "全部顯示";

//FAQ Page
$pgv_lang["add_faq_header"] = "FAQ Header";
$pgv_lang["add_faq_body"] = "常見問題解答";
$pgv_lang["add_faq_order"] = "常見問題解答";
$pgv_lang["add_faq_visibility"] = "常見問題解答";
$pgv_lang["no_faq_items"] = "FAQ列表是空的。";
$pgv_lang["position_item"] = "職位項目";
$pgv_lang["faq_list"] = "常見問題清單";
$pgv_lang["confirm_faq_delete"] = "你確定要刪除這個FAQ條目嗎？";
$pgv_lang["no_id"] = "沒有指定常見問題解答ID！";

//Help search
$pgv_lang["hs_title"] = "搜索幫助文字";
$pgv_lang["hs_results"] = "結果發現：";
$pgv_lang["hs_keyword"] = "搜索";
$pgv_lang["hs_searchin"] = "搜索";
$pgv_lang["hs_searchuser"] = "用戶幫助";
$pgv_lang["hs_searchmodules"] = "模塊幫助";
$pgv_lang["hs_searchconfig"] = "管理員幫助";
$pgv_lang["hs_searchhow"] = "搜索類型";
$pgv_lang["hs_searchall"] = "所有的話";
$pgv_lang["hs_searchany"] = "任何單詞";
$pgv_lang["hs_searchsentence"] = "淮確的短語";
$pgv_lang["hs_intruehelp"] = "僅限幫助文字";
$pgv_lang["hs_inallhelp"] = "全文";

//Media import
$pgv_lang["choose"] = "選擇：";
$pgv_lang["account_information"] = "帳戶信息";

$pgv_lang["TYPE__coat"] = "徽章";

//-- Other media suff
$pgv_lang["no_media"] = "沒有找到媒體";
$pgv_lang["media_privacy"] = "隱私限制阻止您查看此項目";
$pgv_lang["relations_heading"] = "圖像與：";
$pgv_lang["media_broken"] = "此媒體文件已損壞，無法加水印";
$pgv_lang["unknown_mime"] = "媒體防火牆錯誤：>未知Mimetype <for file";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "未知行動：[行動]。";
$pgv_lang["module_error_unknown_type"] = 	 "未知的模塊類型。";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "在指定年份顯示活著的人。";
$pgv_lang["button_BIRT_Y100"] = "展示過去100年內出生的人。";
$pgv_lang["button_BIRT_YES"] = "展示出生于100多年前的人。";
$pgv_lang["button_DEAT_H"] = "展示只有男性伴侶去世的情侶。";
$pgv_lang["button_DEAT_N"] = "展示活著的人或夫妻雙方都活著的夫妻。";
$pgv_lang["button_DEAT_W"] = "展示只有女性伴侶去世的情侶。";
$pgv_lang["button_DEAT_Y"] = "展示已去世的人或夫妻雙方都已去世的人。";
$pgv_lang["button_DEAT_Y100"] = "展示過去100年內去世的人。";
$pgv_lang["button_DEAT_YES"] = "展示100多年前去世的人。";
$pgv_lang["button_MARR_DIV"] = "顯示離婚夫婦。";
$pgv_lang["button_MARR_U"] = "顯示結婚日期不明的夫妻。";
$pgv_lang["button_MARR_Y100"] = "展示在過去100年內結婚的夫妻。";
$pgv_lang["button_MARR_YES"] = "展示100多年前結婚的夫妻。";
$pgv_lang["button_reset"] = "重置爲列表默認值。";
$pgv_lang["button_SEX_U"] = "只展示性別未知的人。";
$pgv_lang["button_TREE_L"] = "顯示«離開»夫婦或個人。這些人是活著但沒有記錄在數據庫中的孩子。";
$pgv_lang["button_TREE_R"] = "顯示«根源»夫妻或個人。這些人也可能被稱爲\"族長\"。他們是沒有父母記錄在數據庫中的個人。";
$pgv_lang["sort_column"] = "按此欄排序。";
?>
