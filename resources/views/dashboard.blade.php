<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome do Usuário</th>
                        <th scope="col">e-mail</th>      
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <th scope="row">1</th>
                        <td>{{auth()->user()->name}}</td>
                        <td>{{auth()->user()->email}}</td>      
                        </tr>
                        <tr>
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
