var options = {
	url: 'http://miromi.test/cie10',
	getValue: "descripcion", 
	// data: ["De apariencia normal", "Esta enfermo", "Tiene mocos", "Dolores", "No Informa sintomas", "etc"],
	list: {
		sort: {
			enabled: true
		},
		match: {
			enabled: true
		}
	}
};
$ (".autocomplete"). easyAutocomplete (options); 