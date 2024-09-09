var canvas = new handwriting.Canvas(document.getElementById("canvas"), 3);
canvas.setCallBack(function (data, err) {
  console.log(data);
  if (err) throw err;
  else document.getElementById("result").innerHTML = data;
  document.getElementById("result").style.fontSize = "calc(30px + 1vw)";
});

canvas.setLineWidth(5);

canvas.setOptions({
  language: "en",
  numOfReturn: 1,
});

var paintMode = false;
var x = 918,
  y = 549;
document.onmousemove = function (e) {
  x = e.clientX;
  y = e.clientY;
};

document.addEventListener("keydown", (event) => {
  if (event.code === "KeyP") {
    if (!paintMode) {
      paintMode = true;
      document.getElementById("paintMode").innerHTML = "ON";
      sendMouseEvent();
    }
  }
});

document.addEventListener("keyup", (event) => {
  if (event.code === "KeyP") {
    if (paintMode) {
      paintMode = false;
      document.getElementById("paintMode").innerHTML = "OFF";
      sendMouseEvent();
    }
  }
});

function sendMouseEvent() {
  var eventName = paintMode ? "mousedown" : "mouseup";
  var element = document.getElementById("canvas");
  var clickEvent = document.createEvent("MouseEvents");
  clickEvent.initMouseEvent(
    eventName,
    true,
    true,
    window,
    0,
    0,
    0,
    x,
    y,
    false,
    false,
    false,
    false,
    0,
    null
  );
  element.dispatchEvent(clickEvent);
}
