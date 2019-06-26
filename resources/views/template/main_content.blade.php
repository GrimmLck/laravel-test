<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="overview-wrap">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-primary">
                  <h2 class="title-1">@yield('judul')</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row m-t-25">
            @yield('isicontent')
        </div>
      </div>
        @include('template.footer')
    </div>
  </div>
</div>
<!-- END MAIN CONTENT-->
