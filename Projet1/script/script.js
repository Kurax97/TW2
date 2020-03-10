window.addEventListener('DOMContentLoaded', ()=>{
	      // 1 : création
	  let maCarte = L.map('carte_campus');
	  fullscreenControl: true;
	  
	      // 2 : choix du fond de carte
	  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '©️ OpenStreetMap contributors'
	  }).addTo(maCarte);
	    
	      // 3 : réglage de la partie visible (centre, niveau de zoom)
	  maCarte.setView([50.61, 3.14], 14);
	   let pointsList = [];
		  for (let item of document.querySelectorAll('#villes>li')){
		    // item est le noeud DOM d'un <li>
		    let nom = item.textContent;
		    let geoloc = JSON.parse(item.dataset.geo);
		    L.marker(geoloc).addTo(maCarte).bindPopup(nom);
		    pointsList.push(geoloc);
		  }
		       // réglage de la partie visible
		  if (pointsList.length>0)
		    maCarte.fitBounds(pointsList); 
	     // 4 : placer un marqueur
	  //let marker = L.marker([50.609614, 3.136635]).addTo(maCarte);
	      // 5 : lui associer un popup
	  //marker.bindPopup('Le bâtiment M5 <strong>Formations en Informatique</strong>');
	  
	      // autre marqueur :
	  //L.marker([50.6092, 3.14159]).addTo(maCarte).bindPopup('LILLIAD <strong>Learning center</strong>');
	});

