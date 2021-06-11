![linter and tests](https://github.com/yulia633/my-simple-starter/workflows/linter%20and%20tests/badge.svg)

# Стартовый проект php

Небольшой стартовый шаблон **php** для учебных проектов. Настроены Unit тесты, покрытие тестов, быстрый запуск скриптов в Makefile, Action GitHub.


## Установка

```sh
$ git clone

$ make install
```

## Запуск тестов и покрытие

```sh
$ make test-coverage
```

##  Для Test Coverage

-   Смотреть `phpunit.xml`
-   Добавить CC_TEST_REPORTER_ID to workflow as SECERETS ENV VARIABLE (для безопасности)