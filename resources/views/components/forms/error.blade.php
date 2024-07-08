@props(['name'])


@if ($errors->any())
    <span>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </span>
@endif
