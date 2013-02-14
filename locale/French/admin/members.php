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
// Member Management Options
$locale['400'] = "Membres";
$locale['401'] = "Utilisateur";
$locale['402'] = "Ajouter un nouveau membre";
$locale['403'] = "Type d&#39;utilisateur";
$locale['404'] = "Options";
$locale['405'] = "Visualiser";
$locale['406'] = "Modifier";
$locale['407'] = "Activer";
$locale['408'] = "D�bannir";
$locale['409'] = "Bannir";
$locale['410'] = "Supprimer";
$locale['411'] = "Il n&#39;y a pas de membre %s";
$locale['412'] = " dont le nom commence par ";
$locale['413'] = " correspondant au crit�re de recherche ";
$locale['414'] = "Tout voir";
$locale['415'] = "Recherche d&#39;un membre : ";
$locale['416'] = "Recherche";
$locale['417'] = "Selectionner une action";
$locale['418'] = "Annuler";
$locale['419'] = "R�tablir";
// Ban/Unban/Delete Member
$locale['420'] = "Bannissement appliqu�";
$locale['421'] = "Bannissement supprim�";
$locale['422'] = "Membre supprim�";
$locale['423'] = "�tes-vous certain de vouloir supprimer ce membre ?";
$locale['424'] = "Membre Activ�";
// Edit Member Details
$locale['430'] = "Modifier le Membre";
$locale['431'] = "D�tails du Membre mis � jour";
$locale['432'] = "Retour � l&#39;administration des Membres";
$locale['433'] = "Retour � l&#39;administration";
$locale['434'] = "Mise � jour des d�tails du Membre impossible : ";
// Extra Edit Member Details form options
$locale['440'] = "Sauvegarder les changements";
// Update Profile Errors
$locale['450'] = "Modification d&#39;un administrateur primaire impossible.";
$locale['451'] = "Vous devez pr�ciser un Pseudo et une adresse mail.";
$locale['452'] = "Le Pseudo contient des caract�res invalides.";
$locale['453'] = "Le Pseudo ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." est d�j� utilis�.";
$locale['454'] = "L&#39;adresse mail est invalide.";
$locale['455'] = "L&#39;adresse mail ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." est d�j� utilis�e.";
$locale['456'] = "Les nouveaux mots de passe ne correspondent pas.";
$locale['457'] = "Le mot de passe est invalide, veuillez n&#39;utiliser que des caract�res alphanum�riques.<br />
La longueur du mot de passe doit �tre de 6 caract�res minimum.";
$locale['458'] = "<strong>Attention :</strong> ex�cution d&#39;un script impr�vu.";
// View Member Profile
$locale['470'] = "Profile du Membre";
$locale['472'] = "Statistiques";
$locale['473'] = "Groupes d&#39;Utilisateurs";
// Add Member Errors
$locale['480'] = "Ajouter un Membre";
$locale['481'] = "Le compte du Membre vient d&#39;�tre cr��.";
$locale['482'] = "Le compte du Membre ne peut pas �tre cr��.";
// Suspension Log 
$locale['510s'] = "Journal de suspension pour ";
$locale['511s'] = "Il n&#39;y a pas de suspension en cours pour ce membre dans le journal de suspension.";
$locale['512s'] = "Suspensions pr�c�dentes de ";
$locale['513'] = "N�"; // as in number
$locale['514'] = "Date";
$locale['515'] = "Explication";
$locale['516'] = "Suspension d&#39;un administrateur";
$locale['517'] = "Action syst�me";
$locale['518'] = "Retour au profil du membre";
$locale['519'] = "Journal de suspension de ce membre ";
$locale['520'] = "Lev�e : ";
$locale['521'] = "IP : ";
$locale['522'] = "Pas encore r�tabli";
$locale['540'] = "Erreur";
$locale['541'] = "Erreur : Vous devez indiquer la raison de la suspension !";
$locale['542'] = "Erreur : Vous devez indiquer la raison du bannissement s�curitaire !";
// User Management Admin
$locale['550'] = "Suspendre le membre : ";
$locale['551'] = "Dur�e en jours : ";
$locale['552'] = "Explication : ";
$locale['553'] = "Suspendre";
$locale['554'] = "Il n&#39;y a pas de suspension en cours pour ce membre dans le journal de suspension.";
$locale['555'] = "Si vous croyez que ce membre doit �tre banni, cliquez sur &#39;Bannir&#39;";
$locale['556'] = "Lev�e de suspension du membre : ";
$locale['557'] = "Lev�e de suspension";
$locale['558'] = "Lev�e du bannissement du membre : ";
$locale['559'] = "Lev�e du bannissement ";
$locale['560'] = "Lev�e du bannissement s�curitaire du membre : ";
$locale['561'] = "Lev�e du bannissement s�curitaire";
$locale['562'] = "Bannir le membre : ";
$locale['563'] = "Bannir s�curitairement le membre : ";
$locale['585a'] = "Donnez une explication concernant le bannissement ou le d�bannissement ";

$locale['566'] = "Bannissement lev�";
$locale['568'] = "Bannissement s�curitaire impos�";
$locale['569'] = "Bannissement s�curitaire lev�";
$locale['572'] = "Membre suspendu";
$locale['573'] = "Suspension lev�e";
$locale['574'] = "Membre d�sactiv�";
$locale['575'] = "Membre r�activ�";
$locale['576'] = "Compte utilisateur annul�";
$locale['577'] = "Annulation du Compte utilisateur non effectu�e";
$locale['578'] = "Compte utilisateur annul� et rendu anonyme";
$locale['579'] = "Anonymisation du Compte utilisateur non effectu�e";
$locale['580'] = "D�sactiver les Membres inactifs";
$locale['581'] = "Plus de 50 comptes utilisateurs sont inactifs. Vous devrez lancer le processus de d�sactivation <strong>%d fois</strong>.";
$locale['582'] = "R�activer";
$locale['583'] = "R�tablir";
$locale['584'] = "S�lectionner le nouveau statut";
$locale['585'] = "Ce membre a �t� originellement banni pour raisons de s�curit� ! Etes-vous certain de vouloir le d�bannir maintenant ?";

$locale['590'] = "Suspendre";
$locale['591'] = "Arr�ter la suspension";
$locale['592'] = "suspension";
$locale['593'] = "non suspension";
$locale['594'] = "Veuillez donner une explication pour la ";
$locale['595'] = " du membre ";
$locale['596'] = "Dur�e : ";

$locale['600'] = "Bannir s�curitairement";
$locale['601'] = "Bannissement s�curitaire";
$locale['602'] = "D�bannir";
$locale['603'] = "D�bannissement";
$locale['604'] = "Explication : ";

// Deactivation System
$locale['610'] = "<strong>%d membre(s)</strong> ne se sont pas connect�s depuis <strong>%d jour(s)</strong> et leurs comptes ont �t� d�sactiv�s. <br>
En d�sactivant les comptes de ces membres, il leur restera <strong>%d jour(s)</strong> avant qu&#39;ils ne soient %s.";
$locale['611'] = "Veuillez noter que certains membres ont pu soumettre du contenu dans le site tel que sujet de forum, commentaires, photos etc. <br>
Ce contenu sera supprim� lorsque les membres d�sactiv�s seront supprim�s.";
$locale['612'] = "utilisateur";
$locale['613'] = "utilisateurs";
$locale['614'] = "D�sactiver";
$locale['615'] = "d�finitivement supprim�";
$locale['616'] = "rendus anonymes";
$locale['617'] = "Attention : ";
$locale['618'] = "Il est fortement reecommand� de rendre anonyme plut�t que de supprimer afin de ne pas perdre de donn�es !";
$locale['619'] = "Vous pouvez effectuer cette action ici.";
$locale['620'] = "rendre anonyme";
$locale['621'] = "D�sactivation automatique des membres inactifs.";
?>