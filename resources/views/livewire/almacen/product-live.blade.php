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
                                    Productos
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    Productos
                </h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <div class="relative mt-1 lg:w-64 xl:w-96">
                        <input type="text" wire:model.live='search'
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search for products">
                    </div>

                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <x-button.button-pluss-purple wire:click="create">
                        Create
                    </x-button.button-pluss-purple>
                    <x-button.button-download wire:click="export">
                        Export
                    </x-button.button-download>
                    @include('livewire.almacen.product-modal')
                </div>
            </div>
        </div>
        <div class="card card-outline collapsed-card">
            <div class="card-header">
                <h4 class="card-title">Filtros</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="items-center sm:flex">
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <x-select-input wire:model.live.debounce.200ms="lineFilter" for='rol' label=''>
                                <option>*Lineas</option>
                                @forelse ($this->lines as $line)
                                <option value="{{ $line->id }}">{{ $line->name }}</option>
                                @empty
                                @endforelse
                            </x-select-input>
                        </div>
                        <div class="relative">
                            <x-select-input wire:model.live.debounce.200ms="categoryFilter" for='rol' label=''>
                                <option>*Categorias</option>
                                @forelse ($this->categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty
                                @endforelse
                            </x-select-input>
                        </div>
                        <div class="relative">
                            <x-select-input wire:model.live.debounce.200ms="brandFilter" for='rol' label=' '>
                                <option>*Marcas</option>
                                @forelse ($this->brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @empty
                                @endforelse
                            </x-select-input>
                        </div>
                        <div class="relative">
                            <x-select-input wire:model.live.debounce.200ms="num" for='rol' label=' '>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="1000">1000</option>
                            </x-select-input>
                        </div>
                        <div class="relative">
                            <x-select-input wire:model.live.debounce.200ms="isActive" for='rol' label=' '>
                                <option>*Activo</option>
                                <option value="1">SI</option>
                                <option value="0">No</option>
                            </x-select-input>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.almacen.product-form')
    @include('livewire.almacen.product-table')
</div>
