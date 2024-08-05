<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $date
 * @property string $ordernumber
 * @property int $user_id
 * @property int $card_id
 * @property string $quantity
 * @property float $totalBill
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\card $card
 * @method static \Illuminate\Database\Eloquent\Builder|record newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|record newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|record query()
 * @method static \Illuminate\Database\Eloquent\Builder|record whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereOrdernumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereTotalBill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|record whereUserId($value)
 * @mixin \Eloquent
 */
class record extends Model
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
