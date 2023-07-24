<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Invoices;
class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoices::all();
        return view('invoices.index', compact('invoices'));

    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
         $request->validate([
                'vehicle_name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'vehicle_type' => 'required',
                'price' => 'required',
        ]);
        Invoices::create($request->post());
        return redirect()->route('invoices.index');


         if($request->has('id') && $request->id){
            $updateData = $request->validate([
                'vehicle_name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'vehicle_type' => 'required',
                'price' => 'required',
            ]);
            Invoice::whereId($request->id)->update($updateData);
            return  redirect()->route('invoices.index')->with('success', 'User has been updated');
        }
        $storeData = $request->validate([
            'vehicle_name' => 'required',
             'address' => 'required',
             'phone' => 'required',
             'vehicle_type' => 'required',
             'price' => 'required',
        ]);
        $Invoice = Invoice::create($storeData);
        return redirect()->route('invoices.index');
    }

    public function show($id)
    {
        return view('invoices.show',compact('invoice'));
    }
    public function edit($id)
    {
       $invoice = Invoices::findOrFail($id);
//         return view('users.create', compact('user'));
        return view('invoices.create',compact('invoice'));
    }

    public function update(Request $request, Invoices $invoice)
    {
        $request->validate([
              'vehicle_name' => 'required',
              'address' => 'required',
              'phone' => 'required',
              'vehicle_type' => 'required',
              'price' => 'required',
        ]);
        $invoice->fill($request->post())->save();
        return redirect()->route('invoices.index');
    }

    public function destroy($id)
    {
       $invoice = Invoice::findOrFail($id);
       $invoice->delete();
       return redirect()->route('invoices.index');
    }

}
