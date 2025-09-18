<<<<<<< HEAD
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
=======
# Sistema di Traduzioni

## Struttura

### File di Traduzione
```
resources/lang/
├── it/
│   ├── broker.php
│   ├── ui.php
│   └── validation.php
└── en/
    ├── broker.php
    ├── ui.php
    └── validation.php
```

### Formato File
```php
return [
    'resources' => [
        'polizza_convenzione' => [
            'label' => 'Polizza in Convenzione',
            'plural_label' => 'Polizze in Convenzione',
            'navigation' => [
                'group' => 'Portafoglio',
                'icon' => 'heroicon-o-document-text',
                'sort' => 1,
            ],
            'columns' => [
                'numero_adesione' => 'Numero Adesione',
                'cliente' => 'Cliente',
                // ...
            ],
            'filters' => [
                'stato_pratica' => 'Stato Pratica',
                'convenzione' => 'Convenzione',
                // ...
            ],
            'actions' => [
                'create' => 'Nuova Polizza',
                'edit' => 'Modifica',
                'view' => 'Visualizza',
                // ...
            ],
        ],
    ],
];
```

## Utilizzo

### In Filament Resources
```php
// NON utilizzare ->label()
TextColumn::make('numero_adesione')
TextColumn::make('cliente.nominativo')
SelectFilter::make('stato_pratica_id')
```

### In Blade Views
```blade
@lang('broker.resources.polizza_convenzione.label')
{{ __('broker.resources.polizza_convenzione.columns.numero_adesione') }}
```

### In PHP
```php
trans('broker.resources.polizza_convenzione.label')
__('broker.resources.polizza_convenzione.columns.numero_adesione')
```

## Best Practices

### 1. Struttura Chiavi
- Utilizzare nomi descrittivi
- Mantenere una gerarchia logica
- Evitare duplicazioni
- Usare snake_case per le chiavi

### 2. Organizzazione File
- Un file per modulo
- Separare le traduzioni per contesto
- Mantenere coerenza tra lingue
- Documentare struttura complessa

### 3. Gestione Traduzioni
- Non cancellare traduzioni esistenti
- Aggiungere nuove traduzioni in modo incrementale
- Mantenere le traduzioni aggiornate
- Verificare completezza traduzioni

### 4. Performance
- Utilizzare cache delle traduzioni
- Caricare solo le traduzioni necessarie
- Evitare traduzioni dinamiche
- Ottimizzare file di grandi dimensioni

## LangService

### Caratteristiche
- Caricamento automatico traduzioni
- Fallback su lingua predefinita
- Cache delle traduzioni
- Supporto per più lingue

### Configurazione
```php
// config/xot.php
return [
    'translations' => [
        'default_locale' => 'it',
        'fallback_locale' => 'en',
        'cache_translations' => true,
        'cache_key' => 'translations',
        'cache_duration' => 3600,
    ],
];
```

### Metodi Principali
```php
// Carica tutte le traduzioni per una lingua
LangService::loadTranslations(string $locale): array

// Ottiene una traduzione con fallback
LangService::get(string $key, array $replace = []): string

// Verifica esistenza traduzione
LangService::has(string $key): bool

// Aggiunge traduzioni runtime
LangService::add(string $key, string $value): void
```

## Esempi Comuni

### Resource
```php
// Definizione traduzioni
'resources' => [
    'polizza_convenzione' => [
        'label' => 'Polizza in Convenzione',
        'columns' => [
            'numero_adesione' => 'Numero Adesione',
        ],
    ],
],

// Utilizzo in Resource
TextColumn::make('numero_adesione')
```

### Form
```php
// Definizione traduzioni
'forms' => [
    'cliente' => [
        'fields' => [
            'nome' => 'Nome',
            'cognome' => 'Cognome',
        ],
    ],
],

// Utilizzo in Form
TextInput::make('nome')
TextInput::make('cognome')
```

### Actions
```php
// Definizione traduzioni
'actions' => [
    'save' => 'Salva',
    'cancel' => 'Annulla',
    'delete' => [
        'label' => 'Elimina',
        'confirm' => 'Sei sicuro?',
    ],
],

// Utilizzo in Actions
Action::make('save')
Action::make('delete')
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
``` 