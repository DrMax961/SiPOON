// Класс, а, следовательно, объект могут содержать свойства, т.е. переменные будут относиться к данному классу или объекту.
// Объявление состоит из модификатора доступа (private, public, protected).
// Объявление состоит из модификатора static (УДАЛЕНО).
// Принцип инкапсуляции данных требует, чтобы мы не применяли public по отношению к свойствам.
// Инициализацию свойств (присвоение значений) рекомендуется проводить в методах, например, constructor или mutator (accessory).
// Обычно эти методы получают значение свойств из аргументов.
// Его можно переопределить задав другие методы.
// Модификатор доступа, служебное слово function и имя метода () - аргументы, [] - тело метода.
// Для определения/переопределения конструктора нужно написать function construct, имя __constuct - служебное.
// Все служенбные имена в PHP начинаются с двух подчёркиваний.
// Внутри класса можно обращаться к его свойствам и методам используя $this -> имя свойства или метода, псевдопеременная - содержит ссылку на текущий объект.
// При этом $ перед именем свойства не указывается, а () после имени метода - обязательно.
// Свойства, которые не объявлены в классе могут быть добавлены в объект путём обращения через стрелку.
