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
        /*if ($request->method() == 'POST') {
            echo 'Ok';
        }*/
        return view('slider.newSlider');
    }

    // Se agrega la funcion para insertar la imagen a la BD
    public function add(Request $request) {
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
    }
}
