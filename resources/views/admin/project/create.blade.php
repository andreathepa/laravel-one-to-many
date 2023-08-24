@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi un nuovo progetto</h1>

            </div>
            <div class="col-12">
                <form action="{{ route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" value="{{ old ('title')}}">

                    </div>
                    <div>
                        <label class="contol-lable">Immagine</label>
                        <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image">
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Contenuto</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Inserisci contenuto">{{ old('content')}}</textarea>

                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection