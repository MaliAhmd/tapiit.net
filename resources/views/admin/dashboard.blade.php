<h1>Admin Dashboard</h1>


<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();"> logout
        {{ __('Log Out') }}
    </a>
</form>
