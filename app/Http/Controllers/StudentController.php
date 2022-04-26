<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return Student::all();
    }

    public function create(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');

        $post = [
            'name' => $name,
            'address' => $address,
        ];

        Student::create($post);

        return "Berhasil menyimpan data";
    }

    public function update(Request $request, $id){
        $name = $request->input('name');
        $address = $request->input('address');

        $post = [
            'name' => $name,
            'address' => $address,
        ];

        Student::where('student_id', $id)->update($post);
        return "Data berhasil di update";
    }

    public function delete($id){
        Student::where('student_id',$id)->delete();
        return "Data berhasil di delete";
    }
}
