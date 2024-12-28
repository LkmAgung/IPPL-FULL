<?php include 'partials/header.php'; ?>

<section class="contact">
    <div class="container contact__container">
        <h1>Contact Us</h1>
        <p>Punya pertanyaan atau saran? Kami akan senang mendengarnya! Hubungi kami menggunakan formulir di bawah ini atau melalui saluran media sosial kami.</p>
        
        <?php if(isset($_SESSION['contact'])): ?>
            <div class="alert__message error">
                <p><?= $_SESSION['contact']; unset($_SESSION['contact']); ?></p>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['contact-success'])): ?>
            <div class="alert__message success">
                <p><?= $_SESSION['contact-success']; unset($_SESSION['contact-success']); ?></p>
            </div>
        <?php endif; ?>
        
        <form action="<?= ROOT_URL ?>contact-logic.php" method="POST">
            <div class="form__control">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" placeholder="Your Name" value="<?= $_SESSION['contact-data']['name'] ?? null ?>">
            </div>
            <div class="form__control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email" value="<?= $_SESSION['contact-data']['email'] ?? null ?>">
            </div>
            <div class="form__control">
                <label for="subject">Subjek</label>
                <input type="text" name="subject" id="subject" placeholder="Subject" value="<?= $_SESSION['contact-data']['subject'] ?? null ?>">
            </div>
            <div class="form__control">
                <label for="message">Pesan</label>
                <textarea name="message" id="message" rows="5" placeholder="Your Message"><?= $_SESSION['contact-data']['message'] ?? null ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn">Kirim Pesan</button>
        </form>
        
        <div class="contact__info">
            <h3>Lokasi kami</h3>
            <p>Jalan Rindu No.22, Jakarta, Indonesia</p>
            <h3>Ikuti kami</h3>
            <div class="contact__socials">
                <a href="https://www.facebook.com" target="_blank"><i class="uil uil-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>