<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Toilet extends Model {

        /** The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'toilets';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'apikey'];
	
	/**
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        function samples() {
            return $this->hasMany('App\Sample');
        }
}
