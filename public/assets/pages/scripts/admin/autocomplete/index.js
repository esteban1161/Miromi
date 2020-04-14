var options = {
	url: "public/json/countries.json",

	getValue: "name",

	list: {
		match: {
			enabled: true
		},
		maxNumberOfElements: 8
	},

	theme: "plate-dark"

};

$("#plate").easyAutocomplete(options);