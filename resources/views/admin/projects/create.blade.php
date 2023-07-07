@extends('admin.layouts.base')


@section('contents')
<form method="POST" action="{{ route('admin.projects.store')}}" novalidate>
    @csrf

    <div class="mb-3">
        <label for="titolo" class="form-label">Title</label>
        <input
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title"
            name="title"
            value="{{ old('title') }}"
        >
        <div class="invalid-feedback">
            @error('title') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="url_image" class="form-label">Image</label>
        <input
            type="url"
            class="form-control @error('url_image') is-invalid @enderror"
            id="url_image"
            name="url_image"
            value="{{ old('url_image') }}"
        >
        <div class="invalid-feedback">
            @error('url_image') {{ $message }} @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">content</label>
        <textarea
            class="form-control @error('content') is-invalid @enderror"
            id="content"
            rows="3"
            name="content">{{ old('content') }}</textarea>
        <div class="invalid-feedback">
            @error('content') {{ $message }} @enderror
        </div>
    </div>

    <button class="btn btn-primary">Save</button>
</form>
@endsection