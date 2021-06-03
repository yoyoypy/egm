@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add Photo </strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('productgallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name" class="form-control-label">Product Name</label>
          <select name="products_id"
                  class="form-control @error('products_id') is-invalid @enderror">
              @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
              @endforeach
          </select>
          @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
          <label for="photo" class="form-control-label">Product Photo</label>
          <input  type="file"
                  name="photo"
                  value="{{ old('photo') }}"
                  accept="image/*"
                  required
                  class="form-control @error('photo') is-invalid @enderror"/>
          @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="text-right" style="padding-right: 8px">
            <div class="form-group" style="float: right">
                <button class="btn btn-primary btn-sm" type="submit">
                    Submit New Photo
                </button>
                <a href="{{ route('productgallery.index')}}" class="btn btn-warning btn-sm">
                    Cancel
                </a>
            </div>
        </div>
      </form>
    </div>
  </div>
@endsection
