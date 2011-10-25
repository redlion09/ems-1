<div id="navigation">
    <ul>
        <li><a href="" class="icon">Home</a></li>
        <?php if($userInfo['group_id'][0] == ADMINISTRATOR): ?>
            <li><a href="" class="icon">Master Files</a></li>
        <?php elseif($userInfo['group_id'][0] == ACCOUNTING || $userInfo['group_id'][0] == REGULAR): ?>
            <li><a href="" class="icon">Expense</a></li>
        <?php endif; ?>
        <li><a href="" class="icon">Profile</a></li>
        <li><a href="" class="icon">Search</a></li>
        <li><a href="" class="icon">About</a></li>
        <li><a href="" class="icon">User Guide</a></li>
    </ul>
</div>