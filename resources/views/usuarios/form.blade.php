@csrf
<div class="block">
    <x-jet-label for="NombreUsuario" value="{{ __('Nombre Completo') }}" />
    <x-jet-input id="NombreUsuario" class="block mt-1 w-full" type="text" name="NombreUsuario" :value="old('NombreUsuario', $usuario->NombreUsuario)" required autofocus />
    <x-jet-label for="CedulaUsuario" value="{{ __('Cédula') }}" /> 
    <x-jet-input id="CedulaUsuario" class="block mt-1 w-full" type="text" name="CedulaUsuario" :value="old('CedulaUsuario', $usuario->CedulaUsuario)" required autofocus />    
    <x-jet-label for="TelefonoUsuario" value="{{ __('Teléfono') }}" />
    <x-jet-input id="TelefonoUsuario" class="block mt-1 w-full" type="text" name="TelefonoUsuario" :value="old('TelefonoUsuario', $usuario->TelefonoUsuario)" required autofocus />
    <x-jet-label for="CiudadUsuario" value="{{ __('Centro Operativo') }}" />
    <x-jet-input id="CiudadUsuario" class="block mt-1 w-full" type="text" name="CiudadUsuario" :value="old('CiudadUsuario', $usuario->CiudadUsuario)" required autofocus />
    <x-jet-label for="NicknameUsuario" value="{{ __('Correo') }}" />
    <x-jet-input id="NicknameUsuario" class="block mt-1 w-full" type="text" name="NicknameUsuario" :value="old('NicknameUsuario', $usuario->NicknameUsuario)" required autofocus />
    <x-jet-label for="PasswordUsuario" value="{{ __('Contraseña') }}" />
    <x-jet-input id="PasswordUsuario" class="block mt-1 w-full" type="password" name="PasswordUsuario" :value="old('PasswordUsuario', $usuario->PasswordUsuario)" required autofocus />
    <x-jet-label for="RolUsuario" value="{{ __('Cargo') }}" />
    <x-jet-input id="RolUsuario" class="block mt-1 w-full" type="text" name="RolUsuario" :value="old('RolUsuario', $usuario->RolUsuario)" required autofocus />
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('usuarios.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>