<script type="text/javascript">
//<!--
    $(function () {
        if ($('#codeigniter_profiler').length > 0) {
            var prof = $('<div>', {
                id: 'profiler',
                html: $('<img>', {
                    id: 'profiler_button',
                    height: 30,
                    width: 30,
                    alt: 'Toggle Profiler',
                    title: 'Toggle Profiler',
                    src: 'assets/Mamba/img/query.png'
                })
            });

            $('body').prepend(prof);
            $('body').prepend($('#codeigniter_profiler'));
            $('#profiler').css('text-align', 'right');
            $('#profiler').css('border-top', '10px #fff solid');
            $('#codeigniter_profiler').css('display', 'none');
            $('#codeigniter_profiler').css('background', '#FFF');
            $('#codeigniter_profiler').css('text-align', 'left');
            $('#profiler_button').click(function (e) {
                $('#codeigniter_profiler').slideToggle();
                e.stopPropagation();
            });
            $('#profiler_button').hover(function () {
                this.orgImage = $(this).attr('src');
                this.rolloverImage = this.orgImage.replace(/(\.gif|\.jpg|\.png)/, "_on$1");
                $(this).attr('src', this.rolloverImage);
            }, function () {
                $(this).attr('src', this.orgImage);
            });
        }
    });
// -->
</script>