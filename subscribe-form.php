<h1>Subscribe</h1>
<div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="user" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <!-- radio buttons -->
        <div class="form-check col">
            <input value="snail" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Snail
            </label>
        </div>
        <div class="form-check col">
            <input value="email" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Email
            </label>
        </div>

        <!-- check boxes -->
        <div class="form-check col">
            <input value="PHP" name="learn[]" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                PHP
            </label>
        </div>
        <div class="form-check col">
            <input value="JavaScript" name="learn[]" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                JavaScript
            </label>
        </div>

        <!-- select -->
        <select name="select" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <button class="btn btn-primary" style="margin-top: 1rem;">Click here</button>
    </form>
</div>