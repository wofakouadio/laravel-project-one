<x-layouts>
    <x-card class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($listings->isEmpty())
                @foreach($listings as $listing)
                    <tr class="border-gray-300">
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <img class="w-48 mr-6 mb-6" src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/no-image.png')}}" alt=""/>
                        </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    {{$listing->title}}
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/listing/{{$listing->id}}/edit">
                        <i class="fa-solid fa-pencil"></i> Edit
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form method="POST" action="/listing/{{$listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No listings found</p>
                    </td>
                </tr>
            @endunless
            </tbody>
        </table>
    </x-card>
</x-layouts>
