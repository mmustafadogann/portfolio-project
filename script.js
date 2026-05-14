function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");

    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

// DARK MODE TOGGLE

const themeToggle = document.getElementById("theme-toggle");
const mobileThemeToggle = document.getElementById("mobile-theme-toggle");

function updateThemeButtons() {
    if (document.body.classList.contains("dark-mode")) {
        if (themeToggle) themeToggle.textContent = "Light Mode";
        if (mobileThemeToggle) mobileThemeToggle.textContent = "Light Mode";
    } else {
        if (themeToggle) themeToggle.textContent = "Dark Mode";
        if (mobileThemeToggle) mobileThemeToggle.textContent = "Dark Mode";
    }
}

function toggleTheme() {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }

    updateThemeButtons();
}

if (themeToggle) {
    themeToggle.addEventListener("click", toggleTheme);
}

if (mobileThemeToggle) {
    mobileThemeToggle.addEventListener("click", toggleTheme);
}

if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
}

updateThemeButtons();

// AJAX: Load projects from MySQL database

document.addEventListener("DOMContentLoaded", function () {
    const projectsContainer = document.getElementById("projectsContainer");

    if (!projectsContainer) {
        console.log("projectsContainer bulunamadı.");
        return;
    }

    fetch("get_projects.php")
        .then(function (response) {
            return response.json();
        })
        .then(function (projects) {
            console.log("Projects data:", projects);

            projectsContainer.innerHTML = "";

            if (projects.length === 0) {
                projectsContainer.innerHTML = "<p>No projects found.</p>";
                return;
            }

            projects.forEach(function (project) {
                projectsContainer.innerHTML += `
                    <div class="project-card">
                        <h2>${project.title}</h2>
                        <p>${project.description}</p>
                        <p class="project-tech">${project.technologies}</p>

                        <div class="btn-container">
                            <a class="btn btn-color-2" href="${project.github_link}" target="_blank">
                                GitHub
                            </a>

                            <a class="btn btn-color-1" href="${project.demo_link}" target="_blank">
                                Demo
                            </a>
                        </div>
                    </div>
                `;
            });
        })
        .catch(function (error) {
            console.log("Projects loading error:", error);
            projectsContainer.innerHTML = "<p>Projects could not be loaded.</p>";
        });
});