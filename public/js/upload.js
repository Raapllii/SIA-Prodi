document
    .getElementById("single-file-btn")
    .addEventListener("click", function () {
        document.getElementById("single-file-input").click();
    });

function handleSingleFileUpload(event) {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append("file", file);

    fetch("/file-upload", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert("File uploaded successfully.");
            } else {
                alert("File upload failed.");
            }
        })
        .catch((error) => console.error("Error:", error));
}
