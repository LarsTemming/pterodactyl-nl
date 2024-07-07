<?php

/**
 * Bevat alle vertaalstrings voor verschillende activiteitenlogboek gebeurtenissen.
 * Deze moeten worden geïndexeerd op de waarde vóór de dubbele punt (:)
 * in de gebeurtenisnaam. Als er geen dubbele punt aanwezig is, moeten ze op
 * het hoogste niveau leven.
 */
return [
    'auth' => [
        'fail' => 'Mislukte aanmeldpoging',
        'success' => 'Aangemeld',
        'password-reset' => 'Wachtwoord reset',
        'reset-password' => 'Verzoek tot wachtwoord reset',
        'checkpoint' => 'Tweefactorauthenticatie aangevraagd',
        'recovery-token' => 'Gebruik gemaakt van tweefactor herstel token',
        'token' => 'Oplossing voor tweefactor uitdaging',
        'ip-blocked' => 'Geblokkeerd verzoek van ongeregistreerd IP-adres voor :identifier',
        'sftp' => [
            'fail' => 'Mislukte SFTP aanmeldpoging',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-mail gewijzigd van :old naar :new',
            'password-changed' => 'Wachtwoord gewijzigd',
        ],
        'api-key' => [
            'create' => 'Nieuwe API-sleutel gecreëerd :identifier',
            'delete' => 'API-sleutel verwijderd :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH-sleutel :fingerprint toegevoegd aan account',
            'delete' => 'SSH-sleutel :fingerprint verwijderd van account',
        ],
        'two-factor' => [
            'create' => 'Tweefactorauthenticatie ingeschakeld',
            'delete' => 'Tweefactorauthenticatie uitgeschakeld',
        ],
    ],
    'server' => [
        'reinstall' => 'Server opnieuw geïnstalleerd',
        'console' => [
            'command' => '":command" uitgevoerd op de server',
        ],
        'power' => [
            'start' => 'Server gestart',
            'stop' => 'Server gestopt',
            'restart' => 'Server herstart',
            'kill' => 'Serverproces gestopt',
        ],
        'backup' => [
            'download' => 'Backup :name gedownload',
            'delete' => 'Backup :name verwijderd',
            'restore' => 'Backup :name hersteld (verwijderde bestanden: :truncate)',
            'restore-complete' => 'Herstel van backup :name voltooid',
            'restore-failed' => 'Herstel van backup :name mislukt',
            'start' => 'Nieuwe backup :name gestart',
            'complete' => 'Backup :name gemarkeerd als voltooid',
            'fail' => 'Backup :name gemarkeerd als mislukt',
            'lock' => 'Backup :name vergrendeld',
            'unlock' => 'Backup :name ontgrendeld',
        ],
        'database' => [
            'create' => 'Nieuwe database :name gecreëerd',
            'rotate-password' => 'Wachtwoord geroteerd voor database :name',
            'delete' => 'Database :name verwijderd',
        ],
        'file' => [
            'compress_one' => ':directory:file gecomprimeerd',
            'compress_other' => ':count bestanden gecomprimeerd in :directory',
            'read' => 'Inhoud van :file bekeken',
            'copy' => 'Kopie gemaakt van :file',
            'create-directory' => 'Map :directory:name aangemaakt',
            'decompress' => ':files gedecomprimeerd in :directory',
            'delete_one' => ':directory:files.0 verwijderd',
            'delete_other' => ':count bestanden verwijderd in :directory',
            'download' => ':file gedownload',
            'pull' => 'Extern bestand gedownload van :url naar :directory',
            'rename_one' => ':directory:files.0.from hernoemd naar :directory:files.0.to',
            'rename_other' => ':count bestanden hernoemd in :directory',
            'write' => 'Nieuwe inhoud geschreven naar :file',
            'upload' => 'Bestand upload gestart',
            'uploaded' => ':directory:file geüpload',
        ],
        'sftp' => [
            'denied' => 'Toegang tot SFTP geblokkeerd vanwege rechten',
            'create_one' => ':files.0 gecreëerd',
            'create_other' => ':count nieuwe bestanden gecreëerd',
            'write_one' => 'Inhoud van :files.0 gewijzigd',
            'write_other' => 'Inhoud van :count bestanden gewijzigd',
            'delete_one' => ':files.0 verwijderd',
            'delete_other' => ':count bestanden verwijderd',
            'create-directory_one' => ':files.0 directory aangemaakt',
            'create-directory_other' => ':count directories aangemaakt',
            'rename_one' => ':files.0 hernoemd naar :files.1',
            'rename_other' => ':count bestanden hernoemd of verplaatst',
        ],
        'allocation' => [
            'create' => ':allocation toegevoegd aan de server',
            'notes' => 'Notities bijgewerkt voor :allocation van ":old" naar ":new"',
            'primary' => ':allocation ingesteld als primaire server allocatie',
            'delete' => 'Allocatie :allocation verwijderd',
        ],
        'schedule' => [
            'create' => 'Schema :name gecreëerd',
            'update' => 'Schema :name bijgewerkt',
            'execute' => 'Schema :name handmatig uitgevoerd',
            'delete' => 'Schema :name verwijderd',
        ],
        'task' => [
            'create' => 'Nieuwe ":action" taak gecreëerd voor schema :name',
            'update' => '":action" taak bijgewerkt voor schema :name',
            'delete' => 'Taak verwijderd voor schema :name',
        ],
        'settings' => [
            'rename' => 'Server hernoemd van :old naar :new',
            'description' => 'Server beschrijving gewijzigd van :old naar :new',
        ],
        'startup' => [
            'edit' => ':variable variabele gewijzigd van ":old" naar ":new"',
            'image' => 'Docker Image bijgewerkt voor de server van :old naar :new',
        ],
        'subuser' => [
            'create' => ':email toegevoegd als subgebruiker',
            'update' => 'Machtigingen voor subgebruiker :email bijgewerkt',
            'delete' => ':email verwijderd als subgebruiker',
        ],
    ],
];
