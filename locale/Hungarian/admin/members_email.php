<?php
$locale['email_create_subject'] = "Felhaszn�l� l�trehozva - ";
$locale['email_create_message'] = "Szia [USER_NAME],\n
L�trehoztuk felhaszn�l�dat oldalunkon.\n
Az al�bbi adatokkal tudsz bejelentkezni:\n
Felhaszn�l�n�v: [USER_NAME]\n
Jelsz�: [PASSWORD]\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_activate_subject'] = "Felhaszn�l� aktiv�lva - ";
$locale['email_activate_message'] = "Szia [USER_NAME],\n
Aktiv�ltuk felhaszn�l�nevedet az oldalunkon.\n
A megadott felhaszn�l�neveddel �s jelszavaddal most be tudsz jelentkezni.\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_deactivate_subject'] = "�jraaktiv�l�si k�relem - ".$settings['sitename'];
$locale['email_deactivate_message'] = "Szia [USER_NAME],\n
".$settings['deactivation_period']." napja nem l�pt�l be oldalunkra. Felhaszn�l�neved inakt�vk�nt lett megjel�lve, de minden �ltalad megadott adat �s tartalom megmaradt.\n
Hozz�f�r�sed �jraaktiv�l�s�hoz kattints az al�bbi linkre:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
�dv�zlettel,\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_ban_subject'] = "Felhaszn�l�neved kitiltva - ".$settings['sitename'];
$locale['email_ban_message'] = "Szia [USER_NAME],\n
Felhaszn�l�nevedet ".$userdata['user_name']." kitiltotta oldalunkr�l az al�bbi okok miatt:\n
[REASON].\n
Ha tov�bbi inform�ci�t szeretn�l megtudni a kitilt�sod ok�r�l, k�rj�k keresd meg oldalunk adminisztr�tor�t: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_secban_subject'] = "Felhaszn�l�neved kitiltva - ".$settings['sitename'];
$locale['email_secban_message'] = "Szia [USER_NAME],\n
Felhaszn�l�nevedet ".$userdata['user_name']." kitiltotta oldalunkr�l, mivel tev�kenys�ged vesz�lyeztette az oldal m�k�d�s�t.\n
Ha tov�bbi inform�ci�t szeretn�l megtudni a biztons�gi kitilt�sod ok�r�l, k�rj�k keresd meg oldalunk adminisztr�tor�t: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];

$locale['email_suspend_subject'] = "Felhaszn�l�neved felf�ggesztve - ".$settings['sitename'];
$locale['email_suspend_message'] = "Szia [USER_NAME],\n
Felhaszn�l�nevedet ".$userdata['user_name']." felf�ggesztette oldalunkon az al�bbi okok miatt:\n
[REASON].\n
Hozz�f�r�sed az al�bbi id�pontt�l lesz �jra haszn�lhat�: [DATE]\n
Ha tov�bbi inform�ci�t szeretn�l megtudni a felf�ggeszt�sed ok�r�l, k�rj�k keresd meg oldalunk adminisztr�tor�t: ".$settings['siteemail'].".\n
".$settings['siteusername']."\n".$settings['sitename'];
?>