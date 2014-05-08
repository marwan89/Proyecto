window.addEventListener('load',init,false);
var canvas2=null,ctx=null;
var x=50,y=50;

function init2(){
    canvas2=document.getElementById('canvas2');
    ctx=canvas2.getContext('2d');
    run2();
}

function run2(){
    requestAnimationFrame(run2);
    act2();
    paint2(ctx);
}

function act2(){
    x+=2;
    if(x>canvas2.width)
        x=0;
}

function paint2(ctx){
    ctx.fillStyle='#000';
    ctx.fillRect(0,0,canvas2.width,canvas2.height);
    ctx.fillStyle='#0f0';
    ctx.fillRect(x,y,10,10);
}

window.requestAnimationFrame=(function(){
    return window.requestAnimationFrame || 
        window.webkitRequestAnimationFrame || 
        window.mozRequestAnimationFrame || 
        function(callback){window.setTimeout(callback,17);};
})();