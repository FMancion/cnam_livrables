// script d'affichage de la largeur page en temps réel
window.addEventListener('load',function(){
		var elLargeurPage = document.getElementById('largeurPage');

		elLargeurPage.innerHTML = document.body.clientWidth;

		this.addEventListener('resize',function(){
			elLargeurPage.innerHTML = document.body.clientWidth;
		});
	});