<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Toilet;
use App\Profile;
use App\Sample;

class ApiController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
         * @param  \Illuminate\Http\Request  $request
	 * @return Response
	 */
	public function create(Request $request)
	{
                $validator = Validator::make($request->all(), [
                    'toiletkey' => 'required',
                    'profilekey' => 'required',
                    'dutation' => 'required|numeric', 
                    'volume' => 'required|numeric', 
                    'temperature' => 'required|numeric',
                    'hue' => 'required|numeric', 
                    'saturation' => 'required|numeric',
                    'brightness' => 'required|numeric',
                    'acidity' => 'required|numeric',
                    'salinity' => 'required|numeric', 
                    'glucose' => 'required|numeric', 
                    'pregnant' => 'required|boolean'
                ]);
                if ($validator->fails()) {
                    return response()->json($validator->errors());
                }
                $toilet = Toilet::where(['apikey' => $request->get('toiletkey')]);
                if (is_null($toilet)) {
                    $error = new \stdClass();
                    $error->toilets = ["Toilet not found"];
                    return response()->json($error);
                }
		$profile = Profile::where(['apikey' => $request->get('profilekey')]);
		if (is_null($profile)) {
                    $profile = Profile::create([
                        'apikey' => $request->get('profilekey')
                    ]);
		}
		$sample = Sample::create([
                    'toilet_id' => $toilet->id,
                    'profile_id' => $profile->id,
                    'dutation' => 'required', 
                    'volume' => 'required', 
                    'temperature' => 'required',
                    'hue' => 'required', 
                    'saturation' => 'required',
                    'brightness' => 'required',
                    'acidity' => 'required',
                    'salinity' => 'required', 
                    'glucose' => 'required', 
                    'pregnant' => 'required'
                    
		]);
		return response()->json($sample);
	}

}
