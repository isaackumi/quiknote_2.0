@include('partials.header')

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Membership Form</h3>
                    <form action="{{url('post-membership')}}" method="post">

                      @csrf
                        <fieldset class="p-4">
{{--                          <h5>Username</h5>--}}
                          @if(Auth::user())
{{--                          <input type="text" name="username"  value = "{{ Auth::user()->username}}" placeholder="Username" class="border p-3 w-100 my-2">--}}


                          <input type="hidden" name="user_id"  value = "{{ Auth::user()->id }}"  class="border p-3 w-100 my-2" >
                          <input type="hidden" name="package_name"  value = "{{ app('request')->input('package') }}"  class="border p-3 w-100 my-2" >
                            @endif


                            <h5>Mobile Money Number*</h5>
                            <input type="text" name="momo" placeholder="Your Mobile Money to receive deposits" class="border p-3 w-100 my-2" value="{{old('momo')}}">

                            <h5>Network*</h5>
                            <input type="text" name="network" placeholder="eg: MTN" class="border p-3 w-100 my-2" value="{{old('network')}}">

                            <div class="loggedin-forgot">
{{--                                    <input type="checkbox" id="keep-me-logged-in">--}}
{{--                                    <label for="keep-me-logged-in" class="pt-3 pb-2"><a href="{{url('terms-and-condition')}}">Agree to all terms and conditions</a></label>--}}
                            </div>
                            <button type="submit" class="d-block py-3 px-5  text-white border-0 rounded font-weight-bold mt-3" style="background-color: #800000">Make Payment</button>
{{--                            <a class="mt-3 d-inline-block" href="#register.html">Create Account</a>--}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->
@include('partials.footer')
