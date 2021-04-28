<x-layout>
<div class="container">
    <h1> <a href="/people" class="btn btn-link"> <- Back</a> Create New Person</h1>
    <form method="POST" action="/people">
        @csrf
        <div class="form-group">
            <label for="firstname">First name:</label>
            <input type="text" class="form-control" name="first_name" id="firstname"></input>
        </div>
        <div class="form-group">
            <label for="lastname">Last name:</label>
            <input type="text" class="form-control" name="last_name" id="lastname"></input>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email_address" id="email"></input>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" name="phone_number" id="phone"></input>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
    </div>
</div>
</x-layout>