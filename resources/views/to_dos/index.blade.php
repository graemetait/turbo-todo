<x-app-layout>
    <x-turbo-frame id="todo-create">
        @include('to_dos._form')
    </x-turbo-frame>

    <p id="todo-count">{{ $todosTotal }}</p>

    <ul id="to_dos">
        @each('to_dos._to_do', $toDos, 'toDo')
    </ul>
</x-app-layout>
