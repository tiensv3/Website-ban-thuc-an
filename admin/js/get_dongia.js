function triggerChange() {
  var selectedProductId = document.getElementById("sanpham").value;
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_dongia.php?id=" + selectedProductId, true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var dongiaValue = xhr.responseText;
      document.getElementById("dongia").value = dongiaValue;
    }
  };
  xhr.send();
}

window.onload = function () {
  triggerChange();
};

document.getElementById("sanpham").addEventListener("change", function () {
  triggerChange();
});
