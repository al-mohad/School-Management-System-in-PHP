<form method="POST">
  <b>School</b> System | News Posts
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php if(isset($topicHeader)){echo $topicHeader;}else{echo "Latest News Feed Posts";} ?></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th></th>
                  <th>Author</th>
                  <th>Date</th>
                  <th>Topic</th>
                  <th>News</th>
                  <th>Action</th>
                </tr>
                <?php if(!$topics){$topicHeader ="NO NEWS FEED";} else{ foreach($topics as $topic): ?>
                <tr>
                  <td></td>
                  <td><?php echo $topic['author']; ?></td>
                  <td><?php echo $topic['date']; ?></td>
                  <td><?php echo $topic['title']; ?></td>
                  <td><?php echo $topic['body']; ?></td>
                  <td>
                    <a href="../../views/admin/newsFeed.php?id=<? echo $topic['id']; ?>" id="<?php $topic['id']?>" name="viewSingleNewsFeed" data-toggle="modal" data-target="#modal-viewSingleNewsFeed" style="color: blue">
                      <span class="fa fa-eye"></span>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="" style="color: green">
                      <span class="fa fa-edit"></span>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="" data-toggle="modal" data-target="#modal-warning" style="color: red">
                      <span class="fa fa-trash"></span>
                    </a>&nbsp;&nbsp;&nbsp;
                  </td>
                </tr>
              <?php endforeach;} ?>
              </table>
              <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</form>