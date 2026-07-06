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
    <div class="relative z-10 min-h-screen px-3 sm:px-4 py-4 sm:py-8 flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 md:gap-10 lg:gap-12 w-full max-w-6xl mx-auto items-start md:items-center">

            {{-- Left: Birthday invitation card --}}
            <div class="flex flex-col items-center w-full">
                <div class="relative w-full max-w-[320px] sm:max-w-[360px] md:max-w-[380px]">
                    {{-- Ambient glow --}}
                    <div class="absolute -inset-6 sm:-inset-10 rounded-full bg-[#FF007A] opacity-[0.06] blur-[60px] sm:blur-[80px]"></div>

                    {{-- Card --}}
                    <div class="relative glass-card rounded-xl sm:rounded-2xl overflow-hidden border border-[#FF007A]/20 shadow-[0_0_40px_rgba(255,0,122,0.1)]">
                        {{-- Top decorative bar --}}
                        <div class="h-[3px] sm:h-1 bg-gradient-to-r from-[#00F7FF] via-[#FF007A] to-[#FFD300]"></div>

                        <div class="p-5 sm:p-8 md:p-10 text-center space-y-4 sm:space-y-6">
                            {{-- Corner decorations --}}
                            <div class="relative hidden sm:block">
                                <div class="absolute top-0 left-0 w-6 sm:w-8 h-6 sm:h-8 border-t-2 border-l-2 border-[#00F7FF]/30 rounded-tl"></div>
                                <div class="absolute top-0 right-0 w-6 sm:w-8 h-6 sm:h-8 border-t-2 border-r-2 border-[#FF007A]/30 rounded-tr"></div>
                            </div>

                            <div class="pt-2 sm:pt-4">
                                <p class="text-[8px] sm:text-[10px] tracking-[0.3em] sm:tracking-[0.4em] uppercase text-[#00F7FF]/60 mb-2 sm:mb-4">✦ Invitación Especial ✦</p>

                                <h2 class="text-3xl sm:text-4xl md:text-5xl font-light tracking-[0.15em] text-transparent bg-clip-text bg-gradient-to-r from-[#FFD300] to-[#FF007A] neon-glow-text">
                                    FER
                                </h2>

                                <div class="my-4 sm:my-6 mx-auto w-12 sm:w-16 h-[1px] bg-gradient-to-r from-transparent via-[#FF007A] to-transparent"></div>

                                <p class="text-xl sm:text-2xl md:text-3xl font-light tracking-[0.1em] text-[#00F7FF]">
                                    Sábado 11
                                </p>

                                <div class="mt-2 sm:mt-3 flex items-center justify-center gap-2 sm:gap-3">
                                    <span class="text-[#FF007A] text-base sm:text-lg">⏤</span>
                                    <span class="text-xs sm:text-sm tracking-[0.25em] sm:tracking-[0.3em] uppercase text-gray-300/80">21 hs</span>
                                    <span class="text-[#FF007A] text-base sm:text-lg">⏤</span>
                                </div>

                                <div class="my-4 sm:my-6 mx-auto w-12 sm:w-16 h-[1px] bg-gradient-to-r from-transparent via-[#FFD300] to-transparent"></div>

                                <p class="text-[10px] sm:text-xs tracking-[0.25em] sm:tracking-[0.3em] uppercase text-gray-400/60 mb-1 sm:mb-2">Te espero en</p>
                                <div class="flex items-center justify-center gap-2 sm:gap-3">
                                    <span class="text-[#00F7FF] text-base sm:text-lg">✦</span>
                                    <span class="text-xs sm:text-sm tracking-[0.1em] sm:tracking-[0.15em] text-gray-300/80">Freitas 533 B, Fontana</span>
                                    <span class="text-[#00F7FF] text-base sm:text-lg">✦</span>
                                </div>

                                <div class="my-4 sm:my-6 mx-auto w-12 sm:w-16 h-[1px] bg-gradient-to-r from-transparent via-[#00F7FF] to-transparent"></div>

                                <p class="text-[10px] sm:text-xs tracking-[0.15em] sm:tracking-[0.2em] text-[#FFD300]/60 italic">
                                    "La noche apenas comienza... ✦"
                                </p>
                            </div>

                            {{-- Corner decorations bottom --}}
                            <div class="relative hidden sm:block">
                                <div class="absolute bottom-0 left-0 w-6 sm:w-8 h-6 sm:h-8 border-b-2 border-l-2 border-[#FFD300]/30 rounded-bl"></div>
                                <div class="absolute bottom-0 right-0 w-6 sm:w-8 h-6 sm:h-8 border-b-2 border-r-2 border-[#00F7FF]/30 rounded-br"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Scanline overlay on card --}}
                    <div class="absolute inset-0 rounded-xl sm:rounded-2xl pointer-events-none card-scanline opacity-[0.04]"></div>
                </div>
            </div>

            {{-- Right: Tarot reading --}}
            <div class="flex flex-col items-center w-full">
                {{-- Title --}}
                <div class="mb-4 sm:mb-6 md:mb-8 text-center">
                    <h1 class="text-2xl sm:text-3xl md:text-5xl font-light tracking-[0.2em] sm:tracking-[0.3em] uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00F7FF] via-[#FF007A] to-[#FFD300] neon-glow-text">
                        Misty's Tarot
                    </h1>
                    <p class="mt-1 sm:mt-2 text-[10px] sm:text-xs md:text-sm tracking-[0.15em] sm:tracking-[0.2em] text-[#00F7FF]/60 uppercase">
                        El destino te espera en el corazón de Night City
                    </p>
                    <div class="mt-2 sm:mt-4 mx-auto w-16 sm:w-24 h-[1px] bg-gradient-to-r from-transparent via-[#00F7FF] to-transparent"></div>
                </div>

                {{-- Card display area with Alpine.js --}}
                <div wire:ignore
                    x-data="tarotReader"
                    class="relative w-full max-w-[200px] sm:max-w-[240px] md:max-w-[260px] lg:max-w-[300px] mx-auto"
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
                            <p class="text-sm md:text-base text-[#FFD300]/90 leading-relaxed font-light" x-text="selectedMessage"></p>
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

            {{-- Close right column --}}
            </div>
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
                selectedMessage: '',
                animating: true,
                revealed: false,
                intervalId: null,

                mistyMessages: {
                    'The Fool': [
                        "El primer paso es siempre el más difícil, pero también el más importante. No mires atrás.",
                        "La ciudad brilla con promesas, pero solo tú decides qué camino tomar.",
                        "Todo viaje comienza con un acto de fe. ¿Estás listo para el tuyo?"
                    ],
                    'The Magician': [
                        "Tienes más poder del que crees. Solo necesitas recordar cómo usarlo.",
                        "Las herramientas ya están en tus manos. El truco está en saber cuándo usarlas.",
                        "El universo responde a quienes tienen el coraje de pedir lo que quieren."
                    ],
                    'The High Priestess': [
                        "Los secretos más profundos no se encuentran en los datos, sino en el silencio entre ellos.",
                        "Tu intuición es el mejor implante que tienes. Aprende a escucharla.",
                        "Hay verdades que solo se revelan cuando dejas de buscar y empiezas a sentir."
                    ],
                    'The Empress': [
                        "Cuidar lo que creces es tan importante como sembrarlo. La paciencia da frutos.",
                        "La ciudad puede ser fría, pero tú llevas el calor para hacerla florecer.",
                        "Crea, construye, nutre. Ese es tu legado en Night City."
                    ],
                    'The Emperor': [
                        "El poder no se da, se toma. Pero quien lo sostiene debe saber que pesa.",
                        "Las reglas existen para quien no sabe jugar. Tú ya conoces el juego.",
                        "El control es una ilusión... a menos que tengas el valor de ejercerlo."
                    ],
                    'The Hierophant': [
                        "Hasta en la era del cromo, las viejas enseñanzas guardan verdades olvidadas.",
                        "Busca la sabiduría en lugares inesperados. Hasta un viejo dataterminal puede tener respuestas.",
                        "La tradición no es el pasado. Es el mapa que otros dejaron para que no te pierdas."
                    ],
                    'The Lovers': [
                        "En una ciudad de almas perdidas, encontrar una conexión real es más valioso que cualquier crédito.",
                        "El corazón no entiende de código. A veces hay que dejar que la señal se pierda.",
                        "Las decisiones más difíciles son las que tocan el alma. Elige con todo tu ser."
                    ],
                    'The Chariot': [
                        "El camino es accidentado, pero tú llevas el volante. No sueltes el control.",
                        "La velocidad no lo es todo. A veces ganar es simplemente no estrellarse.",
                        "Dos fuerzas tiran de ti en direcciones opuestas. Encuentra tu centro y avanza."
                    ],
                    'Strength': [
                        "La fuerza de verdad no está en el cromo, sino en lo que queda cuando todo lo demás falla.",
                        "Domar a la bestia interior no es someterla, es entenderla.",
                        "Has sobrevivido a cosas peores. Esto también pasará."
                    ],
                    'The Hermit': [
                        "A veces la mejor conexión es la que haces contigo mismo. Desconecta para encontrar la señal.",
                        "La soledad no es vacío. Es el espacio donde puedes oír tu propia voz.",
                        "En el silencio de la ciudad, hay respuestas que el ruido no te deja escuchar."
                    ],
                    'Wheel of Fortune': [
                        "La suerte es solo un algoritmo que no has descifrado... todavía.",
                        "El destino gira, pero tú decides si agarras la rueda o te dejas llevar.",
                        "Todo cambia. Lo bueno y lo malo. La única constante es el movimiento."
                    ],
                    'Justice': [
                        "En Night City no hay justicia, solo equilibrio. Y el equilibrio siempre llega.",
                        "Cada acción tiene un precio. La pregunta es si estás dispuesto a pagarlo.",
                        "La verdad no siempre gana, pero siempre pesa en la balanza."
                    ],
                    'The Hanged Man': [
                        "A veces hay que ver el mundo al revés para entenderlo de verdad.",
                        "No es rendición. Es pausa. Hasta el mejor netrunner necesita reiniciar.",
                        "Cuando todo parece detenido, es cuando el cambio realmente está ocurriendo."
                    ],
                    'Death': [
                        "Todo final es un nuevo comienzo. Suelta lo viejo, o nunca tendrás espacio para lo nuevo.",
                        "La muerte no es el fin del viaje. Es solo un cambio de rumbo.",
                        "Lo que ya no te sirve, que se vaya. Hace espacio para lo que viene."
                    ],
                    'Temperance': [
                        "El equilibrio no es estático. Es un baile constante entre el cromo y el alma.",
                        "Ni demasiado frío, ni demasiado ardiente. El secreto está en el punto medio.",
                        "La armonía no es ausencia de conflicto. Es saber navegarlo."
                    ],
                    'The Devil': [
                        "Las cadenas que te atan no son de metal. Son de decisiones que creíste no tener.",
                        "El verdadero demonio no está afuera. Está en las voces que te dicen que no puedes.",
                        "Rompe el ciclo. La jaula solo existe porque aceptaste sus barrotes."
                    ],
                    'The Tower': [
                        "A veces todo tiene que derrumbarse para que puedas reconstruir sobre terreno firme.",
                        "El impacto duele, pero también despierta. Úsalo para ver con claridad.",
                        "Lo que se construye sobre mentiras siempre termina cayendo. Mejor ahora que después."
                    ],
                    'The Star': [
                        "Después de la tormenta, las estrellas siempre vuelven a brillar. Incluso sobre el smog de Night City.",
                        "La esperanza no es ingenua. Es el motor que mueve a quienes se niegan a rendirse.",
                        "Hay luz más allá de las nubes. Solo tienes que levantar la mirada."
                    ],
                    'The Moon': [
                        "No todo lo que brilla en la oscuridad es real. Confía en tu instinto para distinguirlo.",
                        "El miedo es solo código mal escrito en tu BIOS. Puedes reescribirlo.",
                        "Las sombras bailan, pero tú decides si les das poder o las ignoras."
                    ],
                    'The Sun': [
                        "Has llegado. Disfruta del calor de tu victoria. Te lo has ganado.",
                        "El sol siempre sale, incluso en Night City. Hoy es tu día.",
                        "La alegría no es un bug. Es la recompensa por no rendirte."
                    ],
                    'Judgement': [
                        "Tus decisiones te han traído hasta aquí. Ahora enfréntalas con la cabeza en alto.",
                        "El juicio final no es castigo. Es la oportunidad de empezar de nuevo.",
                        "Cada eco de tus acciones vuelve a ti. Asegúrate de que sea una sinfonía."
                    ],
                    'The World': [
                        "El círculo se cierra. Has completado el viaje... pero siempre hay otro horizonte.",
                        "Lo lograste. Todo el camino valió la pena. Ahora, ¿qué sigue?",
                        "El final es solo el principio disfrazado. La próxima aventura ya está llamando."
                    ]
                },

                getRandomMessages(cardName) {
                    const pool = this.mistyMessages[cardName];
                    if (!pool) return [];
                    const count = Math.min(pool.length, 3);
                    const shuffled = [...pool].sort(() => Math.random() - 0.5);
                    return shuffled.slice(0, count);
                },

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

                    const phrases = this.getRandomMessages(this.selectedCard.name);
                    this.selectedMessage = phrases.length > 0
                        ? phrases[Math.floor(Math.random() * phrases.length)]
                        : this.selectedCard.message || "Los arcanos han hablado...";

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
