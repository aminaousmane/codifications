<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"></meta>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"></meta>
            	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport"></meta>
		<link href="semantic/out/components/reset.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/site.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/container.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/grid.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/header.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/image.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/menu.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/divider.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/segment.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/form.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/input.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/button.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/list.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/message.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/icon.css" type="text/css" rel="stylesheet"></link>
		    <link href="semantic/out/components/table.css" type="text/css" rel="stylesheet"></link>
		    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
		
		<style type="text/css">
		 body {
                      background-color: #ffffff;
                    }
		 .column{
			
			margin-left : 350px;
			margin-right : 350px;
			
		    }
		 

		</style>
		<title>Codifications</title>
	</head>
	<body>
	<br><br><br>
		<div class="ui secondary inverted fixed menu">
      
        <div class="right menu">
        <div class="item">
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class = "ui brown submit button" >
              Déconnexion
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
       </form>
        </div>
        </div>
      </div>
		<div class="ui large left  vertical  fixed menu">
		  <div class="item">
   			<center><h1 class="ui brown image header">
	    	    
		    <img class="ui massive image" src="img/2.jpg" ><br>
		    <div class="content">


                                    <b> SAMA CODIFICATION</b>
                                  

                        </div>
			</h1></center>
		  </div>
		  <a class="ui.menu brown active item" href="{{ url('Pavillonshow') }}">Etat des Réservation</a>
		  <a class="item" href="{{ ( url('Codificationcreate')) }}">Périodes de Codification</a>
		  <a class="item" href="{{ url('Pavilloncreate') }}">Déclarer Pavillons</a>
		  <a class="item" href="{{ url('create') }}">Déclarer Chambres</a>
		  <a class="item" href="{{ url('Couloircreate') }}">Déclarer Couloirs</a>
		  <a class="item" href="{{ url('Etagecreate') }}">Déclarer Etages</a>
		  <a class="item" href="{{ url('Positioncreate') }}">Déclarer Positions</a>
		  
		</div>
		</div>
		<br><br><br>
		
	
		@yield('content')
	

		
		
		
		<p></p>
		<p></p>
	</body>
</html>
