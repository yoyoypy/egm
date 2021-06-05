@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add New Article</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title" class="form-control-label">Article Title</label>
          <input  type="text"
                  name="title"
                  value="{{ old('title') }}"
                  class="form-control @error('title') is-invalid @enderror"/>
          @error('title') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Article Description</label>
            <textarea name="description"
                    class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Submit New Article
            </button>
            <a href="{{ route('blog.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
