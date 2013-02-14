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
// Locale Settings
setlocale(LC_TIME, "fr","FR"); // Linux Server (Windows may differ)
setlocale(LC_ALL, 'fr_FR' ); 
$locale['charset'] = "iso-8859-1";
//$locale['mysql_charset'] = "latin1";
//$locale['mysql_collate'] = "latin1_swedish_ci";
$locale['xml_lang'] = "fr";
$locale['tinymce'] = "fr";
$locale['phpmailer'] = "fr";

// Full & Short Months
$locale['months'] = "&nbsp|janvier|f�vrier|mars|avril|mai|juin|juillet|ao�t|septembre|octobre|novembre|d�cembre";
$locale['shortmonths'] = "&nbsp|Jan|Fev|Mar|Avr|Mai|Jun|Jul|Aou|Sept|Oct|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Public";
$locale['user1'] = "Membre";
$locale['user2'] = "Administrateur";
$locale['user3'] = "Super Administrateur";
$locale['user_na'] = "Non applicable";
$locale['user_anonymous'] = "Utilisateur anonyme";
// Standard User Status
$locale['status0'] = "Actif";
$locale['status1'] = "Banni";
$locale['status2'] = "Non activ�";
$locale['status3'] = "Suspendu";
$locale['status4'] = "Exclu";
$locale['status5'] = "Annul�";
$locale['status6'] = "Rendu anonyme";
$locale['status7'] = "D�sactiv�";
$locale['status8'] = "Inactif";
// Forum Moderator Level(s)
$locale['userf1'] = "Mod�rateur";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Aucun lien d�fini\n";
// Users Online
$locale['global_010'] = "Utilisateurs en ligne";
$locale['global_011'] = "Invit�s en ligne ";
$locale['global_012'] = "Membres en ligne ";
$locale['global_013'] = "Aucun Membre en ligne";
$locale['global_014'] = "Membres enregistr�s ";
$locale['global_015'] = "Membres non activ�s ";
$locale['global_016'] = "Membre le plus r�cent ";
// Forum Side panel
$locale['global_020'] = "Sujets de forum";
$locale['global_021'] = "Nouveaux sujets";
$locale['global_022'] = "Sujets actifs";
$locale['global_023'] = "Aucun sujet cr��";
// Comments Side panel
$locale['global_025'] = "Derniers commentaires";
$locale['global_026'] = "Aucun commentaire";
// Articles Side panel
$locale['global_030'] = "Derniers articles";
$locale['global_031'] = "Pas encore d&#39;articles";
// Downloads Side panel
$locale['global_032'] = "Derniers t�l�chargements";
$locale['global_033'] = "Aucun t�l�chargement n&#39;est disponible";
// Welcome panel
$locale['global_035'] = "Bienvenue";
// Latest Active Forum Threads panel
$locale['global_040'] = "Derniers Sujets de Forum Actifs";
$locale['global_041'] = "Mes Derniers Sujets";
$locale['global_042'] = "Mes Messages r�cents";
$locale['global_043'] = "Nouveaux Messages";
$locale['global_044'] = "Sujet";
$locale['global_045'] = "Vues";
$locale['global_046'] = "R�ponses";
$locale['global_047'] = "Dernier Post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Publi�";
$locale['global_050'] = "Auteur";
$locale['global_051'] = "Sondage";
$locale['global_052'] = "D�plac�";
$locale['global_053'] = "Vous n&#39;avez pas initi� de sujet.";
$locale['global_054'] = "Vous n&#39;avez pas publi� de message dans le forum.";
$locale['global_055'] = "Il y a %u nouveaux Messages dans %u diff�rents sujets depuis votre derni�re visite.";
$locale['global_055'] = "There are %u new posts in %u different threads since your last visit.";
$locale['global_056'] = "Sujets suivis";
$locale['global_057'] = "Options";
$locale['global_058'] = "Stop";
$locale['global_059'] = "Vous ne suivez aucun sujet.";
$locale['global_060'] = "Arr�ter de suivre ce sujet ?";
// News & Articles
$locale['global_070'] = "Publi� par ";
$locale['global_071'] = "le ";
$locale['global_072'] = "Lire la suite";
$locale['global_073'] = " Commentaires";
$locale['global_073b'] = " Commentaire";
$locale['global_074'] = " Lecture(s)";
$locale['global_075'] = "Imprimer";
$locale['global_076'] = "Modifier";
$locale['global_077'] = "Nouvelles";
$locale['global_078'] = "Aucune Nouvelle n&#39;a �t� publi�e";
$locale['global_079'] = "dans ";
$locale['global_080'] = "non cat�goris�";
// Page Navigation
$locale['global_090'] = "Prec.";
$locale['global_091'] = "Suiv.";
$locale['global_092'] = "Page ";
$locale['global_093'] = " sur ";
// Guest User Menu
$locale['global_100'] = "Login";
$locale['global_101'] = "Pseudo";
$locale['global_102'] = "Mot de passe";
$locale['global_103'] = "Se rappeler de moi";
$locale['global_104'] = "Login";
$locale['global_105'] = "Pas encore membre ?<br /><a href='".BASEDIR."register.php' class='side'>Cliquez ici</a> pour vous inscrire.";
$locale['global_106'] = "Mot de passe oubli� ?<br />Demandez-en un autre <a href='".BASEDIR."lostpassword.php' class='side'>en cliquant ici</a>.";
$locale['global_107'] = "S&#39;inscrire";
$locale['global_108'] = "Mot de passe perdu";
// Member User Menu
$locale['global_120'] = "Modifier le Profil";
$locale['global_121'] = "Messages Priv�s";
$locale['global_122'] = "Liste des Membres";
$locale['global_123'] = "Panneau Admin";
$locale['global_124'] = "D�connexion";
$locale['global_125'] = "Vous avez %u ";
$locale['global_126'] = "nouveau message";
$locale['global_127'] = "nouveaux messages";
$locale['global_128'] = "proposition";
$locale['global_129'] = "propositions";
// Sondage
$locale['global_130'] = "Sondage";
$locale['global_131'] = "Voter";
$locale['global_132'] = "Vous devez �tre connect�(e) pour voter.";
$locale['global_133'] = "Voter";
$locale['global_134'] = "Vote(s)";
$locale['global_135'] = "Vote(s) : ";
$locale['global_136'] = "D�but� : ";
$locale['global_137'] = "Termin� : ";
$locale['global_138'] = "Archive des sondages";
$locale['global_139'] = "S�lectionnez un sondage dans la liste : ";
$locale['global_140'] = "Voir";
$locale['global_141'] = "Voir le sondage";
$locale['global_142'] = "Aucun sondage encore.";

// Captcha
$locale['global_150'] = "Code de validation : ";
$locale['global_151'] = "Entrer le code de validation : ";

// Footer Counter
$locale['global_170'] = "visite unique";
$locale['global_171'] = "visites uniques";
$locale['global_172'] = "Page r�alis�e en %s secondes";
$locale['global_173'] = "Requ�tes";
// Admin Navigation
$locale['global_180'] = "Accueil Admin";
$locale['global_181'] = "Retour au Site";
$locale['global_182'] = "<strong>Attention :</strong> mot de passe d&#39;administration non rempli ou incorrect.";// Miscellaneous
// Miscellaneous
$locale['global_190'] = "Mode de maintenance activ�";
$locale['global_191'] = "Votre adresse IP est actuellement sur liste noire.";
$locale['global_192'] = "Votre cookie utilisateur a expir�. Veuillez � nouveau vous connecter.";
$locale['global_193'] = "Cr�ation impossible du cookie. Veuillez activer les cookies afin de pouvoir vous connecter.";
$locale['global_194'] = "Ce compte est actuellement suspendu.";
$locale['global_195'] = "Ce compte n&#39;a pas �t� activ�.";
$locale['global_196'] = "Pseudo ou mot de passe invalide.";
$locale['global_197'] = "Merci de patienter...<br><br>
[ <a href='index.php'>Ou cliquez ici si vous ne voulez pas attendre</a> ]";
$locale['global_198'] = "<strong>Attention :</strong> setup.php d�tect�, veuillez le supprimer imm�diatement.";
$locale['global_199'] = "<strong>Attention :</strong> mot de passe d&#39;administration non rempli, cliquez sur <a href='".BASEDIR."edit_profile.php'>Modifier le Profil</a> pour le cr�er.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Rechercher";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Aller vers le contenu";
// No themes found
$locale['global_300'] = "Aucun th�me trouv�";
$locale['global_301'] = "D�sol�, cette page ne peut pas �tre affich�e car il n&#39;y a pas de th�me accessible sur ce site. Si vous en �tes l&#39;Administrateur, utilisez votre logiciel FTP pour uploader dans le r�pertoire <em>themes/</em> un ou plusieurs themes cr��s pour <em>PHP-Fusion 7</em>. Allez ensuite dans la <em>Configuration Syst�me</em> aux <em>R�glages Principaux</em> et v�rifiez que le th�me choisi existe bien dans votre r�pertoire <em>themes/</em> avec <em>le m�me nom</em> (y compris la casse).<br /><br />Si vous �tes un visiteur, pr�venez l&#39;Administrateur par ".hide_email($settings['siteemail'])." e-mail.";
$locale['global_302'] = "Le Th�me choisi dans les R�glages Principaux n&#39;existe pas ou n&#39;est pas complet !";
// JavaScript Not Enabled
$locale['global_303'] = "Oh non ! O� est <strong>JavaScript</strong>?<br />JavaScript n&#39;est pas activ� sur votre navigateur ou alors ce dernier ne le supporte pas. Veuillez <strong>activer JavaScript</strong> sur votre navigateur pour afficher correctement ce site web,<br /> ou <strong>changer</strong> pour un navigateur qui supporte JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ou une version d&#39; <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> plus r�cente que la 6.";
// User Management
// Member status
$locale['global_400'] = "suspendu";
$locale['global_401'] = "banni";
$locale['global_402'] = "d�sactiv�";
$locale['global_403'] = "compte clos";
$locale['global_404'] = "compte rendu anonyme";
$locale['global_405'] = "utilisateur anonyme";
$locale['global_406'] = "Ce compte a �t� banni pour la raison suivante : ";
$locale['global_407'] = "Ce compte a �t� suspendu jusqu&#39;� ";
$locale['global_408'] = " pour la raison suivante : ";
$locale['global_409'] = "Ce compte a �t� exclu pour raisons de s�curit�.";
$locale['global_410'] = "La raison est la suivante : ";
$locale['global_411'] = "Ce compte a �t� annul�.";
$locale['global_412'] = "Ce compte a �t� rendu anonyme, probablement pour cause d&#39;inactivit�.";
// Banning due to flooding
$locale['global_440'] = "Bannissement automatique par contr�le de flood";
$locale['global_441'] = "Votre compte sur ".$settings['sitename']."a �t� banni";
$locale['global_442'] = "Bonjour [USER_NAME],\n
Votre compte sur ".$settings['sitename']." a post� trop d&#39;�l�ments dans le syst�me, dans un temps tr�s court, � partir de l&#39;IP ".USER_IP.", et a, par cons�quent, �t� exclu. Ceci a �t� fait pour pr�venir l&#39;envoi massif de messages par les robots.\n
Veuillez contacter l&#39;administrateur du site ".$settings['siteemail']." pour restaurer votre compte ou expliquer que vous n&#39;�tes pas responsable de cette exclusion.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspension lev�e automatiquement par le syst�me";
$locale['global_451'] = "Suspension lev�e sur ".$settings['sitename'];
$locale['global_452'] = "Bonjour [USER_NAME],\n
La suspension de votre compte sur ".$settings['siteurl']." a �t� lev�e. Voici vos identifiants de connexion :\n
Pseudo: [USER_NAME]
Mot de passe: cach� pour raisons de s�curit�\n
Si vous avez oubli� votre mot de passe, vous pouvez le r�initialiser gr�ce au lien suivant : [LOST_PASSWORD]\n\n
Cordialement,\n
".$settings['siteusername'];
$locale['global_453'] = "Bonjour [USER_NAME],\n
La suspension de votre compte sur ".$settings['siteurl']." a �t� lev�e.\n\n
Cordialement,\n
".$settings['siteusername'];
$locale['global_454'] = "Compte r�activ� sur ".$settings['sitename'];
$locale['global_455'] = "Bonjour [USER_NAME],\n
Lors de votre derni�re connexion, votre compte a �t� r�activ� sur ".$settings['siteurl']." et n'est plus inactif.\n\n
Cordialement,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "vide";
$locale['global_461'] = "Octets";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vous allez �tre redirig� vers vers %s, veuillez patienter. Si la redirection ne s&#39;effectue pas, cliquez ici.";

// Captcha Locales
$locale['global_600'] = "Code de validation";
$locale['recaptcha'] = "en";

//Miscellaneous
$locale['global_900'] = "Conversion HEXA vers DECIMAL impossible";
?>