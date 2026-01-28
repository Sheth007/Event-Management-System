<div>
    <div class="container">
        <form action="{{ route('adminPassword.reset') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="enter email" required>
            <br>
            <br>
            <input type="text" name="password" placeholder="enter password" required>
            <br>
            <br>
            <button type="submit">Reset password</button>

            <p>Got you missing password? <a href="{{ route('adminLogin') }}">Login Now</a></p>
        </form>
    </div>
</div>