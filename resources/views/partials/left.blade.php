

@foreach($uare as $u)



    <h5>{{$u->name}}</h5>{{--$u->id--}}
<div>{{--
    <img src="images/evets-logo.png" class="img-thumbnail rounded-circle" alt="Cinque Terre" width="100">
   --}}
    @if($u->profilepic)
    <img src="{{ asset("storage/$u->profilepic") }}" class="img-thumbnail rounded-circle" alt="Steve" width="100"><br/>
    @else
    <img src="images/evets-logo.png" class="img-thumbnail rounded-circle" alt="default" width="100">
    @endif
</div>
<p>
</p><table class="table table-hover" padding="0">
    <tbody>
    @if($u->phone)
    <tr>
        <td style="padding:0;"> <i class="fas fa-phone fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">{{$u->phone}}</td>
    </tr>
    @endif
    @if($u->email)
    <tr>
        <td style="padding:0;"> <i class="fas fa-envelope fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">{{$u->email}}</td>
    </tr>
    @endif
    @if($u->city)
    <tr>
        <td style="padding:0;"> <i class="fas fa-home fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">{{$u->city}}</td>
    </tr>
    @endif
    @if($u->facebook)
    <tr>{{-- onclick="https://www.facebook.com/Stevendeemer2017">--}}
        <td style="padding:0;"> <i class="fab fa-facebook-f fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">Facebook</td>
    </tr>
    @endif
    @if($u->facebook2)
        <tr>{{-- onclick="https://www.facebook.com/Stevendeemer2017">--}}
            <td style="padding:0;"> <i class="fab fa-facebook-f fa-xs" aria-hidden="true"></i></td>
            <td style="padding:0;">Facebook2</td>
        </tr>
    @endif
    @if($u->instagram)
    <tr>
        <td style="padding:0;"> <i class="fab fa-instagram fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">InstaGram<!--<i class="fab fa-instagram"></i>--></td>
    </tr>
    @endif
    @if($u->linkedin)
    <tr>
        <td style="padding:0;"> <i class="fab fa-linkedin-in fa-xs" aria-hidden="true"></i></td>
        <td style="padding:0;">LinkedIn<!--	<i class="fab fa-linkedin"></i>--></td>
    </tr>
    @endif

    @if($u->youtube)
    <tr>
        <td style="padding:0;"> <i class="fab fa-youtube" aria-hidden="true"></i></td>
        <td style="padding:0;">YouTube<!--	<i class="fab fa-linkedin"></i>--></td>
    </tr>
    @endif

    </tbody>
</table>

<p></p>

@endforeach
