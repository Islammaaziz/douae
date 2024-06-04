<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Register</title>
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
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 240px; /* Ajustez la taille du logo selon vos besoins */
        }
        .danger{
            color: red;
        }
        .tit{
            margin-bottom: 30px;
        }
        .upload-button {
        position: relative;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #007bff;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .upload-button:hover {
        background-color: #0056b3;
    }

    .upload-button i {
        font-size: 24px;
    }

    .upload-success {
        position: absolute;
        top: 5px;
        right: 5px;
        width: 20px;
        height: 20px;
        background-color: green;
        border-radius: 50%;
        display: none; /* Hidden by default */
        justify-content: center;
        align-items: center;
    }

    .upload-success i {
        color: white;
        font-size: 14px;
    }

    /* Hide default file input */
    input[type="file"] {
        display: none;
    }

    </style>
</head>

<body >
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            
                            <div class="text-center">
                                <h1>$$$</h1>
                                <h1 class="h4 text-gray-900 mb-4">Créez un compte !</h1>
                                <h1 class="h4 text-gray-900 mb-4">Créez un compte !</h1>

                                <h1 class="h4 text-gray-900 mb-4">Créez un compte !</h1>

                                  <div class="logo-container">
                                    <img src="{{ asset('import/img/logo_bc_skills.png') }}" alt="Logo">
                                </div>
                                <h1 class="h4 text-gray-900 mb-4">Créez un compte !<h3 class="tit">Stageaire</h3></h1> 
                            </div>
               
    <form method="POST" action="{{ route('register_stg') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="logo-container">
                <label for="file-upload" class="upload-button">
                    <input type="file" id="file-upload" name="photo" onchange="handleFileUpload(this)">
                    <i class="fas fa-plus"></i>
                    <div class="upload-success" id="upload-success">
                        <i class="fas fa-check"></i>
                    </div>
                </label>
           
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control form-control-user" id="exampleFirstName"
            placeholder="Nom">
            @error('first_name')
                <span class="danger">{{ $message }}</span>
            @enderror
                </div>
                <div class="col-sm-6">
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="form-control form-control-user" id="exampleLastName"
                    placeholder="Prenom">
                    @error('last_name')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
           
        </div>

        <div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" id="Tuteur" name="Tuteur" class="form-control form-control-user" id="exampleFirstName"
            placeholder="Tuteur">
            @error('Tuteur')
                <span class="danger">{{ $message }}</span>
            @enderror
                </div>
                <div class="col-sm-6">
                    <input type="text" id="Duree de stage" name="Duree de stage"  class="form-control form-control-user" id="exampleLastName"
                    placeholder="Duree de stage">
                    @error('Duree de stage')
                        <span class="danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <input  id="Mission" name="Mission"  class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Mission">
                @error('Mission')
                    <span class="danger">{{ $message }}</span>
                @enderror
            </div>
           
        </div>

        <div class="form-group">
            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">+212</span>
                </div>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="numero de telephone" required>
            </div>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Address  Email ">
            @error('email')
                <span class="danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" id="password" name="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="mots de passe ">
                @error('password')
                    <span class="danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-6">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-user"
                id="exampleRepeatPassword" placeholder="Repeter mots de passe">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">Registre</button>

    </form>
                            
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="{{ route('Rlogin') }}">Vous avez déjà un compte ? Connectez-vous!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('signup') }}">registrer en tant que Employe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('import/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('import/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('import/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('import/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('import/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('import/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('import/js/demo/chart-pie-demo.js') }}"></script>
    <script>
        function handleFileUpload(input) {
            const uploadSuccess = document.getElementById('upload-success');
            if (input.files && input.files[0]) {
                uploadSuccess.style.display = 'flex'; // Show the success icon
            }
        }
    </script>
</body>

</html>
