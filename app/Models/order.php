<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Card;

/**
 * 
 *
 * @property int $id
 * @property string $date
 * @property string $orderno
 * @property float $totalBill
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\card|null $card
 * @method static \Illuminate\Database\Eloquent\Builder|order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order query()
 * @method static \Illuminate\Database\Eloquent\Builder|order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereOrderno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereTotalBill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class order extends Model
{
    use HasFactory;
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'id', 
        'user_id',
        'date',
        'orderno',
        'totalBill',
        'status',
    ];
}
