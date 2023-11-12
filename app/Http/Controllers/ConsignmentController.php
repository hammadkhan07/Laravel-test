<?php

namespace App\Http\Controllers;

use App\Models\Consignment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class ConsignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Consignment::all();
        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $company = $request->company;
        $contact = $request->contact;
        $address_line_1 = $request->address_line_1;
        $address_line_2 = $request->address_line_2;
        $address_line_3 = $request->address_line_3;
        $city = $request->city;
        $country = $request->country;

        $request->validate([
            'company'        => 'required|string|max:255',
            'contact'        => 'required|regex:/^[\d\s\+\(\)]{8,20}$/',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'address_line_3' => 'nullable|string|max:255',
            'city'           => 'required|string|max:255',
            'country'        => 'required|string|max:255',
        ]);

        try {
            // If the validation passes, save the data in the Consignment table
            $consignment = new Consignment();
            $consignment->company = $company;
            $consignment->contact = $contact;
            $consignment->address_line_1 = $address_line_1;
            $consignment->address_line_2 = $address_line_2;
            $consignment->address_line_3 = $address_line_3;
            $consignment->city = $city;
            $consignment->country = $country;
            $consignment->save();
        
            return redirect()->route('dashboard')->with(['success' => 'Record Added Successfully']);
        } catch (\Exception $e) {
            return redirect()->route('dashboard')->with(['error' => 'Something went wrong. Please try again later!']);
        }

    }

    /**
     * Store a newly created resource in storage.
     */

public function create_pdf(Request $request)
{
    $id = $request->id;

    // Check if the PDF link is already generated
    $consignment = Consignment::find($id);

    if ($consignment && !empty($consignment->file_path)) {
        // PDF link already generated, redirect with a message
        return redirect()->route('dashboard')->with(['success' => 'PDF Link already generated for this consignment']);
    }

    $cons = Consignment::where('id', $id)->get()->toArray();
    $pdf = Pdf::loadView('pdf', ['cons' => $cons]);
    $filename = 'invoice_' . $id . '_' . uniqid() . '.pdf';
    Storage::disk('public')->put('pdf_file/' . $filename, $pdf->output());


    if ($consignment) {
        $consignment->file_path = 'pdf_file/' . $filename;
        $consignment->save();
    } else {
        return redirect()->route('dashboard')->with(['error' => 'Consignment not found']);
    }

    return redirect()->route('dashboard')->with(['success' => 'PDF Link Created Successfully']);
}


}
