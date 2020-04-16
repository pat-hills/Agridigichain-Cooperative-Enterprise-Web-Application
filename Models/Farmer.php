<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class Farmer
 * 
 * @property int $id
 * @property int $user_id
 * @property string $fullname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $contact
 * @property string $location
 * @property string $age
 * @property string $marital_status
 * @property string $educational_level
 * @property string $main_occupation
 * @property string $minor_occupation
 * @property string $dependants
 * @property string $farm_acres
 * @property string $main_crop
 * @property string $image_url
 * @property string $thumb_scan
 * @property string $index_scan
 * @property string $middle_scan
 * @property string $ring_scan
 * @property string $little_scan
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $type_of_soil
 * @property string $color_of_soil
 * @property string $texture_of_soil
 * 
 * @property User $user
 * @property Collection|FarmVisit[] $farm_visits
 * @property Collection|MoneyIn[] $money_ins
 * @property Collection|MoneyOut[] $money_outs
 *
 * @package App\Models
 */
class Farmer extends Model
{
	use SoftDeletes;
	protected $table = 'farmers';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_id',
		'fullname',
		'username',
		'email',
		'password',
		'gender',
		'contact',
		'location',
		'age',
		'marital_status',
		'educational_level',
		'main_occupation',
		'minor_occupation',
		'dependants',
		'farm_acres',
		'main_crop',
		'image_url',
		'thumb_scan',
		'index_scan',
		'middle_scan',
		'ring_scan',
		'little_scan',
		'status',
		'type_of_soil',
		'color_of_soil',
		'texture_of_soil'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function farm_visits()
	{
		return $this->hasMany(FarmVisit::class);
	}

	public function money_ins()
	{
		return $this->hasMany(MoneyIn::class, 'farmerId');
	}

	public function money_outs()
	{
		return $this->hasMany(MoneyOut::class);
	}
}
