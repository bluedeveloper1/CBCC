<?php

namespace App\Http\Controllers;
use App\ministries;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ministries(){
        //Read all ministries in database
        $ministries = Ministries::all();
        return view('main/ministries' , ['ministries' => $ministries]);   
    }

    //Insert ministry to database
    public function add_ministry(Request $request){
        $this->validate($request,[
            'ministry-name' => 'required',
            'ministry-funds' => 'required'
        ]);

        //Add ministry to database (calling the model)
        $ministry = new ministries;
        $ministry->name = $request->input('ministry-name');
        $ministry->type = $request->get('ministry-type');
        $ministry->funds = $request->input('ministry-funds');
        $ministry->save();

        return redirect('main/ministries')->with('info','Ministry Added Successfully');
    }

    //Delete Ministry
    public function delete_ministry($id){
        ministries::where('id', $id)->delete(); //if id in database == selected id? then delete
        return redirect('main/ministries')->with('info','Ministry Deleted Successfully');
    }
    
    public function destroy($id){
        echo 'delete data';
    }
    //update
    public function update(Request $request, $id)
    {
        // $ministry = ministries::findOrFail($request->id);
        // $ministry->update($request->all());

        return back();
    }
    //Show profile Ministry
    public function show_profile_ministry($id){
        $ministry = ministries::find($id);//find the id
        return view('main/ministries-profile' , ['ministries' => $ministry]); 

    }
}
