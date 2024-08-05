<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $date
 * @property int $user_id
 * @property int $card_id
 * @property string|null $review
 * @property float $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\card $card
 * @method static \Illuminate\Database\Eloquent\Builder|reviews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|reviews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|reviews query()
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|reviews whereUserId($value)
 * @mixin \Eloquent
 */
class reviews extends Model
{
    use HasFactory;
    public function card()
    {
        return $this->belongsTo(card::class);
    }
}
