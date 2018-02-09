    @extends('layouts.default')
     
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Chambre</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href=""> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                @foreach($chambre as $c)
                <div class="form-group">
                    <strong>Chambre :</strong>
                    {{ $c->code  }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                    <strong>Etage :</strong>
                    {{ $c->etage }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                    <strong>Couloir :</strong>
                    {{ $c->couloir }}
                </div>
            </div>
            @endforeach
        </div>
    @endsection