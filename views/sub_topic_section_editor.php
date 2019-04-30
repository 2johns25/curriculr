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
            
            <div class="topic_editor_container">
<form method="POST" action="post_topic">
  <textarea id="summernote" name="editordata">


     <h1 class="title">Wired media</h1>

<h2 class="sub_heading">Sub-heading</h2>

<p class="normal_para">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

 <div class="topic_content_image_container">
    <div class="topic_content_image">
    <img src="../assets/images/network1.jpg"/>
    </div>
    <p class="figure_caption">Figure caption</p>
</div>

</div> <!-- Topic content container -->


  </textarea>
</form>

<script>
     $(document).ready(function() {
        $('#summernote').summernote({
  
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']]
      ],

        codeviewFilter: false,
        codeviewIframeFilter: true,
        minHeight: 450,
        maxHeight: 450
        });
    });
</script>

</div> <!-- Topic editor container -->

            </div>
        </div> <!-- Two col layout main col -->
            <div class="two_col_layout_side_col two_col_layout_side_col_reverse">
            <div class="topic_sidebox_wrapper">
                        <div class="sidebox_container">
                    <p class="sidebox_header">Topic contents</p>
                    <ul class="topic_box_list">
                        <li><a href="topic_editor.php" class="topic_title">Introduction to the OSI Network Model</a></li>
                        <ul class="topic_box_subtopic_list">
                            <li><a href="sub_topic_editor.php" class="content_sub_topic">Layer 1: Physical layer</a></li>
                                <ul class="topic_box_sub_subtopic_list">
                                    <li><a href="sub_topic_section_editor.php" class="content_sub_topic content_active_link">Wired media</a></li>
                                    <li><a class="content_sub_topic">Wireless media</a></li>
                                </ul>
                            <li><a class="content_sub_topic">Layer 2: Data link layer</a></li>
                            <li><a class="content_sub_topic">Layer 3: Network layer</a></li>
                            <li><a class="content_sub_topic">Layer 4: Transport layer</a></li>
                            <li><a class="content_sub_topic">Layer 5: Session layer</a></li>
                            <li><a class="content_sub_topic">Layer 6: Presentation layer</a></li>
                            <li><a class="content_sub_topic">Layer 7: Application layer</a></li>
                            <li><a href="#" class="content_sub_topic">Discussion</a></li>
                        </ul>
                    </ul>    
            </div> <!-- Sidebox container -->
            </div> <!-- Topic sidebox wrapper -->
        </div> <!-- Two col layout side col -->

</div> <!-- Two col layout wrapper -->

</div> <!-- Global content container -->

<?php require "../components/html_end.php"?>