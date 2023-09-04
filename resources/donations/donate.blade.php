
<form method="POST" action="/donate">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="amount">Donation Amount:</label>
        <input type="number" name="amount" id="amount" required>
    </div>
    <div>
        <button type="submit">Donate</button>
    </div>
</form>
