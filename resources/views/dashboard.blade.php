@include('partials.header')

<!--==================================
=            User Profile            =
===================================-->

<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
  @include('flash-message')
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          @if (Route::has('login'))
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
              @if(Auth::user())
            <div class="profile-thumb">
              <img src="{{ asset('/uploads/avatars') }}/{{ Auth::user()->photo_url }}" alt="" class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center"> <strong>{{ Auth::user()->username }}</strong></h5>
            <h5 class="text-center"> Major: {{ Auth::user()->major }}</h5>
              <h5 class="text-center">{{ Auth::user()->university }}</h5>
            <p>Joined on :   {{ date('d M, Y', strtotime(Auth::user()->created_at)) }} </p>

          </div>
          @endif
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li class="active"><a href="recommended.html" style="background-color: #800000"><i class="fa fa-user"></i> My Notes</a></li>

              <li><a href="recommended.html"><i class="fa fa-file-archive-o"></i>Recommended Notes <span>12</span></a></li>
              <li><a href="pending.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a></li>
              <li><a href="sold.html"><i class="fa fa-money"></i>Sold Notes<span>23</span></a></li>
              <li><a href="login.html"><i class="fa fa-cog"></i> Logout</a></li>
              <li><a href="ad-listing.html"><i class="fa fa-book"></i>Add Notes</a></li>
            </ul>
          </div>

          <!-- delete-account modal -->
                        <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="{{asset('assets/images/account/Account1.png')}} " class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                        <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>

        @endif
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <div class="product-grid-list">
          <div class="row mt-30">

              @forelse($notes as $note)

              <div class="col-sm-12 col-lg-4 col-md-6">
              <!-- product card -->
<div class="product-item bg-light">
  <div class="card">
    <div class="thumb-content">
      <!-- <div class="price">$200</div> -->
      <a href="{{url('single-note')}}/{{$note->id}}">
        <img style="width:100%;" class="card-img-top img-fluid" src="{{ URL::to('/') }}/storage/uploads/{{ $note->note_thumbnail }} " alt="Card image cap">
      </a>
    </div>
    <div class="card-body">
        <h4 class="card-title"><a href="{{url('single-note')}}/{{$note->id}}">{{ $note->note_type ?? ' Note Type' }}</a></h4>
        <ul class="list-inline product-meta">
          <li class="list-inline-item">
{{--            <a href="{{url('single-note')}}/{{$note->id}}"><i class="fa fa-folder-open-o"></i>{{ $note->note_title ?? 'Note Title' }}</a>--}}
          </li>
          <li class="list-inline-item">
            <a href="#"><i class="fa fa-calendar"></i>{{ date('d M, Y', strtotime($note->created_at)) }} </a>
          </li>
        </ul>
        <p class="card-text">{{ substr($note->note_description, 0,  20) }} ...</p>
        <div class="product-ratings">
          <ul class="list-inline">
            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
          </ul>
        </div>
    </div>
  </div>
</div>
              </div>

              @empty
                  <p>
                      No notes at the moment!
                  </p>

              @endforelse





      </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
          <nav aria-label="Page navigation example">

              {{ $notes->onEachSide(1)->links() }}
{{--            <ul class="pagination">--}}
{{--              <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                  <span aria-hidden="true">&laquo;</span>--}}
{{--                  <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--              <li class="page-item active" ><a class="page-link" href="#" style="background-color: #800000">2</a></li>--}}
{{--              <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--              <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Next">--}}
{{--                  <span aria-hidden="true">&raquo;</span>--}}
{{--                  <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
          </nav>
        </div>
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>




@include('partials.footer')
