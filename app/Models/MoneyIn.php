<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class MoneyIn
 * 
 * @property int $id
 * @property int $farmerId
 * @property int $user_id
 * @property string $itemName
 * @property string $quantity
 * @property float $unitPrice
 * @property float $totalPrice
 * @property Carbon $dateAdded
 * @property string $description
 * @property string $weight
 * @property string $crop
 * @property string $money_in_month
 * @property string $money_in_year
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
class MoneyIn extends Model
{
	use SoftDeletes;
	protected $table = 'money_in';

	protected $casts = [
		'farmerId' => 'int',
		'user_id' => 'int',
		'unitPrice' => 'float',
		'totalPrice' => 'float'
	];

	protected $dates = [
		'dateAdded'
	];

	protected $fillable = [
		'farmerId',
		'user_id',
		'itemName',
		'quantity',
		'unitPrice',
		'totalPrice',
		'dateAdded',
		'description',
		'weight',
		'crop',
		'money_in_month',
		'money_in_year',
		'status'
	];

	public function farmer()
	{
		return $this->belongsTo(Farmer::class, 'farmerId');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
