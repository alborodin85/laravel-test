<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int id
 * @property string $title
 * @property string $content
 * @property float $price
 * @property User $user
 *
 * @method static Builder where(...$params)
 * @method static Builder latest(...$params)
 * @method static self find(...$params)
 */
class Bb extends Model
{
    protected $fillable = ['title', 'content', 'price'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
