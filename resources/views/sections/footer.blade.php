<footer
    class="bg-gradient-to-b from-gray-900 to-black dark:from-black dark:to-slate-950 text-white py-20 px-6 border-t border-gray-800">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-3 gap-12 mb-16">
            <!-- Brand Section -->
            <div class="reveal">
                <div class="text-4xl font-black mb-4 gradient-text">HisobMate</div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    <span
                        data-en="Smart bill splitting and expense tracking for friends, family, and colleagues across Central Asia."
                        data-uz="Markaziy Osiyo bo'ylab do'stlar, oila va hamkasblar uchun aqlli bill splitting va xarajatlarni kuzatish."
                        data-ru="Умное разделение счета и отслеживание расходов для друзей, семьи и коллег по всей Центральной Азии."></span>
                </p>
                <div class="flex gap-4">
                    <a href="https://t.me/hisobmate" target="_blank"
                        class="w-10 h-10 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center transition transform hover:scale-110"
                        title="Telegram">
                        <i class="fab fa-telegram-plane text-sm"></i>
                    </a>
                    <a href="https://instagram.com/hisobmate" target="_blank"
                        class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition transform hover:scale-110"
                        title="Instagram">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/rotation-uz" target="_blank"
                        class="w-10 h-10 bg-blue-700 hover:bg-blue-800 rounded-full flex items-center justify-center transition transform hover:scale-110"
                        title="LinkedIn">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="reveal">
                <h4 class="font-black text-lg mb-6">
                    <span data-en="Quick Links" data-uz="Tez Havolalar" data-ru="Быстрые ссылки"></span>
                </h4>
                <div class="space-y-3 text-sm text-gray-400">
                    <a href="#features" class="hover:text-cyan-400 transition flex items-center gap-2">
                        <i class="fas fa-arrow-right text-xs"></i>
                        <span data-en="Features" data-uz="Xususiyatlar" data-ru="Возможности"></span>
                    </a>
                    <a href="#preview" class="hover:text-cyan-400 transition flex items-center gap-2">
                        <i class="fas fa-arrow-right text-xs"></i>
                        <span data-en="Preview" data-uz="Ko'rish" data-ru="Просмотр"></span>
                    </a>
                    <a href="#faq" class="hover:text-cyan-400 transition flex items-center gap-2">
                        <i class="fas fa-arrow-right text-xs"></i>
                        <span data-en="FAQ" data-uz="Savollar" data-ru="Вопросы"></span>
                    </a>
                    <button id="join-footer-two" onclick="openModal()" class="hover:text-cyan-400 transition flex items-center gap-2">
                        <i class="fas fa-arrow-right text-xs"></i>
                        <span data-en="Join Waitlist" data-uz="Kutish ro'yxatiga qo'shilish"
                            data-ru="Присоединиться к списку"></span>
                    </button>
                </div>
            </div>

            <!-- Contact & Newsletter -->
            <div class="reveal">
                <h4 class="font-black text-lg mb-6">
                    <span data-en="Get in Touch" data-uz="Biz bilan bog'lanish" data-ru="Свяжитесь с нами"></span>
                </h4>

                <!-- Contact Info -->
                <div class="mb-6">
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold mb-2">
                        <span data-en="Phone Support" data-uz="Telefon Qo'llab-quvvatlash"
                            data-ru="Поддержка по телефону"></span>
                    </p>
                    <a href="tel:+998909123456"
                        class="text-sm text-cyan-400 hover:text-cyan-300 transition font-semibold flex items-center gap-2">
                        <i class="fas fa-phone"></i>
                        +998 50 301-23-36
                    </a>
                    <p class="text-xs text-gray-500 mt-2">
                        <span data-en="Rotation LLC Team" data-uz="Rotation MCHJ Jamoasi"
                            data-ru="Команда Rotation LLC"></span>
                    </p>
                </div>

                <!-- Newsletter -->
                <p class="text-sm text-gray-400 mb-3">
                    <span data-en="Be the first to know when HisobMate launches."
                        data-uz="HisobMate ishga tushganda birinchi bo'lib bilib qoling."
                        data-ru="Будьте первым, кто узнает о запуске HisobMate."></span>
                </p>
                <button onclick="openModal()"
                    id="join-footer"
                    class="gradient-btn text-white w-full py-2 rounded-lg font-semibold text-sm hover:shadow-lg transition">
                    <span data-en="Join Now" data-uz="Qo'shilish" data-ru="Присоединиться"></span>
                </button>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
                <p class="text-sm text-gray-500">
                    HisobMate © 2025 • <span data-en="All rights reserved" data-uz="Barcha huquqlar himoyalangan"
                        data-ru="Все права защищены"></span>
                </p>
                <p class="text-sm text-gray-500">
                    <span data-en="Powered by Rotation LLC" data-uz="Rotation MCHJ tomonidan quvvatlanadi"
                        data-ru="Создано компанией Rotation LLC"></span>
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Smooth transitions for footer links */
    a {
        transition: all 0.3s ease;
    }

    /* Phone link styling */
    a[href^="tel:"] {
        text-decoration: none;
    }

    a[href^="tel:"]:hover {
        opacity: 0.9;
    }
</style>