@extends('admin.master')
@section('content')
<div class="wrapper">
    <br><br>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Single Student Detail</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> ID</strong>
                  {{$student->id}}

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Name :</strong>
                {{$student->name}}
                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Department:</strong>
                 {{$student->dept}}
                  <hr>

                <strong><i class="far fa-file-alt mr-1"></i>Phone no:</strong>
                  {{$student->phone}}
                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i>Address:</strong>
                  {{$student->address}}

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

@endsection

