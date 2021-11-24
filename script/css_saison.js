var mois=new Date().getMonth();
	switch (mois) {
		case 9 :
			$("link[rel='stylesheet']").attr('href','style/style_halloween.css');
			break;
		case 11 :
			$("link[rel='stylesheet']").attr('href','style/style_noel.css');
			break;
	}