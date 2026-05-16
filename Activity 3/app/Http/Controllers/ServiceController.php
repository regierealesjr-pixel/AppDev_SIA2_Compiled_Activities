<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // DISPLAY ALL + SEARCH + PAGINATION
    public function index(Request $request)
    {
        $search = $request->search;

        $services = Service::where('customer_name', 'LIKE', "%$search%")
            ->orWhere('vehicle_model', 'LIKE', "%$search%")
            ->orWhere('service_type', 'LIKE', "%$search%")
            ->latest()
            ->paginate(6);

        return view('services.index', compact('services'));
    }

    // CREATE FORM
    public function create()
    {
        return view('services.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'vehicle_model' => 'required',
            'service_type' => 'required',
            'service_cost' => 'required',
            'service_date' => 'required',
            'vehicle_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = null;

        if ($request->hasFile('vehicle_image')) {

            $imageName = time() . '.' .
                $request->vehicle_image->extension();

            $request->vehicle_image->move(
                public_path('uploads'),
                $imageName
            );
        }

        Service::create([
            'customer_name' => $request->customer_name,
            'vehicle_model' => $request->vehicle_model,
            'service_type' => $request->service_type,
            'service_cost' => $request->service_cost,
            'service_date' => $request->service_date,
            'vehicle_image' => $imageName
        ]);

        return redirect()->route('services.index')
            ->with('success', 'Service Added Successfully');
    }

    // SHOW SINGLE
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // EDIT FORM
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // UPDATE
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'customer_name' => 'required',
            'vehicle_model' => 'required',
            'service_type' => 'required',
            'service_cost' => 'required',
            'service_date' => 'required'
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service Updated Successfully');
    }

    // DELETE
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service Deleted Successfully');
    }
}