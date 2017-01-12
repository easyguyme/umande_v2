<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/mapie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_yrA_S4al_EnJCgQgExDJxdCcQgzPeQU"></script>


<script src="admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="admin/assets/scripts.js"></script>
<script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
</script>
<!-- data table -->
<script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="admin/assets/DT_bootstrap.js"></script>
<!-- jgrowl -->
<script src="admin/vendors/jGrowl/jquery.jgrowl.js"></script>
<script>
    $(function() {
        $('.tooltip').tooltip();
        $('.tooltip-left').tooltip({ placement: 'left' });
        $('.tooltip-right').tooltip({ placement: 'right' });
        $('.tooltip-top').tooltip({ placement: 'top' });
        $('.tooltip-bottom').tooltip({ placement: 'bottom' });
        $('.popover-left').popover({placement: 'left', trigger: 'hover'});
        $('.popover-right').popover({placement: 'right', trigger: 'hover'});
        $('.popover-top').popover({placement: 'top', trigger: 'hover'});
        $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
        $('.notification').click(function() {
            var $id = $(this).attr('id');
            switch($id) {
                case 'notification-sticky':
                    $.jGrowl("Stick this!", { sticky: true });
                    break;
                case 'notification-header':
                    $.jGrowl("A message with a header", { header: 'Important' });
                    break;
                default:
                    $.jGrowl("Hello world!");
                    break;
            }
        });
    });
</script>
<link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="admin/vendors/chosen.min.css" rel="stylesheet" media="screen">
<!--  -->
<script src="admin/vendors/jquery.uniform.min.js"></script>
<script src="admin/vendors/chosen.jquery.min.js"></script>
<script src="admin/vendors/bootstrap-datepicker.js"></script>
<!--  -->
<script src="admin/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="admin/vendors/ckeditor/ckeditor.js"></script>
<script src="admin/vendors/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript" src="admin/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    $(function() {
        // Ckeditor standard
        $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
            { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
            [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
            { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
        ]});
        $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
    });
</script>
<!-- <script type="text/javascript" src="admin/assets/modernizr.custom.86080.js"></script> -->
<script src="admin/assets/jquery.hoverdir.js"></script>
<link rel="stylesheet" type="text/css" href="admin/assets//style.css" />
<script type="text/javascript">
    $(function() {
        $('#da-thumbs > li').hoverdir();
    });
</script>
<script src="admin/vendors/fullcalendar/fullcalendar.js"></script>
<script src="admin/vendors/fullcalendar/gcal.js"></script>
<link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
<script src="admin/vendors/bootstrap-datepicker.js"></script>
<script src="admin/assets/DT_bootstrap.js"></script>
<script>
    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('#rootwizard .finish').click(function() {
            alert('Finished!, Starting over!');
            $('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>

<script>
    (function($) {
        $.extend({
            tablesorterPager: new function() {

                function updatePageDisplay(c) {
                    var s = $(c.cssPageDisplay,c.container).val((c.page+1) + c.seperator + c.totalPages);
                }

                function setPageSize(table,size) {
                    var c = table.config;
                    c.size = size;
                    c.totalPages = Math.ceil(c.totalRows / c.size);
                    c.pagerPositionSet = false;
                    moveToPage(table);
                    fixPosition(table);
                }

                function fixPosition(table) {
                    var c = table.config;
                    if(!c.pagerPositionSet && c.positionFixed) {
                        var c = table.config, o = $(table);
                        if(o.offset) {
                            c.container.css({
                                top: o.offset().top + o.height() + 'px',
                                position: 'absolute'
                            });
                        }
                        c.pagerPositionSet = true;
                    }
                }

                function moveToFirstPage(table) {
                    var c = table.config;
                    c.page = 0;
                    moveToPage(table);
                }

                function moveToLastPage(table) {
                    var c = table.config;
                    c.page = (c.totalPages-1);
                    moveToPage(table);
                }

                function moveToNextPage(table) {
                    var c = table.config;
                    c.page++;
                    if(c.page >= (c.totalPages-1)) {
                        c.page = (c.totalPages-1);
                    }
                    moveToPage(table);
                }

                function moveToPrevPage(table) {
                    var c = table.config;
                    c.page--;
                    if(c.page <= 0) {
                        c.page = 0;
                    }
                    moveToPage(table);
                }


                function moveToPage(table) {
                    var c = table.config;
                    if(c.page < 0 || c.page > (c.totalPages-1)) {
                        c.page = 0;
                    }

                    renderTable(table,c.rowsCopy);
                }

                function renderTable(table,rows) {

                    var c = table.config;
                    var l = rows.length;
                    var s = (c.page * c.size);
                    var e = (s + c.size);
                    if(e > rows.length ) {
                        e = rows.length;
                    }


                    var tableBody = $(table.tBodies[0]);

                    // clear the table body

                    $.tablesorter.clearTableBody(table);

                    for(var i = s; i < e; i++) {

                        //tableBody.append(rows[i]);

                        var o = rows[i];
                        var l = o.length;
                        for(var j=0; j < l; j++) {

                            tableBody[0].appendChild(o[j]);

                        }
                    }

                    fixPosition(table,tableBody);

                    $(table).trigger("applyWidgets");

                    if( c.page >= c.totalPages ) {
                        moveToLastPage(table);
                    }

                    updatePageDisplay(c);
                }

                this.appender = function(table,rows) {

                    var c = table.config;

                    c.rowsCopy = rows;
                    c.totalRows = rows.length;
                    c.totalPages = Math.ceil(c.totalRows / c.size);

                    renderTable(table,rows);
                };

                this.defaults = {
                    size: 10,
                    offset: 0,
                    page: 0,
                    totalRows: 0,
                    totalPages: 0,
                    container: null,
                    cssNext: '.next',
                    cssPrev: '.prev',
                    cssFirst: '.first',
                    cssLast: '.last',
                    cssPageDisplay: '.pagedisplay',
                    cssPageSize: '.pagesize',
                    seperator: "/",
                    positionFixed: true,
                    appender: this.appender
                };

                this.construct = function(settings) {

                    return this.each(function() {

                        config = $.extend(this.config, $.tablesorterPager.defaults, settings);

                        var table = this, pager = config.container;

                        $(this).trigger("appendCache");

                        config.size = parseInt($(".pagesize",pager).val());

                        $(config.cssFirst,pager).click(function() {
                            moveToFirstPage(table);
                            return false;
                        });
                        $(config.cssNext,pager).click(function() {
                            moveToNextPage(table);
                            return false;
                        });
                        $(config.cssPrev,pager).click(function() {
                            moveToPrevPage(table);
                            return false;
                        });
                        $(config.cssLast,pager).click(function() {
                            moveToLastPage(table);
                            return false;
                        });
                        $(config.cssPageSize,pager).change(function() {
                            setPageSize(table,parseInt($(this).val()));
                            return false;
                        });
                    });
                };

            }
        });
        // extend plugin scope
        $.fn.extend({
            tablesorterPager: $.tablesorterPager.construct
        });

    })(jQuery);



</script>