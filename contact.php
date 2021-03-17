<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Contact</title>
    <?php include 'templates/links.php'; ?>
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
        <?php include 'templates/header.php'; ?>
        <section class="hero-con">
            <h2 class="hidden">Contact Hero</h2>
                <div id="contact-hero">

                </div>
        </section>
        <section id="contact-main-con">
            <h2 class="hidden">Contact Us</h2>
            <div class="form-con">
                <form action="" method="POST" id="contact-form" class="contact-form">
                    <label for="fname">First name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="John" class="input" required>
                    <label for="lname">Last name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Doe" class="input" required>
                    <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="123-456-7890" required>
                    <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="johndoe@example.ca" required>
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="input" required>
                        <option value="joining">Joining LRG</option>
                        <option value="services">Using LRG services</option>
                        <option value="mentorship">Junior Development Program</option>
                        <option value="membership">Membership</option>
                        <option value="other">Other</option>
                    </select>
                    <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="How can we help?" required></textarea>
                    <div class="contact-submit">
                        <button class="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div id="contact-sidebar">
                <img src="/images/placeholder.jpg" alt="">
                <img src="/images/placeholder.jpg" alt="">
                <img src="/images/placeholder.jpg" alt="">
            </div>

        </section>



        <?php include 'templates/footer.php'; ?>
    </div>
</main>
<script src="js/burger.js"></script>
<script src="js/scroll.js"></script>
</body>
</html>