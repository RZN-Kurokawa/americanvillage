export default class menu {
  constructor(opt = {}) {
    this.device = opt.device;
  }
  init() {
    this.menuOpen();
  }
  menuOpen() {
    const self = this;
    const device = self.device;
    if(device === 'sp'){
      const $menu = $('.l-header_menu_wrap');
      const $trigger = $('.js-navbar_trigger');
      $(document).on('click touchend', '.js-navbar_trigger', function(event) {
        event.preventDefault();
        $trigger.toggleClass('is_open');
        $menu.toggleClass('is_open');
        $('html, body').toggleClass('is_navbaropen');
      });
    }
  }
}