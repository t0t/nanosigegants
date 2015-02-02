<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"><!--<![endif]-->

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			wp_title( '|', true, 'right' );
			// Add the blog name.
		 	bloginfo( 'name' ); 
	 	?>
 	</title>

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>

<!-- Aquí acaba el head de mi web -->
<body <?php body_class(["unaclase", "otraclase"]); ?>>

<header class="header">

	<div class="brand">

		<a href="/" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('description'); ?>">

			<!-- <img src="<?php //echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo" class="brand__logo"> -->

			<svg class="brand__logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 92 83" aria-labelledby="title desc">

			<title>logo nanos i gegants de vinaros</title>
			<desc>vectorizado por sergio fores</desc>


				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

					<!-- puntitos -->
					<path d="M0.676953037 81.2 C0.676953037 81.2 6.1 81.9 8 80 C9.88367219 78.1 9.6 77.2 8.7 76 C7.79270694 74.8 6.5 74.4 6.5 74.4 C6.48419416 74.4 5.6 73.4 6.4 73.4 C7.30912989 73.4 12.3 75.4 14.7 77.9 C17.0658053 80.3 17.3 81.9 22.1 81.1 C26.8706082 80.2 27.4 78.5 27.4 77.7 C27.4225573 76.8 27 75.7 25.6 74.8 C24.2262003 73.8 23.8 73.8 23.8 73.6 C23.7739863 73.4 26.8 73.4 29.5 75.4 C32.1209224 77.4 34.9 80.8 37.3 81 C39.6196873 81.2 43.3 81.4 45 79.2 C46.6544591 76.9 44.8 75.4 44 74.7 C43.1203934 74 42.3 73.8 42.3 73.4 C42.3102299 73 46.9 74.2 48 75.3 C49.1584717 76.4 53.1 80.5 54.6 80.7 C56.2065181 81 60.5 81.8 62.5 79.5 C64.4555433 77.3 64.3 76.4 63.2 75.4 C62.0286934 74.4 60.8 73.8 60.6 73.5 C60.3842986 73.1 62.5 73.2 63.8 73.8 C65.2026472 74.4 69 77.3 70 78.4 C71.0842338 79.5 72.3 81 74.7 81 C77.0300428 81 79.9 80.8 81.2 79.1 C82.5359168 77.3 82.8 77.1 81.6 75.6 C80.3935098 74.2 79.5 74.5 79.1 74 C78.7159225 73.5 79.2 72.9 80.7 73.3 C82.2169669 73.8 85.5 75.5 86.9 77.1 C88.3308777 78.7 89.5 79.8 90.3 80.3 C91.1599895 80.7 91.6 81.6 91.1 81.6 C90.5602449 81.6 86.7 79.2 85.5 78.2 C84.2855289 77.1 84.2 77.9 83.9 78.5 C83.6378275 79.1 81.5 81.7 76.8 81.9 C72.0761121 82.2 69.5 79.8 68.9 79.5 C68.212976 79.1 66.2 76.8 65.9 77.2 C65.697509 77.7 64.3 81.2 59.7 81.8 C55.0659464 82.4 51.7 80.9 50.5 79.7 C49.3101484 78.5 47.9 77.2 47.7 77.4 C47.5107592 77.7 47.9 78.9 45.8 80.3 C43.7073572 81.8 38.2 82.4 36.2 81.7 C34.2686404 81 31.1 78.7 30.4 78.2 C29.8135582 77.7 29.6 77.3 29.2 78.6 C28.6915721 80 24.9 81.7 23.2 81.9 C21.4500297 82.2 17.9 82.5 15.7 80.8 C13.6369548 79.1 12.1 78.1 11.7 77.7 C11.228362 77.4 11.7 78.9 10.1 80 C8.47127495 81.2 6.1 82 3.4 82 C0.676953037 82 0.4 82.1 0.1 81.8 C-0.141344536 81.4 0.7 81.2 0.7 81.2 L0.676953037 81.2 Z" fill="#326171"/>

					<!-- nano dcha -->
					<path class="efecto--shake" d="M78.2 60 C78.2 60 75.5 60.9 74 61.3 C72.7 61.7 72.2 61.9 72.2 61.9 C72.3 61.9 72 63.2 72 64.1 C72 65 67.2 64.3 65.8 62.9 C64.4 61.6 64.1 60.2 64.1 60 C64.2 59.7 65.5 59.6 66.1 60.7 C66.7 61.9 67.5 62.7 67.9 62.7 C68.3 62.7 69.7 62.5 69.7 62.5 C69.8 62.5 69.4 60.7 70.1 60.7 C70.8 60.7 69.5 60 68.9 58.8 C68.4 57.6 68.4 55.2 68.4 55.2 C68.4 55.2 66.3 55.3 65.4 54.6 C64.5 54 63.9 52.8 64.4 51.7 C64.9 50.5 65.6 49.8 65.6 49.8 L65.6 49 C65.6 49 61.6 47 60.4 45.6 C59.1 44.2 58.3 40.6 59.5 38.8 C60.8 37 63.3 35.4 66.8 34.3 C70.3 33.3 78.3 34.5 79.9 35.1 C81.5 35.7 82.5 38.7 81.4 41.6 C80.4 44.6 77.8 48.8 77.8 48.8 C77.8 48.8 77.9 49.4 78.4 49.6 C79.1 49.8 80.2 50.6 79.7 51.5 C79.3 52.3 78.5 52 78.5 52 L78.5 53.1 L76.6 53.8 C76.6 53.8 77.5 55.9 80.2 57.7 C83 59.5 84.2 60.2 84.5 60.9 C84.7 61.6 84.4 62.4 84 63 C83.6 63.6 82.9 64.4 82.7 64.8 C82.5 65.2 81.4 65.6 81.1 65.2 C80.8 64.8 80.9 64.1 81.4 63.4 C82 62.7 82.1 62.3 82.1 62.3 L78.2 60 L78.2 60 Z M75.6 49.8 C75.6 49.8 75.1 50.9 75.4 51.6 C75.8 52.3 77.6 51.5 77.6 51.5 L76.7 49.8 L75.6 49.8 L75.6 49.8 Z M69.9 51.6 L68.1 50.3 C68.1 50.3 66.8 51.1 66.8 51.7 C66.8 52.4 67.5 52.9 68.3 52.9 C69.2 52.9 69.8 51.6 69.8 51.6 L69.9 51.6 Z M68.8 46.3 C68.8 46.3 69.1 47.4 71.3 47.4 C73.5 47.4 73.2 45.5 73.2 45.5 C73.3 45.5 72.8 45.1 72.4 45.5 C72 45.9 71.3 46.6 70.3 46.6 C69.3 46.6 68.7 46.3 68.7 46.3 L68.8 46.3 Z M66.4 40.3 C66.4 40.3 65.2 39.8 64.7 40.2 C64.2 40.7 64.2 41.6 64.5 41.9 C64.9 42.3 65.7 42.5 66.4 41.9 C67.1 41.2 66.4 40.3 66.4 40.3 L66.4 40.3 Z M74.6 39.1 C74.6 39.1 73 38.4 72.6 39.1 C72.3 39.7 72.6 40.4 72.9 40.6 C73.3 40.8 74 40.8 74.3 40.3 C74.6 39.7 74.5 39.1 74.5 39.1 L74.6 39.1 Z" fill="#000004"/>

					<!-- nano izda -->
					<path class="efecto--shake" d="M9.8 61.1 C9.8 61.1 12.5 62 14 62.4 C15.4 62.8 15.8 63 15.8 63 C15.8 63 16 64.3 16 65.2 C16 66.1 20.8 65.4 22.2 64 C23.6 62.7 23.9 61.3 23.9 61.1 C23.9 60.8 22.5 60.7 21.9 61.8 C21.4 63 20.5 63.8 20.1 63.8 C19.8 63.8 18.3 63.6 18.3 63.6 C18.3 63.6 18.6 61.8 17.9 61.8 C17.2 61.8 18.5 61.1 19.1 59.9 C19.7 58.7 19.6 56.3 19.6 56.3 C19.6 56.3 21.7 56.4 22.6 55.7 C23.5 55.1 24.1 53.9 23.6 52.8 C23.2 51.6 22.4 50.9 22.4 50.9 L22.5 50.1 C22.5 50.1 26.4 48.1 27.6 46.7 C28.9 45.3 29.7 41.7 28.5 39.9 C27.3 38.1 24.7 36.5 21.2 35.4 C17.7 34.4 9.7 35.6 8.1 36.2 C6.6 36.8 5.5 39.8 6.6 42.7 C7.7 45.7 10.2 49.9 10.2 49.9 C10.2 49.9 10.1 50.5 9.6 50.7 C9 50.9 7.8 51.7 8.3 52.6 C8.7 53.4 9.5 53.1 9.5 53.1 L9.5 54.2 L11.4 54.9 C11.4 54.9 10.5 57 7.8 58.8 C5 60.6 3.8 61.3 3.5 62 C3.3 62.7 3.6 63.5 4 64.1 C4.4 64.7 5.1 65.5 5.3 65.9 C5.5 66.3 6.6 66.7 6.9 66.3 C7.2 65.9 7.1 65.2 6.6 64.5 C6 63.8 5.9 63.4 5.9 63.4 L9.8 61.1 L9.8 61.1 Z M12.5 50.9 C12.5 50.9 12.9 52 12.6 52.7 C12.2 53.4 10.4 52.6 10.4 52.6 L11.3 50.9 L12.5 50.9 L12.5 50.9 Z M18.2 52.7 L19.9 51.4 C19.9 51.4 21.2 52.2 21.2 52.8 C21.2 53.5 20.5 54 19.7 54 C18.8 54 18.2 52.7 18.2 52.7 L18.2 52.7 Z M19.3 47.4 C19.3 47.4 18.9 48.5 16.7 48.5 C14.5 48.5 14.8 46.6 14.8 46.6 C14.8 46.6 15.2 46.2 15.6 46.6 C16 47 16.7 47.7 17.7 47.7 C18.7 47.7 19.3 47.4 19.3 47.4 L19.3 47.4 Z M21.6 41.4 C21.6 41.4 22.8 40.9 23.3 41.3 C23.9 41.8 23.8 42.7 23.5 43 C23.1 43.4 22.3 43.6 21.6 43 C20.9 42.3 21.6 41.4 21.6 41.4 L21.6 41.4 Z M13.5 40.2 C13.5 40.2 15 39.5 15.4 40.2 C15.7 40.8 15.4 41.5 15.1 41.7 C14.7 41.9 14 41.9 13.7 41.4 C13.5 40.8 13.5 40.2 13.5 40.2 L13.5 40.2 Z" fill="#000004"/>

					<!-- gegant -->
					<path class="efecto--shake" d="M38.2 63.8 L40.3 64.2 C40.3 64.2 40 65.5 40.5 65.9 C41 66.3 42.3 65.9 42.5 65.5 C42.7 65.2 42.4 64.4 42.4 64.4 L42.8 63.7 L43.8 63.8 C43.8 63.8 43.7 67.1 44 67.7 C44.3 68.2 45.3 68.5 46.1 68.5 C46.9 68.5 48 67.4 47.3 66.9 C46.6 66.5 45.7 65.6 45.7 65.6 C45.7 65.6 46 64.9 46 64.4 C46 63.8 46.3 63.4 46.8 63.6 C47.3 63.8 48.2 63.7 48.2 63.7 C48.2 63.7 49.2 65.2 49.2 65.9 C49.2 66.6 50.5 68 51.3 68.3 C52 68.5 53.9 68.3 53.9 67.5 C53.9 66.8 53.4 66 53 65.3 C52.5 64.6 52.1 64.1 52.4 63.7 C52.6 63.2 53.9 63 54.3 63.7 C54.8 64.4 55 65.7 55.3 65.7 C55.7 65.7 56.7 65.8 56.9 64.2 C57.1 62.6 56.1 62.2 55.7 61.7 C55.3 61.2 55.1 58.5 54.8 57.2 C54.6 55.8 51.6 45.4 51.6 45.4 C51.6 45.4 50.4 40.4 50.1 36.4 C49.7 32.4 49 31.1 49.8 29.4 C50.7 27.6 52 24.6 52 24.6 L52.2 28.5 L52.7 30.1 C52.7 30.1 52.4 32 53.1 32.4 C53.7 32.7 56.6 32.3 57.9 31.6 C59.2 30.9 60 30.6 59.8 30 C59.5 29.4 58.1 29.3 57.2 29.7 C56.3 30 55.4 30.2 55.4 30.2 L54.6 30 L54.7 25.5 C54.7 25.5 55 23.6 55.5 22.1 C56 20.7 56.2 17.5 56.2 17 C56.2 16.5 55.8 15.8 55.8 15.8 C55.8 15.8 53.8 16.1 52.5 15.8 C51.2 15.5 49.4 14.7 48.8 14.7 C48.2 14.7 47.9 13.5 47.4 13.1 C47 12.6 46.4 12.3 46.4 12.3 C46.4 12.3 46.8 12 47.5 11.7 C48.2 11.4 48.8 11.4 49.1 11 C49.4 10.7 49.4 9.6 49.6 9.1 C49.8 8.6 50.1 8.4 50.7 8.4 C51.2 8.4 51.3 7.4 51.1 6.9 C50.9 6.5 50.1 6.4 50.6 5.7 C51.1 4.9 51.7 5.2 51.7 3.4 C51.7 1.7 48.6 0.1 46.6 0.1 C44.6 0.1 41.9 1.4 41.7 2 C41.4 2.7 41.8 3.5 41.3 4.1 C40.7 4.7 40.4 5.1 40.6 5.9 C40.9 6.6 42.1 8.4 42.1 10.1 C42.1 11.7 42.4 13.1 41.5 13.8 C40.6 14.5 39.6 15.4 38.6 15.4 C37.6 15.4 34.8 15 33.7 15.7 C32.5 16.4 31.7 16.5 31.1 17.2 C30.5 17.9 30.8 25.7 30.8 25.7 C30.8 25.7 30.7 29.5 30.3 29.8 C30 30.2 28.5 30 28.5 30 L27.3 30 C27.3 30 27.4 28.9 26.7 28.7 C25.9 28.5 25.2 28.4 25 29.2 C24.7 30 24.8 31.5 25.2 31.5 C25.6 31.5 27.9 32.1 29 32.4 C30 32.7 31.7 33.5 32.7 32.8 C33.7 32 34.1 30.2 34.1 27.5 C34.1 24.9 33.6 24.1 34 23.6 C34.4 23 34.9 23.9 35.2 24.6 C35.5 25.3 37 28.1 37 29 C37 30 37.3 30.9 37 33.1 C36.6 35.4 36.7 36.6 36.5 37 C36.2 37.5 35.4 40.2 35.4 43.9 C35.4 47.6 34.1 52.3 34.9 55.4 C35.7 58.6 36.1 58.3 35.7 60.1 C35.4 61.9 34.6 63.3 35.2 63.8 C35.7 64.2 36.4 64.8 37.3 64.8 C38.2 64.8 38.2 63.8 38.2 63.8 L38.2 63.8 Z M41.6 37.9 C41.5 38.1 41.5 38.3 41.6 38.5 L41.7 38.2 L41.6 37.9 L41.6 37.9 Z M47.2 5 C47.2 5 46.5 5.7 45.8 6 C45.1 6.4 44.6 6.5 45.1 6.7 C45.5 6.9 46 7.1 46.6 6.9 C47.2 6.7 47.6 6.3 47.6 5.8 C47.5 5.4 47.2 5 47.2 5 L47.2 5 Z M49.6 18.9 L51.4 19.7 C51.4 19.7 52.3 20.2 52.1 20.7 C51.8 21.2 51.2 21.3 51.2 21.3 C51.2 21.3 51.1 20.1 50.5 20.1 C49.9 20.1 49.4 19.8 49.4 19.5 C49.4 19.1 49.6 18.9 49.6 18.9 L49.6 18.9 Z M34.5 18.8 C34.5 18.8 35.3 18 37.1 18.2 C38.8 18.5 39.2 19.2 39.2 19.6 C39.2 20.1 38.6 20 38.3 19.6 C38.1 19.2 37.1 19 36.7 19.3 C36.2 19.6 36.2 20.1 35.6 19.7 C34.9 19.3 34.5 18.8 34.5 18.8 L34.5 18.8 Z M45.1 17.6 C45.1 17.6 44.7 21.2 44.9 22.7 C45.1 24.3 44.4 25.9 44.8 28.8 C45.1 31.7 45.6 36.7 45.6 38.7 C45.6 40.7 45.2 42.9 45.2 45.4 C45.2 47.9 46 51.7 46 52.8 C46 53.9 46.5 57.8 46.5 57.8 C46.5 57.8 46.9 59.8 46.7 59.8 C46.5 59.8 45.8 60.7 45.1 60.4 C44.5 60.2 44.5 54.5 44.5 54.5 C44.5 54.5 44 48.9 44 43.1 C43.9 37.4 43.7 33.9 43.4 32.4 C43.1 30.8 42.7 30.6 42.9 28.8 C43.1 27.1 44.1 25.6 44.1 24.2 C44.1 22.7 42.9 22.2 43.5 20.8 C44.1 19.5 43.6 18.6 44.2 17.9 C44.7 17.2 45.1 17.6 45.1 17.6 L45.1 17.6 Z M41.8 57.6 C41.8 57.6 41.7 58.2 42.2 58.2 C42.6 58.2 42.8 57.6 42.8 57.6 L41.8 57.6 L41.8 57.6 Z M42.3 59.8 L43.3 60 L43.1 60.4 L42.4 60.2 L42.3 59.8 L42.3 59.8 Z M39.6 55.6 L41.1 55.6 L41 56 L39.6 55.6 L39.6 55.6 Z M40.9 51.4 L42.1 51.4 L42 52.2 L40.9 51.4 L40.9 51.4 Z M40.9 41 L42.2 40.9 L42.1 41.9 L41.5 41.4 L40.9 41 L40.9 41 Z M41.6 37.9 C41.7 37.7 41.8 37.5 41.8 37.5 L41.7 38.2 L41.7 38.6 L42.1 38.5 L42.1 37.4 L41.5 37.5 L41.6 37.9 L41.6 37.9 Z M41.6 23.1 L41.7 23.5 L42 23.2 L41.6 23.1 L41.6 23.1 Z M11.3 13 C11.3 13 11.9 12.7 12.4 12.9 L11.3 13 L11.3 13 Z" fill="#8C4C35"/>

					<!-- agua -->
					<path d="M64.1 18.5 C64.1 18.5 64.2 18 64.6 18 C65 18 65.2 18.9 65.2 18.9 L64.6 19.2 L64.1 18.5 L64.1 18.5 Z M70.3 9.5 C70.3 9.5 71 8.1 71.9 8.6 C72.7 9.2 72.8 9.9 72.3 10.3 C71.9 10.7 71.3 10.9 70.8 10.4 C70.3 10 70.2 9.5 70.2 9.5 L70.3 9.5 Z M77 20.4 C77 20.4 77.8 19.9 78.3 19.9 C78.8 19.9 79 20.3 78.8 20.6 C78.6 20.9 77.7 21.3 77.7 21.3 L77 20.4 L77 20.4 Z M26 9.4 C26 9.4 26.8 8.5 27.6 9 C28.6 9.4 28.6 9.9 28.4 10.4 C28.1 10.9 26.9 11.6 26.3 11 C25.7 10.4 25.9 9.4 25.9 9.4 L26 9.4 Z M11.4 13.2 C11.4 13.2 11.7 12.5 12.1 12.8 C12.6 13.2 12.6 13.8 12.4 13.8 C12.2 13.8 11.4 13.7 11.4 13.7 L11.4 13.2 L11.4 13.2 Z" fill="#336171"/>

				</g>

			</svg>

		</a>

		<h1 class="h4 brand__name">
			<?php bloginfo('name'); ?>
			<span class="brand__description">
				<?php bloginfo('description'); ?>
			</span>
		</h1>
	
	</div>
	
</header>

<?php get_template_part('templates/nav', 'main' ); ?>