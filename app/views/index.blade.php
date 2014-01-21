<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>FindPhone</title>

        <!-- Bootstrap core CSS -->
        {{ HTML::style('assests/css/bootstrap.min.css') }}


        <!-- Custom styles for this template -->
        {{ HTML::style('assests/css/custom.css') }}


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Wrap all page content here -->
        <div id="wrap">

            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">FindPhone</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <!--              <li class="active"><a href="#">Home</a></li>
                                          <li><a href="#about">About</a></li>
                                          <li><a href="#contact">Contact</a></li>-->
                            <!--              <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                              <li><a href="#">Something else here</a></li>
                                              <li class="divider"></li>
                                              <li class="dropdown-header">Nav header</li>
                                              <li><a href="#">Separated link</a></li>
                                              <li><a href="#">One more separated link</a></li>
                                            </ul>
                                          </li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                 @include('elements.alert')
                <div class="jumbotron">
                    <h2>FindPhone</h2>
                    <p>Key in the phone number and find the owner details. Simple as 1,2,3....</p>
                   
                    <form action="" method="POST">
                        <div class="input-group">
                            {{ Form::text('input', null, array('placeholder'=>'Telephone Number', 'class' => 'form-control')) }}
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Search!</button>
                            </span>
                        </div>
                    </form>
                </div>

               @if($results)
                <div class="well">
                    <h4>Search Result : Input</h4>
                    <p>Name : <span>{{ $results->name }}</span></p>
                    <p>Email : <span>{{$results->email}}</span></p>
                    <p>Address : <span>{{$results->address}}</span></p>
                </div>
                @endif
                <h2 class="text-center">Total Records : {{ $stats }}</h2>

            </div>
        </div>

        <div id="footer">
            <div class="container">
                <p class="text-muted">FindPhone &copy; 2014</p>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        {{ HTML::script('assests/js/bootstrap.min.js') }}
    </body>
</html>
