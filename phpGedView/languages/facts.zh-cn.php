<?php
/**
 * Chinese (Simplified) texts
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

//-- Define a fact array to map GEDCOM tags with their chinese values
$factarray["ABBR"] = "简称";
$factarray["ADDR"] = "地址";
$factarray["ADR1"] = "地址一";
$factarray["ADR2"] = "地址二";
$factarray["ADOP"] = "收养";
$factarray["AFN"] = "祖先文件编号 (AFN)";
$factarray["AGE"] = "年龄";
$factarray["AGNC"] = "代办处";
$factarray["ALIA"] = "别名";
$factarray["ANCE"] = "祖先";
$factarray["ANCI"] = "祖先兴趣";
$factarray["ANUL"] = "取消";
$factarray["ASSO"] = "同事";
$factarray["AUTH"] = "作者";
$factarray["BAPL"] = "LDS 洗礼";
$factarray["BAPM"] = "洗礼";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "生日";
$factarray["BLES"] = "祝福";
$factarray["BLOB"] = "数码资料";
$factarray["BURI"] = "埋葬";
$factarray["CALN"] = "索书号";
$factarray["CAST"] = "世袭的社会等级/社会状态";
$factarray["CAUS"] = "死因";
$factarray["CEME"]  = "墓地";
$factarray["CENS"] = "人口调查";
$factarray["CHAN"] = "前更改";
$factarray["CHAR"] = "字符集";
$factarray["CHIL"] = "儿女";
$factarray["CHR"] = "洗礼";
$factarray["CHRA"] = "成人洗礼";
$factarray["CITY"] = "城市";
$factarray["CONF"] = "确认书";
$factarray["CONL"] = "LDS 确认书";
$factarray["COPR"] = "版权";
$factarray["CORP"] = "公司";
$factarray["CREM"] = "火葬";
$factarray["CTRY"] = "国家";
$factarray["DATA"] = "资料";
$factarray["DATE"] = "日期";
$factarray["DEAT"] = "去世";
$factarray["DESC"] = "后裔";
$factarray["DESI"] = "后裔利息";
$factarray["DEST"] = "目的地";
$factarray["DIV"] = "离婚";
$factarray["DIVF"] = "离婚被归档";
$factarray["DSCR"] = "说明";
$factarray["EDUC"] = "教育";
$factarray["EMIG"] = "移出";
$factarray["ENDL"] = "LDS 捐赠";
$factarray["ENGA"] = "订婚";
$factarray["EVEN"] = "活动";
$factarray["FAM"] = "家庭";
$factarray["FAMC"] = "家庭里的孩子";
$factarray["FAMF"] = "家庭文件";
$factarray["FAMS"] = "家庭里的配偶";
$factarray["FCOM"] = "第一个圣餐";
$factarray["FILE"] = "外部文件:";
$factarray["FORM"] = "格式:";
$factarray["GIVN"] = "名：";
$factarray["GRAD"] = "毕业典礼";
$factarray["HUSB"]  = "丈夫";
$factarray["IDNO"] = "确认号";
$factarray["IMMI"] = "移民";
$factarray["LEGA"] = "遗产受赠人";
$factarray["MARB"] = "婚姻阻止";
$factarray["MARC"] = "婚姻合同";
$factarray["MARL"] = "结婚证书";
$factarray["MARR"] = "婚姻";
$factarray["MEDI"]= "媒体类型";
$factarray["MARS"] = "婚姻结算";
$factarray["NAME"] = "名字";
$factarray["NATI"] = "国籍";
$factarray["NATU"] = "归化";
$factarray["NCHI"] = "几个孩子";
$factarray["NICK"] = "昵称";
$factarray["NMR"] = "婚姻次数";
$factarray["NOTE"] = "附注";
$factarray["NPFX"] = "字首";
$factarray["NSFX"] = "接尾辞";
$factarray["OBJE"] = "多媒体";
$factarray["OCCU"] = "职业";
$factarray["ORDI"] = "法令";
$factarray["ORDN"] = "整理";
$factarray["PAGE"] = "引证详细资料";
$factarray["PEDI"] = "家谱";
$factarray["PLAC"] = "地方";
$factarray["PHON"] = "电话";
$factarray["POST"] = "邮政编码";
$factarray["PROB"] = "遗嘱的认证";
$factarray["PROP"] = "属性";
$factarray["PUBL"] = "发行";
$factarray["QUAY"] = "资料的可信度";
$factarray["RELA"]= "关系";
$factarray["REPO"] = "程式库";
$factarray["REFN"] = "参考编码";
$factarray["RELI"] = "宗教信仰";
$factarray["RESI"] = "住宅";
$factarray["RESN"] = "限制";
$factarray["RETI"] = "退休";
$factarray["RFN"] = "记录文件编号";
$factarray["RIN"] = "记录身份证编号";
$factarray["ROLE"] = "角色";
$factarray["SEX"] = "性别";
$factarray["SLGC"] = "LDS 儿童海豹捕猎";
$factarray["SLGS"] = "LDS 配偶海豹捕猎";
$factarray["SOUR"] = "来源";
$factarray["SPFX"] = "姓氏称谓";
$factarray["SSN"] = "社会安全号";
$factarray["STAE"] = "State";
$factarray["STAT"] = "状态";
$factarray["SUBM"] = "提交者";
$factarray["SUBN"] = "提交";
$factarray["SURN"] = "姓氏";
$factarray["TEMP"] = "寺庙";
$factarray["TEXT"] = "文本";
$factarray["WIFE"]  = "妻子";
$factarray["TIME"] = "时间";
$factarray["TITL"] = "名称";
$factarray["TYPE"] = "类型";
$factarray["WILL"] = "遗书";
$factarray["BURI:PLAC"] = "火葬地点";
$factarray["MARR:PLAC"] = "结婚地点";
$factarray["DEAT:PLAC"] = "去世地点";
$factarray["BIRT:PLAC"] = "出生地点";
$factarray["FAMC:HUSB:SURN"] = "父亲姓";
$factarray["_EMAIL"] = "电子邮件";
$factarray["EMAIL"] = "电子邮件";
$factarray["_TODO"] = "为完成的项目";
$factarray["_UID"] = "普遍标志";

//These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "医疗";
$factarray["_DEG"] = "程度";
$factarray["_MILT"] = "兵役";
$factarray["_SEPR"] = "分离";
$factarray["_DETS"] = "一个配偶去世";
$factarray["CITN"] = "公民身份";
$factarray["EMAL"]= "电子邮件";

//Other common customized facts
$factarray["_ADPF"] = "由父亲拎养";
$factarray["_ADPM"] = "由母亲拎养";
$factarray["_AKAN"] = "昵称";
$factarray["_AKA"] = "又被名为";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"] = "普通法婚姻";
$factarray["_EYEC"] = "眼睛颜色";
$factarray["_FNRL"] = "葬礼";
$factarray["_HAIR"] = "头发颜色";
$factarray["_HEIG"] = "身高";
$factarray["_INTE"] = "入暮";
$factarray["_MARI"] = "婚姻目的";
$factarray["_MBON"] = "婚姻集资";
$factarray["_MEDC"] = "健康情况";
$factarray["_MILI"] = "军事";
$factarray["_NMR"] = "未婚";
$factarray["_NLIV"] = "已故";
$factarray["_NMAR"] = "从来没有结婚";
$factarray["_PRMN"] = "永久号码";
$factarray["_WEIG"] = "体重";
$factarray["_YART"] = "Yartzeit";
$factarray["_MARNM"] = "婚后名字";
$factarray["COMM"]= "短纪录";
$factarray["_BIRT_CHIL"] = "孩子出生";
$factarray["_MARR_CHIL"] = "孩子结婚";
$factarray["_DEAT_CHIL"] = "孩子去世";
$factarray["_GEDF"] = "家谱文件";

//GEDCOM 5.5.1 related facts
$factarray["FAX"] = "传真";
$factarray["FACT"] = "实况";
$factarray["WWW"] = "网站";
$factarray["MAP"] = "地图";
$factarray["LATI"] = "地球横度";
$factarray["LONG"] = "地球竖度";
$factarray["FONE"] = "发音";
$factarray["ROMN"] = "罗马化";
$factarray["_PRIM"] = "突出显示的图像";
$factarray["_DBID"] = "链接数据库ID";
//These facts are used in specific contexts
$factarray["STAT:DATE"] = "状态变更日期";
$factarray["DATA:DATE"] = "原始来源的进入日期";
$factarray["NAME:_HEB"] = "希伯来名字";
$factarray["PLAC:_HEB"] = "希伯来语";
$factarray["TITL:_HEB"] = "希伯来语中的标题";
$factarray["NAME:ROMN"] = "罗马化名称";
$factarray["PLAC:ROMN"] = "罗马化的地方";
$factarray["TITL:ROMN"] = "罗马化的标题";
$factarray["NAME:FONE"] = "注音名称";
$factarray["PLAC:FONE"] = "拼音地方";
$factarray["TITL:FONE"] = "语音标题";
$factarray["SHARED_NOTE"] = "共享笔记";
//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:WIFE:SURN"] = "母亲的姓氏";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "父亲的出生地";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "母亲的出生地";
$factarray["FAMC:MARR:PLAC"] = "父母婚姻所";
$factarray["FAMC:HUSB:OCCU"] = "父亲的职业";
$factarray[":BIRT:PLAC"] = "出生地";
$factarray["FAMS:MARR:PLAC"] = "婚姻场所";
$factarray["FAMS:MARR:DATE"] = "结婚日";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "配偶的去世之地";
$factarray["FAMC:HUSB:GIVN"] = "父亲的名字";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "配偶的出生地";
$factarray["FAMC:WIFE:GIVN"] = "母亲的名字";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "祖父的祖父的名字";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "外婆的名字";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "外祖父的名字";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "父亲祖母的名字";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "孩子的出生地";
$factarray["FAMS:NOTE"] = "配偶注";
$factarray["FAMS:CENS:DATE"] = "配偶普查日期";
$factarray["FAMS:CENS:PLAC"] = "配偶普查局";
$factarray["FAMS:DIV:DATE"] = "配偶离婚日期";
$factarray["FAMS:DIV:PLAC"] = "配偶离婚地";
$factarray["FAMS:SLGS:DATE"] = "LDS配偶密封日期";
$factarray["FAMS:SLGS:PLAC"] = "LDS Spouse Sealing Place";
$factarray["FAMS:SLGS:TEMP"] = "LDS配偶密封寺";
//These facts are all colon delimited
$factarray["BIRT:DATE"] = "生日";
$factarray["BIRT:SOUR"] = "出生源";
$factarray["DEAT:DATE"] = "去世日期";
$factarray["DEAT:SOUR"] = "去世之源";
$factarray["CHR:PLAC"] = "洗礼之地";
$factarray["CHR:DATE"] = "洗礼日期";
$factarray["CHR:SOUR"] = "洗礼来源";
$factarray["CONF:PLAC"] = "确认地点";
$factarray["CONF:DATE"] = "确认日期";
$factarray["CONF:SOUR"] = "确认来源";
$factarray["BAPM:PLAC"] = "洗礼之地";
$factarray["BAPM:DATE"] = "洗礼日期";
$factarray["BAPM:SOUR"] = "洗礼来源";
$factarray["_BRTM:PLAC"] = "Brit Mila Place";
$factarray["_BRTM:DATE"] = "Brit Mila Date";
$factarray["_BRTM:SOUR"] = "Brit Mila Source";
$factarray["BARM:PLAC"] = "Bar Mitzvah Place";
$factarray["BARM:DATE"] = "Bar Mitzvah Date";
$factarray["BARM:SOUR"] = "Bar Mitzvah Source";
$factarray["BASM:PLAC"] = "Bas Mitzvah Place";
$factarray["BASM:DATE"] = "Bas Mitzvah Date";
$factarray["BASM:SOUR"] = "Bas Mitzvah Source";
$factarray["BURI:DATE"] = "埋葬日期";
$factarray["BURI:SOUR"] = "埋葬源";
$factarray["FCOM:PLAC"] = "第一次圣餐地";
$factarray["FCOM:DATE"] = "第一次圣餐日期";
$factarray["FCOM:SOUR"] = "第一次圣餐来源";
$factarray["MARB:PLAC"] = "婚姻禁令";
$factarray["MARB:DATE"] = "婚姻日期";
$factarray["MARB:SOUR"] = "婚姻禁令来源";
$factarray["MARR:DATE"] = "结婚日";
$factarray["MARR:SOUR"] = "婚姻来源";
$factarray["ENGA:PLAC"] = "订婚场所";
$factarray["ENGA:DATE"] = "承诺日期";
$factarray["ENGA:SOUR"] = "承诺来源";
$factarray["_FA1"] = "事实1";
$factarray["_FA2"] = "事实2";
$factarray["_FA3"] = "事实3";
$factarray["_FA4"] = "事实4";
$factarray["_FA5"] = "事实5";
$factarray["_FA6"] = "事实6";
$factarray["_FA7"] = "事实7";
$factarray["_FA8"] = "事实8";
$factarray["_FA9"] = "事实9";
$factarray["_FA10"] = "事实10";
$factarray["_FA11"] = "事实11";
$factarray["_FA12"] = "事实12";
$factarray["_FA13"] = "事实13";
$factarray["_MREL"] = "与母亲的关系";
$factarray["_FREL"] = "与父亲的关系";
$factarray["_MSTAT"] = "婚姻开始状况";
$factarray["_MEND"] = "婚姻终结状况";
$factarray["_NAMS"] = "同名同姓";
//PAF related facts
$factarray["_NAME"] = "邮寄姓名";
$factarray["URL"] = "网址";
$factarray["_URL"] = "网址";
$factarray["_HEB"] = "希伯来文";
$factarray["_SCBK"] = "剪贴簿";
$factarray["_TYPE"] = "媒体类型";
$factarray["_SSHOW"] = "幻灯片放映";
//Rootsmagic
$factarray["_SUBQ"] = "简洁版本";
$factarray["_BIBL"] = "参考书目";
//Reunion
$factarray["_HOL"] = "大屠杀";
$factarray["_MARNM_SURN"] = "已婚姓氏";
$factarray["_STAT"] = "婚姻状况";
//Aldfaer related facts
$factarray["MARR_CIVIL"] = "民事婚姻";
$factarray["MARR_RELIGIOUS"] = "宗教婚姻";
$factarray["MARR_PARTNERS"] = "注册合伙";
$factarray["MARR_UNKNOWN"] = "婚姻类型未知";
$factarray["_HNM"] = "希伯来名";
//Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "配偶之死";
$factarray["_BURI_SPOU"] = "埋葬配偶";
$factarray["_CREM_SPOU"] = "配偶火化";
$factarray["_CHR_CHIL"] = "洗礼孩子";
$factarray["_BAPM_CHIL"] = "孩子的洗礼";
$factarray["__BRTM_CHIL"] = "孩子的英国米拉";
$factarray["_ADOP_CHIL"] = "收养一个孩子";
$factarray["_MARB_CHIL"] = "孩子的婚姻";
$factarray["_BURI_CHIL"] = "埋葬儿童";
$factarray["_CREM_CHIL"] = "火葬孩子";
$factarray["_BIRT_GCHI"] = "孙子的诞生";
$factarray["_CHR_GCHI"] = "孙子的洗礼";
$factarray["_BAPM_GCHI"] = "孙子的洗礼";
$factarray["__BRTM_GCHI"] = "孙子的英国米拉";
$factarray["_ADOP_GCHI"] = "收养孙子";
$factarray["_MARR_GCHI"] = "孙子的婚姻";
$factarray["_MARB_GCHI"] = "孙子的婚姻";
$factarray["_DEAT_GCHI"] = "孙子之死";
$factarray["_BURI_GCHI"] = "埋葬孙子";
$factarray["_CREM_GCHI"] = "孙子的火葬";
$factarray["_BIRT_GGCH"] = "曾孙的诞生";
$factarray["_CHR_GGCH"] = "曾孙子的洗礼";
$factarray["_BAPM_GGCH"] = "曾孙的洗礼";
$factarray["__BRTM_GGCH"] = "曾孙的英国米拉";
$factarray["_ADOP_GGCH"] = "收养曾孙";
$factarray["_MARR_GGCH"] = "曾孙的婚姻";
$factarray["_MARB_GGCH"] = "曾孙的婚姻";
$factarray["_DEAT_GGCH"] = "曾孙的去世";
$factarray["_BURI_GGCH"] = "埋葬曾孙";
$factarray["_CREM_GGCH"] = "一个曾孙的火葬";
$factarray["_MARR_FATH"] = "父亲的婚姻";
$factarray["_MARB_FATH"] = "父亲的婚姻";
$factarray["_DEAT_FATH"] = "父亲的死";
$factarray["_BURI_FATH"] = "埋葬父亲";
$factarray["_CREM_FATH"] = "父亲的火葬";
$factarray["_MARR_FAMC"] = "父母的婚姻";
$factarray["_MARB_FAMC"] = "父母的婚姻";
$factarray["_MARR_MOTH"] = "母亲的婚姻";
$factarray["_MARB_MOTH"] = "母亲的婚姻";
$factarray["_DEAT_MOTH"] = "母亲的死";
$factarray["_BURI_MOTH"] = "埋葬母亲";
$factarray["_CREM_MOTH"] = "母亲的火葬";
$factarray["_BIRT_SIBL"] = "兄弟姐妹的诞生";
$factarray["_CHR_SIBL"] = "兄弟姐妹的洗礼";
$factarray["_BAPM_SIBL"] = "兄弟姐妹的洗礼";
$factarray["__BRTM_SIBL"] = "兄弟姐妹的兄弟姐妹";
$factarray["_ADOP_SIBL"] = "收养兄弟姐妹";
$factarray["_MARR_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_MARB_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_DEAT_SIBL"] = "兄弟之死";
$factarray["_BURI_SIBL"] = "埋葬兄弟姐妹";
$factarray["_CREM_SIBL"] = "兄弟姐妹的火葬";
$factarray["_BIRT_HSIB"] = "半兄弟的诞生";
$factarray["_CHR_HSIB"] = "半兄弟的洗礼";
$factarray["_BAPM_HSIB"] = "半兄弟的洗礼";
$factarray["__BRTM_HSIB"] = "半兄弟的英国米拉";
$factarray["_ADOP_HSIB"] = "收养半兄弟";
$factarray["_MARR_HSIB"] = "半兄弟的婚姻";
$factarray["_MARB_HSIB"] = "半兄弟的婚姻";
$factarray["_DEAT_HSIB"] = "半兄弟之死";
$factarray["_BURI_HSIB"] = "埋葬半兄弟";
$factarray["_CREM_HSIB"] = "半兄弟的火葬";
$factarray["_BIRT_NEPH"] = "侄子或侄女的出生";
$factarray["_CHR_NEPH"] = "洗礼侄子或侄女";
$factarray["_BAPM_NEPH"] = "侄子或侄女的洗礼";
$factarray["__BRTM_NEPH"] = "侄子的英国米拉";
$factarray["_ADOP_NEPH"] = "收养侄子或侄女";
$factarray["_MARR_NEPH"] = "侄女或侄女的婚姻";
$factarray["_MARB_NEPH"] = "侄子或侄女的婚姻";
$factarray["_DEAT_NEPH"] = "侄子或侄女的去世";
$factarray["_BURI_NEPH"] = "埋葬侄子或侄女";
$factarray["_CREM_NEPH"] = "侄子或侄女的火化";
$factarray["_DEAT_GPAR"] = "祖母的去世";
$factarray["_BURI_GPAR"] = "埋葬祖母";
$factarray["_CREM_GPAR"] = "祖父母的火化";
$factarray["_DEAT_GGPA"] = "一位曾祖父母的去世";
$factarray["_BURI_GGPA"] = "埋葬一位曾祖父母";
$factarray["_CREM_GGPA"] = "伟大的父母的火葬";
$factarray["_BIRT_FSIB"] = "父亲兄弟姐妹的诞生";
$factarray["_CHR_FSIB"] = "父亲兄弟姐妹的洗礼";
$factarray["_BAPM_FSIB"] = "父亲兄弟的洗礼";
$factarray["__BRTM_FSIB"] = "父亲兄弟姐妹的Brit Mila";
$factarray["_ADOP_FSIB"] = "收养父亲的兄弟姐妹";
$factarray["_MARR_FSIB"] = "父亲兄弟姐妹的婚姻";
$factarray["_MARB_FSIB"] = "父亲兄弟姐妹的婚姻";
$factarray["_DEAT_FSIB"] = "父亲的兄弟之死";
$factarray["_BURI_FSIB"] = "埋葬父亲的兄弟姐妹";
$factarray["_CREM_FSIB"] = "父亲兄弟姐妹的火化";
$factarray["_BIRT_MSIB"] = "母亲兄弟姐妹的诞生";
$factarray["_CHR_MSIB"] = "母亲的兄弟姐妹的洗礼";
$factarray["_BAPM_MSIB"] = "母亲兄弟的洗礼";
$factarray["__BRTM_MSIB"] = "母亲兄弟姐妹的英国米拉";
$factarray["_ADOP_MSIB"] = "收养母亲的兄弟姐妹";
$factarray["_MARR_MSIB"] = "母亲兄弟姐妹的婚姻";
$factarray["_MARB_MSIB"] = "母亲兄弟姐妹的婚姻";
$factarray["_DEAT_MSIB"] = "母亲的兄弟之死";
$factarray["_BURI_MSIB"] = "埋葬母亲的兄弟姐妹";
$factarray["_CREM_MSIB"] = "母亲兄弟姐妹的火化";
$factarray["_BIRT_COUS"] = "第一代堂兄的诞生";
$factarray["_CHR_COUS"] = "洗礼第一代堂兄";
$factarray["_BAPM_COUS"] = "第一代堂兄的洗礼";
$factarray["__BRTM_COUS"] = "第一个堂兄的英国米拉";
$factarray["_ADOP_COUS"] = "收养第一代堂兄";
$factarray["_MARR_COUS"] = "第一代表亲的婚姻";
$factarray["_MARB_COUS"] = "第一代表亲的婚姻";
$factarray["_DEAT_COUS"] = "第一代堂兄的去世";
$factarray["_BURI_COUS"] = "埋葬第一代堂兄";
$factarray["_CREM_COUS"] = "第一代堂兄的火化";
$factarray["_FAMC_EMIG"] = "父母的移民";
$factarray["_FAMC_RESI"] = "父母居住";
//-- PGV Only facts
$factarray["_THUM"] = "总是使用主图像？";
$factarray["_PGVU"] = "通过"; //最后改变了
$factarray["SERV"] = "远程服务器";
?>
