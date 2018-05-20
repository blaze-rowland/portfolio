@extends('layouts.app')
@section('title')
<title>About</title>
@stop
@section('meta_data')
<meta name="description" content="Learn more about me and why I'm the right choice for your next project.">
@stop
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @include('partials._appNav')
  
    <section id="about--page" class="about--page">
        <div class="container">
          <h1 class="heading-primary p-top--md">
            About.
          </h1>
          <div class="w-75--flexible">
              <p class="paragraph">
                I'm a happy-go-lucky web developer and graphic designer from Decatur, Illinois. I've been in this field for over 5 years and have a great understanding for what's going on under the hood; so you don't have to. I love what I do and that reflects on my work and and client interaction.
              </p>
              <p class="paragraph m-top--md">
                When it comes to my work I ensure the highest standards are set in place. Search Engine Optimization (SEO) is the most important thing when it comes to a new website. My incredibly fast, mobile-friendly designs speak to Google, Bing, Yahoo, etc. to bring your site to the top of the charts. Creating organic-keywords, HTML hiearchy, and more to get your audience to more people every day. 
              </p>
          </div>
        </div>

        <div class="container m-top--lg">
          <h3 class="heading-tertiary heading-tertiary--about">
            Services
          </h3>
          <p class="paragraph">
            From developing all of this time I've learned quite a few skills.
          </p>
          <table class="table m-top--md is-hidden--mobile">
            <tr>
              <th class="table__head--secondary">Front-End</th>
              <td>HTML5</td>
              <td>CSS3</td>
              <td>SASS</td>
              <td>JavaScript</td>
            </tr>
            <tr>
              <th class="table__head--secondary">Back-End</th>
              <td>PHP</td>
              <td>NodeJS</td>
              <td>MySQL</td>
            </tr>
            <tr>
              <th class="table__head--secondary">Frameworks</th>
              <td>jQuery</td>
              <td>Laravel</td>
              <td>Bootstrap</td>
              <td>Foundation</td>
              <td>Semantic UI</td>
            </tr>
            <tr>
              <th class="table__head--secondary">Software</th>
              <td>Photoshop</td>
              <td>Illustrator</td>
              <td>Sketch</td>
            </tr>
            <tr>
              <th class="table__head--secondary">Tools</th>
              <td>GIT</td>
              <td>Command Line</td>
              <td>NPM</td>
              <td>Yarn</td>
            </tr>
          </table>
          <div class="pills is-hidden--desktop m-top--md">
            <span class="badge">HTML5</span>
            <span class="badge">CSS3</span>
            <span class="badge">SASS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">PHP</span>
            <span class="badge">NodeJS</span>
            <span class="badge">MySQL</span>
            <span class="badge">jQuery</span>
            <span class="badge">Laravel</span>
            <span class="badge">Bootstrap</span>
            <span class="badge">Foundation</span>
            <span class="badge">Semantic UI</span>
            <span class="badge">Photoshop</span>
            <span class="badge">Illustrator</span>
            <span class="badge">Sketch</span>
            <span class="badge">GIT</span>
            <span class="badge">Command Line</span>
            <span class="badge">NPM</span>
            <span class="badge">Yarn</span>
          </div>
        </div>
        
        <div class="container m-top--lg">
          <h3 class="heading-tertiary heading-tertiary--about">
            Resumé
          </h3>
          <p class="paragraph m-bottom--md">
            Click the link below to download my up-to-date resumé.
          </p>
          <a href="{{ asset('files/browland_resume.pdf') }}" class="btn btn--secondary">Download</a>
        </div>
    </section>
@stop