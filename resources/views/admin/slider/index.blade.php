
@extends('admin.layouts.main')

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sliders</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Slider Images</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12 mb-4">
      <!-- Simple Tables -->
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Slider Images</h6>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>Cat ID</th>
                <th>Picture</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @if($sliders)
                @foreach($sliders as $key=> $slider)
              <tr>
                <td><a href="#">{{ $key+1 }}</a></td>
                <td><img src="{{Storage::url($slider->image)}}" width="100"></td>
                <td>

                    <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" onsubmit="return confirmDelete()">@method('DELETE')
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>



                </td>

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
