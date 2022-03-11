@include('partials.header')


<!--================================
=            Page Title            =
=================================-->
<section class="page-title" style="background-color: #800000">
	<!-- Container Start -->
	<div class="container" >
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center" >
				<!-- Title text -->
				<h3>About Us</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{asset('assets/images/about/walli.jpeg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="about-content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 class="font-weight-bold">Introduction</h3>
                    <p>QUIKNOTE is an online educational platform where registered users may contribute self-created lecture notes,materials,study guides,research papers and works forsale,access,use,and evaluation by other users of the Website. </p><br><bR>
                    <h3 class="font-weight-bold">What is Our Brand?</h3>
                    <p><i>"Togetherness"</i>  There is an akan proverb that says 'Nyansa nni baako fo) tirim'. This translates on person is not the bearer of all knowledge. We believe through togetherness we can share ideas and conquer. We want to revolutionalize learning in Ghana and beyond</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center text-capitalize font-weight-bold py-5">
                    <h2>our team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{asset('assets/images/team/willi.jpg')}}" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">William Obese</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{asset('assets/images/team/herman.jpeg')}}" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Herman Duse</h5>
                        <p class="card-text">Operations Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{asset('assets/images/team/dex.jpeg')}}" class="img-fluid w-100 h-120" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Derrick Osae</h5>
                        <p class="card-text"> Front-End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{asset('assets/images/team/kumi.jpg')}}" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Isaac Kumi</h5>
                        <p class="card-text">Back-End Developer</p>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="{{asset('assets/images/team/sadat.jpg')}}" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Sadat Issah</h5>
                        <p class="card-text">Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-smile-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="2314">0</span>
                    <h5>Happy Customers</h5>
                    </script>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-user-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="1013">0</span>
                    <h5>Active Members</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-bookmark-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="2413">0</span>
                    <h5>Verified Ads</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-smile-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="200">0</span>
                    <h5>Happy Customers</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
