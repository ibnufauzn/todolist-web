@extends('template')
@section('judul', 'Todolist | All Tasks')
@section('content')
    <div class="my-3">
        <h2 class="text-center">Kegiatan Selesai</h2>
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
                    <a href="/finish/delete/{{ $task->id }}" class="btn btn-outline-danger btn-sm rounded-0 border-0">Hapus</a>
                </div>
            </div>
        </div>
    @endforeach
    {{ $tasks->links() }}
@endsection
