<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Info</title>
    <link rel="stylesheet" href="../css/extra_info.css">
    <style>
        #next-section {
            display: none; /* Initially hidden */
        }
    </style>
    <script>
        function showNextForm() {
            document.getElementById("next-section").style.display = "block"; // Show next form
            document.getElementById("next-section").scrollIntoView({ behavior: "smooth" }); // Scroll to it
        }

        function toggleSelection(option) {
            option.classList.toggle("selected");
        }
    </script>

    <?php
    session_start();

    if (!isset($_SESSION['email']) || !isset($_SESSION['email'])){
        header("Location: /page/signup_login.php");
        exit();
    }

    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    ?>
    <div class="section1">
        <div class="timeline"></div>
        <div class="step step1">1</div>
        <h2>Let us know more about you...</h2>
        <form method="post">
            <label for="gender">Gender:</label>
            <input type="radio" id="gender" name="gender" value="">Male
            <input type="radio" id="gender" name="gender" value="">Female
            <br><br>
            <label for="phonenum">Phonenum:</label>
            <input type="tel" id="phonenum" name="phonenum">
            <br><br>
            <fieldset>
            <legend>Address</legend>
            <label for="address-line1">Address Line 1:</label>
            <input type="text" id="address-line1" name="address-line1">
            <br><br>
            <label for="address-line2">Address Line 2:</label>
            <input type="text" id="address-line2" name="address-line2">
            <br><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
            <br><br>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country">
            <br><br>
            <label for="postcode">Post Code:</label>
            <input type="number" id="postcode" name="postcode">
            <br><br>
            </fieldset>        
            <button type="button" onclick="showNextForm()">Submit</button>
            <button type="button" onclick="showNextForm()">Skip</button>
        </form>
    </div>

    <div id="next-section" class="section">
        <div class="timeline"></div>
        <div class="step step2">2</div>
        <h2>Step 2: Select Your Favorite Furniture Styles</h2>
        <div class="furniture-options">
            <div class="furniture-option" onclick="toggleSelection(this)">Modern</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Minimalist</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Classic</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Muji</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Japandi</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Bohemian</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Vintage</div>
            <div class="furniture-option" onclick="toggleSelection(this)">Asian Decor</div>
        </div>
        <br><br>
        <button type="button" onclick="submitForm()">Submit All</button>
    </div>





