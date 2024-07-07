<?php

return [
    'location' => [
        'no_location_found' => 'Kon geen record vinden dat overeenkomt met de opgegeven korte code.',
        'ask_short' => 'Locatie Korte Code',
        'ask_long' => 'Locatie Omschrijving',
        'created' => 'Nieuwe locatie (:name) succesvol aangemaakt met ID :id.',
        'deleted' => 'De gevraagde locatie is succesvol verwijderd.',
    ],
    'user' => [
        'search_users' => 'Voer een gebruikersnaam, gebruikers-ID of e-mailadres in',
        'select_search_user' => 'ID van de gebruiker om te verwijderen (Voer \'0\' in om opnieuw te zoeken)',
        'deleted' => 'Gebruiker succesvol verwijderd uit het paneel.',
        'confirm_delete' => 'Weet u zeker dat u deze gebruiker wilt verwijderen uit het paneel?',
        'no_users_found' => 'Er zijn geen gebruikers gevonden voor de opgegeven zoekterm.',
        'multiple_found' => 'Meerdere accounts zijn gevonden voor de opgegeven gebruiker, kan de gebruiker niet verwijderen vanwege de --no-interaction vlag.',
        'ask_admin' => 'Is deze gebruiker een beheerder?',
        'ask_email' => 'E-mailadres',
        'ask_username' => 'Gebruikersnaam',
        'ask_name_first' => 'Voornaam',
        'ask_name_last' => 'Achternaam',
        'ask_password' => 'Wachtwoord',
        'ask_password_tip' => 'Als u een account wilt aanmaken met een willekeurig wachtwoord dat per e-mail naar de gebruiker wordt gestuurd, voer dan deze opdracht opnieuw uit (CTRL+C) en geef de `--no-password` vlag mee.',
        'ask_password_help' => 'Wachtwoorden moeten minimaal 8 tekens lang zijn en ten minste één hoofdletter en cijfer bevatten.',
        '2fa_help_text' => [
            'Met deze opdracht wordt tweefactorauthenticatie uitgeschakeld voor het account van de gebruiker als deze is ingeschakeld. Dit moet alleen worden gebruikt als een herstelopdracht als de gebruiker buitengesloten is van zijn account.',
            'Als dit niet is wat u wilde doen, druk dan op CTRL+C om dit proces te verlaten.',
        ],
        '2fa_disabled' => 'Tweefactorauthenticatie is uitgeschakeld voor :email.',
    ],
    'schedule' => [
        'output_line' => 'Taak wordt verzonden voor eerste taak in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Verwijderen van service-back-upbestand :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Heropbouwverzoek voor ":name" (#:id) op node ":node" is mislukt met foutmelding: :message',
        'reinstall' => [
            'failed' => 'Herinstallatieverzoek voor ":name" (#:id) op node ":node" is mislukt met foutmelding: :message',
            'confirm' => 'U staat op het punt opnieuw te installeren voor een groep servers. Wilt u doorgaan?',
        ],
        'power' => [
            'confirm' => 'U staat op het punt een :action uit te voeren tegen :count servers. Wilt u doorgaan?',
            'action_failed' => 'Verzoek voor stroomactie voor ":name" (#:id) op node ":node" is mislukt met foutmelding: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (bijv. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Poort',
            'ask_smtp_username' => 'SMTP Gebruikersnaam',
            'ask_smtp_password' => 'SMTP Wachtwoord',
            'ask_mailgun_domain' => 'Mailgun Domein',
            'ask_mailgun_endpoint' => 'Mailgun Endpoint',
            'ask_mailgun_secret' => 'Mailgun Geheim',
            'ask_mandrill_secret' => 'Mandrill Geheim',
            'ask_postmark_username' => 'Postmark API Sleutel',
            'ask_driver' => 'Welke driver moet worden gebruikt voor het verzenden van e-mails?',
            'ask_mail_from' => 'E-mailadres waarvan e-mails moeten worden verzonden',
            'ask_mail_name' => 'Naam waaronder e-mails moeten verschijnen',
            'ask_encryption' => 'Encryptiemethode te gebruiken',
        ],
    ],
];
?>
