<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\File;
use Auth;


class AuthController extends Controller
{
    public function __construct()  
    {
        $this->middleware('JWT', ['except' => ['login', 'signup']]);
    }

    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'invalid credentials'], 401);  
    }

    public function signup(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
        ]);
        $data = array();
        if($request->file('image')){
            $directory = 'uploads/images';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/uploads/images', $imageName);
            $data['image'] = $imageName;
        }
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['password'] = Hash::make($request->password);
        $data['total_chances'] = $request->total_chances;
        $data['total_credit'] = $request->total_credit;

        User::Create($data);

        return $this->login($request);

    }


    private function guard()
    {
        return Auth::guard();
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        
        // Clear the user's authentication status
        Auth::logout();

        return response()->json(['message' => 'Logged out successfully']);

    }

    protected function respondWithToken($token) 
    {
        $data['access_token'] = $token;
        $data['token_type'] = 'bearer';
        $data['expires_in'] = auth()->factory()->getTTL() * 60;
        $data['name'] = Auth()->user()->name;
        $data['user_type'] = Auth()->user()->type;
        $data['user_id'] = Auth()->user()->id;
        $data['email'] = Auth()->user()->email;
        $data['phone'] = Auth()->user()->phone;
        $data['address'] = Auth()->user()->address;
        $data['image'] = Auth()->user()->image;
        $data['total_chances'] = Auth()->user()->total_chances;
        $data['total_credit'] = Auth()->user()->total_credit;
        return response()->json($data)->header('Authorization', $token);
    }


    public function profileUpdate(Request $request){
        $validatedData = $request->validate([
            'email' =>  "email|required|unique:users,email,$request->user_id",
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
        ]);
        $user = User::find($request->user_id);
        $arr = array();
        if($request->file('image')){
            if(!empty($user->image)){
                Storage::disk('public')->delete('uploads/images/'.$user->image);
            }            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/uploads/images', $imageName);
            $arr['image'] = $imageName;
        }
        
        $arr['name'] = $request->name;
        $arr['email'] = $request->email;
        $arr['phone'] = $request->phone;
        $arr['address'] = $request->address;

        User::where('id',$request->user_id)->update($arr);
        return response()->json(["message" =>"User Updated successfully"]);

    }

    public function passwordChange(Request $request){
        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);
        User::where('id',$request->user_id)->update(['password' => Hash::make($request->password)]);
        return response()->json(["message" =>"password updated successfully"]);
    }
}
