// $('body').hide()
function toggleMenu() {
    $('.menu-togle').toggleClass('menu-togle_active')
    $('.top-menu').toggleClass('top-menu_active')
}

$('.menu-togle').click(function() { toggleMenu() })

function closeMenu() {
    $('.menu-togle').removeClass('menu-togle_active')
    $('.top-menu').removeClass('top-menu_active')
}

$(document).click(function(e) {
    if ($(e.target).closest('.menu-container').length) return
    closeMenu()
})