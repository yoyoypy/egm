@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add Photo </strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('productvideo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="product_id" class="form-control-label">Product Name</label>
          <select name="product_id"
                  class="form-control @error('product_id') is-invalid @enderror">
              @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
              @endforeach
          </select>
          @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
          <label for="video" class="form-control-label">Product video</label>
          <input  type="file"
                  name="video"
                  value="{{ old('video') }}"
                  accept="video/mp4"
                  class="form-control @error('video') is-invalid @enderror"/>
          @error('video') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="text-right" style="padding-right: 8px">
            <div class="form-group" style="float: right">
                <button class="btn btn-primary btn-sm" type="submit">
                    Submit New Video
                </button>
                <a href="{{ route('productvideo.index')}}" class="btn btn-warning btn-sm">
                    Cancel
                </a>
            </div>
        </div>
      </form>
    </div>
  </div>
@endsection
