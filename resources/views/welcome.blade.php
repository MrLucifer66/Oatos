<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    
    <body>
      <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
          <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-gray-300 to-gray-900 opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
          <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-gray-300 to-gray-900 opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
          <p class="text-sm leading-6 text-gray-900">
            <strong class="font-semibold">ОАТОС Образовательный </strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join us in Denver from June 7 – 9 to see what’s coming next.
          </p>
          <a href="#" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Вступить <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
          <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
            <span class="sr-only">Dismiss</span>
            <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
          </button>
        </div>
      </div>
        <nav class="bg-gray-900">
             <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8"> 
                <div class="relative flex items-center justify-between h-16">
                     <!-- Moved logo to the left side --> 
                     <div class="flex-1 flex items-center justify-start sm:items-stretch sm:justify-start"> 
                        <div class="flex-shrink-0"> 
                            <a href="/"> 
                                <img class="h-8 w-auto" src="/image/logo/flag_rf.png" alt="Logo">
                            </a> 
                        </div> 
                        <a href="/" class="mx-2 text-2xl font-medium text-gray-300"> 
                            ОАТОС
                        </a> 
                    </div>
                    <div class="relative flex items-center">
                      <input type="text" placeholder="Поиск" class="px-4 py-2 rounded-l-full text-gray-700 bg-gray-200 focus:outline-none focus:bg-white focus:text-gray-900 rounded-l-full mx-auto" />
                      <span class="absolute inset-y-0 right-0 flex items-center px-4">
                          <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l5-5m0 0l-5-5m5 5H4" />
                          </svg>
                      </span>
                  </div>
                    <div class="sm:flex sm:items-center sm:ml-6"> 
                        @if (Route::has('login')) 
                        <div class="ml-3 relative"> 
                            @auth <a href="{{ url('/dashboard') }}" class="font-medium text-gray-300 hover:text-white focus:outline-none focus:underline transition duration-150 ease-in-out">{{ __('Dashboard') }}</a> 
                            @else 
                            <a href="{{ route('login') }}" class="font-medium text-gray-300 hover:text-white focus:outline-none focus:underline transition duration-150 ease-in-out">{{ __('Login') }}</a> 
                            @if (Route::has('register')) 
                            <a href="{{ route('register') }}" class="ml-8 font-medium text-gray-300 hover:text-white focus:outline-none focus:underline transition duration-150 ease-in-out">{{ __('Register') }}</a> 
                            @endif 
                            @endauth 
                        </div> 
                        @endif <!-- Removed mobile menu button and menu --> 
                    </div>
                </div>
            </div>
        </nav>
        <div class="bg-gray-800 text-white py-2 px-4 bottom-0 left-0 w-full z-20">
          <div class="marquee">
            <marquee>{{$marqueeText}}</marquee>
          </div>
        </div>
        <nav class="bg-gray-800">
            <div class="justefy-center"> 
             <div class="relative flex items-center justify-between h-10">
              <div class="hidden md:block">
                <ul class="flex">
                  <li>
                  <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                              Об ассоциации
                   
                          </button>
                   
                          <!-- Panel -->
                          <div
                              x-ref="panel"
                              x-show="open"
                              x-transition.origin.top.left
                              x-on:click.outside="close($refs.button)"
                              :id="$id('dropdown-button')"
                              style="display: none;"
                              class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                          >
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Что такое ТОС?
                              </a>
                   
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                История ОАТОС
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Цели и задачи
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Официальные документы
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Наши проекты
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Наши партнёры
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Календарь событий
                              </a>
                              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                СМИ о нас
                              </a>
                          </div>
                      </div>
                  </div>
                  </li>
                  <li>
                    <div class="flex justify-center">
                        <div
                            x-data="{
                                open: false,
                                toggle() {
                                    if (this.open) {
                                        return this.close()
                                    }
                     
                                    this.$refs.button.focus()
                     
                                    this.open = true
                                },
                                close(focusAfter) {
                                    if (! this.open) return
                     
                                    this.open = false
                     
                                    focusAfter && focusAfter.focus()
                                }
                            }"
                            x-on:keydown.escape.prevent.stop="close($refs.button)"
                            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                            x-id="['dropdown-button']"
                            class="relative">
                            <!-- Button -->
                            <button
                                x-ref="button"
                                x-on:click="toggle()"
                                :aria-expanded="open"
                                :aria-controls="$id('dropdown-button')"
                                type="button"
                                class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                            >
                              Органы управления
                     
                            </button>
                     
                            <!-- Panel -->
                            <div
                                x-ref="panel"
                                x-show="open"
                                x-transition.origin.top.left
                                x-on:click.outside="close($refs.button)"
                                :id="$id('dropdown-button')"
                                style="display: none;"
                                class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                            >
                                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                  Общее собрание
                                </a>
                     
                                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                  Правление
                                </a>
                                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                  Ревизионная комиссия
                                </a>
                                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                  Дирекция
                                </a>
                                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                  ФЭС при ОАТОС
                                </a>
                            </div>
                        </div>
                    </div>
                  </li>
                  <li>
                      <div class="flex justify-center">
                          <div
                              x-data="{
                                  open: false,
                                  toggle() {
                                      if (this.open) {
                                          return this.close()
                                      }
                       
                                      this.$refs.button.focus()
                       
                                      this.open = true
                                  },
                                  close(focusAfter) {
                                      if (! this.open) return
                       
                                      this.open = false
                       
                                      focusAfter && focusAfter.focus()
                                  }
                              }"
                              x-on:keydown.escape.prevent.stop="close($refs.button)"
                              x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                              x-id="['dropdown-button']"
                              class="relative">
                              <!-- Button -->
                              <button
                                  x-ref="button"
                                  x-on:click="toggle()"
                                  :aria-expanded="open"
                                  :aria-controls="$id('dropdown-button')"
                                  type="button"
                                  class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                              >
                                Семья ТОС
                       
                              </button>
                       
                              <!-- Panel -->
                              <div
                                  x-ref="panel"
                                  x-show="open"
                                  x-transition.origin.top.left
                                  x-on:click.outside="close($refs.button)"
                                  :id="$id('dropdown-button')"
                                  style="display: none;"
                                  class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                              >
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    Создать ТОС
                                  </a>
                       
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    Вступить в ОАТОС
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    Лучшая практика ТОС
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС - консультант
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС - библиотека
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС- образование
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС - проект
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС - сайт
                                  </a>
                                  <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    ТОС - финансы
                                  </a>
                              </div>
                          </div>
                      </div>
                      </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Стратегия ТОС - 2030
                   
                          </button>
                      </div>
                    </div>
                    
                  </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Сведения об образовательной организации
                   
                          </button>
                      </div>
                    </div>
                    
                  </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Новости
                   
                          </button>
                      </div>
                    </div>
                    
                  </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Оплатить взносы
                   
                          </button>
                      </div>
                    </div>
                    
                  </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Журнал "Муниципальная Россия"
                   
                          </button>
                      </div>
                    </div>
                    
                  </li>
                  <li>
                    <div class="flex justify-center">
                      <div
                          x-data="{
                              open: false,
                              toggle() {
                                  if (this.open) {
                                      return this.close()
                                  }
                   
                                  this.$refs.button.focus()
                   
                                  this.open = true
                              },
                              close(focusAfter) {
                                  if (! this.open) return
                   
                                  this.open = false
                   
                                  focusAfter && focusAfter.focus()
                              }
                          }"
                          x-on:keydown.escape.prevent.stop="close($refs.button)"
                          x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                          x-id="['dropdown-button']"
                          class="relative">
                          <!-- Button -->
                          <button
                              x-ref="button"
                              x-on:click="toggle()"
                              :aria-expanded="open"
                              :aria-controls="$id('dropdown-button')"
                              type="button"
                              class="flex items-center text-gray-300 hover:text-white px-3 py-2"
                          >
                            Контакты
                   
                          </button>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
             </div>
          </div>
        </nav>
        
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('news-list')
            </div>
          </div>
        </div>

            @livewireScripts
    </body>


</html>
