{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create Page</title>
    <style>
        .block { border: 1px solid #ccc; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Create a New Page</h1>

    <form method="POST" action="{{ route('pages.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Page Title" required>
        <input type="text" name="slug" placeholder="page-slug" required>

        <div>
            <button type="button" class="add-block" data-type="text">Add Text Block</button>
            <button type="button" class="add-block" data-type="image">Add Image Block</button>
        </div>

        <div id="page-builder"></div>

        <input type="hidden" name="blocks" id="blocks-json">

        <button type="submit">Save Page</button>
    </form>

    <script>
        const builder = document.getElementById('page-builder');
        const addButtons = document.querySelectorAll('.add-block');
        const blocksInput = document.getElementById('blocks-json');

        let blocks = [];

        addButtons.forEach(button => {
            button.addEventListener('click', () => {
                const type = button.dataset.type;
                const block = {
                    type: type,
                    settings: {}
                };
                blocks.push(block);
                renderBlocks();
            });
        });

        function renderBlocks() {
            builder.innerHTML = '';
            blocks.forEach((block, index) => {
                const div = document.createElement('div');
                div.className = 'block';
                div.innerHTML = getBlockHTML(block, index);
                builder.appendChild(div);
            });
            blocksInput.value = JSON.stringify(blocks);
        }

        function getBlockHTML(block, index) {
            if (block.type === 'text') {
                return `<textarea oninput="updateSetting(${index}, 'text', this.value)">${block.settings.text || ''}</textarea>`;
            }
            if (block.type === 'image') {
                return `<input type="text" placeholder="Image URL" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">`;
            }
            return '';
        }

        function updateSetting(index, key, value) {
            blocks[index].settings[key] = value;
            blocksInput.value = JSON.stringify(blocks);
        }

        window.updateSetting = updateSetting; // so it works in inline HTML
    </script>
</body>
</html> --}}

{{-- 

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
    </div>

    <div id="page-builder"></div>
    <input type="hidden" name="blocks" id="blocks-json">

    <button type="submit">Save Page</button>
</form>
@endsection

@push('scripts')
<script>
const builder = document.getElementById('page-builder');
const addButtons = document.querySelectorAll('.add-block');
const blocksInput = document.getElementById('blocks-json');

let blocks = [];

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
    blocks.forEach((block, index) => {
        const div = document.createElement('div');
        div.className = 'block';
        div.innerHTML = getBlockHTML(block, index) + `<button type="button" onclick="removeBlock(${index})">Remove</button>`;
        builder.appendChild(div);
    });
    blocksInput.value = JSON.stringify(blocks);
}

function getBlockHTML(block, index) {
    if (block.type === 'text') {
        return `<textarea oninput="updateSetting(${index}, 'text', this.value)">${block.settings.text || ''}</textarea>`;
    }
    if (block.type === 'image') {
        return `<input type="text" placeholder="Image URL" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">`;
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

window.updateSetting = updateSetting;
window.removeBlock = removeBlock;
</script>
@endpush --}}



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
        return `
            <input type="text" placeholder="Image URL" value="${block.settings.src || ''}" oninput="updateSetting(${index}, 'src', this.value)">
            <input type="file" onchange="uploadImage(event, ${index})">
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

window.updateSetting = updateSetting;
window.removeBlock = removeBlock;
</script>
@endpush
