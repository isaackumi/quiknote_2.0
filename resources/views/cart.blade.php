@include('partials.header')
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
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
                <th>Image</th>
                <th>Product Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td class="product-thumb">
                  <img width="80px" height="auto" src="{{asset('assets/images/products/products-1.jpg')}} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Macbook Pro 15inch</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                </td>
                <td class="product-category"><span class="categories">Laptops</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
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

                <td class="product-thumb">
                  <img width="80px" height="auto" src="{{asset('assets/images/products/products-2.jpg')}} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Study Table Combo</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>USA</span>
                </td>
                <td class="product-category"><span class="categories">Laptops</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="View" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Buy" href="single.html">
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
                <td class="product-thumb">
                  <img width="80px" height="auto" src="{{asset('assets/images/products/products-3.jpg')}} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Macbook Pro 15inch</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                </td>
                <td class="product-category"><span class="categories">Laptops</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="View" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Buy" href="single.html">
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

                <td class="product-thumb">
                  <img width="80px" height="auto" src="{{asset('assets/images/products/products-4.jpg')}} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Macbook Pro 15inch</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                </td>
                <td class="product-category"><span class="categories">Laptops</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="View" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Buy" href="single.html">
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

                <td class="product-thumb">
                  <img width="80px" height="auto" src="{{asset('assets/images/products/products-1.jpg')}} " alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Macbook Pro 15inch</h3>
                  <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                  <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                  <span class="status active"><strong>Status</strong>Active</span>
                  <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                </td>
                <td class="product-category"><span class="categories">Laptops</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a href="category.html" data-toggle="tooltip" data-placement="top" title="View" class="view">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Buy" href="single.html">
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
            </tbody>
          </table>

        </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active" ><a class="page-link" href="#" style="background-color: #800000">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
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
