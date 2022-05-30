<!-- Web-Page 1: Page Structure:
Form Fields:
1. Name (Text Field) - Mandatory Field
2. Email (Email Field) - Mandatory Field
3. Contact Number (Number Field) - Mandatory Field
4. Course Level (Single Select Drop Down with options - [UG, PG]) - Mandatory
Field
5. Country Preferences (Multi Select with dropdown options - [USA, Australia,
New-Zealand, Canada, UK, Ireland, Germany]) - Mandatory Field
6. Date of Birth (Date Field) - Optional Field -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admitkard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    
</head>

<body>
        <h1> Form Fields: </h1>

    <form action = "process-form.php" method = "post">

<div class = "required">
        <label for = "name" >Name</label>
        <input type ="text" id="name" name = "name"
        placeholder="Sashank Kumar" required>
    <br>

         <label for = "email">Email</label>
         <input type = "text" id="email" name = "email"
         placeholder = "shashank@abcd.com" required>
    <br>

        <label for = "contact number">Contact Number</label>
         <input type = "text" class = "form-control" name = "Contact Number"
                placeholder="10 Digit mobile Number"
                 minlength = "10" maxlength = "10"
                pattern="[1-9]{1}[0-9]{9}" required>
    <br>
        <label for ="Course Level">Course Level</label>
             <select required id = "Course Level"  name ="Course Level">
                <option value = "">None</option>
                <option value ="UG">UG</option>
                <option value = "PG">PG</option>
            </select>
    <br>
        <label for = "Country Prefrences">Country Prefrences</label>
            <select required id = "Country Prefrences" name = "Country Prefrences" >
                 <option value = "">None</option>
                 <option value = "USA">USA</option>
                 <option value ="Australia">Australia</option>
                 <option value="India">India</option>
                 <option value="New-Zealand">New-Zealand</option>
                 <option value="Canada">Canada</option>
                 <option value="UK">UK</option>
                 <option value="Ireland">Ireland</option>
                 <option value="Germany">Germany</option>
                 <option value="">Japan</option>
             </select>
         <style>
                 .required :after{content:"*"; color:red;}
        
         </style>
</div>
    <br>

<div class = "optional">
        <label for= "date of birth">Date of Birth</label>
          <input type = "date" id = "start" name ="date of birth"
             min="1997-01-01" max = "2018-12-31">
</div>
    <br>

<div class = "checkbox">
        <label>
         <input type = "checkbox" name = "terms">
             By clicking on submit button, you agree on our <a href="#">Policy </a>
        </label>

        <style>
            .checkbox:after{content:"*"; color:red;}
        </style>
</div>
    <br>

        <button type="submit">Submit</button>

        </form> 
    </body>
</html>