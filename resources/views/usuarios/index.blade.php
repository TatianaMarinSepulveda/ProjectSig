<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
            <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2">
                <div class="flex justify-end">
                    <a href="{{ route('usuarios.create') }}">
                        <x-jet-button>Crear</x-jet-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Nombre Completo
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Centro Operativo
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Cargo
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Opciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr class="border-b">
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$usuario->NombreUsuario}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$usuario->CiudadUsuario}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$usuario->RolUsuario}}
                                            </td>
                                                               
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="{{route('usuarios.show',$usuario)}}">
                                                    <x-jet-button>Ver 👀</x-jet-button>
                                                </a>
                                                <a href="{{route('usuarios.edit',$usuario)}}">
                                                    <x-jet-button>Editar 🖊</x-jet-button>
                                                </a>
                                                <form action="{{route('usuarios.destroy', $usuario)}}" method="post" style="display:contents">
                                                    @method("DELETE")
                                                    @csrf
                                                    <x-jet-danger-button type="submit"  >Eliminar 🗑</x-jet-danger-button>
                                                </form>
                                            </td>
                                        </tr>
                                       
                                      @endforeach                    
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>