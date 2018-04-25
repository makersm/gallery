$(function() {
    let $grid = $('.grid');
    $grid.imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item',
            columnWidth: 100
        });
    });
});
