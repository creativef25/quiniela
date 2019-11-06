@extends('principal')
@section('containerF')

  <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <h3 class="breadcrumbs-custom-title">Mis Datos</h3>
      </div>
    </div>
  </section>

  <section class="section section-md bg-gray-100">
    <div class="container text.center">
      <div class="row row-50 text-left">
        <div class="col-md-12">
          <div class="row row-50">
            <div class="col-lg-6">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Ingresa tus Datos
                  </h5>
                </div>
              </article>
              <form class="rd-form">
                <div class="form-wrap">
                  <div class="row row-10 row-narrow">
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-first-name">Nombre</label>
                        <input class="form-input" id="biling-first-name" type="text" name="nombre" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-family-name">Apellido Paterno</label>
                        <input class="form-input" id="biling-family-name" type="text" name="apePaterno" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-family-name">Apellido Materno</label>
                        <input class="form-input" id="biling-family-name" type="text" name="apeMaterno" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-company">Edad</label>
                        <input class="form-input" id="biling-company" type="text" name="edad" data-constraints="@Required">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
              <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">Ingresa tu Direccion</h5>
                </div>
              </article>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="biling-address">Calle</label>
                  <input class="form-input" id="biling-address" type="text" name="calle" data-constraints="@Required">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="biling-country">Alcaldia</label>
                  <input class="form-input" id="biling-country" type="text" name="alcaldia" data-constraints="@Required">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="biling-city">Ciudad</label>
                  <input class="form-input" id="biling-city" type="text" name="ciudad" data-constraints="@Required">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="biling-apartment">Codigo Postal.</label>
                  <input class="form-input" id="biling-apartment" type="text" name="cp" data-constraints="@Required">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <label class="form-label" for="biling-phone">Telefono</label>
                  <input class="form-input" id="biling-phone" type="text" name="telefono" data-constraints="@Required @Numeric">
                </div>
              </div>
            </div>
            <button type="submit" name="button" class="btn btn-primary">Guardar</button>
          </form>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection
