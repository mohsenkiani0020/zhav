<div>
    <div id="app" lang="{{ $available_locales }}" current-lang="{{ $current_locale }}"></div>

    @viteReactRefresh
    @vite(['resources/js/user-panel.js'])
</div>
