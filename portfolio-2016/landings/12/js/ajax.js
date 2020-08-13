 function showElement(id)
 {
    if(document.getElementById(id) != undefined)
    {
    document.getElementById(id).style.display= 'inline';
    }
 }



 function hideElement(id)

 {
    if(document.getElementById(id) != undefined)
    {
    document.getElementById(id).style.display= 'none';
    }
 }
 


 function changeElementClass(id, nameOfClass)
 {
    if(document.getElementById(id) != undefined)
    {   
       document.getElementById(id).className = nameOfClass;
    }  
 }
 


 function show(nr)
 {
    showElement('content'+nr);
    hideElement('more'+nr);
    showElement('less'+nr);
 }
 


 function hide(nr)
 {
    hideElement('content'+nr);
    showElement('more'+nr);
    hideElement('less'+nr);
 }
 


 function changeProduct(id)
 {
    for (var i=0; i<50; i++)
    {
        if (id == i)
        {
            showElement("product"+i);
            changeElementClass("thumb_a"+i,"thumb_a_selected");
        }
        else
        {
             hideElement("product"+i);
             changeElementClass("thumb_a"+i,"thumb_a");
        }
    }
 }









