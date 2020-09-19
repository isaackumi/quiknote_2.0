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

				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form method="GET" action="{{url('search')}}">

											<div class="form-row">
												<div class="form-group col-md-4">
													<input type="text" name="searchterm" value="{{request()->input('searchterm')}}"class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">
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
                    @forelse($notes as $note)
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
                                ooops... No result matched your search query..
                            </h4>

                        </center>
                    @endforelse





                </div>


            </div>
            {{ $notes->links() }}
        </div>
    </div>
    <!-- Container End -->


</section>








</section>



@include('partials.footer')
