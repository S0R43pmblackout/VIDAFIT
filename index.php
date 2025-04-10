<?php require('onepage.php') ?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VidaFit</title>
	<meta name="robots" content="noindex">
	<link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/doors.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/all.form.css">
	<link rel="stylesheet" href="css/certificate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/date.js"></script>
	<script type="text/javascript">
		var dayarray = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
		var montharray = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
			"Octubre", "Noviembre", "Diciembre");
		function printDate(d) {
			var mydate = new Date();
			var year = mydate.getYear();
			if (year < 1000) year += 1900;
			var day = mydate.getDay();
			var month = mydate.getMonth();
			var daym = mydate.getDate();
			if (daym < 10) daym = "0" + daym;
			document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")
		}
		function getCurrentMonth(d) {
			var t = new Date(d);
			document.write(montharray[t.getMonth()]);
		}
		function getCurrAndPrevMonth(d) {
			var t = new Date(d);
			document.write(montharray[t.getMonth() - 1] + ', ' + montharray[t.getMonth()]);
		}
	</script>
	<style>
		.hide,
		.flag-dropdown {
			display: none;
		}
		.error-box {
			color: #fff;
			background-color: #DE5042 !important;
			border-radius: 5px;
			text-align: center;
			width: 240px;
			font-size: 13px;
			line-height: 20px;
			margin: 5px auto !important;
			z-index: 100;
		}
		input:invalid {
			box-shadow: none;
		}
	</style>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-L8369ETLNF');  // 
</script></head>
	
<body>
	<div class="ctContainer">
		<style>
			.header-img-mobile {
				display: none;
			}
			@media (max-width: 750px) {
				.header-img {
					display: none;
				}
				.header-img-mobile {
					display: inline-block;
				}
			}
		</style>
		<header>
			<a href="#to_form"> <img class="header-img" src="img/header.png" width="100%" alt=""></a>
			<a href="#to_form"> <img class="header-img-mobile" src="img/header-mobile.jpg" width="100%" alt=""></a>
		</header>
		<div class="ctContent">
			<h1 class="womanTitle womanTitle--869054 custom__title">"A los 50, adelgacé y conocí al hombre de mis
				sueños". </h1>
		</div>
		<div class="ctContent">
			<h2 class="womanTitle womanTitle--small womanTitle--196321 custom__subtitle">Trabajó en el mercado toda su
				vida,
				vendiendo fruta y ganando unos céntimos. Pero a los 50 años, Luisa Martínez perdió 30 kg,
				rejuveneció 10 años y se casó con un millonario. ¿Cómo lo consiguió?</h2>
		</div>
		<div class="ctContent">
			<div class="womanContentImgs">
				<div class="womanContentImgOne womanContentImgs__container">
					<div class="womanContentImgOne__wrapper womanContentImgs__wrapper womanContentImgOne__wrapper--625607">
						<img class="womanContentImgOne__img womanContentImgs__img womanContentImgOne__img--218079"
							src="img/image-9533-1694956782876.webp" alt="imagen">
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--779203">Luisa Martínez vendía fruta en Colombia y pesaba más de
				100 kg cuando conoció por Internet a Fernando Camerino, propietario de un gran complejo hotelero de
				cinco estrellas en Miami.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--424490">Luisa Martínez compartió su increíble historia y nos
				contó cómo consiguió <span class="womanText--216848">adelgazar</span> tan <span
					class="womanText--216848">rápido ¡sin dietas, deporte ni liposucción!</span> Luisa
				compartió detalles exclusivos de su transformación y su exitoso matrimonio con nuestra
				publicación.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--677026"><span class="womanText--760395">Del artículo
					aprenderás:</span><br><br> 1. ¿Cómo consiguió casarse con un apuesto millonario
				una sencilla mujer de 50 años que se pasaba la vida vendiendo fruta en el mercado de Colombia?<br><br>2. Cómo
				Luisa Martínez consiguió perder 25 kg en mes y medio antes de conocer
				a Fernando, su esposo?<br><br>3. Cuáles son los <span class="womanText--125336">métodos modernos y seguros</span> de hoy en día <span class="womanText--125336">que pueden ayudarte a
					perder entre 15 y 20 kg al</span> mes: una conversación con el nutricionista más
				importante de Colombia, Mariano Mora.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--179934">Dice Luisa Martínez.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Conocimos a Fernando en un sitio web de citas. Una amiga me sugirió que colgara
				allí mi foto. Llevaba 5 años sola, después de divorciarme de mi marido, vendiendo fruta
				en nuestro mercado local, y no podía imaginar que este sitio de citas pondría mi vida patas
				arriba. Pero al principio no quería registrarme, tenía miedo de los estafadores. </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--804669">También me daba vergüenza publicar mi foto. Tengo 50
				años, estoy gorda, no tengo dinero para comprarme ropa decente o arreglarme el pelo...
				¿Quién me querría así?</p>
		</div>
		<div class="ctContent">
			<p class="womanText">No me atrevía a publicar una foto mía. Pero publiqué una foto <span
					class="womanText--468859">de hace 15 años, en la que peso 25 kg menos</span>. Los hombres
				empezaron a escribirme activamente, cosa que no esperaba. Empecé a mantener correspondencia con
				algunos de ellos. Uno de ellos era Fernando. </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Mantuvimos correspondencia durante unos dos meses. Encontramos un lenguaje común
				muy rápidamente, y me enamoré de él inmediatamente, ¡como una chica de 16 años!
				Es tan inteligente, guapo, con un sentido del humor maravilloso... ¡todos mis pensamientos giraban
				únicamente en torno a él!</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper"><img class="oneImageWidget__img" src="img/image-6700-1695021964218.webp"
					alt="imagen"></div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--104358">Luisa y Fernando se encuentran por primera vez. La pareja parece
				enamorada y feliz, pero hasta ese momento Luisa estaba terriblemente nerviosa y no estaba segura de
				estar preparada para el encuentro</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Fernando me escribía palabras bonitas, me felicitaba por mi figura, me ofrecía
				comunicarse por videollamada, pero yo siempre encontraba una excusa para negarme. </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--448881">Tenía mucho miedo de que me viera como era en realidad. Estaba
				segura de que entonces se sentiría muy decepcionado y dejaría de comunicarse conmigo. </p>
		</div>
		<div class="ctContent">
			<p class="womanText">El día de mi cumpleaños mantuvimos otra agradable correspondencia y Fernando
				me dijo que no podía esperar más y que iba a venir a Colombia dentro de mes y medio a
				visitarme.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">El corazón me latía con fuerza, se me partía el pecho... Por un lado
				estaba locamente feliz, pero por otro me daba cuenta de lo mucho que se decepcionaría si me viera
				así: una abuela de 50 años gorda, descuidada y fea.....</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Lloré toda la noche. Pero por la mañana decidí luchar por mi amor y
				empecé a buscar en Internet todo tipo de formas de deshacerme de 25 kg lo más rápido
				posible.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">No tenía dinero para liposucciones y procedimientos similares. Tampoco me
				convenía hacer dietas estrictas. Aunque hubiera renunciado por completo a la comida, ¡nunca
				habría perdido 25 kg en tan poco tiempo! Mi récord máximo fueron 6 kg en un mes,
				¡cuando me maté de hambre y casi acabo en el hospital! </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Necesitaba algo más. Estaba dispuesta a tomar cualquier pastilla con tal de
				conseguir mi objetivo. Pero las críticas y los efectos sobre la salud eran aterradores. Una mujer delgada pero muerta, tampoco era necesaria....
				Una mujer delgada pero muerta, tampoco era necesaria....
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--933578">Se me cayeron completamente las manos cuando vi cómo en un foro
				las chicas compartían sus resultados: alguien perdió 17 kg en un mes, alguien perdió 20
				kg, ¡y alguien incluso más! <span class="womanText--441212"></span></p>
		</div>
		<div class="ctContent">
			<p class="womanText">¡Tenía esperanza! Miré las fotos con indisimulada alegría y
				busqué información sobre cómo habían conseguido adelgazar tan rápidamente.
				Debajo de una de las fotos estaba escrito <span class="womanText--734427">"¡Gracias,
				VidaFit!"</span>.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">VidaFit: ¡tenía esperanzas! Escribí el nombre en el buscador y
				empecé a buscar información. </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--905691">Resultó que VidaFit
				es un producto totalmente natural a base de plantas para la
				pérdida de peso. Contiene extractos de plantas, que se consideran como quemadores de grasa seguros
				naturales en la medicina.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Los extractos de plantas en VidaFit ayudan a perder peso rápidamente y tienen un
				efecto positivo sobre la salud y la belleza. Ellos saturan el cuerpo con vitaminas, ayudan a embellecer
				la piel, el cabello, las uñas. Pero lo más importante - a diferencia de todas las otras
				píldoras adelgazantes que se venden en las farmacias, ¡este producto es completamente natural y
				en absoluto perjudicial para la salud!</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--707184"><img
					class="oneImageWidget__img oneImageWidget__img--983448" src="img/product.jpg" style="scale: 0.8;"
					alt="imagen" width="380" height="500"></div>
		</div>
		<div class="ctContent">
			<p class="womanText">No lo dudé durante mucho tiempo. Acabo de pedir VidaFit
				en la oferta  fabricante y, por cierto,
				era
				bastante barato. </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Tomé VidaFit siguiendo estrictamente las instrucciones y, por si
				acaso, intenté comer menos cosas dulces y grasas. Al tercer día me di cuenta de que estaba
				adelgazando <span class="womanText--215702">muy rápidamente</span>: los jeans me quedaban
				más holgados por la cintura. ¡Y sólo era el tercer día!</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--586468">La verdadera sorpresa llegó cuando me subí a la
				báscula. Había perdido 3,5 kg en tres días. Fue increíble.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Mis amigos y conocidos no entendían lo que me pasaba, algunos incluso se
				preocupaban por si estaba enferma. Pero yo estaba sana, llena de energía y feliz. ¡Fernando
				iba a llegar muy pronto! </p>
		</div>
		<div class="ctContent">
			<p class="womanText">No sólo perdí peso, ¡sino que rejuvenecí! Mi piel se tensó y,
				aunque perdí mucho peso, ¡no tenía ni una sola estría! </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Nuestro encuentro con Fernando fue estupendo. No se dio cuenta de que la foto de la
				página web tenía quince años y me dijo que era exactamente como me imaginaba. Pasamos 4
				días maravillosos en Colombia y un mes después volé a Miami, ¡donde me
				quedé para siempre! </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Resultó que Fernando es un hombre muy rico, tiene su propio negocio y una gran
				casa en la costa. Y hace dos meses legalizamos nuestra relación. Ahora somos marido y mujer.<span
					class="boldText"></span></p>
		</div>
		<div class="ctContent">
			<div class="womanContentImgs">
				<div class="womanContentImgSix womanContentImgs__container">
					<div class="womanContentImgSix__wrapper womanContentImgs__wrapper womanContentImgSix__wrapper--752350">
						<img class="womanContentImgSix__img womanContentImgs__img womanContentImgSix__img--440323"
							src="img/image-6254-1695022706819.webp" alt="imagen">
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--737007">Fernando resultó ser un hombre increíble, de lo más
				amable, gentil y cariñoso. Enseguida nos dimos cuenta de que estábamos hechos el uno para el
				otro.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Me alegro mucho de no haber perdido mi oportunidad: de no haber tenido miedo y haber
				pedido VidaFit, de no haberme acobardado y de haber aceptado conocer a Fernando.</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--362513">Acabé perdiendo peso a los 50 años y
					¡encontré al amor de mi vida! </span>Ahora sé con certeza que, literalmente, todo lo
				que puedas imaginar es posible en esta vida. ¡Y la edad no es en absoluto un obstáculo para la
				felicidad! </p>
		</div>
		<div class="ctContent">
			<p class="womanText">Y esta soy yo con mi hijo Diego, ahora tiene 28 años, pero mucha gente dice que
				ahora no parezco la madre de un hombre tan adulto:<span class="womanText--670621"></span> </p>
		</div>
		<div class="ctContent">
			<div class="womanContentImgs">
				<div class="womanContentImgSix womanContentImgs__container">
					<div class="womanContentImgSix__wrapper womanContentImgs__wrapper womanContentImgSix__wrapper--692492">
						<img class="womanContentImgSix__img womanContentImgs__img womanContentImgSix__img--938804"
							src="img/image-954-1695022758516.webp" alt="imagen">
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<p class="womanText">Por último, me gustaría desear a todas las mujeres que nunca desesperen y que
				nunca pierdan la fe en el amor.</p>
		</div>
		<div class="ctContent">
			<div class="line">
				<div class="line__container">
					<div class="line__bg"></div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--452002"> En la redacción nos impresionó tanto la historia de
				Luisa que decidimos ponernos en contacto con el nutricionista más importante de Colombia y
				pedirle que comentara la drástica y radical pérdida de peso de nuestra heroína. El Dr.
				Mariano Mora también nos contó en qué consiste este producto de
				VidaFit y cómo afecta realmente al organismo - lea más
				sobre él en la entrevista.</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--592369"><img
					class="oneImageWidget__img oneImageWidget__img--223229" src="img/image-7767-1695022825125.png"
					alt="imagen"></div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--103574">Mariano Mora</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--259173">Endocrinólogo, nutricionista, profesor, Doctor en Ciencias
				Médicas. Autor de numerosos libros y publicaciones científicas sobre los problemas del exceso
				de peso.</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--907675">Corresponsal:</span> Hola, Dr. Mariano Mora. Hoy
				hablamos de la pérdida de peso y nos gustaría pedirle que comentara la pérdida de peso de
				nuestra heroína Luisa, cuya historia ha leído. ¿Es seguro perder peso tan
				rápidamente?</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--426814">Dr. Mariano Mora:</span> No hay nada sorprendente
				en esta historia. Si el producto es natural, es seguro. Además, conozco bien este producto.<span
					class="womanText--515067"></span></p>
		</div>
		<div class="ctContent">
			<p class="womanText">VidaFit es un
				quemador
				de grasa activo a base de plantas que triplica su tasa metabólica y estimula la pérdida de
				peso natural.<span class="womanText--103150"></span> <span class="womanText--334267"></span></p>
		</div>
		<div class="ctContent">
			<p class="womanText">Las sustancias que se encuentran en algunas plantas afectan selectivamente a la propia
				estructura de los depósitos de grasa, por lo que ésta se quema de forma natural.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--244222">VidaFit
				ayuda a
				perder
				hasta 15-25 kg en 1-2 meses. Al mismo tiempo, los intestinos se limpian y el cuerpo está saturado
				de vitaminas y minerales útiles.
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Si usted tiene sobrepeso, su cuerpo necesita micronutrientes que son responsables de la
				descomposición de la grasa. En concreto, se trata de superantioxidantes que queman no sólo la
				grasa subcutánea, sino también la más peligrosa: la grasa visceral y los depósitos
				en zonas problemáticas.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Está demostrado que VidaFit es el único
				producto capaz de eliminar
				la grasa no sólo de
				las caderas y el abdomen, sino también de las zonas más "difíciles": brazos en
				la zona de los tríceps, barbilla y cuello.</span>
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText">VidaFit es que contiene extractos de
				hierbas
				naturales quemadoras de grasa y una serie de otros
				ingredientes beneficiosos, incluyendo:
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText">
				Extracto de alcachofa: es ideal para limpiar nuestro organismo y por lo tanto nos ayuda a eliminar grasas y a adelgazar. Este producto es muy rico en fibra, proteínas, fósforo, potasio, esteroles y cinarina. Todos estos componentes ayudan a regular el tránsito intestinal y a quemar grasas.
				<br><br>
				Espirulina: Es baja en calorías y alta en proteína y fibra, lo que genera una sensación de saciedad que ayuda a evitar que se consuman demasiadas calorías, así como los antojos de alimentos de poco valor nutritivo.
				<br><br>
				Berenjena: es un diurético y un depurativo, es decir, puede ayudar a eliminar desechos, y de esta manera ayudarnos a adelgazar. Además, ayuda al buen funcionamiento del hígado. Promueve la Salud Ósea y combate la Osteoporosis. Mejora la Digestión. Ayuda a controlar la Presión Arterial. La berenjena puede ayudar a controlar el peso, al reducir la secreción de una sustancia que alerta a nuestro cerebro cuando tenemos hambre.

			</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--141141"></span>Durante el desarrollo del producto en
				laboratorio, se utilizó la última tecnología de extracción en frío, gracias a
				la cual fue posible no sólo conservar, sino también potenciar las propiedades quemagrasas de
				cada componente.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--853602">Está clínicamente probado que VidaFit
				acelera el metabolismo 3 veces y aumenta la lipólisis
				(descomposición de las grasas) casi 7 veces.
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText">La pérdida de 3-4 kg por semana se debe a la aceleración de los procesos
				naturales del organismo. Esto significa que no es necesario torturarse con entrenamientos intensivos en
				el gimnasio y una dieta estricta. Los componentes activos de VidaFit descomponen instantáneamente
				la grasa que viene con la comida, evitando así que se deposite en forma de feos pliegues en el
				cuerpo.</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--152934">Principales propiedades de VidaFit:</span><br><br> -
				Quema de grasa;<br> - Supresión del apetito;<br> - Normalización del fondo hormonal;<br> -
				Rejuvenecimiento y purificación del organismo;<br> - Efecto tónico debido a la quema de
				grasas.</p>
		</div>
		<div class="ctContent">
			<p class="womanText"> Es un activador biológico Esto significa que contiene sólo los
				componentes naturales que promueven el proceso de lipólisis. Es un producto universal que ayuda
				eficazmente a perder peso.
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText">He aquí algunos ejemplos de mujeres que han perdido peso con VidaFit. Fotos tomadas con su
				permiso.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--693758">Sabana Morones, 26 años. Ha perdido 30 kg en 2 meses</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--929787"><img
					class="oneImageWidget__img oneImageWidget__img--819993" src="img/image-8388-1695023126016.jpg"
					alt="imagen"></div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--773016">Zanita Junco, 46 años. He perdido 18 kg en mes y medio.</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--346241"><img
					class="oneImageWidget__img oneImageWidget__img--845654" src="img/image-8028-1695023153542.jpg"
					alt="imagen"></div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--673557">Andria Galiano, 35 años, perdió 38 kg en 3 meses</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--762227"><img
					class="oneImageWidget__img oneImageWidget__img--453124" src="img/image-9818-1695023174260.jpg"
					alt="imagen"></div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--570325">Orlan Abila, 35 años, perdió 40 kg en 3 meses</p>
		</div>
		<div class="ctContent">
			<div class="oneImageWidget__wrapper oneImageWidget__wrapper--105443"><img
					class="oneImageWidget__img oneImageWidget__img--579224" src="img/image-8192-1695023194590.jpg"
					alt="imagen"></div>
		</div>
		<div class="ctContent" style="margin-top: 10px;">
			<p class="womanText womanText--611652"><span class="womanText--708524">VidaFit trabaja de forma integral y
					coherente</span>: <br><br> <span class="womanText--341250">Día 1-5</span> - eliminación
				del exceso de agua. Desaparece la hinchazón de las piernas y la cara. Durante este período se
				recomienda beber al menos 1,5 litros de agua pura al día para acelerar el proceso de pérdida
				de peso.<br><br> <span class="womanText--166330">Día 6-9</span> - aceleración del metabolismo.
				El cuerpo comienza a gastar de 4000 kcal por día.<br><br> <span class="womanText--867421">Día</span> 10-15 -
				activación de la lipólisis. Comienza el
				proceso de quema de tejido adiposo y su transformación en energía. Usted se sentirá vigor
				y una explosión de energía.<br><br> Día<span class="womanText--857687">15-18</span> -
				limpieza de los intestinos. Se siente ligereza en el estómago.<br><br> Día<span
					class="womanText--375298">19+</span> - quema de grasa visceral. Es beneficioso para la salud, aunque
				puede no No afectará mucho a su peso, pero es muy beneficioso para su salud.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--277168"><span class="womanText--543855">¡IMPORTANTE!:</span> <a href="#to_form"
					class="womanText--461983">VidaFit</a>
				suprime fuertemente el apetito. No se olvide de comer
				normalmente y correctamente durante la pérdida de peso - esto sólo mejorará el resultado.
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--503168">VidaFit no sólo ayuda a deshacerse del exceso de peso, sino que
				también tiene un efecto positivo en el organismo en su conjunto: </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--942431">1. El metabolismo se normaliza</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Con un metabolismo normal, las calorías consumidas con los alimentos son
				transformadas por el organismo en energía y no se almacenan en forma de grasa. Con un metabolismo
				lento, el cuerpo no puede procesar ni siquiera una pequeña cantidad de calorías. Por eso las
				personas con un metabolismo lento no pueden perder peso ni siquiera con una dieta. </p>
		</div>
		<div class="ctContent">
			<p class="womanText">VidaFit resuelve este problema,
				restablece plenamente los procesos metabólicos, lo que le permite comer plenamente y al mismo
				tiempo reducir el peso. <br><br> - Normaliza el apetito,<br> - Usted no sentirá hambre por la tarde
				y por la noche,<br> - Tendrá energía para la vida activa.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--846848">2. La tensión arterial se normaliza.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Las personas con sobrepeso son propensas a la hipertensión. Después de 7
				semanas de uso regular de VidaFit, el sistema vascular
				del cuerpo se renueva completamente. Los vasos se vuelven elásticos y fuertes, serán capaces
				de estabilizar la presión arterial sin problemas.<br><br> Los vasos renovados<span
					class="womanText--709805">compensarán cualquier diferencia y mantendrán una presión arterial estable de 120 sobre 80, a pesar del estrés o el </span>esfuerzo físico.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--259865">3. La función cerebral mejorará</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Después del uso de VidaFit, la
				circulación sanguínea cerebral mejora en un 73%. Los que toman este producto notan con
				entusiasmo que<br><br> - Mejora la memoria.<br> - Normaliza el sueño, desaparece el letargo y la
				debilidad.<br> - Cesa el tinnitus.<br> - Cesan los dolores de cabeza.<br> </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--102572">4. La hinchazón desaparece</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Se restablecen los riñones y el intercambio de líquidos del organismo. Los
				riñones dejan de retener agua y ya no es necesario tomar diuréticos.<br><br> - Las piernas
				dejan de doler y de hincharse.<br> - El abdomen se encoge porque la hinchazón de los órganos
				disminuye.<br> - El líquido sale de los pulmones y es más fácil respirar.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--820605">5. El corazón se está reparando</p>
		</div>
		<div class="ctContent">
			<p class="womanText">VidaFit satura el organismo de
				vitaminas
				y tiene un efecto positivo sobre el tono del músculo cardíaco. En el 93% de los casos
				desaparece la taquicardia, en el 99% se cura la isquemia.<br><br> - Se normaliza el ritmo cardíaco
				y el pulso.<br> - Se eliminan los dolores cardíacos.<br> - El<span class="womanText--551929">
					riesgo de infarto se reduce 17 veces.</span></p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--867497">6. El sistema inmunitario empieza a funcionar</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Se mejora el riego sanguíneo de la médula ósea, que interviene en la
				producción de células inmunitarias. Esto conduce a un fortalecimiento de las defensas del
				organismo. Enfermarás menos, tu cuerpo estará protegido de virus e infecciones peligrosas.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--129288">7. Mejora el estado de la piel, el cabello y las uñas</p>
		</div>
		<div class="ctContent">
			<p class="womanText">Gracias a la composición natural única de VidaFit, al tomar este producto mejora la
				producción de colágeno en el organismo, lo que tiene un efecto positivo en el estado de la
				piel, el cabello y las uñas. Esto significa que incluso con una rápida pérdida de peso la
				piel se mantiene elástica, no aparecerán estrías, la piel no se descolgará. El pelo
				estará brillante y las uñas fuertes.</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--810691">¿Dónde comprar VidaFit y cuánto cuesta el producto?
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--268274">Corresponsal:</span> ¡Gracias, doctor! ¿Puede
				decirme cómo encontrar este producto? ¿Se vende en farmacias?</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--244510">Dr. Mariano Mora:</span> Desgraciadamente, por el
				momento no es posible comprar VidaFit en una farmacia. Se han obtenido todos los certificados
				necesarios, se han superado con éxito los ensayos clínicos, pero las farmacias quieren fijar
				un precio demasiado alto. El producto fue desarrollado por organizaciones sin ánimo de lucro, por
				lo que es inaceptable fijar el precio en 278.000 COP* por envase. Simplemente, nadie podrá
				comprar un medicamento tan caro.</p>
		</div>
		<div class="ctContent">
			<p class="womanText">El plan original era fabricar un producto barato que pudieran permitirse personas con
				diferentes posibilidades económicas. Pero, por desgracia, a las farmacias sólo les interesa el
				beneficio. Se dieron cuenta de que VidaFit es realmente eficaz, que lo comprarán a cualquier
				precio, así que están tirando, insistiendo en sus condiciones. Creo que VidaFit
				aparecerá en las farmacias no antes de 2025. </p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--460662">¡Pero hay buenas noticias!</span> Hoy en día
				hay una manera de conseguir VidaFit en condiciones especiales. El fabricante acaba de lanzar una <a
					href="#to_form" class="womanText--338695">promoción especial</a>. Mientras
				esté vigente, todo el mundo puede participar en el sorteo en
				línea y obtener un <span class="womanText--142301">descuento de
					hasta el 50% en la promoción!</span></p>
		</div>
		<div class="ctContent">
			<p class="womanText">Esto se hace con el fin de que el mayor número posible de personas conozcan los
				nuevos medios eficaces y seguros para perder peso, deshacerse del exceso de peso, recuperar su belleza y
				la confianza en sí mismos!.
			</p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--578369">Pero te recomiendo encarecidamente que te des prisa. La
				promoción estará vigente hasta<span class="ct_noteditable"> <span class="fullDate" mindays="0"
						datemode="dd">el</span></span>.</p>
		</div>
		<div class="ctContent">
			<p class="womanText"><span class="womanText--949146">Corresponsal:</span> ¡Muchas gracias! Sin duda
				publicaremos toda la información necesaria para nuestros lectores para que todos los que quieran
				adelgazar puedan participar en la promoción y conseguir VidaFit
				con un descuento de hasta el 50%! </p>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--127155"><span class="womanText--615998"></span><span
					class="womanText--291769">¡Importante!</span> Como resultado de las investigaciones, se comprobó
				que <span class="womanText--529274">
					<script>
						d = new Date();
						p = new Date(d.getTime() - (86400 * 1000 * 0));
						monthA = 'enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre'.split(',');
						document.write(" " + monthA[p.getMonth()] + " ");
					</script>
					y
					<script>
						d = new Date();
						p = new Date(d.getTime() - (86400 * 1000 * -30));
						monthA = 'enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre'.split(',');
						document.write(" " + monthA[p.getMonth()] + " ");
					</script>
				</span> son la mejor época para empezar a
				tomar VidaFit. Gracias a la estabilización de la temperatura media, los procesos metabólicos
				en el organismo se aceleran y el efecto del producto es varias veces más fuerte. La <span
					class="womanText--319792">pérdida de peso es un 37% más rápida que en cualquier otra
					época del año.</span>
			</p>
		</div>
		<div class="ctContent">
			<div class="coloredText">
				<div class="coloredText__container" ct_data="bgColor">
					<h3 class="coloredText__title">Condiciones de participación en el sorteo de descuentos
					VidaFit:</h3>
					<div class="coloredText__listContainer">
						<ul class="ct_noteditable">
							<li class="ct_noteditable">
								<p class="coloredText__listItem">Residir en Colombia y ser mayor de 18 años.</p>
								<p class="coloredText__listSub">El producto VidaFit con descuento se distribuye
									únicamente a adultos residentes en Colombia.</p>
							</li>
							<li class="ct_noteditable">
								<p class="coloredText__listItem"></p>Solo para uso personal.<p class="coloredText__listSub">Este
									es para luchar contra los revendedores.</p>
							</li>
							<li class="ct_noteditable">
								<p class="coloredText__listItem">Sólo a través del sorteo oficial.</p>
								<p class="coloredText__listSub">Debido a su limitada producción, el producto
									sólo se vende a través del sorteo oficial, publicado más abajo en la
									página.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<h2 class="womanTitle womanTitle--black">ADVERTENCIA ¡Cuidado con las falsificaciones!</h2>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--578822">VidaFit en Colombia sólo se puede conseguir participando en
				el sorteo ¡hasta con un 50% de descuento!</p>
		</div>
		<div class="ctContentFluid ctContentFluid--red ct_noteditable">
			<div class="ctContent ct_noteditable"><span class="goToForm ct_noteditable"> El descuento tendrá lugar
					aquí</span></div>
		</div>
		<span id="to_form"></span>
		<div class="ctContent">
			<div id="form-block">
				<h3 class="door__head">Participa en el sorteo y obtén un descuento en la compra de VidaFit de hasta el 50%.
				</h3>
				<div class="door__wrapper">
					<h2 class="door__title">ADIVINA LA PUERTA QUE TIENE UN 50% DE DESCUENTO</h2>
					<div class="door__container">
						<div class="door_box">
							<div class="hi">
								<p id="door__sales2" class="door__sales "></p>
							</div>
							<div id="door__2" class="door">
							</div>
						</div>
						<div class="door_box">
							<div class="hi">
								<p id="door__sales1" class="door__sales "></p>
							</div>
							<div id="door__1" class="door">
							</div>
						</div>
						<div class="door_box">
							<div class="hi">
								<p id="door__sales3" class="door__sales "></p>
							</div>
							<div id="door__3" class="door">
							</div>
						</div>
					</div>
				</div>
				<div id="order" class="order">
					<div class="order__header">
						<!-- Form -->
						<div id="leadform" class="leadform">
							<div class="container-form">
								<div class="form-wrapper" id="form">
									<form action="" method="post">
										<?= countryDefault() ?>
	
										<div class="form_inner">
											<div class="form__title">
												<p class="form__title-h1">Pida <span class="offer-name">VidaFit</span> con</p>
												<p class="form__title-h2">50% de descuento</p>
											</div>
										</div>
										<div class="form__price">
											<div class="form-img"><img src="img/product.jpg" alt="" id="my-img" class=""></div>
											<div class="price__specific">
												<div class="price price__old">
													<div class="price__text">PRECIO INICIAL:</div>
													<div class="price__price">
														<span class="oldPriceAndLabelForLandingInfoApi"><?= $oldPriceHtml ?> <?= $currencyDisplayHtml ?></span>
													</div>
												</div>
												<div class="price price__new">
													<div class="price__text">PRECIO CON DESCUENTO:</div>
													<div class="price__price">
														<span class="priceAndLabelForLandingInfoApi"><?= $newPriceHtml ?> <?= $currencyDisplayHtml ?></span>
													</div>
												</div>
											</div>
										</div>
										<div class="form_inner">
											<div class="form__title">
												<div class="form__requirement">Para obtener el descuento en <span
														class="offer-name">VidaFit</span>, ingrese su nombre y número de teléfono en
													los campos a continuación y haga clic en el botón "Enviar pedido"</div>
												<label class="form__label">Nombre:</label>
												<input class="form__input" type="text" name="name" placeholder="Nombre" required="">
												<label class="form__label">Número de teléfono:</label>
												<input class="form__input" type="tel" name="phone" placeholder="+506" required="">
											</div>
										</div>
										<div class="form_inner">
											<button class="form-button" type="submit">Enviar pedido</button>
										</div>
									</form>
								</div>
								<div class="form-bottom">
									<p class="bottom_h1">¡APRESURESE!</p>
									<p class="bottom_h2">LOS PAQUETES PROMOCIONALES TERMINARÁN PRONTO</p>
									<p class="bottom__update"><span class="update-red">ACTUALIZACIÓN: </span> solo quedan <span
											class="form-instock" style="opacity: 1; transition: opacity 0.4s ease 0s;">7</span>
										unidades hasta el día <span class="js-current-date">08.02.2024</span>
									</p>
									<p class="bottom_underinfo">Rellene el formulario y nuestro especialista se pondrá en
										contacto con usted en breve. El mensajero le entregará el pedido en su domicilio, pago al
										recibirlo.</p>
								</div>
							</div>
						</div>
						<!-- -->
					</div>
					<div class="spin-result-wrapper">
						<div class="pop-up-window">
							<div class="close-popup"></div>
							<h1 class="popup-title">¡Felicidades!</h1>
							<p class="ruletka-p pop-up-text">¡Puede obtener una VidaFit por <span class="danger-text"> <span
										class="priceAndLabelForLandingInfoApi"><?= $newPriceHtml ?> <?= $currencyDisplayHtml ?></span>!</span></p>
							<a class="pop-up-button" href="#to_form">OK</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<p class="womanText womanText--570870">Observaciones:</p>
		</div>
		<div class="ctContent">
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-2675-1695025726063.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Melosa Mancilla</p>
						<p class="kardineoCom__comment">¡Super transformación! Tengo 35 años,
							después del parto gané mucho peso. ¡Yo también quiero adelgazar!
							¡Encargué VidaFit y estaré transformada para el verano!</p>
						<p class="kardineoCom__published">Publicado hace un momento</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-8009-1695025731258.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Dulcinea Silverio</p>
						<p class="kardineoCom__comment">Mujer afortunada. El hombre es guapo y rico... ¡Sólo
							un cuento de hadas!</p>
						<p class="kardineoCom__published">Publicado hace 20 minutos</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3050-1695025737424.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Rebeca Montoya</p>
						<p class="kardineoCom__comment">He perdido 18 kg con VidaFit. La sensación de hambre desaparece por
							completo, no
							quiero comer, y no hay somnolencia ni debilidad. Probablemente, mientras dure la
							promoción, tomaré otro curso.</p>
						<p class="kardineoCom__published">Publicado hace 1 hora</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-5033-1695025742532.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Camila Prieto</p>
						<p class="kardineoCom__comment">Mi paquete llegó, ¡gracias!))))este es el embalaje.
							Espero poder perder peso a tiempo para la boda de mi amiga )))</p>
						<p class="kardineoCom__published">Publicado hace 1 hora</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-1159-1695025750606.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Mora Anguiano</p>
						<p class="kardineoCom__comment">Consumo <a href="#to_form" class="commentBox--231057">VidaFit</a> no por
							primera vez, a continuación se muestra una
							imagen después de mi primer contacto con este producto. Mi efecto llegó casi de
							inmediato, mi amigo perdió peso después de una semana o dos, pero bruscamente. El
							fondo hormonal de cada uno es diferente, pero esto significa en cualquier caso el trabajo.
						</p>
						<div class="commentImgWrapper commentImgWrapper_1114376 commentImgWrapper--943119"><img
								class="commentImg commentImg_1114376 commentImg--837563" src="img/image-8611-1695025187666.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 1 hora</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-5538-1695025755833.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Teresa Escalona</p>
						<p class="kardineoCom__comment">En sólo 1,5 meses, ¡esta mujer se ha convertido en una
							persona completamente diferente! En fin, sin más preámbulos, ¡hago un pedido,
							porque he ganado un descuento!</p>
						<p class="kardineoCom__published">Publicado hace 1 hora</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-7331-1695025760196.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Eldora Cilia</p>
						<p class="kardineoCom__comment">¡Es tan guapa! No parece de su edad en absoluto. Adelgaza.
							Yo tampoco puedo perder peso. Aumenté de peso después de mi primer embarazo y
							todavía no puedo perderlo. He pedido VidaFit
							intentaré adelgazar con este producto... </p>
						<p class="kardineoCom__published">Publicado hace 2 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-7756-1695025765078.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Eliana Olivar</p>
						<p class="kardineoCom__comment">Todos mis amigos y yo estamos encantados con VidaFit. Cuando me
							enteré del sorteo de descuentos, ¡chillé de alegría! ¡He ganado un
							descuento! Ya lo tengo y he empezado a tomarlo. </p>
						<p class="kardineoCom__published">Publicado hace 2 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3800-1695025781008.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Lucia Aguado</p>
						<p class="kardineoCom__comment">VidaFit también me
							ayudó, lo leí en
							un foro.
							Perdí más de 30 kg. </p>
						<div class="commentImgWrapper commentImgWrapper_4341625 commentImgWrapper--880942"><img
								class="commentImg commentImg_4341625 commentImg--617537" src="img/image-1197-1695025256550.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 2 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-2345-1695025791477.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Cristal Sanchez</p>
						<p class="kardineoCom__comment">No sé, es ridículo. Para que algunas hierbas tengan
							tal efecto...</p>
						<p class="kardineoCom__published">Publicado hace 2 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-4396-1695025796550.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Aldona Cordero</p>
						<p class="kardineoCom__comment">¡Estoy maravillada con la historia! ¡Es tan bonita!
							¡Wow! Pedí su VidaFit, voy a
							perder peso! )))). ¡Yo también quiero
							casarme con un millonario!
						</p>
						<p class="kardineoCom__published">Publicado hace 2 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-8380-1695025800833.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Doris Martin
						</p>
						<p class="kardineoCom__comment">Empecé a tomar VidaFit unos seis meses después de dar
							a luz, cuando dejé de dar el pecho. Y sí, se puede adelgazar
							instantáneamente, a mí también me gustó mucho este producto. Desalienta
							el deseo de masticar algo constantemente. Aquí las chicas escriben que la
							sensación de hambre desaparece en general. Tuve la misma, y en cambio - una
							explosión de energía. Por cierto, después del curso no sólo mejoró
							la piel, sino también el cabello se volvió más grueso, apareció un
							brillo vivo.</p>
						<p class="kardineoCom__published">Publicado hace 4 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-8541-1695025827732.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Alba Torres</p>
						<p class="kardineoCom__comment">¡¡¡¡Yo también probé muchas cosas,
							pero VidaFit fue la que
							mejor funcionó!!!! Mi resultado:</p>
						<div class="commentImgWrapper commentImgWrapper_6985827 commentImgWrapper--197905"><img
								class="commentImg commentImg_6985827 commentImg--546158" src="img/image-6732-1695025334678.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 4 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-2923-1695025834439.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Felisa Armendáriz</p>
						<p class="kardineoCom__comment">¿Cuánto se tarda ahora en hacer un pedido?
							¿Quién lo sabe?</p>
						<p class="kardineoCom__published">Publicado hace 4 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-7996-1695025841515.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Lourdes Celestino</p>
						<p class="kardineoCom__comment">Me llegó en 2 días, el mensajero trajo el paquete.
							nada arrugado. Empecé a tomarlo la semana pasada, 3kg ya se han ido))))</p>
						<p class="kardineoCom__published">Publicado hace 7 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-4144-1695026073534.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Almunda Dávila</p>
						<p class="kardineoCom__comment">Chicas, en realidad pesaba casi 110 kg. Siguiendo el consejo de
							un nutricionista, pedí VidaFit para perder peso.
							El
							resultado: ¡menos 45 kg en 7,5
							meses! ¡El peso se mantiene! Con orgullo quiero mostrarles fotos - el resultado de mi
							lucha contra el exceso de peso. ¡Yo ni siquiera creía que podía cambiar
							tanto, pero resultó para bajar de peso realmente! Pedí VidaFit.
							¡¡¡¡Gracias por el sorteo!!!!</p>
						<div class="commentImgWrapper commentImgWrapper_5585602 commentImgWrapper--632885"><img
								class="commentImg commentImg_5585602 commentImg--901898" src="img/image-1160-1695025386418.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 7 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-6330-1695025850458.webp" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Laura Guillen</p>
						<p class="kardineoCom__comment">Gracias a VidaFit he perdido 15kg, ¡muy buen producto! He
							pedido más, necesito perder 7kg más y será perfecto).</p>
						<p class="kardineoCom__published">Publicado hace 7 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-421-1695026085666.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Laura Valbuena</p>
						<p class="kardineoCom__comment">¡VidaFit funciona!
							No
							siento hambre,
							reduje la cantidad de comida
							y ahora como 4-5 veces al día. No he dejado de comer productos de harina, sólo los
							he reducido al mínimo. Como lo que quiero, pero dentro de unos límites razonables.
						</p>
						<p class="kardineoCom__published">Publicado hace 7 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-5166-1695026096331.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Elena Acevedo</p>
						<p class="kardineoCom__comment">Hola a todos, yo también he adelgazado con VidaFit. Seré sincera: ¡ni
							siquiera soñaba con un resultado así! Pensaba que todo eran tonterías y no
							quería empezar, pero mi hermana me convenció para que lo probara. Pedimos VidaFit
							y perdimos peso juntas. Conseguí adelgazar 14 kg en un mes y medio, y mi hermana 10,
							aunque al principio su peso era menor. ¡¡¡Ahora el peso se ha estabilizado y
							no cambia!!! ¡¡¡¡Decir que estoy feliz - no es nada que decir!!!! :)))
							¡Recomiendo a todos que lo prueben! Por lo menos 2 semanas, usted verá el
							resultado! </p>
						<p class="kardineoCom__published">Publicado hace 7 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-4683-1695026108932.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Dolores Casas</p>
						<p class="kardineoCom__comment">La grasa está en vuestras cabezas. aunque adelgacéis,
							volveréis a ganar más kilos)))))) </p>
						<p class="kardineoCom__published">Publicado hace 10 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-1032-1695026127269.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Verdad Navarrete</p>
						<p class="kardineoCom__comment">Chicas, no escuchéis a nadie que os diga que no podéis
							hacerlo o que no sabéis hacerlo. ¡Yo lo hice! ¡Y vosotras podréis!
							Recomiendo VidaFit a todo el mundo, es lo único que me ayudó.</p>
						<div class="commentImgWrapper commentImgWrapper_1673999 commentImgWrapper--223381"><img
								class="commentImg commentImg_1673999 commentImg--623481" src="img/image-3214-1695025471772.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 12 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3428-1695026137524.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Victroria Moralez</p>
						<p class="kardineoCom__comment">¡¡¡SUPER PRODUCTO!!! YO TAMBIEN LO PEDI EN LA
							PROMO, PERDI 11KG. PEDIR MAS. NECESITO PERDER 25KG POR LO MENOS. PAREZCO UNA VACA MI MARIDO
							MIRA A LOS DEMAS!</p>
						<p class="kardineoCom__published">Publicado hace 19 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-6461-1695026149223.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Yoana Mosqueda</p>
						<p class="kardineoCom__comment">Chicas, yo también os contaré mi historia. He luchado
							contra el sobrepeso toda mi vida. Hubo periodos en los que literalmente me mataba de hambre.
							De esto sufrió y la salud y el estado de ánimo. Realmente no creía, pero el
							resultado me sorprendió: ¡30 días y menos 14kg! Al mismo tiempo, estoy lleno
							de fuerza y energía. Quiero repetir el curso y tengo mucho miedo de que VidaFit
							será más caro o desaparecer del mercado.</p>
						<p class="kardineoCom__published">Publicado hace 19 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/commentAvatar.png" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Damita Herran</p>
						<p class="kardineoCom__comment">¡VidaFit funciona!
							Dejé
							de comer
							estrés
							incontrolablemente y realmente perdí 12kg. Voy a continuar.</p>
						<p class="kardineoCom__published">Publicado hace 21 horas</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3465-1695026159477.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Carmelita Pomar</p>
						<p class="kardineoCom__comment">Ordenado mientras que una promoción tan favorable, muy a la
							espera de la parcela. Dos años trabajo en un horario por turnos y el metabolismo
							estropeado. Ganado 17 kg, y nada no puede eliminar el exceso de grasa. Espero VidaFit
							ayudará.</p>
						<p class="kardineoCom__published">Publicado hace 1 día</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3597-1695026172625.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Damita Burgo</p>
						<p class="kardineoCom__comment">He recibido mi curso hoy! Empezaré mañana por la
							mañana. Ya me he hecho una foto para poder presumir luego de los resultados.</p>
						<p class="kardineoCom__published">Publicado hace 1 día</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-7137-1695026182435.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Susana Porras</p>
						<p class="kardineoCom__comment">No duden en tomarlo. Yo misma adelgacé con VidaFit, y ahora lo pido
							para mi amiga
							en promoción. Odio las dietas y siempre me vengo abajo, y aquí se vive como
							siempre, y el cuerpo es delgado!!!
						</p>
						<p class="kardineoCom__published">Publicado hace 1 día</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-261-1695026192518.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Isabel Pastrano</p>
						<p class="kardineoCom__comment">Gracias por el artículo. Esto es justo lo que necesito. He
							dejado una solicitud y estoy deseando que me llamen.</p>
						<p class="kardineoCom__published">Publicado hace 1 día</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-8351-1695026206767.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name">Jakinda Pantoja</p>
						<p class="kardineoCom__comment">Conocí VidaFit hace 2 meses y ya he terminado el curso.
							Estoy contenta con el resultado, me alegro de que este producto sea recomendado por
							expertos, porque yo lo aprendí de mis amigas. Me gustan mucho los resultados!</p>
						<div class="commentImgWrapper commentImgWrapper_3990966 commentImgWrapper--184652"><img
								class="commentImg commentImg_3990966 commentImg--399109" src="img/image-8441-1695025577151.jpg"
								alt="commentImg" title="commentImage" ct_datacommentimg="commentImg"></div>
						<p class="kardineoCom__published">Publicado hace 1 día</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3520-1695026217897.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Margarita Galván</p>
						<p class="kardineoCom__comment">¡Super! Tomo el segundo día, hasta ahora he notado que
							me volví más tranquilo, disminuyó el apetito, no hay antojos de dulces. Mi
							estado de ánimo es genial. Creo que todo va como debería!</p>
						<p class="kardineoCom__published">Publicado hace 2 días</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-3840-1695026229447.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Amalia Dávila</p>
						<p class="kardineoCom__comment">¡Tuve la suerte de entrar en el sorteo! Gané un descuento, super,
							nunca he ganado nada)))))
						</p>
						<p class="kardineoCom__published">Publicado hace 2 días</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-2321-1695026241733.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Miguela Monserrate</p>
						<p class="kardineoCom__comment">Empecé a perder peso, ya he perdido 3kg. Lo tomé aquí en una oferta
							especial.</p>
						<p class="kardineoCom__published">Publicado hace 2 días</p>
					</div>
				</div>
			</div>
			<div class="commentBox kardineoCom">
				<div class="kardineoCom__wrapper">
					<div class="kardineoCom__avatarWrapper"><img class="commentAvatar kardineoCom__avatar"
							src="img/image-5800-1695026251500.jpg" alt="Comentarios" ct_dataimg="smallImg">
					</div>
					<div class="kardineoCom__info">
						<p class="kardineoCom__name" href="#to_form">Salbatora Adan</p>
						<p class="kardineoCom__comment">Gracias, interesante, voy a pedir VidaFit también.
							Necesito perder 15kg...</p>
						<p class="kardineoCom__published">Publicado hace 2 días</p>
					</div>
				</div>
			</div>
		</div>
		<div class="ctContent">
			<div class="btnWrapper"><a
					class="btnWrapper__btn btnWrapper__btn--510086 btnWrapper__btn--172667 btnWrapper__btn--931489 btnWrapper__btn--790341"
					href="#to_form">Encargar
					VidaFit</a></div>
		</div>
		<div class="ctContentFluid knifeFooterBg">
			<div class="ctContent">
				<footer class="knifeFooter">
					<center><?= footer('en') ?></center></footer>
			</div>
		</div>
	</div>
	<script src="js/doors.js"></script>
	<script src="js/js/moment-with-locales.min.js"></script>
	<script src="js/js/script.js"></script>
	<script>
		class GoTimer {
			constructor(elem = 'form-instock', num = 37, endNum = 7, numTime = [6, 10]) {
				this.elem = elem;
				this.main = document.querySelectorAll('.' + this.elem);
				this.num = localStorage[this.elem] ? localStorage[this.elem] : num;
				this.endNum = endNum;
				this.timerStart = 0;
				this.timeMin = numTime[0] * 1000;
				this.timeMax = numTime[1] * 1000;
				this.main.forEach(i => (i.style.opacity = 1, i.style.transition = "opacity .4s", i.textContent = this.num))
				this.num > this.endNum ? this.check() : null
			}
			randomNum = (t, o) => (Math.floor(Math.random() * (o - t + 1)) + t)
			editNum = () => {
				this.main.forEach(i => (i.style.opacity = 0))
				setTimeout(() => {
					this.main.forEach(i => (i.textContent = this.num, i.style.opacity = 1))
				}, 500)
			}
			goTimer = (time) => setTimeout(() => {
				this.num = this.num > (this.endNum + 5) ? (this.num = this.num - this.randomNum(1, 4)) : --this.num
				localStorage[this.elem] = this.num
				this.editNum()
				this.num <= this.endNum ? null : this.goTimer(this.randomNum(this.timeMin, this.timeMax))
			}, time)
			check = () => document.querySelector("body").clientHeight <= window.innerHeight ? this.go() :
				window.scrollY + window.innerHeight > this.main[0].offsetTop ? this.go() :
				window.addEventListener("scroll", () =>
					window.scrollY + window.innerHeight > this.main[0].offsetTop || !window.scrollY ? this.go() : null)
			go = () => !this.timerStart ? (this.goTimer(this.randomNum(this.timeMin, this.timeMax)), this.timerStart = !this
				.timerStart) : null
		}
		let timer1 = new GoTimer('form-instock', 52, 7, [6, 12])
	</script>

		</body>
	
</html>