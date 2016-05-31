<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <form  ng-submit="saveCustomer()">
          <div class="modal-content">
            <div class="modal-header">
              <div class="row">
                <div class="col-md-8">
                  <h4 class="modal-title">Create a Customer</h4>
                </div>
                <div class="col-md-4" ng-init="manipulate_code()">
                  <input type="hidden" ng-model="id">
                     Code: <span class="label label-danger" ng-model="ccode">{{ccode}}</span>
                </div>
              </div>
            </div>
            
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label>
                      <input type="radio" ng-model="type" value="organization" required />
                      Organization
                    </label>
                    <label>
                      <input type="radio" ng-model="type"  value="individual"/>
                      Individual
                    </label>
                  </div>
                </div>
                
              </div>

              <div class="row">
                
                  <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Full Name</span>
                          <input type="text" ng-model="fullName" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Phone</span>
                          <input type="text" ng-model="phone" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Mobile</span>
                          <input type="text" ng-model="mobile" class="form-control" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Fax</span>
                          <input type="text"  ng-model="fax" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Primary-Email</span>
                            <input type="email"  ng-model="pmail" class="form-control" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Secondary-Email</span>
                            <input type="email" ng-model="smail" class="form-control" required>
                          </div>
                      </div>


                      <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Contact Person</span>
                            <input type="text" ng-model="cperson" class="form-control" required>
                          </div>
                      </div>
                    
                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Website</span>
                            <input type="text" ng-model="website" class="form-control">
                          </div>
                    </div>

                    <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Country</span>
                            <input type="text" ng-model="country" class="form-control" required>
                          </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Province</span>
                          <input type="text" ng-model="province" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">City</span>
                          <input type="text" ng-model="city" class="form-control" required>
                        </div>
                    </div>   

                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Location</span>
                          <input type="text" ng-model="location" class="form-control">
                        </div>
                    </div>                 

                    <div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon">Address</span>
                          <input type="text" ng-model="address" class="form-control">
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