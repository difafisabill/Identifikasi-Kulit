<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $pasient=User::where('role','=','pasient')->count();
        $admin=User::where('role','=','admin')->count();
        $doctor=User::where('role','=','doctor')->count();
        return view('admin.index',compact('pasient','admin','doctor'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin()
    {

        return view('admin.admin_login');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData')); //mengambil variabel yang telah didefinisikan di dalam controller
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image/'.$data->photo)); // update images for profile (replace)
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['photo'] = $filename;

        }
        $data->save();
        // setelah save akan menlakukan action notification
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification); //memanggil nilai $notification

    }

    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }

    public function AdminUpdatePassword(Request $request)
    {
       //validation
       $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed'
       ]);
       // data lama
       if(!Hash::check($request->old_password, auth::user()->password)){
        $notification = array(
            'message' => 'Old Password Does Not Match!',
            'alert-type' => 'error',
        );
        return back()->with($notification);
       }
       //update new password
       User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
       ]);
       $notification = array(
        'message' => 'Password Change Successfully',
        'alert-type' => 'success',
    );
    return back()->with($notification);
    }

    public function AdminPasientTransaction()
    {
        return view('admin.admin_pasient_transaction');
    }
}
