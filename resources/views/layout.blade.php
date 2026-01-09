<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#ec4899', // Pink-500
                        primaryHover: '#db2777', // Pink-600
                        darkBg: '#111827', // Gray-900
                        darkCard: '#1f2937', // Gray-800
                    },
                    fontFamily: {
                        sans: ['Quicksand', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-darkBg dark:text-gray-200 transition-colors duration-300 font-sans flex flex-col min-h-screen"
      x-data="{ 
          darkMode: localStorage.getItem('theme') === 'dark',
          toggleTheme() {
              this.darkMode = !this.darkMode;
              if (this.darkMode) {
                  document.documentElement.classList.add('dark');
                  localStorage.setItem('theme', 'dark');
              } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.setItem('theme', 'light');
              }
          }
      }"
      x-init="$watch('darkMode', val => val ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')); if(darkMode) document.documentElement.classList.add('dark');"
>

    <nav class="bg-white dark:bg-darkCard shadow-md border-b border-pink-100 dark:border-gray-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <span class="text-2xl font-bold text-primary dark:text-pink-400">Student<span class="text-gray-700 dark:text-white">Portal</span></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-pink-400 font-semibold transition">Home</a>
                    
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.outside="open = false" class="flex items-center text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-pink-400 font-semibold transition focus:outline-none">
                            Management
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-xl py-2 z-50 border border-pink-100 dark:border-gray-700">
                            <a href="{{ route('students.index') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-pink-50 dark:hover:bg-gray-700 hover:text-primary">All Students</a>
                            <a href="{{ route('students.create') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-pink-50 dark:hover:bg-gray-700 hover:text-primary">Add New Student</a>
                        </div>
                    </div>

                    <button @click="toggleTheme()" class="p-2 rounded-full bg-pink-100 dark:bg-gray-700 text-primary dark:text-pink-400 focus:outline-none transition hover:scale-110">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-darkCard border-t border-pink-100 dark:border-gray-700 mt-auto py-6">
        <div class="text-center text-gray-500 dark:text-gray-400 text-sm">
            &copy; {{ date('Y') }} Student Portal System. Crafted with <span class="text-pink-500">♥</span>
        </div>
    </footer>

</body>
</html>