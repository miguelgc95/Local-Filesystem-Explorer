document.getElementById("new-folder").addEventListener("blur", request);
document.getElementById("upload-file").addEventListener("change", upload);

var divOrders = document.querySelectorAll("div[order]");
var clickOrders = document.querySelectorAll(".click");


divOrders.forEach(element => {
    let margingLeft = element.getAttribute("order")*16 - 16;
    element.style.marginLeft= `${margingLeft}px`;
    if (element.getAttribute("order")>1){
        element.classList.add("hidden");
    }
});

clickOrders.forEach(element => {
    element.parentNode.addEventListener("click", togAndHide);
});

function togAndHide(e) {
    e.target.firstChild.classList.toggle("fa-caret-right");
    e.target.firstChild.classList.toggle("fa-caret-down");
    hideSibling(e.target.parentNode);
}

function hideSibling(origin) {
    var treeChilds = document.getElementsByClassName("tree-section")[0].children;
    let i = 0;
    let index = 10000;
    while (i<treeChilds.length) {
        console.log(treeChilds[i]);
        console.log(origin.getAttribute("order"));
        console.log(treeChilds[i].getAttribute("order"));
        if (origin.getAttribute("me") == treeChilds[i].getAttribute("me")){
            index = i;

        console.log(origin.getAttribute("me"));
        console.log(treeChilds[i].getAttribute("me"));
        }
        if (i>index && origin.getAttribute("order")<treeChilds[i].getAttribute("order")){
            treeChilds[i].classList.toggle("hidden");
        }else if (i>index && origin.getAttribute("order") >= treeChilds[i].getAttribute("order")) {

        console.log(index);
        console.log(i);
            break;
        }
        i++;
    }
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