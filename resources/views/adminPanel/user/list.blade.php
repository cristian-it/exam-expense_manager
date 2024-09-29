@extends('adminPanel.layouts.app')

@section('content')
  
    <div class="pagetitle">
        <h1>Users</h1>
    </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            @include('_message')

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List</h5>
  
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email Address</th>
                      <th scope="col">Role</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($getRecord as $value)

                    <tr>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->role_name }}</td>
                      {{-- <td>{{ $value->created_at }}</td> --}}
                      <td>{{ $value->created_at ? $value->created_at->format('Y-m-d') : '' }}</td>

                      <td>
                        <a href="{{ url('adminPanel/user/edit/' .$value->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <a href="{{ url('adminPanel/user/delete/' .$value->id) }}" class="btn btn-danger btn-sm">delete</a>
                      </td>
                    </tr>

                    @endforeach


                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
          </div>
        </div>
      </section>

      <div>
        <a href="{{ url('adminPanel/user/add')}}" style="float: right;" class="btn btn-success">Add User</a>
      </div>

  
@endsection