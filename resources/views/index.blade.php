<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Locatisation des formatteurs</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('dist/css/TableTools.css') !!}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('dist/css/sb-admin-2.css') !!}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <!-- Custom Fonts -->
    <link href="{!! asset('bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.googlemap.js') !!}"></script>

    <style type="text/css">
        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
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
                    <h1 class="page-header">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des formatteurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>email</th>
                                            <th>telephone fixe</th>
                                            <th>telephone portable</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>email</th>
                                            <th>telephone fixe</th>
                                            <th>telephone portable</th>
                                        </tr>
                                      </tfoot>
                                    <tbody>
                                        @foreach($formatteurs as $formatteur)
                                        <tr class="gradeA">
                                            <td>{{ $formatteur->id }}</td>
                                            <td>{{ $formatteur->name }}</td>
                                            <td>{{ $formatteur->prenom }}</td>
                                            <td>{{ $formatteur->mail }}</td>
                                            <td class="center"> {{ $formatteur->telephone_fixe }}</td>
                                            <td class="center"> {{ $formatteur->telephone_portable }}</td>
                                        </tr>
                                        @endforeach

                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                
                                    <script type="text/javascript">
                                        google.load("maps", "3.4", {
                                            other_params: "sensor=false&language=fr"
                                        });
                                    </script>
                                    
                                    <div id="map" style="width: 100%; height: 800px;"></div>
                                    <!--<div id="way" style="width: 300px; height: 300px;"></div>-->
                                    <script type="text/javascript">
                                      $(function() {
                                        $("#map").googleMap();
                                        $("#map").addMarker({
                                          coords: [48.895651, 2.290569],
                                          icon:   "{!! asset('img/free-5-red.png') !!}", // Icon URL,
                                          url: 'http://www.tiloweb.com' // Link URL
                                        });
                                      })
                                    </script>


                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <div id="results"></div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{!! asset('bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

    <!-- DataTables JavaScript -->
    <script src="{!! asset('bower_components/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>
    <script src="{!! asset('bower_components/datatables-responsive/js/dataTables.responsive.js') !!}"></script>
    <script src="{!! asset('dist/js/dataTables.tableTools.js') !!}"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('dist/js/sb-admin-2.js') !!}"></script>

     <script type="text/javascript">
        var longitude = {};
    </script>

    @foreach($formatteurs as $formatteur)                
           
    <script>
        var coordinates = new Object();;
        coordinates["longitude"] = {{$formatteur->longitude}};
        coordinates["latitude"]  = {{$formatteur->latitude}};
        longitude[{{$formatteur->id}}] = coordinates ;
    </script>
     
    @endforeach

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        

        // Setup - add a text input to each footer cell
        $('#dataTables-example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="'+title+'" />' );
        } );
     
        // DataTable
        var table = $('#dataTables-example').DataTable({
                "columnDefs": [
                    { 
                        "width": "0px", "targets": 0 }
                ],
                dom: 'T<"clear">lfrtip',
                tableTools: {
                    "sRowSelect": "multi",
                    "aButtons": [ "select_all", "select_none" ],
                    "fnRowSelected": function(node){
                        //var oTT = TableTools.fnGetInstance( 'dataTables-example' );
                        //var aSelectedTrs = oTT.fnGetSelectedData();
                        //alert(node[0].cells[0].innerHTML);
                        addMarkers(node);
                    },
                    "fnRowDeselected": function ( nodes ) {
                        //alert( 'The row with ID '+nodes[0].cells[0].innerHTML +' was deselected' );
                        removeMarkers(nodes);

                    }
                }
        });                                      
     
        // Apply the search
        table.columns().every( function () {
            var that = this;
     
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        });

        function addMarkers(selectedElements) {
            jQuery.each( selectedElements , function( i, val ) {
                $("#map").removeMarker(selectedElements[i].cells[0].innerHTML);
                $("#map").addMarker({
                  coords: [longitude[selectedElements[i].cells[0].innerHTML]["longitude"], longitude[selectedElements[i].cells[0].innerHTML]["latitude"]], // GPS coords
                  title: 'Marker n°' + selectedElements[i].cells[0].innerHTML, // Title
                  id: selectedElements[i].cells[0].innerHTML
                });
                
            });
        }

        function removeMarkers(selectedElements){
             jQuery.each( selectedElements , function( i, val ) {
                $("#map").removeMarker(selectedElements[i].cells[0].innerHTML);
             });
            
        }



        
    });

</script>

    </script>

</body>

</html>
