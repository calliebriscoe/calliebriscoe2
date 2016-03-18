<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Education extends Model
{
	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'educations';

	/**
   * Get the user that owns the education.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}
