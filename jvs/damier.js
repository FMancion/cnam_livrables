
var illusion = new Image(); 
var proof = new Image(); 
illusion.src = "../img/illusions/shadow-illusion.jpg";        
proof.src = "../img/illusions/shadow-proof.jpg";

function press(element)
{
  element.setAttribute("src", proof.src);	
}


function depress(element)
{
  element.setAttribute("src", illusion.src);	
}
