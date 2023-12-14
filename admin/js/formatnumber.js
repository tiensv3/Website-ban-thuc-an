$(document).ready(function () {
  $(".number-input").on("input", function () {
    formatNumber($(this));
  });

  function formatNumber(input) {
    let value = input.val().replace(/[^0-9.]/g, ""); // Allow digits and dots

    // Check if the value is NaN or an empty string and replace it with 0
    if (isNaN(value) || value === "") {
      value = 0;
    } else {
      // Check if there is a dot, then format only the part before the dot
      if (value.includes(".")) {
        let parts = value.split(".");
        parts[0] = parseFloat(parts[0]).toLocaleString("en-US", {
          maximumFractionDigits: 0,
        });
        value = parts.join(".");
      } else {
        value = parseFloat(value).toLocaleString("en-US");
      }
    }

    input.val(value);
  }
});
