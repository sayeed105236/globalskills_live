<div class="modal fade" id="FlipCardAdd" tabindex="-1" role="dialog" aria-labelledby="FlipCardAdd"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FlipCardAdd">Add FlipCard</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('flipcard-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="custom select">Select Course</label>
                        <select class="form-control" name="course_id">
                          <option label="Choose Course"></option>
                          <?php foreach ($course as $item): ?>
                            <option value="{{$item->id}}">{{$item->course_title}}</option>
                          <?php endforeach; ?>
                        </select>
                      </div>


                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" aria-describedby="question"
                               placeholder="Question">

                    </div>
                    <div class="form-group">
                        <label for="vimeo_id">Answer</label>
                        <input type="text" class="form-control" name="answer" aria-describedby="answer"
                               placeholder="Answer">

                    </div>
                    <div class="form-group">
                        <label for="Hints 1">Hints 1</label>
                        <input type="text" class="form-control" name="hints1" aria-describedby="hints1"
                               placeholder="Hints 1">

                    </div>
                    <div class="form-group">
                        <label for="Hints 2">Hints 2</label>
                        <input type="text" class="form-control" name="hints2" aria-describedby="hints2"
                               placeholder="Hints 2">
                    </div>
                    <div class="form-group">
                        <label for="Hints 3">Hints 3</label>
                        <input type="text" class="form-control" name="hints3" aria-describedby="hints3"
                               placeholder="Hints 3">
                    </div>
                    <div class="form-group">
                        <label for="Hints 4">Hints 4</label>
                        <input type="text" class="form-control" name="hints4" aria-describedby="hints4"
                               placeholder="Hints 4">

                    </div>
                    <div class="form-group">
                        <label for="Hints 4">Time</label>
                        <input type="text" class="form-control" name="time" aria-describedby="time"
                               placeholder="Hints 4">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file"
                               onchange="previewImage(this)">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
