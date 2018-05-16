<style>
.nav {
  -webkit-animation-duration: .4s;
          animation-duration: .4s;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 11px 60px -25px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 11px 60px -25px rgba(0, 0, 0, 0.1);
  max-width: 100vw;
  width: 100%;
  z-index: 999;
}

.nav__list {
  -ms-flex-line-pack: center;
      align-content: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  list-style: none;
}

@media only screen and (max-width: 1024px) {
  .nav__list {
    -ms-flex-pack: distribute;
        justify-content: space-around;
  }
}

@media only screen and (max-width: 414px) {
  .nav__list {
    display: none;
  }
}

.nav__item {
  padding: 22px 0;
  text-align: center;
  -webkit-transition: all .2s;
  transition: all .2s;
  width: 10rem;
}

.nav__item:hover {
  background-color: #FF6138;
}

.nav__link:hover {
  color: #ffffff;
}

.nav__link {
  color: #FF6138;
  font-size: 20px;
  text-decoration: none;
}
</style>
<nav class="nav">
    <div class="container container--nav">
        <ul class="nav__list">
            <a href="{{ route('/', '#header') }}" class="nav__link">
                <li class="nav__item">
                    <span>Home</span>
                </li>
            </a>
            <a href="{{ route('about') }}" class="nav__link">
                <li class="nav__item">
                    <span>About</span>
                </li>
            </a>
            <a href="{{ route('portfolio.index') }}" class="nav__link">
                <li class="nav__item">
                    <span>Work</span>
                </li>
            </a>
            <a href="{{ route('posts.index') }}" class="nav__link">
                <li class="nav__item">
                    <span>Blog</span>
                </li>
            </a>
            <a href="{{ route('/', '#contact') }}" class="nav__link">
                <li class="nav__item">
                    <span>Contact</span>
                </li>
            </a>
        </ul>
    </div>
</nav>