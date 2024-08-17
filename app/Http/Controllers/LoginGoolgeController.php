<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginGoolgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google authentication.
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // kiểm tra người dùng có đăng nhập với tài khoản google lần nào chưa
            $findUser = User::where('google_id', $user->google_id)->first();

            if ($findUser) {
                // nếu có thì đăng nhập ngay với google-id đó
                Auth::login($findUser);
                return redirect()->intended('/');
            } else {
                // nếu chưa đăng nhập với google lần nào thì tiếp tục kiểm tra tk gg đang đăng nhập có trùng với email đk thường không
                // nếu có thì đăng nhập với email đã tồi tại
                $findUserByEmail = User::where('email', $user->email)->first();
                
                if ($findUserByEmail) {
                    Auth::login($findUserByEmail);
                    return redirect()->intended('/');
                }

                // nếu không trùng với những trường hợp trên thì tiến hàng tạo acc mới
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('12345678'),
                    'idgroup' => 0
                ]);

                // tiến hành đăng nhập với google mới
                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            \Log::error('Google login error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Something went wrong. Please try again.');
        }
    }
}
