@extends('master.layout')
@section('my_content')
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding:10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  text-align:center;

}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<div class="container mt-4">
<div class="artwork--hero__container__text" style="color:#cbbba5">
            <h1 class="heading  heading--h1 heading--chameleon heading--with--divider">
            Jobs
            </h1>
            </div>
            <div class="row">
                <div class="col-lg col-sm-8  ">
                <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
                At 99designs, we champion creativity to bring opportunities to people around the world.<br><br>

And we think that’s pretty awesome.<br> <br>

Our creator community has a ton of talent and professional experience, while our clients are smart, passionate and full of great ideas. Together, they find countless ways to create magic through the power of design.
 Are you ready to help fuel their success?
</p>
<div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#cbbba5">
View job openings here</a>
         </div>


            </h4>
                </div>
                <div class="col-lg col-sm-8">
                <img src="{{asset('images/career2.avif')}}" alt="" class="img-fluid py-5">

                </div>
                <div class="col-lg">
                <img src="{{asset('images/career1.avif')}}" alt="" class="img-fluid ">

                </div>

            </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg col-sm-8">
        <img src="{{asset('images/career3.avif')}}" alt="" class="img-fluid w-80 ">

        </div>
        <div class="col-lg mt-5">
        <div class="artwork--hero__container__text" style="color:#cbbba5">
            <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
            Be part of a global team            </h5>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
                
You'll work with an international team that's<br> as brilliant as they are down-to-earth. From<br>
 our coffee-shop-inspired setup in Melbourne<br> to our airy spaces in Oakland and Berlin,<br>
 99ers have access to incredible offices (and people) from around the world.
</p>
</div>
        </div>
    </div>
</div>
<div class="container mt-3">
                 <div class="artwork--hero__container__text" style="color:#cbbba5">
            <h4 class="heading heading--h4 heading--chameleon heading--with--divider">
            Culture and benefits            </h4>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            We believe that work should be creative,
             fulfilling, and collaborative.
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
           
We are (after all) stewards of a global design
 community, so we keep it fresh and fun back
  at 99designs HQ.
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
We’re committed to creating a diverse and
 inclusive culture that welcomes, supports
  and celebrates individuals from all 
  experiences and backgrounds. We know this
   is what enables us to build a stronger, more
    creative environment – both on our platform 
    and within our own teams.
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
From health and wellbeing programs to an
 active social club with events for you and
  your family, we put our people first. We
   embrace flexible work and offer a variety of
    tools and resources to set you up for success.
     From our annual home office refresh budget, 
     to our ways of working toolkit, it’s our priority 
     to help you do your thing.
</p> 
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
Speaking of doing your thing, we have a
 variety of programs for learning and
  development that create plenty of space for
   growth. Everyone learns their own way, so we 
   give everyone 99time and an individual 
   budget to choose their own learning
    adventure.
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
    
Whether it’s watching an on-demand video,
 joining a workshop or a 
 book club, or taking a mindfulness and yoga class, we’ve got you
  covered. 
</p>
<div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#cbbba5">
Check out our perks and benefits here.</a>
         </div>
</div>

<div class="row container-fluid no-gutter">
    <div class="col-lg mb-2">
    <img src="{{asset('images/career2.avif')}}" alt="" class="img-fluid ">

    </div>
    <div class="col-lg-8">
    <img src="{{asset('images/career3.avif')}}" alt="" class="img-fluid  ">

    </div>

</div>
        </div>

<div class="container mt-5 mb-5">

<button class="accordion mb-3"> Data Engineer
 <span class="ml-5">  Development</span> <span class="ml-5">Richmond</span></button>
    

<div class="panel mt-3">
<div class="artwork--hero__container__text" style="color:#fe5f50">
            <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
            Data Engineer</h5>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Development
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Richmond
</p>
<p class="text-dark">
Are you curious, unafraid to dive head first into different product domains? Apply now to partner with product teams and data analysts to build data models!
</p>
<button class="btn font-weight-bold btn-primary px-4 py-2 ">Apply</button>
<p class="text-dark">By making your application to 99designs, you accept that we store your information in accordance with our privacy policy.</p>
</div>
</div>

<button class="accordion mb-3"> Data Engineer
 <span class="ml-5">  Development</span> <span class="ml-5">Richmond</span></button>
    

<div class="panel mt-3">
<div class="artwork--hero__container__text" style="color:#fe5f50">
            <h5 class="heading heading--h5 heading--chameleon heading--with--divider">
            Data Engineer</h5>
            <p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Development
</p>
<p class="paragraph paragraph--offset paragraph--narrow paragraph--root">
            Richmond
</p>
<p class="text-dark">
Are you curious, unafraid to dive head first into different product domains? Apply now to partner with product teams and data analysts to build data models!
</p>
<button class="btn font-weight-bold btn-primary px-4 py-2 ">Apply</button>
<p class="text-dark">By making your application to 99designs, you accept that we store your information in accordance with our privacy policy.</p>
</div>
</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

@endsection
@section('title','contact')
@section('nava','active')