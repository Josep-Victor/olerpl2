<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        return view('login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 

        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        else { // false
 
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
 
    }
 
    public function showFormRegister()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'berat_badan'           => 'required|min:2|max:35',
            'tinggi_badan'          => 'required|min:2|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
 
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'berat_badan.required'  => 'Berat Badan wajib diisi',
            'berat_badan.min'       => 'Berat Badan minimal 2 karakter',
            'berat_badan.max'       => 'Berat Badan maksimal 3 karakter',
            'tinggi_badan.required' => 'Tinggi Badan wajib diisi',
            'tinggi_badan.min'      => 'Tinggi Badan minimal 2 karakter',
            'tinggi_badan.max'      => 'Tinggi Badan maksimal 3 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->berat_badan = ucwords(strtolower($request->berat_badan));
        $user->tinggi_badan = ucwords(strtolower($request->tinggi_badan));
        $kategori = User::skor($request->berat_badan,$request->tinggi_badan);

        if ($kategori >= 0 && $kategori <= 20){
            $user->kategori = 1;
        }
        else if ($kategori >= 21 && $kategori <= 40){
            $user->kategori = 2;
        }
        else if ($kategori >= 41) {
            $user->kategori = 3;
        }

        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
 
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
 
 
}
