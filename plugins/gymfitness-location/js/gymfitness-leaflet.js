document.addEventListener('DOMContentLoaded', () => {
	// Read hidden input fields
	const lat = document.querySelector('#lat').value;
	const long = document.querySelector('#lng').value;
	const address = document.querySelector('#address').value;

	if (lat && long) {
		// Add map
		var map = L.map('map').setView([lat, long], 16);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution:
				'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		}).addTo(map);

		L.marker([lat, long]).addTo(map).bindPopup(address).openPopup();
	}
});
