@extends('backend.layouts.main')

@section('content')
    <div class="container-fluid page-content">
        <form method="POST" action="{{ route('pages.update', $page->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $page->title }}" placeholder="Page Title" required>
            <input type="text" name="slug" value="{{ $page->slug }}" placeholder="page-slug" required>

            <div>
                <button type="button" class="add-block" data-type="text">Add Text Block</button>
            </div>

            <div id="page-builder"></div>
            <input type="hidden" name="blocks" id="blocks-json">
            <button type="submit">Update Page</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        const builder = document.getElementById('page-builder');
        const addButtons = document.querySelectorAll('.add-block');
        const blocksInput = document.getElementById('blocks-json');

        let blocks = {!! json_encode(json_decode($page->blocks, true) ?? []) !!};
        let editors = [];

        renderBlocks();

        addButtons.forEach(button => {
            button.addEventListener('click', () => {
                const type = button.dataset.type;
                const block = {type: type, settings: {}};
                blocks.push(block);
                renderBlocks();
            });
        });

        function renderBlocks() {
            builder.innerHTML = '';
            editors = [];

            blocks.forEach((block, index) => {
                const div = document.createElement('div');
                div.className = 'block';
                const textareaId = `editor-${index}`;
                div.innerHTML = `<textarea class="ckeditor" id="${textareaId}"></textarea>
                                 <button type="button" onclick="removeBlock(${index})">Remove</button>`;
                builder.appendChild(div);

                if (block.type === 'text') {
                    CKEDITOR.replace(textareaId, {
                        filebrowserUploadUrl: "{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}",
                        filebrowserUploadMethod: 'form'
                    });

                    CKEDITOR.instances[textareaId].on('change', function () {
                        updateSetting(index, 'text', CKEDITOR.instances[textareaId].getData());
                    });

                    editors[index] = CKEDITOR.instances[textareaId];

                    // Set existing content if available
                    if (block.settings.text) {
                        CKEDITOR.instances[textareaId].setData(block.settings.text);
                    }
                }
            });

            blocksInput.value = JSON.stringify(blocks);
        }

        function updateSetting(index, key, value) {
            blocks[index].settings[key] = value;
            blocksInput.value = JSON.stringify(blocks);
        }

        function removeBlock(index) {
            if (editors[index]) {
                editors[index].destroy();
            }
            blocks.splice(index, 1);
            renderBlocks();
        }

        window.updateSetting = updateSetting;
        window.removeBlock = removeBlock;
    </script>
@endpush
