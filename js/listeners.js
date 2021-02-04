document.getElementById("new-folder").addEventListener("blur", request);

function request() {
    var whereToSave = document.getElementById("new-folder").getAttribute("query");
    var newNameToSave = document.getElementById("new-folder").value;
    var data ={
        query: whereToSave,
        newName: newNameToSave,
    }
    axios.post("http://127.0.0.1/Local-Filesystem-Explorer/php/create-folder.php", JSON.stringify(data))
    .then(response => {
        console.log(response);
    }).catch(error => {
        console.log("error");
    })
}