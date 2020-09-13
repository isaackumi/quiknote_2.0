

@include('partials.header')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ asset('/uploads/avatars') }}/{{ $user->photo_url ?? 'defualt.jpg' }} " style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->username ?? '' }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if ($errors->has('avatar'))
                        <span class="error" style="color: indianred;">          {{ $errors->first('avatar') }}. Consider uploading an image with smaller size. </span>
                    @endif


                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>



