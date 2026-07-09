import Alpine from 'alpinejs'
import cardsData from '../data/cards.json'

window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
    Alpine.data('tarotReader', () => ({
        cards: cardsData,
        currentCard: null,
        selectedCard: null,
        selectedMessage: '',
        animating: true,
        revealed: false,
        intervalId: null,

        mistyMessages: {
            'The Fool': [
                'El primer paso es siempre el más difícil, pero también el más importante. No mires atrás.',
                'La ciudad brilla con promesas, pero solo tú decides qué camino tomar.',
                'Todo viaje comienza con un acto de fe. ¿Estás listo para el tuyo?'
            ],
            'The Magician': [
                'Tienes más poder del que crees. Solo necesitas recordar cómo usarlo.',
                'Las herramientas ya están en tus manos. El truco está en saber cuándo usarlas.',
                'El universo responde a quienes tienen el coraje de pedir lo que quieren.'
            ],
            'The High Priestess': [
                'Los secretos más profundos no se encuentran en los datos, sino en el silencio entre ellos.',
                'Tu intuición es el mejor implante que tienes. Aprende a escucharla.',
                'Hay verdades que solo se revelan cuando dejas de buscar y empiezas a sentir.'
            ],
            'The Empress': [
                'Cuidar lo que creces es tan importante como sembrarlo. La paciencia da frutos.',
                'La ciudad puede ser fría, pero tú llevas el calor para hacerla florecer.',
                'Crea, construye, nutre. Ese es tu legado en Night City.'
            ],
            'The Emperor': [
                'El poder no se da, se toma. Pero quien lo sostiene debe saber que pesa.',
                'Las reglas existen para quien no sabe jugar. Tú ya conoces el juego.',
                'El control es una ilusión... a menos que tengas el valor de ejercerlo.'
            ],
            'The Hierophant': [
                'Hasta en la era del cromo, las viejas enseñanzas guardan verdades olvidadas.',
                'Busca la sabiduría en lugares inesperados. Hasta un viejo dataterminal puede tener respuestas.',
                'La tradición no es el pasado. Es el mapa que otros dejaron para que no te pierdas.'
            ],
            'The Lovers': [
                'En una ciudad de almas perdidas, encontrar una conexión real es más valioso que cualquier crédito.',
                'El corazón no entiende de código. A veces hay que dejar que la señal se pierda.',
                'Las decisiones más difíciles son las que tocan el alma. Elige con todo tu ser.'
            ],
            'The Chariot': [
                'El camino es accidentado, pero tú llevas el volante. No sueltes el control.',
                'La velocidad no lo es todo. A veces ganar es simplemente no estrellarse.',
                'Dos fuerzas tiran de ti en direcciones opuestas. Encuentra tu centro y avanza.'
            ],
            'Strength': [
                'La fuerza de verdad no está en el cromo, sino en lo que queda cuando todo lo demás falla.',
                'Domar a la bestia interior no es someterla, es entenderla.',
                'Has sobrevivido a cosas peores. Esto también pasará.'
            ],
            'The Hermit': [
                'A veces la mejor conexión es la que haces contigo mismo. Desconecta para encontrar la señal.',
                'La soledad no es vacío. Es el espacio donde puedes oír tu propia voz.',
                'En el silencio de la ciudad, hay respuestas que el ruido no te deja escuchar.'
            ],
            'Wheel of Fortune': [
                'La suerte es solo un algoritmo que no has descifrado... todavía.',
                'El destino gira, pero tú decides si agarras la rueda o te dejas llevar.',
                'Todo cambia. Lo bueno y lo malo. La única constante es el movimiento.'
            ],
            'Justice': [
                'En Night City no hay justicia, solo equilibrio. Y el equilibrio siempre llega.',
                'Cada acción tiene un precio. La pregunta es si estás dispuesto a pagarlo.',
                'La verdad no siempre gana, pero siempre pesa en la balanza.'
            ],
            'The Hanged Man': [
                'A veces hay que ver el mundo al revés para entenderlo de verdad.',
                'No es rendición. Es pausa. Hasta el mejor netrunner necesita reiniciar.',
                'Cuando todo parece detenido, es cuando el cambio realmente está ocurriendo.'
            ],
            'Death': [
                'Todo final es un nuevo comienzo. Suelta lo viejo, o nunca tendrás espacio para lo nuevo.',
                'La muerte no es el fin del viaje. Es solo un cambio de rumbo.',
                'Lo que ya no te sirve, que se vaya. Hace espacio para lo que viene.'
            ],
            'Temperance': [
                'El equilibrio no es estático. Es un baile constante entre el cromo y el alma.',
                'Ni demasiado frío, ni demasiado ardiente. El secreto está en el punto medio.',
                'La armonía no es ausencia de conflicto. Es saber navegarlo.'
            ],
            'The Devil': [
                'Las cadenas que te atan no son de metal. Son de decisiones que creíste no tener.',
                'El verdadero demonio no está afuera. Está en las voces que te dicen que no puedes.',
                'Rompe el ciclo. La jaula solo existe porque aceptaste sus barrotes.'
            ],
            'The Tower': [
                'A veces todo tiene que derrumbarse para que puedas reconstruir sobre terreno firme.',
                'El impacto duele, pero también despierta. Úsalo para ver con claridad.',
                'Lo que se construye sobre mentiras siempre termina cayendo. Mejor ahora que después.'
            ],
            'The Star': [
                'Después de la tormenta, las estrellas siempre vuelven a brillar. Incluso sobre el smog de Night City.',
                'La esperanza no es ingenua. Es el motor que mueve a quienes se niegan a rendirse.',
                'Hay luz más allá de las nubes. Solo tienes que levantar la mirada.'
            ],
            'The Moon': [
                'No todo lo que brilla en la oscuridad es real. Confía en tu instinto para distinguirlo.',
                'El miedo es solo código mal escrito en tu BIOS. Puedes reescribirlo.',
                'Las sombras bailan, pero tú decides si les das poder o las ignoras.'
            ],
            'The Sun': [
                'Has llegado. Disfruta del calor de tu victoria. Te lo has ganado.',
                'El sol siempre sale, incluso en Night City. Hoy es tu día.',
                'La alegría no es un bug. Es la recompensa por no rendirte.'
            ],
            'Judgement': [
                'Tus decisiones te han traído hasta aquí. Ahora enfréntalas con la cabeza en alto.',
                'El juicio final no es castigo. Es la oportunidad de empezar de nuevo.',
                'Cada eco de tus acciones vuelve a ti. Asegúrate de que sea una sinfonía.'
            ],
            'The World': [
                'El círculo se cierra. Has completado el viaje... pero siempre hay otro horizonte.',
                'Lo lograste. Todo el camino valió la pena. Ahora, ¿qué sigue?',
                'El final es solo el principio disfrazado. La próxima aventura ya está llamando.'
            ]
        },

        getRandomMessages(cardName) {
            const pool = this.mistyMessages[cardName]
            if (!pool) return []
            const count = Math.min(pool.length, 3)
            const shuffled = [...pool].sort(() => Math.random() - 0.5)
            return shuffled.slice(0, count)
        },

        init() {
            if (this.cards.length > 0) {
                this.startAnimation()
            }
        },

        startAnimation() {
            this.animating = true
            this.revealed = false
            this.selectedCard = null
            this.pickRandomCard()
            this.intervalId = setInterval(() => {
                this.pickRandomCard()
            }, 50)
        },

        pickRandomCard() {
            const index = Math.floor(Math.random() * this.cards.length)
            this.currentCard = this.cards[index]
        },

        selectCard() {
            if (!this.animating || !this.currentCard) return
            if (this.intervalId) {
                clearInterval(this.intervalId)
                this.intervalId = null
            }
            this.animating = false
            this.selectedCard = { ...this.currentCard }
            const phrases = this.getRandomMessages(this.selectedCard.name)
            this.selectedMessage = phrases.length > 0
                ? phrases[Math.floor(Math.random() * phrases.length)]
                : this.selectedCard.message || 'Los arcanos han hablado...'
            this.revealed = true
        },

        resetReader() {
            if (this.intervalId) {
                clearInterval(this.intervalId)
                this.intervalId = null
            }
            this.startAnimation()
        },

        destroy() {
            if (this.intervalId) {
                clearInterval(this.intervalId)
            }
        }
    }))
})

Alpine.start()

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('particles-canvas')
    if (!canvas) return

    const ctx = canvas.getContext('2d')
    let particles = []
    let animationId

    function resize() {
        canvas.width = window.innerWidth
        canvas.height = window.innerHeight
    }

    window.addEventListener('resize', resize)
    resize()

    class Particle {
        constructor() {
            this.reset()
        }

        reset() {
            this.x = Math.random() * canvas.width
            this.y = Math.random() * canvas.height
            this.size = Math.random() * 2 + 0.5
            this.speedX = (Math.random() - 0.5) * 0.3
            this.speedY = (Math.random() - 0.5) * 0.3
            this.opacity = Math.random() * 0.5 + 0.1
            this.color = ['#00F7FF', '#FF007A', '#FFD300'][Math.floor(Math.random() * 3)]
            this.pulse = Math.random() * Math.PI * 2
        }

        update() {
            this.x += this.speedX
            this.y += this.speedY
            this.pulse += 0.01
            if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                this.reset()
            }
        }

        draw() {
            const alpha = this.opacity * (0.5 + 0.5 * Math.sin(this.pulse))
            ctx.beginPath()
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2)
            ctx.fillStyle = this.color
            ctx.globalAlpha = alpha
            ctx.fill()
            ctx.globalAlpha = 1
        }
    }

    function initParticles() {
        particles = []
        const count = Math.min(Math.floor((canvas.width * canvas.height) / 8000), 100)
        for (let i = 0; i < count; i++) {
            particles.push(new Particle())
        }
    }

    function drawConnections() {
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x
                const dy = particles[i].y - particles[j].y
                const dist = Math.sqrt(dx * dx + dy * dy)
                if (dist < 120) {
                    const alpha = (1 - dist / 120) * 0.1
                    ctx.beginPath()
                    ctx.moveTo(particles[i].x, particles[i].y)
                    ctx.lineTo(particles[j].x, particles[j].y)
                    ctx.strokeStyle = '#00F7FF'
                    ctx.globalAlpha = alpha
                    ctx.lineWidth = 0.5
                    ctx.stroke()
                    ctx.globalAlpha = 1
                }
            }
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height)
        particles.forEach(p => {
            p.update()
            p.draw()
        })
        drawConnections()
        animationId = requestAnimationFrame(animate)
    }

    initParticles()
    animate()
})
