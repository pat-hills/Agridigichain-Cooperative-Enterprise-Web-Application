<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class MoneyOut
 * 
 * @property int $id
 * @property int $user_id
 * @property int $farmer_id
 * @property string $itemName
 * @property string $quantity
 * @property string $unitPrice
 * @property int $totalPrice
 * @property string $dateAdded
 * @property string $description
 * @property string $weight
 * @property string $crop
 * @property string $category
 * @property string $money_out_month
 * @property string $money_year_year
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $status
 * 
 * @property Farmer $farmer
 * @property User $user
 *
 * @package App\Models
 */
class MoneyOut extends Model
{
	use SoftDeletes;
	protected $table = 'money_out';

	protected $casts = [
		'user_id' => 'int',
		'farmer_id' => 'int',
		'totalPrice' => 'int'
	];

	protected $fillable = [
		'user_id',
		'farmer_id',
		'itemName',
		'quantity',
		'unitPrice',
		'totalPrice',
		'dateAdded',
		'description',
		'weight',
		'crop',
		'category',
		'money_out_month',
		'money_year_year',
		'status'
	];

	public function farmer()
	{
		return $this->belongsTo(Farmer::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
