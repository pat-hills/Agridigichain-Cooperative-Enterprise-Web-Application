<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    // public function login_page() {
      
    //     return view('admin.login') ;
    //   }


      public function login(Request $request)
      {

  $strUserName = "pat8-testacc";
 $strPassword = "an$2019";
 $strMessageType = "0";
 $strDlr = "1"; 
 $sender = "A-digichain";


        // Validate the form data
        $this->validate($request, [
          'email'   => 'required|email',
          'password' => 'required|min:6'
        ]);
        
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //Authentication passed
       $admin_user_ = Auth::guard('admin')->user();
        if($admin_user_->status == 0){
          $supporting_head_contact = "233267642898";
          $org_name =  $admin_user_ ->name_of_organization;
          $org_type = $admin_user_ ->type_of_organization;
          $fullname = $admin_user_ ->fullname;
          $contact = $admin_user_ ->contact;

          $message = "contact: ".$contact. "Org Name: ". $org_name. "Org Type: ". $org_type;
          $final_message = trim("New sign up". strtoupper($fullname). ", \n " . $message. "");
          //SEND SMS TO ME
          $url = "http://rslr.connectbind.com" . "/bulksms/bulksms?username=" . $strUserName . "&password=" . $strPassword . "&type=" . $strMessageType . "&dlr=" 
          . $strDlr . "&destination=" . $supporting_head_contact . "&source=" . $sender . "&message=" . $final_message . "";
           $url = preg_replace("/ /", "%20", $url);
           if($url){
            session()->invalidate();
            Auth::guard()->logout();
            return redirect()->back()->withInput()->withErrors('Your account would be activated within the next few hours! Your assigned Success Coach
            would contact you soon!') ;
           }
        
        }
        
       // if($admin_user_->type_of_organization == 'Cooperative'){

         // return redirect()->intended(route('fbo_setup_dashboard'));
          
          return redirect()->intended(route('admin_users_dashboard'));
      //  }
          // if successful, then redirect to their intended location
        
        }else{
          return redirect()->back()->withInput()->withErrors("Invalid username or password");
        } 
        // if unsuccessful, then redirect back to the login with the form data
       
      }


      public function logout()
    {
      session()->invalidate();
      Auth::guard()->logout();
      Auth::guard('admin')->logout();
        return redirect('/app/admin/user/login');
    }

}
