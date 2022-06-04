@extends('master.layout')
@section('my_content')
   
<div class="container">
    <div class="row">
        <div class="col-lg-6">
<img src="{{asset('images/about1')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <div class="artwork--hero__container__text" style="color:#fe5f50">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
                About us
            </h1>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
                <strong> Hi there.</strong>
           
             We’re 99designs by Vista, the global creative platform that makes it easy for clients and freelance designers to work together online. Since 2008, our freelance community has brought more than one million creative projects to life for thousands of genius entrepreneurs, savvy small business owners, and brands with big ideas.
                 <br>
                 <br>
As part of the Vista family, 
we’re dedicated to helping small businesses thrive through expert design.
              
         </p>
         <div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#fe5f50">4 things to know about us</a>
         </div>
        </div>
      
            </div>
            
    </div>
</div>
<div class="container-fluid">
<img src="{{asset('images/about1.avif')}}" alt="" class="img-fluid" >
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg col-12">
                <img src="{{asset('images/about2.avif')}}" alt="" class="img-fluid mb-3" >
                </div>
                <div class="col-lg-6 col-12">
                <h3 class="heading heading--h3 heading--chameleon heading--with--divider">
                We believe<br> in putting people first      
            </h3>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            People are the heart of 99designs. Our mission is to champion creativity and create opportunities for people all over the world – wherever they are and however they want to work.
</p>
                </div>
                
            </div>
        </div>
               
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg col-12">
                <img src="{{asset('images/about3.avif')}}" alt="" class="img-fluid mb-3 w-80" >
                </div>
                <div class="col-lg-6 col-12">
                <h3 class="heading heading--h3 heading--chameleon heading--with--divider">
                We believe in people helping people create their own success     
            </h3>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Our design community has a ton of talent and professional experience. Our clients are smart, passionate and full of great ideas. And the 99designs team has spent more than a decade building a world-class platform to enable remote creative collaboration. It’s all of these people working together that makes the magic happen.
</p>
                </div>
                
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg col-12">
                <img src="{{asset('images/about4.avif')}}" alt="" class="img-fluid mb-3 w-80" >
                </div>
                <div class="col-lg-6 col-12">
                <h3 class="heading heading--h3 heading--chameleon heading--with--divider">
                We believe that design has no borders    
            </h3>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Having offices and colleagues all around the world is a pretty sweet deal, but we think it’s even more amazing that any designer—from Sydney to Serbia—can earn a living doing what they love on our platform. In fact, our creator community has earned more than $300m on 99designs so far.</p>
                </div>
                
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg col-12">
                <img src="{{asset('images/about5.avif')}}" alt="" class="img-fluid mb-3 w-80" >
                </div>
                <div class="col-lg-6 col-12">
                <h3 class="heading heading--h3 heading--chameleon heading--with--divider">
                We believe the journey should be fun  
            </h3>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            We like to take the scenic route, crank up ‘99 Luftballons’ by Nena and enjoy the ride. While we believe in the serious power of great design, creativity and play go hand in hand: the journey should always feel like a great road trip.                </div>
                
            </div>
        </div>

@endsection
@section('title','about')
@section('nava','active')