/**
 * Particleground demo
 * @author Jonathan Nicol - @mrjnicol
 */

$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#37474f',
    lineColor: '#37474f'
  });
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});