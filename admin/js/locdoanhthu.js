document.addEventListener("DOMContentLoaded", function () {
  // Lắng nghe sự kiện thay đổi của input ngày
  document.getElementById("dateFilter").addEventListener("change", function () {
    // Chuyển hướng trang với tham số dateFilter được thiết lập
    window.location.href = "doanhthu.php?dateFilter=" + this.value;
  });
});
