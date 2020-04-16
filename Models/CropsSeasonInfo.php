<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class CropsSeasonInfo
 * 
 * @property int $id
 * @property int $admin_id
 * @property string $season_no
 * @property string $ideal_planting_date
 * @property string $ideal_harvesting_date
 * @property string $possible_infestation
 * @property string $description
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property int $crop_id
 * 
 * @property Admin $admin
 * @property Crop $crop
 *
 * @package App\Models
 */
class CropsSeasonInfo extends Model
{
	use SoftDeletes;
	protected $table = 'crops_season_info';

	protected $casts = [
		'admin_id' => 'int',
		'status' => 'int',
		'crop_id' => 'int'
	];

	protected $fillable = [
		'admin_id',
		'season_no',
		'ideal_planting_date',
		'ideal_harvesting_date',
		'possible_infestation',
		'description',
		'status',
		'crop_id'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}

	public function crop()
	{
		return $this->belongsTo(Crop::class);
	}
}
