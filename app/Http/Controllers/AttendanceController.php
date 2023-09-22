<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return response()->json(Attendance::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'course_id' => 'required',
            'status' => 'required|in:A,T,F',
            'date' => 'required|date',
        ]);

        $attendance = Attendance::create($request->all());

        return response()->json($attendance, 201);
    }

    public function show(Attendance $attendance)
    {
        return response()->json($attendance);
    }

    public function update(Request $request, Attendance $attendance)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'course_id' => 'required',
            'status' => 'required|in:A,T,F',
            'date' => 'required|date',
        ]);

        $attendance->update($request->all());

        return response()->json($attendance);
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return response()->json(null, 204);
    }
}
