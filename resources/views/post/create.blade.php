<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>
    @if (session('message'))
        <div class="text-red-600 font-bold p-5">
            {{session('message')}}
        </div>
    @endif
    <div class="max-w-7xl mx-auto px-6">
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <input id="title" type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md">
                </div>
            </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">本文</label>
                    <textarea name="body" id="body" cols="30" rows="5" class="w-auto py-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>
        </form>
    </div>
</x-app-layout>