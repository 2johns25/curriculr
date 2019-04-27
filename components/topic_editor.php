<div class="topic_editor_container">
<form method="POST" action="post_topic">
  <textarea id="summernote" name="editordata"></textarea>
</form>

<script>
     $(document).ready(function() {
        $('#summernote').summernote({
    
        codeviewFilter: false,
        codeviewIframeFilter: true,
        minHeight: 450,
        maxHeight: 450
        });
    });
</script>

</div> <!-- Topic editor container -->