<h2>
Please Select a Test User
</h2>
<p>
In a production controller, you won't see this form. Note that
if you are seeing this on a production server you must immediately
set <tt>app_shibboleth_fake</tt> to <tt>false</tt> in app.yml to
preserve the security of your site!
</p>

<form action="<?php url_for('sfShibbolethAuth/login') ?>" method="post">
<?php echo $form ?>
<input type="submit" name="go" value="Go" class="submit">
</form>
