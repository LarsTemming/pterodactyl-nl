<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'De opgegeven FQDN of IP-adres lost niet op naar een geldig IP-adres.',
        'fqdn_required_for_ssl' => 'Een volledig gekwalificeerde domeinnaam die oplost naar een openbaar IP-adres is vereist om SSL voor deze node te gebruiken.',
    ],
    'notices' => [
        'allocations_added' => 'Toewijzingen zijn succesvol toegevoegd aan deze node.',
        'node_deleted' => 'Node is succesvol verwijderd uit het paneel.',
        'location_required' => 'U moet minstens één locatie geconfigureerd hebben voordat u een node aan dit paneel kunt toevoegen.',
        'node_created' => 'Nieuw node succesvol aangemaakt. U kunt de daemon op deze machine automatisch configureren door naar het tabblad \'Configuratie\' te gaan. <strong>Voordat u servers kunt toevoegen, moet u eerst ten minste één IP-adres en poort toewijzen.</strong>',
        'node_updated' => 'Node-informatie is bijgewerkt. Als er daemon-instellingen zijn gewijzigd, moet u deze opnieuw opstarten om de wijzigingen door te voeren.',
        'unallocated_deleted' => 'Alle niet-toegewezen poorten voor <code>:ip</code> verwijderd.',
    ],
];
?>
