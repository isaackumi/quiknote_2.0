@include('partials.header')


<section class="login py-5 border-top-1">

    <div class="container">
        @include('flash-message')
        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form action="{{url('post-login')}}" method="POST">
                        {{ csrf_field() }}
                        <fieldset class="p-4">
                            <input type="text" placeholder="Email" class="border p-3 w-100 my-2 form-control" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                              <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                            <input type="password" placeholder="Password" class="border p-3 w-100 my-2 form-control" name="password" value="{{ old('password')  }}">
                            @if ($errors->has('password'))
                              <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5  text-white border-0 rounded font-weight-bold mt-3" style="background-color: #800000">Log in</button>
                            <a class="mt-3 d-block" href="#">Forget Password?</a>
                            <a class="mt-3 d-inline-block" href="{{route('register')}}">Register Now</a>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
