<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TaskController extends Controller
{
    /** Menampilkan Seluruh Data */
    public function index() {
        $userId = Auth::user()->id;
        $tasks = Task::with('user')
                 ->where('user_id', '=', $userId)
                 ->where('status', '=','Belum Selesai')
                 ->orderBy('id', 'DESC')
                 ->paginate(3);
        return view('index', ['tasks' => $tasks]);
    }

    public function addTask() {
        return view('/addtask');
    }

    public function addTaskAction(Request $request) {
        $req = $request->all();
        $req['user_id'] = Auth::user()->id;
        $req['status'] = 'Belum Selesai';
        Task::create($req);

        Alert::toast('Kegiatan Berhasil Ditambahkan', 'success');
        return redirect('/');
    }

    public function update($id) {
        $task = Task::findOrFail($id);
        return view('update', ['task' => $task]);
    }

    public function updateAction(Request $request, $id) {
        $task = Task::with('user')->findOrFail($id);

        $req = $request->all();
        $req['user_id'] = Auth::user()->id;

        $task->update($req);

        Alert::toast('Kegiatan Berhasil Diubah', 'success');
        return redirect('/');
    }

    public function delete($id){
        Task::findOrFail($id)->delete();
        Alert::toast('Kegiatan Telah Dihapus', 'success');
        return redirect('/');
    }

    public function done(){
        $userId = Auth::user()->id;
        $tasks = Task::with('user')
            ->where('user_id', '=', $userId)
            ->where('status', '=','Selesai')
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return view('finish', ['tasks' => $tasks]);
    }

    public function doneAction($id){
        $task = Task::findOrFail($id);
        $task->status = 'Selesai';
        $task->save();

        Alert::toast('Kegiatan Telah Terlaksana', 'success');
        return redirect('/');
    }

    public function deleteDone($id){
        Task::findOrFail($id)
              ->where('status', '=', 'Selesai')
              ->delete();
        Alert::toast('Kegiatan Telah Dihapus', 'success');
        return redirect('/finish');
    }
}
