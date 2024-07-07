<?php

return [
    'daemon_connection_failed' => 'Er trad een uitzondering op bij het communiceren met de daemon, resulterend in een HTTP/:code responscode. Deze uitzondering is gelogd.',
    'node' => [
        'servers_attached' => 'Een node moet geen servers gekoppeld hebben om verwijderd te kunnen worden.',
        'daemon_off_config_updated' => 'De daemon configuratie <strong>is bijgewerkt</strong>, maar er trad een fout op bij het automatisch bijwerken van het configuratiebestand op de daemon. Je moet handmatig het configuratiebestand (config.yml) bijwerken om deze wijzigingen toe te passen.',
    ],
    'allocations' => [
        'server_using' => 'Er is momenteel een server toegewezen aan deze allocatie. Een allocatie kan alleen verwijderd worden als er geen server aan toegewezen is.',
        'too_many_ports' => 'Het toevoegen van meer dan 1000 poorten in één reeks tegelijk wordt niet ondersteund.',
        'invalid_mapping' => 'De opgegeven mapping voor :port was ongeldig en kon niet verwerkt worden.',
        'cidr_out_of_range' => 'CIDR notatie staat alleen maskers toe tussen /25 en /32.',
        'port_out_of_range' => 'Poorten in een allocatie moeten groter zijn dan 1024 en kleiner of gelijk aan 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Een Nest met actieve servers eraan gekoppeld kan niet verwijderd worden vanuit het Paneel.',
        'egg' => [
            'delete_has_servers' => 'Een Egg met actieve servers eraan gekoppeld kan niet verwijderd worden vanuit het Paneel.',
            'invalid_copy_id' => 'Het geselecteerde Egg om een script van te kopiëren bestaat niet of kopieert zelf een script.',
            'must_be_child' => 'De "Copy Settings From" directive voor dit Egg moet een child optie zijn voor het geselecteerde Nest.',
            'has_children' => 'Dit Egg is een ouder voor één of meer andere Eggs. Verwijder eerst die Eggs voordat je dit Egg verwijdert.',
        ],
        'variables' => [
            'env_not_unique' => 'De omgevingsvariabele :name moet uniek zijn voor dit Egg.',
            'reserved_name' => 'De omgevingsvariabele :name is beschermd en kan niet worden toegewezen aan een variabele.',
            'bad_validation_rule' => 'De validatieregel ":rule" is geen geldige regel voor deze toepassing.',
        ],
        'importer' => [
            'json_error' => 'Er trad een fout op bij het parsen van het JSON bestand: :error.',
            'file_error' => 'Het geleverde JSON bestand was niet geldig.',
            'invalid_json_provided' => 'Het geleverde JSON bestand heeft een onherkenbaar formaat.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Het bewerken van je eigen subgebruikersaccount is niet toegestaan.',
        'user_is_owner' => 'Je kunt de eigenaar van de server niet toevoegen als subgebruiker voor deze server.',
        'subuser_exists' => 'Een gebruiker met dat e-mailadres is al toegewezen als subgebruiker voor deze server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Kan geen database host server verwijderen die actieve databases eraan gekoppeld heeft.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'De maximale intervaltijd voor een gekoppelde taak is 15 minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Kan geen locatie verwijderen die actieve nodes eraan gekoppeld heeft.',
    ],
    'users' => [
        'node_revocation_failed' => 'Het intrekken van sleutels op <a href=":link">Node #:node</a> is mislukt. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Geen nodes voldoen aan de gestelde eisen voor automatische implementatie.',
        'no_viable_allocations' => 'Geen allocaties voldoen aan de gestelde eisen voor automatische implementatie.',
    ],
    'api' => [
        'resource_not_found' => 'De gevraagde bron bestaat niet op deze server.',
    ],
];
