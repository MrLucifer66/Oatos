<x-app-layout>
    <div id="app">
        <chatify :user="{{ auth()->user() }}"></chatify>
    </div>

    <script src="{{ asset('vendor/chatify/js/chatify.min.js') }}"></script>
    <h1>Чат</h1>
    <script>
        const el = document.getElementById('app')
        const app = new Vue({
            el,
        })
    </script>
</x-app-layout>