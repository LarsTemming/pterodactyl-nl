<?php

return [
    'email' => [
        'title' => 'Werk uw e-mailadres bij',
        'updated' => 'Uw e-mailadres is bijgewerkt.',
    ],
    'password' => [
        'title' => 'Verander uw wachtwoord',
        'requirements' => 'Uw nieuwe wachtwoord moet minimaal 8 tekens lang zijn.',
        'updated' => 'Uw wachtwoord is bijgewerkt.',
    ],
    'two_factor' => [
        'button' => 'Configureer Tweefactorauthenticatie',
        'disabled' => 'Tweefactorauthenticatie is uitgeschakeld op uw account. U wordt niet langer gevraagd om een token in te voeren bij het inloggen.',
        'enabled' => 'Tweefactorauthenticatie is ingeschakeld op uw account! Vanaf nu wordt u bij het inloggen gevraagd om de code in te voeren die is gegenereerd door uw apparaat.',
        'invalid' => 'Het opgegeven token was ongeldig.',
        'setup' => [
            'title' => 'Stel tweefactorauthenticatie in',
            'help' => 'Kunt u de code niet scannen? Voer de code hieronder in uw applicatie in:',
            'field' => 'Voer token in',
        ],
        'disable' => [
            'title' => 'Schakel tweefactorauthenticatie uit',
            'field' => 'Voer token in',
        ],
    ],
];
?>
