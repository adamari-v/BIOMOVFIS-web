<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio de Fisioterapia</title>
    <link rel="stylesheet" href="estilo.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
	<div class="logo-titulo">
	<img src="logo.jpeg" alt="BIOMOVFIS Logo" style="width: 100px; margin: 10px;">
        <h1>Consultorio de Fisioterapia</h1>
	</div>
        <nav>
	   <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#reservar">Reservar Cita</a></li>
	    <li><a href="#sobre-nosotros">Sobre nosotros</a></li>
            <li><a href="#contacto">Contacto</a></li>
	    
           </ul>
        </nav>
    </header>

    <main>
        <h2>Bienvenido a BIOMOVFIS</h2>
	<section id="inicio">
    <h2>¿Qué es la Fisioterapia?</h2>
    <p>
        La terapia física (mejor conocida como fisioterapia) es una disciplina que se enfoca en el tratamiento y prevención de lesiones 
        musculoesqueléticas, mediante técnicas especializadas para mejorar la movilidad, reducir el dolor y fortalecer el cuerpo.
    </p>
    <div class="beneficios">
        <h3>Beneficios de la Terapia Física</h3>
        <ul>
            <li>Mejora la movilidad y flexibilidad.</li>
            <li>Alivia el dolor crónico y agudo.</li>
            <li>Previene lesiones futuras y recaídas.</li>
            <li>Fortalece músculos y articulaciones.</li>
            <li>Promueve la rehabilitación postquirúrgica.</li>
        </ul>
    </div>
    <p>
        En nuestro consultorio, nos dedicamos a proporcionarte el mejor cuidado, ayudándote a recuperar tu calidad de vida 
        con un enfoque personalizado y profesional.
    </p>
</section>

        <section id="servicios">
    <h2>Servicios</h2>
    <div class="carrusel">
        <div class="slide active">
            <img src="masoterapia.jpg" alt="Masoterapia">
            <div class="info">
                <h3>Masoterapia</h3>
                <p>Es un tratamiento terapéutico que utiliza diferentes técnicas de masaje para 
                aliviar dolores musculares, mejorar la circulación sanguínea y relajar el cuerpo. Es ideal para reducir el estrés y tratar tensiones acumuladas.</p>
            </div>
        </div>
        <div class="slide">
            <img src="lesiones_articulares.jpg" alt="Tratamiento de lesiones articulares">
            <div class="info">
                <h3>Tratamiento de lesiones articulares</h3>
                <p>Consiste en terapias especializadas para rehabilitar y aliviar lesiones en las articulaciones, como esguinces, artritis o 
		desgastes articulares, ayudando a recuperar la movilidad y reducir el dolor.</p>
            </div>
        </div>
        <div class="slide">
            <img src="lesiones_musculares.jpg" alt="Tratamiento de lesiones musculares">
            <div class="info">
                <h3>Tratamiento de lesiones musculares</h3>
                <p>Orientado a la recuperación de lesiones como desgarros, contracturas o distensiones musculares. 
		Incluye técnicas específicas para reducir la inflamación, mejorar el rango de movimiento y fortalecer los músculos afectados.</p>
            </div>
        </div>
        <div class="slide">
            <img src="rehabilitacion.jpg" alt="Rehabilitación post quirúrgica">
            <div class="info">
                <h3>Rehabilitación post quirúrgica</h3>
                <p>Un plan de ejercicios y terapias diseñado para pacientes que han pasado por cirugías ortopédicas u otras intervenciones. 
		Su objetivo es recuperar la fuerza, movilidad y funcionalidad del área intervenida.</p>
            </div>
        </div>
        <div class="slide">
            <img src="higiene_postural.jpg" alt="Higiene postural">
            <div class="info">
                <h3>Higiene postural</h3>
                <p>Educación y prácticas que enseñan a mantener una postura correcta durante las actividades diarias para evitar dolores 
		crónicos, lesiones y sobrecargas musculares. Ideal para personas con trabajos sedentarios o con cargas físicas repetitivas.</p>
            </div>
        </div>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>


        <section id="reservar">
            <h2>Reservar Cita</h2>
            <form id="form-reserva" action="reservas.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>

                <label for="servicio">Servicio:</label>
                <select id="servicio" name="servicio" required>
                    <option value="Terapia Física">Terapia Física</option>
                    <option value="Rehabilitación">Rehabilitación</option>
                    <option value="Dolor Crónico">Dolor Crónico</option>
		    <option value="Masoterapia">Masoterapia</option>
		    <option value="Higiene postural">Higiene postural</option>
		    <option value="Tratamiento de lesiones musculares">Tratamiento de lesiones musculares</option>
		    <option value="Tratamiento de lesiones articulares">Tratamiento de lesiones articulares</option>
                </select>

                <button type="submit">Reservar</button>
            </form>
        </section>

        <section id="sobre-nosotros">
	<h2>Sobre nuestro consultorio</h2>
  	 <div class="descripcion-doctora">
        <img src="angie.jpg" alt="Doctora Angélica" style="width: 150px; border-radius: 50%; margin-right: 20px;">
        <p>
            La Fisioterapeuta Angélica, de 25 años, es una profesional destacada con una gran pasión por ayudar a sus pacientes 
            a mejorar su calidad de vida. Con una formación excepcional, sólida y un enfoque personalizado, ha ganado el 
            reconocimiento de sus pacientes por su dedicación y excelencia en el campo. 
        </p>
        <p>
            El nombre de <b>BIOMOVFIS</b> refleja su filosofía: 
            <i>"Dale vida a tu movimiento con fisioterapia."</i>. Este consultorio representa su compromiso con la salud 
            y el bienestar físico de cada persona que la visita.
        </p>
    </div>
</section>

	</section>

        <section id="contacto">
    <h2>Contáctanos</h2>
    <p>Estamos aquí para ayudarte. Ponte en contacto con nosotros a través de los siguientes medios:</p>
    <div class="contacto-container">
        <div class="contacto-item">
            <h3>Dirección</h3>
	    <img src="ubi.png" alt="Ubicacion" style="width: 100px; border-radius: 50%; margin-right: 20px;">
            <p><a>AV. PINO 155B ECATEPEC DE MORELOS</a></p>
        </div>
        <div class="contacto-item">
            <h3>Teléfono</h3>
	    <img src="cel.png" alt="Celular" style="width: 100px; border-radius: 50%; margin-right: 20px;">
            <p><a href="tel:+5618551547">56-1855-1547</a></p>
        </div>
        <div class="contacto-item">
            <h3>Correo Electrónico</h3>
	    <img src="mail.png" alt="Mailsito" style="width: 100px; border-radius: 50%; margin-right: 20px;">
            <p><a href="mailto:angelica2mvalro@gmail.com">angelica2mvalro@gmail.com</a></p>
        </div>
</div>
</section>

    </main>

<script>
    const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });
}

document.querySelector('.prev').addEventListener('click', () => {
    currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
    showSlide(currentSlide);
});

document.querySelector('.next').addEventListener('click', () => {
    currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
    showSlide(currentSlide);
});
showSlide(currentSlide);
</script>

    <footer>
        <p>&copy; 2025 BIOMOVFIS</p>
    </footer>
</body>
</html>
