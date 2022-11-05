<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./src/logo.png">
    <title>Your Comment</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

    * {
        font-family: 'Acme', sans-serif;
    }

    .feel {
        color: #fff;
    }

    .box {
        border: 6px solid #23A9C2;
        margin: 30px auto 0;
        padding: 20px;
        width: 1000px;
        height: 250px;
        overflow: scroll;
    }

    .box ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .box li {
        display: block;
        border-bottom: 2px dashed #ddd;
        margin-bottom: 5px;
        padding-bottom: 5px;
    }

    .box li:last-child {
        border-bottom: 0 dashed #ddd;
    }

    .box span {
        color: #888;
    }

    .bttn {
        margin-left: 1%;
        background-color: #fff;
        border-radius: 40em;
        border-style: none;
        box-shadow: rgb(17, 66, 136) 0 -12px 6px inset;
        box-sizing: border-box;
        cursor: pointer;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: -.24px;
        padding: 1rem;
        width: 10%;
    }

    .bttn:hover {
        background-color: #23A9C2;
    }
    </style>
</head>

<body style="background-image: url(./src/bg.png);">
    <center>
        <h1 class="feel">Feel Free to Post your Comment Here</h1>
    </center>
    <div class="box">
        <ul>
            <?php 
 				$result = $com->index();
 				while ($data = $result->fetch_assoc()) {
 			 ?>
            <li><b style="color:white"><?php echo $data['name']; ?><b> -
                        <?php echo $com->dateFormat($data['comment_time']); ?> <br>
                        <h4><?php echo $data['comment'] ?></h4>
            </li>
            <?php } ?>
        </ul>
    </div><br><br>
    <center>
        <?php 
 			if (isset($_GET['msg'])) {
 				$msg = $_GET['msg'];
 				echo "<span style='color: white; font-size:20px'>".$msg."</span>";
 			}
 		 ?>

        <br>
        <div style="border-style: groove;width: 25%; border: 6px solid #23A9C2; height: 280px">
            <form action="post_comment.php" method="post"><br><br><br>
                <table>
                    <tr>
                        <td>Your Name:</td>
                        <td><input style="width: 221px;height: 30px;" type="" name="name"
                                placeholder="Please enter your name"></td>
                    </tr>
                    <tr>
                        <td>Comment:</td>
                        <td>
                            <textarea name="comment" rows="5" cols="30"
                                placeholder="Please enter your comment"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="width: 230px;height: 40px;" type="submit" name="submit" value="Post"></td>
                    </tr>
                </table>
            </form>
        </div>
        <center>
            <br>
            <a href="./AdminDash.php">
                <button class="bttn" role="button">Go back</button>
            </a>
</body>

</html>