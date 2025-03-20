<!-- Required vendors -->
<script src="{{ asset('backend/asset/vendor/global/global.min.js')}}"></script>
<script src="{{ asset('backend/asset/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('backend/asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{ asset('backend/asset/vendor/apexchart/apexchart.js')}}"></script>

<script src="{{ asset('backend/asset/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('backend/asset/vendor/peity/jquery.peity.min.js')}}"></script>
<script src="{{ asset('backend/asset/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/asset/js/plugins-init/datatables.init.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('backend/asset/js/dashboard/dashboard-1.js')}}"></script>

<script src="{{ asset('backend/asset/vendor/owl-carousel/owl.carousel.js')}}"></script>

<script src="{{ asset('backend/asset/js/custom.min.js')}}"></script>
<script src="{{ asset('backend/asset/js/dlabnav-init.js')}}"></script>

<script src="{{asset('backend/asset/js/custom.min.js')}}"></script>
<script src="{{asset('backend/asset/js/dlabnav-init.js')}}"></script>
<script src="https://cdn.tailwindcss.com"></script>


<script>
  function JobickCarousel() {

    /*  testimonial one function by = owl.carousel.js */
    jQuery('.front-view-slider').owlCarousel({
      loop: false,
      margin: 30,
      nav: true,
      autoplaySpeed: 3000,
      navSpeed: 3000,
      autoWidth: true,
      paginationSpeed: 3000,
      slideSpeed: 3000,
      smartSpeed: 3000,
      autoplay: false,
      animateOut: 'fadeOut',
      dots: true,
      navText: ['', ''],
      responsive: {
        0: {
          items: 1
        },

        480: {
          items: 1
        },

        767: {
          items: 3
        },
        1750: {
          items: 3
        }
      }
    })
  }

  jQuery(window).on('load', function () {
    setTimeout(function () {
      JobickCarousel();
    }, 1000);
  });
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
<script>
  $(document).on("click", ".apply-job", function () {
    $("#exampleModal").modal("show");
  });

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

</script>
<script>
  let fileQueue = [];

  document
    .getElementById("single-file-btn")
    .addEventListener("click", () => {
      document.getElementById("single-file-input").click();
    });

  document
    .getElementById("multiple-file-btn")
    .addEventListener("click", () => {
      document.getElementById("multiple-file-input").click();
    });

  function handleSingleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
      addFileToQueue(file);
    }
  }

  function handleMultipleFileUpload(event) {
    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
      addFileToQueue(files[i]);
    }
  }

  function formatFileSize(size) {
    const units = ["B", "KB", "MB", "GB", "TB"];
    let unitIndex = 0;
    while (size >= 1024 && unitIndex < units.length - 1) {
      size /= 1024;
      unitIndex++;
    }
    return `${size.toFixed(1)} ${units[unitIndex]}`;
  }

  function addFileToQueue(file) {
    const fileQueueElement = document.getElementById("file-queue");
    const emptyRow = document.getElementById("empty-row");
    if (emptyRow) {
      emptyRow.remove();
    }

    const newRow = document.createElement("tr");
    newRow.innerHTML = `
          <td class="py-2 px-4 border-b text-sm sm:text-base">${file.name
      }</td>
          <td class="py-2 px-4 border-b text-sm sm:text-base">${formatFileSize(
        file.size
      )}</td>
          <td class="py-2 px-4 border-b text-sm sm:text-base">
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-purple-600 h-2.5 rounded-full" style="width: 0%;"></div>
              </div>
          </td>
          <td class="py-2 px-4 border-b text-sm sm:text-base">Pending</td>
          <td class="py-2 px-4 border-b text-sm sm:text-base">
              <button class="bg-purple-600 text-white px-2 py-1 rounded-full text-xs" onclick="uploadFile(this)">Upload</button>
              <button class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs" onclick="cancelFile(this)">Cancel</button>
              <button class="bg-red-600 text-white px-2 py-1 rounded-full text-xs" onclick="removeFile(this)">Remove</button>
          </td>
      `;
    fileQueueElement.appendChild(newRow);
    fileQueue.push(file);

    // Enable buttons
    document.getElementById("upload-all").disabled = false;
    document.getElementById("cancel-all").disabled = false;
    document.getElementById("remove-all").disabled = false;
  }

  function uploadFile(button) {
    const row = button.closest("tr");
    const progressBar = row.querySelector(".bg-purple-600");
    const statusCell = row.querySelector("td:nth-child(4)");
    progressBar.style.width = "100%";
    statusCell.textContent = "Uploaded";
  }

  function cancelFile(button) {
    const row = button.closest("tr");
    const progressBar = row.querySelector(".bg-purple-600");
    const statusCell = row.querySelector("td:nth-child(4)");
    progressBar.style.width = "0%";
    statusCell.textContent = "Cancelled";
  }

  function removeFile(button) {
    const row = button.closest("tr");
    row.remove();
    fileQueue = fileQueue.filter(
      (file) => file.name !== row.querySelector("td").textContent
    );
    if (fileQueue.length === 0) {
      const fileQueueElement = document.getElementById("file-queue");
      const emptyRow = document.createElement("tr");
      emptyRow.id = "empty-row";
      emptyRow.classList.add("bg-gray-200");
      emptyRow.innerHTML = `<td class="py-2 px-4 border-b text-sm sm:text-base" colspan="5">Que is empty</td>`;
      fileQueueElement.appendChild(emptyRow);

      // Disable buttons
      document.getElementById("upload-all").disabled = true;
      document.getElementById("cancel-all").disabled = true;
      document.getElementById("remove-all").disabled = true;
    }
  }

  function uploadAllFiles() {
    const rows = document.querySelectorAll("#file-queue tr");
    rows.forEach((row) => {
      const uploadButton = row.querySelector("button.bg-purple-600");
      if (uploadButton) {
        uploadFile(uploadButton);
      }
    });
  }

  function cancelAllFiles() {
    const rows = document.querySelectorAll("#file-queue tr");
    rows.forEach((row) => {
      const cancelButton = row.querySelector("button.bg-yellow-500");
      if (cancelButton) {
        cancelFile(cancelButton);
      }
    });
  }

  function removeAllFiles() {
    const rows = document.querySelectorAll("#file-queue tr");
    rows.forEach((row) => {
      const removeButton = row.querySelector("button.bg-red-600");
      if (removeButton) {
        removeFile(removeButton);
      }
    });
  }

  // Drag and drop functionality
  const dropZone = document.getElementById("drop-zone");

  dropZone.addEventListener("dragover", (event) => {
    event.preventDefault();
    dropZone.classList.add("bg-gray-200");
  });

  dropZone.addEventListener("dragleave", () => {
    dropZone.classList.remove("bg-gray-200");
  });

  dropZone.addEventListener("drop", (event) => {
    event.preventDefault();
    dropZone.classList.remove("bg-gray-200");
    const files = event.dataTransfer.files;
    for (let i = 0; i < files.length; i++) {
      addFileToQueue(files[i]);
    }
  });
</script>