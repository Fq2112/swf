<?php

namespace App\Http\Controllers\Pages\Admins;

use App\Models\Contact;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Installers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $role = Auth::user();
        $admins = User::all();
        $galleries = Gallery::all();
        $installers = Installers::all();
        $blog = Blog::all();

        if ($request->has('period')) {
            $period = $request->period;
        } else {
            $period = null;
        }

        if ($role->isRoot()) {
            $latest = Blog::orderByDesc('id')->take(6)->get();
        } else {
            $latest = Blog::where('user_id', Auth::id())->orderByDesc('id')->take(6)->get();
        }

        return view('pages.admins.dashboard', compact('role', 'admins', 'galleries', 'installers',
            'blog', 'period', 'latest'));
    }

    public function showInbox(Request $request)
    {
        $contacts = Contact::orderByDesc('id')->get();

        if ($request->has("id")) {
            $findMessage = $request->id;
        } else {
            $findMessage = null;
        }

        return view('pages.admins.inbox', compact('contacts', 'findMessage'));
    }
    
    public function viewMail(Request $request) 
    {
        return Contact::find($request->id);    
    }

    public function composeInbox(Request $request)
    {
        $this->validate($request, [
            'inbox_to' => 'required|string|email|max:255',
            'inbox_subject' => 'string|min:3',
            'inbox_message' => 'required'
        ]);
        $data = array(
            'email' => $request->inbox_to,
            'subject' => $request->inbox_subject,
            'bodymessage' => $request->inbox_message
        );
        Mail::send('emails.admins.mail', $data, function ($message) use ($data) {
            $message->from(env('MAIL_USERNAME'), env('APP_TITLE'));
            $message->to($data['email']);
            $message->subject($data['subject']);
        });

        return back()->with('success', 'Successfully sent message to ' . $data['email'] . '!');
    }

    public function deleteInbox(Request $request)
    {
        $contact = Contact::find(decrypt($request->id));
        $contact->delete();

        return back()->with('success', 'Message from ' . $contact->name . ' [' . $contact->email . '] is successfully deleted!');
    }

    public function editProfile()
    {
        $admin = Auth::user();

        return view('pages.admins.editProfile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = User::find(Auth::id());
        if ($request->check_form == 'personal_data') {
            if ($request->hasfile('ava')) {
                $this->validate($request, [
                    'ava' => 'image|mimes:jpg,jpeg,gif,png|max:2048',
                ]);

                $name = $request->file('ava')->getClientOriginalName();
                if ($admin->ava != '') {
                    Storage::delete('public/admins/ava/' . $admin->ava);
                }
                $request->file('ava')->storeAs('public/admins/ava', $name);

            } else {
                $name = $admin->ava;
            }

            $admin->update([
                'ava' => $name,
                'name' => $request->name,
                'about' => $request->about,
            ]);

        } else {
            $admin->update([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'whatsapp' => $request->whatsapp,
            ]);
        }

        return back()->with('success', 'Successfully update your profile!');
    }

    public function accountSettings()
    {
        $admin = Auth::user();

        return view('pages.admins.accountSettings', compact('admin'));
    }

    public function updateAccount(Request $request)
    {
        $admin = User::find(Auth::id());

        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Your current password is incorrect!');

        } else {
            if ($request->new_password != $request->password_confirmation) {
                return back()->with('error', 'Your password confirmation doesn\'t match!');

            } else {
                $admin->update([
                    'email' => $request->email,
                    'password' => bcrypt($request->new_password)
                ]);
                return back()->with('success', 'Successfully update your account!');
            }
        }
    }
}
