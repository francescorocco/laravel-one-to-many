@extends('layouts.admin')

@section('content')

    <form method="POST" action="{{ route('admin.works.update', ['work' => $work->id]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title', $work->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggi</label>
            <input type="text" class="form-control @error('languages') is-invalid @enderror " id="languages" name="languages" value="{{old('languages', $work->languages)}}">
            @error('languages')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Testo dell'articolo</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('content', $work->description)}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>

@endsection