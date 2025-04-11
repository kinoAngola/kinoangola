<?php

namespace App\Http\Controllers;

use App\Models\Localizacao;
use App\Models\User;
use App\Models\Estabelecimento;
use App\Models\Avaliacao;
use App\Models\Favorito;
use App\Models\Categoria;
use App\Models\ImagemEstabelecimento;
use App\Models\Prato;
use App\Models\Subscricao;
use App\Models\Location;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'endereco' => 'required',
        ]);

        $location = Location::create([
            /* 'user_id' => auth()->id(), */
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'endereco' => $request->endereco,
        ]);

        // redirecionar ou salvar outros dados

        return redirect()->route('home')->with('success', 'Localização salva com sucesso!');

    }
}
