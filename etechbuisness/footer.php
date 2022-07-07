<footer class="footer pt-5 pb-5">
    <div class="container">
    <p>© Powered By Osman Şükrü Tandoğan & Samet Emin Kıvanç</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    const options = {
  bottom: '40px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '1s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: true, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
  }
    window.addEventListener('load', addDarkmodeWidget);
    //dark mode karanlık mod aktif etmek için // çizgilerini silin
</script>


<?php wp_footer(); ?>
</body>
</html>