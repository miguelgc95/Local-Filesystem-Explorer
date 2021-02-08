document.getElementById("new-folder").addEventListener("blur", request);
document.getElementById("upload-file").addEventListener("change", upload);

var divOrders = document.querySelectorAll("div[order]");
var clickOrders = document.querySelectorAll(".click");


divOrders.forEach(element => {
    let margingLeft = element.getAttribute("order")*16 - 16;
    element.style.marginLeft= `${margingLeft}px`;
});

clickOrders.forEach(element => {
    console.log(element);
    element.parentNode.addEventListener("click", togAndHide);
});

function togAndHide(e) {
    e.target.firstChild.classList.toggle("fa-caret-right");
    e.target.firstChild.classList.toggle("fa-caret-down");
}

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