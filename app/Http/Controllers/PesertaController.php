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
        $nrpPanitia = User::Where('nrp', $request->nrp)->count();
        $passPanitia = DB::table('users')->select('password')->where('nrp', $request->nrp)->value('password');
        $inputPass = $request->password;


        if ($nrpPanitia == 1 && Hash::check($inputPass, $passPanitia)) {

            $credentials = $request->validate([
                'nrp' => 'required',
                'password' => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/f36dbb75466650c2294914b6e2fa3058');
            }
            return back()->with('loginError', 'Login credentials invalid!');


            // LOGIN PESERTA
        } else if ($nrpPanitia == 0) {
            $cekUsernameKelompok = Peserta::Where('usernameKelompok', $request->nrp)->count();
            $passPeserta = DB::table('pesertas')->select('passPeserta')->where('usernameKelompok', $request->nrp)->value('password');
            $inputPass = $request->password;

            if ($cekUsernameKelompok == 1 && Hash::check($inputPass, $passPeserta)) {
                $usernameKelompok = DB::table('pesertas')->select('usernameKelompok')->where('usernameKelompok', $request->nrp)->value('usernameKelompok');
                return redirect()->route('eliminationone')->with('usernameKelompok', $usernameKelompok);
            }
        }
    }




    public function eliminationone()
    {
        return view('Eliminasi1.mainpage', ['title' => 'BOM 2024 | ELIMINATION 1']);
    }
}
