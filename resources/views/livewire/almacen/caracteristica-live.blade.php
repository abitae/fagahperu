<div>
    <div
        class="space-y-2 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="/dashboard"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">
                                    Catalogo
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">
                                    Caracteristicas
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Caracteristicas de producto
                </h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <div class="relative mt-1 lg:w-64 xl:w-96">
                       
                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-6">
        <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow sm:rounded-lg">
                    <!--begin::Form-->
                    <form class="form" wire:submit="exportProduct">
                        <div
                            class="p-4 space-y-2 transition-all duration-300 bg-white border-4 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.estructura' type='text' for='estructura' label='estructura'
                                        placeholder='estructura' />
                                    @error('lineForm.estructura')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.base_del_asiento' type='text' for='base_del_asiento' label='base_del_asiento'
                                        placeholder='base_del_asiento' />
                                    @error('lineForm.base_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.relleno_del_asiento' type='text' for='relleno_del_asiento' label='relleno_del_asiento'
                                        placeholder='relleno_del_asiento' />
                                    @error('lineForm.relleno_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.acabado_del_asiento' type='text' for='acabado_del_asiento' label='acabado_del_asiento'
                                        placeholder='acabado_del_asiento' />
                                    @error('lineForm.acabado_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.espaldar' type='text' for='espaldar' label='espaldar'
                                        placeholder='espaldar' />
                                    @error('lineForm.espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.relleno_del_espaldar' type='text' for='relleno_del_espaldar' label='relleno_del_espaldar'
                                        placeholder='relleno_del_espaldar' />
                                    @error('lineForm.relleno_del_espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.acabado_del_espaldar' type='text' for='acabado_del_espaldar' label='acabado_del_espaldar'
                                        placeholder='acabado_del_espaldar' />
                                    @error('lineForm.acabado_del_espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.reposa_brazos' type='text' for='reposa_brazos' label='reposa_brazos'
                                        placeholder='reposa_brazos' />
                                    @error('lineForm.reposa_brazos')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.cantidad_de_patas' type='text' for='cantidad_de_patas' label='cantidad_de_patas'
                                        placeholder='cantidad_de_patas' />
                                    @error('lineForm.cantidad_de_patas')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.soporte_peso_máximo' type='text' for='soporte_peso_máximo' label='soporte_peso_máximo'
                                        placeholder='soporte_peso_máximo' />
                                    @error('lineForm.soporte_peso_máximo')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.garantía_de_fabrica' type='text' for='garantía_de_fabrica' label='garantía_de_fabrica'
                                        placeholder='garantía_de_fabrica' />
                                    @error('lineForm.garantía_de_fabrica')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.unidad_de_despacho' type='text' for='unidad_de_despacho' label='unidad_de_despacho'
                                        placeholder='unidad_de_despacho' />
                                    @error('lineForm.unidad_de_despacho')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.gama_de_color' type='text' for='gama_de_color' label='gama_de_color'
                                        placeholder='gama_de_color' />
                                    @error('lineForm.gama_de_color')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.marca' type='text' for='marca' label='marca'
                                        placeholder='marca' />
                                    @error('lineForm.marca')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.modelo' type='text' for='modelo' label='modelo'
                                        placeholder='modelo' />
                                    @error('lineForm.modelo')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.codigo_de_identificacion_unico' type='text' for='codigo_de_identificacion_unico' label='codigo_de_identificacion_unico'
                                        placeholder='codigo_de_identificacion_unico' />
                                    @error('lineForm.codigo_de_identificacion_unico')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.empaque_de_fabrica' type='text' for='empaque_de_fabrica' label='empaque_de_fabrica'
                                        placeholder='empaque_de_fabrica' />
                                    @error('lineForm.empaque_de_fabrica')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.certificado_de_ergonomía' type='text' for='certificado_de_ergonomía' label='certificado_de_ergonomía'
                                        placeholder='certificado_de_ergonomía' />
                                    @error('lineForm.certificado_de_ergonomía')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.entrega_del_producto_armado' type='text' for='entrega_del_producto_armado' label='entrega_del_producto_armado'
                                        placeholder='entrega_del_producto_armado' />
                                    @error('lineForm.entrega_del_producto_armado')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.soporte_del_asiento' type='text' for='soporte_del_asiento' label='soporte_del_asiento'
                                        placeholder='soporte_del_asiento' />
                                    @error('lineForm.soporte_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.reposa_brazos' type='text' for='reposa_brazos' label='reposa_brazos'
                                        placeholder='reposa_brazos' />
                                    @error('lineForm.reposa_brazos')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_patas' type='text' for='material_patas' label='material_patas'
                                        placeholder='material_patas' />
                                    @error('lineForm.material_patas')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.apilable' type='text' for='apilable' label='apilable'
                                        placeholder='apilable' />
                                    @error('lineForm.apilable')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.relleno_reposa_brazos' type='text' for='relleno_reposa_brazos' label='relleno_reposa_brazos'
                                        placeholder='relleno_reposa_brazos' />
                                    @error('lineForm.relleno_reposa_brazos')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_del_piston' type='text' for='material_del_piston' label='material_del_piston'
                                        placeholder='material_del_piston' />
                                    @error('lineForm.material_del_piston')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_de_la_funda_del_piston' type='text' for='material_de_la_funda_del_piston' label='material_de_la_funda_del_piston'
                                        placeholder='material_de_la_funda_del_piston' />
                                    @error('lineForm.material_de_la_funda_del_piston')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tipo_de_mecanismo_del_asiento' type='text' for='tipo_de_mecanismo_del_asiento' label='tipo_de_mecanismo_del_asiento'
                                        placeholder='tipo_de_mecanismo_del_asiento' />
                                    @error('lineForm.tipo_de_mecanismo_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_del_mecanismo_del_asiento' type='text' for='material_del_mecanismo_del_asiento' label='material_del_mecanismo_del_asiento'
                                        placeholder='material_del_mecanismo_del_asiento' />
                                    @error('lineForm.material_del_mecanismo_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.soporte_lumbar' type='text' for='soporte_lumbar' label='soporte_lumbar'
                                        placeholder='soporte_lumbar' />
                                    @error('lineForm.soporte_lumbar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.reposacabeza' type='text' for='reposacabeza' label='reposacabeza'
                                        placeholder='reposacabeza' />
                                    @error('lineForm.reposacabeza')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.numero_de_aspas' type='text' for='numero_de_aspas' label='número_de_aspas'
                                        placeholder='numero_de_aspas' />
                                    @error('lineForm.numero_de_aspas')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_del_aspa' type='text' for='material_del_aspa' label='material_del_aspa'
                                        placeholder='material_del_aspa' />
                                    @error('lineForm.material_del_aspa')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.material_de_las_ruedas' type='text' for='material_de_las_ruedas' label='material_de_las_ruedas'
                                        placeholder='material_de_las_ruedas' />
                                    @error('lineForm.material_de_las_ruedas')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tapizado_del_asiento' type='text' for='tapizado_del_asiento' label='tapizado_del_asiento'
                                        placeholder='tapizado_del_asiento' />
                                    @error('lineForm.tapizado_del_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.cubierta_del_espaldar' type='text' for='cubierta_del_espaldar' label='cubierta_del_espaldar'
                                        placeholder='cubierta_del_espaldar' />
                                    @error('lineForm.cubierta_del_espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tapizado_del_espaldar' type='text' for='tapizado_del_espaldar' label='tapizado_del_espaldar'
                                        placeholder='tapizado_del_espaldar' />
                                    @error('lineForm.tapizado_del_espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.mecanismo_del_espaldar' type='text' for='mecanismo_del_espaldar' label='mecanismo_del_espaldar'
                                        placeholder='mecanismo_del_espaldar' />
                                    @error('lineForm.mecanismo_del_espaldar')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tablero' type='text' for='tablero' label='tablero'
                                        placeholder='tablero' />
                                    @error('lineForm.tablero')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.platina_de_anclaje' type='text' for='platina_de_anclaje' label='platina_de_anclaje'
                                        placeholder='platina_de_anclaje' />
                                    @error('lineForm.platina_de_anclaje')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tapizado_asiento' type='text' for='tapizado_asiento' label='tapizado_asiento'
                                        placeholder='tapizado_asiento' />
                                    @error('lineForm.tapizado_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.platina_de_anclaje' type='text' for='platina_de_anclaje' label='platina_de_anclaje'
                                        placeholder='platina_de_anclaje' />
                                    @error('lineForm.platina_de_anclaje')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.tapizado_asiento' type='text' for='tapizado_asiento' label='tapizado_asiento'
                                        placeholder='tapizado_asiento' />
                                    @error('lineForm.tapizado_asiento')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.cantidad_de_cuerpos' type='text' for='cantidad_de_cuerpos' label='cantidad_de_cuerpos'
                                        placeholder='cantidad_de_cuerpos' />
                                    @error('lineForm.cantidad_de_cuerpos')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.contacto_superficie' type='text' for='contacto_superficie' label='contacto_superficie'
                                        placeholder='contacto_superficie' />
                                    @error('lineForm.contacto_superficie')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <x-text-input wire:model.live='lineForm.cod_de_identif_unico' type='text' for='cod_de_identif_unico' label='cod_de_identif_unico'
                                        placeholder='cod_de_identif_unico' />
                                    @error('lineForm.cod_de_identif_unico')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $message }}.</p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>