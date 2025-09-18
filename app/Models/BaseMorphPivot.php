<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Job\Models;
=======
namespace Modules\Xot\Models;
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

<<<<<<< HEAD
    /** @var bool */
    public $timestamps = true;

=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
    protected $connection = 'job';
=======
    protected $connection = 'xot';
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];

<<<<<<< HEAD
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
=======
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',

>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
