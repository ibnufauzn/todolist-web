@extends('template')
@section('judul', 'Todolist | All Tasks')
@section('content')
    <div class="my-3">
        <h2 class="text-center">Daftar Kegiatan</h2>
    </div>

    @foreach($tasks as $task)
    <div class="card m-auto my-3">
        <h5 class="card-header py-2"> Kegiatan #{{ $loop->iteration }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $task->nama }}</h5>
            <p class="card-text">{{ $task->deskripsi }}</p>
        </div>
        <div class="card-footer p-0">
            <div class="btn-group col-12">
                <a href="/update/{{ $task->id }}" class="text-secondary btn btn-outline-warning btn-sm rounded-0">Ubah Data</a>
                <a href="/delete/{{ $task->id }}" class="btn btn-outline-danger btn-sm rounded-0">Hapus</a>
                <a href="/finish/{{ $task->id }}" class="btn btn-outline-success btn-sm rounded-0">Selesai</a>
            </div>
        </div>
    </div>
    @endforeach
    {{ $tasks->links() }}
@endsection
