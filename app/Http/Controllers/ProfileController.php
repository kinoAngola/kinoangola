<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function testesUpgrade(Request $request, User $user): RedirectResponse
    {
        try {
            // Validação do arquivo de imagem
            $request->validate([
                'foto_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Verificar se foi enviado um arquivo de imagem
            if ($request->hasFile('foto_perfil')) {
                // Obter o arquivo
                $image = $request->file('foto_perfil');

                // Gerar um nome único para o arquivo
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Salvar a imagem no diretório "public/profiles"
                $path = $image->storeAs('public/images/profiles', $imageName);

                // Atualizar o caminho da imagem no banco de dados (supondo que tenha um campo 'image' na tabela users)
                $user->foto_perfil = $path; // Salva o caminho da imagem no banco de dados
                $user->save();
                $request->user()->save();
            }

            return Redirect::route('testes.edit')->with('SUCESSO', 'Imagem de perfil atualizada com sucesso!');
            
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Bombo Molhed');
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
