<ul class="blurbs" id="<?php echo $formSlug ?>">
    <?php if ($items): ?>
        <?php foreach ($items as $i => &$item): ?>
            <li class="blurb" data-index="<?php echo $i ?>">
                <ul class="blurb-inputs">
                    <li class="input">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][title]" placeholder="Title" value="<?php if (isset($item['title'])) echo htmlspecialchars($item['title']) ?>">
                        <a href="#" class="blurb-togglemore">More</a>
                    </li>
                    <li class="input blurb-more">
                        <input type="text" name="<?php echo $formSlug ?>[<?php echo $i ?>][link]" placeholder="Link" value="<?php if (isset($item['link'])) echo htmlspecialchars($item['link']) ?>">
                    </li>
                    <li class="input blurb-more">
                        <textarea name="<?php echo $formSlug ?>[<?php echo $i ?>][body]" placeholder="Body"><?php if (isset($item['body'])) echo htmlspecialchars($item['body']) ?></textarea>
                    </li>
                </ul>
                <div class="buttons blurb-buttons blurb-more">
                    <button type="button" class="btn small gray blurb-moveup">
                        <span class="icon-arrow-up"></span> Move up
                    </button>
                    <button type="button" class="btn small gray blurb-movedown">
                        <span class="icon-arrow-down"></span> Move down
                    </button>
                    <button type="button" class="btn small gray blurb-remove">
                        <span class="icon-remove"></span> Remove
                    </button>
                    <button type="button" class="btn small gray blurb-add">
                        <span class="icon-plus"></span> Insert after
                    </button>
                </div>
            </li>
        <?php endforeach ?>
    <?php else: ?>
        <li class="blurb" data-index="0">
            <ul class="blurb-inputs">
                <li class="input">
                    <input type="text" name="<?php echo $formSlug ?>[0][title]" placeholder="Title">
                    <a href="#" class="blurb-togglemore">More</a>
                </li>
                <li class="input blurb-more">
                    <input type="text" name="<?php echo $formSlug ?>[0][link]" placeholder="Link">
                </li>
                <li class="input blurb-more">
                    <textarea name="<?php echo $formSlug ?>[0][body]" placeholder="Body"></textarea>
                </li>
            </ul>
            <div class="buttons blurb-buttons blurb-more">
                <button type="button" class="btn small gray blurb-moveup">
                    <span class="icon-arrow-up"></span>
                </button>
                <button type="button" class="btn small gray blurb-movedown">
                    <span class="icon-arrow-down"></span>
                </button>
                <button type="button" class="btn small gray blurb-remove">
                    <span class="icon-remove"></span>
                </button>
                <button type="button" class="btn small gray blurb-add">
                    <span class="icon-plus"></span>
                </button>
            </div>
        </li>
    <?php endif ?>
</ul>

<script type="text/template" id="blurb-template">
    <li class="blurb" data-index="0">
        <ul class="blurb-inputs">
            <li class="input">
                <input type="text" name="<?php echo $formSlug ?>[0][title]" placeholder="Title">
                <a href="#" class="blurb-togglemore">More</a>
            </li>
            <li class="input blurb-more">
                <input type="text" name="<?php echo $formSlug ?>[0][link]" placeholder="Link">
            </li>
            <li class="input blurb-more">
                <textarea name="<?php echo $formSlug ?>[0][body]" placeholder="Body"></textarea>
            </li>
        </ul>
        <div class="buttons blurb-buttons blurb-more">
            <button type="button" class="btn small gray blurb-moveup">
                <span class="icon-arrow-up"></span>
            </button>
            <button type="button" class="btn small gray blurb-movedown">
                <span class="icon-arrow-down"></span>
            </button>
            <button type="button" class="btn small gray blurb-remove">
                <span class="icon-remove"></span>
            </button>
            <button type="button" class="btn small gray blurb-add">
                <span class="icon-plus"></span>
            </button>
        </div>
    </li>
</script>
