<?php include "topbit.php";

// if find button pushed...
if(isset($_POST['find_genre']))
{     
  // retrieves genre and sanitises it.
    
$genre = test_input(mysqli_real_escape_string($dbconnect, $_POST['genre']));
    
$find_sql="SELECT *
FROM `L1_prac_books`
WHERE `Genre` LIKE '%$genre%'
LIMIT 0 , 30";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);
    
?>     
        
<div class="box main">
            <h2>Genre search</h2>
            
            <?php
            
            // check if there are any results
            
            if($count<1)
            {
            ?>
            
            <div class="error"> Sorry! There are no results that match your search. Please use the search box in the side bar to try again. </div>
            
            <?php
            
            }// end count 'if'
            
            // if there are no results, output an error
            
            else {
                
                do{
                ?>
            
                            <!-- Results -->
            <div class="results">
                
                <p>Title: <span class="sub_heading"><?php echo $find_rs['Title']; ?></span></p>
                
                <p>Author: <span class="sub_heading"><?php echo $find_rs['Author']; ?></span></p>
                
                <p>Genre: <span class="sub_heading"><?php echo $find_rs['Genre']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                    
                    <?php 
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                        
                     ?>
                    
                    </span></p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    <?php echo $find_rs['Review']; ?>
                </p>
                
            </div>  <!-- end of results-->
    
    <br />
            
           
            
            <?php
                    
                } // end of 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
            } // end else
            
            // if there are results, display them
            
} // end count 'if'
    
            ?>    

</div>  

<?php
    include "bottombit.php"
?>
