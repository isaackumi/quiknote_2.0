

@include('admin.partials.admin-header-and-sidebar')

    @include('flash-message')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">All Users</p>
                    <h3 class="card-title">{{$users_count ?? "20"}}
{{--                        <small>users</small>--}}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
{{--                        <a href="#pablo">Get More Space...</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">All Notes</p>
                    <h3 class="card-title">{{$notes_count ?? ''}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Approved Notes</p>
                    <h3 class="card-title">{{$approved_notes_count ?? ''}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <p class="card-category">Premium Users</p>
                    <h3 class="card-title">{{$premium_users_count ?? ''}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-md-12">
            <div class="card">
                <div class="card-header card-header-danger">

                    <h4 class="card-title">All Notes</h4>
{{--                    <p class="card-category">New employees on 15th September, 2016</p>--}}
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-danger">

                        <th>Note Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>

                        </thead>
                        <tbody>
@forelse($all_notes as $note)
                        <tr>

                            <td>{{$note->note_type ?? 'type'}}</td>
                            <td>{{$note->note_price}}</td>

                            @if($note->note_status == 'Pending')
                            <td style="color: red;">{{$note->note_status}}</td>
                            @else
                                <td style="color: green;">{{$note->note_status}}</td>
                            @endif
                            <td>{{$note->created_at->diffForHumans() }}</td>
                            <td>
                                <a class="btn btn-warning" href="/approve-note/{{$note->id}}">change status  </a>
                                <a class="btn btn-danger" href="/delete-note/{{$note->id}}" style="color: white;"> Delete </a>
                                <a class="btn btn-primary" href="download/{{$note->note_pdf}}" style="color: white;">
                                <i class="material-icons" >cloud_download</i>

                                </a>
                            </td>
                        </tr>
                        @empty
                        <div> Note empty</div>
@endforelse


                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <div class=" col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h4 class="card-title">All Users</h4>
                    {{--                    <p class="card-category">New employees on 15th September, 2016</p>--}}
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">

                        <th>Name</th>
                        <th>University</th>
                        <th>Major</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @forelse($all_users as $user)
                        <tr>

                            <td>{{$user->username}} </td>
                            <td>{{$user->university}}</td>
                            <td>{{$user->major}}</td>
                            <td>
{{--                                <a class="btn btn-warning" href="single-note/{{$note->id}}">Approve Note  </a>--}}
                                <a class="btn btn-danger" href="/delete-user/{{$user->id}}" style="color: white;"> Delete </a>
                            </td>
                        </tr>
                        @empty
                        <div>
Empyty......
                        </div>
                        @endforelse

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@include('admin.partials.admin-footer')
