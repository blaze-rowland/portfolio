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
      <a href="#contact" class="nav-link"><li>Contact</li></a>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta repellat vero natus adipisci porro accusantium voluptatibus ab blanditiis facere fugit sit, dolorem dolore molestias, cupiditate illum? Quae, non, aspernatur! Minus molestias deserunt libero itaque tempora laudantium nobis non, at eaque quisquam quam fugiat sit, suscipit illum tempore provident debitis eligendi ut reprehenderit nihil voluptas maiores. Atque ipsa temporibus vero recusandae perferendis sint odio nesciunt, sed animi repellat sapiente eveniet eius necessitatibus cupiditate.</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam perferendis pariatur, repellendus vero! Iure illum maxime, sint possimus cumque. Sint illum iste, adipisci eligendi rerum doloremque rem, magni quisquam fuga ad alias eveniet omnis fugit perspiciatis delectus repellat dignissimos vel saepe deleniti laboriosam et voluptatibus. Accusamus ut delectus hic? Voluptatem.</p>
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

          <a href="{{ asset('files/browland_resume.pdf') }}" class="download-resume">View Resume</a>
      </div>
    </section> <!-- ./ About -->

    <section id="contact">
      <div>
        <h1 class="text-center">Contact Me</h1>
      </div>
      <div class="contact-content">
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-envelope"></i>browland.bdm@gmail.com</li>
            <li><i class="fa fa-phone"></i> (217)852-7271</li>
            <li><i class="fa fa-clock-o"></i>Mon - Sat | 9am - 5pm</li>
          </ul>
        </div>

        <form action="#" method="POST" class="contact-form">
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
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </span>
    </footer>
  </div>
@stop
