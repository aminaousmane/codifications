@extends('layouts.app6')

@section('content')
<div class ="ui text container">
    <section class="page-section cta">
      <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui brown header">
      <div class="content">
        INSCRIPTION
      </div>
    </h2>
    <form class="ui form segment" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="ui stacked segment">
        <div class="field">
              <div class="ui left icon input">
                <input id="id_etudiant" type="text" class="form-control" name="id_etudiant" value="{{ old('id_etudiant') }}" placeholder="Numéro Etudiant" required autofocus>
              </div>
            </div>
        <div class="field">
              <div class="ui left icon input">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Prénom et Nom" required autofocus >
              </div>
            </div>
        <div class="field">
              <div class="ui left icon input">
                <select  id="genre" type="text" class="form-control" name="genre" value="{{ old('genre') }}" required autofocus>
                  <option></option>
                  <option>
                    Femme
                  </option>
                  <option>
                    Homme
                  </option>
                </select>
              </div>
            </div>
          <div class="field">
              <div class="ui left icon input">
                <select  id="departement"  class="form-control" name="departement" value="{{ old('departement') }}"  required autofocus>
                  <option></option>
                  <option>Génie Informatique</option>
                  <option>Génie Electrique</option>
                  <option>Génie Civil</option>
                  <option>Génie Mécanique</option>
                  <option>Génie Chimique</option>
                  <option>Gestion</option>
                </select>
              </div>
            </div>
            <div class="field">
              <div class="ui left icon input">
                <select  id="formation"  class="form-control" name="formation" value="{{ old('formation') }}" required autofocus>
                  <option></option>
                  <option>DUT1</option>
                  <option>DUT2</option>
                  <option>DIC1</option>
                  <option>DIC2</option>
                  <option>DIC3</option>
                  <option>DESCAF1</option>
                  <option>DESCAF2</option>
                  <option>DESCAF3</option>
                </select>
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
