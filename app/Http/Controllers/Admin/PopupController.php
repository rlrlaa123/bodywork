<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Popup;

class PopupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $popups = Popup::orderby('created_at', 'desc')->paginate(10);

        return view('admin.Popup.index', compact('popups'));
    }
}
