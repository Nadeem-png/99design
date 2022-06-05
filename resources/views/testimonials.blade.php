@extends('master.layout')
@section('my_content')

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-lg-5">
        <div class="artwork--hero__container__text" style="color:#2f9780;">
            <h1 class="heading heading--h1 heading--chameleon heading--with--divider">
            99designs reviews: stories from our customers
            </h1>
            <p class="text-dark py-2">4.8 average from 37,496 design contest ratings</p>
</div>
        </div>
        <div class="col-lg-7">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/xzyvO71XEaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>
    <p class="mt-5 ml-3">Over 444,306 people and businesses have come to us for their custom logos, websites, books and all types of graphic design. Read their reviews of 99designs to learn how great design changed their world.</p>
</div>
<div class="container mb-4">
    <div class="row">
        <div class="col-lg mb-2">
            <select name="" id="" class="form-control px-3 py-2 ">
                All Categories
                <option value="">All Categories</option>
                <option value="">Logo Design</option>
                <option value="">Web page design</option>
                <option value="">T-shirt</option>
                <option value="">Bussiness Card design</option>

            </select>
        </div>
        <div class="col-lg mb-4">
            <select name="" id="" class="form-control px-3 py-2">
            All Industries
                <option value=""> All Industries</option>
                <option value="">Education</option>
                <option value="">Medical</option>
                <option value="">Accounting</option>
                <option value="">Animal</option>

            </select>
        </div>
    </div>
    <button class="accordion mb-3">
    Amazing Service</button>
<div class="panel">
    <p>View there Book or Magazin Cover</p>
</div>
<button class="accordion">
    Amazing Service</button>
<div class="panel">
    <p>View there Book or Magazin Cover</p>
</div>
</div>

@endsection
@section('title','contact')
@section('nava','active')