<section id="contact">
    <h1>Contact Me</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Your Email</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Your Message</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>
