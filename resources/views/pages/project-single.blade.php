@extends('layout.app')

@section('main-content')
<section class="page-header padding">
    <div class="container">
    <div class="page-content text-center">
    <h2>Project single</h2>
    <p>Design and Build.</p>
    </div>
    </div>
    </section>
    <section class="project-single-section padding">
    <div class="container">
    <div class="row project-single-wrap align-items-center">
    <div class="col-md-6 sm-padding">
    <div id="project-single-carousel" class="project-single-carousel box-shadow owl-carousel">
    <div class="single-carousel">
    <img src="/img/project-s-1.jpg" alt="img">
    </div>
    <div class="single-carousel">
    <img src="/img/project-s-2.jpg" alt="img">
    </div>
    <div class="single-carousel">
    <img src="/img/project-s-3.jpg" alt="img">
    </div>
    </div>
    </div>
    <div class="col-md-6 sm-padding">
    <div class="project-single-content">
    <h2>The dancing house Ago-palace</h2>
    <p>Gifogs Integrated Design is a different kind of architecture practice. Founded by Engr. Ogar Gift Samuel in 2010, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
    <ul class="project-details">
    <li><span>Architects</span>: Adeniran Rosemary </li>
    <li><span>Location</span>: 321 G close, Festac town, Lagos, LG 100001.</li>
    <li><span>Category</span>: Architecture, Interior and Build.</li>
    {{--<li><span>Area</span>: 119.0.563</li>--}}
    <li><span>Project Year</span>: 2020/2021</li>
    <li><span>Manufactures</span>: Gifogs Integrated Designs.</li>
    </ul>
    </div>
    </div>
    </div>
     </div>
    </section>
    {{--<div class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
    <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
    <div class="sponsor-item">
    <img src="img/sponsor1.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor2.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor3.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor4.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor5.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor6.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor7.png" alt="sponsor">
    </div>
    <div class="sponsor-item">
    <img src="img/sponsor8.png" alt="sponsor">
    </div>
    </div>
    </div>
    </div>--}}
    <a data-scroll href="project-single" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
@endsection