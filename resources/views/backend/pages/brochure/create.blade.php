@extends('backend.layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Add Photo </strong>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('brochure.store') }}" method="POST" enctype="multipart/form-data">
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
          <label for="brochure" class="form-control-label">Product Brochure</label>
          <input  type="file"
                  name="brochure"
                  value="{{ old('brochure') }}"
                  class="form-control @error('brochure') is-invalid @enderror"/>
          @error('brochure') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="text-right" style="padding-right: 8px">
            <div class="form-group" style="float: right">
                <button class="btn btn-primary btn-sm" type="submit">
                    Submit New Brochure
                </button>
                <a href="{{ route('brochure.index')}}" class="btn btn-warning btn-sm">
                    Cancel
                </a>
            </div>
        </div>
      </form>
    </div>
  </div>
@endsection
