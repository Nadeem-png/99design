@extends('master.layout')
@section('my_content')
 <div class="container mt-4 mb-4">
     <div class="row">
         <div class="col-lg">
         <div class="artwork--hero__container__text" style="color:#829FC4">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
            Meet the team
            </h1>
            <p class="paragraph paragraph--offset ml-3 paragraph--narrow paragraph--root">
            Meet the people redesigning the design process. See who’s answering your calls, optimizing your experience, and constantly obsessing over your designs.
</p>
<div class="paragraph paragraph--offset mt-3 ml-3" >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#829FC4">
Meet the stars</a>
         </div>
</div>
         </div>
         <div class="col-lg">
         <img src="{{asset('images/team.avif')}}" alt="" class="img-fluid" >
         </div>
     </div>

 </div>
 <div class="container mt-5 mb-3">
     <div class="row">
         <div class="col-lg col-sm-8">
             <div class="row">
                 <div class="col-3">
                 <img src="{{asset('images/team1.avif')}}" alt="" class="img-fluid  rounded-circle " >
                 </div>
                 <div class="col-lg col-sm-8">
                     <h6>Patrick Llewellyn</h6>
                     <p>CEO & President</p>
                 </div>
             </div>
         </div>
         <div class="col-lg col-sm-8">
             <div class="row">
                 <div class="col-lg-3">
                 <img src="{{asset('images/team2.avif')}}" alt="" class="img-fluid  rounded-circle " >
                 </div>
                 <div class="col-lg">
                     <h6>Glenn Boyd</h6>
                     <p>CFO</p>
                 </div>
             </div>
         </div>
         <div class="col">
             <div class="row">
                 <div class="col-lg-3">
                 <img src="{{asset('images/team3.avif')}}" alt="" class="img-fluid  rounded-circle " >
                 </div>
                 <div class="col-lg">
                     <h6>Shayne Tilley</h6>
                     <p>Head of Marketingt</p>
                 </div>
             </div>
         </div>
     </div>

 </div>
@endsection
@section('title','team')
@section('nava','active')