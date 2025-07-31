<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    

    </div>
    

</html>
    <h2>Donor Registration</h2>
    <!-- Add donor registration form here -->
    <p>
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color:#fffaf0;
        margin: 0;
        padding: 0;
    }
    .container {
        height: 1000px;
        width: 900px;
        margin: 50px auto;
        background-color:#fffaf0;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    label {
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #eb9393;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color:#e26969;
    }
    input[type="button"] {
        background-color: #eb9393;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="button"]:hover {
        background-color:#e26969;
    }
 </style>
<div class="container">
    <h2>Donor Registration Form</h2>
    <form action="connect.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="Age">Age:</label>
        <input type="text" id="Age" name="Age" required>

        
        <label for="Gender">Gender:</label>
        <select id="Gender" name="Gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
           
        </select>
        

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="blood_group">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="region">Region</label><select id="Region" name="Region" required>
            <option value="">Select Region</option>
            <option value="India">India</option>
            
        </select>
        <label for="State">State</label>
        <select id="State" name="State" required>
            <option value="">Select State</option>
            <option value="India">Odisha</option>
            
        </select>

        <label for="City">City</label>
        <select id="City" name="City" required>
            <option value="">Select City</option>
            <option value="India">Kendujhar</option>
            <option value="India">Khurda</option> 
            <option value="India">Jagatsinhgpur</option>
            <option value="India">Puri</option>
            <option value="India">cuttack</option>
            <option value="India">Kendujhar</option>
            <option value="India">Kendujhar</option>
            <option value="India">Kendujhar</option>
            <option value="India">Kendujhar</option>
            <option value="India">Kendujhar</option>
            <option value="India">Kendujhar</option>
            
        </select>

        <input type="Submit" value="Submit">
        
