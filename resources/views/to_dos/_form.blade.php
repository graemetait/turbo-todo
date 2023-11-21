<form method="post">
    @csrf

    <div class="input-group mb-3">
        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
            type="text" value="{{ old('description') }}">
        <button class="btn btn-primary" type="submit">Add to do</button>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

</form>
