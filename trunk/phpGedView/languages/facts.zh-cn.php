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

//-- Define a fact array to map GEDCOM tags with their chinese values
$factarray["ABBR"]="缩写";
$factarray["ADDR"]="地址";
$factarray["ADR1"]="地址1";
$factarray["ADR2"]="地址2";
$factarray["ADOP"]="收养(过继)";//不是生物学上的关系。
$factarray["AFN"]="祖传文件号（AFN）";//祖先文件Nummer，存储在祖先文件中的单个记录的唯一永久记录文件号。
$factarray["AGE"]="年龄";
$factarray["AGNC"]="管理机构";//具有管理或治理权限和/或责任的机构或个人。
$factarray["ALIA"]="别名"; //用于链接可能是同一个人的人的不同记录描述的指示符。
$factarray["ANCE"]="祖先";//与个人的福祉有关。
$factarray["ANCI"]="祖先的兴趣";//表示对此人的祖先进行额外研究的兴趣。
$factarray["ANUL"]="无效婚姻";//宣布婚姻从一开始就无效（从未存在过）。
$factarray["ASSO"]="关系连接";//用于链接个人的朋友，邻居，亲戚或同事的指示符。
$factarray["AUTH"]="作者";
$factarray["BAPL"]="LDS洗礼";//由LDS教会的祭司权威在8岁或以后进行洗礼
$factarray["BAPM"]="洗礼";//洗礼（不是LDS）的事件，在婴儿期或之后进行。
$factarray["BARM"]="BarMitzvah";//当一名犹太男孩年满13岁时举行仪式活动
$factarray["BASM"]="BasMitzvah";//当一名犹太女孩年满13岁时，举行仪式活动
$factarray["BIRT"]="生辰";
$factarray["BLES"]="祝福";//赐予神圣关怀或代祷的宗教活动。有时与命名仪式有关。
$factarray["BLOB"]="二进制数据对象";//用作多媒体系统输入的数据分组，处理二进制数据以表示图像，声音和视频。
$factarray["BURI"]="下葬";//当处理死者遗体的事件。
$factarray["CALN"]="电话号码";//存储库用于标识其集合中特定项的数字。
$factarray["CAST"]="社会地位";//基于种族或宗教差异，或者财富，继承等级，职业，职业等的差异，个人在社会中的等级或地位的名称。
$factarray["CAUS"]="死因";//描述相关事件或事实的原因，例如死因。
$factarray["CEME"]="公墓";
$factarray["CENS"]="人口普查";//定期计算指定地区人口的事件，例如国家或州人口普查。
$factarray["CHAN"]="最近更改时间";//表示更改，更正或修改。通常与DATE结合使用，以指定何时发生信息更改。
$factarray["CHAR"]="字符集";//	用于编写此自动化信息的字符集的指示符。
$factarray["CHIL"]="孩子";//父亲和母亲出生、收养或密封（LDS）孩子。
$factarray["CHR"]="洗礼";//给孩子施洗和/或命名的宗教事件（不是LDS）。
$factarray["CHRA"]="成人洗礼";//为成年人施洗和/或命名的宗教事件（不是LDS）。
$factarray["CITY"]="城市";
$factarray["CONF"]="确认";//赋予圣灵恩赐的宗教事件（不是LDS），以及在抗议者中，教会的全部成员资格。
$factarray["CONL"]="LDS确认";//一个人获得LDS教会会员资格的宗教活动。
$factarray["COPR"]="版权";//附带数据的声明，以保护数据免受非法复制和分发。
$factarray["CORP"]="公司";
$factarray["CREM"]="火葬";
$factarray["CTRY"]="国家";
$factarray["DATA"]="数据";
$factarray["DATE"]="日期";
$factarray["DEAT"]="逝世";
$factarray["DESC"]="后代信息";
$factarray["DESI"]="后代调查";//表示有兴趣研究以识别该个体的其他后代。（另见ANCI）
$factarray["DEST"]="目的地";//接收数据的系统。
$factarray["DIV"]="诉讼离婚";//通过民事诉讼解除婚姻的事件。
$factarray["DIVF"]="协议离婚";//配偶提出离婚的事件
$factarray["DSCR"]="描述说明";//人，地方或事物的身体特征。
$factarray["EDUC"]="教育水平";
$factarray["EMIG"]="迁出";//离开一个人的家乡意图居住在其他地方的事件。
$factarray["ENDL"]="LDS捐赠";//一个宗教活动，其中一个人的捐赠条例由LDS寺庙中的祭司权威执行
$factarray["ENGA"]="订婚";//记录或宣布两人结婚的协议
$factarray["EVEN"]="事件";//与个人，团体或组织相关的值得注意的事件。
$factarray["FAM"]="家庭";
$factarray["FAMC"]="作为一个家庭的孩子";//标识个人作为孩子出现的家庭。
$factarray["FAMF"]="家庭档案";//与家庭档案有关或名称。存储在文件中的名称，这些名称分配给一个家庭以进行寺庙法令工作。
$factarray["FAMS"]="作为配偶的家庭";//个人作为配偶出现的家庭。
$factarray["FCOM"]="第一次圣餐";//宗教仪式，作为教会崇拜的一部分，在主的晚餐中分享的第一个行为。
$factarray["FILE"]="外部文件";//订购和安排的信息存储地点，用于保存和参考。
$factarray["FORM"]="格式";//指定的名称，以一致的格式传递信息。
$factarray["GIVN"]="名字";
$factarray["GRAD"]="毕业";//向个人颁发教育文凭或学位的活动。
$factarray["HUSB"]="丈夫";
$factarray["IDNO"]="识别号码";//分配用于标识某个重要外部系统中的人员的编号。
$factarray["IMMI"]="迁入";//进入新地点并意图居住在那里的事件。
$factarray["LEGA"]="受赠人";
$factarray["MARB"]="结婚通知";//鉴于两个人打算结婚，发生正式公告。
$factarray["MARC"]="婚姻协议";//记录婚姻正式协议的事件，包括婚前协议，婚姻伴侣就其中一方或双方的财产权达成协议，确保子女获得财产。
$factarray["MARL"]="登记结婚";//获得合法许可结婚的事件。
$factarray["MARR"]="结婚事件";
$factarray["MARS"]="婚前协议";//在两个考虑结婚的人之间达成协议的事件，此时他们同意释放或修改否则会因婚姻而产生的财产权。
$factarray["MEDI"]="媒体类型";
$factarray["NAME"]="姓名";
$factarray["NATI"]="国籍";
$factarray["NATU"]="归化";//是非该国家的公民的人、自愿变成该国的公民或取得该国家的国籍的行为。
$factarray["NCHI"]="子女数";
$factarray["NICK"]="别名";
$factarray["NMR"]="婚姻数量";
$factarray["NOTE"]="笔记";
$factarray["NPFX"]="字辈";
$factarray["NSFX"]="后缀";
$factarray["OBJE"]="多媒体对象";
$factarray["OCCU"]="职业信息";
$factarray["ORDI"]="条例";
$factarray["ORDN"]="按立";//接受宗教事务行为的宗教活动。
$factarray["PAGE"]="引文详情";//用于标识在引用的作品中可以找到信息的位置的数字或描述。
$factarray["PEDI"]="与父母关系";
$factarray["PLAC"]="地点";
$factarray["PHON"]="电话号码";
$factarray["POST"]="邮政编码";
$factarray["PROB"]="遗嘱认证";
$factarray["PROP"]="财产信息";
$factarray["PUBL"]="出版物";
$factarray["QUAY"]="数据质量";
$factarray["REPO"]="存储库";
$factarray["REFN"]="参考编号";
$factarray["RELA"]="关系";
$factarray["RELI"]="宗教";
$factarray["RESI"]="居住地";//住在一个地址一段时间的行为。
$factarray["RESN"]="限制";
$factarray["RETI"]="退休";
$factarray["RFN"]="记录文件编号";
$factarray["RIN"]="记录ID号";
$factarray["ROLE"]="角色";
$factarray["SEX"]="性别";
$factarray["SLGC"]="LDS子女密封";
$factarray["SLGS"]="LDSSpouseSealing";
$factarray["SOUR"]="来源";
$factarray["SPFX"]="姓氏前缀";
$factarray["SSN"]="社会安全号码";
$factarray["STAE"]="国家";
$factarray["STAT"]="状态";
$factarray["SUBM"]="提交者";
$factarray["SUBN"]="提交";
$factarray["SURN"]="姓氏";
$factarray["TEMP"]="神殿";
$factarray["TEXT"]="文本内容";
$factarray["TIME"]="时间";
$factarray["TITL"]="标题";
$factarray["TYPE"]="类型";
$factarray["WIFE"]="妻子";
$factarray["WILL"]="遗嘱";
$factarray["_EMAIL"]="电子邮件地址";
$factarray["EMAIL"]="电子邮件地址";
$factarray["_TODO"]="待办事项";
$factarray["_UID"]="唯一标识";
$factarray["_PRIM"]="突出显示的图像";
$factarray["_DBID"]="链接数据库ID";

//These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "医疗";
$factarray["_DEG"] = "程度";
$factarray["_MILT"] = "兵役";
$factarray["_SEPR"] = "分离";
$factarray["_DETS"] = "一个配偶去世";
$factarray["CITN"] = "公民身份";
$factarray["EMAL"]= "电子邮件";

//Other common customized facts
$factarray["_ADPF"] = "由父亲收养";
$factarray["_ADPM"] = "由母亲收养";
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
$factarray["FACT"] = "事实";
$factarray["WWW"] = "网站";
$factarray["MAP"] = "地图";
$factarray["LATI"] = "纬度";
$factarray["LONG"] = "经度";
$factarray["FONE"] = "发音";
$factarray["ROMN"] = "罗马化";
$factarray["_PRIM"] = "突出显示的图像";
$factarray["_DBID"] = "链接数据库ID";
//These facts are used in specific contexts
$factarray["STAT:DATE"] = "状态变更日期";
$factarray["DATA:DATE"] = "原始来源形成日期";
$factarray["NAME:_HEB"] = "希伯来名字";
$factarray["PLAC:_HEB"] = "希伯来语";
$factarray["TITL:_HEB"] = "希伯来语中的标题";
$factarray["NAME:ROMN"] = "罗马化名称";
$factarray["PLAC:ROMN"] = "罗马化的地点";
$factarray["TITL:ROMN"] = "罗马化的标题";
$factarray["NAME:FONE"] = "注音名称";
$factarray["PLAC:FONE"] = "拼音地点";
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
$factarray["BIRT:PLAC"] = "出生地点";
$factarray["BIRT:DATE"] = "生日日期";
$factarray["BIRT:SOUR"] = "出生记录来源";
$factarray["DEAT:DATE"] = "去世日期";
$factarray["DEAT:SOUR"] = "去世之源";
$factarray["DEAT:PLAC"] = "去世地点";
$factarray["CHR:PLAC"] = "洗礼之地";
$factarray["CHR:DATE"] = "洗礼日期";
$factarray["CHR:SOUR"] = "洗礼记录来源";
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
$factarray["BURI:DATE"] = "下葬日期";
$factarray["BURI:SOUR"] = "下葬记录源";
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
$factarray["_BURI_SPOU"] = "下葬配偶";
$factarray["_CREM_SPOU"] = "配偶火化";
$factarray["_CHR_CHIL"] = "洗礼孩子";
$factarray["_BAPM_CHIL"] = "孩子的洗礼";
$factarray["__BRTM_CHIL"] = "孩子的英国米拉";
$factarray["_ADOP_CHIL"] = "收养一个孩子";
$factarray["_MARB_CHIL"] = "孩子的婚姻";
$factarray["_BURI_CHIL"] = "下葬子女";
$factarray["_CREM_CHIL"] = "火葬孩子";
$factarray["_BIRT_GCHI"] = "孙子的诞生";
$factarray["_CHR_GCHI"] = "孙子的洗礼";
$factarray["_BAPM_GCHI"] = "孙子的洗礼";
$factarray["__BRTM_GCHI"] = "孙子的英国米拉";
$factarray["_ADOP_GCHI"] = "收养孙子";
$factarray["_MARR_GCHI"] = "孙子的婚姻";
$factarray["_MARB_GCHI"] = "孙子的婚姻";
$factarray["_DEAT_GCHI"] = "孙子之死";
$factarray["_BURI_GCHI"] = "下葬孙子";
$factarray["_CREM_GCHI"] = "孙子的火葬";
$factarray["_BIRT_GGCH"] = "曾孙的诞生";
$factarray["_CHR_GGCH"] = "曾孙子的洗礼";
$factarray["_BAPM_GGCH"] = "曾孙的洗礼";
$factarray["__BRTM_GGCH"] = "曾孙的英国米拉";
$factarray["_ADOP_GGCH"] = "收养曾孙";
$factarray["_MARR_GGCH"] = "曾孙的婚姻";
$factarray["_MARB_GGCH"] = "曾孙的婚姻";
$factarray["_DEAT_GGCH"] = "曾孙的去世";
$factarray["_BURI_GGCH"] = "下葬曾孙";
$factarray["_CREM_GGCH"] = "一个曾孙的火葬";
$factarray["_MARR_FATH"] = "父亲的婚姻";
$factarray["_MARB_FATH"] = "父亲的婚姻";
$factarray["_DEAT_FATH"] = "父亲的死";
$factarray["_BURI_FATH"] = "下葬父亲";
$factarray["_CREM_FATH"] = "父亲的火葬";
$factarray["_MARR_FAMC"] = "父母的婚姻";
$factarray["_MARB_FAMC"] = "父母的婚姻";
$factarray["_MARR_MOTH"] = "母亲的婚姻";
$factarray["_MARB_MOTH"] = "母亲的婚姻";
$factarray["_DEAT_MOTH"] = "母亲的死";
$factarray["_BURI_MOTH"] = "下葬母亲";
$factarray["_CREM_MOTH"] = "母亲的火葬";
$factarray["_BIRT_SIBL"] = "兄弟姐妹的诞生";
$factarray["_CHR_SIBL"] = "兄弟姐妹的洗礼";
$factarray["_BAPM_SIBL"] = "兄弟姐妹的洗礼";
$factarray["__BRTM_SIBL"] = "兄弟姐妹的兄弟姐妹";
$factarray["_ADOP_SIBL"] = "收养兄弟姐妹";
$factarray["_MARR_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_MARB_SIBL"] = "兄弟姐妹的婚姻";
$factarray["_DEAT_SIBL"] = "兄弟之死";
$factarray["_BURI_SIBL"] = "下葬兄弟姐妹";
$factarray["_CREM_SIBL"] = "兄弟姐妹的火葬";
$factarray["_BIRT_HSIB"] = "半兄弟的诞生";
$factarray["_CHR_HSIB"] = "半兄弟的洗礼";
$factarray["_BAPM_HSIB"] = "半兄弟的洗礼";
$factarray["__BRTM_HSIB"] = "半兄弟的英国米拉";
$factarray["_ADOP_HSIB"] = "收养半兄弟";
$factarray["_MARR_HSIB"] = "半兄弟的婚姻";
$factarray["_MARB_HSIB"] = "半兄弟的婚姻";
$factarray["_DEAT_HSIB"] = "半兄弟之死";
$factarray["_BURI_HSIB"] = "下葬半兄弟";
$factarray["_CREM_HSIB"] = "半兄弟的火葬";
$factarray["_BIRT_NEPH"] = "侄子或侄女的出生";
$factarray["_CHR_NEPH"] = "洗礼侄子或侄女";
$factarray["_BAPM_NEPH"] = "侄子或侄女的洗礼";
$factarray["__BRTM_NEPH"] = "侄子的英国米拉";
$factarray["_ADOP_NEPH"] = "收养侄子或侄女";
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
$factarray["_CREM_GGPA"] = "伟大的父母的火葬";
$factarray["_BIRT_FSIB"] = "父亲兄弟姐妹的诞生";
$factarray["_CHR_FSIB"] = "父亲兄弟姐妹的洗礼";
$factarray["_BAPM_FSIB"] = "父亲兄弟的洗礼";
$factarray["__BRTM_FSIB"] = "父亲兄弟姐妹的Brit Mila";
$factarray["_ADOP_FSIB"] = "收养父亲的兄弟姐妹";
$factarray["_MARR_FSIB"] = "父亲兄弟姐妹的婚姻";
$factarray["_MARB_FSIB"] = "父亲兄弟姐妹的婚姻";
$factarray["_DEAT_FSIB"] = "父亲的兄弟之死";
$factarray["_BURI_FSIB"] = "下葬父亲的兄弟姐妹";
$factarray["_CREM_FSIB"] = "父亲兄弟姐妹的火化";
$factarray["_BIRT_MSIB"] = "母亲兄弟姐妹的诞生";
$factarray["_CHR_MSIB"] = "母亲的兄弟姐妹的洗礼";
$factarray["_BAPM_MSIB"] = "母亲兄弟的洗礼";
$factarray["__BRTM_MSIB"] = "母亲兄弟姐妹的英国米拉";
$factarray["_ADOP_MSIB"] = "收养母亲的兄弟姐妹";
$factarray["_MARR_MSIB"] = "母亲兄弟姐妹的婚姻";
$factarray["_MARB_MSIB"] = "母亲兄弟姐妹的婚姻";
$factarray["_DEAT_MSIB"] = "母亲的兄弟之死";
$factarray["_BURI_MSIB"] = "下葬母亲的兄弟姐妹";
$factarray["_CREM_MSIB"] = "母亲兄弟姐妹的火化";
$factarray["_BIRT_COUS"] = "第一代堂兄的诞生";
$factarray["_CHR_COUS"] = "洗礼第一代堂兄";
$factarray["_BAPM_COUS"] = "第一代堂兄的洗礼";
$factarray["__BRTM_COUS"] = "第一个堂兄的英国米拉";
$factarray["_ADOP_COUS"] = "收养第一代堂兄";
$factarray["_MARR_COUS"] = "第一代表亲的婚姻";
$factarray["_MARB_COUS"] = "第一代表亲的婚姻";
$factarray["_DEAT_COUS"] = "第一代堂兄的去世";
$factarray["_BURI_COUS"] = "下葬第一代堂兄";
$factarray["_CREM_COUS"] = "第一代堂兄的火化";
$factarray["_FAMC_EMIG"] = "父母的移民";
$factarray["_FAMC_RESI"] = "父母居住";
//-- PGV Only facts
$factarray["_THUM"] = "总是使用主图像？";
$factarray["_PGVU"] = "更改人"; //最后改变了
$factarray["SERV"] = "远程服务器";

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
