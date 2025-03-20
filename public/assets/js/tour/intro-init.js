// Tour JS

(function() {
  "use strict";
  let isIntroInPage = document.querySelector('[data-intro]');
  let url = window.location.href;
  let intro_start = {
      init: function() {
          if (isIntroInPage) {
              if (!localStorage.getItem(url + '--introShown')) {
                  introJs().start();
                  localStorage.setItem(url + '--introShown', 'true');
              }
          }
      },
  };
  intro_start.init();
})();
