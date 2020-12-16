@extends('admin.layouts.main')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">


  <div class="row">
    <div class="col-lg-12 mb-4">
      <!-- Simple Tables -->
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
                @if($users)
                @foreach($users as $key=> $user)
              <tr>
                <td><a href="#">{{ $key+1 }}</a></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <form action="{{ route('user.destroy', [$user->id]) }}" method="POST" method="POST" onsubmit="return confirmDelete()">@csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>


              </tr>
              @endforeach
              @else

              <td>No users to display</td>

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
