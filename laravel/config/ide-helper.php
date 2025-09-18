<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Filename & Format
    |--------------------------------------------------------------------------
    |
    | The default filename
=======
return [

    /*
    |--------------------------------------------------------------------------
    | Filename
    |--------------------------------------------------------------------------
    |
    | The default filename.
>>>>>>> 688d0704 (first)
    |
    */

    'filename' => '_ide_helper.php',

    /*
    |--------------------------------------------------------------------------
    | Models filename
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | The default filename for the models helper file
=======
    | The default filename for the models helper file.
>>>>>>> 688d0704 (first)
    |
    */

    'models_filename' => '_ide_helper_models.php',

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Where to write the PhpStorm specific meta file
=======
    | PhpStorm meta filename
>>>>>>> 688d0704 (first)
    |--------------------------------------------------------------------------
    |
    | PhpStorm also supports the directory `.phpstorm.meta.php/` with arbitrary
    | files in it, should you need additional files for your project; e.g.
    | `.phpstorm.meta.php/laravel_ide_Helper.php'.
    |
    */
    'meta_filename' => '.phpstorm.meta.php',

    /*
    |--------------------------------------------------------------------------
    | Fluent helpers
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Set to true to generate commonly used Fluent methods
=======
    | Set to true to generate commonly used Fluent methods.
>>>>>>> 688d0704 (first)
    |
    */

    'include_fluent' => false,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Factory Builders
=======
    | Factory builders
>>>>>>> 688d0704 (first)
    |--------------------------------------------------------------------------
    |
    | Set to true to generate factory generators for better factory()
    | method auto-completion.
    |
    | Deprecated for Laravel 8 or latest.
    |
    */

    'include_factory_builders' => false,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Write Model Magic methods
    |--------------------------------------------------------------------------
    |
    | Set to false to disable write magic methods of model
=======
    | Write model magic methods
    |--------------------------------------------------------------------------
    |
    | Set to false to disable write magic methods of model.
>>>>>>> 688d0704 (first)
    |
    */

    'write_model_magic_where' => true,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Write Model External Eloquent Builder methods
    |--------------------------------------------------------------------------
    |
    | Set to false to disable write external eloquent builder methods
=======
    | Write model external Eloquent builder methods
    |--------------------------------------------------------------------------
    |
    | Set to false to disable write external Eloquent builder methods.
>>>>>>> 688d0704 (first)
    |
    */

    'write_model_external_builder_methods' => true,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Write Model relation count properties
=======
    | Write model relation count properties
>>>>>>> 688d0704 (first)
    |--------------------------------------------------------------------------
    |
    | Set to false to disable writing of relation count properties to model DocBlocks.
    |
    */

    'write_model_relation_count_properties' => true,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Write Eloquent Model Mixins
    |--------------------------------------------------------------------------
    |
    | This will add the necessary DocBlock mixins to the model class
    | contained in the Laravel Framework. This helps the IDE with
=======
    | Write Eloquent model mixins
    |--------------------------------------------------------------------------
    |
    | This will add the necessary DocBlock mixins to the model class
    | contained in the Laravel framework. This helps the IDE with
>>>>>>> 688d0704 (first)
    | auto-completion.
    |
    | Please be aware that this setting changes a file within the /vendor directory.
    |
    */

    'write_eloquent_model_mixins' => false,

    /*
    |--------------------------------------------------------------------------
    | Helper files to include
    |--------------------------------------------------------------------------
    |
    | Include helper files. By default not included, but can be toggled with the
    | -- helpers (-H) option. Extra helper files can be included.
    |
    */

    'include_helpers' => false,

    'helper_files' => [
<<<<<<< HEAD
        base_path().'/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
=======
        base_path() . '/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
>>>>>>> 688d0704 (first)
    ],

    /*
    |--------------------------------------------------------------------------
    | Model locations to include
    |--------------------------------------------------------------------------
    |
    | Define in which directories the ide-helper:models command should look
    | for models.
    |
    | glob patterns are supported to easier reach models in sub-directories,
<<<<<<< HEAD
    | e.g. `app/Services/* /Models` (without the space)
=======
    | e.g. `app/Services/* /Models` (without the space).
>>>>>>> 688d0704 (first)
    |
    */

    'model_locations' => [
<<<<<<< HEAD
        // 'app',
        'Modules/Activity/Models',
        'Modules/Blog/Models',
        'Modules/Cms/Models',
        'Modules/Gdpr/Models',
        'Modules/Job/Models',
        'Modules/Lang/Models',
        'Modules/Media/Models',
        'Modules/Notify/Models',
        'Modules/Predict/Models',
        'Modules/Rating/Models',
        'Modules/Seo/Models',
        'Modules/Setting/Models',
        'Modules/Tenant/Models',
        'Modules/UI/Models',
        'Modules/User/Models',
        'Modules/Xot/Models',
=======
        'app',
>>>>>>> 688d0704 (first)
    ],

    /*
    |--------------------------------------------------------------------------
    | Models to ignore
    |--------------------------------------------------------------------------
    |
    | Define which models should be ignored.
    |
    */

    'ignored_models' => [
<<<<<<< HEAD
=======
        // App\MyModel::class,
>>>>>>> 688d0704 (first)
    ],

    /*
    |--------------------------------------------------------------------------
    | Models hooks
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Define which hook classes you want to run for models to add custom information
=======
    | Define which hook classes you want to run for models to add custom information.
>>>>>>> 688d0704 (first)
    |
    | Hooks should implement Barryvdh\LaravelIdeHelper\Contracts\ModelHookInterface.
    |
    */

    'model_hooks' => [
        // App\Support\IdeHelper\MyModelHook::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Extra classes
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | These implementations are not really extended, but called with magic functions
=======
    | These implementations are not really extended, but called with magic functions.
>>>>>>> 688d0704 (first)
    |
    */

    'extra' => [
        'Eloquent' => ['Illuminate\Database\Eloquent\Builder', 'Illuminate\Database\Query\Builder'],
        'Session' => ['Illuminate\Session\Store'],
    ],

    'magic' => [],

    /*
    |--------------------------------------------------------------------------
    | Interface implementations
    |--------------------------------------------------------------------------
    |
    | These interfaces will be replaced with the implementing class. Some interfaces
    | are detected by the helpers, others can be listed below.
    |
    */

    'interfaces' => [
<<<<<<< HEAD
=======
        // App\MyInterface::class => App\MyImplementation::class,
>>>>>>> 688d0704 (first)
    ],

    /*
     |--------------------------------------------------------------------------
     | Support for camel cased models
     |--------------------------------------------------------------------------
     |
     | There are some Laravel packages (such as Eloquence) that allow for accessing
     | Eloquent model properties via camel case, instead of snake case.
     |
     | Enabling this option will support these packages by saving all model
     | properties as camel case, instead of snake case.
     |
     | For example, normally you would see this:
     |
     |  * @property \Illuminate\Support\Carbon $created_at
     |  * @property \Illuminate\Support\Carbon $updated_at
     |
     | With this enabled, the properties will be this:
     |
     |  * @property \Illuminate\Support\Carbon $createdAt
     |  * @property \Illuminate\Support\Carbon $updatedAt
     |
     | Note, it is currently an all-or-nothing option.
     |
     */
    'model_camel_case_properties' => false,

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Property Casts
=======
    | Property casts
>>>>>>> 688d0704 (first)
    |--------------------------------------------------------------------------
    |
    | Cast the given "real type" to the given "type".
    |
    */
    'type_overrides' => [
        'integer' => 'int',
        'boolean' => 'bool',
    ],

    /*
    |--------------------------------------------------------------------------
    | Include DocBlocks from classes
    |--------------------------------------------------------------------------
    |
    | Include DocBlocks from classes to allow additional code inspection for
    | magic methods and properties.
    |
    */
    'include_class_docblocks' => false,

    /*
    |--------------------------------------------------------------------------
    | Force FQN usage
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Use the fully qualified (class) name in docBlock,
    | event if class exists in a given file
    | or there is an import (use className) of a given class
=======
    | Use the fully qualified (class) name in DocBlocks,
    | even if the class exists in the same namespace
    | or there is an import (use className) of the class.
>>>>>>> 688d0704 (first)
    |
    */
    'force_fqn' => false,

    /*
    |--------------------------------------------------------------------------
    | Use generics syntax
    |--------------------------------------------------------------------------
    |
    | Use generics syntax within DocBlocks,
    | e.g. `Collection<User>` instead of `Collection|User[]`.
    |
    */
    'use_generics_annotations' => true,

    /*
    |--------------------------------------------------------------------------
    | Additional relation types
    |--------------------------------------------------------------------------
    |
    | Sometimes it's needed to create custom relation types. The key of the array
<<<<<<< HEAD
    | is the Relationship Method name. The value of the array is the canonical class
    | name of the Relationship, e.g. `'relationName' => RelationShipClass::class`.
=======
    | is the relationship method name. The value of the array is the fully-qualified
    | class name of the relationship, e.g. `'relationName' => RelationShipClass::class`.
>>>>>>> 688d0704 (first)
    |
    */
    'additional_relation_types' => [],

    /*
    |--------------------------------------------------------------------------
    | Additional relation return types
    |--------------------------------------------------------------------------
    |
    | When using custom relation types its possible for the class name to not contain
    | the proper return type of the relation. The key of the array is the relationship
    | method name. The value of the array is the return type of the relation ('many'
    | or 'morphTo').
    | e.g. `'relationName' => 'many'`.
    |
    */
    'additional_relation_return_types' => [],

    /*
    |--------------------------------------------------------------------------
    | Run artisan commands after migrations to generate model helpers
    |--------------------------------------------------------------------------
    |
    | The specified commands should run after migrations are finished running.
    |
    */
    'post_migrate' => [
        // 'ide-helper:models --nowrite',
    ],
<<<<<<< HEAD
=======

>>>>>>> 688d0704 (first)
];
