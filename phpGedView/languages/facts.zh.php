<?php
/**
 * Chinese (Traditional) texts
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
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
$factarray["ABBR"]="縮寫";
$factarray["ADDR"]="地址";
$factarray["ADR1"]="地址1";
$factarray["ADR2"]="地址2";
$factarray["ADOP"]="收養(過繼)";//不是生物學上的關係。
$factarray["AFN"]="祖傳文件號（AFN）";//祖先文件Nummer，存儲在祖先文件中的單個記錄的唯一永久記錄文件號。
$factarray["AGE"]="年齡";
$factarray["AGNC"]="管理機構";//具有管理或治理權限和/或責任的機構或個人。
$factarray["ALIA"]="別名"; //用於鏈接可能是同一個人的人的不同記錄描述的指示符。
$factarray["ANCE"]="祖先";//與個人的福祉有關。
$factarray["ANCI"]="祖先的興趣";//表示對此人的祖先進行額外研究的興趣。
$factarray["ANUL"]="無效婚姻";//宣布婚姻從一開始就無效（從未存在過）。
$factarray["ASSO"]="關係連接";//用於鏈接個人的朋友，鄰居，親戚或同事的指示符。
$factarray["AUTH"]="作者";
$factarray["BAPL"]="LDS洗禮";//由LDS教會的祭司權威在8歲或以後進行洗禮
$factarray["BAPM"]="洗禮";//洗禮（不是LDS）的事件，在嬰儿期或之後進行。
$factarray["BARM"]="BarMitzvah";//當一名猶太男孩年滿13歲時舉行儀式活動
$factarray["BASM"]="BasMitzvah";//當一名猶太女孩年滿13歲時，舉行儀式活動
$factarray["BIRT"]="生辰";
$factarray["BLES"]="祝福";//賜予神聖關懷或代禱的宗教活動。有時與命名儀式有關。
$factarray["BLOB"]="二進制數據對象";//用作多媒體系統輸入的數據分組，處理二進制數據以表示圖像，聲音和視頻。
$factarray["BURI"]="下葬";//當處理死者遺體的事件。
$factarray["CALN"]="電話號碼";//存儲庫用於標識其集合中特定項的數字。
$factarray["CAST"]="社會地位";//基於種族或宗教差異，或者財富，繼承等級，職業，職業等的差異，個人在社會中的等級或地位的名稱。
$factarray["CAUS"]="死因";//描述相關事件或事實的原因，例如死因。
$factarray["CEME"]="公墓";
$factarray["CENS"]="人口普查";//定期計算指定地區人口的事件，例如國家或州人口普查。
$factarray["CHAN"]="最近更改時間";//表示更改，更正或修改。通常與DATE結合使用，以指定何時發生信息更改。
$factarray["CHAR"]="字符集";// 用於編寫此自動化信息的字符集的指示符。
$factarray["CHIL"]="孩子";//父親和母親出生、收養或密封（LDS）孩子。
$factarray["CHR"]="洗禮";//給孩子施洗和/或命名的宗教事件（不是LDS）。
$factarray["CHRA"]="成人洗禮";//為成年人施洗和/或命名的宗教事件（不是LDS）。
$factarray["CITY"]="城市";
$factarray["CONF"]="確認";//賦予聖靈恩賜的宗教事件（不是LDS），以及在抗議者中，教會的全部成員資格。
$factarray["CONL"]="LDS確認";//一個人獲得LDS教會會員資格的宗教活動。
$factarray["COPR"]="版權";//附帶數據的聲明，以保護數據免受非法複製和分發。
$factarray["CORP"]="公司";
$factarray["CREM"]="火葬";
$factarray["CTRY"]="國家";
$factarray["DATA"]="數據";
$factarray["DATE"]="日期";
$factarray["DEAT"]="逝世";
$factarray["DESC"]="後代信息";
$factarray["DESI"]="後代調查";//表示有興趣研究以識別該個體的其他後代。 （另見ANCI）
$factarray["DEST"]="目的地";//接收數據的系統。
$factarray["DIV"]="訴訟離婚";//通過民事訴訟解除婚姻的事件。
$factarray["DIVF"]="協議離婚";//配偶提出離婚的事件
$factarray["DSCR"]="描述說明";//人，地方或事物的身體特徵。
$factarray["EDUC"]="教育水平";
$factarray["EMIG"]="遷出";//離開一個人的家鄉意圖居住在其他地方的事件。
$factarray["ENDL"]="LDS捐贈";//一個宗教活動，其中一個人的捐贈條例由LDS寺廟中的祭司權威執行
$factarray["ENGA"]="訂婚";//記錄或宣布兩人結婚的協議
$factarray["EVEN"]="事件";//與個人，團體或組織相關的值得注意的事件。
$factarray["FAM"]="家庭";
$factarray["FAMC"]="作為一個家庭的孩子";//標識個人作為孩子出現的家庭。
$factarray["FAMF"]="家庭檔案";//與家庭檔案有關或名稱。存儲在文件中的名稱，這些名稱分配給一個家庭以進行寺廟法令工作。
$factarray["FAMS"]="作為配偶的家庭";//個人作為配偶出現的家庭。
$factarray["FCOM"]="第一次聖餐";//宗教儀式，作為教會崇拜的一部分，在主的晚餐中分享的第一個行為。
$factarray["FILE"]="外部文件";//訂購和安排的信息存儲地點，用於保存和參考。
$factarray["FORM"]="格式";//指定的名稱，以一致的格式傳遞信息。
$factarray["GIVN"]="名字";
$factarray["GRAD"]="畢業";//向個人頒發教育文憑或學位的活動。
$factarray["HUSB"]="丈夫";
$factarray["IDNO"]="識別號碼";//分配用於標識某個重要外部系統中的人員的編號。
$factarray["IMMI"]="遷入";//進入新地點並意圖居住在那裡的事件。
$factarray["LEGA"]="受贈人";
$factarray["MARB"]="結婚通知";//鑑於兩個人打算結婚，發生正式公告。
$factarray["MARC"]="婚姻協議";//記錄婚姻正式協議的事件，包括婚前協議，婚姻伴侶就其中一方或雙方的財產權達成協議，確保子女獲得財產。
$factarray["MARL"]="登記結婚";//獲得合法許可結婚的事件。
$factarray["MARR"]="結婚事件";
$factarray["MARS"]="婚前協議";//在兩個考慮結婚的人之間達成協議的事件，此時​​他們同意釋放或修改否則會因婚姻而產生的財產權。
$factarray["MEDI"]="媒體類型";
$factarray["NAME"]="姓名";
$factarray["NATI"]="國籍";
$factarray["NATU"]="歸化";//是非該國家的公民的人、自願變成該國的公民或取得該國家的國籍的行為。
$factarray["NCHI"]="子女數";
$factarray["NICK"]="別名";
$factarray["NMR"]="婚姻數量";
$factarray["NOTE"]="筆記";
$factarray["NPFX"]="字輩";
$factarray["NSFX"]="後綴";
$factarray["OBJE"]="多媒體對象";
$factarray["OCCU"]="職業信息";
$factarray["ORDI"]="條例";
$factarray["ORDN"]="按立";//接受宗教事務行為的宗教活動。
$factarray["PAGE"]="引文詳情";//用於標識在引用的作品中可以找到信息的位置的數字或描述。
$factarray["PEDI"]="與父母關係";
$factarray["PLAC"]="地點";
$factarray["PHON"]="電話號碼";
$factarray["POST"]="郵政編碼";
$factarray["PROB"]="遺囑認證";
$factarray["PROP"]="財產信息";
$factarray["PUBL"]="出版物";
$factarray["QUAY"]="數據質量";
$factarray["REPO"]="存儲庫";
$factarray["REFN"]="參考編號";
$factarray["RELA"]="關係";
$factarray["RELI"]="宗教";
$factarray["RESI"]="居住地";//住在一個地址一段時間的行為。
$factarray["RESN"]="限制";
$factarray["RETI"]="退休";
$factarray["RFN"]="記錄文件編號";
$factarray["RIN"]="記錄ID號";
$factarray["ROLE"]="角色";
$factarray["SEX"]="性別";
$factarray["SLGC"]="LDS子女密封";
$factarray["SLGS"]="LDSSpouseSealing";
$factarray["SOUR"]="來源";
$factarray["SPFX"]="姓氏前綴";
$factarray["SSN"]="社會安全號碼";
$factarray["STAE"]="國家";
$factarray["STAT"]="狀態";
$factarray["SUBM"]="提交者";
$factarray["SUBN"]="提交";
$factarray["SURN"]="姓氏";
$factarray["TEMP"]="神殿";
$factarray["TEXT"]="文本內容";
$factarray["TIME"]="時間";
$factarray["TITL"]="標題";
$factarray["TYPE"]="類型";
$factarray["WIFE"]="妻子";
$factarray["WILL"]="遺囑";
$factarray["_EMAIL"]="電子郵件地址";
$factarray["EMAIL"]="電子郵件地址";
$factarray["_TODO"]="待辦事項";
$factarray["_UID"]="唯一標識";
$factarray["_PRIM"]="突出顯示的圖像";
$factarray["_DBID"]="鏈接數據庫ID";

//These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "醫療";
$factarray["_DEG"] = "程度";
$factarray["_MILT"] = "兵役";
$factarray["_SEPR"] = "分離";
$factarray["_DETS"] = "一個配偶去世";
$factarray["CITN"] = "公民身份";
$factarray["EMAL"]= "電子郵件";

//Other common customized facts
$factarray["_ADPF"] = "由父親收養";
$factarray["_ADPM"] = "由母親收養";
$factarray["_AKAN"] = "暱稱";
$factarray["_AKA"] = "又被名為";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"] = "普通法婚姻";
$factarray["_EYEC"] = "眼睛顏色";
$factarray["_FNRL"] = "葬禮";
$factarray["_HAIR"] = "頭髮顏色";
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
$factarray["FACT"] = "事實";
$factarray["WWW"] = "網站";
$factarray["MAP"] = "地圖";
$factarray["LATI"] = "緯度";
$factarray["LONG"] = "經度";
$factarray["FONE"] = "發音";
$factarray["ROMN"] = "羅馬化";
$factarray["_PRIM"] = "突出顯示的圖像";
$factarray["_DBID"] = "鏈接數據庫ID";
//These facts are used in specific contexts
$factarray["STAT:DATE"] = "狀態變更日期";
$factarray["DATA:DATE"] = "原始來源形成日期";
$factarray["NAME:_HEB"] = "希伯來名字";
$factarray["PLAC:_HEB"] = "希伯來語";
$factarray["TITL:_HEB"] = "希伯來語中的標題";
$factarray["NAME:ROMN"] = "羅馬化名稱";
$factarray["PLAC:ROMN"] = "羅馬化的地點";
$factarray["TITL:ROMN"] = "羅馬化的標題";
$factarray["NAME:FONE"] = "注音名稱";
$factarray["PLAC:FONE"] = "拼音地點";
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
$factarray["BIRT:PLAC"] = "出生地點";
$factarray["BIRT:DATE"] = "生日日期";
$factarray["BIRT:SOUR"] = "出生記錄來源";
$factarray["DEAT:DATE"] = "去世日期";
$factarray["DEAT:SOUR"] = "去世之源";
$factarray["DEAT:PLAC"] = "去世地點";
$factarray["CHR:PLAC"] = "洗禮之地";
$factarray["CHR:DATE"] = "洗禮日期";
$factarray["CHR:SOUR"] = "洗禮記錄來源";
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
$factarray["BURI:DATE"] = "下葬日期";
$factarray["BURI:SOUR"] = "下葬記錄源";
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
$factarray["_MREL"] = "與母親的關係";
$factarray["_FREL"] = "與父親的關係";
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
$factarray["MARR_PARTNERS"] = "註冊合夥";
$factarray["MARR_UNKNOWN"] = "婚姻類型未知";
$factarray["_HNM"] = "希伯來名";
//Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "配偶之死";
$factarray["_BURI_SPOU"] = "下葬配偶";
$factarray["_CREM_SPOU"] = "配偶火化";
$factarray["_CHR_CHIL"] = "洗禮孩子";
$factarray["_BAPM_CHIL"] = "孩子的洗禮";
$factarray["__BRTM_CHIL"] = "孩子的英國米拉";
$factarray["_ADOP_CHIL"] = "收養一個孩子";
$factarray["_MARB_CHIL"] = "孩子的婚姻";
$factarray["_BURI_CHIL"] = "下葬子女";
$factarray["_CREM_CHIL"] = "火葬孩子";
$factarray["_BIRT_GCHI"] = "孫子的誕生";
$factarray["_CHR_GCHI"] = "孫子的洗禮";
$factarray["_BAPM_GCHI"] = "孫子的洗禮";
$factarray["__BRTM_GCHI"] = "孫子的英國米拉";
$factarray["_ADOP_GCHI"] = "收養孫子";
$factarray["_MARR_GCHI"] = "孫子的婚姻";
$factarray["_MARB_GCHI"] = "孫子的婚姻";
$factarray["_DEAT_GCHI"] = "孫子之死";
$factarray["_BURI_GCHI"] = "下葬孫子";
$factarray["_CREM_GCHI"] = "孫子的火葬";
$factarray["_BIRT_GGCH"] = "曾孫的誕生";
$factarray["_CHR_GGCH"] = "曾孫子的洗禮";
$factarray["_BAPM_GGCH"] = "曾孫的洗禮";
$factarray["__BRTM_GGCH"] = "曾孫的英國米拉";
$factarray["_ADOP_GGCH"] = "收養曾孫";
$factarray["_MARR_GGCH"] = "曾孫的婚姻";
$factarray["_MARB_GGCH"] = "曾孫的婚姻";
$factarray["_DEAT_GGCH"] = "曾孫的去世";
$factarray["_BURI_GGCH"] = "下葬曾孫";
$factarray["_CREM_GGCH"] = "一個曾孫的火葬";
$factarray["_MARR_FATH"] = "父親的婚姻";
$factarray["_MARB_FATH"] = "父親的婚姻";
$factarray["_DEAT_FATH"] = "父親的死";
$factarray["_BURI_FATH"] = "下葬父親";
$factarray["_CREM_FATH"] = "父親的火葬";
$factarray["_MARR_FAMC"] = "父母的婚姻";
$factarray["_MARB_FAMC"] = "父母的婚姻";
$factarray["_MARR_MOTH"] = "母親的婚姻";
$factarray["_MARB_MOTH"] = "母親的婚姻";
$factarray["_DEAT_MOTH"] = "母親的死";
$factarray["_BURI_MOTH"] = "下葬母親";
$factarray["_CREM_MOTH"] = "母親的火葬";
$factarray["_BIRT_SIBL"] = "兄弟姐妹的誕生";
$factarray["_CHR_SIBL"] = "兄弟姐妹的洗禮";
$factarray["_BAPM_SIBL"] = "兄弟姐妹的洗禮";
$factarray["__BRTM_SIBL"] = "兄弟姐妹的兄弟姐妹";
$factarray["_ADOP_SIBL"] = "收養兄弟姐妹";
$factarray["_MARR_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_MARB_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_DEAT_SIBL"] = "兄弟之死";
$factarray["_BURI_SIBL"] = "下葬兄弟姐妹";
$factarray["_CREM_SIBL"] = "兄弟姐妹的火葬";
$factarray["_BIRT_HSIB"] = "半兄弟的誕生";
$factarray["_CHR_HSIB"] = "半兄弟的洗禮";
$factarray["_BAPM_HSIB"] = "半兄弟的洗禮";
$factarray["__BRTM_HSIB"] = "半兄弟的英國米拉";
$factarray["_ADOP_HSIB"] = "收養半兄弟";
$factarray["_MARR_HSIB"] = "半兄弟的婚姻";
$factarray["_MARB_HSIB"] = "半兄弟的婚姻";
$factarray["_DEAT_HSIB"] = "半兄弟之死";
$factarray["_BURI_HSIB"] = "下葬半兄弟";
$factarray["_CREM_HSIB"] = "半兄弟的火葬";
$factarray["_BIRT_NEPH"] = "侄子或侄女的出生";
$factarray["_CHR_NEPH"] = "洗禮侄子或侄女";
$factarray["_BAPM_NEPH"] = "侄子或侄女的洗禮";
$factarray["__BRTM_NEPH"] = "侄子的英國米拉";
$factarray["_ADOP_NEPH"] = "收養侄子或侄女";
$factarray["_MARR_NEPH"] = "侄女或侄女的婚姻";
$factarray["_MARB_NEPH"] = "侄子或侄女的婚姻";
$factarray["_DEAT_NEPH"] = "侄子或侄女的去世";
$factarray["_BURI_NEPH"] = "下葬侄子或侄女";
$factarray["_CREM_NEPH"] = "侄子或侄女的火化";
$factarray["_DEAT_GPAR"] = "祖母的去世";
$factarray["_BURI_GPAR"] = "下葬祖母";
$factarray["_CREM_GPAR"] = "祖父母的火化";
$factarray["_DEAT_GGPA"] = "一位曾祖父母的去世";
$factarray["_BURI_GGPA"] = "下葬一位曾祖父母";
$factarray["_CREM_GGPA"] = "偉大的父母的火葬";
$factarray["_BIRT_FSIB"] = "父親兄弟姐妹的誕生";
$factarray["_CHR_FSIB"] = "父親兄弟姐妹的洗禮";
$factarray["_BAPM_FSIB"] = "父親兄弟的洗禮";
$factarray["__BRTM_FSIB"] = "父親兄弟姐妹的Brit Mila";
$factarray["_ADOP_FSIB"] = "收養父親的兄弟姐妹";
$factarray["_MARR_FSIB"] = "父親兄弟姐妹的婚姻";
$factarray["_MARB_FSIB"] = "父親兄弟姐妹的婚姻";
$factarray["_DEAT_FSIB"] = "父親的兄弟之死";
$factarray["_BURI_FSIB"] = "下葬父親的兄弟姐妹";
$factarray["_CREM_FSIB"] = "父親兄弟姐妹的火化";
$factarray["_BIRT_MSIB"] = "母親兄弟姐妹的誕生";
$factarray["_CHR_MSIB"] = "母親的兄弟姐妹的洗禮";
$factarray["_BAPM_MSIB"] = "母親兄弟的洗禮";
$factarray["__BRTM_MSIB"] = "母親兄弟姐妹的英國米拉";
$factarray["_ADOP_MSIB"] = "收養母親的兄弟姐妹";
$factarray["_MARR_MSIB"] = "母親兄弟姐妹的婚姻";
$factarray["_MARB_MSIB"] = "母親兄弟姐妹的婚姻";
$factarray["_DEAT_MSIB"] = "母親的兄弟之死";
$factarray["_BURI_MSIB"] = "下葬母親的兄弟姐妹";
$factarray["_CREM_MSIB"] = "母親兄弟姐妹的火化";
$factarray["_BIRT_COUS"] = "第一代堂兄的誕生";
$factarray["_CHR_COUS"] = "洗禮第一代堂兄";
$factarray["_BAPM_COUS"] = "第一代堂兄的洗禮";
$factarray["__BRTM_COUS"] = "第一個堂兄的英國米拉";
$factarray["_ADOP_COUS"] = "收養第一代堂兄";
$factarray["_MARR_COUS"] = "第一代表親的婚姻";
$factarray["_MARB_COUS"] = "第一代表親的婚姻";
$factarray["_DEAT_COUS"] = "第一代堂兄的去世";
$factarray["_BURI_COUS"] = "下葬第一代堂兄";
$factarray["_CREM_COUS"] = "第一代堂兄的火化";
$factarray["_FAMC_EMIG"] = "父母的移民";
$factarray["_FAMC_RESI"] = "父母居住";
//-- PGV Only facts
$factarray["_THUM"] = "總是使用主圖像？";
$factarray["_PGVU"] = "更改人"; //最後改變了
$factarray["SERV"] = "遠程服務器";

/*-- Fact abbreviations for use in Chart boxes.
 *		Use these abbreviations in cases where the standard method of using the first
 *		letter of the spelled-out name results in an undesirable abbreviation or where
 *		you want to produce a different result (eg: "x" instead of "M" for "Married").
 *
 *		You can abbreviate any Fact label this way.  The list of abbreviations is
 *		open-ended.
 *
 *		These abbreviations are user-customizable. Just put them into file "extra.xx.php".
 *		The length of these abbreviations is not restricted to 1 letter.
 */

unset($factAbbrev);		// Don't let other languages specify Fact abbreviations for this language

/*-- The following lines have been commented out.  They should serve as examples.

$factAbbrev["BIRT"]		= "B";
$factAbbrev["MARR"]		= "M";
$factAbbrev["DEAT"]		= "D";

 */

?>
