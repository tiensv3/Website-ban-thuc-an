function filterOrders() {
  var selectedStatus = document.getElementById("statusFilter").value;

  if (selectedStatus !== "") {
    window.location.href = "donhang.php?status=" + selectedStatus;
  } else {
    window.location.href = "donhang.php";
  }
}
