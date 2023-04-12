<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Transaction;
 
class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view ('transactions.index')->with('transaction', $transaction);
    }
 
    
    public function create()
    {
        return view('transactions.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Transaction::create($input);
        return redirect('transactions')->with('flash_message', 'Transaction Addedd!');  
    }
 
    
    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.show')->with('transactions', $transaction);
    }
 
    
    public function edit($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.edit')->with('transaction', $transaction);
    }
 
  
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $input = $request->all();
        $transaction->update($input);
        return redirect('transactions')->with('flash_message', 'Transaction Updated!');  
    }
 
   
    public function destroy($id)
    {
        Transaction::destroy($id);
        return redirect('transaction')->with('flash_message', 'Transaction deleted!');  
    }
}