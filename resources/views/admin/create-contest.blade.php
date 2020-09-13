
@include('admin.partials.admin-header-and-sidebar')

@include('flash-message')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Contest</h4>
{{--                  <p class="card-category">Complete your profile</p>--}}
                </div>
                <div class="card-body">
                  <form method="post" action="{{url('create-contest')}}"  enctype="multipart/form-data" >
    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contest Name</label>
                          <input type="text" class="form-control" name="contest_name">
                            @if ($errors->has('contest_name'))
                                <span class="error" style="color: darkred">{{ $errors->first('contest_name') }}</span>
                            @endif
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contest Category</label>
                          <input type="text" class="form-control " name="contest_category">
                            @if ($errors->has('contest_category'))
                                <span class="error" style="color: darkred">{{ $errors->first('contest_category') }}</span>
                            @endif
                          <input type="hidden" class="form-control " value="{{ Auth::user()->id }}" name="event_manager_id">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost per Vote</label>
                          <input type="text" class="form-control" name="cost_per_vote">
                            @if ($errors->has('cost_per_vote'))
                                <span class="error" style="color: darkred">{{ $errors->first('cost_per_vote') }}</span>
                            @endif
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Contest</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> About contest goes here</label>
                            <textarea class="form-control" rows="5" name="contest_about"></textarea>
                              @if ($errors->has('contest_about'))
                                  <span class="error" style="color: darkred">{{ $errors->first('contest_about') }}</span>
                              @endif
                          </div>
                        </div>
                          <div class="file-upload-wrapper">
                              <div class="btn btn-primary">
                                  <span>Upload Contest logo</span>
                                  <input type="file" name="contest_logo">
                                  @if ($errors->has('contest_logo'))
                                      <span class="error" style="color: darkred">{{ $errors->first('contest_logo') }}</span>
                                  @endif
                              </div>
{{--                              <div class="file-path-wrapper">--}}
{{--                                  <input class="file-path validate" type="text" placeholder="Upload your file">--}}
{{--                              </div>--}}
                          </div>
                      </div>

                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Contest</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

@include('admin.partials.admin-footer')


