<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navigation Bar</title> -->
    <link rel="stylesheet" href="index1_style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
h1 {
    /* border: 2px solid red;  */
    margin-top: 2rem;
    text-align: center;
    font-family: cursive;
}

.container {
    /* border: 2px solid red; */
    margin-top: 2rem;
}

.paras {
    padding: 0px 65px;
}

.section {
    /* height: 500px; */
    display: flex;
    padding: 100px;
    align-items: center;
    justify-content: space-evenly;
    max-width: 80%;
    margin: auto;
}

.section-left {
    flex-direction: row-reverse;
}
</style>

<body>
    <nav>
        <ul>
            <li class="logo">Task Manager</li>
            <li class="items"><a href="home.php">Home</a></li>
            <li class="items"><a href="signup-user.php">Register</a></li>
            <li class="items"><a href="login-user.php">Login</a>
            <li class="items"><a href="logout-user.php">Logout</a>
            <li class="items"><a href="aboutus.php">About us</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>

    <h1>About us</h1>
    <div class="container">
        <h2 style="text-align:center">Focus your energy on the right things</h2>
        <p style="text-align:center">
            Task Manager surfaces the right tasks at the right times <br>so you always know what to focus on next.</p>
    </div>
    <section class="section" id="services">
        <div class="paras">
            <p class="sectiontag text-big"><b>Task Manager</b><br>The Key to Efficiency</p>
            <hr>
            <p class=" sectionsubtag text-small">
                Do you often feel overwhelmed by the amount of work you have to do? Do you find yourself missing
                deadlines? Or do you sometimes just forget to do something important, so that people have to chase you
                to get work done?

                All of these are symptoms of not keeping a proper "Task Manager" These are prioritized lists of all the
                tasks that you need to carry out. They list everything that you have to do, with the most important
                tasks at the top of the list, and the least important tasks at the bottom.
                <br><br>
                By keeping such a list, you make sure that your tasks are written down all in one place so you don't
                forget anything important. And by prioritizing tasks, you plan the order in which you'll do them, so
                that you can tell what needs your immediate attention, and what you can leave until later.
                <br><br>
                Task Manager are essential if you're going to beat work overload. When you don't use them effectively,
                you'll appear unfocused and unreliable to the people around you.
                <br><br>
                When you do use them effectively, you'll be much better organized, and you'll be much more reliable.
                You'll experience less stress, safe in the knowledge that you haven't forgotten anything important. More
                than this, if you prioritize intelligently, you'll focus your time and energy on high-value activities,
                which will mean that you're more productive, and more valuable to your team.
                <br><br>
                Keeping a properly structured and thought-out list sounds simple enough. But it can be surprising how
                many people fail to use them at all, never mind use them effectively.
                <br><br>
                In fact, it's often when people start to use them effectively and sensibly that they make their first
                personal productivity breakthroughs, and start making a success of their careers. The video, below,
                gives some tips on how you can start to use to-do lists more effectively.
            </p>
            <br>
            <h3> Using Your Task Manager</h3><br><br>
            To use your list, simply work your way through it in order, dealing with the a priority tasks As you
            complete tasks,remove them off or strike them through.
            <br><br>
            What you put on your list and how you use it will depend on your situation. For instance, if you're in a
            sales-type role, a good way to motivate yourself is to keep your list relatively short, and aim to complete
            it every day.
            <br><br>
            But if you're in an operational role, or if tasks are large or dependent on too many other people, then it
            may be better to focus on a longer-term list, and "chip away" at it day-by-day.
            <br><br>
            Many people find it helpful to spend, say, 10 minutes at the end of the day, organizing tasks on their list
            for the next day.
        </div>

    </section>
    <script>
    $(document).ready(function() {
        $('.btn').click(function() {
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
    });
    </script>
</body>

</html>