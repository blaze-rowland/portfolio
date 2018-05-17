@extends('layouts.app')
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @include('partials._appNav')
  
    <section id="work--page" class="work--page">
        <div class="container">
          <h1 class="heading-primary p-top--md">
            Portfolio.
          </h1>
          <div class="w-75">
              <p class="paragraph">
                Design and Development is more than just a job for me. It's my passion; I love everything from the first proposal to the final design. There's something special about working with a client to accomplish something that not only I'm proud to create, but you're proud to call your own.
              </p>
          </div>
        </div>

        <div class="container m-top--md">
          <h3 class="heading-tertiary heading-tertiary--work">
            Services
          </h3>
          <p class="paragraph">
            Here are some of my favorite projects from over the years.
          </p>
        </div>
    </section>

    <section id="work work--page" class="work m-top--xl">
      <div class="container">
          <div class="work__projects">
              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/bdm.jpg')}}" alt="" class="work__img work__img--important">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/campusT.jpg')}}" alt="" class="work__img">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/designA.jpg')}}" alt="" class="work__img work__img--important">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/developW.jpg')}}" alt="" class="work__img work__img--important">
              </div>


              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/jBoat.jpg')}}" alt="" class="work__img work__img--important">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/krekelsW.jpg')}}" alt="" class="work__img">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/rowlandW.jpg')}}" alt="" class="work__img">
              </div>

              <div class="work__projects-box">
                  <img src="{{asset('img/portfolio/placeholder.jpg')}}" alt="" class="work__img">
              </div>
          </div>
      </div>
      </div>
  </section>
@stop