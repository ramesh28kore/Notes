<form action="{{route('notes.update',[$note])}}" method="POST">
    @method('PUT')
    @csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $note->title ) }} " />
    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $note->description ) }}</textarea>
    @error('body')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
<button class="btn btn-primary float-right">Update Notes</button>

</form>


</div>