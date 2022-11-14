<?php

namespace App\Http\Livewire;

use App\Models\TodoList as ModelsTodoList;
use Livewire\Component;
use Illuminate\Support\Str;

class TodoList extends Component
{
    public $todos = [];
    public $todo = '';

    public function mount()
    {
        $this->getAllTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        if (strlen(Str::of($this->todo)->trim()) < 1) {
            return;
        }

        ModelsTodoList::create([
            'description' => $this->todo
        ]);

        $this->getAllTodos();

        $this->todo = '';
    }

    public function updateTodo($id)
    {
        $currentTodo = ModelsTodoList::find($id);
        if (!$currentTodo) {
            return;
        }

        $currentTodo->completed = !$currentTodo->completed;
        $currentTodo->save();
        $this->getAllTodos();
    }

    public function deleteTodo($id)
    {
        $currentTodo = ModelsTodoList::find($id);
        if (!$currentTodo) {
            return;
        }

        $currentTodo->delete();
        $this->getAllTodos();
    }

    private function getAllTodos()
    {
        return $this->todos = ModelsTodoList::all();
    }
}
