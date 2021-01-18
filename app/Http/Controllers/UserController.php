<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
//     public function logs(Request $request){
//         $name=$request->input('name');
//         $password=$request->input('password');
//         $data= DB::select('select id from users where name=? and password=?' ,[$name,$password] );
//         if($data)
//             echo "Logged in";
//         else
//             echo "Wrong";
//     }
//     public function levels($id)
//     {
//         $math=DB:: select('select Maths from users where id=?',[$id]);
//         $english=DB:: select('select English from users where id=?',[$id]);
//         $arabic=DB:: select('select Arabic from users where id=?',[$id]);
//         $mathlinks=DB:: select('select links from levels where subject="math" and level<=? ',[$math]);
//         $englishlinks=DB:: select('select links from levels where subject="english" and level<=? ',[$english]);
//         $arabiclinks=DB:: select('select links from levels where subject="arabic" and level<=? ',[$arabic]);
//         return view('profile',compact('mathlinks','englishlinks','arabiclinks'));

//     }
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     { $Users = User::select('id','name','email','password','Rank')->get();
//         return view('index')->with('Users',$Users);
        
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('auth.register');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {$user=new User;
//         $user->name=$request->name;
//         $user->password=$request->password;
//         $user->email=$request->email;
//         $user->save();
//         return view('profile',array("user" => $user));
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     { $user = User::find($id);
//         return view('user.show',compact('user',$user));
//     }
//     public function search( Request $request)
//     {  $User = DB::table('users')->select('email','password','id')->get();
        
//       foreach($User as $user)
//       {
//           if($user->email==$request->get('email'))
//            if($user->password==$request->get('password'))
//            return view('home',array("user" => $user));
//       }
//       return redirect('register');
         
//     }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id){
//         $user = User::find($id);
  
    
//         return view('edit',array("user" => $user));
//      }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request,$id){
    
//   $first_name = $request->input('name');
// $email = $request->input('email');
// $password = $request->input('password');
// DB::update('update users set name = ?,email=?,password=? where id=?',[$first_name,$email,$password,$id]);
// $user=User::find($id);
// return view('profile',array("user" => $user));     }
    

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
        
//         DB::delete('delete from users where id=?',[$id]);
//         return redirect('/');
//     }

}
