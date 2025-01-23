<div class="p-4 border-gray-500 border-4 rounded bg-cyan-950 text-white">
    <div>
        <input wire:model="newTodo" class="bg-gray-400 text-black" type="text" >
        <button wire:click="add()">Toevoegen</button>
    </div>
    <div class="mt-4">
        @foreach($todoItems as $i => $todoItem)
        <div>
            <input type="checkbox">
            <span>{{$todoItem['title']}}</span>
            <button wire:click="delete({{$todoItem['id']}})">Verwijderen</button>
        </div>
        @endforeach

    </div>
</div>
