@include('partials.header')


<section class="page-search" style="background-color: #800000">
	<div class="container">
        @include('flash-message')
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form method="POST" action="{{url('search')}}">
                        @csrf
						<div class="form-row">
							<!-- <div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Category">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div> -->
												<div class="form-group col-md-4">
                                                    <input type="text" name="search-term" value="{{ request()->input('search-term') }}" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">

                                                    @if ($errors->has('search-term'))
                                                        <span class="error" style="color: yellow;">{{ $errors->first('search-term') }}</span>
                                                    @endif
												</div>


												<div class="form-group col-md-3">
													<select class="w-100 form-control mt-lg-1 mt-md-2">
														<option>School</option>
                                                        @forelse($universities as $university)
														<option value="1">{{$university->university}}</option>
                                                        @empty
														<option value="4">KNUST</option>
                                                        @endforelse
													</select>
												</div>

												<div class="form-group col-md-3">
													<select class="w-100 form-control mt-lg-1 mt-md-2">
														<option>Courses</option>
														<option value="1">Ashesi University</option>
														<option value="2">University of Ghana</option>
														<option value="4">KNUST</option>
													</select>
												</div>

							<div class="form-group col-md-2">

								<button type="submit" class="btn" style="background-color: white; color: black">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For '{{ request()->input('search-term') }}'</h2>
					<p>123 Results on 12 December, 2017</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">All Courses</h4>
	<ul class="category-list">
        @forelse($all_courses as $course)
		<li><a href="category.html">{{$course->course_name}} </a></li>

        @empty
		<li><a href="category.html">Calculus <span>233</span></a></li>
        @endforelse


	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Schools</h4>
	<ul class="category-list">
        @forelse($universities as $university)
		<li><a href="#category.html">{{$university->university}}</a></li>
        @empty
		<li><a href="#category.html">Central University <span>40</span></a></li>
        @endforelse
	</ul>
</div>







				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Filter</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
					<div class="row mt-30">

                        @forelse($all_notes as $note)
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single-note/{{$note->id}}">
				<img class="card-img-top img-fluid" src="/storage/uploads/{{ $note->note_thumbnail }}" alt="Card image cap">
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
		    <h4 class="card-title"><a href="single-note/{{$note->id}}"> {{$note->note_type}}</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
{{--		    		<a href="single/{{$note->id}}"><i class="fa fa-folder-open-o"></i>{{$note->note_type}}</a>--}}
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="single/{{$note->id}}"><i class="fa fa-calendar"></i> Read More >></a>
		    	</li>
		    </ul>
		    <p class="card-text">{{ substr(strip_tags($note->note_description), 0, 20) }} ... </p>

		</div>
	</div>
</div>



						</div>

                        @empty
                        <h4> No Notes available!!!</h4>
                        @endforelse











					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">


                        {{ $all_notes->links() }}
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')
