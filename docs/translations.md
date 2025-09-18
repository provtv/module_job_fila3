# Traduzioni del Modulo Job

## Collegamenti

- [Modulo Lang](../../Lang/docs/module_lang.md) - Documentazione principale sulle traduzioni
- [Regole Generali Traduzioni](../../Xot/docs/translations.md)

## Struttura

```
Modules/Job/
└── lang/
    ├── it/
    │   └── job.php
    └── en/
        └── job.php
```

## Contenuto

Il file `job.php` contiene le traduzioni per:
- Gestione job
- Code di lavoro
- Processi in background
- Schedulazione
- Monitoraggio
- Log job
- Errori job
- Configurazione job
- Priorità
- Stati job

## Esempi

```php
return [
    'queue' => [
        'label' => 'Code di Lavoro',
        'tooltip' => 'Gestisci le code di lavoro'
    ],
    'monitoring' => [
        'label' => 'Monitoraggio',
        'tooltip' => 'Monitora lo stato dei job'
    ],
    'scheduling' => [
        'label' => 'Schedulazione',
        'tooltip' => 'Configura la schedulazione dei job'
    ],
    'errors' => [
        'label' => 'Errori',
        'tooltip' => 'Visualizza gli errori dei job'
    ]
];
``` 