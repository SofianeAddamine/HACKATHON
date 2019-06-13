<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('titre')
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{url('front/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('front/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('front/bower_components/Ionicons/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{url('front/dist/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{url('front/dist/css/skins/skin-blue.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @yield('additional-css')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        
        <div class="wrapper">
            <header class="main-header">

                <a href="{{route('home')}}" class="logo">
                    <span class="logo-mini"><b>EB</b>C</span>
                    <span class="logo-lg"><b>EB</b> Connections</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="{{url('front/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>

                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{url('front/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="{{url('front/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Deconnexion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Ich ich -->
            
            <aside class="main-sidebar">
                
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{url('front/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Eric BELOUET</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
                        </div>
                    </div>
                    
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header text-uppercase">Navigation</li>
                        <li>
                            <a href="{{route('agenda.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Agenda</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('alerte.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Alerte</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('etape.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Étape</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('groupe.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Groupe</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('objectif.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Objectif</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('projet.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Projet</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('secteur.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Secteur</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tache.index')}}">
                                <i class="fa fa-link"></i>
                                <span>Tâche</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>

            <!-- Ich ich -->

            <div class="content-wrapper">
                <section class="content-header">
                    @yield('contenu-header')
                </section>

                <section class="content">
                    @yield('contenu')
                </section>
            </div>
            
            <!-- Ich ich -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    EB Connections.
                </div>
                Copyright &copy; 2019 <strong>Mini CRM</strong>. Tous droits réservés.
            </footer>

        </div>

        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 3 -->
        <script src="{{url('front/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{url('front/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{url('front/dist/js/adminlte.min.js')}}"></script>
        
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.5.0/js/dataTables.colReorder.js"></script>

        @yield('additional-js')

    </body>
</html>