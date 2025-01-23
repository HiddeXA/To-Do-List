<?php

namespace App\Livewire;

use App\Models\ToDoItem;
use Livewire\Component;

class TodoItemsList extends Component
{
    public array $todoItems;
    public string $newTodo;

    public function mount()
    {
        $this->todoItems = TodoItem::all()->toArray();
        $this->newTodo = '';
    }

    public function render()
    {
        return view('livewire.todo-items-list');
    }

    public function add() {
        $this->validate([
            'newTodo' => 'required|min:3'
        ]);

        $todoItem = new TodoItem([
            'title' => $this->newTodo,
        ]);
        $todoItem->save();

        $this->todoItems[] = $todoItem->toArray();
        $this->newTodo = '';
    }

    public function delete($id) {
        $todoItem = TodoItem::find($id);
        $todoItem->delete();
        $this->todoItems = array_filter($this->todoItems, function($item) use ($id) {
            return $item['id'] !== $id;
        });
    }
}
