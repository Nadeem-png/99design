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
    <div class="row mt-3 ">
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
<div class="container mt-3 mb-3">
<div class="artwork--hero__container__text" style="color:#da7055">
            <h1 class="heading heading--h1 ml-5 heading--chameleon heading--with--divider">
            How it works
            </h1>
</div>
<div class="row">
    <div class="col-lg col-sm-8">
        <div class="text center">
        <h6 class="heading heading--h6 text center  heading--chameleon heading--with--divider">
    1. Submit your application
            </h6>
            <img src="{{asset('images/profit3.avif')}}" alt="" class="img-fluid  mb-3 mt-2 text center " >
            <p class="paragraph paragraph--offset text center paragraph--narrow paragraph--root">Tell us about your nonprofit organization by filling out our application. We'll review it within 30 days.</p>

        </div>
    </div>
    <div class="col-lg col-sm-8 ">
        <div class="text center">
        <h6 class="heading heading--h6 text center  heading--chameleon heading--with--divider">
        2. Start a contest or project
            </h6>
            <img src="{{asset('images/profit4.avif')}}" alt="" class="img-fluid  mb-3 mt-2 text center " >
            <p class="paragraph paragraph--offset text center paragraph--narrow paragraph--root">
            If selected, you’ll receive $500 USD in platform credits. A dedicated Client Support team member will guide you through the creative process.</p>

        </div>
   
    </div>
    <div class="col-lg ">
        <div class="text center">
        <h6 class="heading heading--h6 text center  heading--chameleon heading--with--divider">
        3. Launch your new design
            </h6>
            <img src="{{asset('images/profit5.avif')}}" alt="" class="img-fluid  mb-3 mt-2 text center " >
            <p class="paragraph paragraph--offset text center paragraph--narrow paragraph--root">
            You’ll receive editable print and digital files of your new, custom design to use as you please!.</p>

        </div>
   
    </div>
</div>
<div class="row mt-3 ">
      <div class="col-lg">
      <img src="{{asset('images/profit6.avif')}}" alt="" class="img-fluid w-80 " >

      </div>
      <div class="col-lg mt-3">
      <div class="artwork--hero__container__text" style="color:#6a90dd">
            <h2 class="heading heading--h2 heading--chameleon heading--with--divider">
            Design that makes a<br> difference
            </h2>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            We've helped nonprofits all over the world achieve their missions with stunning design that captivates and communicates. </p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
If you're curious about some of the nonprofits we've already worked with and how we helped them make a difference, we encourage you to read some of our recent case studies.</p>

<div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#6a90dd">
Read the case studies</a>
         </div>
</div>
      </div>
    </div>
</div>


</div>

@endsection
@section('title','contact')
@section('nava','active')