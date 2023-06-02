<section class="home">
    <div class="title-text">Messagerie</div>

    <link rel="stylesheet" href="style/messagerie.css">
    <div class="content-body">
    <h2>Messagerie</h2>
    <form>
      <div class="input-field">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-field">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button class="btn" type="submit">Envoyer</button>
    </form>
    </div>

    <?php
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
      $db_name = 'supraelectronics';
      $db_user = 'root';
      $db_pass = 'secret';
      $db_host = 'mysql';

      $db = new PDO("mysql:host=". $db_host .";port=3307". ";dbname=" . $db_name, $db_user, $db_pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $db->prepare("INSERT INTO messages (email, message) VALUES (:email, :message)");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':message', $message);
      $stmt->execute();

      echo "<p>Success</p>";
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  ?>
</section><!-- Contenu principal -->