@extends('principal')
@section('containerF')
  <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center" data-slide-bg="{{ asset('principal/images/slider-1-slide-1-1920x671.jpg')}}">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We play Soccer</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">like no one else in the united states</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="{{ asset('principal/images/slider-1-slide-2-1920x671.jpg')}}">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">We Are Pros</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">in Everything Concerning Soccer</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-slide-bg="{{ asset('principal/images/slider-1-slide-3-1920x671.jpg')}}">
        <div class="container">
          <div class="row">
            <div class="col-xl-5">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Best Website</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">for soccer news, updates, <br class="d-none d-xl-block"> and game results</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </section>

  <section class="section section-sm bg-gray-100">
    <div class="container">
        <div class="row row-50">
            <div class="col-xl-8">
                <!-- Heading Component-->
                <article class="heading-component">
                    <div class="heading-component-inner">
                        <h5 class="heading-component-title">Apertura - Jornada 6 de 19 </h5>
                    </div>
                </article>
                <form class="" action="{{ route('quiniela')}}" method="post">
                  @csrf
                <div class="row row-30">

                  @foreach ($part as $vale => $equi)
                    <div class="col-md-6">
                        <!-- Game Result Classic-->
                        <article class="game-result game-result-classic">
                            <div class="game-result-main">
                                <div class="game-result-team game-result-team-first">
                                    <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('principal\images/'.$equi->imgEqui($equi->local))}}" alt="" width="41" height="55" />
                                    </figure>
                                    <div class="game-result-team-name">
                                      {{ $equi->equipos($equi->local)}}
                                    </div>
                                </div>
                                <div class="game-result-middle">
                                    <div class="game-result-score-wrap">
                                        <div class="game-result-score">
                                          <input type="radio" name="resultado{{$vale}}" value="L">
                                        </div>
                                        <div class="game-result-score-divider">
                                            <svg x="0px" y="0px" width="7px" height="21px" viewbox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                                                <g>
                                                    <circle cx="3.5" cy="3.5" r="3"></circle>
                                                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                                                </g>
                                                <g>
                                                    <circle cx="3.695" cy="17.5" r="3"></circle>
                                                    <path
                                                      d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="game-result-score">
                                          <input type="radio" name="resultado{{$vale}}" value="V">
                                        </div>
                                    </div>
                                </div>
                                <div class="game-result-team game-result-team-second">
                                    <figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('principal\images/'.$equi->imgEqui($equi->visitante))}}" alt="" width="50" height="50" />
                                    </figure>
                                    <div class="game-result-team-name">
                                        {{ $equi->equipos($equi->visitante)}}
                                    </div>
                                </div>
                            </div>
                            <div class="game-result-footer">
                              <div class="game-result-score">
                                <input type="radio" name="resultado{{$vale}}" value="E">
                              </div>
                              <div class="game-result-team-name">
                                Empate
                              </div>
                                <ul class="game-result-details">
                                    <li>{{ $equi->estadio}}</li>
                                    <li>
                                        <time datetime="2019-04-14">{{ $equi->fecha_hora}}</time>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                  @endforeach
                </div>
                <button class="button button-block button-primary" type="submit" name="button">Jugar</button>
              </form>
            </div>
            <div class="col-xl-4">
                <!-- Heading Component-->
                <article class="heading-component">
                    <div class="heading-component-inner">
                        <h5 class="heading-component-title">Tabla General</h5>
                    </div>
                </article>
                <!-- Table team-->
                <div class="table-custom-responsive">
                    <table class="table-custom table-standings table-classic">
                        <thead>
                            <tr>
                                <th colspan="2">Posicione del Equipo</th>
                                <th>G</th>
                                <th>E</th>
                                <th>P</th>
                                <th>DG</th>
                                <th>PTS</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($equipos as $equipo)

                            <tr>
                                <td><span></span></td>
                                <td class="team-inline">
                                    <div class="team-figure"><img src="{{asset('principal\images/'.$equipo->imagen  )}}" alt="" width="31" height="41" />
                                    </div>
                                    <div class="team-title">
                                        <div class="team-name">{{$equipo->nombre}}</div>
                                    </div>
                                </td>
                                <td>{{$equipo->ganados}}</td>
                                <td>{{$equipo->empatados}}</td>
                                <td>{{$equipo->ganados}}</td>
                                <td>{{$equipo->diferencia_goles}}</td>
                                <td>{{$equipo->puntos}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
