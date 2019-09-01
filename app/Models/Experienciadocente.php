<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Experienciadocente
 *
 * @property int $id
 * @property int $profesor_id
 * @property int $nivelEducativo_id
 * @property string $Institucion
 * @property string $AñoInicio
 * @property string $AñoFin
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Profesor $profesor
 * @property \App\Models\Niveleducativo $niveleducativo
 * @property \Illuminate\Database\Eloquent\Collection $docenciaposgrados
 *
 * @package App\Models
 */
class Experienciadocente extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'experienciasdocente';

	protected $casts = [
		'profesor_id' => 'int',
		'nivelEducativo_id' => 'int'
	];

	protected $fillable = [
		'profesor_id',
		'nivelEducativo_id',
		'Institucion',
		'AñoInicio',
		'AñoFin'
	];

	public function profesor()
	{
		return $this->belongsTo(\App\Models\Profesor::class);
	}

	public function niveleducativo()
	{
		return $this->belongsTo(\App\Models\Niveleducativo::class, 'nivelEducativo_id');
	}

	public function docenciaposgrados()
	{
		return $this->hasMany(\App\Models\Docenciaposgrado::class, 'experienciaDocente_id');
	}
}
