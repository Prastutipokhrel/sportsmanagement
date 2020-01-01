function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle('active');
}
/* ADDING EVENTS MODAL */
var modal = document.getElementById('add-events');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
/* Updating EVENTS MODAL */
var modal = document.getElementById('update');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}