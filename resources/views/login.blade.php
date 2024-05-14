<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFFFF;
            color: #1d1d1d;
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
            margin-top: 40px;
        }

        .container {
            min-height: 100vh;
        }

        .ri {
            background-color: #F8F8F8;
            box-shadow: 0px 0px 4px #ccc;
            border-radius: 15px;
        }

        .left-box {
            border-radius: 15px;
        }

        .box-area {
            width: 890px;
        }

        .btn {
            width: 400px;
        }

        .right-box {
            padding: 40px 30px 40px 40px;
        }

        ::placeholder {
            font-size: 16px;
        }

        @media only screen and (max-width: 768px) {
            .img {
                overflow: hidden;
            }

            .box-area {
                margin: 0 10px;
                height: 575px;
            }

            .left-box {
                height: 190px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;

            }
        }
    </style>
</head>

<body>

    <!---------- Main Container  ------------->
    <div class="container d-flex justify-content-center align-items-center ">
        <!----------  login Container  ------------>
        <div class="row border rounded-5 p-3 box-area ri">
            <!-------------- left box  --------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style=" background-color: #f5c223;    ;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('./assets/image/ra.png') }}" alt="" class="img-fluid"
                        style="width: 300px;">
                </div>
                <p class="text-white fs-2" style="font-weight: 700; letter-spacing: 2px;">Be Verified</p>
                <small class="text-wrap text-center" style="width: 17rem;">Login or create an account at any
                    time</small>
            </div>
            <!-------------- right box ---------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center mb-1">
                    <div class="header-text mb-3">
                        <h3>Hello Again</h3>
                        <p>Enter your credential to login</p>
                    </div>
                    <form action="{{route('auth')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" pattern="09[0-9]{8}" title="09********" name="phone"
                                class="form-control form-control-lg bg-light" placeholder="phone number">

                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg bg-light "
                                placeholder="Password">
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-lg  w-100 fs-6"
                                style="    background-color: #ab1d19;
          color: #FFFFFF;"
                                type="submit">Login</button>
                            <span>You do not have an account?</span><span><a href="rigester.html">sign in</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
