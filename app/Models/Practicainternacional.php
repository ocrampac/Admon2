<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Practicasinternacionale
 *
 * @property int $id
 * @property int $gradoAcademico_id
 * @property int $pais_id
 * @property int $Duracion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Gradosacademico $gradosacademico
 * @property \App\Models\Paise $paise
 *
 * @package App\Models
 */
class Practicainternacional extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'practicasinternacionales';
	protected $casts = [
		'gradoAcademico_id' => 'int',
		'pais_id' => 'int',
		'Duracion' => 'int'
	];

	protected $fillable = [
		'gradoAcademico_id',
		'pais_id',
		'Duracion'
	];

	public function gradosacademico()
	{
		return $this->belongsTo(\App\Models\Gradosacademico::class, 'gradoAcademico_id');
	}

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'pais_id');
	}
}
