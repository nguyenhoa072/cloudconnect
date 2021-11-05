@extends('layouts.app')

@section('content')

<div class="contact">
    <div class="map">
        <div class="address">
            <ul class="list-unstyled m-0" id="listMapID" data-map-lat="10.754018" data-map-lng="106.740176">
                <li data-map-lat="10.754018" data-map-lng="106.740176">
                    <p class="mb-2"><strong>{!!__('messages.fpt-telecom-international')!!}</strong></p>
                    <p class="m-0"><b>{!!__('messages.address')!!}:</b> {!!__('messages.address_hanoi')!!}
                        <br><b>FPT Telecom International hotline:</b> <a href="tel:19006973">1900 6973</a>
                    </p>
                    <p class="m-0"><b>Cloud Connect hotline:</b> <a href="tel:0907451357">090.745.1357</a></p>
                </li>
                <li data-map-lat="21.028435371671726" data-map-lng="105.78058935714716">
                    <p class="mb-2"><strong>{!!__('messages.fpt-telecom-international')!!}</strong></p>
                    <p class="m-0"><b>{!!__('messages.address')!!}:</b> {!!__('messages.address_hcm')!!}
                        <br><b>FPT Telecom International hotline:</b> <a href="tel:1900 6973">1900 6973</a>
                    </p>
                    <p class="m-0"><b>Cloud Connect hotline:</b> <a href="tel:0907451357">090.745.1357</a></p>
                </li>
            </ul>
        </div>
        <div id="contact_map"></div>
    </div>
    <div class="container my-xl-5 my-4">
        <div class="box-1">
            <div>
                <h4 class="color text-center font-weight-bold m-0">
                    {!!__('contact.text-1')!!}
                </h4>
            </div>
        </div>
        <div class="row my-xl-5 my-4">
            <div class="col text-end pe-xl-5">
                <div class="h4 text-uppercase color">{!!__('messages.ho-chi-minh')!!}</div>
            </div>
            <div class="h5 m-0 col-auto color">|</div>
            <div class="col text-start ps-xl-5">
                <div class="h4 text-uppercase color">{!!__('messages.hanoi')!!}</div>
            </div>
        </div>
        <div class="text-center my-xl-5 my-4">
            <a href="tel:0907451357" class="btn btn-info btn-lg rounded-pill font-weight-bold px-4">090.745.1357</a>
        </div>
        <div class="text-center mb-xl-5 mb-4">
            <div class="h5 font-weight-bold color">{!!__('messages.let-us-contact-you')!!}</div>
            <div class="h5 font-weight-normal">
                {!!__('contact.text-2')!!}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="form_contact" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Name <span class="color">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="emal" class="col-sm-3 col-form-label">Email <span class="color">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 col-form-label">
                            {!!__('messages.phone-number')!!}<span class="color">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text">+84</span>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ old('phone_number') }}" placeholder="" name="phone_number">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="question" class="col-sm-3 col-form-label">
                            {!!__('messages.your-question')!!}<span class="color">*</span></label>
                        <div class="col-sm-9">
                            <textarea class="form-control form-control-lg @error('your_question') is-invalid @enderror"
                                rows="4" name="your_question">{{ old('your_question') }}</textarea>
                            @error('your_question')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="mb-3 row">
                        <div class="col-sm-9 offset-sm-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    {{__('messages.i-accept-terms-and-privacy')}}
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    <div class="mb-3 row">
                        <div class="col-sm-9 offset-sm-3">
                            <div class="g-recaptcha" data-sitekey="6LeyAPkUAAAAAGKKMXcXfgrVRUmG9fJkEUSov92s" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                            <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text"
                                style="opacity: 0; position: absolute; top: 0; left: 0; height: 0px; width: 0px;" />
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" id="submit_contact" class="btn btn-info btn-lg px-5 text-white" disabled>{{__('messages.submit')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="successContactModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-dark btn-sm ms-auto" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="h3 color">{{__('messages.thank-you')}}</div>
                <div class="h4 font-weight-normal mx-xl-5 px-xl-5">
                    {!!__('messages.your-message-has-been-successfully-sent')!!}</div>
                <div class="h4 font-weight-normal my-5">{!!__('messages.cant-wait-call-us-now')!!}</div>
                <div class="h1 color font-weight-bold">090.745.1357</div>
                <div class="h4 font-weight-normal mx-xl-5 my-5 px-xl-5">
                    {!!__('messages.our-sales-will')!!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="failContactModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="h3 m-5"><i class="fa fa-exclamation-circle fa-fw fa-3x text-danger"></i><br><br>
                    {!!__('messages.please-try-again')!!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info px-4" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<style>
    .loading {
        background: rgba(0, 0, 0, .5);
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 9999;
    }

    .loading div {
        transform: translate(-50%, -50%);
        position: absolute;
        top: 50%;
        left: 50%;
    }
</style>

@endsection

@section('js')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function recaptchaCallback() {
        var response = grecaptcha.getResponse(),
            $button = jQuery("#submit_contact");
        jQuery("#hidden-grecaptcha").val(response);

        if (jQuery("#form_contact").valid()) {
            $button.attr("disabled", false);
        }
        else {
            $button.attr("disabled", "disabled");
        }
    }

    function recaptchaExpired() {
        var $button = jQuery("#submit_contact");
        jQuery("#hidden-grecaptcha").val("");

        if (jQuery("#form_contact").valid()) {
            $button.attr("disabled", false);
        }
        else {
            $button.attr("disabled", "disabled");
        }
    }

    $(document).ready(function() {        

        $('#form_contact').validate({
            errorClass: "is-invalid",
            errorElement: "div",
            rules: {
                name: { required: true },
                email: { required: true, email: true },
                phone_number: { required: true, number: true, minlength: 9, maxlength: 10 },
                your_question: { required: true, minlength: 10 },
                "g-recaptcha-response": "required",
                "hidden-grecaptcha": {
                    required: true,
                    minlength: "255"
                }
            },
             messages: {
                'name': '{{__('messages.name_required')}}',
                'email':{
                    required: '{{__('messages.email_required')}}',
                    email: '{{__('messages.email_email')}}',
                },
                'phone_number': {
                    required: '{{__('messages.phone_required')}}',
                    number: '{{__('messages.phone_number')}}',
                    minlength: '{{__('messages.phone_minlength')}}',
                    maxlength: '{{__('messages.phone_maxlength')}}',
                },
                your_question: '{{__('messages.question_required')}}',
                "g-recaptcha-response": '{{__('messages.recaptcha_required')}}',
                "hidden-grecaptcha": '{{__('messages.recaptcha_required')}}',
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
                error.addClass('invalid-feedback');          
            },
            submitHandler: function(form) {
            // do other things for a valid form
                var data = new FormData(form);
            
                $.ajax({
                    url: "{{ route('send.mail', app()->getLocale()) }}",
                    type: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,            
                    beforeSend: function () {
                        $('body').append('<div class="loading"><div><i class="fa fa-spinner fa-pulse fa-5x fa-fw text-white"></i></div></div>');
                    },         
                    error: function (xhr, status, error) {
                        $('#failContactModal').modal('show');
                    },
                    success: function (data) {      
                        if(data.rs == 1)
                        {
                            $('#successContactModal').modal('show');
                        }
                        else 
                        {
                            $('#failContactModal').modal('show');
                        }
                    },           
                    complete: function () {
                       $('.loading').remove();
                    },
                });

                return false;
            }
        });  

        $('#successContactModal').on('hidden.bs.modal', function (e) {
            location.href = 'http://cloudconnect.vn';
        });

    });
    
</script>
@endsection