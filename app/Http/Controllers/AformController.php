
<?php

namespace App\Http\Controllers;

use App\Models\Aform;
use Illuminate\Http\Request;

class AformController extends Controller
{



    public function createStep1(Request $request)
    {
        $afrom = $request->session()->get('aform');
        return view('afrom.step1',compact('aform'));
    }

    public function postStep1(Request $request)
    {
        if(empty($request->session()->get('afrom'))){
            $aform = new Aform();

        }
    }

}
