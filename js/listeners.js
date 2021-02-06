document.getElementById("new-folder").addEventListener("blur", request);
document.getElementById("upload-file").addEventListener("change", upload);

function request() {
    var whereToSave = document.getElementById("new-folder").getAttribute("query");
    var newNameToSave = document.getElementById("new-folder").value;
    var data ={
        query: whereToSave,
        newName: newNameToSave,
    }
    axios.post("./php/create-folder.php", JSON.stringify(data))
    .then(response => {
        location.reload();
        console.log(response);
    }).catch(error => {
        console.log(error);
    })
}

function upload() {
    document.getElementById("upload-form").submit();
}