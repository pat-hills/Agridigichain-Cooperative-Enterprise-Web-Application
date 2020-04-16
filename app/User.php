<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Reliese\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property int $admin_id
 * @property int $fbo_id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property Carbon $email_verified_at
 * @property string $contact
 * @property string $image_url
 * @property string $role
 * @property string $status
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Admin $admin
 * @property Fbo $fbo
 * @property Collection|Farmer[] $farmers
 * @property Collection|MoneyIn[] $money_ins
 * @property Collection|MoneyOut[] $money_outs
 *
 * @package App\Models
 */
class User extends AuthUser
{
	use  HasApiTokens, Notifiable, SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'admin_id' => 'int',
		'fbo_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'admin_id',
		'fbo_id',
		'fullname',
		'email',
		'password',
		'email_verified_at',
		'contact',
		'image_url',
		'role',
		'status',
		'remember_token'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}

	public function fbo()
	{
		return $this->belongsTo(Fbo::class);
	}

	public function farmers()
	{
		return $this->hasMany(Farmer::class);
	}

	public function money_ins()
	{
		return $this->hasMany(MoneyIn::class);
	}

	public function money_outs()
	{
		return $this->hasMany(MoneyOut::class);
	}
}
