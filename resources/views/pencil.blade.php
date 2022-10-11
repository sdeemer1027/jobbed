@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-3">
<img src="/images/a1.jpg" width="100%" alt="Steve is evetS">

                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header"><h3>Just a little Emotions</h3></div>

                            <div class="card-body">
<p>I for one know Art is only an Emotional minuet in a persons life</p>
                                <p>It matters not at all<br />
                                If you can draw or paint or mold in clay <br />
                                    It does not matter if you like the art work of another or hate it.
                                    You only need to knw that if one person is sharing the work they did it is them sharing only the emotions
                                    for when they created it
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

{{-- 
        <div class="row">
        <div class="col-md-3">
            <img src="img/4.jpeg" data-to="img/4.jpeg" class="modallery" width="100%">
        </div>
        <div class="col-md-3">
            
            <img src="img/aa.jpeg" data-to="img/aa.jpeg" class="modallery" width="100%">
        </div>
        <div class="col-md-3">
            <img src="img/d.jpeg" data-to="img/d.jpeg" class="modallery" width="100%">
        </div>
        <div class="col-md-3">
            <img src="img/dd.jpeg" data-to="img/dd.jpeg" class="modallery" width="100%">
        </div>
        </div>



<br/>
        <div class="row">
            <div class="col-md-3">
                <img src="img/4a.jpeg" data-to="img/4a.jpeg" class="modallery" width="100%">
            </div>
            <div class="col-md-3">
               

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
--}}


{{$arts}}
 <div class="row">

 @foreach($arts as $art)


     <div class="col-md-3 gallery">
       
    @if($art->name)
         <img src="{{ asset("storage/art/$art->name") }}" width="100%">
        
    @endif
    
     </div>
                            


 @endforeach

</div>




















{{--

 <div class="row">
    
 
 @php
if ($handle = opendir('storage/art/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
 echo "$entry\n";
            //echo "<div class='col-md-6'><img src='storage/art/$entry' width='100%;'></div>";
        }
    }

    closedir($handle);
}
 @endphp
</div>
--}}
    </div>

@endsection
