<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);



=======
>>>>>>> de0f89b5 (.)
=======
>>>>>>> 2e199498 (.)
=======
>>>>>>> eaeb6531 (.)
=======
>>>>>>> 2492ddab (first)
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
=======
declare(strict_types=1);

>>>>>>> 688d0704 (first)
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
<<<<<<< HEAD
    ->ignoreVCS(true)
<<<<<<< HEAD
<<<<<<< HEAD
=======
;
>>>>>>> 2492ddab (first)
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
=======
    ->ignoreVCS(true);
>>>>>>> 688d0704 (first)

$config = new PhpCsFixer\Config();

$config
    ->setRules([
        '@Symfony' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'combine_consecutive_unsets' => true,
<<<<<<< HEAD
        //'binary_operator_spaces' => ['align_double_arrow' => false],
=======
        // 'binary_operator_spaces' => ['align_double_arrow' => false],
>>>>>>> 688d0704 (first)
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'php_unit_construct' => false,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
    ])
<<<<<<< HEAD
    ->setFinder($finder)
<<<<<<< HEAD
<<<<<<< HEAD

return $config;
=======
;

return $config;
>>>>>>> 2492ddab (first)
=======

return $config;
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
=======
    ->setFinder($finder);

return $config;
>>>>>>> 688d0704 (first)
