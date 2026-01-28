<div>
    <div class="container">
        <h1>admin | login</h1>
        <form action="{{ route('adminLogin') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="enter email" required>
            <br>
            <br>
            <input type="text" name="password" placeholder="enter password" required>
            <br>
            <br>
            <button type="submit">Login</button>

            <p>Forgot password? <a href="{{ route('adminPassword.reset') }}">Reset It</a></p>
        </form>
    </div>
</div>