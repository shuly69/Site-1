-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2021 г., 15:38
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pizza', 'pizza', '2021-07-07 09:57:53', '2021-07-07 09:57:53'),
(2, 'Salad', 'salad', '2021-07-07 09:58:02', '2021-07-07 09:58:02'),
(3, 'Noodle', 'noodle', '2021-07-07 09:58:11', '2021-07-07 09:58:11');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_06_22_173426_create_categories_table', 1),
(12, '2021_06_22_173539_create_posts_table', 1),
(13, '2021_07_07_174106_alter_table_user_add_isadmin', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `price`, `category_id`, `views`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Quis autem vel', 'quis-autem-vel', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 12, 1, 0, 'images/2021-07-07/A46MKdnOL42bd96fRgZT1eHlwOLVUhtBmkKeAgxu.jpg', '2021-07-07 10:41:38', '2021-07-07 10:41:38'),
(2, 'Sed ut perspiciatis', 'sed-ut-perspiciatis', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 14, 1, 0, 'images/2021-07-07/mfghoDoXNGsWoIqLK1Fa5YtMqiaiH4hVYI5vgqFF.jpg', '2021-07-07 10:42:30', '2021-07-07 10:42:30'),
(3, 'Et harum quidem', 'et-harum-quidem', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 9, 2, 0, 'images/2021-07-07/XSlPpl5eSD1liMclAsUSzNNt2PUnmoylhM8anqsf.jpg', '2021-07-07 10:43:05', '2021-07-07 10:43:05'),
(4, 'Nemo enim ipsam', 'nemo-enim-ipsam', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 11, 3, 0, 'images/2021-07-07/C4m8JhC0tL1QrqaQX2U3dYe0N1yCsxn1G5zdmmL1.jpg', '2021-07-07 10:43:47', '2021-07-07 10:43:47'),
(5, 'Et harum quidem', 'et-harum-quidem-2', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 16, 2, 0, 'images/2021-07-07/A82TsKySK8Gzt6cROx7u01jpWxvxqTBdAQZzZhdD.jpg', '2021-07-07 10:44:22', '2021-07-07 10:44:22'),
(6, 'Maecenas ipsum velit', 'maecenas-ipsum-velit', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 17, 3, 0, 'images/2021-07-07/v02GbdhlUyDeDE3ENOeNwnr96r5Ngu2fxFQwQ7QP.jpg', '2021-07-07 10:45:06', '2021-07-07 10:45:06'),
(7, 'Nam quis nulla', 'nam-quis-nulla', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 7, 1, 0, 'images/2021-07-07/lQBqicYtP3TKTXgNFxvmrAp3yypnKlWacWDW3LS1.jpg', '2021-07-07 10:45:42', '2021-07-07 10:45:42'),
(8, 'Etiam posuere quam', 'etiam-posuere-quam', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 13, 1, 0, 'images/2021-07-07/cBPJQ8fevp5VyJGvJVe6RdBy9qgOLXxE4rpxcvNV.jpg', '2021-07-07 10:46:11', '2021-07-07 10:46:11'),
(9, 'Lorem ipsum dolor', 'lorem-ipsum-dolor', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 19, 1, 0, 'images/2021-07-07/WqxCFf2cKHQvDbo3p8x094boFg3M45NPEAZmT2lJ.jpg', '2021-07-07 10:46:41', '2021-07-07 10:46:41'),
(10, 'Morbi leo m', 'morbi-leo-m', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 12, 1, 0, 'images/2021-07-07/Vrnln8MNqDzok51gg0alDuD6HcZYXtt1f8Rf4Wsf.jpg', '2021-07-07 10:47:08', '2021-07-07 10:47:08'),
(11, 'Nam quis nulla', 'nam-quis-nulla-2', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 19, 2, 0, 'images/2021-07-07/Xh05p71z3g2wP2VzxuuzlQ5BiBX2uf5ei0218DVn.jpg', '2021-07-07 10:48:52', '2021-07-07 10:48:52'),
(12, 'In sem justo', 'in-sem-justo', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 22, 2, 0, 'images/2021-07-07/muBbW9g7YSfjUhOzmgHtdmJVLkNN1qZfS2utaPIE.jpg', '2021-07-07 10:49:31', '2021-07-07 10:49:31'),
(13, 'Praesent in mauris', 'praesent-in-mauris', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 14, 2, 0, 'images/2021-07-07/Y0NMtSoKsiBjaSd4ci0pRy8PznzzWj2MhKHaBwvN.jpg', '2021-07-07 10:50:07', '2021-07-07 10:50:07'),
(14, 'Etiam posuere quam', 'etiam-posuere-quam-2', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 27, 3, 0, 'images/2021-07-07/tLkSbsEKLi7PTCHieU0qjS3yAD6lmYw8T2mFcXEZ.jpg', '2021-07-07 10:50:41', '2021-07-07 10:50:41'),
(15, 'Aliquam sagittis', 'aliquam-sagittis', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 13, 3, 0, 'images/2021-07-07/65I2Jguco0yHoWTDp501QG27Hg24FaHiISKZ9qDL.jpg', '2021-07-07 10:51:42', '2021-07-07 10:51:42'),
(16, 'Sed varius turpis', 'sed-varius-turpis', '<p>Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>', 31, 3, 0, 'images/2021-07-07/YeapcTlJkUjl1vCfcnYwbcBbfFmzR7fKG77C2VSr.jpg', '2021-07-07 10:52:09', '2021-07-07 10:52:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'admin', 'admin@ttt.com', NULL, '$2y$10$k8IT.EUfuisER87moBCQe.7DjZJmp07NrHuLgnldf/xhOLBzRzSVS', NULL, '2021-07-07 14:52:36', '2021-07-07 14:52:36', 1),
(2, 'shuly', '222@rt.com', NULL, '$2y$10$TubR4uFwGa5NJqSyrzYo8OEleFRyPSZLZtq.pyW15/Di3yO9Cna1W', NULL, '2021-07-07 14:53:56', '2021-07-07 14:53:56', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
