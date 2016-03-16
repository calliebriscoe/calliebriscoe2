<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
	   * The database table used by the model.
	   *
	   * @var string
	   */
	  protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the comments for the user.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    /**
     * Get the educations for the user.
     */
    public function educations()
    {
        return $this->hasMany('App\Education');
    }
    /**
     * Get the experiences for the user.
     */
    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }
    /**
     * Get the posts for the user.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    /**
     * Get the projects for the user.
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
  	/**
  	 * One to Many relation
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function role()
  	{
  		return $this->belongsTo('App\Role');
  	}

  	/**
  	 * Check media all access
  	 *
  	 * @return bool
  	 */
  	public function accessMediasAll()
  	{
  	    return $this->role->slug == 'admin';
  	}
  	/**
  	 * Check media access one folder
  	 *
  	 * @return bool
  	 */
  	public function accessMediasFolder()
  	{
  	    return $this->role->slug != 'user';
  	}
  }
