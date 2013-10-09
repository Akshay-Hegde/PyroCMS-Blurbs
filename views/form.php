<ul class="blurbs-field-type" id="<?php echo $formSlug ?>">
    <?php if (isset($items)): ?>
        <?php foreach ($items as $i => &$item): ?>
            <li>
                <ul class="blurbs-input">
                    <li class="input">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][title]" placeholder="Title" value="<?php if (isset($item['title'])) echo $item['title'] ?>">
                    </li>
                    <li class="input">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][link]" placeholder="Link" value="<?php if (isset($item['link'])) echo $item['link'] ?>">
                    </li>
                    <li class="input">
                        <textarea name="<?php echo $formSlug ?>[<?php echo $i ?>][body]" placeholder="Body"><?php if (isset($item['body'])) echo $item['body'] ?></textarea>
                    </li>
                </ul>
                <div class="blurbs-move">
                    <a href="#" class="blurbs-move-up">Move up</a> / <a href="#" class="blurbs-move-down">Move down</a>
                </div>
                <div class="blurbs-remove">
                    <a href="#">Remove</a>
                </div>
            </li>
        <?php endforeach ?>
    <?php else: ?>
        <li>
            <ul class="blurbs-input">
                <li class="input">
                    <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][title]" placeholder="Title">
                </li>
                <li class="input">
                    <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][link]" placeholder="Link">
                </li>
                <li class="input">
                    <textarea name="<?php echo $formSlug ?>[<?php echo $i ?>][body]" placeholder="Body"></textarea>
                </li>
            </ul>
            <div class="blurbs-move">
                <a href="#" class="blurbs-move-up">Move up</a> / <a href="#" class="blurbs-move-down">Move down</a>
            </div>
            <div class="blurbs-remove">
                <a href="#">Remove</a>
            </div>
        </li>
    <?php endif ?>
</ul>

<div class="blurb-add">
    <a href="#">Add</a>
</div>