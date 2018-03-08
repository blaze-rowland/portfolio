@extends('layouts.app')
@section('content')
  <section id="header">
    <div class="header-text">
        <p>i am</p>
        <p>Blaze Rowland</p>
    </div>
  </section>

  <nav id="main-nav">
    <a class="brand">{{ config('app.name', 'Full-stack Developer') }}</a>
    <ul class="pull-right">
      <a href="#header" class="nav-link"><li>Home</li></a>
      <a href="#portfolio" class="nav-link"><li>Work</li></a>
      <a href="#about" class="nav-link"><li>About</li></a>
      <a href="#blog" class="nav-link"><li>Blog</li></a>
      <a href="#contact" class="nav-link"><li>Contact</li></a>
    </ul>
  </nav>
  <nav id="mobile-nav">
    <div class="mobile-hamburger pull-right"><i class="fa fa-bars"></i></div>
    <ul class="mobile-nav hide">
      <a href="#header" class="mobile-nav-link"><li>Home</li></a>
      <a href="#portfolio" class="mobile-nav-link"><li>Work</li></a>
      <a href="#about" class="mobile-nav-link"><li>About</li></a>
      <a href="#blog" class="mobile-nav-link"><li>Blog</li></a>
      <a href="#contact" class="mobile-nav-link"><li>Contact</li></a>
    </ul>
  </nav>

  <div class="container">
    <!-- Portfolio -->
    <section id="portfolio">
      <div class="portfolio portfolio-a">
          <img src="{{ asset('img/portfolio/jBoat.jpg') }}" alt="">
          <div class="portfolio-overlay">
            <div class="portfolio-link">
              <a class="zoom"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="portfolio-a zoomed-a">
            <div class="img">
              <img src="{{ asset('img/portfolio/full/jBoat_full.jpg') }}" alt="">
              <div class="close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="desc">
              <h3><a href="#">JBoat</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
              <p>J-Boat is a brochure-styled website that gives the public information about the services they offer. J-Boat was developed as a way to find people interested in House Boat Chartering or Ski/Wake-board/Knee-board lessons.</p>
              <h4>Built With:</h4>
              <span class="badge">Wordpress</span> <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio portfolio-b">
        <img src="{{ asset('img/portfolio/developW.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="portfolio-b zoomed-b">
          <div class="img">
            <img src="{{ asset('img/portfolio/full/developW_full.jpg') }}" alt="">
            <div class="close"><i class="fa fa-times-circle"></i>
          </div>
          <div class="desc">
            <h3><a href="#">DevelopWorthy</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
            <p>DevelopWorthy is an application that helps connect Developers with projects that they'll be interested in while Users are able to find Developers with the right skill sets for their needs. </p>
            <h4>Built With:</h4>
            <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span> <span class="badge">Laravel</span> <span class="badge">Semantic-UI</span>
          </div>
        </div>
      </div>
      </div>
      <div class="portfolio portfolio-c">
        <img src="{{ asset('img/portfolio/designA.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="portfolio-c zoomed-c">
          <div class="img">
            <img src="{{ asset('img/portfolio/full/designA_full.jpg') }}" alt="">
            <div class="close"><i class="fa fa-times-circle"></i>
          </div>
          <div class="desc">
            <h3><a href="#">Design-Air</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
            <p>Design Air Heating and Air is a HVAC LLC located in Decatur, IL. This website is brochure-styled to give the public the information they need before they decide to choose them for their services. With some minor back-end services for administration.</p>
            <h4>Built With:</h4>
            <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span> <span class="badge">Laravel</span> <span class="badge">Bootstrap</span>
          </div>
        </div>
      </div>
      </div>
      <div class="portfolio portfolio-d">
        <img src="{{ asset('img/portfolio/bdm.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="portfolio-d zoomed-d">
          <div class="img">
            <img src="{{ asset('img/portfolio/full/bdm_full.jpg') }}" alt="">
            <div class="close"><i class="fa fa-times-circle"></i>
          </div>
          <div class="desc">
            <h3><a href="#">BDM Computers</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
            <p>Portfolio Site for BDM Computers a Web Development, Graphic Design and Computer Hardware Repair/Upgrading company</p>
            <h4>Built With:</h4>
            <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span> <span class="badge">Bootstrap</span>
          </div>
        </div>
      </div>
      </div>

      <div class="portfolio portfolio-e">
          <img src="{{ asset('img/portfolio/campusT.jpg') }}" alt="">
          <div class="portfolio-overlay">
            <div class="portfolio-link">
              <a class="zoom"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="portfolio-e zoomed-e">
            <div class="img">
              <img src="{{ asset('img/portfolio/full/campusT_full.jpg') }}" alt="">
              <div class="close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="desc">
              <h3><a href="#">CampusTowns</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
              <p>News, Current Events, and Calendar for college students in the University of Illinois Campaign Urbana.</p>
              <h4>Built With:</h4>
              <span class="badge">Wordpress</span> <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio portfolio-f">
        <img src="{{ asset('img/portfolio/krekelsW.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="portfolio-f zoomed-f">
          <div class="img">
            <img src="{{ asset('img/portfolio/full/krekelsW_full.jpg') }}" alt="">
            <div class="close"><i class="fa fa-times-circle"></i>
          </div>
          <div class="desc">
            <h3><a href="#">Krekels West</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
            <p>Brochure styled website for a local restaurant. It's heart of many in the central Illinois area and it was an honor to be able to work with the owners while designing and developing a site for them.</p>
            <h4>Built With:</h4>
            <span class="badge">Wordpress</span> <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span>
          </div>
        </div>
      </div>
      </div>
      <div class="portfolio portfolio-g">
        <img src="{{ asset('img/portfolio/rowlandW.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="portfolio-g zoomed-g">
          <div class="img">
            <img src="{{ asset('img/portfolio/full/rowlandW_full.jpg') }}" alt="">
            <div class="close"><i class="fa fa-times-circle"></i>
          </div>
          <div class="desc">
            <h3><a href="#">Rowland Computer Co</a><span> - Created on: Feb 14<sup>th</sup>, 2017</span></h3>
            <p>My first portfolio site designed and developed in 2017 when working alongside my brother; a computer technician.</p>
            <h4>Built With:</h4>
            <span class="badge">HTML</span> <span class="badge">CSS</span> <span class="badge">JavaScript</span> <span class="badge">PHP</span> <span class="badge">Laravel</span> <span class="badge">Semantic-UI</span>
          </div>
        </div>
      </div>
      </div>
      <div class="portfolio portfolio-h placeholder">
        <img src="{{ asset('img/portfolio/placeholder.jpg') }}" alt="">
        <div class="portfolio-overlay">
          <div class="portfolio-link">
            <a class="zoom"><i class="fa fa-search"></i></a>
          </div>
        </div>
      </div>
    </section> <!-- ./ Portfolio -->

    <!-- About -->
    <section id="about">
      <div class="text-center">
          <h1>About Me</h1>
          <hr class="section-hr">

          <div class="section-info">
            <p>Development and Design is constantly changing and that gives me something to work for and learn about every-single-day. There’s something special about researching what you love and Development for me, is just that.</p>
          </div>

          <div class="about-blocks">
            <div class="about-block block-1">
              <i class="fa fa-calendar"></i>
              <h2>5</h2>
              <pre>Years Experience</pre>
            </div>
            <div class="about-block block-2">
              <i class="fa fa-code"></i>
              <h2>15</h2>
              <pre>Completed Projects</pre>
            </div>
            <div class="about-block block-3">
              <i class="fa fa-coffee"></i>
              <h2>967</h2>
              <pre>Coffees Consumed</pre>
            </div>
          </div>

          <hr class="intermit-hr">

          <div id="services">
            <div class="service-block block-1">
              <i class="fa fa-desktop"></i>
              <h2>Responsive Web Design</h2>
              <p>I build responsive websites capable of adapting to any device.</p>
            </div>
            <div class="service-block block-2">
              <i class="fa fa-shopping-cart"></i>
              <h2>eCommerce</h2>
              <p>Start your eCommerce website now, and watch your sales grow.</p>
            </div>
            <div class="service-block block-3">
              <i class="fa fa-wordpress"></i>
              <h2>Wordpress</h2>
              <p>Self-manage your website easily with the latest content management system.</p>
            </div>
            <div class="service-block block-4">
              <i class="fa fa-search"></i>
              <h2>Search Engine Optimization</h2>
              <p>Increase visibility and drive sales through search engine optimization.</p>
            </div>
            <div class="service-block block-5">
              <i class="fa fa-area-chart"></i>
              <h2>Digital Marketing</h2>
              <p>Employ digital marketing tools to target more specific audiences.</p>
            </div>
            <div class="service-block block-6">
              <i class="fa fa-paint-brush"></i>
              <h2>Graphic Design</h2>
              <p>An effective brand strategy will place you above the rest.</p>
            </div>
          </div>

          <div id="skill">
            <span class="badge">HTML</span>
            <span class="badge">CSS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">jQuery</span>
            <span class="badge">PHP</span>
            <span class="badge">Laravel</span>
            <span class="badge">Wordpress</span>
            <span class="badge">Bootstrap</span>
            <span class="badge">Semantic UI</span>
            <span class="badge">LAMP</span>
            <span class="badge">WAMP</span>
            <span class="badge">XAMPP</span>
            <span class="badge">Git</span>
            <span class="badge">SQL</span>
            <span class="badge">MySQL</span>
            <span class="badge">Adobe Suite</span>
            <span class="badge">Windows</span>
            <span class="badge">Linux</span>
            <span class="badge">Command Line</span>
            <span class="badge">SSH</span>
            <span class="badge">FTP</span>
            <span class="badge">SASS</span>
            <span class="badge">AJAX</span>
            <span class="badge">API</span>
            <span class="badge">SEO</span>
            <span class="badge">Google Webmaster</span>
          </div>

          <a href="{{ asset('files/browland_resume.pdf') }}" class="btn btn-cta" target="_blank">View Resume</a>
      </div>
    </section> <!-- ./ About -->

    <hr class="intermit-hr">
    <section id="blog">
      <h1 class="text-center">My Blog</h1>
      <div class="card-grid">
        @foreach($posts as $post)
          <div class="card">
            <div class="img">
              <img class="top" src="{{ $post->cover_image }}" alt="">
              <a title="{{$post->title}}" class="title-banner" href="/posts/{{$post->id}}"><span>{{ str_limit($post->title, $limit = 40, $end = '...') }}</span></a>
            </div>
            <div class="body">
                <div class="title"><i class="fa fa-user"></i> {{ $post->user->name }}</div>
                <pre class="pull-right"><i class="fa fa-calendar-o"> </i> {{ date('F jS, Y', strtotime($post->created_at)) }}</pre>

                <div class="text">{{ strip_tags(str_limit($post->body, $limit = 225, $end = '...')) }}</div>
                  <a href="/posts/{{$post->id}}" class="btn">Read More</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="text-center m-50">
        <a href="{{ route('posts.index') }}" class="btn btn-cta">View More</a>
      </div>
    </section>

    <section id="contact">
      <div>
        <h1 class="text-center">Contact Me</h1>
      </div>
      <div class="contact-content">
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-envelope"></i>con<!--@-->tact<!--brow -->@blazerow <!--@yahoo-->.com <!--/user--></li>
            <li><i class="fa fa-phone"></i> (217<!--)211 -->)853<!--3321 -->-7271<!--1211 --></li>
            <li><i class="fa fa-clock-o"></i>Mon - Sat | 9am - 5pm</li>
          </ul>
        </div>

        <form action="{{ route('contact') }}" method="POST" class="contact-form">
          @csrf
          <div class="form-group">
            <div class="form-inline">
              <input type="text" name="name" placeholder="Full Name" required>
              <input type="text" name="email" placeholder="E-Mail" required>
            </div>
            <textarea name="message" cols="30" rows="5" placeholder="Message" required></textarea>
            <input type="submit" class="contact-submit" value="Send Email">
          </div>
        </form>
      </div>
    </section>

    <footer id="site-footer">
      <span class="copy">&copy; 2018 | Blaze Rowland</span>
      <span class="social">
        <a href="https://www.github.com/blaze-rowland" target="_blank"><i class="fa fa-github"></i></a>
        <a href="https://www.instagram.com/blaze_develops/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/blaze-rowland" target="_blank"><i class="fa fa-linkedin"></i></a>
      </span>
    </footer>
  </div>
@stop
