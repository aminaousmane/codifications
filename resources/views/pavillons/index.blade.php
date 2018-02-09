  @extends('layouts.app1')

@section('content')
    <section class="page-section cta">
        <div class="ui text container">
        <div class="ui  segment">
      @if($pav->first())
      @foreach($pav as $c)
    <div class="label">Pavillon {{$c->name}}</div>
    <div class="ui active brown progress bar">
      <div class="bar">
        <div class="progress"></div>
      </div>
    </div>
   @endforeach
   @else
    <h3 class="ui brown message">Aucun pavillon n'est occupé !</h3>
  @endif

</div>
  </div></section>
    @endsection
  </body>
</html>



