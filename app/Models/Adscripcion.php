<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:55:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Adscripcione
 *
 * @property int $id
 * @property string $Adscripcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $profesors
 *
 * @package App\Models
 */
class Adscripcion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Adscripcion'
	];

	public function profesor()
	{
		return $this->hasMany(\App\Models\Profesor::class, 'adscripcion_id');
	}
}
