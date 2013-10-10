(function($) {

    $.fn.extend({

        blurbsFieldType: function() {

            var container = this;
            var inputFindSelector = '[name^=' + container.attr('id') + ']';

            function addItem() {
                var blurb = $(this).parents('.blurb');
                var index = parseInt(blurb.data('index')) + 1;
                increaseNextIndexes(blurb);
                blurb.after($('#blurb-template').html().replace(/:index/g, index));
                return false;
            }

            function removeItem(root) {
                var blurb = $(this).parents('.blurb');
                decreaseNextIndexes(blurb);
                blurb.remove();
                return false;
            }

            function increaseNextIndexes(blurb) {
                var index = blurb.data('index') + 2;
                blurb.nextAll().each(function() {
                    updateIndex($(this), index++);
                });
            }

            function decreaseNextIndexes(blurb) {
                var index = blurb.data('index') + 1;
                blurb.nextAll().each(function() {
                    updateIndex($(this), index++);
                });
            }

            function updateIndex(blurb, index) {
                //blurb.data('index', index);
                // TODO: work out why only native works!
                blurb[0].setAttribute('data-index', index);
                blurb.find(inputFindSelector).each(function() {
                    var field = $(this);
                    field.attr('name', field.attr('name').replace(
                        /\[[0-9]+\]\[(title|link|body)\]/g, '[' + index + '][$1]'
                    ));
                });
            }

            return this.each(function() {
                var blurb = $(this);
                blurb.on('click', '.blurb-add', addItem);
                blurb.on('click', '.blurb-remove', removeItem);
            });
        }

    });

    $(function() {
        $('.blurbs').blurbsFieldType();
    });

})(jQuery);