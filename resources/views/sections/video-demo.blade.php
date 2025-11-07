<!-- Video Demo Section -->
<section id="demoSection"
    class="py-16 md:py-16 px-6 bg-gradient-to-b from-transparent via-blue-50/30 to-transparent dark:via-blue-900/10">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12 reveal">
            <h2 class="text-3xl md:text-4xl font-black mb-4">
                <span data-en="Watch HisobMate in Action" data-uz="HisobMate qanday ishlashini ko'ring"
                    data-ru="Смотрите как работает HisobMate"></span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                <span data-en="See how easy it is to split bills with your friends"
                    data-uz="Do'stlaringiz bilan qo'shimchalarni bo'lish qanchalik oson ekanligini ko'ring"
                    data-ru="Посмотрите, насколько легко делить счета с друзьями"></span>
            </p>
        </div>

        <!-- Video Container -->
        <div class="relative group reveal mx-auto max-w-2xl">
            <!-- Glow effect -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-3xl blur-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-300">
            </div>

            <!-- Video wrapper -->
            <div class="relative bg-black rounded-3xl overflow-hidden shadow-2xl">
                <video id="demoVideo" class="w-full h-auto display-block aspect-video" controls
                    controlsList="nodownload" poster="{{ asset('img/hero1.png') }}">
                    <source src="{{ asset('Hisobmate.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Play button overlay (shows before video starts) -->
                <div id="playOverlay"
                    class="absolute inset-0 flex items-center justify-center bg-black/40 hover:bg-black/50 transition-all duration-300 cursor-pointer group/play">
                    <div
                        class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center group-hover/play:scale-110 group-hover/play:bg-white transition-all duration-300 shadow-2xl">
                        <i class="fas fa-play text-3xl text-blue-600 ml-1"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features under video -->
        <div class="grid md:grid-cols-3 gap-8 mt-16">
            <div class="text-center reveal">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-bolt text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">
                    <span data-en="Lightning Fast" data-uz="Juda Tez" data-ru="Молниеносно быстро"></span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    <span data-en="Split bills in seconds" data-uz="Qo'shimchalarni sekundlar ichida bo'ling"
                        data-ru="Разделяйте счета за считанные секунды"></span>
                </p>
            </div>

            <div class="text-center reveal">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-chart-pie text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">
                    <span data-en="Smart Tracking" data-uz="Aqlli Kuzatish" data-ru="Умное отслеживание"></span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    <span data-en="Automatic expense calculations" data-uz="Avtomatik xarajat hisoblash"
                        data-ru="Автоматический расчет расходов"></span>
                </p>
            </div>

            <div class="text-center reveal">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">
                    <span data-en="Friendly" data-uz="Do'stona" data-ru="Дружеское общение"></span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    <span data-en="No more awkward money talks" data-uz="Endi noqulay suhbatlar yo'q"
                        data-ru="Больше не неловко о деньгах"></span>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Video styling */
    #demoVideo {
        width: 100%;
        height: auto;
    }

    /* Play overlay styles */
    #playOverlay {
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    #demoVideo::-webkit-media-controls-panel {
        background-color: rgba(0, 0, 0, 0.8);
    }

    #demoVideo::-webkit-media-controls-play-button {
        background-color: white;
    }

    /* Scroll reveal */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    // Scroll to video section
    function scrollToVideo() {
        const demoSection = document.getElementById('demoSection');
        demoSection.scrollIntoView({ behavior: 'smooth' });

        // Auto-play video after scroll
        setTimeout(() => {
            const video = document.getElementById('demoVideo');
            const overlay = document.getElementById('playOverlay');
            video.play();
            overlay.style.opacity = '0';
            overlay.style.pointerEvents = 'none';
        }, 800);
    }

    // Hide play overlay when video starts playing
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('demoVideo');
        const overlay = document.getElementById('playOverlay');

        if (video && overlay) {
            // Hide overlay when play button clicked
            overlay.addEventListener('click', function (e) {
                e.preventDefault();
                video.play();
                overlay.style.opacity = '0';
                overlay.style.pointerEvents = 'none';
            });

            // Hide overlay when video plays
            video.addEventListener('play', function () {
                overlay.style.opacity = '0';
                overlay.style.pointerEvents = 'none';
            });

            // Show overlay when video pauses
            video.addEventListener('pause', function () {
                if (video.currentTime === 0) {
                    overlay.style.opacity = '1';
                    overlay.style.pointerEvents = 'auto';
                }
            });
        }
    });
</script>