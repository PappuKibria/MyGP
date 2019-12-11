<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;


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
    protected $redirectTo = '/home';

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
            'student_id' => ['required', 'string', 'max:8', 'unique:users,student_id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_active' => ['max:2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(Input::hasfile('photo')) {
            $photo = $data['photo'];
            $destinationPath = public_path() . '/alumni/';
            $fileName = $data['student_id'] . '.jpg';
            $photo->move($destinationPath, $fileName);
            return User::create([
                'student_id' => $data['student_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'blood_group' => $data['blood_group'],
                'committee_session' => $data['committee_session'],
                'photo' => $data['student_id'].'.jpg',
                'address' => $data['address'],
                'reg_type' => $data['reg_type'],
                'password' => Hash::make($data['password']),
                'is_active' => 0,
            ]);
        }

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
