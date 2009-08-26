<?php
#########################################################
# Deutsches Sprachpaket (Formell)                       #
# Version 1.4.8                                         #
# Datum: 26.06.2009                                     #
# MyBB-Version 1.4.8                                    #
# Autor: MyBBoard.de | Webseite: http://www.mybboard.de #
# (c) 2005-2009 MyBBoard.de | Alle Rechte vorbehalten!  #
#                                                       #
# Die Lizenz/Nutzungsbedingungen finden Sie in der      #
# beiliegenden Readme.                                  #
#########################################################

$l['users'] = "Benutzer";

$l['search_for_user'] = "Benutzer suchen";
$l['browse_users'] = "Benutzer anzeigen";
$l['browse_users_desc'] = "Hier können Sie die Benutzer Ihres Forums in verschiedenen definierten Ansichten anschauen. Ansichten sind besonders hilfreich um verschiedene Ergebnisse mit verschiedenen Informationen zu generieren - denke an sie als gespeicherte Live-Suchen.";
$l['find_users'] = "Benutzer finden";
$l['find_users_desc'] = "Hier können Sie nach Benutzern Ihres Forums suchen. Je weniger Felder ausgefüllt werden, desto weiter ist die Suche; je mehr ausgefüllt wird, desto enger ist Ihre Suche.";
$l['create_user'] = "Neuen Benutzer erstellen";
$l['create_user_desc'] = "Hier können Sie neue Benutzer erstellen.";
$l['merge_users'] = "Benutzer zusammenfügen";
$l['merge_users_desc'] = "Hier können Sie zwei Accounts zu einem zusammenfügen. Der \"Quell-Account\" wird zum \"Ziel-Account\" hinzugefügt, während <strong>nur</strong> der Ziel-Account bestehen bleibt. Die Beiträge, Themen, Privaten Nachrichten, Termine, Beitragszähler und Freundeliste des Quell-Accounts werden zum Ziel-Account hinzugefügt.<br /><span style=\"font-size: 15px;\">Achtung!, die Aktion kann nicht rückgängig gemacht werden.</span>";
$l['edit_user'] = "Benutzer bearbeiten";
$l['edit_user_desc'] = "Hier können Sie das Profil, die Einstellungen und die Signatur dieses Benutzers bearbeiten; die Statistiken sehen; und andere Seiten mit weiteren Informationen zu diesem Benutzer ansehen.";
$l['show_referrers'] = "Durch Empfehlung registrierte Mitglieder";
$l['show_referrers_desc'] = "Die Ergebnisse Ihrer Suche stehen unten. Sie können die Ergebnisse entweder in der Tabellen-Ansicht oder in der Visitenkarten-Ansicht ansehen.";
$l['show_ip_addresses'] = "Zeige IP-Adressen";
$l['show_ip_addresses_desc'] = "Die Registrierungs-IP und die IPs mit denen der Benutzer Beiträge geschrieben hat, stehen unten. Die erste IP-Adresse ist die Registrierungs-IP (als solche markiert). Mit allen anderen IP-Adressen hat der Benutzer Beiträge geschrieben.";

$l['error_avatartoobig'] = "Der Avatar konnte leider nicht geändert werden, da der neue Avatar zu groß ist. Die maximale Größe ist {1}x{2} (Breite x Höhe)";
$l['error_invalidavatarurl'] = "Die eingegebene URL für Ihren Avatar scheint ungültig zu sein. Bitte geben Sie eine gültige URL ein.";
$l['error_invalid_user'] = "Sie haben einen ungültigen Benutzer ausgewählt.";
$l['error_no_perms_super_admin'] = "Sie haben keine Berechtigung diesen Benutzer zu bearbeiten, weil Sie kein Super-Administrator sind.";
$l['error_invalid_user_source'] = "Der Quell-Account existiert nicht";
$l['error_invalid_user_destination'] = "Der Ziel-Account exisiert nicht";
$l['error_cannot_merge_same_account'] = "Der Quell- und der Ziel-Account müssen unterschiedlich sein";
$l['error_no_users_found'] = "Es wurde kein Benutzer mit diesen Kritieren gefunden. Bitte ändern Sie Ihre Such-Kriterien und versuchen Sie es erneut.";
$l['error_invalid_admin_view'] = "Sie haben eine ungültige Verwaltungs-Ansicht ausgewählt.";
$l['error_missing_view_title'] = "Sie haben keinen Titel für diese Ansicht ausgewählt.";
$l['error_no_view_fields'] = "Sie haben kein Feld zum Anzeigen bei dieser Ansicht ausgewählt";
$l['error_invalid_view_perpage'] = "Sie haben eine ungültige Zahl an Ergebnissen pro Seite ausgewählt";
$l['error_invalid_view_sortby'] = "Sie haben ein ungültiges Feld zum Sortieren der Ergebnisse ausgewählt";
$l['error_invalid_view_sortorder'] = "Sie haben eine ungültige Such-Reihenfolge ausgewählt";
$l['error_invalid_view_delete'] = "Sie haben eine ungültige Verwaltungs-Ansicht zum Löschen ausgewählt";
$l['error_cannot_delete_view'] = "Sie brauchen mindestens eine Verwaltungs-Ansicht.";

$l['user_deletion_confirmation'] = "Wollen Sie diesen Benutzer wirklich löschen?";

$l['success_coppa_activated'] = "Der COPPA-Benutzer wurde erfolgreich aktiviert.";
$l['success_activated'] = "Der Benutzer wurde erfolgreich aktiviert.";
$l['success_user_created'] = "Der Benutzer wurde erfolgreich erstellt.";
$l['success_user_updated'] = "Der Benutzer wurde erfolgreich aktualisiert.";
$l['success_user_deleted'] = "Der Benutzer wurde erfolgreich gelöscht.";
$l['success_merged'] = "wurde erfolgreich zusammengefügt mit";
$l['succuss_view_set_as_default'] = "Die Verwaltungs-Ansicht wurde erfolgreich als Standard gesetzt";
$l['success_view_created'] = "Die Verwaltungs-Ansicht wurde erfolgreich erstellt";
$l['success_view_updated'] = "Die Verwaltungs-Ansicht wurde erfolgreich aktualisiert";
$l['success_view_deleted'] = "Die Verwaltungs-Ansicht wurde erfolgreich gelöscht";

$l['confirm_view_deletion'] = "Wollen Sie wirklich die ausgewählte Ansicht löschen?";

$l['warning_coppa_user'] = "<p class=\"alert\"><strong>Warnung: </strong> Dieser Benutzer wartet auf die COPPA-Validierung. <a href=\"index.php?module=user/users&amp;action=activate_user&amp;uid={1}\">Account aktivieren</a></p>";

$l['required_profile_info'] = "Benötigte Profil-Informationen";
$l['password'] = "Passwort";
$l['confirm_password'] = "Passwort bestätigen";
$l['email_address'] = "E-Mail-Adresse";
$l['use_primary_user_group'] = "Benutze Primäre Benutzergruppe";
$l['primary_user_group'] = "Primäre Benutzergruppe";
$l['additional_user_groups'] = "Sekundäre Benutzergruppen";
$l['additional_user_groups_desc'] = "Benutzen Sie STRG um mehrere Gruppen auszuwählen";
$l['display_user_group'] = "Anzeigegruppe";
$l['save_user'] = "Benutzer speichern";

$l['overview'] = "Übersicht";
$l['profile'] = "Profil";
$l['account_settings'] = "Account-Einstellungen";
$l['signature'] = "Signatur";
$l['avatar'] = "Avatar";
$l['general_account_stats'] = "Generelle Account-Statistiken";
$l['local_time'] = "Lokale Zeit";
$l['posts'] = "Beiträge";
$l['age'] = "Alter";
$l['posts_per_day'] = "Beiträge pro Tag";
$l['percent_of_total_posts'] = "Prozent aller Beiträge";
$l['user_overview'] = "Benutzer-Übersicht";

$l['new_password'] = "Neues Passwort";
$l['new_password_desc'] = "Nur bei Änderungen benötigt";
$l['confirm_new_password'] = "Neues Passwort bestätigen";

$l['optional_profile_info'] = "Optionale Profil-Informationen";
$l['custom_user_title'] = "Eigener Benutzertitel";
$l['custom_user_title_desc'] = "Wenn leer, wird der Titel der Benutzergruppe verwendet";
$l['website'] = "Website";
$l['icq_number'] = "ICQ Nummer";
$l['aim_handle'] = "AIM-ID";
$l['yahoo_messanger_handle'] = "Yahoo! Messenger-ID";
$l['msn_messanger_handle'] = "MSN Messenger-ID";

$l['hide_from_whos_online'] = "Auf der 'Wer ist online'-Liste verbergen";
$l['remember_login_details'] = "Login-Details für spätere Logins merken";
$l['login_cookies_privacy'] = "Login, Cookies &amp; Privatsphäre";
$l['recieve_admin_emails'] = "Empfange E-Mails von Administratoren";
$l['hide_email_from_others'] = "Verstecke E-Mail-Adresse vor anderen Benutzern";
$l['recieve_pms_from_others'] = "Empfange Private Nachrichten von anderen Benutzern";
$l['alert_new_pms'] = "Hinweis bei neuer privater Nachricht zeigen";
$l['email_notify_new_pms'] = "E-Mailbenachrichtigung bei neuer Privaten Nachricht";
$l['default_thread_subscription_mode'] = "Standard-Modus bei Themen-Abonnement";
$l['do_not_subscribe'] = "Nicht abonnieren";
$l['no_email_notification'] = "Keine E-Mail-Benachrichtigung";
$l['instant_email_notification'] = "sofortige E-Mail-Benachrichtigung";
$l['messaging_and_notification'] = "Nachrichten &amp; Benachrichtigungen";
$l['use_default'] = "Standard benutzen";
$l['date_format'] = "Datums-Format";
$l['time_format'] = "Zeit-Format";
$l['time_zone'] = "Zeitzone";
$l['daylight_savings_time_correction'] = "Sommerzeitkorrektur";
$l['automatically_detect'] = "Sommerzeitkorrektur automatisch erkennen";
$l['always_use_dst_correction'] = "Sommerzeitkorrektur immer benutzen";
$l['never_use_dst_correction'] = "Sommerzeitkorrektur niemals benutzen";
$l['date_and_time_options'] = "Datums- &amp; Zeit-Optionen";
$l['show_threads_last_day'] = "Zeige Themen des letzten Tages";
$l['show_threads_last_5_days'] = "Zeige Themen der letzten 5 Tage";
$l['show_threads_last_10_days'] = "Zeige Themen der letzten 10 Tage";
$l['show_threads_last_20_days'] = "Zeige Themen der letzten 20 Tage";
$l['show_threads_last_50_days'] = "Zeige Themen der letzten 50 Tage";
$l['show_threads_last_75_days'] = "Zeige Themen der letzten 75 Tage";
$l['show_threads_last_100_days'] = "Zeige Themen der letzten 100 Tage";
$l['show_threads_last_year'] = "Zeige Themen des letzten Jahres";
$l['show_all_threads'] = "Zeige alle Themen";
$l['threads_per_page'] = "Themen pro Seite";
$l['default_thread_age_view'] = "Standard Themen-Alter benutzen";
$l['forum_display_options'] = "Forenansicht-Optionen";
$l['display_users_sigs'] = "Signatur aller Benutzer in den Beiträgen anzeigen";
$l['display_users_avatars'] = "Avatare aller Benutzer in den Beiträgen anzeigen";
$l['show_quick_reply'] = "Schnellantwort unten in den Themen anzeigen";
$l['posts_per_page'] = "Beiträge pro Seite";
$l['default_thread_view_mode'] = "Themenansichtsmodus";
$l['linear_mode'] = "Lineare Struktur";
$l['threaded_mode'] = "Baumstruktur";
$l['thread_view_options'] = "Themenansichts-Optionen";
$l['show_redirect'] = "Zeige Weiterleitungsseiten";
$l['show_code_buttons'] = "Zeige die MyBBCode-Formatierungsoptionen bei der Beitragserstellung an";
$l['theme'] = "Forenstyle";
$l['board_language'] = "Forensprache";
$l['other_options'] = "Andere Optionen";
$l['signature'] = "Signatur";
$l['signature_desc'] = "Formatierungs-Optionen: MyCode ist {1}, Smilies sind {2}, IMG code ist {3}, HTML ist {4}";
$l['enable_sig_in_all_posts'] = "Signatur an alle Beiträge anhängen";
$l['disable_sig_in_all_posts'] = "Signatur an keinen Beitrag anhängen";
$l['do_nothing'] = "Signatur-Einstellungen nicht ändern";
$l['signature_preferences'] = "Signatur-Einstellungen";

$l['avatar'] = "Avatar";
$l['username'] = "Benutzername";
$l['email'] = "E-Mail-Adresse";
$l['primary_group'] = "Primäre Gruppe";
$l['additional_groups'] = "Sekundäre Gruppen";
$l['registered'] = "Registriert";
$l['last_active'] = "Letzte Aktivität";
$l['post_count'] = "Beitragsanzahl";
$l['reputation'] = "Bewertung";
$l['warning_level'] = "Verwarnlevel";
$l['registration_ip'] = "Registrierungs-IP";
$l['last_known_ip'] = "Letzte bekannte IP";
$l['registration_date'] = "Registrierungsdatum";

$l['avatar_gallery'] = "Avatar-Gallerie";
$l['current_avatar'] = "Aktuelles Avatar";
$l['user_current_using_uploaded_avatar'] = "Dieser Benutzer benutzt gerade einen hochgeladenen Avatar.";
$l['user_current_using_gallery_avatar'] = "Dieser Benutzer benutzt gerade einen Avatar aus der Avatar-Gallerie.";
$l['user_currently_using_remote_avatar'] = "Dieser Benutzer benutzt gerade einen verlinkten Avatar.";
$l['max_dimensions_are'] = "Die maximalen Abmessungen für Avatare sind";
$l['avatar_max_size'] = "Avatare können eine Maximum haben von";
$l['remove_avatar'] = "Aktuellen Avatar löschen?";
$l['avatar_desc'] = "Unten können Sie den Avatar dieses Benutzer verwalten. Avatare sind kleine Bilder, die in Beiträgen unter dem Namen der Autoren angezeigt werden.";
$l['avatar_auto_resize'] = "Wenn der Avatar zu groß ist, wird der automatisch angepasst";
$l['attempt_to_auto_resize'] = "Versuche den Avatar anzupassen, wenn er zu groß ist?";
$l['specify_custom_avatar'] = "Eigenen Avatar angeben";
$l['upload_avatar'] = "Avatar hochladen";
$l['or_specify_avatar_url'] = "oder Avatar-URL angeben";
$l['or_select_avatar_gallery'] = "oder aus der Avatar-Gallerie auswählen";

$l['ip_addresses'] = "IP-Adressen";
$l['ip_address'] = "IP-Adresse";
$l['show_users_regged_with_ip'] = "Suche Benutzer, die sich unter dieser IP registriert haben";
$l['show_users_posted_with_ip'] = "Suche Benutzer, die unter dieser IP Beiträge geschrieben haben";
$l['ban_ip'] = "IP sperren";
$l['ip_address_for'] = "IP-Adresse für";

$l['source_account'] = "Quell-Account";
$l['source_account_desc'] = "Dies ist der Account, der mit dem Ziel-Account zusammengefügt wird. Er wird nach dem Ausführen gelöscht.";
$l['destination_account'] = "Ziel-Account";
$l['destination_account_desc'] = "Dies ist der Account, in den der Quell-Account eingefügt wird. Er bleibt nach dem Ausführen erhalten.";
$l['merge_user_accounts'] = "Accounts zusammenfügen";

$l['display_options'] = "Anzeige-Optionen";
$l['ascending'] = "Aufsteigend";
$l['descending'] = "Absteigend";
$l['sort_results_by'] = "Sortiere Ergebnisse nach";
$l['in'] = "in";
$l['results_per_page'] = "Ergebnisse pro Seite";
$l['display_results_as'] = "Zeige Ergebnisse als";
$l['business_card'] = "Visitenkarten";
$l['views'] = "Ansichten";
$l['views_desc'] = "Die Ansichts-Verwaltung erlaubt Ihnen verschiedene Ansichten für einen bestimmten Bereich zu erstellen. Verschiedene Ansichten sind gut, um eine Vielfalt an Ergebnissen zu erhalten.";
$l['manage_views'] = "Ansichten verwalten";
$l['none'] = "Keine";
$l['search'] = "Suche";

$l['edit_profile_and_settings'] = "Profil und Einstellungen bearbeiten";
$l['ban_user'] = "Benutzer sperren";
$l['approve_coppa_user'] = "COPPA-Benutzer aktivieren";
$l['approve_user'] = "Benutzer aktivieren";
$l['delete_user'] = "Benutzer löschen";
$l['show_referred_users'] = "Durch Empfehlung registrierte Mitglieder";
$l['show_attachments'] = "Zeige Attachments";
$l['table_view'] = "Tabellen-Ansicht";
$l['card_view'] = "Karten-Ansicht";

$l['find_users_where'] = "Finde Benutzer mit folgenden Kriterien:";
$l['username_contains'] = "Benutzername enthält";
$l['email_address_contains'] = "E-Mail-Adresse enthält";
$l['is_member_of_groups'] = "Ist Mitglieder einer oder mehrerer dieser Benutzergruppen";
$l['website_contains'] = "Website enthält";
$l['icq_number_contains'] = "ICQ-Nummer enthält";
$l['aim_handle_contains'] = "AIM-ID enthält";
$l['yahoo_contains'] = "Yahoo! Messenger-ID enthält";
$l['msn_contains'] = "MSN Messenger-ID enthält";
$l['signature_contains'] = "Signatur enthält";
$l['user_title_contains'] = "Eigener Benutzertitel enthält";
$l['greater_than'] = "Größer als";
$l['is_exactly'] = "Ist genau";
$l['less_than'] = "Kleiner als";
$l['post_count_is'] = "Beitragsanzahl ist";
$l['reg_ip_matches'] = "Registrierungs-IP stimmt überein";
$l['wildcard'] = "* ist Platzhalter";
$l['last_known_ip'] = "Letzte bekannte IP-Adresse stimmt überein";
$l['posted_with_ip'] = "Hat mit der IP-Adresse Beiträge geschrieben";

$l['view'] = "Ansicht";
$l['create_new_view'] = "Neue Ansicht erstellen";
$l['create_new_view_desc'] = "Hier können Sie neue Ansichten für diesen Bereicht definieren. Sie können einstellen, welche Felder gezeigt werden und Such-Kriterien und die Sortierung definieren.";
$l['view_manager'] = "Ansichts-Verwaltung";
$l['set_as_default_view'] = "Als Standard-Ansicht setzen?";
$l['enabled'] = "Aktiv";
$l['disabled'] = "Gesperrt";
$l['fields_to_show'] = "Anzuzeigende Felder";
$l['fields_to_show_desc'] = "Bitte wählen Sie die Felder aus, die angezeigt werden sollen";
$l['edit_view'] = "Ansicht bearbeiten";
$l['edit_view_desc'] = "Beim Bearbeiten können Sie einstellen, welche Felder gezeigt werden und Such-Kriterien und die Sortierung definieren.";
$l['private'] = "Privat";
$l['private_desc'] = "Diese Ansicht können nur Sie sehen";
$l['public'] = "Öffentlich";
$l['public_desc'] = "Alle anderen Administratoren können diese Ansicht sehen";
$l['visibility'] = "Sichtbarkeit";
$l['save_view'] = "Ansicht speichern";
$l['created_by'] = "Erstellt von";
$l['default'] = "Standard";
$l['this_is_a_view'] = "Dies ist eine {1} Ansicht";
$l['set_as_default'] = "Als Standard setzen";
$l['delete_view'] = "Ansicht löschen";
$l['default_view_desc'] = "Vom MyBB erstelle Standard-Ansicht. Kann nicht bearbeitet oder gelöscht werden.";
$l['public_view_desc'] = "Öffentliche Ansicht für alle sichtbar.";
$l['private_view_desc'] = "Private Ansicht nur für dich sichtbar";
$l['table'] = "Tabelle";
$l['title'] = "Titel";

$l['view_title_1'] = "Alle Benutzer";

?>