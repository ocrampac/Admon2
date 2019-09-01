<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Entidadesfederativa
 *
 * @property int $id
 * @property string $EntidadFederativa
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 * @property \Illuminate\Database\Eloquent\Collection $practicasnacionales
 *
 * @package App\Models
 */
class Entidadfederativa extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'entidadesfederativas';
	protected $fillable = [
		'EntidadFederativa'
	];

	public function datospersonales()
	{
		return $this->hasMany(\App\Models\Datospersonale::class, 'entidadFederativa_id');
	}

	public function practicasnacionales()
	{
		return $this->hasMany(\App\Models\Practicasnacionale::class, 'entidadesFederativas_id');
	}
}
