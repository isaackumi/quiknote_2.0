@include('partials.header')
@include('sweet::alert')



@if(Auth::user())

<div class="container-md">
    Congrats!!!! <strong>{{ Auth::user()->username }}</strong>  You are now a member
</div>

@endif
<!--============================
=            Footer            =
=============================-->
@include('partials.footer')
