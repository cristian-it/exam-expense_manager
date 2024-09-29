@extends('adminPanel.layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>User</h1>
    </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add New User</h5>

                <form action="" method="post">
                    {{ csrf_field()}}
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Display Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" required class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" required class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" required class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="role_id">
                        <option value="">--Select--</option>
                        @foreach ($getRole as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <div class="col-sm-12" style="text-align: right">
                      <a href="{{ url('adminPanel/user') }}" class="btn btn-danger">
                        Cancel
                      </a>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
  
                </form><!-- End General Form Elements -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
  

  
@endsection