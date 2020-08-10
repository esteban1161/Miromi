var options = {
	data: [ {name: "Avionet", type: "air", icon: "http://lorempixel.com/100/50/transport/2"},
		{name: "Car", type: "ground", icon: "http://lorempixel.com/100/50/transport/8"},
		{name: "Motorbike", type: "ground", icon: "http://lorempixel.com/100/50/transport/10"},
		{name: "Plane", type: "air", icon: "http://lorempixel.com/100/50/transport/1"},
		{name: "Train", type: "ground", icon: "http://lorempixel.com/100/50/transport/6"}],

	getValue: "name",

	template: {
		type: "description",
		fields: {
			description: "type"
		}
	}
};

$("#template-desc").easyAutocomplete(options);