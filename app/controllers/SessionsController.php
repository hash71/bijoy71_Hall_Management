<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	 
	public function login()
	{
		if (Auth::check()){
			
			return Redirect::to('index');
		}
		return View::make('login');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function login_check()
	{
		if (Auth::attempt(Input::only('user_name','password'))){
			
			return Redirect::to('index');
		}
		else{
			return Redirect::to('login');			
		}	
	}

	public function signup_check()
	{

		if (Auth::check()){			
			return Redirect::to('/index');
		}

		DB::table('user')->insert(['user_name'=>Input::get('user_name'),'mail'=>Input::get('mail'),'password'=>Hash::make(Input::get('password'))]);

		return Redirect::to('login');			
		
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sessions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		// return Redirect::route('sessions.create');
		return Redirect::to('login');
	}

}