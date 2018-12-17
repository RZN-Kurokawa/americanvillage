export default class slider {
  init() {
    this.hero();
  }
  hero(){
    $('.p-hero_slider').slick({
      autoplay: true,
      speed: 3000,
      fade: true,
      dots: false,
      infinite: true,
      arrows: false
    });
  }
}