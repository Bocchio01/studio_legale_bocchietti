@props(['data'])

<ul {{ $attributes }}>
    @foreach ($data as $content)
        <li @class(['my-4' => $content['type'] === 'folder'])>
            @if ($content['type'] === 'folder')
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M2 4a2 2 0 012-2h4.586a2 2 0 011.414.586l1.414 1.414A2 2 0 0012.586 4H18a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V4z" />
                    </svg>
                    <p class="font-bold">
                        {{ $content['name'] }}
                        @if (empty($content['children']))
                            <span class="text-gray-500">(Vuota)</span>
                        @endif
                    </p>
                </span>

                <x-treeview :data="$content['children']" class="pl-5" />
            @elseif ($content['type'] === 'file')
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414a2 2 0 00-.586-1.414l-3.414-3.414A2 2 0 0011.586 2H6zm7 6a1 1 0 11-2 0V3.5L14.5 8H13z"
                            clip-rule="evenodd" />
                    </svg>
                    <a href="{{ url()->query(url()->current(), ['ID' => $content['ID']]) }}">
                        {{ $content['name'] }}
                    </a>
                </span>
            @endif
        </li>
    @endforeach
</ul>
