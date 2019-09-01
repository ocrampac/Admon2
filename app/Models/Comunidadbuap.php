<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Comunidadbuap
 * 
 * @property int $id
 * @property string $ComunidadBuap
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 *
 * @package App\Models
 */
class Comunidadbuap extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'comunidadbuap';

	protected $fillable = [
		'ComunidadBuap'
	];

	public function datospersonales()
	{
		return $this->hasMany(\App\Models\Datospersonale::class, 'comunidadBuap_id');
	}
}
