<?php
// Datos de las bandas. Para agregar o cambiar una banda, edita este arreglo.
$generos = [
    [
        'id'     => 'rock',
        'titulo' => 'Rock',
        'intro'  => 'Del blues eléctrico de los sesenta a los estadios de los setenta: tres bandas británicas que fijaron el sonido del rock.',
        'bandas' => [
            [
                'id'        => 'rolling-stones',
                'nombre'    => 'The Rolling Stones',
                'anio'      => '1962',
                'texto'     => 'Empezaron tocando blues y rhythm and blues estadounidense y lo convirtieron en un rock crudo y bailable. Mick Jagger y Keith Richards firman la mayoría de sus canciones, desde «(I Can\'t Get No) Satisfaction» hasta las de Exile on Main St. Más de seis décadas después, siguen grabando y de gira.',
                'origen'    => 'Londres, Inglaterra',
                'integrantes' => 'Mick Jagger, Keith Richards, Charlie Watts, Ronnie Wood',
                'album'     => 'Exile on Main St. (1972)',
                'cancion'   => '(I Can\'t Get No) Satisfaction (1965)',
            ],
            [
                'id'        => 'led-zeppelin',
                'nombre'    => 'Led Zeppelin',
                'anio'      => '1968',
                'texto'     => 'Combinaron blues, folk y hard rock en un sonido pesado y ambicioso. Jimmy Page construía riffs y capas de guitarra en el estudio, mientras la voz de Robert Plant y la batería de John Bonham marcaron el estilo de generaciones. Su cuarto álbum, sin título, incluye «Stairway to Heaven». Se disolvieron en 1980, tras la muerte de Bonham.',
                'origen'    => 'Londres, Inglaterra',
                'integrantes' => 'Robert Plant, Jimmy Page, John Paul Jones, John Bonham',
                'album'     => 'Led Zeppelin IV (1971)',
                'cancion'   => 'Stairway to Heaven',
            ],
            [
                'id'        => 'queen',
                'nombre'    => 'Queen',
                'anio'      => '1970',
                'texto'     => 'Mezclaron rock, ópera, glam y pop en canciones hechas para cantar a coro. Freddie Mercury fue una de las grandes voces del rock, y Brian May creó su propio sonido con una guitarra que construyó junto a su padre. «Bohemian Rhapsody» rompió las reglas de duración y estructura del sencillo, y su actuación en el Live Aid de 1985 sigue entre las más recordadas de la historia.',
                'origen'    => 'Londres, Inglaterra',
                'integrantes' => 'Freddie Mercury, Brian May, Roger Taylor, John Deacon',
                'album'     => 'A Night at the Opera (1975)',
                'cancion'   => 'Bohemian Rhapsody',
            ],
        ],
    ],
    [
        'id'     => 'metal',
        'titulo' => 'Metal',
        'intro'  => 'Nacido en Birmingham y llevado al extremo en Los Ángeles: tres bandas que hicieron del volumen una identidad.',
        'bandas' => [
            [
                'id'        => 'black-sabbath',
                'nombre'    => 'Black Sabbath',
                'anio'      => '1968',
                'texto'     => 'Nacieron en una ciudad industrial y sonaron como tal: guitarras graves, riffs lentos y letras oscuras. Su álbum debut y Paranoid, ambos de 1970, se consideran el punto de partida del heavy metal. Tony Iommi desarrolló ese estilo pese a haber perdido las puntas de dos dedos en un accidente de fábrica.',
                'origen'    => 'Birmingham, Inglaterra',
                'integrantes' => 'Ozzy Osbourne, Tony Iommi, Geezer Butler, Bill Ward',
                'album'     => 'Paranoid (1970)',
                'cancion'   => 'Iron Man',
            ],
            [
                'id'        => 'iron-maiden',
                'nombre'    => 'Iron Maiden',
                'anio'      => '1975',
                'texto'     => 'Lideraron la Nueva Ola del Heavy Metal Británico con canciones largas, guitarras dobles en armonía y letras inspiradas en la historia y la literatura. Su mascota, Eddie, aparece en las portadas de sus discos. The Number of the Beast (1982) fue el primero con Bruce Dickinson como cantante y los llevó al éxito mundial.',
                'origen'    => 'Londres, Inglaterra',
                'integrantes' => 'Bruce Dickinson, Steve Harris, Dave Murray, Adrian Smith',
                'album'     => 'The Number of the Beast (1982)',
                'cancion'   => 'Hallowed Be Thy Name',
            ],
            [
                'id'        => 'metallica',
                'nombre'    => 'Metallica',
                'anio'      => '1981',
                'texto'     => 'Llevaron el metal a la velocidad del thrash y después a las multitudes. Kill \'Em All (1983) y Master of Puppets (1986) son pilares del género, y el álbum negro de 1991, con «Enter Sandman», los convirtió en una de las bandas más vendedoras de la historia. Forman parte de los «Cuatro Grandes» del thrash metal.',
                'origen'    => 'Los Ángeles, Estados Unidos',
                'integrantes' => 'James Hetfield, Lars Ulrich, Kirk Hammett, Robert Trujillo',
                'album'     => 'Master of Puppets (1986)',
                'cancion'   => 'Enter Sandman',
            ],
        ],
    ],
];

// Escapa texto para mostrarlo de forma segura en HTML.
function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seis bandas de rock y metal</title>
    <meta name="description" content="Tres bandas de rock y tres de metal que marcaron la historia de la música.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Source+Serif+4:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bandas.css">
</head>
<body>
    <a class="saltar" href="#contenido">Ir al contenido</a>

    <header class="cabecera">
        <a class="cabecera__logo" href="index.php" aria-label="Rock and Metal, ir a la página principal">
            <!-- Logo provisional (un rayo). Para usar tu propia imagen, reemplaza el <svg> por: <img src="logo.png" alt="Logo de Rock and Metal"> -->
            <svg viewBox="0 0 48 48" role="img" aria-hidden="true" focusable="false">
                <path d="M28 4 10 26h11l-4 18 21-24H26z" fill="currentColor"/>
            </svg>
        </a>

        <a class="cabecera__titulo" href="index.php">Rock and Metal</a>

        <nav class="cabecera__menu" aria-label="Principal">
            <a class="cabecera__enlace" href="index.php">Inicio</a>
            <a class="cabecera__enlace" href="bandas.php" aria-current="page">Bandas</a>
            <a class="cabecera__enlace" href="subgeneros.php">Subgéneros</a>
        </nav>
    </header>

    <header class="portada">
        <h1 class="portada__titulo">Seis bandas que definieron el rock y el metal</h1>
        <p class="portada__texto">Tres de rock y tres de metal. Elige un género para ver sus bandas.</p>
    </header>

    <nav class="selector" aria-label="Géneros">
        <?php foreach ($generos as $genero): ?>
            <a class="selector__panel selector__panel--<?= e($genero['id']) ?>" href="#<?= e($genero['id']) ?>">
                <span class="selector__palabra"><?= e($genero['titulo']) ?></span>
                <span class="selector__bandas">
                    <?= e(implode(', ', array_column($genero['bandas'], 'nombre'))) ?>
                </span>
            </a>
        <?php endforeach; ?>
    </nav>

    <main id="contenido">
        <?php foreach ($generos as $genero): ?>
            <section class="genero genero--<?= e($genero['id']) ?>" id="<?= e($genero['id']) ?>" aria-labelledby="titulo-<?= e($genero['id']) ?>">
                <div class="genero__contenedor">
                    <header class="genero__cabecera">
                        <h2 class="genero__titulo" id="titulo-<?= e($genero['id']) ?>"><?= e($genero['titulo']) ?></h2>
                        <p class="genero__intro"><?= e($genero['intro']) ?></p>
                    </header>

                    <?php foreach ($genero['bandas'] as $banda): ?>
                        <article class="banda" id="<?= e($banda['id']) ?>">
                            <header class="banda__cabecera">
                                <h3 class="banda__nombre"><?= e($banda['nombre']) ?></h3>
                                <p class="banda__anio"><span class="visualmente-oculto">Fundada en </span><?= e($banda['anio']) ?></p>
                            </header>

                            <div class="banda__cuerpo">
                                <p class="banda__texto"><?= e($banda['texto']) ?></p>

                                <dl class="ficha">
                                    <div class="ficha__fila">
                                        <dt>Origen</dt>
                                        <dd><?= e($banda['origen']) ?></dd>
                                    </div>
                                    <div class="ficha__fila">
                                        <dt>Integrantes emblemáticos</dt>
                                        <dd><?= e($banda['integrantes']) ?></dd>
                                    </div>
                                    <div class="ficha__fila">
                                        <dt>Álbum clave</dt>
                                        <dd><?= e($banda['album']) ?></dd>
                                    </div>
                                    <div class="ficha__fila">
                                        <dt>Canción esencial</dt>
                                        <dd><?= e($banda['cancion']) ?></dd>
                                    </div>
                                </dl>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </main>

    <footer class="pie">
        <p>Seis bandas, dos géneros. Los años corresponden a la formación de cada banda.</p>
        <a class="pie__subir" href="#">Volver arriba</a>
    </footer>
</body>
</html>