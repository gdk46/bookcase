{{-- form --}}
<div class="flex items-center justify-center h-screen">
    <div class="w-full bg-white rounded shadow-lg p-8 m-3 md:max-w-sm md:mx-auto">
        <a class="py-2 px-3 border border-indigo-600 text-indigo-600 cursor-pointer rounded-full" href="/" rel="">
            &#5176;
        </a>
        <h1 class="block w-full text-2xl font-light text-grey-darkest mb-2 text-center">Editar livro</h1>
        
        <form wire:submit.prevent="update" class="mb-4 md:flex md:flex-wrap md:justify-between">
            @csrf

            <div class="flex flex-col mb-4 md:w-full">
                @if (session()->has('menssage'))
                    <div class="w-full bg-green-300 radius-sm p-4">
                        <p class="text-green-600 text-xl">{{session('menssage')}}</p>
                    </div>
                @endif
            </div>

            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light tracking-wide text-lg text-grey-darkest">Nome</label>
                <input type="text" wire:model="nome" class="border focus:outline-none py-2 px-3 text-grey-darkest md:mr-2">
                @error('nome') {{$message}} @enderror
            </div>

            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light text-lg text-grey-darkest" for="descricao">URL da capa do livro</label>
                <input type="text" wire:model="imgCapa" class="border focus:outline-none py-2 px-3 text-grey-darkest md:mr-2" >
                @error('imgCapa') {{$message}} @enderror
            </div>

            <div class="flex flex-col mb-4 md:w-full">
                <label class="mb-2 font-light text-lg text-grey-darkest" for="descricao">Descrição</label>
                <textarea wire:model="descricao" class="border focus:outline-none py-2 px-3 text-grey-darkest"></textarea>
                @error('descricao') {{$message}} @enderror
            </div>

            <button class="block bg-purple-700 hover:bg-purple-800 text-white mx-auto p-4 rounded md:w-full"
                type="submit">Finalizar edição</button>
        </form>
    </div>
</div>
{{-- end form --}}
