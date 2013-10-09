<ul class="blurbs">
    <?php if (isset($items)): ?>
        <?php foreach ($items as $i => &$item): ?>
            <li class="blurb" data-index="<?php echo $i ?>">
                <ul class="blurb-inputs">
                    <li class="input">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][title]" placeholder="Title" value="<?php if (isset($item['title'])) echo htmlspecialchars($item['title']) ?>">
                    </li>
                    <li class="input">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][link]" placeholder="Link" value="<?php if (isset($item['link'])) echo htmlspecialchars($item['link']) ?>">
                    </li>
                    <li class="input">
                        <textarea name="<?php echo $formSlug ?>[<?php echo $i ?>][body]" placeholder="Body"><?php if (isset($item['body'])) echo htmlspecialchars($item['body']) ?></textarea>
                    </li>
                </ul>
                <ul class="blurb-control">
                    <li><a href="#" class="blurb-moveup">Move up</a></li>
                    <li><a href="#" class="blurb-movedown">Move down</a></li>
                    <li><a href="#" class="blurb-remove">Delete</a></li>
                    <li><a href="#" class="blurb-add">Add</a></li>
                </ul>
            </li>
        <?php endforeach ?>
    <?php else: ?>
        <li class="blurb" data-index="0">
            <ul class="blurb-inputs">
                <li class="input">
                    <input type="text" name="<?php echo $formSlug ?>[0][title]" placeholder="Title">
                </li>
                <li class="input">
                    <input type="text" name="<?php echo $formSlug ?>[0][link]" placeholder="Link">
                </li>
                <li class="input">
                    <textarea name="<?php echo $formSlug ?>[0][body]" placeholder="Body"></textarea>
                </li>
            </ul>
            <ul class="blurb-control">
                <li><a href="#" class="blurb-moveup">Move up</a></li>
                <li><a href="#" class="blurb-movedown">Move down</a></li>
                <li><a href="#" class="blurb-remove">Delete</a></li>
                <li><a href="#" class="blurb-add">Add</a></li>
            </ul>
        </li>
    <?php endif ?>
</ul>

<script type="text/template" id="blurb-template">
    <li class="blurb" data-index=":index">
        <ul class="blurb-inputs">
            <li class="input">
                <input type="text" name="<?php echo $formSlug ?>[:index][title]" placeholder="Title">
            </li>
            <li class="input">
                <input type="text" name="<?php echo $formSlug ?>[:index][link]" placeholder="Link">
            </li>
            <li class="input">
                <textarea name="<?php echo $formSlug ?>[:index][body]" placeholder="Body"></textarea>
            </li>
        </ul>
        <ul class="blurb-control">
            <li><a href="#" class="blurb-moveup">Move up</a></li>
            <li><a href="#" class="blurb-movedown">Move down</a></li>
            <li><a href="#" class="blurb-remove">Delete</a></li>
            <li><a href="#" class="blurb-add">Add</a></li>
        </ul>
    </li>
</script>