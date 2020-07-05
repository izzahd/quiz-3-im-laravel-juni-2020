@extends('layouts.master')

@section('content')
    <h3>Artikel</h3>
    <a href="/artikel/create" class="btn btn-sm btn-primary mb-3" role="button">Buat Artikel</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($artikel as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->isi}}</td>
                <td>
                    <a href="/artikel/{{ $item->id }}" class="btn btn-sm btn-primary mr-2" role="button">Lihat</a>
                    <a href="/artikel/{{ $item->id }}/edit" class="btn btn-sm btn-light mr-2" role="button">Ubah</a>
                    <form action="/artikel/{{ $item->id }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mr-2">Hapus</button>
                    </form>
                </td>
            </tr>              
            @endforeach
        </tbody>
    </table>   
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>    
@endpush