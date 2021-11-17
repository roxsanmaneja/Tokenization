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


class hotelreservationformController extends Controller {
    public $successStatus = 200;

    public function getAllhotelreservationform(Request $request) {
        $token = $request['t']; // t = token
        $userid =$request['u']; // u = userid

        $user = User::where('id' , $userid) ->where('Remember_token', $token)->first();

        if ($user != null) {
            $hotelreservationform = hotelreservationform::all();

            return response()->json($hotelreservationform, $this->successStatus);
        } else {

            return response()->json(['response' => 'Bad call'] ,501);

        }

    }
    public function gethotelreservationform(Request $request) {
        $id =$request['pid']; // pid = hotelreservationform id
        $token = $request['t']; // t = token
        $userid =$request['u']; // u = userid

        $user = User::where('id' , $userid) ->where('Remember_token', $token)->first();

        if ($user !=null) {
            $hotelreservationform = hotelreservationform::where('id', $id) ->first();

            if ($hotelreservationform!=null) {
                return response()->json(['response' => 'hotelreservationform not found!'], 404);
        } else {

        }
    } else {
        return response()->json(['response' => 'Bad call'] ,501);
        }
    }

    public function searchhotelreservationform(Request $request) {
        $params = $request['p']; // p = params
        $token = $request['t']; // t=token
        $userid = $request['u']; //u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $hotelreservationform = hotelreservationform::where('fullname', 'LIKE', '%' . $params . '%')
                ->orWhere('address',  'LIKE', '%' . $params . '%')
                ->get();
            // SELECT = FROM hotelreservationform WHERE CostumerName LIKE '%params%' OR CostumerAddress LIKE '%PARAMS%'
            if($hotelreservationform != null) {
               return response()->json($hotelreservationform, $this->successStatus);
            } else {
                return response()->json(['response' => 'hotelreservationform not found!'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }
}
