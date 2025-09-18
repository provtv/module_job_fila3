---
title: Configurazione Modulo
description: Configurazione Modulo
extends: _layouts.documentation
section: content
---

# Configurazione Modulo {#configurazione modulo}

Ricordarsi di modificare dentro laravel\config\event-sourcing.php, in quanto si dovrebbe usare il modulo Activity.
```php
    // 'stored_event_model' => Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent::class,
    'stored_event_model' => Modules\Activity\Models\StoredEvent::class,
``` 
<<<<<<< HEAD
<<<<<<< HEAD
---
title: Configurazione Modulo
description: Configurazione Modulo
extends: _layouts.documentation
section: content
---

# Configurazione Modulo {#configurazione modulo}

Ricordarsi di modificare dentro laravel\config\event-sourcing.php, in quanto si dovrebbe usare il modulo Activity.
```php
    // 'stored_event_model' => Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent::class,
    'stored_event_model' => Modules\Activity\Models\StoredEvent::class,
``` 
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
=======
>>>>>>> 688d0704 (first)
per memorizzare gli eventi dentro la tabella stored_events