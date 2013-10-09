(function($) {

    $.fn.extend({

        blurbsFieldType: function() {

            var container = this;

            function addItem() {
                var blurb = $(this).parents('.blurb');
                var index = parseInt(blurb.data('index')) + 1;
                increaseNextIndexes(blurb);
                container.append($('#blurb-template').html().replace(/:index/g, index));
                return false;
            }

            function removeItem(root) {
                var blurb = $(this).parents('.blurb');
                decreaseNextIndexes(blurb);
                blurb.remove();
                return false;
            }

            function decreaseNextIndexes(blurb) {
                blurb.nextUntil().each(function() {
                    var sibling = $(this);
                    sibling.data('index', parseInt(sibling.data('index')) - 1);
                });
            }

            function increaseNextIndexes(blurb) {
                blurb.nextUntil().each(function() {
                    var sibling = $(this);
                    sibling.data('index', parseInt(sibling.data('index')) + 1);
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