<?php

class StudentsController extends \BaseController {

	/**
	 * Display a listing of students
	 *
	 * @return Response
	 */
	public function index()
	{
		$students = Student::all();

		return View::make('students.index', compact('students'));
	}

	/**
	 * Show the form for creating a new student
	 *
	 * @return Response
	 */
	public function create()
	{	
		$depts = DB::table('departments')->get();
		// return var_dump($depts);
		return View::make('students.create',compact('depts'));
	}

	/**
	 * Store a newly created student in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make($data = Input::all(), Student::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		$data = Input::all();
		Student::create($data);

		return Redirect::route('students.index');
	}

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = Student::findOrFail($id);

		return View::make('students.show', compact('student'));
	}

	/**
	 * Show the form for editing the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student = Student::find($id);

		return View::make('students.edit', compact('student'));
	}

	/**
	 * Update the specified student in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$student = Student::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$student->update($data);

		return Redirect::route('students.index');
	}

	/**
	 * Remove the specified student from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Student::destroy($id);

		return Redirect::route('students.index');
	}

}
