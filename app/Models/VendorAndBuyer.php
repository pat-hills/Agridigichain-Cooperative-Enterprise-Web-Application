<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class VendorAndBuyer
 * 
 * @property int $id
 * @property int $admin_id
 * @property string $fullname
 * @property string $email
 * @property string $contact
 * @property string $address
 * @property string $location
 * @property string $category
 * @property string $status
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Admin $admin
 *
 * @package App\Models
 */
class VendorAndBuyer extends Model
{
	use SoftDeletes;
	protected $table = 'vendor_and_buyer';

	protected $casts = [
		'admin_id' => 'int'
	];

	protected $fillable = [
		'admin_id',
		'fullname',
		'email',
		'contact',
		'address',
		'location',
		'category',
		'status',
		'description'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class);
	}
}
