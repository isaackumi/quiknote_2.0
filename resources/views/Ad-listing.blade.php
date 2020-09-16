@include('partials.header');

<section class="ad-post bg-gray py-5">
    <div class="container">
        @include('flash-message')
        <form action="{{ url('note-upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Post Your Notes</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Notes:</h6>
                            <input type="text" name="note_title" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There" value="{{old('note_title')}}">
                            @if ($errors->has('note_title'))
                                <span class="error" style="color: indianred;">{{ $errors->first('note_title') }}</span>
                            @endif
                            <h6 class="font-weight-bold pt-4 pb-1">Note Type:</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                    <input type="radio" name="note_type" value="Notes" id="personal">
                                    <label for="personal" class="py-2">Notes</label>

                                </div>
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                    <input type="radio" name="note_type" value="Study Guide" id="business">
                                    <label for="business" class="py-2">Study Guide</label>
                                </div>
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                    <input type="radio" name="note_type" value="Research Paper" id="business">
                                    <label for="business" class="py-2">Research Paper</label>
                                </div>
                                @if ($errors->has('note_type'))
                                    <span class="error" style="color: indianred;">{{ $errors->first('note_type') }}</span>
                                @endif
                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">Thumbnail Image for Notes</h6>
                            <div class="choose-file text-center my-4 py-4 rounded">

                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                    <span class="d-block">or</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>

                                    <input type="file" class="form-control-file" id="file-upload" name="note_thumbnail" value="{{old('note_thumbnail')}}">
                                    @if ($errors->has('note_thumbnail'))
                                        <span class="error" style="color: indianred;">{{ $errors->first('note_thumbnail') }}</span>
                                    @endif
                                </label>
                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                            <textarea name="note_description" id="" maxlength="100" class="border p-3 w-100" rows="5" placeholder="Write details about your product" value="{{old('note_description')}}"></textarea>
                            @if ($errors->has('note_description'))
                                <span class="error" style="color: indianred;">{{ $errors->first('note_description') }}</span>
                            @endif
{{--                             hidden fields--}}

                            @if(Auth::user())

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @endif

                        </div>
                        <div class="col-lg-6">
{{--                            <h6 class="font-weight-bold pt-4 pb-1">Select University:</h6>--}}
{{--                            <select name="" id="inputGroupSelect" class="w-100">--}}
{{--                                <option value="1">University of Ghana</option>--}}
{{--                                <option value="2">KNUST</option>--}}
{{--                                <option value="3">UCC</option>--}}
{{--                                <option value="4">UEW</option>--}}
{{--                                <option value="5">Catholic University</option>--}}
{{--                                <option value="6">UDS</option>--}}
{{--                                <option value="7">RADFORD University</option>--}}
{{--                                <option value="8">Ashesi University</option>--}}

{{--                            </select>--}}


{{--                            <h6 class="font-weight-bold pt-4 pb-1">Major:</h6>--}}
{{--                            <input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Major go There">--}}

                             <h6 class="font-weight-bold pt-4 pb-1">Course:</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Course go There" name="course_name">
                            @if ($errors->has('course_name'))
                                <span class="error" style="color: indianred;">{{ $errors->first('course_name') }}</span>
                            @endif

                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1">Item Price ($ GH):</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <select name="note_price" id="inputGroupSelect" class="w-100">
                                          <option value="0">0</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>


                                      </select>
                                    </div>
                                    @if ($errors->has('note_price'))
                                        <span class="error">{{ $errors->first('note_price') }}</span>
                                    @endif

                                </div>
                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">UPLOAD YOUR PDF NOTES</h6>
                            <div class="choose-file text-center my-4 py-4 rounded">

                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                    <span class="d-block">or</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>

                                    <input type="file" class="form-control-file " id="note_pdf" name="note_pdf" value="{{old('note_pdf')}}">
                                </label>
                                @if ($errors->has('note_pdf'))
                                    <span class="error" style="color: indianred;">{{ $errors->first('note_pdf') }}</span>
                                @endif
                            </div>
                             <h6 class="font-weight-bold pt-4 pb-1">UPLOAD SAMPLE IMAGE PDF NOTES</h6>
                            <div class="choose-file text-center my-4 py-4 rounded">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                    <span class="d-block">or</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Select PDF files</span>

                                    <input type="file" class="form-control-file " id="note_pdf_image_sample" name="note_pdf_image_sample" value="{{old('note_pdf_image_sample')}}">
                                </label>
                                @if ($errors->has('note_pdf_image_sample'))
                                    <span class="error" style="color: indianred;">{{ $errors->first('note_pdf_image_sample') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
            </fieldset>
            <!-- Post Your ad end -->

            <!-- seller-information start -->
            <fieldset class="border p-4 my-5 seller-information bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Seller Profile</h3>
                    </div>

                    @auth
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Author's Name:</h6>
                        <input type="text" name="" value=" {{Auth::user()->username}}" placeholder="Contact name" class="border w-100 p-2" disabled>
                        <h6 class="font-weight-bold pt-4 pb-1">Email</h6>
                        <input type="text" name="" value="{{Auth::user()->email}}" placeholder="Your Email" class="border w-100 p-2" disabled>
                    </div>
                    @endauth
                    <div class="col-lg-6">
                         <h6 class="font-weight-bold pt-4 pb-1">About You:</h6>
                            <textarea name="note_creator_achievements" maxlength="30" id="" class="border p-3 w-100" rows="7" placeholder="About you/achievements" value="{{old('note_creator_achievements')}}"></textarea>
                        @if ($errors->has('note_creator_achievements'))
                            <span class="error" style="color: indianred;">{{ $errors->first('note_creator_achievements') }}</span>
                        @endif


                    </div>
                </div>
            </fieldset>
            <!-- seller-information end-->

            <!-- ad-feature start -->

            <!-- ad-feature start -->

            <!-- submit button -->
            <div class="checkbox d-inline-flex">
                <input type="checkbox" name="checkbox" id="terms-&-condition" class="mt-1">
                <label for="terms-&-condition" class="ml-2">By click you must agree with our
                    <span> <a class="text-success" href="{{url('terms-and-condition')}}">Terms & Condition and Posting Rules.</a></span>
                </label>
                @if ($errors->has('checkbox'))
                    <span class="error" style="color: indianred;">       {{ $errors->first('checkbox') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary d-block mt-2">Submit Note</button>
        </form>
    </div>
</section>
<!--============================
=            Footer            =
=============================-->
@include('partials.footer');
