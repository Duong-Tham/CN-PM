function loginin(){
  document.getElementById("container").style.display="block";
  document.getElementById("login-button").style.display="none";
};
function loginout(){
  document.getElementById("container").style.display="none";
  document.getElementById("login-button").style.display="block";
};
/*$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #forgotten-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

 Forgotten Password 
$('#forgotten').click(function(){
  $("#container").fadeOut(function(){
    $("#forgotten-container").fadeIn();
  });
});*/
