<?php

namespace App\Http\Controllers;
use App\Http\Requests\AformCreateRequest;
use App\Models\Aform;
use Illuminate\Http\Request;
use PDF;

class AformController extends Controller
{
    public function index(Request $request)
    {
        $aforms = Aform::latest()->get();
        return view('aform.index')->with(['aforms'=>$aforms]);
    }

    public function create(Request $request)
    {
        return view('aform.create');
    }

    public function store(AformCreateRequest $request)
    {
        $validated = $request->validated();
        $aform = Aform::create($validated);
        $aform->save();
        return view('aform.create')->with(['success'=>'Form submitted successfully']);

    }
    public function download(Request $request)
    {
        $aforms = Aform::latest()->get();
        return view('aform.download')->with(['aforms'=>$aforms]);
    }
    public function pdfview(Aform $aform)
    {
        view()->share('aform',$aform);
        $pdf = PDF::loadView('aform/pdfview');
        return $pdf->download('pdfview.pdf');
        // return view('aform.pdfview');
    }
}
