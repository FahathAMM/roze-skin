@extends('layout.app-site')
@section('title', 'Login')
@section('content')
    <x-site.component.page-title title="Create An Account" :breadcrumbs="[['label' => 'Home', 'url' => route('product.index')], ['label' => 'Register']]" />

    <section class="flat-spacing">
        <div class="container">
            <div class="login-wrap">
                <div class="left">
                    <div class="heading">
                        <h4>Register</h4>
                    </div>

                    <form action="{{ url('customer/register-store') }}" id="customer-register-form" method="POST"
                        class="form-login form-has-password" autocomplete="off">
                        @csrf
                        <div class="wrap" id="customer-register-form">
                            <fieldset class="">
                                <input class="" type="text" placeholder="name*" name="name" tabindex="2"
                                    value="" aria-required="true">
                                <div class="invalid-feedback d-block invalid-msg"> </div>
                            </fieldset>

                            <fieldset class="">
                                <input class="" type="number" placeholder="mobile*" name="mobile" tabindex="2"
                                    value="" aria-required="true">
                                <div class="invalid-feedback d-block invalid-msg"> </div>
                            </fieldset>

                            <fieldset class="position-relative password-item">
                                <input class="input-password" type="password" placeholder="Password*" name="password"
                                    tabindex="2" value="" aria-required="true">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                                <div class="invalid-feedback d-block invalid-msg"> </div>
                            </fieldset>
                            <fieldset class="position-relative password-item">
                                <input class="input-password" type="password" placeholder="Confirm Password*"
                                    name="password_confirmation" tabindex="2" value="" aria-required="true">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                            </fieldset>
                            <div class="d-flex align-items-center">
                                <div class="tf-cart-checkbox">
                                    <div class="tf-checkbox-wrapp">
                                        <input checked="" class="" type="checkbox" id="login-form_agree"
                                            name="agree_checkbox">
                                        <div>
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <label class="text-secondary-2" for="login-form_agree">
                                        I agree to the&nbsp;
                                    </label>
                                </div>
                                <a href="term-of-use.html" title="Terms of Service"> Terms of User</a>
                            </div>
                        </div>
                        <div class="button-submit">
                            <button class="tf-btn btn-fill" onclick="store()" id="sbtBtn" type="button">
                                <span class="text text-button">Register</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="right">
                    <h4 class="mb_8">Already have an account?</h4>
                    <p class="text-secondary">Welcome back. Sign in to access your personalized experience, saved
                        preferences, and more. We're thrilled to have you with us again!</p>
                    <a href="{{ route('customer.login') }}" class="tf-btn btn-fill">
                        <span class="text text-button">Login</span></a>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
        <script src="{{ asset('/assets/js/pages/profile-setting.init.js') }}"></script>

        <script src="https://www.jqueryscript.net/demo/validate-password-requirements/js/jquery.passwordRequirements.min.js">
        </script>

        <script>
            let formIdName = 'customer-register-form';

            function store() {
                // sLoading('sbtBtn')
                var form = document.getElementById(formIdName);
                var url = form.getAttribute('action');
                var method = form.getAttribute('method');
                var payload = new FormData(form);

                const options = {
                    contentType: 'multipart/form-data',
                    method: method || 'POST',
                };

                sendData(
                    url,
                    payload,
                    options,
                    (response) => {
                        console.log('Success:', response.status);
                        if (response.status) {
                            eLoading('sbtBtn')
                            alertNotifySite(response.message, 'success')

                            redirectTo('{{ route('customer.login') }}');

                        } else {
                            associateErrors1(response.errors, formIdName);
                            console.log(response.errors);

                            eLoading('sbtBtn')
                        }
                    },
                    (error) => {
                        console.error('Error:', error);
                    }
                );
            }

            function associateErrors1(errors, formId) {
                let $form = $(`#${formId}`);
                $form.find('fieldset .invalid-msg').text('');
                $form.find('fieldset .frm').removeClass('is-invalid');

                Object.keys(errors).forEach(function(fieldName) {

                    let $group = $form.find('[name="' + fieldName + '"]');
                    $group.addClass('is-invalid');
                    $group.closest('fieldset').find('.invalid-msg').text(errors[fieldName][0]);
                });
            }
        </script>
    @endpush
@endsection
