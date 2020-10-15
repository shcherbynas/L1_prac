<!DOCTYPE HTML>

<html lang="en">
    
<?php

    session_start();
    include("config.php");
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
        <!-- End of Title Search -->
        
        <hr />
        Author Search <br/>
        Genre Search <br/>
        Rating Search <br/>
	</div> <!-- / side bar  -->  
        