<!-- ALERT -->
<?php
$alertType = '';
$alertTitle = '';
$alertMessage = '';

if ($this->session->flashdata('success')) {
    $alertType = 'success';
    $alertTitle = 'Good Job!';
    $alertMessage = $this->session->flashdata('success');
} elseif ($this->session->flashdata('warning')) {
    $alertType = 'warning';
    $alertTitle = 'Oops!';
    $alertMessage = $this->session->flashdata('warning');
} elseif ($this->session->flashdata('error')) {
    $alertType = 'error';
    $alertTitle = 'Error!';
    $alertMessage = $this->session->flashdata('error');
}

if ($alertType): ?>
<script>
$(document).ready(function() {
    Swal.fire("<?=$alertTitle;?>", <?=json_encode($alertMessage);?>, "<?=$alertType;?>");
});
<?php endif;?>
</script>