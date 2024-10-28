<form action="create.php" method="post">
        <!-- Text Input for Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        
        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <!-- Number Input for Age -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="100">
        <br><br>
        
        <!-- Radio Buttons for Gender -->
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <br><br>
        
        <!-- Textarea for Comments -->
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
        <br><br>
        
        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>