<?php session_start(); ?>
<?php if (isset($_SESSION['success_message']) && 
!empty($_SESSION['success_message'])) { ?>
<div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: 
green;"><?php echo $_SESSION['success_message']; ?></div>
<?php
unset($_SESSION['success_message']);
}
?>