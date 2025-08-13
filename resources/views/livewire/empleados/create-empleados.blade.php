<div>
    <button
        wire:click="openModal"
        class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">
        Nuevo empleado
    </button>

    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
             wire:keydown.escape="$set('showModal', false)">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl p-6 dark:bg-gray-800">
                <div class="flex justify-between items-center border-b pb-3 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Agregar empleado</h3>
                    <button wire:click="closeModal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        ✕
                    </button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium">Nombres</label>
                            <input type="text" wire:model.defer="form.nombres"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.nombres') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Apellidos</label>
                            <input type="text" wire:model.defer="form.apellidos"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.apellidos') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">CURP</label>
                            <input type="text" wire:model.defer="form.curp"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.curp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Sexo</label>
                            <select wire:model.defer="form.sexo"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                                <option value="">Seleccionar</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            @error('form.sexo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Calle</label>
                            <input type="text" wire:model.defer="form.calle"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.calle') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Número</label>
                            <input type="text" wire:model.defer="form.numero"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.numero') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Código Postal</label>
                            <input type="text" wire:model.defer="form.codigo_postal"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.codigo_postal') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Ciudad</label>
                            <input type="text" wire:model.defer="form.cuidad"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.cuidad') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Colonia</label>
                            <input type="text" wire:model.defer="form.colonia"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.colonia') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Estado</label>
                            <input type="text" wire:model.defer="form.estado"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.estado') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Día de nacimiento</label>
                            <input type="text" wire:model.defer="form.dia_nac"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.dia_nac') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Mes de nacimiento</label>
                            <input type="text" wire:model.defer="form.mes_nac"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.mes_nac') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Año de nacimiento</label>
                            <input type="text" wire:model.defer="form.ano_nac"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.ano_nac') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Correo</label>
                            <input type="email" wire:model.defer="form.correo"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.correo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">RFC</label>
                            <input type="text" wire:model.defer="form.rfc"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.rfc') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Teléfono</label>
                            <input type="text" wire:model.defer="form.telefono"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.telefono') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Contraseña</label>
                            <input type="password" wire:model.defer="form.password"
                                class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" />
                            @error('form.password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <button type="button" wire:click="closeModal"
                            class="px-4 py-2 rounded bg-gray-500 hover:bg-gray-600 text-white">Cancelar</button>
                        <button type="submit"
                            class="px-4 py-2 rounded bg-green-700 hover:bg-green-800 text-white">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
