<?php \Debug::dump($size_key); ?>
<?= \View::forge('!noviusos_slideshow::slideshow', array('slides_preview' => $slides_preview, 'slideshow' => $slideshow, 'show_link' => $show_link, 'class' => $class, 'width' => $width, 'height' => $height)) ?>