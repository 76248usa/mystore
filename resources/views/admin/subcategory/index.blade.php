
@extends('admin.layouts.main')

@section('content')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Cat ID</th>
                        <th>Subcategory</th>
                        <th>Category</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($subcategories)
                        @foreach($subcategories as $subcategory)
                      <tr>
                        <td><a href="#">{{ $subcategory->id }}</a></td>

                        <td>{{ $subcategory->name }}</td>
                        <td>{{ $subcategory->category->name }}</td>
                        <td>
                            <form action="{{ route('subcategory.destroy', [$subcategory->id]) }}" method="POST" method="POST" onsubmit="return confirmDelete()">@csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </td>
                        <td><a href="{{ route('subcategory.edit', [$subcategory->id]) }}" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      @endforeach
                      @endif


                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>

@endsection
