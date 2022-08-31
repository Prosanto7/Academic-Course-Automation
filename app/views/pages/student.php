<?php require APPROOT . '/views/inc/header.php'; ?>
    
    <div class="container mt-5 mb-5">
        <form method = "POST">
            <div class="form-group mb-3">
                <label class="form-label">Session</label>
                <select name="year" class="form-control">
                    <option value="2016-17">2020-21</option>
                    <option value="2016-17">2019-20</option>
                    <option value="2016-17">2018-19</option>
                    <option value="2016-17">2017-18</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Semester</label>
                <select name="Semester" class="form-control">
                    <option value="1">1rst</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4rth</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Course Code</label>
                <input type="text" class="form-control" name="code" placeholder="Eg - CSE-3103" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Roll Number</label>
                <input type="text" class="form-control" name="roll" placeholder="Eg - ASH1925005M" required>
                <span class="form-text">HHH/BB/DD/RRR/S where HHH : Hall, BB : Batch , DD : Department, RRR : Roll, S : Sex</span>
            </div>

            <button class="btn btn-primary">Show Details</button>

        </form>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>