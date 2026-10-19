<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();
        $projects = DB::table('projects')->get();

        return view('welcome', compact('services', 'projects'));
    }

    public function storeRfq(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'service_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        DB::table('quotation_requests')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service_type' => $validated['service_type'],
            'message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->to(url()->previous() . '#rfq')->with('success', 'Permintaan penawaran (RFQ) Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }

    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'consultation_date' => 'required|date',
            'time_slot' => 'required|string|max:50',
            'notes' => 'nullable|string',
        ]);

        DB::table('consultation_bookings')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'consultation_date' => $validated['consultation_date'],
            'time_slot' => $validated['time_slot'],
            'notes' => $validated['notes'] ?? '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->to(url()->previous() . '#booking')->with('success', 'Jadwal konsultasi Anda berhasil dipesan! Tim kami akan segera mengonfirmasi melalui kontak Anda.');
    }
}