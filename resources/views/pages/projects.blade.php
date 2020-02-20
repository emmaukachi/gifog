@extends('layout.app')

@section('main-content')
<section class="page-header padding">
    <div class="container">
    <div class="page-content text-center">
    <h2>Specialized projects</h2>
    <p>Construction & Building Html Template.</p>
    </div>
    </div>
    </section>
    <section class="projects-section padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-1.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon ajax-popup-link"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Interior</a>
    <h3><a href="#" class="tittle">Rectangular house near italy</a></h3>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-2.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Architecture</a>
    <h3><a href="#" class="tittle">Cathedral of brasilia brasilia</a></h3>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-3.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Design</a>
    <h3><a href="#" class="tittle">Harpa concert hall reykjavik</a></h3>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-4.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Architecture</a>
    <h3><a href="#" class="tittle">Milwauke museum wisconsin</a></h3>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-5.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Design</a>
    <h3><a href="#" class="tittle">The dancing house prague</a></h3>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 padding-15">
    <div class="project-item">
    <img src="/img/project-6.jpg" alt="projects">
    <div class="overlay"></div>
    <a href="#" class="view-icon"> <i class="fas fa-expand"></i></a>
    <div class="projects-content">
    <a href="#" class="category">Design</a>
    <h3><a href="#" class="tittle">The dancing house prague</a></h3>
    </div>
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
    </div>
    <section class="widget-section padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-sm-6 sm-padding">
    <div class="widget-content">
    <a href="#"><img src="img/logo-light.png" alt="brand"></a>
    <p>Building your own home is about desire, fantasy. But it’s achievable anyone can do it.</p>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 sm-padding">
    <div class="widget-content">
    <h4>Company</h4>
    <ul class="widget-links">
    <li><a href="#">About Us</a></li>
    <li><a href="#">Our Services</a></li>
    <li><a href="#">Clients Reviews</a></li>
    <li><a href="#">Contact Us</a></li>
    </ul>
     </div>
    </div>
    <div class="col-lg-3 col-sm-6 sm-padding">
    <div class="widget-content">
    <h4>Headquaters</h4>
    <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
    <span><a href="http://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c880ada4a4a78889a4adb0a99ca0ada5ade6a6adbc">[email&#160;protected]</a></span>
    <span>(+123) 456 789 101</span>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6 sm-padding">
    <div class="widget-content">
    <h4>Newslatter Subscription</h4>
    <p>Subscribe and get 10% off from our <br>architecture company.</p>
    <div class="subscribe-box clearfix">
    <div class="subscribe-form-wrap">
    <form action="#" class="subscribe-form">
    <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
    <button type="submit" class="submit-btn">Subscribe</button>
    <div id="subscribe-result">
    <p class="subscription-success"></p>
    <p class="subscription-error"></p>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <footer class="footer-section align-center">
    <div class="container">
    <p><a href="templateshub.net">Templates Hub</a></p>
    </div>
    </footer>--}}
@endsection