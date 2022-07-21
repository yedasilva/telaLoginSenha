<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel de controle') }}
        </h2>
    </x-slot> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full text-left tracking wider">
                        <thead class="tracking wider">
                            <tr>
                            <th class="px-6 py-3 text-left"><p>Id</p></th>
                            <th class="px-6 py-3 text-left"><p">Nome do Usuário</p></th>
                            <th class="px-6 py-3 text-left"><p">e-mail</p></th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                            <td class="px6 py-4 text-center"><p>{{auth()->user()->id}}</p></td>
                            <td class="px6 py-4 text-center"><p>{{auth()->user()->name}}</p></td>
                            <td class="px6 py-4 text-center"><p>{{auth()->user()->email}}</p></td>
                            </tr>    
                        </tbody>
                    </table>                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
