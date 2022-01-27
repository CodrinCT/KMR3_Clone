<div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Equipment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
          <form action="{{ route('equipments.store') }}" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control" id="category" aria-describedby="category" name="category" required>
          
            </div>
            <div class="form-group">
              <label for="parent_id">Parent ID</label>
              <input type="number" class="form-control" id="parent_id" aria-describedby="parent_id" name="parent_id" required>
         
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            {{-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" class="btn btn-primary" id="addEq">ADD</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
        
      </div>
    </div>
  </div>

 