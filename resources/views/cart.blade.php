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
      <div class="col-md-15 offset-md-3 col-lg-13 offset-lg-2">
        <div class="sidebar">
          <!-- User Widget -->



        </div>
      </div>
      <div class="col-md-15 offset-md-3 col-lg-9 offset-lg-2">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">My Cart</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Thumbnail</th>
                <th>Note Info </th>
                <th class="text-center">Note Type</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>

            @forelse($cart as $note)
              <tr>

                <td class="product-thumb">
                  <img width="80px" class="rounded-circle" height="auto" src="/storage/uploads/{{ $note->note_thumbnail }} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">{{ $note->note_title }}</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>{{ date('d M, Y', strtotime($note->created_at)) }}</time> </span>
                  <span class="status active"><strong>Status</strong>Pending</span>
                  <span class="location"><strong>University</strong>{{$note->university}}</span>
                </td>
                <td class="product-category"><span class="categories">{{$note->note_type}}</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="#category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Buy" href="">
                          <i class="fa fa-money"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>

              </tr>



            </tbody>

              @empty
                  <h4 style="color: palevioletred">
                      Your cart is empty!!
                  </h4>

              @endforelse
          </table>

        </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						{{$carts ?? ''->links()}}
					</nav>
				</div>
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->
@include('partials.footer')
