@include('frontend.front_view.includes.header')


<div class="container">
            <div class="gap gap-small"></div>
            <div class="row row-sm-gap" data-gutter="10">

              @yield('main_sidebar')
              @yield('main_slider')


            </div>

            <div class="gap"></div>

            @yield('main_content')

</div>


@include('frontend.front_view.includes.footer')
