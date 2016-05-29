<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

          <!-- Modal content-->
          <form  ng-submit="add()">
          <div class="modal-content">
            <div class="modal-header">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="modal-title">Create a Customer</h4>
                </div>
                
              </div>
            </div>
            
            <div class="modal-body">
              

              <div class="row">
                
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Category</span>
                        <input type="text" class="form-control" ng-model="name" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">Status</span>
                        <select class="form-control" required ng-model="status">
                          <option value="">None</option>
                          <option value="1">Active</option>
                          <option value="2">Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
          </div>
          </form>
        </div>
      </div>