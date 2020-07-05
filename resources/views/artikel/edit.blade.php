@extends('layouts.master')

@section('content')
    <h3>Edit Artikel</h3>
    <form action="/artikel/{{$artikel->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" id="judul" placeholder="Judul artikel" name="judul" value="{{ $artikel->judul }}">
        </div>
        <div class="form-group">
        <label for="isi">Isi :</label>
        <textarea class="form-control" id="isi" placeholder="Isi artikel" name="isi" rows="7">{{ $artikel->isi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag :</label>
            <input type="text" class="form-control" id="tag" placeholder="Tag artikel" name="tag" value="{{ $artikel->tag }}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection