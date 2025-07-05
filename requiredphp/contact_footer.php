<!DOCTYPE HTML>
<html lang="en-us">
    <!-- Contact -->
    <section id="contact">
        <div class="inner">
            <section>
                <form id="contact-form" method="post" action="contactform.php">
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required/>
<!--                            <h4 id='name-status'>test</h4>-->
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required/>
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" required></textarea>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="send_copy" name="send_copy">
                            <label for="send_copy">Email me a copy</label>
                        </div>
                        <div class="field half">
                            <input type="number" id="ishuman" name="ishuman">
                            <label for="ishuman">Enter "406" to send message</label>
                        </div>
                        <div id="iambot" class="field half">
                            <input type="checkbox" id="requiredbox" name="requiredbox">
                            <label for="requiredbox">Check this to submit</label>
                        </div>
                    </div>
                    <h2 id="status-message"></h2>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary" /></li>
                        <li><input type="reset" value="Clear" /></li>
                    </ul>
                </form>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="mailto: info@thelab406.com">info@thelab406.com</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-phone"></span>
                        <h3>Phone</h3>
                        <a href="tel: 4065360321">(406) 536-0321</a>
                        <br /><span>
                        Weekdays 3pm-9pm <br>
                        Weekends 10am-10pm <br>
                        Members only Monday-Thursday
                        </span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-home"></span>
                        <h3>Address</h3>
                        <span>156 Wildcat Wy<br />
                            Bozeman, MT 59718<br />
                            United States of America</span>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="icons">
                <!--								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>-->
                <li><a href="https://www.facebook.com/profile.php?id=61569373049994" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/thelab406/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <!--								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>-->
                <!--								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>-->
            </ul>
            <ul class="copyright">
                <li>&copy; The Lab 406 - 2025</li><li>Design: HTML5 UP</li>
            </ul>
        </div>
    </footer>
</html>