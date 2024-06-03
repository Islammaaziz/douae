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

body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    main {
      padding: 20px;
    }

    .formation-card {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  .eliminer_la_decoration{
          text-decoration: none;
          width: 450px;
          margin-left: 20px;
          margin-bottom: 20px;
          margin-top: 10px;
          border-radius: 45px;
          box-shadow:#aaa ;
        
  }
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}


.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

h1, h2 {
    text-align: center;
    color: #333;
}

.formation-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px 0;
    padding: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.formation-card h3 {
    margin: 0 0 10px;
    color: #2a57de;
}

.formation-card p {
    margin: 5px 0;
    color: #666;
}

.details-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0056b3;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
}

.details-btn:hover {
    background-color: #0056b3;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.eliminer_la_decoration {
    width: 250px;
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
}


.eliminer_la_decoration {
           
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .cl{
            background-color: red;
        }
        .sp{
            margin-top: 10px
        }

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
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
                   Espace Personnels
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
                                <a class="dropdown-item" href="{{route('Rlogin')}}" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    se deconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Listes de formations</h1>
                    <main>
                        <h2> Formations</h2>
                        @foreach($formations as $formation)
                            <div class="formation-card">
                                <h3><strong>Formation de {{ $formation->titre }}</strong> </h3>
                                <p><strong>Date Debut: </strong>{{ $formation->date_debut }}</p>
                                <p><strong>Date Fin: </strong>{{ $formation->date_fin}}</p>
                                <p><strong>Lieu : </strong>{{ $formation->lieu}}</p>
                                <p><strong>description : </strong><p> {{ $formation->description }}</p></p>

                                
                                <a href="{{ route('formation_edit', $formation->id) }}" class="btn btn-primary eliminer_la_decoration">Modifier</a>

                                <a href="{{ route('formations.listeUtilisateurs', $formation->id) }}"
                                    class="btn btn-success eliminer_la_decoration">Consulter Employés</a>
                                    <a href="{{ route('delete_formation', $formation->id) }}"  class="btn btn-danger  eliminer_la_decoration">Annuler</a>
                            </div>
                            <div class="modal fade" id="modalConfirm-{{ $formation->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalConfirmLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalConfirmLabel">Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Êtes-vous sûr de vouloir supprimer cette formation ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <a href="{{ route('delete_formation', ['id' => $formation->id]) }}"
                                                class="btn btn-danger">Confirmer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </main>
            
                </div>
            
                <div class="modal" id="detailsModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Détails de la Formation</h2>
                        <p id="modal-description">{{ $formation->description }}</p>
                        <a href="{{ route('formation_edit', $formation->id) }}"><button class="eliminer_la_decoration">Modifier</button></a>
                        <a href="{{ route('formations.listeUtilisateurs', $formation->id) }}"><button class="eliminer_la_decoration">Consulter Employés</button></a>
                        <a href="#" onclick=""><button class="eliminer_la_decoration details-btn cl">Annuler</button></a>
                    </div>
                    </div>
                    
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
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="#">Logout</a>
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
                    <script src="js/sb-admin-2.min.js"></script>
                    
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const cancelLinks = document.querySelectorAll('.cancel-link');
                            cancelLinks.forEach(link => {
                                link.addEventListener('click', function (event) {
                                    event.preventDefault();
                                    const modalId = this.getAttribute('data-target');
                                    const modal = document.querySelector(modalId);
                                    if (modal) {
                                        modal.classList.remove('show'); // Retire la classe 'show' pour masquer le modal
                                        setTimeout(() => { // Utilise setTimeout pour retarder la suppression du modal
                                            modal.style.display = 'none'; // Masque le modal
                                            const backdrop = document.querySelector('.modal-backdrop');
                                            if (backdrop) {
                                                backdrop.remove(); // Supprime le fond gris
                                            }
                                        }, 200); // Temps de retard en millisecondes
                                    }
                                });
                            });
                        });
                    </script>
                    
                    </body>
                    </html>

                   
         