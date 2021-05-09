@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <br><br>
    <section class="content">
      <section>
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
     </section>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header ">
                <h3 class="card-title ">Student Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Serial no</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Phone No</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach($student as $all_student)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$all_student->id}}</td>
                    <td>{{$all_student->name}}</td>
                    <td>{{$all_student->dept}}</td>
                    <td>{{$all_student->phone}}</td>
                    <td>{{$all_student->address}}</td>
                    <td> 
                    <form action="{{url('/index2/destroy', $all_student->id)}}">
                    <a class="btn btn-secondary" href="{{route('admin.show' , $all_student->id)}}">Show</a>
                    <a class="btn btn-secondary" href="{{route('admin.edit' , $all_student->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>    
      </div> 
      {!! $student->links() !!}
    </section>
  </div> 
@endsection