"use strict";

// Class definition
var KTStockList = (function () {
  // Define shared variables
  var datatable;
  var table;

  // Private functions
  var initStockList = function () {
    // Init datatable --- more info on datatables: https://datatables.net/manual/
    datatable = $(table).DataTable({
      info: false,
      order: [],
    });

    // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
    datatable.on("draw", function () {
      handleDeleteRows();
    });
  };

  // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
  var handleSearchDatatable = () => {
    const filterSearch = document.querySelector(
      '[data-kt-stock-table-filter="search"]'
    );
    filterSearch.addEventListener("keyup", function (e) {
      datatable.search(e.target.value).draw();
    });
  };

  // Delete customer
  var handleDeleteRows = () => {
    // Select all delete buttons
    const deleteButtons = table.querySelectorAll(
      '[data-kt-stock-table-filter="delete_row"]'
    );

    deleteButtons.forEach((d) => {
      // Delete button on click
      d.addEventListener("click", function (e) {
        e.preventDefault();

        // Select parent row
        const parent = e.target.closest("tr");

        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
        Swal.fire({
          text: "Are you sure you want to delete ?",
          icon: "warning",
          showCancelButton: true,
          buttonsStyling: false,
          confirmButtonText: "Yes, delete!",
          cancelButtonText: "No, cancel",
          customClass: {
            confirmButton: "btn fw-bold btn-danger",
            cancelButton: "btn fw-bold btn-active-light-primary",
          },
        }).then(function (result) {
          if (result.value) {
            Swal.fire({
              text: "You have deleted!.",
              icon: "success",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn fw-bold btn-primary",
              },
            }).then(function () {
              // Remove current row
              datatable.row($(parent)).remove().draw();
            });
          } else if (result.dismiss === "cancel") {
            Swal.fire({
              text: " was not deleted.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn fw-bold btn-primary",
              },
            });
          }
        });
      });
    });
  };

  // Public methods
  return {
    init: function () {
      table = document.querySelector("#kt_stock_table");

      if (!table) {
        return;
      }

      initStockList();
      handleSearchDatatable();
      handleDeleteRows();
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTStockList.init();
});
