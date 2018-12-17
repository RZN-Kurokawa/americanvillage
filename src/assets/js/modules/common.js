export default class common {
  init() {
    this.tellink();
  }
  getWindowSize() {
    let ua = navigator.userAgent.toLowerCase(),
        ios92 =  /(iphone|ipod|ipad).* os 9_2/.test(ua);//iOS9.2系でwidth,heightが違う値で返ってくるためそれ用
    let wW = (ios92) ? document.documentElement.clientWidth : window.innerWidth,
        wH = (ios92) ? document.documentElement.clientHeight : window.innerHeight;
    return {
      'width': wW,
      'height': wH
    }
  }
  getEnvironment() {
    const userAgent = window.navigator.userAgent.toLowerCase();
    const appVersion = window.navigator.appVersion.toLowerCase();
    let browser, device, software, media;
    //ブラウザ
    if (userAgent.indexOf("msie") != -1) {
      if (appVersion.indexOf("msie 9.") != -1) {
        browser = 'ie9';
      } else if (appVersion.indexOf("msie 10.") != -1) {
        browser = 'ie10';
      } else {
        browser = 'ie';
      }
    } else if (userAgent.indexOf('chrome') != -1) {
      browser = 'chrome';
    } else if (userAgent.indexOf('safari') != -1) {
      browser = 'safari';
    } else if (userAgent.indexOf('gecko') != -1) {
      browser = 'gecko';
    } else {
      browser = false;
    }
    //デバイス
    if (userAgent.indexOf('ipad') > 0 || userAgent.indexOf('android') > 0 && userAgent.indexOf('mobile') < 0) {
      device = 'tab';
    } else if (userAgent.indexOf('iphone') > 0 || userAgent.indexOf('iPod') > 0 || userAgent.indexOf('android') > 0) {
      device = 'sp';
    } else {
      device = 'pc';
    }
    //OS
    if(userAgent.indexOf('android') > 0){
      software = 'android';
    } else if (userAgent.indexOf('iphone') > 0 || userAgent.indexOf('iPod') > 0 || userAgent.indexOf('ipad') > 0) {
      software = 'ios';
    } else if (userAgent.indexOf('windows') > 0) {
      software = 'windows';
    } else if (userAgent.indexOf('Mac') > 0) {
      software = 'mac';
    }
    //画面幅(media)
    if (browser === 'ie9') {
      media = ($('body').css('min-width') == '100%') ? 'sp' : 'pc';
    } else {
      media = (window.matchMedia('(max-width:767px)').matches) ? 'sp' : 'pc';
    }
    return {
      'browser': browser,
      'device': device,
      'software': software,
      'media': media
    }
  }
  tellink() {
    const self = this;
    $('a[href^="tel:"]').on('click', function(event) {
      self.getEnvironment().media === 'pc' && event.preventDefault();
    });
  }
}