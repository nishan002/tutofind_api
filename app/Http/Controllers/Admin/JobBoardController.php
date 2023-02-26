<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'job_boards' => JobBoard::get()
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
        $job_board = new JobBoard();

        $job_board->job_id = $request->job_id;
        $job_board->post_date = $request->post_date;
        $job_board->tuition_type = $request->tuition_type;
        $job_board->city = $request->city;
        $job_board->location = $request->location;
        $job_board->category = $request->category;
        $job_board->class = $request->class;
        $job_board->subjects = $request->subjects;
        $job_board->student_gender = $request->student_gender;
        $job_board->tutor_gender = $request->tutor_gender;
        $job_board->address_details = $request->address_details;
        $job_board->institute_name = $request->institute_name;
        $job_board->number_of_students = $request->number_of_students;
        $job_board->days_in_week = $request->days_in_week;
        $job_board->prefer_time = $request->prefer_time;
        $job_board->hire_date = $request->hire_date;
        $job_board->salary = $request->salary;
        $job_board->ask_question = $request->ask_question;
        $job_board->job_description = $request->job_description;
        $job_board->job_status = $request->job_status;

        $job_board->save();

        return response()->json([
            'message' => 'Job Board Created Successfully',
            'status' => 'success',
            'data' => $job_board,
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
        $job_board = JobBoard::findOrFail($id);

        $job_board->job_id = $request->job_id;
        $job_board->post_date = $request->post_date;
        $job_board->tuition_type = $request->tuition_type;
        $job_board->city = $request->city;
        $job_board->location = $request->location;
        $job_board->category = $request->category;
        $job_board->class = $request->class;
        $job_board->subjects = $request->subjects;
        $job_board->student_gender = $request->student_gender;
        $job_board->tutor_gender = $request->tutor_gender;
        $job_board->address_details = $request->address_details;
        $job_board->institute_name = $request->institute_name;
        $job_board->number_of_students = $request->number_of_students;
        $job_board->days_in_week = $request->days_in_week;
        $job_board->prefer_time = $request->prefer_time;
        $job_board->hire_date = $request->hire_date;
        $job_board->salary = $request->salary;
        $job_board->ask_question = $request->ask_question;
        $job_board->job_description = $request->job_description;
        $job_board->job_status = $request->job_status;

        $job_board->update();

        return response()->json([
            'message' => 'Job Board Updated Successfully',
            'status' => 'success',
            'data' => $job_board,
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
        $job_board = JobBoard::findOrFail($id);

        $job_board->delete();

        return response()->json([
            'message' => 'Job Board Deleted Successfully',
            'status' => 'success',
        ]);

    }
}
