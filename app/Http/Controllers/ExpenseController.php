<?php

namespace App\Http\Controllers;

use App\ministries;
use App\expenses;

use Illuminate\Http\Request;

class ExpenseController extends Controller
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


//EXPENSES FUNCTIONS
    
    
 //Show list of expenses in Expenses Home
    public function expenses(){
       
        //Retrieve list of Expenses from Database
        $expenses = Expenses::all();
        
        //Show list of ministries from Database in Add Expense
        $ministries = Ministries::all();
        
        //Return list to the Expense blade
        return view('main/expenses',compact(['expenses','ministries']));
                    
                    
    }

    //Insert expense to database
    public function add_expense(Request $request){
     /*   $this->validate($request,[
            'expense-date' => 'required',
            'expense-receiver' => 'required'
            'expense-vn' => 'required'
        ]);

        //Add expense to database (calling the model)
        $expense = new expenses;
        $expense->id = $request->input('ministry-name');
        $expense->date = $request->get('ministry-type');
        $expense->funds = $request->input('ministry-funds');
        $expense->save();

        return redirect('main/expenses')->with('info','Expense Added Successfully');*/
    }
    

    
}
