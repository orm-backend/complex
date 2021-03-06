# Комплексные числа

## Варианты решений

1. Два класса. Класс данных и класс, работающий с данными. Классический и грамотный подход. При наличии IoC-контейнера можно использовать динамические методы и инициализировать посредством иньекции.

2. Один класс (что соответствует условию задачи), содержащий как данные, так и динамические методы, изменяющие эти данные. Т.е. если к данному числу прибавить другое число, то данное число изменится и будет возвращено в качестве результата. Это позволяет вызывать методы цепочкой. Например, $n->add(..)->multiply(..)->subtract(..). Модный в последнее время подход.

3. Один класс, содержащий данные и статические методы для работы с ними. На мой взгляд худший вариант, так как нарушает принцип разделения ответственности классов.

Реализованы первые два решения. Прошу рассматривать, **не как дублирование кода, а два разных варианта**. В реальном проекте я бы использовал один из них.

## Установка

* `git clone https://github.com/orm-backend/complex.git`
* `cd complex`
* `composer install`

## Тестирование

* Запуск тестов производится автоматически после окончания установки
* Для повторного тестирования выполните команду `./vendor/bin/phpunit`

## Демонстрация

* Выполните команду `php demo.php`. Можно было бы добавить ввод данных пользователем, но я поленился и захардкодил два числа.
