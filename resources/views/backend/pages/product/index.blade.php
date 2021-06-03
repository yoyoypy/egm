@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('productlist.create') }}" class="btn btn-info btn-sm" style="float: right">
                <i class="fa fa-pencil">Add New Product</i>
              </a>
            <h4 class="box-title">Product Lists</h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->product_name }}</td>
                      <td>{{ $item->Category->category }}</td>
                      <td>
                         <a href="{{ route('productlist.gallery', $item->id) }}" class="btn btn-info btn-sm">
                         {{-- <a href="#" class="btn btn-info btn-sm"> --}}
                          <i class="fa fa-picture-o"></i>
                            </a>
                        <a href="{{ route('productlist.edit', $item->id) }}" class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('productlist.destroy', $item->id) }}"
                              method="post"
                              class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @empty
                      <tr>
                        <td colspan="6" class="text-center p-5">
                          No Data Found
                        </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
