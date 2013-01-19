<?php
    \Nos\Nos::main_controller()->addJavascriptInline('window.jQuery || document.write(\'<scr\'+\'ipt type="text/javascript" src="static/apps/noviusos_slideshow/js/jquery.min.js"></scr\'+\'ipt>\');', false);
    \Nos\Nos::main_controller()->addJavascriptInline('typeof jQuery.ui !== \'undefined\' || document.write(\'<scr\'+\'ipt type="text/javascript" src="static/apps/sdrdis_book/plugins/jquery.booklet/jquery-ui-1.8.21.custom.min.js"></scr\'+\'ipt>\');', false);
    \Nos\Nos::main_controller()->addJavascript('static/apps/sdrdis_book/plugins/jquery.booklet/jquery.booklet.1.4.0.min.js');
    \Nos\Nos::main_controller()->addCss('static/apps/sdrdis_book/plugins/jquery.booklet/jquery.booklet.1.4.0.css');
    \Nos\Nos::main_controller()->addCss('static/apps/sdrdis_book/css/sdrdis.book.css');

    $config = \Config::load('sdrdis_book::booklet', true);
?>
<div id="<?= $sdrdis_book_id = uniqid('sdrdis_book_') ?>">
<?php
    foreach ($slideshow->images as $image) {
        if ( empty($image->medias->image) ) {
            continue;
        }

        echo '<div ';
        if ($slides_preview) {
            echo 'data-thumb="', $image->medias->image->get_public_path_resized(300, 100), '"';
        }
        echo '>';

        // Image, avec ou sans lien
        if ( $show_link && !empty($image->slidimg_link_to_page_id) ) {
            echo '<a href="'. $image->page->url().'">';
        }
        echo '<img style="margin: 0 auto;" src="', $image->medias->image->get_public_path_resized($width, $height), '" alt="', htmlspecialchars($image->slidimg_title), '" title="', htmlspecialchars($image->slidimg_title), '" />';
        if ( $show_link && !empty($image->slidimg_link_to_page_id) ) {
            echo '</a>';
        }

        echo '</div>';
    }
?>
</div>

<script>
    $(document).ready(function() {
        var initialOptions = <?= json_encode($config) ?>;
        if (typeof initialOptions.pagePadding === 'undefined') {
            initialOptions.pagePadding = 10;
        }
        var defaultOptions = {
            width: <?= $width * 2 ?> + 4 * initialOptions.pagePadding,
            height: <?= $height ?>
        }
        var $book = $('#<?= $sdrdis_book_id ?>');
        console.log($.extend(defaultOptions, initialOptions));
        $book.booklet($.extend(defaultOptions, initialOptions));
    });

</script>