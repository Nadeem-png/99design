@extends('master.layout')
@section('my_content')
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
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
  margin-left: 5px;
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
      <div class="artwork--hero__container__text text-center" style="color:#874d4e">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
                In the media            </h1>
            <p class="paragraph text-dark text-center">
                Great design gets you noticed. It gets us noticed, too. Read the latest news about 99designs.
                </p>
                <div class="paragraph paragraph--offset " >
<a href="" class="link link--jumbo link--cta--down link--cameleon" style="color:#874d4e">
Browse articles</a>
         </div>
                </div>
                <div class="container">
                <img src="{{asset('images/media1.avif')}}" alt="" class="img-fluid ml-5 mt-n5">

                </div>
                <div class="container mt-5 mb-5">
                <button class="accordion mb-3">Champion: Three Predication for Agencies 2021 <span class="ml-5"> 23DEC2021</span></button>
<div class="panel">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="accordion">Champion: Three Predication for Agencies 2021 <span class="ml-5"> 23DEC2021</span></button>
<div class="panel">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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