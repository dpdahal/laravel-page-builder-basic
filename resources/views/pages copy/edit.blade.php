<!DOCTYPE html>
<html>
<head>
    <title>Edit Page</title>
    <style>
        .block { border: 1px solid #ccc; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Edit Page</h1>

    <form method="POST" action="{{ route('pages.update', $page) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $page->title }}" required>
        <input type="text" name="slug" value="{{ $page->slug }}" required>

        <div>
            <button type="button" class="add-block" data-type="text">Add Text Block</button>
            <button type="button" class="add-block" data-type="image">Add Image Block</button>
        </div>

        <div id="page-builder"></div>

        <input type="hidden" name="blocks" id="blocks-json">

        <button type="submit">Update Page</button>
    </form>

    <script>
        const builder = document.getElementById('page-builder');
        const addButtons = document.querySelectorAll('.add-block');
        const blocksInput = document.getElementById('blocks-json');

        let blocks = @json($page->blocks->map(function($block) {
            return [
                'type' => $block->type,
                'settings' => $block->settings
            ];
        }));

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

        renderBlocks(); // render on load
    </script>
</body>
</html>
