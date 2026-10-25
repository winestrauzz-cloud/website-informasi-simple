<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    // Tampilkan halaman form registrasi
    public function showForm()
    {
        // Jika sudah pernah daftar (tersimpan di session), langsung lempar ke halaman konten
        if (session()->has('participant_id')) {
            return redirect()->route('content.show');
        }
        return view('register');
    }

    // Proses simpan data registrasi
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Simpan ke database
        $participant = Participant::create([
            'name' => $request->name,
            'department' => $request->department,
            'phone' => $request->phone,
        ]);

        // Simpan status login sederhana ke session
        session(['participant_id' => $participant->id]);
        session(['participant_name' => $participant->name]);

        return redirect()->route('content.show');
    }

    // Tampilkan halaman konten (Info Perjalanan)
    public function showContent()
    {
        // Validasi: Jika belum registrasi, tendang balik ke halaman depan
        if (!session()->has('participant_id')) {
            return redirect()->route('register');
        }

        return view('content');
    }

    // Logout / Reset sesi
    public function logout()
    {
        session()->forget(['participant_id', 'participant_name']);
        return redirect()->route('register');
    }
}