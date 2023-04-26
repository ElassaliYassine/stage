<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    
    protected function validator(array $data)
    {
        

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'img_user' => ['required', 'max:255'],
            // 'number_phone' => ['required', 'integer' ,'max:10000000000' ,'min:999999999'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(Request $request)
    {

            
        

        $dd = DB::table('users')->get();
        if( count($dd) === 0 ){
             $is_admin = 1 ;
             
            }else {
                $is_admin = 0 ;
             
        }
        
        $newImageName = uniqid().'-.'.$request['img_user']->extension();
        $request['img_user']->move(public_path('assets/images/profile/'),$newImageName  );

        
        $user =  User::create([
            'is_admin' =>  $is_admin ,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'img_user' => $newImageName,
            'number_phone' => $request->number_phone ,
            'email' => $request->email,
            'password' => Hash::make($request->password) ,
        ]) ;

        Auth()->login($user);

        return ($is_admin) ?  redirect('admin/dashboard') : redirect('/');
    }
}

