<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PesertaController extends Controller
{
    //INDEX
    public function index()
    {

        return view('homepage', ['title' => 'BOM 2024 | PETRA CHRISTIAN UNIVERSITY']);
    }


    // REGISTRATION HANDLER
    public function registration()
    {

        return view('registration', ['title' => 'BOM 2024 | REGISTRATION']);
    }

    public function storeRegistration(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'asalSekolah' => 'required|string|max:100',
            'usernameKelompok' => 'required|string|max:30',
            'passPeserta' => 'required|string|min:8|max:20',
            'namaKetua' => 'required|string|max:100',
            'emailKetua' => 'required|email:dns|max:100',
            'namaKedua' => 'required|string|max:100',
            'namaKetiga' => 'required|string|max:100',
            'jenisKonsumsi' => 'required|string|in:normal,vege,vegan|max:100',
            'alergi' => 'required|string|max:100',
            'buktiTransaksi' => 'image|file|max:10000',
        ]);

        $validatedData['passPeserta'] = Hash::make($validatedData['passPeserta']);
        if ($request->file('buktiTransaksi')) {
            $validatedData['buktiTransaksi'] = $request->file('buktiTransaksi')->store('public/folder-transaksi');
        }
        Peserta::create($validatedData);

        // Kembalikan respons ke halaman yang sesuai
        return redirect("/")->with('registrationSuccess', 'Registration Berhasil!');
    }



    //LOGIN HANDLER
    public function login()
    {
        return view('login.login', ['title' => 'BOM 2024 | LOGIN']);
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['nrp' => $request->username, 'password' => $request->password], true)) {
            dd('success');
            if (Auth::user()->isAdmin == 1) {
                return redirect()->intended('/admin');
            }

        } else {
            $usernameKelompok = DB::table('pesertas')->where('usernameKelompok', $request->username)->value('usernameKelompok');
            $hashedPassword = User::where('nrp', $request->username)->value('password');
            $passwordFromRequest = $request->password;

            if ($usernameKelompok && Hash::check($passwordFromRequest, $hashedPassword)) {
                return redirect()->intended('/eliminationone');
            }
        };

        return redirect()->back()->with('errorLogin', 'credentials invalid');
    }


    public function eliminationone()
    {
        return view('Eliminasi1.mainpage', ['title' => 'BOM 2024 | ELIMINATION 1']);
    }
}
