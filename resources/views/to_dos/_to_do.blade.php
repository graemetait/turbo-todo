<li id="@domid($toDo)">
    <span>{{ $toDo->description }}</span>
    <form action="/todos/{{ $toDo->id }}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</li>
<x-turbo-stream-from :source="$toDo" type="public" />
