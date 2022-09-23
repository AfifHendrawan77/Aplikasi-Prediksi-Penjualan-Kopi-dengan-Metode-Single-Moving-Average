
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer form_per">
    <div class="copyright">
      &copy; Copyright <strong><span>Kamyusi kafetaria</span></strong>. All Rights Reserved
    </div>
      
  </footer><!-- End Footer -->

  <a href="<?= base_url(''); ?>/template_admin/#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  
  <!-- Vendor JS Files -->
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url(''); ?>/template_admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(''); ?>/template_admin/assets/js/main.js">
</script>

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseFloat(txtFirstNumberValue) - parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>

<script>
function sum1() {
      var txtFirstNumberValue = document.getElementById('txt11').value;
      var txtSecondNumberValue = document.getElementById('txt22').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt33').value = result;
      }
}
</script>

<script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>