@include('partials.header')

<section class="page-title" style="background-color: #800000">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>You are almost there</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>

@include('flash-message')

	<div class="jumbotron text-center" style="background-color: white">
	  <h1 class="display-3">Thank You!</h1>
	  <p class="lead">Enjoy your studies😉</p>
	  <hr>
	  <p>
	    Having trouble? <a href="{{ url('contact-us') }}">Contact us</a>
	  </p>
	  <p class="lead">

        <form method="POST" action="{{ route('membership-pay') }}" id="paymentForm">
            {{ csrf_field() }}
            <input type="hidden" name="amount" value="0.50" />
            <input type="hidden" name="payment_method" value="both" />
            <input type="hidden" name="description" value="Beats by Dre. 2017" />
            <input type="hidden" name="country" value="GH" />
            <input type="hidden" name="currency" value="GHS" />
            @if(Auth::user())
            <input type="hidden" name="email" value="{{ Auth::user()->email }}" />
            <input type="hidden" name="fullname" value="{{ Auth::user()->name }}" />
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" />

            @endif
            <input type="hidden" name="phonenumber" value="0549754268" />
            <button type="submit" class="btn  btn-sm" role="button" style="background-color: #800000; color: white">Proceed to payment</button>
            <form>
	  </p>
	</div>
</body>
</html>



