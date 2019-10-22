<?php

namespace App\Http\Controllers\Pages\Admins\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\Installers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstallersController extends Controller
{
    public function showInstallersTable()
    {
        $installers = Installers::all();

        return view('pages.admins.dataMaster.installer-table', compact('installers'));
    }

    public function createInstallers(Request $request)
    {
        if ($request->hasFile('logo')) {
            $this->validate($request, ['logo' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $logo = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('public/installers', $logo);

        } else {
            $logo = null;
        }

        $address = str_replace(" ", "+", $request->address);
        $json = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" .
            $address . "&key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68");

        $request->request->add([
            'lat' => json_decode($json)->{'results'}[0]->{'geometry'}->{'location'}->{'lat'},
            'long' => json_decode($json)->{'results'}[0]->{'geometry'}->{'location'}->{'lng'}
        ]);

        $installer = Installers::create([
            'logo' => $logo,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'link' => $request->link,
            'lat' => $request->lat,
            'long' => $request->long
        ]);

        return back()->with('success', $installer->name . ' is successfully added to our installer network!');
    }

    public function updateInstallers(Request $request)
    {
        $installer = Installers::find($request->id);
        if ($request->hasFile('logo')) {
            $this->validate($request, ['logo' => 'required|image|mimes:jpg,jpeg,gif,png|max:5120']);
            $logo = $request->file('logo')->getClientOriginalName();
            if ($installer->logo != '') {
                Storage::delete('public/installers/' . $installer->logo);
            }
            $request->file('logo')->storeAs('public/installers', $logo);

        } else {
            $logo = $installer->logo;
        }

        $address = str_replace(" ", "+", $request->address);
        $json = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" .
            $address . "&key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68");

        $request->request->add([
            'lat' => json_decode($json)->{'results'}[0]->{'geometry'}->{'location'}->{'lat'},
            'long' => json_decode($json)->{'results'}[0]->{'geometry'}->{'location'}->{'lng'}
        ]);

        $installer->update([
            'logo' => $logo,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'link' => $request->link,
            'lat' => $request->lat,
            'long' => $request->long
        ]);

        return back()->with('success', 'installer ['.$installer->name . '] is successfully updated!');
    }

    public function deleteInstallers($id)
    {
        $installer = Installers::find(decrypt($id));
        if ($installer->logo != '') {
            Storage::delete('public/installers/' . $installer->logo);
        }

        $installer->delete();

        return back()->with('success', $installer->name . ' is successfully deleted from our installer network!');
    }

    public function massDeleteInstallers(Request $request)
    {
        $installers = Installers::whereIn('id', explode(",", $request->installer_ids))->get();
        foreach ($installers as $installer) {
            if ($installer->logo != '') {
                Storage::delete('public/installers/' . $installer->logo);
            }

            $installer->delete();
        }
        $message = count($installers) > 1 ? count($installers) . ' installers are ' : count($installers) . ' installer is ';

        return back()->with('success', $message . 'successfully deleted!');
    }
}
