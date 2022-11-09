@extends('layouts.master')
@section('content')
    <div>
        <br> <br>
        <br> <br>
        <div class="container">
            <div class="blanc">
                <h1>Liste des Mangas</h1>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Genre</th>
                    <th>Dessinateur</th>
                    <th>Scénariste</th>
                    <th>Prix</th>
                    <th>Couverture</th>
                    <th>Modification </th>
                </tr>
                </thead>
                @foreach($mesMangas as $unManga)
                    <tr>
                        <td> {{ $unManga->id_manga }}  </td>
                        <td> {{ $unManga->titre }} </td>
                        <td> {{ $unManga->lib_genre }}</td>
                        <td>
                            {{ $unManga->nom_dessinateur }}
                        </td>
                        <td>
                            {{$unManga->nom_scenariste}}
                        </td>
                        <td> {{ $unManga->prix }} </td>
                        <td class="col-xs-2">
                            <img class="img-rounded" src="{{ '/rsart/ProjetMangas/public/assets/images/'.$unManga->couverture }}" style="max-height: 150px;"/>
                        </td>
                        <td style="text-align:center;"><a href="{{ url('/modifierManga') }}/{{ $unManga->id_manga }}">
                                <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier"></span></a></td>
                    </tr>
                @endforeach
                <BR> <BR>
            </table>
        </div>
    </div>
@stop


