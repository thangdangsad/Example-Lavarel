<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:100|unique:customers',
            'email' => 'required|max:50',
            'phone' => 'nullable|max:50',
            'image' => 'nullable|max:255',
        ]);

        CustomerModel::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer added successfully.');

        // CustomerModel::create([
        //     'fullname' => $request->fullname,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'image' => $request->image,
        // ]);

        // return redirect()->route('customers.index')->with('success', 'Customer created successfully');
    }

    

    public function index()
    {
        $customers = CustomerModel::all();
        return view('customers.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = CustomerModel::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function list($page){
        $customers = CustomerModel::orderBy('created_at','desc')->offset(($page-1)*10)->limit(10)->get();
        return view('customers.index',['customers' => $customers,'sucsess' => session('success paginate')]);
    }

    public function edit($id)
    {
        $customer = CustomerModel::findOrFail(($id));
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu trước khi cập nhật
        $customers = CustomerModel::find($id);
        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'nullable|image', 
        ]);

        

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        } else {
            $data['image'] = $customers->image;
        }

        $customers->update($data);

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }


    public function destroy1($id)
    {
        $customer = CustomerModel::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Delete user successfully');
    }
}
