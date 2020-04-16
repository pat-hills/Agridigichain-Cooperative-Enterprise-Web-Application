<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property Carbon $email_verified_at
 * @property string $contact
 * @property string $country
 * @property string $status
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $name_of_organization
 * @property string $type_of_organization
 * 
 * @property Collection|Fbo[] $fbos
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Admin extends Authenticatable
{
	use SoftDeletes;
	protected $table = 'admins';
	protected $guard = 'admin';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'fullname',
		'email',
		'password',
		'email_verified_at',
		'contact',
		'country',
		'status',
		'remember_token',
		'name_of_organization',
		'type_of_organization'
	];

	public function fbos()
	{
		return $this->hasMany(Fbo::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
