<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Evaluation Result</title>
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
        <form>
            <table>
                <tr>
                    <th colspan="3" id="th">Project Year</th>
                </tr>

                <tr>
                    <td>Project ID</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($_POST['project_id']); ?>" readonly></td>
                </tr>

                <tr>
                    <td>Project Title</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($_POST['project_title']); ?>" readonly></td>
                </tr>

                <tr>
                    <td>Department</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($_POST['department']); ?>" readonly></td>
                </tr>

                <tr>
                    <td>Supervisor's Name</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($_POST['supervisor_name']); ?>" readonly></td>
                </tr>

                <tr>
                    <td>Jury's Name</td>
                    <td>:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($_POST['jury_name']); ?>" readonly></td>
                </tr>

                <tr>
                    <td>Date</td>
                    <td>:</td>
                    <td><input type="date" value="<?php echo htmlspecialchars($_POST['date']); ?>" readonly></td>
                </tr>
            </table>
        
            <br>
        
            <table>
                <tr>
                    <th>Evaluation Criteria</th>
                    <th>Full Marks</th>
                    <th>Given Marks</th>
                </tr>

                <?php
                    function calculateMarks($givenMarks, $percentage) {
                        return ($givenMarks / 5) * $percentage;
                    }

                    $novelty_design = calculateMarks($_POST['novelty_design'], 25);
                    $practicality_usability = calculateMarks($_POST['practicality_usability'], 25);
                    $impact = calculateMarks($_POST['impact'], 20);
                    $presentation = calculateMarks($_POST['presentation'], 15);
                    $video = calculateMarks($_POST['video'], 10);
                    $total_marks = $novelty_design + $practicality_usability + $impact + $presentation + $video;
                ?>

                <tr>
                    <td>1. Novelty and Design</td>
                    <td>25%</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($novelty_design); ?>%" readonly></td>
                </tr>

                <tr>
                    <td>2. Practicality and Usability</td>
                    <td>25%</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($practicality_usability); ?>%" readonly></td>
                </tr>

                <tr>
                    <td>3. Impact</td>
                    <td>20%</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($impact); ?>%" readonly></td>
                </tr>

                <tr>
                    <td>4. Presentation</td>
                    <td>15%</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($presentation); ?>%" readonly></td>
                </tr>

                <tr>
                    <td>5. Video</td>
                    <td>10%</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($video); ?>%" readonly></td>
                </tr>
            </table>

            <br>

            <table>
                <tr>
                    <th colspan="2">Result</th>
                </tr>
                <tr>
                    <td>Total Marks:</td>
                    <td><input type="text" value="<?php echo htmlspecialchars($total_marks); ?>%" readonly></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" value="<?php echo $total_marks >= 50 ? 'Passed' : 'Failed'; ?>" readonly></td>
                </tr>
            </table>

            <div class="button-container">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</body>
</html>
