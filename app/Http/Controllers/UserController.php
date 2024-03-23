<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {

        return view('homepage', ['title' => 'BOM 2024 | PETRA CHRISTIAN UNIVERSITY']);
    }

    public function registration()
    {

        return view('registration', ['title' => 'BOM 2024 | REGISTRATION']);
    }

    public function storeRegistration(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'asalSekolah' => 'required|string',
            'usernameKelompok' => 'required|string',
            'passPeserta' => 'required|string|min:8|max:20',
            'namaKetua' => 'required|string',
            'emailKetua' => 'required|email:dns',
            'namaKedua' => 'required|string',
            'namaKetiga' => 'required|string',
            'jenisKonsumsi' => 'required|string|in:normal,vege,vegan',
            'alergi' => 'required|string',
            'buktiTransaksi' => 'image|file|max:10000',
        ]);

        $validatedData['passPeserta'] = Hash::make($validatedData['passPeserta']);
        if ($request->file('buktiTransaksi')) {
            $validatedData['buktiTransaksi'] = $request->file('buktiTransaksi')->store('public/folder-transaksi');
        }
        User::create($validatedData);

        // Kembalikan respons ke halaman yang sesuai
        return redirect("/")->with('registrationSuccess', 'Registration Berhasil!');
    }
}
