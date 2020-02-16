    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<br>
    <form method="post" action="">
      <div class="container" style="padding-right: 60px">
        <!-- <div id="summernote"></div> -->
        <h2 class="text-center" style="font-weight: bolder;">Create a New News Feed <span class="fa fa-pencil"></span></h2>
        <hr>
        <label>Title:</label>
        <input type="text" name="title" class="form-control" placeholder="Type your topic..">
        <br>
        <label>Body:</label>
        <textarea id="summernote" name="body" class="form-control"></textarea>
        <hr>
      </div>
      <div class="container">
        <input type="submit" name="publish_feed" class="btn btn-primary btn-lg" value="Publish">
       <p>
        <?php if(isset($status)): ?>
          <?php echo $status; ?>
        <?php endif; ?>
      </div>
    </form>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>s