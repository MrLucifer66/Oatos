<!-- resources/views/livewire/editor.blade.php -->
<div wire:ignore>
    <div x-ref="editor" class="editor"></div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            const editor = new EditorJS({
                holder: "{{ $refs['editor']->id }}",
                autofocus: true,
                logLevel: 'ERROR',
                tools: {
                    header: {
                        class: Header,
                        config: {
                            placeholder: 'Header'
                        }
                    },
                    list: {
                        class: List,
                        inlineToolbar: true,
                        config: {
                            placeholder: 'List'
                        }
                    },
                    embed: {
                        class: Embed,
                        config: {
                            services: {
                                youtube: true,
                                coub: true
                            }
                        }
                    },
                },
                placeholder: 'Write something...'
            });
            Livewire.on('editor:save', () => editor.save().then(outputData => {
                Livewire.emit('editor:output', outputData);
            }));
        });
    </script>
@endpush