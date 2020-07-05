@extends('layouts.master')

@section('content')
    <h3>Buat Artikel</h3>
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" id="judul" placeholder="Judul artikel" name="judul">
        </div>
        <div class="form-group">
        <label for="isi">Isi :</label>
        <textarea class="form-control" id="isi" placeholder="Isi artikel" name="isi" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag :</label>
            <input type="text" class="form-control" id="tag" placeholder="Tag artikel" name="tag">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection