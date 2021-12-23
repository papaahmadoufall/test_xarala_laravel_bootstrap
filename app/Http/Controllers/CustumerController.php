<?php

namespace App\Http\Controllers;
use App\Models\Custumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;


class CustumerController extends Controller
{
    public function index( )
    {
        $custumer = Custumer::all();
        return view('welcome' ,['custumer'=>$custumer]);
    }
    public function create()
    {
        # code...
    }
    public function store(Request $request )
    {
        $custumer = new Custumer;
        $custumer->name = $request->input('nom');
        $custumer->email = $request->input('email');
        $custumer->location = $request->input('loc');
        $custumer->tel = $request->input('tel');


        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/custumer/', $filename);
            $custumer->profile_image = $filename;
        }
        $custumer->save();
        Toastr::success('Nouveau client ajouté avec succés', 'Hello', ["positionClass" => "toast-top-center"]);

        return redirect()->back();
    }



    public function edit( $id)
    {
        $custumer = Custumer::find($id);
        return view('edit', compact('custumer'));
    }
    public function update( Request $request, $id)
    {
        $custumer = Custumer::find($id);
        $custumer->name = $request->input('nom');
        $custumer->email = $request->input('email');
        $custumer->location = $request->input('loc');
        $custumer->tel = $request->input('tel');

        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/custumer/'.$custumer->profile_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/custumer/', $filename);
            $custumer->profile_image = $filename;
        }

        $custumer->update();
        Toastr::success('modification du client '.$custumer->name.'  avec succés', 'Modification');

        return redirect()->to('list');

    }
    public function destroy($id )
    {
        $custumer = Custumer::find($id);
        $destination = 'uploads/custumer/'.$custumer->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $custumer->delete();
        Toastr::success('supression du client '.$custumer->name.' avec succes', 'Suppression  ', ["positionClass" => "toast-top-center"]);

        return redirect()->back()->with('status','custumer Image Deleted Successfully');

    }
}
