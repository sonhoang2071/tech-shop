<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
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
    protected $redirectTo = RouteServiceProvider::LOGIN;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','regex:/^(0)[0-9]{9}$/','unique:users'],
            'address' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string','same:password'],
        ],[
            'required' => ':attribute bắt buộc phải nhập',
            'string' => ':attribute bắt buộc phải là chuỗi ký tự',
            'max' => ':attribute có độ dài không lớn hơn :max ký tự',
            'email' => ':attribute không đúng định dạng email',
            'unique' => ':attribute đã được sử dụng',
            'min' => ':attribute có độ dài tối thiểu :min ký tự',
            'same' => ':attribute bắt buộc phải trùng mật khẩu',
            'confirmed' => ':attribute không trùng khớp',
            'regex' => ':attribute không hợp lệ'
        ],[
            'name' => 'Họ tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Mật khẩu xác thực'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' =>  $data['phone'],
            
            'address' =>  $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request)
    {
        dd($request);
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }
}
