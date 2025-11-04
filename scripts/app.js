document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggleSize");
  const sizeSection = document.getElementById("sizeSection");

  if (toggleBtn && sizeSection) {
    toggleBtn.addEventListener("click", () => {
      const isActive = sizeSection.classList.toggle("active");
      sizeSection.style.display = isActive ? "block" : "none";
      toggleBtn.textContent = isActive ? "– بستن اطلاعات سایز" : "+ اطلاعات سایز";
    });
  }

  // فعال‌سازی تقویم شمسی برای فیلدهای تاریخ با jQuery
  $(".datepicker").persianDatepicker({
    format: "YYYY/MM/DD",
    initialValue: false,
    calendar: {
      persian: {
        locale: "fa"
      }
    }
  });
});
