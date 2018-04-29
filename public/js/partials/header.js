function openNav() {
    $('.side-nav').width('250px');
}

function closeNav() {
    $('.side-nav').width('0');
}

function upload() {
    swal("비밀번호를 입력해 주세요:", {
            content: "input"
    }).then((value) => {
        axios.post('/login', {
            password: value
        }).then((response) => {
            console.log('success');
            swal(response);
        }).catch(response => {
            console.error(response);
        });

    })
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