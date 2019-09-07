<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Datospersonale
 *
 * @property int $id
 * @property string $Nombre
 * @property string $ApellidoP
 * @property string $ApellidoM
 * @property int $sexo_id
 * @property int $estadoCivil_id
 * @property int $paisOrigen_id
 * @property string $RFC
 * @property string $CURP
 * @property string $LugarNacimiento
 * @property \Carbon\Carbon $FechaNac
 * @property string $Domicilio
 * @property string $Municipio
 * @property int $entidadFederativa_id
 * @property string $CP
 * @property string $ContactoTelefonico
 * @property string $ContactoTelefonico2
 * @property string $Facebook
 * @property string $Twitter
 * @property string $CorreoAlternativo
 * @property string $Correo
 * @property int $comunidadBuap_id
 * @property int $autor_id
 * @property string $Matricula
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Sexo $sexo
 * @property \App\Models\Estadoscivile $estadoscivile
 * @property \App\Models\Paise $paise
 * @property \App\Models\Autore $autore
 * @property \App\Models\Comunidadbuap $comunidadbuap
 * @property \App\Models\Entidadesfederativa $entidadesfederativa
 * @property \Illuminate\Database\Eloquent\Collection $datoslaboralesalumnos
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 * @property \Illuminate\Database\Eloquent\Collection $profesors
 *
 * @package App\Models
 */
class Datopersonal extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'datospersonales';
	protected $casts = [
		'FechaNac' => 'datetime:Y-m-d',
		'sexo_id' => 'int',
		'estadoCivil_id' => 'int',
		'paisOrigen_id' => 'int',
		'entidadFederativa_id' => 'int',
		'comunidadBuap_id' => 'int',
		'autor_id' => 'int'
	];

	protected $dates = [
		'FechaNac'
	];


	protected $fillable = [
		'Nombre',
		'ApellidoP',
		'ApellidoM',
		'sexo_id',
		'estadoCivil_id',
		'paisOrigen_id',
		'RFC',
		'CURP',
		'LugarNacimiento',
		'FechaNac',
		'Domicilio',
		'Municipio',
		'entidadFederativa_id',
		'CP',
		'ContactoTelefonico',
		'ContactoTelefonico2',
		'Facebook',
		'Twitter',
		'CorreoAlternativo',
		'Correo',
		'comunidadBuap_id',
		'autor_id',
		'Matricula'
	];

	public function sexo()
	{
		return $this->belongsTo(\App\Models\Sexo::class);
	}

	public function estadoscivile()
	{
		return $this->belongsTo(\App\Models\Estadoscivile::class, 'estadoCivil_id');
	}

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'paisOrigen_id');
	}

	public function autore()
	{
		return $this->belongsTo(\App\Models\Autore::class, 'autor_id');
	}

	public function comunidadbuap()
	{
		return $this->belongsTo(\App\Models\Comunidadbuap::class, 'comunidadBuap_id');
	}

	public function entidadesfederativa()
	{
		return $this->belongsTo(\App\Models\Entidadesfederativa::class, 'entidadFederativa_id');
	}

	public function datoslaboralesalumnos()
	{
		return $this->hasMany(\App\Models\Datoslaboralesalumno::class, 'datosPersonales_id');
	}

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'datosPersonales_id');
	}

	public function profesors()
	{
		return $this->hasMany(\App\Models\Profesor::class, 'datosPersonales_id');
	}
}
