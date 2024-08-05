<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $cardname
 * @property float $cardprice
 * @property string $file0
 * @property string $file1
 * @property string $file2
 * @property string $file3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\cart> $card
 * @property-read int|null $card_count
 * @method static \Illuminate\Database\Eloquent\Builder|card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|card query()
 * @method static \Illuminate\Database\Eloquent\Builder|card whereCardname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereCardprice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereFile0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereFile1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereFile2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereFile3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|card whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class card extends Model
{
    use HasFactory;
    public function card()
    {
        return $this->hasMany(cart::class);
    }
}
