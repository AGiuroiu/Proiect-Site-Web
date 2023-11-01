// Contact Buton Function

function openModal() {
	document.getElementById("contact-modal").style.display = "block";
}

function closeModal() {
	document.getElementById("contact-modal").style.display = "none";
}

// Inchide fereastra modala atunci cand utilizatorul face clic in afara zonei modale
window.onclick = function(event) {
	var modal = document.getElementById("contact-modal");
	if (event.target == modal) {
		closeModal();
	}
}