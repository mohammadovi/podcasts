<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => " نمانایی نشیم", // set false to total remove
            'titleBefore'  => 'Namana', // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'رادیو صوتی و معماری ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['نمانا','رادیو','نمانایی نشیم','رادیو معماری','ساختمان','namana','radio','سازه'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'رادیو نمانا ', // set false to total remove
            'description' => 'رادیو معماری نمانا، به عنوان پادکست و رسانه ای عمومی در حوزه ی معماری و شهرسازی فعالیت خود را از بهمن ماه سال 1398 آغاز کرد. در طی این زمان به تولید محتوا با بیانی کلاژگونه پرداخت تا هنر مهرازی و شهرسازی را با هنرهای هفت گانه همراه ساخته و روایت ها و داستان های بزرگان در این حوزه را به ضبط و ثبت رساند. این همراهی کارکردی میان معماری، شهرسازی و هنرهای هفتگانه؛ اندیشه و تجربه ای نو خلق کرده و با ادبیات و کلام، گوش نیوشی موثر در حفظ میراث فرهنگی کشور انتشار می دهد. چراکه بقول فروغ “تنها صداست که می ماند.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'namanayneshim',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'نمانا', // set false to total remove
            'description' => 'رادیو معماری صوتی نمانا', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
