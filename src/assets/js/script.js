import _common from "./modules/common";
import _slider from "./modules/slider";
import _menu from "./modules/menu";

//common
const common = new _common();
const device = common.getEnvironment().device;
common.init();

//slider
const slider = new _slider();
slider.init();

//menu
const menu = new _menu({
  device: device,
});
menu.init();
