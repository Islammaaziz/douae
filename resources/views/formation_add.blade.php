<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('import/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('import/js/vendor/fontawesome-free/js/all.min.js') }}"></script>



    <style>
         .form-container {
      max-width: 500px;
      margin: auto;
      margin-top: 50px;
    }
    .card {
      border-radius: 15px;
    }
    .card-header {
      border-radius: 15px 15px 0 0;
    }
    .form-group {
      text-align: center;
    }
 .title{
    margin-left: 20px;
 }
  


 #btn_aj{
    width: 400px
 }
 .bg {
    background: linear-gradient(to bottom, #003e68, #0073c0);
}

      </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg sidebar sidebar-dark accordion" id="accordionSidebar">
            <img src="{{ asset('import/img/logo_bc_skills.png') }}" alt="Logo">

           
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               
                    <div class="sidebar-brand-text mx-3"><h4><i class="fas fa-bars"></i> Menu RH</h4></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('homepage') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                  Espace  Personnels
                </div>
    
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user"></i>
                        <span>Employes</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operations:</h6>
                            <a class="collapse-item" href="{{ route('employes_show') }}">Consulter Employes</a>
                            <a class="collapse-item" href="{{ route('employes_add') }}">Ajouter Employes</a>
                        </div>
                    </div>
                </li>
    
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-user-graduate"></i>
                        <span>Stageaires</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operations</h6>
                            <a class="collapse-item" href="{{ route('stageaires_show') }}">Consulter Stageaires</a>
                            <a class="collapse-item" href="{{ route('stageaires_add') }}">Ajouter Stageaires</a>
                            
                        </div>
                    </div>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                   Espace Services
                </div>
    
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('formation') }}" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Formation</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Formation </h6>
                            <a class="collapse-item" href="{{ route('formation') }}">Consulter Formation</a>
                            <a class="collapse-item" href="{{ route('formation_add') }}">Ajouter Formation</a>

                            
                        </div>
                    </div>
                </li>
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show_conge') }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Conge</span></a>
                </li>
    

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('show_actualite')}}">
                    <i class="fas fa-user-clock"></i>
                    <span>Actualite</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h3>BC SKILLS</h3>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Rechercher sur..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">4+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                   Notifications
                                </h6>
                               <!-- Inclure la vue partielle notif_formation avec la variable $formations -->
                               @foreach($derniereformations as $shformations)
                               <a class="dropdown-item d-flex align-items-center" href="#">
                                   <div class="mr-3">
                                       <div class="icon-circle bg-primary">
                                           <i class="fas fa-file-alt text-white"></i>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="small text-gray-500">{{ $shformations->date_debut }}</div>
                                       <span class="font-weight-bold">Une nouvelle formation ajoutée : {{ $shformations->titre }}</span>
                                   </div>
                               </a>
                           @endforeach

                                  <!-- Autres éléments de votre dropdown -->
                                  <div>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            @if($derniereConge)
                                                <div class="small text-gray-500">{{ $derniereConge->start_date }}</div>
                                                <span class="font-weight-bold">Votre dernier congé est {{ $derniereConge->status }} pour l employe {{ $derniereConge->first_name }} {{ $derniereConge->laste_name }}</span>
                                            @else
                                                <span class="font-weight-bold">Vous n'avez pas encore de demande de congé.</span>
                                            @endif
                                        </div>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-warning">
                                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500">{{$derniereActualite->date_de_publication}}</div>
                                                <span class="font-weight-bold">   {{$derniereActualite->titre}}
                                            </div>
                                        </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Voir toutes les Notifications</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(session('userName'))
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mr.   {{ session('userName') }}</span>

                                  
                            @endif
                                
                            @if ($user && $user->photo)
                            <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo de Profil" class="circular-profile-pic img-profile rounded-circle" width="20px">
                        @else
                            <div class="circular-profile-pic">
                                <i class="fas fa-user"></i>
                            </div>
                        @endif

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('show_respo')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Parametres
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Se déconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">ajouter Formation</h1>

                </div>
                <!-- /.container-fluid -->
                <form action="{{ route('formations.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="title">
                        <label for="titre">Titre :</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                        @error('titre')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="title">
                        <label for="description">Description :</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="title">
                        <label for="date_debut">Date Debut :</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                        @error('date_debut')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="title">
                        <label for="date_fin">Date Fin :</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                        @error('date_fin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="title">
                        <label for="lieu">Lieu :</label>
                        <input type="text" class="form-control" id="lieu" name="lieu" required>
                        @error('lieu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary form-control" id="btn_aj">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </form>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Creer par &copy;ISLAM,DOUAE,MOHAMED</span>

                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à partir ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session actuelle.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="{{ route('Rlogin') }}"
                        >
                        Déconnexion
                    </a>
                    
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