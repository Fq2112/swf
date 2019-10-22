<?php

namespace App\Http\Controllers\Pages\Admins\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    public function showGalleriesTable()
    {
        $galleries = Gallery::all();

        return view('pages.admins.dataMaster.gallery-table', compact('galleries'));
    }

    public function createGalleries(Request $request)
    {
        if ($request->hasFile('photo')) {
            $this->validate($request, ['photo' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/gallery', $photo);

            $video = null;
            $thumbnail = null;

        } elseif ($request->hasFile('thumbnail')) {
            $this->validate($request, ['thumbnail' => 'required|image|mimes:jpg,jpeg,gif,png|max:2048']);
            $thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/gallery/thumbnail', $thumbnail);

            $photo = null;
            $video = $request->video;

        } else {
            $photo = null;
            $thumbnail = null;
            $video = null;
        }

        $gallery = Gallery::create([
            'type' => $request->type,
            'title' => $request->title,
            'caption' => $request->caption,
            'thumbnail' => $thumbnail,
            'file' => $request->type == 'videos' ? $video : $photo,
        ]);

        return back()->with('success', $gallery->title . ' is successfully added to ' . $gallery->type . ' gallery!');
    }

    public function updateGalleries(Request $request)
    {
        $gallery = Gallery::find($request->id);
        if ($request->hasFile('photo')) {
            $this->validate($request, ['photo' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $photo = $request->file('photo')->getClientOriginalName();
            if ($gallery->type == 'photos' && $gallery->file != '') {
                Storage::delete('public/gallery/' . $gallery->file);
            }
            $request->file('photo')->storeAs('public/gallery', $photo);

            $video = $gallery->file;
            $thumbnail = $gallery->thumbnail;

        } elseif ($request->hasFile('thumbnail')) {
            $this->validate($request, ['thumbnail' => 'required|image|mimes:jpg,jpeg,gif,png|max:2048']);
            $thumbnail = $request->file('thumbnail')->getClientOriginalName();
            if ($gallery->thumbnail != '') {
                Storage::delete('public/gallery/thumbnail/' . $gallery->thumbnail);
            }
            $request->file('thumbnail')->storeAs('public/gallery/thumbnail', $thumbnail);

            $photo = $gallery->file;
            $video = $request->video;

        } else {
            $photo = $gallery->file;
            $thumbnail = $gallery->thumbnail;
            $video = $gallery->file;
        }

        $gallery->update([
            'type' => $request->type,
            'title' => $request->title,
            'caption' => $request->caption,
            'thumbnail' => $thumbnail,
            'file' => $request->type == 'videos' ? $video : $photo,
        ]);

        return back()->with('success', 'Gallery [' . $gallery->title . '] is successfully updated!');
    }

    public function deleteGalleries($id)
    {
        $gallery = Gallery::find(decrypt($id));
        if ($gallery->type == 'photos' && $gallery->file != '') {
            Storage::delete('public/gallery/' . $gallery->file);
        } elseif ($gallery->thumbnail != '') {
            Storage::delete('public/gallery/thumbnail/' . $gallery->thumbnail);
        }

        $gallery->delete();

        return back()->with('success', $gallery->title . ' is successfully deleted from ' . $gallery->type . ' gallery!');
    }

    public function massDeleteGalleries(Request $request)
    {
        $galleries = Gallery::whereIn('id', explode(",", $request->gallery_ids))->get();
        foreach ($galleries as $gallery) {
            if ($gallery->type == 'photos' && $gallery->file != '') {
                Storage::delete('public/gallery/' . $gallery->file);
            } elseif ($gallery->thumbnail != '') {
                Storage::delete('public/gallery/thumbnail/' . $gallery->thumbnail);
            }

            $gallery->delete();
        }
        $message = count($galleries) > 1 ? count($galleries) . ' galleries are ' : count($galleries) . ' gallery is ';

        return back()->with('success', $message . 'successfully deleted!');
    }
}
