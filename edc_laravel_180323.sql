-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2018 a las 11:34:20
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `edc_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art_youtube`
--

CREATE TABLE `art_youtube` (
  `id` int(11) NOT NULL,
  `nom_art_youtube` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `num_referencias` int(3) NOT NULL,
  `nom_foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `art_youtube`
--

INSERT INTO `art_youtube` (`id`, `nom_art_youtube`, `surname`, `num_referencias`, `nom_foto`) VALUES
(1, 'Howard Hawks', 'Ha', 57, 'howard_hawks.jpg'),
(2, 'John Wayne', 'Wa', 54, 'john_wayne.jpg'),
(3, 'Robert Mitchum', 'Mi', 18, '483_robert_mitchum.jpg'),
(4, 'James Caan', 'Ca', 8, 'james_caan.jpg'),
(5, 'Charlene Holt', 'Ho', 0, ''),
(6, 'Katharine Hepburn', 'He', 28, 'katharine_hepburn.jpg'),
(7, 'Cary Grant', 'Gr', 46, 'cary_grant.jpg'),
(8, 'Charles Ruggles', 'Ru', 2, ''),
(9, 'May Robson', 'Ro', 0, ''),
(10, 'Victor Fleming', 'Fl', 5, 'victor_fleming.jpg'),
(11, 'Spencer Tracy', 'Tr', 17, 'spencer_tracy.jpg'),
(12, 'Freddie Bartholomew', 'Ba', 2, 'freddie_bartholomew.jpg'),
(13, 'Lionel Barrymore', 'Ba', 7, 'lionel_barrymore.jpg'),
(14, 'Melvyn Douglas', 'Do', 3, 'melvyn_douglas.jpg'),
(15, 'Mickey Rooney', 'Ro', 5, 'mickey_rooney.jpg'),
(16, 'John Carradine', 'Ca', 5, 'john_carradine.jpg'),
(17, 'Nick Park', 'Pa', 1, ''),
(18, 'Dibujos animados', 'Di', 8, ''),
(19, 'Robert Redford', 'Re', 14, 'robert_redford.jpg'),
(20, 'Donald Sutherland', 'Su', 6, 'donald_sutherland.jpg'),
(21, 'Mary Tyler Moore', 'Ty', 3, 'mary-tyler-moore.jpg'),
(22, 'Judd Hirsch', 'Hi', 4, 'judd_hirsch.jpg'),
(23, 'Timothy Hutton', 'Hu', 4, 'timothy_hutton.jpg'),
(25, 'Elia Kazan', 'Ka', 0, 'elia_kazan.jpg'),
(26, 'Marlon Brando', 'Br', 0, 'marlon_brando.jpg'),
(27, 'Vivien Leigh', 'Le', 0, 'vivien_leigh.jpg'),
(28, 'Billy Wilder', 'Bi', 0, '787_billy_wilder.jpg'),
(29, 'Kirk Douglas', 'Ki', 0, '349_kirk_douglas.jpg'),
(30, 'Francisco Arenzana', 'Fr', 0, '29_fran_arenzana.jpg'),
(31, 'Selica Torcal', 'Se', 0, ''),
(32, 'Charles Laughton', 'Ch', 0, '74_charles_laughton.jpg'),
(33, 'Marlene Dietrich', 'Ma', 0, '847_marlene_dietrich.jpg'),
(34, 'Francisco Sánchez', 'Fr', 0, '103_fran_sanchez.jpg'),
(35, 'Irene Guerrero de Luna', 'Ir', 0, ''),
(36, 'John Williams', 'Jo', 0, '574_john_williams.jpg'),
(37, 'Steven Spielberg', 'St', 0, '388_steven_spielberg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cineastas`
--

CREATE TABLE `cineastas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fotoCineasta` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `es_oscar_winner` tinyint(1) NOT NULL,
  `decada_oscar` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cineastas`
--

INSERT INTO `cineastas` (`id`, `nombre`, `fotoCineasta`, `es_oscar_winner`, `decada_oscar`, `created_at`, `updated_at`) VALUES
(3, 'Victor Fleming', '561_victor_fleming.jpg', 1, 1930, '2018-01-22 11:02:21', '2018-01-22 10:02:21'),
(5, 'Clark Gable', '642_clark_gable.jpg', 1, 1930, '2018-01-22 11:00:52', '2018-01-22 10:00:52'),
(6, 'Vivien Leigh', '676_vivien_leigh.jpg', 1, 1930, '2018-01-22 11:02:34', '2018-01-22 10:02:34'),
(7, 'Alfred Hitchcock', '467_alfred_hitchcock.jpg', 1, 1960, '2018-01-22 11:00:45', '2018-01-22 10:00:45'),
(8, 'Joan Fontaine', '776_joan_fontaine.jpg', 1, 1940, '2018-01-22 11:01:20', '2018-01-22 10:01:20'),
(9, 'Laurence Olivier', '376_laurence_olivier.jpg', 0, 1940, '2018-01-22 11:01:40', '2018-01-22 10:01:40'),
(10, 'John Ford', '428_john_ford.jpg', 1, 1930, '2018-01-22 11:01:29', '2018-01-22 10:01:29'),
(11, 'Walter Pidgeon', '7_walter_pidgeon.jpg', 0, 0, '2018-01-19 11:12:54', '2018-01-19 11:12:54'),
(12, 'Maureen O\'hara', '380_maurenOhara.jpg', 1, 2010, '2018-01-22 11:01:56', '2018-01-22 10:01:56'),
(13, 'William Wyler', '627_william_wyler.jpg', 1, 1940, '2018-01-22 11:02:45', '2018-01-22 10:02:45'),
(14, 'Greer Garson', '885_greer_garson.jpg', 1, 1940, '2018-01-22 11:00:58', '2018-01-22 10:00:58'),
(16, 'Michael Curtiz', '49_michael_curtiz.jpg', 1, 1940, '2018-01-22 11:02:08', '2018-01-22 10:02:08'),
(17, 'Humphrey Bogart', '423_humphrey_bogart.jpg', 1, 1950, '2018-01-22 11:01:05', '2018-01-22 10:01:05'),
(18, 'Ingrid Bergman', '833_ingrid_bergman.jpg', 1, 1940, '2018-01-22 11:01:11', '2018-01-22 10:01:11'),
(19, 'Leo McCarey', '591_leo_mccarey.jpg', 1, 1930, '2018-01-22 09:47:36', '2018-01-22 09:47:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(11) NOT NULL,
  `nom_colaborador` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pw` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `colaborador`
--

INSERT INTO `colaborador` (`id`, `nom_colaborador`, `pw`, `email`, `slug`) VALUES
(1, 'Leandro Sierra García', '1234', 'leandrosiegar@gmail.com', 'leandro-sierra-garcia.html'),
(2, 'Carlos Sierra García', '$2y$10$JuMxEU.JJ2ICySWALkT6tOQKfO/rS5Ka1vg5V1AqjrVv7UulE.8WG', 'carlos.sierra@marketinet.com', 'carlos-sierra-garcia.html'),
(4, 'Begoña Suárez', '$2y$10$yXKhEwA2xKIea3Gh5vN6hOle78MX9lLLk7Ml54yTwxudFqZXDH9HS', 'begonasuarez@gmail.com', 'begona-suarez.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticas`
--

CREATE TABLE `criticas` (
  `id` int(11) NOT NULL,
  `id_pel_youtube` int(5) NOT NULL,
  `id_director` int(5) NOT NULL,
  `id_colab` int(3) NOT NULL,
  `critica` longtext COLLATE utf8_spanish_ci NOT NULL,
  `fotoCritica` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `esArticulo` int(1) NOT NULL,
  `votos` int(4) NOT NULL,
  `totalPunt` int(5) NOT NULL,
  `youtube` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `criticas`
--

INSERT INTO `criticas` (`id`, `id_pel_youtube`, `id_director`, `id_colab`, `critica`, `fotoCritica`, `fecha`, `esArticulo`, `votos`, `totalPunt`, `youtube`, `hits`) VALUES
(1, 23, 37, 4, 'El dicho de que “ya no se hacen películas como antes” es bastante cierto con esta película que más bien resulta una obra de arte tanto por las imágenes como por el guión. Y, como no, fue escrita por Steven Spielberg, un soñador nato que sabía despertar la curiosidad en el espectador, probablemente la que él sintiera ante el tema de los OVNIs (Objeto Volador No Identificado). \r\n\r\nEncuentros en la Tercera Fase data de 1977 un época en que se empezaban a experimentar con los efectos especiales en la gran pantalla antes de la era digital, y que tiene su mayor esplendor en los años 80. También la temática sobre ovnis seguía en boga en esta época ya desde el Caso Roswell (1947) que lo convirtió en todo un fenómeno en la cultura americana. \r\n\r\nSu título alude a una terminología del ufólogo J.Allen Hynek que incluye 6 clasificaciones pero las tres primeras más llamativas son la que aquí cuento: Encuentros cercanos de 1ª Fase, cuando se es testigo de haber visto un ovni; de 2ª cuando hay una evidencia física de su aterrizaje o de marcas en una superficie; y de 3ª Fase, cuando se es testigo de un “ser animado” o extraterrestre. \r\n\r\nLa historia narra como Roy (Richard Dreyfuss) es testigo de un avistamiento ovni durante la noche cuando va en su camión camino a casa después de un día de trabajo. Este hecho acaba afectado su vida llevándole a la obsesión buscando una explicación a lo ocurrido. Esta situación acaba desbordando a su mujer que se marcha de casa con los niños. Roy conoce después a Jillian que también ha experimentado fenómenos ovni. Al mismo tiempo una serie de científicos se dedican a investigar extraños sucesos y avistamientos de ovnis en la zona.', '758_encuentros.png', '2018-02-08', 0, 1, 2, 'LtfWYFK6CPs', 1111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentales`
--

CREATE TABLE `documentales` (
  `id` int(11) NOT NULL,
  `nom_documental` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `foto_documental` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_pelicula` int(5) NOT NULL,
  `id_cineasta` int(5) NOT NULL,
  `urlCorta` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentales`
--

INSERT INTO `documentales` (`id`, `nom_documental`, `foto_documental`, `id_pelicula`, `id_cineasta`, `urlCorta`) VALUES
(1, 'Cómo se hizo \"Encuentros en la tercera fase\"', '8MyYvG8fFu0', 23, 37, 'documentales-como-se-hizo-encuentros-en-la-tercera-fase.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hist_youtube`
--

CREATE TABLE `hist_youtube` (
  `id` int(11) NOT NULL,
  `id_art_youtube` int(5) NOT NULL,
  `id_pel_youtube` int(5) NOT NULL,
  `qEs` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hist_youtube`
--

INSERT INTO `hist_youtube` (`id`, `id_art_youtube`, `id_pel_youtube`, `qEs`) VALUES
(38, 28, 19, 'D'),
(39, 29, 19, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2017_12_20_102718_CrearTablaPeliculas', 1),
(13, '2017_12_20_113104_CrearTablaDirectores', 1),
(14, '2017_12_20_153037_CrearTablaActores', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_director` int(11) NOT NULL,
  `id_actor1` int(11) NOT NULL,
  `id_actor2` int(11) NOT NULL,
  `fotoPelicula` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `anno`, `id_director`, `id_actor1`, `id_actor2`, `fotoPelicula`, `created_at`, `updated_at`) VALUES
(15, 'Lo que el viento se llevó', '1939', 3, 6, 5, '263_vientosellevo.jpg', '2018-01-19 10:33:51', '2018-01-19 12:36:20'),
(16, 'Rebeca', '1940', 7, 8, 9, '928_rebeca.gif', '2018-01-19 11:04:20', '2018-01-19 11:04:20'),
(17, 'Qué verde era mi valle', '1941', 10, 11, 12, '436_verdeMivalle.gif', '2018-01-19 11:13:54', '2018-01-19 12:36:12'),
(18, 'La señora Miniverrr', '1942', 13, 14, 11, '485_senoraMiniver.gif', '2018-01-19 11:16:20', '2018-01-19 12:10:01'),
(19, 'Casablanca', '1943', 16, 17, 18, '979_casablanca.gif', '2018-01-22 08:22:59', '2018-01-22 08:23:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pel_doblaje`
--

CREATE TABLE `pel_doblaje` (
  `id` int(11) NOT NULL,
  `foto_pel_doblaje` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_pelicula` int(5) NOT NULL,
  `anno` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `id_actor_orig1` int(5) NOT NULL,
  `id_actor_doblaje1` int(5) NOT NULL,
  `id_actor_orig2` int(5) NOT NULL,
  `id_actor_doblaje2` int(5) NOT NULL,
  `id_actor_orig3` int(5) NOT NULL,
  `id_actor_doblaje3` int(5) NOT NULL,
  `id_actor_orig4` int(5) NOT NULL,
  `id_actor_doblaje4` int(5) NOT NULL,
  `urlCorta` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pel_doblaje`
--

INSERT INTO `pel_doblaje` (`id`, `foto_pel_doblaje`, `id_pelicula`, `anno`, `id_actor_orig1`, `id_actor_doblaje1`, `id_actor_orig2`, `id_actor_doblaje2`, `id_actor_orig3`, `id_actor_doblaje3`, `id_actor_orig4`, `id_actor_doblaje4`, `urlCorta`) VALUES
(1, 'C5c7-AcWM7A', 3, '1937', 11, 30, 12, 31, 0, 0, 0, 0, 'doblaje-capitanes-intrepidos-1937.html'),
(2, '5zrdw6Cx0No', 13, '1957', 32, 34, 33, 35, 0, 0, 0, 0, 'doblaje-testigo-de-cargo-1957.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pel_youtube`
--

CREATE TABLE `pel_youtube` (
  `id` int(11) NOT NULL,
  `nom_pel_youtube` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `url_pel_youtube` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anno` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `urlCorta` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta_youtube` date NOT NULL,
  `link_amazon` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pel_youtube`
--

INSERT INTO `pel_youtube` (`id`, `nom_pel_youtube`, `url_pel_youtube`, `anno`, `urlCorta`, `fecha_alta_youtube`, `link_amazon`) VALUES
(1, 'El Dorado', 'http://www.youtube.com/embed/q2RD2JMQrRw', '1966', 'el-dorado-1966-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B00JZIDJV0&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(2, 'La fiera de mi niña', 'http://www.youtube.com/embed/PKs1-moCThI', '1938', 'la-fiera-de-mi-nina-1938-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B0092GTMY8/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B0092GTMY8&linkCode=as2&tag=eldespotricad-21&linkId=fadd20d31ede0c03fa66361f49d40114'),
(3, 'Capitanes intrépidos', 'http://www.youtube.com/embed/C5c7-AcWM7A', '1937', 'capitanes-intrepidos-1937-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B0036D3N98&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(4, 'Wallace y Gromit: la maldición de las verduras', 'http://www.youtube.com/embed/9TZ7H2Kni0k', '2005', 'wallace-y-gromit-la-maldicion-de-las-verduras-2005-youtube.h', '2014-02-28', 'https://www.amazon.es/gp/product/B0053C8OY4/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B0053C8OY4&linkCode=as2&tag=eldespotricad-21&linkId=ba67a5a44895ba10335ca04b22316c01'),
(5, 'Gente corriente', 'http://www.youtube.com/embed/rdbWF_pDEBI', '1980', 'gente-corriente-1980-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B0053C82HS/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B0053C82HS&linkCode=as2&tag=eldespotricad-21&linkId=512a6f8165bd6e3dc2a1d3965e4f63d2'),
(6, 'Psicosis II: El regreso de Norman', 'http://www.youtube.com/embed/LCJydwIHz0k', '1983', 'psicosis-ii-el-regreso-de-norman-1983-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B000008JN0/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B000008JN0&linkCode=as2&tag=eldespotricad-21&linkId=40a234c2da3d77fabf1aba6968549968'),
(7, 'Nosferatu', 'http://www.youtube.com/embed/kTbU4vb7PSY', '1922', 'nosferatu-1922-youtube.html', '2014-02-28', ''),
(8, 'El gabinete del doctor Caligari', 'http://www.youtube.com/embed/B0OHvsGALP0', '1920', 'el-gabinete-del-doctor-caligari-1920-youtube.html', '2014-02-28', ''),
(9, 'Una noche en la ópera', 'http://www.youtube.com/embed/yWBjYS0EAqk', '1935', 'una-noche-en-la-opera-1935-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B003Z7R4HW&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(10, 'El gran dictador', 'http://www.youtube.com/embed/KDRn0PLf0O8', '1940', 'el-gran-dictador-1940-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B00BMR0X4S/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B00BMR0X4S&linkCode=as2&tag=eldespotricad-21&linkId=4e99e8a4214babd49950b5a02ad7e476'),
(11, 'Un tranvía llamado deseo', 'http://www.youtube.com/embed/oc4MObgMRoM', '1951', 'un-tranvia-llamado-deseo-1951-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B007EAHHZK/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B007EAHHZK&linkCode=as2&tag=eldespotricad-21&linkId=363f209705fe2fbab5bfef002a04ec54'),
(12, 'Traidor en el infierno', 'http://www.youtube.com/embed/1ajVYuYpELM', '1953', 'traidor-en-el-infierno-1953-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B0053C86QK&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(13, 'Testigo de cargo', 'http://www.youtube.com/embed/5zrdw6Cx0No', '1957', 'testigo-de-cargo-1957-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B003Z7RPBW/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B003Z7RPBW&linkCode=as2&tag=eldespotricad-21&linkId=860ba09950edbcdec37f01bdc1b52324'),
(14, 'Qué bello es vivir', 'http://www.youtube.com/embed/N9Mv8S4qHTA', '1946', 'que-bello-es-vivir-1946-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B00ULYFC0S&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(15, 'La edad de oro', 'http://www.youtube.com/embed/Yn4E8hnUYMw', '1930', 'la-edad-de-oro-1930-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B013L2DBL8&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(16, 'La vida privada de Elizabeth y Essex', 'http://www.youtube.com/embed/SRUrqd8yHLg', '1939', 'la-vida-privada-de-elizabeth-y-essex-1939-youtube.html', '2014-02-28', ''),
(17, 'Freaks: La parada de los monstruos', 'http://www.youtube.com/embed/dQZcRqxTCRU', '1932', 'freaks-la-parada-de-los-monstruos-1932-youtube.html', '2014-02-28', 'https://www.amazon.es/gp/product/B00NEU1KM0/ref=as_li_tl?ie=UTF8&camp=3638&creative=24630&creativeASIN=B00NEU1KM0&linkCode=as2&tag=eldespotricad-21&linkId=5f4071aacca74cc678fa10c517e1e0e2'),
(18, 'Fausto', 'http://www.youtube.com/embed/h0Ro4gvvNEM', '1926', 'fausto-1926-youtube.html', '2014-02-28', ''),
(19, 'El gran carnaval', 'http://www.youtube.com/embed/xjOaE9FZhFo', '1951', 'el-gran-carnaval-1951-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B000T2JHTY&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(20, 'El salario del miedo', 'http://www.youtube.com/embed/khHXn1I8GnE', '1953', 'el-salario-del-miedo-1953-youtube.html', '2014-02-28', 'https://rcm-eu.amazon-adsystem.com/e/cm?t=eldespotricad-21&o=30&p=8&l=as1&asins=B01CH79KAY&ref=tf_til&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr'),
(21, 'El beso mortal', 'http://www.youtube.com/embed/jUPtWI8Rr0M', '1955', 'el-beso-mortal-1955-youtube.html', '2018-01-29', NULL),
(22, 'Star wars. Episodio V: El imperio contraataca', NULL, '1980', 'star-wars-episodio-v-el-imperio-contraataca-1980-youtube.html', '2018-02-02', NULL),
(23, 'Encuentros en la tercera fase', NULL, '1977', 'encuentros-en-la-tercera-fase-1977-youtube.html', '2018-02-02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `dc_slider` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `texto_slider` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `link_slider` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `dc_slider`, `texto_slider`, `link_slider`, `created_at`, `updated_at`) VALUES
(2, '77_et_1982.jpg', 'E.T., teléfono, mi casa', 'E.T.', '2018-01-29 09:53:54', '2018-01-29 09:53:54'),
(3, '190_starwars_1977.jpg', 'Que la fuerza te acompañe', 'Star wars', '2018-01-29 09:55:03', '2018-01-29 09:55:03'),
(4, '723_empirestrikes.jpg', 'Yo soy tu padre', 'Star wars', '2018-01-29 09:55:43', '2018-01-29 09:55:43'),
(5, '965_returnjedi.jpg', 'Ahora conocerás el poder del lado oscuro', 'Star wars', '2018-01-29 11:10:51', '2018-01-29 11:10:51'),
(6, '340_tiburon.jpg', 'Necesitará un barco más grande', 'Tiburón', '2018-01-29 11:11:34', '2018-01-29 11:11:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leandro Sierra', 'leandro.sierra@marketinet.com', '$2y$10$Svnu/S0OJtX7VssGiN3JsOuz14t4mqG1Pb9wbQU3NieVAKhVbC9d6', 'AtUUD2POiNunnxlv9NGIzlo5upEltORpvVtPCAFyzcKqzs0fkqyQ0YhEVFPy', '2018-01-15 14:00:02', '2018-01-15 14:00:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos_garci`
--

CREATE TABLE `videos_garci` (
  `id` int(11) NOT NULL,
  `foto_video_garci` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci3` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci4` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci5` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci6` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_garci7` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anno` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `id_pelicula` int(5) NOT NULL,
  `id_director` int(5) NOT NULL,
  `id_actor1` int(5) NOT NULL,
  `id_actor2` int(5) NOT NULL,
  `id_actor3` int(5) NOT NULL,
  `urlCorta` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `videos_garci`
--

INSERT INTO `videos_garci` (`id`, `foto_video_garci`, `foto_video_garci2`, `foto_video_garci3`, `foto_video_garci4`, `foto_video_garci5`, `foto_video_garci6`, `foto_video_garci7`, `anno`, `id_pelicula`, `id_director`, `id_actor1`, `id_actor2`, `id_actor3`, `urlCorta`) VALUES
(1, 'EJCOL_-5Ywg', 'UTLD2', 'UTLD3', 'UTLD4', 'UTLD5', 'UTLD6', 'UTLD7', '1951', 11, 25, 26, 27, 0, 'que-grande-es-el-cine-un-tranvia-llamado-deseo-1951.html'),
(2, 'Y_MywZczs1E', 'LFDMN2', 'LFDMN3', 'LFDMN4', 'LFDMN5', 'LFDMN6', 'LFDMN7', '1938', 2, 1, 7, 6, 0, 'que-grande-es-el-cine-la-fiera-de-mi-nina-1938.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos_musica`
--

CREATE TABLE `videos_musica` (
  `id` int(11) NOT NULL,
  `nom_video_musica` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `foto_video_musica` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_compositor` int(5) NOT NULL,
  `id_pelicula` int(5) NOT NULL,
  `urlCorta` varchar(90) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `videos_musica`
--

INSERT INTO `videos_musica` (`id`, `nom_video_musica`, `foto_video_musica`, `id_compositor`, `id_pelicula`, `urlCorta`) VALUES
(1, 'Orquesta sinfónica de Viena conduce \"Marcha imperial\"', '4wvpdBnfiZo', 36, 22, 'no-es-musica-es-cine-orquesta-sinfonica-de-viena-conduce-marcha-imperial.html');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `art_youtube`
--
ALTER TABLE `art_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cineastas`
--
ALTER TABLE `cineastas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `criticas`
--
ALTER TABLE `criticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentales`
--
ALTER TABLE `documentales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hist_youtube`
--
ALTER TABLE `hist_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pel_doblaje`
--
ALTER TABLE `pel_doblaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pel_youtube`
--
ALTER TABLE `pel_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videos_garci`
--
ALTER TABLE `videos_garci`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos_musica`
--
ALTER TABLE `videos_musica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `art_youtube`
--
ALTER TABLE `art_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `cineastas`
--
ALTER TABLE `cineastas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `criticas`
--
ALTER TABLE `criticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentales`
--
ALTER TABLE `documentales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hist_youtube`
--
ALTER TABLE `hist_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pel_doblaje`
--
ALTER TABLE `pel_doblaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pel_youtube`
--
ALTER TABLE `pel_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos_garci`
--
ALTER TABLE `videos_garci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `videos_musica`
--
ALTER TABLE `videos_musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
