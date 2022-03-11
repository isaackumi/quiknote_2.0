
@include('partials.header')


<section class="login py-5 border-top-1">

        <div class="container">
            @include('flash-message')
            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-8 align-item-center">

                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>

                        <form action="{{url('post-registration')}}" method="post">
                           {{ csrf_field() }}
                            <fieldset class="p-4">
                                <input type="text"  id="username" placeholder="Username*" class="border p-3 w-100 my-2" name="username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('username') }}</span>
                                @endif
                                <input type="email" id="email" placeholder="Email*" class="border p-3 w-100 my-2" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" id="major" placeholder="Major*" class="border p-3 w-100 my-2" name="major" value="{{ old('major') }}" required>
                                @if ($errors->has('major'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('major') }}</span>
                                @endif
                                <input type="text" id="university" placeholder="University*" class="border p-3 w-100 my-2" name="university" value="{{ old('university') }}" required>
                                @if ($errors->has('university'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('university') }}</span>
                                @endif
                                <input type="password" id="password" placeholder="Password*" class="border p-3 w-100 my-2" name="password"  value="{{ old('password') }}"required>
                                @if ($errors->has('password'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('password') }}</span>
                                @endif
                                <input type="password" id="password comfirm" placeholder="Confirm Password*" class="border p-3 w-100 my-2" name="confirm-password" value="{{ old('confirm-password') }}" required>
                                @if ($errors->has('password-confirm'))
                                  <span style="color: firebrick;" class="error">{{ $errors->first('password-confirm') }}</span>
                                @endif
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1" name="tnc" value="value="{{ old('tnc') }}">
                                        <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="{{url('terms-and-condition')}}">Terms & Conditions</a></label>
                                </div>

                                <div class="loggedin-forgot d-inline-flex my-3">
                                    <label for="registering" class="px-2">Already a member? <a class="text-primary font-weight-bold" href="{{url('login')}}">Login</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4  text-white border-0 rounded font-weight-bold" style="background-color: #800000">Register Now</button>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
