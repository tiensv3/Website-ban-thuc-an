function updateClock() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  // Định dạng giờ để có hai chữ số
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  var timeString = hours + ":" + minutes + ":" + seconds;

  // Hiển thị thời gian trong phần tử có id là 'clock'
  document.getElementById("clock").innerHTML = timeString;

  // Cập nhật mỗi giây (1000 milliseconds)
  setTimeout(updateClock, 1000);
}

// Gọi hàm để bắt đầu cập nhật thời gian
updateClock();
