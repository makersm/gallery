function openNav() {
    $('.side-nav').width('250px');
}

function closeNav() {
    $('.side-nav').width('0');
}

$(function() {
    $(document).click(function(e) {
        // side-nav의 자식노드를 클릭했을때 처리
        if(/*e.target.className !== 'side-nav' && */$('.side-nav').width() > 0) {
            closeNav();
            return false;
        }
    });

});