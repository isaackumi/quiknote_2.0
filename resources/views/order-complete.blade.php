@include('partials.header')

<section class="page-title" style="background-color: #800000">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Order Complete</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>

	<div class="jumbotron text-center" style="background-color: white">
	  <h1 class="display-3">Thank You!</h1>
	  <p class="lead">Enjoy your studies😉</p>
	  <hr>
	  <p>
	    Having trouble? <a href="">Contact us</a>
	  </p>
	  <p class="lead">
	    <a class="btn  btn-sm" href="{{url('/pay')}}" role="button" style="background-color: #800000; color: white">Continue to Download</a>
	  </p>
	</div>
</body>
</html>



