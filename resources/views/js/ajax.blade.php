<script type="text/javascript">
    $(document).ready(function() {
        $("#input").keyup(function() {
            let strcari = $("#input").val()
            if ($('#browse').hasClass('active')) {
                let x = 'blog';
                if (strcari != "") {
                    let urll = "{{ url('ajax/blog') }}"
                    $(".blog").html(
                        '<div class="card"><div id="judul"><h5>Seacrh blog apa hari ini?</h5></div></div>'
                    )
                    readAjaxBl(urll, strcari, x);
                } else {
                    readBlog(x)
                }
            } else if ($('#user').hasClass('active')) {
                let x = 'user';
                if (strcari != "") {
                    let urll = "{{ url('ajax/user') }}"
                    $(".users").html(
                        '<div class="card"><div class="messange"><div class="username"><p>Seacrh siapa nich?</p></div></div></div>'
                    )
                    readAjaxBl(urll, strcari, x);
                } else {
                    readBlog(x)
                }
            }
        })
    })

    function readBlog(view) {
        if (view == 'blog') {
            $.get("{{ url('read/blog') }}", {},
                function(data, status) {
                    $(".blog").html(data)
                })
        } else if (view == 'user') {
            $.get("{{ url('read/user') }}", {},
                function(data, status) {
                    $(".users").html(data)
                })
        }
    }

    function readAjaxBl(urll, strcari, view) {
        $.ajax({
            type: "get",
            url: urll,
            data: "name=" + strcari,
            success: function(data) {
                if (view == 'blog') {
                    $(".blog").html(data)
                } else if (view == 'user') {
                    $(".users").html(data)
                }
            }
        });
    }
</script>
