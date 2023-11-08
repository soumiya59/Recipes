-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `ingredient`, `unit_id`, `created_at`, `updated_at`, `recipe_id`, `quantity`) VALUES
(6, 'pork belly', 8, '2023-11-08 00:11:19', '2023-11-08 00:11:19', 1, 2),
(7, 'medium-sized onion', 11, '2023-11-08 00:11:30', '2023-11-08 00:11:30', 1, 1),
(8, 'whole head of garlic', 11, '2023-11-08 00:11:41', '2023-11-08 00:11:41', 1, 1),
(9, 'bay leaf', 10, '2023-11-08 00:11:50', '2023-11-08 00:11:50', 1, 1),
(10, 'vinegar', 4, '2023-11-08 00:12:02', '2023-11-08 00:12:02', 1, 1),
(11, 'soy sauce', 4, '2023-11-08 00:12:09', '2023-11-08 00:12:09', 1, 1),
(12, 'water', 4, '2023-11-08 00:12:16', '2023-11-08 00:12:16', 1, 1),
(13, 'whole peppercorns', 1, '2023-11-08 00:12:22', '2023-11-08 00:12:22', 1, 1),
(14, 'cooking oil', 2, '2023-11-08 00:12:30', '2023-11-08 00:12:30', 1, 3),
(15, 'green beans', 9, '2023-11-08 00:13:23', '2023-11-08 00:13:23', 2, 250),
(16, 'ground pork', 9, '2023-11-08 00:13:31', '2023-11-08 00:13:31', 2, 200),
(17, 'coconut milk', 4, '2023-11-08 00:13:38', '2023-11-08 00:13:38', 2, 1),
(18, 'garlic', 11, '2023-11-08 00:13:48', '2023-11-08 00:13:48', 2, 3),
(19, 'small onion', 11, '2023-11-08 00:13:55', '2023-11-08 00:13:55', 2, 1),
(20, 'green chili peppers', 11, '2023-11-08 00:14:04', '2023-11-08 00:14:04', 2, 4),
(21, 'shrimp paste', 2, '2023-11-08 00:14:11', '2023-11-08 00:14:11', 2, 2),
(22, 'Cooking oil', 2, '2023-11-08 00:14:23', '2023-11-08 00:14:23', 2, 1),
(23, 'beef tripe', 8, '2023-11-08 01:02:19', '2023-11-08 01:02:19', 5, 1),
(24, 'hominy', 12, '2023-11-08 01:02:46', '2023-11-08 01:02:46', 5, 1),
(25, 'onion', 11, '2023-11-08 01:02:54', '2023-11-08 01:02:54', 5, 1),
(26, 'garlic', 11, '2023-11-08 01:03:03', '2023-11-08 01:03:03', 5, 4),
(27, 'red chili peppers', 11, '2023-11-08 01:03:11', '2023-11-08 01:03:11', 5, 2),
(28, 'dried oregano', 1, '2023-11-08 01:03:18', '2023-11-08 01:03:18', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_08_023812_create_recipes_table', 2),
(6, '2023_11_08_023952_create_procedures_table', 2),
(7, '2023_11_08_024016_create_units_table', 2),
(8, '2023_11_08_024101_create_ingredients_table', 2),
(9, '2023_11_08_062337_update_procedures', 3),
(10, '2023_11_08_064109_update_procedures', 4),
(11, '2023_11_08_071457_update_ingredients', 5),
(12, '2023_11_08_072622_update_ingredients', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `procedure` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` int(11) NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `procedure`, `created_at`, `updated_at`, `number`, `recipe_id`) VALUES
(6, 'Prepare the green beans.', '2023-11-07 23:00:39', '2023-11-07 23:00:39', 1, 2),
(7, 'In a pan or wok, heat the cooking oil over medium heat.', '2023-11-07 23:00:57', '2023-11-07 23:00:57', 2, 2),
(8, 'Add the minced garlic and chopped onions to the hot oil.', '2023-11-07 23:01:16', '2023-11-07 23:01:16', 3, 2),
(9, 'If you\'re using shrimp paste, add it to the pan and stir it into the garlic and onions. Sauté for a minute.', '2023-11-07 23:01:33', '2023-11-07 23:01:33', 4, 2),
(10, 'Add the sliced green beans and chopped chili peppers to the pan.', '2023-11-07 23:01:47', '2023-11-07 23:01:47', 5, 2),
(11, 'Slowly pour the can of coconut milk into the pan.', '2023-11-07 23:01:57', '2023-11-07 23:01:57', 6, 2),
(12, 'Taste the gising-gising and adjust the seasoning by adding fish sauce (if not added earlier), salt, and pepper according to your taste preference. Be cautious with the salt if you used shrimp paste, as it can be quite salty.', '2023-11-07 23:02:14', '2023-11-07 23:02:14', 7, 2),
(13, 'Once the green beans are cooked to your desired level of tenderness and the sauce has thickened, remove the pan from heat.', '2023-11-07 23:02:30', '2023-11-07 23:02:30', 8, 2),
(14, 'Transfer the gising-gising to a serving dish.', '2023-11-07 23:02:42', '2023-11-07 23:02:42', 9, 2),
(15, 'In a large bowl, combine the pork, soy sauce, garlic, and pepper. Mix well to ensure the meat is coated evenly. Marinate for about 30 minutes to an hour. You can also marinate it overnight in the refrigerator for a more flavorful result.', '2023-11-07 23:12:32', '2023-11-07 23:12:32', 1, 1),
(16, 'In a large, heavy-bottomed pan or a Dutch oven, heat the cooking oil over medium heat.', '2023-11-07 23:12:42', '2023-11-07 23:12:42', 2, 1),
(17, 'Add the marinated pork to the pan, but reserve the marinade for later. Sear the pork until it turns brown on all sides. This helps enhance the flavor of the dish.', '2023-11-07 23:12:53', '2023-11-07 23:12:53', 3, 1),
(18, 'Once the pork is browned, add the sliced onions to the pan and sauté until they become translucent. Then, add the minced garlic and cook for an additional 2 minutes.', '2023-11-07 23:13:02', '2023-11-07 23:13:02', 4, 1),
(19, 'Add the marinade mixture to the pan. Mix well to combine all the flavors.', '2023-11-07 23:13:12', '2023-11-07 23:13:12', 5, 1),
(20, 'Pour in the vinegar and water. Add the dried bay leaves. Bring the mixture to a boil, then lower the heat to a simmer. Cover the pan and let it cook for about 40-45 minutes or until the pork is tender. Stir occasionally.', '2023-11-07 23:13:22', '2023-11-07 23:13:22', 6, 1),
(21, 'Taste the adobo and adjust the seasoning if necessary. You can add more soy sauce, vinegar, salt, or pepper according to your preference.', '2023-11-07 23:13:33', '2023-11-07 23:13:33', 7, 1),
(22, 'Continue to simmer uncovered for an additional 10-15 minutes to thicken the sauce. Be careful not to overcook, as the sauce can become too salty or sour.', '2023-11-07 23:13:43', '2023-11-07 23:13:43', 8, 1),
(23, 'Adobong Baboy is traditionally served with steamed rice. You can garnish it with a sprinkle of freshly ground black pepper, or you can add a hard-boiled egg or some sautéed string beans for variety.', '2023-11-07 23:13:53', '2023-11-07 23:13:53', 9, 1),
(24, 'Serve your Adobong Baboy while it\'s still hot, and enjoy this delicious Filipino dish!', '2023-11-07 23:14:04', '2023-11-07 23:14:04', 10, 1),
(25, 'Wash the beef tripe thoroughly under cold running water to remove any residual impurities. You can also soak it in water with a little vinegar for about an hour to help remove any strong odors.', '2023-11-08 01:05:19', '2023-11-08 01:05:19', 1, 5),
(26, 'Place the cleaned tripe in a large pot and cover it with water. Bring it to a boil and simmer for about 30-45 minutes or until the tripe is tender. You can also add some garlic and onion to the pot for added flavor. Skim any foam that forms on the surface.', '2023-11-08 01:05:24', '2023-11-08 01:05:24', 2, 5),
(27, 'While the tripe is simmering, rehydrate the dried chili peppers by soaking them in hot water for about 20-30 minutes until they become soft. Remove the stems and seeds. Blend the rehydrated peppers with a little water to create a smooth paste.', '2023-11-08 01:05:30', '2023-11-08 01:05:30', 3, 5),
(28, 'In a separate large pot, combine the chili pepper paste, minced garlic, chopped onion, and oregano. Sauté the mixture over medium heat for a few minutes until fragrant.', '2023-11-08 01:05:36', '2023-11-08 01:05:36', 4, 5),
(29, 'Once the tripe is tender, transfer it from the first pot to the pot with the chili pepper mixture. Add the hominy as well.', '2023-11-08 01:05:41', '2023-11-08 01:05:41', 5, 5),
(30, 'Add enough water to the pot to cover all the ingredients, usually about 4-6 cups. Season with salt and black pepper to taste. Simmer the menudo over low heat for at least 2-3 hours, stirring occasionally. The longer you simmer it, the more flavorful it will become.', '2023-11-08 01:05:49', '2023-11-08 01:05:49', 6, 5),
(31, 'Ladle the hot menudo into bowls and serve with lime wedges, finely chopped onion, chopped cilantro, and crushed red pepper flakes. Warm corn tortillas or bolillos are a great accompaniment.', '2023-11-08 01:05:55', '2023-11-08 01:05:55', 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipe` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imagepath` text NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe`, `description`, `imagepath`, `created_at`, `updated_at`) VALUES
(1, 'Adobong Baboy', 'Adobo is a mouthwatering Filipino dish that tantalizes the taste buds with its rich and savory flavors. This iconic dish features tender pieces of meat, typically chicken or pork, marinated and simmered in a delightful blend of soy sauce, vinegar, garlic, and spices. The result is a harmonious medley of sweet, salty, and tangy notes, creating a culinary masterpiece that\'s loved by food enthusiasts worldwide. Adobo is a true Filipino classic, celebrated for its simplicity and depth of flavor, making it a must-try for anyone seeking a taste of Filipino cuisine.', 'recipe/ERDSpTNPqb9PjYdFdLdMXLpe49hhNh19PX1QLACW.jpg', '2023-11-07 19:56:43', '2023-11-07 22:05:44'),
(2, 'Gising gising', '\"Gising Gising\" is a delicious and fiery Filipino dish that\'s sure to wake up your taste buds. Made with sautéed green beans and ground pork, it\'s spiced up with chili peppers and shrimp paste, resulting in a flavorful and spicy vegetable medley that\'s perfect for those who crave a bit of heat in their meals. This popular Filipino dish is a must-try for anyone seeking an exciting combination of flavors in their cuisine.', 'recipe/yWdGyokN5rts0OXMnetospzkGjxAMHyGw6EhU9pV.jpg', '2023-11-07 20:02:55', '2023-11-07 20:02:55'),
(5, 'Menudo', 'Menudo is a traditional Mexican soup known for its hearty and flavorful broth, typically made with tripe (beef stomach) and a rich red chili pepper base. It\'s often served with hominy, cilantro, onions, and lime, creating a savory and slightly spicy dish that\'s popular for breakfast or brunch. Menudo is cherished for its bold and comforting flavors, making it a beloved classic in Mexican cuisine.', 'recipe/dgGq0FfS5fqatq0hg6RK7iiYlHSGV0v2OPOjlNmk.jpg', '2023-11-08 00:28:25', '2023-11-08 00:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'tsp', NULL, NULL),
(2, 'tbsp', NULL, NULL),
(3, 'oz', NULL, NULL),
(4, 'cup', NULL, NULL),
(5, 'pint', NULL, NULL),
(6, 'qt', NULL, NULL),
(7, 'gal', NULL, NULL),
(8, 'lb', NULL, NULL),
(9, 'g', NULL, NULL),
(10, 'kg', NULL, NULL),
(11, 'pcs', NULL, NULL),
(12, 'can', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mollee Roxas', 'cosmicsher96@gmail.com', NULL, '$2y$12$W8hexZGg5Sz5f/xWDERZTurfU0WjToKdQgLo9DwpiFaZSX3yoyhY.', NULL, '2023-11-07 17:56:48', '2023-11-07 17:56:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_unit_id_foreign` (`unit_id`),
  ADD KEY `ingredients_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procedures_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`),
  ADD CONSTRAINT `ingredients_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
