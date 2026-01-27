<div>
    <div class="container">
        <form action="{{ route('adminLogin') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="enter email" required>
            <br>
            <br>
            <input type="text" name="password" placeholder="enter password" required>
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</div>