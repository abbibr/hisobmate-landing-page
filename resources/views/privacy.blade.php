<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href={{ asset('logo3d.webp') }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn how HisobMate protects your data and privacy while managing group expenses. We keep your bill splitting safe & transparent.">
    <title>HisobMate Privacy Policy | Your Data Security & Privacy</title>

    <link rel="alternate" href="https://hisobmate.uz/" hreflang="ru" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="uz" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="en" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="x-default" />

    <meta property="og:title" content="HisobMate: Smart Bill Splitting & Expense Tracker" />
    <meta property="og:description"
        content="Split bills, track group expenses, and manage shared debts quickly and stress-free in Uzbekistan." />
    <meta property="og:url" content="https://hisobmate.uz/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://hisobmate.uz/logo.png" />
    <meta property="og:locale" content="ru_RU" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@HisobMateApp" />
    <meta name="twitter:creator" content="@HisobMateApp" />
    <meta name="twitter:title" content="HisobMate: Your New Group Expense Tracker" />
    <meta name="twitter:description"
        content="Never worry about splitting the bill again. Track everything with HisobMate." />
    <meta name="twitter:image" content="https://hisobmate.uz/logo.png" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            font-family: 'Inter', sans-serif;
            transition: color 0.3s, background-color 0.3s;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #1A73E8, #06B6D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass {
            background: rgba(0, 0, 0, 0.2);
        }

        .prose-section {
            scroll-margin-top: 80px;
        }

        .toc-link {
            scroll-behavior: smooth;
        }

        input::placeholder {
            color: currentColor;
            opacity: 0.5;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-slate-950 dark:text-white">

    <!-- Navigation -->
    <nav
        class="sticky top-0 z-40 backdrop-blur-md bg-gray-50/80 dark:bg-slate-950/80 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-3xl font-black gradient-text">HisobMate</a>
            <div class="flex items-center gap-4">
                <button id="darkToggle" class="p-2 rounded-full glass hover:scale-110 transition-transform">
                    <i class="fas fa-moon text-xl dark:hidden"></i>
                    <i class="fas fa-sun text-xl hidden dark:block"></i>
                </button>
                <select id="languageSelect" class="px-3 py-2 rounded-full glass text-sm font-semibold cursor-pointer">
                    <option value="en">🇬🇧 EN</option>
                    <option value="uz">🇺🇿 UZ</option>
                    <option value="ru">🇷🇺 RU</option>
                </select>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative py-16 px-6 bg-gradient-to-b from-blue-50 to-white dark:from-blue-900/20 dark:to-slate-950">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-black mb-4">
                <span data-en="Privacy Policy" data-uz="Maxfiylik Siyosati"
                    data-ru="Политика конфиденциальности"></span>
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                <span data-en="We take your privacy seriously. Learn how we collect, use, and protect your data."
                    data-uz="Biz sizning maxfiylikni o'ta jiddiy qabul qilamiz. Biz ma'lumotlaringizni qanday to'playmiz, ishlatamiz va himoya qilamiz."
                    data-ru="Мы серьезно относимся к вашей конфиденциальности. Узнайте, как мы собираем, используем и защищаем ваши данные."></span>
            </p>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                <span data-en="Last updated: January 2026" data-uz="Oxirgi yangilash: Yanvar 2026"
                    data-ru="Последнее обновление: январь 2026"></span>
            </p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Table of Contents -->
            <div class="md:col-span-1">
                <div
                    class="sticky top-24 bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700">
                    <h3 class="font-black text-lg mb-4">
                        <span data-en="Contents" data-uz="Mundarija" data-ru="Содержание"></span>
                    </h3>
                    <nav class="space-y-2 text-sm">
                        <a href="#intro" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Introduction" data-uz="Kirish" data-ru="Введение"></span>
                        </a>
                        <a href="#data-collection"
                            class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Data Collected" data-uz="To'planadigan Ma'lumotlar"
                                data-ru="Собираемые данные"></span>
                        </a>
                        <a href="#third-party" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Third-Party Services" data-uz="Uchinchi Tomon Xizmatlari"
                                data-ru="Сторонние сервисы"></span>
                        </a>
                        <a href="#security" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Security" data-uz="Xavfsizlik" data-ru="Безопасность"></span>
                        </a>
                        <a href="#rights" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Your Rights" data-uz="Sizning Huquqlaringiz" data-ru="Ваши права"></span>
                        </a>
                        <a href="#changes" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Changes" data-uz="O'zgarishlar" data-ru="Изменения"></span>
                        </a>
                        <a href="#contact" class="block toc-link text-blue-600 dark:text-blue-400 hover:underline">
                            <span data-en="Contact" data-uz="Aloqa" data-ru="Контакты"></span>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-3 space-y-12">

                <!-- Introduction -->
                <section id="intro" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-blue-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Introduction" data-uz="Kirish" data-ru="Введение"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                            <span
                                data-en="HisobMate prioritizes the protection of user data and is committed to managing it securely and lawfully. This policy explains what data is collected by the application, how it is stored and what rights users have regarding their information."
                                data-uz="HisobMate foydalanuvchilarning ma'lumotlarini himoya qilishni birinchi o'ringa qo'yib, ularni xavfsiz va qonuniy asosda boshqarishga intiladi. Ushbu siyosat ilovadagi ma'lumotlar, ularning saqlanishi va foydalanuvchi huquqlari haqida ma'lumot beradi."
                                data-ru="HisobMate ставит на первое место защиту данных пользователей и стремится обеспечивать их безопасность и законную обработку. Данная политика описывает какие данные собираются через приложение, как они хранятся и какие права имеют пользователи."></span>
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            <span
                                data-en="By using our application, you fully agree to the terms outlined in this Privacy Policy."
                                data-uz="Ilovamizdan foydalanish orqali siz ushbu Maxfiylik Siyosati shartlariga to'liq rozilik bildirarsiz."
                                data-ru="Используя наше приложение, вы полностью соглашаетесь с условиями изложенными в данной Политике конфиденциальности."></span>
                        </p>
                    </div>
                </section>

                <!-- Data Collection -->
                <section id="data-collection" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-cyan-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Data We Collect" data-uz="To'planadigan Ma'lumotlar"
                                data-ru="Собираемые данные"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            <span data-en="Our application collects the following personal information:"
                                data-uz="Bizning ilova quyidagi shaxsiy ma'lumotlarni to'playdi:"
                                data-ru="Наше приложение собирает следующую личную информацию:"></span>
                        </p>

                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">
                                        <span data-en="Registration Data" data-uz="Ro'yxatdan o'tish Ma'lumotlari"
                                            data-ru="Регистрационные данные"></span>
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        <span data-en="Name, surname, email address and phone number"
                                            data-uz="Ism, sharif, elektron pochta manzili va telefon raqami"
                                            data-ru="Имя, фамилия, адрес электронной почты и номер телефона"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-cyan-100 dark:bg-cyan-900/30 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-credit-card text-cyan-600 dark:text-cyan-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">
                                        <span data-en="Expense Data" data-uz="Xarajat Ma'lumotlari"
                                            data-ru="Данные о расходах"></span>
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        <span
                                            data-en="Expenses entered manually, via QR code scanning, or uploaded photos"
                                            data-uz="Qo'lda, QR kod skanerlash yoki rasm yuklash orqali kiritilgan xarajatlar"
                                            data-ru="Расходы, внесенные вручную, через сканирование QR-кода и загрузку фотографии"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-address-book text-amber-600 dark:text-amber-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">
                                        <span data-en="Contact Information" data-uz="Kontakt Ma'lumotlari"
                                            data-ru="Контактная информация"></span>
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        <span data-en="Third-party contact details for expense sharing"
                                            data-uz="Xarajatlarni bo'lishish uchun uchinchi tomon kontaktlari"
                                            data-ru="Контактные данные третьих лиц для разделения расходов"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-mobile-alt text-purple-600 dark:text-purple-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2">
                                        <span data-en="Technical Data" data-uz="Texnik Ma'lumotlar"
                                            data-ru="Технические данные"></span>
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        <span data-en="Device type (Android or iOS)"
                                            data-uz="Qurilma turi (Android yoki iOS)"
                                            data-ru="Тип устройства (Android или iOS)"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Third-Party Services -->
                <section id="third-party" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-amber-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Third-Party Services" data-uz="Uchinchi Tomon Xizmatlari"
                                data-ru="Сторонние сервисы"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            <span data-en="We use third-party analytics services to improve our application:"
                                data-uz="Biz ilovamizni yaxshilash uchun uchinchi tomon analitika xizmatlaridan foydalanib turgan ilovadan:"
                                data-ru="Мы используем сторонние аналитические услуги для улучшения нашего приложения:"></span>
                        </p>

                        <div class="space-y-3">
                            <div
                                class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-blue-900/20 dark:to-cyan-900/20 rounded-lg p-4 border border-blue-200 dark:border-blue-800">
                                <p class="font-semibold text-blue-900 dark:text-blue-200 mb-2">Google Analytics,
                                    AppsFlyer, Mixpanel, Firebase</p>
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    <span data-en="For user behavior analysis, statistics, and troubleshooting"
                                        data-uz="Foydalanuvchi xatti-haraka tahlili, statistika va muammolarni hal qilish uchun"
                                        data-ru="Для анализа поведения пользователей, сбора статистики и устранения ошибок"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Security -->
                <section id="security" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Data Security" data-uz="Ma'lumotlar Xavfsizligi"
                                data-ru="Безопасность данных"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <div class="space-y-4">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                <span
                                    data-en="Personal data is stored on secure servers located in Uzbekistan. Login credentials are encrypted and protected."
                                    data-uz="Shaxsiy ma'lumotlar O'zbekistonda joylashgan xavfsiz serverlarda saqlanadi. Login ma'lumotlari shifrlangan va himoyalangan."
                                    data-ru="Личные данные хранятся на защищенных серверах, расположенных в Узбекистане. Учетные данные зашифрованы и защищены."></span>
                            </p>
                            <div class="bg-green-50 dark:bg-green-900/20 border-l-4 border-green-500 p-4 rounded">
                                <p class="text-sm text-green-900 dark:text-green-200">
                                    <i class="fas fa-shield-alt mr-2"></i>
                                    <span data-en="We use industry-standard encryption protocols"
                                        data-uz="Biz sanoat standartidagi shifrlash protokollarini ishlatamiz"
                                        data-ru="Мы используем шифрование в соответствии со стандартами отрасли"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- User Rights -->
                <section id="rights" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-purple-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Your Rights" data-uz="Sizning Huquqlaringiz" data-ru="Ваши права"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mt-1">
                                    <span class="text-sm font-bold text-purple-600 dark:text-purple-400">✓</span>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">
                                        <span data-en="Right to Access" data-uz="Kirishish Huquqi"
                                            data-ru="Право доступа"></span>
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span data-en="You can access your data at any time through your account"
                                            data-uz="Siz istalgan vaqtda o'z akkauntingiz orqali ma'lumotlaringizga kirish qilishingiz mumkin"
                                            data-ru="Вы можете получить доступ к своим данным в любое время через свой аккаунт"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mt-1">
                                    <span class="text-sm font-bold text-purple-600 dark:text-purple-400">✓</span>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">
                                        <span data-en="Right to Edit" data-uz="O'zgartirish Huquqi"
                                            data-ru="Право на редактирование"></span>
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span data-en="Edit your personal information whenever you want"
                                            data-uz="Istalgan vaqtda o'z shaxsiy ma'lumotlaringizni o'zgartiring"
                                            data-ru="Редактируйте свои персональные данные в любое время"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mt-1">
                                    <span class="text-sm font-bold text-purple-600 dark:text-purple-400">✓</span>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">
                                        <span data-en="Right to Delete" data-uz="O'chirish Huquqi"
                                            data-ru="Право на удаление"></span>
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span
                                            data-en="Request deletion of your data. It will be removed within 48 hours"
                                            data-uz="O'z ma'lumotlaringizni o'chirishni so'rang. Ular 48 soat ichida o'chiriladi"
                                            data-ru="Запросите удаление ваших данных. Они будут удалены в течение 48 часов"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Changes to Policy -->
                <section id="changes" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-orange-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Policy Changes" data-uz="Siyosat O'zgarishlari"
                                data-ru="Изменения политики"></span>
                        </h2>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            <span
                                data-en="We reserve the right to modify this Privacy Policy at any time. Updates will be posted on this page, and significant changes will be communicated via email or app notifications. The updated policy becomes effective immediately upon publication."
                                data-uz="Biz ushbu Maxfiylik Siyosatiga istalgan vaqtda o'zgartirishlar kiritish huquqini saqlab qolamiz. Yangilanishlar ushbu sahifada e'lon qilinadi va muhim o'zgarishlar elektron pochta yoki ilova orqali xabar beriladi."
                                data-ru="Мы оставляем за собой право изменить данную Политику конфиденциальности в любое время. Обновления будут опубликованы на этой странице, а значительные изменения будут сообщены по электронной почте или через уведомления приложения."></span>
                        </p>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact" class="prose-section">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-1 h-8 bg-red-600 rounded-full"></div>
                        <h2 class="text-3xl font-black">
                            <span data-en="Contact Us" data-uz="Biz bilan Aloqa" data-ru="Свяжитесь с нами"></span>
                        </h2>
                    </div>
                    <div
                        class="bg-gradient-to-br from-red-50 to-orange-50 dark:from-red-900/20 dark:to-orange-900/20 rounded-2xl p-8 border border-red-200 dark:border-red-800">
                        <p class="text-gray-700 dark:text-gray-300 mb-6">
                            <span data-en="For questions or suggestions about this Privacy Policy, please contact us:"
                                data-uz="Ushbu Maxfiylik Siyosati haqida savol yoki takliflar uchun biz bilan aloqa qiling:"
                                data-ru="По вопросам или предложениям, касающимся данной Политики конфиденциальности, свяжитесь с нами:"></span>
                        </p>
                        <a href="mailto:rotationuz@gmail.com"
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all">
                            <i class="fas fa-envelope"></i>
                            rotationuz@gmail.com
                        </a>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white py-12 px-6 border-t border-gray-800 mt-24">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center">
                <p class="text-gray-400">© 2026 HisobMate. <span data-en="All rights reserved"
                        data-uz="Barcha huquqlar himoyalangan" data-ru="Все права защищены"></span>.</p>
                <a href="{{ url('/') }}" class="text-blue-400 hover:text-blue-300 transition">← <span
                        data-en="Back to Home" data-uz="Bosh sahifaga" data-ru="На главную"></span></a>
            </div>
        </div>
    </footer>

    <script>
        // Dark Mode Toggle
        const darkToggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (!localStorage.getItem('theme')) {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        darkToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });

        // Language System - Russian as default
        let currentLang = localStorage.getItem('lang') || 'ru';

        function setLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('lang', lang);
            updateTranslations();
        }

        function updateTranslations() {
            document.querySelectorAll('[data-en]').forEach(el => {
                const text = el.getAttribute(`data-${currentLang}`);
                if (text) el.textContent = text;
            });
        }

        document.getElementById('languageSelect').value = currentLang;
        document.getElementById('languageSelect').addEventListener('change', (e) => {
            setLanguage(e.target.value);
        });

        updateTranslations();
    </script>
</body>

</html>