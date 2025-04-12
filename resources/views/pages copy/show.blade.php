<!DOCTYPE html>
<html>
<head>
    <title>{{ $page->title }}</title>
</head>
<body>
    <h1>{{ $page->title }}</h1>

    @foreach ($page->blocks as $block)
        @if ($block->type === 'text')
            <p>{{ $block->settings['text'] }}</p>
        @elseif ($block->type === 'image')
            <img src="" style="max-width: 300px;">
        @endif
    @endforeach
</body>
</html>
