<?php

namespace Faker\Provider\ru_RU;

class Company extends \Faker\Provider\Company
{
    protected static $companyNameFormats = [
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    ];

    protected static $companyPrefixes = [
        'ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО', 'ПАО', 'МКК', 'МФО'
    ];

    protected static $companyNameSuffixes = [
        'Маш', 'Наладка', 'Экспедиция', 'Пром', 'Комплекс', 'Машина', 'Снос', '-М', 'Лизинг', 'Траст', 'Снаб',
        '-H', 'Трест', 'Банк', 'Опт', 'Проф', 'Сбыт', 'Центр'
    ];
    /**
     * @note Words and parts of words that usually used in company names
     */
    protected static $companyElements = [
        'ЖелДор', 'Гараж', 'Цемент', 'Асбоцемент', 'Строй', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Рос', 'Тяж', 'Тех', 'Сантех', 'Урал', 'Башкир', 'Тверь', 'Казань', 'Обл', 'Бух', 'Хоз', 'Электро',
        'Текстиль', 'Восток', 'Орион', 'Юпитер', 'Финанс', 'Микро', 'Радио', 'Мобайл', 'Дизайн', 'Метал', 'Нефть',
        'Телеком', 'Инфо', 'Сервис', 'Софт', 'IT', 'Рыб', 'Глав', 'Вектор', 'Рем', 'Гор', 'Газ', 'Монтаж', 'Мор',
        'Реч', 'Флот', 'Cиб', 'Каз', 'Инж', 'Вод', 'Пив', 'Хмель', 'Мяс', 'Томск', 'Омск', 'Север', 'Лен'
    ];

    protected static $catchPhraseWords = [
        [
            'Адаптивная', 'Дополнительно', 'Улучшить', 'Ассимилировали', 'Автоматическая', 'Сбалансированный', 'Бизнес-ориентированных', 'Централизации', 'Клонировать', 'Совместимость', 'Настраивается', 'Кросс-группа', 'Кросс-платформы', 'Клиентоориентированного', 'Децентрализации', 'Де-инженерии', 'Передал', 'Оцифровки', 'Распространяться', 'Разное', 'Габаритами', 'Расширения', 'Предприятия', 'Эргономичность', 'Эксклюзив', 'Расширенный', 'Очного', 'Целенаправленный', 'Фронтовые', 'Полностью настраиваемый', 'Функции', 'Основной', 'Будущее', 'Низовые', 'Горизонтальной', 'Реализовано', 'Инновационных', 'Интегрированный', 'Интуитивно', 'Обратная', 'Управлять', 'Обязательно', 'Наблюдение', 'Многоканальной', 'Многосторонний', 'Многослойная', 'Многоуровневые', 'Сеть', 'Объектно-ориентированный', 'Открытая архитектура', 'Открытое', 'Оперативная', 'Оптимизация', 'Дополнительно', 'Органический', 'Организованная', 'Стойкость', 'Постоянный', 'Постепенно', 'Полярности', 'Превентивный', 'Инициативный', 'Прибыльных', 'Глубокий', 'Программируемый', 'Прогрессивный', 'Ключ', 'Ориентированные на качество', 'Реактивная', 'Реорганизации', 'Повторно контекст', 'Модернизированной', 'Снижается', 'Копирования', 'Размер', 'Надежный', 'Бесшовные', 'Обеспеченный', 'Собственной активации', 'Запрашиваемого', 'Автономный', 'Упорядочить', 'Переключение', 'Синхронизированы', 'Синергетический', 'Согласования', 'Командный', 'Общий', 'Тройной буферизацией', 'Универсальный', 'Размера', 'Комплектация', 'Пользователя', 'Удобный', 'Универсальный', 'Виртуальный', 'Фантазер',
        ],
        [
            '24часа', '24/7', '3-го поколения', '4-го поколения', '5-го поколения', '6-го поколения', 'активация', 'анализ', 'ассиметричный', 'асинхронный', 'ориентированныйнаориентацию', 'фон', 'мониторинг пропускной способности', 'двунаправленный', 'раздвоенный', 'итоговый', 'ясное мышление', 'управляемый клиентом', 'клиент-сервер', 'связный', 'составной', 'контекстно-зависимый', 'контентно-ориентированный', 'выделенный', 'управляемый спросом', 'дидактический', 'направленный', 'дискретный', 'динамический', 'экоцентричный', 'уполномочивающий', 'охватывающий', 'четный', 'исполнительный', 'явный', 'отказоустойчивый', 'передний план', 'свежее мышление', 'полный диапазон', 'глобальный', 'включенный в сетку', 'эвристический', 'высокоуровневый', 'целостный', 'однородный', 'человеческий ресурс', 'гибридный', 'эффективный', 'инкрементальный', 'нематериальный', 'интерактивный', 'промежуточный', 'ведущий', 'локальный', 'логистический', 'развернутый', 'методический', 'критический', 'мобильный', 'модульный', 'мотивирующий', 'мультимедиа', 'мультисостояние', 'многозадачность', 'национальный', 'основанныйнапотребностях', 'нейтральный', 'следующее поколение', 'энергонезависимый', 'объектно-ориентированный', 'оптимальный', 'оптимизирующий', 'радикальный', 'в реальном времени', 'взаимный', 'региональный', 'отзывчивый', 'масштабируемый', 'вторичный', 'ориентированный на решение', 'стабильный', 'статический', 'систематический', 'системный', 'материальный', 'третичный', 'переходный', 'равномерный', 'восходящий тренд', 'ориентированный на пользователя', 'добавленная стоимость', 'веб-поддержка', 'хорошо модулированный', 'нулевое администрирование', 'нулевой дефект', 'нулевая терпимость',
        ],
        [
            'способности', 'открыть', 'адаптер', 'алгоритм', 'альянс', 'анализатор', 'приложения', 'подходить', 'архитектура', 'архив', 'время', 'отношение', 'тест', 'блокчейн', 'возможность', 'емкость', 'вызов', 'цепи', 'сотрудничество', 'сложность', 'понятие', 'конгломерат', 'случай', 'ядро', 'база данных', 'хранилищ данных', 'определение', 'эмуляция', 'кодировка', 'шифрования', 'экстранет', 'прошивки', 'гибкости', 'фокус-групповых', 'прогноз', 'раму', 'основы', 'функция', 'функциональные возможности', 'групповой', 'оборудование', 'число', 'иерархия', 'хаб', 'реализация', 'инфопосредников', 'инфраструктура', 'инициатива', 'монтаж', 'интерфейс', 'интранет', 'базы знаний', 'плечо', 'матрицы', 'матрица', 'методика', 'промежуточного', 'миграции', 'модель', 'модератор', 'контроль', 'мораторий', 'нейронные сети', 'согласование', 'парадигмы', 'параллельность', 'политика', 'портал', 'товара', 'производительности', 'проект', 'прогноз', 'протокол', 'сервис-бюро', 'программное обеспечение', 'решение', 'стандартизации', 'стратегия', 'структура', 'успех', 'надстройка', 'поддержка', 'синергия', 'команду', 'производительности', 'время', 'набор', 'загрузки', 'сайт', 'работников',
        ],
    ];

    /**
     * @link https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8
     * @note Randomly took from this list - some jobs titles for each letter
     */
    protected static $jobTitleFormat = [
        'Абразивоструйщик', 'Автоинструктор', 'Администратор', 'Арт-директор', 'Архивист', 'Бариста', 'Бармен',
        'Бестиарий (гладиатор)', 'Бизнес-аналитик', 'Бухгалтер', 'Ветеринар', 'Водитель', 'Водолаз', 'Геймдизайнер',
        'Герольд', 'Гитарный мастер', 'Горный проводник', 'Детектив', 'Диджей', 'Диктор', 'Дипломат', 'Егерь', 'Жокей',
        'Зубной техник', 'Интеллектуал', 'Информационный работник', 'Кассир', 'Ковбой', 'Креативный директор', 'Критик',
        'Крупье', 'Лесоруб', 'Лингвист', 'Машинист', 'Менеджер', 'Музыкант', 'Научный сотрудник', 'Офис-менеджер',
        'Печник', 'Пианист', 'Писатель', 'Продюсер', 'Промоутер', 'Психолог', 'Радист', 'Редактор', 'Садовник',
        'Системный аналитик', 'Стилист', 'Столяр', 'Сторож', 'Телефонистка', 'Телохранитель', 'Технический писатель',
        'Учёный', 'Физик', 'Финансовый советник', 'Фотограф', 'Фрезеровщик', 'Художник', 'Чабан', 'Штурман',
        'Экономист', 'Электромонтёр'
    ];

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        $result = [];
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'ООО АсбестЦементМонтаж'
     */
    public function company()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::$companyNameSuffixes);
    }

    public static function inn($area_code = '')
    {
        if ($area_code === '' || (int)$area_code == 0) {
            //Simple generation code for areas in Russian without check for valid
            $area_code = self::numberBetween(1, 91);
        } else {
            $area_code = (int)$area_code;
        }
        $area_code = str_pad($area_code, 2, '0', STR_PAD_LEFT);
        $inn_base = $area_code . static::numerify('#######');
        return $inn_base . \Faker\Calculator\Inn::checksum($inn_base);
    }

    public static function kpp($inn = '')
    {
        if ($inn == '' || strlen($inn) < 4) {
            $inn = static::inn();
        }
        return substr($inn, 0, 4) . '01001';
    }
}
