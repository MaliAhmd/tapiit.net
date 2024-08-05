<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $card_id
 * @property string $buythis
 * @property string $getoff
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\card $card
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereBuythis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereGetoff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class offer extends Model
{
    use HasFactory;
    public function card()
    {
        return $this->belongsTo(card::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
