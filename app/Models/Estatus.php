<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estatus
 * 
 * @property int $id
 * @property string $Nombre
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $profesors
 *
 * @package App\Models
 */
class Estatus extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'estatus';

	protected $fillable = [
		'Nombre'
	];

	public function profesors()
	{
		return $this->hasMany(\App\Models\Profesor::class);
	}
}
