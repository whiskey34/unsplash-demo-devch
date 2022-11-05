function pass_id_to_modal(id) {
    var delete_button = document.getElementById("modalDeleteImg");
    delete_button.href = "/delete/" + id;
}