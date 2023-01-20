<?php include 'persons.php'; ?>
<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Практическая работа на курсе 'Веб-Разроботчик' SkillFactory. Старт в PHP">
	<meta name="keywords" content="Обучение, SkillFactory, PHP, практическая работа, базовый backend, Старт в PHP">
	<meta name="author" content="Анатолий Кострыкин">
	<meta name="copyright" content="Анатолий Кострыкин">
	<link rel="shortcut icon" href="./img/php_elephant.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
	<title>Старт в PHP</title>
</head>

<body>
	<div class="wrapper">

		<header class="header">
			<div class="header__logo">
				<a href="./index.php" title="Обновить">
					<img src="./img/php-icon.png" alt="logo">
				</a>
			</div>
			<h1 class="header__title">Старт в PHP</h1>
		</header>

		<main class="content">
			<article class="home-work">
				<h2 class="home-work__title">12 модуль. Практическая работа</h2>
				<div class="home-work-content">
					<section class="task">
						<h3 class="task__title">Задача №1. Разбиение и объединение ФИО</h3>
						<div class="task__text">
							<p>Результат работы функции:</p>
							<code class="task__code">
								<?= $name = getFullnameFromParts('Морозова', 'Ольга', 'Сергеевна'); ?>
							</code>
							<p>Результат работы функции:</p>
							<code class="task__code">
								<?php print_r(getPartsFromFullname($name)); ?>
							</code>
						</div>
					</section>
					<section class="task">
						<h3 class="task__title">Задача №2. Сокращение ФИО</h3>
						<div class="task__text">
							<p>Результат работы функции:</p>
							<code class="task__code">
								<?= getShortName($name); ?>
							</code>
						</div>
					</section>
					<section class="task">
						<h3 class="task__title">Задача №3. Функция определения пола по ФИО</h3>
						<div class="task__text">
							<p>Результат работы функции:</p>
							<code class="task__code">
								<?php
								if (getGenderFromName($name) === 1) {
									echo 'мужской пол';
								} else if (getGenderFromName($name) === -1) {
									echo 'женский пол';
								} else {
									echo 'не удалось определить';
								}
								?>
							</code>
						</div>
					</section>
					<section class="task">
						<h3 class="task__title">Задача №4. Определение возрастно-полового состава</h3>
						<div class="task__text">
							<p>Результат работы функции:</p>
							<code class="task__code">
								<pre><?php echo getGenderDescription($persons); ?></pre>
							</code>
						</div>
					</section>
					<section class="task">
						<h3 class="task__title">Задача №5. Идеальный подбор пары</h3>
						<div class="task__text">
							<p>Результат работы функции:</p>
							<code class="task__code">
								<pre><?= getPerfectPartner('Морозова', 'Ольга', 'Сергеевна', $persons); ?></pre>
							</code>
						</div>
					</section>
				</div>
			</article>
		</main>

		<footer class="footer">
			<nav class="footer-navigation">
				<ul class="footer-links-list">
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/vk-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/telegram-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/whatsapp-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/github-icon.png" alt="logo">
						</a>
					</li>
				</ul>
			</nav>
			<div class="footer-text-block">
				<p>&copy; 2023 Старт в PHP</p>
			</div>
		</footer>

	</div>
</body>

</html>