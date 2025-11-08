<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HisobMate | Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-btn {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass {
            background: rgba(30, 41, 59, 0.3);
            border: 1px solid rgba(148, 163, 184, 0.2);
        }

        .dark-toggle {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-modern {
            transition: all 0.3s ease;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
        }

        .logo-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .nav-link-underline {
            position: relative;
        }

        .nav-link-underline::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6 0%, #06b6d4 100%);
            transition: width 0.3s ease;
        }

        .nav-link-underline:hover::after {
            width: 100%;
        }

        svg {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body class="bg-white dark:bg-slate-950">

    <nav
        class="sticky top-0 z-40 backdrop-blur-md bg-gray-50/80 dark:bg-slate-950/80 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Left: Logo -->
            <div class="flex items-center gap-3 -ml-6">
                <!-- Logo Image -->
                <img src="{{ asset('logo.webp') }}" alt="HisobMate Logo" class="w-16 h-16">

                <!-- Logo Text -->
                <span class="logo-text gradient-text hidden md:inline">HisobMate</span>
            </div>

            <!-- Center: Navigation Links -->
            <div class="hidden md:flex items-center gap-6">
                <a href="#features"
                    class="relative text-sm font-semibold text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition group">
                    <span data-en="Features" data-uz="Xususiyatlar" data-ru="Возможности"></span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                </a>

                <a href="#preview"
                    class="relative text-sm font-semibold text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition group">
                    <span data-en="Preview" data-uz="Ko'rish" data-ru="Просмотр"></span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                </a>

                {{-- <a href="#faq"
                    class="relative text-sm font-semibold text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition group">
                    <span data-en="FAQ" data-uz="Savollar" data-ru="Вопросы"></span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:w-full transition-all duration-300"></span>
                </a> --}}

                <!-- Vertical Divider -->
                <div class="w-px h-6 bg-gradient-to-b from-transparent via-gray-300 dark:via-gray-700 to-transparent">
                </div>

                <button onclick="openModal()" id="join-header"
                    class="gradient-btn text-white px-6 py-2.5 rounded-full btn-modern text-sm font-semibold hover:shadow-lg transition-shadow">
                    <i class="fas fa-arrow-right mr-2"></i>
                    <span data-en="Join Now" data-uz="Qo'shilish" data-ru="Присоединиться"></span>
                </button>
            </div>

            <!-- Right: CTA + Dark Mode + Language -->
            <div class="flex items-center gap-4">
                <!-- Dark Mode Toggle -->
                <button id="darkToggle" class="dark-toggle p-2 rounded-full glass hover:scale-110 transition-transform">
                    <i class="fas fa-moon text-xl dark:hidden"></i>
                    <i class="fas fa-sun text-xl hidden dark:block"></i>
                </button>

                <!-- Language Selector -->
                <select id="languageSelect" class="px-3 py-2 rounded-full glass text-sm font-semibold cursor-pointer">
                    <option value="en">🇬🇧 EN</option>
                    <option value="uz">🇺🇿 UZ</option>
                    <option value="ru">🇷🇺 RU</option>
                </select>
            </div>
        </div>
    </nav>
</body>

</html>