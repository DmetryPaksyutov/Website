
<div>
    <form method="POST" action="/forum/create">
        <?php if($errors['name']): ?>
            <label>¬ведите ваше им€</label><br/>
        <?php endif; ?>
        <input type="text" name="name"/><br/>
        
         <?php if($errors['email']): ?>
            <label>¬ведите вашу почту</label><br/>
        <?php endif; ?>
        <input type="email" name="email"/><br/>
        
         <?php if($errors['title']): ?>
            <label>¬ведите тему</label><br/>
        <?php endif; ?>
        <input type="text" name="title"/><br/>
        
         <?php if($errors['text']): ?>
            <label>¬ведите текст темы</label><br/>
        <?php endif; ?>
            <textarea name="text"></textarea><br/>
        
        <input type="submit" value="Coздать"/>
    </form>
</div>