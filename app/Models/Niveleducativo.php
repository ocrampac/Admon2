<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Niveleducativo
 *
 * @property int $id
 * @property string $NivelEducativo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $experienciadocentes
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 *
 * @package App\Models
 */
class Niveleducativo extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'niveleseducativos';

	protected $fillable = [
		'NivelEducativo'
	];

	public function experienciadocentes()
	{
		return $this->hasMany(\App\Models\Experienciadocente::class, 'nivelEducativo_id');
	}

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'nivelEducativo_id');
	}
}
