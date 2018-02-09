
@extends('layouts.app6')

@section('content')
<div class ="ui text container">
    <section class="page-section cta">
      <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui brown header">
      <div class="content">
        Authentification
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        
          <button type="submit" class=" ui brown fluid large  submit button" >Login
          </button>
      
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Nouveau ? <a href="{{ route('register') }}">S'inscrire</a>
    </div>
  </div>
</div>
    </section>

    </div>

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
</html>
