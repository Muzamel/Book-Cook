<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\people;
use App\Ramzan_offer;
use App\Reservation;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class RestaurantsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$offer=Ramzan_offer::all();
		$restaurants=Restaurant::all();
        return view('restaurants.index')->with(compact('restaurants'))->with(compact('offer'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $restaurant=new restaurant();
        $restaurant->name=Input::get('name');
        $restaurant->address=Input::get('address');
        $restaurant->land_line_no=Input::get('land_no');
        $restaurant->mobile_no=Input::get('mob_no');
        $restaurant->save();
        return Redirect::to('admin_panel');


//
//		$people=new people();
//        $no_people=Input::get('no_people');
//        $people->no_of_people=$no_people;
//
//        $people->save();
//        return redirect('restaurants');



//        $people = new people();
//        $people->no_of_people= Input::get('no_people');
//        $people->date= Input::get('dates');
//
////        $people->project_start_date = Input::get('proj_start_date');
////        $people->project_end_date = Input::get('proj_end_date');
////        $people->project_description= Input::get('proj_description');
//        $people->save();
//        return redirect('restaurants');

//
//        $falak=new people();
//        $dates=Input::get('dates');
//        $falak->date=$dates;
//
//        $falak->save();
//        return redirect('restaurants');
//
//
//        $date=new people();
//        $date=Input::get('date');
//        $date->date=$date;
//        $date->save();
//        return redirect('restaurants');

//
//    $people = new people();
//
//        $people ->no_people = Input::get('no_people');
//        $project->project_start_date











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
    public function reservation_ajax()
    {
        extract($_POST);
        $reservation=new Reservation;
        $reservation -> date=$date;
        $reservation->save();
        print_r();exit;
    }
	public function destroy($id)
	{
		Restaurant::find($id)->delete();
        return Redirect::to('../../admin_panel');
	}

}
