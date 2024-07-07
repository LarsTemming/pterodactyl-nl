<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'U probeert de standaardallocatie voor deze server te verwijderen, maar er is geen fallback-allocatie om te gebruiken.',
        'marked_as_failed' => 'Deze server is gemarkeerd als mislukt bij een eerdere installatie. De huidige status kan in deze staat niet worden gewijzigd.',
        'bad_variable' => 'Er was een validatiefout met de variabele :name.',
        'daemon_exception' => 'Er was een uitzondering tijdens het proberen te communiceren met de daemon, resulterend in een HTTP/:code response code. Deze uitzondering is geregistreerd. (request id: :request_id)',
        'default_allocation_not_found' => 'De aangevraagde standaardallocatie is niet gevonden in de allocaties van deze server.',
    ],
    'alerts' => [
        'startup_changed' => 'De opstartconfiguratie voor deze server is bijgewerkt. Als het nest of ei van deze server is gewijzigd, zal nu een herinstallatie plaatsvinden.',
        'server_deleted' => 'Server is succesvol verwijderd uit het systeem.',
        'server_created' => 'Server is succesvol aangemaakt op het paneel. Geef de daemon een paar minuten om deze server volledig te installeren.',
        'build_updated' => 'De bouwdetails voor deze server zijn bijgewerkt. Sommige wijzigingen vereisen mogelijk een herstart om van kracht te worden.',
        'suspension_toggled' => 'De opschortingsstatus van de server is gewijzigd naar :status.',
        'rebuild_on_boot' => 'Deze server is gemarkeerd als vereist een heropbouw van de Docker-container. Dit zal gebeuren de volgende keer dat de server wordt gestart.',
        'install_toggled' => 'De installatiestatus voor deze server is gewijzigd.',
        'server_reinstalled' => 'Deze server is in de wachtrij geplaatst voor een herinstallatie die nu begint.',
        'details_updated' => 'Serverdetails zijn succesvol bijgewerkt.',
        'docker_image_updated' => 'Standaard Docker-afbeelding succesvol gewijzigd voor gebruik bij deze server. Een herstart is vereist om deze wijziging toe te passen.',
        'node_required' => 'Er moet ten minste één node geconfigureerd zijn voordat u een server aan dit paneel kunt toevoegen.',
        'transfer_nodes_required' => 'Er moeten ten minste twee nodes geconfigureerd zijn voordat u servers kunt overdragen.',
        'transfer_started' => 'Serveroverdracht is gestart.',
        'transfer_not_viable' => 'De geselecteerde node heeft niet de vereiste schijfruimte of geheugen beschikbaar om deze server te huisvesten.',
    ],
];
?>
