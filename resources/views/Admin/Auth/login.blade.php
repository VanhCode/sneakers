<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8"/>
    <title>Sneakers - Accounts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/theme/assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/theme/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/theme/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('assets/theme/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('assets/theme/assets/css/app.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{ asset('assets/theme/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="{{ asset('assets/theme/assets/images/logo-light.png') }}" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Chào mừng bạn đến với quản trị viên</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">CHÀO MỪNG TRỞ LẠI !</h5>
                                <p class="text-muted">Đăng nhập để tiếp tục đến Velzon.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ route('admin.login.submit') }}" id="formLoginAdmin">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email/Số điện thoại</label>
                                        <input type="text" class="form-control" id="emailOrPhone" placeholder="Email/Số điện thoại">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-pass-reset-basic.html" class="text-muted">Quên mật khẩu?</a>
                                        </div>
                                        <label class="form-label" for="password-input">Mật khẩu</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input"
                                                   placeholder="Mật khẩu" id="password">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Ghi nhớ</label>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Đăng nhập</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="fs-13 mb-4 title">Đăng nhập với</h5>
                                        </div>
                                        <div>
                                            <button type="button"
                                                    class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                    class="ri-facebook-fill fs-16"></i></button>
                                            <button type="button"
                                                    class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                    class="ri-google-fill fs-16"></i></button>
                                            <button type="button"
                                                    class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                    class="ri-github-fill fs-16"></i></button>
                                            <button type="button"
                                                    class="btn btn-info btn-icon waves-effect waves-light"><i
                                                    class="ri-twitter-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            Vanh Sneaker <i class="mdi mdi-heart text-danger"></i> Thế Giới Giày
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btnLogin = document.querySelector('#btnLogin');

        document.querySelector('#formLoginAdmin').addEventListener('submit', function (e) {

            e.preventDefault();

            const emailOrPhone = document.querySelector('#emailOrPhone');
            const password = document.querySelector('#password');

            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('emailOrPhone', emailOrPhone.value);
            formData.append('password', password.value);

            $.ajax({
                url: "{{ route('admin.login.submit') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.loginStatus) {
                        if(response.role === 'admin') {
                            window.location.href = "{{ route('admin.dashboard') }}";
                        }
                    } else {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: `<p style="font-size: 21px;">Đã xảy ra lỗi</p>`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }

                    console.log(response)
                },
                error: function (xhr) {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: `<p style="font-size: 17px;">${xhr.responseJSON.message}</p>`,
                        showConfirmButton: false,
                        timer: 2500
                    });
                    console.log(xhr.responseJSON.loginStatus)
                    console.log(xhr.responseJSON.message)
                }
            });
        });
    });
</script>
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/theme/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/theme/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/theme/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/theme/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/theme/assets/js/plugins.js') }}"></script>

<!-- particles js -->
<script src="{{ asset('assets/theme/assets/libs/particles.js/particles.js') }}"></script>
<!-- particles app js -->
<script src="{{ asset('assets/theme/assets/js/pages/particles.app.js') }}"></script>
<!-- password-addon init -->
<script src="{{ asset('assets/theme/assets/js/pages/password-addon.init.js') }}"></script>
</body>

</html>
