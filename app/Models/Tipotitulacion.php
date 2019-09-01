<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipostitulacion
 *
 * @property int $id
 * @property string $TipoTitulacion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 *
 * @package App\Models
 */
class Tipotitulacion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tipostitulacion';

	protected $fillable = [
		'TipoTitulacion'
	];

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'tipoTitulacion_id');
	}
}
