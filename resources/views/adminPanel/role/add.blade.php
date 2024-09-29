@extends('adminPanel.layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Add Role</h1>
    </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add New Role</h5>

                <form action="" method="post">
                    {{ csrf_field()}}
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Display Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" required class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" name="description" required class="form-control">
                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <div class="col-sm-12" style="text-align: right">
                      <a href="{{ url('adminPanel/role') }}" class="btn btn-danger">
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