

class DropdownMenu {
  constructor() {
    this.dropdown = document.querySelector(".menu");
    this.submenu = document.querySelector(".sub-menu");
    this.button = document.querySelector(".check-button");
    this.hamburger = document.querySelector(".menu-icon");

    this.bindEvents();
  }

  bindEvents() {
    if (!this.button) return;

    this.button.addEventListener("click", () => {
      this.dropdown?.classList.toggle("show-dropdown");
      this.submenu?.classList.toggle("show-dropdown");
      this.hamburger?.classList.toggle("animate-button");
    });
  }
}

// initialize
new DropdownMenu();
