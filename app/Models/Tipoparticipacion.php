<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tiposparticipacion
 *
 * @property int $id
 * @property string $TipoParticipacion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $congresos
 * @property \Illuminate\Database\Eloquent\Collection $divulgaciones
 *
 * @package App\Models
 */
class Tipoparticipacion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tiposparticipacion';

	protected $fillable = [
		'TipoParticipacion'
	];

	public function congresos()
	{
		return $this->hasMany(\App\Models\Congreso::class, 'tipoParticipacion_id');
	}

	public function divulgaciones()
	{
		return $this->hasMany(\App\Models\Divulgacione::class, 'tipoParticipacion_id');
	}
}
