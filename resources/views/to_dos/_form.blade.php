<form method="post">
    @csrf
    <input name="description" type="text" value="{{ old('description') }}">

    @error('description')
        <div class="alert alert-danger" style="color: red">{{ $message }}</div>
    @enderror
    <button type="submit">Create todo</button>
</form>
