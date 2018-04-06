<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>FORTNITE SMART BOT</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('font-awesome/css/font-awesome.css')!!}

    <!-- Toastr style -->
    {!!Html::style('css/plugins/toastr/toastr.min.css')!!}

    <!-- Gritter -->
    {!!Html::style('js/plugins/gritter/jquery.gritter.css')!!}

    {!!Html::style('css/animate.css')!!}
    {!!Html::style('css/style.css')!!}

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                            </ul>
                        </div>
                    </li>
                    <li {{ $menu == "Dashboard"?'class=active':''}}>
                        <a href="/dashboard"><i class="fa fa-wrench"></i> <span class="nav-label">Inicio</span></a>
                    </li>

                    <li {{ $menu == "Fortnite"?'class=active':''}}>
                        <a href="/dashboard/fortnite"><i class="fa fa-gamepad"></i> <span class="nav-label">Fortnite</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-md-12">
                    <h2>Bienvenido a TWITCH SMART BOT</h2>
                    <small>Si lees esto te la comes.</small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content"  style="min-height: 89vh">

                        @yield('content')

                    </div>
                    <div class="footer">
                        <div>
                            <strong>Copyright</strong> Twitch Smart Bot &copy; 2018 - @estebane035
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    {!!Html::script('js/jquery-3.1.1.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/plugins/metisMenu/jquery.metisMenu.js')!!}
    {!!Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js')!!}

    <!-- Flot -->
    {!!Html::script('js/plugins/flot/jquery.flot.js')!!}
    {!!Html::script('Js/plugins/flot/jquery.flot.tooltip.min.js')!!}
    {!!Html::script('js/plugins/flot/jquery.flot.spline.js')!!}
    {!!Html::script('js/plugins/flot/jquery.flot.resize.js')!!}
    {!!Html::script('js/plugins/flot/jquery.flot.pie.js')!!}

    <!-- Peity -->
    {!!Html::script('js/plugins/peity/jquery.peity.min.js')!!}
    {!!Html::script('js/demo/peity-demo.js')!!}

    <!-- Custom and plugin javascript -->
    {!!Html::script('js/inspinia.js')!!}
    {!!Html::script('js/plugins/pace/pace.min.js')!!}

    <!-- jQuery UI -->
    {!!Html::script('js/plugins/jquery-ui/jquery-ui.min.js')!!}

    <!-- GITTER -->
    {!!Html::script('js/plugins/gritter/jquery.gritter.min.js')!!}

    <!-- Sparkline -->
    {!!Html::script('js/plugins/sparkline/jquery.sparkline.min.js')!!}

    <!-- Sparkline demo data  -->
    {!!Html::script('js/demo/sparkline-demo.js')!!}

    <!-- ChartJS-->
    {!!Html::script('js/plugins/chartJs/Chart.min.js')!!}

    <!-- Toastr -->
    {!!Html::script('js/plugins/toastr/toastr.min.js')!!}

    <!-- VALIDATE -->
    {!!Html::script('js/jquery.validate.min.js')!!}
    {!!Html::script('js/localization/messages_es.js')!!}

    <!-- Ajax FORM-->
    {!!Html::script('js/jquery.form.js')!!}

    @yield('scripts')

</body>
</html>
