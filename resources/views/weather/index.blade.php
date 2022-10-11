@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-sm-12">Home > Weather/API </div>
        <div class="row justify-content-center">
            <div class="col-md-12">

               <h3> Weather for {{$zipps}} </h3>
                 @guest
                 <div class="p-3 mb-2 bg-warning text-dark">
 Your ZipCode is {{$zipps}} and you are seeing this because <b>you are not logged in or have an account</b> yet
                 </div>
@endguest


{{$location['location']['name']}}  ---- {{$location['current']['temp_f']}} Degrees
<br/>
<img src="{{$location['current']['condition']['icon']}}" />
{{$location['current']['condition']['text']}}
<br/> Wind MPH : {{$location['current']['wind_mph']}}
<br/> Wind Direction : {{$location['current']['wind_dir']}}
<br/>Humidity : {{$location['current']['humidity']}}
<br/>Feels Like : {{$location['current']['feelslike_f']}}
<br/>

            </div>
        </div>

<hr/>
<div class="row justify-content-center">
            




            <div class="col-md-4">
      <h5>Date: {{$location['forecast']['forecastday']['0']['date']}}</h5>
<img src="{{$location['forecast']['forecastday']['0']['day']['condition']['icon']}}" />{{$location['forecast']['forecastday']['0']['day']['condition']['text']}}<br/>
High : {{$location['forecast']['forecastday']['0']['day']['maxtemp_f']}}<br/>
Low :  {{$location['forecast']['forecastday']['0']['day']['mintemp_f']}}
            </div>
<div class="col-md-4">
     <h5>Date: {{$location['forecast']['forecastday']['1']['date']}}</h5>
     <img src="{{$location['forecast']['forecastday']['1']['day']['condition']['icon']}}" />{{$location['forecast']['forecastday']['1']['day']['condition']['text']}}<br/>
High : {{$location['forecast']['forecastday']['1']['day']['maxtemp_f']}}<br/>
Low :  {{$location['forecast']['forecastday']['1']['day']['mintemp_f']}}
            </div>
<div class="col-md-4">
     <h5>Date: {{$location['forecast']['forecastday']['2']['date']}}</h5>
     <img src="{{$location['forecast']['forecastday']['2']['day']['condition']['icon']}}" />{{$location['forecast']['forecastday']['2']['day']['condition']['text']}}<br/>
High : {{$location['forecast']['forecastday']['2']['day']['maxtemp_f']}}<br/>
Low :  {{$location['forecast']['forecastday']['2']['day']['mintemp_f']}}
            </div>



            </div>



<div class="row justify-content-center">
  <div class="col-md-12">

This API is outlined int he backend Controller<br/>
If you have an account and are logged in and you filled in your ZipCode your current weather is displaye along with the next 3 days forecast

<br/>
If you do not have an account I am defaulting the Zip Code to My old Town of Hackettstown,NJ so you will at the least have some Results
<br/><br/>

The account I am using is on a free API pull which allows me upto 1,000,000 pulls per day.
The response is in a JSoN payload and I am showing specific information not all. 

  </div>
</div>


    </div>

@endsection
