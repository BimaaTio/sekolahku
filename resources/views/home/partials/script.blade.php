<script src="{{ asset('js/app.js') }}"></script>
<script src="/sb/vendor/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
  AOS.init({
    mirroring: true
  })
  new Splide('.splide', {
    autoplay: true,
    rewind: true,
  }).mount();




  // fn send mail
  (function() {
    emailjs.init("gVyNaDiy1Xocm2JOi");
  })();

  function sendMail() {
    const templateParams = {
      name: document.getElementById('name').value,
      mail: document.getElementById('email').value,
      email: 'bimaatio10@gmail.com',
      pesan: document.getElementById('pesan').value,
    };

    const serviceId = 'service_76zhode';
    const tempId = 'template_jc1fa17';

    emailjs.send(serviceId, tempId, templateParams).then(res => {
      document.getElementById('name').value = "";
      document.getElementById('email').value = "";
      document.getElementById('pesan').value = "";
      console.log(res);
      Swal.fire({
        icon: 'success',
        title: 'Good !',
        text: 'Pesan Berhasil dikirim!',
      });
    }).catch(err => {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!'
      })
      console.log(err);
    });
  }
</script>