@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Edit {{ $item->product_name }}</strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('productlist.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="category_id" class="form-control-label">Product Category</label>
              <select name="category_id"
                      value="{{ old('category_id') ? old('category_id') : $item->category_id}}"
                      class="form-control @error('category_id') is-invalid @enderror">
                  @foreach  ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->category }}</option>
                  @endforeach
              </select>
            @error('jobcategory_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
          <label for="product_name" class="form-control-label">Product Name</label>
          <input  type="text"
                  name="product_name"
                  value="{{ old('product_name') ? old('product_name') : $item->product_name }}"
                  class="form-control @error('product_name') is-invalid @enderror"/>
          @error('product_name') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="position" class="form-control-label">Product Position</label>
            <input  type="number"
                    name="position"
                    value="{{ old('position') ? old('position') : $item->position }}"
                    class="form-control @error('position') is-invalid @enderror"/>
            @error('position') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="product_description" class="form-control-label">Product Description</label>
            <textarea name="product_description"
                    class="ckeditor form-control @error('product_description') is-invalid @enderror">{{ old('product_description') ? old('product_description') : $item->product_description}}</textarea>
            @error('product_description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
    </div>
    <div class="text-right" style="padding-right: 8px">
        <div class="form-group" style="float: right">
            <button class="btn btn-primary btn-sm" type="submit">
                Edit {{ $item->product_name }}
            </button>
            <a href="{{ route('productlist.index')}}" class="btn btn-warning btn-sm">
                Cancel
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
