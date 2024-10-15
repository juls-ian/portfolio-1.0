<!-- --------CONTACT--------------- -->
<?php
include "connect.php";
include "head.php";
?>


<div id="contact">
    <div class="contact-container">
        <div class="rows">

            <div class="left-side">
                <h1 class="subtitles">Contact Me</h1>
                <p> <i class="fa-solid fa-paper-plane"></i> juliusian26@icloud.com</p>
                <p> <i class="fa-solid fa-phone"></i> 09493023637</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/juuuuuuuuuuulss"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://www.instagram.com/juls_iann/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/juuuuuuuuulss"><i class="fa-brands fa-square-twitter"></i></a>
                </div>
                <input class="form-btn" type="button" onclick="window.location.href= 'https://drive.google.com/uc?export=view&id=1hCnPhiuXSUG8QI0ldosgh7_uQ9U6n__s';" value="Curriculum Vitae">
            </div>

            <div class="right-side">
                <form method="POST" action="index.php">
                    <input type="text" id="name" name="Name" placeholder="Enter Name" required>
                    <input type="email" id="email" name="Email" placeholder="Your Email" required>
                    <textarea id="message" name="Message" rows="6" placeholder="Put Message" required></textarea>
                    <button class="sbmt-btn" value="Submit" name="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>


<!-- MESSAGES -->

<div class="messages-container">
    <h1 style="color: #7CB9E8" class="message-header">Messages </h1>
    <div class="messages-list">
        <div>
            <div class="messages">
                <?php
                $query = "SELECT * FROM Messages;";
                $result = executeQuery($query);

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <i class="fa-brands fa-twitter"></i>
                    <h2>"<?php echo $row["message"] ?>"</h2>
                    <p>@<?php echo $row["name"] ?> </p>
                    <a href="#"><?php echo $row["email"] ?></a>
                    <br>
                    <br>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>