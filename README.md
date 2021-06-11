![linter and tests](https://github.com/yulia633/my-simple-starter/workflows/linter%20and%20tests/badge.svg)
[![Maintainability](https://api.codeclimate.com/v1/badges/2d15e825bb773822b808/maintainability)](https://codeclimate.com/github/yulia633/my-simple-starter/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/2d15e825bb773822b808/test_coverage)](https://codeclimate.com/github/yulia633/my-simple-starter/test_coverage)

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