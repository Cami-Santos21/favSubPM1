<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1>Sign up</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="name"/>
        </div>

        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <div>
            <x-input titulo="Birthday" type="date" nombre="password"/>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
