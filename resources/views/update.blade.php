@extends('template')
@section('title', 'Tambah Data')
@section('content')
    <h2 class="mt-4 text-center">Update Data</h2>
    <form action="/update/action/{{ $task->id }}" method="POST">
        @csrf
        @method('put')
        <label class="mb-2" for="nama">Nama Kegiatan</label>
        <input class="border border-dark border-opacity-25 form-control mb-3" type="text" id="text" value="{{ $task->nama }}" name="nama">

        <label class="mb-2" for="deskripsi">Deskripsi Kegiatan</label>
        <textarea class="border border-dark border-opacity-25 form-control mb-3" id="text" rows="4" name="deskripsi" style="resize: none;">{{ $task->deskripsi }}</textarea>

        <button class="btn btn-dark" type="submit">Submit Data</button>
    </form>
@endsection
