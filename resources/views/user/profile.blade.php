<h1>Profile</h1>

<h2>User Info</h2>
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<h2>Logs from Cookie</h2>
<ul>
    @foreach ($logs as $key => $value)
        <li>{{ $key }}: {{ $value }}</li>
    @endforeach
</ul>
