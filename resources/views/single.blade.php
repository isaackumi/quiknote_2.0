@include('partials.header')




<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">

{{--                @forelse( $note as $note)--}}

{{--                <h5>   {{$user_with_notes_created}}</h5>--}}


                @forelse( $user_with_notes_created as $note )



				<div class="product-details">
					<h1 class="product-title">{{ $note->note_title ?? 'Title' }}</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> {{$note->username ?? 'Username'}} </li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> {{ $note->course_name ?? 'Course Name' }}</li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> University:<a href=""> {{$note->university ?? 'University'}} </a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Date: <a href="">{{ $note->created_at  ?? "Date Created"}}</a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						<div class="product-slider-item my-4" data-image=" /storage/uploads/{{ $note->note_thumbnail }} ">
							<img class="img-fluid w-100" src="/storage/uploads/{{ $note->note_thumbnail }} " alt="product-img">
						</div>
{{--						<div class="product-slider-item my-4" data-image="images/products/products-2.jpg">--}}
{{--							<img class="d-block img-fluid w-100" src="{{asset('/assets/images/products/products-2.jpg')}} " alt="Second slide">--}}
{{--						</div>--}}
{{--						<div class="product-slider-item my-4" data-image="{{asset('/assets/images/products/products-3.jpg')}} ">--}}
{{--							<img class="d-block img-fluid w-100" src="{{asset('/assets/images/products/products-3.jpg')}} " alt="Third slide">--}}
{{--						</div>--}}
{{--						<div class="product-slider-item my-4" data-image="{{asset('/assets/images/products/products-1.jpg')}} ">--}}
{{--							<img class="d-block img-fluid w-100" src="{{asset('/assets/images/products/products-1.jpg')}} " alt="Third slide">--}}
{{--						</div>--}}
{{--						<div class="product-slider-item my-4" data-image="{{asset('/assets/images/products/products-2.jpg')}} ">--}}
{{--							<img class="d-block img-fluid w-100" src="{{asset('/assets/images/products/products-2.jpg')}} " alt="Third slide">--}}
{{--						</div>--}}
					</div>
					<!-- product slider -->

					<!-- product slider -->
					<section class="section1">
					<!-- <div class="container "> -->
						<!-- <div class="row"> -->
						<button class="like">

							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							<p> </p>
							<p id="like">10</p>
						</button>

						<button class="dislike">
							<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
							<p> </p>
							<p id="dislike">100</p>
						</button>


					<!-- </div> -->
					</section>

					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">Note Details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Reviews</a>
							</li>
						</ul>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Note Description</h3>
								<p> {{$note->note_description}}</p>

								<iframe width="100%" height="400" src="https://www.youtube.com/embed/LUH7njvhydE?rel=0&amp;controls=0&amp;showinfo=0"
								 frameborder="0" allowfullscreen></iframe>
								<p></p>
								<p>...</p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Notes information</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Seller Price</td>
											<td>GHC {{$note->note_price}}</td>
										</tr>
										<tr>
											<td>Added</td>
											<td>{{ date('d M, Y', strtotime($note->created_at)) }}</td>
										</tr>
										<tr>
											<td>University</td>
											<td>{{$note->university}}</td>
										</tr>
										<tr>
											<td>Course</td>
											<td>{{$note->course_name}}</td>
										</tr>

									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Note Review</h3>
								<div class="product-review">
                                    @forelse($comment as $comment)
									<div class="media">
										<!-- Avater -->
										<img class="rounded-circle" src="{{ asset('/uploads/avatars') }}/{{ $comment->photo_url ?? 'defualt.jpg' }} " alt="avater">
										<div class="media-body">
											<!-- Ratings -->

											<div class="name">
												<h5>{{$comment->comment_name}}</h5>
											</div>
											<div class="date">
												<p>Mar 20, 2018  {{ date('d M, Y', strtotime($comment->created_at)) }}</p>
											</div>
											<div class="review-comment">
												<p>
                                                    {{$comment->comment_message}}
												</p>
											</div>
										</div>


									</div>
                                    @empty
                                        <h4>
                                            No comments available.. Add your comments
                                        </h4>

                                    @endforelse
									<div class="review-submission">
										<h3 class="tab-title">Submit your review</h3>
										<!-- Rate -->
										<div class="rate">
{{--											<div class="starrr"></div>--}}
										</div>
										<div class="review-submit">
											<form action="/add-comment" class="row" method="post">
                                                @csrf
												<div class="col-lg-6">
													<input type="text" name="comment_name" id="name" class="form-control" placeholder="Name">
                                                    @if ($errors->has('comment_name'))
                                                        <span class="error">{{ $errors->first('comment_name') }}</span>
                                                    @endif
                                                    <input type="hidden" name="note_id" value="{{$note->id}}" id="name" class="form-control" placeholder="Name">

												</div>
												<div class="col-lg-6">
													<input type="University" name="comment_university" id="university" class="form-control" placeholder="University">
                                                    @if ($errors->has('comment_university'))
                                                        <span class="error">{{ $errors->first('comment_university') }}</span>
                                                    @endif
												</div>
												<div class="col-12">
													<textarea name="comment_message" id="review" rows="10" class="form-control" placeholder="Message"></textarea>
                                                    @if ($errors->has('comment_message'))
                                                        <span class="error">{{ $errors->first('comment_message') }}</span>
                                                    @endif
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-main">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center" style="background-color: #800000">
						<h4>Price</h4>
						<p>GHC {{$note->note_price}}</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="{{asset('uploads/avatars')}}/{{$note->photo_url ?? ''}} " alt="">
						<h4>{{$note->username}}</h4>
						<p class="member-time"> Member since : {{ date('d M, Y', strtotime($note->created_at)) }}</p>
						<p class="member-time">University : {{$note->university}}</p>

					</div>
					<!-- Map Widget -->

                    <div>
{{--                        {{$comment->links()}}--}}
                    </div>

					<!-- Rate Widget -->

					<!-- Safety tips widget -->
					<div class="widget disclaimer text-center">
						<h5 class="widget-header">Almost there</h5>
						<ul>


                            @if($note->note_price == 0)

                                <li class="list-inline-item"><a href="{{url('confirm-order')}} " class="btn btn-contact d-inline-block   px-lg-5 my-1 px-md-3" style="background-color: #800000; color: white">Download for free</a></li>
                            @else
                                <li class="list-inline-item"><a href="add-to-cart/{{$note->id}}" class="btn btn-contact d-inline-block   px-lg-5 my-1 px-md-3" style="background-color: #800000; color: white">Add to Cart</a></li>
                            <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                {{ csrf_field() }}

                                <input type="hidden" name="amount" value="{{$note->note_price}}" />
                                <input type="hidden" name="payment_method" value="both" />
                                <input type="hidden" name="description" value="Purchase of note" />
                                <input type="hidden" name="country" value="GH" />
                                <input type="hidden" name="currency" value="GHS" />
                                <input type="hidden" name="email" value="{{ Auth::user()->email ?? '' }}" />
                                <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}" />
                                <input type="hidden" name="phonenumber" value="0549754268" />
{{--                                <li class="list-inline-item"><a href="{{url('confirm-order')}} " class="btn btn-contact d-inline-block  px-lg-5 my-1 px-md-3" style="background-color: #800000; color: white"> Buy  </a></li>--}}
{{--                                <li class="list-inline-item"><a href="{{url('confirm-order')}} " class="btn btn-contact d-inline-block  px-lg-5 my-1 px-md-3" style="background-color: #800000; color: white"> Buy  </a></li>--}}
                                <li class="list-inline-item"><input type="submit" class="btn btn-contact d-inline-block  px-lg-5 my-1 px-md-3" style="background-color: #800000; color: white" value="Buy"></li>
                            </form>




                            @endif


						</ul>
					</div>
					<!-- Coupon Widget -->

                    @empty

<h4>
    Oppppps!!!
</h4>

                    @endforelse


				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>



<!--============================
=            Footer            =
=============================-->

@include('partials.footer')
