<?php

use Illuminate\Support\Facades\Route;
use  app\Http\Controllers\TodoContoller;
use App\Models\Todo;

Route::get('/todo', function () {
    $todos = Todo::all();
    return view('todo', ['todos'=>$todos]);
});
Route::post('/todo', function () {
    $todo = new Todo;

    $todo->task = request('task');

    $todo->save();
    return redirect('/todo');
});
Route::delete('/todo/{id}', function ($id) {
    $todo = Todo::findOrFail($id);
    $todo->delete();
    return redirect('/todo');

});