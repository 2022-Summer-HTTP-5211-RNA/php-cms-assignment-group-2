<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

if( !isset( $_GET['id'] ) )
{

  header( 'Location: about.php' );
  die();

}

if( isset( $_POST['name'] ) )
{

  if( $_POST['name'] and $_POST['description'] )
  {

    $query = 'UPDATE about SET
      name = "'.mysqli_real_escape_string( $connect, $_POST['name'] ).'",
      description = "'.mysqli_real_escape_string( $connect, $_POST['description'] ).'"
      WHERE id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connect, $query );

    set_message( 'About information has been updated' );

  }

  header( 'Location: about.php' );
  die();

}


if( isset( $_GET['id'] ) )
{

  $query = 'SELECT *
    FROM about
    WHERE id = '.$_GET['id'].'
    LIMIT 1';
  $result = mysqli_query( $connect, $query );

  if( !mysqli_num_rows( $result ) )
  {

    header( 'Location: about.php' );
    die();

  }

  $record = mysqli_fetch_assoc( $result );

}

?>

<h2>Edit Project</h2>

<form method="post">

  <label for="name">Name:</label>
  <input type="text" name="name" id="name" value="<?php echo htmlentities( $record['name'] ); ?>">

  <br>

  <label for="description">Description:</label>
  <textarea type="text" name="description" id="description" rows="5"><?php echo htmlentities( $record['description'] ); ?></textarea>

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
  <input type="submit" value="Edit About">

</form>

<p><a href="projects.php"><i class="fas fa-arrow-circle-left"></i> Return to About</a></p>


<?php

include( 'includes/footer.php' );

?>
