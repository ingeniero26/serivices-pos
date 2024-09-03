<?php

namespace App\Http\Controllers;


use App\Models\CategoryModel;
use App\Models\ComposeEmailModel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComposeEmailMail;

class EmailController extends Controller
{
    public function email_compose( Request $request)
    {
        $data['getEmail'] = User::whereIn('role', ['agent','user'])->get();
        return view('admin.email.compose', $data);
    }
    public function compose_post(Request $request)
    {
        //dd($request->all());
        $save = new ComposeEmailModel;
        $save->user_id = trim($request->user_id);
        $save->cc_email = trim($request->cc_email);
        $save->subject = trim($request->subject);
        $save->descriptions = trim($request->descriptions);
        $save->save();
        $getUserEmail = User::where('id', '=',$request->user_id )->first();
        Mail::to($getUserEmail->email)->cc($request->cc_email)->send(new ComposeEmailMail($save));
        return redirect('admin/email/compose')->with('success', 'Registro Guardado con exito');
    }
    public function sent_email(Request $request)
    {
        $data['getRecord']= ComposeEmailModel::get();
        return view('admin.email.sent_email',$data);
    }

    public function sent_email_delete(Request  $request)
    {
        if(!empty($request->id)){
            $option = explode(',', $request->id);
            foreach($option as $id)
            {
                if(!empty($id))
                {
                    $getRecord = ComposeEmailModel::find($id);
                    $getRecord->delete();
                }
            }
        }
        return redirect()->back()->with('success','Email enviado eliminado  con exito');
    }

    public  function read_email($id, Request $request)
    {
        $data['getRecord']= ComposeEmailModel::find($id);
        return view('admin.email.read_email',$data);
    }
    public function read_delete($id, Request $request)
    {
        $deleteRecord = ComposeEmailModel::find($id);
        $deleteRecord->delete();
        return redirect('admin/email/compose')->with('success','Email enviado eliminado  con exito');
    }

}
