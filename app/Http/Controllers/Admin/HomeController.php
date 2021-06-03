<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\HomeImage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $home = HomeImage::first();

        return view('admin.HomeImage.index', compact('home'));
    }

    public function edit()
    {
        $home = HomeImage::first();

        return view('admin.HomeImage.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        // $file = $request->file('video');
        // $filename = $file->getClientOriginalName();
        // echo $filename;
        // dd($request->all());

        $video = null;

        if ($request->file('video')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if (!file_exists('storage/home')) {
                    File::makeDirectory('storage/home');
                }
            }

            $home = HomeImage::first();

            echo $home . '\n';

            if ($home['video'] != null) {
                File::delete($home['video']);
            }

            $home = $request->file('video');
            $home_name =
                pathinfo($home->getClientOriginalName(), PATHINFO_FILENAME) .
                '_' .
                time() .
                '.' .
                $home->getClientOriginalExtension();
            echo $home_name . '\n';
            $destinationPath_home = public_path('storage/home/');
            echo $destinationPath_home . '\n';
            $home->move($destinationPath_home, $home_name);

            $video = $home_name;

            chmod($destinationPath_home . $home_name, 0775);
        }

        $home_list = [null, null, null];

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile('home' . $i)) {
                if (!file_exists('storage')) {
                    File::makeDirectory('storage');
                    if (!file_exists('storage/home')) {
                        File::makeDirectory('storage/home');
                    }
                }

                $home = HomeImage::first();

                if ($home['home' . $i] != null) {
                    File::delete($home['home' . $i]);
                }

                $home = $request->file('home' . $i);
                $home_name =
                    'home' .
                    $i .
                    time() .
                    '.' .
                    $home->getClientOriginalExtension();
                $destinationPath_home = public_path('storage/home/');
                $home->move($destinationPath_home, $home_name);

                $home_list[$i - 1] = $home_name;

                chmod($destinationPath_home . $home_name, 0775);
            }
        }

        $bf_list = [null, null, null, null, null, null, null, null, null];

        for ($i = 1; $i <= 9; $i++) {
            if ($request->hasFile('bf' . $i)) {
                if (!file_exists('storage')) {
                    File::makeDirectory('storage');
                    if (!file_exists('storage/home')) {
                        File::makeDirectory('storage/home');
                    }
                }

                $home = HomeImage::first();

                if ($home['bf' . $i] != null) {
                    File::delete($home['bf' . $i]);
                }

                $home = $request->file('bf' . $i);
                $home_name =
                    'bf' .
                    $i .
                    time() .
                    '.' .
                    $home->getClientOriginalExtension();
                $destinationPath_home = public_path('storage/home/');
                $home->move($destinationPath_home, $home_name);

                $bf_list[$i - 1] = $home_name;

                chmod($destinationPath_home . $home_name, 0775);
            }
        }

        $menu_list = [null, null, null, null];

        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile('menu' . $i)) {
                if (!file_exists('storage')) {
                    File::makeDirectory('storage');
                    if (!file_exists('storage/home')) {
                        File::makeDirectory('storage/home');
                    }
                }

                $menu = HomeImage::first();

                if ($menu['menu' . $i] != null) {
                    File::delete($menu['menu' . $i]);
                    //                    return 1;
                }
                $menu = $request->file('menu' . $i);
                $menu_name =
                    'menu' .
                    $i .
                    time() .
                    '.' .
                    $menu->getClientOriginalExtension();
                $destinationPath_menu = public_path('storage/home/');
                $menu->move($destinationPath_menu, $menu_name);
                //                return 1;
                $menu_list[$i - 1] = $menu_name;

                chmod($destinationPath_menu . $menu_name, 0775);
            }
        }

        HomeImage::first()->update([
            'link1' => $request->link1,
            'link2' => $request->link2,
            'link3' => $request->link3,
        ]);

        HomeImage::first()->update([
            'bf1_link' => $request->bf1_link,
            'bf2_link' => $request->bf2_link,
            'bf3_link' => $request->bf3_link,
            'bf4_link' => $request->bf4_link,
            'bf5_link' => $request->bf5_link,
            'bf6_link' => $request->bf6_link,
            'bf7_link' => $request->bf7_link,
            'bf8_link' => $request->bf8_link,
            'bf9_link' => $request->bf9_link,
        ]);

        HomeImage::first()->update([
            'menu1_link' => $request->menu1_link,
            'menu2_link' => $request->menu2_link,
            'menu3_link' => $request->menu3_link,
            'menu4_link' => $request->menu4_link,
        ]);

        if ($request->has('video')) {
            HomeImage::where('id', $id)->update([
                'video' => 'storage/home/' . $video,
            ]);
        }

        for ($i = 1; $i <= 3; $i++) {
            if ($request->has('home' . $i)) {
                HomeImage::where('id', $id)->update([
                    'home' . $i => 'storage/home/' . $home_list[$i - 1],
                ]);
            }
        }

        for ($i = 1; $i <= 9; $i++) {
            if ($request->has('bf' . $i)) {
                HomeImage::where('id', $id)->update([
                    'bf' . $i => 'storage/home/' . $bf_list[$i - 1],
                ]);
            }
            if ($request->has('bf' . $i . '_link')) {
                HomeImage::where('id', $id)->update([
                    'bf' . $i . '_link' => $request['bf' . $i . '_link'],
                ]);
            }
        }

        for ($i = 1; $i <= 4; $i++) {
            if ($request->has('menu' . $i)) {
                HomeImage::where('id', $id)->update([
                    'menu' . $i => 'storage/home/' . $menu_list[$i - 1],
                ]);
            }
            if ($request->has('menu' . $i . '_link')) {
                HomeImage::where('id', $id)->update([
                    'menu' . $i . '_link' => $request['menu' . $i . '_link'],
                ]);
            }
        }

        return redirect('admin');
    }
}
