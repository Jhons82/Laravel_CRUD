-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla laravelcrud.cache: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.cache_locks: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.job_batches: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.migrations: ~5 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_06_07_144029_create_products_table', 1),
	(5, '2025_06_07_215706_add_delete_at_to_products_table', 2);

-- Volcando datos para la tabla laravelcrud.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla laravelcrud.products: ~4 rows (aproximadamente)
INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Product 1', 10.50, 'New product', NULL, '2025-06-08 03:47:24', NULL),
	(2, 'Product 3', 14.00, 'New product', '2025-06-08 02:48:08', '2025-06-08 03:18:26', NULL),
	(3, 'Product 2', 100.10, 'New product', '2025-06-08 02:59:41', '2025-06-08 03:58:50', '2025-06-08 03:58:50'),
	(5, 'Product V1', 17.60, 'stock Product V1', '2025-06-08 22:49:14', '2025-06-08 22:49:14', NULL);

-- Volcando datos para la tabla laravelcrud.sessions: ~2 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('3v59JVuwnrFEDC7AAf2mAkTMWlkYEVQYcdMYrWlg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1hjNlplcGhmYVVKSVJVRzlCVlB2SE4wSHVPWXZ1Znd4c3JYSVU5YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749405317),
	('ssRpWaNI7dLtB8AJr3MBBquu6vKVnkB3IgiJo9ft', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3dvY3BCR1ZnSmNRU1k2QnZCTm9qNzhOb3d3UXY4Tjhod0RMcXA3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749419096);

-- Volcando datos para la tabla laravelcrud.users: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
