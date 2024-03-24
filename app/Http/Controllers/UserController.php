<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $resultPanitia = User::Where('nrp', $request->username)
            ->Where('password', $request->password)
            ->Where('isAdmin', 1)
            ->count();

        if ($resultPanitia == 1) {
            return redirect()->intended("/admin");
        } else {
            $resultPeserta = Peserta::Where('usernameKelompok', $request->username)
                ->Where('passPeserta', $request->password)
                ->count();
            if ($resultPeserta == 1) {
                return redirect()->intended("/eliminationone");
            }

            return back()->with('accountError', 'The credentials didnt match the records.');
        }
    }

    public function eliminationone()
    {

        return view('Eliminasi1.mainpage', ['title' => 'BOM 2024 | ELIMINATION 1']);
    }
}
