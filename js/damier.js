
var illusion = new Image(); 
var proof = new Image(); 
illusion.src = "../images/illusions/shadow-illusion.jpg";        
proof.src = "../images/illusions/shadow-proof.jpg";

function press(element)
{
  element.setAttribute("src", proof.src);	
}


function depress(element)
{
  element.setAttribute("src", illusion.src);	
}
