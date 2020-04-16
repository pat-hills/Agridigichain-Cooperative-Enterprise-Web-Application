<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register(Request $request)
  {
    $validatedData = $request->validate([
      'email' => 'email|required|unique:users',
      'password' => 'required|min:6',
      'fullname' => 'required|min:6',
      'contact' => 'required|min:10|max:10',

    ]);

    $validatedData['password'] = Hash::make($request->password);

    $validatedData['email'] = \strtolower($validatedData['email']);

    $user = User::create($validatedData);

    $accessToken = $user->createToken('authToken')->accessToken;

    return response([
      'message' => 'User created successfully',
      'data' => array(
        'user' => $user,
        'access_token' => $accessToken
      )
    ]);
  }

  public function login(Request $request)
  {
    $loginData = $request->validate([
      'email' => 'email|required',
      'password' => 'required'
    ]);

    $loginData['email'] = \strtolower($loginData['email']);

    if (!auth()->attempt($loginData)) {
      return response([
        'message' => 'Invalid credentials',
        'errors' => [
          'credentials' => 'Incorrect email or password'
        ]
      ], 401);
    }
    $accessToken = $request->user()->createToken('authToken')->accessToken;
    return response([
      'message' => 'Login successful',
      'data' => array(
        'user' => auth()->user(),
        'access_token' => $accessToken
      )
    ]);
  }


  /**
   * Log out user
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\Response
   */
  public function logout()
  {
    if (auth()->user()) {
      auth()->user()->token()->revoke();
    }

    return response()->json(
      [
        'message' => 'User logged out.',
        'data' => null
      ],
      200
    );
  }
}
