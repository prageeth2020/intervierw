//hide the textbox which will get the URL of the saved image once the image saved in the firebase storage
document.getElementById("imgURL").style.display = "none";

//Hide the loading icon which will show while the image saving in tha firebase storage
document.getElementById("loadingSection").style.display = "none";


//trigger this when user (admin) upload a imge
//This will save the image in firebase storage and get  the downloadable URl
function fileUpload() {
	//This will be the loading icon , will show until the image save successfully in firebase storage and when it retun the
	//Downladable URL this loading will disappear
	document.getElementById("loadingSection").style.display = "block";
	
	//get the file which upload by the Admin/the user
	var file = document.getElementById("image").files[0];
	//get fil name of uploaded file
	var filename = file.name;
	
	//get storage instace of firebase storage
	var storageRef = firebase.storage().ref(filename)
	
	//save the image in forebase storage and get downloadable URL
	storageRef.put(file).then(function () {
		storageRef.getDownloadURL().then(function (result) {
			console.log(result);
			//disapper the loiading icon
			document.getElementById("loadingSection").style.display = "none";
			//put the doaliad URL in hidden textbox
			document.getElementById("imgURL").value = result;
		});
	});
}