<?php require "../components/html_start.php"?>
<?php require "../components/global_header.php"?>
<?php require "../components/class_header.php"?>
<div class="global_content_container">
 <div class="one_col_layout_wrapper">
    <?php require "../components/topic_editor_header.php"?>
</div> <!-- One col layout wrapper -->

    <div class="two_col_layout_wrapper">

        <div class="two_col_layout_main_col two_col_layout_main_col_reverse">
            <div class="topic_editor_wrapper">
                <?php require "../components/topic_editor.php"?>
            </div>
        </div> <!-- Two col layout main col -->

        <div class="two_col_layout_side_col two_col_layout_side_col_reverse">
            <div class="topic_sidebox_wrapper">
                <?php require "../components/topic_sidebox.php"?>
            </div> <!-- Topic sidebox wrapper -->
        </div> <!-- Two col layout side col -->

</div> <!-- Two col layout wrapper -->

</div> <!-- Global content container -->

<?php require "../components/html_end.php"?>