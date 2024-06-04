<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestPrincipale;
use App\Models\description;


class ControllerPrincipale extends Controller
{
    public function lista () {

        $descriptions= description::all();

        return view('lista', ['descriptions'=>$descriptions]);
        


    }

    public function formInserimento () {
        return view('form');
    }

    public function home (){
        return view('home');
    }

    public function invio ( RequestPrincipale $request ){

         /*    $request->validate([
            
                'email' => 'required',
                'recensione' => 'required',
                'image' => 'required'
            
            ]);  */
          

       
        
        if ($request->hasFile('image')) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        }

        $data = [
            'email' => $request->input('email'),
            'recensione' => $request->input('recensione'),
            'image' =>$path_image,

        ];
       description::create($data);
        return redirect()->route('lista');
        
    }
}
