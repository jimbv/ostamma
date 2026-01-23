-- MySQL dump 10.13  Distrib 8.4.7, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: ostamma
-- ------------------------------------------------------
-- Server version	8.0.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configurations`
--

DROP TABLE IF EXISTS `configurations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configurations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `url_catalogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_devolucion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_lista` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configurations`
--

LOCK TABLES `configurations` WRITE;
/*!40000 ALTER TABLE `configurations` DISABLE KEYS */;
INSERT INTO `configurations` VALUES (1,'http://example.com/catalogo',NULL,NULL,'2025-12-02 11:31:49','2025-12-02 11:31:49');
/*!40000 ALTER TABLE `configurations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_03_08_111451_create_categories_with_images',1),(7,'2024_03_08_112239_create_products_table',1),(8,'2024_03_08_115132_create_product_images_table',1),(9,'2024_03_20_180220_modificar_productos_imagenes',1),(10,'2024_03_21_123101_agregar_orden_a_imagen_producto',1),(11,'2024_03_21_123115_create_adicionales',1),(12,'2024_05_31_144618_create_posts_table',1),(13,'2024_05_31_150544_create_post_images_table',1),(14,'2024_06_04_192327_add_post_id_temporal_to_post_images_table',1),(15,'2024_06_14_150321_create_work_images_table',1),(16,'2024_07_22_135914_create_configurations_table',1),(17,'2024_07_22_140004_create_pages_table',1),(18,'2025_02_19_132924_add_url_devolucion_to_configurations_table',1),(19,'2025_02_28_132925_add_url_lista_to_configurations_table',1),(20,'2025_08_18_031245_make_image_nullable_in_categories_table',1),(21,'2025_09_17_143208_add_color_to_categories_table',1),(22,'2025_09_25_123129_create_testimonials_table',1),(23,'2025_09_25_123139_create_subscriptions_table',1),(24,'2025_09_25_123156_create_services_table',1),(25,'2025_10_04_203736_add_slug_to_services_table',1),(26,'2025_10_06_194719_add_location_to_products_table',1),(31,'2025_12_30_123239_create_provider_types_table',2),(32,'2025_12_30_123435_create_specialties_table',2),(33,'2025_12_30_123555_create_providers_table',2),(34,'2025_12_30_125742_create_provider_specialty_table',2),(35,'2026_01_21_230601_create_plans_table',3),(36,'2026_01_21_230626_add_plan_id_to_providers_table',3),(37,'2026_01_21_235652_create_plan_provider_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Nuestra Historia','nuestra-historia','<div><span style=\"font-size: 1rem;\">La Obra Social de los Trabajadores Asociados a la Asociación Mutual Mercantil Argentina (<b>OSTAMMA</b>) se inició el 1 de diciembre de 2004, como resultado del esfuerzo de la mutual AMMA que anhelaba erigirse y operar como Obra Social, siendo la primera en el interior del país en lograr esta inscripción.</span></div><div><br></div><div><b>OSTAMMA</b> se desempeña como una entidad con autonomía financiera, respetando y potenciando su origen y, hoy, reafirmando de manera continua su compromiso con la salud de todos los trabajadores</div>',NULL,'2025-12-29 17:51:10','2026-01-23 13:00:02'),(2,'Consejo Directivo','consejo-directivo','<p><span style=\"font-size: 1rem;\">Consejo Directivo Período 2023-2027</span></p><p><span style=\"font-size: 1rem;\">Presidente</span></p><p>Fernando Iván Pepicelli</p><p>Vicepresidente</p><p>Edgardo Miguel Devoto</p><p><br></p><p>Tesorero</p><p>Matías Alejandro Priotti</p><p>Secretario de Actas</p><p>Jerónimo Joaquín Yacob</p><p><br></p><p>Secretaria de Acción Social</p><p>Karina Elizabeth Quevedo</p><p>Vocal Suplente 1: María José Pauletti</p><p>Vocal Suplente 2: Cecilia Del Valle Rodriguez</p><p>Vocal Suplente 3: Domingo Hipólito Gutierrez</p><p>Comisión Revisora de Cuentas</p><p>Revisor 1: Gustavo Marcelino Lazzuri</p><p>Revisor 2: Iven Alfredo José Giletta</p><p>Revisor 3: Paula Belén Tenedini Olaviaga</p>',NULL,'2025-12-29 17:52:09','2025-12-29 17:52:09'),(3,'Misión, Visión y Valores','institucional','<p><b>Gestión de la Calidad</b></p><p>Ostamma implementó un sistema de gestión de la calidad siguiendo los requisitos internacionales, con el propósito de brindar mejores servicios prestacionales, siguiendo el camino y la dirección estratégica para el crecimiento y el desarrollo, basados en el concepto fundamental de la mejora continua.</p><p>Ostamma estableció los principios en los cuales desarrolla su actividad, ofreciéndole a la sociedad en su conjunto la mejor calidad de servicio.</p><p><b>Misión</b></p><p>\"Promover, prevenir y recuperar con los mejores servicios medico asistenciales, el bienestar, el cuidado de la salud y la calidad de vida de la comunidad\"</p><p><b>Visión</b></p><p>\"Ser la Obra Social líder, con innovación, vocación de servicio, avanzada tecnología y la más alta calidad profesional\"</p><p><b style=\"font-size: 1rem;\">Valores</b></p><p>- Liderazgo y compromiso social.</p><p>- Accesibilidad y eficiencia.</p><p>- Transparencia, democracia y honestidad.</p><p>- Integridad y ética.</p><p><span style=\"font-size: 1rem;\">- Cooperación y trabajo en equipo.</span></p><p>- Solidaridad y equidad.</p>',NULL,'2025-12-29 18:48:10','2025-12-29 19:05:52'),(4,'Política de calidad','politica-de-calidad','<p>La Dirección de OSTAMMA establece, implementa, mantiene y comunica la siguiente Política de la Calidad, la cual es entendida y aplicada por los colaboradores de la organización y está disponible como información documentada para las partes interesadas pertinentes según corresponda:</p><p><br></p><p>“Somos una Obra Social comprometida en asegurar el proceso de salud-enfermedad a nuestros beneficiarios y partes interesadas pertinentes, a través de un diagnóstico y tratamiento oportuno, implementando una administración ágil y efectiva, con la permanente competencia de nuestros profesionales, la innovación tecnológica y la gestión de los riesgos y las oportunidades, garantizando nuestra vocación de servicio para prevenir y detectar tempranamente las patologías.</p><p><br></p><p>Trabajamos en mejorar continuamente la eficacia de nuestro sistema de gestión de la calidad, cumpliendo con los requisitos aplicables vigentes, controlando y monitoreando las prestaciones que reciben los beneficiarios en los centros del grupo y en los contratados, y con el objetivo final de brindar la mejor calidad y la mayor eficiencia de nuestros servicios en el cuidado de la salud.</p><p><br></p><p>La Dirección asegura que esta Política de la Calidad es comunicada, entendida y aplicada en OSTAMMA, que será revisada periódicamente y que está disponible para los colaboradores de OSTAMMA y de las partes interesadas pertinentes según corresponda”</p>',NULL,'2025-12-29 18:49:50','2025-12-29 18:49:50'),(5,'Estatuto','estatuto','<p>En esta sección podés acceder al Estatuto de OSTAMMA, documento fundamental que establece los principios, derechos, deberes y normas de funcionamiento de nuestra organización.</p><p><br></p><p>El Estatuto define el marco legal e institucional que guía las acciones de OSTAMMA, garantizando la transparencia, la participación democrática y el correcto desarrollo de sus actividades en beneficio de sus afiliados.</p><p><br></p><p>Te invitamos a descargarlo y conocer en detalle la estructura que sostienen nuestro trabajo cotidiano.</p><p><br></p><p><a href=\"/login\" class=\"btn btn-primary ms-3\" style=\"background:#003a5d; border:none; padding:8px 18px; border-radius:6px;\">\r\n                    Descargá el estatuto de OSTAMMA\r\n                </a></p>',NULL,'2025-12-29 18:56:21','2025-12-29 18:56:21'),(6,'¿Cómo funciona AMMA Salud Virtual?','virtual','<p><span style=\"font-size: 1rem;\">Envíe un mensaje al número&nbsp; &nbsp; 353 4181993&nbsp; solicitando un turno de atención.</span></p><p>Indique cuáles son los síntomas por los que consulta.</p><p>Solicitaremos estos datos: correo electrónico, teléfono de contacto, foto de DNI y de la credencial de OSTAMMA.</p><p>Realice el pago del coseguro por Mercado Pago y envíe el comprobante.</p><p>Se le asignará el turno.</p><p>El día de la consulta nos contactaremos previamente por WhatsApp y le enviaremos el link de acceso al consultorio virtual.</p><p><br></p><p><span style=\"font-size: 1rem;\">Recuerde si presenta síntomas compatibles con COVID-19 debe permanecer en su domicilio.</span></p>',NULL,'2026-01-02 02:18:03','2026-01-02 02:18:03'),(7,'Prestadores','prestadores','<p data-start=\"134\" data-end=\"368\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Desde <strong data-start=\"140\" data-end=\"151\">OSTAMMA</strong> invitamos a profesionales e instituciones de la salud interesados en incorporarse como prestadores a nuestra red a comunicarse con nosotros para recibir información sobre los requisitos y el proceso de inscripción.</p><p data-start=\"375\" data-end=\"538\" style=\"color: rgb(0, 0, 0); font-size: medium;\">📍 <strong data-start=\"378\" data-end=\"392\">Dirección:</strong> Gdor. Sabattini 93, Villa María, Córdoba<br data-start=\"433\" data-end=\"436\">📞 <strong data-start=\"441\" data-end=\"455\">Teléfonos:</strong> 0353-4536925 / 0353-155629113<br data-start=\"485\" data-end=\"488\">📧 <strong data-start=\"493\" data-end=\"516\">Correo electrónico:</strong> <a data-start=\"517\" data-end=\"536\" class=\"decorated-link cursor-pointer\" rel=\"noopener\">info@ostamma.org.ar<span aria-hidden=\"true\" class=\"ms-0.5 inline-block align-middle leading-none\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" aria-hidden=\"true\" data-rtl-flip=\"\" class=\"block h-[0.75em] w-[0.75em] stroke-current stroke-[0.75]\"><use href=\"/cdn/assets/sprites-core-k5zux585.svg#304883\" fill=\"currentColor\"></use></svg></span></a></p><p data-start=\"545\" data-end=\"625\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Será un gusto brindarles asesoramiento y acompañarlos en el proceso de adhesión.</p>','imgs/page_images/6rcuq6lT14nm6JNT2akTU9RF2j8B8AjUZ8szQwPI.jpg','2026-01-23 12:54:47','2026-01-23 12:54:47'),(8,'Empresas','empresas','<p data-start=\"145\" data-end=\"341\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Desde <strong data-start=\"151\" data-end=\"162\">OSTAMMA</strong> invitamos a empresas interesadas en brindar cobertura de salud a sus empleados a contactarse con nosotros para conocer nuestras alternativas de planes y el proceso de adhesión.</p><p data-start=\"348\" data-end=\"486\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Ofrecemos asesoramiento personalizado para acompañar a cada organización en la incorporación de sus colaboradores a nuestra obra social.</p><p data-start=\"493\" data-end=\"656\" style=\"color: rgb(0, 0, 0); font-size: medium;\">📍 <strong data-start=\"496\" data-end=\"510\">Dirección:</strong> Gdor. Sabattini 93, Villa María, Córdoba<br data-start=\"551\" data-end=\"554\">📞 <strong data-start=\"559\" data-end=\"573\">Teléfonos:</strong> 0353-4536925 / 0353-155629113<br data-start=\"603\" data-end=\"606\">📧 <strong data-start=\"611\" data-end=\"634\">Correo electrónico:</strong> <a data-start=\"635\" data-end=\"654\" class=\"decorated-link cursor-pointer\" rel=\"noopener\">info@ostamma.org.ar<span aria-hidden=\"true\" class=\"ms-0.5 inline-block align-middle leading-none\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" aria-hidden=\"true\" data-rtl-flip=\"\" class=\"block h-[0.75em] w-[0.75em] stroke-current stroke-[0.75]\"><use href=\"/cdn/assets/sprites-core-k5zux585.svg#304883\" fill=\"currentColor\"></use></svg></span></a></p><p data-start=\"663\" data-end=\"759\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Nuestro equipo estará disponible para evacuar consultas y brindar toda la información necesaria.</p>','imgs/page_images/Mw6ppKBDmQYYnNWYvsKIZyfU7g9NuAOktoRlg1oP.jpg','2026-01-23 12:55:53','2026-01-23 12:55:53'),(9,'Proveedores','proveedores','<p data-start=\"147\" data-end=\"370\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Desde <strong data-start=\"153\" data-end=\"164\">OSTAMMA</strong> invitamos a proveedores de bienes y servicios interesados en establecer vínculos comerciales con nuestra institución a comunicarse con nosotros para conocer las condiciones y modalidades de contratación.</p><p data-start=\"377\" data-end=\"486\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Nuestro objetivo es generar relaciones basadas en la transparencia, el compromiso y la calidad de servicio.</p><p data-start=\"493\" data-end=\"656\" style=\"color: rgb(0, 0, 0); font-size: medium;\">📍 <strong data-start=\"496\" data-end=\"510\">Dirección:</strong> Gdor. Sabattini 93, Villa María, Córdoba<br data-start=\"551\" data-end=\"554\">📞 <strong data-start=\"559\" data-end=\"573\">Teléfonos:</strong> 0353-4536925 / 0353-155629113<br data-start=\"603\" data-end=\"606\">📧 <strong data-start=\"611\" data-end=\"634\">Correo electrónico:</strong> <a data-start=\"635\" data-end=\"654\" class=\"decorated-link cursor-pointer\" rel=\"noopener\">info@ostamma.org.ar<span aria-hidden=\"true\" class=\"ms-0.5 inline-block align-middle leading-none\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" aria-hidden=\"true\" data-rtl-flip=\"\" class=\"block h-[0.75em] w-[0.75em] stroke-current stroke-[0.75]\"><use href=\"/cdn/assets/sprites-core-k5zux585.svg#304883\" fill=\"currentColor\"></use></svg></span></a></p><p data-start=\"663\" data-end=\"742\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Quedamos a disposición para brindar asesoramiento y atender cualquier consulta.</p>','imgs/page_images/OAAOclyhWbXJmKt6LlutN4V3UOTwKYiy0AnTzXjL.jpg','2026-01-23 12:57:00','2026-01-23 12:57:00'),(10,'Trabajá con nosotros','trabajo','<p data-start=\"133\" data-end=\"279\">En <strong data-start=\"136\" data-end=\"147\">OSTAMMA</strong> nos encontramos en la búsqueda permanente de personas comprometidas, con vocación de servicio y ganas de crecer profesionalmente.</p><p data-start=\"286\" data-end=\"429\">Si te interesa formar parte de nuestro equipo, envianos tu <strong data-start=\"345\" data-end=\"365\">Currículum Vitae</strong> indicando el área de interés al siguiente correo electrónico:</p><p>\r\n\r\n</p><p data-start=\"436\" data-end=\"462\">📧 <strong data-start=\"439\" data-end=\"462\"><a data-start=\"441\" data-end=\"460\" class=\"decorated-link cursor-pointer\" rel=\"noopener\">info@ostamma.org.ar</a></strong></p>','imgs/page_images/iZMhw5lty9lMmSRIwkXWDH67apnlQA6uoO4U0RTU.svg','2026-01-23 12:59:24','2026-01-23 12:59:38');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_provider`
--

DROP TABLE IF EXISTS `plan_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan_provider` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `provider_id` bigint unsigned NOT NULL,
  `plan_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plan_provider_provider_id_plan_id_unique` (`provider_id`,`plan_id`),
  KEY `plan_provider_plan_id_foreign` (`plan_id`),
  CONSTRAINT `plan_provider_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `plan_provider_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_provider`
--

LOCK TABLES `plan_provider` WRITE;
/*!40000 ALTER TABLE `plan_provider` DISABLE KEYS */;
INSERT INTO `plan_provider` VALUES (1,2,1),(2,2,2),(3,3,1),(4,3,2),(5,4,1),(6,4,3),(7,5,2),(8,5,3),(9,6,2),(10,6,3),(11,7,1),(12,7,2);
/*!40000 ALTER TABLE `plan_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` VALUES (1,'Plan Clásico',NULL,NULL),(2,'Plan Superior',NULL,NULL),(3,'Plan Joven',NULL,NULL);
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_images`
--

DROP TABLE IF EXISTS `post_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order` int DEFAULT NULL,
  `post_id` bigint unsigned DEFAULT NULL,
  `post_id_temporal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_images_post_id_foreign` (`post_id`),
  CONSTRAINT `post_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_images`
--

LOCK TABLES `post_images` WRITE;
/*!40000 ALTER TABLE `post_images` DISABLE KEYS */;
INSERT INTO `post_images` VALUES (1,NULL,1,NULL,'imgs/post_images/0Cq3J5z4X7xgIys2Tq1axOxDU1JaE8wIlNN2Ikuu.svg',NULL,'2026-01-23 13:01:31','2026-01-23 13:01:32');
/*!40000 ALTER TABLE `post_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_title_index` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Noticia de prueba','asassa','<p>dsadsdsa</p>','<p>dsaadsadsdsa</p>','2026-01-23 13:01:32','2026-01-23 13:01:32');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_additionals`
--

DROP TABLE IF EXISTS `product_additionals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_additionals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `product_id` bigint unsigned DEFAULT NULL,
  `product_id_temporal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_additionals_product_id_foreign` (`product_id`),
  CONSTRAINT `product_additionals_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_additionals`
--

LOCK TABLES `product_additionals` WRITE;
/*!40000 ALTER TABLE `product_additionals` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_additionals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order` int DEFAULT NULL,
  `product_id` bigint unsigned DEFAULT NULL,
  `product_id_temporal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_notes` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provider_specialty`
--

DROP TABLE IF EXISTS `provider_specialty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provider_specialty` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `provider_id` bigint unsigned NOT NULL,
  `specialty_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provider_specialty_provider_id_specialty_id_unique` (`provider_id`,`specialty_id`),
  KEY `provider_specialty_specialty_id_foreign` (`specialty_id`),
  CONSTRAINT `provider_specialty_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `provider_specialty_specialty_id_foreign` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provider_specialty`
--

LOCK TABLES `provider_specialty` WRITE;
/*!40000 ALTER TABLE `provider_specialty` DISABLE KEYS */;
/*!40000 ALTER TABLE `provider_specialty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provider_types`
--

DROP TABLE IF EXISTS `provider_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provider_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provider_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provider_types`
--

LOCK TABLES `provider_types` WRITE;
/*!40000 ALTER TABLE `provider_types` DISABLE KEYS */;
INSERT INTO `provider_types` VALUES (1,'Clínicas con internación','clinicas-con-internacion',NULL,NULL),(2,'Guardias','guardias',NULL,NULL),(3,'Profesionales','profesionales',NULL,NULL),(4,'Centros médicos','centros-medicos',NULL,NULL),(5,'Farmacias','farmacias',NULL,NULL),(6,'Ópticas','opticas',NULL,NULL);
/*!40000 ALTER TABLE `provider_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `providers`
--

DROP TABLE IF EXISTS `providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `providers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_type_id` bigint unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plan_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providers_provider_type_id_foreign` (`provider_type_id`),
  KEY `providers_plan_id_foreign` (`plan_id`),
  CONSTRAINT `providers_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE SET NULL,
  CONSTRAINT `providers_provider_type_id_foreign` FOREIGN KEY (`provider_type_id`) REFERENCES `provider_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `providers`
--

LOCK TABLES `providers` WRITE;
/*!40000 ALTER TABLE `providers` DISABLE KEYS */;
INSERT INTO `providers` VALUES (2,'Dr. josé Martín','Lamadrid 107','Bell Ville','Córdoba',-32.62791560,-62.68388860,'3537609004','joseignaciomartin@gmail.com',3,1,'2026-01-21 19:58:16','2026-01-22 00:23:15',NULL),(3,'Florencia Borgognone','Dario Ramonda 1937','Villa María','Córdoba',-32.40722000,-63.23182960,'3523372687','floreborgognone@gmail.com',6,1,'2026-01-22 00:36:23','2026-01-22 00:36:23',NULL),(4,'Dr. de prueba','Córdoba 100','Bell Ville','Córdoba',-32.62941840,-62.68688920,'24151161','prueba@prueba.com',3,1,'2026-01-22 13:42:31','2026-01-22 13:42:31',NULL),(5,'Dr. Simón Martín','Chacabuco 500','Córdoba','Córdoba',-31.42331220,-64.18288410,'122121221','simon@simon.com',6,1,'2026-01-22 13:47:01','2026-01-22 13:47:01',NULL),(6,'Clínica de Prueba','Bv Sarmiento 400','Villa María','Córdoba',-32.40407530,-63.21596910,'123456789','email@email.com',1,1,'2026-01-22 13:52:43','2026-01-22 13:52:43',NULL),(7,'Clínica Rapida','Cordoba 300','Villa María','Córdoba',-32.42657890,-63.24384280,'353637','prueba@pruebaa.com',1,1,'2026-01-22 13:56:58','2026-01-22 13:56:58',NULL);
/*!40000 ALTER TABLE `providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `specialties_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialties`
--

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
INSERT INTO `specialties` VALUES (1,'Cardiología','cardiologia','2025-12-30 13:08:04','2025-12-30 13:08:04'),(2,'Anatomía Patológica','anatomia-patologica','2026-01-21 14:04:24','2026-01-21 14:04:24'),(3,'Cirugía General','cirugia-general','2026-01-21 14:04:57','2026-01-21 14:04:57'),(4,'Dermatología','dermatologia','2026-01-21 14:05:12','2026-01-21 14:05:12'),(5,'Gastroenterología','gastroenterologia','2026-01-21 14:05:29','2026-01-21 14:05:29');
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','joseignaciomartin@gmail.com','2025-12-29 00:00:00','$2y$12$/fhRlXBuVm2RGHxUAJhDfeCPZeJeLxhafnWnx0EFtKuMAGhs3Jzu.',NULL,'2025-12-29 00:00:00',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_images`
--

DROP TABLE IF EXISTS `work_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `work_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_images`
--

LOCK TABLES `work_images` WRITE;
/*!40000 ALTER TABLE `work_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `work_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ostamma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-23 18:13:10
