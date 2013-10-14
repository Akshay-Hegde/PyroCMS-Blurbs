(function($) {

    $.fn.extend({

        blurbsFieldType: function() {

            var blurbs = this;
            var inputSelector = '[name^=' + blurbs.attr('id') + ']';

            function addItem() {
                $(this).parents('.blurb').after($('#blurb-template').html());
                resetIndexes();
            }

            function removeItem() {
                $(this).parents('.blurb').remove();
                resetIndexes();
            }

            function moveItemUp() {
                var blurb = $(this).parents('.blurb');
                var previous = blurb.prev();
                if (previous.length) {
                    previous.before(blurb.detach());
                    resetIndexes();
                }
            }

            function moveItemDown() {
                var blurb = $(this).parents('.blurb');
                var next = blurb.next();
                if (next.length) {
                    next.after(blurb.detach());
                    resetIndexes();
                }
            }

            function resetIndexes() {
                var index = 0;
                blurbs.find('.blurb').each(function() {
                    var blurb = $(this);
                    // TODO: find out why only native works
                    // blurb.data('index', index);
                    this.setAttribute('data-index', index);
                    blurb.find(inputSelector).each(function() {
                        var field = $(this);
                        field.attr('name', field.attr('name').replace(
                            /\[[0-9]+\]\[(title|link|body)\]/g, '[' + index + '][$1]'
                        ));
                    });
                    index++;
                });
            }

            function toggleMore() {
                var link = $(this);
                link.text(link.text() == 'More' ? 'Less' : 'More');
                var blurb = link.parents('.blurb');
                blurb.find('.blurb-more').toggle();
                blurb.siblings().each(function() {
                    hideMore($(this));
                });
                return false;
            }

            function hideMore(blurb) {
                blurb.find('.blurb-more').hide();
                blurb.find('.blurb-togglemore').text('More');
            }

            return this.each(function() {
                blurbs.on('click', '.blurb-add', addItem);
                blurbs.on('click', '.blurb-remove', removeItem);
                blurbs.on('click', '.blurb-moveup', moveItemUp);
                blurbs.on('click', '.blurb-movedown', moveItemDown);
                blurbs.on('click', '.blurb-togglemore', toggleMore);
            });
        }

    });

    $(function() {
        $('.blurbs').blurbsFieldType();
    });

})(jQuery);