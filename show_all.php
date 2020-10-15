<?php include "topbit.php";
        
$showall_sql="SELECT * FROM `L1_prac_books` ORDER BY `L1_prac_books`.`Title` DESC LIMIT 0 , 30";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);
    
?>     
        
<div class="box main">
            <h2>All items</h2>
            
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
                
                <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>
                
                <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span></p>
                
                <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                    
                    <?php 
                    for ($x=0; $x < $showall_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                        
                     ?>
                    
                    </span></p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    <?php echo $showall_rs['Review']; ?>
                </p>
                
            </div>  <!-- end of results-->
    
    <br />
            
           
            
            <?php
                    
                } // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($showall_query));
            } // end else
            
            // if there are results, display them
            
            ?>    

</div>  

<?php
    include "bottombit.php"
?>
