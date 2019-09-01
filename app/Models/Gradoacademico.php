<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Gradosacademico
 *
 * @property int $id
 * @property int $datosPersonales_id
 * @property int $nivelEducativo_id
 * @property string $Titulo
 * @property int $modalidad_id
 * @property \Carbon\Carbon $FechaIngreso
 * @property int $tiempoDedicado_id
 * @property \Carbon\Carbon $FechaAsignaturasTerminadas
 * @property float $Promedio
 * @property int $tipoTitulacion_id
 * @property string $NombreTrabajoTitulacion
 * @property string $Trabajo
 * @property \Carbon\Carbon $FechaObtencionTitulo
 * @property string $CedulaProfesional
 * @property string $Institucion
 * @property string $Escuela
 * @property int $pais_id
 * @property string $Estado
 * @property string $Matricula
 * @property string $ApoyoEconomico
 * @property int $NumMesesConBeca
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Datospersonale $datospersonale
 * @property \App\Models\Niveleducativo $niveleducativo
 * @property \App\Models\Tiempodedicado $tiempodedicado
 * @property \App\Models\Tipostitulacion $tipostitulacion
 * @property \App\Models\Paise $paise
 * @property \App\Models\Modalidade $modalidade
 * @property \Illuminate\Database\Eloquent\Collection $practicasinternacionales
 * @property \Illuminate\Database\Eloquent\Collection $practicasnacionales
 * @property \Illuminate\Database\Eloquent\Collection $tesisdirigidas
 *
 * @package App\Models
 */
class Gradoacademico extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'gradosacademicos';
	protected $casts = [
		'datosPersonales_id' => 'int',
		'nivelEducativo_id' => 'int',
		'modalidad_id' => 'int',
		'tiempoDedicado_id' => 'int',
		'Promedio' => 'float',
		'tipoTitulacion_id' => 'int',
		'pais_id' => 'int',
		'NumMesesConBeca' => 'int'
	];

	protected $dates = [
		'FechaIngreso',
		'FechaAsignaturasTerminadas',
		'FechaObtencionTitulo'
	];

	protected $fillable = [
		'datosPersonales_id',
		'nivelEducativo_id',
		'Titulo',
		'modalidad_id',
		'FechaIngreso',
		'tiempoDedicado_id',
		'FechaAsignaturasTerminadas',
		'Promedio',
		'tipoTitulacion_id',
		'NombreTrabajoTitulacion',
		'Trabajo',
		'FechaObtencionTitulo',
		'CedulaProfesional',
		'Institucion',
		'Escuela',
		'pais_id',
		'Estado',
		'Matricula',
		'ApoyoEconomico',
		'NumMesesConBeca'
	];

	public function datospersonale()
	{
		return $this->belongsTo(\App\Models\Datospersonale::class, 'datosPersonales_id');
	}

	public function niveleducativo()
	{
		return $this->belongsTo(\App\Models\Niveleducativo::class, 'nivelEducativo_id');
	}

	public function tiempodedicado()
	{
		return $this->belongsTo(\App\Models\Tiempodedicado::class, 'tiempoDedicado_id');
	}

	public function tipostitulacion()
	{
		return $this->belongsTo(\App\Models\Tipostitulacion::class, 'tipoTitulacion_id');
	}

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'pais_id');
	}

	public function modalidade()
	{
		return $this->belongsTo(\App\Models\Modalidade::class, 'modalidad_id');
	}

	public function practicasinternacionales()
	{
		return $this->hasMany(\App\Models\Practicasinternacionale::class, 'gradoAcademico_id');
	}

	public function practicasnacionales()
	{
		return $this->hasMany(\App\Models\Practicasnacionale::class, 'gradoAcademico_id');
	}

	public function tesisdirigidas()
	{
		return $this->hasMany(\App\Models\Tesisdirigida::class, 'gradoAcademico_id');
	}
}
