@extends('layouts.app')
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <header id="header">
    <div class="header__content">
        <h1 class="heading-primary heading-primary--main">I am Blaze Rowland</h1>

        <div class="social">
            <ul class="social__list">
                <li class="social__item">
                    <a href="https://www.github.com/blaze-rowland" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="{{asset('img/sprite.svg#icon-github')}}"></use>
                        </svg>
                    </a>
                </li>

                <li class="social__item">
                    <a href="https://www.instagram.com/blaze_develops/" class="social__link">
                        <svg class="icon social__icon">
                            <use xlink:href="{{asset('img/sprite.svg#icon-instagram')}}"></use>
                        </svg>
                    </a>
                </li>

                <li class="social__item">
                    <a href="https://www.linkedin.com/in/blaze-rowland/" class="social__link">
                        <svg class="social__icon">
                            <use xlink:href="{{asset('img/sprite.svg#icon-linkedin2')}}"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<nav class="nav is-hidden is-hidden--opac">
    <div class="container">
        <ul class="nav__list">
            <a href="#header" class="nav__link">
                <li class="nav__item">
                    <span>Home</span>
                </li>
            </a>
            <a href="#about" class="nav__link">
                <li class="nav__item">
                    <span>About</span>
                </li>
            </a>
            <a href="#work" class="nav__link">
                <li class="nav__item">
                    <span>Work</span>
                </li>
            </a>
            <a href="#blog" class="nav__link">
                <li class="nav__item">
                    <span>Blog</span>
                </li>
            </a>
            <a href="#contact" class="nav__link">
                <li class="nav__item">
                    <span>Contact</span>
                </li>
            </a>
        </ul>
    </div>
</nav>

<main>
    <section id="about" class="about">
        <div class="container">
            <div class="about__box">
                <img src="{{asset('img/about-img.jpg')}}" alt="Programming image" class="about__img">

                <div class="about__text">
                    <h3 class="heading-tertiary heading-tertiary--about">About Me</h3>
                    <p class="paragraph m-bottom--md">
                        I'm a happy-go-lucky web developer and graphic designer from Decatur, Illinois. I've been in this field for over 5 years and have a great understanding for what's going on under the hood; so you don't have to. I love what I do and that reflects on my work and and client interaction.
                    </p>
                    <a href="{{route('about')}}" class="btn btn--primary">View More</a>
                </div>
            </div>
            <div class="scroller">
                <div class="scroller__box">
                    <svg class="scroller__icon">
                        <use xlink:href="{{asset('img/sprite.svg#icon-display')}}"></use>
                    </svg>

                    <h5 class="scroller__heading heading-quinary heading-quinary--about">Web Design</h5>

                    <p class="scroller__text paragraph">
                        After a discovery period where we discuss your vision, designs you like, and more; I'll begin designing and developing your website or web-application.
                    </p>
                </div>

                <div class="scroller__box">
                    <svg class="scroller__icon">
                        <use xlink:href="{{asset('img/sprite.svg#icon-pen')}}"></use>
                    </svg>

                    <h5 class="scroller__heading heading-quinary heading-quinary--about">Graphic Design</h5>

                    <p class="scroller__text paragraph">
                            Graphic design is more than what you see. It's about how it makes you feel and more importantly how it makes your potential clients feel. Taking color-theory into account I'll ensure both beauty and benefits.
                    </p>
                </div>

                <div class="scroller__box">
                    <svg class="scroller__icon">
                        <use xlink:href="{{asset('img/sprite.svg#icon-stats-dots')}}"></use>
                    </svg>

                    <h5 class="scroller__heading heading-quinary heading-quinary--about">Brand Identity</h5>

                    <p class="scroller__text paragraph">
                        There's nothing more important than your company's image. Tell me about your vision and I'll guarantee a design that replicates it and reflects that passion to your audience.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="work" class="work">
        <div class="container">
            <div class="work__box">
                <h3 class="heading-tertiary heading-tertiary--work">Work</h3>
                <p class="paragraph m-bottom--md">
                    Take a look at some of my recent projects. I'm very proud of them.
                </p>
                <a href="{{route('portfolio.index')}}" class="btn btn--tertiary">See all</a>
            </div>
        </div>
        <div class="container">
            <div class="work__projects">
                @foreach($portfolios as $portfolio)
                <a href="{{ route('portfolio.show', $portfolio->id) }}">
                    <div class="work__projects-box">
                        <img src="{{ "http://res.cloudinary.com/blazerowland/image/upload/v1526829179/Portfolio/cover/" . $portfolio->cover_image }}" alt="{{ $portfolio->title }} Cover Image" class="work__img work__img--important">
                        <div class="work__text">{{ $portfolio->title }}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container container--blog-header">
            <div class="blog__header">
                <h3 class="heading-tertiary heading-tertiary--blog">Blog</h3>
                <p class="paragraph m-bottom--md">I'm very involved in my work; I love creating blog posts for my clientele and fellow developers.</p>
                <a href="{{ route('posts.index') }}" class="btn btn--secondary">See all</a>
            </div>
        </div>

        <div class="container container--blog">
            @foreach($posts as $post) 
            <div class="blog__box">
                <a href="{{ route('posts.show', $post->id) }}">
                    <img src="{{ $post->cover_image }}" alt="Blog 1" class="blog__img">

                    <div class="blog__inner">
                        <p class="blog__date">{{ date('F jS, Y', strtotime($post->created_at)) }}</p>
                        <h5 class="blog__title heading-quinary">{{ str_limit($post->title, $limit = 30, $end = '...') }}</h5>
                        <p class="blog__snip paragraph">{{ strip_tags(str_limit($post->body, $limit = 150, $end = '...')) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="contact__header">
                <h3 class="heading-tertiary heading-tertiary--contact">Talk to Me</h3>
                <ul class="contact__list">
                    <li class="contact__item">
                        Decatur, IL
                    </li>
                    <li class="contact__item">
                        62526
                    </li>
                    <li class="contact__item">
                        contact<!--browlands-->@<!--@gmail-->blazerow<!--.net -->.com
                    </li>
                    <li class="contact__item">
                        217<!-- 242--> 853<!--283--> 7271<!--1929-->
                    </li>
                </ul>
            </div>

            <div class="contact__form">
                <h4 class="contact__header--secondary heading-quaternary heading-quaternary--contact">
                    I'll get back to you shortly
                </h4>
                <form action="{{ route('contact') }}" method="POST" class="container--contact">
                    @csrf
                    <div class="form__group">
                        <input name="name" type="text" class="form__input form__input--half-one" placeholder="Full Name" required>
                        <label for="name" class="form__label form__label--offset">Full Name</label>
                    </div>

                    <div class="form__group">
                        <input name="email" type="email" class="form__input form__input--half-two" placeholder="Email" required>
                        <label for="email" class="form__label">Email</label>
                    </div>
                    <hr class="form__hr">
                    <textarea name="message" class="form__input form__input--textarea" rows="6" placeholder="What can I assist you with?" required></textarea>
                    <label for="" class="form__label form__label--offset">Message</label>

                    <input type="submit" class="btn btn--secondary btn--form" value="Send">
                </form>
            </div>
        </div>
    </section>

</main>

@include('partials._footer')
@stop
