<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'samples';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 
                                'toilet_id', 'profile_id', 
                                'duration', 'volume', 'temperature', 'loudness',
                                'hue', 'saturation', 'brightness', 
                                'acidity', 'salinity', 'glucose', 'pregnant'
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
