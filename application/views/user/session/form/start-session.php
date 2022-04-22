<form id="form-session" class="m-t" role="form">
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control" placeholder="Full Name" name="full_name" required="">
    </div>
    <div class="form-group">
        <label>Division</label>
        <input type="text" class="form-control" placeholder="Division Name" name="division_name" required="">
    </div>
    <div class="form-group">
        <label>Kehadiran</label>
        <select class="form-control" name="status">
            <option value="1">Hadir</option>
            <option value="0">Tidak Hadir</option>
        </select>
    </div>
    <button id="btn-start-session" type="submit" class="btn btn-primary block full-width m-b"><i class="fa fa-sign-in"></i> Submit</button>
</form>
<script>
    localStorage.clear();
</script>