<?php require( 'forms/contact-form.php' );
?>

<section id='contact'>
  <a id='contact-link'></a>
  <h1 class='section-h1 mega'>Message Zack</h1>
  <div id='form-container'>
    <?php if ( $msg != '' ): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg;
?></div>
    <?php endif;
?>
    <form id='contact-form' action="<?php $location = $_SERVER['PATH_INFO']; 
echo ''.$location.'#contact';?>" method='POST'>
      <p><strong>Contact Zack here!</strong></p>
      <div>
        <label for='firstName'>First Name:</label>
        <input type='text' name='firstName' id='firstName'
          value="<?php echo isset($_POST['firstName']) ? $fName : ''; ?>" placeholder="Required">
      </div>
      <div>
        <label for='lastName'>Last Name:</label>
        <input type='text' name='lastName' id='lastName' value="<?php echo isset($_POST['lastName']) ? $lName : ''; ?>"
          placeholder="Required">
      </div>
      <div>
        <label for='emailAddress'>Email Address:</label>
        <input type='email' name='emailAddress' id='emailAddress'
          value="<?php echo isset($_POST['emailAddress']) ? $email : ''; ?>" placeholder="Required">
      </div>
      <div>
        <label for='telephoneNumber'>Telephone Number:</label>
        <input type='tel' name='telephoneNumber' id='telephoneNumber'
          value="<?php echo isset($_POST['telephoneNumber']) ? $tele : ''; ?>" placeholder="Optional">
      </div>
      <div>
        <label for='userMessage'>Message:</label>
        <textarea name='userMessage' id='userMessage' cols='30' rows='10' placeholder="Required"><?php echo isset( $_POST['userMessage'] ) ? $message : '';
?></textarea>
        <input id="honeyclaws" name="website" type="text" value="" />
      </div>
      <button class='btn' type='submit' name='submit'>Send Your Message</button>
    </form>
  </div>
</section>