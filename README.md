# word_count

Предположил, что файл на русском (подходит под локаль ru), в формате txt.
Разные времена, падежи, рода и числа - это разные слова.

Общий смысл: делю текст на строки по точке. Каждую строку разбираю на массив слов. Мерджу массивы, убираю дубликаты.
В результате получается массив с уникальными словами (с т.з. PHP :) ). Считаю массив. 
Среди ошибочных возможных вариантов - попадание в уникальные слова "т", "д", "пр" и подобное.

Из всех преобразований слова использую только приведение к нижнему регистру. 
В этом случае возможны ошибки типа слияния антилопы "гну" и какой-нибудь аббревиатуры "ГНУ".

При расширенных условиях (разные языки, возможность спецсимволов в слове, учет падежей, родов, чисел и т.д.) 
потребуется сложная логика приведения слова к инфинитиву или в им.пад ед.ч.. 
К сожалению, простых решений я не нашел, поэтому не реализовывал. 
Суть решения такая: пишется вспомогательный класс, который будет очищать каждое слово от лишнего, проверять на аббревиацию и другие подводные камни и возвращать начальную форму.
