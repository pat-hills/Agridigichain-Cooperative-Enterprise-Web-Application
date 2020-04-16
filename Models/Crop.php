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
 * Class Crop
 * 
 * @property int $id
 * @property int $admin_id
 * @property string $name_of_crop
 * @property string $average_spacing
 * @property string $no_of_season
 * @property string $description
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Admin $admin
 * @property Collection|CropsSeasonInfo[] $crops_season_infos
 *
 * @package App\Models
 */
class Crop extends Model
{
	use SoftDeletes;
	protected $table = 'crops';

	protected $casts = [
		'admin_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'admin_id',
		'name_of_crop',
		'average_spacing',
		'no_of_season',
		'description',
		'status'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}

	public function crops_season_infos()
	{
		return $this->hasMany(CropsSeasonInfo::class);
	}
}
