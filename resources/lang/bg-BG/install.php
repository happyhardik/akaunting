<?php

return [

    'next'                  => 'Следващ',
    'refresh'               => 'Обновяване',

    'steps' => [
        'requirements'      => 'Моля обърнете се към вашия хостинг доставчик да поправите грешките!',
        'language'          => 'Стъпка 1/3: Избор на език',
        'database'          => 'Стъпка 2/3: Избор на база данни',
        'settings'          => 'Стъпка 3/3: Детайли на компанията и администратора',
    ],

    'language' => [
        'select'            => 'Изберете език',
    ],

    'requirements' => [
        'enabled'           => ':feature трябва да бъде активирана!',
        'disabled'          => ':feature трябва да бъде дезактивирана!',
        'extension'         => ':extension разширението трябва да бъде заредено!',
        'directory'         => ':directory директорията трябва да е с разрешение за промяна!',
        'executable'        => 'The PHP CLI executable file is not working! Please, ask your hosting company to set PHP_BINARY or PHP_PATH environment variable correctly.',
        'npm'               => '<b>Missing JavaScript files !</b> <br><br><span>You should run <em class="underline">npm install</em> and <em class="underline">npm run dev</em> commands.</span>', 
    ],

    'database' => [
        'hostname'          => 'Име на хост',
        'username'          => 'Потребителско име',
        'password'          => 'Парола',
        'name'              => 'База данни',
    ],

    'settings' => [
        'company_name'      => 'Име на компанията',
        'company_email'     => 'Имейл на компанията',
        'admin_email'       => 'Администраторски имейл',
        'admin_password'    => 'Администраторска парола',
    ],

    'error' => [
        'php_version'       => 'Грешка: Поискайте от своя хостинг доставчик да инсталира PHP :php_version или по-висока за HTTP and CLI едновременно.',
        'connection'        => 'Грешка: Не можа да се свърже с базата данни! Моля, уверете се, че данните са правилни.',
    ],

    'update' => [
        'core'              => 'Нова версия на Nuaxa Network е налична! Моля, актуализирайте вашата инсталация.',
        'module'            => 'Нова версия на :module е налична! Моля, актуализирайте вашата инсталация.',
    ],
];
