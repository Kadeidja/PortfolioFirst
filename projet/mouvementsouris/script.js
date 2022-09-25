let petitcarre = document.getElementsByClassName('wave'); //ici on ecoute le position de la souris dans la page 
document.onmousemove = function() { let x = event.clientX*100/window.innerWidth + "%"; let y = event.clientY*100/window.innerHeight + "%"; 
                                    //On associe la position à l'objet concerné il faut qu'une propriéte soit liée au mouvement horizontal et l'autre verticale de la souris 
for (let i = 0; i < 2; i++){ petitcarre[i].style.left = x;
petitcarre[i].style.top = y; petitcarre[i].style.transform="translate(-"+ x +",-"+ y +")";
  }
  
  //permet de voir si l'ecoute de la souris fonctionne dans l'onglet console
  console.log("x =" + x);
  console.log("y =" + y);
}