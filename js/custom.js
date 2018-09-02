
(function ($) {

    $('.vimeoVideo').hide()
    $('.vimeoVideo').slice(0, 4).show()

    var portfolioLoadMore = {

        pages: 0,
        currentPage: 1,
        $wrapper: $('#portfolioLoadMoreWrapper'),
        $btn: $('#portfolioLoadMore'),
        $loader: $('#portfolioLoadMoreLoader'),

        build: function () {

            var self = this

            self.pages = self.$wrapper.data('total-pages');

            if (self.pages <= 1) {

                self.$btn.remove();
                return;

            } else {

                self.$btn.on('click', function () {
                    self.loadMore();
                });

                // Infinite Scroll
                if (self.$btn.hasClass('btn-portfolio-infinite-scroll')) {
                    self.$btn.appear(function () {
                        self.$btn.trigger('click');
                    }, {
                            data: undefined,
                            one: false,
                            accX: 0,
                            accY: 0
                        });
                }

            }

        },
        loadMore: function () {
            var self = this;

            self.$loader.css({
                height: self.$btn.outerHeight(true)
            });

            self.$btn.hide();
            self.$loader.show();

            var $items = $('.vimeoVideo:hidden').slice(0, 2).show()

            setTimeout(function () {
                self.$wrapper.append($items)
                self.$loader.hide();
                self.$btn.show();
            }, 1000);

        }

    }

    if ($('#portfolioLoadMoreWrapper').get(0)) {
        portfolioLoadMore.build();
    }

    $(document).ready(function(){

        $('.popup-vimeo').magnificPopup({
            type: 'iframe',
            callbacks: {
                open: function() {
                    $('html').addClass('lightbox-open');
                },
                close: function() {
                    $('html').removeClass('lightbox-open');
                }
            }
        });

    })

}).apply(this, [jQuery]);