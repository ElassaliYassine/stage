<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

 
use Illuminate\Http\Request;

class testt extends Controller
{
    public function test(){
        
        $user = auth()->user()->password ;
        dd(($user  ==  Hash::make('haljak70@gmail.com'))?1 :0 ) ;



        // $re = DB::table('users')->get(); 
        // return count($re) ;


    }
}
