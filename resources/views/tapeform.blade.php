<x-app-layout>
    <div class="flex justify-center m-24 text-white">
        <form class="flex flex-col gap-4 p-2 bg-gray-600 rounded-md" action="{{route('tapeform')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="text-xl self-center" for="tape">Select a file</label>
            <input type="file" name="tape" id="tape">
            <input class="w-24 bg-gradient-to-b from-blue-900 to-blue-400 rounded-lg self-center border-t active:border-t-0" type="submit" value="Upload">
        </form>
    </div>
</x-app-layout>