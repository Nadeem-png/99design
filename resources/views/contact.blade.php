@extends('master.layout')
@section('my_content')


<div class="container">
<div class="artwork--hero__container__text " style="color:#DBAB98">
<h1 class="heading heading--h1 heading--chameleon heading--with--divider" style="color:BDAB98">
                Contact us
            </h1>
            
            <div class="paragraph paragraph--root paragraph--offset paragraph--narrow ">
                        Need a hand? Or a high five?<br> Here’s how to reach us.

                    </div>
                    <div class="heading heading--h5 heading--chameleon heading--with--divider">
                    <a href=""  style="color:BDAB98">Submit a help request</a>
            </div>
            <div class="heading heading--h5 heading--chameleon heading--with--divider">
                    <a href=""  style="color:BDAB98">PR enquiries</a>
            </div>
            <div class="heading heading--h5 heading--chameleon heading--with--divider">
                    <a href=""  style="color:BDAB98"> 1 800 513 1678</a>
            </div>
              
         

</div>
<img src="{{asset('images/contact1.avif')}}" alt="" class="img-fluid ">

</div>
<div class="container mt-5">
<h1 class="heading heading--h1 heading--chameleon heading--with--divider ml-5">
Office locations            </h1>
<div class="row ml-5">
    <div class="col">
    <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
    USA
</h5>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
Oakland, California
<br>
<br>
<br>
99designs<br>
PO Box 3330<br>
Oakland, CA 94609
</p>
    </div>
    <div class="col">
    <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
    Australia
</h5>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
Melbourne, Victoria<br>
<br>
<br>
99designs<br>
41-43 Stewart Street<br>
Level 2
Richmond, VIC 3121
</p>
    </div>

    <div class="col-lg-4 col-sm-12">
    <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
    Germany
</h5>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
Berlin<br>
<br>
<br>
99designs<br>
Bergmannstraße 102/103<br>
10961 Berlin
</p>
    </div>

</div>
</div>



@endsection
@section('title','contact')
@section('nava','active')