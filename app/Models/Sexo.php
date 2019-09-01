<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sexo
 * 
 * @property int $id
 * @property string $Sexo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 *
 * @package App\Models
 */
class Sexo extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Sexo'
	];

	public function datospersonales()
	{
		return $this->hasMany(\App\Models\Datospersonale::class);
	}
}
