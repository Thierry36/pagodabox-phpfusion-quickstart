<?php
/*
ENGLISH
French language Fileset for PHP-Fusion version 7.02.04
Produced by the french team of PHP-Fusion :
FRENCH
Collection de fichiers de langue fran�aise pour PHP-Fusion version 7.02.04
R�alis�e par l'�quipe fran�aise de PHP-Fusion :
TEAM :
Wedgemaster - http://www.phpfusion-fr.com - wedgemaster@gmail.com
Quartzkyte - http://surgele.free.fr - quartzkyte@gmail.com
sectorzero - http://www.aerotorshow.com - sectorzero@free.fr - francisation des th�mes
C@rTeR_ - http://www.blass79.com - carter_hem_suppr@hotmail.com
kiko26 - http://phpfusion.playingtobetogether.fr - webmaster@phpfusion.playingtobetogether.fr
URL :
French site : http://www.phpfusion-fr.com/
*/
$locale['email_create_subject'] = "Compte cr�� sur ";
$locale['email_create_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." vient d'�tre cr��.\n
Vous pouvez d�s � pr�sent vous connecter avec les d�tails suivants :\n
pseudo : [USER_NAME]\n
mot de passe : [PASSWORD]\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Compte activ� sur ";
$locale['email_activate_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." vient d'�tre activ�.\n
Vous pouvez d�s � pr�sent vous connecter avec votre pseudo et votre mot de passe.\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "La r�activation du compte est n�cessaire sur ".$settings['sitename'];
$locale['email_deactivate_message'] = "Bonjour [USER_NAME],\n
Il s'est �coul� ".$settings['deactivation_period']." jour(s) depuis votre derni�re visite sur le site ".$settings['sitename'].". Votre compte est maintenant inactif mais tous les d�tails de votre compte et tous vos contenus sont intacts.\n
Pour r�activer simplement votre compte, veuillez cliquer sur le lien suivant :\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Cordialement,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Votre compte sur ".$settings['sitename']."a �t� banni";
$locale['email_ban_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a �t� banni par ".$userdata['user_name']." pour la raison suivante :\n
[REASON].\n
Pour obtenir plus de renseignements sur votre bannissement, veuillez contacter l'administrateur � cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Votre compte sur ".$settings['sitename']."a �t� exclu";
$locale['email_secban_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a �t� exclu par ".$userdata['user_name'].", � cause de certaines actions vous �tant attribu�es, ou associ�es � votre compte et a �t� consid�r� comme une menace pour la s�curit� du site.\n
Pour obtenir plus de renseignements sur votre exclusion, veuillez contacter l'administrateur � cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Votre compte sur ".$settings['sitename']."a �t� suspendu";
$locale['email_suspend_message'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a �t� suspendu par ".$userdata['user_name']." jusqu'au [DATE] (heure du site web) pour la raison suivante :\n
[REASON].\n
Pour obtenir plus de renseignements sur votre suspension, veuillez contacter l'administrateur � cette adresse ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>