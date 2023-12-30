<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // public function handleGooglecallback(){
    //     $user = Socialite::driver('google')->user();

    //     $finduser = User::where('google_id', $user->getId())->first();

    //     if($finduser){
    //         Auth::login($finduser);
    //         return redirect()->intended('/');
    //     }else{
    //         $newuser = User::create([
    //             'name' => $user->getName(),
    //             'email' => $user->getEmail(),
    //             'google_id'=>$user->getId(),
    //             'password' => bcrypt('12345678')
    //         ]);
    //         Auth::login($newuser);
    //         return redirect()->intended('/');
    //     }

    // }
    public function handleGoogleCallback()
    {
        try {
            // Ambil data user dari Google setelah mereka memberikan izin
            $googleUser = Socialite::driver('google')->user();

            // Cari apakah ada user dengan email dari data Google di database
            $existingUser = User::where('email', $googleUser->getEmail())->first();

            if ($existingUser) {
                // Jika user sudah ada, lakukan proses login
                Auth::login($existingUser);
                return redirect()->route('/'); // Ganti dengan rute setelah login
            } else {
                // Jika user belum ada, lakukan proses registrasi untuk user baru
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => 'pasword123456',
                ]);

                // Lakukan login untuk user baru
                Auth::login($newUser);
                return redirect()->route('/'); // Ganti dengan rute setelah login
            }
        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            // // Misalnya, tampilkan pesan error atau log pesan kesalahan
            Log::error('Google Authentication Error: ' . $e->getMessage());
            return redirect()->route('login')->withErrors(['msg' => 'Terjadi kesalahan saat autentikasi dengan Google']);
        }
    }
}
