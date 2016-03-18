<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Project extends Model
{
	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
   * Get the user that owns the project.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}
