<?php
/**
 * Chinese (Simplified) texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2019 PGV Development Team.  All rights reserved.
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
$pgv_lang["help_for_this_page"] = "帮助使用这页";
$pgv_lang["hide_context_help"] = "隐藏帮助";
$pgv_lang["help_not_exist"] = "帮助文本, 为这个页或条目, 不是可利用的";
$pgv_lang["header"] = "头部";
$pgv_lang["imageview"] = "图像浏览器";
$pgv_lang["login_head"] = "用户登录";
$pgv_lang["menu"] = "菜单";
$pgv_lang["resolution"] = "屏幕分辨率";
$pgv_lang["sorry"] = "对不起, 我们未完成帮助文本为这个页面";
$pgv_lang["show_context_help"] = "显示帮助";
$pgv_lang["help_contents"] = "帮助目录";
$pgv_lang["page_help"] = "帮助";
//-- CONFIG FILE MESSAGES
$pgv_lang["error_title"] = "错误: 不能打开GEDCOM 文件";
$pgv_lang["for_support"] = "为技术支持和资讯联络";
$pgv_lang["for_contact"] = "有关家谱问题的帮助，请联系";
$pgv_lang["for_all_contact"] = "如果需要技术支持或其它问题，请联系";
$pgv_lang["build_title"] = "索引文件已创建";
$pgv_lang["choose_username"] = "选择用户名";
$pgv_lang["choose_username"] = "用户名";
$pgv_lang["build_error"] = "GEDCOM 文件已更新。";
$pgv_lang["choose_password"] = "输入密码";
$pgv_lang["lastname"] = "姓";
$pgv_lang["firstname"] = "名字";
$pgv_lang["please_wait"] = "请等待当索引文件必须被重建。";
$pgv_lang["choose_gedcom"] = "选择GEDCOM 资料集";
$pgv_lang["username"] = "用户名";
$pgv_lang["invalid_username"] = "用户名有不允许的字";
$pgv_lang["fullname"] = "全名";
$pgv_lang["password"] = "密码";
$pgv_lang["confirm"] = "确认密码";
$pgv_lang["login"] = "登录";
$pgv_lang["logout"] = "注销";
$pgv_lang["admin"]			= "管理";
$pgv_lang["logged_in_as"]		= "登录";
$pgv_lang["my_pedigree"]		= "我的家谱树";
$pgv_lang["my_indi"]			= "家谱中的我";
$pgv_lang["yes"]			= "是";
$pgv_lang["no"]				= "不";
$pgv_lang["change_theme"]			= "改变背景主题";
//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]	= "家谱结构树";
$pgv_lang["gen_ped_chart"]	= "#PEDIGREE_GENERATIONS# 生成家谱图表";
$pgv_lang["generations"]	= "包含几代人";
$pgv_lang["view"]		= "查看";
$pgv_lang["fam_spouse"]		= "家庭与配偶:";
$pgv_lang["root_person"]	= "选择从谁开始显示：";
$pgv_lang["hide_details"]	= "隐藏详细资料";
$pgv_lang["show_details"]	= "显示详细资料";
$pgv_lang["zoom_box"]		= "迅速移动/在这个窗口。";
$pgv_lang["orientation"]			= "方向";
$pgv_lang["portrait"]			= "竖向图";
$pgv_lang["start_at_parents"]		= "从父母开始";
$pgv_lang["welcome_page"]		= "网站首页";
$pgv_lang["lists"]			= "统计列表";
$pgv_lang["box_width"] 				= "框架宽度";
$pgv_lang["charts"]			= "族谱树图";
$pgv_lang["landscape"]			= "横向图";
//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "无法找到家庭";
$pgv_lang["unable_to_find_indi"]	= "无法找到个人";
$pgv_lang["unable_to_find_record"]	= "无法查找到记录";
$pgv_lang["unable_to_find_source"]	= "无法查找来到源";
$pgv_lang["unable_to_find_repo"]	= "无法查找程式库";
$pgv_lang["repo_name"]			= "库名:";
$pgv_lang["address"]			= "地址:";
$pgv_lang["phone"]			= "手机号码:";
$pgv_lang["source_name"]		= "来源名字:";
$pgv_lang["title"]			= "题目:";
$pgv_lang["author"]			= "作者:";
$pgv_lang["publication"]		= "发行:";
$pgv_lang["call_number"]		= "索书号:";
$pgv_lang["living"]			= "居住";
$pgv_lang["private"]			= "隐私保护";
$pgv_lang["birth"]			= "生日：";
$pgv_lang["death"]			= "去世:";
$pgv_lang["descend_chart"]		= "后代树";
$pgv_lang["individual_list"]		= "个人列表";
$pgv_lang["family_list"]		= "家庭列表";
$pgv_lang["source_list"]		= "来源列表";
$pgv_lang["place_list"]			= "地方列表";
$pgv_lang["media_list"]			= "多媒体列表";
$pgv_lang["search"]			= "搜索";
$pgv_lang["clippings_cart"]		= "收集箱功能";
$pgv_lang["not_an_array"]		= "不是列阵";
$pgv_lang["print_preview"]		= "打印预览";
$pgv_lang["cancel_preview"] 		= "回到正常模式";
$pgv_lang["change_lang"]		= "更改语言";
$pgv_lang["print"]			= "打印";
$pgv_lang["total_queries"]		= "总资料库查询: ";
$pgv_lang["total_privacy_checks"]	= "总共隐私检查：";
$pgv_lang["back"]			= "返回";
$pgv_lang["aka"]					= "其它名";
//-- INDIVUDUAL FILE MESSAGES
$pgv_lang["male"]			= "男性";
$pgv_lang["female"]			= "女性";
$pgv_lang["temple"]			= "LDS 寺庙";
$pgv_lang["temple_code"]		= "LDS 寺庙编码:";
$pgv_lang["status"]			= "状态";
$pgv_lang["source"]			= "来源";
$pgv_lang["citation"]			= "引证:";
$pgv_lang["text"]			= "源文本:";
$pgv_lang["note"]			= "注";

$pgv_lang["unrecognized_code"]		= "未识别的GEDCOM编码";
$pgv_lang["indi_info"]			= "个人资料";
$pgv_lang["pedigree_chart"]		= "家谱树";
$pgv_lang["individual"]				= "个人";
$pgv_lang["desc_chart2"]		= "后代图表";
$pgv_lang["as_spouse"]			= "家庭与配偶";
$pgv_lang["as_child"]			= "这个人的家庭";
$pgv_lang["source_menu"]			= "来源的设置";
$pgv_lang["view_gedcom"]		= "看家谱的纪录";
$pgv_lang["add_to_cart"]		= "加入到图片收集";
$pgv_lang["still_living_error"]		= "在世人员所有详细资料被隐藏。<br />获取更多信息联络";
$pgv_lang["privacy_error"]		= "<i>你没有权限查看此处详细信息。</i>";
$pgv_lang["more_information"]		= "如果需要更多的信息请联系";
$pgv_lang["name"]			= "名字";
$pgv_lang["given_name"]			= "指定的名字:";
$pgv_lang["surname"]			= "姓氏:";
$pgv_lang["suffix"]			= "后缀:";
$pgv_lang["object_note"]		= "对象附注:";
$pgv_lang["sex"]			= "性别";
$pgv_lang["personal_facts"]		= "个人详细事件信息";
$pgv_lang["type"]			= "类型";
$pgv_lang["place_description"]		= "地方/说明";
$pgv_lang["parents"] 			= "父母:";
$pgv_lang["siblings"] 			= "兄弟";
$pgv_lang["father"] 			= "父亲";
$pgv_lang["mother"] 			= "母亲";
$pgv_lang["parent"] 				= "家长";
$pgv_lang["self"] 					= "自己";
$pgv_lang["partner"] 				= "配偶";
$pgv_lang["relatives"]			= "近亲";
$pgv_lang["relatives_events"]		= "近亲事件";
$pgv_lang["historical_facts"]		= "历史记录";
$pgv_lang["child"]			= "儿女";
$pgv_lang["family"] 				= "家庭";
$pgv_lang["spouse"]			= "配偶";
$pgv_lang["spouses"] 				= "夫妻";
$pgv_lang["surnames"]			= "姓氏";
$pgv_lang["adopted"]			= "收养(过继)";
$pgv_lang["foster"]			= "寄养";
$pgv_lang["infant"]					= "幼儿";
$pgv_lang["stillborn"]				= "未出生";
$pgv_lang["deceased"]				= "去世";
$pgv_lang["sealing"]			= "Sealing";
$pgv_lang["link_as"]			= "把这个人连接到一个现有的家庭里去";
$pgv_lang["link_as_child"]		=	"把这个人当作个孩子连接到一个现有的家庭里去";
$pgv_lang["link_as_husband"]	=	"把这个人当作个丈夫连接到一个现有的家庭里去";
$pgv_lang["link_as_wife"]		=	"把这个人当作个妻子连接到一个现有的家庭里去";
//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "家庭信息";
$pgv_lang["family_group_info"]		= "家庭组信息";
$pgv_lang["husband"]			= "丈夫";
$pgv_lang["wife"]			= "妻子";
$pgv_lang["marriage"]			= "婚姻:";
$pgv_lang["lds_sealing"]		= "LDS Sealing:";
$pgv_lang["marriage_license"]		= "结婚证书:";
$pgv_lang["childless_family"]		= "该家庭没有孩子";
$pgv_lang["media_object"]		= "多媒体对象:";
$pgv_lang["children"]			= "孩子";
$pgv_lang["no_children"]		= "没有孩子";
$pgv_lang["parents_timeline"]		= "在时间表上显示父母";
//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "收集箱";
$pgv_lang["clip_explaination"]		= "你可以收集一些文件和图片以便下载。<br /><br />";
$pgv_lang["item_with_id"]		= "条目与";
$pgv_lang["error_already"]		= "已经在你的收集箱里。";
$pgv_lang["which_links"]		= "从这个家庭您并且会希望哪个链接添加？";
$pgv_lang["just_family"]		= "添加这个家庭记录。";
$pgv_lang["parents_and_family"]		= "添加父项以这个家庭记录。";
$pgv_lang["parents_and_child"]		= "添加父项和孩子记录以这个家庭记录。";
$pgv_lang["parents_desc"]		= "添加父项和所有后裔记录以这个家庭记录。";
$pgv_lang["continue"]			= "继续添加";
$pgv_lang["which_p_links"]		= "从这个人员您并且会希望哪个链接添加？";
$pgv_lang["just_person"]		= "添加这个人。";
$pgv_lang["person_parents_sibs"]	= "添加这个人, 他的父母, 并且兄弟姐妹。";
$pgv_lang["person_ancestors"]		= "添加这个人和他的直接祖先。";
$pgv_lang["person_ancestor_fams"]	="添加这个人, 他的直接祖先, 并且他们的家庭。";
$pgv_lang["person_spouse"]		= "添加这个人, 他的配偶, 并且孩子。";
$pgv_lang["person_desc"]		= "添加这个人, 他的配偶, 并且所有后裔记录。";
$pgv_lang["unable_to_open"]		= "无法打开剪报文件夹为文字";
$pgv_lang["person_living"]		= "这个人员是在世。  私有详细资料不会是包括的。";
$pgv_lang["person_private"]		= "关于这个人员的详细资料专用。  私有详细资料不会是包括的。";
$pgv_lang["download"]			= "右键单击（在Macintosh上按住Control键并单击），然后选择\“将目标另存为\”;下载文件";
$pgv_lang["media_files"]		= "媒体文件参考在这GEDCOM";
$pgv_lang["cart_is_empty"]		= "您的收集箱是空的。";
$pgv_lang["id"]				= "ID";
$pgv_lang["ID"]				= "ID";
$pgv_lang["name_description"]		= "名字/说明";
$pgv_lang["remove"]			= "去除";
$pgv_lang["empty_cart"]			= "清空收集箱";
$pgv_lang["download_now"]		= "下载";
//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "找到连接点";
$pgv_lang["top_level"]			= "最高级";
$pgv_lang["form"]			= "地点以表格形式编码: ";
$pgv_lang["default_form"]		= "城市，省市，国家";
$pgv_lang["default_form_info"]		= "（默认）";
$pgv_lang["unknown"]			= "未知";
$pgv_lang["individuals"]			= "个人";
$pgv_lang["place_list2"] 			= "地方列表";
//-- MEDIALIST FILE MESSAGES
$pgv_lang["multi_title"]		= "多媒体列表";
$pgv_lang["media_found"]		= "找到媒体对象";
$pgv_lang["view_person"]		= "查看个人";
$pgv_lang["view_family"]		= "查看家庭";
$pgv_lang["view_source"]		= "查看来源";
$pgv_lang["view_object"]			= "查看对象";
$pgv_lang["first_page"]				= "第一页";
$pgv_lang["previous_page"]			= "上一页";
$pgv_lang["next_page"]				= "下一页";
$pgv_lang["last_page"]				= "最后一页";
$pgv_lang["next_image"]				= "下个图片";
$pgv_lang["file_not_found"]		= "没找到文件。";
$pgv_lang["medialist_show"] 		= "显示";
$pgv_lang["per_page"]				= "每页几个多媒体文件";
$pgv_lang["media_format"]			= "多媒体格式";
$pgv_lang["image_size"]				= "图像大小";
$pgv_lang["media_id"]				= "多媒体ID";
$pgv_lang["invalid_id"]				= "家谱文件中没有此ID";
$pgv_lang["record_updated"]			= "纪录#pid# 成功被更新";
$pgv_lang["record_added"]			= "纪录#xref# 成功加入家谱文件";
//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "搜索家谱文件";
$pgv_lang["search_geds"]			= "选择数据库搜索";
$pgv_lang["search_indis"]			= "个人名字(不含姓)";
$pgv_lang["search_inrecs"]			= "搜索";
$pgv_lang["search_prtall"]			= "全名";
$pgv_lang["search_prthit"]			= "被点击的名字";
$pgv_lang["results_per_page"]		= "每页的搜索结果";
$pgv_lang["enter_terms"]		= "请输入搜寻词语";
$pgv_lang["search_asso_label"]		= "协会";
$pgv_lang["search_asso_text"]		= "显示相关个人/家庭";
$pgv_lang["search_fams"]			= "家庭(不含姓)";
$pgv_lang["soundex_search"]		= "Soundex 名字搜索:";
$pgv_lang["search_results"]		= "搜索结果";
$pgv_lang["sources"]			= "来源";
$pgv_lang["firstname_search"]		= "名字为";
$pgv_lang["search_prtnames"]		= "个人的<br />名字:";
$pgv_lang["other_searches"]			= "其他的搜索";
$pgv_lang["lastname_search"]		= "姓氏: ";
$pgv_lang["search_place"]		= "地方: ";
$pgv_lang["search_year"]		= "年: ";
$pgv_lang["lastname_empty"]		= "请输入姓氏。";
$pgv_lang["no_results"]			= "结果没有查找。";
$pgv_lang["search_sources"]			= "来源";
$pgv_lang["repo_list"]				= "文件夹列表";
$pgv_lang["total_repositories"]		= "总共文件夹";
$pgv_lang["soundex_results"]		= "或许以下soundex 符合将是有用的。";
//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]		= "来源被查找";
//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "来源资料";
$pgv_lang["other_records"]		= "其他的纪录:";
$pgv_lang["other_repo_records"]		= "把那个连接地址放入记录中";
$pgv_lang["repo_info"]				= "知识库信息";
$pgv_lang["people"]			= "人们";
$pgv_lang["families"]			= "家庭";
$pgv_lang["total_sources"]			= "总共来源";
//-- BUILDINDEX FILE MESSAGES
$pgv_lang["building_indi"]		= "创建个人和家庭连接标记";
$pgv_lang["building_index"]		= "创建连接标记";
$pgv_lang["importing_records"]		= "读取纪录";
$pgv_lang["detected_change"]		= "发现家谱文件有变化##GEDCOM#.";
$pgv_lang["flushing"]			= "冲洗的目录";
$pgv_lang["exec_time"]			= "执行命令时间:";
$pgv_lang["unable_to_create_index"]	="无法创建连接标记。 请确认可以写入权限被打开。 标记文件写后权限可以恢复。";
$pgv_lang["sec"]					= "秒。";
$pgv_lang["indi_complete"]		= "个人索引文件更新完全。";
$pgv_lang["family_complete"]		= "家庭索引文件更新完全。";
$pgv_lang["source_complete"]		= "来源索引文件更新完全。";
$pgv_lang["tables_exist"]		= "家谱表已在数据库里";
$pgv_lang["you_may"]			= "您可以:";
$pgv_lang["drop_tables"]		= "投下当前表";
$pgv_lang["import_multiple"]		= "导入和工作以多GEDCOMs";
$pgv_lang["explain_options"]		= "如果您选择投下表所有资料用这GEDCOM 将替换。<br />如果您选择导入和工作以多GEDCOMs, 网站 将清除被导入使用一GEDCOM 以同样文件名的任一个资料。  这个选项允许您对存储多个GEDCOM 资料在同样表中和容易地切换在他们之间。";
$pgv_lang["path_to_gedcom"]		= "家谱文件的连接地址:";
$pgv_lang["gedcom_title"]		= "家谱文件的名称：";
$pgv_lang["index_complete"]		= "索引已完成";
$pgv_lang["updating_is_dead"]		= "更新是死的状态为INDI ";
$pgv_lang["updating_family_names"]	= "更新姓对于FAM ";
$pgv_lang["processed_for"]		= "被处理的文件为 ";
//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "家庭总数";
$pgv_lang["total_indis"]		= "个人总数";
$pgv_lang["notes"]					= "记录";
$pgv_lang["ssourcess"]				= "来源";
$pgv_lang["media"]					= "多媒体";
$pgv_lang["starts_with"]		= "开始为:";
$pgv_lang["person_list"]		= "个人名单:";
$pgv_lang["paste_person"]		= "粘贴这个人";
$pgv_lang["notes_sources_media"]	= "笔记, 来源, 并且媒介";
$pgv_lang["name_contains"]		= "名字包含:";
$pgv_lang["filter"]			= "查找";
$pgv_lang["find_individual"]		= "寻找个人ID号";
$pgv_lang["find_familyid"]			= "寻找家庭ID号";
$pgv_lang["find_sourceid"]			= "寻找来源ID号";
$pgv_lang["magnify"]				= "放大";
$pgv_lang["skip_surnames"]		= "跳过姓氏名单";
$pgv_lang["show_surnames"]		= "显示姓氏名单";
$pgv_lang["all"]			= "所有";
$pgv_lang["hidden"]					= "隐藏";
$pgv_lang["roots"]		 				= "族长";
//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "年龄";
$pgv_lang["days"]					= "日";
$pgv_lang["months"]					= "月";
$pgv_lang["years"]					= "年";
$pgv_lang["day1"]					= "日";
$pgv_lang["month1"]					= "月";
$pgv_lang["year1"]					= "年";
$pgv_lang["after_death"]        ="去世后";
$pgv_lang["timeline_title"]		= "家谱时间表";
$pgv_lang["timeline_chart"]		= "时间线";
$pgv_lang["remove_person"]		= "删除个人";
$pgv_lang["show_age"]			= "先是年龄标记";
$pgv_lang["add_another"]		= "增加其它人:<br />个人ID号::";
$pgv_lang["find_id"]			= "寻找ID号";
$pgv_lang["show"]			= "显示";
$pgv_lang["year"]			= "年:";
$pgv_lang["timeline_instructions"]	= "在大多数最近的浏览器上，您可以单击并拖动图表上的框";
$pgv_lang["zoom_in"]			= "放大";
$pgv_lang["zoom_out"]			= "缩小";
$pgv_lang["timeline_beginYear"] = "开始年";
$pgv_lang["timeline_endYear"] = "结束年";
$pgv_lang["timeline_scrollSpeed"] = "速度";
$pgv_lang["timeline_controls"] = "时间表的控制";
$pgv_lang["include_family"] = "加入近亲的家庭";
$pgv_lang["lifespan_chart"] = "寿命表";
$pgv_lang["cal_none"]                 = "没有日历换算";
$pgv_lang["cal_gregorian"]            = "正常日历";
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
$pgv_lang["abt"]			= "关于";
$pgv_lang["aft"]			= "以后";
$pgv_lang["and"]			= "并且";
$pgv_lang["bef"]			= "以前";
$pgv_lang["bet"]			= "之间";
$pgv_lang["cal"]			= "计算";
$pgv_lang["est"]			= "估计";
$pgv_lang["from"]			= "从";
$pgv_lang["int"]			= "解释";
$pgv_lang["to"] 			= "到达";
$pgv_lang["cir"]			= "大约";
$pgv_lang["apx"]			= "大约";

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
$pgv_lang["user_admin"]			= "用户管理";
$pgv_lang["manage_media"]			= "管理媒体";
$pgv_lang["stat_users"]				= "总用户";
$pgv_lang["no_family_facts"]		= "没有关于这个家庭的信息。";
$pgv_lang["stat_females"]			= "女性总数";
$pgv_lang["htmlplus_block_birth"]	= "出生";
$pgv_lang["comments"]				= "备注";
$pgv_lang["support_contact"]		= "技术帮助请联系";
$pgv_lang["show_spouses"]		= "显示夫妻";
$pgv_lang["review_changes_subject"]	= "家谱 - 修改变化";
$pgv_lang["show_pending"]		= "显示等待的变化";
$pgv_lang["review_changes_block"]	= "等待变化";
$pgv_lang["total_names"]			= "名字总数";
$pgv_lang["reorder_families"]		= "重新排序家庭";
$pgv_lang["indis_with_surname"]		= "有#surname# 姓名的个人";
$pgv_lang["total_memory_usage"]		= "总内存使用量";
$pgv_lang["halfsibling"]			= "异父同胞";
$pgv_lang["halfbrother"]			= "同父异母或同母异父的兄弟";
$pgv_lang["halfsister"]				= "同父异母或同母异父的姐妹";
$pgv_lang["family_timeline"]		= "在时间表上显示家庭";
$pgv_lang["children_timeline"]		= "在时间表上显示孩子";
$pgv_lang["other"]					= "其它";
$pgv_lang["sort_by_marriage"]		= "按结婚日期排序";
$pgv_lang["genealogy_contact"]		= "家谱联系";
$pgv_lang["remember_me"]			= "在此电脑上记住我";
$pgv_lang["fams_with_surname"]		= "有#surname# 的家庭";
$pgv_lang["child-family"]			= "父母和兄弟姐妹";
$pgv_lang["spouse-family"]			= "配偶和儿女";
$pgv_lang["direct-ancestors"]		= "直系祖先";
$pgv_lang["ancestors"]				= "直系祖先及其家属";
$pgv_lang["total_not_born"]			= "流产总数";
$pgv_lang["total_dead"]				= "去世总数";
$pgv_lang["total_living"]			= "在世总数";
$pgv_lang["choose_relatives"]		= "选择亲戚";
$pgv_lang["relatives_report"]		= "亲戚报表";
$pgv_lang["descendants"]			= "子孙后代";
$pgv_lang["config_block"]			= "配置";
$pgv_lang["enter_comments"]			= "请在“备注”字段中输入您的注册原因";
$pgv_lang["after"]					= "之后";
$pgv_lang["before"]					= "之前";
$pgv_lang["htmlplus_block_burial"]	= "葬礼";
$pgv_lang["htmlplus_block_census"]	= "人口普查加入";
$pgv_lang["num_to_show"]			= "文件显示数量";
$pgv_lang["days_to_show"]			= "显示几天";
$pgv_lang["before_or_after"]		= "在名字之前和之后加上数量";
$pgv_lang["htmlplus_block_marrage"]	= "结婚";
$pgv_lang["htmlplus_block_adoption"]= "收养(过继)";
$pgv_lang["htmlplus_block_death"]	= "去世";
$pgv_lang["stat_males"]				= "男性";


$pgv_lang["edit_source"]			= "编辑该文件";
$pgv_lang["familybook_chart"]		= "家庭册";
$pgv_lang["family_of"]				= "家庭：";
$pgv_lang["cancel"]					= "取消";
$pgv_lang["link_remote"]            = "远程链接一个人";
$pgv_lang["delete_family"]			= "删除家庭";
$pgv_lang["add_favorite"]			= "添加一个收藏";
$pgv_lang["url"]					= "网络地址";
$pgv_lang["add_fav_enter_id"]		= "输入个人，家庭，或来源ID";
$pgv_lang["remove_child"]			= "从家中删除这个孩子";
$pgv_lang["link_new_husb"]			= "选择其他人当这人的丈夫";
$pgv_lang["link_new_wife"]			= "选择其他人当这人的妻子";
$pgv_lang["address_labels"]			= "地址标签";
$pgv_lang["filter_address"]			= "显示拥有这些的地址：";
$pgv_lang["address_list"]			= "地址列表";
$pgv_lang["changelog"]				= "版本#VERSION# 变化";
$pgv_lang["html_block_name"]		= "网络编程语言HTML";
$pgv_lang["htmlplus_block_name"]	= "网络高级编程语言HTML";
$pgv_lang["htmlplus_block_templates"] = "模板";
$pgv_lang["htmlplus_block_content"] = "内容";
$pgv_lang["htmlplus_block_keyword"]	= "关键词示例（仅英文）";
$pgv_lang["htmlplus_block_current"]	= "当前的";
$pgv_lang["htmlplus_block_default"]	= "默认的";
$pgv_lang["htmlplus_block_gedcom"]	= "家谱";

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

$pgv_lang["stat_avg_age_at_death"]	= "平均去世年龄";
$pgv_lang["stat_longest_life"]		= "寿命最长";
$pgv_lang["stat_most_children"]		= "孩子最多的家庭";
$pgv_lang["stat_average_children"]	= "家庭平均孩子数";
$pgv_lang["stat_events"]			= "总共事件";
$pgv_lang["stat_media"]				= "媒体对象";
$pgv_lang["stat_surnames"]			= "姓氏总数";
$pgv_lang["loading"]				= "读取中...";
$pgv_lang["clear_chart"]			= "清表格";
$pgv_lang["file_information"]		= "文件信息";
$pgv_lang["choose_file_type"]		= "文件类型";
$pgv_lang["add_individual_by_id"]	= "通过ID加入个人";
$pgv_lang["advanced_options"]		= "高级设置";
$pgv_lang["zip_files"]				= "压缩文件";
$pgv_lang["include_media"]			= "加入多媒体（自动创建压缩文件）";
$pgv_lang["roman_surn"]				= "罗马化的姓";
$pgv_lang["roman_givn"]				= "罗马化的名";
$pgv_lang["include"]				= "包括：";
$pgv_lang["page_x_of_y"]				= "现在页数为#GLOBALS[currentPage]# 总共页数为#GLOBALS[lastPage]#";
$pgv_lang["options"]				= "选项：";
$pgv_lang["config_update_ok"]			= "设置文件成功修改";
$pgv_lang["page_size"]					= "页面大小";
$pgv_lang["edit_media"]					= "编辑媒体文件";
$pgv_lang["wiki_main_page"]				= "Wiki 主页";
$pgv_lang["wiki_users_guide"]			= "Wiki 用户指导";
$pgv_lang["wiki_admin_guide"]			= "Wiki 管理员的指导";
$pgv_lang["ex-spouse"] = "前夫妻";
$pgv_lang["ex-wife"] = "前妻";
$pgv_lang["ex-husband"] = "前夫";
$pgv_lang["onlyemail"] 				= "只允许电子邮件地址";
$pgv_lang["chart_new"]				= "家谱图表";
$pgv_lang["search_general"]			= "一般搜索";
$pgv_lang["clipping_privacy"]		= "因为隐私，有些信息不能被加入";
$pgv_lang["password_mismatch"]		= "密码不对";
$pgv_lang["enter_username"]		= "你必须输入一个用户名";
$pgv_lang["enter_fullname"]		= "你必须输入全名";
$pgv_lang["enter_password"]		= "你必须输入一个密码。";
$pgv_lang["confirm_password"]		= "您必须确认您的密码。";
$pgv_lang["save"]			= "保存";
$pgv_lang["saveandgo"]		= "保存并到添加下一个新纪录";
$pgv_lang["delete"]			= "删除";
$pgv_lang["edit"]			= "编辑";
$pgv_lang["no_login"]			= "登录失败，注册后请到邮箱验证电子邮件，验证后需经管理员审核方可登录。如需帮助请联系管理员。";
$pgv_lang["basic_realm"]			= "进入家谱系统";
$pgv_lang["basic_auth_failure"]		= "你必须输入正确的用户名和密码才可以查看";
$pgv_lang["file_not_exists"]		= "你输入的用户名不存在";
$pgv_lang["research_assistant"]		= "研究助理";
$pgv_lang["import_gedcom"]		= "导入家谱文件";
$pgv_lang["enter_gedcomid"]		= "您必须输入家谱ID。";
$pgv_lang["user_info"]			= "我的用户信息";
$pgv_lang["upload_help"]		= "您想要将文件发送到服务器。这些文件将被上传到该目录:";
$pgv_lang["research_log"]		= "研究日记";
$pgv_lang["utf8_to_ansi"]		= "您想要 从UTF-8 到ANSI (ISO-8859-1)转换这GEDCOM？";
$pgv_lang["media_linked"]			= "此媒体对象链接到以下内容：";

$pgv_lang["view_slideshow"] 		= "查看幻灯";
$pgv_lang["download_image"]			= "下载文件";
$pgv_lang["file_size"]				= "文件大小";
$pgv_lang["img_size"]				= "图片大小";
$pgv_lang["button_SEX_F"] = "只显示女士";
$pgv_lang["button_SEX_M"] = "只显示男士";

$pgv_lang["hs_search"] 			= "搜索";
$pgv_lang["hs_close"] 			= "关闭窗口";
$pgv_lang["stplmonth"]			 = "月";
$pgv_lang["stplperc"]			 = "百分比";
$pgv_lang["preview"] 			= 	"预览";
$pgv_lang["stplage"]			 = "年龄";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "音频";
$pgv_lang["TYPE__book"] = "书籍";
$pgv_lang["TYPE__card"] = "卡片";
$pgv_lang["TYPE__certificate"] = "证书";
$pgv_lang["TYPE__document"] = "文档";
$pgv_lang["TYPE__electronic"] = "电子文件";
$pgv_lang["TYPE__fiche"] = "微胶片";
$pgv_lang["TYPE__film"] = "微电影";
$pgv_lang["TYPE__magazine"] = "杂志";
$pgv_lang["TYPE__manuscript"] = "手稿";
$pgv_lang["TYPE__map"] = "地图";
$pgv_lang["TYPE__newspaper"] = "报纸";
$pgv_lang["TYPE__photo"] = "照片";
$pgv_lang["TYPE__tombstone"] = "墓碑";
$pgv_lang["TYPE__video"] = "视频";
$pgv_lang["TYPE__painting"] = "图画";
$pgv_lang["TYPE__other"] = "其他";

//-- Relationship chart messages
//-- Chinese Translations from--http://www.kwanfamily.info/familytitles/familytitle.html
//-- Chinese RelationShip chart-- http://www.kwanfamily.info/familytitles/familytitlejpg.html
$pgv_lang["relationship_chart"]		= "关系图";
$pgv_lang["person1"]			= "第一个人";
$pgv_lang["person2"]			= "第二个人";
$pgv_lang["no_link_found"]		= "没有发现两者之间关系";
//--Sosa came from the lang.sv.php file it is a key value relationship pattern for parents and grandparents
//1st generation
$pgv_lang["sosa_2"]	= "父亲(一世祖)";
$pgv_lang["sosa_3"] = "母亲";
//2nd generation
$pgv_lang["sosa_4"] = "爷爷(二世祖)";
$pgv_lang["sosa_5"] = "奶奶";
$pgv_lang["sosa_6"] = "姥爷";
$pgv_lang["sosa_7"] = "姥姥";
//3rd generation
$pgv_lang["sosa_8"] = "曾祖父(三世祖)";
$pgv_lang["sosa_9"] = "曾祖母";
$pgv_lang["sosa_10"] = "曾祖父";
$pgv_lang["sosa_11"] = "曾祖母";
$pgv_lang["sosa_12"] = "曾外公";
$pgv_lang["sosa_13"] = "曾外婆";
$pgv_lang["sosa_14"] = "曾外公";
$pgv_lang["sosa_15"] = "曾外婆";
//4th generation
$pgv_lang["sosa_16"] = "高祖父(四世祖)";
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
$pgv_lang["sosa_32"] = "高曾祖父(五世祖)";
$pgv_lang["sosa_33"] = "高曾祖母";
$pgv_lang["sosa_34"] = "高曾祖";
$pgv_lang["sosa_35"] = "高曾祖";
$pgv_lang["sosa_36"] = "高曾祖";
$pgv_lang["sosa_37"] = "高曾祖";
$pgv_lang["sosa_38"] = "高曾祖";
$pgv_lang["sosa_39"] = "高曾祖";
$pgv_lang["sosa_40"] = "高曾祖";
$pgv_lang["sosa_41"] = "高曾祖";
$pgv_lang["sosa_42"] = "高曾祖";
$pgv_lang["sosa_43"] = "高曾祖";
$pgv_lang["sosa_44"] = "高曾祖";
$pgv_lang["sosa_45"] = "高曾祖";
$pgv_lang["sosa_46"] = "高曾祖";
$pgv_lang["sosa_47"] = "高曾祖";
$pgv_lang["sosa_48"] = "高曾祖";
$pgv_lang["sosa_49"] = "高曾祖";
$pgv_lang["sosa_50"] = "高曾祖";
$pgv_lang["sosa_51"] = "高曾祖";
$pgv_lang["sosa_52"] = "高曾祖";
$pgv_lang["sosa_53"] = "高曾祖";
$pgv_lang["sosa_54"] = "高曾祖";
$pgv_lang["sosa_55"] = "高曾祖";
$pgv_lang["sosa_56"] = "高曾祖";
$pgv_lang["sosa_57"] = "高曾祖";
$pgv_lang["sosa_58"] = "高曾祖";
$pgv_lang["sosa_59"] = "高曾祖";
$pgv_lang["sosa_60"] = "高曾祖";
$pgv_lang["sosa_61"] = "高曾祖";
$pgv_lang["sosa_62"] = "高曾祖";
$pgv_lang["sosa_63"] = "高曾祖";
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
$pgv_lang["paternal grandfather"]	= "爷爷";
$pgv_lang["paternal grandmother"]	= "奶奶";
$pgv_lang["maternal grandfather"]	= "老爷";
$pgv_lang["maternal grandmother"]	= "姥姥";
$pgv_lang["paternal elder great uncle"]	= "伯祖父";
$pgv_lang["paternal elder great uncle's wife"]	= "伯祖母";
$pgv_lang["paternal younger great uncle"]	= "叔祖父";
$pgv_lang["paternal younger great uncle's wife"] = "叔祖母";
$pgv_lang["paternal great aunt"]	= "祖姑母";
$pgv_lang["paternal great aunt's husband"] = "祖姑丈";
//--Parents generation
$pgv_lang["father"] = "父亲";
//could not find paternal uncle translation. this is our best guess.
$pgv_lang["paternal uncle"] = "叔叔";
$pgv_lang["paternal older uncle"]	= "伯父";
$pgv_lang["paternal older uncle's wife"]	= "伯母";
$pgv_lang["paternal younger uncle"]	= "叔父";
$pgv_lang["paternal younger uncle's wife"] = "婶母";
$pgv_lang["paternal aunt"] = "姑姑";
$pgv_lang["paternal aunt's husband"] = "姑夫";
$pgv_lang["paternal older aunt"]	= "姑妈";
$pgv_lang["paternal older aunt's husband"] = "姑夫";
$pgv_lang["paternal younger aunt"]	= "姑姑";
$pgv_lang["paternal younger aunt's husband"] = "姑夫";
$pgv_lang["mother"] = "母亲";
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
$pgv_lang["younger brother's wife"]	= "弟妇";
$pgv_lang["elder sister"] = "姐姐";
$pgv_lang["elder sister's husband"]	= "姐夫";
$pgv_lang["younger sister"]	= "妹妹";
$pgv_lang["younger sister's husband"] = "妹夫";

$pgv_lang["paternal male cousin"]	= "堂兄弟";
$pgv_lang["paternal elder male cousin"]	= "堂哥";
$pgv_lang["paternal elder male cousin's wife"]	= "堂嫂";
$pgv_lang["paternal younger male cousin"]	= "堂弟";
$pgv_lang["paternal younger male cousin's wife"] = "堂弟妇";
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
$pgv_lang["bosa_2"]	= "儿子";
$pgv_lang["bosa_3"] = "女儿";
//2nd generation
$pgv_lang["bosa_4"] = "孙子";
$pgv_lang["bosa_5"] = "孙女";
$pgv_lang["bosa_6"] = "外孙子";
$pgv_lang["bosa_7"] = "外孙女";
//3rd generation
$pgv_lang["bosa_8"] = "曾内孙仔";
$pgv_lang["bosa_9"] = "曾内孙女";
$pgv_lang["bosa_10"] = "曾内孙仔";
$pgv_lang["bosa_11"] = "曾内孙女";
$pgv_lang["bosa_12"] = "曾内孙仔";
$pgv_lang["bosa_13"] = "曾内孙女";
$pgv_lang["bosa_14"] = "曾内孙仔";
$pgv_lang["bosa_15"] = "曾内孙女";
//4th generation
$pgv_lang["bosa_16"] = "玄孙";
$pgv_lang["bosa_17"] = "玄孙";
$pgv_lang["bosa_18"] = "玄孙";
$pgv_lang["bosa_19"] = "玄孙";
$pgv_lang["bosa_20"] = "玄孙";
$pgv_lang["bosa_21"] = "玄孙";
$pgv_lang["bosa_22"] = "玄孙";
$pgv_lang["bosa_23"] = "玄孙";
$pgv_lang["bosa_24"] = "玄孙";
$pgv_lang["bosa_25"] = "玄孙";
$pgv_lang["bosa_26"] = "玄孙";
$pgv_lang["bosa_27"] = "玄孙";
$pgv_lang["bosa_28"] = "玄孙";
$pgv_lang["bosa_29"] = "玄孙";
$pgv_lang["bosa_30"] = "玄孙";
$pgv_lang["bosa_31"] = "玄孙";
//--Children's Generation
$pgv_lang["son"]	= "儿子";
$pgv_lang["son's wife"]	= "儿媳妇";
$pgv_lang["daughter"]	= "女儿";
$pgv_lang["daughter's husband"] = "女婿";
$pgv_lang["nephew"] = "外甥";
$pgv_lang["nephew's wife"] = "外甥媳妇";
$pgv_lang["niece"] = "姪女";
$pgv_lang["show_path"]				= "显示连接路线";
$pgv_lang["niece's husband"]	= "姪女婿";
//--Grandchildren's Generation from detail
$pgv_lang["son's son"]	= "孙子";
$pgv_lang["son's son's wife"]	= "孙媳妇";
$pgv_lang["son's daughter"]	= "孙女";
$pgv_lang["son's daughter's husband"] = "孙女婿";
$pgv_lang["daugghter's son"]	= "外孙";
$pgv_lang["daughter's daughter"]	= "外孙女";
$pgv_lang["Brother's son's son "]	= "姪孙";
$pgv_lang["brother's son's daughter"] = "姪孙女";
//--Greatgrandchildrens Generation from detail of http://www.kwanfamily.info/familytitles/familytitle.html#memc
$pgv_lang["children's children's children"] = "曾孙";
$pgv_lang["children's children's son"] = "曾内孙仔";
$pgv_lang["children's children's daughter"] = "曾内孙女";
//--great-great grandchildren generation
$pgv_lang["children's children's children's children's"] = "玄孙";
$pgv_lang["sibling"]			= "兄弟姐妹";
$pgv_lang["follow_spouse"]		= "经过婚姻关系测验";
$pgv_lang["timeout_error"]		= "找不到关系。";
$pgv_lang["grandchild"]				= "孙子女";
$pgv_lang["grandson"]				= "孙子";
$pgv_lang["granddaughter"]			= "孙女";
$pgv_lang["son"]			= "儿子";
$pgv_lang["daughter"]			= "女儿";
$pgv_lang["brother"]			= "兄弟";
$pgv_lang["sister"]			= "姐妹";
//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "是否确实要删除这个GEDCOM 情况吗？";
$pgv_lang["access_denied"]		= "<b>不允许</b><br />你的访问被拒绝。";
$pgv_lang["changes_exist"]		= "<font color=red><b>已对此GEDCOM进行了更改</b></font>";
$pgv_lang["find_place"]			= "寻找地方";
$pgv_lang["close_window"]		= "关闭窗口";
$pgv_lang["close_window_without_refresh"]	= "关闭窗口但不要刷新";
$pgv_lang["place_contains"]		= "地方包含:";
$pgv_lang["now_import"]			= "现在您应该导入GEDCOM 记录入网站 由点击在导入链接如下。";
$pgv_lang["add"]			= "添加";
$pgv_lang["custom_event"]		= "自定义事件";
$pgv_lang["delete_person"]		= "删除这个人";
$pgv_lang["confirm_delete_person"]	= "确认从家谱文件中删除这个人？";
$pgv_lang["find_media"]			= "查找媒体";
$pgv_lang["set_link"]			= "设置连接";
$pgv_lang["delete_source"]		= "删除这个来源";
$pgv_lang["confirm_delete_source"]	= "确认从家谱文件中删除这个来源？";
$pgv_lang["find_family"]		= "寻找家庭";
$pgv_lang["find_fam_list"]			= "寻找家庭列表";
$pgv_lang["edit_name"]			= "编辑名字";
$pgv_lang["delete_name"]		= "删除名字";
$pgv_lang["select_date"]			= "选择日期";
$pgv_lang["bdm"]					= "出生，去世，婚姻";
//-- calendar.php messages
$pgv_lang["on_this_day"]		= "在这一天...";
$pgv_lang["in_this_month"]			= "在这个月 ...";
$pgv_lang["in_this_year"]			= "在这年 ...";
$pgv_lang["year_anniversary"]		= "#year_var# 周年纪念";
$pgv_lang["today"]					= "今天";
$pgv_lang["day"]			= "日:";
$pgv_lang["showcal"]				= "显示事情：";
$pgv_lang["anniversary"]			= "纪念日";
$pgv_lang["month"]			= "月份:";
$pgv_lang["anniversary_calendar"] 	= "周年纪念日";
$pgv_lang["sunday"]			= "星期天";
$pgv_lang["monday"]			= "星期一";
$pgv_lang["tuesday"]			= "星期二";
$pgv_lang["wednesday"]			= "星期三";
$pgv_lang["thursday"]			= "星期四";
$pgv_lang["friday"]			= "星期五";
$pgv_lang["viewyear"]				= "按年查看";
$pgv_lang["saturday"]			= "星期六";
$pgv_lang["viewday"]			= "按天查看";
$pgv_lang["lost_password"]			= "丢失密码？";
$pgv_lang["day_not_set"]			= "没有日子";
$pgv_lang["viewmonth"]			= "按月查看";
$pgv_lang["all_people"]			= "所有人";
$pgv_lang["no_account_yet"] 		= "没有账号？";
$pgv_lang["living_only"]		= "在世人员";
$pgv_lang["recent_events"]		= "近期事件(< 100 年)";
//-- upload media messages
//-- user self registration module
$pgv_lang["mandatory"] 			= "有 * 的为必填项，提交后请耐心等待。";
$pgv_lang["requestpassword"]		= "忘记密码";
$pgv_lang["requestaccount"]		= "注册新账户";
$pgv_lang["pls_note01"]			= "请注意：系统区分大小写！";
$pgv_lang["min6chars"]			= "密码必须至少包含6个字符";
$pgv_lang["pls_note02"]			= "请注意：密码应仅包含字母和数字。 在密码中包含其他字符可能会导致无法从某些系统访问。";
$pgv_lang["pls_note03"]			= "在激活帐户之前，将验证此电子邮件地址。 它不会显示在网站上。 您将在此电子邮件地址收到一条消息，其中包含您的注册数据，该数据将转发到此地址。";
$pgv_lang["emailadress"]		= "电子邮件：";
$pgv_lang["pls_note04"]			= "标记*的空格为必填。";
$pgv_lang["pls_note05"]			= "待完成此页面上的表格并验证您的答案后，您将收到一封确认电子邮件，其中包含您在此页面上指定的电子邮件地址。 使用确认电子邮件，您将激活您的帐户; 如果您未能在七天内激活您的帐户，它将被清除（您可以在此时再次注册该帐户）。 要使用此站点，您需要知道您的登录名和密码。 您必须在此页面上指定现有的有效电子邮件地址才能收到帐户确认电子邮件。<br /><br />如果您在本网站注册帐户时遇到问题，请向网站管理员提交帮助请求。";
$pgv_lang["mail01_line01"]		= "你好，#user_fullname#：";
$pgv_lang["mail01_line02"]		= "您在（#SERVER_NAME#）上使用了电子邮件地址（#user_email#）进行注册。";
$pgv_lang["mail01_line03"]		= "有关注册信息显示在下面的链接中：";
$pgv_lang["mail01_line04"]		= "请单击下面的链接并填写所需数据以验证您的帐户和电子邮件地址。";
$pgv_lang["mail01_line05"]		= "如果您没有请求此数据，则可以删除此消息。";
$pgv_lang["mail01_line06"]		= "您不会再从此系统收到任何邮件，因为该帐户将在七天内未经验证而被删除。";
$pgv_lang["mail01_subject"]		= "请激活您在#SERVER_NAME#的注册账户";
$pgv_lang["mail02_line01"]		= "你好 管理员...";
$pgv_lang["mail02_line02"]		= "新用户在(#SERVER_NAME#)处进行了新的用户注册。";
$pgv_lang["mail02_line03"]		= "用户收到了一封包含必要数据的电子邮件，以验证其帐户。";
$pgv_lang["mail02_line04"]		= "用户完成此验证后，您将立即通过邮件通知该用户登录您网站的权限。";
$pgv_lang["mail02_subject"]		= "新注册#SERVER_NAME#";
$pgv_lang["hashcode"]			= "验证码:";
$pgv_lang["thankyou"]			= "#user_fullname# ...<br />感谢您的注册";
$pgv_lang["pls_note06"]			= "现在，您的电子邮件地址（#user_email#）将收到一封确认信。 打开您的电子邮件，并激活您的帐户; 如果您未能在七天内激活您的帐户，它将被清除（您可以在此时再次注册该帐户）。要登录此站点，您需要知道您的登录名和密码。";
$pgv_lang["registernew"]		= "新帐户确认";
$pgv_lang["user_verify"]		= "用户确认";
$pgv_lang["send"]			= "发送";
$pgv_lang["pls_note07"]			= "请输入您在此系统中通过电子邮件收到的用户名，密码和验证码，以验证您的帐户申请。";
$pgv_lang["pls_note08"]			= "检查用户#user_name#的数据";
$pgv_lang["mail03_line01"]		= "你好 管理员 ...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# (#newuser[fullname]#) 已经验证了注册数据。";
$pgv_lang["mail03_line03"]		= "请点击以下链接登录您的网站编辑用户并授予他登录您网站的权限。";
$pgv_lang["mail03_subject"]		= "#SERVER_NAME#的新验证";
$pgv_lang["pls_note09"]			= "您被确定为注册用户。";
$pgv_lang["pls_note10"]			= "管理员已收到通知。<br />一旦他授予您登录权限，您就可以使用您的用户名和密码登录。";
$pgv_lang["pls_note10a"]			= "你可以用你的用户名和密码进入网站。";
$pgv_lang["data_incorrect"]		= "数据不正确！<br />请再试一次！";
$pgv_lang["user_not_found"]		= "无法验证您输入的信息。 请返回重试。";
$pgv_lang["lost_pw_reset"]		= "忘记密码请求";
$pgv_lang["pls_note11"]			= "要重置密码，请提供用户帐户的用户名和电子邮件地址。<br /><br />我们会通过电子邮件向您发送一个特殊的URL，其中包含您帐户的确认哈希值。 访问提供的URL，您将被允许更改密码并登录此站点。 出于安全考虑，您不应向任何人提供此确认哈希，包括本网站的管理员（我们不会要求）。<br /><br />如果您需要本网站管理员的帮助， 请联系网站管理员。";
$pgv_lang["enter_email"]		= "你必须输入一个电子邮件";
$pgv_lang["mail04_line01"]		= "你好#user_fullname# ...";
$pgv_lang["mail04_line02"]		= "你已经请求了一个新密码";
$pgv_lang["mail04_line03"]		= "建议：";
$pgv_lang["mail04_line04"]		= "现在请点击下面的链接，使用新密码登录并进行更改以确保数据的完整性。";
$pgv_lang["mgv"]					= "用户中心";
$pgv_lang["mail04_subject"]		= "数据请求在#SERVER_NAME#";
$pgv_lang["welcome_text_cust_head"] 	= "<span class='center'><b>欢迎来到这个家谱网站</b></span><br />只有注册过的可以浏览网站。<br />";
$pgv_lang["welcome_text_auth_mode_3"]	= "<span class='center'><b>欢迎到这个家谱网站</b></span><br />只有<u>家庭成员</u>才可以看。<br /><br />你可以登录或申请一个账号<br /><br />注册后要通过网站管理的批淮才可以看。";
$pgv_lang["pwreqinfo"]			= "<br />一封包含新密码的邮件被发送到电子邮件地址(#user[email]#)。<br /><br />请检查您的邮件帐户，邮件应在接下来的几分钟内收到。<br /><br />建议：<br /><br />收到邮件后，您应该使用新密码登录本网站。";
$pgv_lang["editowndata"]		= "我的账号";
$pgv_lang["savedata"]			= "保存改变的数据";
$pgv_lang["datachanged"]		= "用户数据被改变";
$pgv_lang["datachanged_name"]		= "您可能需要使用新用户名重新登录。";
$pgv_lang["myuserdata"]			= "我的账户";
$pgv_lang["user_theme"]			= "我的背景设置";
$pgv_lang["mygedview"]			= "用户中心";
$pgv_lang["passwordlength"]		= "密码必须至少包含6个字符。";
//-- mygedview page
$pgv_lang["welcome"]			= "欢迎";
$pgv_lang["upcoming_events"]		= "即将来临的事件";
$pgv_lang["living_or_all"]			= "只显示现在在世人的事情？";
$pgv_lang["basic_or_all"]			= "只显示现在出生，去世和婚姻？";
$pgv_lang["style2"]					= "表格";
$pgv_lang["style1"]					= "列表";
$pgv_lang["chat"]			= "聊天";
$pgv_lang["users_logged_in"]		= "用户已经登录";
$pgv_lang["message"]			= "发送消息";
$pgv_lang["my_messages"]		= "我的消息";
$pgv_lang["message_from_name"]		= "你的名字：";
$pgv_lang["date_created"]		= "日期被发送:";
$pgv_lang["message_from"]		= "消息从:";
$pgv_lang["message_to"]			= "发消息:";
$pgv_lang["message_subject"]		= "主题:";
$pgv_lang["message_body"]		= "消息:";
$pgv_lang["no_to_user"]			= "接收用户未被提供。  不能继续";
$pgv_lang["provide_email"]		= "请提供您的电子邮件以便我们能与您联繫以回应这个消息。  如果您不提供您的电子邮件我们不会能回应您的查询。  您电子邮件不会被使用在其他方式除回应这次查询以外。";
$pgv_lang["reply"]			= "回复";
$pgv_lang["message_deleted"]		= "消息被删除";
$pgv_lang["message_sent"]		= "短消息已经发送成功";
$pgv_lang["reset"]			= "重置";
$pgv_lang["site_default"]		= "站点默认值";
$pgv_lang["favorites"]				= "收藏";
$pgv_lang["mygedview_desc"]		= "您的主页允许您保留您喜爱的人员书签, 跟踪即将来临的事件, 并且与其它用户合作。";
$pgv_lang["no_messages"]		= "您没有未读消息。";
$pgv_lang["no_gedcom_favorites"]	= "现在没有收藏。网络管理可以在这里显示收藏文件。";
$pgv_lang["gedcom_favorites"]		= "此家谱的收藏";
$pgv_lang["clicking_ok"]		= "按下 OK 后你在新的窗口可以联系#user[fullname]#";
$pgv_lang["my_favorites"]		= "我的收藏";
$pgv_lang["no_favorites"]		= "您尚未选择任何收藏夹。<br /><br />要将个人，家庭或来源添加到收藏夹，请单击<b>#pgv_lang[add_favorite]#</b>链接以显示一些您可以输入或搜索ID号的字段。或者您也可以输入网址和标题。";
$pgv_lang["add_to_my_favorites"] 	= "添加来我的收藏";
$pgv_lang["confirm_fav_remove"]		= "是否确实要从您的收藏页去除这个条目吗？";
$pgv_lang["portal"]			= "门户";
$pgv_lang["invalid_email"]		= "请输入一封有效电子邮件。";
$pgv_lang["enter_subject"]		= "请进入消息主题。";
$pgv_lang["enter_body"]			= "请输入一些文本在发送之前。";
$pgv_lang["confirm_message_delete"]	= "是否确实要删除这个消息吗？  它无法以后被检索。";
$pgv_lang["gedcom_news_limit_count"]	= "文件数量";
$pgv_lang["add_journal"]			= "添加日记条目";
$pgv_lang["gedcom_news"]			= "新闻";
$pgv_lang["edit_news"]				= "添加日记或新闻";
$pgv_lang["phpgedview_message"] 	= "家谱短消息";
$pgv_lang["common_surnames"]		= "最普及的姓";
$pgv_lang["default_news_title"] 	= "欢迎来到你的家谱";
$pgv_lang["recent_changes"] 		= "近期的改动";
$pgv_lang["recent_changes_block"]	= "近期的改动";
$pgv_lang["delete_selected_messages"]	= "删除选定的短信";
$pgv_lang["add_media_tool"] 		= "添加媒体工具";
$pgv_lang["my_journal"] 			= "我的日记";
$pgv_lang["user_news_block"]		= "用户日记";
$pgv_lang["gedcom_news_archive"] 	= "看记录";
$pgv_lang["gedcom_news_block"]		= "家谱新闻";
$pgv_lang["theme_select_block"] 	= "选择背景主题";
$pgv_lang["login_block"]			= "登录";
$pgv_lang["gedcom_stats_show_surnames"]	= "显示普及的姓";
$pgv_lang["gedcom_favorites_block"] = "家谱收藏";
$pgv_lang["gedcom_stats_block"] 	= "家谱统计";
$pgv_lang["gedcom_block"]			= "家谱欢迎";
$pgv_lang["random_media_events"]	= "事件";
$pgv_lang["random_media_persons"]	= "个人";
$pgv_lang["random_media_block"] 	= "随机抽样媒体";
$pgv_lang["welcome_block"]			= "用户欢迎";
$pgv_lang["user_favorites_block"]	= "用户收藏";
$pgv_lang["user_messages_block"]	= "用户短信";
$pgv_lang["upcoming_events_block"]	= "即将来临的事件";
$pgv_lang["todays_events_block"]	= "在这一天";
$pgv_lang["customize_gedcom_page"]	= "用户化这个欢迎界面";
$pgv_lang["customize_page"] 		= "用户化家谱页面";
$pgv_lang["stat_latest_death"] 	= "最近去世";
$pgv_lang["stat_earliest_death"] 	= "最早去世";
$pgv_lang["stat_latest_birth"] 	= "最近出生";
$pgv_lang["stat_earliest_birth"] 	= "最早出生";
$pgv_lang["stat_other"] 			= "其它纪录";
$pgv_lang["stat_sources"]			= "来源";
$pgv_lang["stat_families"]			= "家庭";
$pgv_lang["stat_individuals"]		= "个人";
$pgv_lang["message_email1"]		= "以下信息也发到您的用户帐号，消息来自: ";
$pgv_lang["message_email2"]		= "您寄发了以下信息到其他用户帐号: ";
$pgv_lang["message_email3"]		= "您寄发了以下信息到管理员: ";
$pgv_lang["viewing_url"]		= "在查看以下URL时发送了此消息: ";
$pgv_lang["messaging2_help"]		= "信息也将同时发送到他的电子邮箱。";
$pgv_lang["random_picture"]		= "随机展示媒体";
$pgv_lang["choose_report"]			= "选择报表运行";
$pgv_lang["ahnentafel_born_f"]		= "出生";
$pgv_lang["ahnentafel_born_m"]		= "出生";
$pgv_lang["ahnentafel_generation"]	= "几代人";
$pgv_lang["ahnentafel_pronoun_f"]	= "她";
$pgv_lang["ahnentafel_pronoun_m"]	= "他";
$pgv_lang["html_reports"]			= "网页HTML报表";
$pgv_lang["pdf_reports"]			= "PDF 报表";
$pgv_lang["page"]					= "页";
$pgv_lang["with"]					= "和";
$pgv_lang["chart_list"]			= "列表";
$pgv_lang["chart_style"]			= "表的格式";
$pgv_lang["ancestry_chart"] 		= "祖先树";
$pgv_lang["statistics"] 			= "统计表";
$pgv_lang["show_photos"]			= "显示照片？";
$pgv_lang["show_notes"] 			="显示来源？";
$pgv_lang["show_abbr_notes"] 		= "显示缩略语？";
$pgv_lang["show_sources"]			= "显示来源？";
$pgv_lang["enter_famid"]			= "输入家庭ID";
$pgv_lang["of"] 					= "从";
$pgv_lang["individual_report"]		= "个人报表";
$pgv_lang["family_group_report"]	= "家庭组报表";
$pgv_lang["reports"]				= "报表";
$pgv_lang["download_report"]		= "下载报表";
$pgv_lang["select_report"]			= "选择报表";
$pgv_lang["update_fact"] = "更新信息";
$pgv_lang["update_fact_restricted"] = "不可以改编此数据";
$pgv_lang["run_report"] 			= "看报表";
$pgv_lang["selected_report"]		= "所选的报表";
$pgv_lang["enter_report_values"]	= "进入报表值";
$pgv_lang["sosa_2"] 				= "父亲";
$pgv_lang["sosa_3"] 				= "母亲";
$pgv_lang["upload_file"]			= "上传的文件";
$pgv_lang["update_name"] = "更新名字";
$pgv_lang["quick_update_instructions"] = "你可以修改信息";
$pgv_lang["update_address"] = "更新地址";
$pgv_lang["top10_pageviews"]		= "看得最多的文件";
$pgv_lang["fams_charts"]			= "家庭的选项";
$pgv_lang["indis_charts"]			= "个人的选项";
$pgv_lang["none"]					= "没有";
$pgv_lang["locked"]					= "不更改";
$pgv_lang["privacy"]				= "隐私";
$pgv_lang["select_fact"] = "选择一个情况...";
$pgv_lang["update_photo"] = "更新相片";
$pgv_lang["quick_update_title"] = "快速更新";
$pgv_lang["stop"]					= "停止";
$pgv_lang["random_media_start_slide"]	= "本也读取时放幻灯图片？";
$pgv_lang["random_media_ajax_controls"]	= "显示幻灯控制？";
$pgv_lang["description"]			= "介绍";
$pgv_lang["current_dir"]			= "现在的文件夹位置";
$pgv_lang["SHOW_ID_NUMBERS"]		= "在名字旁显示ID";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "在个人框架里显示图像";
$pgv_lang["view_img_details"]		= "看图片的详细资料";
$pgv_lang["server_folder"]			= "服务器上文件名";
$pgv_lang["medialist_recursive"]	= "子目录的文件";
$pgv_lang["media_options"]			= "媒体选项";
$pgv_lang["age_differences"]		= "显示不同的地方";
$pgv_lang["date_of_entry"]			= "原输入日期";
$pgv_lang["multi_site_search"] 		= "多个网站搜索";
$pgv_lang["switch_lifespan"]		= "显示寿命表";
$pgv_lang["switch_timeline"]		= "显示时间表";
$pgv_lang["differences"]			= "不同之处";
$pgv_lang["charts_block"]			= "表格";
$pgv_lang["charts_block_descr"]		= "这个表格可以让你制作一个欢迎界面。那里可以显示你的祖先，子孙。你也可以选一个家谱的起点。";
$pgv_lang["charts_click_box"]		= "点击任何的方格会得到更多的个人信息";
$pgv_lang["chart_type"]				= "图表类型";
$pgv_lang["changedate1"]			= "改变纪录的最晚时间";
$pgv_lang["changedate2"]			= "改变纪录的最早时间";
$pgv_lang["search_place_word"]		= "只能是整个字";
$pgv_lang["invalid_search_input"] 	= "请加入到这个年份新的名字，姓名或者是地方";
$pgv_lang["duplicate_username"] 	= "用户名重复。已经有人用这个用户名。请你选另一个用户名。";
$pgv_lang["genealogy"]					= "家谱";
$pgv_lang["activate"]					= "启动";
$pgv_lang["deactivate"]					= "关闭";
$pgv_lang["play"]					= "播放";
$pgv_lang["gedcom_editing_disabled"]	= "这个家谱文件被管理员禁止更改";
$pgv_lang["birth_M"] = "#name#的生日";
$pgv_lang["birth_F"] = "#name#的生日";
$pgv_lang["born_in_M"] = "出生在#place#中的#date#";
$pgv_lang["born_in_F"] = "出生在#place#中的#date#";
$pgv_lang["born_on_M"] = "生于#date#";
$pgv_lang["born_on_F"] = "生于#date#";
$pgv_lang["death_M"] = "#name#death的周年纪念日";
$pgv_lang["death_F"] = "#name#death的周年纪念日";
$pgv_lang["died_in_M"] = "死在#place#中#date#";
$pgv_lang["died_in_F"] = "死在#place#中#date#";
$pgv_lang["died_on_M"] = "死于#date#";
$pgv_lang["died_on_F"] = "死于#date#";
$pgv_lang["anniversary_of"] = "#丈夫#和#wife#的结婚纪念日";
$pgv_lang["married_in"] = "#date#在#place#結婚";
$pgv_lang["married_on"] = "#date#\"结婚";
$pgv_lang["clustrmaps_locations"] = "此页面访问者的位置";
$pgv_lang["gedcomid"] = "GEDCOM INDI记录ID";
$pgv_lang["sortby"] = "序列";
$pgv_lang["exact"] = "精确";
$pgv_lang["begins_with"] = "开始于";
$pgv_lang["contains"] = "包含";
$pgv_lang["sounds_like"] = "模糊查询";
$pgv_lang["advanced_search"] = "高级搜索";
$pgv_lang["more_fields"] = "添加更多字段";
$pgv_lang["install_step_8"] = "开始";
$pgv_lang["parent_family"] = "父母家庭";
$pgv_lang["step_parent_family"] = "继父母家庭";
$pgv_lang["immediate_family"] = "近亲";

$pgv_lang["load_full_tree"] = "在整页交互式树中查看此树";
$pgv_lang["hide_show_spouses"] = "显示或隐藏多个配偶";
$pgv_lang["interactive_tree"] = "交互树";
$pgv_lang["example"] = "例：";
$pgv_lang["tree"] = "家庭树";
$pgv_lang["ellipsis"] = "\xE2\x80\xA6";
$pgv_lang["showUnknown"] = "显示不明性别";
$pgv_lang["count"] = "计数";
$pgv_lang["cache_life"] = "缓存文件生命周期";
$pgv_lang["medialist_unlinked"] = "只显示不相关的媒体";
$pgv_lang["medialist_current_dir"] = "当前子目录";
$pgv_lang["names"] = "名字";
$pgv_lang["lchildren"] = "孩子";
$pgv_lang["grandchildren"] = "孙子";
$pgv_lang["shared_note_menu"] = "共享记录选项";
$pgv_lang["repo_menu"] = "存储库选项";
$pgv_lang["search_DM"] = "Daitch-Mokotoff";
$pgv_lang["search_notes"] = "共享记录";
$pgv_lang["font"] = "字体";
$pgv_lang["use_colors"] = "使用颜色";
$pgv_lang["record_not_found"] = "找不到请求的GEDCOM记录。这可能是由于链接到无效的人或损坏的GEDCOM文件。";
$pgv_lang["result_page"] = "结果页面";
$pgv_lang["no_search_for"] = "务必选择一个搜索选项。";
$pgv_lang["no_search_site"] = "一定要选择至少一个远程站点。";
$pgv_lang["search_sites"] = "要搜索的网站";
$pgv_lang["site_list"] = "网站：";
$pgv_lang["site_had"] = "包含以下内容";
$pgv_lang["label_search_engine_detected"] = "检测到搜索引擎蜘蛛";

$pgv_lang["noemail"] = "没有电子邮件的地址";
$pgv_lang["maxviews_exceeded"] = "允許的頁面查看率#GLOBALS[MAX_VIEWS]# per #GLOBALS[MAX_VIEW_TIME]超過#秒。";
$pgv_lang["broadcast_not_logged_6mo"] = "向未登录6个月的用户发送消息";
$pgv_lang["broadcast_never_logged_in"] = "向从未登录的用户发送消息";
$pgv_lang["stats_to_show"] = "选择要在此区块中显示的统计数据";
$pgv_lang["stat_unknown"] = "未知";
$pgv_lang["stat_link"] = "以图表形式查看统计数据";
$pgv_lang["print_stat_link"] = "显示统计图表的链接？";


$pgv_lang["edit_shared_note"] = "编辑共享记录";
$pgv_lang["descent_steps"] = "子孙后代";
$pgv_lang["cookie_help"] = "此网站使用cookie来跟踪您的登录状态。<br /><br />您的浏览器似乎未启用Cookie。您必须先启用此网站的Cookie才能登录。您可以查阅浏览器的帮助有关启用cookie的信息的文档。";
//Individual
$pgv_lang["indi_is_remote"] = "这个人的信息是从一个远程站点链接的。";
//Add Remote Link
$pgv_lang["title_search_link"] = "添加本地链接";
$pgv_lang["label_site_url2"] = "网站网址";

$pgv_lang["delete_family_confirm"] = "删除家庭将取消所有人之间的联系，但会将个人留在原地。你确定要删除这个家庭吗？";
$pgv_lang["add_fav_enter_note"] = "输入关于此收藏的可选说明";
$pgv_lang["add_fav_or_enter_url"] = "或<br />\n输入网址和标题";
$pgv_lang["next_email_sent"] = "下一封电子邮件提醒将在\"之后发送";
$pgv_lang["last_email_sent"] = "上次发送电子邮件提醒";
$pgv_lang["index_edit_advice"] = "突出显示一个块名称，然后单击其中一个箭头图标，以指示的方向移动该突出显示的块。";
$pgv_lang["html_block_descr"] = "这是一个简单的HTML块，您可以将其放在页面上以添加您可能想要的任何类型的消息。";
$pgv_lang["html_block_sample_part1"] = "<p class=\"blockhc\"><b>将标题放在此处</b></p><br /><p>点击配置按钮";
$pgv_lang["html_block_sample_part2"] = "改变这里印刷的内容。</p>";
$pgv_lang["htmlplus_block_descr"] = "这是一个HTML块，您可以将其放在页面上以添加您可能需要的任何类型的消息。您可以将对GEDCOM信息的引用插入到HTML文本中。";
$pgv_lang["htmlplus_block_narrative"] = "叙事风格（仅英文）";
$pgv_lang["htmlplus_block_custom"] = "自定义";
$pgv_lang["htmlplus_block_taglist"] = "标签列表";
$pgv_lang["htmlplus_block_compat"] = "兼容模式";
$pgv_lang["htmlplus_block_ui"] = "扩展接口";
$pgv_lang["total_unknown"] = "未知";
$pgv_lang["remove_custom_tags"] = "删除自定义PGV标签？（例如_PGVU，_THUM）";
$pgv_lang["common_upload_errors"] = "此错误可能意味著您尝试上传的文件超出了主机设置的限制.PHP中的默认限制为2MB。您可以联系主机的支持组，让他们增加php.ini文件中的限制，或者您可以使用FTP上传文件。使用<a href=\"uploadgedcom.php?action=add_form\"><b>添加GEDCOM</b></a>页面添加您使用FTP上传的GEDCOM文件。 ";
$pgv_lang["mothers_family_with"] = "妈妈的家人";
$pgv_lang["fathers_family_with"] = "父亲的家人";
$pgv_lang["family_with"] = "有家人";
$pgv_lang["others"] = "其他";
$pgv_lang["first_letter_name"] = "选择一个字，将显示以该字开头的家庭。";
$pgv_lang["first_letter_sfname"] = "选择一个以该名字开头的字来向家人展示配偶的名字，。";
$pgv_lang["first_letter_iname"] = "选择一个姓氏，将显示这个姓氏所有人列表。";
$pgv_lang["first_letter_fname"] = "选择一个名字，将显示姓名中以该名字开头的个人。";
$pgv_lang["total_changes"] = "总变化";
$pgv_lang["total_links"] = "总链接";
$pgv_lang["top10_pageviews_nohits"] = "目前没有任何热门歌曲可以展示。";
$pgv_lang["top10_pageviews_msg"] = "必须在GEDCOM配置，显示和布局部分，隐藏和显示组中启用命中计数器。";
$pgv_lang["review_changes_descr"] = "\"Pending Changes\"块将为具有编辑权限的用户提供在线更改的记录列表，这些记录仍需要审核和接受。这些更改正在等待接受或拒绝。<br /><br />如果此块已启用，具有\"接受\"权限的用户将每天收到一封电子邮件，通知他们需要审核更改。";
$pgv_lang["review_changes_email"] = "发送提醒电子邮件？";
$pgv_lang["review_changes_email_freq"] = "提醒电子邮件频率（天）";
$pgv_lang["review_changes_body"] = "已经对家谱数据库进行了在线更改。这些更改需要在向所有用户显示之前进行审核和接受。请使用下面的URL输入该网站并登录以查看更改。";
$pgv_lang["top10_pageviews_descr"] = "此块将显示已被查看最多的10条记录。此块需要在GEDCOM配置设置中启用命中计数器。";
$pgv_lang["top10_pageviews_block"] = "观看次数最多的条目";
$pgv_lang["stepparent"] = "继父母";
$pgv_lang["stepdad"] = "继父";
$pgv_lang["stepmom"] = "后妈";
$pgv_lang["stepsister"] = "继姐";
$pgv_lang["stepbrother"] = "继兄弟";
$pgv_lang["facts"] = "事实";
$pgv_lang["number_sign"] = "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm_ah"] = "？";
$pgv_lang["var_not_exist"] = "<span style=\"font-weight：bold\">语言变量不存在。请报告此错误。</span>";


$pgv_lang["rootid"] = "世系图起点";
$pgv_lang["landscape_top"] = "长辈在上";
$pgv_lang["landscape_down"] = "长辈在下";
$pgv_lang["random_surn"] = "随机姓氏";
$pgv_lang["generation_number"] = "代";

$pgv_lang["branch_list"] = "分支列表";
$pgv_lang["shared_note_list"] = "共享记录";
$pgv_lang["place_list_aft"] = "放置层次结构后";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["males"] = "男性";
$pgv_lang["females"] = "女性";
$pgv_lang["NN"] 			= "（未知）";
$pgv_lang["PN"] 			= "（未知）";
$pgv_lang["NNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["PNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["NNarabic"] 		= "(غير معروف)";
$pgv_lang["PNarabic"] 		= "(غير معروف)";
$pgv_lang["NNgreek"] 		= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 		= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 		= "(неопределено)";
$pgv_lang["PNrussian"] 		= "(неопределено)";
$pgv_lang["NNchinese"] 		= "(未知)";
$pgv_lang["PNchinese"] 		= "(未知)";
$pgv_lang["NNvietnamese"] 	= "(vô danh)";
$pgv_lang["PNvietnamese"] 	= "(không biết tuổi)";
$pgv_lang["NNthai"] 		= "（未知）";
$pgv_lang["PNthai"] 		= "（未知）";
$pgv_lang["NNother"] 		= "（未知）";
$pgv_lang["PNother"] 		= "（未知）";
$pgv_lang["unrecognized_code_msg"] = "这是一个错误，我们想修复它。请将此错误报告给";
$pgv_lang["gparents"] = "祖父母";
$pgv_lang["parent_age"] = "父母的年龄";
$pgv_lang["father_age"] = "父亲的年龄";
$pgv_lang["mother_age"] = "母亲的年龄";
$pgv_lang["challenged"] = "挑战";
$pgv_lang["disproved"] = "反驳";
$pgv_lang["no_tab1"] = "这个人没有任何事实。";
$pgv_lang["no_tab2"] = "这个人没有备注。";
$pgv_lang["no_tab3"] = "这个人没有来源引用。";
$pgv_lang["no_tab4"] = "这个人没有媒体对象。";
$pgv_lang["no_tab5"] = "这个人没有近亲。";
$pgv_lang["no_tab6"] = "这个人没有研究日志。";
$pgv_lang["show_fact_sources"] = "显示所有来源";
$pgv_lang["show_fact_notes"] = "显示所有笔记";

$pgv_lang["known_child"] = "1个孩子";
$pgv_lang["known_children"] = "孩子";
$pgv_lang["which_s_links"] = "应该添加哪些与此来源相关的记录？";
$pgv_lang["just_source"] = "只添加此来源。";
$pgv_lang["linked_source"] = "添加此源以及与之关联的家庭/人员。";
$pgv_lang["family_private"] = "关于这个家庭的详细信息是私人的。不包括家庭详细信息。";
$pgv_lang["media_private"] = "有关此媒体的详细信息是私密的。媒体详情不会包括在内。";
$pgv_lang["download_file"] = "下载文件#GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"] = "这个人是从以下网站下载的：";
$pgv_lang["family_downloaded_from"] = "这个家庭是从以下网站下载的：";
$pgv_lang["source_downloaded_from"] = "此来源是从以下网址下载的：";
$pgv_lang["enter_person_generations"] = "世代数：";
$pgv_lang["convertPath"] = "将媒体路径转换为";
$pgv_lang["convertSlashes"] = "将媒体文件夹分隔符转换为";
$pgv_lang["forwardSlashes"] = "正斜杠：/";
$pgv_lang["backSlashes"] = "反斜杠：\\";

$pgv_lang["view_records_in_place"] = "查看在这个地方找到的所有记录";
$pgv_lang["show_place_hierarchy"] = "在层次结构中显示位置";
$pgv_lang["show_place_list"] = "显示列表中的所有位置";
$pgv_lang["total_unic_places"] = "独特的地方";

$pgv_lang["external_objects"] = "外部对象";
$pgv_lang["record_not_updated"] = "记录#pid#无法更新。";
$pgv_lang["record_removed"] = "记录#xref#已成功从GEDCOM中删除。";
$pgv_lang["record_not_removed"] = "记录#xref#无法从GEDCOM中删除。";
$pgv_lang["record_not_added"] = "记录#xref#无法添加到GEDCOM。";

$pgv_lang["shared_notes"] = "共享记录";
$pgv_lang["search_soundex"] = "Soundex搜索";
$pgv_lang["search_replace"] = "搜索和替换";
$pgv_lang["search_shared_notes"] = "共享记录";
$pgv_lang["search_more_chars"] = "请输入多个字符";
$pgv_lang["search_soundextype"] = "Soundex类型：";
$pgv_lang["search_russell"] = "基本";
$pgv_lang["search_tagfilter"] = "排除过滤器";
$pgv_lang["search_tagfon"] = "排除一些非家谱数据";
$pgv_lang["search_tagfoff"] = "关";
$pgv_lang["associate"] = "连接关系";
$pgv_lang["search_record"] = "整个记录";
$pgv_lang["search_to"] = "至";

$pgv_lang["titles_found"] = "标题";
$pgv_lang["find_source"] = "寻找来源";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"] = "资源库";
$pgv_lang["repos_found"] = "存储库发现";
$pgv_lang["find_repository"] = "查找存储库";
$pgv_lang["confirm_delete_repo"] = "你确定要删除这个存储库吗？";


//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"] = "共享记录";
$pgv_lang["shared_notes_found"] = "找到共享记录";
$pgv_lang["find_shared_note"] = "查找共享记录";
$pgv_lang["shared_note_info"] = "共享记录信息";
$pgv_lang["total_shared_notes"] = "共享记录总数";

$pgv_lang["invalid_gedformat"] = "无效的GEDCOM格式";
$pgv_lang["changes_present"] = "当前的GEDCOM有待审核的更改。如果继续此导入，这些待处理的更改将被丢弃。您应该在继续导入之前查看待处理的更改。";
$pgv_lang["apply_filter"] = "应用过滤器";
$pgv_lang["find_specialchar"] = "寻找特殊人物";
$pgv_lang["skip_marnms"] = "排除已婚姓名";
$pgv_lang["show_marnms"] = "包括已婚姓名";
$pgv_lang["confidential"] = "机密";
$pgv_lang["alpha_index"] = "字母索引";
$pgv_lang["name_list"] = "名单";
$pgv_lang["firstname_alpha_index"] = "名字字母索引";
$pgv_lang["leaves"] = "外出";
$pgv_lang["widow"] = "寡妇";
$pgv_lang["widower"] = "鳏夫";
$pgv_lang["show_parents"] = "显示父母";
$pgv_lang["husb_age"] = "丈夫的年龄";
$pgv_lang["wife_age"] = "妻子的年龄";
$pgv_lang["years2"] = "年份";
$pgv_lang["week1"] = "周";
$pgv_lang["weeks"] = "周";
$pgv_lang["at_death_day"] = "在去世之日";

//calendar conversion options
$pgv_lang["cal_julian"] = "朱利安";
$pgv_lang["cal_french"] = "法国";
$pgv_lang["cal_jewish"] = "犹太";
$pgv_lang["cal_hebrew"] = "希伯来文";
$pgv_lang["cal_jewish_and_gregorian"] = "犹太人和格里高利人";
$pgv_lang["cal_hebrew_and_gregorian"] = "希伯来语和格里高利语";
$pgv_lang["cal_hijri"] = "回历";
$pgv_lang["cal_arabic"] = "阿拉伯";

//some religious dates
$pgv_lang["easter"] = "复活节";
$pgv_lang["ascension"] = "升天";
$pgv_lang["pentecost"] = "五旬节";
$pgv_lang["assumption"] = "假设";
$pgv_lang["all_saints"] = "万圣节";
$pgv_lang["christmas"] = "圣诞";

//am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."] = "上午";
$pgv_lang["p.m."] = "下午";
$pgv_lang["noon"] = "M";
$pgv_lang["midn"] = "锰";


$pgv_lang["vend"]         = "Vendémiaire";
$pgv_lang["brum"]         = "Brumaire";
$pgv_lang["frim"]         = "Frimaire";
$pgv_lang["nivo"]         = "Nivôse";
$pgv_lang["pluv"]         = "Pluviôse";
$pgv_lang["vent"]         = "Ventôse";
$pgv_lang["germ"]         = "Germinal";
$pgv_lang["flor"]         = "Floréal";
$pgv_lang["prai"]         = "Prairial";
$pgv_lang["mess"]         = "Messidor";
$pgv_lang["ther"]         = "Thermidor";
$pgv_lang["fruc"]         = "Fructidor";
$pgv_lang["comp"]         = "jours complémentaires";

$pgv_lang["tsh"]          = "Tishrei";
$pgv_lang["csh"]          = "Heshvan";
$pgv_lang["ksl"]          = "Kislev";
$pgv_lang["tvt"]          = "Tevet";
$pgv_lang["shv"]          = "Shevat";
$pgv_lang["adr"]          = "Adar";
$pgv_lang["adr_leap_year"]= "Adar I";
$pgv_lang["ads"]          = "Adar II";
$pgv_lang["nsn"]          = "Nissan";
$pgv_lang["iyr"]          = "Iyar";
$pgv_lang["svn"]          = "Sivan";
$pgv_lang["tmz"]          = "Tamuz";
$pgv_lang["aav"]          = "Av";
$pgv_lang["ell"]          = "Elul";

$pgv_lang["muhar"]        = "Muharram";
$pgv_lang["safar"]        = "Safar";
$pgv_lang["rabia"]        = "Rabi' al-awwal";
$pgv_lang["rabit"]        = "Rabi' al-thani";
$pgv_lang["jumaa"]        = "Jumada al-awwal";
$pgv_lang["jumat"]        = "Jumada al-thani";
$pgv_lang["rajab"]        = "Rajab";
$pgv_lang["shaab"]        = "Sha'aban";
$pgv_lang["ramad"]        = "Ramadan";
$pgv_lang["shaww"]        = "Shawwal";
$pgv_lang["dhuaq"]        = "Dhu al-Qi'dah";
$pgv_lang["dhuah"]        = "Dhu al-Hijjah";

$pgv_lang["b.c."] = "公元前。";

$pgv_lang["basic_auth"] = "基本认证";
$pgv_lang["digest_auth"] = "摘要认证"; //尚未在ID中使用
$pgv_lang["no_auth_needed"] = "没有认证";
$pgv_lang["media_not_linked"] = "此媒体对象未与任何GEDCOM记录相关联。";
$pgv_lang["media_dir_1"] = "此媒体对象位于外部服务器上";
$pgv_lang["media_dir_2"] = "此媒体对象位于标淮媒体目录中";
$pgv_lang["media_dir_3"] = "此媒体对象位于受保护的媒体目录中";
$pgv_lang["thumb_dir_1"] = "此缩略图位于外部服务器上";
$pgv_lang["thumb_dir_2"] = "此缩略图位于标淮媒体目录中";
$pgv_lang["thumb_dir_3"] = "此缩略图位于受保护的媒体目录中";
$pgv_lang["moveto_2"] = "移至受保护的目录";
$pgv_lang["moveto_3"] = "移至标淮目录";
$pgv_lang["move_standard"] = "移至标淮目录";
$pgv_lang["move_protected"] = "移至受保护的目录";
$pgv_lang["move_mediadirs"] = "移动媒体目录";
$pgv_lang["setperms"] = "设置媒体权限";
$pgv_lang["setperms_fix"] = "正确的读/写/执行权限";
$pgv_lang["setperms_success"] = "权限集";
$pgv_lang["setperms_failure"] = "未设置权限";
$pgv_lang["setperms_time_exceeded"] = "已达到执行时间限制。请在较小的目录上再次尝试该命令。";
$pgv_lang["move_time_exceeded"] = "达到了执行时间限制。再次尝试命令移动其余文件。";
$pgv_lang["media_firewall_rootdir_no_exist"] = "您请求的媒体防火墙根目录不存在。您必须先创建它。";
$pgv_lang["media_firewall_protected_dir_no_exist"] = "无法在Media Firewall根目录中创建受保护的媒体目录。请创建此目录并使其成为全局可写的。";
$pgv_lang["media_firewall_protected_dir_not_writable"] = "媒体防火墙根目录中受保护的媒体目录不是全局可写的。";
$pgv_lang["media_firewall_invalid_dir"] = "错误：媒体防火墙是从媒体目录以外的目录启动的。";

$pgv_lang["view_fam_nav_details"] = "查看详细信息...";
$pgv_lang["view_fam_nav_notes"] = "查看注释...";
$pgv_lang["view_fam_nav_sources"] = "查看来源......";
$pgv_lang["view_fam_nav_media"] = "查看媒体......";
$pgv_lang["view_fam_nav_album"] = "查看相册...";
$pgv_lang["view_fam_nav_relatives"] = "查看亲戚......";
$pgv_lang["view_fam_nav_tree"] = "查看树...";
$pgv_lang["view_fam_nav_research"] = "查看研究......";
$pgv_lang["view_fam_nav_map"] = "查看地图...";
$pgv_lang["view_fam_nav_spare"] = "查看备用信息......";
$pgv_lang["navigator"] = "导航";
$pgv_lang["fam_navigator"] = "家庭导航员";

$pgv_lang["relationship_great"] = "大";
$pgv_lang["no_other_link_found"] = "找不到两个人之间的其他联系。";
$pgv_lang["greatgrandchild"] = "曾孙子女";
$pgv_lang["greatgrandson"] = "曾孙";
$pgv_lang["greatgranddaughter"] = "曾孙女";
$pgv_lang["aunt"] = "姑妈";
$pgv_lang["uncle"] = "叔叔";
$pgv_lang["firstcousin"] = "第一代堂兄";
$pgv_lang["femalecousin"] = "表妹";
$pgv_lang["malecousin"] = "男性表弟";
$pgv_lang["relationship_to_me"] = "与我的关系";
$pgv_lang["rela_husb"] = "与丈夫的关系";
$pgv_lang["rela_wife"] = "与妻子的关系";
$pgv_lang["next_path"] = "找到下一条路";
$pgv_lang["line_up_generations"] = "同代排列";
$pgv_lang["oldest_top"] = "显示年龄最大的顶部";

//%1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s 是 %3\$s 的 %2\$s 。";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s 是 %3\$s 的 %2\$s 。";

$pgv_lang["mother_in_law"] = "岳母";
$pgv_lang["father_in_law"] = "岳父";
$pgv_lang["brother_in_law"] = "长者的意思是铁则";
$pgv_lang["sister_in_law"] = "嫂子";
$pgv_lang["brothers_wife"] = "嫂子"; //兄弟的妻子
$pgv_lang["son_in_law"] = "女婿";
$pgv_lang["daughter_in_law"] = "媳妇";
$pgv_lang["uncle_in_law"] = "叔叔女婿";
$pgv_lang["aunt_in_law"] = "大娘女婿";
$pgv_lang["cousin_in_law"] = "表哥女婿";
$pgv_lang["m_cousin_in_law"] = "表哥女婿";
$pgv_lang["f_cousin_in_law"] = "表哥女婿";
$pgv_lang["step_son"] = "继子";
$pgv_lang["step_daughter"] = "继女";

//the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
$pgv_lang["bosa_brothers_offspring_2"] = "外甥"; //兄弟的儿子
$pgv_lang["bosa_brothers_offspring_3"] = "侄女"; //兄弟的女儿
$pgv_lang["bosa_brothers_offspring_4"] = "堂孙子"; //兄弟的儿子的儿子
$pgv_lang["bosa_brothers_offspring_5"] = "堂孙女"; //兄弟的儿子的女儿
$pgv_lang["bosa_brothers_offspring_6"] = "堂外孙"; //兄弟的女儿的儿子
$pgv_lang["bosa_brothers_offspring_7"] = "堂外孙女"; //兄弟的女儿的女儿
$pgv_lang["n_x_brothers_son"] = "距 %2\$d 代孙子";
$pgv_lang["n_x_brothers_daughter"] = "距 %2\$d 代孙女";
//the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
$pgv_lang["bosa_sisters_offspring_2"] = "外甥"; //姐姐的儿子
$pgv_lang["bosa_sisters_offspring_3"] = "侄女"; //妹妹的女儿
$pgv_lang["bosa_sisters_offspring_4"] = "表孙子"; //姐姐的儿子的儿子
$pgv_lang["bosa_sisters_offspring_5"] = "表孙女"; //姐姐的儿子的女儿
$pgv_lang["bosa_sisters_offspring_6"] = "表孙子"; //姐姐的女儿的儿子
$pgv_lang["bosa_sisters_offspring_7"] = "表外孙"; //姐姐的女儿的女儿
$pgv_lang["n_x_sisters_son"] = "距 %2\$d 代的侄子";
$pgv_lang["n_x_sisters_daughter"] = "距 %2\$d 代的侄女";
$pgv_lang["n_x_grandson_from_son"] = "%3\$d 代的孙子";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d 代的孙女";
$pgv_lang["n_x_grandson_from_daughter"] = "%3\$d 代的孙子";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d 代的孙女";

//the sosa_uncle name is used for uncles - the names below can be extended to any number
$pgv_lang["sosa_uncle_2"] = "叔叔"; //父亲的兄弟
$pgv_lang["sosa_uncle_3"] = "舅舅"; //舅
$pgv_lang["sosa_uncle_4"] = "堂爷爷"; //父亲的父亲的兄弟
$pgv_lang["sosa_uncle_5"] = "舅姥"; //父亲的母亲的兄弟
$pgv_lang["sosa_uncle_6"] = "外爷爷"; //母亲的父亲的兄弟
$pgv_lang["sosa_uncle_7"] = "外舅姥"; //母亲的母亲的兄弟
$pgv_lang["n_x_paternal_uncle"] = "距 %2\$d 代的叔叔";
$pgv_lang["n_x_maternal_uncle"] = "距 %2\$d 代的叔叔";
$pgv_lang["sosa_aunt_2"] = "姑妈"; //父亲的妹妹
$pgv_lang["sosa_aunt_3"] = "姑妈"; //姨
$pgv_lang["sosa_aunt_4"] = "姑奶"; //父亲的父亲的妹妹
$pgv_lang["sosa_aunt_5"] = "姑奶"; //父亲的母亲的妹妹
$pgv_lang["sosa_aunt_6"] = "姑奶"; //母亲的父亲的妹妹
$pgv_lang["sosa_aunt_7"] = "姑奶"; //母亲的母亲的妹妹
$pgv_lang["n_x_paternal_aunt"] = "距 %2\$d 代的姑奶";
$pgv_lang["n_x_maternal_aunt"] = "距 %2\$d 代的姑奶";

//the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
//aunts and uncles
$pgv_lang["sosa_uncle_bm_2"] = "叔叔"; //父亲的兄弟
$pgv_lang["sosa_uncle_bm_3"] = "叔叔"; //舅
$pgv_lang["sosa_uncle_bm_4"] = "叔叔"; //父亲的父亲的兄弟
$pgv_lang["sosa_uncle_bm_5"] = "叔叔"; //父亲的母亲的兄弟
$pgv_lang["sosa_uncle_bm_6"] = "叔叔"; //母亲的父亲的兄弟
$pgv_lang["sosa_uncle_bm_7"] = "叔叔"; //母亲的母亲的兄弟
//for the general case of uncles of the nth degree use the text below
$pgv_lang["n_x_paternal_uncle_bm"] = "距 %2\$d 代的叔叔";
$pgv_lang["n_x_maternal_uncle_bm"] = "距 %2\$d 代的叔叔";

//the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
//of generations just by adding more translations.
//to allow fo language variations we specify different relationships for paternal and maternal
//aunts and aunts
//1st generation
$pgv_lang["sosa_aunt_bm_2"] = "姑妈"; //父亲的妹妹
$pgv_lang["sosa_aunt_bm_3"] = "姑妈"; //姨
//2nd generation
$pgv_lang["sosa_aunt_bm_4"] = "阿姨"; //父亲的父亲的妹妹
$pgv_lang["sosa_aunt_bm_5"] = "阿姨"; //父亲的母亲的妹妹
$pgv_lang["sosa_aunt_bm_6"] = "阿姨"; //母亲的父亲的妹妹
$pgv_lang["sosa_aunt_bm_7"] = "阿姨"; //母亲的母亲的妹妹
//for the general case of aunts of the nth degree use the text below
//in this text %1\$d is replaced with the number of generations
//             %2\$d is replaced with the number of generations - 1
//             %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"] = "距 %2\$d 的阿姨";
$pgv_lang["n_x_maternal_aunt_bm"] = "距 %2\$d 代代 的阿姨";

//if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"] = "第一代堂兄";
$pgv_lang["male_cousin_2"] = "第二个表弟";
$pgv_lang["male_cousin_3"] = "第三代堂兄";
$pgv_lang["male_cousin_4"] = "第四代堂兄";
$pgv_lang["male_cousin_5"] = "第五堂兄";
$pgv_lang["male_cousin_6"] = "第六代堂兄";
$pgv_lang["male_cousin_7"] = "第七堂兄";
$pgv_lang["male_cousin_8"] = "第八堂兄";
$pgv_lang["male_cousin_9"] = "第九表弟";
$pgv_lang["male_cousin_10"] = "第十个堂兄";
$pgv_lang["male_cousin_11"] = "第十一堂兄";
$pgv_lang["male_cousin_12"] = "第十二表弟";
$pgv_lang["male_cousin_13"] = "第十三表弟";
$pgv_lang["male_cousin_14"] = "第十四个堂兄";
$pgv_lang["male_cousin_15"] = "第十五表弟";
$pgv_lang["male_cousin_16"] = "第十六个堂兄";
$pgv_lang["male_cousin_17"] = "第十七表弟";
$pgv_lang["male_cousin_18"] = "第十八表弟";
$pgv_lang["male_cousin_19"] = "第十九表弟";
$pgv_lang["male_cousin_20"] = "第二十个堂兄";
$pgv_lang["male_cousin_n"] = "%d x cousin";
$pgv_lang["female_cousin_1"] = "第一代堂兄";
$pgv_lang["female_cousin_2"] = "第二个表弟";
$pgv_lang["female_cousin_3"] = "第三代堂兄";
$pgv_lang["female_cousin_4"] = "第四代堂兄";
$pgv_lang["female_cousin_5"] = "第五堂兄";
$pgv_lang["female_cousin_6"] = "第六代堂兄";
$pgv_lang["female_cousin_7"] = "第七堂兄";
$pgv_lang["female_cousin_8"] = "第八堂兄";
$pgv_lang["female_cousin_9"] = "第九表弟";
$pgv_lang["female_cousin_10"] = "第十个堂兄";
$pgv_lang["female_cousin_11"] = "第十一堂兄";
$pgv_lang["female_cousin_12"] = "第十二表弟";
$pgv_lang["female_cousin_13"] = "第十三表弟";
$pgv_lang["female_cousin_14"] = "第十四个堂兄";
$pgv_lang["female_cousin_15"] = "第十五表弟";
$pgv_lang["female_cousin_16"] = "第十六个堂兄";
$pgv_lang["female_cousin_17"] = "第十七表弟";
$pgv_lang["female_cousin_18"] = "第十八表弟";
$pgv_lang["female_cousin_19"] = "第十九表弟";
$pgv_lang["female_cousin_20"] = "第二十个堂兄";
$pgv_lang["female_cousin_n"] = "%d x cousin";

//Only referenced from english specific functions
$pgv_lang["removed_ascending_1"] = "一旦被提升";
$pgv_lang["removed_ascending_2"] = "两次上升";
$pgv_lang["removed_ascending_3"] = "三次取消提升";
$pgv_lang["removed_ascending_4"] = "四次取消提升";
$pgv_lang["removed_ascending_5"] = "五次取消提升";
$pgv_lang["removed_ascending_6"] = "六次上升";
$pgv_lang["removed_ascending_7"] = "七次取消提升";
$pgv_lang["removed_ascending_8"] = "八次取消提升";
$pgv_lang["removed_ascending_9"] = "九次撤销";
$pgv_lang["removed_ascending_10"] = "十次撤销";
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
$pgv_lang["removed_descending_1"] = "一旦被删除";
$pgv_lang["removed_descending_2"] = "两次下降";
$pgv_lang["removed_descending_3"] = "三次下降";
$pgv_lang["removed_descending_4"] = "四次下降";
$pgv_lang["removed_descending_5"] = "五次下降";
$pgv_lang["removed_descending_6"] = "六次下降";
$pgv_lang["removed_descending_7"] = "七次下降";
$pgv_lang["removed_descending_8"] = "八次下降";
$pgv_lang["removed_descending_9"] = "九次删除";
$pgv_lang["removed_descending_10"] = "十次去除下降";
$pgv_lang["removed_descending_11"] = "十一次去掉了";
$pgv_lang["removed_descending_12"] = "十二次下降";
$pgv_lang["removed_descending_13"] = "十三次删除了下降";
$pgv_lang["removed_descending_14"] = "十四次去掉了";
$pgv_lang["removed_descending_15"] = "十五次下降";
$pgv_lang["removed_descending_16"] = "十六次下降";
$pgv_lang["removed_descending_17"] = "十七次去掉了";
$pgv_lang["removed_descending_18"] = "十八次下降";
$pgv_lang["removed_descending_19"] = "十九次去掉了";
$pgv_lang["removed_descending_20"] = "二十次被删除";

$pgv_lang["delete_shared_note"] = "删除此共享注释";
$pgv_lang["confirm_delete_shared_note"] = "您确定要删除此共享记录吗？";
$pgv_lang["user_cannot_edit"] = "此用户名无法编辑此GEDCOM。";
$pgv_lang["privacy_not_granted"] = "你无法进入";
$pgv_lang["privacy_prevented_editing"] = "隐私设置会阻止您编辑此记录。";
$pgv_lang["ged_noshow"] = "网站管理员已禁用此页面。";

$pgv_lang["year_yahrzeit"] = "#yahrzeit_date#，#yahrzeit#yahrzeit of#event_date#";
$pgv_lang["mail02_line04a"] = "当这位潜在用户确认了他的请求时，您将收到电子邮件通知。此后，用户将无需您的任何操作即可登录。";
$pgv_lang["pls_note06a"] = "我们现在会向地址<b>#user_email#</b>发送一封确认电子邮件。您必须按照确认电子邮件中的说明验证您的帐户请求。如果您在七天内未确认您的帐户申请，那么您的申请将被自动拒绝。您将需要再次申请。<br /><br />在您按照确认电子邮件中的说明操作后，您可以登录。要登录此站点，您需要知道您的用户名和密码。<br /><br />";

$pgv_lang["mail03_line03a"] = "您不必采取任何行动;用户现在可以登录。";
$pgv_lang["mail04_line05"] = "登录后，选择«#pgv_lang[mygedview]#»菜单下的«#pgv_lang[editowndata]#»链接，并填写密码字段以更改密码。";

$pgv_lang["welcome_text_auth_mode_1"] = "<span class='center'><b>欢迎来到这个家谱网站</b></span><br />每个拥有用户帐户的访问者都可以访问此网站。<br /> <br如果您有用户帐户，可以在此页面登录。如果您没有用户帐户，可以点击下面的相应链接申请。<br /><br />验证信息后，网站管理员将激活您的帐户。当您的申请获得批淮后，您将收到一封电子邮件。";
$pgv_lang["welcome_text_auth_mode_2"] = "<span class='center'><b>欢迎来到这个家谱网站</b></span><br />只允许<u>授权的</u>用户访问本网站。<br/><br />如果你有一个用户帐户，你可以在这个页面上登录。如果你没有用户帐户，你可以点击下面的相应链接申请一个。<br /><br />之后验证您的信息后，管理员将批淮或拒绝您的帐户申请。当您的申请获得批淮后，您会收到一封电子邮件。";
$pgv_lang["acceptable_use"] = "<div class=\"largeError\">注意：</div><div class=\"error\">填写并提交此表单，即表示您同意：<ul> <li>你需要保护在我们网站上列出人员的生活隐私;</li><li>请在下面的备注中，说明家族中谁与您有关系，或向我们提供网站上尚未拥有的族人信息。</li></ul></div>";


$pgv_lang["style"] = "演示风格";
$pgv_lang["style3"] = "标签云";
$pgv_lang["sort_style"] = "排序风格";
$pgv_lang["by_anniv"] = "周年纪念日";
$pgv_lang["by_alpha"] = "按字母顺序";
$pgv_lang["cal_download"] = "允许日历事件下载？";
$pgv_lang["no_events_living"] = "对于下一个#pgv_lang[global_num1]#天，没有为在世的人提供任何事件。";
$pgv_lang["no_events_living1"] = "明天不存在在世人员的事件。";
$pgv_lang["no_events_all"] = "下一个#pgv_lang[global_num1]#天不存在任何事件。";
$pgv_lang["no_events_all1"] = "明天不存在任何事件。";
$pgv_lang["no_events_privacy"] = "下一个#pgv_lang[global_num1]#天存在事件，但隐私限制会阻止您查看它们。";
$pgv_lang["no_events_privacy1"] = "明天会有事件，但隐私限制会阻止你看到它们。";
$pgv_lang["more_events_privacy"] = "<br />下一个#pgv_lang[global_num1]#天存在更多事件，但隐私限制会阻止您查看它们。";
$pgv_lang["more_events_privacy1"] = "<br />明天会有更多的事件，但隐私限制会阻止你看到它们。";
$pgv_lang["none_today_living"] = "今天没有为在世的人提供的事件。";
$pgv_lang["none_today_all"] = "今天没有任何事件。";
$pgv_lang["none_today_privacy"] = "今天存在的事件，但隐私限制阻止你看到它们。";
$pgv_lang["more_today_privacy"] = "<br />今天有更多的事件，但隐私限制阻止你看到它们。";
$pgv_lang["anon_user"] = "1个匿名登录用户";
$pgv_lang["anon_users"] = "#pgv_lang[global_num1]#匿名登录用户";
$pgv_lang["login_user"] = "1个登录用户";
$pgv_lang["login_users"] = "#pgv_lang[global_num1]#个登录用户";
$pgv_lang["no_login_users"] = "没有登录，也没有匿名用户";
$pgv_lang["message_failed"] = "无法发送消息";
$pgv_lang["message_error"] = "PHPMailer错误：";
$pgv_lang["message_invalid_from"] = "发件人地址无效：&lt;#mail#&gt;";
$pgv_lang["message_invalid_to"] = "收件人地址无效：&lt;#mail#&gt;";
$pgv_lang["message_instructions"] = "<b>请注意：</b>生活个人的私人信息只会发给亲属和亲密朋友。在您收到任何私人数据之前，您将被要求验证您的关系。有时死者的信息也可能如果是这种情况，那是因为没有足够的信息来确定这个人是否还在世，我们可能没有关于这个人的更多信息。<br /><br />之前提出问题，请通过查看日期，地点和近亲来验证您是否询问了正确的人。如果您要提交对家谱数据的更改，请包括您获取数据的来源。<br /><br />";
$pgv_lang["sending_to"] = "此消息将发送至#TO_USER#";
$pgv_lang["preferred_lang"] = "请使用\"#USERLANG#\"和此用户收发消息";
$pgv_lang["gedcom_created_using"] = "这个GEDCOM是使用<b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>创建的";
$pgv_lang["gedcom_created_on"] = "这个GEDCOM是在<b>#CREATED_DATE#</b>\"创建的";
$pgv_lang["gedcom_created_on2"] = "在<b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"] = "GEDCOM统计";
$pgv_lang["upcoming_events_descr"] = "即将发生的事件\"块显示将在不久的将来发生的事件周年纪念日。您可以配置显示的详细信息量，管理员可以配置此块看起来未来的距离。";
$pgv_lang["todays_events_descr"] = "在这一天，在您的历史中...块显示今天的事件纪念日。您可以配置显示的详细信息量。";
$pgv_lang["todo_block"] = "待办\"任务";
$pgv_lang["todo_descr"] = "待办事项块列出了数据库中所有未完成的_TODO事实。";
$pgv_lang["todo_show_other"] = "显示其他用户的任务";
$pgv_lang["todo_show_unassigned"] = "显示未分配的任务";
$pgv_lang["todo_show_future"] = "展示未来的任务";
$pgv_lang["todo_nothing"] = "没有\"待办事项\"任务。";
$pgv_lang["yahrzeit_block"] = "即将到来的Yahrzeiten";
$pgv_lang["yahrzeit_descr"] = "即将到来的Yahrzeiten区块显示将在不久的将来发生的去世日期。您可以配置显示的时间段，并且管理员可以配置此区块看起来未来的距离。";
$pgv_lang["logged_in_users_block"] = "登录用户";
$pgv_lang["logged_in_users_descr"] = "登录用户\"块显示当前登录的用户列表。";
$pgv_lang["user_messages_descr"] = "用户消息块显示已发送给事件用户的消息列表。";
$pgv_lang["user_favorites_descr"] = "用户收藏夹块向用户显示数据库中他最喜欢的人的列表，以便他可以轻松链接到他们。";
$pgv_lang["welcome_descr"] = "用户欢迎程序块向用户显示当前日期和时间，快速链接以修改其帐户或转到他自己的世系图表，以及用于自定义其MyGedView门户页面的链接。";
$pgv_lang["random_media_descr"] = "随机媒体块从当前事件的数据库中随机选择一张照片或其他媒体条目，并将其显示给用户。<br /><br />管理员确定此块是否可以显示与人员或事件相关的媒体条目。" ;
$pgv_lang["random_media_persons_or_all"] = "只展示人，事件或所有人？";
$pgv_lang["gedcom_descr"] = "GEDCOM欢迎块与用户欢迎块的工作方式相同。它欢迎访问该站点并显示当前事件数据库的标题以及当前日期和时间。";
$pgv_lang["gedcom_favorites_descr"] = "GEDCOM收藏夹块使管理员能够从数据库中指定个人，以便所有人都可以轻松访问他们的信息。这是一种突出显示您家族历史中重要人物的方式。";
$pgv_lang["gedcom_stats_descr"] = "GEDCOM统计塊向訪問者顯示了一些關於數據庫的基本信息，例如它何時被創建以及其中有多少人。<br /><br />它還有一個最常用的姓氏列表。你可以將此塊配置為不顯示頻繁姓氏列表，您還可以配置GEDCOM以刪除或添加此列表中的名稱。您可以在GEDCOM配置中設置此​​列表的發生閾值。";
$pgv_lang["portal_config_instructions"] = "~#pgv_lang[customize_page]#~<br />~#pgv_lang[customize_gedcom_page]#~<br /><br />您可以通过按照您希望的方式在页面上放置块来自定义页面。<br  /><br />该页面分为<b>主要</b>和<b>对</b>部分。";
$pgv_lang["login_descr"] = "Login块接受用户登录的用户名和密码。";
$pgv_lang["theme_select_descr"] = "即使禁用了更改主题功能，主题选择块也会显示主题选择器。";
$pgv_lang["block_top10_title"] = "十大姓氏";
$pgv_lang["block_top10"] = "十大姓氏";
$pgv_lang["block_top10_descr"] = "此块显示数据库中10个最常出现的姓氏的表格。此块中显示的实际姓氏数量是可配置的。您可以配置GEDCOM从该列表中删除名称。";
$pgv_lang["block_cookiepolicy"] = "Cookie政策";
$pgv_lang["block_cookiepolicy_title"] = "Cookie政策";
$pgv_lang["block_cookiepolicy_descr"] = "此块显示了欧盟Cookie法律要求的本网站的cookie政策。";
$pgv_lang["block_cookiepolicy_body"] = "<span class=\"warning\">欧盟Cookie法要求此通知。</span><br />本网站尽量不使用cookies，仅在技术上需要时才这样做。没有个人信息，不是甚至您的用户名或密码也存储在由本网站创建的cookie中。<br /><br />由于技术原因超出本网站的控制范围，当您结束本网站的会话时，这些cookie不会被删除。但是，它们是浏览器终止时立即删除。";
$pgv_lang["block_cookiepolicy_body_extlink"] = "<span class=\"warning\">欧盟Cookie法要求此通知。</span><br />本网站尽量不使用cookies，仅在技术上需要时才这样做。没有个人信息，不是甚至您的用户名或密码也存储在本网站创建的cookie中。有关本网站cookie政策的更多详情，请关注此链接<a href=\"<link>\" target=\"_blank\" title=\"特定于网站的cookie政策\"></a>。<br /><br />由于技术原因超出了本网站的控制范围，当您终止与本网站的会话时，这些cookie不会被删除。但是，当您的浏览器终止时，它们会立即被删除。 ";
$pgv_lang["block_cookiepolicy_link"] = "Cookie政策页面链接";
$pgv_lang["block_givn_top10_title"] = "十大名字";
$pgv_lang["block_givn_top10"] = "十大名字";
$pgv_lang["block_givn_top10_descr"] = "此块显示数据库中10个最常出现的给定名称的表。此块中显示的给定名称的实际数量是可配置的。";

$pgv_lang["gedcom_news_descr"] = "GEDCOM新闻块显示访客新闻稿或管理员用户发布的文章。<br /><br />新闻块是宣布重要数据库更新，家庭团聚或孩子出生的好地方。";
$pgv_lang["gedcom_news_limit"] = "限制显示：";
$pgv_lang["gedcom_news_limit_nolimit"] = "没有限制";
$pgv_lang["gedcom_news_limit_date"] = "条目年龄";
$pgv_lang["gedcom_news_flag"] = "限制：";
$pgv_lang["user_news_descr"] = "用户日志块可以让用户在线保存笔记或日记。";
$pgv_lang["no_journal"] = "你还没有创建任何期刊条目。";
$pgv_lang["confirm_journal_delete"] = "你确定要删除这个日记条目吗？";
$pgv_lang["confirm_news_delete"] = "你确定要删除这个新闻条目吗？";
$pgv_lang["add_news"] = "添加新闻文章";
$pgv_lang["no_news"] = "没有提交新闻文章。";
$pgv_lang["enter_title"] = "请输入标题。";
$pgv_lang["enter_text"] = "请输入此新闻或日记条目的一些文字。";
$pgv_lang["news_saved"] = "新闻/期刊录入成功保存。";
$pgv_lang["article_text"] = "输入文字：";
$pgv_lang["main_section"] = "主要部分块";
$pgv_lang["right_section"] = "右侧区块";
$pgv_lang["available_blocks"] = "可用块";
$pgv_lang["move_up"] = "提升";
$pgv_lang["move_down"] = "向下移动";
$pgv_lang["move_right"] = "向右移";
$pgv_lang["move_left"] = "向左移动";
$pgv_lang["broadcast_all"] = "向所有用户广播";
$pgv_lang["hit_count"] = "命中数：";
$pgv_lang["default_news_text"] = "本网站上的家谱信息由<a href=\"http://www.phpgedview.net/\" target=\"_blank\"> PhpGedView </a>提供支持。此页面提供了介绍和概述这个家谱。<br /><br />要开始处理数据，请从图表菜单中选择一个图表，转到个人列表，或搜索名称或地点。<br /><br />如果您在使用本网站时遇到问题，可以单击\"帮助\"图标，为您提供有关如何使用当前正在查看的页面的信息。<br /><br />感谢您访问本网站。";
$pgv_lang["reset_default_blocks"] = "重置为默认块";
$pgv_lang["recent_changes_descr"] = "最近更改\"块将列出上个月对数据库所做的所有更改。此块可以帮助您及时了解所做的更改。使用在中定义的CHAN标记自动检测更改。 GEDCOM标淮。";
$pgv_lang["recent_changes_none"] = "<b>最后一个#pgv_lang[global_num1]#天没有变化。</b><br />";
$pgv_lang["recent_changes_some"] = "<b>在最后一次#pgv_lang[global_num1]#天</b><br />\"中所做的更改";
$pgv_lang["show_empty_block"] = "这个块在空的时候应该被隐藏吗？";
$pgv_lang["hide_block_warn"] = "如果你隐藏一个空块，你将无法改变它的配置，直到它变得可见，不再是空的。";
$pgv_lang["use_blocks_for_default"] = "将这些块用作所有用户的默认块配置？";
$pgv_lang["block_not_configure"] = 	"这个快是不能配置的";


//-- hourglass chart
$pgv_lang["hourglass_chart"] = "沙漏图";


//-- Ahnentafel report
$pgv_lang["ahnentafel_report"] = "谱系报告";
$pgv_lang["ahnentafel_christened_m"] = "被命名为";
$pgv_lang["ahnentafel_christened_f"] = "被命名为";
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
$pgv_lang["ahnentafel_no_details"] = "但细节不明";
$pgv_lang["ahnentafel_on"] = "";

//-- Changes report
$pgv_lang["changes_report"] = "变更报告";
$pgv_lang["changes_pending_tot"] = "未决变更总数：";
$pgv_lang["changes_accepted_tot"] = "接受的总变化：";

//-- Descendancy report
$pgv_lang["descend_report"] = "后裔报告";
$pgv_lang["son_of"] = "的儿子";
$pgv_lang["daughter_of"] = "的女儿";
$pgv_lang["child_of"] = "孩子的";
$pgv_lang["children_of"] = "孩子们";
$pgv_lang["descendancy_pronoun_m"] = "他";
$pgv_lang["descendancy_pronoun_f"] = "她";

$pgv_lang["relatives_report_ext"] = "扩大亲属报告";
$pgv_lang["on"] = "上";
$pgv_lang["in"] = "在";
$pgv_lang["individual_with_rela_report"] = "近亲报告";
$pgv_lang["enter_pid"] = "输入个人ID";
$pgv_lang["generated_by"] = "生成";
$pgv_lang["birth_report"] = "出生日期和地点报告";
$pgv_lang["birthplace"] = "出生地包含";
$pgv_lang["birthdate1"] = "出生日期范围开始";
$pgv_lang["birthdate2"] = "出生日期范围结束";
$pgv_lang["death_report"] = "去世日期和地点报告";
$pgv_lang["deathplace"] = "去世之地包含";
$pgv_lang["deathdate1"] = "去世日期范围开始";
$pgv_lang["deathdate2"] = "去世日期范围结束";
$pgv_lang["marr_report"] = "结婚日期和地点报告";
$pgv_lang["marrplace"] = "婚姻场所包含";
$pgv_lang["marrdate1"] = "结婚日期范围开始";
$pgv_lang["marrdate2"] = "结婚日期范围结束";
$pgv_lang["sort_by"] = "排序方式";
$pgv_lang["cemetery_report"] = 	 "公墓报告";
$pgv_lang["burialplace"] = "埋葬地方包含";
$pgv_lang["fact_sources_report"] = "事实来源";
$pgv_lang["missing_facts_report"] = "失踪亲属的事实";
$pgv_lang["sources_to_events"] = "事件的来源";

$pgv_lang["cleanup"] = "清理";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["show_stats_charts"] = "显示统计图表";
$pgv_lang["decade_birth"] = "十年出生";
$pgv_lang["decade_death"] = "十年去世";
$pgv_lang["decade_marriage"] = "十年结婚";
$pgv_lang["avg_age"] = "平均年龄";

//-- Merge Records
$pgv_lang["merge_same"] = "记录的类型不同。无法合并不同类型的记录。";
$pgv_lang["merge_step1"] = "合并第1步，共3步";
$pgv_lang["merge_step2"] = "合并第2步，共3步";
$pgv_lang["merge_step3"] = "合并第3步，共3步";
$pgv_lang["select_gedcom_records"] = "选择两个GEDCOM记录进行合并。记录的类型必须相同。";
$pgv_lang["merge_to"] = "合并到ID：";
$pgv_lang["merge_from"] = "从ID合并：";
$pgv_lang["merge_facts_same"] = "以下事实在两个记录中完全相同，并将自动合并。";
$pgv_lang["no_matches_found"] = "找不到匹配的事实";
$pgv_lang["unmatching_facts"] = "以下事实不匹配。选择您想要保留的信息。";
$pgv_lang["record"] = "记录";
$pgv_lang["adding"] = "添加";
$pgv_lang["updating_linked"] = "更新链接记录";
$pgv_lang["merge_more"] = 	 "合并更多记录.";
$pgv_lang["same_ids"] = "您输入了相同的ID。您无法合并相同的记录。";
$pgv_lang["updated_favorites"] = "收藏夹已更新。";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["gen_ancestry_chart"] = "#PEDIGREE_GENERATIONS#一代祖先图表";
$pgv_lang["chart_booklet"] = "分册";
$pgv_lang["show_cousins"] = "表兄弟";
//3rd generation
//4th generation

//for the general case of ancestors of the nth generation use the text below
$pgv_lang["sosa_paternal_male_n_generations"] = "%3\$d 世祖的祖父";
$pgv_lang["sosa_paternal_female_n_generations"] = "%3\$d 世祖的祖母";
$pgv_lang["sosa_maternal_male_n_generations"] = "%3\$d 世祖的外祖父";
$pgv_lang["sosa_maternal_female_n_generations"] = "%3\$d 世祖的外祖母";

//-- FAN CHART
$pgv_lang["compact_chart"] = "紧凑图";
$pgv_lang["fan_chart"] = "扇形图";
$pgv_lang["gen_fan_chart"] = "#PEDIGREE_GENERATIONS#生成圆图";
$pgv_lang["fan_width"] = "宽度";
$pgv_lang["gd_library"] = "PHP服务器配置错误：使用图像功能需要GD 2.x库。";
$pgv_lang["gd_freetype"] = "PHP服务器配置错误：使用TrueType字体需要FreeType库。";
$pgv_lang["gd_helplink"] = "http://www.php.net/gd";
$pgv_lang["fontfile_error"] = "在PHP服务器上找不到字体文件";
$pgv_lang["fanchart_IE"] = "此Fanchart图像无法直接由您的浏览器打印。使用右键单击然后保存并打印。";

//-- RSS Feed
$pgv_lang["rss_descr"] = 	 "来自 #GEDCOM_TITLE# 网站的新闻和链接";
$pgv_lang["rss_logo_descr"] = "由网站创建的Feed";
$pgv_lang["rss_feeds"] = "RSS订阅";
$pgv_lang["no_feed_title"] = "饲料不可用";
$pgv_lang["no_feed"] = "这个网站没有可用的RSS源";
$pgv_lang["feed_login"] = "如果您在此网站站点上有一个帐户，则可以使用基本HTTP身份验证<a href=\"#AUTH_URL#\">登录</a>以查看私人信息。";
$pgv_lang["authenticated_feed"] = "认证饲料";

//-- ASSOciates RELAtionship
//After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = 	 "服务员";
$pgv_lang["attending"] = "参加";
$pgv_lang["best_man"] = "最好的男人";
$pgv_lang["bridesmaid"] = "伴娘";
$pgv_lang["buyer"] = "买方";
$pgv_lang["circumciser"] = "Circumciser";
$pgv_lang["civil_registrar"] = "民事登记员";
$pgv_lang["employee"] = "雇员";
$pgv_lang["employer"] = "雇主";
$pgv_lang["foster_child"] = 	 "寄养孩子";
$pgv_lang["foster_father"] = "养父";
$pgv_lang["foster_mother"] = "养母";
$pgv_lang["friend"] = "朋友";
$pgv_lang["godfather"] = "教父";
$pgv_lang["godmother"] = "教母";
$pgv_lang["godparent"] = "教父";
$pgv_lang["godson"] = "教子";
$pgv_lang["goddaughter"] = "干女儿";
$pgv_lang["godchild"] = "教子";
$pgv_lang["guardian"] = "监护人";
$pgv_lang["informant"] = "线人";
$pgv_lang["lodger"] = "房客";
$pgv_lang["nanny"] = "保姆";
$pgv_lang["nurse"] = "护士";
$pgv_lang["owner"] = "所有者";
$pgv_lang["priest"] = "牧师";
$pgv_lang["rabbi"] = "拉比";
$pgv_lang["registry_officer"] = "登记主任";
$pgv_lang["seller"] = "卖家";
$pgv_lang["servant"] = "仆人";
$pgv_lang["slave"] = "奴隶";
$pgv_lang["twin"] = "双胞胎";
$pgv_lang["twin_brother"] = "双胞胎兄弟";
$pgv_lang["twin_sister"] = "孪生姐妹";
$pgv_lang["ward"] = "保卫";
$pgv_lang["witness"] = "见证";

//-- statistics utility
$pgv_lang["stat_create"] = "创建自己的图表";
$pgv_lang["statutci"] = "无法创建索引";
$pgv_lang["statnnames"] = "总人数";
$pgv_lang["statnfam"] = "家庭总数";
$pgv_lang["statnmale"] = "男性总数";
$pgv_lang["statnfemale"] = "女性总数";
$pgv_lang["with_sources"] = "有源";
$pgv_lang["without_sources"] = "没有来源";
$pgv_lang["stat_sindi"] = "有资源的人";
$pgv_lang["stat_sfam"] = "有家庭的家庭";
$pgv_lang["statvars"] = "填写图表的以下参数";
$pgv_lang["statlxa"] = "选择图表类型：";
$pgv_lang["statlya"] = "结果：";
$pgv_lang["statlza"] = "分类";
$pgv_lang["map_type"] = "地图类型";
$pgv_lang["stat_1_map"] = 	 "个人分配";
$pgv_lang["stat_2_map"] = "按国家划分";
$pgv_lang["stat_3_map"] = "按国家去世";
$pgv_lang["stat_4_map"] = "按国家结婚";
$pgv_lang["stat_5_birth"] = 	 "按世纪统计出生";
$pgv_lang["stat_6_death"] = 	 "按世纪统计去世";
$pgv_lang["stat_7_marr"] = "按世纪统计";
$pgv_lang["stat_7_div"] = "按世纪统计";
$pgv_lang["stat_8_fam"] = "有家庭的家庭";
$pgv_lang["stat_9_indi"] = "有资源的人";
$pgv_lang["stat_10_none"] = "没有";
$pgv_lang["stat_11_mb"] = 	 "出生月份";
$pgv_lang["stat_12_md"] = "去世月份";
$pgv_lang["stat_13_mm"] = "结婚月份";
$pgv_lang["stat_14_mb1"] = "关系中第一个孩子的出生月份";
$pgv_lang["stat_15_mm1"] = 	 "初婚月份";
$pgv_lang["stat_16_mmb"] = "婚姻与第一个孩子之间的月份";
$pgv_lang["stat_17_arb"] = "出生年龄";
$pgv_lang["stat_18_ard"] = "去世年龄";
$pgv_lang["stat_18_aard"] = "去世平均年龄";
$pgv_lang["stat_19_arm"] = "结婚年龄";
$pgv_lang["stat_19_aarm"] = "平均结婚年龄";
$pgv_lang["stat_20_arm1"] = "初婚年龄";
$pgv_lang["stat_21_nok"] = "孩子人数";
$pgv_lang["stat_22_fwok"] = "没有孩子的家庭数量";
$pgv_lang["stat_200_none"] = "全部（或空白）";
$pgv_lang["stat_201_num"] = "数字";
$pgv_lang["stat_202_perc"] = "百分比";
$pgv_lang["stat_300_none"] = "整体";
$pgv_lang["stat_301_mf"] = "性别";
$pgv_lang["stat_302_cgp"] = "日期时间";
$pgv_lang["century"] = "世纪";
$pgv_lang["stat_age"] = "年龄";
$pgv_lang["no_date_fam"] = "未知";
$pgv_lang["statar_xgp"] = "时期的范围：";
$pgv_lang["statar_xgl"] = "年龄范围：";
$pgv_lang["statar_xgm"] = "月份的范围：";
$pgv_lang["statar_xga"] = "数字的范围：";
$pgv_lang["statar_zgp"] = "日期范围：";
$pgv_lang["less"] = "少于";
$pgv_lang["over"] = "过度";
$pgv_lang["interval"] = "间隔";
$pgv_lang["aft_marr"] = "婚后数月";
$pgv_lang["bef_marr"] = "结婚前后的几个月";
$pgv_lang["quarters"] = "结婚后的季度";
$pgv_lang["half_year"] = "结婚半年后";
$pgv_lang["one_child"] = "间隔一个孩子";
$pgv_lang["two_children"] = "间隔两个孩子";
$pgv_lang["statreset"] = "重启";
$pgv_lang["statsubmit"] = "显示图表";
$pgv_lang["stat_largest_families"] = 	 "最大的家庭";

$pgv_lang["stat_own_charts"] = "自己的图表";
$pgv_lang["statnliving"] = "在世人数";
$pgv_lang["statndead"] = "已故人数";
$pgv_lang["stat_births"] = "总分娩";
$pgv_lang["stat_marriages"] = "婚姻总数";
$pgv_lang["stat_divorces"] = "离婚总数";
$pgv_lang["stat_deaths"] = "总去世人数";
$pgv_lang["stat_first_birth"] = "最早出生";
$pgv_lang["stat_first_marriage"] = "最早的婚姻";
$pgv_lang["stat_first_divorce"] = "最早离婚";
$pgv_lang["stat_first_death"] = "最早的去世";
$pgv_lang["stat_last_birth"] = "最近出生";
$pgv_lang["stat_last_marriage"] = "最近婚姻";
$pgv_lang["stat_last_divorce"] = "最近离婚";
$pgv_lang["stat_last_death"] = "最近去世";
$pgv_lang["stat_lifespan"] = 	 "寿命";
$pgv_lang["stat_lived_longest"] = "去世时最高年龄";
$pgv_lang["stat_live_longest"] = "年龄最大的人";
$pgv_lang["stat_marr_age"] = "结婚年限";
$pgv_lang["stat_long_marr_age"] = "最长的婚姻";
$pgv_lang["stat_short_marr_age"] = 	 "最短的婚姻";
$pgv_lang["stat_youngest_male"] = "最年轻的男性";
$pgv_lang["stat_youngest_female"] = "最年轻的女性";
$pgv_lang["stat_oldest_male"] = "年龄最大的男性";
$pgv_lang["stat_oldest_female"] = "最年长的女性";
$pgv_lang["stat_childbirth_age"] = "孩子出生时的年龄";
$pgv_lang["stat_youngest_father"] = 	 "最年轻的父亲";
$pgv_lang["stat_youngest_mother"] = "最年轻的母亲";
$pgv_lang["stat_oldest_father"] = "年龄最大的父亲";
$pgv_lang["stat_oldest_mother"] = "年龄最大的母亲";
$pgv_lang["stat_children_in_fam"] = "家庭中的孩子";
$pgv_lang["stat_largest_gfamilies"] = "最大的家庭";
$pgv_lang["stat_age_difference"] = "年龄差异";
$pgv_lang["stat_age_siblings"] = "兄弟姐妹之间的年龄";
$pgv_lang["stat_top_age_siblings"] = "兄弟姐妹之间的最大年龄差";
$pgv_lang["stat_age_mf_spouse"] = "夫妻之间的年龄";
$pgv_lang["stat_age_fm_spouse"] = "妻子和丈夫之间的年龄";
$pgv_lang["stat_names"] = "名字";
$pgv_lang["statnsurnames"] = "姓氏总数";
$pgv_lang["statngivennames"] = "总名称";
$pgv_lang["top_surnames"] = 	 "最常用的姓";
$pgv_lang["top_givennames"] = "最普及的名字";
$pgv_lang["events"] = "事件";
$pgv_lang["stat_records"] = 	 "记录";
$pgv_lang["stat_notes"] = "笔记";
$pgv_lang["stat_first_event"] = "第一个事件";
$pgv_lang["stat_last_event"] = "最新事件";
$pgv_lang["stat_places"] = "邻居";
$pgv_lang["stat_birth_places"] = "出生地";
$pgv_lang["stat_marriage_places"] = 	 "结婚地点";
$pgv_lang["stat_death_places"] = 	 "去世地点";
$pgv_lang["stat_countries"] = "各国的事件";

//-- statisticsplot utility
$pgv_lang["statistiek_list"] = "统计图";
$pgv_lang["stpl"] = "......";
$pgv_lang["stplinfo"] = "绘图信息：";
$pgv_lang["stpltype"] = 	 "类:";
$pgv_lang["stplnoim"] = " 未实现：";
$pgv_lang["stplmf"] = "按性别";
$pgv_lang["stplipot"] = "每个时期";
$pgv_lang["stplnumbers"] = "数字";
$pgv_lang["stplnuch"] = "孩子";
$pgv_lang["stplnumof"] = "计数";
$pgv_lang["stplmarrbirth"] = "结婚与生育第一个孩子的月份";
$pgv_lang["indi_distribution_chart"] = "个人分布图";
$pgv_lang["surname_distribution_chart"] = "姓氏分布图";
$pgv_lang["g_chart_high"] = "最高人口";
$pgv_lang["g_chart_low"] = "人口最少";
$pgv_lang["g_chart_nobody"] = "根本没人";
$pgv_lang["area_chart"] = "地理区域";
$pgv_lang["europe_chart"] = "欧洲";
$pgv_lang["s_america_chart"] = "南美洲";
$pgv_lang["asia_chart"] = "亚洲";
$pgv_lang["middle_east_chart"] = "中东";
$pgv_lang["africa_chart"] = "非洲";
$pgv_lang["world_chart"] = "世界";

//-- alive in year
$pgv_lang["alive_in_year"] = "在世";
$pgv_lang["is_alive_in"] = "在世#YEAR#";
$pgv_lang["alive"] = "在世";
$pgv_lang["dead"] = "去世";
$pgv_lang["maybe"] = "也许 ";
$pgv_lang["both_alive"] = "两个都在世";
$pgv_lang["both_dead"] = "都去世";

//-- Help system
$pgv_lang["definitions"] = 	 "定义";

//-- Index_edit
$pgv_lang["block_desc"] = "块描述";
$pgv_lang["click_here"] = "点击此处继续";
$pgv_lang["click_here_help"] = "~#pgv_lang[click_here]#~<br /><br />點擊此按鈕保存更改。<br /><br />您將返回页#pgv_lang[welcome]#或# pgv_lang[mygedview]#，但您的更改可能不會顯示。您可能需要使用瀏覽器的Page Reload功能正確查看更改。";
$pgv_lang["block_summaries"] = "~#pgv_lang[block_desc]#~<br /><br />以下是您可以在#pgv_lang[welcome]#或#pgv_lang[mygedview]#页面上每个块的简短描述。<br /><table border='1'align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
//Built in index_edit.php
$pgv_lang["block_summary_table"] = 	 "&nbsp;";

//-- Find page
$pgv_lang["total_places"] = "找到的地方";
$pgv_lang["media_contains"] = "媒体包含：";
$pgv_lang["repo_contains"] = "存储库包含：";
$pgv_lang["shared_note_contains"] = 	 "共享Note包含:";
$pgv_lang["source_contains"] = 	 "来源包含:";
$pgv_lang["display_all"] = "全部显示";

//FAQ Page
$pgv_lang["add_faq_header"] = "FAQ标题";
$pgv_lang["add_faq_body"] = "FAQ内容";
$pgv_lang["add_faq_order"] = "FAQ排序";
$pgv_lang["add_faq_visibility"] = "FAQ可见";
$pgv_lang["no_faq_items"] = "FAQ列表是空的。";
$pgv_lang["position_item"] = "序号";
$pgv_lang["faq_list"] = "常见问题清单";
$pgv_lang["confirm_faq_delete"] = "你确定要删除这个FAQ条目吗？";
$pgv_lang["no_id"] = "没有指定常见问题解答ID！";

//Help search
$pgv_lang["hs_title"] = "搜索帮助文字";
$pgv_lang["hs_results"] = "结果发现：";
$pgv_lang["hs_keyword"] = "搜索";
$pgv_lang["hs_searchin"] = "搜索";
$pgv_lang["hs_searchuser"] = "用户帮助";
$pgv_lang["hs_searchmodules"] = "模块帮助";
$pgv_lang["hs_searchconfig"] = "管理员帮助";
$pgv_lang["hs_searchhow"] = "搜索类型";
$pgv_lang["hs_searchall"] = "所有的话";
$pgv_lang["hs_searchany"] = "任何单词";
$pgv_lang["hs_searchsentence"] = "淮确的短语";
$pgv_lang["hs_intruehelp"] = "仅限帮助文字";
$pgv_lang["hs_inallhelp"] = "全文";

//Media import
$pgv_lang["choose"] = "选择：";
$pgv_lang["account_information"] = "帐户信息";

$pgv_lang["TYPE__coat"] = "徽章";

//-- Other media suff
$pgv_lang["no_media"] = "没有找到媒体";
$pgv_lang["media_privacy"] = "隐私限制阻止您查看此条目";
$pgv_lang["relations_heading"] = "图像与：";
$pgv_lang["media_broken"] = "此媒体文件已损坏，无法加水印";
$pgv_lang["unknown_mime"] = "媒體防火牆錯誤：>未知Mimetype<对于文件";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "未知行动：[行动]。";
$pgv_lang["module_error_unknown_type"] = 	 "未知的模块类型。";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "在指定年份显示在世的人。";
$pgv_lang["button_BIRT_Y100"] = "展示过去100年内出生的人。";
$pgv_lang["button_BIRT_YES"] = "展示出生于100多年前的人。";
$pgv_lang["button_DEAT_H"] = "展示只有男性伴侣去世的情侣。";
$pgv_lang["button_DEAT_N"] = "展示在世的人或夫妻双方都在世的夫妻。";
$pgv_lang["button_DEAT_W"] = "展示只有女性伴侣去世的情侣。";
$pgv_lang["button_DEAT_Y"] = "展示已去世的人或夫妻双方都已去世的人。";
$pgv_lang["button_DEAT_Y100"] = "展示过去100年内去世的人。";
$pgv_lang["button_DEAT_YES"] = "展示100多年前去世的人。";
$pgv_lang["button_MARR_DIV"] = "显示离婚夫妇。";
$pgv_lang["button_MARR_U"] = "显示结婚日期不明的夫妻。";
$pgv_lang["button_MARR_Y100"] = "展示在过去100年内结婚的夫妻。";
$pgv_lang["button_MARR_YES"] = "展示100多年前结婚的夫妻。";
$pgv_lang["button_reset"] = "重置为列表默认值。";
$pgv_lang["button_SEX_U"] = "只展示性别未知的人。";
$pgv_lang["button_TREE_L"] = "显示«外出»夫妇或个人。这些人是在世但没有记录在数据库中的孩子。";
$pgv_lang["button_TREE_R"] = "显示«老祖»夫妻或个人。这些人也可能被称为\"族长\"。他们是没有父母记录在数据库中的个人。";
$pgv_lang["sort_column"] = "按此栏排序。";
?>
