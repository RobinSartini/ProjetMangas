@extends('layouts.master')
@section('content')
    <div>
        <br> <br>
        <br> <br>
        <div class="container">
            <div class="blanc">
                <h1>Modification d'un manga</h1>
            </div>
            <div class="well">
                {!!  Form::open(array('route' => array('/postModifierManga', $unManga->id_manga), 'method' => 'post')) !!}
                <div class="col-md-12 well well-sm">
                    <div class="form_group">
                        <label class="col-md-3 control-label">Titre :</label>
                        <div class="col-md-3">
                            <input type="hidden" name="id_manga" value="{{$unManga->id_manga ?? ''}} "/>
                            <input type="text" name="titre" value="{{$unManga->titre ?? ''}}" class="form-control" required autofocus />
                        </div>
                    </div>
                    <BR> <BR>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Genre :</label>
                        <div class="col-md-3">
                            <select class="form-control" name="cbGenres" requires>
                                <OPTION VALUE=0>Sélectionner un genre</OPTION>
                                @foreach ($mesGenres as $unG)
                                    selected=""
                                    <option value="{{$unG->id_genre}}"
                                            @if ($unG->id_genre == $unManga->id_genre )
                                                selected="selected"
                                        @endif
                                    > {{ $unG->lib_genre }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <BR> <BR>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Couverture :</label>
                        <div class="col-md-3">
                            <input type="hidden" name="MAX_FILE_SIZE" value="204800" />
                            <input name="couverture" type="file" value="{{$unManga->couverture}}"
                                   class="btn btn-default pull-left"/>
                        </div>
                    </div>
                    <BR> <BR>

                <div class="form-group">
                    <label class="col-md-3 control-label">Scenariste :</label>
                    <div class="col-md-3">
                        <select class="form-control" name="cbScenariste" requires>
                            <OPTION VALUE=0>Sélectionner un Scenariste</OPTION>
                            @foreach ($mesScenaristes as $unS)
                                selected=""
                                <option value="{{$unS->id_scenariste}}"
                                        @if ($unS->id_scenariste == $unManga->id_scenariste )
                                            selected="selected"
                                    @endif
                                > {{ $unS->nom_scenariste }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR> <BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Dessinateur :</label>
                    <div class="col-md-3">
                        <select class="form-control" name="cbDessinateur" requires>
                            <OPTION VALUE=0>Sélectionner un Dessinateur</OPTION>
                            @foreach ($mesDessinateurs as $unD)
                                selected=""
                                <option value="{{$unD->id_dessinateur}}"
                                        @if ($unD->id_dessinateur == $unManga->id_dessinateur )
                                            selected="selected"
                                    @endif
                                > {{ $unD->nom_dessinateur }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR> <BR>
                <div class="form-group">
                    <label class="col-md-3 control-label">Prix :</label>
                    <div class="col-md-3">
                        <input type="text" name="prix" value="{{$unManga->prix ?? ''}}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                        &nbsp;
                        <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{ url('/pageMenu') }}';}">
                            <span class="glyphicon glyphicon-remove"></span>Annuler </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
