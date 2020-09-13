
@include('partials.header')


<section class="">

        <div class="container">
            <div class="row justify-content-center">
              @include('flash-message')
                <div class="col-lg-5 col-md-8 align-item-center">

                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>

                        <form action="{{url('post-registration')}}" method="post">
                           {{ csrf_field() }}
                            <fieldset class="p-4">
                                <input type="text"  id="username" placeholder="Username*" class="border p-3 w-100 my-2" name="username" required>
                                @if ($errors->has('username'))
                                  <span class="error">{{ $errors->first('username') }}</span>
                                @endif
                                <input type="email" id="email" placeholder="Email*" class="border p-3 w-100 my-2" name="email" required>
                                @if ($errors->has('email'))
                                  <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" id="major" placeholder="Major*" class="border p-3 w-100 my-2" name="major" required>
                                @if ($errors->has('major'))
                                  <span class="error">{{ $errors->first('major') }}</span>
                                @endif
                                <input type="text" id="university" placeholder="University*" class="border p-3 w-100 my-2" name="university" required>
                                @if ($errors->has('university'))
                                  <span class="error">{{ $errors->first('university') }}</span>
                                @endif
                                <input type="password" id="password" placeholder="Password*" class="border p-3 w-100 my-2" name="password" required>
                                @if ($errors->has('password'))
                                  <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                                <input type="password" id="password comfirm" placeholder="Confirm Password*" class="border p-3 w-100 my-2" name="comfirm-password" required>
                                @if ($errors->has('password-comfirm'))
                                  <span class="error">{{ $errors->first('password-comfirm') }}</span>
                                @endif
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4  text-white border-0 rounded font-weight-bold" style="background-color: #800000">Register Now</button>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
