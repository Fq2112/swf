<?php

namespace App\Http\Controllers\Pages;

use App\Models\Contact;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Installers;
use App\Models\Country;
use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SWFController extends Controller
{
    public function index()
    {
//        $client = new Instagram(env('IG_CLIENT_TOKEN'));
//        $posts = collect($client->media())->sortBy('created_time')->reverse();
        $countries = Country::all();
        $blog = Blog::orderByDesc('id')->take(5)->get();

        \App\Models\Visitor::hit();
        return view('pages.main.home', compact('countries', 'blog'));
    }

    public function showProductOverview()
    {
        \App\Models\Visitor::hit();
        return view('pages.main.product-overview');
    }

    public function showGallery(Request $request)
    {
        $gallery = Gallery::orderBy('title')->get();
        $photos = Gallery::where('type', 'photos')->orderByDesc('title')->get();
        $videos = Gallery::where('type', 'videos')->orderByDesc('title')->get();
        $keyword = $request->q;
        $type = $request->type;
        $page = $request->page;

        \App\Models\Visitor::hit();
        return view('pages.main.gallery', compact('gallery', 'keyword', 'photos', 'videos', 'type', 'page'));
    }

    public function getDataGallery(Request $request)
    {
        if ($request->type == 'all') {
            $gallery = Gallery::where('title', 'LIKE', '%' . $request->q . '%')
                ->orderByDesc('id')->paginate(12)->toArray();
        } else {
            $gallery = Gallery::where('title', 'LIKE', '%' . $request->q . '%')
                ->where('type', $request->type)->orderByDesc('id')->paginate(12)->toArray();
        }

        return $gallery;
    }

    public function getTitleGallery($title)
    {
        $galleries = Gallery::where('title', 'LIKE', '%' . $title . '%')->get();

        foreach ($galleries as $gallery) {
            $gallery->label = strtoupper($gallery->type) . ' - ' . $gallery->title;
        }

        return $galleries;
    }

    public function showInstallers()
    {
        $installers = Installers::orderBy('name')->get();
        $countries = Country::all();

        \App\Models\Visitor::hit();
        return view('pages.main.installers', compact('installers', 'countries'));
    }

    public function getCityInstallers($city)
    {
        if ($city != 'undefined') {
            if (strpos($city, 'Kota') !== false) {
                $string = str_replace('Kota ', '', $city);
            } elseif (strpos($city, 'City') !== false) {
                $string = str_replace(' City', '', $city);
            } elseif (strpos($city, 'Regency') !== false) {
                $string = str_replace(' Regency', '', $city);
            } elseif (strpos($city, 'Kabupaten') !== false) {
                $string = str_replace('Kabupaten ', '', $city);
            } else {
                $string = '';
            }

            $installer = Installers::where('city', 'LIKE', '%' . $string . '%')->orderBy('name')->get();

        } else {
            $installer = Installers::orderBy('name')->get();
        }

        return $installer;
    }

    public function submitContactInstallers(Request $request)
    {
        $this->validate($request, [
            'ins_email' => 'required|string|email|max:255',
            'con_fname' => 'required|string|max:255',
            'con_lname' => 'required|string|max:255',
            'con_email' => 'required|string|email|max:255',
            'con_company' => 'required|string|max:255',
            'con_phone' => 'required|string|max:13',
            'con_country' => 'required|string|max:255',
            'con_subject' => 'required|string|min:3',
            'con_message' => 'required|string'
        ]);

        $data = array(
            'ins_email' => $request->ins_email,
            'con_fname' => $request->con_fname,
            'con_lname' => $request->con_lname,
            'con_email' => $request->con_email,
            'con_company' => $request->con_company,
            'con_phone' => $request->con_phone,
            'con_country' => $request->con_country,
            'con_subject' => $request->con_subject,
            'con_message' => $request->con_message,
        );

        Mail::send('emails.contact-installers', $data, function ($message) use ($data) {
            $message->from($data['con_email'], $data['con_fname'] . ' ' . $data['con_lname']);
            $message->to($data['ins_email'])->cc('info@ppf.co.id');
            $message->subject($data['con_subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Please wait for further information, we will contact you as soon as possible.');
    }

    public function submitCertification(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:13',
            'type' => 'required|string|max:4',
            'company' => 'required|string|max:255',
            'country' => 'string|max:255'
        ]);

        $data = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'company' => $request->company,
            'country' => $request->country,
        );

        Mail::send('emails.certification-request', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['fname'] . ' ' . $data['lname']);
            $message->to('sindhu@ppf.co.id');
            $message->subject($data['type'] . ' Certification Request: ' . $data['company']);
        });

        return back()->with('certification', 'Thanks for your interest in our Certification Program! Please wait for further information, we will contact you as soon as possible.');
    }

    public function showContact()
    {
        \App\Models\Visitor::hit();
        return view('pages.main.contact');
    }

    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to(env('MAIL_USERNAME'));
            $message->subject($data['subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Because every single comment or critics that you gave, will make us be a better company.');
    }
}
