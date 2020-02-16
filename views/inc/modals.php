MODALS -->

<!-- Wrong Login Creds Modal -->
     <div class="modal modal-danger fade" id="modal-wrongLogin" style="color: white;font-weight: bolder;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="font-weight: bolder">ERROR: Your Registration Number or Password is INVALID!</h4>
              </div>
              <div class="modal-body">
                <p style="color: white">If your think this is a mistake please contact the <a href="" style="color: white;font-weight: bolder;">Administrator <i class="fa fa-user"></i> </a></p>
              </div>
              <div class="modal-footer">
                <a href="" style="color: white">Or Change Your Password <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal-->

<!-- Fill out fields for new news feed modal -->
          <div class="modal modal-warning fade" id="modal-newsFeedFieldsRequired">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Are you sure you want to delete this newsfeed? -->
         <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center"><b>Warning!!!</b></h4>
              </div>
              <div class="modal-body">
                <p class="text-center"><b>You are about to delete a post, proceed?</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">NO <i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-outline">Yes Delete <i class="fa fa-trash"></i></button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal 

        <!-- View single news feed -->
          <div class="modal modal-default fade" id="modal-viewSingleNewsFeed">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $newsfeed['title']; ?></h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->