<section id="comments">
    <h1><?= count($comments) ?> Comments</h1>
    <?php
    foreach ($comments as $comment) {
        $epoch_comment = (int)$comment['published'];
        $dt_comment = new DateTime("@$epoch_comment");
    ?>
        <article class="comment">
            <span class="user"><?= $comment['username'] ?></span>
            <span class="date"><?= $dt_comment->format('Y-m-d, H:i') ?></span>
            <p><?= $comment['text'] ?></p>
        </article>
    <?php
    }
    ?>
    <form>
        <h2>Add your voice...</h2>
        <label>Username
            <input type="text" name="username">
        </label>
        <label>E-mail
            <input type="email" name="email">
        </label>
        <label>Comment
            <textarea name="comment"></textarea>
        </label>
        <input type="submit" value="Reply">
    </form>
</section>
