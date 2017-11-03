$(function () {

    /*轮播图*/

    let num = 0;
    let t;

    /*自动轮播*/
    t = setInterval(fn, 3000);
    $(".banner").mouseenter(function() {
        clearInterval(t);
    })
    $(".banner").mouseleave(function() {
        t = setInterval(fn, 3000);
    })

    /*左右键轮播*/
    $(".next").click = function () {
        fn();
        return false;
    }

    function fn() {
        num++;
        if (num == $(".bannerBox li").length) {
            num = 0;
        }
        for (let i = 0; i < $(".bannerBox li").length; i++) {
            $(".bannerBox li").eq(i).css({display:"none"});
        }
        $(".bannerBox li").eq(num).css({display:"block"});
    }
    $(".prev").click(function() {
        fn1();
        return false;
    })

    function fn1() {
        num--;
        if (num == -1) {
            num = $(".bannerBox li").length - 1;
        }
        for (let i = 0; i < $(".bannerBox li").length; i++) {
            $(".bannerBox li").eq(i).css({display:"none"});
        }
        $(".bannerBox li").eq(num).css({display:"block"});
    }



    /*个人中心*/

    $(".write").mouseenter(function() {
        $(".content").css({display:"block"});
    })
    $("header").mouseleave(function() {
        $(".content").css({display:"none"});
    })


})