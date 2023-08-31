deleteEmployee = document.getElementById("deleteEmployee");

deleteEmployee.addEventListener("click", ()=> {

    let confirmDelete = confirm("Estas seguro de que deseas eliminar a este empleado?");
    if (confirmDelete) {
        return true;
    } else {
        return false;
    }
})
