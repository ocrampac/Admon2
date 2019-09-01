<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tiposcontrato
 *
 * @property int $id
 * @property string $TipoContrato
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $profesors
 *
 * @package App\Models
 */
class Tipocontrato extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tiposcontrato';

	protected $fillable = [
		'TipoContrato'
	];

	public function profesors()
	{
		return $this->hasMany(\App\Models\Profesor::class, 'tipoContrato_id');
	}
}
