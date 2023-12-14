$(document).ready(function () {
  $("#dataTableexample").DataTable({
    order: [[0, "desc"]], // Sắp xếp theo cột đầu tiên (index 0) theo thứ tự giảm dần
  });
});
$(document).ready(function () {
  $("#dataTableexample2").DataTable({
    order: [[1, "desc"]], // Sắp xếp theo cột đầu tiên (index 0) theo thứ tự giảm dần
  });
});
$(document).ready(function () {
  $("#dataTableexample1").DataTable({
    order: [[4, "desc"]], // Sắp xếp theo cột đầu tiên (index 0) theo thứ tự giảm dần
  });
});
