<?php

namespace App\Http\Controllers\Pages\Admins\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\ColorCode;
use App\Models\ColorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ColorController extends Controller
{
    public function showColorCategoriesTable()
    {
        $categories = ColorCategory::orderBy('name')->get();

        return view('pages.admins.dataMaster.color.category-table', compact('categories'));
    }

    public function createColorCategories(Request $request)
    {
        ColorCategory::create(['name' => $request->name]);

        return back()->with('success', 'Color category [' . $request->name . '] is successfully created!');
    }

    public function updateColorCategories(Request $request)
    {
        $category = ColorCategory::find($request->id);
        $category->update(['name' => $request->name]);

        return back()->with('success', 'Color category [' . $category->name . '] is successfully updated!');
    }

    public function deleteColorCategories($id)
    {
        $category = ColorCategory::find(decrypt($id));
        $category->delete();

        return back()->with('success', 'Color category [' . $category->name . '] is successfully deleted!');
    }

    public function massDeleteColorCategories(Request $request)
    {
        $categories = ColorCategory::whereIn('id', explode(",", $request->category_ids))->get();
        foreach ($categories as $category) {
            $category->delete();
        }
        $message = count($categories) > 1 ? count($categories) . ' color categories are ' :
            count($categories) . ' category is ';

        return back()->with('success', $message . 'successfully deleted!');
    }

    public function showColorCodesTable(Request $request)
    {
        $categories = ColorCategory::all();
        $codes = ColorCode::all();

        if ($request->has('q')) {
            $find = $request->q;
        } else {
            $find = null;
        }

        return view('pages.admins.dataMaster.color.code-table', compact('categories', 'codes', 'find'));
    }

    public function createColorCodes(Request $request)
    {
        if ($request->hasFile('file')) {
            $this->validate($request, ['file' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/colors', $file);
        } else {
            $file = null;
        }

        $code = ColorCode::create([
            'category_id' => $request->category_id,
            'code' => $request->code,
            'name' => $request->name,
            'file' => $file,
        ]);

        return back()->with('success', 'Color code [' . $code->name . '] is successfully created!');
    }

    public function editColorCodes($id)
    {
        return ColorCode::find($id);
    }

    public function updateColorCodes(Request $request)
    {
        $code = ColorCode::find($request->id);

        if ($request->hasFile('file')) {
            $this->validate($request, ['file' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $file = $request->file('file')->getClientOriginalName();
            Storage::delete('public/colors/' . $code->file);
            $request->file('file')->storeAs('public/colors', $file);

        } else {
            $file = $code->file;
        }

        $code->update([
            'category_id' => $request->category_id,
            'code' => $request->code,
            'name' => $request->name,
            'file' => $file,
        ]);

        return back()->with('success', 'Color code [' . $code->name . '] is successfully updated!');
    }

    public function deleteColorCodes($id)
    {
        $code = ColorCode::find(decrypt($id));

        Storage::delete('public/colors/' . $code->file);
        if ($code->getGallery->count() > 0) {
            foreach ($code->getGallery as $gallery) {
                if ($gallery->type == 'photos' && $gallery->file != '') {
                    Storage::delete('public/gallery/' . $gallery->file);
                } elseif ($gallery->thumbnail != '') {
                    Storage::delete('public/gallery/thumbnail/' . $gallery->thumbnail);
                }
            }
        }

        $code->delete();

        return back()->with('success', 'Color code [' . $code->name . '] is successfully deleted!');
    }

    public function massDeleteColorCodes(Request $request)
    {
        $codes = ColorCode::whereIn('id', explode(",", $request->code_ids))->get();
        foreach ($codes as $code) {
            Storage::delete('public/colors/' . $code->file);
            if ($code->getGallery->count() > 0) {
                foreach ($code->getGallery as $gallery) {
                    if ($gallery->type == 'photos' && $gallery->file != '') {
                        Storage::delete('public/gallery/' . $gallery->file);
                    } elseif ($gallery->thumbnail != '') {
                        Storage::delete('public/gallery/thumbnail/' . $gallery->thumbnail);
                    }
                }
            }

            $code->delete();
        }

        $message = count($codes) > 1 ? count($codes) . ' color codes are ' : count($codes) . ' color code is ';

        return back()->with('success', $message . 'successfully deleted!');
    }
}
