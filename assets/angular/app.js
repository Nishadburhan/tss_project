var app=angular.module('invoice_app',[]);
/* Module-Customer:start*/
app.controller('customerCtrl', function($http, $scope, $log) {
	// $log.info('Working');
	// $scope.type="";
	// $scope.customers=[];
	$scope.id='-1',
	$scope.saveCustomer=function() {
		$http.post('customer/save_customer', {
				'id':$scope.id,
				'code':$scope.ccode,
				'type':$scope.type,
	            'fname' : $scope.fullName, 
	            'phone' : $scope.phone, 
	            'mobile' : $scope.mobile,
	            'fax':$scope.fax,
	            'pmail':$scope.pmail,
	            'smail':$scope.smail,
	            'cperson':$scope.cperson,
	            'website':$scope.website,
	            'country':$scope.country,
	            'province':$scope.province,
	            'city':$scope.city,
	            'location':$scope.location,
	            'address':$scope.address
	        }
	    ).success(function (data, status, headers, config) {
	        console.log(data);
	        // tell the user new product was created
	        // Materialize.toast(data, 4000);
	         
	        // close modal
	        // $('#modal-product-form').closeModal();
	        $('#myModal').modal('toggle');
	         
	        // clear modal content
	        // $scope.clearForm();
	         
	        // refresh the list
	        $scope.formReset();
	        $scope.manipulate_code();
	        $scope.show_all();
	        toastr.success('Successfully Added!');
	    });
	}

	$scope.formReset=function() {
		$scope.id="-1";
		$scope.type="";
	    $scope.fullName=""; 
	    $scope.phone=""; 
	    $scope.mobile="";
	    $scope.fax="";
	    $scope.pmail="";
	    $scope.smail="";
	    $scope.cperson="";
	    $scope.website="";
	    $scope.country="";
	    $scope.province="";
	    $scope.city="";
	    $scope.location="";
	    $scope.address="";
	}

	$scope.show_all = function() {
		$http.get('customer/get_all').success(function(data) {
			$scope.customers=data;
		})
	}

	$scope.manipulate_code = function() {
		$http.get('customer/manipulate_code').success(function(response) {
			$scope.ccode='';
			if(response.code<1) {
				$scope.ccode=parseInt(response.code)+1000;
			}else {
				$scope.ccode=parseInt(response.code)+1;
			}

			// $log.info($scope.ccode);
		})	
	}

	$scope.edit_row = function(id) {
		$http.post('customer/edit_row', {
			'id':id
		}).success(function(data) {
			$scope.id=data.id;
			$scope.ccode=data.code;
			$scope.type=data.type;
		    $scope.fullName=data.fname;
		    $scope.phone=data.phone; 
		    $scope.mobile=data.mobile;
		    $scope.fax=data.fax;
		    $scope.pmail=data.pmail;
		    $scope.smail=data.smail;
		    $scope.cperson=data.cperson;
		    $scope.website=data.website;
		    $scope.country=data.country;
		    $scope.province=data.province;
		    $scope.city=data.city;
		    $scope.location=data.location;
		    $scope.address=data.address;
		    $('#myModal').modal('toggle');

		});
	}

	$scope.delete_row =function(id) {
		if (confirm('Are you sure, Do you want to delete?')) {
			$http.post('customer/delete', {
				'id':id
			}).success(function(data) {
				$scope.show_all();
				toastr.error('Successfully Deleted!');
			});	
		}

	}
});
/*Module-Customer:end*/

/*Module-Product:start*/
app.controller('categoriesCtrl', function($http, $scope, $log) {
	$scope.id='-1',
	$scope.add=function() {
		$http.post('categories/add', {
				'id':$scope.id,
				'name':$scope.name,
				'status':$scope.status
				// 'code':$scope.ccode,
				// 'type':$scope.type,
	   //          'fname' : $scope.fullName, 
	   //          'phone' : $scope.phone, 
	   //          'mobile' : $scope.mobile,
	   //          'fax':$scope.fax,
	   //          'pmail':$scope.pmail,
	   //          'smail':$scope.smail,
	   //          'cperson':$scope.cperson,
	   //          'website':$scope.website,
	   //          'country':$scope.country,
	   //          'province':$scope.province,
	   //          'city':$scope.city,
	   //          'location':$scope.location,
	   //          'address':$scope.address
	        }
	    ).success(function (data, status, headers, config) {
	        console.log(data);
	        // tell the user new product was created
	        // Materialize.toast(data, 4000);
	         
	        // close modal
	        // $('#modal-product-form').closeModal();
	        $('#myModal').modal('toggle');
	         
	        // clear modal content
	        // $scope.clearForm();
	         
	        // refresh the list
	        $scope.formReset();
	        $scope.manipulate_code();
	        $scope.lists();
	        toastr.success('Category Saved!');
	    });
	}

	$scope.formReset=function() {
		$scope.id="-1";
		$scope.name="";
		$scope.status="";
		// $scope.type="";
	 //    $scope.fullName=""; 
	 //    $scope.phone=""; 
	 //    $scope.mobile="";
	 //    $scope.fax="";
	 //    $scope.pmail="";
	 //    $scope.smail="";
	 //    $scope.cperson="";
	 //    $scope.website="";
	 //    $scope.country="";
	 //    $scope.province="";
	 //    $scope.city="";
	 //    $scope.location="";
	 //    $scope.address="";
	}

	$scope.lists = function() {
		$http.get('categories/lists').success(function(response) {
			$scope.data=response;
		})
	}

	$scope.manipulate_code = function() {
		$http.get('customer/manipulate_code').success(function(response) {
			$scope.ccode='';
			if(response.code<1) {
				$scope.ccode=parseInt(response.code)+1000;
			}else {
				$scope.ccode=parseInt(response.code)+1;
			}

			// $log.info($scope.ccode);
		})	
	}

	$scope.edit = function(id) {
		$http.post('categories/edit', {
			'id':id
		}).success(function(data) {
		
			$scope.id=data.id;
			$scope.name=data.name;
			$scope.status=data.status;
			// $scope.ccode=data.code;
			// $scope.type=data.type;
		 //    $scope.fullName=data.fname;
		 //    $scope.phone=data.phone; 
		 //    $scope.mobile=data.mobile;
		 //    $scope.fax=data.fax;
		 //    $scope.pmail=data.pmail;
		 //    $scope.smail=data.smail;
		 //    $scope.cperson=data.cperson;
		 //    $scope.website=data.website;
		 //    $scope.country=data.country;
		 //    $scope.province=data.province;
		 //    $scope.city=data.city;
		 //    $scope.location=data.location;
		 //    $scope.address=data.address;
		    $('#myModal').modal('toggle');

		});
	}

	$scope.delete=function(id) {
		if (confirm('Are you sure, Do you want to delete?')) {
			$http.post('categories/delete', {
				'id':id
			}).success(function(data) {
				$scope.list();
				toastr.error('Successfully Deleted!');
			});	
		}

	}
});
