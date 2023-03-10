<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TuitionRelatedInfo;
use Illuminate\Http\Request;

class TuitionRelatedInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'tuition_related_infos' => TuitionRelatedInfo::get()
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
        $tuition_related_info = new TuitionRelatedInfo();

        $tuition_related_info->job_id = $request->job_id;
        $tuition_related_info->post_date = $request->post_date;
        $tuition_related_info->tuition_type = $request->tuition_type;
        $tuition_related_info->city = $request->city;
        $tuition_related_info->location = $request->location;
        $tuition_related_info->category = $request->category;
        $tuition_related_info->class = $request->class;
        $tuition_related_info->subjects = $request->subjects;
        $tuition_related_info->student_gender = $request->student_gender;
        $tuition_related_info->tutor_gender = $request->tutor_gender;
        $tuition_related_info->address_details = $request->address_details;
        $tuition_related_info->institute_name = $request->institute_name;
        $tuition_related_info->number_of_students = $request->number_of_students;
        $tuition_related_info->days_in_week = $request->days_in_week;
        $tuition_related_info->prefer_time = $request->prefer_time;
        $tuition_related_info->hire_date = $request->hire_date;
        $tuition_related_info->salary = $request->salary;
        $tuition_related_info->ask_question = $request->ask_question;
        $tuition_related_info->job_description = $request->job_description;
        $tuition_related_info->job_status = $request->job_status;

        $job_board->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
