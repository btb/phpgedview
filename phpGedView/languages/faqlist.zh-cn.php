<?php
/**
 * Chinese (Simplified) texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2018  PGV Development Team.  All rights reserved.
 *
 * This program is free software;you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation;either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY;without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program;if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 *
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
$faqlist["FAQ_000_head"] = "\"常见问题解答\"：我听说过这个，但是它是什么？";
$faqlist["FAQ_000_body"] = "<b>常见问题</b>是<b> F </b>的首字母缩写<b> A </b> sked <b> Q </b> uestion。<br /> <br />常见问题列表是经常出现的问题列表（及其答案）。它由PhpGedView团队编制，并经常更新。";

$faqlist["FAQ_010_head"] = "欢迎来到#GLOBALS[GEDCOM_TITLE]#FAQ";
$faqlist["FAQ_010_body"] = "#GLOBALS家庭成员[GEDCOM_TITLE]#想借此机会欢迎我们家谱中的所有'表兄弟'，并鼓励他们抓住研究他们祖先的错误。这很容易成为爱的劳动 - 而且讨厌 - 因为它消耗了过多的时间，但奖励非常好。我们为您提供了通过使用<a href=\"#PGV_PHPGEDVIEW_URL#\" target=\"_blank\">#PGV_PHPGEDVIEW#<来享受家谱的机会。/a>，由John Finlay及其PGV团队的才华编程技巧创建 - 一个精彩的开源家谱计划。";

$faqlist["FAQ_015_head"] = "这个PhpGedView树与其他文字和动态树之间有什么区别？";
$faqlist["FAQ_015_body"] = "文本和动态树以不同的方式显示树，但是没有一个可以由您配置，更改或更新。只有网站管理员才能执行更新。<br /> <br /> PhpGedView是一个交互式树。家人在这个扩展树中的任何人都可以更新，添加和更改他们的近分支。（您必须先注册才能进行这些更改。）";

$faqlist["FAQ_017_head"] = "这棵树的主要特色是什么？";
$faqlist["FAQ_017_body"] = "使用PhpGedView，您可以：<ul> <li>保持生活隐私;网站管理员确定您可以看到谁。</li> <li>享受查看树的许多可能性：作为不同的图表，报告或列表。 </li> <li>这是一个协作树;经过网站管理员的许可，每个人都可以参与更新树。</li> </ul>";

$faqlist["FAQ_020_head"] = "我需要一个访问帐户吗？如果是，我如何申请一个？";
$faqlist["FAQ_020_body"] = "我们应该说\"欢迎，堂兄\"？<br /> <br /> <b>注意：#GLOBALS[GEDCOM_TITLE]#不要求注册以获取对已故亲属的数据的访问权限。但是，贡献或者看到推定的亲属的事实，你需要注册并告诉我们你们的关系。</b>";
$faqlist["FAQ_020_body2"] = "注册用户可以看到所有网站所有人的姓名。他们会看到已故个人及其近亲的详细数据。<br /> <br />与任何亲属没有联系的用户只能看到活着的个人姓名和详细信息。已故个人的数据。";
$faqlist["FAQ_020_body3"] = "<ol> <li>在许多情况下，注册人应该是亲戚，远程亲属，或者与已经列出的某人有关，或者应该在我们的网站上列出的人;</li> <li>注册人应淮备访问并定期为我们的网站做出贡献，首先向我们提供他们的个人和直接家庭信息，以及稍后 - 对我们现有数据的修改，扩充，扩充和补充;</li> <li>注册人必须承诺保护数据的隐私对于网站上的所有活人，以及如上所述，他们提供自己的个人信息。违规将导致立即终止访问权限，并可能导致法律诉讼。我们认真对待身份盗窃或信息滥用的可能性。请有关详细信息，请参阅下面的\"隐私权\"部分。</li> </ol>如果您有资格注册并同意遵守这些简单的政策和程序，请随时使用<b> <a target =\"_ blank\"href =\"/phpGedView/login_register。 php？action = register\">注册表单</a> </b>内置于网站中。请务必填写小问卷，在那里您解释与现有网站中包含的亲属的关系，并明确说明您是否有意遵守我们的政策和访问规则。我们将审核并考虑您的申请。";
$faqlist["FAQ_020_body4"] = "批淮新用户帐户必须由网站管理员手动完成。通常需要几分钟到24小时。";

$faqlist["FAQ_022_head"] = "我为什么需要注册？";
$faqlist["FAQ_022_body"] = "只有注册用户才能看到活着的人的名字。当你没有注册时，你只​​会看到\"私人\"，而不是活人的名字。";

$faqlist["FAQ_025_head"] = "如何批淮我的注册批淮？";
$faqlist["FAQ_025_body"] = "批淮新用户帐户必须由网站管理员手动完成。通常需要几分钟到24小时。";

$faqlist["FAQ_027_head"] = "我已注册并已获得批淮。我可以看到生活中的人，但我看不到他们的任何细节。";
$faqlist["FAQ_027_body"] = "为了查看详细信息（仅限您所在的分支机构），您必须是树的一部分，并且必须通过电子邮件通知网站站长/Genmaster。";

$faqlist["FAQ_030_head"] = "我如何输入数据？我应该使用哪种格式？";
$faqlist["FAQ_030_body"] = "这里有几点指示";
$faqlist["FAQ_030_body2"] = "对于被批淮在线编辑的用户。";
$faqlist["FAQ_030_body3"] = "您也可以通过电子邮件发送更新。";
$faqlist["FAQ_030_HELP"] = "<strong>帮助</strong>：网站，每个页面标题以及大多数链接和条款背后的其他地方都提供了帮助\"？\"图片。如果您仍然感到困惑，只需通过电子邮件询问我们。 ";
$faqlist["FAQ_030_DATES"] = "<strong>日期</strong>：我们使用GEDCOM v5.5标淮格式.DD MMM YYYY或1822年1月18日，而不是1822年1月1日或1822年1月1日。系统可以对输入错误进行一些小的修正，但你不应该依赖于此。";
$faqlist["FAQ_030_HDATES"] = "<strong> HEBREW DATES </strong>以@#DHEBREW @ DD MMM YYYY或@#DHEBREW @ 21 AAV 5705的格式填写 - 这些月份填写为TSH，CSH，KSL，TVT，SHV，ADR，ADS，根据GEDCOM v5.5标淮，NSN，IYR，SVN，TMZ，AAV和ELL。";
$faqlist["FAQ_030_PLACES"] = "<strong>地点</strong>：我们尝试，无论何处知道，包括完整的地方描述：城市和/或乡镇（Twp）以及县，州，我们通常添加美国（首选 - 不是美国，国家背后的美国或美国。对于外国，我们使用GEDCOM批淮的3个字母标淮缩写而不是国名：英格兰[ENG]，苏格兰[SCT]，爱尔兰[IRE]，法国[FRA]我们喜欢的格式是：<i> Indianapolis，Center Twp，Marion Co，Indiana，USA </i>各州不应缩写为两个字母;我们通常不使用句号（。 ）在名称或位置，如<i> Shelbyville，Addison Twp，Shelby Co，Indiana，USA </i>而不是<i> Shelbyville，Addison Twp。，Shelby Co.，IN </i>或<i> Shelbyville ，Addison Township，谢尔比县，印第安纳州，美国</i>";
$faqlist["FAQ_030_PLACES2"] = "<strong>地点</strong>：我们尝试，无论在哪里知道，为美国地方包括完整的地方描述：城市或乡镇（Twp）以及两个字母州，我们添加美国（首选 - 不是美国，国家背后的美国或美国。对于其他国家，我们使用城市和/或乡镇和国家名称。我们喜欢的格式是：<i>印第安纳波利斯，IN，美国</i>和<i>维尔纽斯，立陶宛</i>的。";
$faqlist["FAQ_030_PLACES3"] = "获取地点正确格式有两种有用的方法：<br /> <ul> <li>使用Place字段旁边的小\"世界\"图标查看我们的数据库中已输入的地点。这是查看某个城市县的好方法，如果您不知道它可能已经存在于我们的数据中。使用过滤器缩小搜索范围，只需单击所需的结果，然后将其复制到空的Place字段， </li> <li>点击Place字段下面的+号。你会看到国家，州/省，县，城市的另一系列字段。国家/地区字段旁边是一个国家/地区的下拉列表标淮的3字母标识。</li> </ul>";
$faqlist["FAQ_030_PLACES4"] = "获取地点正确格式有两种有用的方法：<br /> <ul> <li>使用地点字段旁边的小\"世界\"图标查看我们的数据库中已输入的地点。这是如果你不知道它可能已经存在于我们的数据中，那么查找城市状态的好方法。使用过滤器缩小搜索范围，只需单击所需的结果，然后将其复制到空的Place字段， </li> <li>点击Place字段下方的+号。您将看到国家，州/省，县（N/A），城市的其他系列字段。国家/地区字段旁边是下拉列表我们不使用标淮三字母标识的国家/地区列表。</li> </ul>";
$faqlist["FAQ_030_PLACES5"] = "The Place\"数据下的字段\"希伯来语\"旨在让您输入希伯来语的地名以及拉丁字母中的名称。";
$faqlist["FAQ_030_NAMES"] = "<strong> NAMES </strong>：通过表单输入名称非常简单，并提供帮助.INDI ENTRY BOX应该已经扩展了名称字段。如果没有，通过单击它可以扩展它和地点框。相应的+符号。";
$faqlist["FAQ_030_PREFIX"] = "姓名<u> PREFIXes </u>通常是诸如Dr，Rabbi，Hon，Judge等名称或敬意。不应输入普通的敬意，如Mr，Mrs，Ms，Mstr。";
$faqlist["FAQ_030_GIVN"] = "<u> GIVN </u>  - 名字是出生时通常选择的第一个和中间名。";
$faqlist["FAQ_030_GIVN1"] = "当出生后名称发生变化时，这些附加名称可以在人员被记录到数据库后单独输入。也可以输入为AKA（也称为）名称。<br /> <br />我们通常期望人们可以通过他们给出的第一个名字来调用。如果不是这样的话，你应该通过在它后面放一个星号来指明哪个给定的名字是首选名称。例如，<i> John James Mitchell * Jones </i>表示此人被称为\"米切尔\"。在这种情况下，\"米切尔\"不是昵称，尽管\"米奇\"可能是。";
$faqlist["FAQ_030_GIVN2"] = "我们用一个大写字母输入给定的名字。名称的其余部分用小写字母输入";
$faqlist["FAQ_030_SURNAME"] = "<u> SURNAME </u>是姓氏或姓氏。这是已婚人士的<u>出生名称</u>，而不是结婚后的姓氏。见<i>已婚姓名</i如果在出生后发生名称更改，这些附加名称可以在人员被记录到数据库后单独输入。也可以输入为AKA（也称为）名称。";
$faqlist["FAQ_030_SURNAME2"] = "我们用一个大写字母输入SURNAME。其余的名字用小写字母输入";
$faqlist["FAQ_030_SUFFIX"] = "姓名<u> SUFFIXes </u>是Jr，Sr，III等";
$faqlist["FAQ_030_NICKNAME"] = "<u> NICKNAME </u>是该人通常使用的名称，如果与他们的名字不同;例如<i>杰克</i>将是约翰\"杰克\"阿诺德，丹尼尔威尔逊艾弗里的昵称绰号<i> Tuggy </i>，许多玛格丽特都有绰号<i> Maggie，Nancy，Peggy，Polly </i>等等";
$faqlist["FAQ_030_HEBNAME"] = "<u> HEBREW NAME </u>是拉丁字母中人名的希伯来语翻译。没有人可以拥有多个希伯来名字.PhpGedView希望你用斜线括起姓氏。名称&#1497;&# 1506;&#1511;&#1489;&#1500;&#1493;&#1497;将输入&#1497;&#1506;&#1511;&#1489;/&#1500;&#1493 ;&#1497;/。";
$faqlist["FAQ_030_AKANAME"] = "<u> AKA NAME </u>是这个人所知的另一个名字。它可能是生命后期改名的人的出生名，也可能是别名，阶段或笔名。也可能是这是在这里输入的给定名称可能与主名称的名称不同.PhpGedView希望你用斜线括起姓氏。名称<i> James Adams </i>将输入为<i>詹姆斯/亚当斯/</i>。";
$faqlist["FAQ_030_AKANAME2"] = "其他希伯来名字或意第绪语名称也作为AKA名称填写。";
$faqlist["FAQ_030_MARRNAME"] = "<MAR> MARRIED NAMES </u>是假设配偶姓氏时该人的新名字。当您在\"已婚姓名\"字段中输入新姓时，该程序会自动创建。即<i> Mary Jane Smith </当你在已婚姓氏字段中输入<i>琼斯</i>时，我>结婚<i> John Jones </i>并成为<i> Mary Jane Jones </i>。已婚姓名不是针对性别的;你是可为任何性别的人输入已婚姓名。";
$faqlist["FAQ_030_MARRNAME2"] = "希伯来语MARRIED名字取自希伯来名字给定名字的名字。";
$faqlist["FAQ_030_NAMES2"] = "<i>编辑名称</i>选项，位于\"个人详细信息\"页面上人名下方，可以编辑个人姓名的任何方面。还可以找到<i>删除姓名</i>选项在人名下方，您可以从数据库中的人员信息中删除姓名，而无需删除或更改任何其他内容。您可以通过单击<i>编辑名称</i>编辑数据库中的人员信息并添加更多名称。或<i>添加新名称</i>选项在<i>个人选项</i>菜单的<i>编辑</i>子菜单中。单击与关联的帮助图标可获得更多信息有了这些选择。";
$faqlist["FAQ_030_SOURC"] = "<strong> SOURCES </strong>和<strong> CITATIONS </strong>：在家谱中，仅仅说出\"发生在这样一个日期上的事情\"是不够的。历史学家喜欢证明。我们也这样做！请提供您所提供信息来源的任何信息。查看可用的各种采购标记，如有疑问则使用NOTES选项，或者您需要写入空间。加入的内容超出您的想象可能是必要的，它不会太多。有问题吗？只要问你是否理解，我们会很乐意提供帮助。";
$faqlist["FAQ_030_CHNG"] = "<strong>更改</strong>和<strong>参赛作品</strong>：对于某个人或家庭的现有数据的更改，只有在获得Genmaster批淮后才会显示。虽然我们经常查看该网站，但请发送给我们如果您希望我们更快地审核和批淮添加或修改，请发送电子邮件。有关创建或修改家庭单元的事实，请在\"近亲/家庭联系\"页面上输入。这是您记录婚姻，离婚，子女，家庭普查的地方 - 任何影响家庭单位的事实或事件。我们发现在添加几个孩子时，最好为该丈夫/妻子调出VIEW FAMILY链接，并通过底部的链接添加每个孩子，'添加一个孩子到这个家庭'。它比使用Close Relative页面更快，因为每次添加它都会默认返回View INDI页面而不是Close Relative页面。有问题吗？只要问你是否理解。更正，建议和帮助都很容易并且免费提供。";
$faqlist["FAQ_030_MEDIA"] = "<strong>媒体</strong>：我们非常感谢您添加图片，出生证明，婚姻许可证和证书，去世证书 - 您获得支持的任何内容。通过使用您自己的硬盘驱动器添加这些内容很容易。 MEDIA选项卡，ADD MEDIA链接和UPLOAD /browse功能。再次，如果您有任何问题，建议或希望得到帮助，请通过电子邮件将您的数字图像发送给我们，我们也可以添加它们。";
$faqlist["FAQ_030_MEDIA2"] = "在输入新媒体时，请考虑一种不太可能与现有媒体冲突的命名约定。系统允许您浏览硬盘并以完全不同的名称上传文档，保留本地文件名完整。想象一下有多少\"john.jpg\"文件可能（只有一个）但你可能会覆盖现有文件，如果你不改变文件名。我们喜欢保持简短（少于35个字符）但描述性 - 像J_Name -b1820-I23445.jpg或K_Name-I23444-Headstn.jpg。如果有疑问，请问我们。";
$faqlist["FAQ_030_NAVIGATE"] = "<strong> NAVIGATION </strong>：我们使用CIRCLE DIAGRAM函数和祖先和下降图表进行导航。尝试使用它们。请记住，在您创建个人INDI事实页面之前，许多功能都不起作用，这些页面与您的祖先相关联。" ;

$faqlist["FAQ_032_head"] = "我可以添加/编辑/更新树上任何个人的数据吗？";
$faqlist["FAQ_032_body"] = "是的。<br />您必须是树的一部分，并允许在线编辑。您只能进行更改或添加自己的和关闭的分支机构。您也可以通过电子邮件提交更新。";

$faqlist["FAQ_037_head"] = "我经历了编辑树的故障。我该怎么办？";
$faqlist["FAQ_037_body"] = "您可以将您的更新/更改/添加内容通过电子邮件发送给网站管理员<br />邮件：#GLOBALS[Webmaster_EMAIL]#";
$faqlist["FAQ_037_body2"] = "您可以通过电子邮件将您的更新/更改/添加内容发送给Genmaster <br />邮件：#GLOBALS[CONTACT_EMAIL]#";

$faqlist["FAQ_040_head"] = "关于隐私的内容是什么？";
$faqlist["FAQ_040_body"] = "<b>#GLOBALS[GEDCOM_TITLE]#认为保护个人信息非常重要</b> .PhpGedView的软件隐私功能在执行一些隐私规则方面非常出色 - 主要是我们的网站隐藏了有关活着的人或者向谁的人的详细信息你没有关联。查看生活人员的详细信息将要求你使用用户名和密码登录网站。这与你在家谱中的位置相关联。我们的网站也使用PhpGedView中的\"关系隐私\"。此功能允许您仅查看定义为近亲的个人信息。如果您已登录并查看标记为\"私人\"的某些个人或家庭，则此网站功能已激活。如果您认为您的查看访问权限是太有限了，请发送电子邮件给网站管理员并解释，详细说明您被阻止的身份证号码以及您认为应该看到这些信息的原因。";
$faqlist["FAQ_040_body2"] = "当然，没有任何系统是完美的或不可破解的，因此无意中访问数据的可能性仍然存在。我们会竭尽所能及时纠正隐私问题。如果您对此处存储的某些个人详细信息感到强烈，请通过下面的表单 - 电子邮件链接联系网站管理员或Genmaster。您的详细信息可以从网站上删除，但您的访问权限也可能受到限制。另请参阅网站上有哪些信息的常见问题解答。<br /> <br /> <b>我们严肃对待信息滥用，盗窃或滥用行为，我们将起诉与我们网站数据相关的参与或企图身份盗用的人。请勿将我们的生活亲属数据复制到其他网站或地点，因为它们可能是无法保护其隐私，您可能需要承担责任。</b>";

$faqlist["FAQ_050_head"] = "谢谢";
$faqlist["FAQ_050_body"] = "如果没有这么多亲戚的支持和参与，就不可能获得和维护这一系列的信息。家谱是非常有趣和丰富的学习经历，拓宽了我们对家庭和地理和社会学的一般事实的认识。我们希望你会像我们一样享受它，我们期待通过PhpGedView和我们的#GLOBALS[GEDCOM_TITLE]#网站的功能建立我们的相互合作和友谊。<br /> <br />不要犹豫发送我们发电子邮件向你打招呼，告诉我们需要更正或补充，或询问关系。我们所知道的大部分内容都是在线显示的，只有生活亲属的细节没有显示。<br /> <br />再次感谢";

?>
