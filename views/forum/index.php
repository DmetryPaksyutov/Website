
<div>
    <form method="POST" action="/forum/find">
        <input type="text" name="find"/>
        <input type="submit" value="�����"/>
    </form>
</div>

<div>
    <button><a href="/create_topic">������� ���� ����������</a></button>
</div>

<div>
    
<?php if((isset($topics)) && (count($topics > 0))): ?>
	<?php foreach($topics as $oneTopic): ?>
            <div>
                <h2><?=$oneTopic['title'];?></h2>
		<p><?=$oneTopic['text'];?></p>
                <label><?=$oneTopic['name_author'];?></label>
                <label>����� ������� <?=$oneTopic['count_answers'];?></label>
		<a href="/topic/?id=<?=$oneTopic['id'];?>">�������</a>
            </div>
            
	<?php endforeach; ?>
<?php else: ?>
	<h2>���� �� �������</h2>
<?php endif; ?>

</div>

<div>
    ������� ����� ��������
</div>