<?php

namespace App\Http\Controllers;
use DB;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{ 

    public function index2()
    {
        $student=DB::table('students')->orderBy('id' , 'DESC')->paginate(4);
        return view('admin.student.index2',compact('student'));
    }

    public function create()
    {
        {
            return view('admin.student.create');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'id' => 'required',
        ]);

        $data=array();
        $data['id'] = $request->id;
        $data['name']=$request->name;
        $data['dept']=$request->dept;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        DB::table('students')->insert($data);
       
        // Student::create($request->all());
        return redirect()->route('admin.index2')
                        ->with('success','Student info created successfully.');
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('admin.student.show',compact('student'));
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.student.edit',compact('student'));
    }

    public function update(Request $request,  $id)
    {
        $student = Student::find($request->id);
        $student->id = $request->id;
        $student->name=$request->name;
        $student->dept=$request->dept;
        $student->phone=$request->phone;
        $student->address=$request->address;
        $student->save();
        return redirect()->route('admin.index2')
                        ->with('success','Student info updated successfully');

    }

    public function destroy($id)
    {
        $student = Student::where('id',$id)->first();
        $student->delete();
        return redirect()->route('admin.index2')
                        ->with('success','Student Info Delected Successfully');
    }
}
