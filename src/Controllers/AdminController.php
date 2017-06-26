<?php
/**
 * @author Jonathon Wallen
 * @date 26/6/17
 * @time 2:10 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadSettings\Controllers;


use App\Http\Controllers\Controller;
use MonkiiBuilt\LadSettings\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function create(Request $request)
    {
        $settings = Setting::all();

        return view('lad-settings::create', ['settings' => $settings]);
    }

    public function edit(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        return view('lad-settings::edit', ['setting' => $setting]);
    }

    public function store(Request $request)
    {
        $data =  $request->input();

        $setting = new Setting(
            $data
        );

        $setting->save();

        return  \Redirect::route('lad-settings.create');
    }

    public function update(Request $request, $id)
    {
        $data =  $request->input();

        $setting = Setting::findOrFail($id);

        $setting->update($data);

        $setting->save();

        return  \Redirect::route('lad-settings.create');
    }

    public function destroy(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $setting->delete();

        return  \Redirect::route('lad-settings.create');
    }
}