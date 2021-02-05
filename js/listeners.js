document.getElementById("new-folder").addEventListener("blur", request);

function request() {
    var whereToSave = document.getElementById("new-folder").getAttribute("query");
    var newNameToSave = document.getElementById("new-folder").value;
    var data ={
        query: whereToSave,
        newName: newNameToSave,
    }
    axios.post("./php/create-folder.php", JSON.stringify(data))
    .then(response => {
        // console.log(`http://127.0.0.1/Local-Filesystem-Explorer/${data.query}`);
        // axios.get("http://127.0.0.1/Local-Filesystem-Explorer/?dir=%2Fmain+folder%2Fnuevisima")
        location.reload();
        console.log(response);
    }).catch(error => {
        console.log(error);
    })
}