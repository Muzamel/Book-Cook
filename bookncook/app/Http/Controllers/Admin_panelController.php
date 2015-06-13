<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin_panel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Restaurant;


class Admin_panelController extends Controller {

	/**
	 * Display a listing of the resource.
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$restaurants = Restaurant::all();
        return View::make('admin_panel.index', compact('restaurants'));
            //return view('admin_panel.index');


       // return view('books.create');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin_panel.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

        $restaurant = new restaurant();
        $restaurant->name= Input::get('addrestaurant');
        //$restaurant->date= Input::get('dates');

//        $people->project_start_date = Input::get('proj_start_date');
//        $people->project_end_date = Input::get('proj_end_date');
//   $people->project_description= Input::get('proj_description');
        $restaurant->save();
        return redirect('index');






	}

	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
