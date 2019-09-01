<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Practicasnacionale
 *
 * @property int $id
 * @property int $gradoAcademico_id
 * @property int $entidadesFederativas_id
 * @property int $Duracion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Gradosacademico $gradosacademico
 * @property \App\Models\Entidadesfederativa $entidadesfederativa
 *
 * @package App\Models
 */
class Practicanacional extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'practicasnacionales';
	protected $casts = [
		'gradoAcademico_id' => 'int',
		'entidadesFederativas_id' => 'int',
		'Duracion' => 'int'
	];

	protected $fillable = [
		'gradoAcademico_id',
		'entidadesFederativas_id',
		'Duracion'
	];

	public function gradosacademico()
	{
		return $this->belongsTo(\App\Models\Gradosacademico::class, 'gradoAcademico_id');
	}

	public function entidadesfederativa()
	{
		return $this->belongsTo(\App\Models\Entidadesfederativa::class, 'entidadesFederativas_id');
	}
}
