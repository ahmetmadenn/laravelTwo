<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\iletisimModel;
use Illuminate\Http\Request;


class İletisim extends Controller
{
    public function index()
    {
        return view('iletisim');
    }


    public function ekleme(Request $request)
    {
          $adsoyad=$request->adsoyad;
          $telefon=$request->telefon;
          $mail=$request->mail;
          $metin=$request->metin;
          iletisimModel::create([
            'adsoyad'=> $adsoyad,
            'telefon'=> $telefon,
            'mail'=> $mail,
            'metin'=> $metin,
          ]);

          echo "Bilgileriniz başarıyla kaydedildi.";

    }
}
