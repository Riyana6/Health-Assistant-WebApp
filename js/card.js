/* jquery.js */
/* jquery.velocity.js */

$("#demo").hover( function() {
  $("#demo").velocity("stop")
  $("#demo").velocity({ scaleX : 1.01, scaleY: 1.02 }, 100);
},
function() {
  $("#demo").velocity({ scaleX: 1.00, scaleY: 1.00 }, 1500, [300, 10]);
});


$("#demo2").hover( function() {
  $("#demo2").velocity("stop")
  $("#demo2").velocity({ scaleX : 1.01, scaleY: 1.02 }, 100);
},
function() {
  $("#demo2").velocity({ scaleX: 1.00, scaleY: 1.00 }, 1500, [300, 10]);
});

$("#demo3").hover( function() {
  $("#demo3").velocity("stop")
  $("#demo3").velocity({ scaleX : 1.01, scaleY: 1.02 }, 100);
},
function() {
  $("#demo3").velocity({ scaleX: 1.00, scaleY: 1.00 }, 1500, [300, 10]);
});