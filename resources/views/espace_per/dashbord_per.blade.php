<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard_personnel</title>
   

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('import/css/sb-admin-2.min.css') }}" rel="stylesheet">
<script src="{{ asset('import/js/vendor/fontawesome-free/js/all.min.js') }}"></script>


<style>
.bg {
    background: linear-gradient(to bottom, #003e68, #0073c0);
}




</style>

</head>

<body id="page-top"  class="dark-mode">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg sidebar sidebar-dark accordion" id="accordionSidebar">
            <img src="{{ asset('import/img/logo_bc_skills.png') }}" alt="Logo">

           
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               
                    <div class="sidebar-brand-text mx-3"><h4><i class="fas fa-bars"></i> Menu EMP</h4></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard_per')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
             Espace Personnel
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Mes informations</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Operations:</h6>
                        <a class="collapse-item" href="{{route('show_per')}}">Consulter Mes informations</a>
                        <a class="collapse-item" href="{{route('edit_per')}}">Modifier Mes informations</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
         

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Espace Services
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Mes Formation</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Formation</h6>
                        <a class="collapse-item" href="{{ route('formation_per')}}">Mes Formations</a>
                        <a class="collapse-item" href="{{ route('prochain_formation_per')}}">prochaines Formations</a>

                      
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->

          
            <li class="nav-item">
                <a class="nav-link" href="{{route('conge_per')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Conge</span></a>
            </li>

            <!-- Nav Item - Tables -->
            

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
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    @if($derniereConge)
                                        <div class="small text-gray-500">{{ $derniereConge->start_date }}</div>
                                        <span class="font-weight-bold">Votre dernier congé est {{ $derniereConge->status }}</span>
                                    @else
                                        <span class="font-weight-bold">Vous n'avez pas encore de demande de congé.</span>
                                    @endif
                                </div>
                            </a>
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
                                @if ($user->photo)
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
                                <a class="dropdown-item" href="{{route('show_per')}}">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1>Tableau de bord</h1>
                        
                    </div>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Employe</div>
                                                @if(session('userName'))
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Mr.{{ session('userName') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jour De Conge (Annual)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    @if ($MonConge && $MonConge->annual_conge_days > 0)
                                                        {{ $MonConge->annual_conge_days }} Jours
                                                    @else
                                                        18
                                                    @endif
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-graduate fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mes Formation
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $nombreFormationsInscrites }}/{{$totalFormations}}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                             style="width: {{ $pourcentageFormationsInscrites }}%" aria-valuenow="{{ $pourcentageFormationsInscrites }}" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Etat De derneir Conge</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$derniereConge->status}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-umbrella-beach fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="row">

                            <!-- Column 1 -->
                            <div class="col-lg-6 mb-4">
                        
                                <!-- Card Header - Dropdown -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personnel</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="dropdown no-arrow">
                                            "Votre travail a un impact significatif. Continuez à donner le meilleur de vous-même chaque jour !"
                                            
                                            
                                        </div>
                                    </div>
                                      
                                </div>
                    
                        
                                <div class="card shadow mb-4">
                                   
                                    <div class="card-body">
                                        <h3>Formations Inscrites</h3>
                                        @foreach($formationsInscrites as $formation)
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">{{ $formation->titre }}</h6>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="small font-weight-bold">
                                                        Pourcentage de finalisation
                                                        <span class="float-right">{{ number_format($formation->pourcentageFinalisation, 2) }}%</span>
                                                    </h4>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar bg-danger" role="progressbar" 
                                                             style="width: {{ number_format($formation->pourcentageFinalisation, 2) }}%" 
                                                             aria-valuenow="{{ number_format($formation->pourcentageFinalisation, 2) }}" 
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                       
                                </div>
                        
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">BC SKILLS</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                              <img src="{{ asset('import/img/logo_bc_skills.png') }}"  class="img-fluid px-3 px-sm-4 mt-3 mb-4" alt="Logo">

                                        </div>
                                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated
                                            collection of beautiful svg images that you can use completely free and without attribution!</p>
                                        <a target="_blank" rel="nofollow" href="https://www.bcskills.com/">Browse Illustrations on unDraw &rarr;</a>
                                    </div>
                                </div>


                            </div>
                        
                            <!-- Column 2 -->
                            <div class="col-lg-6 mb-4">
                        
                                <!-- Illustrations -->
                                

                                
                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-newspaper"></i>
                                            Actualite </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
            <img src="{{ asset('import/img/voice-speaker.png') }}" alt="Logo" width="200px">

                                        </div>
                                        <h5>{{ $derniereActualite->titre}}</h5>
                                        <p>{{ $derniereActualite->contenu}}  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus at enim rem ad? Nisi neque praesentium, mollitia illo ex, voluptate aspernatur sapiente perferendis dolor officiis ullam! Dolorum quis non iste!
                                            </p>
                                        </div>
                                    </div>

                                <!-- Development Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Approche de Développement</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Notre approche de développement combine les dernières technologies pour offrir une expérience utilisateur optimale :

                                            Frontend: Utilisation de Bootstrap, HTML5, CSS3, et JavaScript pour des interfaces réactives et conviviales.
                                            Backend: Laravel assure la robustesse, la sécurité, et la fiabilité de votre système.
                                            Mobile-First: Priorité à l'expérience mobile pour une utilisation fluide sur tous les appareils.
                                            Performances optimisées: Temps de chargement rapides et navigation fluide grâce à des techniques d'optimisation.
                                            Sécurité renforcée: Mesures avancées pour protéger vos données sensibles.</p>
                                    </div>
                                </div>
                        
                            </div>
                        
                        </div>
                        
                        
                                <!-- Card Header - Dropdown -->
                                
                <!-- /.container-fluid -->

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
    <script>document.addEventListener('DOMContentLoaded', function() {
        const body = document.querySelector('body');
        const toggleDarkModeButton = document.querySelector('#toggle-dark-mode');
    
        toggleDarkModeButton.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
        });
    });</script>

</body>

</html>