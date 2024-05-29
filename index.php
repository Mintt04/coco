<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0 auto;
        padding: 0 auto;
    }

    .logo{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    table{
        width: 100%;
        border-collapse: collapse;
    }

    th, td{
        border: 1px solid #929292;
        height: 30px;
        padding: 5px;
    }

    #th{
        font-size: 32px;
        height: 80px;
        color: #ffffff;
        background-color: rgb(110, 7, 151);
    }

    th{
        color: #ffffff;
        background-color: rgb(110, 7, 151);
    }

    tr:nth-child(even){
        background-color: #dddddd;
    }

    input[type=text]{
        width: 80%;
    }

    input[type=button],
    input[type=submit]{
        width: 100px;
        padding: 8px;
        color: #ffffff;
        background-color: rgb(110, 7, 151);
        text-decoration: none;
        border: none;
        cursor: pointer;
        margin: 10px;
    }

    .button-container {
        text-align: center;
    }
</style>
<body>
    <div class="logo">
        <center><img src="logo.png" width="400px"></center>
    </div>

    <div class="form">
        <form action="output.php" method="POST">
            <table>
                <tr>
                    <th colspan="3" id="th">Project Year</th>
                </tr>

                <tr>
                    <td>Project ID</td>
                    <td>:</td>
                    <td><input type="text" name="project_id" required></td>
                </tr>

                <tr>
                    <td>Project Title</td>
                    <td>:</td>
                    <td><input type="text" name="project_title" required></td>
                </tr>

                <tr>
                    <td>Department</td>
                    <td>:</td>
                    <td>
                        <select name="department" required>
                            <option value="JTMK">JTMK</option>
                            <option value="JKM">JKM</option>
                            <option value="JKE">JKE</option>
                            <option value="JP">JP</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Supervisor's Name</td>
                    <td>:</td>
                    <td><input type="text" name="supervisor_name" required></td>
                </tr>

                <tr>
                    <td>Jury's Name</td>
                    <td>:</td>
                    <td><input type="text" name="jury_name" required></td>
                </tr>

                <tr>
                    <td>Date</td>
                    <td>:</td>
                    <td><input type="date" name="date" required></td>
                </tr>
            </table>
        
            <br>

            <table>
                <tr>
                    <th>Evaluation Criteria</th>
                    <th>Full Marks</th>
                    <th>Given Marks</th>
                </tr>
                <tr>
                    <td>1. Novelty and Design</td>
                    <td>(/5) * 25%</td>
                    <td>
                        <input type="radio" name="novelty_design" value="1" required> 1
                        <input type="radio" name="novelty_design" value="2"> 2
                        <input type="radio" name="novelty_design" value="3"> 3
                        <input type="radio" name="novelty_design" value="4"> 4
                        <input type="radio" name="novelty_design" value="5"> 5
                    </td>
                </tr>
                <tr>
                    <td>2. Practicality and Usability</td>
                    <td>(/5) * 25%</td>
                    <td>
                        <input type="radio" name="practicality_usability" value="1" required> 1
                        <input type="radio" name="practicality_usability" value="2"> 2
                        <input type="radio" name="practicality_usability" value="3"> 3
                        <input type="radio" name="practicality_usability" value="4"> 4
                        <input type="radio" name="practicality_usability" value="5"> 5
                    </td>
                </tr>
                <tr>
                    <td>3. Impact</td>
                    <td>(/5) * 20%</td>
                    <td>
                        <input type="radio" name="impact" value="1" required> 1
                        <input type="radio" name="impact" value="2"> 2
                        <input type="radio" name="impact" value="3"> 3
                        <input type="radio" name="impact" value="4"> 4
                        <input type="radio" name="impact" value="5"> 5
                    </td>
                </tr>
                <tr>
                    <td>4. Presentation</td>
                    <td>(/5) * 15%</td>
                    <td>
                        <input type="radio" name="presentation" value="1" required> 1
                        <input type="radio" name="presentation" value="2"> 2
                        <input type="radio" name="presentation" value="3"> 3
                        <input type="radio" name="presentation" value="4"> 4
                        <input type="radio" name="presentation" value="5"> 5
                    </td>
                </tr>
                <tr>
                    <td>5. Video</td>
                    <td>(/5) * 10%</td>
                    <td>
                        <input type="radio" name="video" value="1" required> 1
                        <input type="radio" name="video" value="2"> 2
                        <input type="radio" name="video" value="3"> 3
                        <input type="radio" name="video" value="4"> 4
                        <input type="radio" name="video" value="5"> 5
                    </td>
                </tr>
            </table>
            <div class="button-container">
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </div>
        </form>
    </div>
</body>
</html>
