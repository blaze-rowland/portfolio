<!doctype html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
<title>Test Bench</title>

<style>
  #portfolio-grid {
    display: flex;
    height: auto;
    margin: 0;
    padding: 0;
  }

  .portfolio-blocks {
  }

  .portfolio-item {
    width: 100%;
  }

  .portfolio-item img {
    height: 305px;
    width: 100%;
  }

  .row-1 {
    display: flex;
    justify-content: center;
    line-height:0;
  }

  .row-2 {
    display: flex;
    justify-content: center;
    line-height: 0;
  }

  .portfolio-links {
    background-color: salmon;
    display: relative;
    font-size: 1.8em;
    margin-top: -60px;
    line-height: 60px;
    text-align: center;
    z-index: 52;
  }

  .portfolio-link-left {
    color: #fff;
    margin-right: 10%;
  }

  .portfolio-link-right {
    color: #fff;
    margin-left: 10%;
  }
</style>

<h1>Portfolio Grid</h1><br>

<div id="portfolio-grid">
  <ul class="portfolio-blocks">
    <div class="row-1">
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"> <i class="fa fa-link"></i> </a>
          </div>
        </div>
      </li>

      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
    </div>
    <div class="row-2">
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
      <li>
        <div class="portfolio-item">
          <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
          <div class="portfolio-links">
            <a href="" class="portfolio-link-left"><i class="fa fa-search"></i></a>
            <a href="" class="portfolio-link-right"><i class="fa fa-link"></i></a>
          </div>
        </div>
      </li>
    </div>
  </ul>
</div>

<br><h1>End Portfolio Grid</h1>
<hr><br>

<script>
  $('.portfolio-links').css({'visibility' : 'hidden'});

  $('.portfolio-item').hover(function(){
      $('.portfolio-links').css({'visibility' : 'visible'});
      $('.portfolio-links').addClass('slidInUp');
  }, function(){
    $('.portfolio-links').css({'visibility' : 'hidden'});
    $('.portfolio-links').removeClass('slideInUp');
    $('.portfolio-links').addClass('slideOutDown');
  });
</script>
