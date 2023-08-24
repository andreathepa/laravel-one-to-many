@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Dettaglio progetto</h1>
            </div>
            <div class="col-12">
                <h2>{{$project->title}}</h2>
                <img src="{{asset('storage/'.$project->image)}}">
                <p>Descrizione: {{$project->content}}</p>
                <p>Slug: {{$project->slug}}</p>

            </div>
        </div>
    </div>
@endsection