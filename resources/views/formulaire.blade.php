<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! asset('bower_components/metisMenu/dist/metisMenu.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('dist/css/sb-admin-2.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!! asset('bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.googlemap.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.geocomplete.js') !!}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        #geocomplete {
            width: 80%;
        }
    </style>
    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input class="form-control" placeholder="Enter text">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Prenom </label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone portable</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone fixe</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                         <div class="form-group">
                                            <label>Cout horaire</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Note du depart</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <div>
                                                <input id="geocomplete" type="text"  rows="3">
                                                <input id="find" type="button" value="find" />
                                            </div>
                                        </div>
                                        <ul>
                                        <li>Location: <span data-geo="location"></span></li>
                                        <li>Route: <span data-geo="route"></span></li>
                                        <li>Nummero de route: <span data-geo="street_number"></span></li>
                                        <li>Code postal: <span data-geo="postal_code"></span></li>
                                        <li>Localité: <span data-geo="locality"></span></li>
                                        <li>Code du pays: <span data-geo="country_short"></span></li>
                                        <li>Region: <span data-geo="administrative_area_level_1"></span></li>
                                        <li>Pays: <span data-geo="country"></span></li>
                                        </ul>

                                        <button type="submit" class="btn btn-default">Valider</button>
                                        <button type="reset" class="btn btn-default">Supprimer</button>
                                    </form>
                                        
      
      
                                  </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-7">
                                    <h2>Adresse du formatteur</h2>
                                    <div id="map" style="width: 100%; height: 600px;"></div>
                                    <!--<div id="way" style="width: 300px; height: 300px;"></div>-->
                                    <script type="text/javascript">
                                      $(function() {
                                        $("#map").googleMap();
                                        $("#map").addMarker({
                                          coords: [47.0637849, -0.882741318],
                                          icon:   "{!! asset('img/blue-dot.png') !!}", // Icon URL,
                                          url: 'http://www.tiloweb.com' // Link URL
                                        });
                                      })
                                    </script>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! asset('bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('dist/js/sb-admin-2.js') !!}"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>


    <script>
      $(function(){
        $("#geocomplete").geocomplete({
          map: "#map",
          details: "form ul",
          detailsAttribute: "data-geo"
        });
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
      });
    </script>

</body>

</html>
