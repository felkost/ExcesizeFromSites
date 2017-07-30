Про підключення SASS читати на http://www.angarsky.ru/drupal/nastraivaem-lokalno-sass-v-svyazke-s-phpstorm.html

Після цього заповнюється код SASS(SCSS)
Налаштування, які виконуються 1 раз:
1) встановити Ruby;
2) встановити SASS;
3) встановити Compass та налаштувати https://www.jetbrains.com/help/phpstorm/sass-and-scss-in-compass-projects.html#d363103e154
[  compile $UnixSeparators($FilePath$)$  ]

Потім відкрити в PHPStorm вікно Terminal  та виконати підключення та налаштування Compass безпосередньо до проекту:
http://gearmobile.github.io/css/compass-sass-scss/

По документації http://compass-style.org/reference/compass/ віднайти модулі, а в їх описах команди
та приклади їх використання.

Використання Bourbon
1. Виконати в терміналі gem install bourbon    - виконується один раз, щоб установити бібліотеку в Ruby
2. Перейти до папки проекту та виконати в терміналі bourbon install
3. Створити, наприклад, style3.scss
4. Вказати правильно імпорт (важливо: правильний шлях до папок), як в в прикладі Study_SASS (f3.html, style3.scss)
5. Для компіляції виконати в терміналі  sass -watch sass/style3.scss:css/style3.css
Після цього має створитись та відслідковуватись код style3.css, а в style3.scss добавляти код.

Статті про підключення Bourbon
http://gearmobile.github.io/css/bourbon-brief-introduction/
https://sass-scss.ru/guide/



