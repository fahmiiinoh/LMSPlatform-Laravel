@extends ('admin.admin_dashboard')
@section('admin') 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

                <div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add SubCategory</h5>
								<form class="row g-3" action="{{route('store.sub.category')}}" method="post" id="categoryForm" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group col-md-6">

                                        <label for="input1" class="form-label">Category Name</label>
                                        <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                        <option selected="" disabled>Select a category</option>
                                        @foreach ( $category as $categorylist )
                                        <option value="{{$categorylist->id}}">{{$categorylist->category_name}}</option>
                                        @endforeach

                                        </select>

									</div>

									<div class="form-group col-md-6">
										<label for="input1" class="form-label">SubCategory Name</label>
										<input type="text" class="form-control" name="sub_category_name" id="sub_category_name" >
									</div>

			
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Save Changes</button>
										</div>
									</div>
								</form>
							</div>
						</div>

			</div>


            <script type="text/javascript">
                    $(document).ready(function (){
                        $('#categoryForm').validate({
                            rules: {
                                sub_category_name: {
                                    required : true,
                                }, 
                                category_id: {
                                    required : true,
                                }, 
                                
                            },
                            messages :{
                                sub_category_name: {
                                    required : 'Please Enter SubCategory Name',
                                }, 
                                category_id: {
                                    required : 'Please Select a Category ',
                                }, 
                                

                            },
                            errorElement : 'span', 
                            errorPlacement: function (error,element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight : function(element, errorClass, validClass){
                                $(element).addClass('is-invalid');
                            },
                            unhighlight : function(element, errorClass, validClass){
                                $(element).removeClass('is-invalid');
                            },
                        });
                    });
                    
                </script>


@endsection