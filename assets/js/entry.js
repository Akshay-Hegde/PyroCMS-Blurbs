(function($) {

    $.fn.extend.blurbsFieldType = function() {

        var container = this;

        function addItem() {
            var index = parseInt(this.parents('.blurb').data('index')) + 1;
            container.append($('#blurb-template').html().replace(/:index/g, index));
        }

        function removeItem(root) {
            var blurb = this.parents('.blurb');
            increaseNextIndexes(blurb);
            blurb.remove();
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

    };

    $(function() {
        $('.blurbs').blurbsFieldType();
    });

})(jQuery);