<section class="bg-gray-50 dark:bg-gray-900 min-h-screen">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-4">
    <a href="#" class="flex items-center mb-6 text-3xl font-bold text-green-700 dark:text-green-400">
      Mueblix
    </a>

    <div class="w-full bg-white rounded-2xl shadow-lg dark:border dark:bg-gray-800 dark:border-gray-700 sm:max-w-2xl xl:p-0">
      <div class="p-6 space-y-8 sm:p-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white">Crea tu cuenta</h1>

        <form action="#" class="space-y-8" wire.submit="save">

          <!-- DATOS PERSONALES -->
          <div>
            <h2 class="text-xl font-semibold text-green-700 dark:text-green-400 mb-4 border-b pb-1">Datos personales</h2>
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Nombres</label>
                <input type="text" class="input-modern" placeholder="Escribe tus nombres" wire:model="form.nombres">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Apellidos</label>
                <input type="text" class="input-modern" placeholder="Escribe tus apellidos" wire:model="form.apellidos">
              </div>
              <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">CURP</label>
                <input type="text" class="input-modern" placeholder="CURP" wire:model="form.curp">
              </div>
              <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Sexo</label>
                <select class="input-modern" wire:model="form.sexo">
                  <option selected disabled>Selecciona una opción</option>
                  <option value="masculino">Masculino</option>
                  <option value="femenino">Femenino</option>
                  <option value="otro">Otro</option>
                </select>
              </div>
            </div>
          </div>

          <!-- DOMICILIO -->
          <div>
            <h2 class="text-xl font-semibold text-green-700 dark:text-green-400 mb-4 border-b pb-1 text-center">Domicilio</h2>
            <div class="grid md:grid-cols-3 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Calle</label>
                <input type="text" class="input-modern" wire:model="form.calle">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Número</label>
                <input type="text" class="input-modern" wire:model="form.numero">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Código Postal</label>
                <input type="text" class="input-modern" wire:model="form.codigo_postal">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Colonia</label>
                <input type="text" class="input-modern" wire:model="form.colonia">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Ciudad</label>
                <input type="text" class="input-modern" wire:model="form.cuidad">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Estado</label>
                <input type="text" class="input-modern" wire:model="form.estado">
              </div>
            </div>
          </div>

          <!-- DATOS DE NACIMIENTO -->
          <div>
            <h2 class="text-xl font-semibold text-green-700 dark:text-green-400 mb-4 border-b pb-1">Datos de nacimiento</h2>
            <div class="grid md:grid-cols-3 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Día</label>
                <input type="text" class="input-modern" placeholder="01" wire:model="form.dia_nac">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Mes</label>
                <input type="text" class="input-modern" placeholder="Enero" wire:model="form.mes_nac">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white text-center">Año</label>
                <input type="text" class="input-modern" placeholder="2000" wire:model="form.ano_nac">
              </div>
            </div>
          </div>

          <!-- DATOS DE CONTACTO -->
          <div>
            <h2 class="text-xl font-semibold text-green-700 dark:text-green-400 mb-4 border-b pb-1">Datos de contacto y acceso</h2>
            <div class="grid gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white">Correo electrónico</label>
                <input type="email" class="input-modern" placeholder="ejemplo@email.com" wire:model="form.correo">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                <input type="tel" class="input-modern" wire:model="form.telefono">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                <input type="password" class="input-modern" wire:model="form.password">
              </div>
            </div>
          </div>

          <!-- BOTÓN -->
          <div class="text-center">
            <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-emerald-500 text-white font-bold py-3 px-4 rounded-xl hover:from-green-700 hover:to-emerald-600 transition duration-300 shadow-md">
              Registrar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


