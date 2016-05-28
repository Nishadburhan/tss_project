<controller ng-controller="productCtrl">
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><input type="text" name="" class="form-control" ng-model="search" placeholder="Search:-"></h3>
                  <div class="box-tools pull-right clearfix">
                    <!-- <button class="btn btn-info" ><i class="fa fa-plus"></i></button><br/> -->
                    <a href="#" data-toggle="modal" data-target="#myModal" ng-click="formReset()" class="btn btn-sm btn-info btn-flat">Add New Customer</a>
                    <!-- <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Customer</th>
                          <th>Code</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th><i class="fa fa-level-down" aria-hidden="true"></i></th>
                        </tr>
                      </thead>
                      <tbody ng-init="show_all()">
                        <tr ng-repeat="c in customers | filter:search">
                          <td>{{$index + 1}}</td>
                          <td>{{c.fname}}</td>
                          <td>{{c.code}}</td>
                          <td>{{c.mobile}}</td>
                          <td>{{c.pmail}}</td>
                          <td>
                            <a href="#" class="btn btn-warning" ng-click="edit_row(c.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;
                            <a href="#" class="btn btn-danger" ng-click="delete_row(c.id)" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div>

      <!-- Modal -->
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
</controller>