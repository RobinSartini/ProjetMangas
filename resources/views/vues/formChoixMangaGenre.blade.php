@extends('layouts.master')
@section('content')
    <div>
        <h1 class="bvn"> Recherche Mangas par genre</h1>
    </div>
    {!! Form::open(array('route' => array ('postAfficheManga'),'method'=>'post')) !!}
    <div class="form-group">
        <label class="col-md-3 control-label" >Genre</label>
        <div class="col-md-3">
        <select class="form-control" name="cbGenres"  required>
            <option value="0">Selectionner un genre</option>
            @foreach($mesGenre as $unG){
            <option value="{{$unG->id_genre}}">{{$unG->lib_genre}}</option>
            }
            @endforeach
        </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <button type="submit" class="btn btn-default btn-primary">
                <span class="glyphicon glyphicon-ok"></span>Valider
            </button>
            &nbsp;
            <button type="button" class="btn btn-default btn-primary" onclick="javascript:if(confirm('vous êtes sûr?'))window.location='{{url('/')}}';">
                <span class="glyphicon glyphicon-remove"></span> Annuler</button>
        </div>
    </div>
@stop
