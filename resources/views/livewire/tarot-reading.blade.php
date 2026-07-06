<div class="relative min-h-screen overflow-hidden bg-[#050816]">
    {{-- Scanline overlay --}}
    <div class="pointer-events-none fixed inset-0 z-50 opacity-[0.03] scanline-overlay"></div>

    {{-- CRT vignette --}}
    <div class="pointer-events-none fixed inset-0 z-40 vignette-overlay"></div>

    {{-- Particles canvas --}}
    <canvas id="particles-canvas" class="pointer-events-none fixed inset-0 z-0"></canvas>

    {{-- Ambient glow --}}
    <div class="pointer-events-none fixed -top-40 -left-40 w-80 h-80 bg-[#00F7FF] rounded-full opacity-[0.03] blur-[120px]"></div>
    <div class="pointer-events-none fixed -bottom-40 -right-40 w-80 h-80 bg-[#FF007A] rounded-full opacity-[0.03] blur-[120px]"></div>

    {{-- Main content --}}
    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-4 py-8">
        {{-- Title --}}
        <div class="mb-8 md:mb-12 text-center">
            <h1 class="text-4xl md:text-6xl font-light tracking-[0.3em] uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00F7FF] via-[#FF007A] to-[#FFD300] neon-glow-text">
                Misty's Tarot
            </h1>
            <p class="mt-2 text-xs md:text-sm tracking-[0.2em] text-[#00F7FF]/60 uppercase">
                El destino te espera en el corazón de Night City
            </p>
            <div class="mt-4 mx-auto w-24 h-[1px] bg-gradient-to-r from-transparent via-[#00F7FF] to-transparent"></div>
        </div>

        {{-- Card display area with Alpine.js --}}
        <div wire:ignore
            x-data="tarotReader"
            class="relative w-full max-w-[260px] md:max-w-[300px] mx-auto"
        >
            {{-- Glow ring behind card when revealed --}}
            <template x-if="revealed">
                <div>
                    <div class="absolute -inset-8 rounded-full bg-[#00F7FF] opacity-[0.08] blur-[60px] animate-pulse-slow"></div>
                    <div class="absolute -inset-4 rounded-full bg-[#FF007A] opacity-[0.05] blur-[40px] animate-pulse-slow" style="animation-delay: 1s"></div>
                </div>
            </template>

            {{-- Card container --}}
            <div
                class="relative card-container cursor-pointer"
                :class="{ 'animate-card-spin': animating, 'card-revealed': revealed }"
                @click="selectCard()"
            >
                {{-- Card frame --}}
                <div
                    class="relative rounded-2xl overflow-hidden neon-border-card glass-card transform-gpu transition-all duration-500"
                    :class="revealed ? 'scale-100 opacity-100' : 'hover:scale-[1.03] hover:shadow-[0_0_40px_rgba(0,247,255,0.2)]'"
                >
                    {{-- Card image --}}
                    <div class="aspect-[3/4] relative overflow-hidden bg-gradient-to-br from-[#0a0e27] to-[#1a1040]">
                        <img
                            :src="currentCard ? currentCard.image_url : ''"
                            :alt="currentCard ? currentCard.name : ''"
                            class="w-full h-full object-cover transition-all duration-300"
                            :class="animating ? 'opacity-80 scale-105' : 'opacity-100 scale-100'"
                        />

                        {{-- Shimmer overlay during animation --}}
                        <template x-if="animating">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#00F7FF]/10 via-transparent to-[#FF007A]/10 animate-shimmer"></div>
                        </template>

                        <div class="absolute inset-0 card-scanline opacity-[0.08]"></div>

                        {{-- Corner decorations --}}
                        <div class="absolute top-3 left-3 w-6 h-6 border-t-2 border-l-2 border-[#00F7FF]/40 rounded-tl"></div>
                        <div class="absolute top-3 right-3 w-6 h-6 border-t-2 border-r-2 border-[#FF007A]/40 rounded-tr"></div>
                        <div class="absolute bottom-3 left-3 w-6 h-6 border-b-2 border-l-2 border-[#FFD300]/40 rounded-bl"></div>
                        <div class="absolute bottom-3 right-3 w-6 h-6 border-b-2 border-r-2 border-[#00F7FF]/40 rounded-br"></div>
                    </div>
                </div>
            </div>

            {{-- Card info when revealed --}}
            <template x-if="revealed && selectedCard">
                <div class="mt-8 text-center space-y-6 animate-fade-in-up">
                    <div class="mx-auto w-16 h-[2px] bg-gradient-to-r from-[#FF007A] via-[#FFD300] to-[#00F7FF] rounded-full shadow-[0_0_10px_rgba(255,0,122,0.5)]"></div>

                    <div>
                        <span class="inline-block px-4 py-1 text-xs tracking-[0.25em] uppercase text-[#FFD300]/80 border border-[#FFD300]/20 rounded-full mb-3" x-text="`${selectedCard.number} — ${selectedCard.arcana}`"></span>
                        <h2 class="text-3xl md:text-4xl font-light tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#00F7FF] to-[#FF007A]" x-text="selectedCard.name"></h2>
                    </div>

                    <p class="text-sm md:text-base text-gray-400/80 leading-relaxed max-w-md mx-auto italic" x-text="`"${selectedCard.description}"`"></p>

                    <div class="glass-card-inner rounded-xl p-5 md:p-6 max-w-md mx-auto">
                        <div class="flex items-center justify-center gap-2 mb-3">
                            <span class="w-4 h-[1px] bg-[#00F7FF]/40"></span>
                            <span class="text-[10px] tracking-[0.3em] uppercase text-[#00F7FF]/60">Significado</span>
                            <span class="w-4 h-[1px] bg-[#00F7FF]/40"></span>
                        </div>
                        <p class="text-sm text-gray-300 leading-relaxed" x-text="selectedCard.meaning"></p>
                    </div>

                    <div class="relative max-w-md mx-auto">
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#FF007A]/20 via-[#FFD300]/20 to-[#00F7FF]/20 rounded-xl blur-sm opacity-50"></div>
                        <div class="relative bg-[#0a0e27]/90 border border-[#FF007A]/20 rounded-xl p-5 md:p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-[#FF007A] text-lg">◈</span>
                                <span class="text-[10px] tracking-[0.3em] uppercase text-[#FF007A]/60">Misty dice...</span>
                            </div>
                            <p class="text-sm md:text-base text-[#FFD300]/90 leading-relaxed font-light" x-text="`"${selectedCard.message}"`"></p>
                        </div>
                    </div>

                    <template x-if="selectedCard.keywords && selectedCard.keywords.length">
                        <div class="flex flex-wrap justify-center gap-2 max-w-md mx-auto">
                            <template x-for="keyword in selectedCard.keywords" :key="keyword">
                                <span class="px-3 py-1 text-[10px] tracking-wider uppercase text-[#00F7FF]/70 border border-[#00F7FF]/20 rounded-full" x-text="keyword"></span>
                            </template>
                        </div>
                    </template>

                    <div class="pt-4">
                        <button
                            @click="resetReader()"
                            class="group relative inline-flex items-center gap-3 px-8 py-4 text-sm tracking-[0.2em] uppercase text-[#00F7FF] font-light overflow-hidden rounded-lg transition-all duration-500 hover:shadow-[0_0_30px_rgba(0,247,255,0.3)]"
                        >
                            <span class="absolute inset-0 bg-gradient-to-r from-[#00F7FF]/10 to-transparent border border-[#00F7FF]/30 rounded-lg group-hover:border-[#00F7FF]/60 transition-all duration-500"></span>
                            <span class="absolute inset-0 bg-gradient-to-r from-[#00F7FF]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                            <span class="relative flex items-center gap-3">
                                <span>⟳</span>
                                <span>Consultar nuevamente</span>
                                <span class="inline-block w-0 group-hover:w-4 h-[1px] bg-[#00F7FF] transition-all duration-500"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </template>

            {{-- Instruction during animation --}}
            <template x-if="animating">
                <div class="mt-8 text-center animate-fade-in-up">
                    <p class="text-xs tracking-[0.3em] uppercase text-[#00F7FF]/40 animate-pulse">
                        Toca la carta para detener tu destino
                    </p>
                    <div class="mt-3 flex justify-center gap-1">
                        <template x-for="i in 3" :key="i">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00F7FF]/40 animate-bounce-dot" :style="`animation-delay: ${(i-1) * 0.15}s`"></span>
                        </template>
                    </div>
                </div>
            </template>
        </div>

        {{-- Footer --}}
        <div class="mt-12 md:mt-16 text-center">
            <p class="text-[8px] tracking-[0.4em] uppercase text-white/10">
                ✦ Misty's Esoterica — Night City ✦
            </p>
        </div>
    </div>

    {{-- Alpine.js component --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tarotReader', () => ({
                cards: @json($allCards),
                currentCard: null,
                selectedCard: null,
                animating: true,
                revealed: false,
                intervalId: null,

                init() {
                    if (this.cards.length > 0) {
                        this.startAnimation();
                    }
                },

                startAnimation() {
                    this.animating = true;
                    this.revealed = false;
                    this.selectedCard = null;
                    this.pickRandomCard();

                    this.intervalId = setInterval(() => {
                        this.pickRandomCard();
                    }, 80);
                },

                pickRandomCard() {
                    const index = Math.floor(Math.random() * this.cards.length);
                    this.currentCard = this.cards[index];
                },

                selectCard() {
                    if (!this.animating || !this.currentCard) return;

                    if (this.intervalId) {
                        clearInterval(this.intervalId);
                        this.intervalId = null;
                    }

                    this.animating = false;
                    this.selectedCard = { ...this.currentCard };
                    this.revealed = true;
                },

                resetReader() {
                    if (this.intervalId) {
                        clearInterval(this.intervalId);
                        this.intervalId = null;
                    }
                    this.startAnimation();
                },

                destroy() {
                    if (this.intervalId) {
                        clearInterval(this.intervalId);
                    }
                }
            }));
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const canvas = document.getElementById('particles-canvas');
            if (!canvas) return;

            const ctx = canvas.getContext('2d');
            let particles = [];
            let animationId;

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }

            window.addEventListener('resize', resize);
            resize();

            class Particle {
                constructor() {
                    this.reset();
                }

                reset() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 2 + 0.5;
                    this.speedX = (Math.random() - 0.5) * 0.3;
                    this.speedY = (Math.random() - 0.5) * 0.3;
                    this.opacity = Math.random() * 0.5 + 0.1;
                    this.color = ['#00F7FF', '#FF007A', '#FFD300'][Math.floor(Math.random() * 3)];
                    this.pulse = Math.random() * Math.PI * 2;
                }

                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    this.pulse += 0.01;

                    if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                        this.reset();
                    }
                }

                draw() {
                    const alpha = this.opacity * (0.5 + 0.5 * Math.sin(this.pulse));
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = this.color;
                    ctx.globalAlpha = alpha;
                    ctx.fill();
                    ctx.globalAlpha = 1;
                }
            }

            function initParticles() {
                particles = [];
                const count = Math.min(Math.floor((canvas.width * canvas.height) / 8000), 100);
                for (let i = 0; i < count; i++) {
                    particles.push(new Particle());
                }
            }

            function drawConnections() {
                for (let i = 0; i < particles.length; i++) {
                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 120) {
                            const alpha = (1 - dist / 120) * 0.1;
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.strokeStyle = '#00F7FF';
                            ctx.globalAlpha = alpha;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                            ctx.globalAlpha = 1;
                        }
                    }
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach(p => {
                    p.update();
                    p.draw();
                });
                drawConnections();
                animationId = requestAnimationFrame(animate);
            }

            initParticles();
            animate();
        });
    </script>
</div>
