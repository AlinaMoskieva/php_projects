<div class="registration-form">
  <form enctype="multipart/form-data" action="" method="POST">
    <h2>Sign up</h2>
    <label for="full_name">Full name</label>
    <input type="text" name="name" placeholder="Input your name" autofocus="true" id="full_name" pattern="[a-zA-Z\s]{5,}" required><br>

    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" placeholder="Input your nickname" autofocus="true" pattern="[a-zA-Z]{3,}" id="full_name" id="nickname" required><br>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Input your email" id="email" required><br>

    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <br>

    <?php showPageBlock("country_select.inc.php"); ?>
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Input your password" required><br>
    <label for="password_check">Enter password secondly</label>
    <input type="password" name="password_check" id="password_check" placeholder="Input your password secondly" required>
    <br>

    <label for="avatar">Choose photo</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    <input name="avatar" type="file" />
    <br>

    <label for="news">Do you agree to receive news?</label>
    <input type="checkbox" name="news" id="news" checked>
    <br>

    <label for="terms">Do you agree with the terms?</label>
    <input type="checkbox" name="terms" id="terms" required="true" checked>
    <br>

    <input type="submit">
  </form>
</div>
