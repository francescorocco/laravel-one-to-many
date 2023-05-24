@extends('layouts.admin')



@section('content')
    <div class="card p-2 mb-2">

        <div class="card-body">
        <h5 class="card-title">{{$work->title}}</h5>
        <p class="card-text">{{$work->description}}</p>
        <p class="card-text">{{$work->slug}}</p>

        </div>

    </div>
    <a class="btn btn-warning" href="{{route('admin.works.index')}}">Torna alla lista</a>
@endsection