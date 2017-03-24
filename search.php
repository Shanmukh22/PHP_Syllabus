<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once("header.php");
        if(isset($_GET['title'])) $title = addslashes($_GET['title']);
        if(isset($_GET['obj'])) $objective = addslashes($_GET['obj']);
        if(isset($_GET['all'])) $all = addslashes($_GET['all']);
        if(isset($_GET['set'])) $set = $_GET['set'];
        if(isset($_GET['browse'])) $browse = $_GET['browse'];
?>
<H2>Search</H2>
    <div id="wrapper">
    <p>This page will search the database for syllabuses. (Jim)</p>
    <form name="search" action="search.php" method="get">
            <table border=0 width="400">
                <tr>
                    <!-- ~~~~~~~~~   class title ~~~~~~~~~~~ -->
                    <td><b>Class Name</b><br>
                    <td><input type="text" name="title" size="75"> OR<br></td>
                </tr>
                <tr>
                    <!-- ~~~~~~~~~  objective ~~~~~~~~~~~ -->
                    <td><b>Objective</b><br>
                    <td><input type="text" name="obj" size="75"> OR<br></td>
                </tr>
                <tr>
                    <!-- ~~~~~~~~~  ALL ~~~~~~~~~~~ -->
                    <td><b>All Fields</b><br>
                    <td><input type="text" name="all" size="75"><br></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="set" value="yes">
                        <input type="hidden" name="browse" value="no">
                        <input type="submit" value="search">
                        </form>
                    </td>
                    <td>
                        <form name="search" action="search.php" method="get">
                        <input type="hidden" name="browse" value="yes">
                        <input type="hidden" name="set" value="yes">
                        <input type="submit" value="browse">
                        </form>
                    </td>
                </tr>
            </table>

<!-- only print the table if one of the buttons was selected -->
        <?php
            if(isset($set)){
    echo '</div>';
// Login to the database
                try{
                    $db = new PDO('mysql:host=localhost;dbname=5717F16dbg02', '5717g02', '8720');
                    //echo "connection success \n";
                }catch (PDOException $e) {
                    print "Error!: " . $e->getMessage() . "<br/>";
                    die();
                }
                
    //Various search scenarios

                if(($title !== "") and ($objective !== "")and ($all !== "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_title LIKE '%".$title."%'OR course_objectives Like '%".$objective."%'OR description LIKE '%".$all."%';";
                }
                elseif(($title !== "") and ($objective !== "")and ($all == "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_title LIKE '%".$title."%'OR course_objectives Like '%".$objective."%';";
                }
                elseif(($title !== "")and ($objective == "")and ($all == "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_title LIKE '%".$title."%';";
                }
                elseif(($title == "") and ($objective == "") and ($all == "")){
                    echo "please enter a search term";
                }
                elseif(($title == "")and ($objective !== "")and ($all !== "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_objectives Like '%".$objective."%'OR description LIKE '%".$all."%';";
                }
                elseif(($title == "")and ($objective == "")and ($all !== "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE description LIKE '%".$all."%';";
                }
                elseif(($title == "")and ($objective !== "")and ($all == "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_objectives LIKE '%".$objective."%';";
                }
                elseif(($title !== "")and ($objective == "")and ($all !== "")){
                    $query = "SELECT course_title, course_number, university_name, description FROM syllabus WHERE course_title LIKE '%".$title."%'OR description LIKE '%".$all."%';";
                }
//set a browse query if browse button was selected
                if($browse == "yes"){
                    $query2 = "SELECT * FROM syllabus;";
                }
                
//build arrays for each query
                try{
                    
                $sth = $db->prepare($query);
                $sth2 = $db->prepare($query2);
                    
                $sth->execute();
                $sth2->execute();
                    
                        }catch (PDOException $e){
                        print "Error!: " . $e->getMessage() . "<br/>";
                        die();
                        }
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                $result2 = $sth2->fetchAll(PDO::FETCH_ASSOC);

             ?>
            <table width=100%>
                <thead>
                    <tr>
                        <td><b>Course Title</b></td>
                        <td><b>Course Number</b></td>
                        <td><b>University</b></td>
                        <td><b>Description</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($browse == "yes"){
                        foreach($result2 as $row){
                            echo '<tr>';
                            echo '<td valign="top">'.$row['course_title'].'</td>';
                            echo '<td valign="top">'.$row['course_number'].'</td>';
                            echo '<td valign="top">'.$row['university_name'].'</td>';
                            echo '<td valign="top">'.$row['description'].'</td>';
                            echo '</tr>';
                        }
                    }elseif($browse == "no"){
                    foreach($result as $row){
                        echo '<tr>';
                        echo '<td valign="top">'.$row['course_title'].'</td>';
                        echo '<td valign="top">'.$row['course_number'].'</td>';
                        echo '<td valign="top">'.$row['university_name'].'</td>';
                        echo '<td valign="top">'.$row['description'].'</td>';
                        echo '</tr>';
                    }
                    }
                    ?>
                </tbody>
            </table>
        <?php
            }
        ?>
    </body>
    </html>
