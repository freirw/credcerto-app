<?php

namespace App\Http\Controllers;
use OpenCV\Image as Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function readImage()
    {
        // Caminho para a imagem a ser lida
        $imagePath = public_path('images/rg.png');
        echo ($imagePath);
        // Carrega a imagem usando OpenCV
        $image = Image::read($imagePath);
        


        // Retorna a imagem para exibição ou processamento adicional
        return response()->stream(function () use ($image) {
            // Define o tipo de conteúdo como imagem
            header('Content-Type: image/png');
            
            // Retorna o conteúdo da imagem
            echo $image->encode('.png');
        });
    }
}
