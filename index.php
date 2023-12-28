<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Rahul's portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #df0f0f;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 1em;
            background-color: #ff1b1b;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Rahul jadhav</h1>
        <p>Electronics Engineer</p>
    </header>

    <section>
        <h2>About Me</h2>
        <p>Dedicated and highly skilled Electronics and Telecommunications Engineer with a strong academic background and comprehensive hands-on experience in designing, implementing, and maintaining electronic systems. Adept at analyzing complex technical issues, developing innovative solutions, and collaborating with cross-functional teams to achieve project goals. Seeking a challenging role in a dynamic organization where my technical expertise, problem-solving skills, and commitment to excellence can contribute to the company's success.</p>
    </section>

    <section>
        <h2>My Projects</h2>
        <ul>
            <?php
            // You can dynamically generate project items from a database or array
            $projects = [
                "Project 1: Bus Reservation systems .This project is useful for online ticket booking.This project can be done by using PHP Programming,HTML,CSS,MYSQL ",
                "Project 2: Clone Application :Spotify This project is a simple clone application .It is made up by using HTML,CSS,MYSQL,JSEtc",
                "Project 3: Information Leak Detection Testing: This project can be done by using NetBEANS ide, Java Programming,Mysql and PHP programming."
            ];

            foreach ($projects as $project) {
                echo "<li>$project</li>";
            }
            ?>
        </ul>
    </section>

    <section>
        <h2>Contact Me</h2>
        <p>Email: rahul60310jadhav@gmail.com</p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/rahul-jadhav">rahul-jadhav</a></p>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> Rahul jadhav 
    </footer>

</body>
</html>