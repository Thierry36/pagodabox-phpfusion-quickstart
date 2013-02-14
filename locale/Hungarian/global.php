<?php
/*
Hungarian Language Fileset
Produced by Nagy K�roly (Korcsii)
Email: korcsii@php-fusion.co.uk
Web: http://www.php-fusion.co.hu
*/

// Locale Settings
setlocale(LC_TIME, "hu_HU", "hun_HUN", "hungarian", "hu");
$locale['charset'] = "iso-8859-2";
// $locale['mysql_charset'] = "latin2";
// $locale['mysql_collate'] = "latin2_hungarian_ci";
$locale['xml_lang'] = "hu";
$locale['tinymce'] = "hu";
$locale['phpmailer'] = "hu";

// Full & Short Months
$locale['months'] = "&nbsp|janu�r|febru�r|m�rcius|�prilis|m�jus|j�nius|j�lius|augusztus|szeptember|okt�ber|november|december";
$locale['shortmonths'] = "&nbsp|jan|febr|m�rc|�pr|m�j|j�n|j�l|aug|szept|okt|nov|dec";

// Standard User Levels
$locale['user0'] = "Vend�g";
$locale['user1'] = "Tag";
$locale['user2'] = "Adminisztr�tor";
$locale['user3'] = "F�adminisztr�tor";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonim felhaszn�l�";
// Standard User Status
$locale['status0'] = "Akt�v";
$locale['status1'] = "Kitiltott";
$locale['status2'] = "Aktiv�latlan";
$locale['status3'] = "Felf�ggesztett";
$locale['status4'] = "Kitiltva (biztons�g)";
$locale['status5'] = "Elt�vol�tva";
$locale['status6'] = "Anonimiz�lva";
$locale['status7'] = "Deaktiv�lt";
$locale['status8'] = "Inakt�v";
// Forum Moderator Level(s)
$locale['userf1'] = "Moder�tor";
// Navigation
$locale['global_001'] = "Navig�ci�";
$locale['global_002'] = "Nincs megadva link\n";
// Users Online
$locale['global_010'] = "Felhaszn�l�k";
$locale['global_011'] = "Online vend�gek";
$locale['global_012'] = "Online tagok";
$locale['global_013'] = "Nincs Online tag";
$locale['global_014'] = "Regisztr�ltak";
$locale['global_015'] = "Aktiv�latlanok";
$locale['global_016'] = "Leg�jabb tag";
// Forum Side panel
$locale['global_020'] = "F�rumt�m�k";
$locale['global_021'] = "Leg�jabb t�m�k";
$locale['global_022'] = "Legn�pszer�bb t�m�k";
$locale['global_023'] = "Nincs l�trehozva f�rumt�ma";
// Comments Side panel
$locale['global_025'] = "Leg�jabb hozz�sz�l�sok";
$locale['global_026'] = "Nincsenek hozz�sz�l�sok";
// Articles Side panel
$locale['global_030'] = "Leg�jabb cikkek";
$locale['global_031'] = "Nincs l�trehozva cikk";
// Downloads Side panel
$locale['global_032'] = "Leg�jabb let�lt�sek";
$locale['global_033'] = "Nincs el�rhet� let�lt�s";
// Welcome panel
$locale['global_035'] = "�dv�zlet";
// Latest Active Forum Threads panel
$locale['global_040'] = "Utols� akt�v f�rumt�m�k";
$locale['global_041'] = "Legut�bbi f�rumt�m�im";
$locale['global_042'] = "Legut�bbi hozz�sz�l�saim";
$locale['global_043'] = "�j hozz�sz�l�sok";
$locale['global_044'] = "T�ma";
$locale['global_045'] = "Megnyitva";
$locale['global_046'] = "V�laszok";
$locale['global_047'] = "Utols� �zenet";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "D�tum";
$locale['global_050'] = "Szerz�";
$locale['global_051'] = "Szavaz�s";
$locale['global_052'] = "�thelyezve";
$locale['global_053'] = "M�g nem ind�tott�l egy f�rumt�m�t sem.";
$locale['global_054'] = "M�g nem �rt�l egy hozz�sz�l�st sem.";
$locale['global_055'] = "%u �j hozz�sz�l�s �rkezett %u k�l�nb�z� t�m�ban utols� l�togat�sod �ta.";
$locale['global_056'] = "Figyelt t�m�im";
$locale['global_057'] = "Lehet�s�gek";
$locale['global_058'] = "Elt�vol�t�s";
$locale['global_059'] = "Jelenleg egy t�m�t sem k�vetsz nyomon.";
$locale['global_060'] = "Megsz�nteted a t�ma k�vet�s�t?";
// News & Articles
$locale['global_070'] = " ";
$locale['global_071'] = " - ";
$locale['global_072'] = "R�szletek";
$locale['global_073'] = " hozz�sz�l�s";
$locale['global_073b'] = " hozz�sz�l�s";
$locale['global_074'] = " megnyit�s";
$locale['global_075'] = "Nyomtat�s";
$locale['global_076'] = "Szerkeszt�s";
$locale['global_077'] = "H�rek";
$locale['global_078'] = "Az oldalon jelenleg nincsenek h�rek";
$locale['global_079'] = "Kateg�ria: ";
$locale['global_080'] = "Nincs";
// Page Navigation
$locale['global_090'] = "El�z�";
$locale['global_091'] = "K�vetkez�";
$locale['global_092'] = "Oldal: ";
$locale['global_093'] = " / ";
// Guest User Menu
$locale['global_100'] = "Bejelentkez�s";
$locale['global_101'] = "Felhaszn�l�n�v";
$locale['global_102'] = "Jelsz�";
$locale['global_103'] = "Eml�kezzen r�m";
$locale['global_104'] = "Bejelentkez�s";
$locale['global_105'] = "M�g nem regisztr�lt�l?<br /><a href='".BASEDIR."register.php' class='side'>Regisztr�ci�</a>";
$locale['global_106'] = "Elfelejtetted jelszavad?<br /><a href='".BASEDIR."lostpassword.php' class='side'>�j jelsz� k�r�se</a>";
$locale['global_107'] = "Regisztr�ci�";
$locale['global_108'] = "Elfelejtett jelsz�";
// Member User Menu
$locale['global_120'] = "Profil szerkeszt�se";
$locale['global_121'] = "Priv�t �zenetek";
$locale['global_122'] = "Regisztr�lt tagok";
$locale['global_123'] = "Adminisztr�ci�";
$locale['global_124'] = "Kijelentkez�s";
$locale['global_125'] = "%u �j ";
$locale['global_126'] = "�zeneted van";
$locale['global_127'] = "�zeneted van";
$locale['global_128'] = "bek�ld�s �rkezett";
$locale['global_129'] = "bek�ld�s �rkezett";
// Poll
$locale['global_130'] = "Szavaz�s";
$locale['global_131'] = "Szavazok";
$locale['global_132'] = "Szavaz�shoz be kell jelentkezni";
$locale['global_133'] = "Szavazat";
$locale['global_134'] = "Szavazat";
$locale['global_135'] = "Szavazatok: ";
$locale['global_136'] = "Elindult: ";
$locale['global_137'] = "Lez�rult: ";
$locale['global_138'] = "Arch�vum";
$locale['global_139'] = "V�lassz egy szavaz�st a list�b�l:";
$locale['global_140'] = "Megtekint�s";
$locale['global_141'] = "Szavaz�s eredm�nye";
$locale['global_142'] = "Nincs l�trehozva szavaz�s";

// Captcha
$locale['global_150'] = "Ellen�rz�k�d:";
$locale['global_151'] = "Add meg az ellen�rz�k�dot:";

// Footer Counter
$locale['global_170'] = "egyedi l�togat�";
$locale['global_171'] = "egyedi l�togat�";
$locale['global_172'] = "Gener�l�si id�: %s m�sodperc";
$locale['global_173'] = "lek�rdez�s";
// Admin Navigation
$locale['global_180'] = "Adminisztr�tori f�men�";
$locale['global_181'] = "F�oldal";
$locale['global_182'] = "<strong>Megjegyz�s</strong>: az admin jelsz� nincs megadva, vagy hib�s.";
// Miscellaneous
$locale['global_190'] = "Az oldal karbantart�s alatt �ll";
$locale['global_191'] = "IP c�med a feketelist�n szerepel";
$locale['global_192'] = "Lej�rt a s�tid (cookie) �rv�nyess�gi ideje. K�rj�k jelentkezz be �jra.";
$locale['global_193'] = "A bejelentkez�s nem siker�lt. K�rj�k ellen�rizd, hogy a b�ng�sz�dben enged�lyezve van-e a s�tik (cookie) elfogad�sa.";
$locale['global_194'] = "Hozz�f�r�sedet felf�ggesztett�k";
$locale['global_195'] = "Az adminisztr�torok m�g nem aktiv�lt�k hozz�f�r�sedet";
$locale['global_196'] = "Hib�s felhaszn�l�n�v vagy jelsz�";
$locale['global_197'] = "�tir�ny�t�s folyamatban...<br /><br />
[ <a href='index.php'>Kattints ide, ha nem akarsz v�rni</a> ]";
$locale['global_198'] = "<strong>FIGYELEM:</strong> a setup.php f�jlt m�g nem t�r�lted, telep�t�s ut�n amint lehet t�r�ld!";
$locale['global_199'] = "<strong>FIGYELEM:</strong> az admin jelszavad m�g nem �ll�tottad be - <a href='".BASEDIR."edit_profile.php'>Profil szerkeszt�se</a>";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Keres�s";
$locale['global_203'] = $locale['global_200']."GyIK";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Ugr�s az oldal tartalm�hoz";
// No themes found
$locale['global_300'] = "nem tal�lhat� theme";
$locale['global_301'] = "Sajn�ljuk, de nem tudjuk megjelen�teni az oldalt. Az oldalon nem tal�lhat� egyetlen theme (fel�let) sem. Ha te vagy az oldal adminisztr�tora, akkor t�lts fel FTP-n kereszt�l a szerver <em>themes/</em> mapp�j�ba b�rmilyen <em>PHP-Fusion v7</em> kompatibilis k�sz�lt theme-t. Felt�lt�s ut�n ellen�rizd az <em>Alap be�ll�t�sok</em> admin oldalon, hogy az �ltalad v�lasztott fel�let szerepel-e a szerver <em>themes/</em> mapp�j�ban. Ha igen, �s m�gsem m�k�dik, akkor ellen�rizd, hogy nincsenek-e k�l�nleges karakterek benne, illetve �gyelj arra, hogy a szerverek t�bbs�ge megk�l�nb�zteti a kis- �s NAGYbet�ket!<br /><br />Ha csak egy l�togat� vagy az oldalon, k�rj�k l�pj kapcsolatba az oldal adminisztr�tor�val (".hide_email($settings['siteemail']).") �s jelentsd neki a hib�t.";
$locale['global_302'] = "A Rendszerbe�ll�t�sok - Alap be�ll�t�sok men�pontja alatt be�ll�tott theme nem tal�lhat� vagy hib�s!";
// JavaScript Not Enabled
$locale['global_303'] = "Hiba t�rt�nt! Nem m�k�dik a <strong>JavaScript</strong>!<br />A b�ng�sz�dben le van tiltva a JavaScript futtat�sa, vagy nem t�mogatja a JavaScript haszn�lat�t. Az oldal megfelel� haszn�lat�hoz k�rj�k <strong>enged�lyezd a JavaScript futtat�s�t</strong> b�ng�sz�dben,<br /> vagy <strong>friss�tsd</strong> egy �jabb verzi�ra, amely t�mogatja a JavaScript-et:<br /><a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a>, vagy az <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> 6-n�l �jabb verzi�ja.";
// User Management
// Member status
$locale['global_400'] = "felf�ggesztve";
$locale['global_401'] = "kitiltva";
$locale['global_402'] = "deaktiv�lva";
$locale['global_403'] = "hozz�f�r�s sz�neteltetve";
$locale['global_404'] = "hozz�f�r�s anonimiz�lva";
$locale['global_405'] = "anonim felhaszn�l�";
$locale['global_406'] = "Ez a felhaszn�l� ki lett tiltva az al�bbi okokb�l:";
$locale['global_407'] = "Ez a felhaszn�l� fel lett f�ggesztve az al�bbi id�pontig: ";
$locale['global_408'] = " az al�bbi okok miatt:";
$locale['global_409'] = "Ez a felhaszn�l� biztons�gi okokb�l ki lett tiltva.";
$locale['global_410'] = "Indokl�s: ";
$locale['global_411'] = "Ez a felhaszn�l� el lett t�vol�tva.";
$locale['global_412'] = "Ez a felhaszn�l� anonimiz�lva lett, val�sz�n�leg inaktivit�s miatt.";
// Banning due to flooding
$locale['global_440'] = "Flood miatti automatikus kitilt�s";
$locale['global_441'] = "Felhaszn�l�neved kitiltva - ".$settings['sitename'];
$locale['global_442'] = "Szia [USER_NAME],\n
Valaki a felhaszn�l�neveddel t�l sok hozz�sz�l�st k�ld�tt el r�vid id� alatt az al�bbi IP c�mr�l: ".USER_IP.". A rendszer�nk ez�rt kitiltotta az oldalr�l, hogy megel�zze az esetleges rosszindulat� robotok tev�kenys�g�t.\n
K�rj�k l�pj kapcsolatba oldalunk adminisztr�tor�val az al�bbi c�men, ha nem te okoztad a probl�m�t: ".$settings['siteemail']."\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
// Lifting of suspension
$locale['global_450'] = "Felf�ggeszt�sed feloldva";
$locale['global_451'] = "Felf�ggeszt�sed feloldva - ".$settings['sitename'];
$locale['global_452'] = "Szia USER_NAME,\n
Feloldottuk kitilt�sodat oldalunkon (".$settings['siteurl']."). Bejelentkez�si adataid:\n
Felhaszn�l�n�v: USER_NAME
Jelsz�: a kor�bban haszn�lt\n
Ha elfelejtetted jelszavad, az al�bbi linken k�rhetsz �jat: LOST_PASSWORD\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
$locale['global_453'] = "Szia USER_NAME,\n
Feloldottuk kitilt�sodat oldalunkon (".$settings['siteurl'].").\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
$locale['global_454'] = "Felhaszn�l� aktiv�lva - ".$settings['sitename'];
$locale['global_455'] = "Szia USER_NAME,\n
Legut�bbi bejelentkez�sed alkalm�val hozz�f�r�sed aktiv�lva lett, �gy m�r nincs megjel�lve inakt�vk�nt.\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];
// Function parsebytesize()
$locale['global_460'] = "�res";
$locale['global_461'] = "Byte";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "�tir�ny�t�s folyamatban: %s, k�rj�k v�rj. Ha ez nem t�rt�nik meg, k�rj�k kattint ide.";

// Captcha Locales
$locale['global_600'] = "Ellen�rz�k�d";

//Miscellaneous
$locale['global_900'] = "Sikertelen HEX-DEC �tv�lt�s";

$locale['recaptcha'] = "hu";

// You don't have to add those lines for the following languages: en, nl, fr, de, pt, ru, es, tr
// This is an example for the Italian language
$locale['recaptcha_l10n'] = "instructions_visual : 'Add meg a k�t sz�t:', ";
$locale['recaptcha_l10n'] .= "instructions_audio : 'Add meg a hallott szavakat:', ";
$locale['recaptcha_l10n'] .= "play_again : '�jrahallgat�s', ";
$locale['recaptcha_l10n'] .= "cant_hear_this : 'Let�lt�s MP3 form�tumban', ";
$locale['recaptcha_l10n'] .= "visual_challenge : 'Vizu�lis m�d', ";
$locale['recaptcha_l10n'] .= "audio_challenge : 'Audio m�d', ";
$locale['recaptcha_l10n'] .= "refresh_btn : '�j ellen�rz�k�d k�r�se', ";
$locale['recaptcha_l10n'] .= "help_btn : 'Seg�ts�g', ";
$locale['recaptcha_l10n'] .= "incorrect_try_again : 'Hib�s, pr�b�ld �jra.', ";
?>