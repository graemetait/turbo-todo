<x-app-layout>
    <x-turbo-frame id="todo-create">
        @include('to_dos._form')
    </x-turbo-frame>

    @include('to_dos._count')

    <ul id="to_dos" class="list-group list-group-flush">
        @each('to_dos._to_do', $toDos, 'toDo')
    </ul>

    <x-turbo-stream-from source="general" type="public" />

</x-app-layout>
