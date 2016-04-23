<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Toilet;
use App\Profile;
use App\Sample;

class ApiController extends Controller {

	/**
	 * Save my sample.
	 *
         * @param  \Illuminate\Http\Request  $request
	 * @return Response
	 */
	public function create(Request $request)
	{
                $validator = Validator::make($request->all(), [
                    'toiletkey' => 'required',
                    'profilekey' => 'required',
                    'duration' => 'required|numeric', 
                    'volume' => 'required|numeric', 
                    'temperature' => 'required|numeric',
                    'hue' => 'numeric', 
                    'saturation' => 'numeric',
                    'brightness' => 'numeric',
                    'loudness' => 'numeric',
                    'acidity' => 'numeric',
                    'salinity' => 'numeric', 
                    'glucose' => 'numeric', 
                    'pregnant' => 'boolean'
                ]);
                if ($validator->fails()) {
                    return response()->json($validator->errors());
                }
                $toilet = Toilet::where(['apikey' => $request->get('toiletkey')])->first();
                if (is_null($toilet)) {
                    $error = new \stdClass();
                    $error->toilets = ["Toilet not found"];
                    return response()->json($error);
                }
		$profile = Profile::where(['apikey' => $request->get('profilekey')])->first();
		if (is_null($profile)) {
                    $profile = Profile::create([
                        'apikey' => $request->get('profilekey')
                    ]);
		}
		$sample = Sample::create([
                    'toilet_id' => $toilet->id,
                    'profile_id' => $profile->id,
                    'duration' => $request->get('duration'), 
                    'volume' => $request->get('volume'), 
                    'temperature' => $request->get('temperature'),
                    'hue' => $request->get('hue'), 
                    'saturation' => $request->get('saturation'),
                    'brightness' => $request->get('brightness'),
                    'acidity' => $request->get('acidity'),
                    'salinity' => $request->get('salinity'), 
                    'glucose' => $request->get('glucose'), 
                    'pregnant' => $request->get('pregnant')
                    
		]);
		return response()->json($sample);
	}
	
	/**
	 * Show the public stats.
	 *
	 * @return Response
	 */
	public function stats()
	{
            $samples = Sample::all();
            
            $response = [];
            
            foreach($samples as $sample) {
                $item = new \stdClass();
                $item->toilet = $sample->toilet->name;
                $item->duration = $sample->duration;
                $item->volume = $sample->volume;
                $item->temperature = $sample->temperature;
                $item->loudness = $sample->loudness;
                $item->hue = $sample->hue;
                $item->saturation = $sample->saturation;
                $item->brightness = $sample->brightness; 
                $item->acidity = $sample->acidity;
                $item->salinity = $sample->salinity; 
                $item->glucose = $sample->glucose;
                $item->pregnant = $sample->pregnant;
                $response[] = $item;
            }
            
            return response()->json($response);
	}

}
