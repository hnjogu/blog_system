    <!-- modal form start here-->
    <div class="modal fade editcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <form action="<?= route('update.category.details') ?>" method="post" id="update-category-form">
                        @csrf
                         <input type="hidden" name="cid">
                         <div class="form-group">
                             <label for="">Category Name</label>
                             <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                             <span class="text-danger error-text category_name_error"></span>
                         </div>
                         <div class="form-group">
                             <label for="">Sub Category</label>
                             <input type="text" class="form-control" name="sub_category" placeholder="Enter Sub Category">
                             <span class="text-danger error-text sub_category_error"></span>
                         </div>
                         <div class="form-group">
                             <button type="submit" class="btn btn-block btn-success">Save Changes</button>
                         </div>
                     </form>

                </div>
            </div>
        </div>
    </div>
    <!-- modal form end here-->