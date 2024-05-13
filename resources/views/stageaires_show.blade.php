<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('import/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('import/js/vendor/fontawesome-free/js/all.min.js') }}"></script>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
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
                    <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Personnel
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
                    Services
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
                            <h6 class="collapse-header">Formation proche</h6>
                            <a class="collapse-item" href="{{ route('formation') }}">Html & Css</a>
                            <a class="collapse-item" href="{{ route('formation') }}">soft skills</a>
                            <a class="collapse-item" href="{{ route('formation') }}">Ecommerce</a>
                            
                        </div>
                    </div>
                </li>
    
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('conge') }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Conge</span></a>
                </li>
    

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="buttons.html">
                    <i class="fas fa-user-clock"></i>
                    <span>Abscence</span></a>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                   Notifications
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Mai 02, 2024</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Avril 29, 2024</div>
                                        <span class="font-weight-bold">   Formation de Marketing Digital
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        <span class="font-weight-bold">   Spending Alert: We've noticed unusually high spending for your account.
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mr.Islam</span>
                                <img src="{{ asset('import/img/islam.jpeg') }}" class="img-profile rounded-circle" alt="Logo">

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                 <h5>   <p class="mb-4"> <div>cette DataTables contient les employes qui sont actuellement actifs </div></h5>
                        <i class="fas fa-exclamation-circle"></i> Si Vous voulez consultez des anciens employes veuillez cliquez sur<a target="_blank" href="https://datatables.net">Employes archivees</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mission</th>
                                            <th>Departement</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Mission</th>
                                            <th>Departement</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Operations</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>developpement app mobil GRH</td>
                                            <td>Informatique</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <a href="show_emp.html"><i class="fas fa-search"></i></a>
                                                <a href="update_emp.html"><i class="fas fa-pencil-alt"></i></a>
                                               <a href="archive_stg.html"> <i class="fas fa-archive"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>developpement ROBOT IA</td>
                                            <td>indestruel</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>developpement systemes reseaux</td>
                                            <td>indestruel</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>cyber securite</td>
                                            <td>management</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>developpement site web </td>
                                            <td>Informatique</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <a href="show_stg.html"><i class="fas fa-search"></i></a>
                                                <a href="update_stg.html"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="archive_stg.html"> <i class="fas fa-archive"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>control de qualite</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>indestruel</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>management</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>management</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>control de qualite</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>indestruel</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Informatique</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>management</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>indestruel</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>control de qualite</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>management</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>management</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>indestruel</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>control de qualite</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>informatique</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>indestruel</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>informatique</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>informatique</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>management</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>indestruel</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>management</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>indestruel</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>indestruel</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>informatique</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>informatique</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>management</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>control de qualite</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>indestruel</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>informatique</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>informatique</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>indestruel</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>control de qualite</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>management</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>indestruel</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>informatique</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>
                                                <i class="fas fa-search"></i>
                                                <i class="fas fa-pencil-alt"></i>
                                                <i class="fas fa-archive"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
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

</body>

</html>