<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
    
$ur = $request->user();

if(empty($ur->zip)){
 
     $urzip = '07840';
}else{
    $urzip = $ur->zip;
}


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/forecast.json?q=".$urzip."&days=3",
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: weatherapi-com.p.rapidapi.com",
        "X-RapidAPI-Key: 07524dd439mshad56755c0d61ef6p156863jsn83e85f4e92da"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
//    echo $response;
}
//$response = json_decode($response);

//$response = json_encode($response);
$responsenew = json_decode($response, true);
$days =        json_decode($response, true); //->forecast->forecastday, true);

return view('weather.index', ['location' => $responsenew, 'zipps' => $urzip]);

    //['location' =>json_decode($response, true)]);
    //compact('response'));



    }
}
