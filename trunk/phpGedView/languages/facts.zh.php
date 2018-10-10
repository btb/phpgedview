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

//-- Define a fact array to map GEDCOM tags with their chinese values
$factarray["ABBR"] = "簡稱";
$factarray["ADDR"] = "地址";
$factarray["ADR1"] = "地址一";
$factarray["ADR2"] = "地址二";
$factarray["ADOP"] = "收養";
$factarray["AFN"] = "祖先文件編號 (AFN)";
$factarray["AGE"] = "年齡";
$factarray["AGNC"] = "代辦處";
$factarray["ALIA"] = "別名";
$factarray["ANCE"] = "祖先";
$factarray["ANCI"] = "祖先興趣";
$factarray["ANUL"] = "取消";
$factarray["ASSO"] = "同事";
$factarray["AUTH"] = "作者";
$factarray["BAPL"] = "LDS 洗禮";
$factarray["BAPM"] = "洗禮";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "生日";
$factarray["BLES"] = "祝福";
$factarray["BLOB"] = "數碼資料";
$factarray["BURI"] = "埋葬";
$factarray["CALN"] = "索書號";
$factarray["CAST"] = "世襲的社會等級/社會狀態";
$factarray["CAUS"] = "死因";
$factarray["CEME"]  = "墓地";
$factarray["CENS"] = "人口調查";
$factarray["CHAN"] = "前更改";
$factarray["CHAR"] = "字符集";
$factarray["CHIL"] = "兒女";
$factarray["CHR"] = "洗禮";
$factarray["CHRA"] = "成人洗禮";
$factarray["CITY"] = "城市";
$factarray["CONF"] = "確認書";
$factarray["CONL"] = "LDS 確認書";
$factarray["COPR"] = "版權";
$factarray["CORP"] = "公司";
$factarray["CREM"] = "火葬";
$factarray["CTRY"] = "國家";
$factarray["DATA"] = "資料";
$factarray["DATE"] = "日期";
$factarray["DEAT"] = "去世";
$factarray["DESC"] = "後裔";
$factarray["DESI"] = "後裔利息";
$factarray["DEST"] = "目的地";
$factarray["DIV"] = "離婚";
$factarray["DIVF"] = "離婚被歸檔";
$factarray["DSCR"] = "說明";
$factarray["EDUC"] = "教育";
$factarray["EMIG"] = "移出";
$factarray["ENDL"] = "LDS 捐贈";
$factarray["ENGA"] = "訂婚";
$factarray["EVEN"] = "活動";
$factarray["FAM"] = "家庭";
$factarray["FAMC"] = "家庭裏的孩子";
$factarray["FAMF"] = "家庭文件";
$factarray["FAMS"] = "家庭裏的配偶";
$factarray["FCOM"] = "第一個聖餐";
$factarray["FILE"] = "外部文件:";
$factarray["FORM"] = "格式:";
$factarray["GIVN"] = "名：";
$factarray["GRAD"] = "畢業典禮";
$factarray["HUSB"]  = "丈夫";
$factarray["IDNO"] = "確認號";
$factarray["IMMI"] = "移民";
$factarray["LEGA"] = "遺産受贈人";
$factarray["MARB"] = "婚姻阻止";
$factarray["MARC"] = "婚姻合同";
$factarray["MARL"] = "結婚證書";
$factarray["MARR"] = "婚姻";
$factarray["MEDI"]= "媒體類型";
$factarray["MARS"] = "婚姻結算";
$factarray["NAME"] = "名字";
$factarray["NATI"] = "國籍";
$factarray["NATU"] = "歸化";
$factarray["NCHI"] = "幾個孩子";
$factarray["NICK"] = "昵稱";
$factarray["NMR"] = "婚姻次數";
$factarray["NOTE"] = "附注";
$factarray["NPFX"] = "字首";
$factarray["NSFX"] = "接尾辭";
$factarray["OBJE"] = "多媒體";
$factarray["OCCU"] = "職業";
$factarray["ORDI"] = "法令";
$factarray["ORDN"] = "整理";
$factarray["PAGE"] = "引證詳細資料";
$factarray["PEDI"] = "家譜";
$factarray["PLAC"] = "地方";
$factarray["PHON"] = "電話";
$factarray["POST"] = "郵政編碼";
$factarray["PROB"] = "遺囑的認證";
$factarray["PROP"] = "屬性";
$factarray["PUBL"] = "發行";
$factarray["QUAY"] = "資料的可信度";
$factarray["RELA"]= "關系";
$factarray["REPO"] = "程式庫";
$factarray["REFN"] = "參考編碼";
$factarray["RELI"] = "宗教信仰";
$factarray["RESI"] = "住宅";
$factarray["RESN"] = "限制";
$factarray["RETI"] = "退休";
$factarray["RFN"] = "記錄文件編號";
$factarray["RIN"] = "記錄身份證編號";
$factarray["ROLE"] = "角色";
$factarray["SEX"] = "性別";
$factarray["SLGC"] = "LDS 兒童海豹捕獵";
$factarray["SLGS"] = "LDS 配偶海豹捕獵";
$factarray["SOUR"] = "來源";
$factarray["SPFX"] = "姓氏稱謂";
$factarray["SSN"] = "社會安全號";
$factarray["STAE"] = "State";
$factarray["STAT"] = "狀態";
$factarray["SUBM"] = "提交者";
$factarray["SUBN"] = "提交";
$factarray["SURN"] = "姓氏";
$factarray["TEMP"] = "寺廟";
$factarray["TEXT"] = "文本";
$factarray["WIFE"]  = "妻子";
$factarray["TIME"] = "時間";
$factarray["TITL"] = "名稱";
$factarray["TYPE"] = "類型";
$factarray["WILL"] = "遺書";
$factarray["BURI:PLAC"] = "火葬地點";
$factarray["MARR:PLAC"] = "結婚地點";
$factarray["DEAT:PLAC"] = "去世地點";
$factarray["BIRT:PLAC"] = "出生地點";
$factarray["FAMC:HUSB:SURN"] = "父親姓";
$factarray["_EMAIL"] = "電子郵件";
$factarray["EMAIL"] = "電子郵件";
$factarray["_TODO"] = "爲完成的項目";
$factarray["_UID"] = "普遍標志";

//These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "醫療";
$factarray["_DEG"] = "程度";
$factarray["_MILT"] = "兵役";
$factarray["_SEPR"] = "分離";
$factarray["_DETS"] = "一個配偶去世";
$factarray["CITN"] = "公民身份";
$factarray["EMAL"]= "電子郵件";

//Other common customized facts
$factarray["_ADPF"] = "由父親拎養";
$factarray["_ADPM"] = "由母親拎養";
$factarray["_AKAN"] = "昵稱";
$factarray["_AKA"] = "又被名爲";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"] = "普通法婚姻";
$factarray["_EYEC"] = "眼睛顔色";
$factarray["_FNRL"] = "葬禮";
$factarray["_HAIR"] = "頭發顔色";
$factarray["_HEIG"] = "身高";
$factarray["_INTE"] = "入暮";
$factarray["_MARI"] = "婚姻目的";
$factarray["_MBON"] = "婚姻集資";
$factarray["_MEDC"] = "健康情況";
$factarray["_MILI"] = "軍事";
$factarray["_NMR"] = "未婚";
$factarray["_NLIV"] = "已故";
$factarray["_NMAR"] = "從來沒有結婚";
$factarray["_PRMN"] = "永久號碼";
$factarray["_WEIG"] = "體重";
$factarray["_YART"] = "Yartzeit";
$factarray["_MARNM"] = "婚後名字";
$factarray["COMM"]= "短紀錄";
$factarray["_BIRT_CHIL"] = "孩子出生";
$factarray["_MARR_CHIL"] = "孩子結婚";
$factarray["_DEAT_CHIL"] = "孩子去世";
$factarray["_GEDF"] = "家譜文件";

//GEDCOM 5.5.1 related facts
$factarray["FAX"] = "傳真";
$factarray["FACT"] = "實況";
$factarray["WWW"] = "網站";
$factarray["MAP"] = "地圖";
$factarray["LATI"] = "地球橫度";
$factarray["LONG"] = "地球豎度";
$factarray["FONE"] = "發音";
$factarray["ROMN"] = "羅馬化";
$factarray["_PRIM"] = "突出顯示的圖像";
$factarray["_DBID"] = "鏈接數據庫ID";
//These facts are used in specific contexts
$factarray["STAT:DATE"] = "狀態變更日期";
$factarray["DATA:DATE"] = "原始來源的進入日期";
$factarray["NAME:_HEB"] = "希伯來名字";
$factarray["PLAC:_HEB"] = "希伯來語";
$factarray["TITL:_HEB"] = "希伯來語中的標題";
$factarray["NAME:ROMN"] = "羅馬化名稱";
$factarray["PLAC:ROMN"] = "羅馬化的地方";
$factarray["TITL:ROMN"] = "羅馬化的標題";
$factarray["NAME:FONE"] = "注音名稱";
$factarray["PLAC:FONE"] = "拼音地方";
$factarray["TITL:FONE"] = "語音標題";
$factarray["SHARED_NOTE"] = "共享筆記";
//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:WIFE:SURN"] = "母親的姓氏";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "父親的出生地";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "母親的出生地";
$factarray["FAMC:MARR:PLAC"] = "父母婚姻所";
$factarray["FAMC:HUSB:OCCU"] = "父親的職業";
$factarray[":BIRT:PLAC"] = "出生地";
$factarray["FAMS:MARR:PLAC"] = "婚姻場所";
$factarray["FAMS:MARR:DATE"] = "結婚日";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "配偶的去世之地";
$factarray["FAMC:HUSB:GIVN"] = "父親的名字";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "配偶的出生地";
$factarray["FAMC:WIFE:GIVN"] = "母親的名字";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "祖父的祖父的名字";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "外婆的名字";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "外祖父的名字";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "父親祖母的名字";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "孩子的出生地";
$factarray["FAMS:NOTE"] = "配偶注";
$factarray["FAMS:CENS:DATE"] = "配偶普查日期";
$factarray["FAMS:CENS:PLAC"] = "配偶普查局";
$factarray["FAMS:DIV:DATE"] = "配偶離婚日期";
$factarray["FAMS:DIV:PLAC"] = "配偶離婚地";
$factarray["FAMS:SLGS:DATE"] = "LDS配偶密封日期";
$factarray["FAMS:SLGS:PLAC"] = "LDS Spouse Sealing Place";
$factarray["FAMS:SLGS:TEMP"] = "LDS配偶密封寺";
//These facts are all colon delimited
$factarray["BIRT:DATE"] = "生日";
$factarray["BIRT:SOUR"] = "出生源";
$factarray["DEAT:DATE"] = "去世日期";
$factarray["DEAT:SOUR"] = "去世之源";
$factarray["CHR:PLAC"] = "洗禮之地";
$factarray["CHR:DATE"] = "洗禮日期";
$factarray["CHR:SOUR"] = "洗禮來源";
$factarray["CONF:PLAC"] = "確認地點";
$factarray["CONF:DATE"] = "確認日期";
$factarray["CONF:SOUR"] = "確認來源";
$factarray["BAPM:PLAC"] = "洗禮之地";
$factarray["BAPM:DATE"] = "洗禮日期";
$factarray["BAPM:SOUR"] = "洗禮來源";
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
$factarray["FCOM:PLAC"] = "第一次聖餐地";
$factarray["FCOM:DATE"] = "第一次聖餐日期";
$factarray["FCOM:SOUR"] = "第一次聖餐來源";
$factarray["MARB:PLAC"] = "婚姻禁令";
$factarray["MARB:DATE"] = "婚姻日期";
$factarray["MARB:SOUR"] = "婚姻禁令來源";
$factarray["MARR:DATE"] = "結婚日";
$factarray["MARR:SOUR"] = "婚姻來源";
$factarray["ENGA:PLAC"] = "訂婚場所";
$factarray["ENGA:DATE"] = "承諾日期";
$factarray["ENGA:SOUR"] = "承諾來源";
$factarray["_FA1"] = "事實1";
$factarray["_FA2"] = "事實2";
$factarray["_FA3"] = "事實3";
$factarray["_FA4"] = "事實4";
$factarray["_FA5"] = "事實5";
$factarray["_FA6"] = "事實6";
$factarray["_FA7"] = "事實7";
$factarray["_FA8"] = "事實8";
$factarray["_FA9"] = "事實9";
$factarray["_FA10"] = "事實10";
$factarray["_FA11"] = "事實11";
$factarray["_FA12"] = "事實12";
$factarray["_FA13"] = "事實13";
$factarray["_MREL"] = "與母親的關系";
$factarray["_FREL"] = "與父親的關系";
$factarray["_MSTAT"] = "婚姻開始狀況";
$factarray["_MEND"] = "婚姻終結狀況";
$factarray["_NAMS"] = "同名同姓";
//PAF related facts
$factarray["_NAME"] = "郵寄姓名";
$factarray["URL"] = "網址";
$factarray["_URL"] = "網址";
$factarray["_HEB"] = "希伯來文";
$factarray["_SCBK"] = "剪貼簿";
$factarray["_TYPE"] = "媒體類型";
$factarray["_SSHOW"] = "幻燈片放映";
//Rootsmagic
$factarray["_SUBQ"] = "簡潔版本";
$factarray["_BIBL"] = "參考書目";
//Reunion
$factarray["_HOL"] = "大屠殺";
$factarray["_MARNM_SURN"] = "已婚姓氏";
$factarray["_STAT"] = "婚姻狀況";
//Aldfaer related facts
$factarray["MARR_CIVIL"] = "民事婚姻";
$factarray["MARR_RELIGIOUS"] = "宗教婚姻";
$factarray["MARR_PARTNERS"] = "注冊合夥";
$factarray["MARR_UNKNOWN"] = "婚姻類型未知";
$factarray["_HNM"] = "希伯來名";
//Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "配偶之死";
$factarray["_BURI_SPOU"] = "埋葬配偶";
$factarray["_CREM_SPOU"] = "配偶火化";
$factarray["_CHR_CHIL"] = "洗禮孩子";
$factarray["_BAPM_CHIL"] = "孩子的洗禮";
$factarray["__BRTM_CHIL"] = "孩子的英國米拉";
$factarray["_ADOP_CHIL"] = "收養一個孩子";
$factarray["_MARB_CHIL"] = "孩子的婚姻";
$factarray["_BURI_CHIL"] = "埋葬兒童";
$factarray["_CREM_CHIL"] = "火葬孩子";
$factarray["_BIRT_GCHI"] = "孫子的誕生";
$factarray["_CHR_GCHI"] = "孫子的洗禮";
$factarray["_BAPM_GCHI"] = "孫子的洗禮";
$factarray["__BRTM_GCHI"] = "孫子的英國米拉";
$factarray["_ADOP_GCHI"] = "收養孫子";
$factarray["_MARR_GCHI"] = "孫子的婚姻";
$factarray["_MARB_GCHI"] = "孫子的婚姻";
$factarray["_DEAT_GCHI"] = "孫子之死";
$factarray["_BURI_GCHI"] = "埋葬孫子";
$factarray["_CREM_GCHI"] = "孫子的火葬";
$factarray["_BIRT_GGCH"] = "曾孫的誕生";
$factarray["_CHR_GGCH"] = "曾孫子的洗禮";
$factarray["_BAPM_GGCH"] = "曾孫的洗禮";
$factarray["__BRTM_GGCH"] = "曾孫的英國米拉";
$factarray["_ADOP_GGCH"] = "收養曾孫";
$factarray["_MARR_GGCH"] = "曾孫的婚姻";
$factarray["_MARB_GGCH"] = "曾孫的婚姻";
$factarray["_DEAT_GGCH"] = "曾孫的去世";
$factarray["_BURI_GGCH"] = "埋葬曾孫";
$factarray["_CREM_GGCH"] = "一個曾孫的火葬";
$factarray["_MARR_FATH"] = "父親的婚姻";
$factarray["_MARB_FATH"] = "父親的婚姻";
$factarray["_DEAT_FATH"] = "父親的死";
$factarray["_BURI_FATH"] = "埋葬父親";
$factarray["_CREM_FATH"] = "父親的火葬";
$factarray["_MARR_FAMC"] = "父母的婚姻";
$factarray["_MARB_FAMC"] = "父母的婚姻";
$factarray["_MARR_MOTH"] = "母親的婚姻";
$factarray["_MARB_MOTH"] = "母親的婚姻";
$factarray["_DEAT_MOTH"] = "母親的死";
$factarray["_BURI_MOTH"] = "埋葬母親";
$factarray["_CREM_MOTH"] = "母親的火葬";
$factarray["_BIRT_SIBL"] = "兄弟姐妹的誕生";
$factarray["_CHR_SIBL"] = "兄弟姐妹的洗禮";
$factarray["_BAPM_SIBL"] = "兄弟姐妹的洗禮";
$factarray["__BRTM_SIBL"] = "兄弟姐妹的兄弟姐妹";
$factarray["_ADOP_SIBL"] = "收養兄弟姐妹";
$factarray["_MARR_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_MARB_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_DEAT_SIBL"] = "兄弟之死";
$factarray["_BURI_SIBL"] = "埋葬兄弟姐妹";
$factarray["_CREM_SIBL"] = "兄弟姐妹的火葬";
$factarray["_BIRT_HSIB"] = "半兄弟的誕生";
$factarray["_CHR_HSIB"] = "半兄弟的洗禮";
$factarray["_BAPM_HSIB"] = "半兄弟的洗禮";
$factarray["__BRTM_HSIB"] = "半兄弟的英國米拉";
$factarray["_ADOP_HSIB"] = "收養半兄弟";
$factarray["_MARR_HSIB"] = "半兄弟的婚姻";
$factarray["_MARB_HSIB"] = "半兄弟的婚姻";
$factarray["_DEAT_HSIB"] = "半兄弟之死";
$factarray["_BURI_HSIB"] = "埋葬半兄弟";
$factarray["_CREM_HSIB"] = "半兄弟的火葬";
$factarray["_BIRT_NEPH"] = "侄子或侄女的出生";
$factarray["_CHR_NEPH"] = "洗禮侄子或侄女";
$factarray["_BAPM_NEPH"] = "侄子或侄女的洗禮";
$factarray["__BRTM_NEPH"] = "侄子的英國米拉";
$factarray["_ADOP_NEPH"] = "收養侄子或侄女";
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
$factarray["_CREM_GGPA"] = "偉大的父母的火葬";
$factarray["_BIRT_FSIB"] = "父親兄弟姐妹的誕生";
$factarray["_CHR_FSIB"] = "父親兄弟姐妹的洗禮";
$factarray["_BAPM_FSIB"] = "父親兄弟的洗禮";
$factarray["__BRTM_FSIB"] = "父親兄弟姐妹的Brit Mila";
$factarray["_ADOP_FSIB"] = "收養父親的兄弟姐妹";
$factarray["_MARR_FSIB"] = "父親兄弟姐妹的婚姻";
$factarray["_MARB_FSIB"] = "父親兄弟姐妹的婚姻";
$factarray["_DEAT_FSIB"] = "父親的兄弟之死";
$factarray["_BURI_FSIB"] = "埋葬父親的兄弟姐妹";
$factarray["_CREM_FSIB"] = "父親兄弟姐妹的火化";
$factarray["_BIRT_MSIB"] = "母親兄弟姐妹的誕生";
$factarray["_CHR_MSIB"] = "母親的兄弟姐妹的洗禮";
$factarray["_BAPM_MSIB"] = "母親兄弟的洗禮";
$factarray["__BRTM_MSIB"] = "母親兄弟姐妹的英國米拉";
$factarray["_ADOP_MSIB"] = "收養母親的兄弟姐妹";
$factarray["_MARR_MSIB"] = "母親兄弟姐妹的婚姻";
$factarray["_MARB_MSIB"] = "母親兄弟姐妹的婚姻";
$factarray["_DEAT_MSIB"] = "母親的兄弟之死";
$factarray["_BURI_MSIB"] = "埋葬母親的兄弟姐妹";
$factarray["_CREM_MSIB"] = "母親兄弟姐妹的火化";
$factarray["_BIRT_COUS"] = "第一代堂兄的誕生";
$factarray["_CHR_COUS"] = "洗禮第一代堂兄";
$factarray["_BAPM_COUS"] = "第一代堂兄的洗禮";
$factarray["__BRTM_COUS"] = "第一個堂兄的英國米拉";
$factarray["_ADOP_COUS"] = "收養第一代堂兄";
$factarray["_MARR_COUS"] = "第一代表親的婚姻";
$factarray["_MARB_COUS"] = "第一代表親的婚姻";
$factarray["_DEAT_COUS"] = "第一代堂兄的去世";
$factarray["_BURI_COUS"] = "埋葬第一代堂兄";
$factarray["_CREM_COUS"] = "第一代堂兄的火化";
$factarray["_FAMC_EMIG"] = "父母的移民";
$factarray["_FAMC_RESI"] = "父母居住";
//-- PGV Only facts
$factarray["_THUM"] = "總是使用主圖像？";
$factarray["_PGVU"] = "通過"; //最後改變了
$factarray["SERV"] = "遠程服務器";
?>
