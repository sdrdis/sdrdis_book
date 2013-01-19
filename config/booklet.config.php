<?php
return array(
    // General
    //'name'                  => null,			//Name of the booklet to display in the browser's document title bar.
    //'width'                 => 600,			//The width of the booklet. The option can either be a number (default is 600), a CSS string ("600px") or a percentage string ("50%").
    //'height'                => 400,			//The height of the booklet. The option can either be a number (default is 400), a CSS string ("400px") or a percentage string ("50%").
    //'speed'                 => 1000,			//Speed of the transition between pages in milliseconds.
    //'direction'             => "LTR",			//Direction of the overall page organization. Default is "LTR", left to right. Can also be "RTL" for languages which read right to left.
    //'startingPage'          => 0,			//Zero-based index of the page that will be visible when the booklet is first created.
    //'easing'                => "easeInOutQuad",			//Easing method for the complete page transition. Options defined in the Easing Plugin.
    //'easeIn'                => "easeInQuad",			//Easing method for the first half of the page transition. Options defined in the Easing Plugin.
    //'easeOut'               => "easeOutQuad",			//Easing method for the second half of the page transition. Options defined in the Easing Plugin.

    // Closed / Covers
    //'closed'                => false,			//Gives the booklet the appearance of being closed. Adds empty pages to beginning and end of book with the class .b-page-empty.
    //'closedFrontTitle'      => "Beginning",			//Used with closed, menu and pageSelector options. Determines title of blank starting page.
    //'closedFrontChapter'    => "Beginning of Book",			//Used with closed, menu and chapterSelector options. Determines chapter name of blank starting page.
    //'closedBackTitle'       => "End",			//Used with closed, menu and pageSelector options. Determines title of blank ending page.
    //'closedBackChapter'     => "End of Book",			//Used with closed, menu and chapterSelector options. Determines chapter name of blank ending page.
    //'covers'                => false,			//Used with closed option. Makes the first and last pages into covers by hiding page numbers (if enabled) and adding the class .b-page-cover to the page content.
    //'autoCenter'            => false,			//Used with closed option. Makes the booklet position in the center of its container when closed.

    // Pages
    //'pagePadding'           => 10,			//Padding added to each page wrapper .b-wrap.
    //'pageNumbers'           => true,			//Display page numbers on each page. Page numbers are given the class .b-counter.
    //'pageBorder'            => 0,			//The size of the border around each page, .b-page. This should only be updated if you have added a CSS border to this class.

    // Controls
    //'manual'                => true,			//Enables manual page turning using click and drag. Requires jQuery UI in order to function.
    //'hovers'                => true,			//Enables a preview page turn hover animation, which shows a small preview of the previous or next page on hover.
    //'hoverWidth'            => 50,			//The width of the page turn hover preview.
    //'hoverSpeed'            => 500,			//The speed in milliseconds of the page turn hover preview.
    //'hoverTreshold'         => 0.25,			//The percentage used with manual page dragging. Sets the percentage amount of the page width a drag must reach before the next of previous transition will occur when released.
    //'hoverClick'            => true,			//Enables a "click" on the page turn hover preview, when using manual page turning, to begin the page turn.
    //'overlays'              => false,			//Enables navigation using a page sized overlay. When enabled page content, like links, will not be clickable. If manual option is enabled, overlays are removed.
    //'tabs'                  => false,			//Adds tabs along the top of the booklet.
    //'tabWidth'              => 60,			//Set the width of each tab. Can be a number or CSS string value.
    //'tabHeight'             => 20,			//Set the height of each tab. Can be a number or CSS string value.
    //'nextControlText'       => "Next",			//Set the inline text for all "next" controls (tabs, arrows, etc.).
    //'previousControlText'   => "Previous",			//Set the inline text for all "previous" controls (tabs, arrows, etc.).
    //'nextControlTitle'      => "Next Page",			//Set the text for the title attributes of all "next" controls (tabs, arrows, etc.).
    //'previousControlTitle'  => "Previous Page",			//Set text for title attributes of all "previous" controls (tabs, arrows, etc.).
    //'arrows'                => false,			//Adds arrow overlays on the sides of the booklet.
    //'arrowsHide'            => false,			//Auto hide the arrows when the controls are not hovered.
    //'cursor'                => "pointer",			//The CSS cursor used for all controls (tabs, arrows, etc.). Accepts any CSS Cursor
    //'hash'                  => false,			//Enables navigation using a hash string (e.g. "#/page/1"). Will affect all booklets with hash enabled on the same page.
    //'hashTitleText'         => " - Page",			//Text which forms the hash page title (e.g. "Booklet - Page  1").
    //'next'                  => null,			//jQuery selector for element to use as a click trigger for the next page.
    //'prev'                  => null,			//jQuery selector for element to use as a click trigger for the previous page.
    //'auto'                  => false,			//Enables automatic navigation. Requires delay option in order to function. When the end of the booklet is reached it jumps back to the first page.
    //'delay'                 => 5000,			//The time in milliseconds between each automatic page flip transition.
    //'pause'                 => null,			//jQuery selector for element to use as a click trigger for pausing auto page flipping.
    //'play'                  => null,			//jQuery selector for element to use as a click trigger for restarting auto page flipping after it has been paused.
    //'menu'                  => null,			//jQuery selector for the element to use as the menu area. It is required for pageSelector and chapterSelector.
    //'pageSelector'          => false,			//Enables navigation with a drop-down menu of page titles. Requires menu. Uses the title attribute from each of your starting pages.
    //'chapterSelector'       => false,			//Enables navigation with a drop-down menu of chapter titles. Requires menu. Uses the rel attribute from each of your starting pages.

    // Shadows
    //'shadows'               => true,			//Display shadows on pages during animations.
    //'shadowTopFwdWidth'     => 166,			//The width of the top forward animation shadow. Only change if you change the shadow images.
    //'shadowBtmWidth'        => 50,			//The width of the bottom animation shadow. Only change if you change the shadow images.
);
