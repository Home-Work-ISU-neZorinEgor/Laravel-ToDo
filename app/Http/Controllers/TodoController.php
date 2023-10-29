<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
public function index()
{
    return view('welcome');
}


public function viewTodos()
    {
    $todos = [];



    return view('todos', ['todos' => $todos]);
}


public function viewTodosList()
{
    $todos = [];

    if (file_exists(storage_path('app/todos.json'))) {
        $todos = json_decode(file_get_contents(storage_path('app/todos.json')), true);
    }
    return view('view_todos', ['todos' => $todos]);
}

public function store(Request $request)
{
    // Валидация данных
    $this->validate($request, [
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    $newTodo = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ];

    // Чтение существующих задач из файла
    $todos = [];

    if (file_exists(storage_path('app/todos.json'))) {
        $todos = json_decode(file_get_contents(storage_path('app/todos.json')), true);
    }

    // Добавление новой задачи в массив задач
    $todos[] = $newTodo;

    // Сохранение обновленных задач в файл
    file_put_contents(storage_path('app/todos.json'), json_encode($todos));

    return redirect('/todos')->with('success', 'Задача успешно добавлена!');
}

}
