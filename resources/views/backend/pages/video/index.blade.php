@extends('backend.layouts.default')

@section('content')
<div class="orders">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('productvideo.create') }}" class="btn btn-info btn-sm" style="float: right">
                    <i class="fa fa-pencil">Add New Video</i>
                  </a>
                <h4 class="box-title">Product Video Lists</h4>
            </div>
        <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Video</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->product->product_name }}</td>
                      <td>
                        <video width="200" height="150" controls>
                            <source src="{{ url($item->video) }}" type="video/mp4">
                            No video support.
                        </video>
                      </td>
                      <td>
                        <form action="{{ route('productvideo.destroy', $item->id) }}"
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
                          No data found
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
