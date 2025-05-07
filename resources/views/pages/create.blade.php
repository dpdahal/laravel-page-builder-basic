{{--@extends('layouts.app')--}}

{{--@section('title', 'Create Page')--}}
{{--@section('header', 'Create New Page')--}}

{{--@section('content')--}}
{{--    <form method="POST" action="{{ route('pages.store') }}">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="Page Title" required>--}}
{{--        <input type="text" name="slug" placeholder="page-slug" required>--}}

{{--        <div>--}}
{{--            <button type="button" class="add-block" data-type="text">Add Text Block</button>--}}
{{--            <button type="button" class="add-block" data-type="image">Add Image Block</button>--}}
{{--            <button type="button" class="add-block" data-type="heading">Add Heading Block</button>--}}
{{--            <button type="button" class="add-block" data-type="video">Add Video Block</button>--}}
{{--        </div>--}}

{{--        <div id="page-builder"></div>--}}
{{--        <input type="hidden" name="blocks" id="blocks-json">--}}

{{--        <button type="submit">Save Page</button>--}}
{{--    </form>--}}
{{--@endsection--}}

{{--@push('scripts')--}}
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        const builder = document.getElementById('page-builder');--}}
{{--        const addButtons = document.querySelectorAll('.add-block');--}}
{{--        const blocksInput = document.getElementById('blocks-json');--}}

{{--        let blocks = [];--}}
{{--        let editors = [];--}}

{{--        addButtons.forEach(button => {--}}
{{--            button.addEventListener('click', () => {--}}
{{--                const type = button.dataset.type;--}}
{{--                const block = { type: type, settings: {} };--}}
{{--                blocks.push(block);--}}
{{--                renderBlocks();--}}
{{--            });--}}
{{--        });--}}

{{--        function renderBlocks() {--}}
{{--            builder.innerHTML = '';--}}
{{--            editors = [];--}}

{{--            blocks.forEach((block, index) => {--}}
{{--                const div = document.createElement('div');--}}
{{--                div.className = 'block';--}}
{{--                div.innerHTML = getBlockHTML(block, index) + `<button type="button" onclick="removeBlock(${index})">Remove</button>`;--}}
{{--                builder.appendChild(div);--}}

{{--                if (block.type === 'text') {--}}
{{--                    ClassicEditor.create(div.querySelector('.ckeditor')).then(editor => {--}}
{{--                        editor.model.document.on('change:data', () => {--}}
{{--                            updateSetting(index, 'text', editor.getData());--}}
{{--                        });--}}
{{--                        if (block.settings.text) editor.setData(block.settings.text);--}}
{{--                        editors[index] = editor;--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}

{{--            blocksInput.value = JSON.stringify(blocks);--}}
{{--        }--}}

{{--        function getBlockHTML(block, index) {--}}
{{--            if (block.type === 'text') {--}}
{{--                return `<textarea class="ckeditor"></textarea>`;--}}
{{--            }--}}
{{--            if (block.type === 'image') {--}}
{{--                return `--}}
{{--            <input type="text" placeholder="Image URL" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">--}}
{{--            <input type="file" accept="image/*" onchange="uploadImage(event, ${index})">--}}
{{--        `;--}}
{{--            }--}}
{{--            if (block.type === 'heading') {--}}
{{--                return `--}}
{{--            <input type="text" placeholder="Heading Text" value="${block.settings.text || ''}" oninput="updateSetting(${index}, 'text', this.value)">--}}
{{--            <select onchange="updateSetting(${index}, 'level', this.value)">--}}
{{--                <option value="h1" ${block.settings.level === 'h1' ? 'selected' : ''}>H1</option>--}}
{{--                <option value="h2" ${block.settings.level === 'h2' ? 'selected' : ''}>H2</option>--}}
{{--                <option value="h3" ${block.settings.level === 'h3' ? 'selected' : ''}>H3</option>--}}
{{--            </select>--}}
{{--        `;--}}
{{--            }--}}
{{--            if (block.type === 'video') {--}}
{{--                return `--}}
{{--            <input type="text" placeholder="Video URL (YouTube/embed)" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">--}}
{{--            <input type="file" accept="video/*" onchange="uploadVideo(event, ${index})">--}}
{{--        `;--}}
{{--            }--}}
{{--            return '';--}}
{{--        }--}}

{{--        function updateSetting(index, key, value) {--}}
{{--            blocks[index].settings[key] = value;--}}
{{--            blocksInput.value = JSON.stringify(blocks);--}}
{{--        }--}}

{{--        function removeBlock(index) {--}}
{{--            blocks.splice(index, 1);--}}
{{--            renderBlocks();--}}
{{--        }--}}

{{--        function uploadImage(event, index) {--}}
{{--            const file = event.target.files[0];--}}
{{--            const reader = new FileReader();--}}
{{--            reader.onload = function(e) {--}}
{{--                blocks[index].settings.src = e.target.result;--}}
{{--                renderBlocks();--}}
{{--            }--}}
{{--            reader.readAsDataURL(file);--}}
{{--        }--}}

{{--        function uploadVideo(event, index) {--}}
{{--            const file = event.target.files[0];--}}
{{--            const reader = new FileReader();--}}
{{--            reader.onload = function(e) {--}}
{{--                blocks[index].settings.src = e.target.result;--}}
{{--                renderBlocks();--}}
{{--            }--}}
{{--            reader.readAsDataURL(file);--}}
{{--        }--}}

{{--        window.updateSetting = updateSetting;--}}
{{--        window.removeBlock = removeBlock;--}}
{{--        window.uploadImage = uploadImage;--}}
{{--        window.uploadVideo = uploadVideo;--}}
{{--    </script>--}}
{{--@endpush--}}




@extends('layouts.app')

@section('title', 'Create Page')
@section('header', 'Create New Page')

@section('content')
    <form method="POST" action="{{ route('pages.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Page Title" required>
        <input type="text" name="slug" placeholder="page-slug" required>

        <div>
            <button type="button" class="add-block" data-type="text">Add Text Block</button>
            <button type="button" class="add-block" data-type="image">Add Image Block</button>
            <button type="button" class="add-block" data-type="heading">Add Heading Block</button>
            <button type="button" class="add-block" data-type="video">Add Video Block</button>
        </div>

        <div id="page-builder"></div>
        <input type="hidden" name="blocks" id="blocks-json">

        <button type="submit">Save Page</button>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        const builder = document.getElementById('page-builder');
        const addButtons = document.querySelectorAll('.add-block');
        const blocksInput = document.getElementById('blocks-json');

        let blocks = [];
        let editors = [];

        addButtons.forEach(button => {
            button.addEventListener('click', () => {
                const type = button.dataset.type;
                const block = { type: type, settings: {} };
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
                div.innerHTML = getBlockHTML(block, index) + `<button type="button" onclick="removeBlock(${index})">Remove</button>`;
                builder.appendChild(div);

                if (block.type === 'text') {
                    ClassicEditor.create(div.querySelector('.ckeditor')).then(editor => {
                        editor.model.document.on('change:data', () => {
                            updateSetting(index, 'text', editor.getData());
                        });
                        if (block.settings.text) editor.setData(block.settings.text);
                        editors[index] = editor;
                    });
                }
            });

            blocksInput.value = JSON.stringify(blocks);
        }

        function getBlockHTML(block, index) {
            if (block.type === 'text') {
                return `<textarea class="ckeditor"></textarea>`;
            }

            if (block.type === 'image') {
                const preview = block.settings.src ? `<img src="${block.settings.src}" alt="${block.settings.title || ''}" style="max-width:200px; display:block;">` : '';
                const title = block.settings.title || '';
                return `
                    <input type="text" placeholder="Image URL" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">
                    <input type="file" accept="image/*" onchange="uploadImage(event, ${index})">
                    <input type="text" placeholder="Image Title" value="${title}" oninput="updateSetting(${index}, 'title', this.value)">
                    ${preview}
                `;
            }

            if (block.type === 'heading') {
                return `
                    <input type="text" placeholder="Heading Text" value="${block.settings.text || ''}" oninput="updateSetting(${index}, 'text', this.value)">
                    <select onchange="updateSetting(${index}, 'level', this.value)">
                        <option value="h1" ${block.settings.level === 'h1' ? 'selected' : ''}>H1</option>
                        <option value="h2" ${block.settings.level === 'h2' ? 'selected' : ''}>H2</option>
                        <option value="h3" ${block.settings.level === 'h3' ? 'selected' : ''}>H3</option>
                    </select>
                `;
            }

            if (block.type === 'video') {
                const preview = block.settings.src ? `<video controls width="300" src="${block.settings.src}"></video>` : '';
                return `
                    <input type="text" placeholder="Video URL (YouTube/embed)" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">
                    <input type="file" accept="video/*" onchange="uploadVideo(event, ${index})">
                    ${preview}
                `;
            }

            return '';
        }

        function updateSetting(index, key, value) {
            blocks[index].settings[key] = value;
            blocksInput.value = JSON.stringify(blocks);
        }

        function removeBlock(index) {
            blocks.splice(index, 1);
            renderBlocks();
        }

        function uploadImage(event, index) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                blocks[index].settings.src = e.target.result;
                renderBlocks();
            }
            reader.readAsDataURL(file);
        }

        function uploadVideo(event, index) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                blocks[index].settings.src = e.target.result;
                renderBlocks();
            }
            reader.readAsDataURL(file);
        }

        window.updateSetting = updateSetting;
        window.removeBlock = removeBlock;
        window.uploadImage = uploadImage;
        window.uploadVideo = uploadVideo;
    </script>
@endpush
