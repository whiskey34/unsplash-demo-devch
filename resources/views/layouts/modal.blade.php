<div class="modal fade" id="addPhotoModal" tabindex="-1" aria-labelledby="addPhotoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h5 class="modal-title f-5" id="addPhotoModal">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <form action="/upload" method="POST">
          @csrf
          <div class="modal-body">
              <h2>Add a new photo</h2>
              
                <div class="mb-3">
                    <label for="label" class="form-label">Label</label>
                    <input type="text" name="label" class="form-control" id="label" placeholder="Ex : Lost city">
                </div>
                <div class="mb-3">
                    <label for="photoUrl" class="form-label">Photo URL</label>
                    <input type="text" name="photo_url" class="form-control" id="photoUrl" placeholder="https://unsplash.com/photo-2312312494-8121028?12312">
                </div>
  
             
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-light bt-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success bt-submit" role="submit">Submit</button>
          </div>
          

        </form>
      </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title f-5" id="addPhotoModal">Delete Photos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
          <div class="modal-body">
              <p>Are you sure want to delete this photos ?</p>
          </div>
          
         
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              
              <form action="" method="post">

                <a href="#" id="modalDeleteImg" class="btn btn-danger">Delete</a>
              </form>
            </div>
          


      </div>
    </div>
</div>