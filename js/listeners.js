document.getElementById("new-folder").addEventListener("blur", request);
document.getElementById("upload-file").addEventListener("change", upload);
var divOrders = document.querySelectorAll("div[order]");

divOrders.forEach(element => {
    let margingLeft = element.getAttribute("order")*16 - 16;
    console.log(margingLeft);
    element.style.marginLeft= `${margingLeft}px`;
});

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