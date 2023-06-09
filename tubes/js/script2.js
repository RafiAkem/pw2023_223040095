const keyword = document.getElementById('keyword');
const adminSearch = document.getElementById('adminSearch');

keyword.onkeyup = function () {
    fetch('ajax/search2.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((text) => (adminSearch.innerHTML = text));
    };
