<?php if($topic): ?>
<div>
    <h2><?=$oneTopic['title'];?></h2><br/>
    <label><?=$oneTopic['name_author'];?></label><br/>
    <p><?=$oneTopic['text'];?></p><br/>
                
</div>

<div>
    <h3>��������</h3><br/>
    <form action="" method="post">
        <input type="text" name="name"/><br/>
        <?php if($errors['name']): ?>
        <label>���� � ������ ������ ���� ���������</label><br/>
        <?php endif; ?>
        
        <textaria name="text"></textaria><br/>
        <?php if($errors['text']): ?>
        <label>���� � ���������� ������ ���� ���������</label><br/>
        <?php endif; ?>
        
        <input type="hidden" name="id" value="<?php echo $topic['id']; ?>" />
        <input type="submit" value="��������"/>
        <?php if($errors['other']): ?>
        <label>��������� ����������� ������</label><br/>
        <?php endif; ?>
    </form>
</div>

<div>
    <h3>������</h3>
    <?php foreach($answers as $oneAnswe): ?>
    <div>
        <label><?=$oneAnswer['name'];?></label>
        <p><?=$oneAnswer['text'];?></p>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
<h1>������ ���� �� �������</h1>
<?php endif; ?>
