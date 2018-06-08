
@include('seller.includes.header')
@yield('seller_content')
<h1>{{Auth::guard('seller')->user()->name}}</h1>
<h1>{{Auth::guard('seller')->user()->email}}</h1>
@include('seller.includes.footer')
