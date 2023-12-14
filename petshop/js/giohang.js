function updateQuantity(giohangID, quantityChange) {
  var quantityElement = document.querySelector(
    '.quantity[data-product-id="' + giohangID + '"]'
  );
  var currentQuantity = parseInt(quantityElement.innerText);

  // Kiểm tra số lượng mới
  if (currentQuantity + quantityChange > 0) {
    // Gửi yêu cầu AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "capnhatslgiohang.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Gửi dữ liệu
    var data = "giohangID=" + giohangID + "&quantityChange=" + quantityChange;
    xhr.send(data);

    // Xử lý kết quả sau khi nhận được phản hồi từ server (nếu cần)
    xhr.onload = function () {
      if (xhr.status == 200) {
        // Cập nhật số lượng trên giao diện
        var response = JSON.parse(xhr.responseText);
        quantityElement.innerText = response.newQuantity;
        // Cập nhật tổng cộng
        updateTotal();
      }
    };
  }
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeProduct(giohangID) {
  // Gửi yêu cầu AJAX để xóa sản phẩm khỏi giỏ hàng
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "xoagiohang.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Gửi dữ liệu
  var data = "giohangID=" + giohangID;
  xhr.send(data);

  // Xử lý kết quả sau khi nhận được phản hồi từ server
  xhr.onload = function () {
    if (xhr.status == 200) {
      // Cập nhật số lượng trên giao diện
      var response = JSON.parse(xhr.responseText);

      if (response.success) {
        // Thực hiện xóa sản phẩm trên giao diện
        var row = document.querySelector(
          '.quantity[data-product-id="' + giohangID + '"]'
        ).parentNode.parentNode;
        row.parentNode.removeChild(row);

        // Cập nhật tổng cộng
        updateTotal();
      } else {
        console.error("Lỗi khi xóa sản phẩm khỏi giỏ hàng");
      }
    }
  };
}

// Hàm cập nhật tổng cộng
function updateTotal() {
  var totalPrice = 0;
  var giabanElements = document.querySelectorAll(".giaban");
  var quantityElements = document.querySelectorAll(".quantity");

  // Tính tổng cộng dựa trên giá bán và số lượng
  for (var i = 0; i < giabanElements.length; i++) {
    var giaban = parseFloat(
      giabanElements[i].innerText.replace(" VND", "").replace(/,/g, "")
    );
    var quantity = parseInt(quantityElements[i].innerText);
    totalPrice += giaban * quantity;
  }

  // Hiển thị tổng cộng trên giao diện
  var totalPriceElement = document.getElementById("totalPrice");
  totalPriceElement.innerText = formatCurrency(totalPrice);
}

// Hàm định dạng số tiền thành định dạng tiền tệ VND
function formatCurrency(value) {
  return value.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
}
function placeOrder() {
  var formData = {
    SanPhamID: [],
    TongTien: 0,
    SoLuong: [],
    Gia: [],
  };

  document
    .querySelectorAll('input[name^="SanPhamID"]')
    .forEach(function (input) {
      formData.SanPhamID.push(input.value);
    });

  document
    .querySelectorAll('input[name^="TongTien"]')
    .forEach(function (input) {
      formData.TongTien += parseFloat(input.value);
    });

  document.querySelectorAll('input[name^="SoLuong"]').forEach(function (input) {
    formData.SoLuong.push(input.value);
  });

  document.querySelectorAll('input[name^="Gia"]').forEach(function (input) {
    formData.Gia.push(input.value);
  });

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "xulydathang.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");

  var jsonData = JSON.stringify(formData);
  xhr.send(jsonData);

  xhr.onload = function () {
    if (xhr.status == 200) {
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        alert("Đặt hàng thành công!");
        window.location.reload();
      } else {
        alert("Lỗi khi đặt hàng: " + response.message);
      }
    }
  };
}
