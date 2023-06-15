@include('navigation')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="form px-4 pt-5">

                        <input type="text" name="" class="form-control" placeholder="Email or Phone">

                        <input type="text" name="" class="form-control" placeholder="Password">
                        <button class="btn btn-dark btn-block">Login</button>

                    </div>



                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                    <div class="form px-4">
                        <form action="{route('login')}}" method="GET">
                            @crsf
                            <input type="text" name="username" class="form-control" placeholder="Username">

                            <input type="text" name="password" class="form-control" placeholder="Password">

                            <button class="btn btn-dark btn-block" type='submit'>Login</button>
                    </div>
                    </form>
                </div>

            </div>




        </div>


    </div>
    @include('footer')