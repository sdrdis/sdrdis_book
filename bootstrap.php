<?php
\Event::register_function('config|noviusos_slideshow::slideshow', function(&$config) {
    $config['sizes']['book'] = array(
        'img_width'  => '300',
        'img_height' => '400',
        'class'      => 'slide-book'
    );
});

\View::redirect('noviusos_slideshow::slideshow', 'sdrdis_book::booklet', function($data) {
    return $data['size_key'] == 'book';
});