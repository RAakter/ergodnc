<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

     // status values
     const STATUS_ACTIVE  = 1;
     const STATUS_CANCELED = 2;

    // cast
    public $casts = [
        'price' => 'integer',
        'status' => 'integer',
        'hidden' => 'bool',
        'start_date' => 'immutable_date',
        'end_date' => 'immutable_date',
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
     * Define the relation with office.
     *
     * @return BelongsTo
     */

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    
}
