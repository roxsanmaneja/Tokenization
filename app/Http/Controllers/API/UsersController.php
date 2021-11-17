<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\hotelreservationform;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function login() {
        if (Auth::attempt(['username' => request("username"), 'password' => request('password')])){
            $user = Auth::user();
            $success['token']= Str::random(64);
            $success['username'] = $user->username;
            $success['id'] = $user->id;
            $success['name'] = $user->name;


            //SAVE TOKEN
            $user->remember_token = $success['token'];
            return response()->json($success, $this->successStatus);
        }else{
            return response() ->json(['response' => 'User not found'], 404);
        }
    }



    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => "required",
            'username' => "required",
            'email' => "required|email",
            'password' => "required",

        ]);

        if ($validator->fails()){
            return response()->json(['response' => $validator->errors()], 401);
        }else{
            $input = $request->all();

            if(User::where('email', $input['email'])->exists()){
                return response()->json(['response' => 'Email already exist'], 401);
            }elseif(User::where('username', $input['username'])->exists()){
                return response()->json(['response' => 'Username already exist'], 401);

            }else{
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);

                $success['token'] = Str::random(64);
                $success['username'] = $user->username;
                $success['id'] = $user->id;
                $sucess['name'] = $user->name;

                return response()->json($success, $this->successStatus);

           }

         }
     }
}
?>
