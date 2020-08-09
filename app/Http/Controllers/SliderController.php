<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Traits\UploadTrait;
use App\Slider;


class SliderController extends Controller
{
    use UploadTrait;

    public function __construct() {
        $this->middleware('auth');
    }

    // Muestra las imagenes que se han agregado al Slider
    public function view() {
        $images = App\Slider::paginate(5);
        return view('slider.sliderView', compact('images'));
    }

    // Retorna el formulario para agregar
    public function new() {
        if ($request->method() == 'POST') {
            $newImage = new App\Slider;

            $newImage->title = $request->input('title');
            
            $image = $request->file('image');
            $name = Str::slug($request->input('title')).'_'.time();   
            $folder = '/uploads/images/';
            $filepath = $folder.$name.'.'.$image->getClientOriginalExtension();
            $this->uploadOne($image,$folder,'public',$name);
            $newImage->image = $filepath;

            $newImage->save();

            return redirect('/slider')->with(['message' => 'Se ha añadido la imagen correctamente']);
        } else {
            return view('slider.newSlider');
        }
    }

    public function edit(Request $request, $id) {
        $image = App\Slider::findOrFail($id);

        if ($request->method() == 'POST') {

            $image->title = $request->input('title');
        
            $img = $request->file('image');
            $name = Str::slug($request->input('title')).'_'.time();   
            $folder = '/uploads/images/';
            $filepath = $folder.$name.'.'.$img->getClientOriginalExtension();
            $this->uploadOne($img,$folder,'public',$name);
            $image->image = $filepath;

            $image->save();

            return redirect('/slider')->with(['message' => 'Se ha moificado la imagen correctamente']);
        } else {
            return view('slider.editSlider', compact('image'));
        }
    }

    public function delete(Request $request, $id) {
        $image = App\Slider::findOrFail($id);
        $image->delete();
        return redirect('/slider')->with(['message' => 'Se ha borrado la imagen']);
    }

}
