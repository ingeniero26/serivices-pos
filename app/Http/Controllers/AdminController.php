<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function AdminDashboard(Request $request)
    {
        $user = User::selectRaw('count(id) as count,
         DATE_FORMAT(created_at,"%Y-%m") as month')
                            ->groupBy('month')
                            ->orderBy('month','asc')
                            ->get();

                            $data['months'] = $user ->pluck('month');
                            $data['counts'] = $user ->pluck('count');
        return view('admin.index',$data);
    }
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin(Request $request)
    {
        return view('admin.admin_login');
    }

    public function admin_profile(Request $req)
    {
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.admin_profile', $data);
    }

    public function update(Request $request)
    {
        $user = request()->validate([
            'email' => 'required|email|unique:users,email,' . Auth::user()->id
        ]);
        $user = User::find(Auth::user()->id);
        $user->username = trim($request->username);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->phone = trim($request->phone);
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        // $user->password = Hash::make($request->password);
        $user->about = trim($request->about);
        $user->address = trim($request->address);
        $user->website = trim($request->website);
        // $user->user_type = 1;
        if (!empty($request->file('photo'))) {
            // if (!empty($user->getProfile())) {
            //     unlink('upload/' . $user->photo);
            // }

            $ext = $request->file('photo')->getClientOriginalExtension();
            $file = $request->file('photo');
            $randomStr = date('Ymdhis') . Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('upload/profile/', $filename);
            $user->photo = $filename;
        }
        $user->save();
        return redirect('admin/profile')->with('success', 'Perfil editado con exito');
    }

    public function  admin_users(Request $request)
    {
       $data['getRecord'] = User::getRecord();
        return view('admin.users.list', $data);
    }

    public function admin_users_view($id)
    {
        $data['getRecord'] = User::find($id);
        return view('admin.users.view',$data);
    }

}
