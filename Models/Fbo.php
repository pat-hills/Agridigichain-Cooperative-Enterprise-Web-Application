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
 * Class Fbo
 * 
 * @property int $id
 * @property int $admin_id
 * @property string $name
 * @property string $state
 * @property string $location
 * @property string $contact
 * @property string $email
 * @property string $browselogo
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Admin $admin
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Fbo extends Model
{
	use SoftDeletes;
	protected $table = 'fbos';

	protected $casts = [
		'admin_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'admin_id',
		'name',
		'state',
		'location',
		'contact',
		'email',
		'browselogo',
		'status'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
