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
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-first-name">First Name</label>
                        <input class="form-input" id="biling-first-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-family-name">Family Name</label>
                        <input class="form-input" id="biling-family-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-company">Company</label>
                        <input class="form-input" id="biling-company" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-address">Address</label>
                        <input class="form-input" id="biling-address" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-country">Country</label>
                        <input class="form-input" id="biling-country" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-city">City/Town</label>
                        <input class="form-input" id="biling-city" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-apartment">Apartment/Suite No.</label>
                        <input class="form-input" id="biling-apartment" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="biling-phone">Phone</label>
                        <input class="form-input" id="biling-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

@endsection
