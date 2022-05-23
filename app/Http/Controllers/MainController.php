<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request) {
        Register::create([
            'name' => $request->post('name'),
            'age' => $request->post('age'),
            'tel' => $request->post('tel')
        ]);
        return back()->withSuccess('مشخصات شما ثبت شد. به زودی مشاوران ما با شما تماس خواهند گرفت');
    }

    public function dashboard(Request $request) {

        $registrars = Register::paginate(30);
        return view('dashboard', [
            'registrars' => $registrars
        ]);
    }
}
