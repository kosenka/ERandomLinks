ERandomLinks - Вывод случайной ссылки (расширение для Yii Framework)
=======

## Установка

* Скачать ([zip](https://github.com/kosenka/ERandomLinks/zipball/master), [tar.gz](https://github.com/kosenka/ERandomLinks/tarball/master)).

* Скопировать файл в папку `application.extensions.ERandomLinks` . Должно получиться следующее:

```
protected/
├── components/
├── controllers/
├── ... application directories
└── extensions/
    ├── ERandomLinks.php
    └── ... другие расширения
```

## Ссылки

* [Extension project page](https://github.com/kosenka/ERandomLinks)
* [Russian community discussion thread](http://yiiframework.ru/forum/viewtopic.php?f=9&t=764)

## Использование
В представлении/шаблоне прописать так:

```php
<? $this->widget('application.extensions.ERandomLinks',
        array(
              'links' => array(
                                array('name'=>'Текст для ссылки 1','url'=>'http://site1.ru'),
                                array('name'=>'Текст для ссылки 2','url'=>'http://site2.ru/about'),
                                //и т.д.
                              ),
             )
       );
?>
```

