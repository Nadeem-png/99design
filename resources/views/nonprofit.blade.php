@extends('master.layout')
@section('my_content')

<div class="container mt-5 mb-3">
    <div class="row">
    <div class="col">
            <div class="bg-primary px-3 py-5">
            <div class="artwork--hero__container__text" style="color:white">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
            Do more good with<br>  99nonprofits
            </h1>
            <h5>99nonprofits is a global initiative that provides free design services to organisations making a positive impact in their local communities and internationally.</h5>
<button class="btn text-primary px-4 py-3 font-weight-bold" style="background-color:white">Apply Now</button>
        </div>
            </div>
        </div>
        <div class="col">
        <img src="{{asset('images/profit1.avif')}}" alt="" class="img-fluid w-80 " >
        </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg">
      <img src="{{asset('images/profit2.avif')}}" alt="" class="img-fluid w-80 " >

      </div>
      <div class="col-lg">
      <div class="artwork--hero__container__text" style="color:#7da49c">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
            About 99nonprofits
            </h1>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Since 2012, the 99nonprofits program has provided complimentary graphic design services to hundreds of not-for-profit groups around the world. 
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
Each month, 99designs provides nonprofits with $500USD in complimentary platform credits to use on design contests or projects to elevate their brand. Applicants are selected based on their need, how involved they are in their communities, and by their proven ability to overcome adversity.
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
           
We especially encourage any organization working towards creating an equitable society or empowering black, indigenous or minority communities to apply.
</p>
<div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#7da49c">
Submit your application today</a>
         </div>
</div>
      </div>
    </div>
</div>

@endsection
@section('title','contact')
@section('nava','active')