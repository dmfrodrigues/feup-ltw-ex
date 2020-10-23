<section id="edit-news">
    <form action="action_insert_news.php" method="post">
        <label>
            Title <input type="text" name="title">
        </label>
        <label>
            Tags (comma-separated, no spaces) <input type="text" name="tags">
        </label>
        <label>
            Introduction <textarea name="introduction"></textarea>
        </label>
        <label>
            Full text <textarea name="fulltext"></textarea>
        </label>
        <input type="submit" value="Submit">
    </form>
</section>
