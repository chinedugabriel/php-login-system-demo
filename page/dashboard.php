<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard view</title>
    <style>
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 98vh;
        }
        section>.card{
            border: 3px solid #A748F6;
            border-radius: 10px;
            color: #A748F6;
            padding: 20px 15px;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
            width: 40%;
        }
        section>.card>img{
            width: 60%;
            border: 3px solid #A748F6;
            border-radius: 50%;
        }
        section>.card button{
            color: white;
            background-color: #A748F6;
            font-size: 20px;
            padding: 7px 30px;
            border-radius: 20px;
            border: none;

        }

        </style>
</head>
<body>
<?php 
    if(isset($_SESSION['login'])){
        if($_SESSION['login'] == '#successful'){        
            echo "    
            <section>
                <div class='card'>
                    <img src='../img/_f471164a-ef5f-486f-81b9-83d21e5b0e4b.jpeg' alt='user profile image'>
                    <p>Welcome ". $_SESSION['username'] ."</p>
                    <p>This is to confirm that you are logged in</p>
                    <form action='dashboard.php' method='post'>
                        <button type='submit' name='logout'>Logout</button>
                    </form>
                </div>
            </section>";
        }
    }else{
        // redirect the users to the home page if they are not signed in 
        header('location: ../index.php');
    }

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: ../index.php');
    }
    

?>
    
</body>
</html>