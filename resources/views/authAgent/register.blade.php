@extends('layouts.app2')

@section('content')
    <section class="page-section cta">
      <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui brown header">
      <div class="content">
        Inscription
      </div>
    </h2>
    <form class="ui large form" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="ui stacked segment">
        <div class="field">
              <div class="ui left icon input">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Prénom et Nom" required autofocus >
              </div>
            </div>
        
        <div class="field">
          <div class="ui left icon input">
            <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input id="password" type="password" class="form-control" name="password" placeholder="Mot De Passe" required>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer Mot De Passe" required>
          </div>
        </div>
        
          <button type="submit" class=" ui brown fluid large  submit button" >S'inscrire
          </button>
      
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      J'ai déjà un compte ? <a href="{{ route('login') }}">S'authentifier</a>
    </div>
  </div>
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
</html>
