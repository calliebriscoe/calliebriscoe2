<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function users()
	{
	  return $this->hasMany('App\User');
	}
}
