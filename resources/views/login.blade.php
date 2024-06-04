<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
  
     <!-- Custom fonts for this template-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

     <link href="{{ asset('import/css/sb-admin-2.min.css') }}" rel="stylesheet">
 <script src="{{ asset('import/js/vendor/fontawesome-free/js/all.min.js') }}"></script>

    <style>
        body {
            background-color: #7093fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
        }

        .text-center {
            text-align: center;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 240px;
        }
        .choise{
            text-align: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="logo-container">
                                <img src="{{ asset('import/img/logo_bc_skills.png') }}" alt="Logo">

                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue !</h1>
                            </div>
                            <form class="user mx-auto" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer votre Email..." value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger"> {{$message}}</span> 
                                    @enderror
                                </div>
                                <div class="form-group-choise" >
                                    <div class="choice">
                                        <label for="employee_radio">
                                            <input type="radio" id="employee_radio" name="user_type" value="employe">
                                            Employe
                                        </label>
                            
                                        <label for="intern_radio">
                                            <input type="radio" id="intern_radio" name="user_type" value="stagiaire">
                                            Stageaire
                                        </label>
                                        @error('user_type')
                                        <span class="text-danger"> {{$message}}</span> 
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                            
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Souvenez-vous de moi</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Se Connecter</button>
                                <hr>
                               
                            </form>
                            
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('signup') }}">registrer en tant que Employe</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('signup_stg') }}">registrer en tant que stageaire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('import/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('import/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('import/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('import/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('import/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('import/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('import/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
