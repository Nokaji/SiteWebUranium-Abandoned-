function popupDownload(){
	document.getElementById("connexion").style.visibility = "visible";
	document.getElementById("popup_download").style.position = "fixed";
	document.getElementById('popup_download').style.top = "0";
	document.getElementById("popup_download").style.left = "0";
	document.getElementById("popup_download").style.height = "100%";
	document.getElementById("popup_download").style.width = "100%";
	document.getElementById("popup_download").style.background = "rgba(0, 0, 0, 0.8)";
}
function popupCloseDownload(){
	document.getElementById("connexion").style.visibility = "hidden";
	document.getElementById("popup_download").style.position = "relative";
	document.getElementById('popup_download').style.top = "0";
	document.getElementById('popup_download').style.left = "0";
	document.getElementById("popup_download").style.height = "0%";
	document.getElementById("popup_download").style.width = "0%";
	document.getElementById("popup_download").style.background = "white";
}