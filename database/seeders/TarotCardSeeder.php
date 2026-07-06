<?php

namespace Database\Seeders;

use App\Models\TarotCard;
use Illuminate\Database\Seeder;

class TarotCardSeeder extends Seeder
{
    public function run(): void
    {
        $cards = [
            [
                'name' => 'The Fool',
                'number' => '0',
                'description' => 'Una figura se encuentra al borde de un acantilado neón, un maletín brillante en mano, lista para saltar al abismo urbano desconocido.',
                'meaning' => 'Nuevos comienzos, inocencia, espontaneidad. El llamado de la ciudad salvaje te guía hacia caminos inexplorados.',
                'message' => 'La jungla de concreto se extiende ante ti, V. Toda leyenda comienza con un paso hacia lo desconocido. Confía en el ritmo de la ciudad.',
                'keywords' => ['comienzos', 'espontaneidad', 'aventura'],
            ],
            [
                'name' => 'The Magician',
                'number' => 'I',
                'description' => 'Una mano cromada se eleva hacia el cielo, flujos digitales bailan entre sus dedos, manipulando la misma esencia de la realidad.',
                'meaning' => 'Fuerza de voluntad, habilidad, ingenio. Tienes todas las herramientas para manifestar tus deseos.',
                'message' => 'Tus implantes vibran con potencial. El universo se dobla ante quienes saben hackearlo. Es tu momento.',
                'keywords' => ['poder', 'habilidad', 'manifestación'],
            ],
            [
                'name' => 'The High Priestess',
                'number' => 'II',
                'description' => 'Una figura velada se sienta entre dos pilares de datos, sosteniendo un pergamino de conocimiento cifrado, guardando los secretos de la red.',
                'meaning' => 'Intuición, misterio, subconsciente. La verdad yace más allá del velo digital.',
                'message' => 'No todos los datos están hechos para ser vistos. Escucha los susurros entre el código. Tu instinto es el ciberware más poderoso que tienes.',
                'keywords' => ['intuición', 'misterio', 'conocimiento interno'],
            ],
            [
                'name' => 'The Empress',
                'number' => 'III',
                'description' => 'Una figura imponente adornada con cromo y oro, sentada en un trono de placas de circuito, cultivando el jardín digital.',
                'meaning' => 'Abundancia, fertilidad, creatividad. La ciudad recompensa a quienes construyen en lugar de destruir.',
                'message' => 'Night City puede ser un jardín si sabes plantar tus semillas. Nutre tus conexiones y míralas crecer.',
                'keywords' => ['abundancia', 'nutrir', 'creación'],
            ],
            [
                'name' => 'The Emperor',
                'number' => 'IV',
                'description' => 'Una figura corporativa anciana tras un escritorio de luz, planos holográficos de la ciudad desplegados frente a él, una corona de flujos de datos.',
                'meaning' => 'Autoridad, estructura, control. El poder es un juego, y debes conocer las reglas para jugar.',
                'message' => 'El tablero está listo, las piezas se mueven. Para gobernar la ciudad, primero debes entender su arquitectura.',
                'keywords' => ['autoridad', 'estructura', 'poder'],
            ],
            [
                'name' => 'The Hierophant',
                'number' => 'V',
                'description' => 'Una figura con túnica y interfaz neural, frente a una congregación de drones, predicando el evangelio de la tecnología.',
                'meaning' => 'Sabiduría, tradición, guía espiritual. Busca el conocimiento de quienes vinieron antes.',
                'message' => 'En un mundo de caos, encuentra tu doctrina. Las viejas costumbres aún tienen poder, incluso en la era del cromo.',
                'keywords' => ['sabiduría', 'tradición', 'guía'],
            ],
            [
                'name' => 'The Lovers',
                'number' => 'VI',
                'description' => 'Dos siluetas conectadas por hilos de luz, sus datos fusionándose en una lluvia de chispas neón sobre el horizonte urbano.',
                'meaning' => 'Amor, armonía, decisiones del corazón. Hay lazos que trascienden la división digital.',
                'message' => 'En una ciudad de millones, una conexión puede cambiarlo todo. Elige con el corazón, pero no ignores los datos.',
                'keywords' => ['amor', 'armonía', 'decisiones'],
            ],
            [
                'name' => 'The Chariot',
                'number' => 'VII',
                'description' => 'Un guerrero con armadura cromada conduce un vehículo volador por los cañones de acero, dos bestias de datos tiran en direcciones opuestas.',
                'meaning' => 'Fuerza de voluntad, determinación, victoria a través del enfoque. Conduce el caos con manos firmes.',
                'message' => 'Las calles son salvajes, pero tú controlas el volante. Mantén la mirada al frente y las manos firmes.',
                'keywords' => ['voluntad', 'determinación', 'victoria'],
            ],
            [
                'name' => 'Strength',
                'number' => 'VIII',
                'description' => 'Una figura con un brazo cibernético acaricia con calma una bestia mecánica gigante, demostrando control a través de la compasión.',
                'meaning' => 'Coraje, fuerza interior, resiliencia. El verdadero poder viene de adentro, no del cromo.',
                'message' => 'Tu arma más poderosa no son tus implantes — es tu espíritu. Domestica a la bestia interior.',
                'keywords' => ['coraje', 'fortaleza', 'resiliencia'],
            ],
            [
                'name' => 'The Hermit',
                'number' => 'IX',
                'description' => 'Una figura solitaria con gabardina en una azotea, una linterna holográfica iluminando las calles neblinosas de neón.',
                'meaning' => 'Introspección, soledad, búsqueda interior. A veces debes desconectarte para encontrar la señal.',
                'message' => 'El ruido de la ciudad ahoga tus propios pensamientos. Encuentra un rincón tranquilo y escúchate a ti mismo.',
                'keywords' => ['introspección', 'soledad', 'sabiduría'],
            ],
            [
                'name' => 'Wheel of Fortune',
                'number' => 'X',
                'description' => 'Una rueda holográfica gigante gira sobre la ciudad, marcada con logos corporativos y símbolos arcanos, el destino en constante movimiento.',
                'meaning' => 'Cambio, ciclos, destino. La rueda gira y la fortuna favorece a los audaces.',
                'message' => 'La suerte es solo un algoritmo que aún no has descifrado. La rueda está girando — prepárate para hacer tu apuesta.',
                'keywords' => ['cambio', 'ciclos', 'destino'],
            ],
            [
                'name' => 'Justice',
                'number' => 'XI',
                'description' => 'Una figura con armadura reflectante sostiene balanzas de luz, un lado un logo corporativo, el otro un corazón humano, perfectamente equilibrados.',
                'meaning' => 'Justicia, verdad, causa y efecto. El universo equilibra su propio libro contable.',
                'message' => 'En Night City, la justicia es un bien escaso. Pero las balanzas siempre se equilibran al final.',
                'keywords' => ['justicia', 'verdad', 'equilibrio'],
            ],
            [
                'name' => 'The Hanged Man',
                'number' => 'XII',
                'description' => 'Una figura suspendida boca abajo de una red de cables, los datos fluyen hacia arriba, viendo el mundo desde una nueva perspectiva.',
                'meaning' => 'Rendición, nueva perspectiva, pausa. A veces debes colgar para ver con claridad.',
                'message' => 'Pon tu mundo de cabeza. La respuesta no está donde has estado buscando.',
                'keywords' => ['rendición', 'perspectiva', 'pausa'],
            ],
            [
                'name' => 'Death',
                'number' => 'XIII',
                'description' => 'Una figura encapuchada con cráneo cromado cabalga un caballo pálido por calles de datos cayendo, código antiguo desmoronándose a su paso.',
                'meaning' => 'Transformación, finales, nuevos comienzos. La muerte no es el fin — es una transición.',
                'message' => 'El viejo yo debe morir para que nazca el nuevo. Suelta lo que está corrupto.',
                'keywords' => ['transformación', 'finales', 'renacimiento'],
            ],
            [
                'name' => 'Temperance',
                'number' => 'XIV',
                'description' => 'Una figura entre dos cubas brillantes, mezclando cromo y carne, encontrando el equilibrio perfecto entre humano y máquina.',
                'meaning' => 'Equilibrio, moderación, armonía. El camino del medio es a menudo el más sabio.',
                'message' => 'Demasiado cromo y te pierdes a ti mismo. Demasiado corazón y te rompes. Encuentra tu equilibrio.',
                'keywords' => ['equilibrio', 'moderación', 'armonía'],
            ],
            [
                'name' => 'The Devil',
                'number' => 'XV',
                'description' => 'Un demonio digital masivo hecho de logos corporativos y cadenas de deuda, riendo mientras almas atrapadas desplazan anuncios sin fin.',
                'meaning' => 'Esclavitud, materialismo, adicción. Las cadenas que te atan a menudo son obra tuya.',
                'message' => 'El diablo usa máscara corporativa. Rompe las cadenas que tú mismo creaste antes de que se conviertan en tu prisión.',
                'keywords' => ['esclavitud', 'materialismo', 'sombra'],
            ],
            [
                'name' => 'The Tower',
                'number' => 'XVI',
                'description' => 'Un megarrascacielos se derrumba mientras un rayo golpea su cima, figuras caen por el aire, viejas estructuras colapsan.',
                'meaning' => 'Cambio repentino, revelación, agitación. Lo construido sobre mentiras no puede sostenerse.',
                'message' => 'Cuando la torre caiga, reconstruye sobre terreno sólido. El derrumbe es aterrador, pero necesario.',
                'keywords' => ['agitación', 'revelación', 'cambio'],
            ],
            [
                'name' => 'The Star',
                'number' => 'XVII',
                'description' => 'Una figura se arrodilla junto a un estanque de agua de datos cristalina, vertiendo luz desde un recipiente cromado, rodeada de siete estrellas brillantes.',
                'meaning' => 'Esperanza, inspiración, serenidad. Después de la tormenta, aparecen las estrellas.',
                'message' => 'El cielo sigue ahí más allá del smog. Deja que la esperanza sea la señal que te guíe a casa.',
                'keywords' => ['esperanza', 'inspiración', 'paz'],
            ],
            [
                'name' => 'The Moon',
                'number' => 'XVIII',
                'description' => 'Una luna holográfica gigante se cierne sobre la ciudad, proyectando una luz misteriosa sobre figuras que aúllan abajo, ilusiones y miedos materializados.',
                'meaning' => 'Ilusión, miedo, subconsciente. No todo en las sombras es real.',
                'message' => 'El miedo es solo código malo en tu BIOS. Confía en tus instintos, pero verifica tu realidad.',
                'keywords' => ['ilusión', 'miedo', 'subconsciente'],
            ],
            [
                'name' => 'The Sun',
                'number' => 'XIX',
                'description' => 'Un sol artificial brillante se eleva sobre Night City, un niño monta un cibercaballo a través de flujos de datos dorados, alegría sin límites.',
                'meaning' => 'Alegría, éxito, vitalidad. El calor del logro atraviesa la noche más fría.',
                'message' => 'Has atravesado la oscuridad. Ahora disfruta del resplandor de tu triunfo.',
                'keywords' => ['alegría', 'éxito', 'vitalidad'],
            ],
            [
                'name' => 'Judgement',
                'number' => 'XX',
                'description' => 'Almas digitales emergen del mar de datos mientras una figura holográfica masiva toca una trompeta de luz, llamando al juicio final.',
                'meaning' => 'Reflexión, juicio, despertar. Ha llegado la hora de enfrentar tu verdad.',
                'message' => 'Tus decisiones resuenan en los cañones de la ciudad. Mantente firme y enfrenta la música de tu vida.',
                'keywords' => ['juicio', 'renacimiento', 'revelación'],
            ],
            [
                'name' => 'The World',
                'number' => 'XXI',
                'description' => 'Un círculo completo de flujos de datos conecta todos los rincones del mundo, una figura en el centro, completa y realizada.',
                'meaning' => 'Completitud, logro, plenitud. El viaje alcanza su gloriosa conclusión.',
                'message' => 'El circuito está completo. Lo has visto todo, lo has hecho todo. Pero recuerda — todo final es solo un nuevo comienzo.',
                'keywords' => ['completitud', 'plenitud', 'logro'],
            ],
        ];

        foreach ($cards as $index => $card) {
            $card['image'] = "tarot/card_{$index}.webp";
            $card['keywords'] = json_encode($card['keywords']);
            TarotCard::create($card);
        }
    }
}
