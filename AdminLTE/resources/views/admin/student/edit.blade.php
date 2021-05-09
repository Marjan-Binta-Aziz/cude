@extends('admin.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <br><br>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-11">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Student's Information</h3>
              </div>
          
              <form action="{{url('/index2/update' , $student->id)}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Enter Your ID" value="{{$student->id}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Edit Your Name" value="{{$student->name}}">
                  </div>
                  <div class="form-group">
                    <label for="dept">Departement</label>
                    <input type="text" class="form-control" id="dept" name="dept" placeholder="Edit Your Department" value="{{$student->dept}}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Edit Your Phone Number" value="{{$student->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Edit Your Address" value="{{$student->address}}">
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