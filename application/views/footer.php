<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?></div>

<script src="<?php echo base_url('bootadmin/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/fullcalendar.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootadmin.min.js'); ?>"></script>

<?php if($this->uri->segment(1)=="umat" || $this->uri->segment(1)=="inventaris" || $this->uri->segment(1)=="lingkungan" || $this->uri->segment(1)=="wilayah"){ ?>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/demo/datatables-demo.js'); ?>"></script>

<?php } ?>
<!-- Bootstrap Confirmation JavaScript-->
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap-confirmation.min.js'); ?>"></script>
<script>
  $('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
  // other options,
  });
  $('[data-toggle="tooltip"]').tooltip();
</script>
<?php if($this->uri->segment(1)=='inventaris'){ ?>
<script type="text/javascript" src="<?php echo base_url('bootadmin/js/bootstrap-filestyle.js'); ?>"></script>
<script>
  function validate() {
    var file_size = $('input[name=foto_barang]')[0].files[0].size;
    if(file_size>2097152) {
      alert('Ukuran gambar harus dibawah 2MB.');
      return false;
    } 
    return true;
  }
</script>

<?php } ?>
<?php if($this->uri->segment(1)=='pengguna' && $this->uri->segment(2)=='tambah'){ ?>
<script>
  function tampilkan_pilihan_lingkungan() {
    $('.pilihlingkungan').hide();
    var pilihan_lingkungan = $('select[name=pilihlingkungan]').val();
    if ($('select[name=jenis_admin]').val() === 'adminlingkungan') {
      $('.pilihlingkungan').show();
      $('input[name=kodelingkungan]').val(pilihan_lingkungan);
    } else {
      $('.pilihlingkungan').hide();
    }    
  }
  $('select').change(tampilkan_pilihan_lingkungan);
  tampilkan_pilihan_lingkungan();
</script>

<?php } ?>
<?php if($this->uri->segment(1)=='pengguna'){ ?>
<script>
  $('input[name=repassword]').on('input', function() {
    var pass = $('input[name=password]').val();
    var repass = $('input[name=repassword]').val();
    if (pass != repass) {
        $('small[for=form-text-repassword]').html('<strong class="text-danger">Password tidak sama.</strong>');
    } else {
        $('small[for=form-text-repassword]').html('<strong class="text-success">Password sama.</strong>');      
    }
  });
</script>

<?php } ?>
</body>
</html>