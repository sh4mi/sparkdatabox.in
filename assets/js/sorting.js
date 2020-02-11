   
    ! function(r) {
        "use strict";
        var a = function() {
            this.$body = r("body")
        };
        a.prototype.init = function() {
            r('[data-plugin="dragula"]').each(function() {
                var a = r(this).data("containers"),
                t = [];
                if (a)
                for (var n = 0; n < a.length; n++) t.push(r("#" + a[n])[0]);
                else t = [r(this)[0]];
                var i = r(this).data("handleclass");
                i ? dragula(t, {
                    moves: function(a, t, n) {
                        return n.classList.contains(i)
                    }
                }) : dragula(t)
            })
        }, r.Dragula = new a, r.Dragula.Constructor = a
    }(window.jQuery),
    function(a) {
        "use strict";
        window.jQuery.Dragula.init()
    }();


    function sort() {
        var containerArray = ['section-list'];
        var itemArray = [];
        var itemJSON;
        for(var i = 0; i < containerArray.length; i++) {
            $('#'+containerArray[i]).each(function () {
                $(this).find('.draggable-item').each(function() {
                    //console.log(this.id);
                    itemArray.push(this.id);
                });
            });
        }
        var url = baseURL + "admin/ajax_sort_section"
        itemJSON = JSON.stringify(itemArray);
        $.ajax({
            url: url,
            type : 'POST',
            data : {itemJSON : itemJSON},
            success: function(response)
            {
                //success_notify('<?php echo get_phrase('sections_have_been_sorted'); ?>');
                setTimeout(
                  function()
                  {
                    location.reload();
                }, 1000);

            }
        });
    }

    function sort_widgets(widget) {

        //var widget = $(this).attr('data-widget');
        console.log(widget);
        var containerArray = ['widget-list'+widget];
        var itemArray = [];
        var itemJSON;
        for(var i = 0; i < containerArray.length; i++) {
            $('#'+containerArray[i]).each(function () {
                $(this).find('.draggable-item').each(function() {
                    console.log(this.id);
                    itemArray.push(this.id);
                });
            });
        }
        var url = baseURL + "admin/ajax_sort_widget"
        itemJSON = JSON.stringify(itemArray);
        $.ajax({
            url: url,
            type : 'POST',
            data : {itemJSON : itemJSON},
            success: function(response)
            {
                //success_notify('<?php echo get_phrase('sections_have_been_sorted'); ?>');
                setTimeout(
                  function()
                  {
                    location.reload();
                }, 1000);

            }
        });
    }
    // onDomChange(function(){
    //     $('#section-sort-btn').show();
    // });

