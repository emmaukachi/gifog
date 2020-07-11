@extends('layout.app')

@section('main-content')
<section class="page-header padding">
    <div class="container">
    <div class="page-content text-center">
    <h2>About us</h2>
    <p>Design and Build.</p>
    </div>
    </div>
    </section>
    <section class="about-section padding">
        <div class="container">
        <div class="row about-wrap">
        <div class="col-lg-6 sm-padding">
        <div class="about-content wow fadeInLeft">
        <h2>We are expert on this field and we offer better solution since 2010.</h2>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
        <p>At <b>Gifogs Integrated Designs Ltd</b> we turn your ideas and dreams into reality</p>
        {{--<a href="#" class="default-btn">More About Us</a>--}}
        </div>
        </div>
        <div class="col-lg-6 sm-padding">
        <ul class="about-promo">
        <li class="about-promo-item wow fadeInUp">
        <i class="flaticon-factory"></i>
        <div>
        <h3>Design and Build</h3>
        <p>We work on all sizes of Projects from brand new homes to large scale commercial projects.</p>
        </div>
        </li>
        <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
        <i class="flaticon-worker"></i>
        <div>
        <h3>Dedicated To Our Clients</h3>
        <p>We listen to your needs and help you through every step of the process from design to completion.</p>
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
    <section class="work-pro-section padding">
        <div class="container">
        <div class="row">
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">1</span>
        <div class="number-line"></div>
        <h3>Planning & Research</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">2</span>
        <div class="number-line"></div>
        <h3>Design & Ideas</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">3</span>
        <div class="number-line"></div>
        <h3>Specialized Projects</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">4</span>
        <h3>Final Outputs</h3>
        <p>We help you achieve your dreams with time.</p>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class="content-section padding">
        <div class="container">
        <div class="row content-wrap">
        {{--<div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" src="img/content-1.jpg" alt="img">
        </div>--}}
        <div class="col-lg-11 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
        <span>Explore The Features</span>
        <h2>Offering the most complete integrated package!</h2>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
        {{--<a href="#" class="default-btn">Get Free Quote</a>--}}
        </div>
        </div>
        </div>
        </div>
    </section>
    <a data-scroll href="about-us" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
    @endsection