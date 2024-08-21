@props(['items'])

@foreach ($items as $key => $item)
    @if (is_array($item))
        <li class="folder">{{ $key }}
            <ul>
                <x-treefolder :items="$item" />
            </ul>
        </li>
    @else
        <li>
            <a href="{{ route('curricula', ['fileName' => $item]) }}">
                {{ $item ?? 'Ancora nessun file in questa cartella.' }}
            </a>
        </li>
    @endif
@endforeach
