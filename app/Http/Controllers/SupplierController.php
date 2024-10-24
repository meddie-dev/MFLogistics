<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('roles.supplier.dashboard');
    }

    // Document Management
    public function uploadDocuments()
    {
        return view('supplier.document.upload'); // Upload Documents
    }

    // Vendor Management
    public function viewContracts()
    {
        return view('supplier.vendor.view-contracts'); // View Contracts
    }

    public function submitProposals()
    {
        return view('supplier.vendor.submit-proposals'); // Submit Proposals
    }

    // Vehicle Reservation
    public function requestReservation()
    {
        return view('supplier.vehicle.request'); // Request Reservations
    }

    public function viewStatus()
    {
        return view('supplier.vehicle.status'); // View Status
    }
}
