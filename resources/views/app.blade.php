<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafkha Yasin Albian - Interactive Portfolio</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            /* VARIABEL TRANSPARANSI YANG DAPAT DIATUR */
            --section-opacity: 0.85; /* 0-1 */
            --card-opacity: 0.92;   /* 0-1 */
            --bubble-opacity: 0.3;  /* 0-1 */
            --blur-intensity: 5px;  /* px value */
        }
        
        /* Bubble Animation */
        .bubble {
            position: fixed;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,var(--bubble-opacity)), transparent 70%);
            box-shadow: 
                inset 0 0 15px rgba(255,255,255,calc(var(--bubble-opacity) * 0.7)), 
                0 0 20px rgba(255,255,255,calc(var(--bubble-opacity) * 0.7));
            z-index: -1;
            pointer-events: none;
            will-change: transform;
        }
        
        #bubble-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
            touch-action: none;
        }
        
        /* Transparent backgrounds */
        .bg-section-transparent {
            background-color: rgba(31, 41, 55, var(--section-opacity)) !important;
            backdrop-filter: blur(var(--blur-intensity));
        }
        
        .bg-card-transparent {
            background-color: rgba(255, 255, 255, var(--card-opacity)) !important;
        }
        
        .dark .bg-card-transparent {
            background-color: rgba(55, 65, 81, var(--card-opacity)) !important;
        }
        
        /* Futuristic Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }
        
        ::-webkit-scrollbar-track {
            background: linear-gradient(145deg, #0f172a 0%, #1e293b 100%);
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(145deg, #4f46e5 0%, #8b5cf6 100%);
            border-radius: 10px;
            border: 2px solid #1e293b;
            box-shadow: 
                0 0 10px rgba(79, 70, 229, 0.7),
                inset 0 0 5px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(145deg, #6366f1 0%, #a855f7 100%);
            box-shadow: 
                0 0 15px rgba(99, 102, 241, 0.9),
                inset 0 0 7px rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }
        
        ::-webkit-scrollbar-corner {
            background: #0f172a;
        }
        
        /* For Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: #4f46e5 #0f172a;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Neon glow effect */
        .neon-glow {
            text-shadow: 
                0 0 5px rgba(79, 70, 229, 0.5),
                0 0 10px rgba(79, 70, 229, 0.3),
                0 0 15px rgba(79, 70, 229, 0.2);
        }
        
        /* Section headers */
        .section-header {
            position: relative;
            display: inline-block;
        }
        
        .section-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #8b5cf6);
            border-radius: 2px;
            box-shadow: 0 0 10px rgba(79, 70, 229, 0.7);
        }
        
        /* Card hover effects */
        .hover-glow:hover {
            box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.5);
            transform: translateY(-5px);
        }
        
        /* Button effects */
        .btn-gradient {
            background: linear-gradient(145deg, #4f46e5 0%, #8b5cf6 100%);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(145deg, #6366f1 0%, #a855f7 100%);
            box-shadow: 0 10px 20px -5px rgba(79, 70, 229, 0.5);
            transform: translateY(-2px);
        }     

        @keyframes fade-in {
         from { opacity: 0; transform: translateY(10px); }
         to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
        animation: fade-in 0.5s ease-out;
        }
        
        /* Interactive Effects */
        .bubble-interactive {
            transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
    </style>
</head>
<body class="bg-gray-800 text-gray-100 font-sans antialiased">
    <!-- Bubble Container -->
    <div id="bubble-container"></div>
    
    <!-- Transparansi Control Panel (dihidden sesuai permintaan) -->
    <div class="hidden fixed bottom-4 right-4 z-50 bg-gray-800 bg-opacity-80 p-4 rounded-xl shadow-lg backdrop-blur-sm">
        <h3 class="text-sm font-semibold mb-2 text-violet-400">Transparansi</h3>
        
        <div class="space-y-2">
            <div>
                <label class="text-xs block mb-1">Section: <span id="section-opacity-value">85%</span></label>
                <input type="range" min="0" max="100" value="0" class="w-32 accent-violet-600" id="section-opacity">
            </div>
            
            <div>
                <label class="text-xs block mb-1">Card: <span id="card-opacity-value">92%</span></label>
                <input type="range" min="0" max="100" value="0" class="w-32 accent-violet-600" id="card-opacity">
            </div>
            
            <div>
                <label class="text-xs block mb-1">Bubble: <span id="bubble-opacity-value">30%</span></label>
                <input type="range" min="0" max="100" value="100" class="w-32 accent-violet-600" id="bubble-opacity">
            </div>
            
            <div>
                <label class="text-xs block mb-1">Blur: <span id="blur-value">5px</span></label>
                <input type="range" min="0" max="20" value="0" class="w-32 accent-violet-600" id="blur-intensity">
            </div>
        </div>
    </div>
    
    <div class="min-h-screen flex flex-col">
        <!-- Desktop Sidebar -->
        <aside class="hidden md:block fixed z-30 w-64 h-screen bg-section-transparent overflow-y-auto animate-fade-in" style="scrollbar-width: thin;">
            <div class="flex flex-col h-full">
                <div class="p-4 border-b border-gray-500 sticky top-0 z-10 text-center">
                    <a href="/" class="text-xl font-bold text-violet-500 neon-glow hover:[text-shadow:0_0_10px_rgba(168,85,247,0.8)]">
                        Kafka<span class="text-white">_korq?</span>
                    </a>
                </div>
                
                <nav class="flex-1 px-4 py-6 space-y-1">
                    <a href="/" class="flex items-center px-4 py-3 rounded-lg text-gray-300 hover:text-violet-500 hover:neon-glow hover:shadow-[5px_0_20px_rgba(168,85,247,0.6)] transition duration-300">
                        <img src="https://img.icons8.com/?size=100&id=72&format=png&color=FFFFFF" class="h-5 w-5 mr-3" alt="Home">
                        Home
                    </a>
                    <a href="/about" class="flex items-center px-4 py-3 rounded-lg text-gray-300 hover:text-violet-500 hover:neon-glow hover:shadow-[5px_0_20px_rgba(168,85,247,0.6)] transition duration-300">
                        <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=FFFFFF" class="h-5 w-5 mr-3" alt="About">
                        About
                    </a>
                    <a href="/projects" class="flex items-center px-4 py-3 rounded-lg text-gray-300 hover:text-violet-500 hover:neon-glow hover:shadow-[5px_0_20px_rgba(168,85,247,0.6)] transition duration-300">
                        <img src="https://img.icons8.com/?size=100&id=102880&format=png&color=FFFFFF" class="h-5 w-5 mr-3" alt="Projects">
                        Projects
                    </a>
                    <a href="/contact" class="flex items-center px-4 py-3 rounded-lg text-gray-300 hover:text-violet-500 hover:neon-glow hover:shadow-[5px_0_20px_rgba(168,85,247,0.6)] transition duration-300">
                        <img src="https://img.icons8.com/?size=100&id=2817&format=png&color=FFFFFF" class="h-5 w-5 mr-3" alt="Contact">
                        Contact
                    </a>
                </nav>
                <footer class="hidden md:block bg-section-transparent py-8 text-center text-white">
                    <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
                </footer>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col md:ml-64">
            <!-- Main Content Area -->
            <main class="flex-1 pb-16 md:pb-0">
                @yield('content')
            </main>
            
            <!-- Mobile Bottom Navigation -->
            <footer class="block md:hidden fixed bottom-0 left-0 right-0 rounded-t-xl border-t border-gray-700 bg-gray-800 bg-opacity-90 backdrop-blur-md">
                <nav class="flex justify-around py-3 text-xs">
                    <a href="/" class="flex flex-col items-center text-gray-400 hover:text-violet-500 transition hover:neon-glow">
                        <img src="https://img.icons8.com/?size=100&id=72&format=png&color=FFFFFF" class="h-5 w-5 mb-1" alt="Home">
                        Home
                    </a>
                    <a href="/about" class="flex flex-col items-center text-gray-400 hover:text-violet-500 transition hover:neon-glow">
                        <img src="https://img.icons8.com/?size=100&id=98957&format=png&color=FFFFFF" class="h-5 w-5 mb-1" alt="About">
                        About
                    </a>
                    <a href="/projects" class="flex flex-col items-center text-gray-400 hover:text-violet-500 transition hover:neon-glow">
                        <img src="https://img.icons8.com/?size=100&id=102880&format=png&color=FFFFFF" class="h-5 w-5 mb-1" alt="Projects">
                        Projects
                    </a>
                    <a href="/contact" class="flex flex-col items-center text-gray-400 hover:text-violet-500 transition hover:neon-glow">
                        <img src="https://img.icons8.com/?size=100&id=2817&format=png&color=FFFFFF" class="h-5 w-5 mb-1" alt="Contact">
                        Contact
                    </a>
                </nav>
            </footer>
        </div>
    </div>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Create bubbles
        function createBubbles() {
            const bubbleContainer = document.getElementById('bubble-container');
            const bubbleCount = 20;
            
            for (let i = 0; i < bubbleCount; i++) {
                const bubble = document.createElement('div');
                const size = Math.random() * 80 + 20; // 20px to 100px
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const colorHue = Math.floor(Math.random() * 360);
                
                bubble.className = 'bubble';
                bubble.style.width = `${size}px`;
                bubble.style.height = `${size}px`;
                bubble.style.left = `${posX}%`;
                bubble.style.top = `${posY}%`;
                bubble.style.background = `radial-gradient(circle at 30% 30%, hsla(${colorHue}, 70%, 70%, var(--bubble-opacity)), transparent`;
                bubble.style.boxShadow = `inset 0 0 20px hsla(${colorHue}, 100%, 50%, calc(var(--bubble-opacity) * 0.7)), 0 0 30px hsla(${colorHue}, 100%, 50%, calc(var(--bubble-opacity) * 0.7))`;
                
                bubbleContainer.appendChild(bubble);
            }
        }
        
        // Mouse and touch interaction
        function setupInteraction() {
            const bubbles = document.querySelectorAll('.bubble');
            const strength = 15; // How much the bubbles move
            
            // State untuk menyimpan posisi terakhir
            let lastPosition = { x: 0, y: 0 };
            let isInteracting = false;
            let isScrolling = false;
            let scrollTimeout;
            
            // Fungsi untuk mengupdate posisi bubble
            function updateBubblesPosition(x, y) {
                if (isScrolling) return; // Abaikan jika sedang scrolling
                
                lastPosition = { x, y };
                
                bubbles.forEach(bubble => {
                    const bubbleRect = bubble.getBoundingClientRect();
                    const bubbleCenterX = bubbleRect.left + bubbleRect.width / 2;
                    const bubbleCenterY = bubbleRect.top + bubbleRect.height / 2;
                    
                    const distanceX = x - bubbleCenterX;
                    const distanceY = y - bubbleCenterY;
                    const distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);
                    
                    // Hitung pergerakan
                    const bubbleSize = parseFloat(bubble.style.width);
                    const maxDistance = 300; // Jarak maksimal interaksi
                    
                    if (distance < maxDistance) {
                        const force = 1 - (distance / maxDistance);
                        const moveX = (distanceX / distance) * strength * force * (bubbleSize / 100);
                        const moveY = (distanceY / distance) * strength * force * (bubbleSize / 100);
                        
                        bubble.style.transform = `translate(${moveX}px, ${moveY}px)`;
                    } else {
                        bubble.style.transform = `translate(0, 0)`;
                    }
                });
            }
            
            // Event untuk mouse
            document.addEventListener('mousemove', (e) => {
                if (e.buttons === 1) return; // Abaikan jika mouse button ditekan (kiri)
                isInteracting = true;
                updateBubblesPosition(e.clientX, e.clientY);
            });
            
            // Event untuk touch
            document.addEventListener('touchmove', (e) => {
                if (e.touches.length > 0) {
                    isInteracting = true;
                    
                    // Deteksi apakah ini scroll atau interaksi bubble
                    const touch = e.touches[0];
                    const touchX = touch.clientX;
                    const touchY = touch.clientY;
                    
                    // Periksa apakah pergerakan terutama vertikal (scroll)
                    const scrollThreshold = 5; // Sensitivitas scroll
                    const deltaY = Math.abs(touchY - lastPosition.y);
                    
                    if (deltaY > scrollThreshold) {
                        isScrolling = true;
                        clearTimeout(scrollTimeout);
                        scrollTimeout = setTimeout(() => {
                            isScrolling = false;
                        }, 100);
                        return;
                    }
                    
                    updateBubblesPosition(touchX, touchY);
                }
            }, { passive: true });
            
            // Tangani akhir interaksi
            document.addEventListener('mouseup', () => {
                isInteracting = false;
            });
            
            document.addEventListener('touchend', () => {
                isInteracting = false;
                isScrolling = false;
            });
            
            // Animasi bubble saat tidak ada interaksi
            function animateBubbles() {
                if (!isInteracting) {
                    const now = Date.now();
                    
                    bubbles.forEach((bubble, index) => {
                        // Hitung pergerakan natural
                        const timeOffset = index * 100;
                        const time = (now + timeOffset) * 0.001;
                        
                        // Efek mengambang
                        const floatX = Math.sin(time * 0.5 + index) * 5;
                        const floatY = Math.cos(time * 0.7 + index) * 8;
                        
                        bubble.style.transform = `translate(${floatX}px, ${floatY}px)`;
                    });
                }
                
                requestAnimationFrame(animateBubbles);
            }
            
            // Mulai animasi
            animateBubbles();
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            createBubbles();
            setupInteraction();
            
            // Setup opacity controls
            const opacityControls = [
                'section-opacity',
                'card-opacity',
                'bubble-opacity',
                'blur-intensity'
            ];
            
            opacityControls.forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.addEventListener('input', updateOpacity);
                }
            });
            
            // Set initial values
            updateOpacity();
            
            // Skills tab functionality
            const techBtn = document.getElementById("techBtn");
            const toolsBtn = document.getElementById("toolsBtn");
            const techContent = document.getElementById("techContent");
            const toolsContent = document.getElementById("toolsContent");
            
            if (techBtn && toolsBtn && techContent && toolsContent) {
                techBtn.addEventListener("click", () => {
                    techContent.classList.remove("hidden");
                    toolsContent.classList.add("hidden");
                });
                
                toolsBtn.addEventListener("click", () => {
                    techContent.classList.add("hidden");
                    toolsContent.classList.remove("hidden");
                });
            }
        });
        
        function updateOpacity() {
            const sectionOpacity = document.getElementById('section-opacity') ? document.getElementById('section-opacity').value / 100 : 0.85;
            const cardOpacity = document.getElementById('card-opacity') ? document.getElementById('card-opacity').value / 100 : 0.92;
            const bubbleOpacity = document.getElementById('bubble-opacity') ? document.getElementById('bubble-opacity').value / 100 : 0.3;
            const blurIntensity = document.getElementById('blur-intensity') ? document.getElementById('blur-intensity').value + 'px' : '5px';
            
            // Update CSS variables
            document.documentElement.style.setProperty('--section-opacity', sectionOpacity);
            document.documentElement.style.setProperty('--card-opacity', cardOpacity);
            document.documentElement.style.setProperty('--bubble-opacity', bubbleOpacity);
            document.documentElement.style.setProperty('--blur-intensity', blurIntensity);
        }
    </script>
</body>
</html>