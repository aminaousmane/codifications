@extends('layouts.app1')

@section('content')
    <section class="page-section cta">
      <div class="ui text container">
        <h3 class="ui brown message"> Veuillez consulter la liste de positions disponible !</h3>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; UACD/ESP DAKAR 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

@endsection
</body>
</html>

