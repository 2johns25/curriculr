<div class="topic_editor_container">
<form method="POST" action="post_topic">
  <textarea id="summernote" name="editordata"></textarea>
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