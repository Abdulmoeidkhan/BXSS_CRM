<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>BXSS | Event Management System</title>

    <meta name="description" content="" />

    @include("layouts.header")
    <!-- Vendor -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/activateAccount.css')}}" />

</head>

<body class="custom-bg-class">
    <div class="my-flex-container">
        <div class="single-container-flex">
            <div class="single-flex-container-child">
                <br />
                <span class="icon-container">
                    <i class="tf-icons mdi mdi-48px mdi-email-outline" style="color:black"></i>
                </span>
                <br />
                <h3>Welcome! Let’s Activate Your Account.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, est fuga voluptatibus, mollitia iste sed laudantium tempore, atque sequi provident nisi voluptate. Quae reiciendis cum minus laborum labore expedita rerum?</p>
                <br />
                <h3>Activation Code (7 Digits).</h3>
                <ul class="otp-list wrap">
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                    <li class="flex-item"><input maxlength="1" /></li>
                </ul>
                <div class="activation-list-btn">
                    <button type="submit" class="btn btn-danger" style="width: 35%; height:50px;">Continue</button>
                    <button type="submit" class="btn btn-primary" style="width: 35%; height:50px;">Resend Code</button>
                </div>
                <br/>
                <p>Already have an account? <a href="{{route('signIn')}}" style="color:blue; font-size:24px; font-weight:bolder;">Login</a></p>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</body>

</html>
