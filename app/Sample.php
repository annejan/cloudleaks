<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 
                                'name', 'toilet_id', 'profile_id', 
                                'dutation', 'volume', 'hue'
                                'saturation', 'brightness', 'temperature',
                                'acidity', 'glucose', 'pregnant'
                              ];
	
	/**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        function toilet() {
            return $this->belongsTo('App\Toilet');
        }
        
        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        function profile() {
            return $this->belongsTo('App\Profile');
        }
        
}
