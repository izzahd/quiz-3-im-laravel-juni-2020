@extends('layouts.master')

@section('content')
<a href="/artikel" class="btn btn-sm btn-primary mb-3" role="button">Kembali</a>
    <div class="card">
        <div class="card-body">
            <h3 class="card-text"><b>Judul : {{ $artikel->judul }}</b></h3>
            <p class="card-text" ><i>Slug : {{$artikel->slug}}</i> </p>
            <p class="card-text">{{ $artikel->isi }}</p>
            @foreach ($tags as $item)
            <a href="#" class="btn btn-sm btn-primary mr-2" role="button">{{$item}}</a>
            @endforeach
        </div>
    </div>
    
@endsection