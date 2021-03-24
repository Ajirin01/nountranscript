(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

  var continue_btn = document.getElementById('continue');
  var signature = document.getElementById('signature')
  continue_btn.addEventListener("click", function(e) {
    console.log('continue button has been clicked');
    var dataUrl = canvas.toDataURL();
    signature.setAttribute("src", dataUrl);
    console.log(dataUrl)
    
  }, false);
 var select_image = document.getElementById('sign-select');
 var select_sig_btn = document.getElementById('select-sig-btn')

 function readURL(input){
  if(input.files && input.files[0]){
      var reader = new FileReader()
      
      reader.onload = function(e){
          var id = '#signature'
          // var advert_image = '#advert_image'+index
          
          var img = new Image();      
          img.src = e.target.result;

          img.onload = function () {
              var w = this.width;
              var h = this.height;
              $(id).attr('src', e.target.result);
              $(id).css({'margin-left':'200px'})
          }

      }

      reader.readAsDataURL(input.files[0])
  }
}
var element = document.getElementById('element')
var el = document.getElementById('el')

 select_image.onchange = function(){
  readURL(this)
  console.log('image set')
  element.innerHTML = el.innerHTML
  console.log(el)
 }

 select_sig_btn.onclick = function(e){
   e.preventDefault()
   console.log('the select signature file button was clicked')
   select_image.click()
   
 }
 function PrintElem(elem)
 {
     var mywindow = window.open('', 'PRINT', 'height=400,width=600');
 
     mywindow.document.write('<html><head><title>' + document.title  + '</title>');
     mywindow.document.write('</head><body >');
     mywindow.document.write('<h1>' + document.title  + '</h1>');
     mywindow.document.write(document.getElementById(elem).innerHTML);
     mywindow.document.write('</body></html>');
 
     mywindow.document.close(); // necessary for IE >= 10
     mywindow.focus(); // necessary for IE >= 10*/
 
     mywindow.print();
     mywindow.close();
 
     return true;
 }
$('.print-btn').on('click', function(){
  console.log('print button clicked')
  PrintElem('el')
})
})();