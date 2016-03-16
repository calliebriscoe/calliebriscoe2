<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
  	 * The database table used by the model.
  	 *
  	 * @var string
  	 */
  	protected $table = 'posts';
  	/**
  	 * Get the user that owns the post.
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function user()
  	{
  		return $this->belongsTo('App\User');
  	}
  	/**
  	 * Get the comments of the post.
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\hasMany
  	 */
  	public function comments()
  	{
  		return $this->hasMany('App\Comment');
  	}
}
