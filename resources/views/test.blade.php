<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Codifications</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/container.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/grid.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/header.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/image.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/menu.css">

  <link rel="stylesheet" type="text/css" href="semantic/out/components/divider.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/segment.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/form.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/input.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/button.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/list.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/message.css">
  <link rel="stylesheet" type="text/css" href="semantic/out/components/icon.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../dist/components/transition.js"></script>
</head>
<body>
    <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
        <button type="submit" class="ui inverted button">{{ Auth::user()->name }}</button> <span class="caret"></span>
                              </a>

        <ul class="dropdown-menu">
            <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
              Logout
          </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
       </form>
      </li>
     </ul>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Ecole Supérieure Polytechnique de Dakar</span>
      <span class="site-heading-lower">SAMA CODIFICATION</span>
    </h1
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ url('/') }}">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ ( route('register')) }}">Inscription</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{ ( route('register')) }}"> Authentification </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="#">Liste Des  Positions</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  @yield('content')
</body>
</html>