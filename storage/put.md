 public function forg(){
        return view('Auth.forget');
    }

    public function forget(){
        return redirect('forget');
    }
   public function resetPassword(Request $request){

//     $request->validate([
            
//         'email'=>'required|email'
//    ]);

  $data = DB::select('select * from admins where email = ?', [$request->email]);

//    $admin = Admin::where('email','=',$request->email)->first();
    
   foreach($data as $datas){
       $rp = $datas->reset_password;
      
   }
   return view('Auth.notpage',compact('data'));
   

   }

   public function pin(){

    return view('Auth.pin');

   }
   public function setter(){
       return redirect('pin');
   }
   public function resetter($admin_id){
    // $rp = DB::select('select reset_password from admins where email = ?', [$request->email]);
    echo $admin_id;


   }
