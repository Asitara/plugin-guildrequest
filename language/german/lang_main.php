<?PHP
/********************************************\
* Guildrequest Plugin for EQdkp plus         *
* ------------------------------------------ * 
* Project Start: 01/2009                     *
* Author: BadTwin                            *
* Copyright: Andreas (BadTwin) Schrottenbaum *
* Link: http://eqdkp-plus.com                *
* Version: 0.0.1                             *
\********************************************/

global $eqdkp;
$lang['guildrequest']                     = 'Gilden-Bewerbungen';
$lang['request'] 							    				= 'Bewerbung';
$lang['gr_short_desc']                    = 'Bewerbungs-Plugin';
$lang['gr_long_desc']                     = 'Ein Bewerbungs-Plugin f�r EQdkp-Plus';

// Userdaten f�r den Gastuser
$lang['gr_user_aspirant']                 = 'RequestUser';
$lang['gr_user_email']                    = 'G�stekonto f�r das Bewerbungs-Plugin';

//Editor
$lang['editor_language']	= 'de';

// Admin Menu
$lang['gr_manage']												= 'Verwalten';
$lang['gr_view']                          = 'Bewerbungen ansehen';
$lang['gr_write']                         = 'Bewerbung schreiben';

// Bewerbung erstellen
$lang['gr_write_headline']                = 'Bewerbung verfassen';
$lang['gr_write_incorrect_mail']          = 'Du hast eine ung�ltige E-Mail Adresse eingetragen.';
$lang['gr_write_allfields']               = 'Es m�ssen alle Felder ausgef�llt sein!';
$lang['gr_write_sendrequest']             = 'Bewerbung absenden';
$lang['gr_write_reset']                   = 'Felder leeren';
$lang['gr_mailsent']                      = 'Bitte best�tige deine Bewerbung �ber den Aktivierungslink in der Best�tigungsmail.';
$lang['gr_mail_topic']                    = 'Best�tigung deiner Bewerbung bei '.$eqdkp->config['guildtag'];
$lang['gr_mail_text1']                    = 'Bitte best�tige deine Bewerbugng �ber folgenden Link:';
$lang['gr_mail_text2']                    = 'Mit freundlichen Gr��en, die Gildenleitung.';
$lang['gr_username_f']                    = 'Benutzername:';
$lang['gr_email_f']                       = 'E-Mail:';
$lang['gr_password_f']                    = 'Passwort:';
$lang['gr_text_f']                        = 'Text:';
$lang['gr_settings']                      = 'Einstellungen';
$lang['gr_user_double']                   = 'Ein User mit demselben Namen hdat sich bereits beworben. Bitte w�hle einen anderen Namen.';
$lang['gr_welcome_text']                  = 'Vielen Dank f�r dein Interesse an '.$eqdkp->config['guildtag'].'. Bitte schreibe deine Bewerbung hier:';

// Best�tigung
$lang['gr_activate_succ']                 = 'Deine Bewerbung wude freigeschalten!';

// Login
$lang['gr_login_headline']                = 'Bewerbung - Login';
$lang['gr_login_succ']                    = 'Login erfolgreich';
$lang['gr_login_not_activated']           = 'Du hast die Aktivierungsmail noch nicht best�tigt.';
$lang['gr_login_wrong']                   = 'Du hast einen falschen Benutzernamen, oder ein falsches Passwort eingegeben.';
$lang['gr_login_empty']                   = 'Bitte f�lle alle Felder aus!';
$lang['gr_login_submit']                  = 'Login';
$lang['gr_login_reset']                   = 'zur�cksetzen';
$lang['gr_showrequest_headline']          = 'Bewerbung: ';
$lang['gr_answer_f']                      = 'Antwort:';
$lang['gr_closed_headline']               = 'Die Bewerbung wurde geschlossen.';

// Member-Ansicht
$lang['gr_goback']                        = 'zur�ck';
$lang['gr_poll_headline']                 = 'Soll dieser Bewerber in die Gilde aufgenommen werden?';
$lang['gr_poll_yes']                      = 'Ja';
$lang['gr_poll_no']                       = 'Nein';
  // Admin-Ansicht
  $lang['gr_poll_ad_opened']              = 'offen';
  $lang['gr_poll_ad_closed']              = 'geschlossen';
  $lang['gr_poll_ad_save']                = 'speichern';
  $lang['gr_ad_adminonly']                = 'Geschlossene Bewerbungen - Nur f�r Administratoren sichtbar:';
  $lang['gr_ad_delete']                   = 'l�schen';
  
// Administrationsbereich
$lang['gr_ad_config_headline']            = 'Bewerbungen - Einstellungen';
$lang['gr_ad_headline_f']                 = 'Begr��ungstext:';
$lang['gr_ad_poll_activated']             = 'Umfragen aktiviert';
$lang['gr_ad_mail1_f']                    = 'Erster Teil der Best�tigungsmail:';
$lang['gr_ad_mail2_f']                    = 'Zweiter Teil der Best�tigungsmail:';
$lang['gr_ad_update_succ']                = 'Die Einstellungen wurden gespeichert';
?>
