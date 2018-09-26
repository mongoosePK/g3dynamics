<h2>Hello, <?php echo $user->name; ?></h2>

<p>Thank you for pre-registering for the Mammoth Sniper Challenge on g3dynamics.com!</p>

<p>We updated our website, and you will need an account to register for future events.  You will also need your account to finish the registration for the Mammoth Sniper Challenge, when full registration begins on October, 1st.</p>

<p>We went ahead and created an account for you, in this email is a generated password we created for you.  You do not need to take any further action, unless you want to change your password.  In which case, just click on the link below, login and then change your password from the User Dashboard.</p>
</p>

<p><?php echo $genpass; ?></p>

<p>You can login here</p>
@php
$url = config('app.url')."/admin/login";
@endphp
<p><a href="{{ $url }}">{{ $url }}</a></p>
