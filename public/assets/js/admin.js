document.addEventListener("DOMContentLoaded", () => {
    // Sidebar Toggle
    const sidebarToggle = document.getElementById("sidebarToggle")
    const sidebar = document.getElementById("sidebar")
    const mainContent = document.querySelector(".main-content")

    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("active")
        })
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener("click", (event) => {
        if (window.innerWidth < 992) {
            if (
                !sidebar.contains(event.target) &&
                !sidebarToggle.contains(event.target) &&
                sidebar.classList.contains("active")
            ) {
                sidebar.classList.remove("active")
            }
        }
    })

    // Sidebar Collapse Button
    const sidebarCollapseBtn = document.getElementById("sidebarCollapseBtn")

    if (sidebarCollapseBtn) {
        sidebarCollapseBtn.addEventListener("click", () => {
            sidebar.classList.remove("active")
        })
    }

    // Submenu Toggle
    const submenuToggles = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]')

    submenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault()
            const submenuId = this.getAttribute("href")
            const submenu = document.querySelector(submenuId)

            // Close other open submenus
            document.querySelectorAll(".nav-submenu.show").forEach((menu) => {
                if (menu.id !== submenuId.substring(1)) {
                    menu.classList.remove("show")
                    const menuToggle = document.querySelector(`[href="#${menu.id}"]`)
                    menuToggle.classList.add("collapsed")
                    menuToggle.setAttribute("aria-expanded", "false")
                }
            })

            // Toggle current submenu
            submenu.classList.toggle("show")
            this.classList.toggle("collapsed")

            const isExpanded = this.classList.contains("collapsed") ? "false" : "true"
            this.setAttribute("aria-expanded", isExpanded)
        })
    })

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl))

    // Responsive adjustments
    function handleResize() {
        if (window.innerWidth < 992) {
            sidebar.classList.remove("active")
        }
    }

    window.addEventListener("resize", handleResize)

    // Add active class to current page
    const currentLocation = window.location.href
    const menuItems = document.querySelectorAll(".nav-link")

    menuItems.forEach((item) => {
        if (item.href === currentLocation) {
            item.classList.add("active")

            // If it's a submenu item, expand the parent
            const parent = item.closest(".nav-submenu")
            if (parent) {
                parent.classList.add("show")
                const parentToggle = document.querySelector(`[href="#${parent.id}"]`)
                parentToggle.classList.remove("collapsed")
                parentToggle.setAttribute("aria-expanded", "true")
            }
        }
    })
})
