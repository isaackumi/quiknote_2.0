@include('partials.header')

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Get your notes served to you</h1>
					<p>Join the family now who share notes <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
                            @forelse($all_courses as $course)
							<li class="list-inline-item">
								<a href="#category"><i class="fa fa-book"></i> {{$course->course_name}}</a></li>

                            @empty
                                <li class="list-inline-item">
                                    <a href="#category.html"><i class="fa fa-book"></i> FDE</a>
                                </li>
                            @endforelse

						</ul>
					</div>

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form method="GET" action="{{url('search')}}">

											<div class="form-row">
												<div class="form-group col-md-4">
													<input type="text" name="searchterm" value="{{request()->input('searchterm')}}" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">
												</div>

                                                <div class="form-group col-md-3">
                                                    <input type="text" name="uni" value="{{request()->input('uni')}}"class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="text" name="course" value="{{request()->input('course')}}"class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">
                                                </div>

												<div class="form-group col-md-2 align-self-center">
													<button type="submit" class="btn" style="background-color: #800000; color: white">Search Now</button>
												</div>
											</div>
										</form>
									</div>
								</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Schools</h2>
					<p>Go ahead! Your notes are waiting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light" style="width: 18rem;">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#category.html">
				<img class="card-img-top img-fluid" src="{{asset('assets/images/products/ashesi.jpg')}}  " alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#category.html">Ashesi University</a></h4>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<!-- <ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul> -->
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light" style="width: 18rem;">
	<div class="card" >
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#category.html">
				<img class="card-img-top img-fluid" src="{{asset('assets/images/products/legon.jpg')}}  " alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#category.html">University of Ghana</a></h4>

		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<!-- <ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul> -->
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light" style="width: 18rem;">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#category.html">
				<img class="card-img-top img-fluid" src="{{asset('assets/images/products/knust.jpg')}}  " alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#category.html">KNUST</a></h4>

		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<!-- <ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul> -->
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light" style="width: 18rem;">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#category.html">
				<img class="card-img-top img-fluid" src="{{asset('assets/images/products/ucc.jpg')}} " alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#category.html">University of Cape Coast</a></h4>

		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<!-- <ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul> -->
		    </div>
		</div>
	</div>
</div>



					</div>
				</div>
			</div>


		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Notes, Study Guides, Research Papers</h2>
					<p>Explore and accumulate knowledge from every corner!</p>
				</div>
				<div class="row">
					<!-- Category list -->
@forelse($premium_users_note as $note)
				<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="/single-note/{{$note['id']}}">
				<img class="card-img-top img-fluid" src=" {{ URL::to('/') }}/storage/uploads/{{ $note->note_thumbnail }}   " alt="Card image cap">
			</a>
            <div class="price-tag" style="background-color: #800000; color: white">
                <h6>
                    <center class="mt-30">
                        <span class="mt-5" style=" color: white">GH¢</span>  <span style=" color: white"> {{$note->note_price}}</span>

                    </center>

                </h6>
            </div>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single-note/{{$note['id']}}">{{ $note->note_type ?? ' Note Type' }}</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
{{--		    		<a href=" single-note/{{$note->id}}"><i class="fa fa-folder-open-o"></i>{{ $note->note_title ?? 'Note Title' }}</a>--}}
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="single-note/{{$note->id}}"><i class="fa fa-calendar ml-0"></i>{{$note->created_at->diffForHumans()}} </a>
		    		<a href="single-note/{{$note->id}}"><i class="fa fa-calendar ml-2"></i>Read More >> </a>
		    	</li>
		    </ul>
		    <p class="card-text">{{ substr($note->note_description, 0,  20) }} ...</p>

		</div>
	</div>

</div>

                </div>


                    @empty
  <center>
      <h4>
          ooops... No Notes Available!!
      </h4>

  </center>
@endforelse





				</div>


			</div>
            {{ $premium_users_note->links() }}
		</div>
	</div>
	<!-- Container End -->


</section>

<section class="call-to-action overly bg-2 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Notes, Study Guides, Research Papers across all universities in Ghana</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item" ><a style="background-color: #800000" class="btn btn-main" href="{{url('all-notes')}}">View More Notes</a></li>
						<!-- <li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>




<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center pb-5">
                    <h2 class="font-weight-bold">Best Price Guaranteed</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
                    <div class="package-content-heading border-bottom">
                        <i class="fa fa-paper-plane"></i>
                        <h2>Basic Package</h2>
                        <h4 class="py-3"> <span>00.00</span> Per Month</h4>
                    </div>
                    <ul>
                        <li class="my-4"> <i class="fa fa-check"></i> Access Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Preview Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Buy Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Can't Upload Notes</li>
                    </ul>
                    <a href="{{ route('membership',  ['package'=> 'Free'])}}" class="btn " style="background-color: #800000; color: white">Free</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-content bg-light border text-center my-2 my-lg-0 p-5">
                    <div class="package-content-heading border-bottom">
                            <i class="fa fa-plane"></i>
                        <h2>Standard Package</h2>
                        <h4 class="py-3"> <span>GHS 10.00</span> Per Year</h4>
                    </div>
                    <ul>
                      <li class="my-4"> <i class="fa fa-check"></i> Access Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Preview Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Buy Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Upload Contents</li>
                    </ul>
                    <a href="{{ route('membership', ['package'=> 'Standard'])}}" class="btn " style="background-color: #800000; color: white">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-sm-auto">
                <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
                    <div class="package-content-heading border-bottom">
                            <i class="fa fa-rocket"></i>
                        <h2>Premium Package</h2>
                        <h4 class="py-3"> <span>GHS 20.00</span> Per Year</h4>
                    </div>
                    <ul>
                        <li class="my-4"> <i class="fa fa-check"></i> Access Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Preview Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Buy Notes</li>
                        <li class="my-4"> <i class="fa fa-check"></i>Upload Notes + Notes Promoted on Homepage</li>
                    </ul>
                    <a href="{{ route('membership', ['package'=> 'Premium'])}}" class="btn " style="background-color: #800000; color: white">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

</section>

@include('partials.call-to-action')

@include('partials.footer')
