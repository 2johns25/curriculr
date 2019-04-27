<?php require "../components/html_start.php"?>
<?php require "../components/global_header.php"?>
<?php require "../components/class_header.php"?>
<div class="global_content_container">
    <div class="one_col_layout_wrapper">

    </div> <!-- One col layout wrapper -->
    <div class="two_col_layout_wrapper">
        <div class="two_col_layout_main_col">

            <div class="class_introduction_wrapper">
                <?php require "../components/class_introduction.php"?>
            </div> <!--Class introduction wrapper -->

            <div class="class_feed_wrapper">
                <?php require "../components/class_feed.php"?>
            </div> <!-- Class feed wrapper -->   

        </div> <!-- Two col layout main col -->
        <div class="two_col_layout_side_col">

            <div class="side_box_wrapper">
                <div class="reminder_box_wrapper">
                    <?php require "../components/reminder_box.php"?>
                </div> <!-- Reminder box wrapper -->
            </div> <!-- Side box wrapper -->
        </div> <!-- Two col layout side col -->
    </div> <!-- Two col layout wrapper -->
</div> <!-- Global content container -->
<?php require "../components/html_end.php"?>