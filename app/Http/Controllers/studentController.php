<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class studentController extends Controller
{

	public function __invoke()
    {
    	$students = student::all();
    	return view('student', compact('students'));
    }

    public function index(){
    	$students = student::all();
    	return view('student', compact('students'));
    }

    public function add(){
    	return view('addstudent');
    }

    public function insert(Request $request){

	    $request->validate([
		    'name' => ['required'],
		    'contactNumber' => ['required'],
		    'address' => ['required'],
		]);

	    $student = new student;
		$student->name = $request->input('name');
		$student->contact = $request->input('contactNumber');
		$student->address = $request->input('address');
	    $student->save();

	    return redirect()->route('student.add')->with('success','Data Saved');
    }

    public function edit($id){
    	$student = student::find($id);
    	return view('editstudent', compact('student'));
    }

    public function update(Request $request, $id){

	    $request->validate([
		    'name' => ['required'],
		    'contactNumber' => ['required'],
		    'address' => ['required'],
		]);

	    $student = student::find($id);
	    $student->find($id);
		$student->name = $request->input('name');
		$student->contact = $request->input('contactNumber');
		$student->address = $request->input('address');
	    $student->save();

	    return redirect()->route('student')->with('success','Data updated');
    }

    public function delete($id){
       $student = student::find($id);
       $student->delete();

       return redirect()->route('student')->with('success','Data deleted');
    }
}
