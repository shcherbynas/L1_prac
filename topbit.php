<!DOCTYPE HTML>

<html lang="en">
    
<?php

    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
    {
        echo "Connection failed".mysqli_connect_error();
        exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book reviews database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, author, genre, review, rating">
    <meta name="author" content="Svitlana Shcherbyna">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/book_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/books_image.jpg" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Orchid reading</h1>
        </div>    <!-- / banner -->
	
	<div class="box side">
		<h2>Search     |<a class="side" href="show_all.php">Show all</a></h2>
        <i>Type part of the title / author name if desired</i>
        <hr/>
        
        <!-- Start of Title Serach -->
        <form method="post" action="title_search.php" enctype="multipart/form-data">
            
            <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..."/>
            
            <input class="submit" type="submit" name="find_title" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Title Search -->
        
        <!-- Start of Author Serach -->
        <form method="post" action="author_search.php" enctype="multipart/form-data">
            
            <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..."/>
            
            <input class="submit" type="submit" name="find_author" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Author Search -->
        
        <!-- Start of Genre Serach -->
        <form method="post" action="genre_search.php" enctype="multipart/form-data">
            
            <select name="genre" required>
                <option value="" disabled selected>Genre...</option>
                <option value="Sci Fi">Science Fiction</option>
                <option value="Historical Fiction">Historical Fiction</option>
                <option value="Humour">Humour</option>
                <option value="Non Fiction">Non Fiction</option>
                
                
            </select>
            
            <input class="submit" type="submit" name="find_genre" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Genre Search -->
        
        <!-- Start of Ratings form -->
        <form method="post" action="rating_search.php" enctype="multipart/form-data">
            
            <select class="half_width" name="amount">
                <option value="exactly" selected>Exactly...</option>
                <option value="more">At least...</option>
                <option value="less">At most...</option>      
            </select>
            
            <select class="half_width" name="stars">
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>
            
            <input class="submit" type="submit" name="find_rating" value="Search" />
            
            
        </form>
        
        <br />
        <!-- End of Ratings form -->
        
	</div> <!-- / side bar  -->  
        