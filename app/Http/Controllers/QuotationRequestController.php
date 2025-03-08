<?php

namespace App\Http\Controllers;

use App\Models\QuotationRequest;
use App\Http\Requests\StoreQuotationRequestRequest;
use App\Http\Requests\UpdateQuotationRequestRequest;

class QuotationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuotationRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuotationRequest $quotationRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuotationRequest $quotationRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuotationRequestRequest $request, QuotationRequest $quotationRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuotationRequest $quotationRequest)
    {
        //
    }
    public function showForm()
    {
        return view('quotation-request');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'website_url' => 'nullable|url',
            'project_name' => 'required|string|max:255',
            'service_type' => 'required|string',
            'service_type_other' => 'nullable|string|max:255',
            'project_description' => 'required|string',
            'primary_goal' => 'required|string',
            'primary_goal_other' => 'nullable|string|max:255',
            'target_audience' => 'nullable|string',
            'features' => 'nullable|string',
            'tech_stack' => 'nullable|string|max:255',
            'hosting_status' => 'nullable|string',
            'design_style' => 'nullable|string',
            'brand_assets.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:2048',
            'budget' => 'required|string',
            'timeline' => 'required|string',
            'competitors' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'terms' => 'accepted',
        ]);

        // Handle file uploads
        $brandAssetsPaths = [];
        if ($request->hasFile('brand_assets')) {
            foreach ($request->file('brand_assets') as $file) {
                $brandAssetsPaths[] = $file->store('brand_assets', 'public');
            }
        }

        // Save to database
        $quotation = QuotationRequest::create(array_merge($validated, ['brand_assets' => json_encode($brandAssetsPaths)]));

        return redirect()->route('quotation.form')->with('success', 'Quotation request submitted successfully!');
    }
}
