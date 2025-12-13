<div>
    <section id="auth">
        <div class="container">
            <form wire:submit.prevent='login' action="">
                <label for="email">Email</label> <br>
                <input wire:model='email' type="email" id="email">
                <br> <br>
                <label for="password">Password</label> <br>
                <input wire:model='password' type="password" id="password">
                <br> <br>
                <button wire:click='login'>Login</button>
            </form>
            
            <br>
        
            <p>Let's <a href="/register">Make Account</a></p>
        </div>
    </section>
</div>
