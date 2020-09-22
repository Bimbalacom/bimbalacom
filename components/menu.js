var $menu = $('.stripe-menu')
var $menubg = $('.menubg', $menu)
var $footerbg = $('.footerbg', $menu)
var fadeOut
$('> ul > li', $menu)
  .on('mouseover', function() {
    clearTimeout(fadeOut)
    var menubox = $('.sub-menu', this).get(0).getBoundingClientRect()
    $menubg.css({
      opacity: 1,
      transform: 'translateY(0)',
      top: menubox.top + 'px',
      left: menubox.left + 'px',
      width: menubox.width + 'px',
      height: menubox.height + 'px',
    })
    var footerbox = $('.footer', this).get(0).getBoundingClientRect()
    $footerbg.css({
      opacity: 1,
      transform: 'translateY(0)',
      top: footerbox.top + 'px',
      left: footerbox.left + 'px',
      width: footerbox.width + 'px',
      height: footerbox.height + 'px',
    })
  })
  .on('mouseout', function() {
    fadeOut = setTimeout(function() {
      $menubg.css({
        opacity: 0,
        transform: 'translateY(-10px)'
      })
      $footerbg.css({
        opacity: 0,
        transform: 'translateY(-10px)'
      })
    }, 200)
  })