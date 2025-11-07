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
                <span data-en="Split bills." data-uz="Qo'shimchalarni bo'lish." data-ru="Разделяйте счета."></span>
                <br>
                <span data-en="Track expenses." data-uz="Xarajatlarni kuzatish." data-ru="Отслеживайте расходы."></span>
                <br>
                <span class="gradient-text" data-en="Stay friends."></span>
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 leading-relaxed">
                <span
                    data-en="HisobMate helps you manage shared expenses and debts with friends, roommates, colleagues — quick, easy, and stress-free."
                    data-uz="HisobMate do'stlar, xona sheriklari yoki hamkasblar bilan shaxsiy xarajatlarni va qarzlarni boshqarishga yordam beradi."
                    data-ru="HisobMate помогает вам управлять совместными расходами и долгами с друзьями, соседями по комнате или коллегами."></span>
            </p>

            <div class="flex flex-wrap gap-4">
                <button onclick="openModal()"
                    id="join-hero"
                    class="gradient-btn text-white px-8 py-4 rounded-xl btn-modern text-lg shadow-lg hover:shadow-xl">
                    <i class="fas fa-arrow-right mr-2"></i>
                    <span data-en="Join Waitlist" data-uz="Ro'yxatga qo'shilish" data-ru="Присоединиться"></span>
                </button>
                <button onclick="scrollToVideo()"
                    class="border-2 border-gray-900 dark:border-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 dark:hover:bg-gray-900 transition-all duration-300">
                    <i class="fas fa-play mr-2"></i>
                    <span data-en="See Demo" data-uz="Demo ko'ring" data-ru="Смотреть демо"></span>
                </button>
            </div>

            <div class="mt-12 flex gap-8">
                <div>
                    <div class="text-3xl font-black gradient-text">1000+</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        <span data-en="Waitlist Users" data-uz="Kutish ro'yxati"
                            data-ru="Пользователей в ожидании"></span>
                    </p>
                </div>
                <div>
                    <div class="text-3xl font-black gradient-text">Jan 2026</div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        <span data-en="Launch Date" data-uz="Ishga tushish sanasi" data-ru="Дата запуска"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="relative reveal">
            <div class="relative">
                <div class="absolute inset-0 gradient-btn rounded-3xl blur-2xl opacity-30"></div>
                <div
                    class="relative bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-slate-800 dark:to-slate-700 rounded-3xl p-1 border border-gray-200 dark:border-gray-700 glow-effect">
                    <img src="{{ asset('img/hero1.png') }}" alt="App Preview"
                        class="w-full rounded-3xl object-cover shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>