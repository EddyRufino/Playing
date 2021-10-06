<x-layout>
    <form action="{{ route('place.store') }}" method="POST">
        @csrf

            <Tags :tags="{{$tags}}"></Tags>
        <div>
            <button class="btn py-1 px-3 bg-blue-400 text-white rounded mt-4">
                Save
            </button>
        </div>
    </form>
</x-layout>
