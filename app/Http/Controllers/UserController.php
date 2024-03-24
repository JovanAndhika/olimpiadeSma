<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Panitia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        User::create($validatedData);

        // Kembalikan respons ke halaman yang sesuai
        return redirect("/")->with('registrationSuccess', 'Registration Berhasil!');
    }



    //LOGIN HANDLER
    public function login()
    {
        return view('login.login', ['title' => 'BOM 2024 | LOGIN']);
    }

    public function loginConfirmation(Request $request)
    {
        $resultPanitia = Panitia::Where('nrp', $request->username)
            ->Where('isAdmin', 1)
            ->first()
            ->count();

        // $credentials = $request->validate([
        //     'usernameKelompok' => 'required',
        //     'passPeserta' => 'required',
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        if ($resultPanitia == 1) {
            return redirect()->intended("{{ route('admin.index') }}");
        } else {
            $resultPeserta = User::Where('usernameKelompok', $request->username)->first()->count();
            if ($resultPeserta == 1) {
                return redirect()->intended("{{route('eliminationone'}}");
            }
        }

        return back()->with([
            'accountError', 'Username or Password is not correct.'
        ]);
    }

    public function eliminationone()
    {

        return view('Eliminasi1.mainpage', ['title' => 'BOM 2024 | ELIMINATION 1']);
    }
}
