<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'student_classes' => StudentClass::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_class = new StudentClass();

        $student_class->name = $request->name;

        $student_class->save();

        return response()->json([
            'message' => 'Class Created Successfully',
            'status' => 'success',
            'data' => $student_class,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student_class = StudentClass::findOrFail($id);

        $student_class->name = $request->name;

        $student_class->update();

        return response()->json([
            'message' => 'Class Updated Successfully',
            'status' => 'success',
            'data' => $student_class,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_class = StudentClass::findOrFail($id);

        $student_class->delete();

        return response()->json([
            'message' => 'Class Deleted Successfully',
            'status' => 'success',
        ]);

    }
}
