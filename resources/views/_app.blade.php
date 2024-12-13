<x-app-layout>
    <main>
        <ul class="flex flex-col gap-y-4">
            @foreach ($tapes as $tape)
            <li class="self-center p-4 rounded-lg bg-gradient-to-b from-black via-gray-500 to-black">
                <p>Filename: {{ $tape->filename }}</p>
                <p>Uploaded by: {{ $tape->username }}</p>
                <a class="p-1 bg-gradient-to-b active:bg-gradient-to-t from-green-400 to-green-900 rounded-lg" href="/tape/get/{{ $tape->id }}">Download</a>
            </li> 
            @endforeach
        </ul>
    </main>
</x-app-layout>