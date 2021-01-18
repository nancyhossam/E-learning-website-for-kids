<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Friend;
use App\models\User;
use DB;
use App\Events;
class FriendController extends Controller
{
   
   public function search(Request $request){
       $id=Auth()->user()->id;
       $name=$request->get('search');
       $user = User::find($id);
       //$friends=DB::select('select * from users where name=? and id <> ?',[$name,$id]);
       $friends = DB::table('users')->where([['name', 'like', $name.'%'],['id','<>',$id]])->get();
       return view('search',compact(['friends','user']));
   }

   public function follow($id2){
    $id1=Auth()->user()->id;
    // DB::insert('insert into friends (friend1,friend2) values(?,?) ',[$id1,$id2]);
    $temp=DB:: select('select friend2 from friends where friend1=?',[$id1]);
        foreach($temp as $f)
        {
            if($f->friend2==$id2)
            {
                return redirect('profile');
            }
        }

       DB::insert('insert into friends (friend1,friend2) values(?,?)  ',[$id1,$id2]) ;
       return redirect('profile');
   }

   public function search_friends(){

       $id=Auth()->user()->id;
       $friends=DB::select('select * from users where id in(select friend2 from friends where friend1=?)',[$id] );
       return view('profile',compact(['friends']));
   }
}
