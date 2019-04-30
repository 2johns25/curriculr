<?php require "../components/html_start.php"?>
<?php require "../components/global_header.php"?>
<?php require "../components/class_header.php"?>
<div class="global_content_container">
<div class="one_col_layout_wrapper">
        <?php require "../components/topic_header.php"?>
    </div>
    <div class="two_col_layout_wrapper">
        <div class="two_col_layout_main_col two_col_layout_main_col_reverse">
            <div class="topic_content_wrapper">
                <?php require "../components/topic_comments.php"?>
            </div>
        </div> <!-- Two col layout main col -->

        <div class="two_col_layout_side_col two_col_layout_side_col_reverse">
            <div class="topic_sidebox_wrapper">
            <div class="sidebox_container">
        <p class="sidebox_header">Topic contents</p>
        <ul class="topic_box_list">
            <li><a href="topic.php" class="topic_title">Introduction to the OSI Network Model</a></li>
            <ul class="topic_box_subtopic_list">
                <li><a href="sub_topic.php" class="content_sub_topic">Layer 1: Physical layer</a></li>
                    <ul class="topic_box_sub_subtopic_list">
                        <li><a href="sub_topic_section.php" class="content_sub_topic">Wired media</a></li>
                        <li><a class="content_sub_topic">Wireless media</a></li>
                    </ul>
                <li><a class="content_sub_topic">Layer 2: Data link layer</a></li>
                <li><a class="content_sub_topic">Layer 3: Network layer</a></li>
                <li><a class="content_sub_topic">Layer 4: Transport layer</a></li>
                <li><a class="content_sub_topic">Layer 5: Session layer</a></li>
                <li><a class="content_sub_topic">Layer 6: Presentation layer</a></li>
                <li><a class="content_sub_topic">Layer 7: Application layer</a></li>
                <li><a href="topic_discussion.php" class="content_sub_topic content_active_link">Discussion</a></li>
            </ul>
        </ul>    
</div> <!-- Sidebox container -->

            </div> <!-- Topic sidebox wrapper -->
        </div> <!-- Two col layout side col -->

</div> <!-- Two col layout wrapper -->

</div> <!-- Global content container -->

<?php require "../components/html_end.php"?>