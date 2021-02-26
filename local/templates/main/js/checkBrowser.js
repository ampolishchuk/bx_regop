$(document).ready(function(){
    const isIE11 = !!window.MSInputMethodContext && !!document.documentMode;

    if (isIE11) {
        const warning = document.createElement('span');
        warning.classList.add('browser-warning');
        
        $(warning).css({
            'color': 'red',
            'font-size': '30px',
            
        }).html('ВНИМАНИЕ!!!<br/><br/>Ваш браузер устарел.<br/><br/>В связи с этим сайт будет отображаться не корректно, а так же возможны перебои в работе некоторых функций.');

        $('body').prepend(warning)
    }
})
