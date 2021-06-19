@extends('backend.layouts.default')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Brochure Barang <small>"{{ $product->product_name }}"</small></h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Barang</th>
                      <th>Brochure</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product->product_name }}</td>
                        <td>
                          <img src="{{ url($item->brochure) }}" alt="" />
                        </td>
                        <td>
                          <form action="{{ route('brochure.destroy', $item->id) }}"
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
                            No Brochure Found
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
