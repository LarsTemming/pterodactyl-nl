<?php

return [
    'permissions' => [
        'websocket_*' => 'Staat toegang toe tot de websocket voor deze server.',
        'control_console' => 'Staat de gebruiker toe gegevens naar de serverconsole te sturen.',
        'control_start' => 'Staat de gebruiker toe de serverinstantie te starten.',
        'control_stop' => 'Staat de gebruiker toe de serverinstantie te stoppen.',
        'control_restart' => 'Staat de gebruiker toe de serverinstantie te herstarten.',
        'control_kill' => 'Staat de gebruiker toe de serverinstantie te stoppen (killen).',
        'user_create' => 'Staat de gebruiker toe nieuwe gebruikersaccounts voor de server aan te maken.',
        'user_read' => 'Staat de gebruiker toe andere gebruikers die aan deze server zijn gekoppeld, te bekijken.',
        'user_update' => 'Staat de gebruiker toe andere gebruikers die aan deze server zijn gekoppeld, te wijzigen.',
        'user_delete' => 'Staat de gebruiker toe andere gebruikers die aan deze server zijn gekoppeld, te verwijderen.',
        'file_create' => 'Staat de gebruiker toe nieuwe bestanden en mappen aan te maken.',
        'file_read' => 'Staat de gebruiker toe bestanden en mappen te bekijken die aan deze serverinstantie zijn gekoppeld, inclusief de inhoud ervan.',
        'file_update' => 'Staat de gebruiker toe bestanden en mappen van de server bij te werken.',
        'file_delete' => 'Staat de gebruiker toe bestanden en mappen te verwijderen.',
        'file_archive' => 'Staat de gebruiker toe bestandsarchieven te maken en bestaande archieven uit te pakken.',
        'file_sftp' => 'Staat de gebruiker toe bovengenoemde bestandsacties uit te voeren met een SFTP-client.',
        'allocation_read' => 'Geeft toegang tot de pagina\'s voor serverallocatiebeheer.',
        'allocation_update' => 'Staat de gebruiker toe wijzigingen aan te brengen in de allocaties van de server.',
        'database_create' => 'Staat de gebruiker toe een nieuwe database voor de server aan te maken.',
        'database_read' => 'Staat de gebruiker toe de databases van de server te bekijken.',
        'database_update' => 'Staat de gebruiker toe wijzigingen aan te brengen in een database. Als de gebruiker niet ook toestemming heeft om het wachtwoord te bekijken, kan hij/zij het wachtwoord niet wijzigen.',
        'database_delete' => 'Staat de gebruiker toe een database-instantie te verwijderen.',
        'database_view_password' => 'Staat de gebruiker toe een database-wachtwoord in het systeem te bekijken.',
        'schedule_create' => 'Staat de gebruiker toe een nieuw schema voor de server aan te maken.',
        'schedule_read' => 'Staat de gebruiker toe schema\'s voor een server te bekijken.',
        'schedule_update' => 'Staat de gebruiker toe wijzigingen aan te brengen in een bestaand server-schema.',
        'schedule_delete' => 'Staat de gebruiker toe een schema voor de server te verwijderen.',
    ],
];
?>
