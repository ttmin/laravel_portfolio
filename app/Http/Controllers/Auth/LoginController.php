<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite; // 追記

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //追記
    // 省略
    public function redirectToGoogle()
    {
        // Google へのリダイレクト
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $gUser = Socialite::driver('google')->stateless()->user();
        // email が合致するユーザーを取得
//      $user = User::where('email', $gUser->email)->first();
        $user = User::where(['email' => $gUser->getEmail()])->first();
        // 見つからなければ新しくユーザーを作成
//        if ($user == null) {
//            $user = $this->createUserByGoogle($gUser);
//        }
        // ログイン処理
//        \Auth::login($user, true);
//        return redirect('/home');
        if($user) {
            //登録があればそのままログイン(2回目以降)
            Auth::login($user);
            return redirect('/home');
        } else {
            //なければ登録
            $newUser = new User;
            $newUser->name = $gUser->getName();
            $newUser->email = $gUser->getEmail();
            $newUser->save();

            //そのままログイン
            Auth::login($newUser);
            return redirect('/home');
        }
    }

    public function createUserByGoogle($gUser)
    {
        $user = User::create([
            'name'     => $gUser->name,
            'email'    => $gUser->email,
            'password' => \Hash::make(uniqid()),
        ]);
        return $user;
    }
}