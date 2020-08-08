<?php

namespace App\traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
//crea el trato
trait UploadTrait {
    
    public function uploadOne(UploadedFile $uploadFile,$folder=null,$disk='public',$filename=null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);//Genera una cadena aleatoria de 25 caracteres
        $file = $uploadFile -> storeAs($folder,$name.'.'.$uploadFile->getClientOriginalExtension(),$disk);
        return $file;
    }
}