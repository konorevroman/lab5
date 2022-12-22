
function DeleteItemById(id) {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            console.log('deleted element with id = ' + id);
        }
    }
    xhttp.open("POST", "base/delete.php?id=" + id)
    xhttp.send();

    const dellCard = document.getElementById('product-' + id).parentElement;
    dellCard.parentElement.removeChild(dellCard);
}