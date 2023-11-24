<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            form
        </h2>
    </x-slot>
    <div class="max-w-7xl max-auto px-6">
        @if(session('message'))
        <div class="text-red-600 font-bold">
            {{ session('message') }}
        </div>
        @endif
        <form method="POST" action="{{ route('post.store') }}">
            {{-- routeの中にはフォーム送信時のルート設定を書きます --}}
            @csrf
            <div class="mt-8">
                <div>
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :message="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="title" value="{{ old('title') }}">
                        {{-- old関数はバリデーションエラー前のエラーの値を残しておくことができる --}}
                    
                </div>
            </div>

            <div class="w-full flex frex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <x-input-error :message="$errors->get('body')" class="mt-2"></x-input-error>
                <textarea name="body" id="body" cols="30" rows="5"
                    class="w-auto py-2 border border-gray-300 rounded-md ">
                {{ old('body')}}
                </textarea>
            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
