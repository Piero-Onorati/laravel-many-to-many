
@extends('layouts.app')

@section('content')
    
<div class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 content_box">                   
                <h2 class="text-white">Stay up to date on the latest news from the world of programming</h2>
                <p>Subscribe to the newsletter and follow us on social networks!</p>
                <div class="social_icons">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitch"></i>
                </div>
            </div>
            <div class="col-12 col-md-6 img_box">
                <img src="{{asset('img/pc.jpg')}}"  class="first_img">
            </div>

        </div>
    </div>

</div>
@endsection


