<html>
     <head>
     <link rel="stylesheet" type="text/css" href="/style.css" />
          </head>
      <link rel="stylesheet" type="text/css" href="/fixstyles.css">
<body>
<h1>SQL Типы данных</h1>
<h2>Числовые типы данных</h2>
<table cellpadding="5" cellspacing="0">
    <tr>
    <td width="15%">Тип данных</td>
    <td width="15%" >Объем памяти</td>
    <td width="15%">Диапазон</td>
    <td>Описание</td>
    </tr>
    <tr>
    <td>TINYINT (M)</td>
    <td>1 байт</td>
    <td>от -128 до 127 или от 0 до 255</td>
    <td>Целое число. Может быть объявлено положительным с помощью ключевого слова UNSIGNED, тогда элементам столбца нельзя будет
    присвоить отрицательное значение. Необязательный параметр М - количество отводимых под число символов. Необязательный
    атрибут ZEROFILL позволяет свободные позиции по умолчанию заполнить нулями.<br><br>
    <i>Примеры:</i><br><br>
    TINYINT  - хранит любое число в диапазоне от -128 до 127.<br><br>
    TINYINT UNSIGNED - хранит любое число в диапазоне от 0 до 255.<br><br>
    TINYINT (2) - предполагается, что значения будут двузначными, но по факту будет хранить и трехзначные.<br><br>
    TINYINT (3) ZEROFILL - свободные позиции слева заполнит нулями. Например, величина 2 будет отображаться, как 002.
    </td>
    </tr>
    <tr>
    <td>SMALLINT (M)</td>
    <td>2 байта</td>
    <td>от -32768 до 32767 или от 0 до 65535</td>
    <td>Аналогично предыдущему, но с большим диапазоном.<br><br>
    <i>Примеры:</i><br><br>
    SMALLINT  - хранит любое число в диапазоне от -32768 до 32767.<br><br>
    SMALLINT UNSIGNED - хранит любое число в диапазоне от 0 до 65535.<br><br>
    SMALLINT (4) - предполагается, что значения будут четырехзначные, но по факту будет хранить и пятизначные.<br><br>
    SMALLINT (4) ZEROFILL - свободные позиции слева заполнит нулями. Например, величина 2 будет отображаться, как 0002.
    </td>
    </tr>
    <tr>
    <td>MEDIUMINT (M)</td>
    <td>3 байта</td>
    <td>от -8388608 до 8388608 или от 0 до 16777215</td>
    <td class="left">Аналогично предыдущему, но с большим диапазоном.<br><br>
    <i class="teg">Примеры:</i><br><br>
    MEDIUMINT  - хранит любое число в диапазоне от -8388608 до 8388608.<br><br>
    MEDIUMINT UNSIGNED - хранит любое число в диапазоне от 0 до 16777215.<br><br>
    MEDIUMINT (4) - предполагается, что значения будут четырехзначные, но по факту будет хранить и семизначные.<br><br>
    MEDIUMINT (5) ZEROFILL - свободные позиции слева заполнит нулями. Например, величина 2 будет отображаться, как 00002.
    </td>
    </tr>
    <tr>
    <td>INT (M) или INTEGER (M)</td>
    <td>4 байта</td>
    <td>от -2147683648 до 2147683648 или от 0 до 4294967295</td>
    <td class="left">Аналогично предыдущему, но с большим диапазоном.<br><br>
    <i class="teg">Примеры:</i><br><br>
    INT  - хранит любое число в диапазоне от -2147683648 до 2147683648.<br><br>
    INT UNSIGNED - хранит любое число в диапазоне от 0 до 4294967295.<br><br>
    INT (4) - предполагается, что значения будут четырехзначные, но по факту будет хранить максимально возможные.<br><br>
    INT (5) ZEROFILL - свободные позиции слева заполнит нулями. Например, величина 2 будет отображаться, как 00002.
    </td>
    </tr>
    <tr>
    <td>BIGINT (M)</td>
    <td>8 байта</td>
    <td>от -2<sup>63</sup> до 2<sup>63</sup>-1 или от 0 до 2<sup>64</sup></td>
    <td class="left">Аналогично предыдущему, но с большим диапазоном.<br><br>
    <i class="teg">Примеры:</i><br><br>
    BIGINT  - хранит любое число в диапазоне от -2<sup>63</sup> до 2<sup>63</sup>-1.<br><br>
    BIGINT UNSIGNED - хранит любое число в диапазоне от 0 до 2<sup>64</sup>.<br><br>
    BIGINT (4) - предполагается, что значения будут четырехзначные, но по факту будет хранить максимально возможные.<br><br>
    BIGINT (7) ZEROFILL - свободные позиции слева заполнит нулями. Например, величина 2 будет отображаться, как 0000002.
    </td>
    </tr>
    <tr>
    <td>BOOL или BOOLEAN</td>
    <td>1 байт</td>
    <td>либо 0, либо 1</td>
    <td class="left">Булево значение. 0 - ложь (false), 1 - истина (true).
    </td>
    </tr>
    <tr>
    <td>DECIMAL (M,D) или DEC (M,D) или NUMERIC (M,D)</td>
    <td>M + 2 байта</td>
    <td>зависят от параметров M и D</td>
    <td class="left">Используются для величин повышенной точности, например, для денежных данных. M - количество отводимых
    под число символов (максимальное значение - 64). D - количество знаков после запятой (максимальное значение - 30).<br><br>
    <i class="teg">Пример:</i><br><br>
    DECIMAL (5,2) - будет хранить числа от -99,99 до 99,99.
    </td>
    </tr>
    <tr>
    <td>FLOAT (M,D)</td>
    <td>4 байта</td>
    <td>мин. значение +(-) 1.175494351 * 10<sup>-39</sup><br>
        макс. значение +(-) 3. 402823466 * 10<sup>38</sup></td>
    <td class="left">Вещественное число (с плавающей точкой). Может иметь параметр UNSIGNED, запрещающий отрицательные числа, но
    диапазон значений от этого не изменится. M - количество отводимых под число символов. D - количество символов дробной части. <br><br>
    <i class="teg">Пример:</i><br><br>
    FLOAT (5,2) - будет хранить числа из 5 символов, 2 из которых будут идти после запятой (например: 46,58).
    </td>
    </tr>
    <tr>
    <td>DOUBLE (M,D)</td>
    <td>8 байт</td>
    <td>мин. значение +(-) 2.2250738585072015 * 10<sup>-308</sup><br>
        макс. значение +(-) 1.797693134862315 * 10<sup>308</sup></td>
    <td class="left">Аналогично предыдущему, но с большим диапазоном. <br><br>
    <i class="teg">Пример:</i><br><br>
    DOUBLE - будет хранить большие дробные числа.
    </td>
    </tr>
</table><br><br>
Необходимо понимать, чем больше диапазон значений у типа данных, тем больше памяти он занимает. Поэтому, если предполагается,
что значения в столбце не будут превышать 100, то используйте тип TINYINT. Если при этом все значения будут положительными, то
используйте атрибут UNSIGNED. Правильный выбор типа данных позволяет сэкономить место для хранения этих данных.
<h2>Строковые типы данных</h2>
<table class="osn" cellpadding="5" cellspacing="0">
    <tr>
    <td width="15%">Тип данных</td>
    <td width="15%" >Объем памяти</td>
    <td width="15%">Максимальный размер</td>
    <td>Описание</td>
    </tr>
    <tr>
    <td>CHAR (M)</td>
    <td>M символов</td>
    <td>М символов</td>
    <td class="left" >Позволяет хранить строку фиксированной длины М. Значение М - от 0 до 65535.<br><br>
    <i class="teg">Примеры:</i><br><br>
    CHAR (8) - хранит строки из 8 символов и занимает 8 байтов. Например, любое из следующих значений: '', 'Иван','Ирина',
    'Сергей' будет занимать по 8 байтов памяти. А при попытке ввести значение 'Александра', оно будет усечено до
    'Александ', т.е. до 8 символов.
    </td>
    </tr>
    <tr>
    <td>VARCHAR (M)</td>
    <td>L+1 символов</td>
    <td>М символов</td>
    <td class="left">Позволяет хранить переменные строки длиной L. Значение М - от 0 до 65535.<br><br>
    <i class="teg">Примеры:</i><br><br>
    VARCHAR (3) - хранит строки максимум из 3 символов, но пустая строка '' занимает 1 байт памяти, строка 'a' - 2 байта,
    строк 'aa' - 3 байта, строка 'aaa' - 4 байта. Значение более 3 символов будет усечено до 3.
    </td>
    </tr>
    <tr>
    <td>BLOB, TEXT</td>
    <td>L+2 символов</td>
    <td>2<sup>16</sup>-1 символов</td>
    <td class="left">Позволяют хранить большие объемы текста. Причем тип TEXT используется для хранения именно текста, а BLOB - для хранения
    изображений, звука, электронных документов и т.д.
    </td>
    </tr>
    <tr>
    <td>MEDIUMBLOB, MEDIUMTEXT</td>
    <td>L+3 символов</td>
    <td>2<sup>24</sup>-1 символов</td>
    <td class="left">Аналогично предыдущему, но с большим размером.
    </td>
    </tr>
    <tr>
    <td>LONGBLOB, LONGTEXT</td>
    <td>L+4 символов</td>
    <td>2<sup>32</sup>-1 символов</td>
    <td class="left">Аналогично предыдущему, но с большим размером.
    </td>
    </tr>
    <tr>
    <td>ENUM ('value1', 'value2', ...,'valueN')</td>
    <td>1 или 2 байта</td>
    <td>65535 элементов</td>
    <td class="left">Строки этого типа могут принимать только одно из значений указанного множества.<br><br>
    <i class="teg">Пример:</i><br><br>
    ENUM ('да', 'нет') - в столбце с таким типом может храниться только одно из имеющихся значений. Удобно использовать,
    если предусмотрено, что в столбце должен храниться ответ на вопрос.
    </td>
    </tr>
    <tr>
    <td>SET ('value1', 'value2', ...,'valueN')</td>
    <td>до 8 байт</td>
    <td>64 элемента</td>
    <td class="left">Строки этого типа могут принимать любой или все элементы из значений указанного множества.<br><br>
    <i class="teg">Пример:</i><br><br>
    SET ('первый', 'второй') - в столбце с таким типом может храниться одно из перечисленных значений, оба сразу или значение
    может отсутствовать вовсе. 
    </td>
    </tr>
</table>
<h2>Календарные типы данных</h2>
<table class="osn" cellpadding="5" cellspacing="0">
    <tr>
    <td width="15%">Тип данных</td>
    <td width="15%" >Объем памяти</td>
    <td width="15%">Диапазон</td>
    <td>Описание</td>
    </tr>
    <tr>
    <td>DATE</td>
    <td>3 байта</td>
    <td>от '1000-01-01' до '9999-12-31'</td>
    <td class="left">Предназначен для хранения даты. В качестве первого значения указывается год в формате "YYYY", через дефис - месяц в
    формате "ММ", а затем день в формате "DD". В качестве разделителя может выступать не только дефис, а любой символ отличный
    от цифры.</td>
    </tr>
    <tr>
    <td>TIME</td>
    <td>3 байта</td>
    <td>от '-838:59:59' до '838:59:59'</td>
    <td class="left">Предназначен для хранения времени суток. Значение вводится и хранится в привычном формате - hh:mm:ss, где hh - часы,
    mm - минуты, ss - секунды. В качестве разделителя может выступать  любой символ отличный от цифры.</td>
    </tr>
    <tr>
    <td>DATATIME</td>
    <td>8 байт</td>
    <td>от '1000-01-01 00:00:00' до '9999-12-31 23:59:59'</td>
    <td class="left">Предназначен для хранения  и даты и времени суток. Значение вводится и хранится в формате - YYYY-MM-DD hh:mm:ss.
    В качестве разделителей могут выступать  любые символы отличные от цифры.</td>
    </tr>
    <tr>
    <td>TIMESTAMP</td>
    <td>4 байта</td>
    <td>от '1970-01-01 00:00:00' до '2037-12-31 23:59:59'</td>
    <td class="left">Предназначен для хранения  даты и времени суток в виде количества секунд, прошедших с полуночи 1 января 1970 года
    (начало эпохи UNIX).</td>
    </tr>
    <tr>
    <td>YEAR (M)</td>
    <td>1 байт</td>
    <td>от 1970 до 2069 для М=2 и от 1901 до 2155 для М=4</td>
    <td class="left">Предназначен для хранения  года. М - задает формат года. Например, YEAR (2) - 70, а YEAR (4) - 1970. Если параметр М не
    указан, то по умолчанию считается, что он равен 4.</td>
    </tr>
</table>
<h2>Тип данных NULL</h2>
Вообще-то это лишь условно можно назвать типом данных. По сути это скорее указатель возможности отсутствия значения.
Например, когда вы регистрируетесь на каком-либо сайте, вам предлагается заполнить форму, в которой присутствуют, как обязательные,
так и необязательные поля. Понятно, что регистрация пользователя невозможна без указания логина и пароля, а вот дату рождения и
пол пользователь может указать по желанию. Для того, чтобы хранить такую информацию в БД и используют два значения: <br><br>
NOT NULL (значение не может отсутствовать) для полей логин и пароль,<br><br>
NULL (значение может отсутствовать) для полей дата рождения и пол.<br><br>
По умолчанию всем столбцам присваивается тип NOT NULL, поэтому его можно явно не указывать.<br><br>
    <i class="teg">Пример:</i><br><br>
<code>
    create table users (login varchar(20), password varchar(15), sex enum('man', 'woman') NULL, date_birth date NULL);
</code><br><br>
Таким образом, мы создаем таблицу с 4 столбцами: логин (не более 20 символов) обязательное, пароль (не более 15 символов) обязательное,
пол (мужской или женский) не обязательное, дата рождения (тип дата) необязательное.<br><br>
<br><br>
</body>
</hthml>
