<div class="login-container">
    <h1>Login Admin Alfamart</h1>
    <form action="<?= action('auth/login') ?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" class="submit-button" value="Log In">
    </form>
</div>