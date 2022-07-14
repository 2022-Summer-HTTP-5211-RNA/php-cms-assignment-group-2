<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

if( isset( $_POST['name'] ) )
{

  if( $_POST['name'] and $_POST['description'] )
  {

    $query = 'INSERT INTO about (
        name,
        description
      ) VALUES (
         "'.mysqli_real_escape_string( $connect, $_POST['name'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['description'] ).'"
      )';
    mysqli_query( $connect, $query );

    set_message( 'About information has been added' );

  }

  header( 'Location: about.php' );
  die();

}

?>

<h2>Add Project</h2>

<form method="post">


  <label for="name">Name:</label>
  <input type="text" name="name" id="name">

  <br>

  <label for="description">About me:</label>
  <textarea type="text" name="description" id="description" rows="10"></textarea>

  <script>

  ClassicEditor
    .create( document.querySelector( '#description' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

  </script>

  <br>

  <input type="submit" value="Add About">

</form>

<p><a href="about.php"><i class="fas fa-arrow-circle-left"></i> Return to About page</a></p>


<?php

include( 'includes/footer.php' );

?>
