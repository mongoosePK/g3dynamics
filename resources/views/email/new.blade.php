<h2>Hello, <?php echo $user->name; ?></h2>

<p>Thank you for creating an account on g3dynamics.com!</p>

<p>We created a password for you.  Feel free to change it to something else.</p>
<p><?php echo $genpass; ?></p>

<p>You can login here</p>
@php
$url = config('app.url')."/admin/login";
@endphp
<p><a href="{{ $url }}">{{ $url }}</a></p>
