var myLayout; // a var is required because this page utilizes: myLayout.allowOverflow() method

$(document).ready(function () {
    myLayout = $('body').layout({
        // enable showOverflow on west-pane so popups will overlap north pane
        west__showOverflowOnHover: true

        //,	west__fxSettings_open: { easing: "easeOutBounce", duration: 750 }
    });
});