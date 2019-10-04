@extends('principal')
@section('containerF')

  <section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-30">
        <div class="col-lg-8">
          <article class="heading-component">
            <div class="heading-component-inner">
              <h5 class="heading-component-title">
                Jugador
              </h5>
            </div>
          </article>
          <div class="player-info-corporate">
            <div class="player-info-figure">
              <div class="block-number">
                <span>10</span>
              </div>
              <div class="player-img">
                <img src="{{ asset('principal/images/roster-player-5-368x286.png')}}" alt="" width="368" height="286"/>
              </div>
              <div class="team-logo-img">
                <img src="{{ asset('principal/images/logo-team-1-237x312.png')}}" alt="" width="237" height="312"/>
              </div>
            </div>
            <div class="player-info-main">
              <h4 class="player-info-title">Israel Hernandez</h4>
              <hr/>
              <div class="player-info-table">
                <div class="table-custom-wrap">
                  <table class="table-custom">
                    <tr>
                      <th>Años</th>
                      <th>20</th>
                      <th>Estatura</th>
                      <th>1.70</th>
                    </tr>
                    <tr>
                      <td>Peso</td>
                      <td>68 k</td>
                      <td>Total de Juegos</td>
                      <td>10</td>
                    </tr>
                  </table>
                </div>
              </div>
              <hr/>
              <div class="player-info-progress">
                <article class="progress-linear progress-bar-modern">
                  <div class="progress-header">
                    <p>Pases a Gol</p>
                  </div>
                  <div class="progress-bar-linear-wrap">
                    <div class="progress-bar-linear"></div>
                  </div><span class="progress-value">95</span>
                </article>
                <article class="progress-linear progress-bar-modern">
                  <div class="progress-header">
                    <p>Goles</p>
                  </div>
                  <div class="progress-bar-linear-wrap">
                    <div class="progress-bar-linear"></div>
                  </div><span class="progress-value">70</span>
                </article>
              </div>
            </div>
          </div>
          <div class="block-player-info">
            <h4>Quiniela Jugada</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row row-30">
            <div class="col-md-6 col-lg-12">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Menu</h5>
                </div>
              </article>
              <ul class="list-statictics">
                <li><a href="#">Opcion 1</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="#">Opcion 3</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-12">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Aviso</h5>
                </div>
              </article>
              <div class="owl-carousel owl-carousel-dots-modern awards-carousel" data-items="1" data-autoplay="true" data-autoplay-speed="4000" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true">
                <!-- Awards Item-->
                <div class="awards-item">
                    <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">World</span>Champions
                        </h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">December 2014</h5>
                    </div>
                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-1-67x147.png" alt="" width="67" height="147" />
                    </div>
                </div>
                <!-- Awards Item-->
                <div class="awards-item">
                    <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">Best</span>Forward
                        </h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">June 2015</h5>
                    </div>
                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-2-68x126.png" alt="" width="68" height="126" />
                    </div>
                </div>
                <!-- Awards Item-->
                <div class="awards-item">
                    <div class="awards-item-main">
                        <h4 class="awards-item-title"><span class="text-accent">Best</span>Coach
                        </h4>
                        <div class="divider"></div>
                        <h5 class="awards-item-time">November 2016</h5>
                    </div>
                    <div class="awards-item-aside"> <img src="images/thumbnail-minimal-3-73x135.png" alt="" width="73" height="135" />
                    </div>
                </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
