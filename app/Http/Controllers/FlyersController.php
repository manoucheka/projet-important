<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Request;
use App\Flyer;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;

class FlyersController extends Controller
{
    //
	
	
	public function index()
    {
        
		
		$flyers=Flyer::all();
		return view('flyers.index',compact('flyers'));
		
		
		
		
    }
	
	
	
	public function create()
	{
		
		return view('flyers.create');
		
	}
	
	
	
	public function store(Request $request)
    {
		
		
		
        //
		//$this->validate()
		//Flyer::create($request->all());

       //flash( 'Flyer successfully created!');
       
       
		
		//return redirect()->back(); // temporaire
    }

	
	
	
}
