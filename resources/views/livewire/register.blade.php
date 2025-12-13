<div>
    <section id="auth">
        <div class="container">
            <form wire:submit.prevent='register' action="">
                <label for="name">name</label> <br>
                <input wire:model='name' type="text" id="name">
                @error('name')
                    <p> {{ $message }} </p>
                @enderror
                <br> <br>
                <label for="email">Email</label> <br>
                <input wire:model='email' type="email" id="email">
                @error('email')
                    <p> {{ $message }} </p>
                @enderror
                <br> <br>
                <label for="password">Password</label> <br>
                <input wire:model='password' type="password" id="password">
                @error('password')
                    <p> {{ $message }} </p>
                @enderror
                <br> <br>

                <button wire:click='register'>Register</button>
            </form>

            <br>

            <p>Already have Account Let's <a href="/login">Login</a></p>
        </div>
    </section>
</div>
