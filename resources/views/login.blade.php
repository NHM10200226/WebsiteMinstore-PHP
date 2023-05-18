<!DOCTYPE html>
<html lang="en">

<head>
    <title>Min Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('minstore/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('minstore/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('minstore/styles/main_styles.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('minstore/styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="super_container">
        @include('components_page.header');

 <!-- form login -->
 <div class="container">
    <div class="container_form">
        <div class="form-wrapper right-panel-active">
            <div class="overlay-form">
                <button onclick="changeOverlay()" class="button-submit-overlay mt-1 mb-3 ">Sign Up</button>
            </div>
            <form class="form_sign-in" action="" method="POST">
                @csrf
                <h4>Sign In</h4>
                <input class="input-email mb-3" type="email" name="email" placeholder="Email">
                <input class="input-password mb-3" type="password" name="password" placeholder="Password">
                <label> <input type="checkbox" value="RememberMe" id="rememberMe" name="rememberme" > Remember Me</label>
                <a class="mb-3" href="">Forgot your password?</a>
                <div class="footer_social d-flex flex-row align-items-center justify-content-center small_block_icon">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <input type="submit" class="btn btn-outline-info" name="submit" value="Sign In">
                
            </form>
            {{--  --}}
            <form class="form_sign-up" action="" method="POST">
                @csrf
                <h4>Sign In</h4>
                <input class="input-user mb-3" type="text" name="email" placeholder="Email" required="required">
                <input class="input-email mb-3" type="password" name="password" placeholder="Password" required="required">
                <label> <input type="checkbox" value="RememberMe" id="rememberMe" name="rememberme" > Remember Me</label>
                <a class="mb-3" href="">Forgot your password?</a>
                <div class="footer_social d-flex flex-row align-items-center justify-content-center small_block_icon">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <input type="submit" class="btn btn-outline-info" name="submit" value="Sign Up">
            </form>
        </div>
    </div>
</div>
<!-- End form login -->
    </div>

    <script src="{{ asset('minstore/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('minstore/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('minstore/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('minstore/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('minstore/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('minstore/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('minstore/js/custom.js') }}"></script>
    <script src="{{ asset('minstore/js/index.js') }}"></script>

</body>

</html>
