const header = () => {
  document.addEventListener('DOMContentLoaded', function () {
    var toggle_buttons = document.querySelectorAll('header .header-toggle-js');
    if (toggle_buttons.length == 0) {
      return;
    }
    toggle_buttons.forEach((button) => {
      button.addEventListener('click', function () {
        const header_menu = document.querySelector('header .header__nav');
        if (!header_menu.length == 0) {
          return;
        }
        header_menu.classList.toggle('is-menu-open');
      });
    });
  });
};
export default header;
