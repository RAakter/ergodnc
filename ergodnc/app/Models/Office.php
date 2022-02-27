<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory, SoftDeletes;

    // approval status values
    const APPROVAL_PENDING  = 1;
    const APPROVAL_APPROVED = 2;
    const APPROVAL_REJECTED = 3;

    // cast
    public $casts = [
        'lat' => 'decimal:8',
        'lng' => 'decimal:8',
        'approval_status' => 'integer',
        'hidden' => 'bool',
        'price_per_day' => 'integer',
        'monthly_discount' => 'integer',
    ];

    /**
     * Define the relation with user.
     *
     * @return BelongsTo
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

      /**
     * Define the relation with reservation.
     *
     * @return HasMany
     */

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    /**
     * Define the relation with image.
     *
     * @return MorphMany
     */

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'resource');
    }

    /**
     * Define the relation with tag.
     *
     * @return BelongsToMany
     */

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'offices_tags');
    }
}
