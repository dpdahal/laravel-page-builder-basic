@extends('backend.layouts.main')

@section('content')
    @foreach ($page->blocks as $block)
        <div class="block">
            @if ($block->type === 'text')
                {!! $block->settings['text'] ?? '' !!}
            @elseif ($block->type === 'image' && !empty($block->settings['src']))
                <img src="{{ $block->settings['src'] }}" alt="Image Block" style="max-width:100%; height:auto;">
            @endif
            @if ($block->type === 'heading')
                <h2>{{ $block->settings['text'] ?? '' }}</h2>
            @elseif ($block->type === 'video')
                <iframe width="560" height="315" src="{{ $block->settings['src'] }}" frameborder="0" allowfullscreen></iframe>
            @endif
        </div>
    @endforeach
@endsection
