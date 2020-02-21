@extends('layout.app')

@section('main-content')
<div id="main-slider" class="dl-slider">
        <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(/img/slider-1.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
        <div class="container">
        <div class="slider-content">
        <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Residencial</div></div></div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">We provide outstanding</div></div>
        </div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">construction services.</div></div></div>
        <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
        <div class="dl-btn-group">
        <div class="inner-layer">
        <a href="#" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(/img/slider-2.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
        <div class="container">
        <div class="slider-content">
        <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="1s">Residencial</div></div></div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2s">We are professional</div></div>
        </div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2.5s">for building construction.</div></div></div>
        <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
        <div class="dl-btn-group">
        <div class="inner-layer">
        {{--<a href="#" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>--}}
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(/img/slider-3.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-right">
        <div class="container">
        <div class="slider-content">
        <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="1s">Residencial</div></div></div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2s">We will be happy to take care</div></div>
        </div>
        <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2.5s">of your construction works.</div></div></div>
        <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
        <div class="dl-btn-group">
        <div class="inner-layer">
        {{--<a href="#" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>--}}
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <section class="about-section padding">
        <div class="container">
        <div class="row about-wrap">
        <div class="col-lg-6 sm-padding">
        <div class="about-content wow fadeInLeft">
        <h2>We are the expert on this field better solution since 2010.</h2>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
        {{--<a href="#" class="default-btn">More About Us</a>--}}
        </div>
        </div>
        <div class="col-lg-6 sm-padding">
        <ul class="about-promo">
        <li class="about-promo-item wow fadeInUp">
        <i class="flaticon-factory"></i>
        <div>
        <h3>Professional Liability</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
        <i class="flaticon-worker"></i>
         <div>
        <h3>Dedicated To Our Clients</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
        <i class="flaticon-gear"></i>
        <div>
        <h3>Outstanding Services</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </section>
@endsection