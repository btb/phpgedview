<?php

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$maxchar = 7;
$dmcoding = array();
$dmcoding["A"] = array(0, -1, -1);
$dmcoding["À"] = array(0, -1, -1);
$dmcoding["Á"] = array(0, -1, -1);
$dmcoding["Â"] = array(0, -1, -1);
$dmcoding["Ã"] = array(0, -1, -1);
$dmcoding["Ä"] = array(0, 1, -1, 0, -1, -1);
$dmcoding["Å"] = array(0, -1, -1);
$dmcoding["Ă"] = array(0, -1, -1);
$dmcoding["Ą"] = array(-1, -1, -1, -1, -1, 6);
$dmcoding["Ạ"] = array(0, -1, -1);
$dmcoding["Ả"] = array(0, -1, -1);
$dmcoding["Ấ"] = array(0, -1, -1);
$dmcoding["Ầ"] = array(0, -1, -1);
$dmcoding["Ẩ"] = array(0, -1, -1);
$dmcoding["Ẫ"] = array(0, -1, -1);
$dmcoding["Ậ"] = array(0, -1, -1);
$dmcoding["Ắ"] = array(0, -1, -1);
$dmcoding["Ằ"] = array(0, -1, -1);
$dmcoding["Ẳ"] = array(0, -1, -1);
$dmcoding["Ẵ"] = array(0, -1, -1);
$dmcoding["Ặ"] = array(0, -1, -1);
$dmcoding["AE"] = array(0, 1, -1);
$dmcoding["Æ"] = array(0, 1, -1);
$dmcoding["AI"] = array(0, 1, -1);
$dmcoding["AJ"] = array(0, 1, -1);
$dmcoding["AU"] = array(0, 7, -1);
$dmcoding["AV"] = array(0, 7, -1, 7, 7, 7);
$dmcoding["ÄU"] = array(0, 1, -1);
$dmcoding["AY"] = array(0, 1, -1);
$dmcoding["B"] = array(7, 7, 7);
$dmcoding["C"] = array(5, 5, 5, 4, 4, 4);
$dmcoding["Ć"] = array(4, 4, 4);
$dmcoding["Č"] = array(4, 4, 4);
$dmcoding["Ç"] = array(4, 4, 4);
$dmcoding["CH"] = array(5, 5, 5, 4, 4, 4);
$dmcoding["CHS"] = array(5, 54, 54);
$dmcoding["CK"] = array(5, 5, 5, 45, 45, 45);
$dmcoding["CCS"] = array(4, 4, 4);
$dmcoding["CS"] = array(4, 4, 4);
$dmcoding["CSZ"] = array(4, 4, 4);
$dmcoding["CZ"] = array(4, 4, 4);
$dmcoding["CZS"] = array(4, 4, 4);
$dmcoding["D"] = array(3, 3, 3);
$dmcoding["Ď"] = array(3, 3, 3);
$dmcoding["Đ"] = array(3, 3, 3);
$dmcoding["DRS"] = array(4, 4, 4);
$dmcoding["DRZ"] = array(4, 4, 4);
$dmcoding["DS"] = array(4, 4, 4);
$dmcoding["DSH"] = array(4, 4, 4);
$dmcoding["DSZ"] = array(4, 4, 4);
$dmcoding["DT"] = array(3, 3, 3);
$dmcoding["DDZ"] = array(4, 4, 4);
$dmcoding["DDZS"] = array(4, 4, 4);
$dmcoding["DZ"] = array(4, 4, 4);
$dmcoding["DŹ"] = array(4, 4, 4);
$dmcoding["DŻ"] = array(4, 4, 4);
$dmcoding["DZH"] = array(4, 4, 4);
$dmcoding["DZS"] = array(4, 4, 4);
$dmcoding["E"] = array(0, -1, -1);
$dmcoding["È"] = array(0, -1, -1);
$dmcoding["É"] = array(0, -1, -1);
$dmcoding["Ê"] = array(0, -1, -1);
$dmcoding["Ë"] = array(0, -1, -1);
$dmcoding["Ĕ"] = array(0, -1, -1);
$dmcoding["Ė"] = array(0, -1, -1);
$dmcoding["Ę"] = array(-1, -1, 6, -1, -1, -1);
$dmcoding["Ẹ"] = array(0, -1, -1);
$dmcoding["Ẻ"] = array(0, -1, -1);
$dmcoding["Ẽ"] = array(0, -1, -1);
$dmcoding["Ế"] = array(0, -1, -1);
$dmcoding["Ề"] = array(0, -1, -1);
$dmcoding["Ể"] = array(0, -1, -1);
$dmcoding["Ễ"] = array(0, -1, -1);
$dmcoding["Ệ"] = array(0, -1, -1);
$dmcoding["EAU"] = array(0, -1, -1);
$dmcoding["EI"] = array(0, 1, -1);
$dmcoding["EJ"] = array(0, 1, -1);
$dmcoding["EU"] = array(1, 1, -1);
$dmcoding["EY"] = array(0, 1, -1);
$dmcoding["F"] = array(7, 7, 7);
$dmcoding["FB"] = array(7, 7, 7);
$dmcoding["G"] = array(5, 5, 5, 4, 4, 4);
$dmcoding["Ğ"] = array(-1, -1, -1);
$dmcoding["GGY"] = array(5, 5, 5);
$dmcoding["GY"] = array(5, 5, 5);
$dmcoding["H"] = array(5, 5, -1, 5, 5, 5);
$dmcoding["I"] = array(0, -1, -1);
$dmcoding["Ì"] = array(0, -1, -1);
$dmcoding["Í"] = array(0, -1, -1);
$dmcoding["Î"] = array(0, -1, -1);
$dmcoding["Ï"] = array(0, -1, -1);
$dmcoding["Ĩ"] = array(0, -1, -1);
$dmcoding["Į"] = array(0, -1, -1);
$dmcoding["İ"] = array(0, -1, -1);
$dmcoding["Ỉ"] = array(0, -1, -1);
$dmcoding["Ị"] = array(0, -1, -1);
$dmcoding["IA"] = array(1, -1, -1);
$dmcoding["IE"] = array(1, -1, -1);
$dmcoding["IO"] = array(1, -1, -1);
$dmcoding["IU"] = array(1, -1, -1);
$dmcoding["J"] = array(1, -1, -1, 4, 4, 4, 5, 5, -1);
$dmcoding["K"] = array(5, 5, 5);
$dmcoding["KH"] = array(5, 5, 5);
$dmcoding["KS"] = array(5, 54, 54);
$dmcoding["L"] = array(8, 8, 8);
$dmcoding["Ľ"] = array(8, 8, 8);
$dmcoding["Ĺ"] = array(8, 8, 8);
$dmcoding["Ł"] = array(7, 7, 7, 8, 8, 8);
$dmcoding["LL"] = array(8, 8, 8, 58, 8, 8, 1, -1, -1);
$dmcoding["LLY"] = array(8, 8, 8, 1, -1, -1);
$dmcoding["LY"] = array(8, 8, 8, 1, -1, -1);
$dmcoding["M"] = array(6, 6, 6);
$dmcoding["MĔ"] = array(66, 66, 66);
$dmcoding["MN"] = array(66, 66, 66);
$dmcoding["N"] = array(6, 6, 6);
$dmcoding["Ń"] = array(6, 6, 6);
$dmcoding["Ň"] = array(6, 6, 6);
$dmcoding["Ñ"] = array(6, 6, 6);
$dmcoding["NM"] = array(66, 66, 66);
$dmcoding["O"] = array(0, -1, -1);
$dmcoding["Ò"] = array(0, -1, -1);
$dmcoding["Ó"] = array(0, -1, -1);
$dmcoding["Ô"] = array(0, -1, -1);
$dmcoding["Õ"] = array(0, -1, -1);
$dmcoding["Ö"] = array(0, -1, -1);
$dmcoding["Ø"] = array(0, -1, -1);
$dmcoding["Ő"] = array(0, -1, -1);
$dmcoding["Œ"] = array(0, -1, -1);
$dmcoding["Ơ"] = array(0, -1, -1);
$dmcoding["Ọ"] = array(0, -1, -1);
$dmcoding["Ỏ"] = array(0, -1, -1);
$dmcoding["Ố"] = array(0, -1, -1);
$dmcoding["Ồ"] = array(0, -1, -1);
$dmcoding["Ổ"] = array(0, -1, -1);
$dmcoding["Ỗ"] = array(0, -1, -1);
$dmcoding["Ộ"] = array(0, -1, -1);
$dmcoding["Ớ"] = array(0, -1, -1);
$dmcoding["Ờ"] = array(0, -1, -1);
$dmcoding["Ở"] = array(0, -1, -1);
$dmcoding["Ỡ"] = array(0, -1, -1);
$dmcoding["Ợ"] = array(0, -1, -1);
$dmcoding["OE"] = array(0, -1, -1);
$dmcoding["OI"] = array(0, 1, -1);
$dmcoding["OJ"] = array(0, 1, -1);
$dmcoding["OU"] = array(0, -1, -1);
$dmcoding["OY"] = array(0, 1, -1);
$dmcoding["P"] = array(7, 7, 7);
$dmcoding["PF"] = array(7, 7, 7);
$dmcoding["PH"] = array(7, 7, 7);
$dmcoding["Q"] = array(5, 5, 5);
$dmcoding["R"] = array(9, 9, 9);
$dmcoding["Ř"] = array(4, 4, 4);
$dmcoding["RS"] = array(4, 4, 4, 94, 94, 94);
$dmcoding["RZ"] = array(4, 4, 4, 94, 94, 94);
$dmcoding["S"] = array(4, 4, 4);
$dmcoding["Ś"] = array(4, 4, 4);
$dmcoding["Š"] = array(4, 4, 4);
$dmcoding["Ş"] = array(4, 4, 4);
$dmcoding["SC"] = array(2, 4, 4);
$dmcoding["ŠČ"] = array(2, 4, 4);
$dmcoding["SCH"] = array(4, 4, 4);
$dmcoding["SCHD"] = array(2, 43, 43);
$dmcoding["SCHT"] = array(2, 43, 43);
$dmcoding["SCHTCH"] = array(2, 4, 4);
$dmcoding["SCHTSCH"] = array(2, 4, 4);
$dmcoding["SCHTSH"] = array(2, 4, 4);
$dmcoding["SD"] = array(2, 43, 43);
$dmcoding["SH"] = array(4, 4, 4);
$dmcoding["SHCH"] = array(2, 4, 4);
$dmcoding["SHD"] = array(2, 43, 43);
$dmcoding["SHT"] = array(2, 43, 43);
$dmcoding["SHTCH"] = array(2, 4, 4);
$dmcoding["SHTSH"] = array(2, 4, 4);
$dmcoding["ß"] = array(-1, 4, 4);
$dmcoding["ST"] = array(2, 43, 43);
$dmcoding["STCH"] = array(2, 4, 4);
$dmcoding["STRS"] = array(2, 4, 4);
$dmcoding["STRZ"] = array(2, 4, 4);
$dmcoding["STSCH"] = array(2, 4, 4);
$dmcoding["STSH"] = array(2, 4, 4);
$dmcoding["SSZ"] = array(4, 4, 4);
$dmcoding["SZ"] = array(4, 4, 4);
$dmcoding["SZCS"] = array(2, 4, 4);
$dmcoding["SZCZ"] = array(2, 4, 4);
$dmcoding["SZD"] = array(2, 43, 43);
$dmcoding["SZT"] = array(2, 43, 43);
$dmcoding["T"] = array(3, 3, 3);
$dmcoding["Ť"] = array(3, 3, 3);
$dmcoding["Ţ"] = array(3, 3, 3, 4, 4, 4);
$dmcoding["TC"] = array(4, 4, 4);
$dmcoding["TCH"] = array(4, 4, 4);
$dmcoding["TH"] = array(3, 3, 3);
$dmcoding["TRS"] = array(4, 4, 4);
$dmcoding["TRZ"] = array(4, 4, 4);
$dmcoding["TS"] = array(4, 4, 4);
$dmcoding["TSCH"] = array(4, 4, 4);
$dmcoding["TSH"] = array(4, 4, 4);
$dmcoding["TSZ"] = array(4, 4, 4);
$dmcoding["TTCH"] = array(4, 4, 4);
$dmcoding["TTS"] = array(4, 4, 4);
$dmcoding["TTSCH"] = array(4, 4, 4);
$dmcoding["TTSZ"] = array(4, 4, 4);
$dmcoding["TTZ"] = array(4, 4, 4);
$dmcoding["TZ"] = array(4, 4, 4);
$dmcoding["TZS"] = array(4, 4, 4);
$dmcoding["U"] = array(0, -1, -1);
$dmcoding["Ù"] = array(0, -1, -1);
$dmcoding["Ú"] = array(0, -1, -1);
$dmcoding["Û"] = array(0, -1, -1);
$dmcoding["Ü"] = array(0, -1, -1);
$dmcoding["Ũ"] = array(0, -1, -1);
$dmcoding["Ū"] = array(0, -1, -1);
$dmcoding["Ů"] = array(0, -1, -1);
$dmcoding["Ű"] = array(0, -1, -1);
$dmcoding["Ų"] = array(0, -1, -1);
$dmcoding["Ư"] = array(0, -1, -1);
$dmcoding["Ụ"] = array(0, -1, -1);
$dmcoding["Ủ"] = array(0, -1, -1);
$dmcoding["Ứ"] = array(0, -1, -1);
$dmcoding["Ừ"] = array(0, -1, -1);
$dmcoding["Ử"] = array(0, -1, -1);
$dmcoding["Ữ"] = array(0, -1, -1);
$dmcoding["Ự"] = array(0, -1, -1);
$dmcoding["UE"] = array(0, -1, -1);
$dmcoding["UI"] = array(0, 1, -1);
$dmcoding["UJ"] = array(0, 1, -1);
$dmcoding["UY"] = array(0, 1, -1);
$dmcoding["UW"] = array(0, 1, -1, 0, 7, 7);
$dmcoding["V"] = array(7, 7, 7);
$dmcoding["W"] = array(7, 7, 7, 7, -1, -1);
$dmcoding["X"] = array(5, 54, 54);
$dmcoding["Y"] = array(1, -1, -1);
$dmcoding["Ý"] = array(1, -1, -1);
$dmcoding["Ỳ"] = array(1, -1, -1);
$dmcoding["Ỵ"] = array(1, -1, -1);
$dmcoding["Ỷ"] = array(1, -1, -1);
$dmcoding["Ỹ"] = array(1, -1, -1);
$dmcoding["Z"] = array(4, 4, 4);
$dmcoding["Ź"] = array(4, 4, 4);
$dmcoding["Ż"] = array(4, 4, 4);
$dmcoding["Ž"] = array(4, 4, 4);
$dmcoding["ZD"] = array(2, 43, 43);
$dmcoding["ZDZ"] = array(2, 4, 4);
$dmcoding["ZDZH"] = array(2, 4, 4);
$dmcoding["ZH"] = array(4, 4, 4);
$dmcoding["ZHD"] = array(2, 43, 43);
$dmcoding["ZHDZH"] = array(2, 4, 4);
$dmcoding["ZS"] = array(4, 4, 4);
$dmcoding["ZSCH"] = array(4, 4, 4);
$dmcoding["ZSH"] = array(4, 4, 4);
$dmcoding["ZZS"] = array(4, 4, 4);
$dmcoding["А"] = array(0, -1, -1);
$dmcoding["Б"] = array(7, 7, 7);
$dmcoding["В"] = array(7, 7, 7);
$dmcoding["Г"] = array(5, 5, 5);
$dmcoding["Д"] = array(3, 3, 3);
$dmcoding["ДЗ"] = array(4, 4, 4);
$dmcoding["Е"] = array(0, -1, -1);
$dmcoding["Ё"] = array(0, -1, -1);
$dmcoding["Ж"] = array(4, 4, 4);
$dmcoding["З"] = array(4, 4, 4);
$dmcoding["И"] = array(0, -1, -1);
$dmcoding["Й"] = array(1, -1, -1, 4, 4, 4);
$dmcoding["К"] = array(5, 5, 5);
$dmcoding["Л"] = array(8, 8, 8);
$dmcoding["М"] = array(6, 6, 6);
$dmcoding["Н"] = array(6, 6, 6);
$dmcoding["О"] = array(0, -1, -1);
$dmcoding["П"] = array(7, 7, 7);
$dmcoding["Р"] = array(9, 9, 9);
$dmcoding["РЖ"] = array(4, 4, 4);
$dmcoding["С"] = array(4, 4, 4);
$dmcoding["Т"] = array(3, 3, 3);
$dmcoding["У"] = array(0, -1, -1);
$dmcoding["Ф"] = array(7, 7, 7);
$dmcoding["Х"] = array(5, 5, 5);
$dmcoding["Ц"] = array(4, 4, 4);
$dmcoding["Ч"] = array(4, 4, 4);
$dmcoding["Ш"] = array(4, 4, 4);
$dmcoding["Щ"] = array(2, 4, 4);
$dmcoding["Ъ"] = array(-1, -1, -1);
$dmcoding["Ы"] = array(1, -1, -1);
$dmcoding["Ь"] = array(-1, -1, -1);
$dmcoding["Э"] = array(0, -1, -1);
$dmcoding["Ю"] = array(1, -1, -1);
$dmcoding["Я"] = array(1, -1, -1);
$dmcoding["Α"] = array(0, -1, -1);
$dmcoding["Ά"] = array(0, -1, -1);
$dmcoding["ΑΙ"] = array(0, 1, -1);
$dmcoding["ΑΥ"] = array(0, 1, -1);
$dmcoding["Β"] = array(7, 7, 7);
$dmcoding["Γ"] = array(5, 5, 5);
$dmcoding["Δ"] = array(3, 3, 3);
$dmcoding["Ε"] = array(0, -1, -1);
$dmcoding["Έ"] = array(0, -1, -1);
$dmcoding["ΕΙ"] = array(0, 1, -1);
$dmcoding["ΕΥ"] = array(1, 1, -1);
$dmcoding["Ζ"] = array(4, 4, 4);
$dmcoding["Η"] = array(0, -1, -1);
$dmcoding["Ή"] = array(0, -1, -1);
$dmcoding["Θ"] = array(3, 3, 3);
$dmcoding["Ι"] = array(0, -1, -1);
$dmcoding["Ί"] = array(0, -1, -1);
$dmcoding["Ϊ"] = array(0, -1, -1);
$dmcoding["ΐ"] = array(0, -1, -1);
$dmcoding["Κ"] = array(5, 5, 5);
$dmcoding["Λ"] = array(8, 8, 8);
$dmcoding["Μ"] = array(6, 6, 6);
$dmcoding["ΜΠ"] = array(7, 7, 7);
$dmcoding["Ν"] = array(6, 6, 6);
$dmcoding["ΝΤ"] = array(3, 3, 3);
$dmcoding["Ξ"] = array(5, 54, 54);
$dmcoding["Ο"] = array(0, -1, -1);
$dmcoding["Ό"] = array(0, -1, -1);
$dmcoding["ΟΙ"] = array(0, 1, -1);
$dmcoding["ΟΥ"] = array(0, 1, -1);
$dmcoding["Π"] = array(7, 7, 7);
$dmcoding["Ρ"] = array(9, 9, 9);
$dmcoding["Σ"] = array(4, 4, 4);
$dmcoding["ς"] = array(-1, -1, 4);
$dmcoding["Τ"] = array(3, 3, 3);
$dmcoding["ΤΖ"] = array(4, 4, 4);
$dmcoding["ΤΣ"] = array(4, 4, 4);
$dmcoding["Υ"] = array(1, -1, -1);
$dmcoding["Ύ"] = array(1, -1, -1);
$dmcoding["Ϋ"] = array(1, -1, -1);
$dmcoding["ΰ"] = array(1, -1, -1);
$dmcoding["ΥΚ"] = array(5, 5, 5);
$dmcoding["ΥΥ"] = array(65, 65, 65);
$dmcoding["Φ"] = array(7, 7, 7);
$dmcoding["Χ"] = array(5, 5, 5);
$dmcoding["Ψ"] = array(7, 7, 7);
$dmcoding["Ω"] = array(0, -1, -1);
$dmcoding["Ώ"] = array(0, -1, -1);
$dmcoding["א"] = array(0, -1, -1);
$dmcoding["או"] = array(0, 7, -1);
$dmcoding["אג"] = array(4, 4, 4, 5, 5, 5, 34, 34, 34);
$dmcoding["בב"] = array(77, 77, 77);
$dmcoding["ב"] = array(7, 7, 7);
$dmcoding["גג"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["גד"] = array(43, 43, 43, 53, 53, 53);
$dmcoding["גה"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["גז"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["גח"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["גכ"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["גך"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["גצ"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["גץ"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["גק"] = array(45, 45, 45, 54, 54, 54);
$dmcoding["גש"] = array(44, 44, 44, 54, 54, 54);
$dmcoding["גת"] = array(43, 43, 43, 53, 53, 53);
$dmcoding["ג"] = array(4, 4, 4, 5, 5, 5);
$dmcoding["דז"] = array(4, 4, 4);
$dmcoding["דד"] = array(33, 33, 33);
$dmcoding["דט"] = array(33, 33, 33);
$dmcoding["דש"] = array(4, 4, 4);
$dmcoding["דצ"] = array(4, 4, 4);
$dmcoding["דץ"] = array(4, 4, 4);
$dmcoding["ד"] = array(3, 3, 3);
$dmcoding["הג"] = array(54, 54, 54, 55, 55, 55);
$dmcoding["הכ"] = array(55, 55, 55);
$dmcoding["הח"] = array(55, 55, 55);
$dmcoding["הק"] = array(55, 55, 55, 5, 5, 5);
$dmcoding["ה"] = array(5, 5, -1);
$dmcoding["וי"] = array(-1, -1, -1, 7, 7, 7);
$dmcoding["ו"] = array(7, 7, 7, 7, -1, -1);
$dmcoding["וו"] = array(7, 7, 7, 7, -1, -1);
$dmcoding["וופ"] = array(7, 7, 7, 77, 77, 77);
$dmcoding["זש"] = array(4, 4, 4, 44, 44, 44);
$dmcoding["זדז"] = array(2, 4, 4);
$dmcoding["ז"] = array(4, 4, 4);
$dmcoding["זג"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["זז"] = array(44, 44, 44);
$dmcoding["זס"] = array(44, 44, 44);
$dmcoding["זצ"] = array(44, 44, 44);
$dmcoding["זץ"] = array(44, 44, 44);
$dmcoding["חג"] = array(54, 54, 54, 53, 53, 53);
$dmcoding["חח"] = array(55, 55, 55);
$dmcoding["חק"] = array(55, 55, 55, 5, 5, 5);
$dmcoding["חכ"] = array(45, 45, 45, 55, 55, 55);
$dmcoding["חס"] = array(5, 54, 54);
$dmcoding["חש"] = array(5, 54, 54);
$dmcoding["ח"] = array(5, 5, 5);
$dmcoding["טש"] = array(4, 4, 4);
$dmcoding["טד"] = array(33, 33, 33);
$dmcoding["טי"] = array(3, 3, 3, 4, 4, 4, 3, 3, 34);
$dmcoding["טת"] = array(33, 33, 33);
$dmcoding["ט"] = array(3, 3, 3);
$dmcoding["י"] = array(1, -1, -1);
$dmcoding["יא"] = array(1, -1, -1, 1, 1, 1);
$dmcoding["כג"] = array(55, 55, 55, 54, 54, 54);
$dmcoding["כש"] = array(5, 54, 54);
$dmcoding["כס"] = array(5, 54, 54);
$dmcoding["כ"] = array(5, 5, 5);
$dmcoding["כח"] = array(55, 55, 55, 5, 5, 5);
$dmcoding["ך"] = array(-1, 5, 5);
$dmcoding["ל"] = array(8, 8, 8);
$dmcoding["לל"] = array(88, 88, 88, 8, 8, 8);
$dmcoding["מנ"] = array(66, 66, 66);
$dmcoding["מן"] = array(66, 66, 66);
$dmcoding["ממ"] = array(66, 66, 66);
$dmcoding["מ"] = array(6, 6, 6);
$dmcoding["ם"] = array(-1, 6, 6);
$dmcoding["נמ"] = array(66, 66, 66);
$dmcoding["נם"] = array(66, 66, 66);
$dmcoding["ננ"] = array(66, 66, 66);
$dmcoding["נ"] = array(6, 6, 6);
$dmcoding["ן"] = array(-1, 6, 6);
$dmcoding["סתש"] = array(2, 4, 4);
$dmcoding["סתז"] = array(2, 4, 4);
$dmcoding["סטז"] = array(2, 4, 4);
$dmcoding["סטש"] = array(2, 4, 4);
$dmcoding["סצד"] = array(2, 4, 4);
$dmcoding["סט"] = array(2, 4, 4, 43, 43, 43);
$dmcoding["סת"] = array(2, 4, 4, 43, 43, 43);
$dmcoding["סג"] = array(44, 44, 44, 4, 4, 4);
$dmcoding["סס"] = array(44, 44, 44);
$dmcoding["סצ"] = array(44, 44, 44);
$dmcoding["סץ"] = array(44, 44, 44);
$dmcoding["סז"] = array(44, 44, 44);
$dmcoding["סש"] = array(44, 44, 44);
$dmcoding["ס"] = array(4, 4, 4);
$dmcoding["ע"] = array(0, -1, -1);
$dmcoding["פב"] = array(7, 7, 7, 77, 77, 77);
$dmcoding["פוו"] = array(7, 7, 7, 77, 77, 77);
$dmcoding["פפ"] = array(7, 7, 7, 77, 77, 77);
$dmcoding["פ"] = array(7, 7, 7);
$dmcoding["ף"] = array(-1, 7, 7);
$dmcoding["צג"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["צז"] = array(44, 44, 44);
$dmcoding["צס"] = array(44, 44, 44);
$dmcoding["צצ"] = array(44, 44, 44);
$dmcoding["צץ"] = array(44, 44, 44);
$dmcoding["צש"] = array(44, 44, 44, 4, 4, 4, 5, 5, 5);
$dmcoding["צ"] = array(4, 4, 4, 5, 5, 5);
$dmcoding["ץ"] = array(-1, 4, 4);
$dmcoding["קה"] = array(55, 55, 5);
$dmcoding["קס"] = array(5, 54, 54);
$dmcoding["קש"] = array(5, 54, 54);
$dmcoding["קק"] = array(55, 55, 55);
$dmcoding["קח"] = array(55, 55, 55);
$dmcoding["קכ"] = array(55, 55, 55);
$dmcoding["קך"] = array(55, 55, 55);
$dmcoding["קג"] = array(55, 55, 55, 54, 54, 54);
$dmcoding["ק"] = array(5, 5, 5);
$dmcoding["רר"] = array(99, 99, 99, 9, 9, 9);
$dmcoding["ר"] = array(9, 9, 9);
$dmcoding["שטז"] = array(2, 4, 4);
$dmcoding["שתש"] = array(2, 4, 4);
$dmcoding["שתז"] = array(2, 4, 4);
$dmcoding["שטש"] = array(2, 4, 4);
$dmcoding["שד"] = array(2, 43, 43);
$dmcoding["שז"] = array(44, 44, 44);
$dmcoding["שס"] = array(44, 44, 44);
$dmcoding["שת"] = array(2, 43, 43);
$dmcoding["שג"] = array(4, 4, 4, 44, 44, 44, 4, 43, 43);
$dmcoding["שט"] = array(2, 43, 43, 44, 44, 44);
$dmcoding["שצ"] = array(44, 44, 44, 45, 45, 45);
$dmcoding["שץ"] = array(44, -1, 44, 45, -1, 45);
$dmcoding["שש"] = array(44, 44, 44);
$dmcoding["ש"] = array(4, 4, 4);
$dmcoding["תג"] = array(34, 34, 34);
$dmcoding["תז"] = array(34, 34, 34);
$dmcoding["תש"] = array(4, 4, 4);
$dmcoding["תת"] = array(33, 33, 33, 4, 4, 4);
$dmcoding["ת"] = array(3, 3, 3, 4, 4, 4);
$dmcoding["ا"] = array(0, -1, -1);
$dmcoding["ب"] = array(7, 7, 7);
$dmcoding["ت"] = array(3, 3, 3);
$dmcoding["ث"] = array(3, 3, 3);
$dmcoding["ج"] = array(4, 4, 4);
$dmcoding["ح"] = array(5, 5, 5);
$dmcoding["خ"] = array(5, 5, 5);
$dmcoding["د"] = array(3, 3, 3);
$dmcoding["ذ"] = array(3, 3, 3);
$dmcoding["ر"] = array(9, 9, 9);
$dmcoding["ز"] = array(4, 4, 4);
$dmcoding["س"] = array(4, 4, 4);
$dmcoding["ش"] = array(4, 4, 4);
$dmcoding["ص"] = array(4, 4, 4);
$dmcoding["ض"] = array(3, 3, 3);
$dmcoding["ط"] = array(3, 3, 3);
$dmcoding["ظ"] = array(4, 4, 4);
$dmcoding["ع"] = array(0, -1, -1);
$dmcoding["غ"] = array(0, -1, -1);
$dmcoding["ف"] = array(7, 7, 7);
$dmcoding["ق"] = array(5, 5, 5);
$dmcoding["ك"] = array(5, 5, 5);
$dmcoding["ل"] = array(8, 8, 8);
$dmcoding["لا"] = array(8, 8, 8);
$dmcoding["م"] = array(6, 6, 6);
$dmcoding["ن"] = array(6, 6, 6);
$dmcoding["هن"] = array(66, 66, 66);
$dmcoding["ه"] = array(5, 5, -1);
$dmcoding["و"] = array(-1, -1, -1, 7, -1, -1);
$dmcoding["ي"] = array(1, -1, -1);
$dmcoding["آ"] = array(1, -1, -1);
$dmcoding["ة"] = array(-1, -1, 3);
$dmcoding["ی"] = array(1, -1, -1);
$dmcoding["ى"] = array(1, -1, -1);
?>
