<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once("header.php");
    ?>
<H2>Analytics</H2>
<div id="wrapper">
<p>This page will provide stats on the data.(Shanmukh, Jim)</p>

<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=5717F16dbg02', '5717g02', '8720');
        //echo "connection success \n";
    }catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    if (isset($_SESSION['username'])){

        $query1 =("SELECT course_number FROM syllabus WHERE university_name LIKE '%California%'");
        $query2 =("SELECT course_title FROM syllabus WHERE semester LIKE '%Spring%'");
        $query3 =("SELECT count(syl_id) FROM syllabus");
    
        try{
            $sth = $db->prepare($query1);
            $sth2 = $db->prepare($query2);
            $sth3 = $db->prepare($query3);
            $sth->execute();
            $sth2->execute();
            $sth3->execute();
        }catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        $result1 = $sth->fetchAll(PDO::FETCH_ASSOC);
        $result2 = $sth2->fetchAll(PDO::FETCH_ASSOC);
        $result3 = $sth3->fetchAll(PDO::FETCH_ASSOC);
        
        //Query 1
        echo "<h2>Course Numbers for Schools in California</h3>";
        echo "<ol>";
        foreach($result1 as $row){
            echo "<li>";
            echo "<td>".$row['course_number']."</td>";
            echo "</li>";
        }
        echo "</ol>";
        
        //Query 2
        echo "<h2>Course Titles for Courses in Spring</h3>";
        echo "<ol>";
        foreach($result2 as $row){
            echo "<li>";
            echo "<td>".$row['course_title']."</td>";
            echo "</li>";
        }
        echo "</ol>";
        
        //Query 3
        echo "<h2>Number of Syllabi in the database</h3>";
        foreach($result3 as $row){
            echo "<h4>".$row['count(syl_id)']."</h4>";
        }
        
    }else{
    echo "Please try signing in.";
    }
 
    ?>
</div>
</body>
</html>
