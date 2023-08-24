@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Modifica progetto</h1>

            </div>
            <div class="col-12">
                <form action="{{ route('admin.project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" value="{{ old ('title')}} {{$project->title}}">

                    </div>
                    <div class="form-group mt-4">
                        <div class="col-12">
                            <img src="{{ asset('storage/'.$project->image) }}">
                        </div>
                        <div>
                            <label class="contol-lable">Immagine</label>
                            <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image">
                        </div>
                        <label class="control-label">Contenuto</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Inserisci contenuto">{{$project->content }}</textarea>

                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection