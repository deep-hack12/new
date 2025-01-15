// Modal functionality
function showModal(projectId) {
    const modal = document.getElementById("project-modal");
    const details = document.getElementById("project-details");
    
    if (projectId === 1) {
        details.innerHTML = "Detailed information about Project 1...";
    }
    modal.style.display = "flex";
}

function closeModal() {
    document.getElementById("project-modal").style.display = "none";
}

// Form validation
function validateForm() {
    const form = document.getElementById('contact-form');
    const name = form.name.value;
    const mobile = form.mobile.value;
    const email = form.email.value;
    const message = form.message.value;

    if (name === "" || mobile === "" || email === "" || message === "") {
        alert("Please fill out all required fields.");
        return false;
    }
    alert("Form submitted successfully!");
    return true;
}

// Dark Mode Toggle
const toggleDarkMode = () => {
    document.body.classList.toggle("dark-mode");
    localStorage.setItem("dark-mode", document.body.classList.contains("dark-mode"));
};

window.addEventListener("DOMContentLoaded", () => {
    const savedMode = localStorage.getItem("dark-mode");
    if (savedMode === "enabled") {
        document.body.classList.add("dark-mode");
    }
});
