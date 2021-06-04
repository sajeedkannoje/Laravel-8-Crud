<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CrudController extends Controller
{
    //
    function showData()
    {
        $all_Student = Student::all();

        return view("welcome", [
            "students" => $all_Student
        ]);
    }

    function Create()
    {

        return view("Create");
    }
    function save(Request $req)
    {
        $student = new Student();

        // echo $req;
        // echo $req->name;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;

        $student->save();

        $req->session()->flash("success", "student record add successfully");

        return redirect("Create");
    }

    function deleteData($id)
    {
        $student = Student::find($id);

        $student->delete();
       session()->flash("success", "student record DELETED successfully");
       return redirect("/");

        
    }
    function editData($id){

       
        $student = Student::find($id);

        return view("edit",[
            "student" => $student
        ]);

    }

    function updateData(Request $request){

        $student_update = Student::find($request->id);
        $student_update -> name = $request->name;
        $student_update -> email = $request->email;
        $student_update -> phone = $request->phone;
        $student_update -> save();
        session()->flash("success", "student record UPDATED successfully");
       return redirect("/");



        
    }
}
