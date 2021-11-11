function select(params) {
    var name1 = document.getElementById('inputState');
    if (name1.value.length === 1) {
        document.getElementById('giamgia').disabled = false;
        document.getElementById('giamgia1').disabled = true;
    } else {
        document.getElementById('giamgia').disabled = true;
        document.getElementById('giamgia1').disabled = false;
    }
}