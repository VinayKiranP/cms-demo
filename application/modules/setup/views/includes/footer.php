
<script src="<?php echo BASE_PATH; ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo BASE_PATH; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_PATH; ?>assets/js/jquery-validate.js"></script>
<script src="<?php echo BASE_PATH; ?>assets/js/datatable.min.js"></script>
<script src="<?php echo BASE_PATH; ?>assets/js/custom.js"></script>

<script type="text/javascript">
  var windowURL = window.location.href;
  var pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
  var x = $('a[href="' + pageURL + '"]');
  x.addClass('active');
  x.parent().addClass('active');
  var y = $('a[href="' + windowURL + '"]');
  y.addClass('active');
  y.parent().addClass('active');
</script>
</body>

</html>