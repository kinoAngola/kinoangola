@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/customerProfile.scss', 'resources/js/customerProfile.js'])
@endsection

@section('content')
    <section class="customerEdit">


        <!-- Editar Perfil -->
        <div class="bg-white shadow-xl rounded-2xl p-6 max-w-5xl mx-auto my-10">



            <h2 class="text-3xl font-bold mb-6">Editar Perfil</h2>

            <!-- Formulário de Informações -->
            <form>
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium mb-1">Nome</label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                            :value="Auth::user()->email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Telefone</label>
                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                            :value="Auth::user()->email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Localização</label>
                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                            :value="Auth::user()->email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>


                <hr>

                <!-- Seção de Redefinir Senha -->
                <div class="my-6">
                    <h3 class="text-lg font-semibold mb-4">Redefinir Senha</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Nova Senha</label>


                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Confirmar Senha</label>

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Botão para Atualizar -->
                <div class="flex gap-4 mt-6">
                    <x-primary-button class="">
                        Atualizar
                        Informações
                    </x-primary-button>

                    <x-secondary-button class="">
                        Cancelar
                    </x-secondary-button>

                </div>
            </form>



        </div>



    </section>
@endsection
