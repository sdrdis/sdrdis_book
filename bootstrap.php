<?php
\Event::register_function('config|noviusos_slideshow::slideshow', function(&$config) {
    $config['sizes']['book'] = array(
        'img_width'  => '500',
        'img_height' => '500',
        'class'      => 'slide-book'
    );
});

\View::redirect('noviusos_slideshow::slideshow', 'sdrdis_book::slideshow');