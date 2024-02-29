var fulling =
 document.getElementById('fullview');
var ClassName =
    document.getElementsByClassName('img');
for (var i=0, len=ClassName.length; i<len; i++) { 
    var obj=ClassName[i];
    console.log('obj:',obj);
    obj.addEventListener('click',loadImg);
}

function loadImg (ev){
    ev.preventDefault();
    ev.stopPropagation();
    console.log('Event',ev);
    fulling.src = ev.target.src;
}
