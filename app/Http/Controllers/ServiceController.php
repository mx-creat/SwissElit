<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('services.index', [
            'maintenanceServices' => Service::maintenance()->where('is_active', true)->get(),
            'creationServices' => Service::creation()->where('is_active', true)->get()
        ]);
    }
}