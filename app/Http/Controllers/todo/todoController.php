<?php

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $max_data = 10;
        if (request('search')) {
            # code...
            $data = todo::where('task','like','%'.request('search').'%')->paginate($max_data)->withQueryString();
        }else{
            $data = todo::orderBy('task','asc')->paginate($max_data);
        }
        return view("todo.app",compact('data'),['title'=>'Todo List']);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|min:3|max:50'
        ],[
            'task.required'=>'Isian task wajib diisikan',
            'task.min'=>'minimal isian adalah 3 karakter',
            'task.max'=>'minimal isian adalah 50 karakter'
        ]);

        $data = [
            'task' =>$request->input('task')
        ];
        todo::create($data);

        return redirect()->route('todo')->with('success','berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'task' => 'required|min:3|max:50'
        ],[
            'task.required'=>'Isian task wajib diisikan',
            'task.min'=>'minimal isian adalah 3 karakter',
            'task.max'=>'minimal isian adalah 50 karakter'
        ]);
        $data = [
            'task' =>$request->input('task'),
            'is_done' =>$request->input('is_done')
        ];
        todo::where('id',$id)->update($data);
        return redirect()->route('todo')->with('success','Berhasil update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        todo::where('id', $id)->delete();
        return redirect()->route('todo')->with('success','Berhasil hapus data');

    }
}
