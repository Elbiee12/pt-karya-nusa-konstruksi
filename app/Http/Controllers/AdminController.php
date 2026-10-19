<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Halaman Utama Dashboard (Overview dengan Rekap Data & Statistik)
     */
    public function index()
    {
        $rfqs = DB::table('quotation_requests')->orderBy('created_at', 'desc')->get();
        $bookings = DB::table('consultation_bookings')->orderBy('consultation_date', 'asc')->get();
        $services = DB::table('services')->get();
        $projects = DB::table('projects')->orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('rfqs', 'bookings', 'services', 'projects'));
    }

    /**
     * Halaman Pengelolaan Pesan RFQ
     */
    public function rfqIndex()
    {
        $rfqs = DB::table('quotation_requests')->orderBy('created_at', 'desc')->get();

        return view('admin.rfq', compact('rfqs'));
    }

    /**
     * Hapus Pesan RFQ
     */
    public function destroyRfq(int $id)
    {
        DB::table('quotation_requests')->where('id', $id)->delete();

        return redirect()->route('admin.rfq')->with('success', 'Pesan permintaan penawaran berhasil dihapus.');
    }

    /**
     * Halaman Pengelolaan Jadwal Booking Konsultasi
     */
    public function bookingsIndex()
    {
        $bookings = DB::table('consultation_bookings')->orderBy('consultation_date', 'asc')->get();

        return view('admin.bookings', compact('bookings'));
    }

    /**
     * Hapus Jadwal Booking Konsultasi
     */
    public function destroyBooking(int $id)
    {
        DB::table('consultation_bookings')->where('id', $id)->delete();

        return redirect()->route('admin.bookings')->with('success', 'Jadwal konsultasi berhasil dihapus.');
    }

    /**
     * Halaman Pengelolaan Portofolio Proyek
     */
    public function projectsIndex()
    {
        $projects = DB::table('projects')->orderBy('created_at', 'desc')->get();

        return view('admin.projects', compact('projects'));
    }

    /**
     * Tambah Proyek Baru ke Portofolio
     */
    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'completion_date' => 'required|date',
            'budget_range' => 'nullable|string|max:255',
            'status' => 'required|in:ongoing,completed',
            'description' => 'required|string',
            'thumbnail' => 'required|string',
        ]);

        DB::table('projects')->insert([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']) . '-' . time(),
            'client_name' => $validated['client_name'],
            'category' => $validated['category'],
            'location' => $validated['location'],
            'completion_date' => $validated['completion_date'],
            'budget_range' => $validated['budget_range'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'thumbnail' => $validated['thumbnail'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.projects')->with('success', 'Proyek baru berhasil ditambahkan ke portofolio.');
    }

    /**
     * Hapus Proyek dari Portofolio
     */
    public function destroyProject(int $id)
    {
        DB::table('projects')->where('id', $id)->delete();

        return redirect()->route('admin.projects')->with('success', 'Data portofolio proyek berhasil dihapus.');
    }
}