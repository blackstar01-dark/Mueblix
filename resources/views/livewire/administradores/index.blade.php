<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    {{-- Bienvenida Administrador --}}
    @if(Auth::guard('administradores')->check())
        @php
            $admin = Auth::guard('administradores')->user();
        @endphp
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-8 max-w-md text-center">
            <h1 class="text-3xl font-bold mb-4">
                ¡Bienvenido, {{ $admin->nombres }}!
            </h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Has iniciado sesión como <span class="font-semibold">Administrador</span>.
                Aquí podrás gestionar empleados, productos y pedidos.
            </p>
            <a href="/dashboard" class="inline-block bg-green-600 text-white px-5 py-2 rounded-lg shadow hover:bg-green-700 transition">
                Ir al panel de control
            </a>
        </div>
    @endif

    {{-- Bienvenida Empleado --}}
    @if(Auth::guard('empleados')->check())
        @php
            $empleado = Auth::guard('empleados')->user();
        @endphp
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-8 max-w-md text-center">
            <h1 class="text-3xl font-bold mb-4">
                ¡Bienvenido, {{ $empleado->nombres }}!
            </h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Has iniciado sesión como <span class="font-semibold">Empleado</span>.
                Aquí podrás consultar pedidos, gestionar tu información y ayudar en la operación.
            </p>
            <a href="/panel-empleado" class="inline-block bg-green-600 text-white px-5 py-2 rounded-lg shadow hover:bg-green-700 transition">
                Ir a tu panel
            </a>
        </div>
    @endif

    {{-- Si no tiene permisos --}}
    @if(!Auth::guard('administradores')->check() && !Auth::guard('empleados')->check())
        <div class="text-center">
            <p class="text-lg">No tienes permisos para ver esta página.</p>
        </div>
    @endif

</div>