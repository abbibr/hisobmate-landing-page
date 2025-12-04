<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HisobMate</title>

    <link rel="preload" href="{{ asset('img/hero1.webp') }}" as="image">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Asosiy ranglar/gradientlar */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-btn {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
        }

        /* Tugma effektlari */
        .btn-modern {
            transition: all 0.3s ease;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
        }

        /* Hero Image atrofidagi ramka va gradient uchun Kritik stillar */
        .bg-gradient-to-br {
            /* from-blue-50 to-cyan-50 kabi gradientlarni shunga qo'shing */
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }

        .dark .dark\:from-slate-800 {
            --tw-gradient-from: #1e293b;
            --tw-gradient-to: #1e293b00;
        }

        .dark .dark\:to-slate-700 {
            --tw-gradient-to: #334155;
        }

        .rounded-3xl {
            border-radius: 1.5rem;
        }

        .p-1 {
            padding: 0.25rem;
        }

        .border {
            border-width: 1px;
        }

        .border-gray-200 {
            border-color: #e5e7eb;
        }

        /* Va hokazo... barcha ishlatilgan Tailwind class'larini shu yerga o'tkazish LCP'ni tezlashtiradi */
    </style>
</head>

<body class="bg-white dark:bg-slate-950">

    <section class="relative overflow-hidden py-12 md:py-12 px-6">
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-20 right-10 w-96 h-96 bg-blue-200 dark:bg-blue-900/20 rounded-full blur-3xl opacity-30">
            </div>
            <div
                class="absolute bottom-20 left-10 w-96 h-96 bg-cyan-200 dark:bg-cyan-900/20 rounded-full blur-3xl opacity-30">
            </div>
        </div>

        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="reveal">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6">
                    <span data-en="Split bills." data-uz="Qo'shimchalarni bo'lish." data-ru="Разделяйте счета.">Split
                        bills.</span>
                    <br>
                    <span data-en="Track expenses." data-uz="Xarajatlarni kuzatish."
                        data-ru="Отслеживайте расходы.">Track expenses.</span>
                    <br>
                    <span class="gradient-text" data-en="Stay friends." data-uz="" data-ru="">Stay friends.</span>
                </h1>

                <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed" id="lcp-text">
                    <span
                        data-en="HisobMate helps you manage shared expenses and debts with friends, roommates, colleagues — quick, easy, and stress-free."
                        data-uz="HisobMate do'stlar, xona sheriklari yoki hamkasblar bilan shaxsiy xarajatlarni va qarzlarni boshqarishga yordam beradi."
                        data-ru="HisobMate помогает вам управлять совместными расходами и долгами с друзьями, соседями по комнате или коллегами.">
                        HisobMate helps you manage shared expenses and debts with friends, roommates, colleagues —
                        quick, easy, and stress-free.
                    </span>
                </p>

                <div class="flex flex-wrap gap-4">
                    <button id="join-hero"
                        class="gradient-btn text-white px-8 py-4 rounded-xl btn-modern text-lg shadow-lg hover:shadow-xl">
                        <i class="fas fa-arrow-right mr-2"></i>
                        <span data-en="Join Waitlist" data-uz="Ro'yxatga qo'shilish" data-ru="Присоединиться">Join
                            Waitlist</span>
                    </button>
                    <button id="see-demo"
                        class="border-2 border-gray-900 dark:border-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 dark:hover:bg-gray-900 transition-all duration-300">
                        <i class="fas fa-play mr-2"></i>
                        <span data-en="See Demo" data-uz="Demo ko'ring" data-ru="Смотреть демо">See Demo</span>
                    </button>
                </div>

                <div class="mt-12 flex gap-8">
                    <div>
                        <div class="text-3xl font-black gradient-text">1000+</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <span data-en="Waitlist Users" data-uz="Kutish ro'yxati"
                                data-ru="Пользователей в ожидании">Waitlist Users</span>
                        </p>
                    </div>
                    <div>
                        <div class="text-3xl font-black gradient-text">Feb 2026</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <span data-en="Early Access" data-uz="Erta Kirish" data-ru="Ранний доступ">
                                Early Access
                            </span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="relative reveal">
                <div class="relative">
                    <div class="absolute inset-0 gradient-btn rounded-3xl blur-2xl opacity-30"></div>
                    <div
                        class="relative bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-slate-800 dark:to-slate-700 rounded-3xl p-1 border border-gray-200 dark:border-gray-700 glow-effect">
                        <img src="{{ asset('img/hero1.webp') }}" alt="App Preview"
                            class="w-full rounded-3xl object-cover shadow-2xl" width="1000" height="700" loading="eager"
                            fetchpriority="high">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.tailwindcss.com" defer></script>

    <script>
        // Event listener'lar qo'shildi.
        function openModal() {
            console.log("Modal opened!");
        }

        function scrollToVideo() {
            console.log("Scrolling to video...");
        }

        function switchLanguage(lang) {
            // Tilni almashtirish uchun data atributi mavjud bo'lgan barcha elementlarni topish
            const translatableElements = document.querySelectorAll('[data-en]');

            translatableElements.forEach(el => {
                // Berilgan tilga mos keladigan atributni (masalan, data-uz) olish
                const translation = el.getAttribute(`data-${lang}`);

                if (translation !== null) {
                    // Agar tarjima mavjud bo'lsa (bo'sh satr ham), uni o'rnating
                    el.textContent = translation;
                } else {
                    // Agar berilgan til uchun atribut yo'q bo'lsa, elementning kontentini o'zgartirmang.
                    // Ammo sizning holatingizda, data-en har doim asosiy til bo'lishi kerak.
                    // Agar faol til (lang) uchun atribut yo'q bo'lsa, u inglizcha matnni o'zida saqlaydi (sizning hozirgi holatingizdagi xato).
                    // Shuning uchun, biz data atributidagi qiymatni qo'llashni majburlaymiz:
                    // Agar lang = 'uz' bo'lsa va data-uz="" bo'lsa, u bo'sh satrni ('') oladi.
                }
            });
            console.log(`Tilga o'tildi: ${lang}`);
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('join-hero')?.addEventListener('click', openModal);
            document.getElementById('see-demo')?.addEventListener('click', scrollToVideo);

            const initialLang = 'ru';
            switchLanguage(initialLang);
        });
    </script>

</body>

</html>