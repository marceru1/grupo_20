<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreImageRequest;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(StoreImageRequest $request)
    {
        // Linha 1: Armazenando o arquivo de forma segura.
        $path = $request->file('image')->store('imagens_inseridas', 'public');

        // Linha 2: Criando o registro no banco de dados através do relacionamento.
        auth()->user()->images()->create([
            'name' => basename($path),
            'path' => $path,
        ]);

        // Linha 3: Redirecionando o usuário de volta com uma mensagem de sucesso.
        return redirect('/dashboard')->with('msg', 'Imagem enviada com sucesso!');
    }
public function galeria()
{
    $imagens = Image::where('user_id', auth()->id())->latest()->get();

    return view('dashboard', ['imagens' => $imagens]);
}
public function destroy($id)
{
    $imagem = Image::findOrFail($id);

    // Verifica se o usuário autenticado é dono da imagem


    // Apaga a imagem
    $imagePath = public_path($imagem->path);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Apaga do banco
    $imagem->delete();

    return redirect('/dashboard')->with('msg', 'Imagem excluída com sucesso!');
}

public function mostrarImagens()
{
    // A lógica para buscar os dados continua exatamente a mesma.
    // Buscamos todas as imagens com seus usuários, ordenadas pela mais nova.
    $images = Image::with('user')->latest()->get();

    // A MUDANÇA ESTÁ AQUI: retornamos a view 'welcome'
    return view('welcome', ['images' => $images]);
}


}
