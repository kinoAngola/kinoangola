@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/customerProfile.scss', 'resources/js/customerProfile.js'])
@endsection

@section('content')
    <section class="customerProfile">

        <div class="info-profile">
            <div class="text-center flex justify-center">
                @if (Auth::user()->image)
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Foto de Perfil"
                        class="w-60 h-60 border border-2 rounded-full object-cover border-4 border-white shadow-xl">
                @else
                    <img src="{{ asset('storage/images/profiles/userdefault.png') }}" alt="Imagem de Perfil Padrão"
                        class="w-60 h-60 rounded-full">
                @endif
            </div>

            <!-- Informações do Usuário -->
            <div class="mt-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                <p class="text-gray-600">{{ Auth::user()->email }}</p>
                <p class="text-gray-600">Telefone: (11) 98765-4321</p>
                <p class="text-gray-600">Localização: São Paulo, SP</p>
            </div>


            <div class="mt-6 flex justify-center gap-6">
                <a href="{{route('customer.edit')}}" class="bg-orange-600 text-white px-6 py-2 rounded-full hover:bg-orange-700">Editar Perfil</a>
                <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700">Eliminar Conta</button>
            </div>



        </div>


        <!-- Seção de Pratos Favoritos -->
        <div class="bg-white shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4">Pratos Favoritos</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="border p-4 rounded shadow">
                    <h3 class="font-semibold">Calulu de Peixe</h3>
                    <p class="text-sm text-gray-600">AOA 5.000</p>
                    <button class="mt-2 text-purple-600 hover:underline">Ver Prato</button>
                </div>
                <div class="border p-4 rounded shadow">
                    <h3 class="font-semibold">Muamba de Galinha</h3>
                    <p class="text-sm text-gray-600">AOA 4.500</p>
                    <button class="mt-2 text-purple-600 hover:underline">Ver Prato</button>
                </div>
            </div>
        </div>

        <!-- Recomendações Personalizadas -->
        <div class="bg-white shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4">Recomendações para Você</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="border p-4 rounded shadow">
                    <h3 class="font-semibold">Funge com Carne Seca</h3>
                    <p class="text-sm text-gray-600">Baseado nas suas avaliações</p>
                </div>
                <div class="border p-4 rounded shadow">
                    <h3 class="font-semibold">Churrasco Luandense</h3>
                    <p class="text-sm text-gray-600">Baseado nos seus pedidos recentes</p>
                </div>
            </div>
        </div>

        <!-- Minhas Avaliações -->
        <div class="bg-white shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-6">Minhas Avaliações</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Avaliação 1 -->
                <div class="border p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto do usuário" class="w-20 h-20 rounded-full mb-4">
                    <div class="text-center">
                        <h3 class="font-semibold text-lg">João Silva</h3>
                        <p class="text-sm text-gray-600">joao.silva@email.com</p>
                    </div>
                    <p class="text-sm text-gray-800 mt-4">"Muito saboroso, recomendo!"</p>
                    <div class="flex mt-2">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Calulu de Peixe</p>
                </div>

                <!-- Avaliação 2 -->
                <div class="border p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto do usuário" class="w-20 h-20 rounded-full mb-4">
                    <div class="text-center">
                        <h3 class="font-semibold text-lg">Maria Oliveira</h3>
                        <p class="text-sm text-gray-600">maria.oliveira@email.com</p>
                    </div>
                    <p class="text-sm text-gray-800 mt-4">"Bom, mas demorou para chegar."</p>
                    <div class="flex mt-2">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-gray-400"></i>
                        <i class="bx bxs-star text-gray-400"></i>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Muamba de Galinha</p>
                </div>

                <!-- Avaliação 3 -->
                <div class="border p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto do usuário" class="w-20 h-20 rounded-full mb-4">
                    <div class="text-center">
                        <h3 class="font-semibold text-lg">Carlos Souza</h3>
                        <p class="text-sm text-gray-600">carlos.souza@email.com</p>
                    </div>
                    <p class="text-sm text-gray-800 mt-4">"Excelente! Superou minhas expectativas!"</p>
                    <div class="flex mt-2">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Funge de Carne</p>
                </div>
            </div>
        </div>


        <!-- Lista de Pedidos -->
        <div class="bg-white shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4">Meus Pedidos</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b px-4 py-2 text-left">ID</th>
                            <th class="border-b px-4 py-2 text-left">Prato</th>
                            <th class="border-b px-4 py-2 text-left">Estabelecimento</th>
                            <th class="border-b px-4 py-2 text-left">Estado</th>
                            <th class="border-b px-4 py-2 text-left">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b px-4 py-2">#00123</td>
                            <td class="border-b px-4 py-2">Calulu de Peixe</td>
                            <td class="border-b px-4 py-2">Restaurante X</td>
                            <td class="border-b px-4 py-2">Confirmado</td>
                            <td class="border-b px-4 py-2">
                                <button class="text-blue-600 hover:underline">Editar</button>
                                <button class="text-red-600 hover:underline">Apagar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b px-4 py-2">#00124</td>
                            <td class="border-b px-4 py-2">Muamba de Galinha</td>
                            <td class="border-b px-4 py-2">Restaurante Y</td>
                            <td class="border-b px-4 py-2">A Caminho</td>
                            <td class="border-b px-4 py-2">
                                <button class="text-blue-600 hover:underline">Editar</button>
                                <button class="text-red-600 hover:underline">Apagar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b px-4 py-2">#00125</td>
                            <td class="border-b px-4 py-2">Funge de Carne</td>
                            <td class="border-b px-4 py-2">Restaurante Z</td>
                            <td class="border-b px-4 py-2">Cancelado</td>
                            <td class="border-b px-4 py-2">
                                <button class="text-blue-600 hover:underline">Editar</button>
                                <button class="text-red-600 hover:underline">Apagar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Lista de Pedidos -->
        <div class="bg-white shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4">Meusss Pedidos</h2>
            <div class="space-y-4">

                <div class="border p-4 rounded shadow">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" class="w-20 h-20" alt="">
                            <div class="info">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="text-sm text-gray-600">Estabelecimento: <a href="{{ route('companyProfile') }}"
                                        class="text-orange-600 font-semibold hover:underline">La Plaza</a></p>
                                <p class="text-sm text-gray-600 mt-2">Status: <span
                                        class="text-green-600 px-2 py-1 bg-green-100 rounded-full text-sm font-semibold">Confirmado</span>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="border p-4 rounded shadow">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" class="w-20 h-20" alt="">
                            <div class="info">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="text-sm text-gray-600">Estabelecimento: <a href="{{ route('companyProfile') }}"
                                        class="text-orange-600 font-semibold hover:underline">La Plaza</a></p>
                                <p class="text-sm text-gray-600 mt-2">Status: <span
                                        class="text-green-600 px-2 py-1 bg-green-100 rounded-full text-sm font-semibold">Confirmado</span>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="border p-4 rounded shadow">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" class="w-20 h-20" alt="">
                            <div class="info">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="text-sm text-gray-600">Estabelecimento: <a href="{{ route('companyProfile') }}"
                                        class="text-orange-600 font-semibold hover:underline">La Plaza</a></p>
                                <p class="text-sm text-gray-600 mt-2">Status: <span
                                        class="text-yellow-600 px-2 py-1 bg-yellow-100 rounded-full text-sm font-semibold">Pendente</span>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="border p-4 rounded shadow">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" class="w-20 h-20" alt="">
                            <div class="info">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="text-sm text-gray-600">Estabelecimento: <a href="{{ route('companyProfile') }}"
                                        class="text-orange-600 font-semibold hover:underline">La Plaza</a></p>
                                <p class="text-sm text-gray-600 mt-2">Status: <span
                                        class="text-red-600 px-2 py-1 bg-red-100 rounded-full text-sm font-semibold">Cancelado</span>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>





        <!-- Sidebar do Carrinho -->
        <div id="cart-sidebar" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden">
            <div class="absolute top-0 right-0 w-80 bg-white h-full p-6 shadow-xl">
                <h3 class="text-2xl font-bold mb-6 mt-7">Carrinho de Compras</h3>

                <!-- Lista de Itens no Carrinho -->
                <div id="cart-items" class="space-y-4">
                    <!-- Item 1 -->
                    <div class="flex gap-4">
                        <img src="https://via.placeholder.com/100" alt="Prato 1"
                            class="w-20 h-20 object-cover rounded-lg">
                        <div>
                            <h4 class="font-semibold text-lg">Calulu de Peixe</h4>
                            <p class="text-gray-600">Restaurante X</p>
                            <p class="text-gray-800">R$ 30,00</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex gap-4">
                        <img src="https://via.placeholder.com/100" alt="Prato 2"
                            class="w-20 h-20 object-cover rounded-lg">
                        <div>
                            <h4 class="font-semibold text-lg">Muamba de Galinha</h4>
                            <p class="text-gray-600">Restaurante Y</p>
                            <p class="text-gray-800">R$ 25,00</p>
                        </div>
                    </div>
                </div>

                <!-- Valor Total -->
                <div class="mt-6">
                    <div class="flex justify-between">
                        <span class="font-semibold text-lg">Total:</span>
                        <span class="font-semibold text-xl text-green-600">R$ 55,00</span>
                    </div>
                </div>

                <!-- Botão Fechar -->
                <button id="close-cart"
                    class="absolute top-4 right-4 text-white bg-red-600 p-2 rounded-full hover:bg-red-700">
                    <i class="bx bx-x"></i>
                </button>
            </div>
        </div>

    </section>

    <section class="max-w-5xl mx-auto p-6">
        <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
            <h2 class="text-2xl font-bold mb-4">Perfil do Usuário</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Nome</label>
                    <input type="text" value="João Silva" class="w-full border rounded px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" value="joao@email.com" class="w-full border rounded px-3 py-2">
                </div>
            </div>
            <button class="mt-4 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Salvar Alterações</button>
        </div>




        <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
            <h2 class="text-2xl font-bold mb-4">Meu Carrinho</h2>
            <ul>
                <li class="flex justify-between items-center border-b py-2">
                    <span>Prato: Calulu</span>
                    <span>AOA 5.000</span>
                </li>
                <li class="flex justify-between items-center border-b py-2">
                    <span>Prato: Moamba de Galinha</span>
                    <span>AOA 4.500</span>
                </li>
            </ul>
            <div class="flex justify-between mt-4 font-bold">
                <span>Total</span>
                <span>AOA 9.500</span>
            </div>
            <a href="#checkout"
                class="block text-center mt-4 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Ir para o
                Checkout</a>
        </div>


        <div id="checkout" class="bg-white shadow-xl rounded-2xl p-6 mb-10">
            <h2 class="text-2xl font-bold mb-4">Finalizar Pedido</h2>
            <form class="grid md:grid-cols-2 gap-4">
                <input type="text" placeholder="Nome Completo" class="border rounded px-3 py-2">
                <input type="text" placeholder="Endereço de Entrega" class="border rounded px-3 py-2">
                <input type="tel" placeholder="Telefone" class="border rounded px-3 py-2">
                <select class="border rounded px-3 py-2">
                    <option>Método de Pagamento</option>
                    <option>Multicaixa</option>
                    <option>Transferência</option>
                    <option>Dinheiro na Entrega</option>
                </select>
                <textarea placeholder="Observações" class="md:col-span-2 border rounded px-3 py-2"></textarea>
            </form>
            <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Confirmar Pedido</button>
        </div>


        <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
            <div class="md:flex gap-6">
                <img src="/imagens/calulu.jpg" alt="Calulu de peixe" class="rounded-2xl w-full md:w-1/2">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold mb-2">Calulu de Peixe</h2>
                    <p class="text-gray-600 mb-2">Prato tradicional angolano com peixe seco, quiabo e óleo de palma.</p>
                    <p class="text-lg font-bold text-purple-600 mb-4">AOA 5.000</p>
                    <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Adicionar ao
                        Carrinho</button>
                    <div class="mt-6">
                        <h3 class="font-semibold mb-2">Detalhes do Prato</h3>
                        <ul class="list-disc list-inside text-sm text-gray-700">
                            <li>Serve: 1 pessoa</li>
                            <li>Tempo estimado: 30-40 minutos</li>
                            <li>Contém: peixe seco, quiabo, cebola, óleo de palma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
