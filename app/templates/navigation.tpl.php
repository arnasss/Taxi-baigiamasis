<?php if (isset($data) && !empty($data)): ?>
<nav class="bg-brown">
    <div class="wrapper">
        <a href="<?php ?>"><img src="<?php print $data['image']?>" alt="logo"</a>
        <ul>
            <?php foreach ($data['links'] as $link): ?>
            <li><a class="text-white" href="<?php print $link['url']; ?>"><?php print $link['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
<?php endif; ?>
