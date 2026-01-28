<div>
    <div class="container">
        <h1>admin | reset password</h1>
        <form action="{{ route('adminPassword.reset') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="enter email" required>
            <br>
            <br>
            <input type="text" name="password" placeholder="enter new password" required>
            <br>
            <br>
            <button type="submit">Reset password</button>

            <p>Got you're missing password? <a href="{{ route('adminLogin') }}">Login Now</a></p>
        </form>
    </div>
</div>