'use strict';

let arrayButtons = document.getElementsByClassName
('modify-button');

for (const button of arrayButtons) {
    button.addEventListener('click', printModal);
}

function printModal(e) {
    const modalSection = document.getElementById('modal-section');
    const oldNameFolder = this.name;
    e.preventDefault();

    modalSection.classList.toggle("hidden");
    modalSection.innerHTML = `
    <section class="modal-content-section">
        <div class="closed-modal"><span id="closed-modal">x</span></div>
        <section class="modal-content">

            <form class="form-display" method="post" action="./php/modify-folder.php">
                <input type="hidden" name="oldName" value=${oldNameFolder}>
                <label for="renameFolder">Rename a folder or file: </label>
                <input type="text" id="renameFolder"  class="renameFolder" name="renameFolder" value="">
                <input class="submit-button" type="submit" value="Submit">
            </form>

        </section>
    </section>`;

    document.getElementById('closed-modal').addEventListener('click', function (){
        console.log('cierrate!');
        modalSection.classList.toggle("hidden");
        closeModal.removeEventListener('click', clickCloseModal);
    });

    document.getElementById('submit-button').addEventListener('click', requestRename);
}

function requestRename() {
axios.post("./php/modify-folder.php", JSON.stringify(renameFolder))
    .then(response => {
        location.reload();
        console.log(response);
    }).catch(error => {
        console.log(error);
    })
}
