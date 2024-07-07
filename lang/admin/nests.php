<?php

return [
    'notices' => [
        'created' => 'Een nieuw nest, :name, is succesvol aangemaakt.',
        'deleted' => 'Het aangevraagde nest is succesvol verwijderd uit het paneel.',
        'updated' => 'De nestconfiguratie-opties zijn succesvol bijgewerkt.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Dit ei en de bijbehorende variabelen zijn succesvol geïmporteerd.',
            'updated_via_import' => 'Dit ei is bijgewerkt met behulp van het meegeleverde bestand.',
            'deleted' => 'Het aangevraagde ei is succesvol verwijderd uit het paneel.',
            'updated' => 'De ei-configuratie is succesvol bijgewerkt.',
            'script_updated' => 'Het ei-installatiescript is bijgewerkt en zal worden uitgevoerd wanneer servers worden geïnstalleerd.',
            'egg_created' => 'Een nieuw ei is succesvol gelegd. U moet alle draaiende demonen opnieuw starten om dit nieuwe ei toe te passen.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'De variabele ":variable" is verwijderd en zal niet langer beschikbaar zijn voor servers zodra ze opnieuw worden opgebouwd.',
            'variable_updated' => 'De variabele ":variable" is bijgewerkt. U moet alle servers die deze variabele gebruiken opnieuw opbouwen om de wijzigingen toe te passen.',
            'variable_created' => 'Nieuwe variabele is succesvol aangemaakt en toegewezen aan dit ei.',
        ],
    ],
];
?>
