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

</head>

<body class="custom-bg-class">
    <!-- <div class="container-fluid ">
        <div class="row justify-content-md-center w-50 h-50 mx-auto my-5 ">
            <div class="col col-lg-6 p-0">
                    <img class="card-img-top rounded" src="{{asset('assets/img/backgrounds/bg-2.jpg')}}" alt="Card image cap">
            </div>
            <div class="col col-lg-6 p-0">
                <div class="card">
                    <img class="card-img-top rounded" src="{{asset('assets/img/backgrounds/bg-2.jpg')}}" alt="Card image cap">
                </div>
            </div>
        </div> -->
    <!-- <div class="card mx-auto" style="width: 28rem;">
            <img class="card-img-top" src="{{asset('assets/img/backgrounds/bg-2.jpg')}}" alt="Card image cap">
        </div> -->
    <!-- </div> -->
    <div class="my-flex-container">
        <div class="my-flex-child-container">
            <div class="my-flex-child-1">
                <img src="{{asset('assets/img/backgrounds/bg-2.jpg')}}" style="width: 500px;border-radius: 25px 0px 0px 25px;" alt="BXSS picture">
            </div>
            <div class="my-flex-child-2">
                <h1>Create Account</h1>
                <form>
                    <div class="form-group ">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <br />
                    <div class="form-group ">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <button type="submit" class="btn btn-danger" style="width: 100%;">Submit</button>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <hr style="color:#000; margin-top:50px;" />
                    <div style="display:flex; justify-content:center;">
                        <p style="width: 100px;text-align: center;background-color: #fff;margin-top: -25px;">or</p>
                    </div>
                    <br />
                    <br />
                    <button  class="btn btn-danger" style="width: 100%; background-color:#ea4335;"><a href="{{ route('login.google') }}" class="btn-text-google-plus"> <i class="tf-icons mdi mdi-24px mdi-google" style="color:#000; font-weight:bolder;"></i> </a>&nbsp; Sign in with Google</button>
                    <br />
                    <br />
                    <button class="btn btn-primary" style="width: 100%; background-color:#1877f2;"><a href="{{ route('login.facebook') }}" class="btn-text-google-plus"> <i class="tf-icons mdi mdi-24px mdi-facebook" style="color:#000; font-weight:bolder;"></i> </a>&nbsp; Sign in with Facebook</button>
                    <br />
                    <br />
                    <button class="btn btn-primary" style="width: 100%; background-color:#0a66c2;"><a href="{{ route('login.facebook') }}" class="btn-text-google-plus"> <i class="tf-icons mdi mdi-24px mdi-linkedin" style="color:#000; font-weight:bolder;"></i> </a>&nbsp; Sign in with LinkedIn</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
