<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Contact extends Model
{
	use DatePresenter;

  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contacts';

	/**
   * Get the user that owns the contact.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}
