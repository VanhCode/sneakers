<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('Client.Auth.register');
    }

    public function register(Request $request)
    {
        try {
            $exitEmail = User::where('email', $request->email)
                ->orWhere('phone', $request->phone)
                ->first();

            if ($exitEmail) {
                return response()->json(['errorEx 'required|email|unique:users,email',
                    'phone' => 'nullable|string',
                    'address' => 'nullableitEmail' => true]);
            } else {
                $validatedData = $request->validate([
                    'first_name' => 'required|string',
                    'last_name' => 'required|string',
                    'email' =>|string',
                    'password' => 'required|string|min:6',
                    'birth_date' => 'required|date',
                    'gender' => 'required|in:Nam,Nữ',
                ]);

                $user = new User;
                $user->fill($validatedData);
                $user->password = Hash::make($validatedData['password']);
                $user->type = User::TYPE_MEMBER;
                $user->save();

                return response()->json(['registerSuccess' => true], 201);
            }
        } catch (\Exception $e) {
            return response()->json(['errorRegister' => $e->getMessage()]);
        }
    }
}
