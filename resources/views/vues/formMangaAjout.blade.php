@extends('layouts.master')
@section('content')
    <div>
        <br><br><br><br>
        <div class="container">
            <div class="blanc">
                <h1>Liste des mangas d'un genre</h1>
            </div>
            <div class="well">
                {!! Form::open(['url' => 'ajoutManga', 'files' => true]) !!}
                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Titre : </label>
                        <input type="text" name="titre" value="Ajout Manga" class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Genre : </label>
                    <div class="col-md-3">
                        <select class="form-control" name="cbGenres" required>
                            <OPTION VALUE="0">Sélectionner un genre</OPTION>
                            @foreach ($mesGenres as $unG)
                                {
                                <OPTION VALUE =" {{ $unG->id_genre }}"> {{ $unG->lib_genre }}</OPTION>
                                }
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR><BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Couverture : </label>
                    <div class="col-md-3">
                        <input type="hidden" name="MAX_FILE_SIZE" value="204800" />
                        <input name="couverture" type="file" class="btn btn-default pull-left"/>
                    </div>
                </div>
                <BR><BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Dessinateur : </label>
                    <div class="col-md-3">
                        <select class="form-control" name="cbDessinateur" required>
                            <OPTION VALUE="0">Sélectionner un Dessinateur</OPTION>
                            @foreach ($mesDessinateurs as $unD)
                                {
                                <OPTION VALUE =" {{ $unD->id_dessinateur }}"> {{ $unD->nom_dessinateur }}</OPTION>
                                }
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR><BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Scénariste : </label>
                    <div class="col-md-3">
                        <select class="form-control" name="cdScenariste" required>
                            <OPTION VALUE="0">Sélectionner un Scénariste</OPTION>
                            @foreach ($mesScenaristes as $unS)
                                {
                                <OPTION VALUE =" {{ $unS->id_scenariste }}"> {{ $unS->nom_scenariste }}</OPTION>
                                }
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR><BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Prix : </label>
                    <div class="col-md-3">
                        <input type="text" name="prix" value="0" class="form-control" >
                    </div>
                </div>
                <BR><BR><BR>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                        &nbsp;

                        <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('/pageMenu')}}';}">
                            <span class="glyphicon glyphicon-remove"></span>Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
