@extends('admin.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <br><br>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-11">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/index2/store')}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Enter Your ID">
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="dept">Departement</label>
                    <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter Your Department">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
@endsection