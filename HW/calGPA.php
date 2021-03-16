<html>
    <head>
        <title>Calculator GPA</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        table, th, td {
        border-collapse: collapse;
        }
        th, td {
        padding: 10px;
        text-align: left;
        }
    </style>
    <body>
        <center>
        <h2>Calculator Grade Period Average(GPA)</h2><br>
            <form method = "GET">
                <table style ="width :30%">
                    <tr style="background-color:#D098FA">
                    <th>#</th>
                    <th><center>Subjects</center></th>  
                    <th>Credit</th>  
                    <th>Grade</th>  
                    </tr>

                    <tr>
                        <td>1</td>
                        <td><input type="text" style = "width :90%" name="s1" require ></td>
                        <td><center> <select name="credit1" id="credits"> 
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </center></td>
                        <td> <select name="grade1" id="GPA"> 
                            <option value=4>A</option>
                            <option value=3.5>B+</option>
                            <option value=3>B</option>
                            <option value=2.5>C+</option>
                            <option value=2>C</option>
                            <option value=1.5>D+</option>
                            <option value=1>D</option>
                            <option value=0>F</option>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><input type="text" style = "width :90%" name="s2" require ></td>
                        <td><center> <select name="credit2" id="credits"> 
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </center></td>
                        <td> <select name="grade2" id="GPA"> 
                            <option value=4>A</option>
                            <option value=3.5>B+</option>
                            <option value=3>B</option>
                            <option value=2.5>C+</option>
                            <option value=2>C</option>
                            <option value=1.5>D+</option>
                            <option value=1>D</option>
                            <option value=0>F</option>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><input type="text" style = "width :90%" name="s3" require ></td>
                        <td><center> <select name="credit3" id="credits"> 
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </center></td>
                        <td> <select name="grade3" id="GPA"> 
                            <option value=4>A</option>
                            <option value=3.5>B+</option>
                            <option value=3>B</option>
                            <option value=2.5>C+</option>
                            <option value=2>C</option>
                            <option value=1.5>D+</option>
                            <option value=1>D</option>
                            <option value=0>F</option>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td><input type="text" style = "width :90%" name="s4" require ></td>
                        <td><center> <select name="credit4" id="credits"> 
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </center></center></td>
                        <td> <select name="grade4" id="GPA"> 
                            <option value=4>A</option>
                            <option value=3.5>B+</option>
                            <option value=3>B</option>
                            <option value=2.5>C+</option>
                            <option value=2>C</option>
                            <option value=1.5>D+</option>
                            <option value=1>D</option>
                            <option value=0>F</option>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td><input type="text" style = "width :90%" name="s5" require ></td>
                        <td><center> <select  name="credit5"  id="credits"> 
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </center></td>
                        <td> <select name="grade5"  id="GPA"> 
                            <option value=4>A</option>
                            <option value=3.5>B+</option>
                            <option value=3>B</option>
                            <option value=2.5>C+</option>
                            <option value=2>C</option>
                            <option value=1.5>D+</option>
                            <option value=1>D</option>
                            <option value=0>F</option>
                        </td>
                    </tr>   
            </form>
        </table>

            <input type ="submit" name = "submit">
        </center>
        
        <?php
            if(isset($_GET["submit"])){
                $sub1 = $_GET['s1']; 
                $sub2 = $_GET['s2']; 
                $sub3 = $_GET['s3']; 
                $sub4 = $_GET['s4']; 
                $sub5 = $_GET['s5'];

                $grade1 = $_GET['grade1']; 
                $grade2 = $_GET['grade2']; 
                $grade3 = $_GET['grade3']; 
                $grade4 = $_GET['grade4']; 
                $grade5 = $_GET['grade5'];

                $credit1 = $_GET['credit1'];
                $credit2 = $_GET['credit2'];
                $credit3 = $_GET['credit3'];
                $credit4 = $_GET['credit4'];
                $credit5 = $_GET['credit5'];
                $GPA ;
                $Credit;
            }
        ?>

        <?php
            if(isset($_GET["submit"])){
        ?>
            <center>
            <table style="width:30%">
                <tr style="background-color:#93FAB9">
                    <th>#</th>
                    <th><center>Subjects</center></th>  
                    <th><center>Credit</center></th>  
                    <th><center>Grade</center></th>
                </tr>
                <tr > 
                    <td>1</td>
                    <td><center><?php echo $sub1 ?></center></td>
                    <td><center><?php echo $credit1 ?></center></td>
                    <td><center><?php echo $grade1 ?></center></td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td><center><?php echo $sub2 ?></center></td>
                    <td><center><?php echo $credit2 ?></center></td>
                    <td><center><?php echo $grade2 ?></center></td>
                    
                </tr>
                <tr>
                    <td>3</td>
                    <td><center><?php echo $sub3 ?></center></td>
                    <td><center><?php echo $credit3 ?></center></td>
                    <td><center><?php echo $grade3 ?></center></td>

                </tr>
                <tr>
                    <td>4</td>
                    <td><center><?php echo $sub4 ?></center></td>
                    <td><center><?php echo $credit4 ?></center></td>
                    <td><center><?php echo $grade4 ?></center></td>
                
                </tr>
                <tr>
                    <td>5</td>
                    <td><center><?php echo $sub5 ?></center></td>
                    <td><center><?php echo $credit5 ?></center></td>
                    <td><center><?php echo $grade5 ?></center></td>
                    
                </tr>
                
                <?php
                    $GPA = $grade1 * $credit1; $Credit = $credit1;
                    $GPA += $grade2 * $credit2; $Credit += $credit2;
                    $GPA += $grade3 * $credit3; $Credit += $credit3;
                    $GPA += $grade4 * $credit4; $Credit += $credit4;
                    $GPA += $grade5 * $credit5; $Credit += $credit5;

                    $GPA /= $Credit;
                ?>
                    <tr>
                        <th colspan="4"><center><?php echo "Your GPA is : ", round ($GPA ,2);?></center></th>
                    </tr>
            </table>
            </center>
        <?php 
        }       
        ?>    
    </body>
</html>