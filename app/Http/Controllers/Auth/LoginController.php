<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Client.Auth.login');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'emailOrPhone' => ['required'],
                'password' => ['required'],
            ]);

            $loginType = filter_var($request->emailOrPhone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

            // $credentials: thông tin xác thực
            $credentials = [
                $loginType => $request->emailOrPhone,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();

                if (Auth::user()->isAdmin()) {
                    return response()->json([
                        'loginStatus' => true,
                        'role' => 'admin'
                    ], 201);
                } else {
                    return response()->json([
                        'loginStatus' => true,
                        'role' => 'member'
                    ], 201);
                }
            }

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return response()->json([
                    'loginStatus' => false,
                    'message' => 'Email không tồn tại trong hệ thống.'
                ], 401);
            } else if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'loginStatus' => false,
                    'message' => 'Mật khẩu không đúng.'
                ], 401);
            }

            return response()->json([
                'loginStatus' => false,
                'message' => 'Đăng nhập thất bại.'
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'loginStatus' => false,
                'message' => $e->getMessage()
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        try {
            $redirectRoute = Auth::check() && Auth::user()->isAdmin() ? 'admin.login.form' : 'home';

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route($redirectRoute);
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function showLoginFormAdmin()
    {
        return view('Admin.Auth.login');
    }

    public function loginAdmin(Request $request)
    {
        try {
            $request->validate([
                'emailOrPhone' => ['required'],
                'password' => ['required'],
            ]);

            $loginType = filter_var($request->emailOrPhone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

            $credentials = [
                $loginType => $request->emailOrPhone,
                'password' => $request->password
            ];

            $user = User::where($loginType, $request->emailOrPhone)
                ->where('type', 'admin')
                ->first();

            if (!$user) {
                return response()->json([
                    'loginStatus' => false,
                    'message' => 'Email hoặc số điện thoại không tồn tại trong hệ thống.'
                ], 401);
            }

            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'loginStatus' => false,
                    'message' => 'Mật khẩu không đúng.'
                ], 401);
            }

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if (Auth::user()->isAdmin()) {
                    return response()->json([
                        'loginStatus' => true,
                        'role' => 'admin'
                    ], 201);
                } else {
                    return response()->json([
                        'loginStatus' => false,
                        'message' => 'Bạn không phải là admin'
                    ], 401);
                }
            }

            return response()->json([
                'loginStatus' => false,
                'message' => 'Đăng nhập thất bại.'
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'loginStatus' => false,
                'message' => $e->getMessage()
            ], 401);
        }
    }

}
