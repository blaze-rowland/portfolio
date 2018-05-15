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