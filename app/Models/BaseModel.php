<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * 
=======
>>>>>>> de0f89b5 (.)
=======
>>>>>>> 2e199498 (.)
=======
>>>>>>> eaeb6531 (.)
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // //use Cachable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'job';

    /** @var string|null */
    protected $prefix;
=======
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'xot';
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

    /** @var list<string> */
    protected $fillable = ['id'];

<<<<<<< HEAD
    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
=======
    protected $primaryKey = 'id';

>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(): void {
=======
    public function __construct(array $attributes = [])
    {
>>>>>>> de0f89b5 (.)
=======
    public function __construct(array $attributes = [])
    {
>>>>>>> 2e199498 (.)
=======
    public function __construct(array $attributes = [])
    {
>>>>>>> eaeb6531 (.)
        if (isset($this->prefix)) {
            $this->table = $this->prefix.$this->table;
        }

        parent::__construct($attributes);
    }

    /**
     * ----
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
=======
    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
