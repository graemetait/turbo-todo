<li id="@domid($toDo)" class="list-group-item d-flex align-items-center">
    <div>
        <input class="form-check-input me-1" type="checkbox" value="" id="item-{{ $toDo->id }}">
        <label class="form-check-label" for="item-{{ $toDo->id }}">{{ $toDo->description }}</label>
    </div>

    <form action="/todos/{{ $toDo->id }}" method="post" style="display: inline" class="ms-auto">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link">Delete</button>
    </form>
</li>
<x-turbo-stream-from :source="$toDo" type="public" />
