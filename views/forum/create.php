
<div>
    <form method="POST" action="/forum/create">
        <?php if($errors['name']): ?>
            <label>������� ���� ���</label><br/>
        <?php endif; ?>
        <input type="text" name="name"/><br/>
        
         <?php if($errors['email']): ?>
            <label>������� ���� �����</label><br/>
        <?php endif; ?>
        <input type="email" name="email"/><br/>
        
         <?php if($errors['title']): ?>
            <label>������� ����</label><br/>
        <?php endif; ?>
        <input type="text" name="title"/><br/>
        
         <?php if($errors['text']): ?>
            <label>������� ����� ����</label><br/>
        <?php endif; ?>
            <textarea name="text"></textarea><br/>
        
        <input type="submit" value="Co�����"/>
    </form>
</div>