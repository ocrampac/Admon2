<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Experienciasprofesionaldocente
 *
 * @property int $id
 * @property int $profesor_id
 * @property string $Empresa
 * @property string $Puesto
 * @property string $AñoInicio
 * @property string $AñoFin
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Profesor $profesor
 *
 * @package App\Models
 */
class Experienciaprofesionaldocente extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'experienciasprofesionaldocente';

	protected $casts = [
		'profesor_id' => 'int'
	];

	protected $fillable = [
		'profesor_id',
		'Empresa',
		'Puesto',
		'AñoInicio',
		'AñoFin'
	];

	public function profesor()
	{
		return $this->belongsTo(\App\Models\Profesor::class);
	}
}
