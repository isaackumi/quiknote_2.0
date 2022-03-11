@include('partials.header')



@if(Auth::user())

<div class="container-md"  >
    <center>
        Congrats!!!! <strong>{{ Auth::user()->username }}</strong>  You are now a member!!
    </center>

</div>

@endif
<!--============================
=            Footer            =
=============================-->
@include('partials.footer')
