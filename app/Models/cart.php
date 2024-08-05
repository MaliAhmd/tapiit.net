<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $card_id
 * @property int $user_id
 * @property int $quantity
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\card $card
 * @method static \Illuminate\Database\Eloquent\Builder|cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUserId($value)
 * @mixin \Eloquent
 */
class cart extends Model
{
    use HasFactory;
    public function card()
    {
        return $this->belongsTo(card::class);
    }
}
