<li id="@domid($toDo)" class="list-group-item d-flex align-items-center">
    <div>
        <form action="/todos/{{ $toDo->id }}" method="post">
            @method('PATCH')
            <input class="form-check-input me-1" type="checkbox" value="1" name="complete" id="item-{{ $toDo->id }}"
                onChange="this.form.requestSubmit()" @checked(old('complete', $toDo->complete))>
            <label class="form-check-label" for="item-{{ $toDo->id }}">{{ $toDo->description }}</label>
        </form>
    </div>

    <form action="/todos/{{ $toDo->id }}" method="post" class="ms-auto">
        @method('DELETE')
        <button type="submit" class="btn btn-link">Delete</button>
    </form>
</li>
