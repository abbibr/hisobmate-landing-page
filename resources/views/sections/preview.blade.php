<!-- Preview Section with Carousel -->
<section id="preview"
    class="py-24 px-6 bg-gradient-to-b from-gray-50 to-white dark:from-slate-900/50 dark:to-slate-950">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-black mb-4">
                <span data-en="See how simple it can be." data-uz="Qanday sodda bo'lishi mumkinligini ko'ring."
                    data-ru="Посмотрите, как это может быть просто."></span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                <span data-en="Because money between friends should never feel awkward."
                    data-uz="Chunki do'stlar orasida pul hech qachon noqulay bo'lmasligi kerak."
                    data-ru="Потому что деньги между друзьями не должны быть неловкими."></span>
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="relative reveal">
            <!-- Carousel Wrapper -->
            <div class="overflow-hidden rounded-3xl bg-white dark:bg-slate-800 shadow-2xl">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-out">
                    <!-- Slide 1: Groups -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid md:grid-cols-2 gap-0 items-center">
                            <div class="p-8 md:p-12">
                                <div class="inline-block bg-blue-100 dark:bg-blue-900/30 px-4 py-2 rounded-full mb-6">
                                    <span class="text-sm font-semibold text-blue-600 dark:text-blue-400">
                                        <span data-en="Organize" data-uz="Tashkil qiling" data-ru="Организуйте"></span>
                                    </span>
                                </div>
                                <h3 class="text-3xl font-black mb-4">
                                    <span data-en="Groups" data-uz="Guruhlar" data-ru="Группы"></span>
                                </h3>
                                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                    <span
                                        data-en="Create and manage expense groups for family, friends, work, or any occasion. Keep all your shared expenses organized."
                                        data-uz="Oila, do'stlar, ish yoki har qanday tadbir uchun xarajat guruhlarini yarating va boshqaring. Barcha umumiy xarajatlarni tartibda saqlang."
                                        data-ru="Создавайте и управляйте группами расходов для семьи, друзей, работы или любого события. Держите все совместные расходы в порядке."></span>
                                </p>
                                <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span data-en="Flexible group management" data-uz="Moslashuvchan guruh boshqaruvi"
                                        data-ru="Гибкое управление группами"></span>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-center p-4 md:p-8 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20">
                                <img src="{{ asset('img/group.png') }}" alt="Groups"
                                    class="w-full max-w-xs rounded-2xl shadow-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: My Balance -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid md:grid-cols-2 gap-0 items-center">
                            <div
                                class="flex items-center justify-center p-4 md:p-8 bg-gradient-to-br from-cyan-50 to-blue-100 dark:from-cyan-900/20 dark:to-blue-800/20">
                                <img src="{{ asset('img/hero2.png') }}" alt="My Balance"
                                    class="w-full max-w-xs rounded-2xl shadow-lg">
                            </div>
                            <div class="p-8 md:p-12">
                                <div class="inline-block bg-cyan-100 dark:bg-cyan-900/30 px-4 py-2 rounded-full mb-6">
                                    <span class="text-sm font-semibold text-cyan-600 dark:text-cyan-400">
                                        <span data-en="Dashboard" data-uz="Bosh sahifa"
                                            data-ru="Панель управления"></span>
                                    </span>
                                </div>
                                <h3 class="text-3xl font-black mb-4">
                                    <span data-en="My Balance" data-uz="Mening Balansim" data-ru="Мой баланс"></span>
                                </h3>
                                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                    <span
                                        data-en="Track what you owe and what others owe you instantly. See your complete financial status with friends across all groups."
                                        data-uz="Qanday pul qarz qolganingiz va boshqalar sizga qancha qarz ekanligini darhol kuzatib boring. Barcha guruhlarida do'stlar bilan to'liq moliyaviy holatingizni ko'ring."
                                        data-ru="Отслеживайте, что вы должны и что вам должны мгновенно. Видите свой полный финансовый статус с друзьями во всех группах."></span>
                                </p>
                                <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span data-en="Real-time balance tracking" data-uz="Real-vaqt balans kuzatish"
                                        data-ru="Отслеживание баланса в реальном времени"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Scanned Check -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid md:grid-cols-2 gap-0 items-center">
                            <div class="p-8 md:p-12">
                                <div class="inline-block bg-amber-100 dark:bg-amber-900/30 px-4 py-2 rounded-full mb-6">
                                    <span class="text-sm font-semibold text-amber-600 dark:text-amber-400">
                                        <span data-en="Split Expenses" data-uz="Xarajatlarni bo'ling"
                                            data-ru="Разделить расходы"></span>
                                    </span>
                                </div>
                                <h3 class="text-3xl font-black mb-4">
                                    <span data-en="Scanned Check" data-uz="Skanerlangan Chek"
                                        data-ru="Отсканированный чек"></span>
                                </h3>
                                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                    <span
                                        data-en="Scan receipts instantly and split expenses your way. Choose from equal split, manual amounts, or split by individual items."
                                        data-uz="Kvitansiyalarni darhol skanerlang va xarajatlarni o'zingiz xohlab turda bo'ling. Teng bo'lish, qo'lda miqdor yoki alohida narsalar bo'ylab bo'lishni tanlang."
                                        data-ru="Сканируйте чеки мгновенно и делите расходы по своему усмотрению. Выбирайте равное разделение, ручное указание сумм или разделение по отдельным товарам."></span>
                                </p>
                                <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span data-en="AI-powered receipt recognition"
                                        data-uz="AI bilan quvvatlantirilgan chek aniqlash"
                                        data-ru="Распознавание чеков на основе ИИ"></span>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-center p-4 md:p-8 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20">
                                <img src="{{ asset('img/scan.png') }}" alt="Scanned Check"
                                    class="w-full max-w-xs rounded-2xl shadow-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: QR Scanning -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid md:grid-cols-2 gap-0 items-center">
                            <div
                                class="flex items-center justify-center p-4 md:p-8 bg-gradient-to-br from-slate-900 to-slate-800 dark:from-slate-900 dark:to-slate-950">
                                <img src="{{ asset('img/scan2.png') }}" alt="QR Code Scanning"
                                    class="w-full max-w-xs rounded-2xl shadow-lg">
                            </div>
                            <div class="p-8 md:p-12">
                                <div
                                    class="inline-block bg-purple-100 dark:bg-purple-900/30 px-4 py-2 rounded-full mb-6">
                                    <span class="text-sm font-semibold text-purple-600 dark:text-purple-400">
                                        <span data-en="Smart Tech" data-uz="Aqlli Texnologiya"
                                            data-ru="Умная технология"></span>
                                    </span>
                                </div>
                                <h3 class="text-3xl font-black mb-4">
                                    <span data-en="QR Code Scanning" data-uz="QR Kod Skanerlash"
                                        data-ru="Сканирование QR-кода"></span>
                                </h3>
                                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                    <span
                                        data-en="Use advanced camera features to scan QR codes from receipts or business cards. Instantly share expenses with contacts or add new group members."
                                        data-uz="Kvitansiyalar yoki vizitkartalardan QR kodlarini skanerlash uchun advanced kamera xususiyatlarini ishlating. Do'stlar bilan xarajatlarni darhol ulashing yoki yangi guruh a'zolarini qo'shing."
                                        data-ru="Используйте продвинутые функции камеры для сканирования QR-кодов из чеков или визитных карточек. Мгновенно поделитесь расходами с контактами или добавьте новых участников группы."></span>
                                </p>
                                <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span data-en="One-tap sharing" data-uz="Bir bosish bilan ulashish"
                                        data-ru="Обмен одним касанием"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button onclick="previousSlide()"
                class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white dark:bg-slate-800 p-3 rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-110">
                <i class="fas fa-chevron-left text-gray-900 dark:text-white text-lg"></i>
            </button>
            <button onclick="nextSlide()"
                class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white dark:bg-slate-800 p-3 rounded-full shadow-lg hover:shadow-xl transition-all hover:scale-110">
                <i class="fas fa-chevron-right text-gray-900 dark:text-white text-lg"></i>
            </button>

            <!-- Indicators -->
            <div class="flex justify-center gap-3 mt-8">
                <button onclick="goToSlide(0)"
                    class="carousel-indicator w-3 h-3 rounded-full bg-blue-500 transition-all duration-300"
                    data-index="0"></button>
                <button onclick="goToSlide(1)"
                    class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600 transition-all duration-300"
                    data-index="1"></button>
                <button onclick="goToSlide(2)"
                    class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600 transition-all duration-300"
                    data-index="2"></button>
                <button onclick="goToSlide(3)"
                    class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600 transition-all duration-300"
                    data-index="3"></button>
            </div>
        </div>
    </div>
</section>

<script>
    let currentSlide = 0;
    const totalSlides = 4;

    function updateCarousel() {
        const track = document.getElementById('carouselTrack');
        const offset = -currentSlide * 100;
        track.style.transform = `translateX(${offset}%)`;

        // Update indicators
        document.querySelectorAll('.carousel-indicator').forEach((btn, index) => {
            if (index === currentSlide) {
                btn.classList.remove('bg-gray-300', 'dark:bg-gray-600');
                btn.classList.add('bg-blue-500', 'w-8');
            } else {
                btn.classList.remove('bg-blue-500', 'w-8');
                btn.classList.add('bg-gray-300', 'dark:bg-gray-600');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateCarousel();
    }

    // Auto-advance slides every 8 seconds
    setInterval(nextSlide, 8000);

    // Initialize
    updateCarousel();
</script>