<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/top-nav-index.php');
?>
<section id="signup-page" class="flex">
    <div class="herobanner flex-column">
        <h1 class="header">chipper.</h1>
    </div>
    <div id="login-page" class="login flex-column">
        <h1 class="title signup-title">Sign up</h1>

        <form id="form" action="/signup" method="POST" onsubmit="return validate()">

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="name">
                    <input required name="user_name" id="name" type="text">
                    <span class="omrs-input-label">First name</span>
                </label>
            </div>

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="lastname">
                    <input required name="user_last_name" id="lastname" type="text">
                    <span class="omrs-input-label">Last name</span>
                </label>
            </div>

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="email">
                    <input required name="user_email" id="email" type="text">
                    <span class="omrs-input-label">Email</span>
                </label>
            </div>

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="age">
                    <input required name="user_age" id="age" type="text">
                    <span class="omrs-input-label">Age</span>
                </label>
            </div>

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="phone">
                    <input required name="user_phone" id="phone" type="text">
                    <span class="omrs-input-label">Phone</span>
                </label>
            </div>

            <div class="omrs-input-group">
                <label class="omrs-input-filled" for="password">
                    <input required name="user_password" id="password" type="password">
                    <span class="omrs-input-label">Password</span>
                </label>
            </div>

            <button type="submit">Sign up</button>
            <div class="btn"><a class="text-blue" href="/">Log in</a></div>
        </form>
    </div>
</section>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/bottom-footer.php');
?>




<!-- 
        <label for="name">First name<input name="user_name" id="name" type="text" placeholder="Enter your first name"></label>
        <label for="lastname">Last name<input name="user_last_name" id="lastname" type="text" placeholder="Enter your last name"></label>
        <label for="user_email">Email<input name="user_email" id="email" type="text" placeholder="Enter your email"></label>
        <label for="user_age">Age<input name="user_age" id="age" type="text" placeholder="Enter your age"></label>
        <label for="user_phone">Phone<input name="user_phone" id="age" type="text" placeholder="Enter your phone"></label>
        <label for="user_password">Password<input name="user_password" id="password" type="password" placeholder="Enter your password"></label>
        <button type="submit">Sign up</button> -->