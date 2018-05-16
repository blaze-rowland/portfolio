@extends('layouts.app')
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
          <div class="w-75">
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
          <table class="table m-top--md">
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
        </div>
        
        <div class="container m-top--lg">
          <h3 class="heading-tertiary heading-tertiary--about">
            Resumé
          </h3>
          <p class="paragraph m-bottom--md">
            Click the link below to download my up-to-date resumé.
          </p>
          <a href="#" class="btn btn--secondary">Download</a>
        </div>
    </section>
@stop