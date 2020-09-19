<?php echo '<div class="contact">
    <form action="submit" class="contact-form">
        <h3>Contact Us</h3>
        <p>Let us know if you have a question, suggestion, or concern.</p>
        <input type="text" placeholder="Name" id="name">
        <input type="text" placeholder="Email" id="email">
        <select id="topic">
            <option value="Inquire">Inquire</option>
            <option value="Concern">Concern</option>
            <option value="Suggestion">Suggestion</option>
        </select>
        <textarea id="subject" name="subject" placeholder="Write something.."> </textarea>
        <button class="submit-btn">Submit Message</button>
    </form>
</div>' ; ?>